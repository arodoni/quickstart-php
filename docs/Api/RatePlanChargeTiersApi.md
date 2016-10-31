# Swagger\Client\RatePlanChargeTiersApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETERatePlanChargeTier**](RatePlanChargeTiersApi.md#proxyDELETERatePlanChargeTier) | **DELETE** /object/rate-plan-charge-tier/{id} | CRUD: Delete RatePlanChargeTier
[**proxyGETRatePlanChargeTier**](RatePlanChargeTiersApi.md#proxyGETRatePlanChargeTier) | **GET** /object/rate-plan-charge-tier/{id} | CRUD: Retrieve RatePlanChargeTier


# **proxyDELETERatePlanChargeTier**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETERatePlanChargeTier($id)

CRUD: Delete RatePlanChargeTier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RatePlanChargeTiersApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETERatePlanChargeTier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatePlanChargeTiersApi->proxyDELETERatePlanChargeTier: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETRatePlanChargeTier**
> \Swagger\Client\Model\ProxyGetRatePlanChargeTier proxyGETRatePlanChargeTier($id, $fields)

CRUD: Retrieve RatePlanChargeTier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RatePlanChargeTiersApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETRatePlanChargeTier($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatePlanChargeTiersApi->proxyGETRatePlanChargeTier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetRatePlanChargeTier**](../Model/ProxyGetRatePlanChargeTier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

