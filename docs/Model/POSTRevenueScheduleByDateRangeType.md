# POSTRevenueScheduleByDateRangeType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**distribution_type** | **string** | How you want to distribute the revenue. The distribution types are:  * Daily Distribution: Distributes revenue evenly across each day between the recognitionStart and recognitionEnd dates. * Monthly Distribution (Back Load): Back loads the revenue so you distribute the monthly amount in the partial month at the end only. * Monthly Distribution (Front Load): Front loads the revenue so you distribute the monthly amount in the partial month at the beginning only. * Monthly Distribution (Proration by Days): Splits the revenue amount between the two partial months.  See [Components and Configuration Options](https://knowledgecenter.zuora.com/CC_Finance/Revenue_Recognition/Revenue_Rule_Models/C_Revenue_Rule_Model_Components#Distribution) for more information about Front Load, Back Load, and Proration by Days for Monthly Distribution.  **Note:** To use any of the Monthly Distribution options, you must have the \&quot;Monthly recognition over time\&quot; model enabled in **Settings &gt; Z-Finance Settings &gt; Manage Revenue Recognition Models**. | [optional] 
**notes** | **string** | Additional information about this record. | [optional] 
**recognition_end** | [**\DateTime**](Date.md) | The end date of a recognition period in &#x60;YYYY-MM-DD&#x60; format.   The maximum difference of the &#x60;recognitionStart&#x60; and &#x60;recognitionEnd&#x60; date fields is equal to 250 multiplied by the length of an accounting period. | 
**recognition_start** | [**\DateTime**](Date.md) | The start date of a recognition period in &#x60;YYYY-MM-DD&#x60; format.  If there is a closed accounting period between the &#x60;recognitionStart&#x60; and &#x60;recognitionEnd&#x60; dates, the revenue that would be placed in the closed accounting period is instead placed in the next open accounting period. | 
**revenue_event** | [**\Swagger\Client\Model\POSTRevenueScheduleByDateRangeTypeRevenueEvent**](POSTRevenueScheduleByDateRangeTypeRevenueEvent.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


