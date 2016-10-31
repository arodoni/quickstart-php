# Swagger\Client\RevenueItemsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETRevenueItemsByChargeRevenueEventNumber**](RevenueItemsApi.md#gETRevenueItemsByChargeRevenueEventNumber) | **GET** /revenue-items/revenue-events/{event-number} | Get revenue items by revenue event number
[**gETRevenueItemsByChargeRevenueSummaryNumber**](RevenueItemsApi.md#gETRevenueItemsByChargeRevenueSummaryNumber) | **GET** /revenue-items/charge-revenue-summaries/{crs-number} | Get revenue items by charge revenue summary number
[**gETRevenueItemsByRevenueSchedule**](RevenueItemsApi.md#gETRevenueItemsByRevenueSchedule) | **GET** /revenue-items/revenue-schedules/{rs-number} | Get revenue items by revenue schedule
[**pUTCustomFieldsonRevenueItemsByRevenueEvent**](RevenueItemsApi.md#pUTCustomFieldsonRevenueItemsByRevenueEvent) | **PUT** /revenue-items/revenue-events/{event-number} | Update custom fields on revenue items by revenue event number
[**pUTCustomFieldsonRevenueItemsByRevenueSchedule**](RevenueItemsApi.md#pUTCustomFieldsonRevenueItemsByRevenueSchedule) | **PUT** /revenue-items/revenue-schedules/{rs-number} | Update custom fields on revenue items by revenue schedule number


# **gETRevenueItemsByChargeRevenueEventNumber**
> \Swagger\Client\Model\GETRevenueItemsType gETRevenueItemsByChargeRevenueEventNumber($event_number)

Get revenue items by revenue event number

This REST API reference describes how to get the details of each revenue item in a revenue event by specifying the revenue event number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueItemsApi();
$event_number = "event_number_example"; // string | The number associated with the revenue event.

try {
    $result = $api_instance->gETRevenueItemsByChargeRevenueEventNumber($event_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueItemsApi->gETRevenueItemsByChargeRevenueEventNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_number** | **string**| The number associated with the revenue event. |

### Return type

[**\Swagger\Client\Model\GETRevenueItemsType**](../Model/GETRevenueItemsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRevenueItemsByChargeRevenueSummaryNumber**
> \Swagger\Client\Model\GETRevenueItemsType gETRevenueItemsByChargeRevenueSummaryNumber($crs_number)

Get revenue items by charge revenue summary number

This REST API reference describes how to get the details for each revenue item in a charge revenue summary by specifying the charge revenue summary number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueItemsApi();
$crs_number = "crs_number_example"; // string | The charge revenue summary number.

try {
    $result = $api_instance->gETRevenueItemsByChargeRevenueSummaryNumber($crs_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueItemsApi->gETRevenueItemsByChargeRevenueSummaryNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crs_number** | **string**| The charge revenue summary number. |

### Return type

[**\Swagger\Client\Model\GETRevenueItemsType**](../Model/GETRevenueItemsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRevenueItemsByRevenueSchedule**
> \Swagger\Client\Model\GETRsRevenueItemsType gETRevenueItemsByRevenueSchedule($rs_number)

Get revenue items by revenue schedule

This REST API reference describes how to get the details for each revenue items in a revenue schedule by specifying the revenue schedule number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueItemsApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".

try {
    $result = $api_instance->gETRevenueItemsByRevenueSchedule($rs_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueItemsApi->gETRevenueItemsByRevenueSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |

### Return type

[**\Swagger\Client\Model\GETRsRevenueItemsType**](../Model/GETRsRevenueItemsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTCustomFieldsonRevenueItemsByRevenueEvent**
> \Swagger\Client\Model\CommonResponseType pUTCustomFieldsonRevenueItemsByRevenueEvent($event_number, $request)

Update custom fields on revenue items by revenue event number

This REST API reference describes how to update custom fields on revenue items by specifying the revenue event number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueItemsApi();
$event_number = "event_number_example"; // string | The number associated with the revenue event.
$request = new \Swagger\Client\Model\PUTEventRIDetailType(); // \Swagger\Client\Model\PUTEventRIDetailType | 

try {
    $result = $api_instance->pUTCustomFieldsonRevenueItemsByRevenueEvent($event_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueItemsApi->pUTCustomFieldsonRevenueItemsByRevenueEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_number** | **string**| The number associated with the revenue event. |
 **request** | [**\Swagger\Client\Model\PUTEventRIDetailType**](../Model/\Swagger\Client\Model\PUTEventRIDetailType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTCustomFieldsonRevenueItemsByRevenueSchedule**
> \Swagger\Client\Model\CommonResponseType pUTCustomFieldsonRevenueItemsByRevenueSchedule($rs_number, $request)

Update custom fields on revenue items by revenue schedule number

This REST API reference describes how to update custom fields on revenue Items by specifying the revenue schedule number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueItemsApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".
$request = new \Swagger\Client\Model\PUTScheduleRIDetailType(); // \Swagger\Client\Model\PUTScheduleRIDetailType | 

try {
    $result = $api_instance->pUTCustomFieldsonRevenueItemsByRevenueSchedule($rs_number, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueItemsApi->pUTCustomFieldsonRevenueItemsByRevenueSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |
 **request** | [**\Swagger\Client\Model\PUTScheduleRIDetailType**](../Model/\Swagger\Client\Model\PUTScheduleRIDetailType.md)|  |

### Return type

[**\Swagger\Client\Model\CommonResponseType**](../Model/CommonResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

