# GETProductRatePlanChargePricingType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency used by the charge model. For example: USD or EUR | [optional] 
**discount_amount** | **string** | Value subtracted from price in currency specified. Used only when the charge model is DiscountFixedAmount. | [optional] 
**discount_percentage** | **string** | Percent discount applied to the price. Used only when the charge model is DiscountPercentage. | [optional] 
**included_units** | **string** | Specifies the number of units in the base set of units when the charge model is Overage. | [optional] 
**overage_price** | **string** | Price per unit when base set of units is exceeded. Used only when charge model is Overage or Tiered with Overage. | [optional] 
**price** | **string** | The decimal value that applies when the charge model is not tiered | [optional] 
**tiers** | [**\Swagger\Client\Model\GETProductRatePlanChargePricingTierType[]**](GETProductRatePlanChargePricingTierType.md) | Container for one or many defined tier ranges with distinct pricing.  Applies when model is &#x60;Tiered&#x60;, &#x60;TieredWithOverage&#x60;, or &#x60;Volume&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


