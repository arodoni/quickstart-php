# GETUsageType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Customer account ID. | [optional] 
**account_name** | **string** | Customer account name. | [optional] 
**account_number** | **string** | Customer account number. | [optional] 
**charge_number** | **string** | Number of the rate-plan charge that pays for this usage. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**id** | **string** | Unique ID for the usage item. | [optional] 
**quantity** | **string** | Number of units used. | [optional] 
**source_name** | **string** | Source of the usage data. Possible values are: &#x60;Import&#x60;, &#x60;API&#x60;. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | Start date of the time period in which usage is tracked. Zuora uses this field value to determine the usage date. | [optional] 
**status** | **string** | Possible values are: &#x60;Importing&#x60;, &#x60;Pending&#x60;, &#x60;Processed&#x60;. | [optional] 
**submission_date_time** | [**\DateTime**](\DateTime.md) | Date when usage was submitted. | [optional] 
**subscription_number** | **string** | Number of the subscription covering this usage. | [optional] 
**unit_of_measure** | **string** | Unit used to measure consumption, as configured in the web-based UI at **Z-Billing &gt; Settings**. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


