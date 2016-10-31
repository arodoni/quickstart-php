# PUTRenewSubscriptionResponseType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **string** | Invoice ID, if one is generated. | [optional] 
**paid_amount** | **string** | Payment amount, if payment is collected. | [optional] 
**payment_id** | **string** | Payment ID, if payment is collected. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**term_end_date** | [**\DateTime**](Date.md) | Date the new subscription term ends, as yyyy-mm-dd. | [optional] 
**term_start_date** | [**\DateTime**](Date.md) | Date the new subscription term begins, as yyyy-mm-dd. | [optional] 
**total_delta_mrr** | **string** | Change in the subscription monthly recurring revenue as a result of the update. For a renewal, this is the MRR of the subscription in the new term. | [optional] 
**total_delta_tcv** | **string** | Change in the total contracted value of the subscription as a result of the update. For a renewal, this is the TCV of the subscription in the new term. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


