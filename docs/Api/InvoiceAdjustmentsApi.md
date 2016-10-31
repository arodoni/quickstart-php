# Swagger\Client\InvoiceAdjustmentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEInvoiceAdjustment**](InvoiceAdjustmentsApi.md#proxyDELETEInvoiceAdjustment) | **DELETE** /object/invoice-adjustment/{id} | CRUD: Delete InvoiceAdjustment
[**proxyGETInvoiceAdjustment**](InvoiceAdjustmentsApi.md#proxyGETInvoiceAdjustment) | **GET** /object/invoice-adjustment/{id} | CRUD: Retrieve InvoiceAdjustment
[**proxyPOSTInvoiceAdjustment**](InvoiceAdjustmentsApi.md#proxyPOSTInvoiceAdjustment) | **POST** /object/invoice-adjustment | CRUD: Create InvoiceAdjustment
[**proxyPUTInvoiceAdjustment**](InvoiceAdjustmentsApi.md#proxyPUTInvoiceAdjustment) | **PUT** /object/invoice-adjustment/{id} | CRUD: Update InvoiceAdjustment


# **proxyDELETEInvoiceAdjustment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEInvoiceAdjustment($id)

CRUD: Delete InvoiceAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceAdjustmentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEInvoiceAdjustment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAdjustmentsApi->proxyDELETEInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETInvoiceAdjustment**
> \Swagger\Client\Model\ProxyGetInvoiceAdjustment proxyGETInvoiceAdjustment($id, $fields)

CRUD: Retrieve InvoiceAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceAdjustmentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETInvoiceAdjustment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAdjustmentsApi->proxyGETInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetInvoiceAdjustment**](../Model/ProxyGetInvoiceAdjustment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTInvoiceAdjustment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTInvoiceAdjustment($create_request)

CRUD: Create InvoiceAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceAdjustmentsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateInvoiceAdjustment(); // \Swagger\Client\Model\ProxyCreateInvoiceAdjustment | 

try {
    $result = $api_instance->proxyPOSTInvoiceAdjustment($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAdjustmentsApi->proxyPOSTInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateInvoiceAdjustment**](../Model/\Swagger\Client\Model\ProxyCreateInvoiceAdjustment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTInvoiceAdjustment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTInvoiceAdjustment($id, $modify_request)

CRUD: Update InvoiceAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceAdjustmentsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyInvoiceAdjustment(); // \Swagger\Client\Model\ProxyModifyInvoiceAdjustment | 

try {
    $result = $api_instance->proxyPUTInvoiceAdjustment($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceAdjustmentsApi->proxyPUTInvoiceAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyInvoiceAdjustment**](../Model/\Swagger\Client\Model\ProxyModifyInvoiceAdjustment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

