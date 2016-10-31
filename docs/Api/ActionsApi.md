# Swagger\Client\ActionsApi

All URIs are relative to *https://rest.zuora.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyActionPOSTamend**](ActionsApi.md#proxyActionPOSTamend) | **POST** /action/amend | Amend
[**proxyActionPOSTcreate**](ActionsApi.md#proxyActionPOSTcreate) | **POST** /action/create | Create
[**proxyActionPOSTdelete**](ActionsApi.md#proxyActionPOSTdelete) | **POST** /action/delete | Delete
[**proxyActionPOSTexecute**](ActionsApi.md#proxyActionPOSTexecute) | **POST** /action/execute | Execute
[**proxyActionPOSTgenerate**](ActionsApi.md#proxyActionPOSTgenerate) | **POST** /action/generate | Generate
[**proxyActionPOSTgetUserInfo**](ActionsApi.md#proxyActionPOSTgetUserInfo) | **POST** /action/getUserInfo | GetUserInfo
[**proxyActionPOSTlogin**](ActionsApi.md#proxyActionPOSTlogin) | **POST** /action/login | Login
[**proxyActionPOSTquery**](ActionsApi.md#proxyActionPOSTquery) | **POST** /action/query | Query
[**proxyActionPOSTqueryMore**](ActionsApi.md#proxyActionPOSTqueryMore) | **POST** /action/queryMore | QueryMore
[**proxyActionPOSTsubscribe**](ActionsApi.md#proxyActionPOSTsubscribe) | **POST** /action/subscribe | Subscribe
[**proxyActionPOSTupdate**](ActionsApi.md#proxyActionPOSTupdate) | **POST** /action/update | Update


# **proxyActionPOSTamend**
> \Swagger\Client\Model\ProxyActionamendResponse proxyActionPOSTamend($amend_request)

Amend



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$amend_request = new \Swagger\Client\Model\ProxyActionamendRequest(); // \Swagger\Client\Model\ProxyActionamendRequest | 

try {
    $result = $api_instance->proxyActionPOSTamend($amend_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTamend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amend_request** | [**\Swagger\Client\Model\ProxyActionamendRequest**](../Model/\Swagger\Client\Model\ProxyActionamendRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionamendResponse**](../Model/ProxyActionamendResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTcreate**
> \Swagger\Client\Model\ProxyActioncreateResponse proxyActionPOSTcreate($create_request)

Create



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$create_request = new \Swagger\Client\Model\ProxyActioncreateRequest(); // \Swagger\Client\Model\ProxyActioncreateRequest | 

try {
    $result = $api_instance->proxyActionPOSTcreate($create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTcreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_request** | [**\Swagger\Client\Model\ProxyActioncreateRequest**](../Model/\Swagger\Client\Model\ProxyActioncreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActioncreateResponse**](../Model/ProxyActioncreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTdelete**
> \Swagger\Client\Model\ProxyActiondeleteResponse proxyActionPOSTdelete($delete_request)

Delete

Deletes one or more objects of the same type. You can specify different types in different delete calls, but each delete call must only apply to one type of object.  You can use this call with a string type of [zObject](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/zObject) and a list of IDs of that type. It returns an array of [DeleteResult](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/F_SOAP_API_Complex_Types/DeleteResult), indicating the success or failure of deleting each object.  The following information applies to this call:  * You will need to first determine the IDs for the objects you wish to delete. * You cannot pass in any null IDs. * All objects in a specific delete call must be of the same type.   ### Objects per Call 50 objects are supported in a single call.  ### Rate Limiting 1,000 calls are supported per 10-minute time window per tenant.  If you approach or exceed this limit, you will receive a 429 error. Multi-threading causes you to approach this limit more quickly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$delete_request = new \Swagger\Client\Model\ProxyActiondeleteRequest(); // \Swagger\Client\Model\ProxyActiondeleteRequest | 

try {
    $result = $api_instance->proxyActionPOSTdelete($delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTdelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_request** | [**\Swagger\Client\Model\ProxyActiondeleteRequest**](../Model/\Swagger\Client\Model\ProxyActiondeleteRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActiondeleteResponse**](../Model/ProxyActiondeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTexecute**
> \Swagger\Client\Model\ProxyActionexecuteResponse proxyActionPOSTexecute($execute_request)

Execute

Use the execute call to execute a process to split an invoice into multiple invoices. The original invoice must be in draft status. The resulting invoices are called split invoices. ## Note This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com).   To split a draft invoice into multiple split invoices:  1. Use the create call to create a separate [InvoiceSplitItem object](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/InvoiceSplitItem) for each split invoice that you want to create from the original draft invoice. 2. Use the create call to create a single [InvoiceSplit object](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/InvoiceSplit) to collect all of the InvoiceSplitItem objects. 3. Use the execute call to split the draft invoice into multiple split invoices.  You need to create InvoiceSplitItem objects and an InvoiceSplit object before you can use the execute call.   * Supported objects: InvoiceSplit * Asynchronous process: yes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$execute_request = new \Swagger\Client\Model\ProxyActionexecuteRequest(); // \Swagger\Client\Model\ProxyActionexecuteRequest | 

try {
    $result = $api_instance->proxyActionPOSTexecute($execute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTexecute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **execute_request** | [**\Swagger\Client\Model\ProxyActionexecuteRequest**](../Model/\Swagger\Client\Model\ProxyActionexecuteRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionexecuteResponse**](../Model/ProxyActionexecuteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTgenerate**
> \Swagger\Client\Model\ProxyActiongenerateResponse proxyActionPOSTgenerate($generate_request)

Generate

Use the generate call to generate an on demand invoice for a specific customer. This process is similar to the process in the Zuora user interface in which you create an ad-hoc bill run for a specific customer account.  * Supported objects: Invoice * Asynchronous process: yes  The id of the generated invoice is returned in the response. If multiple invoices are generated, only the id of the first invoice generated is returned. This occurs when an account has multiple subscriptions with the [invoice subscription separately](https://knowledgecenter.zuora.com/BC_Subscription_Management/Subscriptions/B_Creating_Subscriptions/Invoicing_Subscriptions_Separately) option enabled.  ## Limits Rate limit: 8000 calls per 10-minute block, per-tenant  If you approach or exceed the limits, then you receive a 429 error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$generate_request = new \Swagger\Client\Model\ProxyActiongenerateRequest(); // \Swagger\Client\Model\ProxyActiongenerateRequest | 

try {
    $result = $api_instance->proxyActionPOSTgenerate($generate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTgenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_request** | [**\Swagger\Client\Model\ProxyActiongenerateRequest**](../Model/\Swagger\Client\Model\ProxyActiongenerateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActiongenerateResponse**](../Model/ProxyActiongenerateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTgetUserInfo**
> \Swagger\Client\Model\ProxyActiongetUserInfoResponse proxyActionPOSTgetUserInfo()

GetUserInfo



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();

try {
    $result = $api_instance->proxyActionPOSTgetUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTgetUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ProxyActiongetUserInfoResponse**](../Model/ProxyActiongetUserInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTlogin**
> \Swagger\Client\Model\ProxyActionloginResponse proxyActionPOSTlogin($login_request)

Login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$login_request = new \Swagger\Client\Model\ProxyActionloginRequest(); // \Swagger\Client\Model\ProxyActionloginRequest | 

try {
    $result = $api_instance->proxyActionPOSTlogin($login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTlogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**\Swagger\Client\Model\ProxyActionloginRequest**](../Model/\Swagger\Client\Model\ProxyActionloginRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionloginResponse**](../Model/ProxyActionloginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTquery**
> \Swagger\Client\Model\ProxyActionqueryResponse proxyActionPOSTquery($query_request)

Query

The query call sends a query expression by specifying the object to query, the fields to retrieve from that object, and any filters to determine whether a given object should be queried.   You can use [Zuora Object Query Language](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/M_Zuora_Object_Query_Language) construct those queries, passing them through the `queryString`.   Once the call is made, the API executes the query against the specified object and returns a query response object to your application. Your application can then iterate through rows in the query response to retrieve information.  ## Limitations   This call has the following limitations:  * All keywords must be in lower case. * The number of records returned is limited to 2000 records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$query_request = new \Swagger\Client\Model\ProxyActionqueryRequest(); // \Swagger\Client\Model\ProxyActionqueryRequest | 

try {
    $result = $api_instance->proxyActionPOSTquery($query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_request** | [**\Swagger\Client\Model\ProxyActionqueryRequest**](../Model/\Swagger\Client\Model\ProxyActionqueryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionqueryResponse**](../Model/ProxyActionqueryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTqueryMore**
> \Swagger\Client\Model\ProxyActionqueryMoreResponse proxyActionPOSTqueryMore($query_more_request)

QueryMore

Use queryMore to request additional results from a previous query call. If your initial query call returns more than 2000 results, you can use queryMore to query for the additional results.   Any `queryLocator` results greater than 2,000, will only be stored by Zuora for 5 days before it is deleted.    This call sends a request for additional results from an initial query call. If the initial query call returns more than 2000 results, you can use the `queryLocator` returned from query to request the next set of results.   **Note:** Zuora expires queryMore cursors after 15 minutes of activity.   To use queryMore, you first construct a query call. By default, the query call will return up to 2000 results. If there are more than 2000 results, query will return a boolean `done`, which will be marked as `false`, and a `queryLocator`, which is a marker you will pass to queryMore to get the next set of results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$query_more_request = new \Swagger\Client\Model\ProxyActionqueryMoreRequest(); // \Swagger\Client\Model\ProxyActionqueryMoreRequest | 

try {
    $result = $api_instance->proxyActionPOSTqueryMore($query_more_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTqueryMore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_more_request** | [**\Swagger\Client\Model\ProxyActionqueryMoreRequest**](../Model/\Swagger\Client\Model\ProxyActionqueryMoreRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionqueryMoreResponse**](../Model/ProxyActionqueryMoreResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTsubscribe**
> \Swagger\Client\Model\ProxyActionsubscribeResponse proxyActionPOSTsubscribe($subscribe_request)

Subscribe



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$subscribe_request = new \Swagger\Client\Model\ProxyActionsubscribeRequest(); // \Swagger\Client\Model\ProxyActionsubscribeRequest | 

try {
    $result = $api_instance->proxyActionPOSTsubscribe($subscribe_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTsubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscribe_request** | [**\Swagger\Client\Model\ProxyActionsubscribeRequest**](../Model/\Swagger\Client\Model\ProxyActionsubscribeRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionsubscribeResponse**](../Model/ProxyActionsubscribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxyActionPOSTupdate**
> \Swagger\Client\Model\ProxyActionupdateResponse proxyActionPOSTupdate($update_request)

Update



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActionsApi();
$update_request = new \Swagger\Client\Model\ProxyActionupdateRequest(); // \Swagger\Client\Model\ProxyActionupdateRequest | 

try {
    $result = $api_instance->proxyActionPOSTupdate($update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->proxyActionPOSTupdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_request** | [**\Swagger\Client\Model\ProxyActionupdateRequest**](../Model/\Swagger\Client\Model\ProxyActionupdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProxyActionupdateResponse**](../Model/ProxyActionupdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

