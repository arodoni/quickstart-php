# Swagger\Client\SubscriptionsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gETOneSubscription**](SubscriptionsApi.md#gETOneSubscription) | **GET** /subscriptions/{subscription-key} | Get subscriptions by key
[**gETSubscription**](SubscriptionsApi.md#gETSubscription) | **GET** /subscriptions/accounts/{account-key} | Get subscriptions by account
[**pOSTSubscription**](SubscriptionsApi.md#pOSTSubscription) | **POST** /subscriptions | Create subscription
[**pOSTSubscriptionCancellation**](SubscriptionsApi.md#pOSTSubscriptionCancellation) | **PUT** /subscriptions/{subscription-key}/cancel | Cancel subscription
[**pOSTSubscriptionPreview**](SubscriptionsApi.md#pOSTSubscriptionPreview) | **POST** /subscriptions/preview | Preview subscription
[**pUTRenewSubscription**](SubscriptionsApi.md#pUTRenewSubscription) | **PUT** /subscriptions/{subscription-key}/renew | Renew subscription
[**pUTSubscription**](SubscriptionsApi.md#pUTSubscription) | **PUT** /subscriptions/{subscription-key} | Update subscription
[**pUTSubscriptionResume**](SubscriptionsApi.md#pUTSubscriptionResume) | **PUT** /subscriptions/{subscription-key}/resume | Resume subscription
[**pUTSubscriptionSuspend**](SubscriptionsApi.md#pUTSubscriptionSuspend) | **PUT** /subscriptions/{subscription-key}/suspend | Suspend subscription
[**proxyDELETESubscription**](SubscriptionsApi.md#proxyDELETESubscription) | **DELETE** /object/subscription/{id} | CRUD: Delete Subscription
[**proxyGETSubscription**](SubscriptionsApi.md#proxyGETSubscription) | **GET** /object/subscription/{id} | CRUD: Retrieve Subscription
[**proxyPOSTSubscription**](SubscriptionsApi.md#proxyPOSTSubscription) | **POST** /object/subscription | CRUD: Create Subscription
[**proxyPUTSubscription**](SubscriptionsApi.md#proxyPUTSubscription) | **PUT** /object/subscription/{id} | CRUD: Update Subscription


# **gETOneSubscription**
> \Swagger\Client\Model\GETSubscriptionTypeWithSuccess gETOneSubscription($subscription_key, $charge_detail)

Get subscriptions by key

This REST API reference describes how to retrieve detailed information about a specified subscription in the latest version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$subscription_key = "subscription_key_example"; // string | Possible values are:   * a subscription number   * a subscription ID
$charge_detail = "charge_detail_example"; // string | The segmented rate plan charges. When an amendment results in a change to a charge, Zuora creates a segmented rate plan charge. Use this field to track segment charges.  Possible values are:   * __last-segment__: (Default) The last rate plan charge on the subscription. The last rate plan charge is the last one in the order of time on the subscription rather than the most recent changed charge on the subscription.  * __current-segment__: The segmented charge that is active on today’s date (effectiveStartDate <= today’s date < effectiveEndDate).    * __all-segments__: All the segmented charges.   * __specific-segment&as-of-date=date__: The segmented charge that is active on a date you specified (effectiveStartDate <= specific date < effectiveEndDate). The format of the date is yyyy-mm-dd.

try {
    $result = $api_instance->gETOneSubscription($subscription_key, $charge_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->gETOneSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_key** | **string**| Possible values are:   * a subscription number   * a subscription ID |
 **charge_detail** | **string**| The segmented rate plan charges. When an amendment results in a change to a charge, Zuora creates a segmented rate plan charge. Use this field to track segment charges.  Possible values are:   * __last-segment__: (Default) The last rate plan charge on the subscription. The last rate plan charge is the last one in the order of time on the subscription rather than the most recent changed charge on the subscription.  * __current-segment__: The segmented charge that is active on today’s date (effectiveStartDate &lt;&#x3D; today’s date &lt; effectiveEndDate).    * __all-segments__: All the segmented charges.   * __specific-segment&amp;as-of-date&#x3D;date__: The segmented charge that is active on a date you specified (effectiveStartDate &lt;&#x3D; specific date &lt; effectiveEndDate). The format of the date is yyyy-mm-dd. | [optional]

### Return type

[**\Swagger\Client\Model\GETSubscriptionTypeWithSuccess**](../Model/GETSubscriptionTypeWithSuccess.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gETSubscription**
> \Swagger\Client\Model\GETSubscriptionWrapper gETSubscription($account_key, $charge_detail)

Get subscriptions by account

Retrieves all subscriptions associated with the specified account. Zuora only returns the latest version of the subscriptions.  Subscription data is returned in reverse chronological order based on `updatedDate`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$account_key = "account_key_example"; // string | Possible values are: * an account number * an account ID
$charge_detail = "charge_detail_example"; // string | The segmented rate plan charges.  When an amendment results in a change to a charge, Zuora creates a segmented rate plan charge. Use this field to track segment charges.  Possible values are:  * `last-segment`: (Default) The last rate plan charge on the subscription. The last rate plan charge is the last one in the order of time on the subscription rather than the most recent updated charge on the subscription. * `current-segment`: The segmented charge that is active on today’s date (**effectiveStartDate** <= today’s date < **effectiveEndDate**). * `all-segments`: All the segmented charges. * `specific-segment&as-of-date=date`: The segmented charge that is active on a date you specified (**effectiveStartDate** <= specific date < **effectiveEndDate**). The format of the date is yyyy-mm-dd.

try {
    $result = $api_instance->gETSubscription($account_key, $charge_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->gETSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_key** | **string**| Possible values are: * an account number * an account ID |
 **charge_detail** | **string**| The segmented rate plan charges.  When an amendment results in a change to a charge, Zuora creates a segmented rate plan charge. Use this field to track segment charges.  Possible values are:  * &#x60;last-segment&#x60;: (Default) The last rate plan charge on the subscription. The last rate plan charge is the last one in the order of time on the subscription rather than the most recent updated charge on the subscription. * &#x60;current-segment&#x60;: The segmented charge that is active on today’s date (**effectiveStartDate** &lt;&#x3D; today’s date &lt; **effectiveEndDate**). * &#x60;all-segments&#x60;: All the segmented charges. * &#x60;specific-segment&amp;as-of-date&#x3D;date&#x60;: The segmented charge that is active on a date you specified (**effectiveStartDate** &lt;&#x3D; specific date &lt; **effectiveEndDate**). The format of the date is yyyy-mm-dd. | [optional]

### Return type

[**\Swagger\Client\Model\GETSubscriptionWrapper**](../Model/GETSubscriptionWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTSubscription**
> \Swagger\Client\Model\POSTSubscriptionResponseType pOSTSubscription($request, $zuora_version)

Create subscription

This REST API reference describes how to create a new subscription for an existing customer account.  ## Notes If invoiceCollect is `true`, the call will not return success = `true` unless the subscription, invoice, and payment are all successful.  Default values for **customerAcceptanceDate** and **serviceActivationDate** are set as follows.  |        | serviceActivationDate(SA) specified          | serviceActivationDate (SA) NOT specified  | | ------------- |:-------------:| -----:| | customerAcceptanceDate (CA) specified| SA uses value in the request call; CA uses value in the request call| CA uses value in the request call;SA uses CE as default | | customerAcceptanceDate (CA) NOT specified      | SA uses value in the request call; CA uses SA as default |   SA and CA use CE as default |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$request = new \Swagger\Client\Model\POSTSubscriptionType(); // \Swagger\Client\Model\POSTSubscriptionType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pOSTSubscription($request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pOSTSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTSubscriptionType**](../Model/\Swagger\Client\Model\POSTSubscriptionType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\POSTSubscriptionResponseType**](../Model/POSTSubscriptionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTSubscriptionCancellation**
> \Swagger\Client\Model\POSTSubscriptionCancellationResponseType pOSTSubscriptionCancellation($subscription_key, $request, $zuora_version)

Cancel subscription

This REST API reference describes how to cancel an active subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$subscription_key = "subscription_key_example"; // string | Subscription number or ID. Subscription status must be `Active`.
$request = new \Swagger\Client\Model\POSTSubscriptionCancellationType(); // \Swagger\Client\Model\POSTSubscriptionCancellationType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pOSTSubscriptionCancellation($subscription_key, $request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pOSTSubscriptionCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_key** | **string**| Subscription number or ID. Subscription status must be &#x60;Active&#x60;. |
 **request** | [**\Swagger\Client\Model\POSTSubscriptionCancellationType**](../Model/\Swagger\Client\Model\POSTSubscriptionCancellationType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\POSTSubscriptionCancellationResponseType**](../Model/POSTSubscriptionCancellationResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOSTSubscriptionPreview**
> \Swagger\Client\Model\POSTSubscriptionPreviewResponseType pOSTSubscriptionPreview($request)

Preview subscription

The REST API reference describes how to create a new subscription in preview mode. This call does not require a valid customer account. It can be used to show potential new customers a preview of a subscription with complete details and charges before creating an account, or to let existing customers preview a subscription with all charges before committing.  ## Notes Default values for **customerAcceptanceDate** and **serviceActivationDate** are set as follows.  |        | serviceActivationDate (SA) specified          | serviceActivationDate (SA) NOT specified  | | ------------- |:-------------:| -----:| | customerAcceptanceDate (CA) specified      | SA uses value in the request call; CA uses value in the request call| CA uses value in the request call;SA uses CE as default | | customerAcceptanceDate (CA) NOT specified      | SA uses value in the request call; CA uses SA as default |   SA and CA use CE as default |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$request = new \Swagger\Client\Model\POSTSubscriptionPreviewType(); // \Swagger\Client\Model\POSTSubscriptionPreviewType | 

try {
    $result = $api_instance->pOSTSubscriptionPreview($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pOSTSubscriptionPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\POSTSubscriptionPreviewType**](../Model/\Swagger\Client\Model\POSTSubscriptionPreviewType.md)|  |

### Return type

[**\Swagger\Client\Model\POSTSubscriptionPreviewResponseType**](../Model/POSTSubscriptionPreviewResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTRenewSubscription**
> \Swagger\Client\Model\PUTRenewSubscriptionResponseType pUTRenewSubscription($subscription_key, $request, $zuora_version)

Renew subscription

Renews a termed subscription using existing renewal terms.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$subscription_key = "subscription_key_example"; // string | Subscription number or ID
$request = new \Swagger\Client\Model\PUTRenewSubscriptionType(); // \Swagger\Client\Model\PUTRenewSubscriptionType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pUTRenewSubscription($subscription_key, $request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pUTRenewSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_key** | **string**| Subscription number or ID |
 **request** | [**\Swagger\Client\Model\PUTRenewSubscriptionType**](../Model/\Swagger\Client\Model\PUTRenewSubscriptionType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\PUTRenewSubscriptionResponseType**](../Model/PUTRenewSubscriptionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTSubscription**
> \Swagger\Client\Model\PUTSubscriptionResponseType pUTSubscription($subscription_key, $request, $zuora_version)

Update subscription

Use this call to make the following kinds of changes to a subscription:   * Add a note   * Change the renewal term or auto-renewal flag   * Change the term length or change between evergreen and termed   * Add a new product rate plan   * Remove an existing subscription rate plan   * Change the quantity or price of an existing subscription rate plan  ## Notes * The Update Subscription call creates a new subscription, which has the old subscription number but a new subscription ID.  The old subscription is canceled but remains in the system. * In one request, this call can make:   * Up to 9 combined add, update, and remove changes   * No more than 1 change to terms & conditions * Updates are performed in the following sequence:   1. First change the notes on the existing subscription, if requested.   2. Then change the terms and conditions, if requested.   3. Then perform the remaining amendments based upon the effective dates specified. If multiple amendments have the same contract-effective dates, then execute adds before updates, and updates before removes. * The update operation is atomic. If any of the updates fails, the entire operation is rolled back.  ## Override a Tiered Price There are two ways you override a tiered price:  * Override a specific tier number For example: `tiers[{tier:1,price:8},{tier:2,price:6}]`  * Override the entire tier structure For example:  `tiers[{tier:1,price:8,startingUnit:1,endingUnit:100,priceFormat:\"FlatFee\"}, {tier:2,price:6,startingUnit:101,priceFormat:\"FlatFee\"}]`  If you just override a specific tier, do not include the `startingUnit` field in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$subscription_key = "subscription_key_example"; // string | Subscription number or ID.
$request = new \Swagger\Client\Model\PUTSubscriptionType(); // \Swagger\Client\Model\PUTSubscriptionType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pUTSubscription($subscription_key, $request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pUTSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_key** | **string**| Subscription number or ID. |
 **request** | [**\Swagger\Client\Model\PUTSubscriptionType**](../Model/\Swagger\Client\Model\PUTSubscriptionType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\PUTSubscriptionResponseType**](../Model/PUTSubscriptionResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTSubscriptionResume**
> \Swagger\Client\Model\PUTSubscriptionResumeResponseType pUTSubscriptionResume($subscription_key, $request, $zuora_version)

Resume subscription

This REST API reference describes how to resume a suspended subscription.   This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://suport.zuora.com).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$subscription_key = "subscription_key_example"; // string | Subscription number or ID. Subscription status must be Active.
$request = new \Swagger\Client\Model\PUTSubscriptionResumeType(); // \Swagger\Client\Model\PUTSubscriptionResumeType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pUTSubscriptionResume($subscription_key, $request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pUTSubscriptionResume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_key** | **string**| Subscription number or ID. Subscription status must be Active. |
 **request** | [**\Swagger\Client\Model\PUTSubscriptionResumeType**](../Model/\Swagger\Client\Model\PUTSubscriptionResumeType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\PUTSubscriptionResumeResponseType**](../Model/PUTSubscriptionResumeResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pUTSubscriptionSuspend**
> \Swagger\Client\Model\PUTSubscriptionSuspendResponseType pUTSubscriptionSuspend($subscription_key, $request, $zuora_version)

Suspend subscription

This REST API reference describes how to suspend an active subscription.   This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://suport.zuora.com).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$subscription_key = "subscription_key_example"; // string | Subscription number or ID. Subscription status must be Active.
$request = new \Swagger\Client\Model\PUTSubscriptionSuspendType(); // \Swagger\Client\Model\PUTSubscriptionSuspendType | 
$zuora_version = "zuora_version_example"; // string | The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.

try {
    $result = $api_instance->pUTSubscriptionSuspend($subscription_key, $request, $zuora_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->pUTSubscriptionSuspend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_key** | **string**| Subscription number or ID. Subscription status must be Active. |
 **request** | [**\Swagger\Client\Model\PUTSubscriptionSuspendType**](../Model/\Swagger\Client\Model\PUTSubscriptionSuspendType.md)|  |
 **zuora_version** | **string**| The minor version of the Zuora REST API. You only need to set this parameter if you use the __collect__ or __invoice__ field. See [REST API Basics](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\PUTSubscriptionSuspendResponseType**](../Model/PUTSubscriptionSuspendResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyDELETESubscription**
> \Swagger\Client\Model\ProxyDeleteResponse proxyDELETESubscription($id)

CRUD: Delete Subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$id = "id_example"; // string | Object id

try {
    $result = $api_instance->proxyDELETESubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->proxyDELETESubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |

### Return type

[**\Swagger\Client\Model\ProxyDeleteResponse**](../Model/ProxyDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyGETSubscription**
> \Swagger\Client\Model\ProxyGetSubscription proxyGETSubscription($id, $fields)

CRUD: Retrieve Subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$id = "id_example"; // string | Object id
$fields = "fields_example"; // string | Object fields to return

try {
    $result = $api_instance->proxyGETSubscription($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->proxyGETSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **fields** | **string**| Object fields to return | [optional]

### Return type

[**\Swagger\Client\Model\ProxyGetSubscription**](../Model/ProxyGetSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPOSTSubscription**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPOSTSubscription($create_request)

CRUD: Create Subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$create_request = new \Swagger\Client\Model\ProxyCreateSubscription(); // \Swagger\Client\Model\ProxyCreateSubscription | 

try {
    $result = $api_instance->proxyPOSTSubscription($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->proxyPOSTSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyCreateSubscription**](../Model/\Swagger\Client\Model\ProxyCreateSubscription.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyPUTSubscription**
> \Swagger\Client\Model\ProxyCreateOrModifyResponse proxyPUTSubscription($id, $modify_request)

CRUD: Update Subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscriptionsApi();
$id = "id_example"; // string | Object id
$modify_request = new \Swagger\Client\Model\ProxyModifySubscription(); // \Swagger\Client\Model\ProxyModifySubscription | 

try {
    $result = $api_instance->proxyPUTSubscription($id, $modify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->proxyPUTSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object id |
 **modify_request** | [**\Swagger\Client\Model\ProxyModifySubscription**](../Model/\Swagger\Client\Model\ProxyModifySubscription.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyCreateOrModifyResponse**](../Model/ProxyCreateOrModifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

