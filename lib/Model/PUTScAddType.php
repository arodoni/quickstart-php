<?php
/**
 * PUTScAddType
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
 * PUTScAddType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PUTScAddType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PUTScAddType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'apply_discount_to' => 'string',
        'bill_cycle_day' => 'string',
        'bill_cycle_type' => 'string',
        'billing_period' => 'string',
        'billing_period_alignment' => 'string',
        'billing_timing' => 'string',
        'custom_field__c' => 'string',
        'description' => 'string',
        'discount_amount' => 'string',
        'discount_level' => 'string',
        'discount_percentage' => 'string',
        'end_date_condition' => 'string',
        'included_units' => 'string',
        'list_price_base' => 'string',
        'number' => 'string',
        'number_of_periods' => 'int',
        'overage_price' => 'string',
        'overage_unused_units_credit_option' => 'string',
        'price' => 'string',
        'price_change_option' => 'string',
        'price_increase_percentage' => 'string',
        'product_rate_plan_charge_id' => 'string',
        'quantity' => 'string',
        'rating_group' => 'string',
        'specific_billing_period' => 'int',
        'specific_end_date' => '\DateTime',
        'tiers' => '\Swagger\Client\Model\POSTTierType[]',
        'trigger_date' => '\DateTime',
        'trigger_event' => 'string',
        'unused_units_credit_rates' => 'string',
        'up_to_periods' => 'int',
        'up_to_periods_type' => 'string'
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
        'bill_cycle_day' => 'billCycleDay',
        'bill_cycle_type' => 'billCycleType',
        'billing_period' => 'billingPeriod',
        'billing_period_alignment' => 'billingPeriodAlignment',
        'billing_timing' => 'billingTiming',
        'custom_field__c' => 'customField__c',
        'description' => 'description',
        'discount_amount' => 'discountAmount',
        'discount_level' => 'discountLevel',
        'discount_percentage' => 'discountPercentage',
        'end_date_condition' => 'endDateCondition',
        'included_units' => 'includedUnits',
        'list_price_base' => 'listPriceBase',
        'number' => 'number',
        'number_of_periods' => 'numberOfPeriods',
        'overage_price' => 'overagePrice',
        'overage_unused_units_credit_option' => 'overageUnusedUnitsCreditOption',
        'price' => 'price',
        'price_change_option' => 'priceChangeOption',
        'price_increase_percentage' => 'priceIncreasePercentage',
        'product_rate_plan_charge_id' => 'productRatePlanChargeId',
        'quantity' => 'quantity',
        'rating_group' => 'ratingGroup',
        'specific_billing_period' => 'specificBillingPeriod',
        'specific_end_date' => 'specificEndDate',
        'tiers' => 'tiers',
        'trigger_date' => 'triggerDate',
        'trigger_event' => 'triggerEvent',
        'unused_units_credit_rates' => 'unusedUnitsCreditRates',
        'up_to_periods' => 'upToPeriods',
        'up_to_periods_type' => 'upToPeriodsType'
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
        'bill_cycle_day' => 'setBillCycleDay',
        'bill_cycle_type' => 'setBillCycleType',
        'billing_period' => 'setBillingPeriod',
        'billing_period_alignment' => 'setBillingPeriodAlignment',
        'billing_timing' => 'setBillingTiming',
        'custom_field__c' => 'setCustomFieldC',
        'description' => 'setDescription',
        'discount_amount' => 'setDiscountAmount',
        'discount_level' => 'setDiscountLevel',
        'discount_percentage' => 'setDiscountPercentage',
        'end_date_condition' => 'setEndDateCondition',
        'included_units' => 'setIncludedUnits',
        'list_price_base' => 'setListPriceBase',
        'number' => 'setNumber',
        'number_of_periods' => 'setNumberOfPeriods',
        'overage_price' => 'setOveragePrice',
        'overage_unused_units_credit_option' => 'setOverageUnusedUnitsCreditOption',
        'price' => 'setPrice',
        'price_change_option' => 'setPriceChangeOption',
        'price_increase_percentage' => 'setPriceIncreasePercentage',
        'product_rate_plan_charge_id' => 'setProductRatePlanChargeId',
        'quantity' => 'setQuantity',
        'rating_group' => 'setRatingGroup',
        'specific_billing_period' => 'setSpecificBillingPeriod',
        'specific_end_date' => 'setSpecificEndDate',
        'tiers' => 'setTiers',
        'trigger_date' => 'setTriggerDate',
        'trigger_event' => 'setTriggerEvent',
        'unused_units_credit_rates' => 'setUnusedUnitsCreditRates',
        'up_to_periods' => 'setUpToPeriods',
        'up_to_periods_type' => 'setUpToPeriodsType'
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
        'bill_cycle_day' => 'getBillCycleDay',
        'bill_cycle_type' => 'getBillCycleType',
        'billing_period' => 'getBillingPeriod',
        'billing_period_alignment' => 'getBillingPeriodAlignment',
        'billing_timing' => 'getBillingTiming',
        'custom_field__c' => 'getCustomFieldC',
        'description' => 'getDescription',
        'discount_amount' => 'getDiscountAmount',
        'discount_level' => 'getDiscountLevel',
        'discount_percentage' => 'getDiscountPercentage',
        'end_date_condition' => 'getEndDateCondition',
        'included_units' => 'getIncludedUnits',
        'list_price_base' => 'getListPriceBase',
        'number' => 'getNumber',
        'number_of_periods' => 'getNumberOfPeriods',
        'overage_price' => 'getOveragePrice',
        'overage_unused_units_credit_option' => 'getOverageUnusedUnitsCreditOption',
        'price' => 'getPrice',
        'price_change_option' => 'getPriceChangeOption',
        'price_increase_percentage' => 'getPriceIncreasePercentage',
        'product_rate_plan_charge_id' => 'getProductRatePlanChargeId',
        'quantity' => 'getQuantity',
        'rating_group' => 'getRatingGroup',
        'specific_billing_period' => 'getSpecificBillingPeriod',
        'specific_end_date' => 'getSpecificEndDate',
        'tiers' => 'getTiers',
        'trigger_date' => 'getTriggerDate',
        'trigger_event' => 'getTriggerEvent',
        'unused_units_credit_rates' => 'getUnusedUnitsCreditRates',
        'up_to_periods' => 'getUpToPeriods',
        'up_to_periods_type' => 'getUpToPeriodsType'
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
        $this->container['bill_cycle_day'] = isset($data['bill_cycle_day']) ? $data['bill_cycle_day'] : null;
        $this->container['bill_cycle_type'] = isset($data['bill_cycle_type']) ? $data['bill_cycle_type'] : null;
        $this->container['billing_period'] = isset($data['billing_period']) ? $data['billing_period'] : null;
        $this->container['billing_period_alignment'] = isset($data['billing_period_alignment']) ? $data['billing_period_alignment'] : null;
        $this->container['billing_timing'] = isset($data['billing_timing']) ? $data['billing_timing'] : null;
        $this->container['custom_field__c'] = isset($data['custom_field__c']) ? $data['custom_field__c'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['discount_level'] = isset($data['discount_level']) ? $data['discount_level'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['end_date_condition'] = isset($data['end_date_condition']) ? $data['end_date_condition'] : null;
        $this->container['included_units'] = isset($data['included_units']) ? $data['included_units'] : null;
        $this->container['list_price_base'] = isset($data['list_price_base']) ? $data['list_price_base'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_of_periods'] = isset($data['number_of_periods']) ? $data['number_of_periods'] : null;
        $this->container['overage_price'] = isset($data['overage_price']) ? $data['overage_price'] : null;
        $this->container['overage_unused_units_credit_option'] = isset($data['overage_unused_units_credit_option']) ? $data['overage_unused_units_credit_option'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_change_option'] = isset($data['price_change_option']) ? $data['price_change_option'] : null;
        $this->container['price_increase_percentage'] = isset($data['price_increase_percentage']) ? $data['price_increase_percentage'] : null;
        $this->container['product_rate_plan_charge_id'] = isset($data['product_rate_plan_charge_id']) ? $data['product_rate_plan_charge_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['rating_group'] = isset($data['rating_group']) ? $data['rating_group'] : null;
        $this->container['specific_billing_period'] = isset($data['specific_billing_period']) ? $data['specific_billing_period'] : null;
        $this->container['specific_end_date'] = isset($data['specific_end_date']) ? $data['specific_end_date'] : null;
        $this->container['tiers'] = isset($data['tiers']) ? $data['tiers'] : null;
        $this->container['trigger_date'] = isset($data['trigger_date']) ? $data['trigger_date'] : null;
        $this->container['trigger_event'] = isset($data['trigger_event']) ? $data['trigger_event'] : null;
        $this->container['unused_units_credit_rates'] = isset($data['unused_units_credit_rates']) ? $data['unused_units_credit_rates'] : null;
        $this->container['up_to_periods'] = isset($data['up_to_periods']) ? $data['up_to_periods'] : null;
        $this->container['up_to_periods_type'] = isset($data['up_to_periods_type']) ? $data['up_to_periods_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['product_rate_plan_charge_id'] === null) {
            $invalid_properties[] = "'product_rate_plan_charge_id' can't be null";
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
        if ($this->container['product_rate_plan_charge_id'] === null) {
            return false;
        }
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
     * @param string $apply_discount_to Specifies the type of charges that you want a specific discount to apply to.  Values:  * `ONETIME` * `RECURRING` * `USAGE` * `ONETIMERECURRING` * `ONETIMEUSAGE` * `RECURRINGUSAGE` * `ONETIMERECURRINGUSAGE`  Available for the following charge type for the Discount-Fixed Amount and Discount-Percentage charge models:  * Recurring
     * @return $this
     */
    public function setApplyDiscountTo($apply_discount_to)
    {
        $this->container['apply_discount_to'] = $apply_discount_to;

        return $this;
    }

    /**
     * Gets bill_cycle_day
     * @return string
     */
    public function getBillCycleDay()
    {
        return $this->container['bill_cycle_day'];
    }

    /**
     * Sets bill_cycle_day
     * @param string $bill_cycle_day Sets the bill cycle day (BCD) for the charge. The BCD determines which day of the month customer is billed.  Values: `1`-`31`  Available for the following charge types:  * Recurring * Usage-based
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
     * @param string $bill_cycle_type Specifies how to determine the billing day for the charge. When this field is set to `SpecificDayOfMonth`, set the `BillCycleDay` field. When this field is set to `SpecificDayOfWeek`, set the `weeklyBillCycleDay` field.  Values:  * `DefaultFromCustomer` * `SpecificDayOfMonth` * `SubscriptionStartDay` * `ChargeTriggerDay` * `SpecificDayOfWeek`  Available for the following charge types:  * Recurring * Usage-based
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
     * @param string $billing_period Billing period for the charge. The start day of the billing period is also called the bill cycle day (BCD).  Values:  * `Month` * `Quarter` * `Semi_Annual` * `Annual` * `Eighteen_Months` * `Two_Years` * `Three_Years` * `Five_Years` * `Specific_Months` * `Subscription_Term` * `Week` * `Specific_Weeks`  Available for the following charge types:  * Recurring * Usage-based
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
     * @param string $billing_period_alignment Aligns charges within the same subscription if multiple charges begin on different dates.  Values:  * `AlignToCharge` * `AlignToSubscriptionStart` * `AlignToTermStart`  Available for the following charge types:  * Recurring * Usage-based
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
     * @param string $billing_timing Billing timing for the charge for recurring charge types. Not avaliable for one time, usage and discount charges.  Values:  * `IN_ADVANCE` (default) * `IN_ARREARS`
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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the charge.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_amount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     * @param string $discount_amount Specifies the amount of fixed-amount discount.  Available for the following charge type for the Discount-Fixed Amount charge model:  * Recurring
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

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
     * @param string $discount_level Specifies if the discount applies to the product rate plan only , the entire subscription, or to any activity in the account.  Values:  * `rateplan` * `subscription` * `account`  Available for the following charge type for the Discount-Fixed Amount and Discount-Percentage charge models:  * Recurring
     * @return $this
     */
    public function setDiscountLevel($discount_level)
    {
        $this->container['discount_level'] = $discount_level;

        return $this;
    }

    /**
     * Gets discount_percentage
     * @return string
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     * @param string $discount_percentage Specifies the percentage of a percentage discount.   Available for the following charge type for the Discount-Percentage charge model:  * Recurring
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

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
     * @param string $end_date_condition Defines when the charge ends after the charge trigger date. If the subscription ends before the charge end date, the charge ends when the subscription ends. But if the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge will end on the charge end date.  Values:  * `Subscription_End` * `Fixed_Period` * `Specific_End_Date`
     * @return $this
     */
    public function setEndDateCondition($end_date_condition)
    {
        $this->container['end_date_condition'] = $end_date_condition;

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
     * @param string $included_units Specifies the number of units in the base set of units for this charge. Must be >=`0`.  Available for the following charge types for the Overage charge model:  * Recurring * Usage-based
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
     * @param string $list_price_base The list price base for the product rate plan charge.  Values:  * `Per_Billing_Period` * `Per_Month` * `Per_Week`  Available for the following charge type for the Flat Fee, Per Unit, Volume Pricing, and Tiered Pricing charge models:  * Recurring
     * @return $this
     */
    public function setListPriceBase($list_price_base)
    {
        $this->container['list_price_base'] = $list_price_base;

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
     * @param string $number Unique number that identifies the charge. System-generated if not provided.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

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
     * @param int $number_of_periods Specifies the number of periods to use when calculating charges in an overage smoothing charge model.  Available for the following charge type for the Overage and Tiered with Overage charge models:  * Usage-based
     * @return $this
     */
    public function setNumberOfPeriods($number_of_periods)
    {
        $this->container['number_of_periods'] = $number_of_periods;

        return $this;
    }

    /**
     * Gets overage_price
     * @return string
     */
    public function getOveragePrice()
    {
        return $this->container['overage_price'];
    }

    /**
     * Sets overage_price
     * @param string $overage_price Price for units over the allowed amount.   Available for the following charge type for the Overage and Tiered with Overage charge models:  * Usage-based
     * @return $this
     */
    public function setOveragePrice($overage_price)
    {
        $this->container['overage_price'] = $overage_price;

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
     * @param string $overage_unused_units_credit_option Determines whether to credit the customer with unused units of usage.  Values:  * `NoCredit` * `CreditBySpecificRate`  Available for the following charge type for the Overage and Tiered with Overage charge models:  * Usage-based
     * @return $this
     */
    public function setOverageUnusedUnitsCreditOption($overage_unused_units_credit_option)
    {
        $this->container['overage_unused_units_credit_option'] = $overage_unused_units_credit_option;

        return $this;
    }

    /**
     * Gets price
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param string $price Price for units in the subscription rate plan.  Supports all charge types for the Flat Fee and Per Unit charge models
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $price_change_option Applies an automatic price change when a termed subscription is renewed. The Z-Billing Admin setting Enable Automatic Price Change When Subscriptions are Renewed?  must be set to Yes to use this field.  See Define Default Subscription Settings for more information on setting this option.  Values:  * `NoChange` (default) * `SpecificPercentageValue` * `UseLatestProductCatalogPricing`  Available for the following charge types:  * Recurring * Usage-based * Not available for the Fixed-Amount Discount charge model.
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
     * @param string $price_increase_percentage Specifies the percentage to increase or decrease the price of a termed subscription's renewal. Required if you set the `PriceChangeOption` field to `SpecificPercentageValue`.  Decimal between -100 and 100.  Available for the following charge types:  * Recurring * Usage-based  Not available for the Fixed-Amount Discount charge model.
     * @return $this
     */
    public function setPriceIncreasePercentage($price_increase_percentage)
    {
        $this->container['price_increase_percentage'] = $price_increase_percentage;

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
     * @param string $product_rate_plan_charge_id 
     * @return $this
     */
    public function setProductRatePlanChargeId($product_rate_plan_charge_id)
    {
        $this->container['product_rate_plan_charge_id'] = $product_rate_plan_charge_id;

        return $this;
    }

    /**
     * Gets quantity
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param string $quantity Number of units. Must be >=`0`.  Available for the following charge types for the Per Unit, Volume Pricing, and Tiered Pricing charge models:  * One-time * Recurring
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string $rating_group Specifies a rating group based on which usage records are rated. See [Usages Rating by Group](https://knowledgecenter.zuora.com/CB_Billing/J_Billing_Operations/Usage/Usage_Rating_by_Group) for more information.  **Note:** This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).  Values:  * `ByBillingPeriod` (default): The rating is based on all the usages in a billing period.        * `ByUsageStartDate`: The rating is based on all the usages on the same usage start date.  * `ByUsageRecord`: The rating is based on each usage record. * `ByUsageUpload`: The rating is based on all the usages in a uploaded usage file (.xls or .csv).  The `ByBillingPeriod` value can be applied for all charge models. The `ByUsageStartDate`, `ByUsageRecord`, and `ByUsageUpload` values can only be applied for per unit, volume pricing, and tiered pricing charge models. Use this field only for Usage charges. One-Time Charges and Recurring Charges return `NULL`.
     * @return $this
     */
    public function setRatingGroup($rating_group)
    {
        $this->container['rating_group'] = $rating_group;

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
     * @param int $specific_billing_period Specifies the number of month or week for the charges billing period. Required if you set the value of the `billingPeriod` field to `Specific_Months` or `Specific_Weeks`.  Available for the following charge types:  * Recurring * Usage-based
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
     * @param \DateTime $specific_end_date Defines when the charge ends after the charge trigger date.  This field is only applicable when the `endDateCondition` field is set to `Specific_End_Date`.  If the subscription ends before the specific end date, the charge ends when the subscription ends. But if the subscription end date is subsequently changed through a Renewal, or Terms and Conditions amendment, the charge will end on the specific end date.
     * @return $this
     */
    public function setSpecificEndDate($specific_end_date)
    {
        $this->container['specific_end_date'] = $specific_end_date;

        return $this;
    }

    /**
     * Gets tiers
     * @return \Swagger\Client\Model\POSTTierType[]
     */
    public function getTiers()
    {
        return $this->container['tiers'];
    }

    /**
     * Sets tiers
     * @param \Swagger\Client\Model\POSTTierType[] $tiers Container for Volume, Tiered or Tiered with Overage charge models. Supports the following charge types:  * One-time * Recurring * Usage-based
     * @return $this
     */
    public function setTiers($tiers)
    {
        $this->container['tiers'] = $tiers;

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
     * @param \DateTime $trigger_date Specifies when to start billing the customer for the charge. Required if the `triggerEvent` field is set to `USD`.
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
     * @param string $trigger_event Specifies when to start billing the customer for the charge.  Values:  * `UCE` * `USA` * `UCA` * `USD`
     * @return $this
     */
    public function setTriggerEvent($trigger_event)
    {
        $this->container['trigger_event'] = $trigger_event;

        return $this;
    }

    /**
     * Gets unused_units_credit_rates
     * @return string
     */
    public function getUnusedUnitsCreditRates()
    {
        return $this->container['unused_units_credit_rates'];
    }

    /**
     * Sets unused_units_credit_rates
     * @param string $unused_units_credit_rates Specifies the rate to credit a customer for unused units of usage. This field applies only for overage charge models when the `OverageUnusedUnitsCreditOption` field is set to `CreditBySpecificRate`.  Available for the following charge type for the Overage and Tiered with Overage charge models:  * Usage-based
     * @return $this
     */
    public function setUnusedUnitsCreditRates($unused_units_credit_rates)
    {
        $this->container['unused_units_credit_rates'] = $unused_units_credit_rates;

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
     * @param int $up_to_periods The period type used to define when the charge ends.   Values:  * `Billing_Periods` * `Days` * `Weeks` * `Months` * `Years`  You must use this field together with the `upToPeriods` field to specify the time period.  This field is applicable only when the `endDateCondition` field is set to `Fixed_Period`.
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
     * @param string $up_to_periods_type The period type used to define when the charge ends.   Values:  * `Billing_Periods` * `Days` * `Weeks` * `Months` * `Years`  You must use this field together with the `upToPeriods` field to specify the time period.  This field is applicable only when the `endDateCondition` field is set to `Fixed_Period`.
     * @return $this
     */
    public function setUpToPeriodsType($up_to_periods_type)
    {
        $this->container['up_to_periods_type'] = $up_to_periods_type;

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


