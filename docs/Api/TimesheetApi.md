# Swagger\Client\TimesheetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteTimesheet**](TimesheetApi.md#deletedeletetimesheet) | **DELETE** /api/timesheets/{id} | Delete an existing timesheet record
[**getActiveTimesheet**](TimesheetApi.md#getactivetimesheet) | **GET** /api/timesheets/active | Returns the collection of active timesheet records
[**getGetTimesheet**](TimesheetApi.md#getgettimesheet) | **GET** /api/timesheets/{id} | Returns one timesheet record
[**getGetTimesheets**](TimesheetApi.md#getgettimesheets) | **GET** /api/timesheets | Returns a collection of timesheet records (which are visible to the user)
[**getRecentTimesheet**](TimesheetApi.md#getrecenttimesheet) | **GET** /api/timesheets/recent | Returns the collection of recent user activities
[**getRestartTimesheetGet**](TimesheetApi.md#getrestarttimesheetget) | **GET** /api/timesheets/{id}/restart | Restarts a previously stopped timesheet record for the current user
[**getStopTimesheetGet**](TimesheetApi.md#getstoptimesheetget) | **GET** /api/timesheets/{id}/stop | Stops an active timesheet record.
[**patchAppApiTimesheetMeta**](TimesheetApi.md#patchappapitimesheetmeta) | **PATCH** /api/timesheets/{id}/meta | Sets the value of a meta-field for an existing timesheet.
[**patchDuplicateTimesheet**](TimesheetApi.md#patchduplicatetimesheet) | **PATCH** /api/timesheets/{id}/duplicate | Duplicates an existing timesheet record
[**patchExportTimesheet**](TimesheetApi.md#patchexporttimesheet) | **PATCH** /api/timesheets/{id}/export | Switch the export state of a timesheet record to (un-)lock it
[**patchPatchTimesheet**](TimesheetApi.md#patchpatchtimesheet) | **PATCH** /api/timesheets/{id} | Update an existing timesheet record
[**patchRestartTimesheet**](TimesheetApi.md#patchrestarttimesheet) | **PATCH** /api/timesheets/{id}/restart | Restarts a previously stopped timesheet record for the current user
[**patchStopTimesheet**](TimesheetApi.md#patchstoptimesheet) | **PATCH** /api/timesheets/{id}/stop | Stops an active timesheet record.
[**postPostTimesheet**](TimesheetApi.md#postposttimesheet) | **POST** /api/timesheets | Creates a new timesheet record

# **deleteDeleteTimesheet**
> deleteDeleteTimesheet($id)

Delete an existing timesheet record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to delete

try {
    $apiInstance->deleteDeleteTimesheet($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->deleteDeleteTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveTimesheet**
> \Swagger\Client\Model\TimesheetCollectionExpanded[] getActiveTimesheet()

Returns the collection of active timesheet records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getActiveTimesheet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->getActiveTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TimesheetCollectionExpanded[]**](../Model/TimesheetCollectionExpanded.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTimesheet**
> \Swagger\Client\Model\TimesheetEntity getGetTimesheet($id)

Returns one timesheet record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to fetch

try {
    $result = $apiInstance->getGetTimesheet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->getGetTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to fetch |

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTimesheets**
> \Swagger\Client\Model\TimesheetCollection[] getGetTimesheets($user, $users, $customer, $customers, $project, $projects, $activity, $activities, $page, $size, $tags, $order_by, $order, $begin, $end, $exported, $active, $billable, $full, $term, $modified_after)

Returns a collection of timesheet records (which are visible to the user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | User ID to filter timesheets. Needs permission 'view_other_timesheet', pass 'all' to fetch data for all user (default: current user)
$users = array(new \Swagger\Client\Model\null[]()); // null[] | List of user IDs to filter, e.g.: users[]=1&users[]=2 (ignored if user=all)
$customer = "customer_example"; // string | Customer ID to filter timesheets
$customers = array(new \Swagger\Client\Model\null[]()); // null[] | List of customer IDs to filter, e.g.: customers[]=1&customers[]=2
$project = "project_example"; // string | Project ID to filter timesheets
$projects = array(new \Swagger\Client\Model\null[]()); // null[] | List of project IDs to filter, e.g.: projects[]=1&projects[]=2
$activity = "activity_example"; // string | Activity ID to filter timesheets
$activities = array(new \Swagger\Client\Model\null[]()); // null[] | List of activity IDs to filter, e.g.: activities[]=1&activities[]=2
$page = "page_example"; // string | The page to display, renders a 404 if not found (default: 1)
$size = "size_example"; // string | The amount of entries for each page (default: 50)
$tags = array(new \Swagger\Client\Model\null[]()); // null[] | List of tag names, e.g. tags[]=bar&tags[]=foo
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: id, begin, end, rate (default: begin)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: DESC)
$begin = "begin_example"; // string | Only records after this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss)
$end = "end_example"; // string | Only records before this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss)
$exported = "exported_example"; // string | Use this flag if you want to filter for export state. Allowed values: 0=not exported, 1=exported (default: all)
$active = "active_example"; // string | Filter for running/active records. Allowed values: 0=stopped, 1=active (default: all)
$billable = "billable_example"; // string | Filter for non-/billable records. Allowed values: 0=non-billable, 1=billable (default: all)
$full = "full_example"; // string | Allows to fetch full objects including subresources. Allowed values: 0|1|false|true (default: false)
$term = "term_example"; // string | Free search term
$modified_after = "modified_after_example"; // string | Only records changed after this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss)

try {
    $result = $apiInstance->getGetTimesheets($user, $users, $customer, $customers, $project, $projects, $activity, $activities, $page, $size, $tags, $order_by, $order, $begin, $end, $exported, $active, $billable, $full, $term, $modified_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->getGetTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to filter timesheets. Needs permission &#x27;view_other_timesheet&#x27;, pass &#x27;all&#x27; to fetch data for all user (default: current user) | [optional]
 **users** | [**null[]**](../Model/.md)| List of user IDs to filter, e.g.: users[]&#x3D;1&amp;users[]&#x3D;2 (ignored if user&#x3D;all) | [optional] [default to []]
 **customer** | **string**| Customer ID to filter timesheets | [optional]
 **customers** | [**null[]**](../Model/.md)| List of customer IDs to filter, e.g.: customers[]&#x3D;1&amp;customers[]&#x3D;2 | [optional] [default to []]
 **project** | **string**| Project ID to filter timesheets | [optional]
 **projects** | [**null[]**](../Model/.md)| List of project IDs to filter, e.g.: projects[]&#x3D;1&amp;projects[]&#x3D;2 | [optional] [default to []]
 **activity** | **string**| Activity ID to filter timesheets | [optional]
 **activities** | [**null[]**](../Model/.md)| List of activity IDs to filter, e.g.: activities[]&#x3D;1&amp;activities[]&#x3D;2 | [optional] [default to []]
 **page** | **string**| The page to display, renders a 404 if not found (default: 1) | [optional]
 **size** | **string**| The amount of entries for each page (default: 50) | [optional]
 **tags** | [**null[]**](../Model/.md)| List of tag names, e.g. tags[]&#x3D;bar&amp;tags[]&#x3D;foo | [optional] [default to []]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: id, begin, end, rate (default: begin) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: DESC) | [optional]
 **begin** | **string**| Only records after this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss) | [optional]
 **end** | **string**| Only records before this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss) | [optional]
 **exported** | **string**| Use this flag if you want to filter for export state. Allowed values: 0&#x3D;not exported, 1&#x3D;exported (default: all) | [optional]
 **active** | **string**| Filter for running/active records. Allowed values: 0&#x3D;stopped, 1&#x3D;active (default: all) | [optional]
 **billable** | **string**| Filter for non-/billable records. Allowed values: 0&#x3D;non-billable, 1&#x3D;billable (default: all) | [optional]
 **full** | **string**| Allows to fetch full objects including subresources. Allowed values: 0|1|false|true (default: false) | [optional]
 **term** | **string**| Free search term | [optional]
 **modified_after** | **string**| Only records changed after this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss) | [optional]

### Return type

[**\Swagger\Client\Model\TimesheetCollection[]**](../Model/TimesheetCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecentTimesheet**
> \Swagger\Client\Model\TimesheetCollectionExpanded[] getRecentTimesheet($begin, $size)

Returns the collection of recent user activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$begin = "begin_example"; // string | Only records after this date will be included. Default: today - 1 year (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss)
$size = "size_example"; // string | The amount of entries (default: 10)

try {
    $result = $apiInstance->getRecentTimesheet($begin, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->getRecentTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin** | **string**| Only records after this date will be included. Default: today - 1 year (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss) | [optional]
 **size** | **string**| The amount of entries (default: 10) | [optional]

### Return type

[**\Swagger\Client\Model\TimesheetCollectionExpanded[]**](../Model/TimesheetCollectionExpanded.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestartTimesheetGet**
> \Swagger\Client\Model\TimesheetEntity getRestartTimesheetGet($id, $body)

Restarts a previously stopped timesheet record for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to restart
$body = new \Swagger\Client\Model\IdRestartBody(); // \Swagger\Client\Model\IdRestartBody | 

try {
    $result = $apiInstance->getRestartTimesheetGet($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->getRestartTimesheetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to restart |
 **body** | [**\Swagger\Client\Model\IdRestartBody**](../Model/IdRestartBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStopTimesheetGet**
> \Swagger\Client\Model\TimesheetEntity getStopTimesheetGet($id)

Stops an active timesheet record.

This route is available via GET and PATCH, as users over and over again run into errors when stopping. Likely caused by a slow JS engine and a fast-click after page reload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to stop

try {
    $result = $apiInstance->getStopTimesheetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->getStopTimesheetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to stop |

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppApiTimesheetMeta**
> \Swagger\Client\Model\TimesheetEntity patchAppApiTimesheetMeta($id, $body)

Sets the value of a meta-field for an existing timesheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to set the meta-field value for
$body = new \Swagger\Client\Model\IdMetaBody5(); // \Swagger\Client\Model\IdMetaBody5 | 

try {
    $result = $apiInstance->patchAppApiTimesheetMeta($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->patchAppApiTimesheetMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to set the meta-field value for |
 **body** | [**\Swagger\Client\Model\IdMetaBody5**](../Model/IdMetaBody5.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchDuplicateTimesheet**
> \Swagger\Client\Model\TimesheetEntity patchDuplicateTimesheet($id)

Duplicates an existing timesheet record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to duplicate

try {
    $result = $apiInstance->patchDuplicateTimesheet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->patchDuplicateTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to duplicate |

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchExportTimesheet**
> \Swagger\Client\Model\TimesheetEntity patchExportTimesheet($id)

Switch the export state of a timesheet record to (un-)lock it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to switch export state

try {
    $result = $apiInstance->patchExportTimesheet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->patchExportTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to switch export state |

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchTimesheet**
> \Swagger\Client\Model\TimesheetEntity patchPatchTimesheet($body, $id)

Update an existing timesheet record

Update an existing timesheet record, you can pass all or just a subset of the attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TimesheetEditForm(); // \Swagger\Client\Model\TimesheetEditForm | 
$id = "id_example"; // string | Timesheet record ID to update

try {
    $result = $apiInstance->patchPatchTimesheet($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->patchPatchTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TimesheetEditForm**](../Model/TimesheetEditForm.md)|  |
 **id** | **string**| Timesheet record ID to update |

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRestartTimesheet**
> \Swagger\Client\Model\TimesheetEntity patchRestartTimesheet($id, $body)

Restarts a previously stopped timesheet record for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to restart
$body = new \Swagger\Client\Model\IdRestartBody1(); // \Swagger\Client\Model\IdRestartBody1 | 

try {
    $result = $apiInstance->patchRestartTimesheet($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->patchRestartTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to restart |
 **body** | [**\Swagger\Client\Model\IdRestartBody1**](../Model/IdRestartBody1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchStopTimesheet**
> \Swagger\Client\Model\TimesheetEntity patchStopTimesheet($id)

Stops an active timesheet record.

This route is available via GET and PATCH, as users over and over again run into errors when stopping. Likely caused by a slow JS engine and a fast-click after page reload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Timesheet record ID to stop

try {
    $result = $apiInstance->patchStopTimesheet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->patchStopTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Timesheet record ID to stop |

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTimesheet**
> \Swagger\Client\Model\TimesheetEntity postPostTimesheet($body, $full)

Creates a new timesheet record

Creates a new timesheet record for the current user and returns it afterwards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TimesheetEditForm(); // \Swagger\Client\Model\TimesheetEditForm | 
$full = "full_example"; // string | Allows to fetch fully serialized objects including subresources (TimesheetExpanded). Allowed values: true (default: false)

try {
    $result = $apiInstance->postPostTimesheet($body, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->postPostTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TimesheetEditForm**](../Model/TimesheetEditForm.md)|  |
 **full** | **string**| Allows to fetch fully serialized objects including subresources (TimesheetExpanded). Allowed values: true (default: false) | [optional]

### Return type

[**\Swagger\Client\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

