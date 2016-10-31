# Swagger\Client\JournalRunsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEJournalRun**](JournalRunsApi.md#dELETEJournalRun) | **DELETE** /journal-runs/{jr-number} | Delete journal run
[**gETJournalRun**](JournalRunsApi.md#gETJournalRun) | **GET** /journal-runs/{jr-number} | Get journal run
[**pOSTJournalRun**](JournalRunsApi.md#pOSTJournalRun) | **POST** /journal-runs | Create journal run
[**pUTJournalRun**](JournalRunsApi.md#pUTJournalRun) | **PUT** /journal-runs/{jr-number}/cancel | Cancel journal run


# **dELETEJournalRun**
> \Swagger\Client\Model\CommonResponseType dELETEJournalRun($jr_number)

Delete journal run

This reference describes how to delete a journal run using the REST API.                         You can only delete journal runs that have already been canceled. See [Cancel Journal Run](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Journal_Runs/Cancel_Journal_Run) for more information.                         You must have the \"Delete Cancelled Journal Run\" [Z-Finance user permission](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles) enabled to delete journal runs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\JournalRunsApi();
$jr_number = "jr_number_example"; // string | Journal run number. Must be a valid journal run number in the format `JR-00000001`.

try {
    $result = $api_instance->dELETEJournalRun($jr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalRunsApi->dELETEJournalRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jr_number** | **string**| Journal run number. Must be a valid journal run number in the format &#x60;JR-00000001&#x60;. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETJournalRun**
> \Swagger\Client\Model\GETJournalRunType gETJournalRun($jr_number)

Get journal run

This REST API reference describes how to get information about a journal run. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\JournalRunsApi();
$jr_number = "jr_number_example"; // string | Journal run number. Must be a valid journal run number in the format `JR-00000001`.

try {
    $result = $api_instance->gETJournalRun($jr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalRunsApi->gETJournalRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jr_number** | **string**| Journal run number. Must be a valid journal run number in the format &#x60;JR-00000001&#x60;. |

### Return type

[**\Swagger\Client\Model\GETJournalRunType**](../Model/GETJournalRunType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTJournalRun**
> \Swagger\Client\Model\POSTJournalRunResponseType pOSTJournalRun($request)

Create journal run

This REST API reference describes how to create a journal run. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\JournalRunsApi();
$request = new \Swagger\Client\Model\POSTJournalRunType(); // \Swagger\Client\Model\POSTJournalRunType | 

try {
    $result = $api_instance->pOSTJournalRun($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalRunsApi->pOSTJournalRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTJournalRunType**](../Model/\Swagger\Client\Model\POSTJournalRunType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTJournalRunResponseType**](../Model/POSTJournalRunResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTJournalRun**
> \Swagger\Client\Model\CommonResponseType pUTJournalRun($jr_number)

Cancel journal run

This reference describes how to cancel a journal run using the REST API.            The summary journal entries in the journal run are canceled asynchronously. See the \"Example\" section below for details.            You must have the \"Cancel Journal Run\" [Z-Finance user permission](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/Administrator_Settings/User_Roles/Z-Finance_Roles) enabled to cancel journal runs.  ## Notes When you cancel a journal run, the summary journal entries associated with that journal run are canceled asynchronously. A response of `{ \"success\": true }` means only that the specified journal run has a status of \"Pending\", \"Error\", or \"Completed\" and therefore can be canceled, but does not mean that the whole journal run was successfully canceled.  For example, let's say you want to cancel journal run JR-00000075. The journal run status is \"Completed\" and it contains ten journal entries. One of the journal entries has its Transferred to Accounting status set to \"Yes\", meaning that the entry cannot be canceled. The workflow might go as follows: 1. You make an API call to cancel the journal run. 2. The journal run status is \"Completed\", so you receive a response of `{ \"success\": true }`. 3. Zuora begins asynchronously canceling journal entries associated with the journal run. The journal entry whose Transferred to Accounting status is \"Yes\" fails to be canceled. The cancelation process continues, and the other journal entries are successfully canceled. 4. The journal run status remains as \"Completed\". The status does not change to \"Canceled\" because the journal run still contains a journey entry that is not canceled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\JournalRunsApi();
$jr_number = "jr_number_example"; // string | Journal run number. Must be a valid journal run number in the format JR-00000001.  You can only cancel a journal run whose status is \"Pending\", \"Error\", or \"Completed\".

try {
    $result = $api_instance->pUTJournalRun($jr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalRunsApi->pUTJournalRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jr_number** | **string**| Journal run number. Must be a valid journal run number in the format JR-00000001.  You can only cancel a journal run whose status is \&quot;Pending\&quot;, \&quot;Error\&quot;, or \&quot;Completed\&quot;. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

