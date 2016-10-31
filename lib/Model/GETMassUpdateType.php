<?php
/**
 * GETMassUpdateType
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GETMassUpdateType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETMassUpdateType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETMassUpdateType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'action_type' => 'string',
        'ended_on' => '\DateTime',
        'error_count' => 'string',
        'input_size' => 'int',
        'output_size' => 'int',
        'output_type' => 'string',
        'output_url' => 'string',
        'processed_count' => 'string',
        'started_on' => '\DateTime',
        'status' => 'string',
        'success' => 'bool',
        'success_count' => 'string',
        'total_count' => 'string',
        'uploaded_by' => 'string',
        'uploaded_on' => '\DateTime'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'action_type' => 'actionType',
        'ended_on' => 'endedOn',
        'error_count' => 'errorCount',
        'input_size' => 'inputSize',
        'output_size' => 'outputSize',
        'output_type' => 'outputType',
        'output_url' => 'outputURL',
        'processed_count' => 'processedCount',
        'started_on' => 'startedOn',
        'status' => 'status',
        'success' => 'success',
        'success_count' => 'successCount',
        'total_count' => 'totalCount',
        'uploaded_by' => 'uploadedBy',
        'uploaded_on' => 'uploadedOn'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'action_type' => 'setActionType',
        'ended_on' => 'setEndedOn',
        'error_count' => 'setErrorCount',
        'input_size' => 'setInputSize',
        'output_size' => 'setOutputSize',
        'output_type' => 'setOutputType',
        'output_url' => 'setOutputUrl',
        'processed_count' => 'setProcessedCount',
        'started_on' => 'setStartedOn',
        'status' => 'setStatus',
        'success' => 'setSuccess',
        'success_count' => 'setSuccessCount',
        'total_count' => 'setTotalCount',
        'uploaded_by' => 'setUploadedBy',
        'uploaded_on' => 'setUploadedOn'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'action_type' => 'getActionType',
        'ended_on' => 'getEndedOn',
        'error_count' => 'getErrorCount',
        'input_size' => 'getInputSize',
        'output_size' => 'getOutputSize',
        'output_type' => 'getOutputType',
        'output_url' => 'getOutputUrl',
        'processed_count' => 'getProcessedCount',
        'started_on' => 'getStartedOn',
        'status' => 'getStatus',
        'success' => 'getSuccess',
        'success_count' => 'getSuccessCount',
        'total_count' => 'getTotalCount',
        'uploaded_by' => 'getUploadedBy',
        'uploaded_on' => 'getUploadedOn'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['action_type'] = isset($data['action_type']) ? $data['action_type'] : null;
        $this->container['ended_on'] = isset($data['ended_on']) ? $data['ended_on'] : null;
        $this->container['error_count'] = isset($data['error_count']) ? $data['error_count'] : null;
        $this->container['input_size'] = isset($data['input_size']) ? $data['input_size'] : null;
        $this->container['output_size'] = isset($data['output_size']) ? $data['output_size'] : null;
        $this->container['output_type'] = isset($data['output_type']) ? $data['output_type'] : null;
        $this->container['output_url'] = isset($data['output_url']) ? $data['output_url'] : null;
        $this->container['processed_count'] = isset($data['processed_count']) ? $data['processed_count'] : null;
        $this->container['started_on'] = isset($data['started_on']) ? $data['started_on'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['success_count'] = isset($data['success_count']) ? $data['success_count'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['uploaded_by'] = isset($data['uploaded_by']) ? $data['uploaded_by'] : null;
        $this->container['uploaded_on'] = isset($data['uploaded_on']) ? $data['uploaded_on'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets action_type
     * @return string
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     * @param string $action_type Type of mass action.
     * @return $this
     */
    public function setActionType($action_type)
    {
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets ended_on
     * @return \DateTime
     */
    public function getEndedOn()
    {
        return $this->container['ended_on'];
    }

    /**
     * Sets ended_on
     * @param \DateTime $ended_on Date and time that the mass action was completed. The format is `yyyy-MM-dd hh:mm:ss`.
     * @return $this
     */
    public function setEndedOn($ended_on)
    {
        $this->container['ended_on'] = $ended_on;

        return $this;
    }

    /**
     * Gets error_count
     * @return string
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     * @param string $error_count Total number of failed records.  This field is updated in real time. When the mass action **status** is Processing, this field returns the number of records that have failed so far. When the mass action **status** is Pending, this field is null.
     * @return $this
     */
    public function setErrorCount($error_count)
    {
        $this->container['error_count'] = $error_count;

        return $this;
    }

    /**
     * Gets input_size
     * @return int
     */
    public function getInputSize()
    {
        return $this->container['input_size'];
    }

    /**
     * Sets input_size
     * @param int $input_size Size of the input file in bytes.
     * @return $this
     */
    public function setInputSize($input_size)
    {
        $this->container['input_size'] = $input_size;

        return $this;
    }

    /**
     * Gets output_size
     * @return int
     */
    public function getOutputSize()
    {
        return $this->container['output_size'];
    }

    /**
     * Sets output_size
     * @param int $output_size Size of the response file in bytes.
     * @return $this
     */
    public function setOutputSize($output_size)
    {
        $this->container['output_size'] = $output_size;

        return $this;
    }

    /**
     * Gets output_type
     * @return string
     */
    public function getOutputType()
    {
        return $this->container['output_type'];
    }

    /**
     * Sets output_type
     * @param string $output_type Type of output for the response file. The following table describes the output type.  | Output Type    | Description                         | |----------------|-------------------------------------| | (url:.csv.zip) | URL pointing to a zipped .csv file. |
     * @return $this
     */
    public function setOutputType($output_type)
    {
        $this->container['output_type'] = $output_type;

        return $this;
    }

    /**
     * Gets output_url
     * @return string
     */
    public function getOutputUrl()
    {
        return $this->container['output_url'];
    }

    /**
     * Sets output_url
     * @param string $output_url URL to download the response file. The response file is a zipped .csv file.  The response file is identical to the file you uploaded to perform the mass action, with additional columns providing information about the outcome of each record. See the [Supported Mass Actions](https://knowledgecenter.zuora.com/CC_Finance/Mass_Updater) articles for more information about the response file for each type of mass action.  This field only returns a value when the mass action **status** is Completed or Stopped. Otherwise, this field is null.
     * @return $this
     */
    public function setOutputUrl($output_url)
    {
        $this->container['output_url'] = $output_url;

        return $this;
    }

    /**
     * Gets processed_count
     * @return string
     */
    public function getProcessedCount()
    {
        return $this->container['processed_count'];
    }

    /**
     * Sets processed_count
     * @param string $processed_count Total number of processed records. This field is equal to the sum of `errorCount` and `successCount`.  This field is updated in real time. When the mass action **status** is Processing, this field returns the number of records that have been processed so far. When the mass action **status** is Pending, this field is null.
     * @return $this
     */
    public function setProcessedCount($processed_count)
    {
        $this->container['processed_count'] = $processed_count;

        return $this;
    }

    /**
     * Gets started_on
     * @return \DateTime
     */
    public function getStartedOn()
    {
        return $this->container['started_on'];
    }

    /**
     * Sets started_on
     * @param \DateTime $started_on Date and time that Zuora started processing the mass action. The format is `yyyy-MM-dd hh:mm:ss`.
     * @return $this
     */
    public function setStartedOn($started_on)
    {
        $this->container['started_on'] = $started_on;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the mass action. The following table describes the mass action statuses.  | Status     | Description                                                                | |------------|----------------------------------------------------------------------------| | Pending    | Mass action has not yet started being processed.                           | | Processing | Mass action is in progress.                                                | | Stopping   | Mass action is in the process of stopping, but has not yet stopped.        | | Stopped    | Mass action has stopped.                                                   | | Completed  | Mass action was successfully completed. There may still be failed records. | | Failed     | Mass action failed. No records are processed. No response file is created. |
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success Returns `true` if the request was processed successfully.
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets success_count
     * @return string
     */
    public function getSuccessCount()
    {
        return $this->container['success_count'];
    }

    /**
     * Sets success_count
     * @param string $success_count Total number of successful records. This field is updated in real time. When the mass action **status** is Processing, this field returns the number of records that have succeeded so far. When the mass action **status** is Pending, this field is null.
     * @return $this
     */
    public function setSuccessCount($success_count)
    {
        $this->container['success_count'] = $success_count;

        return $this;
    }

    /**
     * Gets total_count
     * @return string
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     * @param string $total_count Total number of records in the uploaded mass action file. When the mass action **status** is Pending, this field is null.
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets uploaded_by
     * @return string
     */
    public function getUploadedBy()
    {
        return $this->container['uploaded_by'];
    }

    /**
     * Sets uploaded_by
     * @param string $uploaded_by Email of the person who uploaded the mass action file.
     * @return $this
     */
    public function setUploadedBy($uploaded_by)
    {
        $this->container['uploaded_by'] = $uploaded_by;

        return $this;
    }

    /**
     * Gets uploaded_on
     * @return \DateTime
     */
    public function getUploadedOn()
    {
        return $this->container['uploaded_on'];
    }

    /**
     * Sets uploaded_on
     * @param \DateTime $uploaded_on Date and time that the mass action file was uploaded. The format is `yyyy-MM-dd hh:mm:ss`.
     * @return $this
     */
    public function setUploadedOn($uploaded_on)
    {
        $this->container['uploaded_on'] = $uploaded_on;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


