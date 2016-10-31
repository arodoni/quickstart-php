# Swagger\Client\RatePlanChargesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETERatePlanCharge**](RatePlanChargesApi.md#proxyDELETERatePlanCharge) | **DELETE** /object/rate-plan-charge/{id} | CRUD: Delete RatePlanCharge
[**proxyGETRatePlanCharge**](RatePlanChargesApi.md#proxyGETRatePlanCharge) | **GET** /object/rate-plan-charge/{id} | CRUD: Retrieve RatePlanCharge


# **proxyDELETERatePlanCharge**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETERatePlanCharge($id)

CRUD: Delete RatePlanCharge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RatePlanChargesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETERatePlanCharge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatePlanChargesApi->proxyDELETERatePlanCharge: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETRatePlanCharge**
> \Swagger\Client\Model\ProxyGetRatePlanCharge proxyGETRatePlanCharge($id, $fields)

CRUD: Retrieve RatePlanCharge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RatePlanChargesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETRatePlanCharge($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatePlanChargesApi->proxyGETRatePlanCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetRatePlanCharge**](../Model/ProxyGetRatePlanCharge.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

