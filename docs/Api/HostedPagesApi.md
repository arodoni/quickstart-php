# Swagger\Client\HostedPagesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHostedPages**](HostedPagesApi.md#getHostedPages) | **GET** /hostedpages | Return hosted pages


# **getHostedPages**
> \Swagger\Client\Model\GetHostedPagesType getHostedPages($version_number)

Return hosted pages

The hostedpages call returns the Payment Pages configuration metadata, specifically, page ID, page version, payment method type.  The following are the version-specific and general REST requests for Payment Pages:  * The request for Payment Pages 1.0 configuration information: `GET <BaseURL>/hostedpages?version=1` * The request for Payment Pages 2.0 configuration information: `GET <BaseURL>/hostedpages?version=2` * The request for all versions of Payment Pages configuration information: `GET <BaseURL>/hostedpages`  ## Notes If you do not have the corresponding tenant setting enabled, e.g., the request `version` parameter set to 2 with the Payment Pages 2.0 setting disabled, you will receive an error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HostedPagesApi();
$version_number = "version_number_example"; // string | Version of the Payment Pages for which you want to retrieve the configuration information. Specify 1 for Payment Pages 1.0 or 2 for Payment Pages 2.0. If omitted, information for all versions of Payment Pages are returned.  The response also depends on your tenant settings for Payment Pages 1.0 and Payment Pages 2.0. For example, if only the tenant setting for Payment Pages 2.0 is enabled, the response will only contain information for Payment Pages 2.0 forms even when this parameter is omitted.

try {
    $result = $api_instance->getHostedPages($version_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedPagesApi->getHostedPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version_number** | **string**| Version of the Payment Pages for which you want to retrieve the configuration information. Specify 1 for Payment Pages 1.0 or 2 for Payment Pages 2.0. If omitted, information for all versions of Payment Pages are returned.  The response also depends on your tenant settings for Payment Pages 1.0 and Payment Pages 2.0. For example, if only the tenant setting for Payment Pages 2.0 is enabled, the response will only contain information for Payment Pages 2.0 forms even when this parameter is omitted. | [optional]

### Return type

[**\Swagger\Client\Model\GetHostedPagesType**](../Model/GetHostedPagesType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

