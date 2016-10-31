<?php
/**
 * ProxyGetSubscription
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
 * ProxyGetSubscription Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProxyGetSubscription implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProxyGetSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_id' => 'string',
        'auto_renew' => 'bool',
        'cancelled_date' => '\DateTime',
        'contract_acceptance_date' => '\DateTime',
        'contract_effective_date' => '\DateTime',
        'cpq_bundle_json_id__qt' => 'string',
        'created_by_id' => 'string',
        'created_date' => '\DateTime',
        'creator_account_id' => 'string',
        'creator_invoice_owner_id' => 'string',
        'current_term' => 'int',
        'current_term_period_type' => 'string',
        'id' => 'string',
        'initial_term' => 'int',
        'initial_term_period_type' => 'string',
        'invoice_owner_id' => 'string',
        'is_invoice_separate' => 'bool',
        'name' => 'string',
        'notes' => 'string',
        'opportunity_close_date__qt' => '\DateTime',
        'opportunity_name__qt' => 'string',
        'original_created_date' => '\DateTime',
        'original_id' => 'string',
        'previous_subscription_id' => 'string',
        'quote_business_type__qt' => 'string',
        'quote_number__qt' => 'string',
        'quote_type__qt' => 'string',
        'renewal_setting' => 'string',
        'renewal_term' => 'int',
        'renewal_term_period_type' => 'string',
        'service_activation_date' => '\DateTime',
        'status' => 'string',
        'subscription_end_date' => '\DateTime',
        'subscription_start_date' => '\DateTime',
        'term_end_date' => '\DateTime',
        'term_start_date' => '\DateTime',
        'term_type' => 'string',
        'updated_by_id' => 'string',
        'updated_date' => '\DateTime',
        'version' => 'int'
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
        'account_id' => 'AccountId',
        'auto_renew' => 'AutoRenew',
        'cancelled_date' => 'CancelledDate',
        'contract_acceptance_date' => 'ContractAcceptanceDate',
        'contract_effective_date' => 'ContractEffectiveDate',
        'cpq_bundle_json_id__qt' => 'CpqBundleJsonId__QT',
        'created_by_id' => 'CreatedById',
        'created_date' => 'CreatedDate',
        'creator_account_id' => 'CreatorAccountId',
        'creator_invoice_owner_id' => 'CreatorInvoiceOwnerId',
        'current_term' => 'CurrentTerm',
        'current_term_period_type' => 'CurrentTermPeriodType',
        'id' => 'Id',
        'initial_term' => 'InitialTerm',
        'initial_term_period_type' => 'InitialTermPeriodType',
        'invoice_owner_id' => 'InvoiceOwnerId',
        'is_invoice_separate' => 'IsInvoiceSeparate',
        'name' => 'Name',
        'notes' => 'Notes',
        'opportunity_close_date__qt' => 'OpportunityCloseDate__QT',
        'opportunity_name__qt' => 'OpportunityName__QT',
        'original_created_date' => 'OriginalCreatedDate',
        'original_id' => 'OriginalId',
        'previous_subscription_id' => 'PreviousSubscriptionId',
        'quote_business_type__qt' => 'QuoteBusinessType__QT',
        'quote_number__qt' => 'QuoteNumber__QT',
        'quote_type__qt' => 'QuoteType__QT',
        'renewal_setting' => 'RenewalSetting',
        'renewal_term' => 'RenewalTerm',
        'renewal_term_period_type' => 'RenewalTermPeriodType',
        'service_activation_date' => 'ServiceActivationDate',
        'status' => 'Status',
        'subscription_end_date' => 'SubscriptionEndDate',
        'subscription_start_date' => 'SubscriptionStartDate',
        'term_end_date' => 'TermEndDate',
        'term_start_date' => 'TermStartDate',
        'term_type' => 'TermType',
        'updated_by_id' => 'UpdatedById',
        'updated_date' => 'UpdatedDate',
        'version' => 'Version'
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
        'auto_renew' => 'setAutoRenew',
        'cancelled_date' => 'setCancelledDate',
        'contract_acceptance_date' => 'setContractAcceptanceDate',
        'contract_effective_date' => 'setContractEffectiveDate',
        'cpq_bundle_json_id__qt' => 'setCpqBundleJsonIdQt',
        'created_by_id' => 'setCreatedById',
        'created_date' => 'setCreatedDate',
        'creator_account_id' => 'setCreatorAccountId',
        'creator_invoice_owner_id' => 'setCreatorInvoiceOwnerId',
        'current_term' => 'setCurrentTerm',
        'current_term_period_type' => 'setCurrentTermPeriodType',
        'id' => 'setId',
        'initial_term' => 'setInitialTerm',
        'initial_term_period_type' => 'setInitialTermPeriodType',
        'invoice_owner_id' => 'setInvoiceOwnerId',
        'is_invoice_separate' => 'setIsInvoiceSeparate',
        'name' => 'setName',
        'notes' => 'setNotes',
        'opportunity_close_date__qt' => 'setOpportunityCloseDateQt',
        'opportunity_name__qt' => 'setOpportunityNameQt',
        'original_created_date' => 'setOriginalCreatedDate',
        'original_id' => 'setOriginalId',
        'previous_subscription_id' => 'setPreviousSubscriptionId',
        'quote_business_type__qt' => 'setQuoteBusinessTypeQt',
        'quote_number__qt' => 'setQuoteNumberQt',
        'quote_type__qt' => 'setQuoteTypeQt',
        'renewal_setting' => 'setRenewalSetting',
        'renewal_term' => 'setRenewalTerm',
        'renewal_term_period_type' => 'setRenewalTermPeriodType',
        'service_activation_date' => 'setServiceActivationDate',
        'status' => 'setStatus',
        'subscription_end_date' => 'setSubscriptionEndDate',
        'subscription_start_date' => 'setSubscriptionStartDate',
        'term_end_date' => 'setTermEndDate',
        'term_start_date' => 'setTermStartDate',
        'term_type' => 'setTermType',
        'updated_by_id' => 'setUpdatedById',
        'updated_date' => 'setUpdatedDate',
        'version' => 'setVersion'
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
        'auto_renew' => 'getAutoRenew',
        'cancelled_date' => 'getCancelledDate',
        'contract_acceptance_date' => 'getContractAcceptanceDate',
        'contract_effective_date' => 'getContractEffectiveDate',
        'cpq_bundle_json_id__qt' => 'getCpqBundleJsonIdQt',
        'created_by_id' => 'getCreatedById',
        'created_date' => 'getCreatedDate',
        'creator_account_id' => 'getCreatorAccountId',
        'creator_invoice_owner_id' => 'getCreatorInvoiceOwnerId',
        'current_term' => 'getCurrentTerm',
        'current_term_period_type' => 'getCurrentTermPeriodType',
        'id' => 'getId',
        'initial_term' => 'getInitialTerm',
        'initial_term_period_type' => 'getInitialTermPeriodType',
        'invoice_owner_id' => 'getInvoiceOwnerId',
        'is_invoice_separate' => 'getIsInvoiceSeparate',
        'name' => 'getName',
        'notes' => 'getNotes',
        'opportunity_close_date__qt' => 'getOpportunityCloseDateQt',
        'opportunity_name__qt' => 'getOpportunityNameQt',
        'original_created_date' => 'getOriginalCreatedDate',
        'original_id' => 'getOriginalId',
        'previous_subscription_id' => 'getPreviousSubscriptionId',
        'quote_business_type__qt' => 'getQuoteBusinessTypeQt',
        'quote_number__qt' => 'getQuoteNumberQt',
        'quote_type__qt' => 'getQuoteTypeQt',
        'renewal_setting' => 'getRenewalSetting',
        'renewal_term' => 'getRenewalTerm',
        'renewal_term_period_type' => 'getRenewalTermPeriodType',
        'service_activation_date' => 'getServiceActivationDate',
        'status' => 'getStatus',
        'subscription_end_date' => 'getSubscriptionEndDate',
        'subscription_start_date' => 'getSubscriptionStartDate',
        'term_end_date' => 'getTermEndDate',
        'term_start_date' => 'getTermStartDate',
        'term_type' => 'getTermType',
        'updated_by_id' => 'getUpdatedById',
        'updated_date' => 'getUpdatedDate',
        'version' => 'getVersion'
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
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['contract_acceptance_date'] = isset($data['contract_acceptance_date']) ? $data['contract_acceptance_date'] : null;
        $this->container['contract_effective_date'] = isset($data['contract_effective_date']) ? $data['contract_effective_date'] : null;
        $this->container['cpq_bundle_json_id__qt'] = isset($data['cpq_bundle_json_id__qt']) ? $data['cpq_bundle_json_id__qt'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['creator_account_id'] = isset($data['creator_account_id']) ? $data['creator_account_id'] : null;
        $this->container['creator_invoice_owner_id'] = isset($data['creator_invoice_owner_id']) ? $data['creator_invoice_owner_id'] : null;
        $this->container['current_term'] = isset($data['current_term']) ? $data['current_term'] : null;
        $this->container['current_term_period_type'] = isset($data['current_term_period_type']) ? $data['current_term_period_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['initial_term'] = isset($data['initial_term']) ? $data['initial_term'] : null;
        $this->container['initial_term_period_type'] = isset($data['initial_term_period_type']) ? $data['initial_term_period_type'] : null;
        $this->container['invoice_owner_id'] = isset($data['invoice_owner_id']) ? $data['invoice_owner_id'] : null;
        $this->container['is_invoice_separate'] = isset($data['is_invoice_separate']) ? $data['is_invoice_separate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['opportunity_close_date__qt'] = isset($data['opportunity_close_date__qt']) ? $data['opportunity_close_date__qt'] : null;
        $this->container['opportunity_name__qt'] = isset($data['opportunity_name__qt']) ? $data['opportunity_name__qt'] : null;
        $this->container['original_created_date'] = isset($data['original_created_date']) ? $data['original_created_date'] : null;
        $this->container['original_id'] = isset($data['original_id']) ? $data['original_id'] : null;
        $this->container['previous_subscription_id'] = isset($data['previous_subscription_id']) ? $data['previous_subscription_id'] : null;
        $this->container['quote_business_type__qt'] = isset($data['quote_business_type__qt']) ? $data['quote_business_type__qt'] : null;
        $this->container['quote_number__qt'] = isset($data['quote_number__qt']) ? $data['quote_number__qt'] : null;
        $this->container['quote_type__qt'] = isset($data['quote_type__qt']) ? $data['quote_type__qt'] : null;
        $this->container['renewal_setting'] = isset($data['renewal_setting']) ? $data['renewal_setting'] : null;
        $this->container['renewal_term'] = isset($data['renewal_term']) ? $data['renewal_term'] : null;
        $this->container['renewal_term_period_type'] = isset($data['renewal_term_period_type']) ? $data['renewal_term_period_type'] : null;
        $this->container['service_activation_date'] = isset($data['service_activation_date']) ? $data['service_activation_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subscription_end_date'] = isset($data['subscription_end_date']) ? $data['subscription_end_date'] : null;
        $this->container['subscription_start_date'] = isset($data['subscription_start_date']) ? $data['subscription_start_date'] : null;
        $this->container['term_end_date'] = isset($data['term_end_date']) ? $data['term_end_date'] : null;
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_type'] = isset($data['term_type']) ? $data['term_type'] : null;
        $this->container['updated_by_id'] = isset($data['updated_by_id']) ? $data['updated_by_id'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * @param string $account_id This field can be updated when **Status** is `Draft`. The ID of the [a valid account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account)
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
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
     * @param bool $auto_renew This field can be updated when **Status** is `Draft`. Indicates if the subscription automatically renews at the end of the term. **Values**: `true`, `false`
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets cancelled_date
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     * @param \DateTime $cancelled_date The date of the [Amendment object](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Amendment) that canceled the subscription. **Values**: inherited from `Amendment.EffectiveDate`
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets contract_acceptance_date
     * @return \DateTime
     */
    public function getContractAcceptanceDate()
    {
        return $this->container['contract_acceptance_date'];
    }

    /**
     * Sets contract_acceptance_date
     * @param \DateTime $contract_acceptance_date The date when the customer accepts the contract. This field can be updated when **Status** is `Draft`. **Note**: The service activation date is only required if the [Require Service Activation of Orders?](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Default_Subscription_Settings#Require_Service_Activation_of_Orders.3F) Setting is set to `Yes`. If this setting is set to `Yes`:  - If ContractAcceptanceDate field is required, you must set this field, ContractAcceptanceDate, and ContractEffectiveDate fields in the subscribe call to activate a subscription. - If ContractAcceptanceDate field is not required, you must set both this field and the ContractEffectiveDate field in the subscribe call to activate a subscription. If you only set a valid date in the ContractEffectiveDate field, the subscribe call still returns success, but the subscription is in `DRAT` status.
     * @return $this
     */
    public function setContractAcceptanceDate($contract_acceptance_date)
    {
        $this->container['contract_acceptance_date'] = $contract_acceptance_date;

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
     * @param \DateTime $contract_effective_date The date when the contract takes effect. This field can be updated when **Status** is `Draft`. **Note**: This field is required in the subscribe call. If you set the value of this field to null and both the ServiceActivationDate and ContractAcceptanceDate fields are not required, the subscribe call still returns success, but the new subscription is in `DRAFT` status. To activate the subscription, you must set a valid date to this field.
     * @return $this
     */
    public function setContractEffectiveDate($contract_effective_date)
    {
        $this->container['contract_effective_date'] = $contract_effective_date;

        return $this;
    }

    /**
     * Gets cpq_bundle_json_id__qt
     * @return string
     */
    public function getCpqBundleJsonIdQt()
    {
        return $this->container['cpq_bundle_json_id__qt'];
    }

    /**
     * Sets cpq_bundle_json_id__qt
     * @param string $cpq_bundle_json_id__qt The Bundle product structures from Zuora Quotes if you utilize Bundling in Salesforce. Do not change the value in this field. **Character limit**: 32 **Values**: N/A
     * @return $this
     */
    public function setCpqBundleJsonIdQt($cpq_bundle_json_id__qt)
    {
        $this->container['cpq_bundle_json_id__qt'] = $cpq_bundle_json_id__qt;

        return $this;
    }

    /**
     * Gets created_by_id
     * @return string
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     * @param string $created_by_id The user ID of the person who created the subscription. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

        return $this;
    }

    /**
     * Gets created_date
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param \DateTime $created_date The date the subscription was created. This value is the same as the OriginalCreatedDate value until the subscription is amended. **Values**: automatically generated
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets creator_account_id
     * @return string
     */
    public function getCreatorAccountId()
    {
        return $this->container['creator_account_id'];
    }

    /**
     * Sets creator_account_id
     * @param string $creator_account_id The account ID that created the subscription or the amended subscription. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setCreatorAccountId($creator_account_id)
    {
        $this->container['creator_account_id'] = $creator_account_id;

        return $this;
    }

    /**
     * Gets creator_invoice_owner_id
     * @return string
     */
    public function getCreatorInvoiceOwnerId()
    {
        return $this->container['creator_invoice_owner_id'];
    }

    /**
     * Sets creator_invoice_owner_id
     * @param string $creator_invoice_owner_id The [account](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account) ID that owns the invoices associated with the subscription or the amended subscription. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setCreatorInvoiceOwnerId($creator_invoice_owner_id)
    {
        $this->container['creator_invoice_owner_id'] = $creator_invoice_owner_id;

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
     * @param int $current_term The length of the period for the current subscription term. If TermType is set to `TERMED`, this field is required and must be greater than `0`. If TermType is set to `EVERGREEN`, this value is ignored. Default is `0`. **Character limit**: 20 **Values**: automatically generated
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
     * @param string $current_term_period_type The period type for the current subscription term. This field is used with the CurrentTerm field to specify the current subscription term. **Values**:  - `Month` (default) - `Year` - `Day` - `Week`
     * @return $this
     */
    public function setCurrentTermPeriodType($current_term_period_type)
    {
        $this->container['current_term_period_type'] = $current_term_period_type;

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
     * @param string $id Object identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets initial_term
     * @return int
     */
    public function getInitialTerm()
    {
        return $this->container['initial_term'];
    }

    /**
     * Sets initial_term
     * @param int $initial_term The length of the period for the first subscription term. This field can be updated when Status is `Draft`. If you use the subscribe() call, this field is required. **Required**: If TermType is Termed **Character limit**: 20 **Values**: any valid number. The default value is 0.
     * @return $this
     */
    public function setInitialTerm($initial_term)
    {
        $this->container['initial_term'] = $initial_term;

        return $this;
    }

    /**
     * Gets initial_term_period_type
     * @return string
     */
    public function getInitialTermPeriodType()
    {
        return $this->container['initial_term_period_type'];
    }

    /**
     * Sets initial_term_period_type
     * @param string $initial_term_period_type The period type for the first subscription term. **Values**:  - `Month` (default) - `Year` - `Day` - `Week` **Note**:  - This field can be updated when Status is `Draft`. - This field is used with the InitialTerm field to specify the initial subscription term.
     * @return $this
     */
    public function setInitialTermPeriodType($initial_term_period_type)
    {
        $this->container['initial_term_period_type'] = $initial_term_period_type;

        return $this;
    }

    /**
     * Gets invoice_owner_id
     * @return string
     */
    public function getInvoiceOwnerId()
    {
        return $this->container['invoice_owner_id'];
    }

    /**
     * Sets invoice_owner_id
     * @param string $invoice_owner_id This field can be updated when **Status** is `Draft`. The [a valid account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account)
     * @return $this
     */
    public function setInvoiceOwnerId($invoice_owner_id)
    {
        $this->container['invoice_owner_id'] = $invoice_owner_id;

        return $this;
    }

    /**
     * Gets is_invoice_separate
     * @return bool
     */
    public function getIsInvoiceSeparate()
    {
        return $this->container['is_invoice_separate'];
    }

    /**
     * Sets is_invoice_separate
     * @param bool $is_invoice_separate Determines if the subscription is invoiced separately. If `TRUE`, then all charges for this subscription are collected into the subscription's own invoice. **V****alues**: `TRUE`, `FALSE `(default)
     * @return $this
     */
    public function setIsInvoiceSeparate($is_invoice_separate)
    {
        $this->container['is_invoice_separate'] = $is_invoice_separate;

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
     * @param string $name The unique identifier of the subscription. If you don't specify a value, then Zuora generates a name automatically. Whether auto-generated or manually specified, the subscription name must be unique. Otherwise an error will occur. In WSDL 69+, you can change this value only when the subscription is in `Draft` status. Once the subscription is activated, you can't change this value, nor can you use this value for a different subscription. **Character limit**: 100 **Values**: one of the following:  - leave null to automatically generate - a string of 100 characters or fewer
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
     * @param string $notes Use this field to record comments about the subscription. **Character limit**: 500 **Values**: a string of 500 characters or fewer
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets opportunity_close_date__qt
     * @return \DateTime
     */
    public function getOpportunityCloseDateQt()
    {
        return $this->container['opportunity_close_date__qt'];
    }

    /**
     * Sets opportunity_close_date__qt
     * @param \DateTime $opportunity_close_date__qt The closing date of the Opportunity. This field is used in Zuora Reporting Data Sources to report on Subscription metrics. If the subscription was originated from Zuora Quotes, the value is populated with the value from Zuora Quotes. **Character limit**: **Values**: populated by Zuora Quotes
     * @return $this
     */
    public function setOpportunityCloseDateQt($opportunity_close_date__qt)
    {
        $this->container['opportunity_close_date__qt'] = $opportunity_close_date__qt;

        return $this;
    }

    /**
     * Gets opportunity_name__qt
     * @return string
     */
    public function getOpportunityNameQt()
    {
        return $this->container['opportunity_name__qt'];
    }

    /**
     * Sets opportunity_name__qt
     * @param string $opportunity_name__qt The unique identifier of the Opportunity. This field is used in the Zuora Reporting Data Sources to report on Subscription metrics. If the subscription was originated from Zuora Quotes, the value is populated with the value from Zuora Quotes. **Character limit**: 100 **Values**: populated by Zuora Quotes
     * @return $this
     */
    public function setOpportunityNameQt($opportunity_name__qt)
    {
        $this->container['opportunity_name__qt'] = $opportunity_name__qt;

        return $this;
    }

    /**
     * Gets original_created_date
     * @return \DateTime
     */
    public function getOriginalCreatedDate()
    {
        return $this->container['original_created_date'];
    }

    /**
     * Sets original_created_date
     * @param \DateTime $original_created_date The date when the subscription was originally created. This value is the same as the CreatedDate value until the subscription is amended. **Values**: automatically generated
     * @return $this
     */
    public function setOriginalCreatedDate($original_created_date)
    {
        $this->container['original_created_date'] = $original_created_date;

        return $this;
    }

    /**
     * Gets original_id
     * @return string
     */
    public function getOriginalId()
    {
        return $this->container['original_id'];
    }

    /**
     * Sets original_id
     * @param string $original_id The original ID of this subscription. **Values**: automatically generated
     * @return $this
     */
    public function setOriginalId($original_id)
    {
        $this->container['original_id'] = $original_id;

        return $this;
    }

    /**
     * Gets previous_subscription_id
     * @return string
     */
    public function getPreviousSubscriptionId()
    {
        return $this->container['previous_subscription_id'];
    }

    /**
     * Sets previous_subscription_id
     * @param string $previous_subscription_id The subscription ID immediately prior to the current subscription. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setPreviousSubscriptionId($previous_subscription_id)
    {
        $this->container['previous_subscription_id'] = $previous_subscription_id;

        return $this;
    }

    /**
     * Gets quote_business_type__qt
     * @return string
     */
    public function getQuoteBusinessTypeQt()
    {
        return $this->container['quote_business_type__qt'];
    }

    /**
     * Sets quote_business_type__qt
     * @param string $quote_business_type__qt The specific identifier for the type of business transaction the Quote represents such as New, Upsell, Downsell, Renewal or Churn. This field is used in the Zuora Reporting Data Sources to report on Subscription metrics. If the subscription was originated from Zuora Quotes, the value is populated with the value from Zuora Quotes. **Character limit**: 32 **Values**: populated by Zuora Quotes
     * @return $this
     */
    public function setQuoteBusinessTypeQt($quote_business_type__qt)
    {
        $this->container['quote_business_type__qt'] = $quote_business_type__qt;

        return $this;
    }

    /**
     * Gets quote_number__qt
     * @return string
     */
    public function getQuoteNumberQt()
    {
        return $this->container['quote_number__qt'];
    }

    /**
     * Sets quote_number__qt
     * @param string $quote_number__qt The unique identifier of the Quote. This field is used in the Zuora Reporting Data Sources to report on Subscription metrics. If the subscription was originated from Zuora Quotes, the value is populated with the value from Zuora Quotes. **Character limit**: 32 **Values**: populated by Zuora Quotes
     * @return $this
     */
    public function setQuoteNumberQt($quote_number__qt)
    {
        $this->container['quote_number__qt'] = $quote_number__qt;

        return $this;
    }

    /**
     * Gets quote_type__qt
     * @return string
     */
    public function getQuoteTypeQt()
    {
        return $this->container['quote_type__qt'];
    }

    /**
     * Sets quote_type__qt
     * @param string $quote_type__qt The Quote type that represents the subscription lifecycle stage such as New, Amendment, Renew or Cancel. This field is used in the Zuora Reporting Data Sources to report on Subscription metrics. If the subscription was originated from Zuora Quotes, the value is populated with the value from Zuora Quotes. **Character limit**: 32 **Values**: populated by Zuora Quotes
     * @return $this
     */
    public function setQuoteTypeQt($quote_type__qt)
    {
        $this->container['quote_type__qt'] = $quote_type__qt;

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
     * @param string $renewal_setting This field can be updated when **Status** is `Draft`. Specifies whether a termed subscription will remain termed or change to evergreen when it is renewed. **Required**: If TermType is Termed **Values**: `RENEW_WITH_SPECIFIC_TERM `(default), `RENEW_TO_EVERGREEN`
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
     * @param int $renewal_term The length of the period for the subscription renewal term. This field can be updated when **Status** is `Draft`. If you use the subscribe() call, this field is required. **Required**: If TermType is Termed. **Character limit**: 20 **Values**: one of the following:  - leave null to default to `0` - any number
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
     * @param string $renewal_term_period_type The period type for the subscription renewal term. **Values**:  - `Month` (default) - `Year` - `Day` - `Week` **Note**:  - This field is used with the RenewalTerm field to specify the subscription renewal term. - This field can be updated when Status is `Draft`.
     * @return $this
     */
    public function setRenewalTermPeriodType($renewal_term_period_type)
    {
        $this->container['renewal_term_period_type'] = $renewal_term_period_type;

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
     * @param \DateTime $service_activation_date The date when the subscription is activated. This field can be updated when **Status** is `Draft`. **Character limit**: 29 **Note**: The service activation date is only required if the [Require Service Activation of Orders?](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Default_Subscription_Settings#Require_Service_Activation_of_Orders.3F) Setting is set to `Yes`. If this setting is set to `Yes`:  - If ContractAcceptanceDate field is required, you must set this field, ContractAcceptanceDate, and ContractEffectiveDate fields in the subscribe call to activate a subscription. - If ContractAcceptanceDate field is not required, you must set both this field and the ContractEffectiveDate field in the subscribe call to activate a subscription. If you only set a valid date in the ContractEffectiveDate field, the subscribe call still returns success, but the subscription is in `DRAT` status.
     * @return $this
     */
    public function setServiceActivationDate($service_activation_date)
    {
        $this->container['service_activation_date'] = $service_activation_date;

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
     * @param string $status The status of the subscription. **Character limit**: 17 **Values**: automatically generated **Possible values**: one of the following:  - `Draft` - `PendingActivation` - `PendingAcceptance` - `Active` - `Cancelled` - `Expired` - `Suspended` (This value is in **Limited Availability**.)
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subscription_end_date
     * @return \DateTime
     */
    public function getSubscriptionEndDate()
    {
        return $this->container['subscription_end_date'];
    }

    /**
     * Sets subscription_end_date
     * @param \DateTime $subscription_end_date The date when the subscription term ends, where the subscription ends at midnight the day before. For example, if the SubscriptionEndDate is 12/31/2016, the subscriptions ends at midnight (00:00:00 hours) on 12/30/2016. This date is the same as the term end date or the cancelation date, as appropriate. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setSubscriptionEndDate($subscription_end_date)
    {
        $this->container['subscription_end_date'] = $subscription_end_date;

        return $this;
    }

    /**
     * Gets subscription_start_date
     * @return \DateTime
     */
    public function getSubscriptionStartDate()
    {
        return $this->container['subscription_start_date'];
    }

    /**
     * Sets subscription_start_date
     * @param \DateTime $subscription_start_date The date when the subscription term starts. This date is the same as the start date of the original term, which isn't necessarily the start date of the current or new term. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setSubscriptionStartDate($subscription_start_date)
    {
        $this->container['subscription_start_date'] = $subscription_start_date;

        return $this;
    }

    /**
     * Gets term_end_date
     * @return \DateTime
     */
    public function getTermEndDate()
    {
        return $this->container['term_end_date'];
    }

    /**
     * Sets term_end_date
     * @param \DateTime $term_end_date This field can be updated when **Status** is `Draft`. The date when the subscription term ends. If the subscription is evergreen, the TermEndDate value is null or is the cancelation date, as appropriate. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setTermEndDate($term_end_date)
    {
        $this->container['term_end_date'] = $term_end_date;

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
     * @param \DateTime $term_start_date This field can be updated when **Status** is `Draft`. The date when the subscription term begins. If this is a renewal subscription, then this date is different from the subscription start date. **Character limit**: 29 **Version notes**: --
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
     * @param string $term_type This field can be updated when **Status** is `Draft`. Indicates if a subscription is [termed or evergreen](https://knowledgecenter.zuora.com/BC_Subscription_Management/Subscriptions#Termed_and_Evergreen_Subscriptions). A termed subscription has a specific end date and requires manual renewal. An evergreen subscription doesn't have an end date and doesn't need renewal. This field can be updated when the subscription status is Draft. **Character limit**: 9 **Values**: `TERMED`, `EVERGREEN`
     * @return $this
     */
    public function setTermType($term_type)
    {
        $this->container['term_type'] = $term_type;

        return $this;
    }

    /**
     * Gets updated_by_id
     * @return string
     */
    public function getUpdatedById()
    {
        return $this->container['updated_by_id'];
    }

    /**
     * Sets updated_by_id
     * @param string $updated_by_id The ID of the user who last updated the subscription. **Character limit:** 32 **Values: **automatically generated
     * @return $this
     */
    public function setUpdatedById($updated_by_id)
    {
        $this->container['updated_by_id'] = $updated_by_id;

        return $this;
    }

    /**
     * Gets updated_date
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     * @param \DateTime $updated_date The date when the subscription was last updated. **Character limit:** 29 **Values**: automatically generated
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version The version number of the subscription. **Values**: automatically generated
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


