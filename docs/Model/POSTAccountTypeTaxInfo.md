# POSTAccountTypeTaxInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vat_id** | **string** | EU Value Added Tax ID.   **Note:** This feature is in Limited Availability. If you wish to have access to the feature, submit a request at [Zuora Global Support](https://support.zuora.com). | [optional] 
**company_code** | **string** | Unique code that identifies a company account in Avalara. Use this field to calculate taxes based on origin and sold-to addresses in Avalara.  **Note:** This feature is in Limited Availability. If you wish to have access to the feature, submit a request at [Zuora Global Support](https://support.zuora.com). | [optional] 
**exempt_certificate_id** | **string** | ID of the customer tax exemption certificate. Requires Z-Tax. | [optional] 
**exempt_certificate_type** | **string** | Type of tax exemption certificate that the customer holds. Requires Z-Tax. | [optional] 
**exempt_description** | **string** | Description of the tax exemption certificate that the customer holds. Requires Z-Tax. | [optional] 
**exempt_effective_date** | [**\DateTime**](Date.md) | Date when the customer tax exemption starts. Requires Z-Tax.  Format: &#x60;yyyy-mm-dd&#x60;. Defaults to the current date. | [optional] 
**exempt_expiration_date** | [**\DateTime**](Date.md) | Date when the customer tax exemption expires. Requires Z-Tax.  Format: &#x60;yyyy-mm-dd&#x60;. Defaults to the current date. | [optional] 
**exempt_issuing_jurisdiction** | **string** | Jurisdiction in which the customer tax exemption certificate was issued. | [optional] 
**exempt_status** | **string** | Status of the account tax exemption. Requires Z-Tax.  Required if you use Z-Tax. This field is unavailable if Z-Tax is not used.  Values: &#x60;Yes&#x60;, &#x60;No&#x60;, &#x60;pendingVerification&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


