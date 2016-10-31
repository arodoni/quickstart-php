# Swagger\Client\RatePlansApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETERatePlan**](RatePlansApi.md#proxyDELETERatePlan) | **DELETE** /object/rate-plan/{id} | CRUD: Delete RatePlan
[**proxyGETRatePlan**](RatePlansApi.md#proxyGETRatePlan) | **GET** /object/rate-plan/{id} | CRUD: Retrieve RatePlan


# **proxyDELETERatePlan**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETERatePlan($id)

CRUD: Delete RatePlan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RatePlansApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETERatePlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatePlansApi->proxyDELETERatePlan: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETRatePlan**
> \Swagger\Client\Model\ProxyGetRatePlan proxyGETRatePlan($id, $fields)

CRUD: Retrieve RatePlan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RatePlansApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETRatePlan($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatePlansApi->proxyGETRatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetRatePlan**](../Model/ProxyGetRatePlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

