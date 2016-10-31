# Swagger\Client\PaymentTransactionLogsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEPaymentTransactionLog**](PaymentTransactionLogsApi.md#proxyDELETEPaymentTransactionLog) | **DELETE** /object/payment-transaction-log/{id} | CRUD: Delete PaymentTransactionLog
[**proxyGETPaymentTransactionLog**](PaymentTransactionLogsApi.md#proxyGETPaymentTransactionLog) | **GET** /object/payment-transaction-log/{id} | CRUD: Retrieve PaymentTransactionLog


# **proxyDELETEPaymentTransactionLog**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEPaymentTransactionLog($id)

CRUD: Delete PaymentTransactionLog



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentTransactionLogsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEPaymentTransactionLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionLogsApi->proxyDELETEPaymentTransactionLog: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETPaymentTransactionLog**
> \Swagger\Client\Model\ProxyGetPaymentTransactionLog proxyGETPaymentTransactionLog($id, $fields)

CRUD: Retrieve PaymentTransactionLog



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentTransactionLogsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETPaymentTransactionLog($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionLogsApi->proxyGETPaymentTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetPaymentTransactionLog**](../Model/ProxyGetPaymentTransactionLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

