# Swagger\Client\RevenueEventsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETRevenueEventDetails**](RevenueEventsApi.md#gETRevenueEventDetails) | **GET** /revenue-events/revenue-schedules/{rs-number} | Get revenue events for a revenue schedule
[**gETRevenueEventDetails_0**](RevenueEventsApi.md#gETRevenueEventDetails_0) | **GET** /revenue-events/{event-number} | Get revenue event details


# **gETRevenueEventDetails**
> \Swagger\Client\Model\GETRevenueEventDetailsType gETRevenueEventDetails($rs_number)

Get revenue events for a revenue schedule

This REST API reference describes how to get all revenue events in a revenue schedule by specifying the revenue schedule number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueEventsApi();
$rs_number = "rs_number_example"; // string | Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".

try {
    $result = $api_instance->gETRevenueEventDetails($rs_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueEventsApi->gETRevenueEventDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rs_number** | **string**| Revenue schedule number. The revenue schedule number is always prefixed with \&quot;RS\&quot;, for example, \&quot;RS-00000001\&quot;. |

### Return type

[**\Swagger\Client\Model\GETRevenueEventDetailsType**](../Model/GETRevenueEventDetailsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETRevenueEventDetails_0**
> \Swagger\Client\Model\GETRevenueEventDetailType gETRevenueEventDetails_0($event_number)

Get revenue event details

This REST API reference describes how to get revenue event details by specifying the revenue event number. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueEventsApi();
$event_number = "event_number_example"; // string | The number associated with the revenue event.

try {
    $result = $api_instance->gETRevenueEventDetails_0($event_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueEventsApi->gETRevenueEventDetails_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_number** | **string**| The number associated with the revenue event. |

### Return type

[**\Swagger\Client\Model\GETRevenueEventDetailType**](../Model/GETRevenueEventDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

