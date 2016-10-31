# Swagger\Client\GetFilesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETFiles**](GetFilesApi.md#gETFiles) | **GET** /files/{file-id} | Get files


# **gETFiles**
> gETFiles($file_id)

Get files

Retrieve a file by specifying its file ID. You can retrieve accounting period reports, such as the Revenue Detail report, as well as other files such as invoice PDFs.  ## Example  ```curl curl -i -k -H \"apiAccessKeyId:$USER_NAME\" -H \"apiSecretAccessKey:$PASSWORD\" -H \"Accept:application/pdf\" -X GET https://apisandbox-api.zuora.com/rest/v1/files/2c92c08c55534cf00155581fb474314d -o /Users/jsmith/Downloads/invoiceFile1.pdf ``` The invoice PDF is downloaded to /Users/jsmith/Downloads and named invoiceFile1.pdf.  ## File Size Limitation The maximum export file size is 2047MB. If you have large data requests that go over this limit, you will get the following 403 HTTP response code from Zuora.  `<security:max-object-size>2047MB</security:max-object-size>`  Submit a request at [Zuora Global Support](https://zuora.zendesk.com/agent/) if you require additional assistance.  We can work with you to determine if large file optimization is an option for you.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GetFilesApi();
$file_id = "file_id_example"; // string | The Zuora ID of the file you want to retrieve.  See [Get Accounting Period](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Accounting_Periods/Get_Accounting_Period) for getting file IDs of accounting period reports, such as the Revenue Detail report.

try {
    $api_instance->gETFiles($file_id);
} catch (Exception $e) {
    echo 'Exception when calling GetFilesApi->gETFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**| The Zuora ID of the file you want to retrieve.  See [Get Accounting Period](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Accounting_Periods/Get_Accounting_Period) for getting file IDs of accounting period reports, such as the Revenue Detail report. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

