<?php
/**
 * POSTSubscriptionPreviewType
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
 * POSTSubscriptionPreviewType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class POSTSubscriptionPreviewType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'POSTSubscriptionPreviewType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'opportunity_close_date_qt' => 'string',
        'opportunity_name_qt' => 'string',
        'quote_business_type_qt' => 'string',
        'quote_number_qt' => 'string',
        'quote_type_qt' => 'string',
        'account_key' => 'string',
        'contract_effective_date' => '\DateTime',
        'customer_acceptance_date' => '\DateTime',
        'include_existing_draft_invoice_items' => 'bool',
        'initial_term' => 'int',
        'initial_term_period_type' => 'string',
        'invoice_owner_account_key' => 'string',
        'invoice_target_date' => '\DateTime',
        'notes' => 'string',
        'preview_account_info' => '\Swagger\Client\Model\POSTSubscriptionPreviewTypePreviewAccountInfo',
        'preview_type' => 'string',
        'service_activation_date' => '\DateTime',
        'subscribe_to_rate_plans' => '\Swagger\Client\Model\POSTSrpCreateType[]',
        'term_start_date' => '\DateTime',
        'term_type' => 'string'
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
        'opportunity_close_date_qt' => 'OpportunityCloseDate_QT',
        'opportunity_name_qt' => 'OpportunityName_QT',
        'quote_business_type_qt' => 'QuoteBusinessType_QT',
        'quote_number_qt' => 'QuoteNumber_QT',
        'quote_type_qt' => 'QuoteType_QT',
        'account_key' => 'accountKey',
        'contract_effective_date' => 'contractEffectiveDate',
        'customer_acceptance_date' => 'customerAcceptanceDate',
        'include_existing_draft_invoice_items' => 'includeExistingDraftInvoiceItems',
        'initial_term' => 'initialTerm',
        'initial_term_period_type' => 'initialTermPeriodType',
        'invoice_owner_account_key' => 'invoiceOwnerAccountKey',
        'invoice_target_date' => 'invoiceTargetDate',
        'notes' => 'notes',
        'preview_account_info' => 'previewAccountInfo',
        'preview_type' => 'previewType',
        'service_activation_date' => 'serviceActivationDate',
        'subscribe_to_rate_plans' => 'subscribeToRatePlans',
        'term_start_date' => 'termStartDate',
        'term_type' => 'termType'
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
        'opportunity_close_date_qt' => 'setOpportunityCloseDateQt',
        'opportunity_name_qt' => 'setOpportunityNameQt',
        'quote_business_type_qt' => 'setQuoteBusinessTypeQt',
        'quote_number_qt' => 'setQuoteNumberQt',
        'quote_type_qt' => 'setQuoteTypeQt',
        'account_key' => 'setAccountKey',
        'contract_effective_date' => 'setContractEffectiveDate',
        'customer_acceptance_date' => 'setCustomerAcceptanceDate',
        'include_existing_draft_invoice_items' => 'setIncludeExistingDraftInvoiceItems',
        'initial_term' => 'setInitialTerm',
        'initial_term_period_type' => 'setInitialTermPeriodType',
        'invoice_owner_account_key' => 'setInvoiceOwnerAccountKey',
        'invoice_target_date' => 'setInvoiceTargetDate',
        'notes' => 'setNotes',
        'preview_account_info' => 'setPreviewAccountInfo',
        'preview_type' => 'setPreviewType',
        'service_activation_date' => 'setServiceActivationDate',
        'subscribe_to_rate_plans' => 'setSubscribeToRatePlans',
        'term_start_date' => 'setTermStartDate',
        'term_type' => 'setTermType'
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
        'opportunity_close_date_qt' => 'getOpportunityCloseDateQt',
        'opportunity_name_qt' => 'getOpportunityNameQt',
        'quote_business_type_qt' => 'getQuoteBusinessTypeQt',
        'quote_number_qt' => 'getQuoteNumberQt',
        'quote_type_qt' => 'getQuoteTypeQt',
        'account_key' => 'getAccountKey',
        'contract_effective_date' => 'getContractEffectiveDate',
        'customer_acceptance_date' => 'getCustomerAcceptanceDate',
        'include_existing_draft_invoice_items' => 'getIncludeExistingDraftInvoiceItems',
        'initial_term' => 'getInitialTerm',
        'initial_term_period_type' => 'getInitialTermPeriodType',
        'invoice_owner_account_key' => 'getInvoiceOwnerAccountKey',
        'invoice_target_date' => 'getInvoiceTargetDate',
        'notes' => 'getNotes',
        'preview_account_info' => 'getPreviewAccountInfo',
        'preview_type' => 'getPreviewType',
        'service_activation_date' => 'getServiceActivationDate',
        'subscribe_to_rate_plans' => 'getSubscribeToRatePlans',
        'term_start_date' => 'getTermStartDate',
        'term_type' => 'getTermType'
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
        $this->container['opportunity_close_date_qt'] = isset($data['opportunity_close_date_qt']) ? $data['opportunity_close_date_qt'] : null;
        $this->container['opportunity_name_qt'] = isset($data['opportunity_name_qt']) ? $data['opportunity_name_qt'] : null;
        $this->container['quote_business_type_qt'] = isset($data['quote_business_type_qt']) ? $data['quote_business_type_qt'] : null;
        $this->container['quote_number_qt'] = isset($data['quote_number_qt']) ? $data['quote_number_qt'] : null;
        $this->container['quote_type_qt'] = isset($data['quote_type_qt']) ? $data['quote_type_qt'] : null;
        $this->container['account_key'] = isset($data['account_key']) ? $data['account_key'] : null;
        $this->container['contract_effective_date'] = isset($data['contract_effective_date']) ? $data['contract_effective_date'] : null;
        $this->container['customer_acceptance_date'] = isset($data['customer_acceptance_date']) ? $data['customer_acceptance_date'] : null;
        $this->container['include_existing_draft_invoice_items'] = isset($data['include_existing_draft_invoice_items']) ? $data['include_existing_draft_invoice_items'] : null;
        $this->container['initial_term'] = isset($data['initial_term']) ? $data['initial_term'] : null;
        $this->container['initial_term_period_type'] = isset($data['initial_term_period_type']) ? $data['initial_term_period_type'] : null;
        $this->container['invoice_owner_account_key'] = isset($data['invoice_owner_account_key']) ? $data['invoice_owner_account_key'] : null;
        $this->container['invoice_target_date'] = isset($data['invoice_target_date']) ? $data['invoice_target_date'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['preview_account_info'] = isset($data['preview_account_info']) ? $data['preview_account_info'] : null;
        $this->container['preview_type'] = isset($data['preview_type']) ? $data['preview_type'] : null;
        $this->container['service_activation_date'] = isset($data['service_activation_date']) ? $data['service_activation_date'] : null;
        $this->container['subscribe_to_rate_plans'] = isset($data['subscribe_to_rate_plans']) ? $data['subscribe_to_rate_plans'] : null;
        $this->container['term_start_date'] = isset($data['term_start_date']) ? $data['term_start_date'] : null;
        $this->container['term_type'] = isset($data['term_type']) ? $data['term_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['contract_effective_date'] === null) {
            $invalid_properties[] = "'contract_effective_date' can't be null";
        }
        if ($this->container['subscribe_to_rate_plans'] === null) {
            $invalid_properties[] = "'subscribe_to_rate_plans' can't be null";
        }
        if ($this->container['term_type'] === null) {
            $invalid_properties[] = "'term_type' can't be null";
        }
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
        if ($this->container['contract_effective_date'] === null) {
            return false;
        }
        if ($this->container['subscribe_to_rate_plans'] === null) {
            return false;
        }
        if ($this->container['term_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets opportunity_close_date_qt
     * @return string
     */
    public function getOpportunityCloseDateQt()
    {
        return $this->container['opportunity_close_date_qt'];
    }

    /**
     * Sets opportunity_close_date_qt
     * @param string $opportunity_close_date_qt The closing date of the Opportunity. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information.
     * @return $this
     */
    public function setOpportunityCloseDateQt($opportunity_close_date_qt)
    {
        $this->container['opportunity_close_date_qt'] = $opportunity_close_date_qt;

        return $this;
    }

    /**
     * Gets opportunity_name_qt
     * @return string
     */
    public function getOpportunityNameQt()
    {
        return $this->container['opportunity_name_qt'];
    }

    /**
     * Sets opportunity_name_qt
     * @param string $opportunity_name_qt The unique identifier of the Opportunity. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information.
     * @return $this
     */
    public function setOpportunityNameQt($opportunity_name_qt)
    {
        $this->container['opportunity_name_qt'] = $opportunity_name_qt;

        return $this;
    }

    /**
     * Gets quote_business_type_qt
     * @return string
     */
    public function getQuoteBusinessTypeQt()
    {
        return $this->container['quote_business_type_qt'];
    }

    /**
     * Sets quote_business_type_qt
     * @param string $quote_business_type_qt The specific identifier for the type of business transaction the Quote represents such as New, Upsell, Downsell, Renewal, or Churn. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information.
     * @return $this
     */
    public function setQuoteBusinessTypeQt($quote_business_type_qt)
    {
        $this->container['quote_business_type_qt'] = $quote_business_type_qt;

        return $this;
    }

    /**
     * Gets quote_number_qt
     * @return string
     */
    public function getQuoteNumberQt()
    {
        return $this->container['quote_number_qt'];
    }

    /**
     * Sets quote_number_qt
     * @param string $quote_number_qt The unique identifier of the Quote. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information.
     * @return $this
     */
    public function setQuoteNumberQt($quote_number_qt)
    {
        $this->container['quote_number_qt'] = $quote_number_qt;

        return $this;
    }

    /**
     * Gets quote_type_qt
     * @return string
     */
    public function getQuoteTypeQt()
    {
        return $this->container['quote_type_qt'];
    }

    /**
     * Sets quote_type_qt
     * @param string $quote_type_qt The Quote type that represents the subscription lifecycle stage such as New, Amendment, Renew or Cancel. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information.
     * @return $this
     */
    public function setQuoteTypeQt($quote_type_qt)
    {
        $this->container['quote_type_qt'] = $quote_type_qt;

        return $this;
    }

    /**
     * Gets account_key
     * @return string
     */
    public function getAccountKey()
    {
        return $this->container['account_key'];
    }

    /**
     * Sets account_key
     * @param string $account_key Customer account number or ID.  You must specify the account information either in this field or in the `previewAccountInfo` field with the following conditions:           * If you already have a customer account, specify the account number or ID in this field. * If you do not have a customer account, provide account information in the `previewAccountInfo` field.
     * @return $this
     */
    public function setAccountKey($account_key)
    {
        $this->container['account_key'] = $account_key;

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
     * @param \DateTime $contract_effective_date Effective contract date for this subscription, as yyyy-mm-dd.
     * @return $this
     */
    public function setContractEffectiveDate($contract_effective_date)
    {
        $this->container['contract_effective_date'] = $contract_effective_date;

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
     * @param \DateTime $customer_acceptance_date The date on which the services or products within a subscription have been accepted by the customer, as yyyy-mm-dd.  Default value is dependent on the value of other fields. See **Notes** section for more details.
     * @return $this
     */
    public function setCustomerAcceptanceDate($customer_acceptance_date)
    {
        $this->container['customer_acceptance_date'] = $customer_acceptance_date;

        return $this;
    }

    /**
     * Gets include_existing_draft_invoice_items
     * @return bool
     */
    public function getIncludeExistingDraftInvoiceItems()
    {
        return $this->container['include_existing_draft_invoice_items'];
    }

    /**
     * Sets include_existing_draft_invoice_items
     * @param bool $include_existing_draft_invoice_items Specifies whether to include draft invoice items in subscription previews.  Values:   * `true` (default). Includes draft invoice items in amendment previews.  * `false`. Excludes draft invoice items in amendment previews.
     * @return $this
     */
    public function setIncludeExistingDraftInvoiceItems($include_existing_draft_invoice_items)
    {
        $this->container['include_existing_draft_invoice_items'] = $include_existing_draft_invoice_items;

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
     * @param int $initial_term Duration of the first term of the subscription, in whole months. Default is `0`. If `termType` is `TERMED`, then this field is required, and the value must be greater than `0`. If `termType` is `EVERGREEN`, this field is ignored.
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
     * @param string $initial_term_period_type The period type of the initial term.   Supported values are:  * `Month` * `Year` * `Day` * `Week`
     * @return $this
     */
    public function setInitialTermPeriodType($initial_term_period_type)
    {
        $this->container['initial_term_period_type'] = $initial_term_period_type;

        return $this;
    }

    /**
     * Gets invoice_owner_account_key
     * @return string
     */
    public function getInvoiceOwnerAccountKey()
    {
        return $this->container['invoice_owner_account_key'];
    }

    /**
     * Sets invoice_owner_account_key
     * @param string $invoice_owner_account_key Invoice owner account number or ID.  **Note:** This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setInvoiceOwnerAccountKey($invoice_owner_account_key)
    {
        $this->container['invoice_owner_account_key'] = $invoice_owner_account_key;

        return $this;
    }

    /**
     * Gets invoice_target_date
     * @return \DateTime
     */
    public function getInvoiceTargetDate()
    {
        return $this->container['invoice_target_date'];
    }

    /**
     * Sets invoice_target_date
     * @param \DateTime $invoice_target_date Date through which to calculate charges if an invoice is generated, as yyyy-mm-dd. Default is current date.
     * @return $this
     */
    public function setInvoiceTargetDate($invoice_target_date)
    {
        $this->container['invoice_target_date'] = $invoice_target_date;

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
     * @param string $notes String of up to 500 characters.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets preview_account_info
     * @return \Swagger\Client\Model\POSTSubscriptionPreviewTypePreviewAccountInfo
     */
    public function getPreviewAccountInfo()
    {
        return $this->container['preview_account_info'];
    }

    /**
     * Sets preview_account_info
     * @param \Swagger\Client\Model\POSTSubscriptionPreviewTypePreviewAccountInfo $preview_account_info
     * @return $this
     */
    public function setPreviewAccountInfo($preview_account_info)
    {
        $this->container['preview_account_info'] = $preview_account_info;

        return $this;
    }

    /**
     * Gets preview_type
     * @return string
     */
    public function getPreviewType()
    {
        return $this->container['preview_type'];
    }

    /**
     * Sets preview_type
     * @param string $preview_type The type of preview you will receive. The possible values are `invoiceItem`, `chargeMetrics`, or `InvoiceItemChargeMetrics`. The default is `invoiceItem`.
     * @return $this
     */
    public function setPreviewType($preview_type)
    {
        $this->container['preview_type'] = $preview_type;

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
     * @param \DateTime $service_activation_date The date on which the services or products within a subscription have been activated and access has been provided to the customer, as yyyy-mm-dd.  Default value is dependent on the value of other fields. See **Notes** section for more details.
     * @return $this
     */
    public function setServiceActivationDate($service_activation_date)
    {
        $this->container['service_activation_date'] = $service_activation_date;

        return $this;
    }

    /**
     * Gets subscribe_to_rate_plans
     * @return \Swagger\Client\Model\POSTSrpCreateType[]
     */
    public function getSubscribeToRatePlans()
    {
        return $this->container['subscribe_to_rate_plans'];
    }

    /**
     * Sets subscribe_to_rate_plans
     * @param \Swagger\Client\Model\POSTSrpCreateType[] $subscribe_to_rate_plans Container for one or more rate plans for this subscription.
     * @return $this
     */
    public function setSubscribeToRatePlans($subscribe_to_rate_plans)
    {
        $this->container['subscribe_to_rate_plans'] = $subscribe_to_rate_plans;

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
     * @param \DateTime $term_start_date The date on which the subscription term begins, as yyyy-mm-dd. If this is a renewal subscription, this date is different from the subscription start date.
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
     * @param string $term_type Possible values are: `TERMED`, `EVERGREEN`.
     * @return $this
     */
    public function setTermType($term_type)
    {
        $this->container['term_type'] = $term_type;

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


