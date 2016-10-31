# Swagger\Client\InvoiceItemAdjustmentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoiceItemAdjustment**](InvoiceItemAdjustmentsApi.md#proxyDELETEInvoiceItemAdjustment) | **DELETE** /object/invoice-item-adjustment/{id} | CRUD: Delete InvoiceItemAdjustment
[**proxyGETInvoiceItemAdjustment**](InvoiceItemAdjustmentsApi.md#proxyGETInvoiceItemAdjustment) | **GET** /object/invoice-item-adjustment/{id} | CRUD: Retrieve InvoiceItemAdjustment


# **proxyDELETEInvoiceItemAdjustment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoiceItemAdjustment($id)

CRUD: Delete InvoiceItemAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceItemAdjustmentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoiceItemAdjustment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceItemAdjustmentsApi->proxyDELETEInvoiceItemAdjustment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoiceItemAdjustment**
> \Swagger\Client\Model\ProxyGetInvoiceItemAdjustment proxyGETInvoiceItemAdjustment($id, $fields)

CRUD: Retrieve InvoiceItemAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceItemAdjustmentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoiceItemAdjustment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceItemAdjustmentsApi->proxyGETInvoiceItemAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoiceItemAdjustment**](../Model/ProxyGetInvoiceItemAdjustment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

