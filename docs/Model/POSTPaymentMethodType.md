# POSTPaymentMethodType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_key** | **string** | ID of the customer account to update. | 
**card_holder_info** | [**\Swagger\Client\Model\POSTPaymentMethodTypeCardHolderInfo**](POSTPaymentMethodTypeCardHolderInfo.md) |  | [optional] 
**credit_card_number** | **string** | Credit card number, a string of up to 16 characters. This field can only be set when creating a new payment method; it cannot be queried or updated. | 
**credit_card_type** | **string** | Possible values are: &#x60;Visa&#x60;, &#x60;MasterCard&#x60;, &#x60;AmericanExpress&#x60;, &#x60;Discover&#x60;. | 
**default_payment_method** | **bool** | Specify true to make this card the default payment method; otherwise, omit this parameter to keep the current default payment method. | [optional] 
**expiration_month** | **string** | Two-digit expiration month (01-12). | 
**expiration_year** | **string** | Four-digit expiration year. | 
**security_code** | **string** | The CVV or CVV2 security code for the credit card or debit card. Only required if changing expirationMonth, expirationYear, or cardHolderName. To ensure PCI compliance, this value isn&#39;t stored and can&#39;t be queried. For more information, see [How do I control what information Zuora sends over to the Payment Gateway?](https://knowledgecenter.zuora.com/kb/How_do_I_control_what_information_Zuora_sends_over_to_the_payment_gateway_when_verifying_payment_methods%3F) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


