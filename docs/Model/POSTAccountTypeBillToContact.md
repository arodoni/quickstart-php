# POSTAccountTypeBillToContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address1** | **string** | First address line, 255 characters or less. | [optional] 
**address2** | **string** | Second address line, 255 characters or less. | [optional] 
**city** | **string** | City, 40 characters or less. | [optional] 
**country** | **string** | Country; must be a [valid country name or abbreviation](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/A_Country_Names_and_Their_ISO_Codes). If using [Z-Tax](https://knowledgecenter.zuora.com/CB_Billing/J_Billing_Operations/L_Taxes/A_Z-Tax), must specify a country in the sold-to contact to calculate tax. A bill-to contact may be used if no sold-to contact is provided. | [optional] 
**county** | **string** | County; 32 characters or less. May optionally be used by [Z-Tax](https://knowledgecenter.zuora.com/CB_Billing/J_Billing_Operations/L_Taxes/A_Z-Tax) to calculate county tax. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**fax** | **string** | Fax phone number, 40 characters or less. | [optional] 
**first_name** | **string** | First name, 100 characters or less. | 
**home_phone** | **string** | Home phone number, 40 characters or less. | [optional] 
**last_name** | **string** | Last name, 100 characters or less. | 
**mobile_phone** | **string** | Mobile phone number, 40 characters or less. | [optional] 
**nickname** | **string** | Nickname for this contact | [optional] 
**other_phone** | **string** | Other phone number, 40 characters or less. | [optional] 
**other_phone_type** | **string** | Possible values are: &#x60;Work&#x60;, &#x60;Mobile&#x60;, &#x60;Home&#x60;, &#x60;Other&#x60;. | [optional] 
**personal_email** | **string** | Personal email address, 80 characters or less. | [optional] 
**state** | **string** | State; must be a [valid state or province name or 2-character abbreviation](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/B_State_Names_and_2-Digit_Codes). If using Z-Tax, be aware that [Z-Tax](https://knowledgecenter.zuora.com/CB_Billing/J_Billing_Operations/L_Taxes/A_Z-Tax) requires a state (in the US) or province (in Canada) in this field for the sold-to contact to calculate tax, and that a bill-to contact may be used if no sold-to contact is provided. | [optional] 
**tax_region** | **string** | If using [Z-Tax](https://knowledgecenter.zuora.com/CB_Billing/J_Billing_Operations/L_Taxes/A_Z-Tax), a region string as optionally defined in your tax rules. Not required. | [optional] 
**work_email** | **string** | Work email address, 80 characters or less. | [optional] 
**work_phone** | **string** | Work phone number, 40 characters or less. | [optional] 
**zip_code** | **string** | Zip code, 20 characters or less. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


