<?php
/**
 * GETAmendmentType
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
 * GETAmendmentType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETAmendmentType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETAmendmentType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'auto_renew' => 'bool',
        'base_rate_plan_id' => 'string',
        'base_subscription_id' => 'string',
        'code' => 'string',
        'contract_effective_date' => '\DateTime',
        'current_term' => 'int',
        'current_term_period_type' => 'string',
        'customer_acceptance_date' => '\DateTime',
        'description' => 'string',
        'destination_account_id' => 'string',
        'destination_invoice_owner_id' => 'string',
        'effective_date' => '\DateTime',
        'id' => 'string',
        'name' => 'string',
        'new_rate_plan_id' => 'string',
        'new_subscription_id' => 'string',
        'renewal_setting' => 'string',
        'renewal_term' => 'int',
        'renewal_term_period_type' => 'string',
        'resume_date' => '\DateTime',
        'service_activation_date' => '\DateTime',
        'specific_update_date' => '\DateTime',
        'status' => 'string',
        'success' => 'bool',
        'suspend_date' => '\DateTime',
        'term_start_date' => '\DateTime',
        'term_type' => 'string',
        'type' => 'string'
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
        'auto_renew' => 'autoRenew',
        'base_rate_plan_id' => 'baseRatePlanId',
        'base_subscription_id' => 'baseSubscriptionId',
        'code' => 'code',
        'contract_effective_date' => 'contractEffectiveDate',
        'current_term' => 'currentTerm',
        'current_term_period_type' => 'currentTermPeriodType',
        'customer_acceptance_date' => 'customerAcceptanceDate',
        'description' => 'description',
        'destination_account_id' => 'destinationAccountId',
        'destination_invoice_owner_id' => 'destinationInvoiceOwnerId',
        'effective_date' => 'effectiveDate',
        'id' => 'id',
        'name' => 'name',
        'new_rate_plan_id' => 'newRatePlanId',
        'new_subscription_id' => 'newSubscriptionId',
        'renewal_setting' => 'renewalSetting',
        'renewal_term' => 'renewalTerm',
        'renewal_term_period_type' => 'renewalTermPeriodType',
        'resume_date' => 'resumeDate',
        'service_activation_date' => 'serviceActivationDate',
        'specific_update_date' => 'specificUpdateDate',
        'status' => 'status',
        'success' => 'success',
        'suspend_date' => 'suspendDate',
        'term_start_date' => 'termStartDate',
        'term_type' => 'termType',
        'type' => 'type'
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
        'auto_renew' => 'setAutoRenew',
        'base_rate_plan_id' => 'setBaseRatePlanId',
        'base_subscription_id' => 'setBaseSubscriptionId',
        'code' => 'setCode',
        'contract_effective_date' => 'setContractEffectiveDate',
        'current_term' => 'setCurrentTerm',
        'current_term_period_type' => 'setCurrentTermPeriodType',
        'customer_acceptance_date' => 'setCustomerAcceptanceDate',
        'description' => 'setDescription',
        'destination_account_id' => 'setDestinationAccountId',
        'destination_invoice_owner_id' => 'setDestinationInvoiceOwnerId',
        'effective_date' => 'setEffectiveDate',
        'id' => 'setId',
        'name' => 'setName',
        'new_rate_plan_id' => 'setNewRatePlanId',
        'new_subscription_id' => 'setNewSubscriptionId',
        'renewal_setting' => 'setRenewalSetting',
        'renewal_term' => 'setRenewalTerm',
        'renewal_term_period_type' => 'setRenewalTermPeriodType',
        'resume_date' => 'setResumeDate',
        'service_activation_date' => 'setServiceActivationDate',
        'specific_update_date' => 'setSpecificUpdateDate',
        'status' => 'setStatus',
        'success' => 'setSuccess',
        'suspend_date' => 'setSuspendDate',
        'term_start_date' => 'setTermStartDate',
        'term_type' => 'setTermType',
        'type' => 'setType'
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
        'auto_renew' => 'getAutoRenew',
        'base_rate_plan_id' => 'getBaseRatePlanId',
        'base_subscription_id' => 'getBaseSubscriptionId',
        'code' => 'getCode',
        'contract_effective_date' => 'getContractEffectiveDate',
        'current_term' => 'getCurrentTerm',
        'current_term_period_type' => 'getCurrentTermPeriodType',
        'customer_acceptance_date' => 'getCustomerAcceptanceDate',
        'description' => 'getDescription',
        'destination_account_id' => 'getDestinationAccountId',
        'destination_invoice_owner_id' => 'getDestinationInvoiceOwnerId',
        'effective_date' => 'getEffectiveDate',
        'id' => 'getId',
        'name' => 'getName',
        'new_rate_plan_id' => 'getNewRatePlanId',
        'new_subscription_id' => 'getNewSubscriptionId',
        'renewal_setting' => 'getRenewalSetting',
        'renewal_term' => 'getRenewalTerm',
        'renewal_term_period_type' => 'getRenewalTermPeriodType',
        'resume_date' => 'getResumeDate',
        'service_activation_date' => 'getServiceActivationDate',
        'specific_update_date' => 'getSpecificUpdateDate',
        'status' => 'getStatus',
        'success' => 'getSuccess',
        'suspend_date' => 'getSuspendDate',
        'term_start_date' => 'getTermStartDate',
        'term_type' => 'getTermType',
        'type' => 'getType'
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
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
        $this->container['base_rate_plan_id'] = isset($data['base_rate_plan_id']) ? $data['base_rate_plan_id'] : null;
        $this->container['base_subscription_id'] = isset($data['base_subscription_id']) ? $data['base_subscription_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['contract_effective_date'] = isset($data['contract_effective_date']) ? $data['contract_effective_date'] : null;
        $this->container['current_term'] = isset($data['current_term']) ? $data['current_term'] : null;
        $this->container['current_term_period_type'] = isset($data['current_term_period_type']) ? $data['current_term_period_type'] : null;
        $this->container['customer_acceptance_date'] = isset($data['customer_acceptance_date']) ? $data['customer_acceptance_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destination_account_id'] = isset($data['destination_account_id']) ? $data['destination_account_id'] : null;
        $this->container['destination_invoice_owner_id'] = isset($data['destination_invoice_owner_id']) ? $data['destination_invoice_owner_id'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['new_rate_plan_id'] = isset($data['new_rate_plan_id']) ? $data['new_rate_plan_id'] : null;
        $this->container['new_subscription_id'] = isset($data['new_subscription_id']) ? $data['new_subscription_id'] : null;
        $this->container['renewal_setting'] = isset($data['renewal_setting']) ? $data['renewal_setting'] : null;
        $this->container['renewal_term'] = isset($data['renewal_term']) ? $data['renewal_term'] : null;
        $this->container['renewal_term_period_type'] = isset($data['renewal_term_period_type']) ? $data['renewal_term_period_type'] : null;
        $this->container['resume_date'] = isset($data['resume_date']) ? $data['resume_date'] : null;
        $this->container['service_activation_date'] = isset($data['service_activation_date']) ? $data['service_activation_date'] : null;
        $this->container['specific_update_date'] = isset($data['specific_update_date']) ? $data['specific_update_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['suspend_date'] = isset($data['suspend_date']) ? $data['suspend_date'] : null;
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_type'] = isset($data['term_type']) ? $data['term_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets auto_renew
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     * @param bool $auto_renew Determines whether the subscription is automatically renewed, or whether it expires at the end of the term and needs to be manually renewed.
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets base_rate_plan_id
     * @return string
     */
    public function getBaseRatePlanId()
    {
        return $this->container['base_rate_plan_id'];
    }

    /**
     * Sets base_rate_plan_id
     * @param string $base_rate_plan_id The rate plan ID on which changes are made. Only the Update or Remove amendment returns a base rate plan ID.
     * @return $this
     */
    public function setBaseRatePlanId($base_rate_plan_id)
    {
        $this->container['base_rate_plan_id'] = $base_rate_plan_id;

        return $this;
    }

    /**
     * Gets base_subscription_id
     * @return string
     */
    public function getBaseSubscriptionId()
    {
        return $this->container['base_subscription_id'];
    }

    /**
     * Sets base_subscription_id
     * @param string $base_subscription_id The ID of the subscription based on which the amendment is created.
     * @return $this
     */
    public function setBaseSubscriptionId($base_subscription_id)
    {
        $this->container['base_subscription_id'] = $base_subscription_id;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code The amendment code.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets contract_effective_date
     * @return \DateTime
     */
    public function getContractEffectiveDate()
    {
        return $this->container['contract_effective_date'];
    }

    /**
     * Sets contract_effective_date
     * @param \DateTime $contract_effective_date The date when the amendment becomes effective for billing purposes, as `yyyy-mm-dd`.
     * @return $this
     */
    public function setContractEffectiveDate($contract_effective_date)
    {
        $this->container['contract_effective_date'] = $contract_effective_date;

        return $this;
    }

    /**
     * Gets current_term
     * @return int
     */
    public function getCurrentTerm()
    {
        return $this->container['current_term'];
    }

    /**
     * Sets current_term
     * @param int $current_term The length of the period for the current subscription term.
     * @return $this
     */
    public function setCurrentTerm($current_term)
    {
        $this->container['current_term'] = $current_term;

        return $this;
    }

    /**
     * Gets current_term_period_type
     * @return string
     */
    public function getCurrentTermPeriodType()
    {
        return $this->container['current_term_period_type'];
    }

    /**
     * Sets current_term_period_type
     * @param string $current_term_period_type The period type for the current subscription term. Possible values are:  - Month - Year - Day - Week
     * @return $this
     */
    public function setCurrentTermPeriodType($current_term_period_type)
    {
        $this->container['current_term_period_type'] = $current_term_period_type;

        return $this;
    }

    /**
     * Gets customer_acceptance_date
     * @return \DateTime
     */
    public function getCustomerAcceptanceDate()
    {
        return $this->container['customer_acceptance_date'];
    }

    /**
     * Sets customer_acceptance_date
     * @param \DateTime $customer_acceptance_date The date when the customer accepts the amendment changes to the subscription, as `yyyy-mm-dd`.
     * @return $this
     */
    public function setCustomerAcceptanceDate($customer_acceptance_date)
    {
        $this->container['customer_acceptance_date'] = $customer_acceptance_date;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the amendment.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination_account_id
     * @return string
     */
    public function getDestinationAccountId()
    {
        return $this->container['destination_account_id'];
    }

    /**
     * Sets destination_account_id
     * @param string $destination_account_id The ID of the account that the subscription is being transferred to.
     * @return $this
     */
    public function setDestinationAccountId($destination_account_id)
    {
        $this->container['destination_account_id'] = $destination_account_id;

        return $this;
    }

    /**
     * Gets destination_invoice_owner_id
     * @return string
     */
    public function getDestinationInvoiceOwnerId()
    {
        return $this->container['destination_invoice_owner_id'];
    }

    /**
     * Sets destination_invoice_owner_id
     * @param string $destination_invoice_owner_id The ID of the invoice that the subscription is being transferred to.
     * @return $this
     */
    public function setDestinationInvoiceOwnerId($destination_invoice_owner_id)
    {
        $this->container['destination_invoice_owner_id'] = $destination_invoice_owner_id;

        return $this;
    }

    /**
     * Gets effective_date
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     * @param \DateTime $effective_date The date when the amendment changes take effective.
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

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
     * @param string $id The amendment ID.
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
     * @param string $name The name of the amendment.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets new_rate_plan_id
     * @return string
     */
    public function getNewRatePlanId()
    {
        return $this->container['new_rate_plan_id'];
    }

    /**
     * Sets new_rate_plan_id
     * @param string $new_rate_plan_id The ID of the rate plan charge on which amendment is made. Only the Add or Update amendment returns a new rate plan ID.
     * @return $this
     */
    public function setNewRatePlanId($new_rate_plan_id)
    {
        $this->container['new_rate_plan_id'] = $new_rate_plan_id;

        return $this;
    }

    /**
     * Gets new_subscription_id
     * @return string
     */
    public function getNewSubscriptionId()
    {
        return $this->container['new_subscription_id'];
    }

    /**
     * Sets new_subscription_id
     * @param string $new_subscription_id The ID of the subscription that the amendment changes.
     * @return $this
     */
    public function setNewSubscriptionId($new_subscription_id)
    {
        $this->container['new_subscription_id'] = $new_subscription_id;

        return $this;
    }

    /**
     * Gets renewal_setting
     * @return string
     */
    public function getRenewalSetting()
    {
        return $this->container['renewal_setting'];
    }

    /**
     * Sets renewal_setting
     * @param string $renewal_setting Specifies whether a termed subscription will remain termed or change to evergreen when it is renewed. Possible values are:  - RENEW_WITH_SPECIFIC_TERM - RENEW_TO_EVERGREEN
     * @return $this
     */
    public function setRenewalSetting($renewal_setting)
    {
        $this->container['renewal_setting'] = $renewal_setting;

        return $this;
    }

    /**
     * Gets renewal_term
     * @return int
     */
    public function getRenewalTerm()
    {
        return $this->container['renewal_term'];
    }

    /**
     * Sets renewal_term
     * @param int $renewal_term The term of renewal for the amended subscription.
     * @return $this
     */
    public function setRenewalTerm($renewal_term)
    {
        $this->container['renewal_term'] = $renewal_term;

        return $this;
    }

    /**
     * Gets renewal_term_period_type
     * @return string
     */
    public function getRenewalTermPeriodType()
    {
        return $this->container['renewal_term_period_type'];
    }

    /**
     * Sets renewal_term_period_type
     * @param string $renewal_term_period_type The period type for the subscription renewal term. Possible values are:  - Month - Year - Day - Week
     * @return $this
     */
    public function setRenewalTermPeriodType($renewal_term_period_type)
    {
        $this->container['renewal_term_period_type'] = $renewal_term_period_type;

        return $this;
    }

    /**
     * Gets resume_date
     * @return \DateTime
     */
    public function getResumeDate()
    {
        return $this->container['resume_date'];
    }

    /**
     * Sets resume_date
     * @param \DateTime $resume_date The date when the subscription resumption takes effect, as `yyyy-mm-dd`.  **Note:** This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setResumeDate($resume_date)
    {
        $this->container['resume_date'] = $resume_date;

        return $this;
    }

    /**
     * Gets service_activation_date
     * @return \DateTime
     */
    public function getServiceActivationDate()
    {
        return $this->container['service_activation_date'];
    }

    /**
     * Sets service_activation_date
     * @param \DateTime $service_activation_date The date when service is activated, as `yyyy-mm-dd`.
     * @return $this
     */
    public function setServiceActivationDate($service_activation_date)
    {
        $this->container['service_activation_date'] = $service_activation_date;

        return $this;
    }

    /**
     * Gets specific_update_date
     * @return \DateTime
     */
    public function getSpecificUpdateDate()
    {
        return $this->container['specific_update_date'];
    }

    /**
     * Sets specific_update_date
     * @param \DateTime $specific_update_date The date when the Update Product amendment takes effect.  Only for the Update Product amendments if there is already a future-dated Update Product amendment on the subscription.
     * @return $this
     */
    public function setSpecificUpdateDate($specific_update_date)
    {
        $this->container['specific_update_date'] = $specific_update_date;

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
     * @param string $status The status of the amendment. Possible values are:  - Draft  - Pending Activation - Pending Acceptance - Completed
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
     * Gets suspend_date
     * @return \DateTime
     */
    public function getSuspendDate()
    {
        return $this->container['suspend_date'];
    }

    /**
     * Sets suspend_date
     * @param \DateTime $suspend_date The date when the subscription suspension takes effect, as `yyyy-mm-dd`.  **Note:** This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setSuspendDate($suspend_date)
    {
        $this->container['suspend_date'] = $suspend_date;

        return $this;
    }

    /**
     * Gets term_start_date
     * @return \DateTime
     */
    public function getTermStartDate()
    {
        return $this->container['term_start_date'];
    }

    /**
     * Sets term_start_date
     * @param \DateTime $term_start_date The date when the new terms and conditions take effect.
     * @return $this
     */
    public function setTermStartDate($term_start_date)
    {
        $this->container['term_start_date'] = $term_start_date;

        return $this;
    }

    /**
     * Gets term_type
     * @return string
     */
    public function getTermType()
    {
        return $this->container['term_type'];
    }

    /**
     * Sets term_type
     * @param string $term_type Indicates if the subscription is `TERMED` or `EVERGREEN`.
     * @return $this
     */
    public function setTermType($term_type)
    {
        $this->container['term_type'] = $term_type;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of the amendment. Possible values are:  - Cancellation - NewProduct - OwnerTransfer - RemoveProduct - Renewal - UpdateProduct - TermsAndConditions
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


