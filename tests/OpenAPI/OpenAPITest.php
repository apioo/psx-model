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

namespace PSX\Model\Tests\OpenAPI;

use PSX\Model\OpenAPI\Components;
use PSX\Model\OpenAPI\Header;
use PSX\Model\OpenAPI\Headers;
use PSX\Model\OpenAPI\Info;
use PSX\Model\OpenAPI\License;
use PSX\Model\OpenAPI\MediaType;
use PSX\Model\OpenAPI\MediaTypes;
use PSX\Model\OpenAPI\OpenAPI;
use PSX\Model\OpenAPI\Operation;
use PSX\Model\OpenAPI\Parameter;
use PSX\Model\OpenAPI\PathItem;
use PSX\Model\OpenAPI\Paths;
use PSX\Model\OpenAPI\Response;
use PSX\Model\OpenAPI\Responses;
use PSX\Model\OpenAPI\Server;
use PSX\Record\Record;
use PSX\Schema\Parser\Popo\Dumper;
use Symfony\Component\Yaml\Yaml;

/**
 * OpenAPITest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class OpenAPITest extends \PHPUnit_Framework_TestCase
{
    public function testModel()
    {
        $license = new License();
        $license->setName('MIT');

        $info = new Info();
        $info->setVersion('1.0.0');
        $info->setTitle('Swagger Petstore');
        $info->setLicense($license);

        $paths = new Paths();

        // /pets
        $parameter = new Parameter();
        $parameter->setName('limit');
        $parameter->setIn('query');
        $parameter->setDescription('How many items to return at one time (max 100)');
        $parameter->setRequired(false);
        $parameter->setSchema(Record::fromArray(['type' => 'integer', 'format' => 'int32']));

        $header = new Header();
        $header->setDescription('A link to the next page of responses');
        $header->setSchema(Record::fromArray(['type' => 'string']));

        $headers = new Headers();
        $headers->set('x-next', $header);

        $mediaType = new MediaType();
        $mediaType->setSchema(Record::fromArray(['$ref' => '#/components/schemas/Pets']));

        $content = new MediaTypes();
        $content->set('application/json', $mediaType);

        $response = new Response();
        $response->setDescription('An paged array of pets');
        $response->setHeaders($headers);
        $response->setContent($content);

        $responses = new Responses();
        $responses->set(200, $response);

        $mediaType = new MediaType();
        $mediaType->setSchema(Record::fromArray(['$ref' => '#/components/schemas/Error']));

        $content = new MediaTypes();
        $content->set('application/json', $mediaType);

        $errorResponse = new Response();
        $errorResponse->setDescription('unexpected error');
        $errorResponse->setContent($content);

        $responses->setDefault($errorResponse);

        $operation = new Operation();
        $operation->setSummary('List all pets');
        $operation->setOperationId('listPets');
        $operation->setTags(['pets']);
        $operation->setParameters([$parameter]);
        $operation->setResponses($responses);

        $pathItem = new PathItem();
        $pathItem->setGet($operation);

        $response = new Response();
        $response->setDescription('Null response');

        $responses = new Responses();
        $responses->set(201, $response);
        $responses->setDefault($errorResponse);

        $operation = new Operation();
        $operation->setSummary('Create a pet');
        $operation->setOperationId('createPets');
        $operation->setTags(['pets']);
        $operation->setResponses($responses);

        $pathItem->setPost($operation);

        $paths->set('/pets', $pathItem);

        // /pets/{petId}
        $parameter = new Parameter();
        $parameter->setName('petId');
        $parameter->setIn('path');
        $parameter->setDescription('The id of the pet to retrieve');
        $parameter->setRequired(true);
        $parameter->setSchema(Record::fromArray(['type' => 'string']));

        $mediaType = new MediaType();
        $mediaType->setSchema(Record::fromArray(['$ref' => '#/components/schemas/Pets']));

        $mediaTypes = new MediaTypes();
        $mediaTypes->set('application/json', $mediaType);

        $response = new Response();
        $response->setDescription('Expected response to a valid request');
        $response->setContent($mediaTypes);

        $responses = new Responses();
        $responses->set(200, $response);
        $responses->setDefault($errorResponse);

        $operation = new Operation();
        $operation->setSummary('Info for a specific pet');
        $operation->setOperationId('showPetById');
        $operation->setTags(['pets']);
        $operation->setParameters([$parameter]);
        $operation->setResponses($responses);

        $pathItem = new PathItem();
        $pathItem->setGet($operation);

        $paths->set('/pets/{petId}', $pathItem);

        $server = new Server();
        $server->setUrl('http://petstore.swagger.io/v1');

        // schema
        $schemas = [];

        $schemas['Pet'] = [
            'required' => ['id', 'name'],
            'properties' => [
                'id' => ['type' => 'integer', 'format' => 'int64'],
                'name' => ['type' => 'string'],
                'tag' => ['type' => 'string'],
            ]
        ];
        
        $schemas['Pets'] = [
            'type' => 'array',
            'items' => ['$ref' => '#/components/schemas/Pet'],
        ];
        
        $schemas['Error'] = [
            'required' => ['code', 'message'],
            'properties' => [
                'code' => ['type' => 'integer', 'format' => 'int32'],
                'message' => ['type' => 'string'],
            ]
        ];

        $components = new Components();
        $components->setSchemas($schemas);

        $openAPI = new OpenAPI();
        $openAPI->setInfo($info);
        $openAPI->setPaths($paths);
        $openAPI->setServers([$server]);
        $openAPI->setComponents($components);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($openAPI), JSON_PRETTY_PRINT);
        $expect = <<<'JSON'
{
    "openapi": "3.0.0",
    "info": {
        "title": "Swagger Petstore",
        "license": {
            "name": "MIT"
        },
        "version": "1.0.0"
    },
    "servers": [
        {
            "url": "http:\/\/petstore.swagger.io\/v1"
        }
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
                        "name": "limit",
                        "in": "query",
                        "description": "How many items to return at one time (max 100)",
                        "required": false,
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        }
                    }
                ],
                "responses": {
                    "default": {
                        "description": "unexpected error",
                        "content": {
                            "application\/json": {
                                "schema": {
                                    "$ref": "#\/components\/schemas\/Error"
                                }
                            }
                        }
                    },
                    "200": {
                        "description": "An paged array of pets",
                        "headers": {
                            "x-next": {
                                "description": "A link to the next page of responses",
                                "schema": {
                                    "type": "string"
                                }
                            }
                        },
                        "content": {
                            "application\/json": {
                                "schema": {
                                    "$ref": "#\/components\/schemas\/Pets"
                                }
                            }
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
                    "default": {
                        "description": "unexpected error",
                        "content": {
                            "application\/json": {
                                "schema": {
                                    "$ref": "#\/components\/schemas\/Error"
                                }
                            }
                        }
                    },
                    "201": {
                        "description": "Null response"
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
                        "name": "petId",
                        "in": "path",
                        "description": "The id of the pet to retrieve",
                        "required": true,
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "default": {
                        "description": "unexpected error",
                        "content": {
                            "application\/json": {
                                "schema": {
                                    "$ref": "#\/components\/schemas\/Error"
                                }
                            }
                        }
                    },
                    "200": {
                        "description": "Expected response to a valid request",
                        "content": {
                            "application\/json": {
                                "schema": {
                                    "$ref": "#\/components\/schemas\/Pets"
                                }
                            }
                        }
                    }
                }
            }
        }
    },
    "components": {
        "schemas": {
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
                    "$ref": "#\/components\/schemas\/Pet"
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
        }
    }
}
JSON;

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);

        // assert with yaml
        $expect = json_encode(Yaml::parse($this->getPetStoreOpenAPIYAML()));

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }

    private function getPetStoreOpenAPIYAML()
    {
        return <<<'YAML'
openapi: "3.0.0"
info:
  version: 1.0.0
  title: Swagger Petstore
  license:
    name: MIT
servers:
  - url: http://petstore.swagger.io/v1
paths:
  /pets:
    get:
      summary: List all pets
      operationId: listPets
      tags:
        - pets
      parameters:
        - name: limit
          in: query
          description: How many items to return at one time (max 100)
          required: false
          schema:
            type: integer
            format: int32
      responses:
        200:
          description: An paged array of pets
          headers:
            x-next:
              description: A link to the next page of responses
              schema:
                type: string
          content:
            application/json:    
              schema:
                $ref: "#/components/schemas/Pets"
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: "#/components/schemas/Error"
    post:
      summary: Create a pet
      operationId: createPets
      tags:
        - pets
      responses:
        201:
          description: Null response
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: "#/components/schemas/Error"
  /pets/{petId}:
    get:
      summary: Info for a specific pet
      operationId: showPetById
      tags:
        - pets
      parameters:
        - name: petId
          in: path
          required: true
          description: The id of the pet to retrieve
          schema:
            type: string
      responses:
        200:
          description: Expected response to a valid request
          content:
            application/json:
              schema:
                $ref: "#/components/schemas/Pets"
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: "#/components/schemas/Error"
components:
  schemas:
    Pet:
      required:
        - id
        - name
      properties:
        id:
          type: integer
          format: int64
        name:
          type: string
        tag:
          type: string
    Pets:
      type: array
      items:
        $ref: "#/components/schemas/Pet"
    Error:
      required:
        - code
        - message
      properties:
        code:
          type: integer
          format: int32
        message:
          type: string
YAML;
    }
}


