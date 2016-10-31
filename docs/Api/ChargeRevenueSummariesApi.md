# Swagger\Client\ChargeRevenueSummariesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETCRSByCRSNumber**](ChargeRevenueSummariesApi.md#gETCRSByCRSNumber) | **GET** /charge-revenue-summaries/{crs-number} | Get charge summary details by CRS number
[**gETCRSByChargeID**](ChargeRevenueSummariesApi.md#gETCRSByChargeID) | **GET** /charge-revenue-summaries/subscription-charges/{charge-key} | Get charge summary details by charge ID


# **gETCRSByCRSNumber**
> \Swagger\Client\Model\GETChargeRSDetailType gETCRSByCRSNumber($crs_number)

Get charge summary details by CRS number

This REST API reference describes how to retrieve the details of a charge revenue summary by specifying the charge revenue summary number. The response includes all revenue items associated with the charge revenue summary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChargeRevenueSummariesApi();
$crs_number = "crs_number_example"; // string | The charge revenue summary number.

try {
    $result = $api_instance->gETCRSByCRSNumber($crs_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeRevenueSummariesApi->gETCRSByCRSNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crs_number** | **string**| The charge revenue summary number. |

### Return type

[**\Swagger\Client\Model\GETChargeRSDetailType**](../Model/GETChargeRSDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETCRSByChargeID**
> \Swagger\Client\Model\GETChargeRSDetailType gETCRSByChargeID($charge_key)

Get charge summary details by charge ID

This REST API reference describes how to retrieve the details of a charge revenue summary by specifying the subscription charge ID. This response retrieves all revenue items associated with a charge revenue summary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChargeRevenueSummariesApi();
$charge_key = "charge_key_example"; // string | ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012.

try {
    $result = $api_instance->gETCRSByChargeID($charge_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeRevenueSummariesApi->gETCRSByChargeID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_key** | **string**| ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012. |

### Return type

[**\Swagger\Client\Model\GETChargeRSDetailType**](../Model/GETChargeRSDetailType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

