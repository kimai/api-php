# Swagger\Client\ActionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGetActivityActions**](ActionsApi.md#getgetactivityactions) | **GET** /api/actions/activity/{id}/{view}/{locale} | Get all item actions for the given Activity [for internal use]
[**getGetCustomerActions**](ActionsApi.md#getgetcustomeractions) | **GET** /api/actions/customer/{id}/{view}/{locale} | Get all item actions for the given Customer [for internal use]
[**getGetProjectActions**](ActionsApi.md#getgetprojectactions) | **GET** /api/actions/project/{id}/{view}/{locale} | Get all item actions for the given Project [for internal use]
[**getGetTimesheetActions**](ActionsApi.md#getgettimesheetactions) | **GET** /api/actions/timesheet/{id}/{view}/{locale} | Get all item actions for the given Timesheet [for internal use]

# **getGetActivityActions**
> \Swagger\Client\Model\PageAction getGetActivityActions($id, $view, $locale)

Get all item actions for the given Activity [for internal use]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Activity ID to fetch
$view = "view_example"; // string | View to display the actions at (e.g. index, custom)
$locale = "locale_example"; // string | Language to translate the action title to (e.g. de, en)

try {
    $result = $apiInstance->getGetActivityActions($id, $view, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->getGetActivityActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Activity ID to fetch |
 **view** | **string**| View to display the actions at (e.g. index, custom) |
 **locale** | **string**| Language to translate the action title to (e.g. de, en) |

### Return type

[**\Swagger\Client\Model\PageAction**](../Model/PageAction.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetCustomerActions**
> \Swagger\Client\Model\PageAction getGetCustomerActions($id, $view, $locale)

Get all item actions for the given Customer [for internal use]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Customer ID to fetch
$view = "view_example"; // string | View to display the actions at (e.g. index, custom)
$locale = "locale_example"; // string | Language to translate the action title to (e.g. de, en)

try {
    $result = $apiInstance->getGetCustomerActions($id, $view, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->getGetCustomerActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer ID to fetch |
 **view** | **string**| View to display the actions at (e.g. index, custom) |
 **locale** | **string**| Language to translate the action title to (e.g. de, en) |

### Return type

[**\Swagger\Client\Model\PageAction**](../Model/PageAction.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetProjectActions**
> \Swagger\Client\Model\PageAction getGetProjectActions($id, $view, $locale)

Get all item actions for the given Project [for internal use]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Project ID to fetch
$view = "view_example"; // string | View to display the actions at (e.g. index, custom)
$locale = "locale_example"; // string | Language to translate the action title to (e.g. de, en)

try {
    $result = $apiInstance->getGetProjectActions($id, $view, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->getGetProjectActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Project ID to fetch |
 **view** | **string**| View to display the actions at (e.g. index, custom) |
 **locale** | **string**| Language to translate the action title to (e.g. de, en) |

### Return type

[**\Swagger\Client\Model\PageAction**](../Model/PageAction.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTimesheetActions**
> \Swagger\Client\Model\PageAction getGetTimesheetActions($id, $view, $locale)

Get all item actions for the given Timesheet [for internal use]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet ID to fetch
$view = "view_example"; // string | View to display the actions at (e.g. index, custom)
$locale = "locale_example"; // string | Language to translate the action title to (e.g. de, en)

try {
    $result = $apiInstance->getGetTimesheetActions($id, $view, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->getGetTimesheetActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet ID to fetch |
 **view** | **string**| View to display the actions at (e.g. index, custom) |
 **locale** | **string**| Language to translate the action title to (e.g. de, en) |

### Return type

[**\Swagger\Client\Model\PageAction**](../Model/PageAction.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

