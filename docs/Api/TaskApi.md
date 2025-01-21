# Swagger\Client\TaskApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteTask**](TaskApi.md#deletedeletetask) | **DELETE** /api/tasks/{id} | Delete an existing task record
[**getGetTask**](TaskApi.md#getgettask) | **GET** /api/tasks/{id} | Returns one task
[**getGetTasks**](TaskApi.md#getgettasks) | **GET** /api/tasks | Returns a collection of tasks
[**getTasksTimesheets**](TaskApi.md#gettaskstimesheets) | **GET** /api/tasks/{id}/timesheets | Returns a collection of timesheets for one task
[**patchAssignTask**](TaskApi.md#patchassigntask) | **PATCH** /api/tasks/{id}/assign | Assign a task to the current user
[**patchCloseTask**](TaskApi.md#patchclosetask) | **PATCH** /api/tasks/{id}/close | Close a task for the current user
[**patchKimaipluginTaskmanagementApiTaskMeta**](TaskApi.md#patchkimaiplugintaskmanagementapitaskmeta) | **PATCH** /api/tasks/{id}/meta | Sets the value of a meta-field for an existing task
[**patchLogTask**](TaskApi.md#patchlogtask) | **PATCH** /api/tasks/{id}/log | Logs work for a task record
[**patchPatchTask**](TaskApi.md#patchpatchtask) | **PATCH** /api/tasks/{id} | Update an existing task
[**patchReopenTask**](TaskApi.md#patchreopentask) | **PATCH** /api/tasks/{id}/reopen | Reopens a task for the current user
[**patchStartTask**](TaskApi.md#patchstarttask) | **PATCH** /api/tasks/{id}/start | Start working on a task
[**patchStopTask**](TaskApi.md#patchstoptask) | **PATCH** /api/tasks/{id}/stop | Stops a task record for the current user
[**patchUnassignTask**](TaskApi.md#patchunassigntask) | **PATCH** /api/tasks/{id}/unassign | Unassign a task from the current user
[**postPostTask**](TaskApi.md#postposttask) | **POST** /api/tasks | Creates a new Task

# **deleteDeleteTask**
> deleteDeleteTask($id)

Delete an existing task record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task record ID to delete

try {
    $apiInstance->deleteDeleteTask($id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteDeleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task record ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTask**
> \Swagger\Client\Model\Task getGetTask($id)

Returns one task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to fetch

try {
    $result = $apiInstance->getGetTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getGetTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to fetch |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetTasks**
> \Swagger\Client\Model\Task[] getGetTasks($search_term, $customers, $projects, $activities, $tags, $users, $teams, $status, $page_size, $page, $size, $order, $order_by)

Returns a collection of tasks

Attention: This is a GET request, you can pass in every field of the form as query parameter. Array values need to be written like this: /api/tasks?projects[]=1&projects[]=2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = "search_term_example"; // string | Free search term
$customers = "customers_example"; // string | Customer IDs
$projects = "projects_example"; // string | Project IDs
$activities = "activities_example"; // string | Activity IDs
$tags = "tags_example"; // string | Comma separated list of tag names
$users = "users_example"; // string | User IDs
$teams = "teams_example"; // string | Team IDs
$status = "status_example"; // string | One or more status. Allowed values: pending, progress, closed (default: pending and progress)
$page_size = "page_size_example"; // string | DEPRECATED: The amount of entries for each page (default: 50)
$page = "page_example"; // string | The page to display, renders a 404 if not found (default: 1)
$size = "size_example"; // string | The amount of entries for each page (default: 50)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: DESC)
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: title, customer, project, activity, description, status, user, begin, end, team (default: end)

try {
    $result = $apiInstance->getGetTasks($search_term, $customers, $projects, $activities, $tags, $users, $teams, $status, $page_size, $page, $size, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getGetTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_term** | **string**| Free search term | [optional]
 **customers** | **string**| Customer IDs | [optional]
 **projects** | **string**| Project IDs | [optional]
 **activities** | **string**| Activity IDs | [optional]
 **tags** | **string**| Comma separated list of tag names | [optional]
 **users** | **string**| User IDs | [optional]
 **teams** | **string**| Team IDs | [optional]
 **status** | **string**| One or more status. Allowed values: pending, progress, closed (default: pending and progress) | [optional]
 **page_size** | **string**| DEPRECATED: The amount of entries for each page (default: 50) | [optional]
 **page** | **string**| The page to display, renders a 404 if not found (default: 1) | [optional]
 **size** | **string**| The amount of entries for each page (default: 50) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: DESC) | [optional]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: title, customer, project, activity, description, status, user, begin, end, team (default: end) | [optional]

### Return type

[**\Swagger\Client\Model\Task[]**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasksTimesheets**
> \Swagger\Client\Model\TimesheetCollectionExpanded[] getTasksTimesheets($id)

Returns a collection of timesheets for one task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTasksTimesheets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTasksTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TimesheetCollectionExpanded[]**](../Model/TimesheetCollectionExpanded.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAssignTask**
> \Swagger\Client\Model\Task patchAssignTask($id)

Assign a task to the current user

Assign a currently unassigned task to the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to update

try {
    $result = $apiInstance->patchAssignTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchAssignTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to update |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCloseTask**
> \Swagger\Client\Model\Task patchCloseTask($id)

Close a task for the current user

Closes an assigned task for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to close

try {
    $result = $apiInstance->patchCloseTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchCloseTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to close |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchKimaipluginTaskmanagementApiTaskMeta**
> \Swagger\Client\Model\Task patchKimaipluginTaskmanagementApiTaskMeta($id, $body)

Sets the value of a meta-field for an existing task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task record ID to set the meta-field value for
$body = new \Swagger\Client\Model\IdMetaBody1(); // \Swagger\Client\Model\IdMetaBody1 | 

try {
    $result = $apiInstance->patchKimaipluginTaskmanagementApiTaskMeta($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchKimaipluginTaskmanagementApiTaskMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task record ID to set the meta-field value for |
 **body** | [**\Swagger\Client\Model\IdMetaBody1**](../Model/IdMetaBody1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLogTask**
> \Swagger\Client\Model\TimesheetExpanded patchLogTask($body, $id)

Logs work for a task record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TaskLogWorkForm(); // \Swagger\Client\Model\TaskLogWorkForm | 
$id = "id_example"; // string | Task ID to log times for

try {
    $result = $apiInstance->patchLogTask($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchLogTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TaskLogWorkForm**](../Model/TaskLogWorkForm.md)|  |
 **id** | **string**| Task ID to log times for |

### Return type

[**\Swagger\Client\Model\TimesheetExpanded**](../Model/TimesheetExpanded.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchTask**
> \Swagger\Client\Model\Task patchPatchTask($body, $id)

Update an existing task

Update an existing task, you can pass all or just a subset of all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TaskEditForm(); // \Swagger\Client\Model\TaskEditForm | 
$id = "id_example"; // string | Task ID to update

try {
    $result = $apiInstance->patchPatchTask($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchPatchTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TaskEditForm**](../Model/TaskEditForm.md)|  |
 **id** | **string**| Task ID to update |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchReopenTask**
> \Swagger\Client\Model\Task patchReopenTask($id)

Reopens a task for the current user

Reopens an assigned task for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to reopen

try {
    $result = $apiInstance->patchReopenTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchReopenTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to reopen |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchStartTask**
> \Swagger\Client\Model\Task patchStartTask($id)

Start working on a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to start

try {
    $result = $apiInstance->patchStartTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchStartTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to start |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchStopTask**
> \Swagger\Client\Model\Task patchStopTask($id)

Stops a task record for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to stop

try {
    $result = $apiInstance->patchStopTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchStopTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to stop |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUnassignTask**
> \Swagger\Client\Model\Task patchUnassignTask($id)

Unassign a task from the current user

Unassign a currently assigned task from the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Task ID to update

try {
    $result = $apiInstance->patchUnassignTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->patchUnassignTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Task ID to update |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostTask**
> \Swagger\Client\Model\Task postPostTask($body)

Creates a new Task

Creates a new task and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TaskEditForm(); // \Swagger\Client\Model\TaskEditForm | 

try {
    $result = $apiInstance->postPostTask($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postPostTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TaskEditForm**](../Model/TaskEditForm.md)|  |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

