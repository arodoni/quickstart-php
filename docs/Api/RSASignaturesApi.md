# Swagger\Client\RSASignaturesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pOSTDecryptResponse**](RSASignaturesApi.md#pOSTDecryptResponse) | **POST** /rsa-signatures/decrypt | Decrypt RSA signature
[**pOSTRSASignature**](RSASignaturesApi.md#pOSTRSASignature) | **POST** /rsa-signatures | Generate RSA signature


# **pOSTDecryptResponse**
> \Swagger\Client\Model\POSTDecryptResponseType pOSTDecryptResponse($request)

Decrypt RSA signature

The REST API used in Payment Pages 2.0 are CORS (Cross-Origin Resource Sharing) enabled and therefore requires a digital signature. You use rsa_signatures to generate the required digital signature and token for a Payment Pages 2.0 form, and then you use the decrypt REST service to decrypt the signature to validate the signature and key.  This REST service should be used only when you implement Payment Pages 2.0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RSASignaturesApi();
$request = new \Swagger\Client\Model\POSTDecryptionType(); // \Swagger\Client\Model\POSTDecryptionType | 

try {
    $result = $api_instance->pOSTDecryptResponse($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RSASignaturesApi->pOSTDecryptResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTDecryptionType**](../Model/\Swagger\Client\Model\POSTDecryptionType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTDecryptResponseType**](../Model/POSTDecryptResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTRSASignature**
> \Swagger\Client\Model\POSTRSASignatureResponseType pOSTRSASignature($request)

Generate RSA signature

The REST API used in Payment Pages 2.0 are CORS (Cross-Origin Resource Sharing) enabled and therefore requires a digital signature. The POST rsa_signatures call generates and returns the required digital signature and token for a Payment Pages 2.0 form. You need to pass the generated signature to your client for it to access Payment Pages 2.0.     This REST service should be used only when you implement Payment Pages 2.0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RSASignaturesApi();
$request = new \Swagger\Client\Model\POSTRSASignatureType(); // \Swagger\Client\Model\POSTRSASignatureType | 

try {
    $result = $api_instance->pOSTRSASignature($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RSASignaturesApi->pOSTRSASignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTRSASignatureType**](../Model/\Swagger\Client\Model\POSTRSASignatureType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTRSASignatureResponseType**](../Model/POSTRSASignatureResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

