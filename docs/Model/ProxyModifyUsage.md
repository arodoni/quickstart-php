# ProxyModifyUsage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_date_time** | [**\DateTime**](\DateTime.md) | The end date and time of a range of time when usage is tracked. Use this field for reporting; this field doesn&#39;t affect usage calculation. **Character limit**: 29 **Values**: a valid [date and time value](https://knowledgecenter.zuora.com/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**quantity** | **double** | Indicates the number of units used. **Character limit**: 16 **Values**: a valid decimal amount equal to or greater than 0 | [optional] 
**rbe_status** | **string** | Indicates if the rating and billing engine (RBE) processed usage data for an invoice. **Character limit**: 9 **Values**: automatically generated to be one of the following values: &#x60;Importing&#x60;, &#x60;Pending&#x60;, &#x60;Processed&#x60; | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start date and time of a range of time when usage is tracked. Zuora uses this field value to determine the usage date. Unlike the &#x60;EndDateTime&#x60;, the &#x60;StartDateTime&#x60; field does affect usage calculation. **Character limit**: 29 **Values**: a valid [date and time value](https://knowledgecenter.zuora.com/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**submission_date_time** | [**\DateTime**](\DateTime.md) | The date when usage was submitted. **Character limit**: 29 **Values**: automatically generated | [optional] 
**uom** | **string** | Specifies the units to measure usage. Units of measure are configured in the web-based UI. Your values depend on your configuration in **Z-Billing &gt; Settings**. **Character limit**: **Values**: a valid unit of measure | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


