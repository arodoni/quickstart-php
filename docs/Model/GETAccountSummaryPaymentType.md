# GETAccountSummaryPaymentType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**effective_date** | [**\DateTime**](Date.md) | Effective date as &#x60;yyyy-mm-dd&#x60;. | [optional] 
**id** | **string** | Payment ID. | [optional] 
**paid_invoices** | [**\Swagger\Client\Model\GETAccountSummaryPaymentInvoiceType[]**](GETAccountSummaryPaymentInvoiceType.md) | Container for paid invoices for this subscription. | [optional] 
**payment_number** | **string** | Payment number. | [optional] 
**payment_type** | **string** | Payment type; possible values are: &#x60;External&#x60;, &#x60;Electronic&#x60;. | [optional] 
**status** | **string** | Payment status. Possible values are: &#x60;Draft&#x60;, &#x60;Processing&#x60;, &#x60;Processed&#x60;, &#x60;Error&#x60;, &#x60;Voided&#x60;, &#x60;Canceled&#x60;, &#x60;Posted&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


