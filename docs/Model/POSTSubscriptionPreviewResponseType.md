# POSTSubscriptionPreviewResponseType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Invoice amount. | [optional] 
**amount_without_tax** | **string** | Invoice amount minus tax. | [optional] 
**charge_metrics** | [**\Swagger\Client\Model\POSTSubscriptionPreviewResponseTypeChargeMetrics**](POSTSubscriptionPreviewResponseTypeChargeMetrics.md) |  | [optional] 
**contracted_mrr** | **string** | Monthly recurring revenue of the subscription. | [optional] 
**invoice_items** | [**\Swagger\Client\Model\POSTSubscriptionPreviewInvoiceItemsType[]**](POSTSubscriptionPreviewInvoiceItemsType.md) | Container for invoice items. | [optional] 
**invoice_target_date** | [**\DateTime**](Date.md) | Date through which charges are calculated on the invoice, as yyyy-mm-dd. | [optional] 
**preview_charge_metrics_response** | **string** |  | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**tax_amount** | **string** | Tax amount on the invoice. | [optional] 
**total_contracted_value** | **string** | Total contracted value of the subscription. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


