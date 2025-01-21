# Swagger\Client\ApprovalNextWeekApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getKimaipluginApprovalApiApprovalnextweekapiNextweek**](ApprovalNextWeekApiApi.md#getkimaipluginapprovalapiapprovalnextweekapinextweek) | **GET** /api/next-week | 

# **getKimaipluginApprovalApiApprovalnextweekapiNextweek**
> getKimaipluginApprovalApiApprovalnextweekapiNextweek($user)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApprovalNextWeekApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to get information for

try {
    $apiInstance->getKimaipluginApprovalApiApprovalnextweekapiNextweek($user);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalNextWeekApiApi->getKimaipluginApprovalApiApprovalnextweekapiNextweek: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to get information for | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

