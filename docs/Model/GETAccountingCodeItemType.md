# GETAccountingCodeItemType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The category associated with the accounting code.  Possible values: * &#x60;Assets&#x60; * &#x60;Liabilities&#x60; * &#x60;Equity&#x60; * &#x60;Revenue&#x60; * &#x60;Expenses&#x60; | [optional] 
**created_by** | **string** | The ID of the user who created the accounting code. | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | Date and time when the accounting code was created. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**gl_account_name** | **string** | Name of the account in your general ledger.  Field only available if you have Z-Finance enabled. | [optional] 
**gl_account_number** | **string** | Account number in your general ledger.  Field only available if you have Z-Finance enabled. | [optional] 
**id** | **string** | ID of the accounting code. | [optional] 
**name** | **string** | Name of the accounting code. | [optional] 
**notes** | **string** | Any optional notes for the accounting code. | [optional] 
**status** | **string** | The accounting code status.  Possible values: * &#x60;Active&#x60; * &#x60;Inactive&#x60; | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**type** | **string** | Accounting code type.  Possible values: * &#x60;AccountsReceivable&#x60; * &#x60;Cash&#x60; * &#x60;OtherAssets&#x60; * &#x60;CustomerCashOnAccount&#x60; * &#x60;DeferredRevenue&#x60; * &#x60;SalesTaxPayable&#x60; * &#x60;OtherLiabilities&#x60; * &#x60;SalesRevenue&#x60; * &#x60;SalesDiscounts&#x60; * &#x60;OtherRevenue&#x60; * &#x60;OtherEquity&#x60; * &#x60;BadDebt&#x60; * &#x60;OtherExpenses&#x60; | [optional] 
**updated_by** | **string** | The ID of the user who last updated the accounting code. | [optional] 
**updated_on** | [**\DateTime**](\DateTime.md) | Date and time when the accounting code was last updated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


