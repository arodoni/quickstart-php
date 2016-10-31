# Swagger\Client\SettingsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETRevenueStartDateSetting**](SettingsApi.md#gETRevenueStartDateSetting) | **GET** /settings/finance/revenue-automation-start-date | Get the revenue automation start date


# **gETRevenueStartDateSetting**
> \Swagger\Client\Model\GETRevenueStartDateSettingType gETRevenueStartDateSetting()

Get the revenue automation start date

This REST API reference describes how to get the revenue automation start date. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SettingsApi();

try {
    $result = $api_instance->gETRevenueStartDateSetting();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->gETRevenueStartDateSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GETRevenueStartDateSettingType**](../Model/GETRevenueStartDateSettingType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

