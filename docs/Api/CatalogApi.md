# Swagger\Client\CatalogApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETCatalog**](CatalogApi.md#gETCatalog) | **GET** /catalog/products | Get product catalog


# **gETCatalog**
> \Swagger\Client\Model\GETCatalogType gETCatalog()

Get product catalog

This REST API reference describes how to retrieve the entire product catalog, including all products, features, and their corresponding rate plans, charges. Products are returned in reverse chronological order on the UpdatedDate field.   The REST API does not support the creation or updating of products, product rate plans and charges; these tasks can only be performed in the web-based UI or via the SOAP API.   With rate plans and rate plan charges, the REST API has a maximum array size. For details, see [Array Size](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics#Array_Size).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogApi();

try {
    $result = $api_instance->gETCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->gETCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GETCatalogType**](../Model/GETCatalogType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

