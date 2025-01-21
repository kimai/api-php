# Swagger\Client\ActivityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteActivity**](ActivityApi.md#deletedeleteactivity) | **DELETE** /api/activities/{id} | Delete an existing activity
[**deleteDeleteActivityRate**](ActivityApi.md#deletedeleteactivityrate) | **DELETE** /api/activities/{id}/rates/{rateId} | Deletes one rate for an activity
[**getGetActivities**](ActivityApi.md#getgetactivities) | **GET** /api/activities | Returns a collection of activities (which are visible to the user)
[**getGetActivity**](ActivityApi.md#getgetactivity) | **GET** /api/activities/{id} | Returns one activity
[**getGetActivityRates**](ActivityApi.md#getgetactivityrates) | **GET** /api/activities/{id}/rates | Returns a collection of all rates for one activity
[**patchAppApiActivityMeta**](ActivityApi.md#patchappapiactivitymeta) | **PATCH** /api/activities/{id}/meta | Sets the value of a meta-field for an existing activity
[**patchPatchActivity**](ActivityApi.md#patchpatchactivity) | **PATCH** /api/activities/{id} | Update an existing activity
[**postPostActivity**](ActivityApi.md#postpostactivity) | **POST** /api/activities | Creates a new activity
[**postPostActivityRate**](ActivityApi.md#postpostactivityrate) | **POST** /api/activities/{id}/rates | Adds a new rate to an activity

# **deleteDeleteActivity**
> deleteDeleteActivity($id)

Delete an existing activity

[DANGER] This will also delete ALL linked timesheets. Maybe use `PATCH` instead and mark it as inactive with `visible=false`?

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Activity ID to delete

try {
    $apiInstance->deleteDeleteActivity($id);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteDeleteActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Activity ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteActivityRate**
> deleteDeleteActivityRate($id, $rate_id)

Deletes one rate for an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The activity whose rate will be removed
$rate_id = "rate_id_example"; // string | The rate to remove

try {
    $apiInstance->deleteDeleteActivityRate($id, $rate_id);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteDeleteActivityRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The activity whose rate will be removed |
 **rate_id** | **string**| The rate to remove |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetActivities**
> \Swagger\Client\Model\ActivityCollection[] getGetActivities($project, $projects, $visible, $globals, $order_by, $order, $term)

Returns a collection of activities (which are visible to the user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = "project_example"; // string | Project ID to filter activities
$projects = array(new \Swagger\Client\Model\null[]()); // null[] | List of project IDs to filter activities, e.g.: projects[]=1&projects[]=2
$visible = "1"; // string | Visibility status to filter activities: 1=visible, 2=hidden, 3=all
$globals = "globals_example"; // string | Use if you want to fetch only global activities. Allowed values: 0|1 (default: 0 for false)
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: id, name, project (default: name)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$term = "term_example"; // string | Free search term

try {
    $result = $apiInstance->getGetActivities($project, $projects, $visible, $globals, $order_by, $order, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getGetActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Project ID to filter activities | [optional]
 **projects** | [**null[]**](../Model/.md)| List of project IDs to filter activities, e.g.: projects[]&#x3D;1&amp;projects[]&#x3D;2 | [optional] [default to []]
 **visible** | **string**| Visibility status to filter activities: 1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;all | [optional] [default to 1]
 **globals** | **string**| Use if you want to fetch only global activities. Allowed values: 0|1 (default: 0 for false) | [optional]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: id, name, project (default: name) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **term** | **string**| Free search term | [optional]

### Return type

[**\Swagger\Client\Model\ActivityCollection[]**](../Model/ActivityCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetActivity**
> \Swagger\Client\Model\ActivityEntity getGetActivity($id)

Returns one activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Activity ID to fetch

try {
    $result = $apiInstance->getGetActivity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getGetActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Activity ID to fetch |

### Return type

[**\Swagger\Client\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetActivityRates**
> \Swagger\Client\Model\ActivityRate[] getGetActivityRates($id)

Returns a collection of all rates for one activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The activity whose rates will be returned

try {
    $result = $apiInstance->getGetActivityRates($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getGetActivityRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The activity whose rates will be returned |

### Return type

[**\Swagger\Client\Model\ActivityRate[]**](../Model/ActivityRate.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppApiActivityMeta**
> \Swagger\Client\Model\ActivityEntity patchAppApiActivityMeta($id, $body)

Sets the value of a meta-field for an existing activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Activity record ID to set the meta-field value for
$body = new \Swagger\Client\Model\IdMetaBody2(); // \Swagger\Client\Model\IdMetaBody2 | 

try {
    $result = $apiInstance->patchAppApiActivityMeta($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->patchAppApiActivityMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Activity record ID to set the meta-field value for |
 **body** | [**\Swagger\Client\Model\IdMetaBody2**](../Model/IdMetaBody2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchActivity**
> \Swagger\Client\Model\ActivityEntity patchPatchActivity($body, $id)

Update an existing activity

Update an existing activity, you can pass all or just a subset of all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ActivityEditForm(); // \Swagger\Client\Model\ActivityEditForm | 
$id = "id_example"; // string | Activity ID to update

try {
    $result = $apiInstance->patchPatchActivity($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->patchPatchActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActivityEditForm**](../Model/ActivityEditForm.md)|  |
 **id** | **string**| Activity ID to update |

### Return type

[**\Swagger\Client\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostActivity**
> \Swagger\Client\Model\ActivityEntity postPostActivity($body)

Creates a new activity

Creates a new activity and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ActivityEditForm(); // \Swagger\Client\Model\ActivityEditForm | 

try {
    $result = $apiInstance->postPostActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->postPostActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActivityEditForm**](../Model/ActivityEditForm.md)|  |

### Return type

[**\Swagger\Client\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostActivityRate**
> \Swagger\Client\Model\ActivityRate postPostActivityRate($body, $id)

Adds a new rate to an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ActivityRateForm(); // \Swagger\Client\Model\ActivityRateForm | 
$id = "id_example"; // string | The activity to add the rate for

try {
    $result = $apiInstance->postPostActivityRate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->postPostActivityRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActivityRateForm**](../Model/ActivityRateForm.md)|  |
 **id** | **string**| The activity to add the rate for |

### Return type

[**\Swagger\Client\Model\ActivityRate**](../Model/ActivityRate.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

