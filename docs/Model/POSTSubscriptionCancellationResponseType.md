# POSTSubscriptionCancellationResponseType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelled_date** | [**\DateTime**](Date.md) | The date that the subscription was canceled. | [optional] 
**invoice_id** | **string** | ID of the invoice, if one is generated. | [optional] 
**paid_amount** | **string** | Amount paid. | [optional] 
**payment_id** | **string** | ID of the payment, if a payment is collected. | [optional] 
**subscription_id** | **string** | The subscription ID. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**total_delta_mrr** | **string** | Change in the subscription monthly recurring revenue as a result of the update. | [optional] 
**total_delta_tcv** | **string** | Change in the total contracted value of the subscription as a result of the update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


