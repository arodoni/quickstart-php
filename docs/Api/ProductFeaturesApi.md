# Swagger\Client\ProductFeaturesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEProductFeature**](ProductFeaturesApi.md#proxyDELETEProductFeature) | **DELETE** /object/product-feature/{id} | CRUD: Delete ProductFeature
[**proxyGETProductFeature**](ProductFeaturesApi.md#proxyGETProductFeature) | **GET** /object/product-feature/{id} | CRUD: Retrieve ProductFeature


# **proxyDELETEProductFeature**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEProductFeature($id)

CRUD: Delete ProductFeature



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductFeaturesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEProductFeature($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFeaturesApi->proxyDELETEProductFeature: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETProductFeature**
> \Swagger\Client\Model\ProxyGetProductFeature proxyGETProductFeature($id, $fields)

CRUD: Retrieve ProductFeature



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductFeaturesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETProductFeature($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFeaturesApi->proxyGETProductFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetProductFeature**](../Model/ProxyGetProductFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

