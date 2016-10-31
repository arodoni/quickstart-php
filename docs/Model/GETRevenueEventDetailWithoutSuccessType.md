# GETRevenueEventDetailWithoutSuccessType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | An account ID. | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | The date when the record was created in YYYY-MM-DD HH:MM:SS format. | [optional] 
**currency** | **string** | The type of currency used. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**event_type** | **string** | Label of the revenue event type. Revenue event type labels can be duplicated. You can configure your revenue event type labels by navigating to **Settings &gt; Z-Finance Settings &gt; Configure Revenue Event Types** in the Zuora UI. The default revenue event types are:    * Invoice Posted   * Invoice Item Adjustment Created   * Invoice Canceled   * Invoice Item Adjustment Canceled   * Revenue Distributed | [optional] 
**notes** | **string** | Additional information about this record. | [optional] 
**number** | **string** | The revenue event number created when a revenue event occurs. | [optional] 
**recognition_end** | [**\DateTime**](Date.md) | The end date of a recognition period in YYYY-MM-DD format.   The maximum difference of the recognitionStart and recognitionEnd date fields is equal to 250 multiplied by the length of an accounting period. | [optional] 
**recognition_start** | [**\DateTime**](Date.md) | The start date of a recognition period in YYYY-MM-DD format. | [optional] 
**revenue_items** | [**\Swagger\Client\Model\GETRevenueItemType[]**](GETRevenueItemType.md) | Revenue items are listed in ascending order by the accounting period start date. | [optional] 
**subscription_charge_id** | **string** | The original subscription charge ID. | [optional] 
**subscription_id** | **string** | The original subscription ID. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


