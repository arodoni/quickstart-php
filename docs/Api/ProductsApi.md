# Swagger\Client\ProductsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEProduct**](ProductsApi.md#proxyDELETEProduct) | **DELETE** /object/product/{id} | CRUD: Delete Product
[**proxyGETProduct**](ProductsApi.md#proxyGETProduct) | **GET** /object/product/{id} | CRUD: Retrieve Product
[**proxyPOSTProduct**](ProductsApi.md#proxyPOSTProduct) | **POST** /object/product | CRUD: Create Product
[**proxyPUTProduct**](ProductsApi.md#proxyPUTProduct) | **PUT** /object/product/{id} | CRUD: Update Product


# **proxyDELETEProduct**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEProduct($id)

CRUD: Delete Product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proxyDELETEProduct: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETProduct**
> \Swagger\Client\Model\ProxyGetProduct proxyGETProduct($id, $fields)

CRUD: Retrieve Product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETProduct($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proxyGETProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetProduct**](../Model/ProxyGetProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTProduct**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTProduct($create_request)

CRUD: Create Product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateProduct(); // \Swagger\Client\Model\ProxyCreateProduct | 

try {
    $result = $api_instance->proxyPOSTProduct($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proxyPOSTProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateProduct**](../Model/\Swagger\Client\Model\ProxyCreateProduct.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTProduct**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTProduct($id, $modify_request)

CRUD: Update Product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyProduct(); // \Swagger\Client\Model\ProxyModifyProduct | 

try {
    $result = $api_instance->proxyPUTProduct($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proxyPUTProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyProduct**](../Model/\Swagger\Client\Model\ProxyModifyProduct.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

