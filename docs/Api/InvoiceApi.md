# Swagger\Client\InvoiceApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGetInvoice**](InvoiceApi.md#getgetinvoice) | **GET** /api/invoices/{id} | Returns one invoice.
[**getGetInvoices**](InvoiceApi.md#getgetinvoices) | **GET** /api/invoices | Returns a paginated collection of invoices.

# **getGetInvoice**
> \Swagger\Client\Model\Invoice getGetInvoice($id)

Returns one invoice.

Needs permission: view_invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getGetInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGetInvoices**
> \Swagger\Client\Model\InvoiceCollection[] getGetInvoices($begin, $end, $customers, $status, $page, $size)

Returns a paginated collection of invoices.

Needs permission: view_invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$begin = "begin_example"; // string | Only records after this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss)
$end = "end_example"; // string | Only records before this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss)
$customers = array(new \Swagger\Client\Model\null[]()); // null[] | List of customer IDs to filter, e.g.: customers[]=1&customers[]=2
$status = array(new \Swagger\Client\Model\null[]()); // null[] | Invoice status: pending, paid, canceled, new. Default: all
$page = "page_example"; // string | The page to display, renders a 404 if not found (default: 1)
$size = "size_example"; // string | The amount of entries for each page (default: 50)

try {
    $result = $apiInstance->getGetInvoices($begin, $end, $customers, $status, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getGetInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin** | **string**| Only records after this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss) | [optional]
 **end** | **string**| Only records before this date will be included (format: HTML5 datetime-local, e.g. YYYY-MM-DDThh:mm:ss) | [optional]
 **customers** | [**null[]**](../Model/.md)| List of customer IDs to filter, e.g.: customers[]&#x3D;1&amp;customers[]&#x3D;2 | [optional] [default to []]
 **status** | [**null[]**](../Model/.md)| Invoice status: pending, paid, canceled, new. Default: all | [optional] [default to []]
 **page** | **string**| The page to display, renders a 404 if not found (default: 1) | [optional]
 **size** | **string**| The amount of entries for each page (default: 50) | [optional]

### Return type

[**\Swagger\Client\Model\InvoiceCollection[]**](../Model/InvoiceCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

