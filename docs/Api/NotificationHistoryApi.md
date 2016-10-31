# Swagger\Client\NotificationHistoryApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETCalloutHistoryVOs**](NotificationHistoryApi.md#gETCalloutHistoryVOs) | **GET** /notification-history/callout | Get callout notification histories
[**gETEmailHistoryVOs**](NotificationHistoryApi.md#gETEmailHistoryVOs) | **GET** /notification-history/email | Get email notification histories


# **gETCalloutHistoryVOs**
> \Swagger\Client\Model\GETCalloutHistoryVOsType gETCalloutHistoryVOs($end_time, $start_time, $object_id, $failed_only, $event_category, $include_response_content)

Get callout notification histories

This REST API reference describes how to get a notification history for callouts.  See [Notifications and Callouts](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Notifications) and [Create and Edit Notifications](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Notifications/C_Create_Notifications) for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationHistoryApi();
$end_time = new \DateTime(); // \DateTime | The final date and time of records to be returned. Defaults to now. Use format yyyy-MM-ddTHH:mm:ss.
$start_time = new \DateTime(); // \DateTime | The initial date and time of records to be returned. Defaults to (end time - 1 day). Use format yyyy-MM-ddTHH:mm:ss.
$object_id = "object_id_example"; // string | The ID of an object that triggered a callout notification.
$failed_only = true; // bool | If `true`, only return failed records. If `false`, return all records in the given date range. The default value is `true`.
$event_category = "event_category_example"; // string | Category of records to be returned by [event category](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Notification_History/Z_Event_Categories).
$include_response_content = true; // bool | 

try {
    $result = $api_instance->gETCalloutHistoryVOs($end_time, $start_time, $object_id, $failed_only, $event_category, $include_response_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationHistoryApi->gETCalloutHistoryVOs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_time** | **\DateTime**| The final date and time of records to be returned. Defaults to now. Use format yyyy-MM-ddTHH:mm:ss. | [optional]
 **start_time** | **\DateTime**| The initial date and time of records to be returned. Defaults to (end time - 1 day). Use format yyyy-MM-ddTHH:mm:ss. | [optional]
 **object_id** | **string**| The ID of an object that triggered a callout notification. | [optional]
 **failed_only** | **bool**| If &#x60;true&#x60;, only return failed records. If &#x60;false&#x60;, return all records in the given date range. The default value is &#x60;true&#x60;. | [optional]
 **event_category** | **string**| Category of records to be returned by [event category](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Notification_History/Z_Event_Categories). | [optional]
 **include_response_content** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\GETCalloutHistoryVOsType**](../Model/GETCalloutHistoryVOsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETEmailHistoryVOs**
> \Swagger\Client\Model\GETEmailHistoryVOsType gETEmailHistoryVOs($end_time, $start_time, $object_id, $failed_only, $event_category)

Get email notification histories

This REST API reference describes how to get a notification history for notification emails.  See [Notifications and Callouts](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Notifications) and [Create and Edit Notifications](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Notifications/C_Create_Notifications) for more information.  ## Notes Request parameters and their values may be appended with a \"?\" following the HTTPS GET request.  Additional request parameter are separated by \"&\".   For example:  `GET https://api.zuora.com/rest/v1/notification-history/email?startTime=2015-01-12T00:00:00&endTime=2015-01-15T00:00:00&failedOnly=false&eventCategory=1000&pageSize=1`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationHistoryApi();
$end_time = new \DateTime(); // \DateTime | The end date and time of records to be returned. Defaults to now. Use format yyyy-MM-ddTHH:mm:ss. The maximum date range (endTime - startTime) is three days.
$start_time = new \DateTime(); // \DateTime | The initial date and time of records to be returned. Defaults to (end time - 1 day). Use format yyyy-MM-ddTHH:mm:ss. The maximum date range (endTime - startTime) is three days.
$object_id = "object_id_example"; // string | The Id of an object that triggered an email notification.
$failed_only = true; // bool | If `true`, only returns failed records. When `false`, returns all records in the given date range. Defaults to `true` when not specified.
$event_category = "event_category_example"; // string | Category of records to be returned by [event category](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Notification_History/Z_Event_Categories).

try {
    $result = $api_instance->gETEmailHistoryVOs($end_time, $start_time, $object_id, $failed_only, $event_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationHistoryApi->gETEmailHistoryVOs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_time** | **\DateTime**| The end date and time of records to be returned. Defaults to now. Use format yyyy-MM-ddTHH:mm:ss. The maximum date range (endTime - startTime) is three days. | [optional]
 **start_time** | **\DateTime**| The initial date and time of records to be returned. Defaults to (end time - 1 day). Use format yyyy-MM-ddTHH:mm:ss. The maximum date range (endTime - startTime) is three days. | [optional]
 **object_id** | **string**| The Id of an object that triggered an email notification. | [optional]
 **failed_only** | **bool**| If &#x60;true&#x60;, only returns failed records. When &#x60;false&#x60;, returns all records in the given date range. Defaults to &#x60;true&#x60; when not specified. | [optional]
 **event_category** | **string**| Category of records to be returned by [event category](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Notification_History/Z_Event_Categories). | [optional]

### Return type

[**\Swagger\Client\Model\GETEmailHistoryVOsType**](../Model/GETEmailHistoryVOsType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

