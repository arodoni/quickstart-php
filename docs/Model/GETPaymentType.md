# GETPaymentType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Customer account ID. | [optional] 
**account_name** | **string** | Customer account name. | [optional] 
**account_number** | **string** | Customer account number. | [optional] 
**amount** | **string** | Payment amount. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**effective_date** | [**\DateTime**](Date.md) | Effective payment date as _yyyy-mm-dd_. | [optional] 
**gateway_transaction_number** | **string** | Transaction ID from payment gateway. | [optional] 
**id** | **string** | PaymentID. | [optional] 
**paid_invoices** | [**\Swagger\Client\Model\GETPaidInvoicesType[]**](GETPaidInvoicesType.md) | Information about one or more invoices to which this payment was applied: | [optional] 
**payment_method_id** | **string** | Payment method. | [optional] 
**payment_number** | **string** | Unique payment number. | [optional] 
**status** | **string** | Possible values are: &#x60;Draft&#x60;, &#x60;Processing&#x60;, &#x60;Processed&#x60;, &#x60;Error&#x60;, &#x60;Voided&#x60;, &#x60;Canceled&#x60;, &#x60;Posted. | [optional] 
**type** | **string** | Possible values are: &#x60;External&#x60;, &#x60;Electronic&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


