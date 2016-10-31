# Swagger\Client\FeaturesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEFeature**](FeaturesApi.md#proxyDELETEFeature) | **DELETE** /object/feature/{id} | CRUD: Delete Feature
[**proxyGETFeature**](FeaturesApi.md#proxyGETFeature) | **GET** /object/feature/{id} | CRUD: Retrieve Feature


# **proxyDELETEFeature**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEFeature($id)

CRUD: Delete Feature



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FeaturesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEFeature($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->proxyDELETEFeature: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETFeature**
> \Swagger\Client\Model\ProxyGetFeature proxyGETFeature($id, $fields)

CRUD: Retrieve Feature



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FeaturesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETFeature($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->proxyGETFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetFeature**](../Model/ProxyGetFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

