# EC\EUAccess\Client\ProfileAssignmentsApi

All URIs are relative to https://eu-access-admin-int-host:14222/eu-access/admin-int/usersData, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProfileAssignment()**](ProfileAssignmentsApi.md#createProfileAssignment) | **POST** /v1.0/profileAssignments | Create a profile assignment for an identity |
| [**deleteProfileAssignment()**](ProfileAssignmentsApi.md#deleteProfileAssignment) | **DELETE** /v1.0/profileAssignments/{profileAssignmentId} | Deletes a profile assignment |
| [**getProfileAssignment()**](ProfileAssignmentsApi.md#getProfileAssignment) | **GET** /v1.0/profileAssignments/{profileAssignmentId} | Get the profile assignment with the given id |
| [**getProfileAssignments()**](ProfileAssignmentsApi.md#getProfileAssignments) | **GET** /v1.0/profileAssignments | Get profile assignments for the given identity id |
| [**updateProfileAssignment()**](ProfileAssignmentsApi.md#updateProfileAssignment) | **PUT** /v1.0/profileAssignments/{profileAssignmentId} | Update a profile assignment with the given id |


## `createProfileAssignment()`

```php
createProfileAssignment($request): \EC\EUAccess\Client\Model\ProfileAssignmentId
```

Create a profile assignment for an identity

Create a profile assignment for a specific identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\ProfileAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \EC\EUAccess\Client\Model\ProfileAssignmentCreateRequest(); // \EC\EUAccess\Client\Model\ProfileAssignmentCreateRequest | ProfileAssignment object

try {
    $result = $apiInstance->createProfileAssignment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileAssignmentsApi->createProfileAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\EC\EUAccess\Client\Model\ProfileAssignmentCreateRequest**](../Model/ProfileAssignmentCreateRequest.md)| ProfileAssignment object | |

### Return type

[**\EC\EUAccess\Client\Model\ProfileAssignmentId**](../Model/ProfileAssignmentId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfileAssignment()`

```php
deleteProfileAssignment($profile_assignment_id)
```

Deletes a profile assignment

Deletes the profile assignment with the specified id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\ProfileAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_assignment_id = 145683; // int | The profile assignment id

try {
    $apiInstance->deleteProfileAssignment($profile_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfileAssignmentsApi->deleteProfileAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_assignment_id** | **int**| The profile assignment id | |

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

## `getProfileAssignment()`

```php
getProfileAssignment($profile_assignment_id): \EC\EUAccess\Client\Model\ProfileAssignment
```

Get the profile assignment with the given id

Retrieves the details for the profile assignment with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\ProfileAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_assignment_id = 145683; // int | The profile assignment id

try {
    $result = $apiInstance->getProfileAssignment($profile_assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileAssignmentsApi->getProfileAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_assignment_id** | **int**| The profile assignment id | |

### Return type

[**\EC\EUAccess\Client\Model\ProfileAssignment**](../Model/ProfileAssignment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfileAssignments()`

```php
getProfileAssignments($identity_id): \EC\EUAccess\Client\Model\ProfileAssignment[]
```

Get profile assignments for the given identity id

Retrieve profile assignments based on identity id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\ProfileAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identity_id = 119835; // int | The user's identity id

try {
    $result = $apiInstance->getProfileAssignments($identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileAssignmentsApi->getProfileAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_id** | **int**| The user&#39;s identity id | |

### Return type

[**\EC\EUAccess\Client\Model\ProfileAssignment[]**](../Model/ProfileAssignment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfileAssignment()`

```php
updateProfileAssignment($profile_assignment_id, $request)
```

Update a profile assignment with the given id

Method that update a profile assignment for a specific user identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\ProfileAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_assignment_id = 145683; // int | The profile assignment id
$request = new \EC\EUAccess\Client\Model\ProfileAssignmentUpdateRequest(); // \EC\EUAccess\Client\Model\ProfileAssignmentUpdateRequest | The profile assignment object to update

try {
    $apiInstance->updateProfileAssignment($profile_assignment_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ProfileAssignmentsApi->updateProfileAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_assignment_id** | **int**| The profile assignment id | |
| **request** | [**\EC\EUAccess\Client\Model\ProfileAssignmentUpdateRequest**](../Model/ProfileAssignmentUpdateRequest.md)| The profile assignment object to update | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
