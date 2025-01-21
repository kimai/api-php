# Swagger\Client\KioskApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiKioskGetUserauthByUser**](KioskApi.md#getapikioskgetuserauthbyuser) | **GET** /api/kiosk/codes/{id} | Returns one UserAuthCodes entity
[**getApiKioskGetUserauths**](KioskApi.md#getapikioskgetuserauths) | **GET** /api/kiosk/codes | Returns a collection of UserAuthCodes objects

# **getApiKioskGetUserauthByUser**
> \Swagger\Client\Model\UserAuthCodes getApiKioskGetUserauthByUser($id)

Returns one UserAuthCodes entity

Creates the code for the configured default type (if not yet existing).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\KioskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | User ID to fetch

try {
    $result = $apiInstance->getApiKioskGetUserauthByUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KioskApi->getApiKioskGetUserauthByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID to fetch |

### Return type

[**\Swagger\Client\Model\UserAuthCodes**](../Model/UserAuthCodes.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiKioskGetUserauths**
> \Swagger\Client\Model\UserAuthCodes[] getApiKioskGetUserauths($order_by, $order, $page, $size)

Returns a collection of UserAuthCodes objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\KioskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: id, user, type, code (default: id)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: DESC)
$page = "page_example"; // string | The page to display, renders a 404 if not found (default: 1)
$size = "size_example"; // string | The amount of entries for each page (default: 50)

try {
    $result = $apiInstance->getApiKioskGetUserauths($order_by, $order, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KioskApi->getApiKioskGetUserauths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by** | **string**| The field by which results will be ordered. Allowed values: id, user, type, code (default: id) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: DESC) | [optional]
 **page** | **string**| The page to display, renders a 404 if not found (default: 1) | [optional]
 **size** | **string**| The amount of entries for each page (default: 50) | [optional]

### Return type

[**\Swagger\Client\Model\UserAuthCodes[]**](../Model/UserAuthCodes.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

