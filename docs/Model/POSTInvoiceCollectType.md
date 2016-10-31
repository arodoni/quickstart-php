# POSTInvoiceCollectType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_key** | **string** | Customer account ID or account number. | 
**invoice_date** | [**\DateTime**](Date.md) | The invoice date that should appear on the invoice being generated, in &#x60;yyyy-mm-dd&#x60; format. If &#x60;invoiceId&#x60; is not specified and this value is omitted, the current date is used by default. | [optional] 
**invoice_id** | **string** | The ID of an existing invoice for which to collect payment using the account&#39;s default payment method. If this value is specified, no new invoice is generated, and both &#x60;invoiceDate&#x60; and &#x60;invoiceTargetDate&#x60; are ignored. | [optional] 
**invoice_target_date** | [**\DateTime**](Date.md) | The date, in &#x60;yyyy-mm-dd&#x60; format, through which charges on this account will be processed when generating a new invoice.If &#x60;invoiceId&#x60; is not specified and this value is omitted, the current date is used by default. | [optional] 
**payment_gateway** | **string** | The name of the gateway that will be used for the payment. Must be a valid gateway name and the gateway must support the specific payment method. If a value is not specified, the default gateway on the Account will be used. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


