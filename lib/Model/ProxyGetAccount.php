<?php
/**
 * ProxyGetAccount
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
 * ProxyGetAccount Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProxyGetAccount implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProxyGetAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_number' => 'string',
        'additional_email_addresses' => 'string',
        'allow_invoice_edit' => 'bool',
        'auto_pay' => 'bool',
        'balance' => 'double',
        'batch' => 'string',
        'bcd_setting_option' => 'string',
        'bill_cycle_day' => 'int',
        'bill_to_id' => 'string',
        'communication_profile_id' => 'string',
        'created_by_id' => 'string',
        'created_date' => '\DateTime',
        'credit_balance' => 'double',
        'crm_id' => 'string',
        'currency' => 'string',
        'customer_service_rep_name' => 'string',
        'default_payment_method_id' => 'string',
        'id' => 'string',
        'invoice_delivery_prefs_email' => 'bool',
        'invoice_delivery_prefs_print' => 'bool',
        'invoice_template_id' => 'string',
        'last_invoice_date' => '\DateTime',
        'name' => 'string',
        'notes' => 'string',
        'parent_id' => 'string',
        'payment_gateway' => 'string',
        'payment_term' => 'string',
        'purchase_order_number' => 'string',
        'sales_rep_name' => 'string',
        'sold_to_id' => 'string',
        'status' => 'string',
        'tax_company_code' => 'string',
        'tax_exempt_certificate_id' => 'string',
        'tax_exempt_certificate_type' => 'string',
        'tax_exempt_description' => 'string',
        'tax_exempt_effective_date' => '\DateTime',
        'tax_exempt_expiration_date' => '\DateTime',
        'tax_exempt_issuing_jurisdiction' => 'string',
        'tax_exempt_status' => 'string',
        'total_invoice_balance' => 'double',
        'updated_by_id' => 'string',
        'updated_date' => '\DateTime',
        'vat_id' => 'string'
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
        'account_number' => 'AccountNumber',
        'additional_email_addresses' => 'AdditionalEmailAddresses',
        'allow_invoice_edit' => 'AllowInvoiceEdit',
        'auto_pay' => 'AutoPay',
        'balance' => 'Balance',
        'batch' => 'Batch',
        'bcd_setting_option' => 'BcdSettingOption',
        'bill_cycle_day' => 'BillCycleDay',
        'bill_to_id' => 'BillToId',
        'communication_profile_id' => 'CommunicationProfileId',
        'created_by_id' => 'CreatedById',
        'created_date' => 'CreatedDate',
        'credit_balance' => 'CreditBalance',
        'crm_id' => 'CrmId',
        'currency' => 'Currency',
        'customer_service_rep_name' => 'CustomerServiceRepName',
        'default_payment_method_id' => 'DefaultPaymentMethodId',
        'id' => 'Id',
        'invoice_delivery_prefs_email' => 'InvoiceDeliveryPrefsEmail',
        'invoice_delivery_prefs_print' => 'InvoiceDeliveryPrefsPrint',
        'invoice_template_id' => 'InvoiceTemplateId',
        'last_invoice_date' => 'LastInvoiceDate',
        'name' => 'Name',
        'notes' => 'Notes',
        'parent_id' => 'ParentId',
        'payment_gateway' => 'PaymentGateway',
        'payment_term' => 'PaymentTerm',
        'purchase_order_number' => 'PurchaseOrderNumber',
        'sales_rep_name' => 'SalesRepName',
        'sold_to_id' => 'SoldToId',
        'status' => 'Status',
        'tax_company_code' => 'TaxCompanyCode',
        'tax_exempt_certificate_id' => 'TaxExemptCertificateID',
        'tax_exempt_certificate_type' => 'TaxExemptCertificateType',
        'tax_exempt_description' => 'TaxExemptDescription',
        'tax_exempt_effective_date' => 'TaxExemptEffectiveDate',
        'tax_exempt_expiration_date' => 'TaxExemptExpirationDate',
        'tax_exempt_issuing_jurisdiction' => 'TaxExemptIssuingJurisdiction',
        'tax_exempt_status' => 'TaxExemptStatus',
        'total_invoice_balance' => 'TotalInvoiceBalance',
        'updated_by_id' => 'UpdatedById',
        'updated_date' => 'UpdatedDate',
        'vat_id' => 'VATId'
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
        'additional_email_addresses' => 'setAdditionalEmailAddresses',
        'allow_invoice_edit' => 'setAllowInvoiceEdit',
        'auto_pay' => 'setAutoPay',
        'balance' => 'setBalance',
        'batch' => 'setBatch',
        'bcd_setting_option' => 'setBcdSettingOption',
        'bill_cycle_day' => 'setBillCycleDay',
        'bill_to_id' => 'setBillToId',
        'communication_profile_id' => 'setCommunicationProfileId',
        'created_by_id' => 'setCreatedById',
        'created_date' => 'setCreatedDate',
        'credit_balance' => 'setCreditBalance',
        'crm_id' => 'setCrmId',
        'currency' => 'setCurrency',
        'customer_service_rep_name' => 'setCustomerServiceRepName',
        'default_payment_method_id' => 'setDefaultPaymentMethodId',
        'id' => 'setId',
        'invoice_delivery_prefs_email' => 'setInvoiceDeliveryPrefsEmail',
        'invoice_delivery_prefs_print' => 'setInvoiceDeliveryPrefsPrint',
        'invoice_template_id' => 'setInvoiceTemplateId',
        'last_invoice_date' => 'setLastInvoiceDate',
        'name' => 'setName',
        'notes' => 'setNotes',
        'parent_id' => 'setParentId',
        'payment_gateway' => 'setPaymentGateway',
        'payment_term' => 'setPaymentTerm',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'sales_rep_name' => 'setSalesRepName',
        'sold_to_id' => 'setSoldToId',
        'status' => 'setStatus',
        'tax_company_code' => 'setTaxCompanyCode',
        'tax_exempt_certificate_id' => 'setTaxExemptCertificateId',
        'tax_exempt_certificate_type' => 'setTaxExemptCertificateType',
        'tax_exempt_description' => 'setTaxExemptDescription',
        'tax_exempt_effective_date' => 'setTaxExemptEffectiveDate',
        'tax_exempt_expiration_date' => 'setTaxExemptExpirationDate',
        'tax_exempt_issuing_jurisdiction' => 'setTaxExemptIssuingJurisdiction',
        'tax_exempt_status' => 'setTaxExemptStatus',
        'total_invoice_balance' => 'setTotalInvoiceBalance',
        'updated_by_id' => 'setUpdatedById',
        'updated_date' => 'setUpdatedDate',
        'vat_id' => 'setVatId'
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
        'additional_email_addresses' => 'getAdditionalEmailAddresses',
        'allow_invoice_edit' => 'getAllowInvoiceEdit',
        'auto_pay' => 'getAutoPay',
        'balance' => 'getBalance',
        'batch' => 'getBatch',
        'bcd_setting_option' => 'getBcdSettingOption',
        'bill_cycle_day' => 'getBillCycleDay',
        'bill_to_id' => 'getBillToId',
        'communication_profile_id' => 'getCommunicationProfileId',
        'created_by_id' => 'getCreatedById',
        'created_date' => 'getCreatedDate',
        'credit_balance' => 'getCreditBalance',
        'crm_id' => 'getCrmId',
        'currency' => 'getCurrency',
        'customer_service_rep_name' => 'getCustomerServiceRepName',
        'default_payment_method_id' => 'getDefaultPaymentMethodId',
        'id' => 'getId',
        'invoice_delivery_prefs_email' => 'getInvoiceDeliveryPrefsEmail',
        'invoice_delivery_prefs_print' => 'getInvoiceDeliveryPrefsPrint',
        'invoice_template_id' => 'getInvoiceTemplateId',
        'last_invoice_date' => 'getLastInvoiceDate',
        'name' => 'getName',
        'notes' => 'getNotes',
        'parent_id' => 'getParentId',
        'payment_gateway' => 'getPaymentGateway',
        'payment_term' => 'getPaymentTerm',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'sales_rep_name' => 'getSalesRepName',
        'sold_to_id' => 'getSoldToId',
        'status' => 'getStatus',
        'tax_company_code' => 'getTaxCompanyCode',
        'tax_exempt_certificate_id' => 'getTaxExemptCertificateId',
        'tax_exempt_certificate_type' => 'getTaxExemptCertificateType',
        'tax_exempt_description' => 'getTaxExemptDescription',
        'tax_exempt_effective_date' => 'getTaxExemptEffectiveDate',
        'tax_exempt_expiration_date' => 'getTaxExemptExpirationDate',
        'tax_exempt_issuing_jurisdiction' => 'getTaxExemptIssuingJurisdiction',
        'tax_exempt_status' => 'getTaxExemptStatus',
        'total_invoice_balance' => 'getTotalInvoiceBalance',
        'updated_by_id' => 'getUpdatedById',
        'updated_date' => 'getUpdatedDate',
        'vat_id' => 'getVatId'
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
        $this->container['additional_email_addresses'] = isset($data['additional_email_addresses']) ? $data['additional_email_addresses'] : null;
        $this->container['allow_invoice_edit'] = isset($data['allow_invoice_edit']) ? $data['allow_invoice_edit'] : null;
        $this->container['auto_pay'] = isset($data['auto_pay']) ? $data['auto_pay'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : null;
        $this->container['bcd_setting_option'] = isset($data['bcd_setting_option']) ? $data['bcd_setting_option'] : null;
        $this->container['bill_cycle_day'] = isset($data['bill_cycle_day']) ? $data['bill_cycle_day'] : null;
        $this->container['bill_to_id'] = isset($data['bill_to_id']) ? $data['bill_to_id'] : null;
        $this->container['communication_profile_id'] = isset($data['communication_profile_id']) ? $data['communication_profile_id'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['credit_balance'] = isset($data['credit_balance']) ? $data['credit_balance'] : null;
        $this->container['crm_id'] = isset($data['crm_id']) ? $data['crm_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customer_service_rep_name'] = isset($data['customer_service_rep_name']) ? $data['customer_service_rep_name'] : null;
        $this->container['default_payment_method_id'] = isset($data['default_payment_method_id']) ? $data['default_payment_method_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_delivery_prefs_email'] = isset($data['invoice_delivery_prefs_email']) ? $data['invoice_delivery_prefs_email'] : null;
        $this->container['invoice_delivery_prefs_print'] = isset($data['invoice_delivery_prefs_print']) ? $data['invoice_delivery_prefs_print'] : null;
        $this->container['invoice_template_id'] = isset($data['invoice_template_id']) ? $data['invoice_template_id'] : null;
        $this->container['last_invoice_date'] = isset($data['last_invoice_date']) ? $data['last_invoice_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['payment_gateway'] = isset($data['payment_gateway']) ? $data['payment_gateway'] : null;
        $this->container['payment_term'] = isset($data['payment_term']) ? $data['payment_term'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['sales_rep_name'] = isset($data['sales_rep_name']) ? $data['sales_rep_name'] : null;
        $this->container['sold_to_id'] = isset($data['sold_to_id']) ? $data['sold_to_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tax_company_code'] = isset($data['tax_company_code']) ? $data['tax_company_code'] : null;
        $this->container['tax_exempt_certificate_id'] = isset($data['tax_exempt_certificate_id']) ? $data['tax_exempt_certificate_id'] : null;
        $this->container['tax_exempt_certificate_type'] = isset($data['tax_exempt_certificate_type']) ? $data['tax_exempt_certificate_type'] : null;
        $this->container['tax_exempt_description'] = isset($data['tax_exempt_description']) ? $data['tax_exempt_description'] : null;
        $this->container['tax_exempt_effective_date'] = isset($data['tax_exempt_effective_date']) ? $data['tax_exempt_effective_date'] : null;
        $this->container['tax_exempt_expiration_date'] = isset($data['tax_exempt_expiration_date']) ? $data['tax_exempt_expiration_date'] : null;
        $this->container['tax_exempt_issuing_jurisdiction'] = isset($data['tax_exempt_issuing_jurisdiction']) ? $data['tax_exempt_issuing_jurisdiction'] : null;
        $this->container['tax_exempt_status'] = isset($data['tax_exempt_status']) ? $data['tax_exempt_status'] : null;
        $this->container['total_invoice_balance'] = isset($data['total_invoice_balance']) ? $data['total_invoice_balance'] : null;
        $this->container['updated_by_id'] = isset($data['updated_by_id']) ? $data['updated_by_id'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
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
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number Unique account number assigned to the account. **Character limit**: 50 **Values**: one of the following:  - null to auto-generate - a string of 50 characters or fewer that doesn't begin with the default account number prefix
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets additional_email_addresses
     * @return string
     */
    public function getAdditionalEmailAddresses()
    {
        return $this->container['additional_email_addresses'];
    }

    /**
     * Sets additional_email_addresses
     * @param string $additional_email_addresses List of additional email addresses to receive emailed invoices. **Character limit**: 120 **Values**: comma-separated list of email addresses
     * @return $this
     */
    public function setAdditionalEmailAddresses($additional_email_addresses)
    {
        $this->container['additional_email_addresses'] = $additional_email_addresses;

        return $this;
    }

    /**
     * Gets allow_invoice_edit
     * @return bool
     */
    public function getAllowInvoiceEdit()
    {
        return $this->container['allow_invoice_edit'];
    }

    /**
     * Sets allow_invoice_edit
     * @param bool $allow_invoice_edit Indicates if associated invoices can be edited. **Character limit**: 5 **Values**: `true`, `false` (default if left null)
     * @return $this
     */
    public function setAllowInvoiceEdit($allow_invoice_edit)
    {
        $this->container['allow_invoice_edit'] = $allow_invoice_edit;

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
     * @param bool $auto_pay Indicates if future payments are automatically collected when they're due during a Payment Run. **Character limit**: 5 **Values**: `true`, `false` (default)
     * @return $this
     */
    public function setAutoPay($auto_pay)
    {
        $this->container['auto_pay'] = $auto_pay;

        return $this;
    }

    /**
     * Gets balance
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param double $balance Current outstanding balance for the account. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param string $batch Organizes your customer accounts into groups to optimize your billing and payment operations. Required if use the [subscribe()](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E_SOAP_API_Calls/subscribe_call) call, optional for other supported calls. **Character limit**: 20 **Values**:any system-defined batch (`Batch1` - `Batch50 `or by name).
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;

        return $this;
    }

    /**
     * Gets bcd_setting_option
     * @return string
     */
    public function getBcdSettingOption()
    {
        return $this->container['bcd_setting_option'];
    }

    /**
     * Sets bcd_setting_option
     * @param string $bcd_setting_option Billing cycle day setting option. **Character limit**: 9 **Values**: `AutoSet`, `ManualSet`
     * @return $this
     */
    public function setBcdSettingOption($bcd_setting_option)
    {
        $this->container['bcd_setting_option'] = $bcd_setting_option;

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
     * @param int $bill_cycle_day Billing cycle day (BCD) on which bill runs generate invoices for the account. **Character limit**: 2 **Values**: any activated system-defined bill cycle day (`1` - `31`)
     * @return $this
     */
    public function setBillCycleDay($bill_cycle_day)
    {
        $this->container['bill_cycle_day'] = $bill_cycle_day;

        return $this;
    }

    /**
     * Gets bill_to_id
     * @return string
     */
    public function getBillToId()
    {
        return $this->container['bill_to_id'];
    }

    /**
     * Sets bill_to_id
     * @param string $bill_to_id ID of the person to bill for the account. **Character limit**: 32 **Values**: a valid contact ID for the account
     * @return $this
     */
    public function setBillToId($bill_to_id)
    {
        $this->container['bill_to_id'] = $bill_to_id;

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
     * @param string $communication_profile_id Associates the account with a specified communication profile. **Character limit**: 32 **Values**: a valid communication profile ID
     * @return $this
     */
    public function setCommunicationProfileId($communication_profile_id)
    {
        $this->container['communication_profile_id'] = $communication_profile_id;

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
     * @param string $created_by_id ID of the Zuora user who created the Account object. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $created_date Date when the Account object was created. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets credit_balance
     * @return double
     */
    public function getCreditBalance()
    {
        return $this->container['credit_balance'];
    }

    /**
     * Sets credit_balance
     * @param double $credit_balance Total credit balance for the account. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setCreditBalance($credit_balance)
    {
        $this->container['credit_balance'] = $credit_balance;

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
     * @param string $crm_id CRM account ID for the account. A CRM is a customer relationship management system, such as Salesforce.com. **Character limit**: 100 **Values**: a string of 100 characters or fewer
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
     * @param string $currency Currency that the customer is billed in. See [a currency value defined in the Zuora Ui admin settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Customize_Currencies)
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer_service_rep_name
     * @return string
     */
    public function getCustomerServiceRepName()
    {
        return $this->container['customer_service_rep_name'];
    }

    /**
     * Sets customer_service_rep_name
     * @param string $customer_service_rep_name Name of the account's customer service representative, if applicable. **Character limit**: 50 **Values**: a string of 50 characters or fewer
     * @return $this
     */
    public function setCustomerServiceRepName($customer_service_rep_name)
    {
        $this->container['customer_service_rep_name'] = $customer_service_rep_name;

        return $this;
    }

    /**
     * Gets default_payment_method_id
     * @return string
     */
    public function getDefaultPaymentMethodId()
    {
        return $this->container['default_payment_method_id'];
    }

    /**
     * Sets default_payment_method_id
     * @param string $default_payment_method_id ID of the default payment method for the account. This field is required if the AutoPay field is set to `true`. **Character limit**: 32 **Values**: [a valid ID for an existing payment method](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/PaymentMethod)
     * @return $this
     */
    public function setDefaultPaymentMethodId($default_payment_method_id)
    {
        $this->container['default_payment_method_id'] = $default_payment_method_id;

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
     * Gets invoice_delivery_prefs_email
     * @return bool
     */
    public function getInvoiceDeliveryPrefsEmail()
    {
        return $this->container['invoice_delivery_prefs_email'];
    }

    /**
     * Sets invoice_delivery_prefs_email
     * @param bool $invoice_delivery_prefs_email Indicates if the customer wants to receive invoices through email.  **Character limit**: 5 **Values**: `true`, `false` (default if left null)
     * @return $this
     */
    public function setInvoiceDeliveryPrefsEmail($invoice_delivery_prefs_email)
    {
        $this->container['invoice_delivery_prefs_email'] = $invoice_delivery_prefs_email;

        return $this;
    }

    /**
     * Gets invoice_delivery_prefs_print
     * @return bool
     */
    public function getInvoiceDeliveryPrefsPrint()
    {
        return $this->container['invoice_delivery_prefs_print'];
    }

    /**
     * Sets invoice_delivery_prefs_print
     * @param bool $invoice_delivery_prefs_print Indicates if the customer wants to receive printed invoices, such as through postal mail. **Character limit**: 5 **Values**: `true`, `false` (default if left null)
     * @return $this
     */
    public function setInvoiceDeliveryPrefsPrint($invoice_delivery_prefs_print)
    {
        $this->container['invoice_delivery_prefs_print'] = $invoice_delivery_prefs_print;

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
     * @param string $invoice_template_id The ID of the invoice template. Each customer account can use a specific invoice template for invoice generation. **Character limit**: 32 **Values**: a[ valid template ID configured in Z-Billing Settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Manage_Invoice_Rules_and_Templates) To find the ID of your current invoice template: In Zuora, navigate to **Settings > Z-Billing > Manage Invoice Rules and Templates** and click **Show Id **next to the template you want to use.
     * @return $this
     */
    public function setInvoiceTemplateId($invoice_template_id)
    {
        $this->container['invoice_template_id'] = $invoice_template_id;

        return $this;
    }

    /**
     * Gets last_invoice_date
     * @return \DateTime
     */
    public function getLastInvoiceDate()
    {
        return $this->container['last_invoice_date'];
    }

    /**
     * Sets last_invoice_date
     * @param \DateTime $last_invoice_date The date when the previous invoice was generated for the account. The field value is null if no invoice has ever been generated for the account. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setLastInvoiceDate($last_invoice_date)
    {
        $this->container['last_invoice_date'] = $last_invoice_date;

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
     * @param string $name Name of the account as displayed in the Zuora UI. **Character limit**: 255 **Values**: a string of 255 characters or fewer
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
     * @param string $notes Comments about the account. **Character limit**: 65,535 **Values**: a string of 65,535 characters
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets parent_id
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param string $parent_id Identifier of the parent customer account for this Account object. Use this field if you have customer hierarchy enabled. **Character limit**: 32 **Values**: [a valid account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account#Id)
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * @param string $payment_gateway Gateway used for processing electronic payments and refunds. **Character limit**: 40 **Values**: one of the following:  - a valid configured gateway name - Null to inherit the default value set in Z-Payment Settings
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
     * @param string $payment_term Indicates when the customer pays for subscriptions. **Character limit**: 100 **Values**: [a valid, active payment term defined in the web-based UI administrative settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Payment_Terms)
     * @return $this
     */
    public function setPaymentTerm($payment_term)
    {
        $this->container['payment_term'] = $payment_term;

        return $this;
    }

    /**
     * Gets purchase_order_number
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     * @param string $purchase_order_number The number of the purchase order associated with this account. Purchase order information generally comes from customers. **Character limit**: 100 **Values**: a string of 100 characters or fewer
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets sales_rep_name
     * @return string
     */
    public function getSalesRepName()
    {
        return $this->container['sales_rep_name'];
    }

    /**
     * Sets sales_rep_name
     * @param string $sales_rep_name The name of the sales representative associated with this account, if applicable. **Character limit**: 50 **Values**: a string of 50 characters or fewer
     * @return $this
     */
    public function setSalesRepName($sales_rep_name)
    {
        $this->container['sales_rep_name'] = $sales_rep_name;

        return $this;
    }

    /**
     * Gets sold_to_id
     * @return string
     */
    public function getSoldToId()
    {
        return $this->container['sold_to_id'];
    }

    /**
     * Sets sold_to_id
     * @param string $sold_to_id ID of the person who bought the subscription associated with the account. **Character limit**: 32 **Values**: [a valid contact ID for the account](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Contact)
     * @return $this
     */
    public function setSoldToId($sold_to_id)
    {
        $this->container['sold_to_id'] = $sold_to_id;

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
     * @param string $status Status of the account in the system. **Character limit**: 8 **Values**: one of the following:  - leave null if you're using `subscribe()` - if you're using `create()`: - `Draft` - `Active` - `Canceled`
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tax_company_code
     * @return string
     */
    public function getTaxCompanyCode()
    {
        return $this->container['tax_company_code'];
    }

    /**
     * Sets tax_company_code
     * @param string $tax_company_code Unique code that identifies a company account in Avalara. Use this field to calculate taxes based on origin and sold-to addresses in Avalara. This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).  **Character limit**: 50 **Values**: a valid company code
     * @return $this
     */
    public function setTaxCompanyCode($tax_company_code)
    {
        $this->container['tax_company_code'] = $tax_company_code;

        return $this;
    }

    /**
     * Gets tax_exempt_certificate_id
     * @return string
     */
    public function getTaxExemptCertificateId()
    {
        return $this->container['tax_exempt_certificate_id'];
    }

    /**
     * Sets tax_exempt_certificate_id
     * @param string $tax_exempt_certificate_id ID of your customer's tax exemption certificate. **Character limit**: 32 **Values**: a string of 32 characters or fewer
     * @return $this
     */
    public function setTaxExemptCertificateId($tax_exempt_certificate_id)
    {
        $this->container['tax_exempt_certificate_id'] = $tax_exempt_certificate_id;

        return $this;
    }

    /**
     * Gets tax_exempt_certificate_type
     * @return string
     */
    public function getTaxExemptCertificateType()
    {
        return $this->container['tax_exempt_certificate_type'];
    }

    /**
     * Sets tax_exempt_certificate_type
     * @param string $tax_exempt_certificate_type Type of the tax exemption certificate that your customer holds.  **Character limit**: 32 **Values**: a string of 32 characters or fewer
     * @return $this
     */
    public function setTaxExemptCertificateType($tax_exempt_certificate_type)
    {
        $this->container['tax_exempt_certificate_type'] = $tax_exempt_certificate_type;

        return $this;
    }

    /**
     * Gets tax_exempt_description
     * @return string
     */
    public function getTaxExemptDescription()
    {
        return $this->container['tax_exempt_description'];
    }

    /**
     * Sets tax_exempt_description
     * @param string $tax_exempt_description Description of the tax exemption certificate that your customer holds. **Character limit**: 500 **Values**: a string of 500 characters or fewer
     * @return $this
     */
    public function setTaxExemptDescription($tax_exempt_description)
    {
        $this->container['tax_exempt_description'] = $tax_exempt_description;

        return $this;
    }

    /**
     * Gets tax_exempt_effective_date
     * @return \DateTime
     */
    public function getTaxExemptEffectiveDate()
    {
        return $this->container['tax_exempt_effective_date'];
    }

    /**
     * Sets tax_exempt_effective_date
     * @param \DateTime $tax_exempt_effective_date Date when the the customer's tax exemption starts. **Character limit**: 29 **Version notes**: requires Z-Tax
     * @return $this
     */
    public function setTaxExemptEffectiveDate($tax_exempt_effective_date)
    {
        $this->container['tax_exempt_effective_date'] = $tax_exempt_effective_date;

        return $this;
    }

    /**
     * Gets tax_exempt_expiration_date
     * @return \DateTime
     */
    public function getTaxExemptExpirationDate()
    {
        return $this->container['tax_exempt_expiration_date'];
    }

    /**
     * Sets tax_exempt_expiration_date
     * @param \DateTime $tax_exempt_expiration_date Date when the customer's tax exemption certificate expires  **Character limit**: 29 **Version notes**: requires Z-Tax
     * @return $this
     */
    public function setTaxExemptExpirationDate($tax_exempt_expiration_date)
    {
        $this->container['tax_exempt_expiration_date'] = $tax_exempt_expiration_date;

        return $this;
    }

    /**
     * Gets tax_exempt_issuing_jurisdiction
     * @return string
     */
    public function getTaxExemptIssuingJurisdiction()
    {
        return $this->container['tax_exempt_issuing_jurisdiction'];
    }

    /**
     * Sets tax_exempt_issuing_jurisdiction
     * @param string $tax_exempt_issuing_jurisdiction Indicates the jurisdiction in which the customer's tax exemption certificate was issued. **Character limit**: 32 **Values**: a string of 32 characters or fewer
     * @return $this
     */
    public function setTaxExemptIssuingJurisdiction($tax_exempt_issuing_jurisdiction)
    {
        $this->container['tax_exempt_issuing_jurisdiction'] = $tax_exempt_issuing_jurisdiction;

        return $this;
    }

    /**
     * Gets tax_exempt_status
     * @return string
     */
    public function getTaxExemptStatus()
    {
        return $this->container['tax_exempt_status'];
    }

    /**
     * Sets tax_exempt_status
     * @param string $tax_exempt_status Status of the account's tax exemption. Required if you use Z-Tax. This field is unavailable if you don't use Z-Tax. **Character limit**: 19 **Values**: one of the following:  - `Yes` - `No` - `PendingVerification`
     * @return $this
     */
    public function setTaxExemptStatus($tax_exempt_status)
    {
        $this->container['tax_exempt_status'] = $tax_exempt_status;

        return $this;
    }

    /**
     * Gets total_invoice_balance
     * @return double
     */
    public function getTotalInvoiceBalance()
    {
        return $this->container['total_invoice_balance'];
    }

    /**
     * Sets total_invoice_balance
     * @param double $total_invoice_balance Total balance of the account's invoices. **Character limit**: 16 **Values**: a valid currency value
     * @return $this
     */
    public function setTotalInvoiceBalance($total_invoice_balance)
    {
        $this->container['total_invoice_balance'] = $total_invoice_balance;

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
     * @param string $updated_by_id ID of the user who last updated the account. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $updated_date Date when the account was last updated. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets vat_id
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     * @param string $vat_id EU Value Added Tax ID. This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).  **Character limit**: 25 **Values**: a valid Value Added Tax ID
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

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


