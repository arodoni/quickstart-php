# Swagger\Client\PaymentMethodTransactionLogsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEPaymentMethodTransactionLog**](PaymentMethodTransactionLogsApi.md#proxyDELETEPaymentMethodTransactionLog) | **DELETE** /object/payment-method-transaction-log/{id} | CRUD: Delete PaymentMethodTransactionLog
[**proxyGETPaymentMethodTransactionLog**](PaymentMethodTransactionLogsApi.md#proxyGETPaymentMethodTransactionLog) | **GET** /object/payment-method-transaction-log/{id} | CRUD: Retrieve PaymentMethodTransactionLog


# **proxyDELETEPaymentMethodTransactionLog**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEPaymentMethodTransactionLog($id)

CRUD: Delete PaymentMethodTransactionLog



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodTransactionLogsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEPaymentMethodTransactionLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodTransactionLogsApi->proxyDELETEPaymentMethodTransactionLog: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETPaymentMethodTransactionLog**
> \Swagger\Client\Model\ProxyGetPaymentMethodTransactionLog proxyGETPaymentMethodTransactionLog($id, $fields)

CRUD: Retrieve PaymentMethodTransactionLog



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodTransactionLogsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETPaymentMethodTransactionLog($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodTransactionLogsApi->proxyGETPaymentMethodTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetPaymentMethodTransactionLog**](../Model/ProxyGetPaymentMethodTransactionLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

