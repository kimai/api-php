# Swagger\Client\DemoApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getKimaipluginDemoApiDemoCget**](DemoApi.md#getkimaiplugindemoapidemocget) | **GET** /api/demos | Returns a collection of demo entities
[**getKimaipluginDemoApiDemoGet**](DemoApi.md#getkimaiplugindemoapidemoget) | **GET** /api/demos/{id} | Returns one demo entity

# **getKimaipluginDemoApiDemoCget**
> \Swagger\Client\Model\DemoEntity[] getKimaipluginDemoApiDemoCget($counter)

Returns a collection of demo entities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$counter = "counter_example"; // string | The counter to be included in the answer (default: 1)

try {
    $result = $apiInstance->getKimaipluginDemoApiDemoCget($counter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DemoApi->getKimaipluginDemoApiDemoCget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **counter** | **string**| The counter to be included in the answer (default: 1) | [optional]

### Return type

[**\Swagger\Client\Model\DemoEntity[]**](../Model/DemoEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKimaipluginDemoApiDemoGet**
> \Swagger\Client\Model\DemoEntity getKimaipluginDemoApiDemoGet($id)

Returns one demo entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DemoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Demo ID to fetch

try {
    $result = $apiInstance->getKimaipluginDemoApiDemoGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DemoApi->getKimaipluginDemoApiDemoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Demo ID to fetch |

### Return type

[**\Swagger\Client\Model\DemoEntity**](../Model/DemoEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

