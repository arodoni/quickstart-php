# Swagger\Client\AmendmentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETAmendment**](AmendmentsApi.md#gETAmendment) | **GET** /amendments/{amendment-key} | Get amendments by key
[**gETAmendmentsBySubscriptionID**](AmendmentsApi.md#gETAmendmentsBySubscriptionID) | **GET** /amendments/subscriptions/{subscription-id} | Get amendments by subscription ID
[**proxyDELETEAmendment**](AmendmentsApi.md#proxyDELETEAmendment) | **DELETE** /object/amendment/{id} | CRUD: Delete Amendment
[**proxyGETAmendment**](AmendmentsApi.md#proxyGETAmendment) | **GET** /object/amendment/{id} | CRUD: Retrieve Amendment
[**proxyPOSTAmendment**](AmendmentsApi.md#proxyPOSTAmendment) | **POST** /object/amendment | CRUD: Create Amendment
[**proxyPUTAmendment**](AmendmentsApi.md#proxyPUTAmendment) | **PUT** /object/amendment/{id} | CRUD: Update Amendment


# **gETAmendment**
> \Swagger\Client\Model\GETAmendmentType gETAmendment($amendment_key)

Get amendments by key

Retrieves detailed information about the specified subscription amendment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AmendmentsApi();
$amendment_key = "amendment_key_example"; // string | Can be the amendment ID or the amendment code.

try {
    $result = $api_instance->gETAmendment($amendment_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmendmentsApi->gETAmendment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amendment_key** | **string**| Can be the amendment ID or the amendment code. |

### Return type

[**\Swagger\Client\Model\GETAmendmentType**](../Model/GETAmendmentType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAmendmentsBySubscriptionID**
> \Swagger\Client\Model\GETAmendmentType gETAmendmentsBySubscriptionID($subscription_id)

Get amendments by subscription ID

Retrieves detailed information about the amendment with the specified subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AmendmentsApi();
$subscription_id = "subscription_id_example"; // string | The ID of the subscription whose amendment changes you want to retrieve.

try {
    $result = $api_instance->gETAmendmentsBySubscriptionID($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmendmentsApi->gETAmendmentsBySubscriptionID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The ID of the subscription whose amendment changes you want to retrieve. |

### Return type

[**\Swagger\Client\Model\GETAmendmentType**](../Model/GETAmendmentType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETEAmendment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEAmendment($id)

CRUD: Delete Amendment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AmendmentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEAmendment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmendmentsApi->proxyDELETEAmendment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETAmendment**
> \Swagger\Client\Model\ProxyGetAmendment proxyGETAmendment($id, $fields)

CRUD: Retrieve Amendment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AmendmentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETAmendment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmendmentsApi->proxyGETAmendment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetAmendment**](../Model/ProxyGetAmendment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTAmendment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTAmendment($create_request)

CRUD: Create Amendment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AmendmentsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateAmendment(); // \Swagger\Client\Model\ProxyCreateAmendment | 

try {
    $result = $api_instance->proxyPOSTAmendment($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmendmentsApi->proxyPOSTAmendment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateAmendment**](../Model/\Swagger\Client\Model\ProxyCreateAmendment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTAmendment**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTAmendment($id, $modify_request)

CRUD: Update Amendment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AmendmentsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyAmendment(); // \Swagger\Client\Model\ProxyModifyAmendment | 

try {
    $result = $api_instance->proxyPUTAmendment($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmendmentsApi->proxyPUTAmendment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyAmendment**](../Model/\Swagger\Client\Model\ProxyModifyAmendment.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

