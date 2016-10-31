# Swagger\Client\TaxationItemsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETETaxationItem**](TaxationItemsApi.md#proxyDELETETaxationItem) | **DELETE** /object/taxation-item/{id} | CRUD: Delete TaxationItem
[**proxyGETTaxationItem**](TaxationItemsApi.md#proxyGETTaxationItem) | **GET** /object/taxation-item/{id} | CRUD: Retrieve TaxationItem
[**proxyPOSTTaxationItem**](TaxationItemsApi.md#proxyPOSTTaxationItem) | **POST** /object/taxation-item | CRUD: Create TaxationItem
[**proxyPUTTaxationItem**](TaxationItemsApi.md#proxyPUTTaxationItem) | **PUT** /object/taxation-item/{id} | CRUD: Update TaxationItem


# **proxyDELETETaxationItem**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETETaxationItem($id)

CRUD: Delete TaxationItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxationItemsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETETaxationItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxationItemsApi->proxyDELETETaxationItem: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETTaxationItem**
> \Swagger\Client\Model\ProxyGetTaxationItem proxyGETTaxationItem($id, $fields)

CRUD: Retrieve TaxationItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxationItemsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETTaxationItem($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxationItemsApi->proxyGETTaxationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetTaxationItem**](../Model/ProxyGetTaxationItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTTaxationItem**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTTaxationItem($create_request)

CRUD: Create TaxationItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxationItemsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateTaxationItem(); // \Swagger\Client\Model\ProxyCreateTaxationItem | 

try {
    $result = $api_instance->proxyPOSTTaxationItem($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxationItemsApi->proxyPOSTTaxationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateTaxationItem**](../Model/\Swagger\Client\Model\ProxyCreateTaxationItem.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTTaxationItem**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTTaxationItem($id, $modify_request)

CRUD: Update TaxationItem



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxationItemsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyTaxationItem(); // \Swagger\Client\Model\ProxyModifyTaxationItem | 

try {
    $result = $api_instance->proxyPUTTaxationItem($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxationItemsApi->proxyPUTTaxationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyTaxationItem**](../Model/\Swagger\Client\Model\ProxyModifyTaxationItem.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

