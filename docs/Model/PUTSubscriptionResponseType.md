# PUTSubscriptionResponseType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Invoice amount. Preview mode only. | [optional] 
**amount_without_tax** | **string** | Invoice amount minus tax. Preview mode only. | [optional] 
**charge_metrics** | [**\Swagger\Client\Model\PUTSubscriptionResponseTypeChargeMetrics**](PUTSubscriptionResponseTypeChargeMetrics.md) |  | [optional] 
**invoice_id** | **string** | Invoice ID, if an invoice is generated during the update. | [optional] 
**invoice_items** | [**\Swagger\Client\Model\PUTSubscriptionPreviewInvoiceItemsType[]**](PUTSubscriptionPreviewInvoiceItemsType.md) | Container for invoice items. | [optional] 
**invoice_target_date** | [**\DateTime**](Date.md) | Date through which charges are calculated on the invoice, as yyyy-mm-dd. Preview mode only. | [optional] 
**paid_amount** | **string** | Payment amount, if a payment is collected | [optional] 
**payment_id** | **string** | Payment ID, if a payment is collected. | [optional] 
**preview_charge_metrics_response** | **string** |  | [optional] 
**subscription_id** | **string** | The ID of the resulting new subscription. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**tax_amount** | **string** | Tax amount on the invoice. | [optional] 
**total_delta_mrr** | **string** | Change in the subscription monthly recurring revenue as a result of the update. | [optional] 
**total_delta_tcv** | **string** | Change in the total contracted value of the subscription as a result of the update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


