# Swagger\Client\ConnectionsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pOSTConnections**](ConnectionsApi.md#pOSTConnections) | **POST** /connections | Establish connection to Zuora REST API service


# **pOSTConnections**
> \Swagger\Client\Model\CommonResponseType pOSTConnections($api_access_key_id, $api_secret_access_key, $content_type)

Establish connection to Zuora REST API service

Establishes a connection to the Zuora REST API service based on a valid user credentials.  This call authenticates the user and returns an API session cookie that's used to authorize subsequent calls to the REST API. A call to `connections` is a required first step before using the Zuora REST API to access data.  The credentials must belong to a user account that has permission to access the API service.  As noted elsewhere, it's strongly recommended that an account used for Zuora API activity is never used to log into the Zuora UI.  Once an account is used to log into the UI, it may be subject to periodic forced password changes, which may eventually lead to authentication failures when using the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConnectionsApi();
$api_access_key_id = "api_access_key_id_example"; // string | Account username
$api_secret_access_key = "api_secret_access_key_example"; // string | Account password
$content_type = "content_type_example"; // string | Must be set to \"application/json\"

try {
    $result = $api_instance->pOSTConnections($api_access_key_id, $api_secret_access_key, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->pOSTConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_access_key_id** | **string**| Account username |
 **api_secret_access_key** | **string**| Account password |
 **content_type** | **string**| Must be set to \&quot;application/json\&quot; |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

