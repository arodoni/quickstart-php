# ProxyCreateUsage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the account associated with the usage data. This field is required if no value is specified for the &#x60;AccountNumber&#x60; field. **Character limit**: 32 **Values**: a valid [account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account) | [optional] 
**account_number** | **string** | The number of the account associated with the usage data. This field is required if no value is specified for the &#x60;AccountId&#x60; field. **Character limit**: 50 **Values**: a valid [account number](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account) | [optional] 
**charge_id** | **string** | The OrginalId of the rate plan charge related to the usage record, e.g., &#x60;2c9081a03c63c94c013c6873357a0117&#x60; **Character limit**: 32 **Values**: a valid [rate plan charge OriginalID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/RatePlanCharge) | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end date and time of a range of time when usage is tracked. Use this field for reporting; this field doesn&#39;t affect usage calculation. **Character limit**: 29 **Values**: a valid [date and time value](https://knowledgecenter.zuora.com/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**quantity** | **double** | Indicates the number of units used. **Character limit**: 16 **Values**: a valid decimal amount equal to or greater than 0 | [optional] 
**rbe_status** | **string** | Indicates if the rating and billing engine (RBE) processed usage data for an invoice. **Character limit**: 9 **Values**: automatically generated to be one of the following values: &#x60;Importing&#x60;, &#x60;Pending&#x60;, &#x60;Processed&#x60; | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start date and time of a range of time when usage is tracked. Zuora uses this field value to determine the usage date. Unlike the &#x60;EndDateTime&#x60;, the &#x60;StartDateTime&#x60; field does affect usage calculation. **Character limit**: 29 **Values**: a valid [date and time value](https://knowledgecenter.zuora.com/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**submission_date_time** | [**\DateTime**](\DateTime.md) | The date when usage was submitted. **Character limit**: 29 **Values**: automatically generated | [optional] 
**subscription_id** | **string** | The ID of the subscription that contains the fees related to the usage data. **Character limit**: 32 **Values**: a valid [subscription ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Subscription) | [optional] 
**uom** | **string** | Specifies the units to measure usage. Units of measure are configured in the web-based UI. Your values depend on your configuration in **Z-Billing &gt; Settings**. **Character limit**: **Values**: a valid unit of measure | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


