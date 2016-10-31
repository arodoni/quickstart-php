# Swagger\Client\InvoiceItemsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoiceItem**](InvoiceItemsApi.md#proxyDELETEInvoiceItem) | **DELETE** /object/invoice-item/{id} | CRUD: Delete InvoiceItem
[**proxyGETInvoiceItem**](InvoiceItemsApi.md#proxyGETInvoiceItem) | **GET** /object/invoice-item/{id} | CRUD: Retrieve InvoiceItem


# **proxyDELETEInvoiceItem**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoiceItem($id)

CRUD: Delete InvoiceItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceItemsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoiceItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceItemsApi->proxyDELETEInvoiceItem: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoiceItem**
> \Swagger\Client\Model\ProxyGetInvoiceItem proxyGETInvoiceItem($id, $fields)

CRUD: Retrieve InvoiceItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceItemsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoiceItem($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceItemsApi->proxyGETInvoiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoiceItem**](../Model/ProxyGetInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

