# Swagger\Client\InvoicePaymentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoicePayment**](InvoicePaymentsApi.md#proxyDELETEInvoicePayment) | **DELETE** /object/invoice-payment/{id} | CRUD: Delete InvoicePayment
[**proxyGETInvoicePayment**](InvoicePaymentsApi.md#proxyGETInvoicePayment) | **GET** /object/invoice-payment/{id} | CRUD: Retrieve InvoicePayment
[**proxyPOSTInvoicePayment**](InvoicePaymentsApi.md#proxyPOSTInvoicePayment) | **POST** /object/invoice-payment | CRUD: Create InvoicePayment
[**proxyPUTInvoicePayment**](InvoicePaymentsApi.md#proxyPUTInvoicePayment) | **PUT** /object/invoice-payment/{id} | CRUD: Update InvoicePayment


# **proxyDELETEInvoicePayment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoicePayment($id)

CRUD: Delete InvoicePayment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicePaymentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoicePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->proxyDELETEInvoicePayment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoicePayment**
> \Swagger\Client\Model\ProxyGetInvoicePayment proxyGETInvoicePayment($id, $fields)

CRUD: Retrieve InvoicePayment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicePaymentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoicePayment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->proxyGETInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoicePayment**](../Model/ProxyGetInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTInvoicePayment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTInvoicePayment($create_request)

CRUD: Create InvoicePayment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicePaymentsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateInvoicePayment(); // \Swagger\Client\Model\ProxyCreateInvoicePayment | 

try {
    $result = $api_instance->proxyPOSTInvoicePayment($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->proxyPOSTInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateInvoicePayment**](../Model/\Swagger\Client\Model\ProxyCreateInvoicePayment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTInvoicePayment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTInvoicePayment($id, $modify_request)

CRUD: Update InvoicePayment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicePaymentsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyInvoicePayment(); // \Swagger\Client\Model\ProxyModifyInvoicePayment | 

try {
    $result = $api_instance->proxyPUTInvoicePayment($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->proxyPUTInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyInvoicePayment**](../Model/\Swagger\Client\Model\ProxyModifyInvoicePayment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

