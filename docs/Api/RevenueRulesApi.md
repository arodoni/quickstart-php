# Swagger\Client\RevenueRulesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETRevenueRecognitionRuleAssociation**](RevenueRulesApi.md#gETRevenueRecognitionRuleAssociation) | **GET** /revenue-recognition-rules/subscription-charges/{charge-key} | Get the rule associated with a charge


# **gETRevenueRecognitionRuleAssociation**
> \Swagger\Client\Model\GETRevenueRecognitionRuleAssociationType gETRevenueRecognitionRuleAssociation($charge_key)

Get the rule associated with a charge

This REST API reference describes how to get the revenue recognition rule associated with a subscription charge by specifying the charge ID. Request and response field descriptions and sample code are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RevenueRulesApi();
$charge_key = "charge_key_example"; // string | ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012.

try {
    $result = $api_instance->gETRevenueRecognitionRuleAssociation($charge_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueRulesApi->gETRevenueRecognitionRuleAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_key** | **string**| ID of the subscription rate plan charge; for example, 402892793e173340013e173b81000012. |

### Return type

[**\Swagger\Client\Model\GETRevenueRecognitionRuleAssociationType**](../Model/GETRevenueRecognitionRuleAssociationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

