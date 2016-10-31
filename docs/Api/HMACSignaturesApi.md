# Swagger\Client\HMACSignaturesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pOSTHMACSignature**](HMACSignaturesApi.md#pOSTHMACSignature) | **POST** /hmac-signatures | Return HMAC signatures


# **pOSTHMACSignature**
> \Swagger\Client\Model\POSTHMACSignatureResponseType pOSTHMACSignature($request)

Return HMAC signatures

This REST API reference describes how to return unique signature and token values that used to process a [CORS enabled API call](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/G_CORS_REST).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HMACSignaturesApi();
$request = new \Swagger\Client\Model\POSTHMACSignatureType(); // \Swagger\Client\Model\POSTHMACSignatureType | 

try {
    $result = $api_instance->pOSTHMACSignature($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HMACSignaturesApi->pOSTHMACSignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTHMACSignatureType**](../Model/\Swagger\Client\Model\POSTHMACSignatureType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTHMACSignatureResponseType**](../Model/POSTHMACSignatureResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

