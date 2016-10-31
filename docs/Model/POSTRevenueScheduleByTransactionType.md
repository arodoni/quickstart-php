# POSTRevenueScheduleByTransactionType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**notes** | **string** | Additional information about this record.  Character Limit: 2,000 | [optional] 
**revenue_distributions** | [**\Swagger\Client\Model\POSTDistributionItemType[]**](POSTDistributionItemType.md) | An array of revenue distributions. Represents how you want to distribute revenue for this revenue schedule. You can distribute revenue into a maximum of 250 accounting periods with one revenue schedule.  The sum of newAmounts must equal the the Charge Amount of the specified Invoice Item. | [optional] 
**revenue_event** | [**\Swagger\Client\Model\POSTRevenueScheduleByTransactionTypeRevenueEvent**](POSTRevenueScheduleByTransactionTypeRevenueEvent.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


