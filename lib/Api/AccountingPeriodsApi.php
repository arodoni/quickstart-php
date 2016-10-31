<?php
/**
 * AccountingPeriodsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zuora REST API Reference
 *
 * # Introduction  Welcome to the reference documentation for the Zuora REST API!   [REST](http://en.wikipedia.org/wiki/REST_API \"http://en.wikipedia.org/wiki/REST_API\") is a web-service protocol that lends itself to rapid development by using everyday HTTP and JSON technology. REST offers the following:  *   Easy to use and learn for developers *   Works with virtually any language and platform *   Use case-oriented calls *   Well-suited for solutions that fall outside the traditional desktop application model  The Zuora REST API provides a set of use case-oriented calls that:  *   Enable Web Storefront integration between your websites. *   Support self-service subscriber sign-ups and account management. *   Process revenue schedules through custom revenue rule models.  ## Set up an API User Account  Few setup steps are required to use the Zuora REST API. No special software libraries or development tools are needed. Take a moment to set up an API user account. See [Creating an API](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/AB_Getting_started_with_the__SOAP_API/F_Create_an_API_User) user.  Note that a user role does not have write access to Zuora REST services unless it has the API Write Access permission as described in those instructions.  Use the API user account only for API calls, and avoid using it to log into the Zuora UI. Logging into the UI enables a security feature that periodically expires the account's password, which may eventually cause authentication failures with the API.  ## Authentication  There are three ways to authenticate:  * Use an authorization cookie. The cookie authorizes the user to make calls to the REST API for the duration specified in  **Administration > Security Policies > Session timeout**. The cookie expiration time is reset with this duration after every call to the REST API. To obtain a cookie, call the REST  `connections` resource with the following API user information:     *   ID     *   password     *   entity Id or entity name (Only for [Zuora Multi-entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity \"Multi-entity\"). See \"Entity Id and Entity Name\" below for more information.)  *   Include the following parameters in the request header, which re-authenticates the user with each request:     *   `apiAccessKeyId`     *   `apiSecretAccessKey`     *   `entityId` or `entityName` (Only for [Zuora Multi-entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity \"Multi-entity\"). See \"Entity Id and Entity Name\" below for more information.) *   For CORS-enabled APIs only: Include a 'single-use' token in the request header, which re-authenticates the user with each request. See below for more details.   ## Errors  Responses and error codes are detailed in [Responses and errors](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/3_Responses_and_errors \"Responses and errors\").   ## Entity Id and Entity Name  The `entityId` and `entityName`  parameters are only used for  [Zuora Multi-entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity).  The  `entityId` parameter specifies the Id of the entity that you want to access. The `entityName` parameter specifies the [name of the entity](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity/B_Introduction_to_Entity_and_Entity_Hierarchy#Name_and_Display_Name \"Introduction to Entity and Entity Hierarchy\") that you want to access. Note that you must have permission to access the entity. You can get the entity Id and entity name through the REST GET Entities call.  You can specify either the  `entityId` or `entityName` parameter in the authentication to access and view an entity.  *   If both `entityId` and `entityName` are specified in the authentication, an error occurs.  *   If neither  `entityId` nor  `entityName` is specified in the authentication, you will log in to the entity in which your user account is created.   See [API User Authentication](https://knowledgecenter.zuora.com/BB_Introducing_Z_Business/Multi-entity/A_Overview_of_Multi-entity#API_User_Authentication \"Zuora Multi-entity\") for more information.  ## Token Authentication for CORS-Enabled APIs  The CORS mechanism enables REST API calls to Zuora to be made directly from your customer's browser, with all credit card and security information transmitted directly to Zuora. This minimizes your PCI compliance burden, allows you to implement advanced validation on your payment forms, and makes your payment forms look just like any other part of your website.  For security reasons, instead of using cookies, an API request via CORS uses **tokens** for authentication.  The token method of authentication is only designed for use with requests that must originate from your customer's browser; **it should not be considered a replacement to the existing cookie authentication** mechanism.  See [Zuora CORS REST ](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/G_CORS_REST \"Zuora CORS REST\")for details on how CORS works and how you can begin to implement customer calls to the Zuora REST APIs. See  [HMAC Signatures](/BC_Developers/REST_API/B_REST_API_reference/HMAC_Signatures \"HMAC Signatures\") for details on the HMAC method that returns the authentication token.   ## Zuora REST API Versions  The Zuora REST API is in version control. Versioning ensures that Zuora REST API changes are backward compatible. Zuora uses a major and minor version nomenclature to manage changes. By specifying a version in a REST request, you can get expected responses regardless of future changes to the API.   ### Major Version  The major version number of the REST API appears in the REST URL. Currently, Zuora only supports the **v1** major version. For example,  `POST https://rest.zuora.com/v1/subscriptions` .   ### Minor Version  Zuora uses minor versions for the REST API to control small changes. For example, a field in a REST method is deprecated and a new field is used to replace it.   Some fields in the REST methods are supported as of minor versions. If a field is not noted with a minor version, this field is available for all minor versions. If a field is noted with a minor version, this field is in version control. You must specify the supported minor version in the request header to process without an error.   If a field is in version control, it is either with a minimum minor version or a maximum minor version, or both of them. You can only use this field with the minor version between the minimum and the maximum minor versions. For example, the  `invoiceCollect` field in the POST Subscription method is in version control and its maximum minor version is 189.0. You can only use this field with the minor version 189.0 or earlier.  The supported minor versions are not serial, see [Zuora REST API Minor Version History](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics/Zuora_REST_API_Minor_Version_History \"Zuora REST API Minor Version History\") for the fields and their supported minor versions. In our REST API documentation, if a field or feature requires a minor version number, we note that in the field description.  You only need to specify the version number when you use the fields require a minor version. To specify the minor version, set the `zuora-version` parameter to the minor version number in the request header for the request call. For example, the `collect` field is in 196.0 minor version. If you want to use this field for the POST Subscription method, set the  `zuora-version` parameter to `196.0` in the request header. The `zuora-version` parameter is case sensitive.   For all the REST API fields, by default, if the minor version is not specified in the request header, Zuora will use the minimum minor version of the REST API to avoid breaking your integration.    ## URLs and Endpoints  The following REST services are provided in Zuora.  | Service                 | Base URL for REST Endpoints                                                                                                                                         | |-------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------| | Production REST service | https://rest.zuora.com/v1                                                                                                                                           | | Sandbox REST service    | https://rest.apisandbox.zuora.com/v1                                                                                                                                | | Services REST service   | https://services123.zuora.com/apps/v1/  (where \"123\" is replaced by the number of your actual services environment)  The production service provides access to your live user data. The sandbox environment is a good place to test your code without affecting real-world data.  To use it, you must be provisioned with a sandbox tenant - your Zuora representative can help with this if needed.   ## Requests and Responses   ### HTTP Request Body  Most of the parameters and data accompanying your requests will be contained in the body of the HTTP request.  The Zuora REST API accepts JSON in the HTTP request body.  No other data format (e.g., XML) is supported.   #### Testing a Request  Use a third party client, such as Postman or Advanced REST Client, to test the Zuora REST API.  You can test the Zuora REST API from the Zuora sandbox or  production service. If connecting to the production service, bear in mind that you are working with your live production data, not sample data or test data.  #### Testing with Credit Cards  Sooner or later it will probably be necessary to test some transactions that involve credit cards. For suggestions on how to handle this, see [Going Live With Your Payment Gateway](https://knowledgecenter.zuora.com/CB_Billing/M_Payment_Gateways/C_Managing_Payment_Gateways/B_Going_Live_Payment_Gateways#Testing_with_Credit_Cards \"C_Zuora_User_Guides/A_Billing_and_Payments/M_Payment_Gateways/C_Managing_Payment_Gateways/B_Going_Live_Payment_Gateways#Testing_with_Credit_Cards\").   ## Request IDs  As a general rule, when asked to supply a \"key\" for an account or subscription (accountKey, account-key, subscriptionKey, subscription-key), you can provide either the actual ID or the number of the entity.  ## Pagination  When retrieving information (using GET methods), the optional `pageSize` query parameter sets the maximum number of rows to return in a response. The maximum is `40`; larger values are treated as `40`. If this value is empty or invalid, `pageSize` typically defaults to `10`.  The default value for the maximum number of rows retrieved can be overridden at the method level.  If more rows are available, the response will include a `nextPage` element, which contains a URL for requesting the next page.  If this value is not provided, no more rows are available. No \"previous page\" element is explicitly provided; to support backward paging, use the previous call.  ### Array Size  For data items that are not paginated, the REST API supports arrays of up to 300 rows.  Thus, for instance, repeated pagination can retrieve thousands of customer accounts, but within any account an array of no more than 300 rate plans is returned.
 *
 * OpenAPI spec version: 0.0.1
 * Contact: docs@zuora.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * AccountingPeriodsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountingPeriodsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://rest.zuora.com/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return AccountingPeriodsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation dELETEAccountingPeriod
     *
     * Delete accounting period
     *
     * @param string $ap_id ID of the accounting period you want to delete. (required)
     * @return \Swagger\Client\Model\CommonResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function dELETEAccountingPeriod($ap_id)
    {
        list($response) = $this->dELETEAccountingPeriodWithHttpInfo($ap_id);
        return $response;
    }

    /**
     * Operation dELETEAccountingPeriodWithHttpInfo
     *
     * Delete accounting period
     *
     * @param string $ap_id ID of the accounting period you want to delete. (required)
     * @return Array of \Swagger\Client\Model\CommonResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function dELETEAccountingPeriodWithHttpInfo($ap_id)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling dELETEAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CommonResponseType',
                '/accounting-periods/{ap-id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CommonResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CommonResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation gETAccountingPeriod
     *
     * Get accounting period
     *
     * @param string $ap_id ID of the accounting period you want to get. (required)
     * @return \Swagger\Client\Model\GETAccountingPeriodType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function gETAccountingPeriod($ap_id)
    {
        list($response) = $this->gETAccountingPeriodWithHttpInfo($ap_id);
        return $response;
    }

    /**
     * Operation gETAccountingPeriodWithHttpInfo
     *
     * Get accounting period
     *
     * @param string $ap_id ID of the accounting period you want to get. (required)
     * @return Array of \Swagger\Client\Model\GETAccountingPeriodType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function gETAccountingPeriodWithHttpInfo($ap_id)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling gETAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GETAccountingPeriodType',
                '/accounting-periods/{ap-id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GETAccountingPeriodType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GETAccountingPeriodType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation gETAccountingPeriods
     *
     * Get all accounting periods
     *
     * @return \Swagger\Client\Model\GETAccountingPeriodsType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function gETAccountingPeriods()
    {
        list($response) = $this->gETAccountingPeriodsWithHttpInfo();
        return $response;
    }

    /**
     * Operation gETAccountingPeriodsWithHttpInfo
     *
     * Get all accounting periods
     *
     * @return Array of \Swagger\Client\Model\GETAccountingPeriodsType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function gETAccountingPeriodsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/accounting-periods";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GETAccountingPeriodsType',
                '/accounting-periods'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GETAccountingPeriodsType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GETAccountingPeriodsType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pOSTAccountingPeriod
     *
     * Create accounting period
     *
     * @param \Swagger\Client\Model\POSTAccountingPeriodType $request  (required)
     * @return \Swagger\Client\Model\POSTAccountingPeriodResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pOSTAccountingPeriod($request)
    {
        list($response) = $this->pOSTAccountingPeriodWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation pOSTAccountingPeriodWithHttpInfo
     *
     * Create accounting period
     *
     * @param \Swagger\Client\Model\POSTAccountingPeriodType $request  (required)
     * @return Array of \Swagger\Client\Model\POSTAccountingPeriodResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pOSTAccountingPeriodWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling pOSTAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\POSTAccountingPeriodResponseType',
                '/accounting-periods'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\POSTAccountingPeriodResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\POSTAccountingPeriodResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pUTCloseAccountingPeriod
     *
     * Close accounting period
     *
     * @param string $ap_id ID of the accounting period you want to close. (required)
     * @return \Swagger\Client\Model\CommonResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTCloseAccountingPeriod($ap_id)
    {
        list($response) = $this->pUTCloseAccountingPeriodWithHttpInfo($ap_id);
        return $response;
    }

    /**
     * Operation pUTCloseAccountingPeriodWithHttpInfo
     *
     * Close accounting period
     *
     * @param string $ap_id ID of the accounting period you want to close. (required)
     * @return Array of \Swagger\Client\Model\CommonResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTCloseAccountingPeriodWithHttpInfo($ap_id)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling pUTCloseAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}/close";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CommonResponseType',
                '/accounting-periods/{ap-id}/close'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CommonResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CommonResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pUTPendingCloseAccountingPeriod
     *
     * Set accounting period to pending close
     *
     * @param string $ap_id ID of the accounting period you want to set to pending close. (required)
     * @return \Swagger\Client\Model\CommonResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTPendingCloseAccountingPeriod($ap_id)
    {
        list($response) = $this->pUTPendingCloseAccountingPeriodWithHttpInfo($ap_id);
        return $response;
    }

    /**
     * Operation pUTPendingCloseAccountingPeriodWithHttpInfo
     *
     * Set accounting period to pending close
     *
     * @param string $ap_id ID of the accounting period you want to set to pending close. (required)
     * @return Array of \Swagger\Client\Model\CommonResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTPendingCloseAccountingPeriodWithHttpInfo($ap_id)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling pUTPendingCloseAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}/pending-close";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CommonResponseType',
                '/accounting-periods/{ap-id}/pending-close'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CommonResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CommonResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pUTReopenAccountingPeriod
     *
     * Re-open accounting period
     *
     * @param string $ap_id ID of the accounting period that you want to re-open. (required)
     * @return \Swagger\Client\Model\CommonResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTReopenAccountingPeriod($ap_id)
    {
        list($response) = $this->pUTReopenAccountingPeriodWithHttpInfo($ap_id);
        return $response;
    }

    /**
     * Operation pUTReopenAccountingPeriodWithHttpInfo
     *
     * Re-open accounting period
     *
     * @param string $ap_id ID of the accounting period that you want to re-open. (required)
     * @return Array of \Swagger\Client\Model\CommonResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTReopenAccountingPeriodWithHttpInfo($ap_id)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling pUTReopenAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}/reopen";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CommonResponseType',
                '/accounting-periods/{ap-id}/reopen'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CommonResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CommonResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pUTRunTrialBalance
     *
     * Run trial balance
     *
     * @param string $ap_id ID of the accounting period for which you want to run a trial balance. (required)
     * @return \Swagger\Client\Model\CommonResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTRunTrialBalance($ap_id)
    {
        list($response) = $this->pUTRunTrialBalanceWithHttpInfo($ap_id);
        return $response;
    }

    /**
     * Operation pUTRunTrialBalanceWithHttpInfo
     *
     * Run trial balance
     *
     * @param string $ap_id ID of the accounting period for which you want to run a trial balance. (required)
     * @return Array of \Swagger\Client\Model\CommonResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTRunTrialBalanceWithHttpInfo($ap_id)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling pUTRunTrialBalance');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}/run-trial-balance";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CommonResponseType',
                '/accounting-periods/{ap-id}/run-trial-balance'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CommonResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CommonResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation pUTUpdateAccountingPeriod
     *
     * Update accounting period
     *
     * @param string $ap_id ID of the accounting period you want to update. (required)
     * @param \Swagger\Client\Model\PUTAccountingPeriodType $request  (required)
     * @return \Swagger\Client\Model\CommonResponseType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTUpdateAccountingPeriod($ap_id, $request)
    {
        list($response) = $this->pUTUpdateAccountingPeriodWithHttpInfo($ap_id, $request);
        return $response;
    }

    /**
     * Operation pUTUpdateAccountingPeriodWithHttpInfo
     *
     * Update accounting period
     *
     * @param string $ap_id ID of the accounting period you want to update. (required)
     * @param \Swagger\Client\Model\PUTAccountingPeriodType $request  (required)
     * @return Array of \Swagger\Client\Model\CommonResponseType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pUTUpdateAccountingPeriodWithHttpInfo($ap_id, $request)
    {
        // verify the required parameter 'ap_id' is set
        if ($ap_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ap_id when calling pUTUpdateAccountingPeriod');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling pUTUpdateAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/accounting-periods/{ap-id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($ap_id !== null) {
            $resourcePath = str_replace(
                "{" . "ap-id" . "}",
                $this->apiClient->getSerializer()->toPathValue($ap_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CommonResponseType',
                '/accounting-periods/{ap-id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CommonResponseType', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CommonResponseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyDELETEAccountingPeriod
     *
     * CRUD: Delete AccountingPeriod
     *
     * @param string $id Object id (required)
     * @return \Swagger\Client\Model\ProxyDeleteResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyDELETEAccountingPeriod($id)
    {
        list($response) = $this->proxyDELETEAccountingPeriodWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation proxyDELETEAccountingPeriodWithHttpInfo
     *
     * CRUD: Delete AccountingPeriod
     *
     * @param string $id Object id (required)
     * @return Array of \Swagger\Client\Model\ProxyDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyDELETEAccountingPeriodWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling proxyDELETEAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/object/accounting-period/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ProxyDeleteResponse',
                '/object/accounting-period/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyDeleteResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyGETAccountingPeriod
     *
     * CRUD: Retrieve AccountingPeriod
     *
     * @param string $id Object id (required)
     * @param string $fields Object fields to return (optional)
     * @return \Swagger\Client\Model\ProxyGetAccountingPeriod
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyGETAccountingPeriod($id, $fields = null)
    {
        list($response) = $this->proxyGETAccountingPeriodWithHttpInfo($id, $fields);
        return $response;
    }

    /**
     * Operation proxyGETAccountingPeriodWithHttpInfo
     *
     * CRUD: Retrieve AccountingPeriod
     *
     * @param string $id Object id (required)
     * @param string $fields Object fields to return (optional)
     * @return Array of \Swagger\Client\Model\ProxyGetAccountingPeriod, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyGETAccountingPeriodWithHttpInfo($id, $fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling proxyGETAccountingPeriod');
        }
        // parse inputs
        $resourcePath = "/object/accounting-period/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ProxyGetAccountingPeriod',
                '/object/accounting-period/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyGetAccountingPeriod', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyGetAccountingPeriod', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyNoDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
