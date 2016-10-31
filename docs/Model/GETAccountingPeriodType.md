# GETAccountingPeriodType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by** | **string** | ID of the user who created the accounting period. | [optional] 
**created_on** | [**\DateTime**](\DateTime.md) | Date and time when the accounting period was created. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**end_date** | [**\DateTime**](Date.md) | The end date of the accounting period. | [optional] 
**file_ids** | [**\Swagger\Client\Model\GETAccountingPeriodFileIdsType[]**](GETAccountingPeriodFileIdsType.md) | File IDs of the reports available for the accounting period. You can retrieve the reports by specifying the file ID in a [Get Files](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Get_Files) REST API call. | [optional] 
**fiscal_year** | **string** | Fiscal year of the accounting period. | [optional] 
**fiscal_quarter** | **int** | dummy | [optional] 
**id** | **string** | ID of the accounting period. | [optional] 
**name** | **string** | Name of the accounting period. | [optional] 
**notes** | **string** | Any optional notes about the accounting period. | [optional] 
**run_trial_balance_end** | [**\DateTime**](\DateTime.md) | Date and time that the trial balance was completed. If the trial balance status is &#x60;Pending&#x60;, &#x60;Processing&#x60;, or &#x60;Error&#x60;, this field is &#x60;null&#x60;. | [optional] 
**run_trial_balance_error_message** | **string** | If trial balance status is Error, an error message is returned in this field. | [optional] 
**run_trial_balance_start** | [**\DateTime**](\DateTime.md) | Date and time that the trial balance was run. If the trial balance status is Pending, this field is null. | [optional] 
**run_trial_balance_status** | **string** | Status of the trial balance for the accounting period. Possible values:  * &#x60;Pending&#x60; * &#x60;Processing&#x60; * &#x60;Completed&#x60; * &#x60;Error&#x60; | [optional] 
**start_date** | [**\DateTime**](Date.md) | The start date of the accounting period. | [optional] 
**status** | **string** | Status of the accounting period. Possible values: * &#x60;Open&#x60; * &#x60;PendingClose&#x60; * &#x60;Closed&#x60; | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**updated_by** | **string** | ID of the user who last updated the accounting period. | [optional] 
**updated_on** | [**\DateTime**](\DateTime.md) | Date and time when the accounting period was last updated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


