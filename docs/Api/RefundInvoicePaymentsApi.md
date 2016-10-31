# Swagger\Client\RefundInvoicePaymentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETERefundInvoicePayment**](RefundInvoicePaymentsApi.md#proxyDELETERefundInvoicePayment) | **DELETE** /object/refund-invoice-payment/{id} | CRUD: Delete RefundInvoicePayment
[**proxyGETRefundInvoicePayment**](RefundInvoicePaymentsApi.md#proxyGETRefundInvoicePayment) | **GET** /object/refund-invoice-payment/{id} | CRUD: Retrieve RefundInvoicePayment


# **proxyDELETERefundInvoicePayment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETERefundInvoicePayment($id)

CRUD: Delete RefundInvoicePayment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundInvoicePaymentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETERefundInvoicePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundInvoicePaymentsApi->proxyDELETERefundInvoicePayment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETRefundInvoicePayment**
> \Swagger\Client\Model\ProxyGetRefundInvoicePayment proxyGETRefundInvoicePayment($id, $fields)

CRUD: Retrieve RefundInvoicePayment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundInvoicePaymentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETRefundInvoicePayment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundInvoicePaymentsApi->proxyGETRefundInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetRefundInvoicePayment**](../Model/ProxyGetRefundInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

