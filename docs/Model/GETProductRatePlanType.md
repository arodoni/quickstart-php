# GETProductRatePlanType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**description** | **string** | Rate plan description. | [optional] 
**effective_end_date** | [**\DateTime**](Date.md) | Final date the rate plan is active, as &#x60;yyyy-mm-dd&#x60;. After this date, the rate plan status is &#x60;Expired&#x60;. | [optional] 
**effective_start_date** | [**\DateTime**](Date.md) | First date the rate plan is active (i.e., available to be subscribed to), as &#x60;yyyy-mm-dd&#x60;.  Before this date, the status is &#x60;NotStarted&#x60;. | [optional] 
**id** | **string** | Unique product rate-plan charge ID. | [optional] 
**name** | **string** | Name of the product rate-plan charge. (Not required to be unique.) | [optional] 
**product_rate_plan_charges** | [**\Swagger\Client\Model\GETProductRatePlanChargeType[]**](GETProductRatePlanChargeType.md) | Field attributes describing the product rate plan charges: | [optional] 
**status** | **string** | Possible vales are: &#x60;Active&#x60;, &#x60;Expired&#x60;, &#x60;NotStarted&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


