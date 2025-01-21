# Swagger\Client\MetaFieldApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getKimaipluginMetafieldsApiMetafieldsCget**](MetaFieldApi.md#getkimaipluginmetafieldsapimetafieldscget) | **GET** /api/metafields | Returns a collection of meta-fields

# **getKimaipluginMetafieldsApiMetafieldsCget**
> \Swagger\Client\Model\MetaFieldRule[] getKimaipluginMetafieldsApiMetafieldsCget($entity)

Returns a collection of meta-fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MetaFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = "entity_example"; // string | The type of object to fetch meta-fields for. Allowed values: timesheet, customer, project, activity, user, expense, invoice - returns all if not given (default: all)

try {
    $result = $apiInstance->getKimaipluginMetafieldsApiMetafieldsCget($entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaFieldApi->getKimaipluginMetafieldsApiMetafieldsCget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | **string**| The type of object to fetch meta-fields for. Allowed values: timesheet, customer, project, activity, user, expense, invoice - returns all if not given (default: all) | [optional]

### Return type

[**\Swagger\Client\Model\MetaFieldRule[]**](../Model/MetaFieldRule.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

