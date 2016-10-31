# Swagger\Client\InvoiceSplitItemsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoiceSplitItem**](InvoiceSplitItemsApi.md#proxyDELETEInvoiceSplitItem) | **DELETE** /object/invoice-split-item/{id} | CRUD: Delete InvoiceSplitItem
[**proxyGETInvoiceSplitItem**](InvoiceSplitItemsApi.md#proxyGETInvoiceSplitItem) | **GET** /object/invoice-split-item/{id} | CRUD: Retrieve InvoiceSplitItem


# **proxyDELETEInvoiceSplitItem**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoiceSplitItem($id)

CRUD: Delete InvoiceSplitItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceSplitItemsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoiceSplitItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSplitItemsApi->proxyDELETEInvoiceSplitItem: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoiceSplitItem**
> \Swagger\Client\Model\ProxyGetInvoiceSplitItem proxyGETInvoiceSplitItem($id, $fields)

CRUD: Retrieve InvoiceSplitItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceSplitItemsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoiceSplitItem($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSplitItemsApi->proxyGETInvoiceSplitItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoiceSplitItem**](../Model/ProxyGetInvoiceSplitItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

