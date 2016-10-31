# Swagger\Client\UnitOfMeasureApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEUnitOfMeasure**](UnitOfMeasureApi.md#proxyDELETEUnitOfMeasure) | **DELETE** /object/unit-of-measure/{id} | CRUD: Delete UnitOfMeasure
[**proxyGETUnitOfMeasure**](UnitOfMeasureApi.md#proxyGETUnitOfMeasure) | **GET** /object/unit-of-measure/{id} | CRUD: Retrieve UnitOfMeasure
[**proxyPOSTUnitOfMeasure**](UnitOfMeasureApi.md#proxyPOSTUnitOfMeasure) | **POST** /object/unit-of-measure | CRUD: Create UnitOfMeasure
[**proxyPUTUnitOfMeasure**](UnitOfMeasureApi.md#proxyPUTUnitOfMeasure) | **PUT** /object/unit-of-measure/{id} | CRUD: Update UnitOfMeasure


# **proxyDELETEUnitOfMeasure**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEUnitOfMeasure($id)

CRUD: Delete UnitOfMeasure



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitOfMeasureApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEUnitOfMeasure($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->proxyDELETEUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETUnitOfMeasure**
> \Swagger\Client\Model\ProxyGetUnitOfMeasure proxyGETUnitOfMeasure($id, $fields)

CRUD: Retrieve UnitOfMeasure



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitOfMeasureApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETUnitOfMeasure($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->proxyGETUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetUnitOfMeasure**](../Model/ProxyGetUnitOfMeasure.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTUnitOfMeasure**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTUnitOfMeasure($create_request)

CRUD: Create UnitOfMeasure



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitOfMeasureApi();
$create_request = new \Swagger\Client\Model\ProxyCreateUnitOfMeasure(); // \Swagger\Client\Model\ProxyCreateUnitOfMeasure | 

try {
    $result = $api_instance->proxyPOSTUnitOfMeasure($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->proxyPOSTUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateUnitOfMeasure**](../Model/\Swagger\Client\Model\ProxyCreateUnitOfMeasure.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTUnitOfMeasure**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTUnitOfMeasure($id, $modify_request)

CRUD: Update UnitOfMeasure



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitOfMeasureApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyUnitOfMeasure(); // \Swagger\Client\Model\ProxyModifyUnitOfMeasure | 

try {
    $result = $api_instance->proxyPUTUnitOfMeasure($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfMeasureApi->proxyPUTUnitOfMeasure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyUnitOfMeasure**](../Model/\Swagger\Client\Model\ProxyModifyUnitOfMeasure.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

