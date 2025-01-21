# Swagger\Client\ApprovalStatusApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getKimaipluginApprovalApiApprovalstatusapiSubmitweek**](ApprovalStatusApiApi.md#getkimaipluginapprovalapiapprovalstatusapisubmitweek) | **GET** /api/week-status | 

# **getKimaipluginApprovalApiApprovalstatusapiSubmitweek**
> getKimaipluginApprovalApiApprovalstatusapiSubmitweek($user, $date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApprovalStatusApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to get information for
$date = "date_example"; // string | Date as monday of selected week: Y-m-d

try {
    $apiInstance->getKimaipluginApprovalApiApprovalstatusapiSubmitweek($user, $date);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalStatusApiApi->getKimaipluginApprovalApiApprovalstatusapiSubmitweek: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to get information for | [optional]
 **date** | **string**| Date as monday of selected week: Y-m-d | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

