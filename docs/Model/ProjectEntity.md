# ProjectEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_title** | **string** |  | [optional] 
**customer** | **int** |  | [optional] 
**id** | **int** |  | [optional] 
**name** | **string** |  | 
**order_number** | **string** |  | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) | Attention: Accessor MUST be used, otherwise date will be serialized in UTC. | [optional] 
**start** | [**\DateTime**](\DateTime.md) | Attention: Accessor MUST be used, otherwise date will be serialized in UTC. | [optional] 
**end** | [**\DateTime**](\DateTime.md) | Attention: Accessor MUST be used, otherwise date will be serialized in UTC. | [optional] 
**comment** | **string** |  | [optional] 
**visible** | **bool** |  | [optional] [default to true]
**billable** | **bool** |  | [optional] [default to true]
**meta_fields** | [**\Swagger\Client\Model\ProjectMeta[]**](ProjectMeta.md) |  | [optional] 
**teams** | [**\Swagger\Client\Model\Team[]**](Team.md) |  | [optional] 
**global_activities** | **bool** |  | [optional] [default to true]
**number** | **string** |  | [optional] 
**budget** | **float** |  | [optional] [default to 0]
**time_budget** | **int** |  | [optional] [default to 0]
**budget_type** | **string** |  | [optional] 
**color** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

