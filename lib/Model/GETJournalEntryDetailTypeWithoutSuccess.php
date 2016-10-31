<?php
/**
 * GETJournalEntryDetailTypeWithoutSuccess
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
 * GETJournalEntryDetailTypeWithoutSuccess Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETJournalEntryDetailTypeWithoutSuccess implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETJournalEntryDetailTypeWithoutSuccess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'accounting_period_name' => 'string',
        'aggregate_currency' => 'bool',
        'currency' => 'string',
        'custom_field__c' => 'string',
        'home_currency' => 'string',
        'journal_entry_date' => '\DateTime',
        'journal_entry_items' => '\Swagger\Client\Model\GETJournalEntryItemType[]',
        'notes' => 'string',
        'number' => 'string',
        'segments' => '\Swagger\Client\Model\GETJournalEntrySegmentType[]',
        'status' => 'string',
        'time_period_end' => '\DateTime',
        'time_period_start' => '\DateTime',
        'transaction_type' => 'string',
        'transfer_date_time' => '\DateTime',
        'transferred_by' => 'string',
        'transferred_to_accounting' => 'string'
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
        'accounting_period_name' => 'accountingPeriodName',
        'aggregate_currency' => 'aggregateCurrency',
        'currency' => 'currency',
        'custom_field__c' => 'customField__c',
        'home_currency' => 'homeCurrency',
        'journal_entry_date' => 'journalEntryDate',
        'journal_entry_items' => 'journalEntryItems',
        'notes' => 'notes',
        'number' => 'number',
        'segments' => 'segments',
        'status' => 'status',
        'time_period_end' => 'timePeriodEnd',
        'time_period_start' => 'timePeriodStart',
        'transaction_type' => 'transactionType',
        'transfer_date_time' => 'transferDateTime',
        'transferred_by' => 'transferredBy',
        'transferred_to_accounting' => 'transferredToAccounting'
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
        'accounting_period_name' => 'setAccountingPeriodName',
        'aggregate_currency' => 'setAggregateCurrency',
        'currency' => 'setCurrency',
        'custom_field__c' => 'setCustomFieldC',
        'home_currency' => 'setHomeCurrency',
        'journal_entry_date' => 'setJournalEntryDate',
        'journal_entry_items' => 'setJournalEntryItems',
        'notes' => 'setNotes',
        'number' => 'setNumber',
        'segments' => 'setSegments',
        'status' => 'setStatus',
        'time_period_end' => 'setTimePeriodEnd',
        'time_period_start' => 'setTimePeriodStart',
        'transaction_type' => 'setTransactionType',
        'transfer_date_time' => 'setTransferDateTime',
        'transferred_by' => 'setTransferredBy',
        'transferred_to_accounting' => 'setTransferredToAccounting'
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
        'accounting_period_name' => 'getAccountingPeriodName',
        'aggregate_currency' => 'getAggregateCurrency',
        'currency' => 'getCurrency',
        'custom_field__c' => 'getCustomFieldC',
        'home_currency' => 'getHomeCurrency',
        'journal_entry_date' => 'getJournalEntryDate',
        'journal_entry_items' => 'getJournalEntryItems',
        'notes' => 'getNotes',
        'number' => 'getNumber',
        'segments' => 'getSegments',
        'status' => 'getStatus',
        'time_period_end' => 'getTimePeriodEnd',
        'time_period_start' => 'getTimePeriodStart',
        'transaction_type' => 'getTransactionType',
        'transfer_date_time' => 'getTransferDateTime',
        'transferred_by' => 'getTransferredBy',
        'transferred_to_accounting' => 'getTransferredToAccounting'
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
        $this->container['accounting_period_name'] = isset($data['accounting_period_name']) ? $data['accounting_period_name'] : null;
        $this->container['aggregate_currency'] = isset($data['aggregate_currency']) ? $data['aggregate_currency'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['home_currency'] = isset($data['home_currency']) ? $data['home_currency'] : null;
        $this->container['journal_entry_date'] = isset($data['journal_entry_date']) ? $data['journal_entry_date'] : null;
        $this->container['journal_entry_items'] = isset($data['journal_entry_items']) ? $data['journal_entry_items'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time_period_end'] = isset($data['time_period_end']) ? $data['time_period_end'] : null;
        $this->container['time_period_start'] = isset($data['time_period_start']) ? $data['time_period_start'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['transfer_date_time'] = isset($data['transfer_date_time']) ? $data['transfer_date_time'] : null;
        $this->container['transferred_by'] = isset($data['transferred_by']) ? $data['transferred_by'] : null;
        $this->container['transferred_to_accounting'] = isset($data['transferred_to_accounting']) ? $data['transferred_to_accounting'] : null;
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
     * Gets accounting_period_name
     * @return string
     */
    public function getAccountingPeriodName()
    {
        return $this->container['accounting_period_name'];
    }

    /**
     * Sets accounting_period_name
     * @param string $accounting_period_name Name of the accounting period that the journal entry belongs to.
     * @return $this
     */
    public function setAccountingPeriodName($accounting_period_name)
    {
        $this->container['accounting_period_name'] = $accounting_period_name;

        return $this;
    }

    /**
     * Gets aggregate_currency
     * @return bool
     */
    public function getAggregateCurrency()
    {
        return $this->container['aggregate_currency'];
    }

    /**
     * Sets aggregate_currency
     * @param bool $aggregate_currency Returns true if the journal entry is aggregating currencies. That is, if the journal entry was created when the [Aggregate transactions with different currencies during a JournalRun](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/C_Configure_accounting_rules#Aggregate_transactions_with_different_currencies_during_a_Journal_Run) setting was configured to \"Yes\". Otherwise, returns `false`.
     * @return $this
     */
    public function setAggregateCurrency($aggregate_currency)
    {
        $this->container['aggregate_currency'] = $aggregate_currency;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets home_currency
     * @return string
     */
    public function getHomeCurrency()
    {
        return $this->container['home_currency'];
    }

    /**
     * Sets home_currency
     * @param string $home_currency Home currency used.
     * @return $this
     */
    public function setHomeCurrency($home_currency)
    {
        $this->container['home_currency'] = $home_currency;

        return $this;
    }

    /**
     * Gets journal_entry_date
     * @return \DateTime
     */
    public function getJournalEntryDate()
    {
        return $this->container['journal_entry_date'];
    }

    /**
     * Sets journal_entry_date
     * @param \DateTime $journal_entry_date Date of the journal entry.
     * @return $this
     */
    public function setJournalEntryDate($journal_entry_date)
    {
        $this->container['journal_entry_date'] = $journal_entry_date;

        return $this;
    }

    /**
     * Gets journal_entry_items
     * @return \Swagger\Client\Model\GETJournalEntryItemType[]
     */
    public function getJournalEntryItems()
    {
        return $this->container['journal_entry_items'];
    }

    /**
     * Sets journal_entry_items
     * @param \Swagger\Client\Model\GETJournalEntryItemType[] $journal_entry_items Key name that represents the list of journal entry items.
     * @return $this
     */
    public function setJournalEntryItems($journal_entry_items)
    {
        $this->container['journal_entry_items'] = $journal_entry_items;

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
     * @param string $notes Additional information about this record. Character limit: 2,000
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number Journal entry number in the format JE-00000001.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets segments
     * @return \Swagger\Client\Model\GETJournalEntrySegmentType[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     * @param \Swagger\Client\Model\GETJournalEntrySegmentType[] $segments List of segments that apply to the summary journal entry.
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

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
     * @param string $status Status of journal entry. An enum with the values`Created` or `Cancelled`.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets time_period_end
     * @return \DateTime
     */
    public function getTimePeriodEnd()
    {
        return $this->container['time_period_end'];
    }

    /**
     * Sets time_period_end
     * @param \DateTime $time_period_end End date of time period included in the journal entry.
     * @return $this
     */
    public function setTimePeriodEnd($time_period_end)
    {
        $this->container['time_period_end'] = $time_period_end;

        return $this;
    }

    /**
     * Gets time_period_start
     * @return \DateTime
     */
    public function getTimePeriodStart()
    {
        return $this->container['time_period_start'];
    }

    /**
     * Sets time_period_start
     * @param \DateTime $time_period_start Start date of time period included in the journal entry.
     * @return $this
     */
    public function setTimePeriodStart($time_period_start)
    {
        $this->container['time_period_start'] = $time_period_start;

        return $this;
    }

    /**
     * Gets transaction_type
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     * @param string $transaction_type Transaction type of the transactions included in the summary journal entry.
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transfer_date_time
     * @return \DateTime
     */
    public function getTransferDateTime()
    {
        return $this->container['transfer_date_time'];
    }

    /**
     * Sets transfer_date_time
     * @param \DateTime $transfer_date_time Date and time that transferredToAccounting was changed to `Yes`. This field is returned only when transferredToAccounting is `Yes`. Otherwise, this field is `null`.
     * @return $this
     */
    public function setTransferDateTime($transfer_date_time)
    {
        $this->container['transfer_date_time'] = $transfer_date_time;

        return $this;
    }

    /**
     * Gets transferred_by
     * @return string
     */
    public function getTransferredBy()
    {
        return $this->container['transferred_by'];
    }

    /**
     * Sets transferred_by
     * @param string $transferred_by User ID of the person who changed transferredToAccounting to `Yes`. This field is returned only when transferredToAccounting is `Yes`. Otherwise, this field is `null`.
     * @return $this
     */
    public function setTransferredBy($transferred_by)
    {
        $this->container['transferred_by'] = $transferred_by;

        return $this;
    }

    /**
     * Gets transferred_to_accounting
     * @return string
     */
    public function getTransferredToAccounting()
    {
        return $this->container['transferred_to_accounting'];
    }

    /**
     * Sets transferred_to_accounting
     * @param string $transferred_to_accounting Status shows whether the journal entry has been transferred to an accounting system. The possible values are `No`, `Processing`, `Yes`, `Error`, `Ignore`.
     * @return $this
     */
    public function setTransferredToAccounting($transferred_to_accounting)
    {
        $this->container['transferred_to_accounting'] = $transferred_to_accounting;

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


