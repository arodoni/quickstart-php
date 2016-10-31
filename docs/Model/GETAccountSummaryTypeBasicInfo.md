# GETAccountSummaryTypeBasicInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | Account number. | [optional] 
**balance** | **string** | Current outstanding balance. | [optional] 
**batch** | **string** | The alias name given to a batch. A string of 50 characters or less. | [optional] 
**bill_cycle_day** | **string** | Billing cycle day (BCD), the day of the month when a bill run generates invoices for the account. | [optional] 
**currency** | **string** | A currency value. See [Customize Currencies](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Customize_Currencies) for more information. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**default_payment_method** | [**\Swagger\Client\Model\GETAccountSummaryTypeBasicInfoDefaultPaymentMethod**](GETAccountSummaryTypeBasicInfoDefaultPaymentMethod.md) |  | [optional] 
**id** | **string** | Account ID. | [optional] 
**last_invoice_date** | [**\DateTime**](Date.md) | Date of the most recent invoice for the account; null if no invoice has ever been generated. | [optional] 
**last_payment_amount** | **string** | Amount of the most recent payment collected for the account; null if no payment has ever been collected. | [optional] 
**last_payment_date** | [**\DateTime**](Date.md) | Date of the most recent payment collected for the account. Null if no payment has ever been collected. | [optional] 
**name** | **string** | Account name. | [optional] 
**status** | **string** | Account status; possible values are: &#x60;Active&#x60;, &#x60;Draft&#x60;, &#x60;Canceled&#x60;. | [optional] 
**tags** | **string** | dummy | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


