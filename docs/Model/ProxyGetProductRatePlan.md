# ProxyGetProductRatePlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by_id** | **string** | The ID of the Zuora user who created the &#x60;ProductRatePlan&#x60; object. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when the &#x60;ProductRatePlan&#x60; object was created. **Character limit**: 29 **Values**: automatically generated | [optional] 
**description** | **string** | A description of the product rate plan. **Character limit**: 500 **Values**: a string of 500 characters or fewer | [optional] 
**effective_end_date** | [**\DateTime**](Date.md) | The date when the product rate plan expires and can&#39;t be subscribed to. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**effective_start_date** | [**\DateTime**](Date.md) | The date when the product rate plan becomes available and can be subscribed to. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**id** | **string** | Object identifier. | [optional] 
**name** | **string** | The name of the product rate plan. The name doesn&#39;t have to be unique in a Product Catalog, but the name has to be unique within a product. **Character limit**: 100 **Values**: a string of 100 characters or fewer | [optional] 
**product_id** | **string** | The [ID of the product](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Product) that contains the product rate plan. **Character limit**: 32 **Values**: a string of 32 characters or fewer | [optional] 
**updated_by_id** | **string** | The ID of the last user to update the object. **Character limit**: 32 **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the object was last updated. **Character limit**: 29 **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


