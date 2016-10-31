# POSTJournalRunType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_period_name** | **string** | Name of the accounting period.  This field determines the target start and end dates of the journal run.  Required if you don&#39;t include &#39;targetStartDate&#39; and &#39;targetEndDate&#39;. | [optional] 
**journal_entry_date** | [**\DateTime**](Date.md) | Date of the journal entry. | 
**target_end_date** | [**\DateTime**](Date.md) | The target end date of the journal run.  If you include &#39;accountingPeriodName&#39;, the &#39;targetEndDate&#39; must be empty or the same as the end date of the accounting period specified in &#39;accountingPeriodName&#39;. | [optional] 
**target_start_date** | [**\DateTime**](Date.md) | The target start date of the journal run.  Required if you include targetEndDate.  If you include &#39;accountingPeriodName&#39;, the &#39;targetStartDate&#39; must be empty or the same as the start date of the accounting period specified in &#39;accountingPeriodName&#39;. | [optional] 
**transaction_types** | [**\Swagger\Client\Model\POSTJournalRunTransactionType[]**](POSTJournalRunTransactionType.md) | Transaction types included in the journal run.  You can include one or more transaction types. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


