# Swagger\Client\InvoicesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoice**](InvoicesApi.md#proxyDELETEInvoice) | **DELETE** /object/invoice/{id} | CRUD: Delete Invoice
[**proxyGETInvoice**](InvoicesApi.md#proxyGETInvoice) | **GET** /object/invoice/{id} | CRUD: Retrieve Invoice
[**proxyPOSTInvoice**](InvoicesApi.md#proxyPOSTInvoice) | **POST** /object/invoice | CRUD: Create Invoice
[**proxyPUTInvoice**](InvoicesApi.md#proxyPUTInvoice) | **PUT** /object/invoice/{id} | CRUD: Update Invoice


# **proxyDELETEInvoice**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoice($id)

CRUD: Delete Invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->proxyDELETEInvoice: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoice**
> \Swagger\Client\Model\ProxyGetInvoice proxyGETInvoice($id, $fields)

CRUD: Retrieve Invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoice($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->proxyGETInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoice**](../Model/ProxyGetInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTInvoice**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTInvoice($create_request)

CRUD: Create Invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicesApi();
$create_request = new \Swagger\Client\Model\ProxyCreateInvoice(); // \Swagger\Client\Model\ProxyCreateInvoice | 

try {
    $result = $api_instance->proxyPOSTInvoice($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->proxyPOSTInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateInvoice**](../Model/\Swagger\Client\Model\ProxyCreateInvoice.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTInvoice**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTInvoice($id, $modify_request)

CRUD: Update Invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoicesApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyInvoice(); // \Swagger\Client\Model\ProxyModifyInvoice | 

try {
    $result = $api_instance->proxyPUTInvoice($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->proxyPUTInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyInvoice**](../Model/\Swagger\Client\Model\ProxyModifyInvoice.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

