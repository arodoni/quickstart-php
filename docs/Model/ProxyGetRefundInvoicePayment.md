# ProxyGetRefundInvoicePayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by_id** | **string** | The ID of the Zuora user who created the RefundInvoicePayment object. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when the RefundInvoicePayment object was created. **Character limit**: 29 **Values**: automatically generated | [optional] 
**id** | **string** | Object identifier. | [optional] 
**invoice_id** | **string** | The unique ID of the invoice associated with this refund invoice payment. **Character limit**: 32 **Values**: a valid invoice ID | [optional] 
**invoice_payment_id** | **string** | The ID of the [&#x60;InvoicePayment.Id&#x60;](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/InvoicePayment#Id) | [optional] 
**refund_amount** | **double** | Specifies the amount of a refund applied against a payment. **Character limit**: 16 **Values**: automatically generated | [optional] 
**refund_id** | **string** | The ID of the [Refund object](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Refund) that created the refund. **Character limit**: 32 **Values**: inherited from &#x60;Refund.Id&#x60; | [optional] 
**updated_by_id** | **string** | The ID of the last user to update the object. **Character limit**: 32 **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the object was last updated. **Character limit**: 29 **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


