# POSTJournalEntryItemType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_code_name** | **string** | Name of the accounting code. | 
**accounting_code_type** | **string** | Accounting code type. The accounting code types are:  * &#x60;AccountsReceivable&#x60; *  &#x60;Cash&#x60; *  &#x60;OtherAssets&#x60; *  &#x60;CustomerCashOnAccount &#x60; * &#x60;DeferredRevenue&#x60; * &#x60;SalesTaxPayable&#x60; * &#x60;OtherLiabilities&#x60; * &#x60;SalesRevenue&#x60; * &#x60;SalesDiscounts&#x60; * &#x60;OtherRevenue&#x60;  * &#x60;OtherEquity&#x60; * &#x60;BadDebt&#x60;   * &#x60;OtherExpenses&#x60;  This field is required if accountingCodeName is not unique. | [optional] 
**amount** | **string** | Journal entry item amount in transaction currency. | 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**home_currency_amount** | **string** | Journal entry item amount in home currency.  This field is required if you have set your home currency for foreign currency conversion. Otherwise, do not pass this field. | [optional] 
**type** | **string** | Type of journal entry item. An enum with the value &#x60;Credit&#x60; or &#x60;Debit&#x60;. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


