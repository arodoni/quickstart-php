# POSTJournalEntryType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_period_name** | **string** | Name of the accounting period. The open-ended accounting period is named &#x60;Open-Ended&#x60;. | 
**currency** | **string** | The type of currency used.   Currency must be active in **Z-Billing Settings &gt; Customize Currencies.** | 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**journal_entry_date** | [**\DateTime**](Date.md) | Date of the journal entry. | 
**journal_entry_items** | [**\Swagger\Client\Model\POSTJournalEntryItemType[]**](POSTJournalEntryItemType.md) | Key name that represents the list of journal entry items. | 
**notes** | **string** | The number associated with the revenue event.  Character limit: 2,000 | [optional] 
**segments** | [**\Swagger\Client\Model\POSTJournalEntrySegmentType[]**](POSTJournalEntrySegmentType.md) | List of segments that apply to the summary journal entry. | [optional] 
**transferred_to_accounting** | **string** | Status shows whether the journal entry has been transferred to an accounting system. The possible values are &#x60;No&#x60;, &#x60;Processing&#x60;, &#x60;Yes&#x60;, &#x60;Error&#x60;, &#x60;Ignore&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


