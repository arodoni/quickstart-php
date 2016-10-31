# Swagger\Client\RefundsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETERefund**](RefundsApi.md#proxyDELETERefund) | **DELETE** /object/refund/{id} | CRUD: Delete Refund
[**proxyGETRefund**](RefundsApi.md#proxyGETRefund) | **GET** /object/refund/{id} | CRUD: Retrieve Refund
[**proxyPOSTRefund**](RefundsApi.md#proxyPOSTRefund) | **POST** /object/refund | CRUD: Create Refund
[**proxyPUTRefund**](RefundsApi.md#proxyPUTRefund) | **PUT** /object/refund/{id} | CRUD: Update Refund


# **proxyDELETERefund**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETERefund($id)

CRUD: Delete Refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETERefund($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->proxyDELETERefund: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETRefund**
> \Swagger\Client\Model\ProxyGetRefund proxyGETRefund($id, $fields)

CRUD: Retrieve Refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETRefund($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->proxyGETRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetRefund**](../Model/ProxyGetRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTRefund**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTRefund($create_request)

CRUD: Create Refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateRefund(); // \Swagger\Client\Model\ProxyCreateRefund | 

try {
    $result = $api_instance->proxyPOSTRefund($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->proxyPOSTRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateRefund**](../Model/\Swagger\Client\Model\ProxyCreateRefund.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTRefund**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTRefund($id, $modify_request)

CRUD: Update Refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RefundsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyRefund(); // \Swagger\Client\Model\ProxyModifyRefund | 

try {
    $result = $api_instance->proxyPUTRefund($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->proxyPUTRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyRefund**](../Model/\Swagger\Client\Model\ProxyModifyRefund.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

