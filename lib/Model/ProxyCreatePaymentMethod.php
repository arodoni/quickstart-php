<?php
/**
 * ProxyCreatePaymentMethod
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
 * ProxyCreatePaymentMethod Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProxyCreatePaymentMethod implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProxyCreatePaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_id' => 'string',
        'ach_aba_code' => 'string',
        'ach_account_name' => 'string',
        'ach_account_type' => 'string',
        'ach_address1' => 'string',
        'ach_address2' => 'string',
        'ach_bank_name' => 'string',
        'bank_branch_code' => 'string',
        'bank_check_digit' => 'string',
        'bank_city' => 'string',
        'bank_code' => 'string',
        'bank_name' => 'string',
        'bank_postal_code' => 'string',
        'bank_street_name' => 'string',
        'bank_street_number' => 'string',
        'bank_transfer_account_name' => 'string',
        'bank_transfer_account_type' => 'string',
        'bank_transfer_type' => 'string',
        'business_identification_code' => 'string',
        'city' => 'string',
        'country' => 'string',
        'credit_card_address1' => 'string',
        'credit_card_address2' => 'string',
        'credit_card_city' => 'string',
        'credit_card_country' => 'string',
        'credit_card_expiration_month' => 'int',
        'credit_card_expiration_year' => 'int',
        'credit_card_holder_name' => 'string',
        'credit_card_postal_code' => 'string',
        'credit_card_state' => 'string',
        'credit_card_type' => 'string',
        'device_session_id' => 'string',
        'email' => 'string',
        'existing_mandate' => 'string',
        'first_name' => 'string',
        'iban' => 'string',
        'ip_address' => 'string',
        'last_name' => 'string',
        'last_transaction_date_time' => '\DateTime',
        'last_transaction_status' => 'string',
        'mandate_creation_date' => '\DateTime',
        'mandate_id' => 'string',
        'mandate_received' => 'string',
        'mandate_update_date' => '\DateTime',
        'max_consecutive_payment_failures' => 'int',
        'payment_retry_window' => 'int',
        'paypal_baid' => 'string',
        'paypal_email' => 'string',
        'paypal_preapproval_key' => 'string',
        'paypal_type' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'second_token_id' => 'string',
        'state' => 'string',
        'street_name' => 'string',
        'street_number' => 'string',
        'token_id' => 'string',
        'total_number_of_error_payments' => 'int',
        'total_number_of_processed_payments' => 'int',
        'type' => 'string',
        'use_default_retry_rule' => 'bool'
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
        'ach_aba_code' => 'AchAbaCode',
        'ach_account_name' => 'AchAccountName',
        'ach_account_type' => 'AchAccountType',
        'ach_address1' => 'AchAddress1',
        'ach_address2' => 'AchAddress2',
        'ach_bank_name' => 'AchBankName',
        'bank_branch_code' => 'BankBranchCode',
        'bank_check_digit' => 'BankCheckDigit',
        'bank_city' => 'BankCity',
        'bank_code' => 'BankCode',
        'bank_name' => 'BankName',
        'bank_postal_code' => 'BankPostalCode',
        'bank_street_name' => 'BankStreetName',
        'bank_street_number' => 'BankStreetNumber',
        'bank_transfer_account_name' => 'BankTransferAccountName',
        'bank_transfer_account_type' => 'BankTransferAccountType',
        'bank_transfer_type' => 'BankTransferType',
        'business_identification_code' => 'BusinessIdentificationCode',
        'city' => 'City',
        'country' => 'Country',
        'credit_card_address1' => 'CreditCardAddress1',
        'credit_card_address2' => 'CreditCardAddress2',
        'credit_card_city' => 'CreditCardCity',
        'credit_card_country' => 'CreditCardCountry',
        'credit_card_expiration_month' => 'CreditCardExpirationMonth',
        'credit_card_expiration_year' => 'CreditCardExpirationYear',
        'credit_card_holder_name' => 'CreditCardHolderName',
        'credit_card_postal_code' => 'CreditCardPostalCode',
        'credit_card_state' => 'CreditCardState',
        'credit_card_type' => 'CreditCardType',
        'device_session_id' => 'DeviceSessionId',
        'email' => 'Email',
        'existing_mandate' => 'ExistingMandate',
        'first_name' => 'FirstName',
        'iban' => 'IBAN',
        'ip_address' => 'IPAddress',
        'last_name' => 'LastName',
        'last_transaction_date_time' => 'LastTransactionDateTime',
        'last_transaction_status' => 'LastTransactionStatus',
        'mandate_creation_date' => 'MandateCreationDate',
        'mandate_id' => 'MandateID',
        'mandate_received' => 'MandateReceived',
        'mandate_update_date' => 'MandateUpdateDate',
        'max_consecutive_payment_failures' => 'MaxConsecutivePaymentFailures',
        'payment_retry_window' => 'PaymentRetryWindow',
        'paypal_baid' => 'PaypalBaid',
        'paypal_email' => 'PaypalEmail',
        'paypal_preapproval_key' => 'PaypalPreapprovalKey',
        'paypal_type' => 'PaypalType',
        'phone' => 'Phone',
        'postal_code' => 'PostalCode',
        'second_token_id' => 'SecondTokenId',
        'state' => 'State',
        'street_name' => 'StreetName',
        'street_number' => 'StreetNumber',
        'token_id' => 'TokenId',
        'total_number_of_error_payments' => 'TotalNumberOfErrorPayments',
        'total_number_of_processed_payments' => 'TotalNumberOfProcessedPayments',
        'type' => 'Type',
        'use_default_retry_rule' => 'UseDefaultRetryRule'
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
        'ach_aba_code' => 'setAchAbaCode',
        'ach_account_name' => 'setAchAccountName',
        'ach_account_type' => 'setAchAccountType',
        'ach_address1' => 'setAchAddress1',
        'ach_address2' => 'setAchAddress2',
        'ach_bank_name' => 'setAchBankName',
        'bank_branch_code' => 'setBankBranchCode',
        'bank_check_digit' => 'setBankCheckDigit',
        'bank_city' => 'setBankCity',
        'bank_code' => 'setBankCode',
        'bank_name' => 'setBankName',
        'bank_postal_code' => 'setBankPostalCode',
        'bank_street_name' => 'setBankStreetName',
        'bank_street_number' => 'setBankStreetNumber',
        'bank_transfer_account_name' => 'setBankTransferAccountName',
        'bank_transfer_account_type' => 'setBankTransferAccountType',
        'bank_transfer_type' => 'setBankTransferType',
        'business_identification_code' => 'setBusinessIdentificationCode',
        'city' => 'setCity',
        'country' => 'setCountry',
        'credit_card_address1' => 'setCreditCardAddress1',
        'credit_card_address2' => 'setCreditCardAddress2',
        'credit_card_city' => 'setCreditCardCity',
        'credit_card_country' => 'setCreditCardCountry',
        'credit_card_expiration_month' => 'setCreditCardExpirationMonth',
        'credit_card_expiration_year' => 'setCreditCardExpirationYear',
        'credit_card_holder_name' => 'setCreditCardHolderName',
        'credit_card_postal_code' => 'setCreditCardPostalCode',
        'credit_card_state' => 'setCreditCardState',
        'credit_card_type' => 'setCreditCardType',
        'device_session_id' => 'setDeviceSessionId',
        'email' => 'setEmail',
        'existing_mandate' => 'setExistingMandate',
        'first_name' => 'setFirstName',
        'iban' => 'setIban',
        'ip_address' => 'setIpAddress',
        'last_name' => 'setLastName',
        'last_transaction_date_time' => 'setLastTransactionDateTime',
        'last_transaction_status' => 'setLastTransactionStatus',
        'mandate_creation_date' => 'setMandateCreationDate',
        'mandate_id' => 'setMandateId',
        'mandate_received' => 'setMandateReceived',
        'mandate_update_date' => 'setMandateUpdateDate',
        'max_consecutive_payment_failures' => 'setMaxConsecutivePaymentFailures',
        'payment_retry_window' => 'setPaymentRetryWindow',
        'paypal_baid' => 'setPaypalBaid',
        'paypal_email' => 'setPaypalEmail',
        'paypal_preapproval_key' => 'setPaypalPreapprovalKey',
        'paypal_type' => 'setPaypalType',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'second_token_id' => 'setSecondTokenId',
        'state' => 'setState',
        'street_name' => 'setStreetName',
        'street_number' => 'setStreetNumber',
        'token_id' => 'setTokenId',
        'total_number_of_error_payments' => 'setTotalNumberOfErrorPayments',
        'total_number_of_processed_payments' => 'setTotalNumberOfProcessedPayments',
        'type' => 'setType',
        'use_default_retry_rule' => 'setUseDefaultRetryRule'
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
        'ach_aba_code' => 'getAchAbaCode',
        'ach_account_name' => 'getAchAccountName',
        'ach_account_type' => 'getAchAccountType',
        'ach_address1' => 'getAchAddress1',
        'ach_address2' => 'getAchAddress2',
        'ach_bank_name' => 'getAchBankName',
        'bank_branch_code' => 'getBankBranchCode',
        'bank_check_digit' => 'getBankCheckDigit',
        'bank_city' => 'getBankCity',
        'bank_code' => 'getBankCode',
        'bank_name' => 'getBankName',
        'bank_postal_code' => 'getBankPostalCode',
        'bank_street_name' => 'getBankStreetName',
        'bank_street_number' => 'getBankStreetNumber',
        'bank_transfer_account_name' => 'getBankTransferAccountName',
        'bank_transfer_account_type' => 'getBankTransferAccountType',
        'bank_transfer_type' => 'getBankTransferType',
        'business_identification_code' => 'getBusinessIdentificationCode',
        'city' => 'getCity',
        'country' => 'getCountry',
        'credit_card_address1' => 'getCreditCardAddress1',
        'credit_card_address2' => 'getCreditCardAddress2',
        'credit_card_city' => 'getCreditCardCity',
        'credit_card_country' => 'getCreditCardCountry',
        'credit_card_expiration_month' => 'getCreditCardExpirationMonth',
        'credit_card_expiration_year' => 'getCreditCardExpirationYear',
        'credit_card_holder_name' => 'getCreditCardHolderName',
        'credit_card_postal_code' => 'getCreditCardPostalCode',
        'credit_card_state' => 'getCreditCardState',
        'credit_card_type' => 'getCreditCardType',
        'device_session_id' => 'getDeviceSessionId',
        'email' => 'getEmail',
        'existing_mandate' => 'getExistingMandate',
        'first_name' => 'getFirstName',
        'iban' => 'getIban',
        'ip_address' => 'getIpAddress',
        'last_name' => 'getLastName',
        'last_transaction_date_time' => 'getLastTransactionDateTime',
        'last_transaction_status' => 'getLastTransactionStatus',
        'mandate_creation_date' => 'getMandateCreationDate',
        'mandate_id' => 'getMandateId',
        'mandate_received' => 'getMandateReceived',
        'mandate_update_date' => 'getMandateUpdateDate',
        'max_consecutive_payment_failures' => 'getMaxConsecutivePaymentFailures',
        'payment_retry_window' => 'getPaymentRetryWindow',
        'paypal_baid' => 'getPaypalBaid',
        'paypal_email' => 'getPaypalEmail',
        'paypal_preapproval_key' => 'getPaypalPreapprovalKey',
        'paypal_type' => 'getPaypalType',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'second_token_id' => 'getSecondTokenId',
        'state' => 'getState',
        'street_name' => 'getStreetName',
        'street_number' => 'getStreetNumber',
        'token_id' => 'getTokenId',
        'total_number_of_error_payments' => 'getTotalNumberOfErrorPayments',
        'total_number_of_processed_payments' => 'getTotalNumberOfProcessedPayments',
        'type' => 'getType',
        'use_default_retry_rule' => 'getUseDefaultRetryRule'
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
        $this->container['ach_aba_code'] = isset($data['ach_aba_code']) ? $data['ach_aba_code'] : null;
        $this->container['ach_account_name'] = isset($data['ach_account_name']) ? $data['ach_account_name'] : null;
        $this->container['ach_account_type'] = isset($data['ach_account_type']) ? $data['ach_account_type'] : null;
        $this->container['ach_address1'] = isset($data['ach_address1']) ? $data['ach_address1'] : null;
        $this->container['ach_address2'] = isset($data['ach_address2']) ? $data['ach_address2'] : null;
        $this->container['ach_bank_name'] = isset($data['ach_bank_name']) ? $data['ach_bank_name'] : null;
        $this->container['bank_branch_code'] = isset($data['bank_branch_code']) ? $data['bank_branch_code'] : null;
        $this->container['bank_check_digit'] = isset($data['bank_check_digit']) ? $data['bank_check_digit'] : null;
        $this->container['bank_city'] = isset($data['bank_city']) ? $data['bank_city'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_postal_code'] = isset($data['bank_postal_code']) ? $data['bank_postal_code'] : null;
        $this->container['bank_street_name'] = isset($data['bank_street_name']) ? $data['bank_street_name'] : null;
        $this->container['bank_street_number'] = isset($data['bank_street_number']) ? $data['bank_street_number'] : null;
        $this->container['bank_transfer_account_name'] = isset($data['bank_transfer_account_name']) ? $data['bank_transfer_account_name'] : null;
        $this->container['bank_transfer_account_type'] = isset($data['bank_transfer_account_type']) ? $data['bank_transfer_account_type'] : null;
        $this->container['bank_transfer_type'] = isset($data['bank_transfer_type']) ? $data['bank_transfer_type'] : null;
        $this->container['business_identification_code'] = isset($data['business_identification_code']) ? $data['business_identification_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['credit_card_address1'] = isset($data['credit_card_address1']) ? $data['credit_card_address1'] : null;
        $this->container['credit_card_address2'] = isset($data['credit_card_address2']) ? $data['credit_card_address2'] : null;
        $this->container['credit_card_city'] = isset($data['credit_card_city']) ? $data['credit_card_city'] : null;
        $this->container['credit_card_country'] = isset($data['credit_card_country']) ? $data['credit_card_country'] : null;
        $this->container['credit_card_expiration_month'] = isset($data['credit_card_expiration_month']) ? $data['credit_card_expiration_month'] : null;
        $this->container['credit_card_expiration_year'] = isset($data['credit_card_expiration_year']) ? $data['credit_card_expiration_year'] : null;
        $this->container['credit_card_holder_name'] = isset($data['credit_card_holder_name']) ? $data['credit_card_holder_name'] : null;
        $this->container['credit_card_postal_code'] = isset($data['credit_card_postal_code']) ? $data['credit_card_postal_code'] : null;
        $this->container['credit_card_state'] = isset($data['credit_card_state']) ? $data['credit_card_state'] : null;
        $this->container['credit_card_type'] = isset($data['credit_card_type']) ? $data['credit_card_type'] : null;
        $this->container['device_session_id'] = isset($data['device_session_id']) ? $data['device_session_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['existing_mandate'] = isset($data['existing_mandate']) ? $data['existing_mandate'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['last_transaction_date_time'] = isset($data['last_transaction_date_time']) ? $data['last_transaction_date_time'] : null;
        $this->container['last_transaction_status'] = isset($data['last_transaction_status']) ? $data['last_transaction_status'] : null;
        $this->container['mandate_creation_date'] = isset($data['mandate_creation_date']) ? $data['mandate_creation_date'] : null;
        $this->container['mandate_id'] = isset($data['mandate_id']) ? $data['mandate_id'] : null;
        $this->container['mandate_received'] = isset($data['mandate_received']) ? $data['mandate_received'] : null;
        $this->container['mandate_update_date'] = isset($data['mandate_update_date']) ? $data['mandate_update_date'] : null;
        $this->container['max_consecutive_payment_failures'] = isset($data['max_consecutive_payment_failures']) ? $data['max_consecutive_payment_failures'] : null;
        $this->container['payment_retry_window'] = isset($data['payment_retry_window']) ? $data['payment_retry_window'] : null;
        $this->container['paypal_baid'] = isset($data['paypal_baid']) ? $data['paypal_baid'] : null;
        $this->container['paypal_email'] = isset($data['paypal_email']) ? $data['paypal_email'] : null;
        $this->container['paypal_preapproval_key'] = isset($data['paypal_preapproval_key']) ? $data['paypal_preapproval_key'] : null;
        $this->container['paypal_type'] = isset($data['paypal_type']) ? $data['paypal_type'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['second_token_id'] = isset($data['second_token_id']) ? $data['second_token_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['total_number_of_error_payments'] = isset($data['total_number_of_error_payments']) ? $data['total_number_of_error_payments'] : null;
        $this->container['total_number_of_processed_payments'] = isset($data['total_number_of_processed_payments']) ? $data['total_number_of_processed_payments'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['use_default_retry_rule'] = isset($data['use_default_retry_rule']) ? $data['use_default_retry_rule'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['total_number_of_error_payments'] === null) {
            $invalid_properties[] = "'total_number_of_error_payments' can't be null";
        }
        if ($this->container['total_number_of_processed_payments'] === null) {
            $invalid_properties[] = "'total_number_of_processed_payments' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['use_default_retry_rule'] === null) {
            $invalid_properties[] = "'use_default_retry_rule' can't be null";
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
        if ($this->container['total_number_of_error_payments'] === null) {
            return false;
        }
        if ($this->container['total_number_of_processed_payments'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['use_default_retry_rule'] === null) {
            return false;
        }
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
     * @param string $account_id The ID of the customer account associated with this payment method. This field is not required for the `[account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account)
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets ach_aba_code
     * @return string
     */
    public function getAchAbaCode()
    {
        return $this->container['ach_aba_code'];
    }

    /**
     * Sets ach_aba_code
     * @param string $ach_aba_code The nine-digit routing number or ABA number used by banks. Use this field for ACH payment methods. **Character limit**: 9 **Values**: a string of 9 characters or fewer
     * @return $this
     */
    public function setAchAbaCode($ach_aba_code)
    {
        $this->container['ach_aba_code'] = $ach_aba_code;

        return $this;
    }

    /**
     * Gets ach_account_name
     * @return string
     */
    public function getAchAccountName()
    {
        return $this->container['ach_account_name'];
    }

    /**
     * Sets ach_account_name
     * @param string $ach_account_name The name of the account holder, which can be either a person or a company. Use this field for ACH payment methods. **Character limit**: 70 **Values**: a string of 70 characters or fewer
     * @return $this
     */
    public function setAchAccountName($ach_account_name)
    {
        $this->container['ach_account_name'] = $ach_account_name;

        return $this;
    }

    /**
     * Gets ach_account_type
     * @return string
     */
    public function getAchAccountType()
    {
        return $this->container['ach_account_type'];
    }

    /**
     * Sets ach_account_type
     * @param string $ach_account_type The type of bank account associated with the ACH payment. Use this field for ACH payment methods. **Character limit**: 16 **Values**:  - `BusinessChecking` - `Checking` - `Saving`
     * @return $this
     */
    public function setAchAccountType($ach_account_type)
    {
        $this->container['ach_account_type'] = $ach_account_type;

        return $this;
    }

    /**
     * Gets ach_address1
     * @return string
     */
    public function getAchAddress1()
    {
        return $this->container['ach_address1'];
    }

    /**
     * Sets ach_address1
     * @param string $ach_address1 Line 1 for the ACH address. Required on create for the Vantiv payment gateway. Optional for other gateways. **Character limit:** **Values:** an address
     * @return $this
     */
    public function setAchAddress1($ach_address1)
    {
        $this->container['ach_address1'] = $ach_address1;

        return $this;
    }

    /**
     * Gets ach_address2
     * @return string
     */
    public function getAchAddress2()
    {
        return $this->container['ach_address2'];
    }

    /**
     * Sets ach_address2
     * @param string $ach_address2 Line 2 for the ACH address. Required on create for the Vantiv payment gateway. Optional for other gateways. **Character limit:** **Values:** an address
     * @return $this
     */
    public function setAchAddress2($ach_address2)
    {
        $this->container['ach_address2'] = $ach_address2;

        return $this;
    }

    /**
     * Gets ach_bank_name
     * @return string
     */
    public function getAchBankName()
    {
        return $this->container['ach_bank_name'];
    }

    /**
     * Sets ach_bank_name
     * @param string $ach_bank_name The name of the bank where the ACH payment account is held. Use this field for ACH payment methods. **Character limit**: 70 **Values**: a string of 70 characters or fewer
     * @return $this
     */
    public function setAchBankName($ach_bank_name)
    {
        $this->container['ach_bank_name'] = $ach_bank_name;

        return $this;
    }

    /**
     * Gets bank_branch_code
     * @return string
     */
    public function getBankBranchCode()
    {
        return $this->container['bank_branch_code'];
    }

    /**
     * Sets bank_branch_code
     * @param string $bank_branch_code The branch code of the bank used for direct debit. Use this field for direct debit payment methods. **Character limit**: 10 **Values**:  string of 10 characters or fewer
     * @return $this
     */
    public function setBankBranchCode($bank_branch_code)
    {
        $this->container['bank_branch_code'] = $bank_branch_code;

        return $this;
    }

    /**
     * Gets bank_check_digit
     * @return string
     */
    public function getBankCheckDigit()
    {
        return $this->container['bank_check_digit'];
    }

    /**
     * Sets bank_check_digit
     * @param string $bank_check_digit The check digit in the international bank account number, which confirms the validity of the account. Use this field for direct debit payment methods. **Character limit**: 4 **Values**:  string of 4 characters or fewer
     * @return $this
     */
    public function setBankCheckDigit($bank_check_digit)
    {
        $this->container['bank_check_digit'] = $bank_check_digit;

        return $this;
    }

    /**
     * Gets bank_city
     * @return string
     */
    public function getBankCity()
    {
        return $this->container['bank_city'];
    }

    /**
     * Sets bank_city
     * @param string $bank_city The city of the direct debit bank. Use this field for direct debit payment methods. **Character limit**:70 **Values**:  string of 70 characters or fewer
     * @return $this
     */
    public function setBankCity($bank_city)
    {
        $this->container['bank_city'] = $bank_city;

        return $this;
    }

    /**
     * Gets bank_code
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     * @param string $bank_code The sort code or number that identifies the bank. This is also known as the sort code. This field is required for direct debit payment methods. **Character limit**: 18 **Values**:  string of 18 characters or fewer
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets bank_name
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     * @param string $bank_name The name of the direct debit bank. Use this field for direct debit payment methods. **Character limit**:80 **Values**:  string of 80 characters or fewer
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_postal_code
     * @return string
     */
    public function getBankPostalCode()
    {
        return $this->container['bank_postal_code'];
    }

    /**
     * Sets bank_postal_code
     * @param string $bank_postal_code The zip code or postal code of the direct debit bank. Use this field for direct debit payment methods. **Character limit**:20 **Values**:  string of 20 characters or fewer
     * @return $this
     */
    public function setBankPostalCode($bank_postal_code)
    {
        $this->container['bank_postal_code'] = $bank_postal_code;

        return $this;
    }

    /**
     * Gets bank_street_name
     * @return string
     */
    public function getBankStreetName()
    {
        return $this->container['bank_street_name'];
    }

    /**
     * Sets bank_street_name
     * @param string $bank_street_name The name of the street of the direct debit bank. Use this field for direct debit payment methods. **Character limit**:60 **Values**:  string of 60 characters or fewer
     * @return $this
     */
    public function setBankStreetName($bank_street_name)
    {
        $this->container['bank_street_name'] = $bank_street_name;

        return $this;
    }

    /**
     * Gets bank_street_number
     * @return string
     */
    public function getBankStreetNumber()
    {
        return $this->container['bank_street_number'];
    }

    /**
     * Sets bank_street_number
     * @param string $bank_street_number The number of the direct debit bank. Use this field for direct debit payment methods. **Character limit**:10 **Values**:  string of 10 characters or fewer
     * @return $this
     */
    public function setBankStreetNumber($bank_street_number)
    {
        $this->container['bank_street_number'] = $bank_street_number;

        return $this;
    }

    /**
     * Gets bank_transfer_account_name
     * @return string
     */
    public function getBankTransferAccountName()
    {
        return $this->container['bank_transfer_account_name'];
    }

    /**
     * Sets bank_transfer_account_name
     * @param string $bank_transfer_account_name The name on the direct debit bank account. Use this field for direct debit payment methods. **Character limit**: 60 **Values**:  string of 60 characters or fewer
     * @return $this
     */
    public function setBankTransferAccountName($bank_transfer_account_name)
    {
        $this->container['bank_transfer_account_name'] = $bank_transfer_account_name;

        return $this;
    }

    /**
     * Gets bank_transfer_account_type
     * @return string
     */
    public function getBankTransferAccountType()
    {
        return $this->container['bank_transfer_account_type'];
    }

    /**
     * Sets bank_transfer_account_type
     * @param string $bank_transfer_account_type The type of the customer's bank account. Use this field for direct debit payment methods. **Character limit**: 11 **Values**: `DirectDebit`
     * @return $this
     */
    public function setBankTransferAccountType($bank_transfer_account_type)
    {
        $this->container['bank_transfer_account_type'] = $bank_transfer_account_type;

        return $this;
    }

    /**
     * Gets bank_transfer_type
     * @return string
     */
    public function getBankTransferType()
    {
        return $this->container['bank_transfer_type'];
    }

    /**
     * Sets bank_transfer_type
     * @param string $bank_transfer_type Specifies the type of direct debit transfer. The value of this field is dependent on the country of the user. Use this field is used for direct debit payment methods. **Character limit**: 20 **Values**:  - `AutomatischIncasso` (NL) - `LastschriftDE` (Germany) - `LastschriftAT` (Austria) - `DemandeDePrelevement` (FR) - `DirectDebitUK` (UK) - `Domicil` (Belgium) - `LastschriftCH` (CH) - `RID` (Italy) - `OrdenDeDomiciliacion` (Spain)
     * @return $this
     */
    public function setBankTransferType($bank_transfer_type)
    {
        $this->container['bank_transfer_type'] = $bank_transfer_type;

        return $this;
    }

    /**
     * Gets business_identification_code
     * @return string
     */
    public function getBusinessIdentificationCode()
    {
        return $this->container['business_identification_code'];
    }

    /**
     * Sets business_identification_code
     * @param string $business_identification_code The business identification code for Swiss direct payment methods that use the Global Collect payment gateway. Use this field only for direct debit payments in Switzerland with Global Collect. **Character limit**: 11 **Values**: string of 11 characters or fewer
     * @return $this
     */
    public function setBusinessIdentificationCode($business_identification_code)
    {
        $this->container['business_identification_code'] = $business_identification_code;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city The city of the customer's address. Use this field for direct debit payment methods. **Character limit**:80 **Values**:  string of 80 characters or fewer
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country The two-letter country code of the customer's address. Use this field for direct debit payment methods. **Character limit**: 2 **Values**: [a valid country code](/BC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/A_Country_Names_and_Their_ISO_Codes)
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets credit_card_address1
     * @return string
     */
    public function getCreditCardAddress1()
    {
        return $this->container['credit_card_address1'];
    }

    /**
     * Sets credit_card_address1
     * @param string $credit_card_address1 The first line of the card holder's address, which is often a street address or business name. Use this field for credit card and direct debit payment methods. **Character limit**: 255 **Values**: a string of 255 characters or fewer
     * @return $this
     */
    public function setCreditCardAddress1($credit_card_address1)
    {
        $this->container['credit_card_address1'] = $credit_card_address1;

        return $this;
    }

    /**
     * Gets credit_card_address2
     * @return string
     */
    public function getCreditCardAddress2()
    {
        return $this->container['credit_card_address2'];
    }

    /**
     * Sets credit_card_address2
     * @param string $credit_card_address2 The second line of the card holder's address. Use this field for credit card and direct debit payment methods. **Character limit**: 255 **Values**: a string of 255 characters or fewer
     * @return $this
     */
    public function setCreditCardAddress2($credit_card_address2)
    {
        $this->container['credit_card_address2'] = $credit_card_address2;

        return $this;
    }

    /**
     * Gets credit_card_city
     * @return string
     */
    public function getCreditCardCity()
    {
        return $this->container['credit_card_city'];
    }

    /**
     * Sets credit_card_city
     * @param string $credit_card_city The city of the card holder's address. Use this field for credit card and direct debit payment methods **Character limit**: 40 **Values**: a string of 40 characters or fewer
     * @return $this
     */
    public function setCreditCardCity($credit_card_city)
    {
        $this->container['credit_card_city'] = $credit_card_city;

        return $this;
    }

    /**
     * Gets credit_card_country
     * @return string
     */
    public function getCreditCardCountry()
    {
        return $this->container['credit_card_country'];
    }

    /**
     * Sets credit_card_country
     * @param string $credit_card_country The country of the card holder's address. See [a supported country name](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/A_Country_Names_and_Their_ISO_Codes)
     * @return $this
     */
    public function setCreditCardCountry($credit_card_country)
    {
        $this->container['credit_card_country'] = $credit_card_country;

        return $this;
    }

    /**
     * Gets credit_card_expiration_month
     * @return int
     */
    public function getCreditCardExpirationMonth()
    {
        return $this->container['credit_card_expiration_month'];
    }

    /**
     * Sets credit_card_expiration_month
     * @param int $credit_card_expiration_month The expiration month of the credit card or debit card. Use this field for credit card and direct debit payment methods. **Character limit**: 2 **Values**: a two-digit number, 01 - 12
     * @return $this
     */
    public function setCreditCardExpirationMonth($credit_card_expiration_month)
    {
        $this->container['credit_card_expiration_month'] = $credit_card_expiration_month;

        return $this;
    }

    /**
     * Gets credit_card_expiration_year
     * @return int
     */
    public function getCreditCardExpirationYear()
    {
        return $this->container['credit_card_expiration_year'];
    }

    /**
     * Sets credit_card_expiration_year
     * @param int $credit_card_expiration_year The expiration month of the credit card or debit card. Use this field for credit card and direct debit payment methods. **Character limit**: 4 **Values**: a four-digit number
     * @return $this
     */
    public function setCreditCardExpirationYear($credit_card_expiration_year)
    {
        $this->container['credit_card_expiration_year'] = $credit_card_expiration_year;

        return $this;
    }

    /**
     * Gets credit_card_holder_name
     * @return string
     */
    public function getCreditCardHolderName()
    {
        return $this->container['credit_card_holder_name'];
    }

    /**
     * Sets credit_card_holder_name
     * @param string $credit_card_holder_name The full name of the card holder. Use this field for credit card and direct debit payment methods. **Character limit**: 50 **Values**: a string of 50 characters or fewer
     * @return $this
     */
    public function setCreditCardHolderName($credit_card_holder_name)
    {
        $this->container['credit_card_holder_name'] = $credit_card_holder_name;

        return $this;
    }

    /**
     * Gets credit_card_postal_code
     * @return string
     */
    public function getCreditCardPostalCode()
    {
        return $this->container['credit_card_postal_code'];
    }

    /**
     * Sets credit_card_postal_code
     * @param string $credit_card_postal_code The billing address's zip code. This field is required only when you define a debit card or credit card payment. **Character limit**: 20 **Values**: a string of 20 characters or fewer
     * @return $this
     */
    public function setCreditCardPostalCode($credit_card_postal_code)
    {
        $this->container['credit_card_postal_code'] = $credit_card_postal_code;

        return $this;
    }

    /**
     * Gets credit_card_state
     * @return string
     */
    public function getCreditCardState()
    {
        return $this->container['credit_card_state'];
    }

    /**
     * Sets credit_card_state
     * @param string $credit_card_state The billing address's state. Use this field is if the `CreditCardCountry` value is either Canada or the US. State names must be spelled in full. For more information see the list of [a valid state name](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/B_State_Names_and_2-Digit_Codes)
     * @return $this
     */
    public function setCreditCardState($credit_card_state)
    {
        $this->container['credit_card_state'] = $credit_card_state;

        return $this;
    }

    /**
     * Gets credit_card_type
     * @return string
     */
    public function getCreditCardType()
    {
        return $this->container['credit_card_type'];
    }

    /**
     * Sets credit_card_type
     * @param string $credit_card_type The type of credit card or debit card. This field is required only when you define a debit card or credit card payment. **Character limit**: 32 **Values**: `AmericanExpress`, `Discover`, `MasterCard`, `Visa`
     * @return $this
     */
    public function setCreditCardType($credit_card_type)
    {
        $this->container['credit_card_type'] = $credit_card_type;

        return $this;
    }

    /**
     * Gets device_session_id
     * @return string
     */
    public function getDeviceSessionId()
    {
        return $this->container['device_session_id'];
    }

    /**
     * Sets device_session_id
     * @param string $device_session_id The session ID of the user when the `PaymentMethod` was created or updated. Some gateways use this field for fraud prevention. If this field is passed to Zuora, then Zuora passes this field to supported gateways. Currently only Verifi supports this field. **Character limit**: 255 **Values**:
     * @return $this
     */
    public function setDeviceSessionId($device_session_id)
    {
        $this->container['device_session_id'] = $device_session_id;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email An email address for the payment method in addition to the bill to contact email address. **Character limit**: 80 **Values**: a string of 80 characters or fewer
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets existing_mandate
     * @return string
     */
    public function getExistingMandate()
    {
        return $this->container['existing_mandate'];
    }

    /**
     * Sets existing_mandate
     * @param string $existing_mandate Indicates if the customer has an existing mandate or a new mandate. A mandate is a signed authorization for UK and NL customers. When you are migrating mandates from another system, be sure to set this field correctly. If you indicate that a new mandate is an existing mandate or vice-versa, then transactions fail. This field is used only for the direct debit payment method. **Character limit**: 3 **Values**: `Yes`, `No`
     * @return $this
     */
    public function setExistingMandate($existing_mandate)
    {
        $this->container['existing_mandate'] = $existing_mandate;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name The customer's first name. This field is used only for the direct debit payment method. **Character limit**: 30 **Values**: a string of 30 characters or fewer
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets iban
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     * @param string $iban The International Bank Account Number. This field is used only for the direct debit payment method. **Character limit**: 42 **Values**: a string of 42 characters or fewer
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     * @param string $ip_address The IP address of the user when the payment method was created or updated. Some gateways use this field for fraud prevention. If this field is passed to Zuora, then Zuora passes this field to supported gateways. Currently PayPal, CyberSource, Authorize.Net, and Verifi support this field. **Character limit**: 15 **Values**: a string of 15 characters or fewer
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name The customer's last name. This field is used only for the direct debit payment method. **Character limit**: 70 **Values**: a string of 70 characters or fewer
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets last_transaction_date_time
     * @return \DateTime
     */
    public function getLastTransactionDateTime()
    {
        return $this->container['last_transaction_date_time'];
    }

    /**
     * Sets last_transaction_date_time
     * @param \DateTime $last_transaction_date_time The date of the most recent transaction. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_Format_and_Datetimes_in_Zuora)
     * @return $this
     */
    public function setLastTransactionDateTime($last_transaction_date_time)
    {
        $this->container['last_transaction_date_time'] = $last_transaction_date_time;

        return $this;
    }

    /**
     * Gets last_transaction_status
     * @return string
     */
    public function getLastTransactionStatus()
    {
        return $this->container['last_transaction_status'];
    }

    /**
     * Sets last_transaction_status
     * @param string $last_transaction_status The status of the most recent transaction. **Character limit**: 39 **Values**: automatically generated
     * @return $this
     */
    public function setLastTransactionStatus($last_transaction_status)
    {
        $this->container['last_transaction_status'] = $last_transaction_status;

        return $this;
    }

    /**
     * Gets mandate_creation_date
     * @return \DateTime
     */
    public function getMandateCreationDate()
    {
        return $this->container['mandate_creation_date'];
    }

    /**
     * Sets mandate_creation_date
     * @param \DateTime $mandate_creation_date The date when the mandate was created. A mandate is a signed authorization for UK and NL customers. This field is used only for the direct debit payment method. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_Format_and_Datetimes_in_Zuora)
     * @return $this
     */
    public function setMandateCreationDate($mandate_creation_date)
    {
        $this->container['mandate_creation_date'] = $mandate_creation_date;

        return $this;
    }

    /**
     * Gets mandate_id
     * @return string
     */
    public function getMandateId()
    {
        return $this->container['mandate_id'];
    }

    /**
     * Sets mandate_id
     * @param string $mandate_id The ID of the mandate. A mandate is a signed authorization for UK and NL customers. This field is used only for the direct debit payment method. **Character limit**: 36 **Values**: a string of 36 characters or fewer
     * @return $this
     */
    public function setMandateId($mandate_id)
    {
        $this->container['mandate_id'] = $mandate_id;

        return $this;
    }

    /**
     * Gets mandate_received
     * @return string
     */
    public function getMandateReceived()
    {
        return $this->container['mandate_received'];
    }

    /**
     * Sets mandate_received
     * @param string $mandate_received Indicates if  the mandate was received. A mandate is a signed authorization for UK and NL customers. This field is used only for the direct debit payment method. **Character limit**: 3 **Values**: `Yes`, `No `(case-sensitive)
     * @return $this
     */
    public function setMandateReceived($mandate_received)
    {
        $this->container['mandate_received'] = $mandate_received;

        return $this;
    }

    /**
     * Gets mandate_update_date
     * @return \DateTime
     */
    public function getMandateUpdateDate()
    {
        return $this->container['mandate_update_date'];
    }

    /**
     * Sets mandate_update_date
     * @param \DateTime $mandate_update_date The date when the mandate was last updated. A mandate is a signed authorization for UK and NL customers. This field is used only for the direct debit payment method. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_Format_and_Datetimes_in_Zuora)
     * @return $this
     */
    public function setMandateUpdateDate($mandate_update_date)
    {
        $this->container['mandate_update_date'] = $mandate_update_date;

        return $this;
    }

    /**
     * Gets max_consecutive_payment_failures
     * @return int
     */
    public function getMaxConsecutivePaymentFailures()
    {
        return $this->container['max_consecutive_payment_failures'];
    }

    /**
     * Sets max_consecutive_payment_failures
     * @param int $max_consecutive_payment_failures Specifies the number of allowable consecutive failures Zuora attempts with the payment method before stopping. **Values**: a valid number
     * @return $this
     */
    public function setMaxConsecutivePaymentFailures($max_consecutive_payment_failures)
    {
        $this->container['max_consecutive_payment_failures'] = $max_consecutive_payment_failures;

        return $this;
    }

    /**
     * Gets payment_retry_window
     * @return int
     */
    public function getPaymentRetryWindow()
    {
        return $this->container['payment_retry_window'];
    }

    /**
     * Sets payment_retry_window
     * @param int $payment_retry_window The retry interval setting, which prevents making a payment attempt if the last failed attempt was within the last specified number of hours. This field is required if the `UseDefaultRetryRule` field value is set to `false`. **Character limit**: 4 **Values**: a whole number between 1 and 1000, exclusive
     * @return $this
     */
    public function setPaymentRetryWindow($payment_retry_window)
    {
        $this->container['payment_retry_window'] = $payment_retry_window;

        return $this;
    }

    /**
     * Gets paypal_baid
     * @return string
     */
    public function getPaypalBaid()
    {
        return $this->container['paypal_baid'];
    }

    /**
     * Sets paypal_baid
     * @param string $paypal_baid The PayPal billing agreement ID, which is a contract between two PayPal accounts. Typically, the selling party initiates a request to create a BAID, and sends it to buying party for acceptance. The seller can keep track of the BAID and use it for future charges against the buyer. This field is required when defining a PayPal payment method. **Character limit**: 64 **Values**: a string of 64 characters or fewer
     * @return $this
     */
    public function setPaypalBaid($paypal_baid)
    {
        $this->container['paypal_baid'] = $paypal_baid;

        return $this;
    }

    /**
     * Gets paypal_email
     * @return string
     */
    public function getPaypalEmail()
    {
        return $this->container['paypal_email'];
    }

    /**
     * Sets paypal_email
     * @param string $paypal_email The email address associated with the account holder's PayPal account or of the PayPal account of the person paying for the service. This field is required only when you define a PayPal payment method. **Character limit**: 80 **Values**: a string of 80 characters or fewer
     * @return $this
     */
    public function setPaypalEmail($paypal_email)
    {
        $this->container['paypal_email'] = $paypal_email;

        return $this;
    }

    /**
     * Gets paypal_preapproval_key
     * @return string
     */
    public function getPaypalPreapprovalKey()
    {
        return $this->container['paypal_preapproval_key'];
    }

    /**
     * Sets paypal_preapproval_key
     * @param string $paypal_preapproval_key PayPal's Adaptive Payments API key. Zuora does not create this key, nor does it call PayPal to generate it. You must use PayPal's Adaptive Payments' API to generate this key, and then pass it to Zuora. Zuora uses this key to authorize future payments to PayPal's Adaptive Payments API. This field is required when you use PayPal Adaptive Payments gateway. **Character limit**: 32 **Values**: a valid PayPal Adaptive Payment pre-approval key
     * @return $this
     */
    public function setPaypalPreapprovalKey($paypal_preapproval_key)
    {
        $this->container['paypal_preapproval_key'] = $paypal_preapproval_key;

        return $this;
    }

    /**
     * Gets paypal_type
     * @return string
     */
    public function getPaypalType()
    {
        return $this->container['paypal_type'];
    }

    /**
     * Sets paypal_type
     * @param string $paypal_type Specifies the PayPal gateway: PayFlow Pro (Express Checkout) or Adaptive Payments. This field is required when you use PayPal Adaptive Payments or Payflow Pro (Express Checkout) gateways. **Character limit**: 32 **Values**: `ExpressCheckout`, `AdaptivePayments`
     * @return $this
     */
    public function setPaypalType($paypal_type)
    {
        $this->container['paypal_type'] = $paypal_type;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone The phone number that the account holder registered with the bank. This field is used for credit card validation when passing to a gateway. **Character limit**: 40 **Values**: a string of 40 characters or fewer
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code The zip code of the customer's address. This field is used only for the direct debit payment method. **Character limit**: 20 **Values**: a string of 20 characters or fewer
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets second_token_id
     * @return string
     */
    public function getSecondTokenId()
    {
        return $this->container['second_token_id'];
    }

    /**
     * Sets second_token_id
     * @param string $second_token_id A gateway unique identifier that replaces sensitive payment method data. SecondTokenId is conditionally required only when TokenID is being used to represent a gateway customer profile. SecondTokenId is used in the CC Reference Transaction payment method. **Character limit**: 64 **Values**: a string of 64 characters or fewer
     * @return $this
     */
    public function setSecondTokenId($second_token_id)
    {
        $this->container['second_token_id'] = $second_token_id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state The state of the customer's address. This field is used only for the direct debit payment method. **Character limit**: 70 **Values**: a string of 70 characters or fewer
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street_name
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     * @param string $street_name The street name of the customer's address. This field is used only for the direct debit payment method. **Character limit**: 100 **Values**: a string of 100 characters or fewer
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_number
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     * @param string $street_number The street number of the customer's address. This field is used only for the direct debit payment method. **Character limit**: 30 **Values**: a string of 30 characters or fewer
     * @return $this
     */
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets token_id
     * @return string
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     * @param string $token_id A gateway unique identifier that replaces sensitive payment method data or represents a gateway's unique customer profile. When TokenId is used to represent a customer profile, then SecondTokenId is conditionally required for representing the underlying tokenized payment method. TokenId is required for the CC Reference Transaction payment method. **Character limit**: 255 **Values**: a string of 255 characters or fewer
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets total_number_of_error_payments
     * @return int
     */
    public function getTotalNumberOfErrorPayments()
    {
        return $this->container['total_number_of_error_payments'];
    }

    /**
     * Sets total_number_of_error_payments
     * @param int $total_number_of_error_payments The number of error payments that used this payment method. **Character limit**: **Values**: automatically generated
     * @return $this
     */
    public function setTotalNumberOfErrorPayments($total_number_of_error_payments)
    {
        $this->container['total_number_of_error_payments'] = $total_number_of_error_payments;

        return $this;
    }

    /**
     * Gets total_number_of_processed_payments
     * @return int
     */
    public function getTotalNumberOfProcessedPayments()
    {
        return $this->container['total_number_of_processed_payments'];
    }

    /**
     * Sets total_number_of_processed_payments
     * @param int $total_number_of_processed_payments The number of successful payments that used this payment method. **Character limit**: **Values**: automatically generated
     * @return $this
     */
    public function setTotalNumberOfProcessedPayments($total_number_of_processed_payments)
    {
        $this->container['total_number_of_processed_payments'] = $total_number_of_processed_payments;

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
     * @param string $type Create Query Update Delete Filter
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets use_default_retry_rule
     * @return bool
     */
    public function getUseDefaultRetryRule()
    {
        return $this->container['use_default_retry_rule'];
    }

    /**
     * Sets use_default_retry_rule
     * @param bool $use_default_retry_rule Determines whether to use the default retry rules configured in the [Z-Payments settings](https://knowledgecenter.zuora.com/CB_Billing/L_Payment_Methods/H_Configure_Payment_Method_Retry_Rules). Set this to `true` to use the default retry rules. Set this to `false` to set the specific rules for this payment method. If you set this value to `false`, then the fields, `PaymentRetryWindow` and `MaxConsecutivePaymentFailures`, are required. **Character limit**: 5 **Values**: `t``rue`, `false`
     * @return $this
     */
    public function setUseDefaultRetryRule($use_default_retry_rule)
    {
        $this->container['use_default_retry_rule'] = $use_default_retry_rule;

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


