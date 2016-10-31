# PUTPaymentMethodType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | First address line, 255 characters or less. | [optional] 
**address_line2** | **string** | Second address line, 255 characters or less. | [optional] 
**card_holder_name** | **string** | The full name as it appears on the card, e.g., \&quot;John J Smith\&quot;, 50 characters or less. | [optional] 
**city** | **string** | City, 40 characters or less. | [optional] 
**country** | **string** | Country; must be a [valid country name or abbreviation](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/A_Country_Names_and_Their_ISO_Codes). | [optional] 
**default_payment_method** | **bool** | Specify \&quot;true\&quot; to make this card the default payment method; otherwise, omit this parameter to keep the current default payment method. | [optional] 
**email** | **string** | Card holder&#39;s email address, 80 characters or less. | [optional] 
**expiration_month** | **string** | Two-digit expiration month (01-12). | [optional] 
**expiration_year** | **string** | Four-digit expiration year. | [optional] 
**phone** | **string** | Phone number, 40 characters or less. | [optional] 
**security_code** | **string** | The CVV or CVV2 security code for the credit card or debit card. Only required if changing expirationMonth, expirationYear, or cardHolderName. To ensure PCI compliance, this value isn&#39;t stored and can&#39;t be queried. For more information, see [How do I control what information Zuora sends over to the Payment Gateway](https://knowledgecenter.zuora.com/kb/How_do_I_control_what_information_Zuora_sends_over_to_the_payment_gateway_when_verifying_payment_methods%3F)? | [optional] 
**state** | **string** | State; must be a [valid state name or 2-character abbreviation](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/J_Country%2C_State%2C_and_Province_Codes/B_State_Names_and_2-Digit_Codes). | [optional] 
**zip_code** | **string** | Zip code, 20 characters or less. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


