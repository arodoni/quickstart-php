<?php
/**
 * GETProductRatePlanChargeType
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
 * GETProductRatePlanChargeType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETProductRatePlanChargeType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETProductRatePlanChargeType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'apply_discount_to' => 'string',
        'billing_day' => 'string',
        'billing_period' => 'string',
        'billing_period_alignment' => 'string',
        'billing_timing' => 'string',
        'custom_field__c' => 'string',
        'default_quantity' => 'string',
        'description' => 'string',
        'discount_level' => 'string',
        'end_date_condition' => 'string',
        'finance_information' => '\Swagger\Client\Model\GETProductRatePlanChargeTypeFinanceInformation',
        'id' => 'string',
        'included_units' => 'string',
        'list_price_base' => 'string',
        'max_quantity' => 'string',
        'min_quantity' => 'string',
        'model' => 'string',
        'name' => 'string',
        'number_of_periods' => 'int',
        'overage_calculation_option' => 'string',
        'overage_unused_units_credit_option' => 'string',
        'prepay_periods' => 'int',
        'price_change_option' => 'string',
        'price_increase_percentage' => 'string',
        'pricing' => '\Swagger\Client\Model\GETProductRatePlanChargePricingType[]',
        'pricing_summary' => 'string[]',
        'rating_group' => 'string',
        'revenue_recognition_rule_name' => 'string',
        'smoothing_model' => 'string',
        'specific_billing_period' => 'int',
        'tax_code' => 'string',
        'tax_mode' => 'string',
        'taxable' => 'bool',
        'trigger_event' => 'string',
        'type' => 'string',
        'uom' => 'string',
        'up_to_periods' => 'int',
        'up_to_periods_type' => 'string',
        'usage_record_rating_option' => 'string',
        'use_discount_specific_accounting_code' => 'bool',
        'use_tenant_default_for_price_change' => 'bool'
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
        'apply_discount_to' => 'applyDiscountTo',
        'billing_day' => 'billingDay',
        'billing_period' => 'billingPeriod',
        'billing_period_alignment' => 'billingPeriodAlignment',
        'billing_timing' => 'billingTiming',
        'custom_field__c' => 'customField__c',
        'default_quantity' => 'defaultQuantity',
        'description' => 'description',
        'discount_level' => 'discountLevel',
        'end_date_condition' => 'endDateCondition',
        'finance_information' => 'financeInformation',
        'id' => 'id',
        'included_units' => 'includedUnits',
        'list_price_base' => 'listPriceBase',
        'max_quantity' => 'maxQuantity',
        'min_quantity' => 'minQuantity',
        'model' => 'model',
        'name' => 'name',
        'number_of_periods' => 'numberOfPeriods',
        'overage_calculation_option' => 'overageCalculationOption',
        'overage_unused_units_credit_option' => 'overageUnusedUnitsCreditOption',
        'prepay_periods' => 'prepayPeriods',
        'price_change_option' => 'priceChangeOption',
        'price_increase_percentage' => 'priceIncreasePercentage',
        'pricing' => 'pricing',
        'pricing_summary' => 'pricingSummary',
        'rating_group' => 'ratingGroup',
        'revenue_recognition_rule_name' => 'revenueRecognitionRuleName',
        'smoothing_model' => 'smoothingModel',
        'specific_billing_period' => 'specificBillingPeriod',
        'tax_code' => 'taxCode',
        'tax_mode' => 'taxMode',
        'taxable' => 'taxable',
        'trigger_event' => 'triggerEvent',
        'type' => 'type',
        'uom' => 'uom',
        'up_to_periods' => 'upToPeriods',
        'up_to_periods_type' => 'upToPeriodsType',
        'usage_record_rating_option' => 'usageRecordRatingOption',
        'use_discount_specific_accounting_code' => 'useDiscountSpecificAccountingCode',
        'use_tenant_default_for_price_change' => 'useTenantDefaultForPriceChange'
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
        'apply_discount_to' => 'setApplyDiscountTo',
        'billing_day' => 'setBillingDay',
        'billing_period' => 'setBillingPeriod',
        'billing_period_alignment' => 'setBillingPeriodAlignment',
        'billing_timing' => 'setBillingTiming',
        'custom_field__c' => 'setCustomFieldC',
        'default_quantity' => 'setDefaultQuantity',
        'description' => 'setDescription',
        'discount_level' => 'setDiscountLevel',
        'end_date_condition' => 'setEndDateCondition',
        'finance_information' => 'setFinanceInformation',
        'id' => 'setId',
        'included_units' => 'setIncludedUnits',
        'list_price_base' => 'setListPriceBase',
        'max_quantity' => 'setMaxQuantity',
        'min_quantity' => 'setMinQuantity',
        'model' => 'setModel',
        'name' => 'setName',
        'number_of_periods' => 'setNumberOfPeriods',
        'overage_calculation_option' => 'setOverageCalculationOption',
        'overage_unused_units_credit_option' => 'setOverageUnusedUnitsCreditOption',
        'prepay_periods' => 'setPrepayPeriods',
        'price_change_option' => 'setPriceChangeOption',
        'price_increase_percentage' => 'setPriceIncreasePercentage',
        'pricing' => 'setPricing',
        'pricing_summary' => 'setPricingSummary',
        'rating_group' => 'setRatingGroup',
        'revenue_recognition_rule_name' => 'setRevenueRecognitionRuleName',
        'smoothing_model' => 'setSmoothingModel',
        'specific_billing_period' => 'setSpecificBillingPeriod',
        'tax_code' => 'setTaxCode',
        'tax_mode' => 'setTaxMode',
        'taxable' => 'setTaxable',
        'trigger_event' => 'setTriggerEvent',
        'type' => 'setType',
        'uom' => 'setUom',
        'up_to_periods' => 'setUpToPeriods',
        'up_to_periods_type' => 'setUpToPeriodsType',
        'usage_record_rating_option' => 'setUsageRecordRatingOption',
        'use_discount_specific_accounting_code' => 'setUseDiscountSpecificAccountingCode',
        'use_tenant_default_for_price_change' => 'setUseTenantDefaultForPriceChange'
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
        'apply_discount_to' => 'getApplyDiscountTo',
        'billing_day' => 'getBillingDay',
        'billing_period' => 'getBillingPeriod',
        'billing_period_alignment' => 'getBillingPeriodAlignment',
        'billing_timing' => 'getBillingTiming',
        'custom_field__c' => 'getCustomFieldC',
        'default_quantity' => 'getDefaultQuantity',
        'description' => 'getDescription',
        'discount_level' => 'getDiscountLevel',
        'end_date_condition' => 'getEndDateCondition',
        'finance_information' => 'getFinanceInformation',
        'id' => 'getId',
        'included_units' => 'getIncludedUnits',
        'list_price_base' => 'getListPriceBase',
        'max_quantity' => 'getMaxQuantity',
        'min_quantity' => 'getMinQuantity',
        'model' => 'getModel',
        'name' => 'getName',
        'number_of_periods' => 'getNumberOfPeriods',
        'overage_calculation_option' => 'getOverageCalculationOption',
        'overage_unused_units_credit_option' => 'getOverageUnusedUnitsCreditOption',
        'prepay_periods' => 'getPrepayPeriods',
        'price_change_option' => 'getPriceChangeOption',
        'price_increase_percentage' => 'getPriceIncreasePercentage',
        'pricing' => 'getPricing',
        'pricing_summary' => 'getPricingSummary',
        'rating_group' => 'getRatingGroup',
        'revenue_recognition_rule_name' => 'getRevenueRecognitionRuleName',
        'smoothing_model' => 'getSmoothingModel',
        'specific_billing_period' => 'getSpecificBillingPeriod',
        'tax_code' => 'getTaxCode',
        'tax_mode' => 'getTaxMode',
        'taxable' => 'getTaxable',
        'trigger_event' => 'getTriggerEvent',
        'type' => 'getType',
        'uom' => 'getUom',
        'up_to_periods' => 'getUpToPeriods',
        'up_to_periods_type' => 'getUpToPeriodsType',
        'usage_record_rating_option' => 'getUsageRecordRatingOption',
        'use_discount_specific_accounting_code' => 'getUseDiscountSpecificAccountingCode',
        'use_tenant_default_for_price_change' => 'getUseTenantDefaultForPriceChange'
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
        $this->container['apply_discount_to'] = isset($data['apply_discount_to']) ? $data['apply_discount_to'] : null;
        $this->container['billing_day'] = isset($data['billing_day']) ? $data['billing_day'] : null;
        $this->container['billing_period'] = isset($data['billing_period']) ? $data['billing_period'] : null;
        $this->container['billing_period_alignment'] = isset($data['billing_period_alignment']) ? $data['billing_period_alignment'] : null;
        $this->container['billing_timing'] = isset($data['billing_timing']) ? $data['billing_timing'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['default_quantity'] = isset($data['default_quantity']) ? $data['default_quantity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_level'] = isset($data['discount_level']) ? $data['discount_level'] : null;
        $this->container['end_date_condition'] = isset($data['end_date_condition']) ? $data['end_date_condition'] : null;
        $this->container['finance_information'] = isset($data['finance_information']) ? $data['finance_information'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['included_units'] = isset($data['included_units']) ? $data['included_units'] : null;
        $this->container['list_price_base'] = isset($data['list_price_base']) ? $data['list_price_base'] : null;
        $this->container['max_quantity'] = isset($data['max_quantity']) ? $data['max_quantity'] : null;
        $this->container['min_quantity'] = isset($data['min_quantity']) ? $data['min_quantity'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number_of_periods'] = isset($data['number_of_periods']) ? $data['number_of_periods'] : null;
        $this->container['overage_calculation_option'] = isset($data['overage_calculation_option']) ? $data['overage_calculation_option'] : null;
        $this->container['overage_unused_units_credit_option'] = isset($data['overage_unused_units_credit_option']) ? $data['overage_unused_units_credit_option'] : null;
        $this->container['prepay_periods'] = isset($data['prepay_periods']) ? $data['prepay_periods'] : null;
        $this->container['price_change_option'] = isset($data['price_change_option']) ? $data['price_change_option'] : null;
        $this->container['price_increase_percentage'] = isset($data['price_increase_percentage']) ? $data['price_increase_percentage'] : null;
        $this->container['pricing'] = isset($data['pricing']) ? $data['pricing'] : null;
        $this->container['pricing_summary'] = isset($data['pricing_summary']) ? $data['pricing_summary'] : null;
        $this->container['rating_group'] = isset($data['rating_group']) ? $data['rating_group'] : null;
        $this->container['revenue_recognition_rule_name'] = isset($data['revenue_recognition_rule_name']) ? $data['revenue_recognition_rule_name'] : null;
        $this->container['smoothing_model'] = isset($data['smoothing_model']) ? $data['smoothing_model'] : null;
        $this->container['specific_billing_period'] = isset($data['specific_billing_period']) ? $data['specific_billing_period'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['tax_mode'] = isset($data['tax_mode']) ? $data['tax_mode'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['trigger_event'] = isset($data['trigger_event']) ? $data['trigger_event'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['up_to_periods'] = isset($data['up_to_periods']) ? $data['up_to_periods'] : null;
        $this->container['up_to_periods_type'] = isset($data['up_to_periods_type']) ? $data['up_to_periods_type'] : null;
        $this->container['usage_record_rating_option'] = isset($data['usage_record_rating_option']) ? $data['usage_record_rating_option'] : null;
        $this->container['use_discount_specific_accounting_code'] = isset($data['use_discount_specific_accounting_code']) ? $data['use_discount_specific_accounting_code'] : null;
        $this->container['use_tenant_default_for_price_change'] = isset($data['use_tenant_default_for_price_change']) ? $data['use_tenant_default_for_price_change'] : null;
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
     * Gets apply_discount_to
     * @return string
     */
    public function getApplyDiscountTo()
    {
        return $this->container['apply_discount_to'];
    }

    /**
     * Sets apply_discount_to
     * @param string $apply_discount_to Specifies where (to what charge type) the discount will be applied. These field values are case-sensitive.  Permissible values: - RECURRING - USAGE - ONETIMERECURRING - ONETIMEUSAGE - RECURRINGUSAGE - ONETIMERECURRINGUSAGE
     * @return $this
     */
    public function setApplyDiscountTo($apply_discount_to)
    {
        $this->container['apply_discount_to'] = $apply_discount_to;

        return $this;
    }

    /**
     * Gets billing_day
     * @return string
     */
    public function getBillingDay()
    {
        return $this->container['billing_day'];
    }

    /**
     * Sets billing_day
     * @param string $billing_day The [bill cycle day](https://knowledgecenter.zuora.com/CB_Billing/WA_Dates_in_Zuora/C_Customer_Account_Dates%3A_Bill_Cycle_Day) (BCD) for the charge. The BCD determines which day of the month or week the customer is billed. The BCD value in the account can override the BCD in this object.
     * @return $this
     */
    public function setBillingDay($billing_day)
    {
        $this->container['billing_day'] = $billing_day;

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
     * @param string $billing_period The billing period for the charge. The start day of the billing period is also called the bill cycle day (BCD).  Values: - Month - Quarter - Annual - Semi-Annual - Specific Months - Week - Specific_Weeks
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
     * @param string $billing_period_alignment Aligns charges within the same subscription if multiple charges begin on different dates.  Possible values: - AlignToCharge - AlignToSubscriptionStart - AlignToTermStart
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
     * @param string $billing_timing The billing timing for the charge. You can choose to bill for charges in advance or in arrears.  Values: - In Advance - In Arrears  **Note:** This feature is in Limited Availability. If you wish to have access to the feature, submit a request at [Zuora Global Support](https://support.zuora.com).
     * @return $this
     */
    public function setBillingTiming($billing_timing)
    {
        $this->container['billing_timing'] = $billing_timing;

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
     * Gets default_quantity
     * @return string
     */
    public function getDefaultQuantity()
    {
        return $this->container['default_quantity'];
    }

    /**
     * Sets default_quantity
     * @param string $default_quantity The default quantity of units.  This field is required if you use a per-unit charge model.
     * @return $this
     */
    public function setDefaultQuantity($default_quantity)
    {
        $this->container['default_quantity'] = $default_quantity;

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
     * @param string $description Usually a brief line item summary of the Rate Plan Charge.
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
     * @param string $discount_level The level of the discount.   Values: - RatePlan - Subscription - Account
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
     * @param string $end_date_condition Defines when the charge ends after the charge trigger date. If the subscription ends before the charge end date, the charge ends when the subscription ends. But if the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge will end on the charge end date.  Values: - Subscription_End - Fixed_Period
     * @return $this
     */
    public function setEndDateCondition($end_date_condition)
    {
        $this->container['end_date_condition'] = $end_date_condition;

        return $this;
    }

    /**
     * Gets finance_information
     * @return \Swagger\Client\Model\GETProductRatePlanChargeTypeFinanceInformation
     */
    public function getFinanceInformation()
    {
        return $this->container['finance_information'];
    }

    /**
     * Sets finance_information
     * @param \Swagger\Client\Model\GETProductRatePlanChargeTypeFinanceInformation $finance_information
     * @return $this
     */
    public function setFinanceInformation($finance_information)
    {
        $this->container['finance_information'] = $finance_information;

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
     * @param string $id Unique product rate-plan charge ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets included_units
     * @return string
     */
    public function getIncludedUnits()
    {
        return $this->container['included_units'];
    }

    /**
     * Sets included_units
     * @param string $included_units Specifies the number of units in the base set of units when the charge model is Overage.
     * @return $this
     */
    public function setIncludedUnits($included_units)
    {
        $this->container['included_units'] = $included_units;

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
     * @param string $list_price_base The list price base for the product rate plan charge.  Values: - Month - Billing Period - Per_Week
     * @return $this
     */
    public function setListPriceBase($list_price_base)
    {
        $this->container['list_price_base'] = $list_price_base;

        return $this;
    }

    /**
     * Gets max_quantity
     * @return string
     */
    public function getMaxQuantity()
    {
        return $this->container['max_quantity'];
    }

    /**
     * Sets max_quantity
     * @param string $max_quantity Specifies the maximum number of units for this charge. Use this field and the `minQuantity` field to create a range of units allowed in a product rate plan charge.
     * @return $this
     */
    public function setMaxQuantity($max_quantity)
    {
        $this->container['max_quantity'] = $max_quantity;

        return $this;
    }

    /**
     * Gets min_quantity
     * @return string
     */
    public function getMinQuantity()
    {
        return $this->container['min_quantity'];
    }

    /**
     * Sets min_quantity
     * @param string $min_quantity Specifies the minimum number of units for this charge. Use this field and the `maxQuantity` field to create a range of units allowed in a product rate plan charge.
     * @return $this
     */
    public function setMinQuantity($min_quantity)
    {
        $this->container['min_quantity'] = $min_quantity;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model Charge model which determines how charges are calculated.  [Charge models](https://knowledgecenter.zuora.com/BC_Subscription_Management/Product_Catalog/B_Charge_Models) must be individually activated in Z-Billing administration.   Possible values are: - FlatFee - PerUnit - Overage - Volume - Tiered - TieredWithOverage - DiscountFixedAmount - DiscountPercentage The [Pricing Summaries](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Catalog#Pricing_Summaries) section below details these charge models and their associated pricingSummary values.
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
     * @param string $name Name of the product rate-plan charge. (Not required to be unique.)
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number_of_periods
     * @return int
     */
    public function getNumberOfPeriods()
    {
        return $this->container['number_of_periods'];
    }

    /**
     * Sets number_of_periods
     * @param int $number_of_periods Value specifies the number of periods used in the smoothing model calculations Used when overage smoothing model is `RollingWindow` or `Rollover`.
     * @return $this
     */
    public function setNumberOfPeriods($number_of_periods)
    {
        $this->container['number_of_periods'] = $number_of_periods;

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
     * @param string $overage_calculation_option Value specifies when to calculate overage charges.  Values: - EndOfSmoothingPeriod - PerBillingPeriod
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
     * @param string $overage_unused_units_credit_option Determines whether to credit the customer with unused units of usage.  Values: - NoCredit - CreditBySpecificRate
     * @return $this
     */
    public function setOverageUnusedUnitsCreditOption($overage_unused_units_credit_option)
    {
        $this->container['overage_unused_units_credit_option'] = $overage_unused_units_credit_option;

        return $this;
    }

    /**
     * Gets prepay_periods
     * @return int
     */
    public function getPrepayPeriods()
    {
        return $this->container['prepay_periods'];
    }

    /**
     * Sets prepay_periods
     * @param int $prepay_periods The number of periods to which prepayment is set.   **Note:** This field is only available if you already have the [prepayment](https://knowledgecenter.zuora.com/BC_Subscription_Management/Product_Catalog/A_Product_Catalog_Concepts/zz_Prepayments) feature enabled. The prepayment feature is deprecated and available only for backward compatibility. Zuora does not support enabling this feature anymore.
     * @return $this
     */
    public function setPrepayPeriods($prepay_periods)
    {
        $this->container['prepay_periods'] = $prepay_periods;

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
     * @param string $price_change_option Applies an automatic price change when a termed subscription is renewed and the following applies:  1. AutomatedPriceChange setting is on 2. Charge type is not one-time 3. Charge model is not discount fixed amount  Values: - NoChange (default) - SpecificPercentageValue - UseLatestProductCatalogPricing
     * @return $this
     */
    public function setPriceChangeOption($price_change_option)
    {
        $this->container['price_change_option'] = $price_change_option;

        return $this;
    }

    /**
     * Gets price_increase_percentage
     * @return string
     */
    public function getPriceIncreasePercentage()
    {
        return $this->container['price_increase_percentage'];
    }

    /**
     * Sets price_increase_percentage
     * @param string $price_increase_percentage Specifies the percentage to increase or decrease the price of a termed subscription's renewal. Use this field if you set the `PriceChangeOption` value to `SpecificPercentageValue`.  1. AutomatedPriceChange setting is on 2. Charge type is not one-time 3. Charge model is not discount fixed amount  Values: a decimal between -100 and 100
     * @return $this
     */
    public function setPriceIncreasePercentage($price_increase_percentage)
    {
        $this->container['price_increase_percentage'] = $price_increase_percentage;

        return $this;
    }

    /**
     * Gets pricing
     * @return \Swagger\Client\Model\GETProductRatePlanChargePricingType[]
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     * @param \Swagger\Client\Model\GETProductRatePlanChargePricingType[] $pricing One or more price charge models with attributes that further describe the model.  Some attributes show as null values when not applicable.
     * @return $this
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets pricing_summary
     * @return string[]
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     * @param string[] $pricing_summary A concise description of the charge model and pricing that is suitable to show to your customers. See [Pricing Summaries](https://knowledgecenter.zuora.com/DC_Developers/REST_API/B_REST_API_reference/Catalog#Pricing_Summaries) below for more information.
     * @return $this
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets rating_group
     * @return string
     */
    public function getRatingGroup()
    {
        return $this->container['rating_group'];
    }

    /**
     * Sets rating_group
     * @param string $rating_group Specifies a rating group based on which usage records are rated.   **Note:** This feature is in Limited Availability. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
     * @return $this
     */
    public function setRatingGroup($rating_group)
    {
        $this->container['rating_group'] = $rating_group;

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
     * @param string $revenue_recognition_rule_name The name of the revenue recognition rule governing the revenue schedule.
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
     * @param string $smoothing_model Specifies the smoothing model for an [overage smoothing charge model](https://knowledgecenter.zuora.com/CB_Billing/D_Product_Catalog/B_Charge_Models/A_Overage_Smoothing_Charge_Model) or an tiered with overage model, which is an advanced type of a usage model that avoids spikes in usage charges. If a customer's usage spikes in a single period, then an overage smoothing model eases overage charges by considering usage and multiple periods.  One of the following values shows which smoothing model will be applied to the charge when `Overage` or `Tiered with Overage` is used:  - `RollingWindow` considers a number of periods to smooth usage. The rolling window starts and increments forward based on billing frequency. When allowed usage is met, then period resets and a new window begins. - `Rollover` considers a fixed number of periods before calculating usage. The net balance at the end of a period is unused usage, which is carried over to the next period's balance.
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
     * @param int $specific_billing_period When the billing period is set to `Specific` Months then this positive integer reflects the number of months for billing period charges.
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
     * @param string $tax_code Specifies the [tax code](https://knowledgecenter.zuora.com/CB_Billing/J_Billing_Operations/L_Taxes/A_Z-Tax/B_Configure_Tax_Codes_in_Z-Billing) for taxation rules; used by Z-Tax.
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
     * @param string $tax_mode Specifies how to define taxation for the charge; used by Z-Tax. Possible values are: `TaxExclusive`, `TaxInclusive`.
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
     * @param bool $taxable Specifies whether the charge is taxable; used by Z-Tax. Possible values are:`true`, `false`.
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
     * @param string $trigger_event Specifies when to start billing the customer for the charge.  Values: one of the following: - `ContractEffective` is the date when the subscription's contract goes into effect and the charge is ready to be billed. - `ServiceActivation` is the date when the services or products for a subscription have been activated and the customers have access. - `CustomerAcceptance` is when the customer accepts the services or products for a subscription.  - `SpecificDate` is the date specified.
     * @return $this
     */
    public function setTriggerEvent($trigger_event)
    {
        $this->container['trigger_event'] = $trigger_event;

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
     * @param string $type The type of charge. Possible values are: `OneTime`, `Recurring`, `Usage`.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $uom Describes the Units of Measure (uom) configured in **Z-Billing > Settings** for the productRatePlanCharges.  Values: `Each`, `License`, `Seat`, or `null`
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
     * @param int $up_to_periods Specifies the length of the period during which the charge is active. If this period ends before the subscription ends, the charge ends when this period ends. If the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge end date will change accordingly up to the original period end.
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
     * @param string $up_to_periods_type The period type used to define when the charge ends.  Values: - Billing_Periods - Days - Weeks - Months - Years
     * @return $this
     */
    public function setUpToPeriodsType($up_to_periods_type)
    {
        $this->container['up_to_periods_type'] = $up_to_periods_type;

        return $this;
    }

    /**
     * Gets usage_record_rating_option
     * @return string
     */
    public function getUsageRecordRatingOption()
    {
        return $this->container['usage_record_rating_option'];
    }

    /**
     * Sets usage_record_rating_option
     * @param string $usage_record_rating_option Determines how Zuora processes usage records for per-unit usage charges.
     * @return $this
     */
    public function setUsageRecordRatingOption($usage_record_rating_option)
    {
        $this->container['usage_record_rating_option'] = $usage_record_rating_option;

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
     * @param bool $use_discount_specific_accounting_code Determines whether to define a new accounting code for the new discount charge. Values: `true`, `false`
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
     * @param bool $use_tenant_default_for_price_change Shows the tenant-level percentage uplift value for an automatic price change to a termed subscription's renewal. You set the tenant uplift value in the web-based UI: **Z-Billing > Define Default Subscription Settings**.  Values: `true`, `false`
     * @return $this
     */
    public function setUseTenantDefaultForPriceChange($use_tenant_default_for_price_change)
    {
        $this->container['use_tenant_default_for_price_change'] = $use_tenant_default_for_price_change;

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


