# Swagger\Client\ExpenseApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteExpense**](ExpenseApi.md#deletedeleteexpense) | **DELETE** /api/expenses/{id} | Delete an existing expense record
[**getGetExpense**](ExpenseApi.md#getgetexpense) | **GET** /api/expenses/{id} | Returns one expense
[**getGetExpenseCategories**](ExpenseApi.md#getgetexpensecategories) | **GET** /api/expenses/categories | Get all visible expense categories (requires \&quot;manage_expense_category\&quot; permission)
[**getGetExpenses**](ExpenseApi.md#getgetexpenses) | **GET** /api/expenses | Returns a collection of expenses
[**patchDuplicateExpense**](ExpenseApi.md#patchduplicateexpense) | **PATCH** /api/expenses/{id}/duplicate | Duplicates an existing expense record
[**patchKimaipluginExpensesApiExpenseMeta**](ExpenseApi.md#patchkimaipluginexpensesapiexpensemeta) | **PATCH** /api/expenses/{id}/meta | Sets the value of a meta-field for an existing expense
[**patchPatchExpense**](ExpenseApi.md#patchpatchexpense) | **PATCH** /api/expenses/{id} | Update an existing expense
[**postPostExpense**](ExpenseApi.md#postpostexpense) | **POST** /api/expenses | Creates a new expense

# **deleteDeleteExpense**
> deleteDeleteExpense($id)

Delete an existing expense record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Expense record ID to delete

try {
    $apiInstance->deleteDeleteExpense($id);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->deleteDeleteExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Expense record ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetExpense**
> \Swagger\Client\Model\ExpenseEntity getGetExpense($id)

Returns one expense

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Expense ID to fetch

try {
    $result = $apiInstance->getGetExpense($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->getGetExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Expense ID to fetch |

### Return type

[**\Swagger\Client\Model\ExpenseEntity**](../Model/ExpenseEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetExpenseCategories**
> \Swagger\Client\Model\ExpenseCategory getGetExpenseCategories()

Get all visible expense categories (requires \"manage_expense_category\" permission)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGetExpenseCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->getGetExpenseCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetExpenses**
> \Swagger\Client\Model\ExpenseEntity[] getGetExpenses($users, $customers, $projects, $activities, $begin, $end, $refundable, $exported, $term, $order_by, $order, $page, $size)

Returns a collection of expenses

The result is paginated, by default limited to 50 entries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$users = "users_example"; // string | User IDs
$customers = "customers_example"; // string | Customer IDs
$projects = "projects_example"; // string | Project IDs
$activities = "activities_example"; // string | Activity IDs
$begin = "begin_example"; // string | Only records after this date will be included (format: HTML5)
$end = "end_example"; // string | Only records before this date will be included (format: HTML5)
$refundable = "refundable_example"; // string | Use this flag if you want to filter for refundable expenses. Allowed values: 0=not refundable, 1=refundable (default: all)
$exported = "exported_example"; // string | Use this flag if you want to filter for export state. Allowed values: 0=not exported, 1=exported (default: all)
$term = "term_example"; // string | Free search term
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: begin, end, duration, total, category, cost, user, customer, project, activity, description, exported, refundable, multiplier (default: begin)
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: DESC)
$page = "page_example"; // string | The page to display, renders a 404 if not found (default: 1)
$size = "size_example"; // string | The amount of entries for each page (default: 50)

try {
    $result = $apiInstance->getGetExpenses($users, $customers, $projects, $activities, $begin, $end, $refundable, $exported, $term, $order_by, $order, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->getGetExpenses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users** | **string**| User IDs | [optional]
 **customers** | **string**| Customer IDs | [optional]
 **projects** | **string**| Project IDs | [optional]
 **activities** | **string**| Activity IDs | [optional]
 **begin** | **string**| Only records after this date will be included (format: HTML5) | [optional]
 **end** | **string**| Only records before this date will be included (format: HTML5) | [optional]
 **refundable** | **string**| Use this flag if you want to filter for refundable expenses. Allowed values: 0&#x3D;not refundable, 1&#x3D;refundable (default: all) | [optional]
 **exported** | **string**| Use this flag if you want to filter for export state. Allowed values: 0&#x3D;not exported, 1&#x3D;exported (default: all) | [optional]
 **term** | **string**| Free search term | [optional]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: begin, end, duration, total, category, cost, user, customer, project, activity, description, exported, refundable, multiplier (default: begin) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: DESC) | [optional]
 **page** | **string**| The page to display, renders a 404 if not found (default: 1) | [optional]
 **size** | **string**| The amount of entries for each page (default: 50) | [optional]

### Return type

[**\Swagger\Client\Model\ExpenseEntity[]**](../Model/ExpenseEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchDuplicateExpense**
> \Swagger\Client\Model\ExpenseEntity patchDuplicateExpense($id)

Duplicates an existing expense record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Expense record ID to duplicate

try {
    $result = $apiInstance->patchDuplicateExpense($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->patchDuplicateExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Expense record ID to duplicate |

### Return type

[**\Swagger\Client\Model\ExpenseEntity**](../Model/ExpenseEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchKimaipluginExpensesApiExpenseMeta**
> \Swagger\Client\Model\ExpenseEntity patchKimaipluginExpensesApiExpenseMeta($id, $body)

Sets the value of a meta-field for an existing expense

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Expense record ID to set the meta-field value for
$body = new \Swagger\Client\Model\IdMetaBody(); // \Swagger\Client\Model\IdMetaBody | 

try {
    $result = $apiInstance->patchKimaipluginExpensesApiExpenseMeta($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->patchKimaipluginExpensesApiExpenseMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Expense record ID to set the meta-field value for |
 **body** | [**\Swagger\Client\Model\IdMetaBody**](../Model/IdMetaBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ExpenseEntity**](../Model/ExpenseEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchExpense**
> \Swagger\Client\Model\ExpenseEntity patchPatchExpense($body, $id)

Update an existing expense

Update an existing expense, you can pass all or just a subset of all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExpenseEditForm(); // \Swagger\Client\Model\ExpenseEditForm | 
$id = "id_example"; // string | Expense ID to update

try {
    $result = $apiInstance->patchPatchExpense($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->patchPatchExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExpenseEditForm**](../Model/ExpenseEditForm.md)|  |
 **id** | **string**| Expense ID to update |

### Return type

[**\Swagger\Client\Model\ExpenseEntity**](../Model/ExpenseEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostExpense**
> \Swagger\Client\Model\ExpenseEntity postPostExpense($body)

Creates a new expense

Creates a new expense and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExpenseEditForm(); // \Swagger\Client\Model\ExpenseEditForm | 

try {
    $result = $apiInstance->postPostExpense($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->postPostExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExpenseEditForm**](../Model/ExpenseEditForm.md)|  |

### Return type

[**\Swagger\Client\Model\ExpenseEntity**](../Model/ExpenseEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

