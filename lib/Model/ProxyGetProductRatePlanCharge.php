<?php
/**
 * ProxyGetProductRatePlanCharge
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
 * ProxyGetProductRatePlanCharge Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProxyGetProductRatePlanCharge implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProxyGetProductRatePlanCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'accounting_code' => 'string',
        'apply_discount_to' => 'string',
        'bill_cycle_day' => 'int',
        'bill_cycle_type' => 'string',
        'billing_period' => 'string',
        'billing_period_alignment' => 'string',
        'billing_timing' => 'string',
        'charge_model' => 'string',
        'charge_type' => 'string',
        'created_by_id' => 'string',
        'created_date' => '\DateTime',
        'default_quantity' => 'double',
        'deferred_revenue_account' => 'string',
        'description' => 'string',
        'discount_level' => 'string',
        'end_date_condition' => 'string',
        'id' => 'string',
        'included_units' => 'double',
        'legacy_revenue_reporting' => 'bool',
        'list_price_base' => 'string',
        'max_quantity' => 'double',
        'min_quantity' => 'double',
        'name' => 'string',
        'number_of_period' => 'int',
        'overage_calculation_option' => 'string',
        'overage_unused_units_credit_option' => 'string',
        'price_change_option' => 'string',
        'price_increase_percentage' => 'double',
        'product_rate_plan_id' => 'string',
        'recognized_revenue_account' => 'string',
        'rev_rec_code' => 'string',
        'rev_rec_trigger_condition' => 'string',
        'revenue_recognition_rule_name' => 'string',
        'smoothing_model' => 'string',
        'specific_billing_period' => 'int',
        'tax_code' => 'string',
        'tax_mode' => 'string',
        'taxable' => 'bool',
        'trigger_event' => 'string',
        'uom' => 'string',
        'up_to_periods' => 'int',
        'up_to_periods_type' => 'string',
        'updated_by_id' => 'string',
        'updated_date' => '\DateTime',
        'use_discount_specific_accounting_code' => 'bool',
        'use_tenant_default_for_price_change' => 'bool',
        'weekly_bill_cycle_day' => 'string'
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
        'apply_discount_to' => 'ApplyDiscountTo',
        'bill_cycle_day' => 'BillCycleDay',
        'bill_cycle_type' => 'BillCycleType',
        'billing_period' => 'BillingPeriod',
        'billing_period_alignment' => 'BillingPeriodAlignment',
        'billing_timing' => 'BillingTiming',
        'charge_model' => 'ChargeModel',
        'charge_type' => 'ChargeType',
        'created_by_id' => 'CreatedById',
        'created_date' => 'CreatedDate',
        'default_quantity' => 'DefaultQuantity',
        'deferred_revenue_account' => 'DeferredRevenueAccount',
        'description' => 'Description',
        'discount_level' => 'DiscountLevel',
        'end_date_condition' => 'EndDateCondition',
        'id' => 'Id',
        'included_units' => 'IncludedUnits',
        'legacy_revenue_reporting' => 'LegacyRevenueReporting',
        'list_price_base' => 'ListPriceBase',
        'max_quantity' => 'MaxQuantity',
        'min_quantity' => 'MinQuantity',
        'name' => 'Name',
        'number_of_period' => 'NumberOfPeriod',
        'overage_calculation_option' => 'OverageCalculationOption',
        'overage_unused_units_credit_option' => 'OverageUnusedUnitsCreditOption',
        'price_change_option' => 'PriceChangeOption',
        'price_increase_percentage' => 'PriceIncreasePercentage',
        'product_rate_plan_id' => 'ProductRatePlanId',
        'recognized_revenue_account' => 'RecognizedRevenueAccount',
        'rev_rec_code' => 'RevRecCode',
        'rev_rec_trigger_condition' => 'RevRecTriggerCondition',
        'revenue_recognition_rule_name' => 'RevenueRecognitionRuleName',
        'smoothing_model' => 'SmoothingModel',
        'specific_billing_period' => 'SpecificBillingPeriod',
        'tax_code' => 'TaxCode',
        'tax_mode' => 'TaxMode',
        'taxable' => 'Taxable',
        'trigger_event' => 'TriggerEvent',
        'uom' => 'UOM',
        'up_to_periods' => 'UpToPeriods',
        'up_to_periods_type' => 'UpToPeriodsType',
        'updated_by_id' => 'UpdatedById',
        'updated_date' => 'UpdatedDate',
        'use_discount_specific_accounting_code' => 'UseDiscountSpecificAccountingCode',
        'use_tenant_default_for_price_change' => 'UseTenantDefaultForPriceChange',
        'weekly_bill_cycle_day' => 'WeeklyBillCycleDay'
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
        'apply_discount_to' => 'setApplyDiscountTo',
        'bill_cycle_day' => 'setBillCycleDay',
        'bill_cycle_type' => 'setBillCycleType',
        'billing_period' => 'setBillingPeriod',
        'billing_period_alignment' => 'setBillingPeriodAlignment',
        'billing_timing' => 'setBillingTiming',
        'charge_model' => 'setChargeModel',
        'charge_type' => 'setChargeType',
        'created_by_id' => 'setCreatedById',
        'created_date' => 'setCreatedDate',
        'default_quantity' => 'setDefaultQuantity',
        'deferred_revenue_account' => 'setDeferredRevenueAccount',
        'description' => 'setDescription',
        'discount_level' => 'setDiscountLevel',
        'end_date_condition' => 'setEndDateCondition',
        'id' => 'setId',
        'included_units' => 'setIncludedUnits',
        'legacy_revenue_reporting' => 'setLegacyRevenueReporting',
        'list_price_base' => 'setListPriceBase',
        'max_quantity' => 'setMaxQuantity',
        'min_quantity' => 'setMinQuantity',
        'name' => 'setName',
        'number_of_period' => 'setNumberOfPeriod',
        'overage_calculation_option' => 'setOverageCalculationOption',
        'overage_unused_units_credit_option' => 'setOverageUnusedUnitsCreditOption',
        'price_change_option' => 'setPriceChangeOption',
        'price_increase_percentage' => 'setPriceIncreasePercentage',
        'product_rate_plan_id' => 'setProductRatePlanId',
        'recognized_revenue_account' => 'setRecognizedRevenueAccount',
        'rev_rec_code' => 'setRevRecCode',
        'rev_rec_trigger_condition' => 'setRevRecTriggerCondition',
        'revenue_recognition_rule_name' => 'setRevenueRecognitionRuleName',
        'smoothing_model' => 'setSmoothingModel',
        'specific_billing_period' => 'setSpecificBillingPeriod',
        'tax_code' => 'setTaxCode',
        'tax_mode' => 'setTaxMode',
        'taxable' => 'setTaxable',
        'trigger_event' => 'setTriggerEvent',
        'uom' => 'setUom',
        'up_to_periods' => 'setUpToPeriods',
        'up_to_periods_type' => 'setUpToPeriodsType',
        'updated_by_id' => 'setUpdatedById',
        'updated_date' => 'setUpdatedDate',
        'use_discount_specific_accounting_code' => 'setUseDiscountSpecificAccountingCode',
        'use_tenant_default_for_price_change' => 'setUseTenantDefaultForPriceChange',
        'weekly_bill_cycle_day' => 'setWeeklyBillCycleDay'
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
        'apply_discount_to' => 'getApplyDiscountTo',
        'bill_cycle_day' => 'getBillCycleDay',
        'bill_cycle_type' => 'getBillCycleType',
        'billing_period' => 'getBillingPeriod',
        'billing_period_alignment' => 'getBillingPeriodAlignment',
        'billing_timing' => 'getBillingTiming',
        'charge_model' => 'getChargeModel',
        'charge_type' => 'getChargeType',
        'created_by_id' => 'getCreatedById',
        'created_date' => 'getCreatedDate',
        'default_quantity' => 'getDefaultQuantity',
        'deferred_revenue_account' => 'getDeferredRevenueAccount',
        'description' => 'getDescription',
        'discount_level' => 'getDiscountLevel',
        'end_date_condition' => 'getEndDateCondition',
        'id' => 'getId',
        'included_units' => 'getIncludedUnits',
        'legacy_revenue_reporting' => 'getLegacyRevenueReporting',
        'list_price_base' => 'getListPriceBase',
        'max_quantity' => 'getMaxQuantity',
        'min_quantity' => 'getMinQuantity',
        'name' => 'getName',
        'number_of_period' => 'getNumberOfPeriod',
        'overage_calculation_option' => 'getOverageCalculationOption',
        'overage_unused_units_credit_option' => 'getOverageUnusedUnitsCreditOption',
        'price_change_option' => 'getPriceChangeOption',
        'price_increase_percentage' => 'getPriceIncreasePercentage',
        'product_rate_plan_id' => 'getProductRatePlanId',
        'recognized_revenue_account' => 'getRecognizedRevenueAccount',
        'rev_rec_code' => 'getRevRecCode',
        'rev_rec_trigger_condition' => 'getRevRecTriggerCondition',
        'revenue_recognition_rule_name' => 'getRevenueRecognitionRuleName',
        'smoothing_model' => 'getSmoothingModel',
        'specific_billing_period' => 'getSpecificBillingPeriod',
        'tax_code' => 'getTaxCode',
        'tax_mode' => 'getTaxMode',
        'taxable' => 'getTaxable',
        'trigger_event' => 'getTriggerEvent',
        'uom' => 'getUom',
        'up_to_periods' => 'getUpToPeriods',
        'up_to_periods_type' => 'getUpToPeriodsType',
        'updated_by_id' => 'getUpdatedById',
        'updated_date' => 'getUpdatedDate',
        'use_discount_specific_accounting_code' => 'getUseDiscountSpecificAccountingCode',
        'use_tenant_default_for_price_change' => 'getUseTenantDefaultForPriceChange',
        'weekly_bill_cycle_day' => 'getWeeklyBillCycleDay'
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
        $this->container['apply_discount_to'] = isset($data['apply_discount_to']) ? $data['apply_discount_to'] : null;
        $this->container['bill_cycle_day'] = isset($data['bill_cycle_day']) ? $data['bill_cycle_day'] : null;
        $this->container['bill_cycle_type'] = isset($data['bill_cycle_type']) ? $data['bill_cycle_type'] : null;
        $this->container['billing_period'] = isset($data['billing_period']) ? $data['billing_period'] : null;
        $this->container['billing_period_alignment'] = isset($data['billing_period_alignment']) ? $data['billing_period_alignment'] : null;
        $this->container['billing_timing'] = isset($data['billing_timing']) ? $data['billing_timing'] : null;
        $this->container['charge_model'] = isset($data['charge_model']) ? $data['charge_model'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['default_quantity'] = isset($data['default_quantity']) ? $data['default_quantity'] : null;
        $this->container['deferred_revenue_account'] = isset($data['deferred_revenue_account']) ? $data['deferred_revenue_account'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_level'] = isset($data['discount_level']) ? $data['discount_level'] : null;
        $this->container['end_date_condition'] = isset($data['end_date_condition']) ? $data['end_date_condition'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['included_units'] = isset($data['included_units']) ? $data['included_units'] : null;
        $this->container['legacy_revenue_reporting'] = isset($data['legacy_revenue_reporting']) ? $data['legacy_revenue_reporting'] : null;
        $this->container['list_price_base'] = isset($data['list_price_base']) ? $data['list_price_base'] : null;
        $this->container['max_quantity'] = isset($data['max_quantity']) ? $data['max_quantity'] : null;
        $this->container['min_quantity'] = isset($data['min_quantity']) ? $data['min_quantity'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number_of_period'] = isset($data['number_of_period']) ? $data['number_of_period'] : null;
        $this->container['overage_calculation_option'] = isset($data['overage_calculation_option']) ? $data['overage_calculation_option'] : null;
        $this->container['overage_unused_units_credit_option'] = isset($data['overage_unused_units_credit_option']) ? $data['overage_unused_units_credit_option'] : null;
        $this->container['price_change_option'] = isset($data['price_change_option']) ? $data['price_change_option'] : null;
        $this->container['price_increase_percentage'] = isset($data['price_increase_percentage']) ? $data['price_increase_percentage'] : null;
        $this->container['product_rate_plan_id'] = isset($data['product_rate_plan_id']) ? $data['product_rate_plan_id'] : null;
        $this->container['recognized_revenue_account'] = isset($data['recognized_revenue_account']) ? $data['recognized_revenue_account'] : null;
        $this->container['rev_rec_code'] = isset($data['rev_rec_code']) ? $data['rev_rec_code'] : null;
        $this->container['rev_rec_trigger_condition'] = isset($data['rev_rec_trigger_condition']) ? $data['rev_rec_trigger_condition'] : null;
        $this->container['revenue_recognition_rule_name'] = isset($data['revenue_recognition_rule_name']) ? $data['revenue_recognition_rule_name'] : null;
        $this->container['smoothing_model'] = isset($data['smoothing_model']) ? $data['smoothing_model'] : null;
        $this->container['specific_billing_period'] = isset($data['specific_billing_period']) ? $data['specific_billing_period'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['tax_mode'] = isset($data['tax_mode']) ? $data['tax_mode'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['trigger_event'] = isset($data['trigger_event']) ? $data['trigger_event'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['up_to_periods'] = isset($data['up_to_periods']) ? $data['up_to_periods'] : null;
        $this->container['up_to_periods_type'] = isset($data['up_to_periods_type']) ? $data['up_to_periods_type'] : null;
        $this->container['updated_by_id'] = isset($data['updated_by_id']) ? $data['updated_by_id'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['use_discount_specific_accounting_code'] = isset($data['use_discount_specific_accounting_code']) ? $data['use_discount_specific_accounting_code'] : null;
        $this->container['use_tenant_default_for_price_change'] = isset($data['use_tenant_default_for_price_change']) ? $data['use_tenant_default_for_price_change'] : null;
        $this->container['weekly_bill_cycle_day'] = isset($data['weekly_bill_cycle_day']) ? $data['weekly_bill_cycle_day'] : null;
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
     * @param string $accounting_code The accounting code for the charge. Accounting codes group transactions that contain similar accounting attributes. **Character limit**: 100 **Values**: an active accounting code in your Zuora Chart of Accounts
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets apply_discount_to
     * @return string
     */
    public function getApplyDiscountTo()
    {
        return $this->container['apply_discount_to'];
    }

    /**
     * Sets apply_discount_to
     * @param string $apply_discount_to Specifies the type of charges that you want a specific discount to apply to. All field values are case sensitive: note that these values are in all-caps. **Character limit**: 21 **Values**: one of the following:  - `ONETIME (1)` - `RECURRING (2)` - `USAGE (4)` - `ONETIMERECURRING (3)` - `ONETIMEUSAGE (5)` - `RECURRINGUSAGE (6)` - `ONETIMERECURRINGUSAGE (7)`
     * @return $this
     */
    public function setApplyDiscountTo($apply_discount_to)
    {
        $this->container['apply_discount_to'] = $apply_discount_to;

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
     * @param int $bill_cycle_day Sets the bill cycle day (BCD) for the charge. The BCD determines which day of the month customer is billed. The BCD value in the account can override the BCD in this object. **Character limit**: 2 **Values**: a valid BCD integer, 1 - 31
     * @return $this
     */
    public function setBillCycleDay($bill_cycle_day)
    {
        $this->container['bill_cycle_day'] = $bill_cycle_day;

        return $this;
    }

    /**
     * Gets bill_cycle_type
     * @return string
     */
    public function getBillCycleType()
    {
        return $this->container['bill_cycle_type'];
    }

    /**
     * Sets bill_cycle_type
     * @param string $bill_cycle_type Specifies how to determine the billing day for the charge. **Character limit**: 20 **Values**: one of the following:  - `DefaultFromCustomer` - `SpecificDayofMonth:` - `SubscriptionStartDay` - `ChargeTriggerDay` - `SpecificDayofWeek` **Note**:  - If you set this field to `SpecificDayofMonth`, you must specify which day of the month as the billing day for the charge in the BillCycleDay field. - If you set this field to `SpecificDayofWeek`, you must specify which day of the week as the billing day for the charge in the WeeklyBillCycleDay field.
     * @return $this
     */
    public function setBillCycleType($bill_cycle_type)
    {
        $this->container['bill_cycle_type'] = $bill_cycle_type;

        return $this;
    }

    /**
     * Gets billing_period
     * @return string
     */
    public function getBillingPeriod()
    {
        return $this->container['billing_period'];
    }

    /**
     * Sets billing_period
     * @param string $billing_period The billing period for the charge. The start day of the billing period is also called the bill cycle day (BCD). **Character limit**: 15 **Values**: one of the following  - `Month` - `Quarter` - `Annual` - `Semi-Annual` - `Specific Months` - `Subscription Term` (This value is in **Limited Availability**.) - `Week` - `Specific Weeks` **Note**: Specify the number of months or weeks in the SpecificBillingPeriod field if you set this field to `Specific Months` or `Specific Weeks`.
     * @return $this
     */
    public function setBillingPeriod($billing_period)
    {
        $this->container['billing_period'] = $billing_period;

        return $this;
    }

    /**
     * Gets billing_period_alignment
     * @return string
     */
    public function getBillingPeriodAlignment()
    {
        return $this->container['billing_period_alignment'];
    }

    /**
     * Sets billing_period_alignment
     * @param string $billing_period_alignment Aligns charges within the same subscription if multiple charges begin on different dates. **Character limit**: 24 **Values**: one of the following:  - `AlignToCharge` - `AlignToSubscriptionStart` - `AlignToTermStart`
     * @return $this
     */
    public function setBillingPeriodAlignment($billing_period_alignment)
    {
        $this->container['billing_period_alignment'] = $billing_period_alignment;

        return $this;
    }

    /**
     * Gets billing_timing
     * @return string
     */
    public function getBillingTiming()
    {
        return $this->container['billing_timing'];
    }

    /**
     * Sets billing_timing
     * @param string $billing_timing The billing timing for the charge. You can choose to bill in advance or in arrears for recurring charge types. This field is not used in one-time or usage based charge types. **Character limit**: **Values**: one of the following:  - `In Advance` - `In Arrears`  This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setBillingTiming($billing_timing)
    {
        $this->container['billing_timing'] = $billing_timing;

        return $this;
    }

    /**
     * Gets charge_model
     * @return string
     */
    public function getChargeModel()
    {
        return $this->container['charge_model'];
    }

    /**
     * Sets charge_model
     * @param string $charge_model Determines how to calculate charges. Charge models must be individually activated in Z-Billing administration. **Character limit**: 27 **Values**: one of the following:  - `Discount-Fixed Amount` - `Discount-Percentage` - `Flat Fee Pricing` - `Per Unit Pricing` - `Overage Pricing` - `Tiered Pricing` - `Tiered with Overage Pricing` - `Volume Pricing`
     * @return $this
     */
    public function setChargeModel($charge_model)
    {
        $this->container['charge_model'] = $charge_model;

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
     * @param string $created_by_id The ID of the Zuora user who created the `ProductRatePlanCharge` object. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $created_date The date when the  `ProductRatePlanCharge` object was created. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets default_quantity
     * @return double
     */
    public function getDefaultQuantity()
    {
        return $this->container['default_quantity'];
    }

    /**
     * Sets default_quantity
     * @param double $default_quantity The default quantity of units, such as the number of authors in a hosted wiki service. This field is required if you use a per-unit pricing model. **Character limit**: 16 **Values**: a valid quantity value
     * @return $this
     */
    public function setDefaultQuantity($default_quantity)
    {
        $this->container['default_quantity'] = $default_quantity;

        return $this;
    }

    /**
     * Gets deferred_revenue_account
     * @return string
     */
    public function getDeferredRevenueAccount()
    {
        return $this->container['deferred_revenue_account'];
    }

    /**
     * Sets deferred_revenue_account
     * @param string $deferred_revenue_account The name of the deferred revenue account for this charge. **Character limit**: 100 **Values**: an active accounting code in your Zuora Chart of Accounts This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setDeferredRevenueAccount($deferred_revenue_account)
    {
        $this->container['deferred_revenue_account'] = $deferred_revenue_account;

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
     * @param string $description A description of the charge. **Character limit**: 500 **Values**: a string of 500 characters or fewer
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_level
     * @return string
     */
    public function getDiscountLevel()
    {
        return $this->container['discount_level'];
    }

    /**
     * Sets discount_level
     * @param string $discount_level Specifies if the discount applies to just the product rate plan, the entire subscription, or to any activity in the account. **Character limit**: 12 **Values**: one of the following:  - `rateplan` - `subscription`, `account`
     * @return $this
     */
    public function setDiscountLevel($discount_level)
    {
        $this->container['discount_level'] = $discount_level;

        return $this;
    }

    /**
     * Gets end_date_condition
     * @return string
     */
    public function getEndDateCondition()
    {
        return $this->container['end_date_condition'];
    }

    /**
     * Sets end_date_condition
     * @param string $end_date_condition Defines when the charge ends after the charge trigger date. **Values**: one of the following:  - `SubscriptionEnd`: The charge ends on the subscription end date after a specified period based on the trigger date of the charge. This is the default value. - `FixedPeriod`: The charge ends after a specified period based on the trigger date of the charge. If you set this field to `FixedPeriod`, you must specify the length of the period and a period type by defining the `UpToPeriods` and `UpToPeriodsType` fields. **Note**: If the subscription ends before the charge end date, the charge ends when the subscription ends. But if the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge will end on the charge end date.
     * @return $this
     */
    public function setEndDateCondition($end_date_condition)
    {
        $this->container['end_date_condition'] = $end_date_condition;

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
     * Gets included_units
     * @return double
     */
    public function getIncludedUnits()
    {
        return $this->container['included_units'];
    }

    /**
     * Sets included_units
     * @param double $included_units Specifies the number of units in the base set of units. **Character limit**: 16 **Values**: a positive decimal value
     * @return $this
     */
    public function setIncludedUnits($included_units)
    {
        $this->container['included_units'] = $included_units;

        return $this;
    }

    /**
     * Gets legacy_revenue_reporting
     * @return bool
     */
    public function getLegacyRevenueReporting()
    {
        return $this->container['legacy_revenue_reporting'];
    }

    /**
     * Sets legacy_revenue_reporting
     * @param bool $legacy_revenue_reporting 
     * @return $this
     */
    public function setLegacyRevenueReporting($legacy_revenue_reporting)
    {
        $this->container['legacy_revenue_reporting'] = $legacy_revenue_reporting;

        return $this;
    }

    /**
     * Gets list_price_base
     * @return string
     */
    public function getListPriceBase()
    {
        return $this->container['list_price_base'];
    }

    /**
     * Sets list_price_base
     * @param string $list_price_base The list price base for the product rate plan charge. **Values**: one of the following:  - `Per Month` - `Per Billing Period` - `Per Week`
     * @return $this
     */
    public function setListPriceBase($list_price_base)
    {
        $this->container['list_price_base'] = $list_price_base;

        return $this;
    }

    /**
     * Gets max_quantity
     * @return double
     */
    public function getMaxQuantity()
    {
        return $this->container['max_quantity'];
    }

    /**
     * Sets max_quantity
     * @param double $max_quantity Specifies the maximum number of units for this charge. Use this field and the `MinQuantity` field to create a range of units allowed in a product rate plan charge. **Character limit**: 16 **Values**: a positive decimal value
     * @return $this
     */
    public function setMaxQuantity($max_quantity)
    {
        $this->container['max_quantity'] = $max_quantity;

        return $this;
    }

    /**
     * Gets min_quantity
     * @return double
     */
    public function getMinQuantity()
    {
        return $this->container['min_quantity'];
    }

    /**
     * Sets min_quantity
     * @param double $min_quantity Specifies the minimum number of units for this charge. Use this field and the `MaxQuantity` field to create a range of units allowed in a product rate plan charge. **Character limit**: 16 **Values**: a positive decimal value
     * @return $this
     */
    public function setMinQuantity($min_quantity)
    {
        $this->container['min_quantity'] = $min_quantity;

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
     * @param string $name The name of the product rate plan charge. **Character limit**: 100 **Values**: a string of 100 characters or fewer
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number_of_period
     * @return int
     */
    public function getNumberOfPeriod()
    {
        return $this->container['number_of_period'];
    }

    /**
     * Sets number_of_period
     * @param int $number_of_period Specifies the number of periods to use when calculating charges in an overage smoothing charge model. **Character limit**: **Values**: a positive whole number
     * @return $this
     */
    public function setNumberOfPeriod($number_of_period)
    {
        $this->container['number_of_period'] = $number_of_period;

        return $this;
    }

    /**
     * Gets overage_calculation_option
     * @return string
     */
    public function getOverageCalculationOption()
    {
        return $this->container['overage_calculation_option'];
    }

    /**
     * Sets overage_calculation_option
     * @param string $overage_calculation_option Determines when to calculate overage charges. If the value of the SmoothingMode field is not specified, the value of this field is ignored. **Character limit**: 20 **Values**: one of the following:  - `EndOfSmoothingPeriod`: This option is used by default. The overage is charged at the end of the smoothing period. - `PerBillingPeriod`: The overage is charged on-demand rather than waiting until the end of the smoothing period.
     * @return $this
     */
    public function setOverageCalculationOption($overage_calculation_option)
    {
        $this->container['overage_calculation_option'] = $overage_calculation_option;

        return $this;
    }

    /**
     * Gets overage_unused_units_credit_option
     * @return string
     */
    public function getOverageUnusedUnitsCreditOption()
    {
        return $this->container['overage_unused_units_credit_option'];
    }

    /**
     * Sets overage_unused_units_credit_option
     * @param string $overage_unused_units_credit_option Determines whether to credit the customer with unused units of usage. **Character limit**: 20 **Values**: one of the following:  - `NoCredit` - `CreditBySpecificRate`
     * @return $this
     */
    public function setOverageUnusedUnitsCreditOption($overage_unused_units_credit_option)
    {
        $this->container['overage_unused_units_credit_option'] = $overage_unused_units_credit_option;

        return $this;
    }

    /**
     * Gets price_change_option
     * @return string
     */
    public function getPriceChangeOption()
    {
        return $this->container['price_change_option'];
    }

    /**
     * Sets price_change_option
     * @param string $price_change_option Applies an automatic price change when a termed subscription is renewed. **Character limit**: **Values**: one of the following:  - `NoChange` (default) - `SpecificPercentageValue` - `UseLatestProductCatalogPricing`
     * @return $this
     */
    public function setPriceChangeOption($price_change_option)
    {
        $this->container['price_change_option'] = $price_change_option;

        return $this;
    }

    /**
     * Gets price_increase_percentage
     * @return double
     */
    public function getPriceIncreasePercentage()
    {
        return $this->container['price_increase_percentage'];
    }

    /**
     * Sets price_increase_percentage
     * @param double $price_increase_percentage Specifies the percentage to increase or decrease the price of a termed subscription's renewal. Use this field if you set the [`PriceChangeOption`](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/ProductRatePlanCharge#PriceIncreaseOption) value to `SpecificPercentageValue`. **Character limit**: 16 **Values**: a decimal value between -100 and 100
     * @return $this
     */
    public function setPriceIncreasePercentage($price_increase_percentage)
    {
        $this->container['price_increase_percentage'] = $price_increase_percentage;

        return $this;
    }

    /**
     * Gets product_rate_plan_id
     * @return string
     */
    public function getProductRatePlanId()
    {
        return $this->container['product_rate_plan_id'];
    }

    /**
     * Sets product_rate_plan_id
     * @param string $product_rate_plan_id The ID of the product rate plan associated with this product rate plan charge. **Character limit**: 32 **Values**: a valid product rate plan ID
     * @return $this
     */
    public function setProductRatePlanId($product_rate_plan_id)
    {
        $this->container['product_rate_plan_id'] = $product_rate_plan_id;

        return $this;
    }

    /**
     * Gets recognized_revenue_account
     * @return string
     */
    public function getRecognizedRevenueAccount()
    {
        return $this->container['recognized_revenue_account'];
    }

    /**
     * Sets recognized_revenue_account
     * @param string $recognized_revenue_account The name of the recognized revenue account for this charge.  - Required when the Allow Blank Accounting Code setting is No. - Optional when the Allow Blank Accounting Code setting is Yes. Navigate to **Z-Finance Settings > Configure Accounting Rules** to check this setting. **Character limit**: 100 **Values**: an active accounting code in your Zuora Chart of Accounts This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setRecognizedRevenueAccount($recognized_revenue_account)
    {
        $this->container['recognized_revenue_account'] = $recognized_revenue_account;

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
     * @param string $rev_rec_code Associates this product rate plan charge with a specific revenue recognition code. **Character limit**: 70 **Values**: a valid revenue recognition code
     * @return $this
     */
    public function setRevRecCode($rev_rec_code)
    {
        $this->container['rev_rec_code'] = $rev_rec_code;

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
     * @param string $rev_rec_trigger_condition Specifies when revenue recognition begins. **Character limit**: 22 **Values**: one of the following:  - `ContractEffectiveDate` - `ServiceActivationDate` - `CustomerAcceptanceDate`
     * @return $this
     */
    public function setRevRecTriggerCondition($rev_rec_trigger_condition)
    {
        $this->container['rev_rec_trigger_condition'] = $rev_rec_trigger_condition;

        return $this;
    }

    /**
     * Gets revenue_recognition_rule_name
     * @return string
     */
    public function getRevenueRecognitionRuleName()
    {
        return $this->container['revenue_recognition_rule_name'];
    }

    /**
     * Sets revenue_recognition_rule_name
     * @param string $revenue_recognition_rule_name Determines when to recognize the revenue for this charge. **Character limit**: 25 **Values**: one of the following:  - `Recognize upon invoicing` - `Recognize daily over time`
     * @return $this
     */
    public function setRevenueRecognitionRuleName($revenue_recognition_rule_name)
    {
        $this->container['revenue_recognition_rule_name'] = $revenue_recognition_rule_name;

        return $this;
    }

    /**
     * Gets smoothing_model
     * @return string
     */
    public function getSmoothingModel()
    {
        return $this->container['smoothing_model'];
    }

    /**
     * Sets smoothing_model
     * @param string $smoothing_model Specifies the smoothing model for an overage smoothing charge model. **Character limit**: 22 **Values**: one of the following:  - `RollingWindow` - `Rollover`
     * @return $this
     */
    public function setSmoothingModel($smoothing_model)
    {
        $this->container['smoothing_model'] = $smoothing_model;

        return $this;
    }

    /**
     * Gets specific_billing_period
     * @return int
     */
    public function getSpecificBillingPeriod()
    {
        return $this->container['specific_billing_period'];
    }

    /**
     * Sets specific_billing_period
     * @param int $specific_billing_period Customizes the number of months or weeks for the charges billing period. This field is required if you set the value of the BillingPeriod field to `Specific Months` or `Specific Weeks`. **Values**: a positive integer
     * @return $this
     */
    public function setSpecificBillingPeriod($specific_billing_period)
    {
        $this->container['specific_billing_period'] = $specific_billing_period;

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
     * @param string $tax_code Specifies the tax code for taxation rules. Required when the Taxable field is set to `True`. **Character limit**: 64 **Values**: a valid tax code
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

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
     * @param string $tax_mode Determines how to define taxation for the charge. Required when the Taxable field is set to `True`. **Character limit**: 12 **Values**: one of the following:  - `TaxExclusive` - `TaxInclusive`
     * @return $this
     */
    public function setTaxMode($tax_mode)
    {
        $this->container['tax_mode'] = $tax_mode;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable Determines whether the charge is taxable. When set to `True`, the TaxMode and TaxCode fields are required when creating or updating th ProductRatePlanCharge object. **Character limit**: 5 **Values**: `True`, `False`
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets trigger_event
     * @return string
     */
    public function getTriggerEvent()
    {
        return $this->container['trigger_event'];
    }

    /**
     * Sets trigger_event
     * @param string $trigger_event Specifies when to start billing the customer for the charge. **Character limit**: 18 **Values**: one of the following:  - `ContractEffective` is the date when the subscription's contract goes into effect and the charge is ready to be billed. - `ServiceActivation` is the date when the services or products for a subscription have been activated and the customers have access. - `CustomerAcceptance` is when the customer accepts the services or products for a subscription.
     * @return $this
     */
    public function setTriggerEvent($trigger_event)
    {
        $this->container['trigger_event'] = $trigger_event;

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
     * @param string $uom Specifies the units to measure usage. Units of measure are configured in the web-based UI: **Z-Billing > Settings**. **Character limit**: 25 **Values**: a configured unit of measure **Note**: You must specify this field when creating the following charge models:  - Per Unit Pricing - Volume Pricing - Overage Pricing - Tiered Pricing - Tiered with Overage Pricing
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets up_to_periods
     * @return int
     */
    public function getUpToPeriods()
    {
        return $this->container['up_to_periods'];
    }

    /**
     * Sets up_to_periods
     * @param int $up_to_periods Specifies the length of the period during which the charge is active. If this period ends before the subscription ends, the charge ends when this period ends. **Character limit**: 5 **Values**: a whole number between 0 and 65535, exclusive **Note**:  - You must use this field together with the `UpToPeriodsType` field to specify the time period. This field is applicable only when the `EndDateCondition` field is set to `FixedPeriod`. - If the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge end date will change accordingly up to the original period end.
     * @return $this
     */
    public function setUpToPeriods($up_to_periods)
    {
        $this->container['up_to_periods'] = $up_to_periods;

        return $this;
    }

    /**
     * Gets up_to_periods_type
     * @return string
     */
    public function getUpToPeriodsType()
    {
        return $this->container['up_to_periods_type'];
    }

    /**
     * Sets up_to_periods_type
     * @param string $up_to_periods_type The period type used to define when the charge ends. **Character limit**: -- **Values**: one of the following:  - `Billing Periods` (default) - `Days` - `Weeks` - `Months` - Years **Note**:  - You must use this field together with the `UpToPeriods` field to specify the time period. - This field is applicable only when the `EndDateCondition` field is set to `FixedPeriod`.
     * @return $this
     */
    public function setUpToPeriodsType($up_to_periods_type)
    {
        $this->container['up_to_periods_type'] = $up_to_periods_type;

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
     * @param string $updated_by_id The ID of the last user to update the object. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $updated_date The date when the object was last updated. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets use_discount_specific_accounting_code
     * @return bool
     */
    public function getUseDiscountSpecificAccountingCode()
    {
        return $this->container['use_discount_specific_accounting_code'];
    }

    /**
     * Sets use_discount_specific_accounting_code
     * @param bool $use_discount_specific_accounting_code Determines whether to define a new accounting code for the new discount charge. **Character limit**: 5 **Values**: `True`, `False`
     * @return $this
     */
    public function setUseDiscountSpecificAccountingCode($use_discount_specific_accounting_code)
    {
        $this->container['use_discount_specific_accounting_code'] = $use_discount_specific_accounting_code;

        return $this;
    }

    /**
     * Gets use_tenant_default_for_price_change
     * @return bool
     */
    public function getUseTenantDefaultForPriceChange()
    {
        return $this->container['use_tenant_default_for_price_change'];
    }

    /**
     * Sets use_tenant_default_for_price_change
     * @param bool $use_tenant_default_for_price_change Applies the tenant-level percentage uplift value for an automatic price change to a termed subscription's renewal. You set the tenant uplift value in the web-based UI: **Z-Billing > Define Default Subscription Settings** **Character limit**: 5 **Values**: `true`, `false`
     * @return $this
     */
    public function setUseTenantDefaultForPriceChange($use_tenant_default_for_price_change)
    {
        $this->container['use_tenant_default_for_price_change'] = $use_tenant_default_for_price_change;

        return $this;
    }

    /**
     * Gets weekly_bill_cycle_day
     * @return string
     */
    public function getWeeklyBillCycleDay()
    {
        return $this->container['weekly_bill_cycle_day'];
    }

    /**
     * Sets weekly_bill_cycle_day
     * @param string $weekly_bill_cycle_day Specifies which day of the week as the bill cycle day (BCD) for the charge. This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).  **Values**: one of the following:  - `Sunday` - `Monday` - `Tuesday` - `Wednesday` - `Thursday` - `Friday` - `Saturday`
     * @return $this
     */
    public function setWeeklyBillCycleDay($weekly_bill_cycle_day)
    {
        $this->container['weekly_bill_cycle_day'] = $weekly_bill_cycle_day;

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


