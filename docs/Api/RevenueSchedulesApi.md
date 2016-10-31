# Swagger\Client\RevenueSchedulesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dELETERS**](RevenueSchedulesApi.md#dELETERS) | **DELETE** /revenue-schedules/{rs-number} | Delete revenue schedule
[**gETRSDetail**](RevenueSchedulesApi.md#gETRSDetail) | **GET** /revenue-schedules/{rs-number} | Get revenue schedule details
[**gETRSDetailsByCharge**](RevenueSchedulesApi.md#gETRSDetailsByCharge) | **GET** /revenue-schedules/subscription-charges/{charge-key} | Get revenue schedule by subscription charge
[**gETRSbyInvoiceItem**](RevenueSchedulesApi.md#gETRSbyInvoiceItem) | **GET** /revenue-schedules/invoice-items/{invoice-item-id} | Get a revenue schedule by invoice item ID
[**gETRSbyInvoiceItemAdjustment**](RevenueSchedulesApi.md#gETRSbyInvoiceItemAdjustment) | **GET** /revenue-schedules/invoice-item-adjustments/{invoice-item-adj-id}/ | Get a revenue schedule by invoice item adjustment
[**pOSTRSforInvoiceItemAdjustmentDistributeByDateRange**](RevenueSchedulesApi.md#pOSTRSforInvoiceItemAdjustmentDistributeByDateRange) | **POST** /revenue-schedules/invoice-item-adjustments/{invoice-item-adj-key}/distribute-revenue-with-date-range | Create a revenue schedule for an Invoice Item Adjustment (distribute by date range)
[**pOSTRSforInvoiceItemAdjustmentManualDistribution**](RevenueSchedulesApi.md#pOSTRSforInvoiceItemAdjustmentManualDistribution) | **POST** /revenue-schedules/invoice-item-adjustments/{invoice-item-adj-key} | Create a revenue schedule for an Invoice Item Adjustment (manual distribution)
[**pOSTRSforInvoiceItemDistributeByDateRange**](RevenueSchedulesApi.md#pOSTRSforInvoiceItemDistributeByDateRange) | **POST** /revenue-schedules/invoice-items/{invoice-item-id}/distribute-revenue-with-date-range | Create a revenue schedule for an Invoice Item (distribute by date range)
[**pOSTRSforInvoiceItemManualDistribution**](RevenueSchedulesApi.md#pOSTRSforInvoiceItemManualDistribution) | **POST** /revenue-schedules/invoice-items/{invoice-item-id} | Create a revenue schedule for an Invoice Item (manual distribution)
[**pOSTRevenueScheduleByChargeResponse**](RevenueSchedulesApi.md#pOSTRevenueScheduleByChargeResponse) | **POST** /revenue-schedules/subscription-charges/{charge-key} | Create a revenue schedule on a subscription charge
[**pUTRSBasicInfo**](RevenueSchedulesApi.md#pUTRSBasicInfo) | **PUT** /revenue-schedules/{rs-number}/basic-information | Update revenue schedule basic information
[**pUTRevenueAcrossAP**](RevenueSchedulesApi.md#pUTRevenueAcrossAP) | **PUT** /revenue-schedules/{rs-number}/distribute-revenue-across-accounting-periods | Distribute revenue across accounting periods
[**pUTRevenueByRecognitionStartandEndDates**](RevenueSchedulesApi.md#pUTRevenueByRecognitionStartandEndDates) | **PUT** /revenue-schedules/{rs-number}/distribute-revenue-with-date-range | Distribute revenue by recognition start and end dates
[**pUTRevenueSpecificDate**](RevenueSchedulesApi.md#pUTRevenueSpecificDate) | **PUT** /revenue-schedules/{rs-number}/distribute-revenue-on-specific-date | Distribute revenue on a specific date


# **dELETERS**
> \Swagger\Client\Model\CommonResponseType dELETERS($rs_number)

Delete revenue schedule

This REST API reference describes how to delete a revenue schedule by specifying its revenue schedule number ## Prerequisites You must have the Delete Custom Revenue Schedule [Z-Finance permission](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/Administrator_Settings/User_Roles/Z-Finance_Roles#Z-Finance_Permissions).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number of the revenue schedule you want to delete, for example, RS-00000256. To be deleted, the revenue schedule: * Must be using a custom unlimited recognition rule. * Cannot have any revenue in a closed accounting period. * Cannot be included in a summary journal entry. * Cannot have a revenue schedule date in a closed accounting period.

try {
    $result = $api_instance->dELETERS($rs_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->dELETERS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number of the revenue schedule you want to delete, for example, RS-00000256. To be deleted, the revenue schedule: * Must be using a custom unlimited recognition rule. * Cannot have any revenue in a closed accounting period. * Cannot be included in a summary journal entry. * Cannot have a revenue schedule date in a closed accounting period. |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRSDetail**
> \Swagger\Client\Model\GETRSDetailType gETRSDetail($rs_number)

Get revenue schedule details

This REST API reference describes how to get the details of a revenue schedule by specifying the revenue schedule number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".

try {
    $result = $api_instance->gETRSDetail($rs_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->gETRSDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |

### Return type

[**\Swagger\Client\Model\GETRSDetailType**](../Model/GETRSDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRSDetailsByCharge**
> \Swagger\Client\Model\GETRSDetailsByChargeType gETRSDetailsByCharge($charge_key)

Get revenue schedule by subscription charge

This REST API reference describes how to get the revenue schedule details by specifying subscription charge ID. Request and response field descriptions and sample code are provided

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$charge_key = "charge_key_example"; // string | ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012.

try {
    $result = $api_instance->gETRSDetailsByCharge($charge_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->gETRSDetailsByCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_key** | **string**| ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012. |

### Return type

[**\Swagger\Client\Model\GETRSDetailsByChargeType**](../Model/GETRSDetailsByChargeType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRSbyInvoiceItem**
> \Swagger\Client\Model\GETRSDetailType gETRSbyInvoiceItem($invoice_item_id)

Get a revenue schedule by invoice item ID

This REST API reference describes how to get the details of a revenue schedule by specifying the invoice item ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$invoice_item_id = "invoice_item_id_example"; // string | A valid Invoice Item ID.

try {
    $result = $api_instance->gETRSbyInvoiceItem($invoice_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->gETRSbyInvoiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_item_id** | **string**| A valid Invoice Item ID. |

### Return type

[**\Swagger\Client\Model\GETRSDetailType**](../Model/GETRSDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRSbyInvoiceItemAdjustment**
> \Swagger\Client\Model\GETRSDetailType gETRSbyInvoiceItemAdjustment($invoice_item_adj_id)

Get a revenue schedule by invoice item adjustment

This REST API reference describes how to get the details of a revenue schedule by specifying a valid invoice item adjustment identifier. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$invoice_item_adj_id = "invoice_item_adj_id_example"; // string | ID or number of the Invoice Item Adjustment, for example, e20b07fd416dcfcf0141c81164fd0a72.

try {
    $result = $api_instance->gETRSbyInvoiceItemAdjustment($invoice_item_adj_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->gETRSbyInvoiceItemAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_item_adj_id** | **string**| ID or number of the Invoice Item Adjustment, for example, e20b07fd416dcfcf0141c81164fd0a72. |

### Return type

[**\Swagger\Client\Model\GETRSDetailType**](../Model/GETRSDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTRSforInvoiceItemAdjustmentDistributeByDateRange**
> \Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType pOSTRSforInvoiceItemAdjustmentDistributeByDateRange($invoice_item_adj_key, $request)

Create a revenue schedule for an Invoice Item Adjustment (distribute by date range)

This REST API reference describes how to create a revenue schedule for an Invoice Item Adjustment and distribute the revenue by specifying the recognition start and end dates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$invoice_item_adj_key = "invoice_item_adj_key_example"; // string | ID or number of the Invoice Item Adjustment, for example, e20b07fd416dcfcf0141c81164fd0a72. If the specified Invoice Item Adjustment is already associated with a revenue schedule, the call will fail.
$request = new \Swagger\Client\Model\POSTRevenueScheduleByDateRangeType(); // \Swagger\Client\Model\POSTRevenueScheduleByDateRangeType | 

try {
    $result = $api_instance->pOSTRSforInvoiceItemAdjustmentDistributeByDateRange($invoice_item_adj_key, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pOSTRSforInvoiceItemAdjustmentDistributeByDateRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_item_adj_key** | **string**| ID or number of the Invoice Item Adjustment, for example, e20b07fd416dcfcf0141c81164fd0a72. If the specified Invoice Item Adjustment is already associated with a revenue schedule, the call will fail. |
 **request** | [**\Swagger\Client\Model\POSTRevenueScheduleByDateRangeType**](../Model/\Swagger\Client\Model\POSTRevenueScheduleByDateRangeType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType**](../Model/POSTRevenueScheduleByTransactionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTRSforInvoiceItemAdjustmentManualDistribution**
> \Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType pOSTRSforInvoiceItemAdjustmentManualDistribution($invoice_item_adj_key, $request)

Create a revenue schedule for an Invoice Item Adjustment (manual distribution)

This REST API reference describes how to create a revenue schedule for an Invoice Item Adjustment and manually distribute the revenue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$invoice_item_adj_key = "invoice_item_adj_key_example"; // string | ID or number of the Invoice Item Adjustment, for example, e20b07fd416dcfcf0141c81164fd0a72. If the specified Invoice Item Adjustment is already associated with a revenue schedule, the call will fail.
$request = new \Swagger\Client\Model\POSTRevenueScheduleByTransactionType(); // \Swagger\Client\Model\POSTRevenueScheduleByTransactionType | 

try {
    $result = $api_instance->pOSTRSforInvoiceItemAdjustmentManualDistribution($invoice_item_adj_key, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pOSTRSforInvoiceItemAdjustmentManualDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_item_adj_key** | **string**| ID or number of the Invoice Item Adjustment, for example, e20b07fd416dcfcf0141c81164fd0a72. If the specified Invoice Item Adjustment is already associated with a revenue schedule, the call will fail. |
 **request** | [**\Swagger\Client\Model\POSTRevenueScheduleByTransactionType**](../Model/\Swagger\Client\Model\POSTRevenueScheduleByTransactionType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType**](../Model/POSTRevenueScheduleByTransactionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTRSforInvoiceItemDistributeByDateRange**
> \Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType pOSTRSforInvoiceItemDistributeByDateRange($invoice_item_id, $request)

Create a revenue schedule for an Invoice Item (distribute by date range)

This REST API reference describes how to create a revenue schedule for an Invoice Item and distribute the revenue by specifying the recognition start and end dates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$invoice_item_id = "invoice_item_id_example"; // string | ID of the Invoice Item, for example, e20b07fd416dcfcf0141c81164fd0a75. If the specified Invoice Item is already associated with a revenue schedule, the call will fail.
$request = new \Swagger\Client\Model\POSTRevenueScheduleByDateRangeType(); // \Swagger\Client\Model\POSTRevenueScheduleByDateRangeType | 

try {
    $result = $api_instance->pOSTRSforInvoiceItemDistributeByDateRange($invoice_item_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pOSTRSforInvoiceItemDistributeByDateRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_item_id** | **string**| ID of the Invoice Item, for example, e20b07fd416dcfcf0141c81164fd0a75. If the specified Invoice Item is already associated with a revenue schedule, the call will fail. |
 **request** | [**\Swagger\Client\Model\POSTRevenueScheduleByDateRangeType**](../Model/\Swagger\Client\Model\POSTRevenueScheduleByDateRangeType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType**](../Model/POSTRevenueScheduleByTransactionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTRSforInvoiceItemManualDistribution**
> \Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType pOSTRSforInvoiceItemManualDistribution($invoice_item_id, $request)

Create a revenue schedule for an Invoice Item (manual distribution)

This REST API reference describes how to create a revenue schedule for an Invoice Item and manually distribute the revenue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$invoice_item_id = "invoice_item_id_example"; // string | ID of the Invoice Item, for example, e20b07fd416dcfcf0141c81164fd0a75. If the specified Invoice Item is already associated with a revenue schedule, the call will fail.
$request = new \Swagger\Client\Model\POSTRevenueScheduleByTransactionType(); // \Swagger\Client\Model\POSTRevenueScheduleByTransactionType | 

try {
    $result = $api_instance->pOSTRSforInvoiceItemManualDistribution($invoice_item_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pOSTRSforInvoiceItemManualDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_item_id** | **string**| ID of the Invoice Item, for example, e20b07fd416dcfcf0141c81164fd0a75. If the specified Invoice Item is already associated with a revenue schedule, the call will fail. |
 **request** | [**\Swagger\Client\Model\POSTRevenueScheduleByTransactionType**](../Model/\Swagger\Client\Model\POSTRevenueScheduleByTransactionType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTRevenueScheduleByTransactionResponseType**](../Model/POSTRevenueScheduleByTransactionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTRevenueScheduleByChargeResponse**
> \Swagger\Client\Model\POSTRevenueScheduleByChargeResponseType pOSTRevenueScheduleByChargeResponse($charge_key, $request)

Create a revenue schedule on a subscription charge

This REST API reference describes how to create a revenue schedule by specifying the subscription charge. This method is for custom unlimited revenue recognition only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$charge_key = "charge_key_example"; // string | ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012.
$request = new \Swagger\Client\Model\POSTRevenueScheduleByChargeType(); // \Swagger\Client\Model\POSTRevenueScheduleByChargeType | 

try {
    $result = $api_instance->pOSTRevenueScheduleByChargeResponse($charge_key, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pOSTRevenueScheduleByChargeResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_key** | **string**| ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012. |
 **request** | [**\Swagger\Client\Model\POSTRevenueScheduleByChargeType**](../Model/\Swagger\Client\Model\POSTRevenueScheduleByChargeType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTRevenueScheduleByChargeResponseType**](../Model/POSTRevenueScheduleByChargeResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTRSBasicInfo**
> \Swagger\Client\Model\CommonResponseType pUTRSBasicInfo($rs_number, $request)

Update revenue schedule basic information

This REST API reference describes how to get basic information of a revenue schedule by specifying the revenue schedule number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".
$request = new \Swagger\Client\Model\PUTRSBasicInfoType(); // \Swagger\Client\Model\PUTRSBasicInfoType | 

try {
    $result = $api_instance->pUTRSBasicInfo($rs_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pUTRSBasicInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |
 **request** | [**\Swagger\Client\Model\PUTRSBasicInfoType**](../Model/\Swagger\Client\Model\PUTRSBasicInfoType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTRevenueAcrossAP**
> \Swagger\Client\Model\PUTRevenueScheduleResponseType pUTRevenueAcrossAP($rs_number, $request)

Distribute revenue across accounting periods

This REST API reference describes how to distribute revenue by specifying the revenue schedule number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".
$request = new \Swagger\Client\Model\PUTAllocateManuallyType(); // \Swagger\Client\Model\PUTAllocateManuallyType | 

try {
    $result = $api_instance->pUTRevenueAcrossAP($rs_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pUTRevenueAcrossAP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |
 **request** | [**\Swagger\Client\Model\PUTAllocateManuallyType**](../Model/\Swagger\Client\Model\PUTAllocateManuallyType.md)|  |

### Return type

[**\Swagger\Client\Model\PUTRevenueScheduleResponseType**](../Model/PUTRevenueScheduleResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTRevenueByRecognitionStartandEndDates**
> \Swagger\Client\Model\PUTRevenueScheduleResponseType pUTRevenueByRecognitionStartandEndDates($rs_number, $request)

Distribute revenue by recognition start and end dates

This REST API reference describes how to distribute revenue by specifying the recognition start and end dates. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. Specify the revenue schedule whose revenue you want to distribute.    The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".
$request = new \Swagger\Client\Model\PUTRSTermType(); // \Swagger\Client\Model\PUTRSTermType | 

try {
    $result = $api_instance->pUTRevenueByRecognitionStartandEndDates($rs_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pUTRevenueByRecognitionStartandEndDates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. Specify the revenue schedule whose revenue you want to distribute.    The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |
 **request** | [**\Swagger\Client\Model\PUTRSTermType**](../Model/\Swagger\Client\Model\PUTRSTermType.md)|  |

### Return type

[**\Swagger\Client\Model\PUTRevenueScheduleResponseType**](../Model/PUTRevenueScheduleResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTRevenueSpecificDate**
> \Swagger\Client\Model\PUTRevenueScheduleResponseType pUTRevenueSpecificDate($rs_number, $request)

Distribute revenue on a specific date

This REST API reference describes how to distribute revenue on a specific recognition date. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueSchedulesApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".
$request = new \Swagger\Client\Model\PUTSpecificDateAllocationType(); // \Swagger\Client\Model\PUTSpecificDateAllocationType | 

try {
    $result = $api_instance->pUTRevenueSpecificDate($rs_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueSchedulesApi->pUTRevenueSpecificDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |
 **request** | [**\Swagger\Client\Model\PUTSpecificDateAllocationType**](../Model/\Swagger\Client\Model\PUTSpecificDateAllocationType.md)|  |

### Return type

[**\Swagger\Client\Model\PUTRevenueScheduleResponseType**](../Model/PUTRevenueScheduleResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

