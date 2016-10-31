<?php
/**
 * GETRSDetailWithoutSuccessType
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
 * GETRSDetailWithoutSuccessType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETRSDetailWithoutSuccessType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETRSDetailWithoutSuccessType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_id' => 'string',
        'amount' => 'string',
        'created_on' => '\DateTime',
        'currency' => 'string',
        'custom_field__c' => 'string',
        'linked_transaction_id' => 'string',
        'linked_transaction_number' => 'string',
        'linked_transaction_type' => 'string',
        'notes' => 'string',
        'number' => 'string',
        'recognition_rule_name' => 'string',
        'recognized_revenue' => 'string',
        'reference_id' => 'string',
        'revenue_items' => '\Swagger\Client\Model\GETRsRevenueItemType[]',
        'revenue_schedule_date' => '\DateTime',
        'subscription_charge_id' => 'string',
        'subscription_id' => 'string',
        'undistributed_unrecognized_revenue' => 'string',
        'unrecognized_revenue' => 'string',
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
        'account_id' => 'accountId',
        'amount' => 'amount',
        'created_on' => 'createdOn',
        'currency' => 'currency',
        'custom_field__c' => 'customField__c',
        'linked_transaction_id' => 'linkedTransactionId',
        'linked_transaction_number' => 'linkedTransactionNumber',
        'linked_transaction_type' => 'linkedTransactionType',
        'notes' => 'notes',
        'number' => 'number',
        'recognition_rule_name' => 'recognitionRuleName',
        'recognized_revenue' => 'recognizedRevenue',
        'reference_id' => 'referenceId',
        'revenue_items' => 'revenueItems',
        'revenue_schedule_date' => 'revenueScheduleDate',
        'subscription_charge_id' => 'subscriptionChargeId',
        'subscription_id' => 'subscriptionId',
        'undistributed_unrecognized_revenue' => 'undistributedUnrecognizedRevenue',
        'unrecognized_revenue' => 'unrecognizedRevenue',
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
        'account_id' => 'setAccountId',
        'amount' => 'setAmount',
        'created_on' => 'setCreatedOn',
        'currency' => 'setCurrency',
        'custom_field__c' => 'setCustomFieldC',
        'linked_transaction_id' => 'setLinkedTransactionId',
        'linked_transaction_number' => 'setLinkedTransactionNumber',
        'linked_transaction_type' => 'setLinkedTransactionType',
        'notes' => 'setNotes',
        'number' => 'setNumber',
        'recognition_rule_name' => 'setRecognitionRuleName',
        'recognized_revenue' => 'setRecognizedRevenue',
        'reference_id' => 'setReferenceId',
        'revenue_items' => 'setRevenueItems',
        'revenue_schedule_date' => 'setRevenueScheduleDate',
        'subscription_charge_id' => 'setSubscriptionChargeId',
        'subscription_id' => 'setSubscriptionId',
        'undistributed_unrecognized_revenue' => 'setUndistributedUnrecognizedRevenue',
        'unrecognized_revenue' => 'setUnrecognizedRevenue',
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
        'account_id' => 'getAccountId',
        'amount' => 'getAmount',
        'created_on' => 'getCreatedOn',
        'currency' => 'getCurrency',
        'custom_field__c' => 'getCustomFieldC',
        'linked_transaction_id' => 'getLinkedTransactionId',
        'linked_transaction_number' => 'getLinkedTransactionNumber',
        'linked_transaction_type' => 'getLinkedTransactionType',
        'notes' => 'getNotes',
        'number' => 'getNumber',
        'recognition_rule_name' => 'getRecognitionRuleName',
        'recognized_revenue' => 'getRecognizedRevenue',
        'reference_id' => 'getReferenceId',
        'revenue_items' => 'getRevenueItems',
        'revenue_schedule_date' => 'getRevenueScheduleDate',
        'subscription_charge_id' => 'getSubscriptionChargeId',
        'subscription_id' => 'getSubscriptionId',
        'undistributed_unrecognized_revenue' => 'getUndistributedUnrecognizedRevenue',
        'unrecognized_revenue' => 'getUnrecognizedRevenue',
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['linked_transaction_id'] = isset($data['linked_transaction_id']) ? $data['linked_transaction_id'] : null;
        $this->container['linked_transaction_number'] = isset($data['linked_transaction_number']) ? $data['linked_transaction_number'] : null;
        $this->container['linked_transaction_type'] = isset($data['linked_transaction_type']) ? $data['linked_transaction_type'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['recognition_rule_name'] = isset($data['recognition_rule_name']) ? $data['recognition_rule_name'] : null;
        $this->container['recognized_revenue'] = isset($data['recognized_revenue']) ? $data['recognized_revenue'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['revenue_items'] = isset($data['revenue_items']) ? $data['revenue_items'] : null;
        $this->container['revenue_schedule_date'] = isset($data['revenue_schedule_date']) ? $data['revenue_schedule_date'] : null;
        $this->container['subscription_charge_id'] = isset($data['subscription_charge_id']) ? $data['subscription_charge_id'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['undistributed_unrecognized_revenue'] = isset($data['undistributed_unrecognized_revenue']) ? $data['undistributed_unrecognized_revenue'] : null;
        $this->container['unrecognized_revenue'] = isset($data['unrecognized_revenue']) ? $data['unrecognized_revenue'] : null;
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
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param string $account_id An account ID.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount The revenue schedule amount, which is the sum of all revenue items. This field cannot be null and must be formatted based on the currency, such as `JPY 30` or `USD 30.15`. Test out the currency to ensure you are using the proper formatting otherwise, the response will fail and this error message is returned: `Allocation amount with wrong decimal places.`
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param \DateTime $created_on The date when the record was created in `YYYY-MM-DD HH:MM:SS` format.
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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
     * @param string $currency The type of currency used.
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
     * Gets linked_transaction_id
     * @return string
     */
    public function getLinkedTransactionId()
    {
        return $this->container['linked_transaction_id'];
    }

    /**
     * Sets linked_transaction_id
     * @param string $linked_transaction_id The linked transaction ID for billing transactions. This field is used for all rules except the custom unlimited or manual recognition rule models. If using the custom unlimited rule model, then the field value must be null. If the field is not null, then the referenceId field must be null.
     * @return $this
     */
    public function setLinkedTransactionId($linked_transaction_id)
    {
        $this->container['linked_transaction_id'] = $linked_transaction_id;

        return $this;
    }

    /**
     * Gets linked_transaction_number
     * @return string
     */
    public function getLinkedTransactionNumber()
    {
        return $this->container['linked_transaction_number'];
    }

    /**
     * Sets linked_transaction_number
     * @param string $linked_transaction_number The number for the linked invoice item or invoice item adjustment transaction. This field is used for all rules except the custom unlimited or manual recognition rule models.  If using the custom unlimited or manual recognition rule models, then the field value is null.
     * @return $this
     */
    public function setLinkedTransactionNumber($linked_transaction_number)
    {
        $this->container['linked_transaction_number'] = $linked_transaction_number;

        return $this;
    }

    /**
     * Gets linked_transaction_type
     * @return string
     */
    public function getLinkedTransactionType()
    {
        return $this->container['linked_transaction_type'];
    }

    /**
     * Sets linked_transaction_type
     * @param string $linked_transaction_type The type of linked transaction for billing transactions, which can be invoice item or invoice item adjustment. This field is used for all rules except the custom unlimited or manual recognition rule models.
     * @return $this
     */
    public function setLinkedTransactionType($linked_transaction_type)
    {
        $this->container['linked_transaction_type'] = $linked_transaction_type;

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
     * @param string $notes Additional information about this record.
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
     * @param string $number Revenue schedule number. The revenue schedule number is always prefixed with \"RS\", for example, \"RS-00000001\".
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets recognition_rule_name
     * @return string
     */
    public function getRecognitionRuleName()
    {
        return $this->container['recognition_rule_name'];
    }

    /**
     * Sets recognition_rule_name
     * @param string $recognition_rule_name The name of the recognition rule.
     * @return $this
     */
    public function setRecognitionRuleName($recognition_rule_name)
    {
        $this->container['recognition_rule_name'] = $recognition_rule_name;

        return $this;
    }

    /**
     * Gets recognized_revenue
     * @return string
     */
    public function getRecognizedRevenue()
    {
        return $this->container['recognized_revenue'];
    }

    /**
     * Sets recognized_revenue
     * @param string $recognized_revenue The revenue that was distributed in a closed accounting period.
     * @return $this
     */
    public function setRecognizedRevenue($recognized_revenue)
    {
        $this->container['recognized_revenue'] = $recognized_revenue;

        return $this;
    }

    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     * @param string $reference_id Reference ID is used only in the custom unlimited rule to create a revenue schedule. In this scenario, the revenue schedule is not linked to an invoice item or invoice item adjustment.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets revenue_items
     * @return \Swagger\Client\Model\GETRsRevenueItemType[]
     */
    public function getRevenueItems()
    {
        return $this->container['revenue_items'];
    }

    /**
     * Sets revenue_items
     * @param \Swagger\Client\Model\GETRsRevenueItemType[] $revenue_items Revenue items are listed in ascending order by the accounting period start date.
     * @return $this
     */
    public function setRevenueItems($revenue_items)
    {
        $this->container['revenue_items'] = $revenue_items;

        return $this;
    }

    /**
     * Gets revenue_schedule_date
     * @return \DateTime
     */
    public function getRevenueScheduleDate()
    {
        return $this->container['revenue_schedule_date'];
    }

    /**
     * Sets revenue_schedule_date
     * @param \DateTime $revenue_schedule_date The effective date of the revenue schedule. For example, the revenue schedule date for bookings-based revenue recognition is typically set to the order date or contract date.  The date cannot be in a closed accounting period. The date must be in the `YYYY-MM-DD` format.
     * @return $this
     */
    public function setRevenueScheduleDate($revenue_schedule_date)
    {
        $this->container['revenue_schedule_date'] = $revenue_schedule_date;

        return $this;
    }

    /**
     * Gets subscription_charge_id
     * @return string
     */
    public function getSubscriptionChargeId()
    {
        return $this->container['subscription_charge_id'];
    }

    /**
     * Sets subscription_charge_id
     * @param string $subscription_charge_id The original subscription charge ID.
     * @return $this
     */
    public function setSubscriptionChargeId($subscription_charge_id)
    {
        $this->container['subscription_charge_id'] = $subscription_charge_id;

        return $this;
    }

    /**
     * Gets subscription_id
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     * @param string $subscription_id The original subscription ID.
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets undistributed_unrecognized_revenue
     * @return string
     */
    public function getUndistributedUnrecognizedRevenue()
    {
        return $this->container['undistributed_unrecognized_revenue'];
    }

    /**
     * Sets undistributed_unrecognized_revenue
     * @param string $undistributed_unrecognized_revenue Revenue in the open-ended accounting period.
     * @return $this
     */
    public function setUndistributedUnrecognizedRevenue($undistributed_unrecognized_revenue)
    {
        $this->container['undistributed_unrecognized_revenue'] = $undistributed_unrecognized_revenue;

        return $this;
    }

    /**
     * Gets unrecognized_revenue
     * @return string
     */
    public function getUnrecognizedRevenue()
    {
        return $this->container['unrecognized_revenue'];
    }

    /**
     * Sets unrecognized_revenue
     * @param string $unrecognized_revenue Revenue distributed in all open accounting periods, which includes the open-ended accounting period.
     * @return $this
     */
    public function setUnrecognizedRevenue($unrecognized_revenue)
    {
        $this->container['unrecognized_revenue'] = $unrecognized_revenue;

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
     * @param \DateTime $updated_on The date when the revenue automation start date was set.
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


