# Swagger\Client\QuotesDocumentApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pOSTQuoteDoc**](QuotesDocumentApi.md#pOSTQuoteDoc) | **POST** /quotes/document | Generate quotes document


# **pOSTQuoteDoc**
> \Swagger\Client\Model\POSTQuoteDocResponseType pOSTQuoteDoc($request)

Generate quotes document

The `document` call generates a quote document and returns the generated document URL. You can directly access the generated quote file through the returned URL.  The `document` call should be only used from Zuora Quotes.   ## File Size Limitation  The maximum export file size is 2047MB. If you have large data requests that go over this limit, you will get the following 403 HTTP response code from Zuora: `security:max-object-size>2047MB</security:max-object-size>`  Submit a request at [Zuora Global Support](http://support.zuora.com/) if you require additional assistance.  We can work with you to determine if large file optimization is an option for you.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuotesDocumentApi();
$request = new \Swagger\Client\Model\POSTQuoteDocType(); // \Swagger\Client\Model\POSTQuoteDocType | 

try {
    $result = $api_instance->pOSTQuoteDoc($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesDocumentApi->pOSTQuoteDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTQuoteDocType**](../Model/\Swagger\Client\Model\POSTQuoteDocType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTQuoteDocResponseType**](../Model/POSTQuoteDocResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

