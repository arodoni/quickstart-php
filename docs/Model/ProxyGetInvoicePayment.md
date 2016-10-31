# ProxyGetInvoicePayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **double** | The amount of the payment. **Character limit**: 16 **Values**: a valid currency amount | [optional] 
**created_by_id** | **string** | The user ID of the person who created the invoice payment. **Character limit**: 32 **V****alues**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when the invoice payment was generated. **Character limit**: 29 **V****alues**: automatically generated | [optional] 
**id** | **string** | Object identifier. | [optional] 
**invoice_id** | **string** | The unique ID of the invoice associated with this invoice payment. **Character limit**: 32 **Values**: a valid invoice ID | [optional] 
**payment_id** | **string** | The unique ID of the payment associated with this invoice payment. **Character limit**: 32 **V****alues**: a valid payment ID | [optional] 
**refund_amount** | **double** | Specifies the amount of a refund applied against this InvoicePayment. **Character limit**: 16 **Values**: automatically generated | [optional] 
**updated_by_id** | **string** | The ID of the user who last updated the invoice payment. **Character limit**: 32 **V****alues**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the invoice payment was last updated. **Character limit**: 29 **V****alues**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


