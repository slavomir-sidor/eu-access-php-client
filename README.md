# OpenAPIClient-php

EU Access Users API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new EC\EUAccess\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \EC\EUAccess\Client\Model\AttributeCreateRequest(); // \EC\EUAccess\Client\Model\AttributeCreateRequest | Attribute object

try {
    $result = $apiInstance->createAttributeValue($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->createAttributeValue: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://eu-access-admin-int-host:14222/eu-access/admin-int/usersData*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttributesApi* | [**createAttributeValue**](docs/Api/AttributesApi.md#createattributevalue) | **POST** /v1.0/attributes | Create a new attribute for the user identity
*AttributesApi* | [**deleteAttributeValue**](docs/Api/AttributesApi.md#deleteattributevalue) | **DELETE** /v1.0/attributes/{attributeId} | Deletes an attribute profile
*AttributesApi* | [**getAttributeKeyList**](docs/Api/AttributesApi.md#getattributekeylist) | **GET** /v1.0/attributes/keys | Get the attributes business codes
*AttributesApi* | [**getAttributeValue**](docs/Api/AttributesApi.md#getattributevalue) | **GET** /v1.0/attributes/{attributeId} | Get the attribute with the given id
*AttributesApi* | [**getAttributes**](docs/Api/AttributesApi.md#getattributes) | **GET** /v1.0/attributes | Get all attributes for an user identity
*AttributesApi* | [**updateAttributeValue**](docs/Api/AttributesApi.md#updateattributevalue) | **PUT** /v1.0/attributes/{attributeId} | Update the attribute value with the given id
*IdentitiesApi* | [**createUserIdentity**](docs/Api/IdentitiesApi.md#createuseridentity) | **POST** /v1.0/identities | Create an identity for the actor
*IdentitiesApi* | [**deleteIdentity**](docs/Api/IdentitiesApi.md#deleteidentity) | **DELETE** /v1.0/identities/{identityId} | Deletes an identity
*IdentitiesApi* | [**getUserIdentities**](docs/Api/IdentitiesApi.md#getuseridentities) | **GET** /v1.0/identities | Get user identities
*IdentitiesApi* | [**getUserIdentity**](docs/Api/IdentitiesApi.md#getuseridentity) | **GET** /v1.0/identities/{identityId} | Get the details of the user identity
*ProfileAssignmentsApi* | [**createProfileAssignment**](docs/Api/ProfileAssignmentsApi.md#createprofileassignment) | **POST** /v1.0/profileAssignments | Create a profile assignment for an identity
*ProfileAssignmentsApi* | [**deleteProfileAssignment**](docs/Api/ProfileAssignmentsApi.md#deleteprofileassignment) | **DELETE** /v1.0/profileAssignments/{profileAssignmentId} | Deletes a profile assignment
*ProfileAssignmentsApi* | [**getProfileAssignment**](docs/Api/ProfileAssignmentsApi.md#getprofileassignment) | **GET** /v1.0/profileAssignments/{profileAssignmentId} | Get the profile assignment with the given id
*ProfileAssignmentsApi* | [**getProfileAssignments**](docs/Api/ProfileAssignmentsApi.md#getprofileassignments) | **GET** /v1.0/profileAssignments | Get profile assignments for the given identity id
*ProfileAssignmentsApi* | [**updateProfileAssignment**](docs/Api/ProfileAssignmentsApi.md#updateprofileassignment) | **PUT** /v1.0/profileAssignments/{profileAssignmentId} | Update a profile assignment with the given id
*UsersApi* | [**createNaturalUser**](docs/Api/UsersApi.md#createnaturaluser) | **POST** /v1.0/users | Create an user as natural person
*UsersApi* | [**getListOfUsers**](docs/Api/UsersApi.md#getlistofusers) | **GET** /v1.0/users | Get list of users

## Models

- [Attribute](docs/Model/Attribute.md)
- [AttributeCreateRequest](docs/Model/AttributeCreateRequest.md)
- [AttributeCreateRequestAllOf](docs/Model/AttributeCreateRequestAllOf.md)
- [AttributeId](docs/Model/AttributeId.md)
- [AttributeKeyName](docs/Model/AttributeKeyName.md)
- [AttributeUpdateRequest](docs/Model/AttributeUpdateRequest.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [ErrorType](docs/Model/ErrorType.md)
- [Identity](docs/Model/Identity.md)
- [IdentityBase](docs/Model/IdentityBase.md)
- [IdentityCreateRequest](docs/Model/IdentityCreateRequest.md)
- [IdentityId](docs/Model/IdentityId.md)
- [ProfileAssignment](docs/Model/ProfileAssignment.md)
- [ProfileAssignmentCreateRequest](docs/Model/ProfileAssignmentCreateRequest.md)
- [ProfileAssignmentId](docs/Model/ProfileAssignmentId.md)
- [ProfileAssignmentUpdateRequest](docs/Model/ProfileAssignmentUpdateRequest.md)
- [QaaLevel](docs/Model/QaaLevel.md)
- [ScopedProfile](docs/Model/ScopedProfile.md)
- [TypeOfPerson](docs/Model/TypeOfPerson.md)
- [User](docs/Model/User.md)
- [UserBase](docs/Model/UserBase.md)
- [UserCreateRequest](docs/Model/UserCreateRequest.md)
- [UserCreateRequestAllOf](docs/Model/UserCreateRequestAllOf.md)
- [UserId](docs/Model/UserId.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

DIGIT-EU-ACCESS@ec.europa.eu

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
