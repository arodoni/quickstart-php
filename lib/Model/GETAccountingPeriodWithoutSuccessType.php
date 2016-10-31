<?php
/**
 * GETAccountingPeriodWithoutSuccessType
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
 * GETAccountingPeriodWithoutSuccessType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETAccountingPeriodWithoutSuccessType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETAccountingPeriodWithoutSuccessType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'created_by' => 'string',
        'created_on' => '\DateTime',
        'custom_field__c' => 'string',
        'end_date' => '\DateTime',
        'file_ids' => '\Swagger\Client\Model\GETAccountingPeriodFileIdsType[]',
        'fiscal_year' => 'string',
        'fiscal_quarter' => 'int',
        'id' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'run_trial_balance_end' => '\DateTime',
        'run_trial_balance_error_message' => 'string',
        'run_trial_balance_start' => '\DateTime',
        'run_trial_balance_status' => 'string',
        'start_date' => '\DateTime',
        'status' => 'string',
        'updated_by' => 'string',
        'updated_on' => '\DateTime'
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
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'custom_field__c' => 'customField__c',
        'end_date' => 'endDate',
        'file_ids' => 'fileIds',
        'fiscal_year' => 'fiscalYear',
        'fiscal_quarter' => 'fiscal_quarter',
        'id' => 'id',
        'name' => 'name',
        'notes' => 'notes',
        'run_trial_balance_end' => 'runTrialBalanceEnd',
        'run_trial_balance_error_message' => 'runTrialBalanceErrorMessage',
        'run_trial_balance_start' => 'runTrialBalanceStart',
        'run_trial_balance_status' => 'runTrialBalanceStatus',
        'start_date' => 'startDate',
        'status' => 'status',
        'updated_by' => 'updatedBy',
        'updated_on' => 'updatedOn'
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
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'custom_field__c' => 'setCustomFieldC',
        'end_date' => 'setEndDate',
        'file_ids' => 'setFileIds',
        'fiscal_year' => 'setFiscalYear',
        'fiscal_quarter' => 'setFiscalQuarter',
        'id' => 'setId',
        'name' => 'setName',
        'notes' => 'setNotes',
        'run_trial_balance_end' => 'setRunTrialBalanceEnd',
        'run_trial_balance_error_message' => 'setRunTrialBalanceErrorMessage',
        'run_trial_balance_start' => 'setRunTrialBalanceStart',
        'run_trial_balance_status' => 'setRunTrialBalanceStatus',
        'start_date' => 'setStartDate',
        'status' => 'setStatus',
        'updated_by' => 'setUpdatedBy',
        'updated_on' => 'setUpdatedOn'
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
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'custom_field__c' => 'getCustomFieldC',
        'end_date' => 'getEndDate',
        'file_ids' => 'getFileIds',
        'fiscal_year' => 'getFiscalYear',
        'fiscal_quarter' => 'getFiscalQuarter',
        'id' => 'getId',
        'name' => 'getName',
        'notes' => 'getNotes',
        'run_trial_balance_end' => 'getRunTrialBalanceEnd',
        'run_trial_balance_error_message' => 'getRunTrialBalanceErrorMessage',
        'run_trial_balance_start' => 'getRunTrialBalanceStart',
        'run_trial_balance_status' => 'getRunTrialBalanceStatus',
        'start_date' => 'getStartDate',
        'status' => 'getStatus',
        'updated_by' => 'getUpdatedBy',
        'updated_on' => 'getUpdatedOn'
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
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['file_ids'] = isset($data['file_ids']) ? $data['file_ids'] : null;
        $this->container['fiscal_year'] = isset($data['fiscal_year']) ? $data['fiscal_year'] : null;
        $this->container['fiscal_quarter'] = isset($data['fiscal_quarter']) ? $data['fiscal_quarter'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['run_trial_balance_end'] = isset($data['run_trial_balance_end']) ? $data['run_trial_balance_end'] : null;
        $this->container['run_trial_balance_error_message'] = isset($data['run_trial_balance_error_message']) ? $data['run_trial_balance_error_message'] : null;
        $this->container['run_trial_balance_start'] = isset($data['run_trial_balance_start']) ? $data['run_trial_balance_start'] : null;
        $this->container['run_trial_balance_status'] = isset($data['run_trial_balance_status']) ? $data['run_trial_balance_status'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
        $this->container['updated_on'] = isset($data['updated_on']) ? $data['updated_on'] : null;
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
     * Gets created_by
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param string $created_by ID of the user who created the accounting period.
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_on
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     * @param \DateTime $created_on Date and time when the accounting period was created.
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets custom_field__c
     * @return string
     */
    public function getCustomFieldC()
    {
        return $this->container['custom_field__c'];
    }

    /**
     * Sets custom_field__c
     * @param string $custom_field__c Any custom fields defined for this object.
     * @return $this
     */
    public function setCustomFieldC($custom_field__c)
    {
        $this->container['custom_field__c'] = $custom_field__c;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date The end date of the accounting period.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets file_ids
     * @return \Swagger\Client\Model\GETAccountingPeriodFileIdsType[]
     */
    public function getFileIds()
    {
        return $this->container['file_ids'];
    }

    /**
     * Sets file_ids
     * @param \Swagger\Client\Model\GETAccountingPeriodFileIdsType[] $file_ids File IDs of the reports available for the accounting period. You can retrieve the reports by specifying the file ID in a [Get Files](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Get_Files) REST API call.
     * @return $this
     */
    public function setFileIds($file_ids)
    {
        $this->container['file_ids'] = $file_ids;

        return $this;
    }

    /**
     * Gets fiscal_year
     * @return string
     */
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }

    /**
     * Sets fiscal_year
     * @param string $fiscal_year Fiscal year of the accounting period.
     * @return $this
     */
    public function setFiscalYear($fiscal_year)
    {
        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets fiscal_quarter
     * @return int
     */
    public function getFiscalQuarter()
    {
        return $this->container['fiscal_quarter'];
    }

    /**
     * Sets fiscal_quarter
     * @param int $fiscal_quarter dummy
     * @return $this
     */
    public function setFiscalQuarter($fiscal_quarter)
    {
        $this->container['fiscal_quarter'] = $fiscal_quarter;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id ID of the accounting period.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the accounting period.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Any optional notes about the accounting period.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets run_trial_balance_end
     * @return \DateTime
     */
    public function getRunTrialBalanceEnd()
    {
        return $this->container['run_trial_balance_end'];
    }

    /**
     * Sets run_trial_balance_end
     * @param \DateTime $run_trial_balance_end Date and time that the trial balance was completed. If the trial balance status is `Pending`, `Processing`, or `Error`, this field is `null`.
     * @return $this
     */
    public function setRunTrialBalanceEnd($run_trial_balance_end)
    {
        $this->container['run_trial_balance_end'] = $run_trial_balance_end;

        return $this;
    }

    /**
     * Gets run_trial_balance_error_message
     * @return string
     */
    public function getRunTrialBalanceErrorMessage()
    {
        return $this->container['run_trial_balance_error_message'];
    }

    /**
     * Sets run_trial_balance_error_message
     * @param string $run_trial_balance_error_message If trial balance status is Error, an error message is returned in this field.
     * @return $this
     */
    public function setRunTrialBalanceErrorMessage($run_trial_balance_error_message)
    {
        $this->container['run_trial_balance_error_message'] = $run_trial_balance_error_message;

        return $this;
    }

    /**
     * Gets run_trial_balance_start
     * @return \DateTime
     */
    public function getRunTrialBalanceStart()
    {
        return $this->container['run_trial_balance_start'];
    }

    /**
     * Sets run_trial_balance_start
     * @param \DateTime $run_trial_balance_start Date and time that the trial balance was run. If the trial balance status is `Pending`, this field is `null`.
     * @return $this
     */
    public function setRunTrialBalanceStart($run_trial_balance_start)
    {
        $this->container['run_trial_balance_start'] = $run_trial_balance_start;

        return $this;
    }

    /**
     * Gets run_trial_balance_status
     * @return string
     */
    public function getRunTrialBalanceStatus()
    {
        return $this->container['run_trial_balance_status'];
    }

    /**
     * Sets run_trial_balance_status
     * @param string $run_trial_balance_status Status of the trial balance for the accounting period. Possible values:  * `Pending` * `Processing` * `Completed` * `Error`
     * @return $this
     */
    public function setRunTrialBalanceStatus($run_trial_balance_status)
    {
        $this->container['run_trial_balance_status'] = $run_trial_balance_status;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date The start date of the accounting period.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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
     * @param string $status Status of the accounting period. Possible values:  * `Open` * `PendingClose` * `Closed`
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updated_by
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     * @param string $updated_by D of the user who last updated the accounting period.
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets updated_on
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     * @param \DateTime $updated_on Date and time when the accounting period was last updated.
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

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


