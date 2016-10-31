# Swagger\Client\ImportsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEImport**](ImportsApi.md#proxyDELETEImport) | **DELETE** /object/import/{id} | CRUD: Delete Import
[**proxyGETImport**](ImportsApi.md#proxyGETImport) | **GET** /object/import/{id} | CRUD: Retrieve Import
[**proxyPOSTImport**](ImportsApi.md#proxyPOSTImport) | **POST** /object/import | CRUD: Create Import


# **proxyDELETEImport**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEImport($id)

CRUD: Delete Import



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ImportsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEImport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->proxyDELETEImport: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETImport**
> \Swagger\Client\Model\ProxyGetImport proxyGETImport($id, $fields)

CRUD: Retrieve Import



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ImportsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETImport($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->proxyGETImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetImport**](../Model/ProxyGetImport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTImport**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTImport($create_request)

CRUD: Create Import



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ImportsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateImport(); // \Swagger\Client\Model\ProxyCreateImport | 

try {
    $result = $api_instance->proxyPOSTImport($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportsApi->proxyPOSTImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateImport**](../Model/\Swagger\Client\Model\ProxyCreateImport.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

