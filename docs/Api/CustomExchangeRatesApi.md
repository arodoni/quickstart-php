# Swagger\Client\CustomExchangeRatesApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETCustomExchangeRates**](CustomExchangeRatesApi.md#gETCustomExchangeRates) | **GET** /custom-exchange-rates/{currency} | Get custom foreign currency exchange rates


# **gETCustomExchangeRates**
> \Swagger\Client\Model\GETCustomExchangeRatesType gETCustomExchangeRates($currency, $start_date, $end_date)

Get custom foreign currency exchange rates

This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).   This reference describes how to query custom foreign exchange rates from Zuora. You can use this API method to query exchange rates only if you use a custom exchange rate provider and upload rates with the [Import Foreign Exchange Rates](https://knowledgecenter.zuora.com/CC_Finance/Mass_Updater/Import_Foreign_Exchange_Rates) mass action. If you want to get exchange rates for the default exchange rate provider, Oanda, see [Foreign Currency Conversion for Data Source Exports](https://knowledgecenter.zuora.com/CC_Finance/Foreign_Currency_Conversion/Foreign_Currency_Conversion_for_Data_Source_Exports).  For more information about currency conversion in Zuora, see [Foreign Currency Conversion](https://knowledgecenter.zuora.com/CC_Finance/Foreign_Currency_Conversion).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomExchangeRatesApi();
$currency = "currency_example"; // string | The target currency. The exchange rates in the response are calculated in relation to the target currency.  The value must be a three-letter currency code, for example, USD. See [ISO Currency Codes](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/D_Currencies_and_Their_3-Letter_Codes) for a full list of currency codes.
$start_date = "start_date_example"; // string | Start date of the date range for which you want to get exchange rates.  The date must be in yyyy-mm-dd format, for example, 2016-01-15. The start date cannot be later than the end date.
$end_date = "end_date_example"; // string | End date of the date range for which you want to get exchange rates.  The date must be in yyyy-mm-dd format, for example, 2016-01-16. The end date can be a maximum of 90 days after the start date.

try {
    $result = $api_instance->gETCustomExchangeRates($currency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomExchangeRatesApi->gETCustomExchangeRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| The target currency. The exchange rates in the response are calculated in relation to the target currency.  The value must be a three-letter currency code, for example, USD. See [ISO Currency Codes](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/D_Currencies_and_Their_3-Letter_Codes) for a full list of currency codes. |
 **start_date** | **string**| Start date of the date range for which you want to get exchange rates.  The date must be in yyyy-mm-dd format, for example, 2016-01-15. The start date cannot be later than the end date. |
 **end_date** | **string**| End date of the date range for which you want to get exchange rates.  The date must be in yyyy-mm-dd format, for example, 2016-01-16. The end date can be a maximum of 90 days after the start date. |

### Return type

[**\Swagger\Client\Model\GETCustomExchangeRatesType**](../Model/GETCustomExchangeRatesType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

