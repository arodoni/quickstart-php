# Swagger\Client\ProductRatePlansApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEProductRatePlan**](ProductRatePlansApi.md#proxyDELETEProductRatePlan) | **DELETE** /object/product-rate-plan/{id} | CRUD: Delete ProductRatePlan
[**proxyGETProductRatePlan**](ProductRatePlansApi.md#proxyGETProductRatePlan) | **GET** /object/product-rate-plan/{id} | CRUD: Retrieve ProductRatePlan
[**proxyPOSTProductRatePlan**](ProductRatePlansApi.md#proxyPOSTProductRatePlan) | **POST** /object/product-rate-plan | CRUD: Create ProductRatePlan
[**proxyPUTProductRatePlan**](ProductRatePlansApi.md#proxyPUTProductRatePlan) | **PUT** /object/product-rate-plan/{id} | CRUD: Update ProductRatePlan


# **proxyDELETEProductRatePlan**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEProductRatePlan($id)

CRUD: Delete ProductRatePlan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlansApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEProductRatePlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlansApi->proxyDELETEProductRatePlan: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETProductRatePlan**
> \Swagger\Client\Model\ProxyGetProductRatePlan proxyGETProductRatePlan($id, $fields)

CRUD: Retrieve ProductRatePlan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlansApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETProductRatePlan($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlansApi->proxyGETProductRatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetProductRatePlan**](../Model/ProxyGetProductRatePlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTProductRatePlan**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTProductRatePlan($create_request)

CRUD: Create ProductRatePlan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlansApi();
$create_request = new \Swagger\Client\Model\ProxyCreateProductRatePlan(); // \Swagger\Client\Model\ProxyCreateProductRatePlan | 

try {
    $result = $api_instance->proxyPOSTProductRatePlan($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlansApi->proxyPOSTProductRatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateProductRatePlan**](../Model/\Swagger\Client\Model\ProxyCreateProductRatePlan.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTProductRatePlan**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTProductRatePlan($id, $modify_request)

CRUD: Update ProductRatePlan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductRatePlansApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyProductRatePlan(); // \Swagger\Client\Model\ProxyModifyProductRatePlan | 

try {
    $result = $api_instance->proxyPUTProductRatePlan($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRatePlansApi->proxyPUTProductRatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyProductRatePlan**](../Model/\Swagger\Client\Model\ProxyModifyProductRatePlan.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

