<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2018 Christoph Kappestein <christoph.kappestein@gmail.com>
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
use PSX\Model\Swagger\Scopes;
use PSX\Model\Swagger\Security;
use PSX\Model\Swagger\SecurityDefinitions;
use PSX\Model\Swagger\SecurityScheme;
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
        $expect = file_get_contents(__DIR__ . '/resources/swagger.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
    
    public function testSecurity()
    {
        $securityScheme = new SecurityScheme();
        $securityScheme->setType('oauth2');
        $securityScheme->setFlow('accessCode');
        $securityScheme->setAuthorizationUrl('http://api.phpsx.org/authorization');
        $securityScheme->setTokenUrl('http://api.phpsx.org/token');
        $securityScheme->setScopes(new Scopes(['foo' => 'Foo sope', 'bar' => 'Bar scope']));

        $securityDefinition = new SecurityDefinitions();
        $securityDefinition['app'] = $securityScheme;

        $swagger = new Swagger();
        $swagger->setHost('petstore.swagger.io');
        $swagger->setBasePath('/v1');
        $swagger->setSchemes(['http']);
        $swagger->setConsumes(['application/json']);
        $swagger->setProduces(['application/json']);
        $swagger->setSecurityDefinitions($securityDefinition);

        $path = new Path();

        $responses = new Responses();

        $response = new Response();
        $response->setDescription('Null response');

        $responses['200'] = $response;

        $security = new Security();
        $security['app'] = ['foo', 'bar'];

        $operation = new Operation();
        $operation->setSummary('Create a pet');
        $operation->setOperationId('createPets');
        $operation->setTags(['pets']);
        $operation->setResponses($responses);
        $operation->setSecurity($security);

        $path->setPost($operation);

        $swagger->addPath('/pets', $path);

        $dumper = new Dumper();
        $actual = json_encode($dumper->dump($swagger), JSON_PRETTY_PRINT);
        $expect = file_get_contents(__DIR__ . '/resources/swagger_security.json');

        $this->assertJsonStringEqualsJsonString($expect, $actual, $actual);
    }
}
