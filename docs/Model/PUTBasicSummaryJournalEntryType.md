# PUTBasicSummaryJournalEntryType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**journal_entry_items** | [**\Swagger\Client\Model\PUTJournalEntryItemType[]**](PUTJournalEntryItemType.md) | Key name that represents the list of journal entry items. | [optional] 
**notes** | **string** | Additional information about this record.  ***Character limit:*** 2,000 | [optional] 
**transferred_to_accounting** | **string** | Status shows whether the journal entry has been transferred to an accounting system. The possible values are &#x60;No&#x60;, &#x60;Processing&#x60;, &#x60;Yes&#x60;, &#x60;Error&#x60;, &#x60;Ignore&#x60;.    This field cannot be changed after the summary journal entry has been canceled.    **Note:** The Z-Finance ***Override Transferred to Accounting*** permission is required to change &#x60;transferredToAccounting&#x60; from &#x60;Yes&#x60; to any other value. See [Z-Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles) for more information. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


