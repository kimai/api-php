# ExpenseEditForm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**begin** | [**\DateTime**](\DateTime.md) |  | 
**user** | **int** | User ID | 
**project** | **int** | Project ID | 
**activity** | **int** | Activity ID | [optional] 
**expense_category** | **int** | Expense-Category ID | 
**description** | **string** | Description for the expense | [optional] 
**cost** | **float** | Cost per entry (multiplied by multiplier). This field is not available to every user. | [optional] 
**multiplier** | **float** |  | 
**billable_mode** | **string** | Whether this item should be refundable (yes) or not (no) or if it should be calculated by inherited settings from customer, project and activity (auto). | 
**exported** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

