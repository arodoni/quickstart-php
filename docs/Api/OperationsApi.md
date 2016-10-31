# Swagger\Client\OperationsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pOSTTransactionInvoicePayment**](OperationsApi.md#pOSTTransactionInvoicePayment) | **POST** /operations/invoice-collect | Invoice and collect


# **pOSTTransactionInvoicePayment**
> \Swagger\Client\Model\POSTInvoiceCollectResponseType pOSTTransactionInvoicePayment($request)

Invoice and collect

Generates invoices and collects payments for a specified account.  This method can generate invoices and collect payments on the invoices generated, or else simply collect payment on a specified existing invoice. The customer's default payment method is used, and the full amount due is collected. The operation depends on the parameters you specify  - To generate one or more new invoices for that customer and collect payment on the generated invoice(s), leave the **invoiceId** field empty.   - To collect payment on an existing invoice, specify the invoice ID.    The operation is atomic; if any part is unsuccessful, the entire operation is rolled back.   ## Notes  Timeouts may occur when using this method on an account that has an extremely high number of subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OperationsApi();
$request = new \Swagger\Client\Model\POSTInvoiceCollectType(); // \Swagger\Client\Model\POSTInvoiceCollectType | Customer account ID or account number.

try {
    $result = $api_instance->pOSTTransactionInvoicePayment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->pOSTTransactionInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTInvoiceCollectType**](../Model/\Swagger\Client\Model\POSTInvoiceCollectType.md)| Customer account ID or account number. |

### Return type

[**\Swagger\Client\Model\POSTInvoiceCollectResponseType**](../Model/POSTInvoiceCollectResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

