# ProxyModifyAccountingCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gl_account_name** | **string** | The account name in general ledger (GL) that corresponds to accounting code. **Character limit**: 255 **Z-Finance Required:** Yes | [optional] 
**gl_account_number** | **string** | The account number in the GL that corresponds to the accounting code. **Character limit**: 50 **Z-Finance Required:** Yes | [optional] 
**name** | **string** | The name of the accounting code. **Character limit**: 100 **Z-Finance Required:** No | [optional] 
**notes** | **string** | Any note about the accounting code. **Character limit:** 2000 **Z-Finance Required**: No | [optional] 
**status** | **string** | The accounting code status. On create, the accounting code is created in Active status by default. Possible values:  - Active - Inactive **Character limit:** N/A **Z-Finance Required****: **No | [optional] 
**type** | **string** | The accounting code type. Possible values:  - AccountsReceivable - Cash - OtherAssets - CustomerCashOnAccount - DeferredRevenue - SalesTaxPayable - OtherLiabilities - SalesRevenue - SalesDiscounts - OtherRevenue - OtherEquity - BadDebt - OtherExpenses **Character limit**: N/A **Z-Finance Required:** No | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


