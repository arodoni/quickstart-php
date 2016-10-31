# Swagger\Client\TransactionsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETInvoice**](TransactionsApi.md#gETInvoice) | **GET** /transactions/invoices/accounts/{account-key} | Get invoices
[**gETPayments**](TransactionsApi.md#gETPayments) | **GET** /transactions/payments/accounts/{account-key} | Get payments


# **gETInvoice**
> \Swagger\Client\Model\GETInvoiceFileWrapper gETInvoice($account_key)

Get invoices

Retrieves invoices for a specified account.  Invoices are returned in reverse chronological order by **updatedDate**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TransactionsApi();
$account_key = "account_key_example"; // string | Account number or account ID.

try {
    $result = $api_instance->gETInvoice($account_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->gETInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |

### Return type

[**\Swagger\Client\Model\GETInvoiceFileWrapper**](../Model/GETInvoiceFileWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETPayments**
> \Swagger\Client\Model\GETPaymentsType gETPayments($account_key)

Get payments

Retrieves payments for a specified account. Payments are returned in reverse chronological order by **updatedDate**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TransactionsApi();
$account_key = "account_key_example"; // string | Account number or account ID.

try {
    $result = $api_instance->gETPayments($account_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->gETPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Account number or account ID. |

### Return type

[**\Swagger\Client\Model\GETPaymentsType**](../Model/GETPaymentsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

