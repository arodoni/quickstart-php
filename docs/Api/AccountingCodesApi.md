# Swagger\Client\AccountingCodesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAccountingCode**](AccountingCodesApi.md#dELETEAccountingCode) | **DELETE** /accounting-codes/{ac-id} | Delete accounting code
[**gETAccountingCodeItem**](AccountingCodesApi.md#gETAccountingCodeItem) | **GET** /accounting-codes/{ac-id} | Query an accounting code
[**gETAccountingCodes**](AccountingCodesApi.md#gETAccountingCodes) | **GET** /accounting-codes | Get all accounting codes
[**pOSTAccountingCode**](AccountingCodesApi.md#pOSTAccountingCode) | **POST** /accounting-codes | Create accounting code
[**pUTAccountingCode**](AccountingCodesApi.md#pUTAccountingCode) | **PUT** /accounting-codes/{ac-id} | Update an accounting code
[**pUTActivateAccountingCode**](AccountingCodesApi.md#pUTActivateAccountingCode) | **PUT** /accounting-codes/{ac-id}/activate | Activate accounting code
[**pUTDeactivateAccountingCode**](AccountingCodesApi.md#pUTDeactivateAccountingCode) | **PUT** /accounting-codes/{ac-id}/deactivate | Deactivate accounting code
[**proxyDELETEAccountingCode**](AccountingCodesApi.md#proxyDELETEAccountingCode) | **DELETE** /object/accounting-code/{id} | CRUD: Delete AccountingCode
[**proxyGETAccountingCode**](AccountingCodesApi.md#proxyGETAccountingCode) | **GET** /object/accounting-code/{id} | CRUD: Retrieve AccountingCode
[**proxyPOSTAccountingCode**](AccountingCodesApi.md#proxyPOSTAccountingCode) | **POST** /object/accounting-code | CRUD: Create AccountingCode
[**proxyPUTAccountingCode**](AccountingCodesApi.md#proxyPUTAccountingCode) | **PUT** /object/accounting-code/{id} | CRUD: Update AccountingCode


# **dELETEAccountingCode**
> \Swagger\Client\Model\CommonResponseType dELETEAccountingCode($ac_id)

Delete accounting code

This reference describes how to [delete an accounting code](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/G_Chart_of_Accounts/A_Set_Up_Chart_of_Accounts#Delete_an_Accounting_Code) through the REST API. ## Prerequisites If you have Z-Finance enabled on your tenant, then you must have the Z-Finance Delete Unused Accounting Code permission. See [Z-Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles). ## Limitations You can only delete accounting codes that have never been associated with any transactions. An accounting code must be deactivated before you can delete it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$ac_id = "ac_id_example"; // string | ID of the accounting code you want to delete.

try {
    $result = $api_instance->dELETEAccountingCode($ac_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->dELETEAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ac_id** | **string**| ID of the accounting code you want to delete. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAccountingCodeItem**
> \Swagger\Client\Model\GETAccountingCodeItemType gETAccountingCodeItem($ac_id)

Query an accounting code

This reference describes how to query an accounting code through the REST API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$ac_id = "ac_id_example"; // string | ID of the accounting code you want to query.

try {
    $result = $api_instance->gETAccountingCodeItem($ac_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->gETAccountingCodeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ac_id** | **string**| ID of the accounting code you want to query. |

### Return type

[**\Swagger\Client\Model\GETAccountingCodeItemType**](../Model/GETAccountingCodeItemType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAccountingCodes**
> \Swagger\Client\Model\GETAccountingCodesType gETAccountingCodes()

Get all accounting codes

This reference describes how to query all accounting codes in your chart of accounts through the REST API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();

try {
    $result = $api_instance->gETAccountingCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->gETAccountingCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GETAccountingCodesType**](../Model/GETAccountingCodesType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTAccountingCode**
> \Swagger\Client\Model\POSTAccountingCodeResponseType pOSTAccountingCode($request)

Create accounting code

This reference describes how to create a new accounting code through the REST API.  The accounting code will be active as soon as it has been created.  ## Prerequisites   If you have Z-Finance enabled on your tenant, you must have the Z-Finance Create Accounting Code permission. See [Z-Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$request = new \Swagger\Client\Model\POSTAccountingCodeType(); // \Swagger\Client\Model\POSTAccountingCodeType | 

try {
    $result = $api_instance->pOSTAccountingCode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->pOSTAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTAccountingCodeType**](../Model/\Swagger\Client\Model\POSTAccountingCodeType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTAccountingCodeResponseType**](../Model/POSTAccountingCodeResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTAccountingCode**
> \Swagger\Client\Model\CommonResponseType pUTAccountingCode($ac_id, $request)

Update an accounting code

This reference describes how to update an existing accounting code through the REST API. ## Prerequisites   If you have Z-Finance enabled on your tenant, you must have the Z-Finance Manage Accounting Code permission. See [Z-Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles). ## Limitations You can only update accounting codes that are not already associated with any transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$ac_id = "ac_id_example"; // string | ID of the accounting code you want to update.
$request = new \Swagger\Client\Model\PUTAccountingCodeType(); // \Swagger\Client\Model\PUTAccountingCodeType | 

try {
    $result = $api_instance->pUTAccountingCode($ac_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->pUTAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ac_id** | **string**| ID of the accounting code you want to update. |
 **request** | [**\Swagger\Client\Model\PUTAccountingCodeType**](../Model/\Swagger\Client\Model\PUTAccountingCodeType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTActivateAccountingCode**
> \Swagger\Client\Model\CommonResponseType pUTActivateAccountingCode($ac_id)

Activate accounting code

This reference describes how to [activate an accounting code](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/G_Chart_of_Accounts/A_Set_Up_Chart_of_Accounts#Activate_or_Deactivate_an_Accounting_Code) through the REST API.  Prerequisites ------------- If you have Z-Finance enabled on your tenant, you must have the Z-Finance Manage Accounting Code permission. See [Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$ac_id = "ac_id_example"; // string | ID of the accounting code you want to activate.

try {
    $result = $api_instance->pUTActivateAccountingCode($ac_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->pUTActivateAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ac_id** | **string**| ID of the accounting code you want to activate. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTDeactivateAccountingCode**
> \Swagger\Client\Model\CommonResponseType pUTDeactivateAccountingCode($ac_id)

Deactivate accounting code

This reference describes how to [deactivate an accounting code](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/G_Chart_of_Accounts/A_Set_Up_Chart_of_Accounts#Activate_or_Deactivate_an_Accounting_Code) through the REST API.  ## Prerequisites If you have Z-Finance enabled on your tenant, you must have the Z-Finance Manage Accounting Code permission. See [Z-Finance Roles](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/f_Finance_Roles). ## Limitations You can only deactivate accounting codes that are not associated with any transactions.  You cannot disable accounting codes of type AccountsReceivable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$ac_id = "ac_id_example"; // string | ID of the accounting code you want to deactivate.

try {
    $result = $api_instance->pUTDeactivateAccountingCode($ac_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->pUTDeactivateAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ac_id** | **string**| ID of the accounting code you want to deactivate. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETEAccountingCode**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEAccountingCode($id)

CRUD: Delete AccountingCode



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEAccountingCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->proxyDELETEAccountingCode: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETAccountingCode**
> \Swagger\Client\Model\ProxyGetAccountingCode proxyGETAccountingCode($id, $fields)

CRUD: Retrieve AccountingCode



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETAccountingCode($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->proxyGETAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetAccountingCode**](../Model/ProxyGetAccountingCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTAccountingCode**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTAccountingCode($create_request)

CRUD: Create AccountingCode



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$create_request = new \Swagger\Client\Model\ProxyCreateAccountingCode(); // \Swagger\Client\Model\ProxyCreateAccountingCode | 

try {
    $result = $api_instance->proxyPOSTAccountingCode($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->proxyPOSTAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateAccountingCode**](../Model/\Swagger\Client\Model\ProxyCreateAccountingCode.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTAccountingCode**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTAccountingCode($id, $modify_request)

CRUD: Update AccountingCode



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountingCodesApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyAccountingCode(); // \Swagger\Client\Model\ProxyModifyAccountingCode | 

try {
    $result = $api_instance->proxyPUTAccountingCode($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCodesApi->proxyPUTAccountingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyAccountingCode**](../Model/\Swagger\Client\Model\ProxyModifyAccountingCode.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

