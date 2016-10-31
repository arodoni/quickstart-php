# Swagger\Client\AccountingPeriodsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAccountingPeriod**](AccountingPeriodsApi.md#dELETEAccountingPeriod) | **DELETE** /accounting-periods/{ap-id} | Delete accounting period
[**gETAccountingPeriod**](AccountingPeriodsApi.md#gETAccountingPeriod) | **GET** /accounting-periods/{ap-id} | Get accounting period
[**gETAccountingPeriods**](AccountingPeriodsApi.md#gETAccountingPeriods) | **GET** /accounting-periods | Get all accounting periods
[**pOSTAccountingPeriod**](AccountingPeriodsApi.md#pOSTAccountingPeriod) | **POST** /accounting-periods | Create accounting period
[**pUTCloseAccountingPeriod**](AccountingPeriodsApi.md#pUTCloseAccountingPeriod) | **PUT** /accounting-periods/{ap-id}/close | Close accounting period
[**pUTPendingCloseAccountingPeriod**](AccountingPeriodsApi.md#pUTPendingCloseAccountingPeriod) | **PUT** /accounting-periods/{ap-id}/pending-close | Set accounting period to pending close
[**pUTReopenAccountingPeriod**](AccountingPeriodsApi.md#pUTReopenAccountingPeriod) | **PUT** /accounting-periods/{ap-id}/reopen | Re-open accounting period
[**pUTRunTrialBalance**](AccountingPeriodsApi.md#pUTRunTrialBalance) | **PUT** /accounting-periods/{ap-id}/run-trial-balance | Run trial balance
[**pUTUpdateAccountingPeriod**](AccountingPeriodsApi.md#pUTUpdateAccountingPeriod) | **PUT** /accounting-periods/{ap-id} | Update accounting period
[**proxyDELETEAccountingPeriod**](AccountingPeriodsApi.md#proxyDELETEAccountingPeriod) | **DELETE** /object/accounting-period/{id} | CRUD: Delete AccountingPeriod
[**proxyGETAccountingPeriod**](AccountingPeriodsApi.md#proxyGETAccountingPeriod) | **GET** /object/accounting-period/{id} | CRUD: Retrieve AccountingPeriod


# **dELETEAccountingPeriod**
> \Swagger\Client\Model\CommonResponseType dELETEAccountingPeriod($ap_id)

Delete accounting period

Deletes an accounting period.  Prerequisites -------------   * You must have Zuora Finance enabled on your tenant.   * You must have the Delete Accounting Period user permission. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).   Limitations -----------  The accounting period to be deleted:  * Must be the most recent accounting period  * Must be an open accounting period  * Must have no revenue distributed into it  * Must not have any active journal entries  * Must not be the open-ended accounting period  * Must not be in the process of running a trial balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period you want to delete.

try {
    $result = $api_instance->dELETEAccountingPeriod($ap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->dELETEAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period you want to delete. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAccountingPeriod**
> \Swagger\Client\Model\GETAccountingPeriodType gETAccountingPeriod($ap_id)

Get accounting period

Retrieves an accounting period. Prerequisites -------------  You must have Zuora Finance enabled on your tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period you want to get.

try {
    $result = $api_instance->gETAccountingPeriod($ap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->gETAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period you want to get. |

### Return type

[**\Swagger\Client\Model\GETAccountingPeriodType**](../Model/GETAccountingPeriodType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAccountingPeriods**
> \Swagger\Client\Model\GETAccountingPeriodsType gETAccountingPeriods()

Get all accounting periods

Retrieves all accounting periods on your tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();

try {
    $result = $api_instance->gETAccountingPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->gETAccountingPeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GETAccountingPeriodsType**](../Model/GETAccountingPeriodsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTAccountingPeriod**
> \Swagger\Client\Model\POSTAccountingPeriodResponseType pOSTAccountingPeriod($request)

Create accounting period

Creates an accounting period. Prerequisites ------------- * You must have Zuora Finance enabled on your tenant. * You must have the Create Accounting Period user permission. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/Z-Finance_Roles).  Limitations ----------- * When creating the first accounting period on your tenant, the start date must be equal to or earlier than the date of the earliest transaction on the tenant. * Start and end dates of accounting periods must be contiguous. For example, if one accounting period ends on January 31, the next period must start on February 1. * If you have the Revenue Recognition Package and have enabled the \"Monthly recognition over time\" revenue recognition model, the accounting period start date and end date must be on the first day and last day of the month, respectively. Note that the start and end dates do not necessarily have to be in the same month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$request = new \Swagger\Client\Model\POSTAccountingPeriodType(); // \Swagger\Client\Model\POSTAccountingPeriodType | 

try {
    $result = $api_instance->pOSTAccountingPeriod($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->pOSTAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTAccountingPeriodType**](../Model/\Swagger\Client\Model\POSTAccountingPeriodType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTAccountingPeriodResponseType**](../Model/POSTAccountingPeriodResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTCloseAccountingPeriod**
> \Swagger\Client\Model\CommonResponseType pUTCloseAccountingPeriod($ap_id)

Close accounting period

Close an [accounting period](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods) by accounting period ID.  Prerequisites ------------- You must have Zuora Finance enabled on your tenant. You must have the Manage Close Process and Run Trial Balance user permissions. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles). Limitations ----------- * The accounting period cannot already be closed. * The accounting period cannot be in the process of running a trial balance. * All earlier accounting periods must be closed. * There must be no required action items for the accounting period. See [Reconcile Transactions Before Closing an Accounting Period](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/G_Reconcile_transactions_before_closing_an_accounting_period) for more information.  Notes ----- When you close an accounting period in Zuora, a trial balance is automatically run for that period. A successful response means only that the accounting period is now closed, but does not mean that the trial balance has successfully completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period you want to close.

try {
    $result = $api_instance->pUTCloseAccountingPeriod($ap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->pUTCloseAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period you want to close. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTPendingCloseAccountingPeriod**
> \Swagger\Client\Model\CommonResponseType pUTPendingCloseAccountingPeriod($ap_id)

Set accounting period to pending close

Sets an accounting period to pending close.   Prerequisites -------------  * You must have Zuora Finance enabled on your tenant. * You must have the Manage Close Process and Run Trial Balance user permissions. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).              Limitations   -----------    * The accounting period cannot be closed or pending close.    * The accounting period cannot be in the process of running a trial balance.    * All earlier accounting periods must be closed.     Notes ----- When you set an accounting period to pending close in Zuora, a trial balance is automatically run for that period. A response of `{ \"success\": true }`  means only that the accounting period status is now pending close, but does not mean that the trial balance has successfully completed. You can use the Get Accounting Period REST API call to view details about the outcome of the trial balance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period you want to set to pending close.

try {
    $result = $api_instance->pUTPendingCloseAccountingPeriod($ap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->pUTPendingCloseAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period you want to set to pending close. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTReopenAccountingPeriod**
> \Swagger\Client\Model\CommonResponseType pUTReopenAccountingPeriod($ap_id)

Re-open accounting period

Re-opens an accounting period. See [Re-Open Accounting Periods](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/H_Reopen_accounting_periods) for more information. Prerequisites ------------- * You must have Zuora Finance enabled on your tenant. * You must have the Manage Close Process and Run Trial Balance user permissions. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).  Limitations ----------- * The accounting period must be closed or pending close. * You can only re-open an accounting period that is immediately previous to an open period. See [re-open an accounting period](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/H_Reopen_accounting_periods) for an example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period that you want to re-open.

try {
    $result = $api_instance->pUTReopenAccountingPeriod($ap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->pUTReopenAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period that you want to re-open. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTRunTrialBalance**
> \Swagger\Client\Model\CommonResponseType pUTRunTrialBalance($ap_id)

Run trial balance

Runs the trial balance for an accounting period. See [Run a Trial Balance](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/D_Run_a_trial_balance) for more information.  Prerequisites -------------  * You must have Zuora Finance enabled on your tenant.  * You must have the Manage Close Process and Run Trial Balance user permissions. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).             Limitations  -----------    * The accounting period must be open.    * The accounting period cannot already be in the process of running a trial balance.   Notes ----- The trial balance is run asynchronously. A response of `{ \"success\": true }` means only that the trial balance has started processing, but does not mean that the trial balance has successfully completed. You can use the [Get Accounting Period](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Accounting_Periods/Get_Accounting_Period) REST API call to view details about the outcome of the trial balance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period for which you want to run a trial balance.

try {
    $result = $api_instance->pUTRunTrialBalance($ap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->pUTRunTrialBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period for which you want to run a trial balance. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTUpdateAccountingPeriod**
> \Swagger\Client\Model\CommonResponseType pUTUpdateAccountingPeriod($ap_id, $request)

Update accounting period

Updates an accounting period.  Prerequisites -------------  * You must have Zuora Finance enabled on your tenant.  * You must have the Create Accounting Period user permission. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).  Limitations -----------  * You can update the start date of only the earliest accounting period on your tenant. You cannot update the start date of later periods.  * If you update the earliest accounting period, the start date must be equal to or earlier than the date of the earliest transaction on the tenant.  * Start and end dates of accounting periods must be contiguous. For example, if one accounting period ends on January 31, the next period must start on February 1.  * If you have the Revenue Recognition Package and have enabled the \"Monthly recognition over time\" revenue recognition model, the accounting period start date and end date must be on the first day and last day of the month, respectively. Note that the start and end dates do not necessarily have to be in the same month.  * You cannot update the start date or end date of an accounting period if:   * Any revenue has been distributed into the period.   * The period has any active journal entries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$ap_id = "ap_id_example"; // string | ID of the accounting period you want to update.
$request = new \Swagger\Client\Model\PUTAccountingPeriodType(); // \Swagger\Client\Model\PUTAccountingPeriodType | 

try {
    $result = $api_instance->pUTUpdateAccountingPeriod($ap_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->pUTUpdateAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ap_id** | **string**| ID of the accounting period you want to update. |
 **request** | [**\Swagger\Client\Model\PUTAccountingPeriodType**](../Model/\Swagger\Client\Model\PUTAccountingPeriodType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETEAccountingPeriod**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEAccountingPeriod($id)

CRUD: Delete AccountingPeriod



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEAccountingPeriod($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->proxyDELETEAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |

### Return type

[**\Swagger\Client\Model\ProxyDeleteResponse**](../Model/ProxyDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyGETAccountingPeriod**
> \Swagger\Client\Model\ProxyGetAccountingPeriod proxyGETAccountingPeriod($id, $fields)

CRUD: Retrieve AccountingPeriod



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingPeriodsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETAccountingPeriod($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->proxyGETAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetAccountingPeriod**](../Model/ProxyGetAccountingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

