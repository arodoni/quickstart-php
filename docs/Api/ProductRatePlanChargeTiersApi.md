# Swagger\Client\ProductRatePlanChargeTiersApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEProductRatePlanChargeTier**](ProductRatePlanChargeTiersApi.md#proxyDELETEProductRatePlanChargeTier) | **DELETE** /object/product-rate-plan-charge-tier/{id} | CRUD: Delete ProductRatePlanChargeTier
[**proxyGETProductRatePlanChargeTier**](ProductRatePlanChargeTiersApi.md#proxyGETProductRatePlanChargeTier) | **GET** /object/product-rate-plan-charge-tier/{id} | CRUD: Retrieve ProductRatePlanChargeTier


# **proxyDELETEProductRatePlanChargeTier**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEProductRatePlanChargeTier($id)

CRUD: Delete ProductRatePlanChargeTier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlanChargeTiersApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEProductRatePlanChargeTier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlanChargeTiersApi->proxyDELETEProductRatePlanChargeTier: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETProductRatePlanChargeTier**
> \Swagger\Client\Model\ProxyGetProductRatePlanChargeTier proxyGETProductRatePlanChargeTier($id, $fields)

CRUD: Retrieve ProductRatePlanChargeTier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlanChargeTiersApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETProductRatePlanChargeTier($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlanChargeTiersApi->proxyGETProductRatePlanChargeTier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetProductRatePlanChargeTier**](../Model/ProxyGetProductRatePlanChargeTier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

