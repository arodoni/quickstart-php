# Swagger\Client\PaymentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEPayment**](PaymentsApi.md#proxyDELETEPayment) | **DELETE** /object/payment/{id} | CRUD: Delete Payment
[**proxyGETPayment**](PaymentsApi.md#proxyGETPayment) | **GET** /object/payment/{id} | CRUD: Retrieve Payment
[**proxyPOSTPayment**](PaymentsApi.md#proxyPOSTPayment) | **POST** /object/payment | CRUD: Create Payment
[**proxyPUTPayment**](PaymentsApi.md#proxyPUTPayment) | **PUT** /object/payment/{id} | CRUD: Update Payment


# **proxyDELETEPayment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEPayment($id)

CRUD: Delete Payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->proxyDELETEPayment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETPayment**
> \Swagger\Client\Model\ProxyGetPayment proxyGETPayment($id, $fields)

CRUD: Retrieve Payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETPayment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->proxyGETPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetPayment**](../Model/ProxyGetPayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTPayment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTPayment($create_request)

CRUD: Create Payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentsApi();
$create_request = new \Swagger\Client\Model\ProxyCreatePayment(); // \Swagger\Client\Model\ProxyCreatePayment | 

try {
    $result = $api_instance->proxyPOSTPayment($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->proxyPOSTPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreatePayment**](../Model/\Swagger\Client\Model\ProxyCreatePayment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTPayment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTPayment($id, $modify_request)

CRUD: Update Payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyPayment(); // \Swagger\Client\Model\ProxyModifyPayment | 

try {
    $result = $api_instance->proxyPUTPayment($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->proxyPUTPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyPayment**](../Model/\Swagger\Client\Model\ProxyModifyPayment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

