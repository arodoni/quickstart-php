# GETSubscriptionRatePlanType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**id** | **string** | Rate plan ID. | [optional] 
**last_change_type** | **string** | The last amendment on the rate plan.  Possible Values:  * &#x60;Add&#x60; * &#x60;Update&#x60; * &#x60;Remove&#x60; | [optional] 
**product_id** | **string** |  | [optional] 
**product_name** | **string** |  | [optional] 
**product_rate_plan_id** | **string** |  | [optional] 
**product_sku** | **string** | The unique SKU for the product. | [optional] 
**rate_plan_charges** | [**\Swagger\Client\Model\GETSubscriptionRatePlanChargesType[]**](GETSubscriptionRatePlanChargesType.md) | Container for one or more charges. | [optional] 
**rate_plan_name** | **string** | Name of the rate plan. | [optional] 
**subscription_product_features** | [**\Swagger\Client\Model\GETSubscriptionProductFeatureType[]**](GETSubscriptionProductFeatureType.md) | Container for one or more features.   Only available when the following settings are enabled:  * The Entitlements feature in your tenant. * The [Enable Feature Specification in Product and Subscriptions](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Default_Subscription_Settings#Enable_Feature_Specification_in_Products_and_Subscriptions.3F) setting in Billing Settings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


