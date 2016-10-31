# PUTSubscriptionSuspendResponseType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **string** | Invoice ID, if an invoice is generated during the subscription process. | [optional] 
**paid_amount** | **string** | Payment amount, if a payment is collected. | [optional] 
**payment_id** | **string** | Payment ID, if a payment is collected. | [optional] 
**resume_date** | [**\DateTime**](Date.md) | The date when subscription resumption takes effect, in the format yyyy-mm-dd. | [optional] 
**subscription_id** | **string** | The subscription ID. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**suspend_date** | [**\DateTime**](Date.md) | The date when subscription suspension takes effect, in the format yyyy-mm-dd. | [optional] 
**term_end_date** | [**\DateTime**](Date.md) | The date when the new subscription term ends, in the format yyyy-mm-dd. | [optional] 
**total_delta_tcv** | **string** | Change in the total contracted value of the subscription as a result of the update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


