# Swagger\Client\AttachmentsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETEAttachments**](AttachmentsApi.md#dELETEAttachments) | **DELETE** /attachments/{attachment-id} | Delete attachments
[**gETAttachments**](AttachmentsApi.md#gETAttachments) | **GET** /attachments/{attachment-id} | View attachments
[**gETAttachmentsResponse**](AttachmentsApi.md#gETAttachmentsResponse) | **GET** /attachments/{object-type}/{object-key} | View attachments list
[**pOSTAttachments**](AttachmentsApi.md#pOSTAttachments) | **POST** /attachments | Add attachments
[**pUTAttachments**](AttachmentsApi.md#pUTAttachments) | **PUT** /attachments/{attachment-id} | Edit attachments


# **dELETEAttachments**
> \Swagger\Client\Model\CommonResponseType dELETEAttachments($attachment_id)

Delete attachments

Use the Delete Attachment REST request to delete an attachment from a Zuora object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttachmentsApi();
$attachment_id = "attachment_id_example"; // string | Id of the attachment to be deleted.

try {
    $result = $api_instance->dELETEAttachments($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->dELETEAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| Id of the attachment to be deleted. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAttachments**
> \Swagger\Client\Model\GETAttachmentResponseType gETAttachments($attachment_id)

View attachments

Use the View Attachment REST request to retrieve information about an attachment document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttachmentsApi();
$attachment_id = "attachment_id_example"; // string | Id of the attachment you want to view.

try {
    $result = $api_instance->gETAttachments($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->gETAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| Id of the attachment you want to view. |

### Return type

[**\Swagger\Client\Model\GETAttachmentResponseType**](../Model/GETAttachmentResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETAttachmentsResponse**
> \Swagger\Client\Model\GETAttachmentsResponseType gETAttachmentsResponse($object_type, $object_key)

View attachments list

Use the View Attachment REST request to get a list of attachments on an account, an invoice, or a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttachmentsApi();
$object_type = "object_type_example"; // string | Specify one of the following: * Account  * Subscription  * Invoice
$object_key = "object_key_example"; // string | Id of the attachment. This id is included in the response from the Add Attachment request.

try {
    $result = $api_instance->gETAttachmentsResponse($object_type, $object_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->gETAttachmentsResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_type** | **string**| Specify one of the following: * Account  * Subscription  * Invoice |
 **object_key** | **string**| Id of the attachment. This id is included in the response from the Add Attachment request. |

### Return type

[**\Swagger\Client\Model\GETAttachmentsResponseType**](../Model/GETAttachmentsResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTAttachments**
> \Swagger\Client\Model\POSTAttachmentResponseType pOSTAttachments($associated_object_type, $associated_object_key, $request, $description)

Add attachments

Use the Add Attachment REST request with a multipart/form-data to attach a document file to an Account, a Subscription, or an Invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttachmentsApi();
$associated_object_type = "associated_object_type_example"; // string | Specify one of the following values: Account, Subscription, or Invoice.
$associated_object_key = "associated_object_key_example"; // string | For the Subscription type, specify the Subscription Number. An attachment is tied tied to the Subscription Number and thus viewable with every subscription version.  For Account and Invoice, specify the id.
$request = new \Swagger\Client\Model\POSTAttachmentType(); // \Swagger\Client\Model\POSTAttachmentType | 
$description = "description_example"; // string | Description of the attachment document.

try {
    $result = $api_instance->pOSTAttachments($associated_object_type, $associated_object_key, $request, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->pOSTAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **associated_object_type** | **string**| Specify one of the following values: Account, Subscription, or Invoice. |
 **associated_object_key** | **string**| For the Subscription type, specify the Subscription Number. An attachment is tied tied to the Subscription Number and thus viewable with every subscription version.  For Account and Invoice, specify the id. |
 **request** | [**\Swagger\Client\Model\POSTAttachmentType**](../Model/\Swagger\Client\Model\POSTAttachmentType.md)|  |
 **description** | **string**| Description of the attachment document. | [optional]

### Return type

[**\Swagger\Client\Model\POSTAttachmentResponseType**](../Model/POSTAttachmentResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTAttachments**
> \Swagger\Client\Model\CommonResponseType pUTAttachments($attachment_id, $request)

Edit attachments

Use the Edit Attachment REST request to make changes to the descriptive fields of an attachment, such as the description and the file name. You cannot change the actual content of the attached file in Zuora. If you need to change the actual content, you need to delete the attachment and add the updated file as a new attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttachmentsApi();
$attachment_id = "attachment_id_example"; // string | Id of the attachment to be updated.
$request = new \Swagger\Client\Model\PUTAttachmentType(); // \Swagger\Client\Model\PUTAttachmentType | 

try {
    $result = $api_instance->pUTAttachments($attachment_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->pUTAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| Id of the attachment to be updated. |
 **request** | [**\Swagger\Client\Model\PUTAttachmentType**](../Model/\Swagger\Client\Model\PUTAttachmentType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

