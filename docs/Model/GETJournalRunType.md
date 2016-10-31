# GETJournalRunType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregate_currency** | **bool** | dummy | [optional] 
**executed_on** | [**\DateTime**](\DateTime.md) | Date and time the journal run was executed. | [optional] 
**journal_entry_date** | [**\DateTime**](Date.md) | Date of the journal entry. | [optional] 
**number** | **string** | Journal run number. | [optional] 
**segmentation_rule_name** | **string** | Name of GL segmentation rule used in the journal run. | [optional] 
**status** | **string** | Status of the journal run.   The possible values are: * Pending * Processing * Completed * Error * CancelInprogress * Cancelled * DeleteInprogress | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**target_end_date** | [**\DateTime**](Date.md) | The target end date of the journal run. | [optional] 
**target_start_date** | [**\DateTime**](Date.md) | The target start date of the journal run. | [optional] 
**total_journal_entry_count** | **int** | Total number of journal entries in the journal run. | [optional] 
**transaction_types** | [**\Swagger\Client\Model\GETJournalRunTransactionType[]**](GETJournalRunTransactionType.md) | Transaction types included in the journal run. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


