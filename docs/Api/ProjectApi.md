# Swagger\Client\ProjectApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteProject**](ProjectApi.md#deletedeleteproject) | **DELETE** /api/projects/{id} | Delete an existing project
[**deleteDeleteProjectRate**](ProjectApi.md#deletedeleteprojectrate) | **DELETE** /api/projects/{id}/rates/{rateId} | Deletes one rate for a project
[**getGetProject**](ProjectApi.md#getgetproject) | **GET** /api/projects/{id} | Returns one project
[**getGetProjectRates**](ProjectApi.md#getgetprojectrates) | **GET** /api/projects/{id}/rates | Returns a collection of all rates for one project
[**getGetProjects**](ProjectApi.md#getgetprojects) | **GET** /api/projects | Returns a collection of projects (which are visible to the user)
[**patchAppApiProjectMeta**](ProjectApi.md#patchappapiprojectmeta) | **PATCH** /api/projects/{id}/meta | Sets the value of a meta-field for an existing project
[**patchPatchProject**](ProjectApi.md#patchpatchproject) | **PATCH** /api/projects/{id} | Update an existing project
[**postPostProject**](ProjectApi.md#postpostproject) | **POST** /api/projects | Creates a new project
[**postPostProjectRate**](ProjectApi.md#postpostprojectrate) | **POST** /api/projects/{id}/rates | Adds a new rate to a project

# **deleteDeleteProject**
> deleteDeleteProject($id)

Delete an existing project

[DANGER] This will also delete ALL linked activities and timesheets. Maybe use `PATCH` instead and mark it as inactive with `visible=false`?

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Project ID to delete

try {
    $apiInstance->deleteDeleteProject($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteDeleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Project ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteProjectRate**
> deleteDeleteProjectRate($id, $rate_id)

Deletes one rate for a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The project whose rate will be removed
$rate_id = "rate_id_example"; // string | The rate to remove

try {
    $apiInstance->deleteDeleteProjectRate($id, $rate_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteDeleteProjectRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The project whose rate will be removed |
 **rate_id** | **string**| The rate to remove |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetProject**
> \Swagger\Client\Model\ProjectEntity getGetProject($id)

Returns one project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getGetProject($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getGetProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetProjectRates**
> \Swagger\Client\Model\ProjectRate[] getGetProjectRates($id)

Returns a collection of all rates for one project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The project whose rates will be returned

try {
    $result = $apiInstance->getGetProjectRates($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getGetProjectRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The project whose rates will be returned |

### Return type

[**\Swagger\Client\Model\ProjectRate[]**](../Model/ProjectRate.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetProjects**
> \Swagger\Client\Model\ProjectCollection[] getGetProjects($customer, $customers, $visible, $start, $end, $ignore_dates, $global_activities, $order, $order_by, $term)

Returns a collection of projects (which are visible to the user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = "customer_example"; // string | Customer ID to filter projects
$customers = array(new \Swagger\Client\Model\null[]()); // null[] | List of customer IDs to filter, e.g.: customers[]=1&customers[]=2
$visible = "1"; // string | Visibility status to filter projects: 1=visible, 2=hidden, 3=both
$start = "start_example"; // string | Only projects that started before this date will be included. Allowed format: HTML5 (default: now, if end is also empty)
$end = "end_example"; // string | Only projects that ended after this date will be included. Allowed format: HTML5 (default: now, if start is also empty)
$ignore_dates = "ignore_dates_example"; // string | If set, start and end are completely ignored. Allowed values: 1 (default: off)
$global_activities = "global_activities_example"; // string | If given, filters projects by their 'global activity' support. Allowed values: 1 (supports global activities) and 0 (without global activities) (default: all)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: id, name, customer (default: name)
$term = "term_example"; // string | Free search term

try {
    $result = $apiInstance->getGetProjects($customer, $customers, $visible, $start, $end, $ignore_dates, $global_activities, $order, $order_by, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getGetProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**| Customer ID to filter projects | [optional]
 **customers** | [**null[]**](../Model/.md)| List of customer IDs to filter, e.g.: customers[]&#x3D;1&amp;customers[]&#x3D;2 | [optional] [default to []]
 **visible** | **string**| Visibility status to filter projects: 1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;both | [optional] [default to 1]
 **start** | **string**| Only projects that started before this date will be included. Allowed format: HTML5 (default: now, if end is also empty) | [optional]
 **end** | **string**| Only projects that ended after this date will be included. Allowed format: HTML5 (default: now, if start is also empty) | [optional]
 **ignore_dates** | **string**| If set, start and end are completely ignored. Allowed values: 1 (default: off) | [optional]
 **global_activities** | **string**| If given, filters projects by their &#x27;global activity&#x27; support. Allowed values: 1 (supports global activities) and 0 (without global activities) (default: all) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: id, name, customer (default: name) | [optional]
 **term** | **string**| Free search term | [optional]

### Return type

[**\Swagger\Client\Model\ProjectCollection[]**](../Model/ProjectCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppApiProjectMeta**
> \Swagger\Client\Model\ProjectEntity patchAppApiProjectMeta($id, $body)

Sets the value of a meta-field for an existing project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Project record ID to set the meta-field value for
$body = new \Swagger\Client\Model\IdMetaBody4(); // \Swagger\Client\Model\IdMetaBody4 | 

try {
    $result = $apiInstance->patchAppApiProjectMeta($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->patchAppApiProjectMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Project record ID to set the meta-field value for |
 **body** | [**\Swagger\Client\Model\IdMetaBody4**](../Model/IdMetaBody4.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchProject**
> \Swagger\Client\Model\ProjectEntity patchPatchProject($body, $id)

Update an existing project

Update an existing project, you can pass all or just a subset of all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProjectEditForm(); // \Swagger\Client\Model\ProjectEditForm | 
$id = "id_example"; // string | Project ID to update

try {
    $result = $apiInstance->patchPatchProject($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->patchPatchProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectEditForm**](../Model/ProjectEditForm.md)|  |
 **id** | **string**| Project ID to update |

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostProject**
> \Swagger\Client\Model\ProjectEntity postPostProject($body)

Creates a new project

Creates a new project and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProjectEditForm(); // \Swagger\Client\Model\ProjectEditForm | 

try {
    $result = $apiInstance->postPostProject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->postPostProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectEditForm**](../Model/ProjectEditForm.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostProjectRate**
> \Swagger\Client\Model\ProjectRate postPostProjectRate($body, $id)

Adds a new rate to a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProjectRateForm(); // \Swagger\Client\Model\ProjectRateForm | 
$id = "id_example"; // string | The project to add the rate for

try {
    $result = $apiInstance->postPostProjectRate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->postPostProjectRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectRateForm**](../Model/ProjectRateForm.md)|  |
 **id** | **string**| The project to add the rate for |

### Return type

[**\Swagger\Client\Model\ProjectRate**](../Model/ProjectRate.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

