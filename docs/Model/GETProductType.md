# GETProductType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | Category of the product. Used by Zuora Quotes Guided Product Selector.  Possible values are:   - Base Products   - Add On Services   - Miscellaneous Products | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**description** | **string** | Optional product description. | [optional] 
**effective_end_date** | [**\DateTime**](Date.md) | The date when the product expires and cannot be subscribed to anymore, as &#x60;yyyy-mm-dd&#x60;. | [optional] 
**effective_start_date** | [**\DateTime**](Date.md) | The date when the product becomes available and can be subscribed to, as &#x60;yyyy-mm-dd&#x60;. | [optional] 
**id** | **string** | Product ID. | [optional] 
**name** | **string** | Product name, up to 100 characters. | [optional] 
**product_features** | [**\Swagger\Client\Model\GetProductFeatureType[]**](GetProductFeatureType.md) | Container for one or more product features. Only available when the following settings are enabled: - The Entitlements feature in your tenant - The [Enable Feature Specification in Product and Subscriptions](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Default_Subscription_Settings#Enable_Feature_Specification_in_Products_and_Subscriptions.3F) setting in Z-Billing Settings | [optional] 
**product_rate_plans** | [**\Swagger\Client\Model\GETProductRatePlanType[]**](GETProductRatePlanType.md) | Container for one or more product rate plans: | [optional] 
**sku** | **string** | Unique product SKU, up to 50 characters. | [optional] 
**tags** | **string** | dummy | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


