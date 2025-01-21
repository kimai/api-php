# Swagger\Client\ApprovalBundleApiApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getKimaipluginApprovalApiApprovalovertimeOvertimeforyearuntil**](ApprovalBundleApiApi.md#getkimaipluginapprovalapiapprovalovertimeovertimeforyearuntil) | **GET** /api/overtime_year | 
[**getKimaipluginApprovalApiApprovalovertimeweeklyWeeklyovertime**](ApprovalBundleApiApi.md#getkimaipluginapprovalapiapprovalovertimeweeklyweeklyovertime) | **GET** /api/weekly_overtime | 
[**postKimaipluginApprovalApiApprovalbundleapiSubmitweek**](ApprovalBundleApiApi.md#postkimaipluginapprovalapiapprovalbundleapisubmitweek) | **POST** /api/add_to_approve | 

# **getKimaipluginApprovalApiApprovalovertimeOvertimeforyearuntil**
> getKimaipluginApprovalApiApprovalovertimeOvertimeforyearuntil($user, $date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApprovalBundleApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to get information for
$date = "date_example"; // string | Date to get overtime until/including this date: Y-m-d

try {
    $apiInstance->getKimaipluginApprovalApiApprovalovertimeOvertimeforyearuntil($user, $date);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalBundleApiApi->getKimaipluginApprovalApiApprovalovertimeOvertimeforyearuntil: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to get information for | [optional]
 **date** | **string**| Date to get overtime until/including this date: Y-m-d | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKimaipluginApprovalApiApprovalovertimeweeklyWeeklyovertime**
> getKimaipluginApprovalApiApprovalovertimeweeklyWeeklyovertime($user, $date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApprovalBundleApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to get information for
$date = "date_example"; // string | Date to get weekly overtime overview up from this date: Y-m-d

try {
    $apiInstance->getKimaipluginApprovalApiApprovalovertimeweeklyWeeklyovertime($user, $date);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalBundleApiApi->getKimaipluginApprovalApiApprovalovertimeweeklyWeeklyovertime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to get information for | [optional]
 **date** | **string**| Date to get weekly overtime overview up from this date: Y-m-d | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postKimaipluginApprovalApiApprovalbundleapiSubmitweek**
> postKimaipluginApprovalApiApprovalbundleapiSubmitweek($user, $date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApprovalBundleApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to get information for
$date = "date_example"; // string | Date as monday of selected week: Y-m-d

try {
    $apiInstance->postKimaipluginApprovalApiApprovalbundleapiSubmitweek($user, $date);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalBundleApiApi->postKimaipluginApprovalApiApprovalbundleapiSubmitweek: ', $e->getMessage(), PHP_EOL;
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

