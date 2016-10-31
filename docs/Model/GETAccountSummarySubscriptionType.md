# GETAccountSummarySubscriptionType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpq_bundle_json_id__qt** | **string** | dummy | [optional] 
**opportunity_close_date__qt** | **string** | dummy | [optional] 
**opportunity_name__qt** | **string** | dummy | [optional] 
**quote_business_type__qt** | **string** | dummy | [optional] 
**quote_number__qt** | **string** | dummy | [optional] 
**quote_type__qt** | **string** | dummy | [optional] 
**auto_renew** | **bool** | If &#x60;true&#x60;, auto-renew is enabled. If &#x60;false&#x60;, auto-renew is disabled. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**id** | **string** | Subscription ID. | [optional] 
**initial_term** | **string** | Duration of the initial subscription term in whole months. | [optional] 
**rate_plans** | [**\Swagger\Client\Model\GETAccountSummarySubscriptionRatePlanType[]**](GETAccountSummarySubscriptionRatePlanType.md) | Container for rate plans for this subscription. | [optional] 
**renewal_term** | **string** | Duration of the renewal term in whole months. | [optional] 
**status** | **string** | Subscription status; possible values are: &#x60;Draft&#x60;, &#x60;PendingActivation&#x60;, &#x60;PendingAcceptance&#x60;, &#x60;Active&#x60;, &#x60;Cancelled&#x60;, &#x60;Expired&#x60;. | [optional] 
**subscription_number** | **string** | Subscription Number. | [optional] 
**subscription_start_date** | [**\DateTime**](Date.md) | Subscription start date. | [optional] 
**term_end_date** | [**\DateTime**](Date.md) | End date of the subscription term. If the subscription is evergreen, this is either null or equal to the cancellation date, as appropriate. | [optional] 
**term_start_date** | [**\DateTime**](Date.md) | Start date of the subscription term. If this is a renewal subscription, this date is different than the subscription start date. | [optional] 
**term_type** | **string** | Possible values are: &#x60;TERMED&#x60;, &#x60;EVERGREEN&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


