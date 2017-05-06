<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2017 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Model\Tests\Swagger;

use PSX\Model\Swagger\Contact;
use PSX\Model\Swagger\ExternalDocs;
use PSX\Model\Swagger\Header;
use PSX\Model\Swagger\Headers;
use PSX\Model\Swagger\Info;
use PSX\Model\Swagger\License;
use PSX\Model\Swagger\Operation;
use PSX\Model\Swagger\Parameter;
use PSX\Model\Swagger\Path;
use PSX\Model\Swagger\Response;
use PSX\Model\Swagger\Responses;
use PSX\Model\Swagger\Swagger;
use PSX\Schema\Parser\Popo\Dumper;

/**
 * SwaggerTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class SwaggerTest extends \PHPUnit_Framework_TestCase
{
    public function testModel()
    {
        $contact = new Contact();
        $contact->setName('Swagger API Team');
        $contact->setEmail('apiteam@swagger.io');
        $contact->setUrl('http://swagger.io');

        $license = new License();
        $license->setName('MIT');
        $license->setUrl('http://github.com/gruntjs/grunt/blob/master/LICENSE-MIT');
        
        $info = new Info();
        $info->setVersion('1.0.0');
        $info->setTitle('Swagger Petstore');
        $info->setDescription('A sample API that uses a petstore as an example to demonstrate features in the swagger-2.0 specification');
        $info->setTermsOfService('http://swagger.io/terms/');
        $info->setContact($contact);
        $info->setLicense($license);

        $petSchema = json_decode('{ "required": [ "id", "name" ], "properties": { "id": { "type": "integer", "format": "int64" }, "name": { "type": "string" }, "tag": { "type": "string" } } }');
        $petsSchema = json_decode('{ "type": "array", "items": { "$ref": "#/definitions/Pet" } }');
        $errorSchema = json_decode('{ "required": [ "code", "message" ], "properties": { "code": { "type": "integer", "format": "int32" }, "message": { "type": "string" } } }');

        $externalDocs = new ExternalDocs();
        $externalDocs->setDescription('find more info here');
        $externalDocs->setUrl('https://swagger.io/about');

        $swagger = new Swagger();
        $swagger->setInfo($info);
        $swagger->setExternalDocs($externalDocs);
        $swagger->setHost('petstore.swagger.io');
        $swagger->setBasePath('/v1');
        $swagger->setSchemes(['http']);
        $swagger->setConsumes(['application/json']);
        $swagger->setProduces(['application/json']);
        $swagger->addDefinition('Pet', $petSchema);
        $swagger->addDefinition('Pets', $petsSchema);
        $swagger->addDefinition('Error', $errorSchema);

        $parameters = [];
        
        $parameter = new Parameter();
        $parameter->setName('limit');
        $parameter->setIn('query');
        $parameter->setRequired(false);
        $parameter->setDescription('How many items to return at one time (max 100)');
        $parameter->setType('integer');
        $parameter->setFormat('int32');

        $parameters[] = $parameter;

        $header = new Header();
        $header->setType('string');
        $header->setDescription('A link to the next page of responses');
        
        $headers = new Headers();
        $headers['x-next'] = $header;

        $responses = new Responses();
        
        $response = new Response();
        $response->setDescription('An paged array of pets');
        $response->setHeaders($headers);
        $response->setSchema((object) ['$ref' => '#/definitions/Pets']);

        $responses['200'] = $response;

        $response = new Response();
        $response->setDescription('unexpected error');
        $response->setSchema((object) ['$ref' => '#/definitions/Error']);

        $responses['default'] = $response;

        $operation = new Operation();
        $operation->setSummary('List all pets');
        $operation->setOperationId('listPets');
        $operation->setTags(['pets']);
        $operation->setParameters($parameters);
        $operation->setResponses($responses);
        
        $path = new Path();
        $path->setGet($operation);

        $responses = new Responses();

        $response = new Response();
        $response->setDescription('Null response');

        $responses['201'] = $response;

        $response = new Response();
        $response->setDescription('unexpected error');
        $response->setSchema((object) ['$ref' => '#/definitions/Error']);

        $responses['default'] = $response;
        
        $operation = new Operation();
        $operation->setSummary('Create a pet');
        $operation->setOperationId('createPets');
        $operation->setTags(['pets']);
        $operation->setResponses($responses);

        $path->setPost($operation);

        $swagger->addPath('/pets', $path);

        $parameters = [];
        
        $parameter = new Parameter();
        $parameter->setName('petId');
        $parameter->setIn('path');
        $parameter->setRequired(true);
        $parameter->setDescription('The id of the pet to retrieve');
        $parameter->setType('string');

        $parameters[] = $parameter;

        $responses = new Responses();

        $response = new Response();
        $response->setDescription('Expected response to a valid request');
        $response->setSchema((object) ['$ref' => '#/definitions/Pets']);
        
        $responses['200'] = $response;

        $response = new Response();
        $response->setDescription('unexpected error');
        $response->setSchema((object) ['$ref' => '#/definitions/Error']);

        $responses['default'] = $response;

        $operation = new Operation();
        $operation->setSummary('Info for a specific pet');
        $operation->setOperationId('showPetById');
        $operation->setTags(['pets']);
        $operation->setParameters($parameters);
        $operation->setResponses($responses);
        
        $path = new Path();
        $path->setGet($operation);

        $swagger->addPath('/pets/{petId}', $path);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($swagger), JSON_PRETTY_PRINT); 
        $expect = <<<'JSON'
{
    "swagger": "2.0",
    "info": {
        "title": "Swagger Petstore",
        "version": "1.0.0",
        "description": "A sample API that uses a petstore as an example to demonstrate features in the swagger-2.0 specification",
        "termsOfService": "http:\/\/swagger.io\/terms\/",
        "contact": {
            "name": "Swagger API Team",
            "url": "http:\/\/swagger.io",
            "email": "apiteam@swagger.io"
        },
        "license": {
            "name": "MIT",
            "url": "http:\/\/github.com\/gruntjs\/grunt\/blob\/master\/LICENSE-MIT"
        }
    },
    "host": "petstore.swagger.io",
    "basePath": "\/v1",
    "schemes": [
        "http"
    ],
    "consumes": [
        "application\/json"
    ],
    "produces": [
        "application\/json"
    ],
    "paths": {
        "\/pets": {
            "get": {
                "tags": [
                    "pets"
                ],
                "summary": "List all pets",
                "operationId": "listPets",
                "parameters": [
                    {
                        "description": "How many items to return at one time (max 100)",
                        "name": "limit",
                        "in": "query",
                        "required": false,
                        "type": "integer",
                        "format": "int32"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "An paged array of pets",
                        "schema": {
                            "$ref": "#\/definitions\/Pets"
                        },
                        "headers": {
                            "x-next": {
                                "description": "A link to the next page of responses",
                                "type": "string"
                            }
                        }
                    },
                    "default": {
                        "description": "unexpected error",
                        "schema": {
                            "$ref": "#\/definitions\/Error"
                        }
                    }
                }
            },
            "post": {
                "tags": [
                    "pets"
                ],
                "summary": "Create a pet",
                "operationId": "createPets",
                "responses": {
                    "201": {
                        "description": "Null response"
                    },
                    "default": {
                        "description": "unexpected error",
                        "schema": {
                            "$ref": "#\/definitions\/Error"
                        }
                    }
                }
            }
        },
        "\/pets\/{petId}": {
            "get": {
                "tags": [
                    "pets"
                ],
                "summary": "Info for a specific pet",
                "operationId": "showPetById",
                "parameters": [
                    {
                        "description": "The id of the pet to retrieve",
                        "name": "petId",
                        "in": "path",
                        "required": true,
                        "type": "string"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Expected response to a valid request",
                        "schema": {
                            "$ref": "#\/definitions\/Pets"
                        }
                    },
                    "default": {
                        "description": "unexpected error",
                        "schema": {
                            "$ref": "#\/definitions\/Error"
                        }
                    }
                }
            }
        }
    },
    "definitions": {
        "Pet": {
            "required": [
                "id",
                "name"
            ],
            "properties": {
                "id": {
                    "type": "integer",
                    "format": "int64"
                },
                "name": {
                    "type": "string"
                },
                "tag": {
                    "type": "string"
                }
            }
        },
        "Pets": {
            "type": "array",
            "items": {
                "$ref": "#\/definitions\/Pet"
            }
        },
        "Error": {
            "required": [
                "code",
                "message"
            ],
            "properties": {
                "code": {
                    "type": "integer",
                    "format": "int32"
                },
                "message": {
                    "type": "string"
                }
            }
        }
    },
    "externalDocs": {
        "description": "find more info here",
        "url": "https:\/\/swagger.io\/about"
    }
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}


