# Swagger\Client\UsageApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETUsage**](UsageApi.md#gETUsage) | **GET** /usage/accounts/{account-key} | Get usage
[**pOSTUsage**](UsageApi.md#pOSTUsage) | **POST** /usage | Post usage
[**proxyDELETEUsage**](UsageApi.md#proxyDELETEUsage) | **DELETE** /object/usage/{id} | CRUD: Delete Usage
[**proxyGETUsage**](UsageApi.md#proxyGETUsage) | **GET** /object/usage/{id} | CRUD: Retrieve Usage
[**proxyPOSTUsage**](UsageApi.md#proxyPOSTUsage) | **POST** /object/usage | CRUD: Create Usage
[**proxyPUTUsage**](UsageApi.md#proxyPUTUsage) | **PUT** /object/usage/{id} | CRUD: Update Usage


# **gETUsage**
> \Swagger\Client\Model\GETUsageWrapper gETUsage($account_key)

Get usage

This REST API reference describes how to retrieve usage details for an account. Usage data is returned in reverse chronological order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsageApi();
$account_key = "account_key_example"; // string | Account number or account ID.

try {
    $result = $api_instance->gETUsage($account_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->gETUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |

### Return type

[**\Swagger\Client\Model\GETUsageWrapper**](../Model/GETUsageWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTUsage**
> \Swagger\Client\Model\POSTUsageResponseType pOSTUsage($content_type)

Post usage

This REST API reference describes how to post or import usage data for one or more accounts in the CSV  format. There are no path or query parameters. The data is uploade using the HTTP multipart/form-data POST method and applied to the user's tenant.   ## How this REST API Call Works The content of the upload file must follow the [format](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Usage/1_POST_usage#Upload_File_Format) used by the UI import tool. It must be a comma-separated (CSV) file with a corresponding .csv extension. The file size must not exceed 4MB. Click [here](https://knowledgecenter.zuora.com/@api/deki/files/4105/UsageFileFormat.csv) to download the usage file template.  At the completion of the upload, before actually processing the file contents, theAPI returns a response containing the byte count of the received file and a URL for checking the status of the import process.  Of the five possible results displayed at that URL Pending, Processing, Completed, Canceled, and Failed) only a Completed status indicates that the import was successful.  The operation is atomic; if any record fails, the file is rejected.  In that case, the entire import is rolled back and all stored data is returned to its original state.  To view the actual import status, enter the resulting status URL from the checkImportStatus response using a tool such as POSTMAN.This additional step provides more information about why the import may have failed.  To manage the information after a successful upload, use the web-based UI.  ## Upload File Format The upload file uses the following headings:  | Heading         | Description   | Required | |-----------------|--------|----------| | ACCOUNT_ID      | Enter the account number, e.g., the default account number, such as A00000001, or your custom account number.,Although this field is labeled as Account_Id, it is not the actual Account ID nor Account Name.  | Yes      | | UOM             | Enter the unit of measure. This must match the UOM for the usage that is set up in **Z-Billing Settings > Customize Units of Measure**. | Yes      | | QTY             | Enter the quantity.  | Yes      | | STARTDATE       | Enter the start date of the usage.,This date determines the invoice item service period the associated usage is billed to. Date format is based on locale of the current user. Default date format: `MM/DD/YYYY` | Yes      | | ENDDATE         | Enter the end date of the usage.,This is not used in calculations for usage billing and is optional. Date format is based on locale of the current user. Default date format: `MM/DD/YYYY`    | Yes      | | SUBSCRIPTION_ID | Enter the subscription number or subscription name. If you created the subscription in the Zuora application, Zuora created a number automatically in a format similar to A-S00000001. If you do not provide a value for this field, the associated usage will be added to all subscriptions for the specified Account that use this Unit Of Measure. If your Accounts can have multiple subscriptions and you do not want double or triple counting of usage, you must specify the Subscription or Charge ID in each usage record.  | Yes      | | CHARGE_ID       | Enter the charge number (not the charge name). You can see the charge ID, e.g., C-00000001, when you add your rate plan to your subscription and view your individual charges. See [Adding Products and Rate Plans](https://knowledgecenter.zuora.com/BC_Subscription_Management/Subscriptions/B_Creating_Subscriptions/Adding_Products_and_Rate_Plans) for additional information. If your Accounts can have multiple subscriptions and you do not want double or triple counting of usage, you must specify the specific Subscription or Charge ID in each usage record. This field is related to the Charge Number on the subscription rate plan.                       | Yes      | | DESCRIPTION     | Enter a description for the charge. | No       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsageApi();
$content_type = "content_type_example"; // string | Must be set to \"multipart/form-data\".

try {
    $result = $api_instance->pOSTUsage($content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->pOSTUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Must be set to \&quot;multipart/form-data\&quot;. |

### Return type

[**\Swagger\Client\Model\POSTUsageResponseType**](../Model/POSTUsageResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETEUsage**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEUsage($id)

CRUD: Delete Usage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsageApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEUsage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->proxyDELETEUsage: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETUsage**
> \Swagger\Client\Model\ProxyGetUsage proxyGETUsage($id, $fields)

CRUD: Retrieve Usage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsageApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETUsage($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->proxyGETUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetUsage**](../Model/ProxyGetUsage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTUsage**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTUsage($create_request)

CRUD: Create Usage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsageApi();
$create_request = new \Swagger\Client\Model\ProxyCreateUsage(); // \Swagger\Client\Model\ProxyCreateUsage | 

try {
    $result = $api_instance->proxyPOSTUsage($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->proxyPOSTUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateUsage**](../Model/\Swagger\Client\Model\ProxyCreateUsage.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTUsage**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTUsage($id, $modify_request)

CRUD: Update Usage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsageApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyUsage(); // \Swagger\Client\Model\ProxyModifyUsage | 

try {
    $result = $api_instance->proxyPUTUsage($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->proxyPUTUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyUsage**](../Model/\Swagger\Client\Model\ProxyModifyUsage.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

