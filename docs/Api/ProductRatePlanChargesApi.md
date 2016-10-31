# Swagger\Client\ProductRatePlanChargesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEProductRatePlanCharge**](ProductRatePlanChargesApi.md#proxyDELETEProductRatePlanCharge) | **DELETE** /object/product-rate-plan-charge/{id} | CRUD: Delete ProductRatePlanCharge
[**proxyGETProductRatePlanCharge**](ProductRatePlanChargesApi.md#proxyGETProductRatePlanCharge) | **GET** /object/product-rate-plan-charge/{id} | CRUD: Retrieve ProductRatePlanCharge


# **proxyDELETEProductRatePlanCharge**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEProductRatePlanCharge($id)

CRUD: Delete ProductRatePlanCharge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlanChargesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEProductRatePlanCharge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlanChargesApi->proxyDELETEProductRatePlanCharge: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETProductRatePlanCharge**
> \Swagger\Client\Model\ProxyGetProductRatePlanCharge proxyGETProductRatePlanCharge($id, $fields)

CRUD: Retrieve ProductRatePlanCharge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlanChargesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETProductRatePlanCharge($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlanChargesApi->proxyGETProductRatePlanCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetProductRatePlanCharge**](../Model/ProxyGetProductRatePlanCharge.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

