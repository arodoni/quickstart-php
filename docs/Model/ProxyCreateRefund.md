# ProxyCreateRefund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the [account](/BC_Developers/SOAP_API/E_SOAP_API_Objects/Account) associated with this refund. Specify a value for this field only if you&#39;re creating an electronic non-referenced refund. Don&#39;t specify a value for any other type of refund; Zuora associates the refund automatically with the account from the associated payment. **Character limit**: 32 **Values**: a valid account ID | [optional] 
**amount** | **double** | The amount of the refund. The amount can&#39;t exceed the amount of the associated payment. If the original payment was applied to a single invoice, then you can create a partial refund. However, if the payment was applies to multiple invoices, then you can only make a partial refund through the web-based UI, not through the API. **Character limit**: 16 **Values**: a valid currency amount | [optional] 
**comment** | **string** | Use this field to record comments about the refund. **Character limit**: 255 **Values**: a string of 255 characters or fewer | [optional] 
**gateway_state** | **string** | The status of the payment in the gateway. **Character limit**: 19 **Values**: automatically generated | 
**method_type** | **string** | Indicates how an external refund was issued to a customer. This field is required for an external refund. You can issue an external refund on an electronic payment. **Character limit**: 30 **Values**:  - &#x60;ACH&#x60; - &#x60;Cash&#x60; - &#x60;Check&#x60; - &#x60;CreditCard&#x60; - &#x60;Other&#x60; - &#x60;PayPal&#x60; - &#x60;WireTransfer&#x60; - &#x60;DebitCard&#x60; - &#x60;CreditCardReferenceTransaction&#x60; | [optional] 
**payment_method_id** | **string** | The unique ID of the payment method that the customer used to make the payment. Specify a value for this field only if you&#39;re creating an electronic non-referenced refund. **Character limit**: 32 **V****alues**: a valid payment method ID | [optional] 
**reason_code** | **string** | A code identifying the reason for the transaction. Must be an existing reason code or empty. If you do not specify a value, Zuora uses the default reason code. **Character limit**: 32 **V****alues**: a valid reason code | [optional] 
**refund_date** | [**\DateTime**](Date.md) | The date of the refund. The date of the refund cannot be before the payment date. Specify this field only for external refunds. Zuora automatically generates this field for electronic refunds. **Character limit**: 29 **Values**: a valid date and time value | [optional] 
**soft_descriptor** | **string** | A payment gateway-specific field that maps Zuora to other gateways . **Character limit**: 35 **Values**:  - 3-byte company identifier &amp;quot;*&amp;quot; 18-byte descriptor - 7-byte company identifier &amp;quot;*&amp;quot; 14-byte descriptor - 12-byte company identifier &amp;quot;*&amp;quot; 9-byte descriptor | [optional] 
**soft_descriptor_phone** | **string** | A payment gateway-specific field that maps Zuora to other gateways . **Character limit**: 20 **Values**:  - Customer service phone number formatted as: &#x60;NNN-NNN-NNNN&#x60; or &#x60;NNN-AAAAAAA&#x60; - URL (non-e-Commerce): Transactions sent with a URL do not qualify for the best interchange rate - Email address | [optional] 
**source_type** | **string** | Specifies whether the refund is a refund payment or a credit balance. This field is required when creating an non-referenced refund. If you creating an non-referenced refund, then set this value to &#x60;CreditBalance&#x60;. **Character limit**: 13 **Values**:  - &#x60;Payment&#x60; - &#x60;CreditBalance&#x60; | [optional] 
**type** | **string** | Specifies if the refund is electronic or external. **Character limit**: 10 **Values**:  - &#x60;Electronic&#x60; - External | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


