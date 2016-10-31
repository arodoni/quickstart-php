# Swagger\Client\AccountsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETAccount**](AccountsApi.md#gETAccount) | **GET** /accounts/{account-key} | Get account
[**gETAccountSummary**](AccountsApi.md#gETAccountSummary) | **GET** /accounts/{account-key}/Summary | Get account summary
[**pOSTAccount**](AccountsApi.md#pOSTAccount) | **POST** /accounts | Create account
[**pUTAccount**](AccountsApi.md#pUTAccount) | **PUT** /accounts/{account-key} | Update account
[**proxyDELETEAccount**](AccountsApi.md#proxyDELETEAccount) | **DELETE** /object/account/{id} | CRUD: Delete Account
[**proxyGETAccount**](AccountsApi.md#proxyGETAccount) | **GET** /object/account/{id} | CRUD: Retrieve Account
[**proxyPOSTAccount**](AccountsApi.md#proxyPOSTAccount) | **POST** /object/account | CRUD: Create Account
[**proxyPUTAccount**](AccountsApi.md#proxyPUTAccount) | **PUT** /object/account/{id} | CRUD: Update Account


# **gETAccount**
> \Swagger\Client\Model\GETAccountType gETAccount($account_key)

Get account

This REST API reference describes how to retrieve basic information about a customer account.  This REST call is a quick retrieval that doesn't include the account's subscriptions, invoices, payments, or usage details. Use the [Get account summary](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Accounts/3_GET_account_summary) to get more detailed information about an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$account_key = "account_key_example"; // string | Account number or account ID.

try {
    $result = $api_instance->gETAccount($account_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->gETAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |

### Return type

[**\Swagger\Client\Model\GETAccountType**](../Model/GETAccountType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAccountSummary**
> \Swagger\Client\Model\GETAccountSummaryType gETAccountSummary($account_key)

Get account summary

This REST API reference describes how to retrieve detailed information about the specified customer account.  The response includes everything retrieved with the [Get basic account information](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Accounts/2_Get_account_basics) call, plus a summary of the account's subscriptions, invoices, payments, and usage for the last six months.  ## Notes  Returns only the six most recent subscriptions based on the subscription updatedDate. Within those subscriptions, there may be many rate plans and many rate plan charges. These items are subject to the maximum limit on the array size. See [REST API basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information on concurrent request limits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$account_key = "account_key_example"; // string | Account number or account ID.

try {
    $result = $api_instance->gETAccountSummary($account_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->gETAccountSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |

### Return type

[**\Swagger\Client\Model\GETAccountSummaryType**](../Model/GETAccountSummaryType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTAccount**
> \Swagger\Client\Model\POSTAccountResponseType pOSTAccount($request, $zuora_version)

Create account

This REST API reference describes how to create a customer account with a credit-card payment method, a bill-to contact, and an optional sold-to contact. Request and response field descriptions and sample code are provided. Use this method to optionally create a subscription, invoice for that subscription, and collect payment through the default payment method. The transaction is atomic; if any part fails for any reason, the entire transaction is rolled back.  This API call is CORS Enabled, so you can use client-side Javascript to invoke the call. For more information, visit the [Zuora CORS REST](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/G_CORS_REST) page.  ## Notes 1. The account is created in active status.   2. The request must provide either a **creditCard** structure or the **hpmCreditCardPaymentMethodId** field (but not both). The one provided becomes the default payment method for this account. If the credit card information is declined or can't be verified, then the account is not created. 3. Customer accounts created with this call are automatically be set to Auto Pay. 4. If either the **workEmail** or **personalEmail** are specified, then the account's email delivery preference is automatically set to `true`. (In that case, emails go to the **workEmail** address, if it exists, or else the **personalEmail**.) If neither field is specified, the email delivery preference is automatically set to `false`.  ## Defaults for customerAcceptanceDate and serviceActivationDate Default values for **customerAcceptanceDate** and **serviceActivationDate** are set as follows.  |        | serviceActivationDate(SA) specified          | serviceActivationDate (SA) NOT specified  | | ------------- |:-------------:| -----:| | customerAcceptanceDate (CA) specified      | SA uses value in the request call; CA uses value in the request call| CA uses value in the request call;SA uses CE as default | | customerAcceptanceDate (CA) NOT specified      | SA uses value in the request call; CA uses SA as default |   SA and CA use CE as default |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$request = new \Swagger\Client\Model\POSTAccountType(); // \Swagger\Client\Model\POSTAccountType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ fields. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pOSTAccount($request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->pOSTAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTAccountType**](../Model/\Swagger\Client\Model\POSTAccountType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ fields. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\POSTAccountResponseType**](../Model/POSTAccountResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTAccount**
> \Swagger\Client\Model\CommonResponseType pUTAccount($account_key, $request)

Update account

This REST API reference describes how to update a customer account by specifying the account-key.  ## Notes 1. Only the fields to be changed should be specified.  Any field that's not included in the request body will not be changed. 2. If an empty field is submitted with this call, the corresponding field in the account is emptied. 3. Email addresses: If no email addresses are specified, no change is made to the email addresses on file or to the email delivery preference. If either the **personalEmail** or **workEmail** is specified (or both), the system updates the corresponding email address(es) on file and the email delivery preference is set to `true`. (In that case, emails go to the **workEmail** address, if it exists, or else the **personalEmail**.) On the other hand, if as a result of this call both of the email addresses for the account are empty, the email delivery preference is set to `false`. 4. The bill-to and sold-to contacts are separate data entities; updating either one does not update the other.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$account_key = "account_key_example"; // string | Account number or account ID.
$request = new \Swagger\Client\Model\PUTAccountType(); // \Swagger\Client\Model\PUTAccountType | 

try {
    $result = $api_instance->pUTAccount($account_key, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->pUTAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |
 **request** | [**\Swagger\Client\Model\PUTAccountType**](../Model/\Swagger\Client\Model\PUTAccountType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETEAccount**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEAccount($id)

CRUD: Delete Account



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->proxyDELETEAccount: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETAccount**
> \Swagger\Client\Model\ProxyGetAccount proxyGETAccount($id, $fields)

CRUD: Retrieve Account



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETAccount($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->proxyGETAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetAccount**](../Model/ProxyGetAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTAccount**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTAccount($create_request)

CRUD: Create Account



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateAccount(); // \Swagger\Client\Model\ProxyCreateAccount | 

try {
    $result = $api_instance->proxyPOSTAccount($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->proxyPOSTAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateAccount**](../Model/\Swagger\Client\Model\ProxyCreateAccount.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTAccount**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTAccount($id, $modify_request)

CRUD: Update Account



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyAccount(); // \Swagger\Client\Model\ProxyModifyAccount | 

try {
    $result = $api_instance->proxyPUTAccount($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->proxyPUTAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyAccount**](../Model/\Swagger\Client\Model\ProxyModifyAccount.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

