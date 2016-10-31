# Swagger\Client\ContactsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETEContact**](ContactsApi.md#proxyDELETEContact) | **DELETE** /object/contact/{id} | CRUD: Delete Contact
[**proxyGETContact**](ContactsApi.md#proxyGETContact) | **GET** /object/contact/{id} | CRUD: Retrieve Contact
[**proxyPOSTContact**](ContactsApi.md#proxyPOSTContact) | **POST** /object/contact | CRUD: Create Contact
[**proxyPUTContact**](ContactsApi.md#proxyPUTContact) | **PUT** /object/contact/{id} | CRUD: Update Contact


# **proxyDELETEContact**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETEContact($id)

CRUD: Delete Contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETEContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->proxyDELETEContact: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETContact**
> \Swagger\Client\Model\ProxyGetContact proxyGETContact($id, $fields)

CRUD: Retrieve Contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETContact($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->proxyGETContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetContact**](../Model/ProxyGetContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTContact**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTContact($create_request)

CRUD: Create Contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateContact(); // \Swagger\Client\Model\ProxyCreateContact | 

try {
    $result = $api_instance->proxyPOSTContact($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->proxyPOSTContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateContact**](../Model/\Swagger\Client\Model\ProxyCreateContact.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTContact**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTContact($id, $modify_request)

CRUD: Update Contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifyContact(); // \Swagger\Client\Model\ProxyModifyContact | 

try {
    $result = $api_instance->proxyPUTContact($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->proxyPUTContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifyContact**](../Model/\Swagger\Client\Model\ProxyModifyContact.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

