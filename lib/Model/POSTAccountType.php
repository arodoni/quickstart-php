<?php
/**
 * POSTAccountType
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
 * POSTAccountType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class POSTAccountType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'POSTAccountType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_number' => 'string',
        'apply_credit_balance' => 'bool',
        'auto_pay' => 'bool',
        'batch' => 'string',
        'bill_cycle_day' => 'int',
        'bill_to_contact' => '\Swagger\Client\Model\POSTAccountTypeBillToContact',
        'collect' => 'string',
        'communication_profile_id' => 'string',
        'credit_card' => '\Swagger\Client\Model\POSTAccountTypeCreditCard',
        'crm_id' => 'string',
        'currency' => 'string',
        'custom_field__c' => 'string',
        'hpm_credit_card_payment_method_id' => 'string',
        'invoice' => 'string',
        'invoice_collect' => 'bool',
        'invoice_target_date' => '\DateTime',
        'invoice_template_id' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'payment_gateway' => 'string',
        'payment_term' => 'string',
        'sold_to_contact' => '\Swagger\Client\Model\POSTAccountTypeSoldToContact',
        'subscription' => '\Swagger\Client\Model\POSTAccountTypeSubscription',
        'tagging' => 'string',
        'tax_info' => '\Swagger\Client\Model\POSTAccountTypeTaxInfo'
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
        'account_number' => 'accountNumber',
        'apply_credit_balance' => 'applyCreditBalance',
        'auto_pay' => 'autoPay',
        'batch' => 'batch',
        'bill_cycle_day' => 'billCycleDay',
        'bill_to_contact' => 'billToContact',
        'collect' => 'collect',
        'communication_profile_id' => 'communicationProfileId',
        'credit_card' => 'creditCard',
        'crm_id' => 'crmId',
        'currency' => 'currency',
        'custom_field__c' => 'customField__c',
        'hpm_credit_card_payment_method_id' => 'hpmCreditCardPaymentMethodId',
        'invoice' => 'invoice',
        'invoice_collect' => 'invoiceCollect',
        'invoice_target_date' => 'invoiceTargetDate',
        'invoice_template_id' => 'invoiceTemplateId',
        'name' => 'name',
        'notes' => 'notes',
        'payment_gateway' => 'paymentGateway',
        'payment_term' => 'paymentTerm',
        'sold_to_contact' => 'soldToContact',
        'subscription' => 'subscription',
        'tagging' => 'tagging',
        'tax_info' => 'taxInfo'
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
        'account_number' => 'setAccountNumber',
        'apply_credit_balance' => 'setApplyCreditBalance',
        'auto_pay' => 'setAutoPay',
        'batch' => 'setBatch',
        'bill_cycle_day' => 'setBillCycleDay',
        'bill_to_contact' => 'setBillToContact',
        'collect' => 'setCollect',
        'communication_profile_id' => 'setCommunicationProfileId',
        'credit_card' => 'setCreditCard',
        'crm_id' => 'setCrmId',
        'currency' => 'setCurrency',
        'custom_field__c' => 'setCustomFieldC',
        'hpm_credit_card_payment_method_id' => 'setHpmCreditCardPaymentMethodId',
        'invoice' => 'setInvoice',
        'invoice_collect' => 'setInvoiceCollect',
        'invoice_target_date' => 'setInvoiceTargetDate',
        'invoice_template_id' => 'setInvoiceTemplateId',
        'name' => 'setName',
        'notes' => 'setNotes',
        'payment_gateway' => 'setPaymentGateway',
        'payment_term' => 'setPaymentTerm',
        'sold_to_contact' => 'setSoldToContact',
        'subscription' => 'setSubscription',
        'tagging' => 'setTagging',
        'tax_info' => 'setTaxInfo'
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
        'account_number' => 'getAccountNumber',
        'apply_credit_balance' => 'getApplyCreditBalance',
        'auto_pay' => 'getAutoPay',
        'batch' => 'getBatch',
        'bill_cycle_day' => 'getBillCycleDay',
        'bill_to_contact' => 'getBillToContact',
        'collect' => 'getCollect',
        'communication_profile_id' => 'getCommunicationProfileId',
        'credit_card' => 'getCreditCard',
        'crm_id' => 'getCrmId',
        'currency' => 'getCurrency',
        'custom_field__c' => 'getCustomFieldC',
        'hpm_credit_card_payment_method_id' => 'getHpmCreditCardPaymentMethodId',
        'invoice' => 'getInvoice',
        'invoice_collect' => 'getInvoiceCollect',
        'invoice_target_date' => 'getInvoiceTargetDate',
        'invoice_template_id' => 'getInvoiceTemplateId',
        'name' => 'getName',
        'notes' => 'getNotes',
        'payment_gateway' => 'getPaymentGateway',
        'payment_term' => 'getPaymentTerm',
        'sold_to_contact' => 'getSoldToContact',
        'subscription' => 'getSubscription',
        'tagging' => 'getTagging',
        'tax_info' => 'getTaxInfo'
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['apply_credit_balance'] = isset($data['apply_credit_balance']) ? $data['apply_credit_balance'] : null;
        $this->container['auto_pay'] = isset($data['auto_pay']) ? $data['auto_pay'] : null;
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : null;
        $this->container['bill_cycle_day'] = isset($data['bill_cycle_day']) ? $data['bill_cycle_day'] : null;
        $this->container['bill_to_contact'] = isset($data['bill_to_contact']) ? $data['bill_to_contact'] : null;
        $this->container['collect'] = isset($data['collect']) ? $data['collect'] : null;
        $this->container['communication_profile_id'] = isset($data['communication_profile_id']) ? $data['communication_profile_id'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['crm_id'] = isset($data['crm_id']) ? $data['crm_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['hpm_credit_card_payment_method_id'] = isset($data['hpm_credit_card_payment_method_id']) ? $data['hpm_credit_card_payment_method_id'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['invoice_collect'] = isset($data['invoice_collect']) ? $data['invoice_collect'] : null;
        $this->container['invoice_target_date'] = isset($data['invoice_target_date']) ? $data['invoice_target_date'] : null;
        $this->container['invoice_template_id'] = isset($data['invoice_template_id']) ? $data['invoice_template_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['payment_gateway'] = isset($data['payment_gateway']) ? $data['payment_gateway'] : null;
        $this->container['payment_term'] = isset($data['payment_term']) ? $data['payment_term'] : null;
        $this->container['sold_to_contact'] = isset($data['sold_to_contact']) ? $data['sold_to_contact'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['tagging'] = isset($data['tagging']) ? $data['tagging'] : null;
        $this->container['tax_info'] = isset($data['tax_info']) ? $data['tax_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number A unique account number, up to 50 characters that do not begin with the default account number prefix.  If no account number is specified, one is generated.
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets apply_credit_balance
     * @return bool
     */
    public function getApplyCreditBalance()
    {
        return $this->container['apply_credit_balance'];
    }

    /**
     * Sets apply_credit_balance
     * @param bool $apply_credit_balance Applies a credit balance to an invoice.   If the value is `true`, the credit balance is applied to the invoice. If the value is `false`, no action is taken.  Prerequisite: `invoice` must be `true`.   **Note:** If you are using the field `invoiceCollect` rather than the field `invoice`, the `invoiceCollect` value must be `true`.  To view the credit balance adjustment, retrieve the details of the invoice using the Get Invoices method.
     * @return $this
     */
    public function setApplyCreditBalance($apply_credit_balance)
    {
        $this->container['apply_credit_balance'] = $apply_credit_balance;

        return $this;
    }

    /**
     * Gets auto_pay
     * @return bool
     */
    public function getAutoPay()
    {
        return $this->container['auto_pay'];
    }

    /**
     * Sets auto_pay
     * @param bool $auto_pay Specifies whether future payments are to be automatically billed when they are due. Possible values are: `true`, `false`.
     * @return $this
     */
    public function setAutoPay($auto_pay)
    {
        $this->container['auto_pay'] = $auto_pay;

        return $this;
    }

    /**
     * Gets batch
     * @return string
     */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     * @param string $batch The alias name given to a batch. A string of 50 characters or less.
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;

        return $this;
    }

    /**
     * Gets bill_cycle_day
     * @return int
     */
    public function getBillCycleDay()
    {
        return $this->container['bill_cycle_day'];
    }

    /**
     * Sets bill_cycle_day
     * @param int $bill_cycle_day The account's bill cycle day (BCD), when bill runs generate invoices for the account.  Specify any day of the month (1-31, where 31 = end-of-month), or 0 for auto-set.  Required if no subscription will be created.   Optional if a subscription is created and defaults to the day-of-the-month of the subscription's `contractEffectiveDate`.
     * @return $this
     */
    public function setBillCycleDay($bill_cycle_day)
    {
        $this->container['bill_cycle_day'] = $bill_cycle_day;

        return $this;
    }

    /**
     * Gets bill_to_contact
     * @return \Swagger\Client\Model\POSTAccountTypeBillToContact
     */
    public function getBillToContact()
    {
        return $this->container['bill_to_contact'];
    }

    /**
     * Sets bill_to_contact
     * @param \Swagger\Client\Model\POSTAccountTypeBillToContact $bill_to_contact
     * @return $this
     */
    public function setBillToContact($bill_to_contact)
    {
        $this->container['bill_to_contact'] = $bill_to_contact;

        return $this;
    }

    /**
     * Gets collect
     * @return string
     */
    public function getCollect()
    {
        return $this->container['collect'];
    }

    /**
     * Sets collect
     * @param string $collect Collects an automatic payment for a subscription. The collection generated in this operation is only for this subscription, not for the entire customer account.  If the value is `true`, the automatic payment is collected. If the value is `false`, no action is taken.  The default value is `true`.  Prerequisite: invoice must be `true`.   **Note:** This field is in Zuora REST API version control. Supported minor versions are 196.0 or later. To use this field in the method, you must set the `zuora-version` parameter to the minor version number in the request header. See [Zuora REST API Versions](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.
     * @return $this
     */
    public function setCollect($collect)
    {
        $this->container['collect'] = $collect;

        return $this;
    }

    /**
     * Gets communication_profile_id
     * @return string
     */
    public function getCommunicationProfileId()
    {
        return $this->container['communication_profile_id'];
    }

    /**
     * Sets communication_profile_id
     * @param string $communication_profile_id The ID of a [communication profile](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Communication_Profile).
     * @return $this
     */
    public function setCommunicationProfileId($communication_profile_id)
    {
        $this->container['communication_profile_id'] = $communication_profile_id;

        return $this;
    }

    /**
     * Gets credit_card
     * @return \Swagger\Client\Model\POSTAccountTypeCreditCard
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     * @param \Swagger\Client\Model\POSTAccountTypeCreditCard $credit_card
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets crm_id
     * @return string
     */
    public function getCrmId()
    {
        return $this->container['crm_id'];
    }

    /**
     * Sets crm_id
     * @param string $crm_id CRM account ID for the account, up to 100 characters.
     * @return $this
     */
    public function setCrmId($crm_id)
    {
        $this->container['crm_id'] = $crm_id;

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
     * @param string $currency A currency as defined in [Billing Settings in the Zuora UI](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Customize_Currencies).
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
     * Gets hpm_credit_card_payment_method_id
     * @return string
     */
    public function getHpmCreditCardPaymentMethodId()
    {
        return $this->container['hpm_credit_card_payment_method_id'];
    }

    /**
     * Sets hpm_credit_card_payment_method_id
     * @param string $hpm_credit_card_payment_method_id The ID of the HPM credit card payment method associated with this account. You must provide either this field or the `creditCard` structure, but not both.  **Note:** Non-credit card payment methods are not supported.
     * @return $this
     */
    public function setHpmCreditCardPaymentMethodId($hpm_credit_card_payment_method_id)
    {
        $this->container['hpm_credit_card_payment_method_id'] = $hpm_credit_card_payment_method_id;

        return $this;
    }

    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param string $invoice Creates an invoice for a subscription. The invoice generated in this operation is only for this subscription, not for the entire customer account.  If the value is `true`, an invoice is created. If the value is `false`, no action is taken.  The default value is `true`.   **Note:** This field is in Zuora REST API version control. Supported minor versions are 196.0 or later. To use this field in the method, you must set the `zuora-version` parameter to the minor version number in the request header. See [Zuora REST API Versions](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets invoice_collect
     * @return bool
     */
    public function getInvoiceCollect()
    {
        return $this->container['invoice_collect'];
    }

    /**
     * Sets invoice_collect
     * @param bool $invoice_collect **Note:** This field has been replaced by the `invoice` field and the `collect` field. `invoiceCollect` is available only for backward compatibility.  If `true` (default), and a subscription is created, an invoice is generated at account creation time and payment is immediately collected using the account's default payment method.  This field is in Zuora REST API version control. Supported minor versions are 186.0, 187.0, 188.0, 189.0, and 196.0. See [Zuora REST API Versions](https://knowledgecenter.zuora.com/DC_Developers/REST_API/A_REST_basics) for more information.
     * @return $this
     */
    public function setInvoiceCollect($invoice_collect)
    {
        $this->container['invoice_collect'] = $invoice_collect;

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
     * @param \DateTime $invoice_target_date If `invoiceCollect` is true, the target date for the invoice (that is, the date through which charges should be calculated). In `yyyy-mm-dd` format; defaults to the current date.
     * @return $this
     */
    public function setInvoiceTargetDate($invoice_target_date)
    {
        $this->container['invoice_target_date'] = $invoice_target_date;

        return $this;
    }

    /**
     * Gets invoice_template_id
     * @return string
     */
    public function getInvoiceTemplateId()
    {
        return $this->container['invoice_template_id'];
    }

    /**
     * Sets invoice_template_id
     * @param string $invoice_template_id Invoice template ID, configured in [Billing Settings in the Zuora UI](https://knowledgecenter.zuora.com/CB_Billing/IA_Invoices/Creating_a_Custom_Invoice_Template).
     * @return $this
     */
    public function setInvoiceTemplateId($invoice_template_id)
    {
        $this->container['invoice_template_id'] = $invoice_template_id;

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
     * @param string $name Account name, up to 255 characters.
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
     * @param string $notes A string of up to 65,535 characters.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets payment_gateway
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->container['payment_gateway'];
    }

    /**
     * Sets payment_gateway
     * @param string $payment_gateway The name of the payment gateway instance. If null or left unassigned, the Account will use the Default Gateway.
     * @return $this
     */
    public function setPaymentGateway($payment_gateway)
    {
        $this->container['payment_gateway'] = $payment_gateway;

        return $this;
    }

    /**
     * Gets payment_term
     * @return string
     */
    public function getPaymentTerm()
    {
        return $this->container['payment_term'];
    }

    /**
     * Sets payment_term
     * @param string $payment_term Payment terms for this account. Possible values are: `Due Upon Receipt`, `Net 30`, `Net 60`, `Net 90`.
     * @return $this
     */
    public function setPaymentTerm($payment_term)
    {
        $this->container['payment_term'] = $payment_term;

        return $this;
    }

    /**
     * Gets sold_to_contact
     * @return \Swagger\Client\Model\POSTAccountTypeSoldToContact
     */
    public function getSoldToContact()
    {
        return $this->container['sold_to_contact'];
    }

    /**
     * Sets sold_to_contact
     * @param \Swagger\Client\Model\POSTAccountTypeSoldToContact $sold_to_contact
     * @return $this
     */
    public function setSoldToContact($sold_to_contact)
    {
        $this->container['sold_to_contact'] = $sold_to_contact;

        return $this;
    }

    /**
     * Gets subscription
     * @return \Swagger\Client\Model\POSTAccountTypeSubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param \Swagger\Client\Model\POSTAccountTypeSubscription $subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets tagging
     * @return string
     */
    public function getTagging()
    {
        return $this->container['tagging'];
    }

    /**
     * Sets tagging
     * @param string $tagging dummy
     * @return $this
     */
    public function setTagging($tagging)
    {
        $this->container['tagging'] = $tagging;

        return $this;
    }

    /**
     * Gets tax_info
     * @return \Swagger\Client\Model\POSTAccountTypeTaxInfo
     */
    public function getTaxInfo()
    {
        return $this->container['tax_info'];
    }

    /**
     * Sets tax_info
     * @param \Swagger\Client\Model\POSTAccountTypeTaxInfo $tax_info
     * @return $this
     */
    public function setTaxInfo($tax_info)
    {
        $this->container['tax_info'] = $tax_info;

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


