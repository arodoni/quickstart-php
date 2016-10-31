# Swagger\Client\CommunicationProfilesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyDELETECommunicationProfile**](CommunicationProfilesApi.md#proxyDELETECommunicationProfile) | **DELETE** /object/communication-profile/{id} | CRUD: Delete CommunicationProfile
[**proxyGETCommunicationProfile**](CommunicationProfilesApi.md#proxyGETCommunicationProfile) | **GET** /object/communication-profile/{id} | CRUD: Retrieve CommunicationProfile


# **proxyDELETECommunicationProfile**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETECommunicationProfile($id)

CRUD: Delete CommunicationProfile



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CommunicationProfilesApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETECommunicationProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationProfilesApi->proxyDELETECommunicationProfile: ', $e->getMessage(), PHP_EOL;
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

# **proxyGETCommunicationProfile**
> \Swagger\Client\Model\ProxyGetCommunicationProfile proxyGETCommunicationProfile($id, $fields)

CRUD: Retrieve CommunicationProfile



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CommunicationProfilesApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETCommunicationProfile($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationProfilesApi->proxyGETCommunicationProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetCommunicationProfile**](../Model/ProxyGetCommunicationProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

