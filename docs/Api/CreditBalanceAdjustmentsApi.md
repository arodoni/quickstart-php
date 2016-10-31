# Swagger\Client\CreditBalanceAdjustmentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETECreditBalanceAdjustment**](CreditBalanceAdjustmentsApi.md#proxyDELETECreditBalanceAdjustment) | **DELETE** /object/credit-balance-adjustment/{id} | CRUD: Delete CreditBalanceAdjustment
[**proxyGETCreditBalanceAdjustment**](CreditBalanceAdjustmentsApi.md#proxyGETCreditBalanceAdjustment) | **GET** /object/credit-balance-adjustment/{id} | CRUD: Retrieve CreditBalanceAdjustment


# **proxyDELETECreditBalanceAdjustment**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETECreditBalanceAdjustment($id)

CRUD: Delete CreditBalanceAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CreditBalanceAdjustmentsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETECreditBalanceAdjustment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditBalanceAdjustmentsApi->proxyDELETECreditBalanceAdjustment: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETCreditBalanceAdjustment**
> \Swagger\Client\Model\ProxyGetCreditBalanceAdjustment proxyGETCreditBalanceAdjustment($id, $fields)

CRUD: Retrieve CreditBalanceAdjustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CreditBalanceAdjustmentsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETCreditBalanceAdjustment($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditBalanceAdjustmentsApi->proxyGETCreditBalanceAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetCreditBalanceAdjustment**](../Model/ProxyGetCreditBalanceAdjustment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

