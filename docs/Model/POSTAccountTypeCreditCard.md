# POSTAccountTypeCreditCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_holder_info** | [**\Swagger\Client\Model\POSTAccountTypeCreditCardCardHolderInfo**](POSTAccountTypeCreditCardCardHolderInfo.md) |  | [optional] 
**card_number** | **string** | Card number, up to 16 characters. Once created, this field can&#39;t be updated or queried, and is only available in masked format (e.g., XXXX-XXXX-XXXX-1234). | 
**card_type** | **string** | Possible values are: &#x60;Visa&#x60;, &#x60;MasterCard&#x60;, &#x60;AmericanExpress&#x60;, &#x60;Discover&#x60;. | 
**expiration_month** | **string** | Two-digit expiration month (01-12). | 
**expiration_year** | **string** | Four-digit expiration year. | 
**security_code** | **string** | The CVV or CVV2 security code of the card. To ensure PCI compliance, this value isn&#39;t stored and can&#39;t be queried. For more information, see [How do I control what information Zuora sends over to the Payment Gateway?](https://knowledgecenter.zuora.com/kb/How_do_I_control_information_sent_to_payment_gateways_when_verifying_payment_methods%3F). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


