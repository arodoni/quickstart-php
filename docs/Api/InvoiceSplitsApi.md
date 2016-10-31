# Swagger\Client\InvoiceSplitsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoiceSplit**](InvoiceSplitsApi.md#proxyDELETEInvoiceSplit) | **DELETE** /object/invoice-split/{id} | CRUD: Delete InvoiceSplit
[**proxyGETInvoiceSplit**](InvoiceSplitsApi.md#proxyGETInvoiceSplit) | **GET** /object/invoice-split/{id} | CRUD: Retrieve InvoiceSplit


# **proxyDELETEInvoiceSplit**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoiceSplit($id)

CRUD: Delete InvoiceSplit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceSplitsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoiceSplit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSplitsApi->proxyDELETEInvoiceSplit: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoiceSplit**
> \Swagger\Client\Model\ProxyGetInvoiceSplit proxyGETInvoiceSplit($id, $fields)

CRUD: Retrieve InvoiceSplit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceSplitsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoiceSplit($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSplitsApi->proxyGETInvoiceSplit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoiceSplit**](../Model/ProxyGetInvoiceSplit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

