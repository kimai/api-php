# Swagger\Client\CustomerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeleteCustomer**](CustomerApi.md#deletedeletecustomer) | **DELETE** /api/customers/{id} | Delete an existing customer
[**deleteDeleteCustomerRate**](CustomerApi.md#deletedeletecustomerrate) | **DELETE** /api/customers/{id}/rates/{rateId} | Deletes one rate for a customer
[**getGetCustomer**](CustomerApi.md#getgetcustomer) | **GET** /api/customers/{id} | Returns one customer
[**getGetCustomerRates**](CustomerApi.md#getgetcustomerrates) | **GET** /api/customers/{id}/rates | Returns a collection of all rates for one customer
[**getGetCustomers**](CustomerApi.md#getgetcustomers) | **GET** /api/customers | Returns a collection of customers (which are visible to the user)
[**patchAppApiCustomerMeta**](CustomerApi.md#patchappapicustomermeta) | **PATCH** /api/customers/{id}/meta | Sets the value of a meta-field for an existing customer
[**patchPatchCustomer**](CustomerApi.md#patchpatchcustomer) | **PATCH** /api/customers/{id} | Update an existing customer
[**postPostCustomer**](CustomerApi.md#postpostcustomer) | **POST** /api/customers | Creates a new customer
[**postPostCustomerRate**](CustomerApi.md#postpostcustomerrate) | **POST** /api/customers/{id}/rates | Adds a new rate to a customer

# **deleteDeleteCustomer**
> deleteDeleteCustomer($id)

Delete an existing customer

[DANGER] This will also delete ALL linked projects, project activities and timesheets. Maybe use `PATCH` instead and mark it as inactive with `visible=false`?

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Customer ID to delete

try {
    $apiInstance->deleteDeleteCustomer($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteDeleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer ID to delete |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeleteCustomerRate**
> deleteDeleteCustomerRate($id, $rate_id)

Deletes one rate for a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The customer whose rate will be removed
$rate_id = "rate_id_example"; // string | The rate to remove

try {
    $apiInstance->deleteDeleteCustomerRate($id, $rate_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteDeleteCustomerRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The customer whose rate will be removed |
 **rate_id** | **string**| The rate to remove |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetCustomer**
> \Swagger\Client\Model\CustomerEntity getGetCustomer($id)

Returns one customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getGetCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetCustomerRates**
> \Swagger\Client\Model\CustomerRate[] getGetCustomerRates($id)

Returns a collection of all rates for one customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The customer whose rates will be returned

try {
    $result = $apiInstance->getGetCustomerRates($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getGetCustomerRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The customer whose rates will be returned |

### Return type

[**\Swagger\Client\Model\CustomerRate[]**](../Model/CustomerRate.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetCustomers**
> \Swagger\Client\Model\CustomerCollection[] getGetCustomers($visible, $order, $order_by, $term)

Returns a collection of customers (which are visible to the user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$visible = "1"; // string | Visibility status to filter customers: 1=visible, 2=hidden, 3=both
$order = "order_example"; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$order_by = "order_by_example"; // string | The field by which results will be ordered. Allowed values: id, name (default: name)
$term = "term_example"; // string | Free search term

try {
    $result = $apiInstance->getGetCustomers($visible, $order, $order_by, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getGetCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **visible** | **string**| Visibility status to filter customers: 1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;both | [optional] [default to 1]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **order_by** | **string**| The field by which results will be ordered. Allowed values: id, name (default: name) | [optional]
 **term** | **string**| Free search term | [optional]

### Return type

[**\Swagger\Client\Model\CustomerCollection[]**](../Model/CustomerCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAppApiCustomerMeta**
> \Swagger\Client\Model\CustomerEntity patchAppApiCustomerMeta($id, $body)

Sets the value of a meta-field for an existing customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Customer record ID to set the meta-field value for
$body = new \Swagger\Client\Model\IdMetaBody3(); // \Swagger\Client\Model\IdMetaBody3 | 

try {
    $result = $apiInstance->patchAppApiCustomerMeta($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->patchAppApiCustomerMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer record ID to set the meta-field value for |
 **body** | [**\Swagger\Client\Model\IdMetaBody3**](../Model/IdMetaBody3.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPatchCustomer**
> \Swagger\Client\Model\CustomerEntity patchPatchCustomer($body, $id)

Update an existing customer

Update an existing customer, you can pass all or just a subset of all attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerEditForm(); // \Swagger\Client\Model\CustomerEditForm | 
$id = "id_example"; // string | Customer ID to update

try {
    $result = $apiInstance->patchPatchCustomer($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->patchPatchCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerEditForm**](../Model/CustomerEditForm.md)|  |
 **id** | **string**| Customer ID to update |

### Return type

[**\Swagger\Client\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostCustomer**
> \Swagger\Client\Model\CustomerEntity postPostCustomer($body)

Creates a new customer

Creates a new customer and returns it afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerEditForm(); // \Swagger\Client\Model\CustomerEditForm | 

try {
    $result = $apiInstance->postPostCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->postPostCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerEditForm**](../Model/CustomerEditForm.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostCustomerRate**
> \Swagger\Client\Model\CustomerRate postPostCustomerRate($body, $id)

Adds a new rate to a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerRateForm(); // \Swagger\Client\Model\CustomerRateForm | 
$id = "id_example"; // string | The customer to add the rate for

try {
    $result = $apiInstance->postPostCustomerRate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->postPostCustomerRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerRateForm**](../Model/CustomerRateForm.md)|  |
 **id** | **string**| The customer to add the rate for |

### Return type

[**\Swagger\Client\Model\CustomerRate**](../Model/CustomerRate.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

