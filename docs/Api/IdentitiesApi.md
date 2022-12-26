# EC\EUAccess\Client\IdentitiesApi

All URIs are relative to https://eu-access-admin-int-host:14222/eu-access/admin-int/usersData, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUserIdentity()**](IdentitiesApi.md#createUserIdentity) | **POST** /v1.0/identities | Create an identity for the actor |
| [**deleteIdentity()**](IdentitiesApi.md#deleteIdentity) | **DELETE** /v1.0/identities/{identityId} | Deletes an identity |
| [**getUserIdentities()**](IdentitiesApi.md#getUserIdentities) | **GET** /v1.0/identities | Get user identities |
| [**getUserIdentity()**](IdentitiesApi.md#getUserIdentity) | **GET** /v1.0/identities/{identityId} | Get the details of the user identity |


## `createUserIdentity()`

```php
createUserIdentity($request): \EC\EUAccess\Client\Model\IdentityId
```

Create an identity for the actor

Creates an identity for a specific actor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \EC\EUAccess\Client\Model\IdentityCreateRequest(); // \EC\EUAccess\Client\Model\IdentityCreateRequest | Identity object

try {
    $result = $apiInstance->createUserIdentity($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->createUserIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\EC\EUAccess\Client\Model\IdentityCreateRequest**](../Model/IdentityCreateRequest.md)| Identity object | |

### Return type

[**\EC\EUAccess\Client\Model\IdentityId**](../Model/IdentityId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIdentity()`

```php
deleteIdentity($identity_id)
```

Deletes an identity

Deletes an identity with the specified id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identity_id = 119835; // int | The user's identity id

try {
    $apiInstance->deleteIdentity($identity_id);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->deleteIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_id** | **int**| The user&#39;s identity id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserIdentities()`

```php
getUserIdentities($user_id): \EC\EUAccess\Client\Model\Identity[]
```

Get user identities

Retrieves all user's identities based on user id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 273437; // int | The user's id

try {
    $result = $apiInstance->getUserIdentities($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getUserIdentities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| The user&#39;s id | |

### Return type

[**\EC\EUAccess\Client\Model\Identity[]**](../Model/Identity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserIdentity()`

```php
getUserIdentity($identity_id): \EC\EUAccess\Client\Model\Identity
```

Get the details of the user identity

Retrieve identity details based on the identity id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identity_id = 119835; // int | The user's identity id

try {
    $result = $apiInstance->getUserIdentity($identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getUserIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_id** | **int**| The user&#39;s identity id | |

### Return type

[**\EC\EUAccess\Client\Model\Identity**](../Model/Identity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
