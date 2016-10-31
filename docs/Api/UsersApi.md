# Swagger\Client\UsersApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEUser**](UsersApi.md#proxyDELETEUser) | **DELETE** /object/user/{id} | CRUD: Delete User
[**proxyGETUser**](UsersApi.md#proxyGETUser) | **GET** /object/user/{id} | CRUD: Retrieve User
[**proxyPUTUser**](UsersApi.md#proxyPUTUser) | **PUT** /object/user/{id} | CRUD: Update User


# **proxyDELETEUser**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEUser($id)

CRUD: Delete User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->proxyDELETEUser: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETUser**
> \Swagger\Client\Model\ProxyGetUser proxyGETUser($id, $fields)

CRUD: Retrieve User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETUser($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->proxyGETUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetUser**](../Model/ProxyGetUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTUser**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTUser($id, $modify_request)

CRUD: Update User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyUser(); // \Swagger\Client\Model\ProxyModifyUser | 

try {
    $result = $api_instance->proxyPUTUser($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->proxyPUTUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyUser**](../Model/\Swagger\Client\Model\ProxyModifyUser.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

