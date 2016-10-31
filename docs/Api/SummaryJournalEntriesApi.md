# Swagger\Client\SummaryJournalEntriesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETESummaryJournalEntry**](SummaryJournalEntriesApi.md#dELETESummaryJournalEntry) | **DELETE** /journal-entries/{je-number} | Delete summary journal entry
[**gETJournalEntriesInJournalRun**](SummaryJournalEntriesApi.md#gETJournalEntriesInJournalRun) | **GET** /journal-entries/journal-runs/{jr-number} | Get all summary journal entries in a journal run
[**gETJournalEntryDetail**](SummaryJournalEntriesApi.md#gETJournalEntryDetail) | **GET** /journal-entries/{je-number} | Get summary journal entry
[**pOSTJournalEntry**](SummaryJournalEntriesApi.md#pOSTJournalEntry) | **POST** /journal-entries | Create summary journal entry
[**pUTBasicSummaryJournalEntry**](SummaryJournalEntriesApi.md#pUTBasicSummaryJournalEntry) | **PUT** /journal-entries/{je-number}/basic-information | Update basic information of a summary journal entry
[**pUTSummaryJournalEntry**](SummaryJournalEntriesApi.md#pUTSummaryJournalEntry) | **PUT** /journal-entries/{je-number}/cancel | Cancel summary journal entry


# **dELETESummaryJournalEntry**
> \Swagger\Client\Model\CommonResponseType dELETESummaryJournalEntry($je_number)

Delete summary journal entry

This reference describes how to delete a summary journal entry using the REST API.  You must have the \"Delete Cancelled Journal Entry\" [Z-Finance user permission](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/Administrator_Settings/User_Roles/Z-Finance_Roles) enabled to delete summary journal entries.  A summary journal entry must be canceled before it can be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SummaryJournalEntriesApi();
$je_number = "je_number_example"; // string | Journal entry number in the format JE-00000001.

try {
    $result = $api_instance->dELETESummaryJournalEntry($je_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryJournalEntriesApi->dELETESummaryJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **je_number** | **string**| Journal entry number in the format JE-00000001. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETJournalEntriesInJournalRun**
> \Swagger\Client\Model\GETJournalEntriesInJournalRunType gETJournalEntriesInJournalRun($jr_number)

Get all summary journal entries in a journal run

This REST API reference describes how to retrieve information about all summary journal entries in a journal run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SummaryJournalEntriesApi();
$jr_number = "jr_number_example"; // string | Journal run number.

try {
    $result = $api_instance->gETJournalEntriesInJournalRun($jr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryJournalEntriesApi->gETJournalEntriesInJournalRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jr_number** | **string**| Journal run number. |

### Return type

[**\Swagger\Client\Model\GETJournalEntriesInJournalRunType**](../Model/GETJournalEntriesInJournalRunType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETJournalEntryDetail**
> \Swagger\Client\Model\GETJournalEntryDetailType gETJournalEntryDetail($je_number)

Get summary journal entry

This REST API reference describes how to get information about a summary journal entry by its journal entry number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SummaryJournalEntriesApi();
$je_number = "je_number_example"; // string | 

try {
    $result = $api_instance->gETJournalEntryDetail($je_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryJournalEntriesApi->gETJournalEntryDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **je_number** | **string**|  |

### Return type

[**\Swagger\Client\Model\GETJournalEntryDetailType**](../Model/GETJournalEntryDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTJournalEntry**
> \Swagger\Client\Model\POSTJournalEntryResponseType pOSTJournalEntry($request)

Create summary journal entry

This REST API reference describes how to manually create a summary journal entry. Request and response field descriptions and sample code are provided. ## Requirements 1.The sum of debits must equal the sum of credits in the summary journal entry.  2.The following applies only if you use foreign currency conversion:   * If you have configured [Aggregate transactions with different currencies during a Journal Run](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/C_Configure_accounting_rules#Aggregate_transactions_with_different_currencies_during_a_Journal_Run) to \"Yes\", the value of the **currency** field must be the same as your tenant's home currency. That is, you must create journal entries using your home currency.   * All journal entries in an accounting period must either all be aggregated or all be unaggregated. You cannot have a mix of aggregated and unaggregated journal entries in the same accounting period.  See [Foreign Currency Conversion for Summary Journal Entries](https://knowledgecenter.zuora.com/CC_Finance/Foreign_Currency_Conversion/Foreign_Currency_Conversion_for_Summary_Journal_Entries) for more information about currency aggregation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SummaryJournalEntriesApi();
$request = new \Swagger\Client\Model\POSTJournalEntryType(); // \Swagger\Client\Model\POSTJournalEntryType | 

try {
    $result = $api_instance->pOSTJournalEntry($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryJournalEntriesApi->pOSTJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTJournalEntryType**](../Model/\Swagger\Client\Model\POSTJournalEntryType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTJournalEntryResponseType**](../Model/POSTJournalEntryResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTBasicSummaryJournalEntry**
> \Swagger\Client\Model\CommonResponseType pUTBasicSummaryJournalEntry($je_number, $request)

Update basic information of a summary journal entry

This REST API reference describes how to update the basic information of a summary journal entry. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SummaryJournalEntriesApi();
$je_number = "je_number_example"; // string | Journal entry number in the format JE-00000001.
$request = new \Swagger\Client\Model\PUTBasicSummaryJournalEntryType(); // \Swagger\Client\Model\PUTBasicSummaryJournalEntryType | 

try {
    $result = $api_instance->pUTBasicSummaryJournalEntry($je_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryJournalEntriesApi->pUTBasicSummaryJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **je_number** | **string**| Journal entry number in the format JE-00000001. |
 **request** | [**\Swagger\Client\Model\PUTBasicSummaryJournalEntryType**](../Model/\Swagger\Client\Model\PUTBasicSummaryJournalEntryType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTSummaryJournalEntry**
> \Swagger\Client\Model\CommonResponseType pUTSummaryJournalEntry($je_number)

Cancel summary journal entry

This reference describes how to cancel a summary journal entry using the REST API.  You must have the \"Cancel Journal Entry\" [Z-Finance user permission](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/Administrator_Settings/User_Roles/Z-Finance_Roles) enabled to cancel summary journal entries.  A summary journal entry cannot be canceled if its Transferred to Accounting status is \"Yes\" or \"Processing\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SummaryJournalEntriesApi();
$je_number = "je_number_example"; // string | Journal entry number in the format JE-00000001.

try {
    $result = $api_instance->pUTSummaryJournalEntry($je_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryJournalEntriesApi->pUTSummaryJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **je_number** | **string**| Journal entry number in the format JE-00000001. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

