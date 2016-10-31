# Swagger\Client\PaymentMethodSnapshotsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEPaymentMethodSnapshot**](PaymentMethodSnapshotsApi.md#proxyDELETEPaymentMethodSnapshot) | **DELETE** /object/payment-method-snapshot/{id} | CRUD: Delete PaymentMethodSnapshot
[**proxyGETPaymentMethodSnapshot**](PaymentMethodSnapshotsApi.md#proxyGETPaymentMethodSnapshot) | **GET** /object/payment-method-snapshot/{id} | CRUD: Retrieve PaymentMethodSnapshot


# **proxyDELETEPaymentMethodSnapshot**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEPaymentMethodSnapshot($id)

CRUD: Delete PaymentMethodSnapshot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodSnapshotsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEPaymentMethodSnapshot($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodSnapshotsApi->proxyDELETEPaymentMethodSnapshot: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETPaymentMethodSnapshot**
> \Swagger\Client\Model\ProxyGetPaymentMethodSnapshot proxyGETPaymentMethodSnapshot($id, $fields)

CRUD: Retrieve PaymentMethodSnapshot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentMethodSnapshotsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETPaymentMethodSnapshot($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodSnapshotsApi->proxyGETPaymentMethodSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetPaymentMethodSnapshot**](../Model/ProxyGetPaymentMethodSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

