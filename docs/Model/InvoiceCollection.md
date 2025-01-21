# InvoiceCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**invoice_number** | **string** |  | 
**comment** | **string** |  | [optional] 
**customer** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | 
**user** | [**\Swagger\Client\Model\User**](User.md) |  | 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**total** | **float** |  | [optional] [default to 0]
**tax** | **float** |  | [optional] [default to 0]
**currency** | **string** |  | 
**due_days** | **int** |  | [optional] [default to 30]
**vat** | **float** |  | [optional] [default to 0]
**status** | **string** |  | [optional] [default to 'new']
**payment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**meta_fields** | [**\Swagger\Client\Model\InvoiceMeta[]**](InvoiceMeta.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

