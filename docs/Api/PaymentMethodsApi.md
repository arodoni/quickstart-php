# Swagger\Client\PaymentMethodsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEPaymentMethods**](PaymentMethodsApi.md#dELETEPaymentMethods) | **DELETE** /payment-methods/{payment-method-id} | Delete payment method
[**gETPaymentMethods**](PaymentMethodsApi.md#gETPaymentMethods) | **GET** /payment-methods/credit-cards/accounts/{account-key} | Get payment methods
[**pOSTPaymentMethod**](PaymentMethodsApi.md#pOSTPaymentMethod) | **POST** /payment-methods/credit-cards | Create payment method
[**pUTPaymentMethods**](PaymentMethodsApi.md#pUTPaymentMethods) | **PUT** /payment-methods/credit-cards/{payment-method-id} | Update payment method
[**proxyDELETEPaymentMethod**](PaymentMethodsApi.md#proxyDELETEPaymentMethod) | **DELETE** /object/payment-method/{id} | CRUD: Delete PaymentMethod
[**proxyGETPaymentMethod**](PaymentMethodsApi.md#proxyGETPaymentMethod) | **GET** /object/payment-method/{id} | CRUD: Retrieve PaymentMethod
[**proxyPOSTPaymentMethod**](PaymentMethodsApi.md#proxyPOSTPaymentMethod) | **POST** /object/payment-method | CRUD: Create PaymentMethod
[**proxyPUTPaymentMethod**](PaymentMethodsApi.md#proxyPUTPaymentMethod) | **PUT** /object/payment-method/{id} | CRUD: Update PaymentMethod


# **dELETEPaymentMethods**
> \Swagger\Client\Model\CommonResponseType dELETEPaymentMethods($payment_method_id)

Delete payment method

Deletes a credit card payment method from the specified customer account.  If the specified payment method is the account's default payment method, the request will fail.  In that case, you must first designate a different payment method for that customer to be the default.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$payment_method_id = "payment_method_id_example"; // string | Unique identifier of a payment method. (Since this ID is unique, and linked to a customer account in the system, no customer identifier is needed.)

try {
    $result = $api_instance->dELETEPaymentMethods($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->dELETEPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| Unique identifier of a payment method. (Since this ID is unique, and linked to a customer account in the system, no customer identifier is needed.) |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETPaymentMethods**
> \Swagger\Client\Model\GETPaymentMethodsType gETPaymentMethods($account_key)

Get payment methods

This REST API reference describes how to retrieve all credit card information for the specified customer account.   ## Notes The response includes details credit or debit cards for the specified customer account. Card numbers are masked, e.g., \"************1234\". Cards are returned in reverse chronological order of last update.  You can send requests for bank transfer payment methods types. The response will not include bank transfer details.  The response only includes payment details on payment methods that are credit or debit cards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$account_key = "account_key_example"; // string | Account number or account ID.

try {
    $result = $api_instance->gETPaymentMethods($account_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->gETPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |

### Return type

[**\Swagger\Client\Model\GETPaymentMethodsType**](../Model/GETPaymentMethodsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTPaymentMethod**
> \Swagger\Client\Model\POSTPaymentMethodResponseType pOSTPaymentMethod($request)

Create payment method

This REST API reference describes how to create a new credit card payment method for a customer account.  ## Notes  This API call is CORS Enabled. Use client-side JavaScript to invoke the call. See [Zuora CORS REST](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/G_CORS_REST) for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$request = new \Swagger\Client\Model\POSTPaymentMethodType(); // \Swagger\Client\Model\POSTPaymentMethodType | 

try {
    $result = $api_instance->pOSTPaymentMethod($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->pOSTPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTPaymentMethodType**](../Model/\Swagger\Client\Model\POSTPaymentMethodType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTPaymentMethodResponseType**](../Model/POSTPaymentMethodResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTPaymentMethods**
> \Swagger\Client\Model\PUTPaymentMethodResponseType pUTPaymentMethods($payment_method_id, $request)

Update payment method

Updates an existing credit card payment method for the specified customer account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$payment_method_id = "payment_method_id_example"; // string | Unique ID of the payment method to update.
$request = new \Swagger\Client\Model\PUTPaymentMethodType(); // \Swagger\Client\Model\PUTPaymentMethodType | 

try {
    $result = $api_instance->pUTPaymentMethods($payment_method_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->pUTPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| Unique ID of the payment method to update. |
 **request** | [**\Swagger\Client\Model\PUTPaymentMethodType**](../Model/\Swagger\Client\Model\PUTPaymentMethodType.md)|  |

### Return type

[**\Swagger\Client\Model\PUTPaymentMethodResponseType**](../Model/PUTPaymentMethodResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETEPaymentMethod**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEPaymentMethod($id)

CRUD: Delete PaymentMethod



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEPaymentMethod($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->proxyDELETEPaymentMethod: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETPaymentMethod**
> \Swagger\Client\Model\ProxyGetPaymentMethod proxyGETPaymentMethod($id, $fields)

CRUD: Retrieve PaymentMethod



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETPaymentMethod($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->proxyGETPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetPaymentMethod**](../Model/ProxyGetPaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTPaymentMethod**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTPaymentMethod($create_request)

CRUD: Create PaymentMethod



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$create_request = new \Swagger\Client\Model\ProxyCreatePaymentMethod(); // \Swagger\Client\Model\ProxyCreatePaymentMethod | 

try {
    $result = $api_instance->proxyPOSTPaymentMethod($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->proxyPOSTPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreatePaymentMethod**](../Model/\Swagger\Client\Model\ProxyCreatePaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTPaymentMethod**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTPaymentMethod($id, $modify_request)

CRUD: Update PaymentMethod



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyPaymentMethod(); // \Swagger\Client\Model\ProxyModifyPaymentMethod | 

try {
    $result = $api_instance->proxyPUTPaymentMethod($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->proxyPUTPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyPaymentMethod**](../Model/\Swagger\Client\Model\ProxyModifyPaymentMethod.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

