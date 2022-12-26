# EC\EUAccess\Client\AttributesApi

All URIs are relative to https://eu-access-admin-int-host:14222/eu-access/admin-int/usersData, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAttributeValue()**](AttributesApi.md#createAttributeValue) | **POST** /v1.0/attributes | Create a new attribute for the user identity |
| [**deleteAttributeValue()**](AttributesApi.md#deleteAttributeValue) | **DELETE** /v1.0/attributes/{attributeId} | Deletes an attribute profile |
| [**getAttributeKeyList()**](AttributesApi.md#getAttributeKeyList) | **GET** /v1.0/attributes/keys | Get the attributes business codes |
| [**getAttributeValue()**](AttributesApi.md#getAttributeValue) | **GET** /v1.0/attributes/{attributeId} | Get the attribute with the given id |
| [**getAttributes()**](AttributesApi.md#getAttributes) | **GET** /v1.0/attributes | Get all attributes for an user identity |
| [**updateAttributeValue()**](AttributesApi.md#updateAttributeValue) | **PUT** /v1.0/attributes/{attributeId} | Update the attribute value with the given id |


## `createAttributeValue()`

```php
createAttributeValue($request): \EC\EUAccess\Client\Model\AttributeId
```

Create a new attribute for the user identity

Creates a new attribute for the user identity

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\EC\EUAccess\Client\Model\AttributeCreateRequest**](../Model/AttributeCreateRequest.md)| Attribute object | |

### Return type

[**\EC\EUAccess\Client\Model\AttributeId**](../Model/AttributeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttributeValue()`

```php
deleteAttributeValue($attribute_id)
```

Deletes an attribute profile

Deletes the attribute with the specified id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_id = 11983; // int | The attribute id

try {
    $apiInstance->deleteAttributeValue($attribute_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->deleteAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**| The attribute id | |

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

## `getAttributeKeyList()`

```php
getAttributeKeyList($identity_id): \EC\EUAccess\Client\Model\AttributeKeyName[]
```

Get the attributes business codes

Get all available attributes business codes for the user identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identity_id = 119835; // int | The user's identity id

try {
    $result = $apiInstance->getAttributeKeyList($identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeKeyList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_id** | **int**| The user&#39;s identity id | |

### Return type

[**\EC\EUAccess\Client\Model\AttributeKeyName[]**](../Model/AttributeKeyName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributeValue()`

```php
getAttributeValue($attribute_id): \EC\EUAccess\Client\Model\Attribute
```

Get the attribute with the given id

Retrieves the details for the attribute with the given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_id = 11983; // int | The attribute id

try {
    $result = $apiInstance->getAttributeValue($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**| The attribute id | |

### Return type

[**\EC\EUAccess\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributes()`

```php
getAttributes($identity_id): \EC\EUAccess\Client\Model\Attribute[]
```

Get all attributes for an user identity

Retrieves all the attributes based on the given user identity id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identity_id = 119835; // int | The user's identity id

try {
    $result = $apiInstance->getAttributes($identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_id** | **int**| The user&#39;s identity id | |

### Return type

[**\EC\EUAccess\Client\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttributeValue()`

```php
updateAttributeValue($attribute_id, $request)
```

Update the attribute value with the given id

Method that update an attribute for a specific user identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new EC\EUAccess\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_id = 11983; // int | The attribute id
$request = new \EC\EUAccess\Client\Model\AttributeUpdateRequest(); // \EC\EUAccess\Client\Model\AttributeUpdateRequest | The Atribute object to update

try {
    $apiInstance->updateAttributeValue($attribute_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->updateAttributeValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**| The attribute id | |
| **request** | [**\EC\EUAccess\Client\Model\AttributeUpdateRequest**](../Model/AttributeUpdateRequest.md)| The Atribute object to update | |

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
