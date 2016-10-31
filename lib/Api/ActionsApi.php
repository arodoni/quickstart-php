<?php
/**
 * ActionsApi
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
 * ActionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionsApi
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
     * @return ActionsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation proxyActionPOSTamend
     *
     * Amend
     *
     * @param \Swagger\Client\Model\ProxyActionamendRequest $amend_request  (required)
     * @return \Swagger\Client\Model\ProxyActionamendResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTamend($amend_request)
    {
        list($response) = $this->proxyActionPOSTamendWithHttpInfo($amend_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTamendWithHttpInfo
     *
     * Amend
     *
     * @param \Swagger\Client\Model\ProxyActionamendRequest $amend_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionamendResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTamendWithHttpInfo($amend_request)
    {
        // verify the required parameter 'amend_request' is set
        if ($amend_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $amend_request when calling proxyActionPOSTamend');
        }
        // parse inputs
        $resourcePath = "/action/amend";
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
        if (isset($amend_request)) {
            $_tempBody = $amend_request;
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
                '\Swagger\Client\Model\ProxyActionamendResponse',
                '/action/amend'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionamendResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionamendResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTcreate
     *
     * Create
     *
     * @param \Swagger\Client\Model\ProxyActioncreateRequest $create_request  (required)
     * @return \Swagger\Client\Model\ProxyActioncreateResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTcreate($create_request)
    {
        list($response) = $this->proxyActionPOSTcreateWithHttpInfo($create_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTcreateWithHttpInfo
     *
     * Create
     *
     * @param \Swagger\Client\Model\ProxyActioncreateRequest $create_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActioncreateResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTcreateWithHttpInfo($create_request)
    {
        // verify the required parameter 'create_request' is set
        if ($create_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_request when calling proxyActionPOSTcreate');
        }
        // parse inputs
        $resourcePath = "/action/create";
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
        if (isset($create_request)) {
            $_tempBody = $create_request;
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
                '\Swagger\Client\Model\ProxyActioncreateResponse',
                '/action/create'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActioncreateResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActioncreateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTdelete
     *
     * Delete
     *
     * @param \Swagger\Client\Model\ProxyActiondeleteRequest $delete_request  (required)
     * @return \Swagger\Client\Model\ProxyActiondeleteResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTdelete($delete_request)
    {
        list($response) = $this->proxyActionPOSTdeleteWithHttpInfo($delete_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTdeleteWithHttpInfo
     *
     * Delete
     *
     * @param \Swagger\Client\Model\ProxyActiondeleteRequest $delete_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActiondeleteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTdeleteWithHttpInfo($delete_request)
    {
        // verify the required parameter 'delete_request' is set
        if ($delete_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $delete_request when calling proxyActionPOSTdelete');
        }
        // parse inputs
        $resourcePath = "/action/delete";
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
        if (isset($delete_request)) {
            $_tempBody = $delete_request;
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
                '\Swagger\Client\Model\ProxyActiondeleteResponse',
                '/action/delete'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActiondeleteResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActiondeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTexecute
     *
     * Execute
     *
     * @param \Swagger\Client\Model\ProxyActionexecuteRequest $execute_request  (required)
     * @return \Swagger\Client\Model\ProxyActionexecuteResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTexecute($execute_request)
    {
        list($response) = $this->proxyActionPOSTexecuteWithHttpInfo($execute_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTexecuteWithHttpInfo
     *
     * Execute
     *
     * @param \Swagger\Client\Model\ProxyActionexecuteRequest $execute_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionexecuteResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTexecuteWithHttpInfo($execute_request)
    {
        // verify the required parameter 'execute_request' is set
        if ($execute_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $execute_request when calling proxyActionPOSTexecute');
        }
        // parse inputs
        $resourcePath = "/action/execute";
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
        if (isset($execute_request)) {
            $_tempBody = $execute_request;
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
                '\Swagger\Client\Model\ProxyActionexecuteResponse',
                '/action/execute'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionexecuteResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionexecuteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTgenerate
     *
     * Generate
     *
     * @param \Swagger\Client\Model\ProxyActiongenerateRequest $generate_request  (required)
     * @return \Swagger\Client\Model\ProxyActiongenerateResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTgenerate($generate_request)
    {
        list($response) = $this->proxyActionPOSTgenerateWithHttpInfo($generate_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTgenerateWithHttpInfo
     *
     * Generate
     *
     * @param \Swagger\Client\Model\ProxyActiongenerateRequest $generate_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActiongenerateResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTgenerateWithHttpInfo($generate_request)
    {
        // verify the required parameter 'generate_request' is set
        if ($generate_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $generate_request when calling proxyActionPOSTgenerate');
        }
        // parse inputs
        $resourcePath = "/action/generate";
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
        if (isset($generate_request)) {
            $_tempBody = $generate_request;
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
                '\Swagger\Client\Model\ProxyActiongenerateResponse',
                '/action/generate'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActiongenerateResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActiongenerateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTgetUserInfo
     *
     * GetUserInfo
     *
     * @return \Swagger\Client\Model\ProxyActiongetUserInfoResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTgetUserInfo()
    {
        list($response) = $this->proxyActionPOSTgetUserInfoWithHttpInfo();
        return $response;
    }

    /**
     * Operation proxyActionPOSTgetUserInfoWithHttpInfo
     *
     * GetUserInfo
     *
     * @return Array of \Swagger\Client\Model\ProxyActiongetUserInfoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTgetUserInfoWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/action/getUserInfo";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ProxyActiongetUserInfoResponse',
                '/action/getUserInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActiongetUserInfoResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActiongetUserInfoResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTlogin
     *
     * Login
     *
     * @param \Swagger\Client\Model\ProxyActionloginRequest $login_request  (required)
     * @return \Swagger\Client\Model\ProxyActionloginResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTlogin($login_request)
    {
        list($response) = $this->proxyActionPOSTloginWithHttpInfo($login_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTloginWithHttpInfo
     *
     * Login
     *
     * @param \Swagger\Client\Model\ProxyActionloginRequest $login_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionloginResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTloginWithHttpInfo($login_request)
    {
        // verify the required parameter 'login_request' is set
        if ($login_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $login_request when calling proxyActionPOSTlogin');
        }
        // parse inputs
        $resourcePath = "/action/login";
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
        if (isset($login_request)) {
            $_tempBody = $login_request;
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
                '\Swagger\Client\Model\ProxyActionloginResponse',
                '/action/login'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionloginResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionloginResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTquery
     *
     * Query
     *
     * @param \Swagger\Client\Model\ProxyActionqueryRequest $query_request  (required)
     * @return \Swagger\Client\Model\ProxyActionqueryResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTquery($query_request)
    {
        list($response) = $this->proxyActionPOSTqueryWithHttpInfo($query_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTqueryWithHttpInfo
     *
     * Query
     *
     * @param \Swagger\Client\Model\ProxyActionqueryRequest $query_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionqueryResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTqueryWithHttpInfo($query_request)
    {
        // verify the required parameter 'query_request' is set
        if ($query_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query_request when calling proxyActionPOSTquery');
        }
        // parse inputs
        $resourcePath = "/action/query";
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
        if (isset($query_request)) {
            $_tempBody = $query_request;
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
                '\Swagger\Client\Model\ProxyActionqueryResponse',
                '/action/query'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionqueryResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionqueryResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTqueryMore
     *
     * QueryMore
     *
     * @param \Swagger\Client\Model\ProxyActionqueryMoreRequest $query_more_request  (required)
     * @return \Swagger\Client\Model\ProxyActionqueryMoreResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTqueryMore($query_more_request)
    {
        list($response) = $this->proxyActionPOSTqueryMoreWithHttpInfo($query_more_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTqueryMoreWithHttpInfo
     *
     * QueryMore
     *
     * @param \Swagger\Client\Model\ProxyActionqueryMoreRequest $query_more_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionqueryMoreResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTqueryMoreWithHttpInfo($query_more_request)
    {
        // verify the required parameter 'query_more_request' is set
        if ($query_more_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query_more_request when calling proxyActionPOSTqueryMore');
        }
        // parse inputs
        $resourcePath = "/action/queryMore";
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
        if (isset($query_more_request)) {
            $_tempBody = $query_more_request;
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
                '\Swagger\Client\Model\ProxyActionqueryMoreResponse',
                '/action/queryMore'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionqueryMoreResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionqueryMoreResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTsubscribe
     *
     * Subscribe
     *
     * @param \Swagger\Client\Model\ProxyActionsubscribeRequest $subscribe_request  (required)
     * @return \Swagger\Client\Model\ProxyActionsubscribeResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTsubscribe($subscribe_request)
    {
        list($response) = $this->proxyActionPOSTsubscribeWithHttpInfo($subscribe_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTsubscribeWithHttpInfo
     *
     * Subscribe
     *
     * @param \Swagger\Client\Model\ProxyActionsubscribeRequest $subscribe_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionsubscribeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTsubscribeWithHttpInfo($subscribe_request)
    {
        // verify the required parameter 'subscribe_request' is set
        if ($subscribe_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscribe_request when calling proxyActionPOSTsubscribe');
        }
        // parse inputs
        $resourcePath = "/action/subscribe";
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
        if (isset($subscribe_request)) {
            $_tempBody = $subscribe_request;
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
                '\Swagger\Client\Model\ProxyActionsubscribeResponse',
                '/action/subscribe'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionsubscribeResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionsubscribeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation proxyActionPOSTupdate
     *
     * Update
     *
     * @param \Swagger\Client\Model\ProxyActionupdateRequest $update_request  (required)
     * @return \Swagger\Client\Model\ProxyActionupdateResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTupdate($update_request)
    {
        list($response) = $this->proxyActionPOSTupdateWithHttpInfo($update_request);
        return $response;
    }

    /**
     * Operation proxyActionPOSTupdateWithHttpInfo
     *
     * Update
     *
     * @param \Swagger\Client\Model\ProxyActionupdateRequest $update_request  (required)
     * @return Array of \Swagger\Client\Model\ProxyActionupdateResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function proxyActionPOSTupdateWithHttpInfo($update_request)
    {
        // verify the required parameter 'update_request' is set
        if ($update_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $update_request when calling proxyActionPOSTupdate');
        }
        // parse inputs
        $resourcePath = "/action/update";
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
        if (isset($update_request)) {
            $_tempBody = $update_request;
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
                '\Swagger\Client\Model\ProxyActionupdateResponse',
                '/action/update'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ProxyActionupdateResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyActionupdateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProxyBadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
