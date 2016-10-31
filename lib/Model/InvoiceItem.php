<?php
/**
 * InvoiceItem
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
 * InvoiceItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoiceItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'accounting_code' => 'string',
        'applied_to_invoice_item_id' => 'string',
        'charge_amount' => 'double',
        'charge_date' => '\DateTime',
        'charge_description' => 'string',
        'charge_id' => 'string',
        'charge_name' => 'string',
        'charge_number' => 'string',
        'charge_type' => 'string',
        'created_by_id' => 'string',
        'created_date' => '\DateTime',
        'id' => 'string',
        'integration_id__ns' => 'string',
        'integration_status__ns' => 'string',
        'invoice_id' => 'string',
        'processing_type' => 'double',
        'product_description' => 'string',
        'product_id' => 'string',
        'product_name' => 'string',
        'product_rate_plan_charge_id' => 'string',
        'quantity' => 'double',
        'rate_plan_charge_id' => 'string',
        'rev_rec_code' => 'string',
        'rev_rec_start_date' => '\DateTime',
        'rev_rec_trigger_condition' => 'string',
        'sku' => 'string',
        'service_end_date' => '\DateTime',
        'service_start_date' => '\DateTime',
        'subscription_id' => 'string',
        'subscription_number' => 'string',
        'sync_date__ns' => 'string',
        'tax_amount' => 'double',
        'tax_code' => 'string',
        'tax_exempt_amount' => 'double',
        'tax_mode' => 'string',
        'uom' => 'string',
        'unit_price' => 'double',
        'updated_by_id' => 'string',
        'updated_date' => '\DateTime',
        'fields_to_null' => 'string'
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
        'accounting_code' => 'AccountingCode',
        'applied_to_invoice_item_id' => 'AppliedToInvoiceItemId',
        'charge_amount' => 'ChargeAmount',
        'charge_date' => 'ChargeDate',
        'charge_description' => 'ChargeDescription',
        'charge_id' => 'ChargeId',
        'charge_name' => 'ChargeName',
        'charge_number' => 'ChargeNumber',
        'charge_type' => 'ChargeType',
        'created_by_id' => 'CreatedById',
        'created_date' => 'CreatedDate',
        'id' => 'Id',
        'integration_id__ns' => 'IntegrationId__NS',
        'integration_status__ns' => 'IntegrationStatus__NS',
        'invoice_id' => 'InvoiceId',
        'processing_type' => 'ProcessingType',
        'product_description' => 'ProductDescription',
        'product_id' => 'ProductId',
        'product_name' => 'ProductName',
        'product_rate_plan_charge_id' => 'ProductRatePlanChargeId',
        'quantity' => 'Quantity',
        'rate_plan_charge_id' => 'RatePlanChargeId',
        'rev_rec_code' => 'RevRecCode',
        'rev_rec_start_date' => 'RevRecStartDate',
        'rev_rec_trigger_condition' => 'RevRecTriggerCondition',
        'sku' => 'SKU',
        'service_end_date' => 'ServiceEndDate',
        'service_start_date' => 'ServiceStartDate',
        'subscription_id' => 'SubscriptionId',
        'subscription_number' => 'SubscriptionNumber',
        'sync_date__ns' => 'SyncDate__NS',
        'tax_amount' => 'TaxAmount',
        'tax_code' => 'TaxCode',
        'tax_exempt_amount' => 'TaxExemptAmount',
        'tax_mode' => 'TaxMode',
        'uom' => 'UOM',
        'unit_price' => 'UnitPrice',
        'updated_by_id' => 'UpdatedById',
        'updated_date' => 'UpdatedDate',
        'fields_to_null' => 'fieldsToNull'
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
        'accounting_code' => 'setAccountingCode',
        'applied_to_invoice_item_id' => 'setAppliedToInvoiceItemId',
        'charge_amount' => 'setChargeAmount',
        'charge_date' => 'setChargeDate',
        'charge_description' => 'setChargeDescription',
        'charge_id' => 'setChargeId',
        'charge_name' => 'setChargeName',
        'charge_number' => 'setChargeNumber',
        'charge_type' => 'setChargeType',
        'created_by_id' => 'setCreatedById',
        'created_date' => 'setCreatedDate',
        'id' => 'setId',
        'integration_id__ns' => 'setIntegrationIdNs',
        'integration_status__ns' => 'setIntegrationStatusNs',
        'invoice_id' => 'setInvoiceId',
        'processing_type' => 'setProcessingType',
        'product_description' => 'setProductDescription',
        'product_id' => 'setProductId',
        'product_name' => 'setProductName',
        'product_rate_plan_charge_id' => 'setProductRatePlanChargeId',
        'quantity' => 'setQuantity',
        'rate_plan_charge_id' => 'setRatePlanChargeId',
        'rev_rec_code' => 'setRevRecCode',
        'rev_rec_start_date' => 'setRevRecStartDate',
        'rev_rec_trigger_condition' => 'setRevRecTriggerCondition',
        'sku' => 'setSku',
        'service_end_date' => 'setServiceEndDate',
        'service_start_date' => 'setServiceStartDate',
        'subscription_id' => 'setSubscriptionId',
        'subscription_number' => 'setSubscriptionNumber',
        'sync_date__ns' => 'setSyncDateNs',
        'tax_amount' => 'setTaxAmount',
        'tax_code' => 'setTaxCode',
        'tax_exempt_amount' => 'setTaxExemptAmount',
        'tax_mode' => 'setTaxMode',
        'uom' => 'setUom',
        'unit_price' => 'setUnitPrice',
        'updated_by_id' => 'setUpdatedById',
        'updated_date' => 'setUpdatedDate',
        'fields_to_null' => 'setFieldsToNull'
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
        'accounting_code' => 'getAccountingCode',
        'applied_to_invoice_item_id' => 'getAppliedToInvoiceItemId',
        'charge_amount' => 'getChargeAmount',
        'charge_date' => 'getChargeDate',
        'charge_description' => 'getChargeDescription',
        'charge_id' => 'getChargeId',
        'charge_name' => 'getChargeName',
        'charge_number' => 'getChargeNumber',
        'charge_type' => 'getChargeType',
        'created_by_id' => 'getCreatedById',
        'created_date' => 'getCreatedDate',
        'id' => 'getId',
        'integration_id__ns' => 'getIntegrationIdNs',
        'integration_status__ns' => 'getIntegrationStatusNs',
        'invoice_id' => 'getInvoiceId',
        'processing_type' => 'getProcessingType',
        'product_description' => 'getProductDescription',
        'product_id' => 'getProductId',
        'product_name' => 'getProductName',
        'product_rate_plan_charge_id' => 'getProductRatePlanChargeId',
        'quantity' => 'getQuantity',
        'rate_plan_charge_id' => 'getRatePlanChargeId',
        'rev_rec_code' => 'getRevRecCode',
        'rev_rec_start_date' => 'getRevRecStartDate',
        'rev_rec_trigger_condition' => 'getRevRecTriggerCondition',
        'sku' => 'getSku',
        'service_end_date' => 'getServiceEndDate',
        'service_start_date' => 'getServiceStartDate',
        'subscription_id' => 'getSubscriptionId',
        'subscription_number' => 'getSubscriptionNumber',
        'sync_date__ns' => 'getSyncDateNs',
        'tax_amount' => 'getTaxAmount',
        'tax_code' => 'getTaxCode',
        'tax_exempt_amount' => 'getTaxExemptAmount',
        'tax_mode' => 'getTaxMode',
        'uom' => 'getUom',
        'unit_price' => 'getUnitPrice',
        'updated_by_id' => 'getUpdatedById',
        'updated_date' => 'getUpdatedDate',
        'fields_to_null' => 'getFieldsToNull'
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
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['applied_to_invoice_item_id'] = isset($data['applied_to_invoice_item_id']) ? $data['applied_to_invoice_item_id'] : null;
        $this->container['charge_amount'] = isset($data['charge_amount']) ? $data['charge_amount'] : null;
        $this->container['charge_date'] = isset($data['charge_date']) ? $data['charge_date'] : null;
        $this->container['charge_description'] = isset($data['charge_description']) ? $data['charge_description'] : null;
        $this->container['charge_id'] = isset($data['charge_id']) ? $data['charge_id'] : null;
        $this->container['charge_name'] = isset($data['charge_name']) ? $data['charge_name'] : null;
        $this->container['charge_number'] = isset($data['charge_number']) ? $data['charge_number'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['integration_id__ns'] = isset($data['integration_id__ns']) ? $data['integration_id__ns'] : null;
        $this->container['integration_status__ns'] = isset($data['integration_status__ns']) ? $data['integration_status__ns'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['processing_type'] = isset($data['processing_type']) ? $data['processing_type'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['product_rate_plan_charge_id'] = isset($data['product_rate_plan_charge_id']) ? $data['product_rate_plan_charge_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['rate_plan_charge_id'] = isset($data['rate_plan_charge_id']) ? $data['rate_plan_charge_id'] : null;
        $this->container['rev_rec_code'] = isset($data['rev_rec_code']) ? $data['rev_rec_code'] : null;
        $this->container['rev_rec_start_date'] = isset($data['rev_rec_start_date']) ? $data['rev_rec_start_date'] : null;
        $this->container['rev_rec_trigger_condition'] = isset($data['rev_rec_trigger_condition']) ? $data['rev_rec_trigger_condition'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['service_end_date'] = isset($data['service_end_date']) ? $data['service_end_date'] : null;
        $this->container['service_start_date'] = isset($data['service_start_date']) ? $data['service_start_date'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['subscription_number'] = isset($data['subscription_number']) ? $data['subscription_number'] : null;
        $this->container['sync_date__ns'] = isset($data['sync_date__ns']) ? $data['sync_date__ns'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['tax_exempt_amount'] = isset($data['tax_exempt_amount']) ? $data['tax_exempt_amount'] : null;
        $this->container['tax_mode'] = isset($data['tax_mode']) ? $data['tax_mode'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['updated_by_id'] = isset($data['updated_by_id']) ? $data['updated_by_id'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['fields_to_null'] = isset($data['fields_to_null']) ? $data['fields_to_null'] : null;
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
     * Gets accounting_code
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->container['accounting_code'];
    }

    /**
     * Sets accounting_code
     * @param string $accounting_code The accounting code for the item's charge. Accounting codes group transactions that contain similar accounting attributes. **Character limit**: 100 **Values**: inherited from `RatePlanCharge.AccountingCode`
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets applied_to_invoice_item_id
     * @return string
     */
    public function getAppliedToInvoiceItemId()
    {
        return $this->container['applied_to_invoice_item_id'];
    }

    /**
     * Sets applied_to_invoice_item_id
     * @param string $applied_to_invoice_item_id Associates a discount invoice item to a specific invoice item. **Character limit**: 32 **Values**: inherited from the ID of the charge that a discount applies to
     * @return $this
     */
    public function setAppliedToInvoiceItemId($applied_to_invoice_item_id)
    {
        $this->container['applied_to_invoice_item_id'] = $applied_to_invoice_item_id;

        return $this;
    }

    /**
     * Gets charge_amount
     * @return double
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     * @param double $charge_amount The amount being charged for the invoice item. This amount doesn't include taxes regardless if the charge's tax mode is inclusive or exclusive. **Character limit**: **Values**: automatically calculated from multiple fields in multiple objects
     * @return $this
     */
    public function setChargeAmount($charge_amount)
    {
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }

    /**
     * Gets charge_date
     * @return \DateTime
     */
    public function getChargeDate()
    {
        return $this->container['charge_date'];
    }

    /**
     * Sets charge_date
     * @param \DateTime $charge_date The date when the Invoice Item is created . **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setChargeDate($charge_date)
    {
        $this->container['charge_date'] = $charge_date;

        return $this;
    }

    /**
     * Gets charge_description
     * @return string
     */
    public function getChargeDescription()
    {
        return $this->container['charge_description'];
    }

    /**
     * Sets charge_description
     * @param string $charge_description A description of the invoice item's charge. **Character limit**: 500 **Values**: inherited from `RatePlanCharge.Description`
     * @return $this
     */
    public function setChargeDescription($charge_description)
    {
        $this->container['charge_description'] = $charge_description;

        return $this;
    }

    /**
     * Gets charge_id
     * @return string
     */
    public function getChargeId()
    {
        return $this->container['charge_id'];
    }

    /**
     * Sets charge_id
     * @param string $charge_id The ID of the rate plan charge that is associated with this invoice item upon object creation. **Character limit**: 32 **Values**: inherited from `RatePlanCharge.Id`
     * @return $this
     */
    public function setChargeId($charge_id)
    {
        $this->container['charge_id'] = $charge_id;

        return $this;
    }

    /**
     * Gets charge_name
     * @return string
     */
    public function getChargeName()
    {
        return $this->container['charge_name'];
    }

    /**
     * Sets charge_name
     * @param string $charge_name The name of the invoice item's charge. **Character limi**t: 50 **Values: **inherited from `RatePlanCharge.Name`
     * @return $this
     */
    public function setChargeName($charge_name)
    {
        $this->container['charge_name'] = $charge_name;

        return $this;
    }

    /**
     * Gets charge_number
     * @return string
     */
    public function getChargeNumber()
    {
        return $this->container['charge_number'];
    }

    /**
     * Sets charge_number
     * @param string $charge_number The unique identifier of the invoice item's charge. **Character limit:** 50 **Values:** inherited from `RatePlanCharge.ChargeNumber`
     * @return $this
     */
    public function setChargeNumber($charge_number)
    {
        $this->container['charge_number'] = $charge_number;

        return $this;
    }

    /**
     * Gets charge_type
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     * @param string $charge_type Specifies the type of charge. **Character limit**: 9 **Values**: one of the following:  - `OneTime` - `Recurring` - `Usage`
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

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
     * @param string $created_by_id The user ID of the person who created the invoice item. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $created_date The date the invoice item was created. **Character limit:** 29 **Values**: automatically generated
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

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
     * @param string $id The ID of this object. Upon creation, the ID of this object is `InvoiceItemId`. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets integration_id__ns
     * @return string
     */
    public function getIntegrationIdNs()
    {
        return $this->container['integration_id__ns'];
    }

    /**
     * Sets integration_id__ns
     * @param string $integration_id__ns 
     * @return $this
     */
    public function setIntegrationIdNs($integration_id__ns)
    {
        $this->container['integration_id__ns'] = $integration_id__ns;

        return $this;
    }

    /**
     * Gets integration_status__ns
     * @return string
     */
    public function getIntegrationStatusNs()
    {
        return $this->container['integration_status__ns'];
    }

    /**
     * Sets integration_status__ns
     * @param string $integration_status__ns 
     * @return $this
     */
    public function setIntegrationStatusNs($integration_status__ns)
    {
        $this->container['integration_status__ns'] = $integration_status__ns;

        return $this;
    }

    /**
     * Gets invoice_id
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     * @param string $invoice_id The ID of the invoice that's associated with this invoice item. **Character limit**: 32 **Values**: inherited from `Invoice.Id`
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets processing_type
     * @return double
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     * @param double $processing_type Identifies the kind of charge where 0 is a charge, 1 is a discount, 2 is a prepayment, and 3 is a tax. The returned value is text not decimal on data sources. **Character limit**: **Values: **  - 0: charge - 1: discount - 2: prepayment - 3: tax
     * @return $this
     */
    public function setProcessingType($processing_type)
    {
        $this->container['processing_type'] = $processing_type;

        return $this;
    }

    /**
     * Gets product_description
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     * @param string $product_description A description of the product associated with this invoice item. **Character limit**: 500 **Values**: inherited from `Product.Description`
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets product_id
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param string $product_id The ID of the product associated with this invoice item. **Character limit**: 32 **Values**: inherited from `Product.Id`
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_name
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     * @param string $product_name The name of the product associated with this invoice item. **Character limit**: 255 **Values: **inherited from `Product.Name`
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets product_rate_plan_charge_id
     * @return string
     */
    public function getProductRatePlanChargeId()
    {
        return $this->container['product_rate_plan_charge_id'];
    }

    /**
     * Sets product_rate_plan_charge_id
     * @param string $product_rate_plan_charge_id The ID of the rate plan charge that's associated with this invoice item. **Character limit**: 32 **Values**: inherited from `ProductRatePlanCharge.Id` You cannot `query()` for this field. Only the s`ubscribe()` preview and the `amend()` preview calls will return the value of this field in the response.
     * @return $this
     */
    public function setProductRatePlanChargeId($product_rate_plan_charge_id)
    {
        $this->container['product_rate_plan_charge_id'] = $product_rate_plan_charge_id;

        return $this;
    }

    /**
     * Gets quantity
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param double $quantity The number of units for this invoice item. **Values**: inherited from `RatePlanCharge.Quantity`
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets rate_plan_charge_id
     * @return string
     */
    public function getRatePlanChargeId()
    {
        return $this->container['rate_plan_charge_id'];
    }

    /**
     * Sets rate_plan_charge_id
     * @param string $rate_plan_charge_id The ID of the rate plan charge that's associated with this invoice item. **Character limit**: 32 **Values**: inherited from `RatePlanCharge.Id`
     * @return $this
     */
    public function setRatePlanChargeId($rate_plan_charge_id)
    {
        $this->container['rate_plan_charge_id'] = $rate_plan_charge_id;

        return $this;
    }

    /**
     * Gets rev_rec_code
     * @return string
     */
    public function getRevRecCode()
    {
        return $this->container['rev_rec_code'];
    }

    /**
     * Sets rev_rec_code
     * @param string $rev_rec_code Associates this invoice item with a specific revenue recognition code. **Character limit**: 32 **Values**: inherited from `ProductRatePlanCharge.RevRecCode`
     * @return $this
     */
    public function setRevRecCode($rev_rec_code)
    {
        $this->container['rev_rec_code'] = $rev_rec_code;

        return $this;
    }

    /**
     * Gets rev_rec_start_date
     * @return \DateTime
     */
    public function getRevRecStartDate()
    {
        return $this->container['rev_rec_start_date'];
    }

    /**
     * Sets rev_rec_start_date
     * @param \DateTime $rev_rec_start_date The date when revenue recognition is triggered. **Character limit**: 29 **Values**: generated from `InvoiceItem.RevRecTriggerCondition`
     * @return $this
     */
    public function setRevRecStartDate($rev_rec_start_date)
    {
        $this->container['rev_rec_start_date'] = $rev_rec_start_date;

        return $this;
    }

    /**
     * Gets rev_rec_trigger_condition
     * @return string
     */
    public function getRevRecTriggerCondition()
    {
        return $this->container['rev_rec_trigger_condition'];
    }

    /**
     * Sets rev_rec_trigger_condition
     * @param string $rev_rec_trigger_condition Specifies when revenue recognition begins based on a triggering event. **Character limit**: **Values**: inherited from `[ProductRatePlanCharge](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/ProductRatePlanCharge).RevRecTriggerCondition`
     * @return $this
     */
    public function setRevRecTriggerCondition($rev_rec_trigger_condition)
    {
        $this->container['rev_rec_trigger_condition'] = $rev_rec_trigger_condition;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku The unique SKU for the product associated with this invoice item. **Character limit**: 255 **Values**: inherited from `Product.SKU`
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets service_end_date
     * @return \DateTime
     */
    public function getServiceEndDate()
    {
        return $this->container['service_end_date'];
    }

    /**
     * Sets service_end_date
     * @param \DateTime $service_end_date The end date of the service period associated with this invoice item. Service ends one second before the date in this value. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setServiceEndDate($service_end_date)
    {
        $this->container['service_end_date'] = $service_end_date;

        return $this;
    }

    /**
     * Gets service_start_date
     * @return \DateTime
     */
    public function getServiceStartDate()
    {
        return $this->container['service_start_date'];
    }

    /**
     * Sets service_start_date
     * @param \DateTime $service_start_date The start date of the service period associated with this invoice item. If the associated charge is a one-time fee, then this date is the date of that charge. **Character limit:** 29 **Values**: automatically generated
     * @return $this
     */
    public function setServiceStartDate($service_start_date)
    {
        $this->container['service_start_date'] = $service_start_date;

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
     * @param string $subscription_id The ID of the subscription associated with the invoice item. **Character limit**: 32 **Values**: inherited from `Subscription.Id`
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets subscription_number
     * @return string
     */
    public function getSubscriptionNumber()
    {
        return $this->container['subscription_number'];
    }

    /**
     * Sets subscription_number
     * @param string $subscription_number The number of the subscription associated with the invoice item. **Character limit**: **Values**:
     * @return $this
     */
    public function setSubscriptionNumber($subscription_number)
    {
        $this->container['subscription_number'] = $subscription_number;

        return $this;
    }

    /**
     * Gets sync_date__ns
     * @return string
     */
    public function getSyncDateNs()
    {
        return $this->container['sync_date__ns'];
    }

    /**
     * Sets sync_date__ns
     * @param string $sync_date__ns 
     * @return $this
     */
    public function setSyncDateNs($sync_date__ns)
    {
        $this->container['sync_date__ns'] = $sync_date__ns;

        return $this;
    }

    /**
     * Gets tax_amount
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     * @param double $tax_amount The amount of tax applied to the invoice item's charge. **Character limit**: **Values**: calculated from multiple fields in the ProductRatePlanCharge object
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_code
     * @return string
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     * @param string $tax_code Specifies the tax code for taxation rules. **Character limit**: 6 **Values**: inherited from `ProductRatePlanCharge.TaxCode`
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets tax_exempt_amount
     * @return double
     */
    public function getTaxExemptAmount()
    {
        return $this->container['tax_exempt_amount'];
    }

    /**
     * Sets tax_exempt_amount
     * @param double $tax_exempt_amount The amount of the invoice item's charge that's tax exempt. **Character limit**: **Values**: calculated from multiple fields in the ProductRatePlanCharge object
     * @return $this
     */
    public function setTaxExemptAmount($tax_exempt_amount)
    {
        $this->container['tax_exempt_amount'] = $tax_exempt_amount;

        return $this;
    }

    /**
     * Gets tax_mode
     * @return string
     */
    public function getTaxMode()
    {
        return $this->container['tax_mode'];
    }

    /**
     * Sets tax_mode
     * @param string $tax_mode The tax mode of the invoice item. **Character limit**: 12 **Values**: `TaxExclusive`, `TaxInclusive`
     * @return $this
     */
    public function setTaxMode($tax_mode)
    {
        $this->container['tax_mode'] = $tax_mode;

        return $this;
    }

    /**
     * Gets uom
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     * @param string $uom Specifies the units to measure usage. Units of measure are configured in the web-based UI: **Z-Billing > Settings** **Character limit**: **Values**: inherited from `ProductRatePlanCharge.UOM`
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets unit_price
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     * @param double $unit_price The per-unit price of the invoice item. **Character limit**: **Values**: calculated from multiple fields in ProductRatePlanCharge and ProductRatePlanChargeTier objets
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

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
     * @param string $updated_by_id The ID of the user who last updated the invoice item. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $updated_date The date when the invoice item was last updated. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets fields_to_null
     * @return string
     */
    public function getFieldsToNull()
    {
        return $this->container['fields_to_null'];
    }

    /**
     * Sets fields_to_null
     * @param string $fields_to_null 
     * @return $this
     */
    public function setFieldsToNull($fields_to_null)
    {
        $this->container['fields_to_null'] = $fields_to_null;

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


