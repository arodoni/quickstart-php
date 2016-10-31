# GETInvoicesInvoiceItemType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charge_amount** | **string** | The amount of the charge. This amount doesn&#39;t include taxes regardless if the charge&#39;s tax mode is inclusive or exclusive. | [optional] 
**charge_description** | **string** | Description of the charge. | [optional] 
**charge_id** | **string** | ID of the charge. | [optional] 
**charge_name** | **string** | Name of the charge. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**id** | **string** | Item ID. | [optional] 
**product_name** | **string** | Name of the product associated with this item. | [optional] 
**quantity** | **string** | Quantity of this item, in the configured unit of measure for the charge. | [optional] 
**service_end_date** | [**\DateTime**](Date.md) | End date of the service period for this item, i.e., the last day of the service period, as _yyyy-mm-dd_. | [optional] 
**service_start_date** | [**\DateTime**](Date.md) | Start date of the service period for this item, as _yyyy-mm-dd_. For a one-time fee item, the date of the charge. | [optional] 
**subscription_id** | **string** | ID of the subscription for this item. | [optional] 
**subscription_name** | **string** | Name of the subscription for this item. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**tax_amount** | **string** | Tax applied to the charge. | [optional] 
**unit_of_measure** | **string** | Unit used to measure consumption, as configured in the web-based UI at **Z-Billing &gt; Settings**. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


