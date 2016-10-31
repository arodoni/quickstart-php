# PUTSpecificDateAllocationType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | The revenue schedule amount, which is the sum of all revenue items. This field cannot be null and must be formatted based on the currency, such as &#x60;JPY 30&#x60; or &#x60;USD 30.15&#x60;. Test out the currency to ensure you are using the proper formatting otherwise, the response will fail and this error message is returned: &#x60;Allocation amount with wrong decimal places.&#x60; | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**distribute_on** | [**\DateTime**](Date.md) | The recognition date on which to distribute revenue for milestone-based recognition.  Type: date in &#x60;YYYY-MM-DD&#x60; format. | 
**distribution_type** | **string** | How to distribute the revenue for milestone-based recognition.  Possible values are: * specific date (delta fixed amount) * specific date (delta percent total) * specific date (delta percent undistributed) | 
**event_type** | **string** | Label of the revenue event type. Revenue event type labels can be duplicated. You can configure your revenue event type labels by navigating to **Settings &gt; Z-Finance Settings &gt; Configure Revenue Event Types** in the Zuora UI. The default revenue event types are: * Invoice Posted * Invoice Item Adjustment Created * Invoice Canceled * Invoice Item Adjustment Canceled * Revenue Distributed | [optional] 
**event_type_system_id** | **string** | System ID of the revenue event type. Each eventType has a unique system ID. You can configure your revenue event type system IDs by navigating to **Settings &gt; Z-Finance Settings &gt; Configure Revenue Event Types** in the Zuora UI. | [optional] 
**notes** | **string** | Additional information about this record. | [optional] 
**percentage** | **string** | Percentage of the total recognition amount or total undistributed to distribute.  Required if distributionType is either: * specific date (delta percent total) * specific date (delta percent undistributed) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


