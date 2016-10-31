# GETJournalEntryDetailTypeWithoutSuccess

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_period_name** | **string** | Name of the accounting period that the journal entry belongs to. | [optional] 
**aggregate_currency** | **bool** | Returns true if the journal entry is aggregating currencies. That is, if the journal entry was created when the [Aggregate transactions with different currencies during a JournalRun](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/C_Configure_accounting_rules#Aggregate_transactions_with_different_currencies_during_a_Journal_Run) setting was configured to \&quot;Yes\&quot;. Otherwise, returns &#x60;false&#x60;. | [optional] 
**currency** | **string** | Currency used. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**home_currency** | **string** | Home currency used. | [optional] 
**journal_entry_date** | [**\DateTime**](Date.md) | Date of the journal entry. | [optional] 
**journal_entry_items** | [**\Swagger\Client\Model\GETJournalEntryItemType[]**](GETJournalEntryItemType.md) | Key name that represents the list of journal entry items. | [optional] 
**notes** | **string** | Additional information about this record. Character limit: 2,000 | [optional] 
**number** | **string** | Journal entry number in the format JE-00000001. | [optional] 
**segments** | [**\Swagger\Client\Model\GETJournalEntrySegmentType[]**](GETJournalEntrySegmentType.md) | List of segments that apply to the summary journal entry. | [optional] 
**status** | **string** | Status of journal entry. An enum with the values&#x60;Created&#x60; or &#x60;Cancelled&#x60;. | [optional] 
**time_period_end** | [**\DateTime**](Date.md) | End date of time period included in the journal entry. | [optional] 
**time_period_start** | [**\DateTime**](Date.md) | Start date of time period included in the journal entry. | [optional] 
**transaction_type** | **string** | Transaction type of the transactions included in the summary journal entry. | [optional] 
**transfer_date_time** | [**\DateTime**](\DateTime.md) | Date and time that transferredToAccounting was changed to &#x60;Yes&#x60;. This field is returned only when transferredToAccounting is &#x60;Yes&#x60;. Otherwise, this field is &#x60;null&#x60;. | [optional] 
**transferred_by** | **string** | User ID of the person who changed transferredToAccounting to &#x60;Yes&#x60;. This field is returned only when transferredToAccounting is &#x60;Yes&#x60;. Otherwise, this field is &#x60;null&#x60;. | [optional] 
**transferred_to_accounting** | **string** | Status shows whether the journal entry has been transferred to an accounting system. The possible values are &#x60;No&#x60;, &#x60;Processing&#x60;, &#x60;Yes&#x60;, &#x60;Error&#x60;, &#x60;Ignore&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


