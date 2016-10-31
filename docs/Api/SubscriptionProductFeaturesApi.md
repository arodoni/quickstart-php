# Swagger\Client\SubscriptionProductFeaturesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETESubscriptionProductFeature**](SubscriptionProductFeaturesApi.md#proxyDELETESubscriptionProductFeature) | **DELETE** /object/subscription-product-feature/{id} | CRUD: Delete SubscriptionProductFeature
[**proxyGETSubscriptionProductFeature**](SubscriptionProductFeaturesApi.md#proxyGETSubscriptionProductFeature) | **GET** /object/subscription-product-feature/{id} | CRUD: Retrieve SubscriptionProductFeature


# **proxyDELETESubscriptionProductFeature**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETESubscriptionProductFeature($id)

CRUD: Delete SubscriptionProductFeature



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionProductFeaturesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETESubscriptionProductFeature($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProductFeaturesApi->proxyDELETESubscriptionProductFeature: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETSubscriptionProductFeature**
> \Swagger\Client\Model\ProxyGetSubscriptionProductFeature proxyGETSubscriptionProductFeature($id, $fields)

CRUD: Retrieve SubscriptionProductFeature



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionProductFeaturesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETSubscriptionProductFeature($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionProductFeaturesApi->proxyGETSubscriptionProductFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetSubscriptionProductFeature**](../Model/ProxyGetSubscriptionProductFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

