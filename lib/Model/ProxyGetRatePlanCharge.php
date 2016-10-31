<?php
/**
 * ProxyGetRatePlanCharge
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
 * ProxyGetRatePlanCharge Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProxyGetRatePlanCharge implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProxyGetRatePlanCharge';

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
        'charge_number' => 'string',
        'charge_type' => 'string',
        'charged_through_date' => '\DateTime',
        'created_by_id' => 'string',
        'created_date' => '\DateTime',
        'dmrc' => 'double',
        'dtcv' => 'double',
        'description' => 'string',
        'discount_level' => 'string',
        'effective_end_date' => '\DateTime',
        'effective_start_date' => '\DateTime',
        'end_date_condition' => 'string',
        'id' => 'string',
        'is_last_segment' => 'bool',
        'list_price_base' => 'string',
        'mrr' => 'double',
        'name' => 'string',
        'number_of_periods' => 'int',
        'original_id' => 'string',
        'overage_calculation_option' => 'string',
        'overage_unused_units_credit_option' => 'string',
        'price_change_option' => 'string',
        'price_increase_percentage' => 'double',
        'processed_through_date' => '\DateTime',
        'quantity' => 'double',
        'rate_plan_id' => 'string',
        'rev_rec_code' => 'string',
        'rev_rec_trigger_condition' => 'string',
        'revenue_recognition_rule_name' => 'string',
        'segment' => 'int',
        'specific_billing_period' => 'int',
        'specific_end_date' => '\DateTime',
        'tcv' => 'double',
        'trigger_date' => '\DateTime',
        'trigger_event' => 'string',
        'uom' => 'string',
        'up_to_periods' => 'int',
        'up_to_periods_type' => 'string',
        'updated_by_id' => 'string',
        'updated_date' => '\DateTime',
        'version' => 'int',
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
        'charge_number' => 'ChargeNumber',
        'charge_type' => 'ChargeType',
        'charged_through_date' => 'ChargedThroughDate',
        'created_by_id' => 'CreatedById',
        'created_date' => 'CreatedDate',
        'dmrc' => 'DMRC',
        'dtcv' => 'DTCV',
        'description' => 'Description',
        'discount_level' => 'DiscountLevel',
        'effective_end_date' => 'EffectiveEndDate',
        'effective_start_date' => 'EffectiveStartDate',
        'end_date_condition' => 'EndDateCondition',
        'id' => 'Id',
        'is_last_segment' => 'IsLastSegment',
        'list_price_base' => 'ListPriceBase',
        'mrr' => 'MRR',
        'name' => 'Name',
        'number_of_periods' => 'NumberOfPeriods',
        'original_id' => 'OriginalId',
        'overage_calculation_option' => 'OverageCalculationOption',
        'overage_unused_units_credit_option' => 'OverageUnusedUnitsCreditOption',
        'price_change_option' => 'PriceChangeOption',
        'price_increase_percentage' => 'PriceIncreasePercentage',
        'processed_through_date' => 'ProcessedThroughDate',
        'quantity' => 'Quantity',
        'rate_plan_id' => 'RatePlanId',
        'rev_rec_code' => 'RevRecCode',
        'rev_rec_trigger_condition' => 'RevRecTriggerCondition',
        'revenue_recognition_rule_name' => 'RevenueRecognitionRuleName',
        'segment' => 'Segment',
        'specific_billing_period' => 'SpecificBillingPeriod',
        'specific_end_date' => 'SpecificEndDate',
        'tcv' => 'TCV',
        'trigger_date' => 'TriggerDate',
        'trigger_event' => 'TriggerEvent',
        'uom' => 'UOM',
        'up_to_periods' => 'UpToPeriods',
        'up_to_periods_type' => 'UpToPeriodsType',
        'updated_by_id' => 'UpdatedById',
        'updated_date' => 'UpdatedDate',
        'version' => 'Version',
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
        'charge_number' => 'setChargeNumber',
        'charge_type' => 'setChargeType',
        'charged_through_date' => 'setChargedThroughDate',
        'created_by_id' => 'setCreatedById',
        'created_date' => 'setCreatedDate',
        'dmrc' => 'setDmrc',
        'dtcv' => 'setDtcv',
        'description' => 'setDescription',
        'discount_level' => 'setDiscountLevel',
        'effective_end_date' => 'setEffectiveEndDate',
        'effective_start_date' => 'setEffectiveStartDate',
        'end_date_condition' => 'setEndDateCondition',
        'id' => 'setId',
        'is_last_segment' => 'setIsLastSegment',
        'list_price_base' => 'setListPriceBase',
        'mrr' => 'setMrr',
        'name' => 'setName',
        'number_of_periods' => 'setNumberOfPeriods',
        'original_id' => 'setOriginalId',
        'overage_calculation_option' => 'setOverageCalculationOption',
        'overage_unused_units_credit_option' => 'setOverageUnusedUnitsCreditOption',
        'price_change_option' => 'setPriceChangeOption',
        'price_increase_percentage' => 'setPriceIncreasePercentage',
        'processed_through_date' => 'setProcessedThroughDate',
        'quantity' => 'setQuantity',
        'rate_plan_id' => 'setRatePlanId',
        'rev_rec_code' => 'setRevRecCode',
        'rev_rec_trigger_condition' => 'setRevRecTriggerCondition',
        'revenue_recognition_rule_name' => 'setRevenueRecognitionRuleName',
        'segment' => 'setSegment',
        'specific_billing_period' => 'setSpecificBillingPeriod',
        'specific_end_date' => 'setSpecificEndDate',
        'tcv' => 'setTcv',
        'trigger_date' => 'setTriggerDate',
        'trigger_event' => 'setTriggerEvent',
        'uom' => 'setUom',
        'up_to_periods' => 'setUpToPeriods',
        'up_to_periods_type' => 'setUpToPeriodsType',
        'updated_by_id' => 'setUpdatedById',
        'updated_date' => 'setUpdatedDate',
        'version' => 'setVersion',
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
        'charge_number' => 'getChargeNumber',
        'charge_type' => 'getChargeType',
        'charged_through_date' => 'getChargedThroughDate',
        'created_by_id' => 'getCreatedById',
        'created_date' => 'getCreatedDate',
        'dmrc' => 'getDmrc',
        'dtcv' => 'getDtcv',
        'description' => 'getDescription',
        'discount_level' => 'getDiscountLevel',
        'effective_end_date' => 'getEffectiveEndDate',
        'effective_start_date' => 'getEffectiveStartDate',
        'end_date_condition' => 'getEndDateCondition',
        'id' => 'getId',
        'is_last_segment' => 'getIsLastSegment',
        'list_price_base' => 'getListPriceBase',
        'mrr' => 'getMrr',
        'name' => 'getName',
        'number_of_periods' => 'getNumberOfPeriods',
        'original_id' => 'getOriginalId',
        'overage_calculation_option' => 'getOverageCalculationOption',
        'overage_unused_units_credit_option' => 'getOverageUnusedUnitsCreditOption',
        'price_change_option' => 'getPriceChangeOption',
        'price_increase_percentage' => 'getPriceIncreasePercentage',
        'processed_through_date' => 'getProcessedThroughDate',
        'quantity' => 'getQuantity',
        'rate_plan_id' => 'getRatePlanId',
        'rev_rec_code' => 'getRevRecCode',
        'rev_rec_trigger_condition' => 'getRevRecTriggerCondition',
        'revenue_recognition_rule_name' => 'getRevenueRecognitionRuleName',
        'segment' => 'getSegment',
        'specific_billing_period' => 'getSpecificBillingPeriod',
        'specific_end_date' => 'getSpecificEndDate',
        'tcv' => 'getTcv',
        'trigger_date' => 'getTriggerDate',
        'trigger_event' => 'getTriggerEvent',
        'uom' => 'getUom',
        'up_to_periods' => 'getUpToPeriods',
        'up_to_periods_type' => 'getUpToPeriodsType',
        'updated_by_id' => 'getUpdatedById',
        'updated_date' => 'getUpdatedDate',
        'version' => 'getVersion',
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
        $this->container['charge_number'] = isset($data['charge_number']) ? $data['charge_number'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['charged_through_date'] = isset($data['charged_through_date']) ? $data['charged_through_date'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['dmrc'] = isset($data['dmrc']) ? $data['dmrc'] : null;
        $this->container['dtcv'] = isset($data['dtcv']) ? $data['dtcv'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_level'] = isset($data['discount_level']) ? $data['discount_level'] : null;
        $this->container['effective_end_date'] = isset($data['effective_end_date']) ? $data['effective_end_date'] : null;
        $this->container['effective_start_date'] = isset($data['effective_start_date']) ? $data['effective_start_date'] : null;
        $this->container['end_date_condition'] = isset($data['end_date_condition']) ? $data['end_date_condition'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_last_segment'] = isset($data['is_last_segment']) ? $data['is_last_segment'] : null;
        $this->container['list_price_base'] = isset($data['list_price_base']) ? $data['list_price_base'] : null;
        $this->container['mrr'] = isset($data['mrr']) ? $data['mrr'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number_of_periods'] = isset($data['number_of_periods']) ? $data['number_of_periods'] : null;
        $this->container['original_id'] = isset($data['original_id']) ? $data['original_id'] : null;
        $this->container['overage_calculation_option'] = isset($data['overage_calculation_option']) ? $data['overage_calculation_option'] : null;
        $this->container['overage_unused_units_credit_option'] = isset($data['overage_unused_units_credit_option']) ? $data['overage_unused_units_credit_option'] : null;
        $this->container['price_change_option'] = isset($data['price_change_option']) ? $data['price_change_option'] : null;
        $this->container['price_increase_percentage'] = isset($data['price_increase_percentage']) ? $data['price_increase_percentage'] : null;
        $this->container['processed_through_date'] = isset($data['processed_through_date']) ? $data['processed_through_date'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['rate_plan_id'] = isset($data['rate_plan_id']) ? $data['rate_plan_id'] : null;
        $this->container['rev_rec_code'] = isset($data['rev_rec_code']) ? $data['rev_rec_code'] : null;
        $this->container['rev_rec_trigger_condition'] = isset($data['rev_rec_trigger_condition']) ? $data['rev_rec_trigger_condition'] : null;
        $this->container['revenue_recognition_rule_name'] = isset($data['revenue_recognition_rule_name']) ? $data['revenue_recognition_rule_name'] : null;
        $this->container['segment'] = isset($data['segment']) ? $data['segment'] : null;
        $this->container['specific_billing_period'] = isset($data['specific_billing_period']) ? $data['specific_billing_period'] : null;
        $this->container['specific_end_date'] = isset($data['specific_end_date']) ? $data['specific_end_date'] : null;
        $this->container['tcv'] = isset($data['tcv']) ? $data['tcv'] : null;
        $this->container['trigger_date'] = isset($data['trigger_date']) ? $data['trigger_date'] : null;
        $this->container['trigger_event'] = isset($data['trigger_event']) ? $data['trigger_event'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['up_to_periods'] = isset($data['up_to_periods']) ? $data['up_to_periods'] : null;
        $this->container['up_to_periods_type'] = isset($data['up_to_periods_type']) ? $data['up_to_periods_type'] : null;
        $this->container['updated_by_id'] = isset($data['updated_by_id']) ? $data['updated_by_id'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * @param string $accounting_code The accounting code for the charge. Accounting codes group transactions that contain similar accounting attributes. **Character limit**: 100 **Values**: inherited from `ProductRatePlanCharge.AccountingCode`
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
     * @param string $apply_discount_to Specifies the type of charges a specific discount applies to. **Character limit**: 21 **Values**: inherited from `ProductRatePlanCharge.ApplyDiscountTo`
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
     * @param int $bill_cycle_day Indicates the charge's billing cycle day (BCD), which is when bill runs generate invoices for charges associated with the product rate plan charge or the account. **Character limit**: 2 **Values**: inherited from `ProductRatePlanCharge.BillCycleDay`
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
     * @param string $bill_cycle_type Specifies how to determine the billing day for the charge. **Character limit**: 20 **Values**: inherited from `ProductRatePlanCharge.BillCycleType` **Note:** You can override the value inherited from the Product Rate Plan Charge, but only when creating a new subscription or a New Product amendment.
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
     * @param string $billing_period Allows billing period to be overridden on rate plan charge. ****Values**: **inherited from `ProductRatePlanCharge.BillingPeriod` **Note:** You can override the value inherited from the Product Rate Plan Charge, but only when creating a new subscription or a New Product amendment.
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
     * @param string $billing_period_alignment Aligns charges within the same subscription if multiple charges begin on different dates. **Character limit**: 24 **Values**: inherited from `ProductRatePlanCharge.BillingPeriodAlignment`
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
     * @param string $billing_timing The billing timing for the charge. You can choose to bill in advance or in arrears for recurring charge types. This field is not used in one-time or usage based charge types. **Character limit**: **Values**: one of the following:  - I`n Advance` - `In Arrears` **Note:** You can override the value inherited from the Product Rate Plan Charge when a subscription has a recurring charge type. This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).
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
     * @param string $charge_model Determines how to evaluate charges. Charge models must be individually activated in the web-based UI. **Character limit**: 29 **Values**: inherited from `ProductRatePlanCharge.ChargeModel`
     * @return $this
     */
    public function setChargeModel($charge_model)
    {
        $this->container['charge_model'] = $charge_model;

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
     * @param string $charge_number A unique number that identifies the charge. This number is returned as a string. **Character limit**: 50 **Values**: one of the following:  - automatically generated if left null - a unique number of 50 characters or fewer
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
     * @param string $charge_type Specifies the type of charge. **Character limit**: 9 **Values**: inherited from `ProductRatePlanCharge.ChargeType`
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets charged_through_date
     * @return \DateTime
     */
    public function getChargedThroughDate()
    {
        return $this->container['charged_through_date'];
    }

    /**
     * Sets charged_through_date
     * @param \DateTime $charged_through_date The date through which a customer has been billed for the charge. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setChargedThroughDate($charged_through_date)
    {
        $this->container['charged_through_date'] = $charged_through_date;

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
     * @param string $created_by_id The ID of the Zuora user who created the `RatePlanCharge` object. **Character limit**: 32 **Values**: automatically generated
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
     * @param \DateTime $created_date The date when the `RatePlanCharge` object was created. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets dmrc
     * @return double
     */
    public function getDmrc()
    {
        return $this->container['dmrc'];
    }

    /**
     * Sets dmrc
     * @param double $dmrc A delta monthly recurring charge is the change in monthly recurring revenue caused by an amendment or a new subscription. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setDmrc($dmrc)
    {
        $this->container['dmrc'] = $dmrc;

        return $this;
    }

    /**
     * Gets dtcv
     * @return double
     */
    public function getDtcv()
    {
        return $this->container['dtcv'];
    }

    /**
     * Sets dtcv
     * @param double $dtcv After an Amendment, the change in the total contract value (TCV) amount for this charge, compared with its previous value. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setDtcv($dtcv)
    {
        $this->container['dtcv'] = $dtcv;

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
     * @param string $description A description of the charge. **Character limit**: 500 **Values**: inherited from `ProductRatePlanCharge.Description`
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
     * @param string $discount_level Specifies if the discount applies to just the product rate plan, the entire subscription, or to any activity in the account. **Character limit**: 12 **Values**: inherited from `ProductRatePlanCharge.DiscountLevel`
     * @return $this
     */
    public function setDiscountLevel($discount_level)
    {
        $this->container['discount_level'] = $discount_level;

        return $this;
    }

    /**
     * Gets effective_end_date
     * @return \DateTime
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effective_end_date'];
    }

    /**
     * Sets effective_end_date
     * @param \DateTime $effective_end_date The date when the segmented charge ends or ended. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setEffectiveEndDate($effective_end_date)
    {
        $this->container['effective_end_date'] = $effective_end_date;

        return $this;
    }

    /**
     * Gets effective_start_date
     * @return \DateTime
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effective_start_date'];
    }

    /**
     * Sets effective_start_date
     * @param \DateTime $effective_start_date The date when the segmented charge starts or started. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setEffectiveStartDate($effective_start_date)
    {
        $this->container['effective_start_date'] = $effective_start_date;

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
     * @param string $end_date_condition Defines when the charge ends after the charge trigger date. This field can be updated when **Status** is `Draft`. **Values**: one of the following:  - `SubscriptionEnd`: The charge ends on the subscription end date after the charge trigger date. This is the default value. - `FixedPeriod`: The charge ends after a specified period based on the trigger date of the charge. If you set this field to `FixedPeriod`, you must specify the length of the period and a period type by defining the `UpToPeriods` and `UpToPeriodsType` fields. - `SpecificEndDate`: The specific date on which the charge ends. If you set this field to `SpecificEndDate`, you must specify the specific date by defining the `SpecificEndDate` field.  **Note**: If the subscription ends before the charge end date, the charge ends when the subscription ends. But if the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge will end on the charge end date.
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
     * Gets is_last_segment
     * @return bool
     */
    public function getIsLastSegment()
    {
        return $this->container['is_last_segment'];
    }

    /**
     * Sets is_last_segment
     * @param bool $is_last_segment Indicates if the segment of the rate plan charge is the most recent segment. **Character limit**: 5 **Values**: automatically generated: `true`, `false`
     * @return $this
     */
    public function setIsLastSegment($is_last_segment)
    {
        $this->container['is_last_segment'] = $is_last_segment;

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
     * Gets mrr
     * @return double
     */
    public function getMrr()
    {
        return $this->container['mrr'];
    }

    /**
     * Sets mrr
     * @param double $mrr Monthly recurring revenue (MRR) is the amount of recurring charges in a given month. The MRR calculation doesn't include one-time charges nor usage charges. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setMrr($mrr)
    {
        $this->container['mrr'] = $mrr;

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
     * @param string $name The name of the rate plan charge. **Character limit**: 100 **Values**: automatically generated
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
     * @param int $number_of_periods Specifies the number of periods to use when calculating charges in an overage smoothing charge model. **Character limit**: 5 **Values**: inherited from `ProductRatePlanCharge.NumberOfPeriod`
     * @return $this
     */
    public function setNumberOfPeriods($number_of_periods)
    {
        $this->container['number_of_periods'] = $number_of_periods;

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
     * @param string $original_id The original ID of the rate plan charge. **Character limit**: 32 **Values**: automatically generated
     * @return $this
     */
    public function setOriginalId($original_id)
    {
        $this->container['original_id'] = $original_id;

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
     * @param string $overage_calculation_option Determines when to calculate overage charges. If the value of the SmoothingMode field is null (not specified and not inherited from ProductRatePlanCharge.SmoothingMode), the value of this field is ignored. **Character limit**: 20 **Values**: inherited from `ProductRatePlanCharge.OverageCalculationOption`
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
     * @param string $overage_unused_units_credit_option Determines whether to credit the customer with unused units of usage. **Character limit**: 20 **Values**: inherited from `ProductRatePlanCharge.OverageUnusedUnitsCreditOption`
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
     * @param double $price_increase_percentage Specifies the percentage to increase or decrease the price of renewed subscriptions. Use this field if the [`ProductRatePlanCharge.PriceChangeOption`](/D_Zuora_APIs/SOAP_API/C_SOAP_API_Reference/F_API_Objects/ProductRatePlanCharge#PriceChangeOption) value is set to SpecificPercentageValue. **Character limit**: 16 **Values**: a decimal value between -100 and 100
     * @return $this
     */
    public function setPriceIncreasePercentage($price_increase_percentage)
    {
        $this->container['price_increase_percentage'] = $price_increase_percentage;

        return $this;
    }

    /**
     * Gets processed_through_date
     * @return \DateTime
     */
    public function getProcessedThroughDate()
    {
        return $this->container['processed_through_date'];
    }

    /**
     * Sets processed_through_date
     * @param \DateTime $processed_through_date The date until when charges have been processed. When billing in arrears, such as usage, this field value is the the same as the `ChargedThroughDate` value. This date is the earliest date when a charge can be amended. **Character limit**: 29 **Values**: automatically generated
     * @return $this
     */
    public function setProcessedThroughDate($processed_through_date)
    {
        $this->container['processed_through_date'] = $processed_through_date;

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
     * @param double $quantity The default quantity of units, such as the number of authors in a hosted wiki service. Valid for all charge models except for Flat Fee pricing. **Character limit**: 16 **Values**: a valid quantity value
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets rate_plan_id
     * @return string
     */
    public function getRatePlanId()
    {
        return $this->container['rate_plan_id'];
    }

    /**
     * Sets rate_plan_id
     * @param string $rate_plan_id The ID of the rate plan associated with the rate plan charge. **Character limit**: 32 **Values**: inherited from `RatePlan.Id`
     * @return $this
     */
    public function setRatePlanId($rate_plan_id)
    {
        $this->container['rate_plan_id'] = $rate_plan_id;

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
     * @param string $rev_rec_trigger_condition Specifies when revenue recognition begins. **Character limit**: 22 **Values**: one of the following:  -  `ContractEffectiveDate`  -  `ServiceActivationDate`  -  `CustomerAcceptanceDate`
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
     * @param string $revenue_recognition_rule_name Specifies the Revenue Recognition Rule that you want the Rate Plan Charge to use. This field can be updated when **Status** is `Draft`. By default, the Revenue Recognition Rule is inherited from the Product Rate Plan Charge. For Amend() calls, you can use this field only for NewProduct amendments. For Update() calls, you can use this field only to update subscriptions in draft status. Note that if you use this field to specify a Revenue Recognition Rule for the Rate Plan Charge, the rule will remain as specified even if you later change the rule used by the corresponding Product Rate Plan Charge. See [Z-Billing User Role](https://knowledgecenter.zuora.com/CF_Users_and_Administrators/A_Administrator_Settings/User_Roles/d_Billing_Roles) permission enabled to use this field.  **Character limit**: n/a **Values**: name of an active Revenue Recognition Rule
     * @return $this
     */
    public function setRevenueRecognitionRuleName($revenue_recognition_rule_name)
    {
        $this->container['revenue_recognition_rule_name'] = $revenue_recognition_rule_name;

        return $this;
    }

    /**
     * Gets segment
     * @return int
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     * @param int $segment The identifying number of the subscription rate plan segment. Segments are numbered sequentially, starting with 1. **Character limit**: 2 **Values**: automatically generated
     * @return $this
     */
    public function setSegment($segment)
    {
        $this->container['segment'] = $segment;

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
     * @param int $specific_billing_period Customizes the number of months or weeks for the charges billing period. This field is required if you set the value of the BillingPeriod field to `Specific Months` or `Specific Weeks`. **Character limit**: 5 **Values**: inherited from `ProductRatePlanCharge.BillingPeriod` **Note:** You can override the value inherited from the Product Rate Plan Charge, but only when creating a new subscription or a New Product amendment.
     * @return $this
     */
    public function setSpecificBillingPeriod($specific_billing_period)
    {
        $this->container['specific_billing_period'] = $specific_billing_period;

        return $this;
    }

    /**
     * Gets specific_end_date
     * @return \DateTime
     */
    public function getSpecificEndDate()
    {
        return $this->container['specific_end_date'];
    }

    /**
     * Sets specific_end_date
     * @param \DateTime $specific_end_date The specific date on which the charge ends. **Character limit**: 29 **Values**: a valid date and time value **Note**:  - This field is only applicable when the `EndDateCondition` field is set to `SpecificEndDate`. - If the subscription ends before the specific end date, the charge ends when the subscription ends. But if the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge will end on the specific end date.
     * @return $this
     */
    public function setSpecificEndDate($specific_end_date)
    {
        $this->container['specific_end_date'] = $specific_end_date;

        return $this;
    }

    /**
     * Gets tcv
     * @return double
     */
    public function getTcv()
    {
        return $this->container['tcv'];
    }

    /**
     * Sets tcv
     * @param double $tcv The total contract value (TCV) is the value of a single rate plan charge in a subscription over the lifetime of the subscription. This value does not represent all charges on the subscription. The TCV includes recurring charges and one-time charges, but it doesn't include usage charge. **Character limit**: 16 **Values**: automatically generated
     * @return $this
     */
    public function setTcv($tcv)
    {
        $this->container['tcv'] = $tcv;

        return $this;
    }

    /**
     * Gets trigger_date
     * @return \DateTime
     */
    public function getTriggerDate()
    {
        return $this->container['trigger_date'];
    }

    /**
     * Sets trigger_date
     * @param \DateTime $trigger_date The date when the charge becomes effective, and billing begins. This field is required if the `TriggerEvent` field value is `SpecificDate`. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_Format_and_Datetimes_in_Zuora)
     * @return $this
     */
    public function setTriggerDate($trigger_date)
    {
        $this->container['trigger_date'] = $trigger_date;

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
     * @param string $trigger_event Specifies when to start billing the customer for the charge. **Note: **This field can be passed through the subscribe() and amend() calls and will override the default value set on the Product Rate Plan Charge. **Character limit**: 18 **Values**: inherited from `ProductRatePlanCharge.TriggerEvent` and can be one of the following values:  - `ContractEffective `is the date when the subscription's contract goes into effect and the charge is ready to be billed. - `ServiceActivationDate `is when the services or products for a subscription have been activated and the customers have access. - `CustomerAcceptance `is when the customer accepts the services or products for a subscription. - SpecificDate is valid only on the RatePlanCharge.
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
     * @param string $uom Specifies the units to measure usage. Units of measure are configured in the web-based UI: **Z-Billing > Settings**. **Character limit**: 25 **Values**: inherited from `ProductRatePlanCharge.UOM`
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
     * @param int $up_to_periods Specifies the length of the period during which the charge is active. If this period ends before the subscription ends, the charge ends when this period ends. **Character limit**: 5 **Values**: inherited from `ProductRatePlanCharge.UpToPeriods` **Note**:  - You must use this field together with the `UpToPeriodsType` field to specify the time period. This field is only applicable only when the `EndDateCondition` field is set to `FixedPeriod`. - You can override the value inherited from the Product Rate Plan Charge, but only when creating a new subscription or a New Product amendment. - Use this field to override the value in `ProductRatePlanCharge.UpToPeriod`. - If you override the value in this field, enter a whole number between 0 and 65535, exclusive. - If the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge end date will change accordingly up to the original period end.
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
     * @param string $up_to_periods_type The period type used to define when the charge ends. This field can be updated when **Status** is `Draft`. **Values**: one of the following:  - `Billing Periods` (default) - `Days` - `Weeks` - `Months` - `Years` **Note**:  - You must use this field together with the `UpToPeriods` field to specify the time period. - This field is only applicable only when the `EndDateCondition` field is set to `FixedPeriod`.
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
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version The version of the rate plan charge. Each time a charge is amended, Zuora creates a new version of the rate plan charge. **Character limit**: 5 **Values**: automatically generated
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


