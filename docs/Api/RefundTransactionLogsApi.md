# Swagger\Client\RefundTransactionLogsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETERefundTransactionLog**](RefundTransactionLogsApi.md#proxyDELETERefundTransactionLog) | **DELETE** /object/refund-transaction-log/{id} | CRUD: Delete RefundTransactionLog
[**proxyGETRefundTransactionLog**](RefundTransactionLogsApi.md#proxyGETRefundTransactionLog) | **GET** /object/refund-transaction-log/{id} | CRUD: Retrieve RefundTransactionLog


# **proxyDELETERefundTransactionLog**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETERefundTransactionLog($id)

CRUD: Delete RefundTransactionLog



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundTransactionLogsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETERefundTransactionLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundTransactionLogsApi->proxyDELETERefundTransactionLog: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETRefundTransactionLog**
> \Swagger\Client\Model\ProxyGetRefundTransactionLog proxyGETRefundTransactionLog($id, $fields)

CRUD: Retrieve RefundTransactionLog



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundTransactionLogsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETRefundTransactionLog($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundTransactionLogsApi->proxyGETRefundTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetRefundTransactionLog**](../Model/ProxyGetRefundTransactionLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

