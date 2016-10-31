<?php
/**
 * POSTAccountTypeTaxInfo
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
 * POSTAccountTypeTaxInfo Class Doc Comment
 *
 * @category    Class */
 // @description Container for tax exempt information, used to establish the tax exempt status of a customer account.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class POSTAccountTypeTaxInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'POSTAccountType_taxInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'vat_id' => 'string',
        'company_code' => 'string',
        'exempt_certificate_id' => 'string',
        'exempt_certificate_type' => 'string',
        'exempt_description' => 'string',
        'exempt_effective_date' => '\DateTime',
        'exempt_expiration_date' => '\DateTime',
        'exempt_issuing_jurisdiction' => 'string',
        'exempt_status' => 'string'
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
        'vat_id' => 'VATId',
        'company_code' => 'companyCode',
        'exempt_certificate_id' => 'exemptCertificateId',
        'exempt_certificate_type' => 'exemptCertificateType',
        'exempt_description' => 'exemptDescription',
        'exempt_effective_date' => 'exemptEffectiveDate',
        'exempt_expiration_date' => 'exemptExpirationDate',
        'exempt_issuing_jurisdiction' => 'exemptIssuingJurisdiction',
        'exempt_status' => 'exemptStatus'
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
        'vat_id' => 'setVatId',
        'company_code' => 'setCompanyCode',
        'exempt_certificate_id' => 'setExemptCertificateId',
        'exempt_certificate_type' => 'setExemptCertificateType',
        'exempt_description' => 'setExemptDescription',
        'exempt_effective_date' => 'setExemptEffectiveDate',
        'exempt_expiration_date' => 'setExemptExpirationDate',
        'exempt_issuing_jurisdiction' => 'setExemptIssuingJurisdiction',
        'exempt_status' => 'setExemptStatus'
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
        'vat_id' => 'getVatId',
        'company_code' => 'getCompanyCode',
        'exempt_certificate_id' => 'getExemptCertificateId',
        'exempt_certificate_type' => 'getExemptCertificateType',
        'exempt_description' => 'getExemptDescription',
        'exempt_effective_date' => 'getExemptEffectiveDate',
        'exempt_expiration_date' => 'getExemptExpirationDate',
        'exempt_issuing_jurisdiction' => 'getExemptIssuingJurisdiction',
        'exempt_status' => 'getExemptStatus'
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
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['company_code'] = isset($data['company_code']) ? $data['company_code'] : null;
        $this->container['exempt_certificate_id'] = isset($data['exempt_certificate_id']) ? $data['exempt_certificate_id'] : null;
        $this->container['exempt_certificate_type'] = isset($data['exempt_certificate_type']) ? $data['exempt_certificate_type'] : null;
        $this->container['exempt_description'] = isset($data['exempt_description']) ? $data['exempt_description'] : null;
        $this->container['exempt_effective_date'] = isset($data['exempt_effective_date']) ? $data['exempt_effective_date'] : null;
        $this->container['exempt_expiration_date'] = isset($data['exempt_expiration_date']) ? $data['exempt_expiration_date'] : null;
        $this->container['exempt_issuing_jurisdiction'] = isset($data['exempt_issuing_jurisdiction']) ? $data['exempt_issuing_jurisdiction'] : null;
        $this->container['exempt_status'] = isset($data['exempt_status']) ? $data['exempt_status'] : null;
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
     * Gets vat_id
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     * @param string $vat_id EU Value Added Tax ID.   **Note:** This feature is in Limited Availability. If you wish to have access to the feature, submit a request at [Zuora Global Support](https://support.zuora.com).
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets company_code
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->container['company_code'];
    }

    /**
     * Sets company_code
     * @param string $company_code Unique code that identifies a company account in Avalara. Use this field to calculate taxes based on origin and sold-to addresses in Avalara.  **Note:** This feature is in Limited Availability. If you wish to have access to the feature, submit a request at [Zuora Global Support](https://support.zuora.com).
     * @return $this
     */
    public function setCompanyCode($company_code)
    {
        $this->container['company_code'] = $company_code;

        return $this;
    }

    /**
     * Gets exempt_certificate_id
     * @return string
     */
    public function getExemptCertificateId()
    {
        return $this->container['exempt_certificate_id'];
    }

    /**
     * Sets exempt_certificate_id
     * @param string $exempt_certificate_id ID of the customer tax exemption certificate. Requires Z-Tax.
     * @return $this
     */
    public function setExemptCertificateId($exempt_certificate_id)
    {
        $this->container['exempt_certificate_id'] = $exempt_certificate_id;

        return $this;
    }

    /**
     * Gets exempt_certificate_type
     * @return string
     */
    public function getExemptCertificateType()
    {
        return $this->container['exempt_certificate_type'];
    }

    /**
     * Sets exempt_certificate_type
     * @param string $exempt_certificate_type Type of tax exemption certificate that the customer holds. Requires Z-Tax.
     * @return $this
     */
    public function setExemptCertificateType($exempt_certificate_type)
    {
        $this->container['exempt_certificate_type'] = $exempt_certificate_type;

        return $this;
    }

    /**
     * Gets exempt_description
     * @return string
     */
    public function getExemptDescription()
    {
        return $this->container['exempt_description'];
    }

    /**
     * Sets exempt_description
     * @param string $exempt_description Description of the tax exemption certificate that the customer holds. Requires Z-Tax.
     * @return $this
     */
    public function setExemptDescription($exempt_description)
    {
        $this->container['exempt_description'] = $exempt_description;

        return $this;
    }

    /**
     * Gets exempt_effective_date
     * @return \DateTime
     */
    public function getExemptEffectiveDate()
    {
        return $this->container['exempt_effective_date'];
    }

    /**
     * Sets exempt_effective_date
     * @param \DateTime $exempt_effective_date Date when the customer tax exemption starts. Requires Z-Tax.  Format: `yyyy-mm-dd`. Defaults to the current date.
     * @return $this
     */
    public function setExemptEffectiveDate($exempt_effective_date)
    {
        $this->container['exempt_effective_date'] = $exempt_effective_date;

        return $this;
    }

    /**
     * Gets exempt_expiration_date
     * @return \DateTime
     */
    public function getExemptExpirationDate()
    {
        return $this->container['exempt_expiration_date'];
    }

    /**
     * Sets exempt_expiration_date
     * @param \DateTime $exempt_expiration_date Date when the customer tax exemption expires. Requires Z-Tax.  Format: `yyyy-mm-dd`. Defaults to the current date.
     * @return $this
     */
    public function setExemptExpirationDate($exempt_expiration_date)
    {
        $this->container['exempt_expiration_date'] = $exempt_expiration_date;

        return $this;
    }

    /**
     * Gets exempt_issuing_jurisdiction
     * @return string
     */
    public function getExemptIssuingJurisdiction()
    {
        return $this->container['exempt_issuing_jurisdiction'];
    }

    /**
     * Sets exempt_issuing_jurisdiction
     * @param string $exempt_issuing_jurisdiction Jurisdiction in which the customer tax exemption certificate was issued.
     * @return $this
     */
    public function setExemptIssuingJurisdiction($exempt_issuing_jurisdiction)
    {
        $this->container['exempt_issuing_jurisdiction'] = $exempt_issuing_jurisdiction;

        return $this;
    }

    /**
     * Gets exempt_status
     * @return string
     */
    public function getExemptStatus()
    {
        return $this->container['exempt_status'];
    }

    /**
     * Sets exempt_status
     * @param string $exempt_status Status of the account tax exemption. Requires Z-Tax.  Required if you use Z-Tax. This field is unavailable if Z-Tax is not used.  Values: `Yes`, `No`, `pendingVerification`.
     * @return $this
     */
    public function setExemptStatus($exempt_status)
    {
        $this->container['exempt_status'] = $exempt_status;

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


