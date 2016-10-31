<?php
/**
 * GETAccountingPeriodFileIdsType
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
 * GETAccountingPeriodFileIdsType Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GETAccountingPeriodFileIdsType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GETAccountingPeriodFileIdsType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'accounts_receivable_account_aging_detail_export_file_id' => 'string',
        'accounts_receivable_invoice_aging_detail_export_file_id' => 'string',
        'ar_roll_forward_detail_export_file_id' => 'string',
        'fx_realized_gain_and_loss_detail_export_file_id' => 'string',
        'fx_unrealized_gain_and_loss_detail_export_file_id' => 'string',
        'revenue_detail_csv_file_id' => 'string',
        'revenue_detail_excel_file_id' => 'string',
        'unprocessed_charges_file_id' => 'string'
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
        'accounts_receivable_account_aging_detail_export_file_id' => 'accountsReceivableAccountAgingDetailExportFileId',
        'accounts_receivable_invoice_aging_detail_export_file_id' => 'accountsReceivableInvoiceAgingDetailExportFileId',
        'ar_roll_forward_detail_export_file_id' => 'arRollForwardDetailExportFileId',
        'fx_realized_gain_and_loss_detail_export_file_id' => 'fxRealizedGainAndLossDetailExportFileId',
        'fx_unrealized_gain_and_loss_detail_export_file_id' => 'fxUnrealizedGainAndLossDetailExportFileId',
        'revenue_detail_csv_file_id' => 'revenueDetailCsvFileId',
        'revenue_detail_excel_file_id' => 'revenueDetailExcelFileId',
        'unprocessed_charges_file_id' => 'unprocessedChargesFileId'
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
        'accounts_receivable_account_aging_detail_export_file_id' => 'setAccountsReceivableAccountAgingDetailExportFileId',
        'accounts_receivable_invoice_aging_detail_export_file_id' => 'setAccountsReceivableInvoiceAgingDetailExportFileId',
        'ar_roll_forward_detail_export_file_id' => 'setArRollForwardDetailExportFileId',
        'fx_realized_gain_and_loss_detail_export_file_id' => 'setFxRealizedGainAndLossDetailExportFileId',
        'fx_unrealized_gain_and_loss_detail_export_file_id' => 'setFxUnrealizedGainAndLossDetailExportFileId',
        'revenue_detail_csv_file_id' => 'setRevenueDetailCsvFileId',
        'revenue_detail_excel_file_id' => 'setRevenueDetailExcelFileId',
        'unprocessed_charges_file_id' => 'setUnprocessedChargesFileId'
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
        'accounts_receivable_account_aging_detail_export_file_id' => 'getAccountsReceivableAccountAgingDetailExportFileId',
        'accounts_receivable_invoice_aging_detail_export_file_id' => 'getAccountsReceivableInvoiceAgingDetailExportFileId',
        'ar_roll_forward_detail_export_file_id' => 'getArRollForwardDetailExportFileId',
        'fx_realized_gain_and_loss_detail_export_file_id' => 'getFxRealizedGainAndLossDetailExportFileId',
        'fx_unrealized_gain_and_loss_detail_export_file_id' => 'getFxUnrealizedGainAndLossDetailExportFileId',
        'revenue_detail_csv_file_id' => 'getRevenueDetailCsvFileId',
        'revenue_detail_excel_file_id' => 'getRevenueDetailExcelFileId',
        'unprocessed_charges_file_id' => 'getUnprocessedChargesFileId'
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
        $this->container['accounts_receivable_account_aging_detail_export_file_id'] = isset($data['accounts_receivable_account_aging_detail_export_file_id']) ? $data['accounts_receivable_account_aging_detail_export_file_id'] : null;
        $this->container['accounts_receivable_invoice_aging_detail_export_file_id'] = isset($data['accounts_receivable_invoice_aging_detail_export_file_id']) ? $data['accounts_receivable_invoice_aging_detail_export_file_id'] : null;
        $this->container['ar_roll_forward_detail_export_file_id'] = isset($data['ar_roll_forward_detail_export_file_id']) ? $data['ar_roll_forward_detail_export_file_id'] : null;
        $this->container['fx_realized_gain_and_loss_detail_export_file_id'] = isset($data['fx_realized_gain_and_loss_detail_export_file_id']) ? $data['fx_realized_gain_and_loss_detail_export_file_id'] : null;
        $this->container['fx_unrealized_gain_and_loss_detail_export_file_id'] = isset($data['fx_unrealized_gain_and_loss_detail_export_file_id']) ? $data['fx_unrealized_gain_and_loss_detail_export_file_id'] : null;
        $this->container['revenue_detail_csv_file_id'] = isset($data['revenue_detail_csv_file_id']) ? $data['revenue_detail_csv_file_id'] : null;
        $this->container['revenue_detail_excel_file_id'] = isset($data['revenue_detail_excel_file_id']) ? $data['revenue_detail_excel_file_id'] : null;
        $this->container['unprocessed_charges_file_id'] = isset($data['unprocessed_charges_file_id']) ? $data['unprocessed_charges_file_id'] : null;
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
     * Gets accounts_receivable_account_aging_detail_export_file_id
     * @return string
     */
    public function getAccountsReceivableAccountAgingDetailExportFileId()
    {
        return $this->container['accounts_receivable_account_aging_detail_export_file_id'];
    }

    /**
     * Sets accounts_receivable_account_aging_detail_export_file_id
     * @param string $accounts_receivable_account_aging_detail_export_file_id File ID of the [Accounts Receivable Aging Account Detail](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/F_View_Accounting_Period_Balances/Accounts_Receivable_Aging#Invoice_Aging_Details) report.
     * @return $this
     */
    public function setAccountsReceivableAccountAgingDetailExportFileId($accounts_receivable_account_aging_detail_export_file_id)
    {
        $this->container['accounts_receivable_account_aging_detail_export_file_id'] = $accounts_receivable_account_aging_detail_export_file_id;

        return $this;
    }

    /**
     * Gets accounts_receivable_invoice_aging_detail_export_file_id
     * @return string
     */
    public function getAccountsReceivableInvoiceAgingDetailExportFileId()
    {
        return $this->container['accounts_receivable_invoice_aging_detail_export_file_id'];
    }

    /**
     * Sets accounts_receivable_invoice_aging_detail_export_file_id
     * @param string $accounts_receivable_invoice_aging_detail_export_file_id File ID of the [Accounts Receivable Aging Invoice Detail](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/F_View_Accounting_Period_Balances/Accounts_Receivable_Aging#Account_Aging_Details) report.
     * @return $this
     */
    public function setAccountsReceivableInvoiceAgingDetailExportFileId($accounts_receivable_invoice_aging_detail_export_file_id)
    {
        $this->container['accounts_receivable_invoice_aging_detail_export_file_id'] = $accounts_receivable_invoice_aging_detail_export_file_id;

        return $this;
    }

    /**
     * Gets ar_roll_forward_detail_export_file_id
     * @return string
     */
    public function getArRollForwardDetailExportFileId()
    {
        return $this->container['ar_roll_forward_detail_export_file_id'];
    }

    /**
     * Sets ar_roll_forward_detail_export_file_id
     * @param string $ar_roll_forward_detail_export_file_id File ID of the [Accounts Receivable Detail](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/F_View_Accounting_Period_Balances/Accounts_Receivable#Accounts_Receivable_Detail_Report) report.
     * @return $this
     */
    public function setArRollForwardDetailExportFileId($ar_roll_forward_detail_export_file_id)
    {
        $this->container['ar_roll_forward_detail_export_file_id'] = $ar_roll_forward_detail_export_file_id;

        return $this;
    }

    /**
     * Gets fx_realized_gain_and_loss_detail_export_file_id
     * @return string
     */
    public function getFxRealizedGainAndLossDetailExportFileId()
    {
        return $this->container['fx_realized_gain_and_loss_detail_export_file_id'];
    }

    /**
     * Sets fx_realized_gain_and_loss_detail_export_file_id
     * @param string $fx_realized_gain_and_loss_detail_export_file_id File ID of the [Realized Gain and Loss Detail](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/F_View_Accounting_Period_Balances/Foreign_Currency_Gains_and_Losses#Realized_Gain.2FLoss_Detail_Report) report.  Returned only if you have [Foreign Currency Conversion](https://knowledgecenter.zuora.com/CC_Finance/Foreign_Currency_Conversion) enabled.
     * @return $this
     */
    public function setFxRealizedGainAndLossDetailExportFileId($fx_realized_gain_and_loss_detail_export_file_id)
    {
        $this->container['fx_realized_gain_and_loss_detail_export_file_id'] = $fx_realized_gain_and_loss_detail_export_file_id;

        return $this;
    }

    /**
     * Gets fx_unrealized_gain_and_loss_detail_export_file_id
     * @return string
     */
    public function getFxUnrealizedGainAndLossDetailExportFileId()
    {
        return $this->container['fx_unrealized_gain_and_loss_detail_export_file_id'];
    }

    /**
     * Sets fx_unrealized_gain_and_loss_detail_export_file_id
     * @param string $fx_unrealized_gain_and_loss_detail_export_file_id File ID of the [Unrealized Gain and Loss Detail](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/F_View_Accounting_Period_Balances/Foreign_Currency_Gains_and_Losses#Unrealized_Gain.2FLoss_Detailed_Report) report.  Returned only if you have [Foreign Currency Conversion](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/F_View_Accounting_Period_Balances/Foreign_Currency_Gains_and_Losses#Unrealized_Gain.2FLoss_Detailed_Report) enabled
     * @return $this
     */
    public function setFxUnrealizedGainAndLossDetailExportFileId($fx_unrealized_gain_and_loss_detail_export_file_id)
    {
        $this->container['fx_unrealized_gain_and_loss_detail_export_file_id'] = $fx_unrealized_gain_and_loss_detail_export_file_id;

        return $this;
    }

    /**
     * Gets revenue_detail_csv_file_id
     * @return string
     */
    public function getRevenueDetailCsvFileId()
    {
        return $this->container['revenue_detail_csv_file_id'];
    }

    /**
     * Sets revenue_detail_csv_file_id
     * @param string $revenue_detail_csv_file_id File ID of the [Revenue Detail](https://knowledgecenter.zuora.com/CC_Finance/Revenue_Recognition/X_Accounting_Period_Revenue_Detail) report in CSV format.
     * @return $this
     */
    public function setRevenueDetailCsvFileId($revenue_detail_csv_file_id)
    {
        $this->container['revenue_detail_csv_file_id'] = $revenue_detail_csv_file_id;

        return $this;
    }

    /**
     * Gets revenue_detail_excel_file_id
     * @return string
     */
    public function getRevenueDetailExcelFileId()
    {
        return $this->container['revenue_detail_excel_file_id'];
    }

    /**
     * Sets revenue_detail_excel_file_id
     * @param string $revenue_detail_excel_file_id File ID of the [Revenue Detail](https://knowledgecenter.zuora.com/CC_Finance/Revenue_Recognition/X_Accounting_Period_Revenue_Detail) report in XLSX format.
     * @return $this
     */
    public function setRevenueDetailExcelFileId($revenue_detail_excel_file_id)
    {
        $this->container['revenue_detail_excel_file_id'] = $revenue_detail_excel_file_id;

        return $this;
    }

    /**
     * Gets unprocessed_charges_file_id
     * @return string
     */
    public function getUnprocessedChargesFileId()
    {
        return $this->container['unprocessed_charges_file_id'];
    }

    /**
     * Sets unprocessed_charges_file_id
     * @param string $unprocessed_charges_file_id File ID of a report containing all [unprocessed charges](https://knowledgecenter.zuora.com/CC_Finance/A_Z-Finance/E_Accounting_Periods/G_Reconcile_transactions_before_closing_an_accounting_period#Optional:_Clear_unprocessed_charges) for the accounting period.
     * @return $this
     */
    public function setUnprocessedChargesFileId($unprocessed_charges_file_id)
    {
        $this->container['unprocessed_charges_file_id'] = $unprocessed_charges_file_id;

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


