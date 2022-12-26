# EC\EUAccess\Client\UsersApi

All URIs are relative to https://eu-access-admin-int-host:14222/eu-access/admin-int/usersData, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNaturalUser()**](UsersApi.md#createNaturalUser) | **POST** /v1.0/users | Create an user as natural person |
| [**getListOfUsers()**](UsersApi.md#getListOfUsers) | **GET** /v1.0/users | Get list of users |


## `createNaturalUser()`

```php
createNaturalUser($request): \EC\EUAccess\Client\Model\UserId
```

Create an user as natural person

Create an user as natural person if it is already registered in CED

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \EC\EUAccess\Client\Model\UserCreateRequest(); // \EC\EUAccess\Client\Model\UserCreateRequest | Request to create an user as natural person

try {
    $result = $apiInstance->createNaturalUser($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createNaturalUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\EC\EUAccess\Client\Model\UserCreateRequest**](../Model/UserCreateRequest.md)| Request to create an user as natural person | |

### Return type

[**\EC\EUAccess\Client\Model\UserId**](../Model/UserId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfUsers()`

```php
getListOfUsers($email, $business_profile_code, $application): \EC\EUAccess\Client\Model\User[]
```

Get list of users

Retrieves one or more users based on email, business profile and application. Email or business profile are required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = test.user001@euaccess.ec.europa.eu; // string | The user's email
$business_profile_code = BP_VIEWER; // string | The user's business profile
$application = UUMDS-ADM-INT; // string | The application code

try {
    $result = $apiInstance->getListOfUsers($email, $business_profile_code, $application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getListOfUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| The user&#39;s email | [optional] |
| **business_profile_code** | **string**| The user&#39;s business profile | [optional] |
| **application** | **string**| The application code | [optional] |

### Return type

[**\EC\EUAccess\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
