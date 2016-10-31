# Swagger\Client\MassUpdaterApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETMassUpdate**](MassUpdaterApi.md#gETMassUpdate) | **GET** /bulk/{bulk-key} | Get mass action result
[**pOSTMassUpdate**](MassUpdaterApi.md#pOSTMassUpdate) | **POST** /bulk | Perform mass action
[**pUTMassUpdater**](MassUpdaterApi.md#pUTMassUpdater) | **PUT** /bulk/{bulk-key}/stop | Stop mass action


# **gETMassUpdate**
> \Swagger\Client\Model\GETMassUpdateType gETMassUpdate($bulk_key)

Get mass action result

This reference describes how to get information about the result of a mass action through the REST API. See [Mass Updater](https://knowledgecenter.zuora.com/CC_Finance/Mass_Updater) for more information about mass actions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MassUpdaterApi();
$bulk_key = "bulk_key_example"; // string | String of 32 characters that identifies a mass action. You get the bulk-key after [performing a mass action](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Mass_Updater/A_Perform_Mass_Action) through the REST API.

try {
    $result = $api_instance->gETMassUpdate($bulk_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MassUpdaterApi->gETMassUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_key** | **string**| String of 32 characters that identifies a mass action. You get the bulk-key after [performing a mass action](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Mass_Updater/A_Perform_Mass_Action) through the REST API. |

### Return type

[**\Swagger\Client\Model\GETMassUpdateType**](../Model/GETMassUpdateType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTMassUpdate**
> \Swagger\Client\Model\POSTMassUpdateResponseType pOSTMassUpdate($content_type, $request)

Perform mass action

This reference describes how to perform a mass action through the REST API. See [Mass Updater](https://knowledgecenter.zuora.com/CC_Finance/Mass_Updater) for more information about performing mass actions.  Using this API method, you send a multipart/form-data request containing a `.csv` file with data about the mass action you want to perform. Zuora returns a key and then asynchronously processes the mass action. You can use the key to get details about the result of the mass action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MassUpdaterApi();
$content_type = "content_type_example"; // string | Must be multipart/form-data.
$request = new \Swagger\Client\Model\POSTMassUpdateType(); // \Swagger\Client\Model\POSTMassUpdateType | 

try {
    $result = $api_instance->pOSTMassUpdate($content_type, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MassUpdaterApi->pOSTMassUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Must be multipart/form-data. |
 **request** | [**\Swagger\Client\Model\POSTMassUpdateType**](../Model/\Swagger\Client\Model\POSTMassUpdateType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTMassUpdateResponseType**](../Model/POSTMassUpdateResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTMassUpdater**
> \Swagger\Client\Model\CommonResponseType pUTMassUpdater($bulk_key)

Stop mass action

This reference describes how to stop a mass action through the REST API. You can stop a mass action when its status is Pending or Processing. After you have stopped a mass action, you can get the [mass action result](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Mass_Updater/B_Get_Mass_Action_Result) to see details of the mass action.  - If you stop a mass action when its status is Pending, no response file is generated because no records have been processed.  - If you stop a mass action when its status is Processing, a response file is generated. You can check the response file to see which records have been processed and which have not. In the response file, the **Success** column has the value `Y` (successful) or `N` (failed) for processed records, and a blank value for unprocessed records.  Records that have already been processed when a mass action is stopped are not rolled back.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MassUpdaterApi();
$bulk_key = "bulk_key_example"; // string | String of 32 characters that identifies a mass action. You get the bulk-key after [performing a mass action](https://knowledgecenter.zuora.com/BC_Developers/REST_API/B_REST_API_reference/Mass_Updater/A_Perform_Mass_Action) through the REST API.

try {
    $result = $api_instance->pUTMassUpdater($bulk_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MassUpdaterApi->pUTMassUpdater: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_key** | **string**| String of 32 characters that identifies a mass action. You get the bulk-key after [performing a mass action](https://knowledgecenter.zuora.com/BC_Developers/REST_API/B_REST_API_reference/Mass_Updater/A_Perform_Mass_Action) through the REST API. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

