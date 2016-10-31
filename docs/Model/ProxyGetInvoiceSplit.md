# ProxyGetInvoiceSplit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by_id** | **string** | The ID of the Zuora user who created the InvoiceSplit object. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when the InvoiceSplit object was created. **Character limit**: 29 **Values**: automatically generated | [optional] 
**id** | **string** | Object identifier. | [optional] 
**invoice_id** | **string** | The ID of the original invoice that the InvoiceSplit object splits. This field becomes read-only after the InvoiceSplit object is created. **Character limit**: 32 **Values**: a valid [invoice ID](https://knowledgecenter.zuora.com/BC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Invoice) | [optional] 
**updated_by_id** | **string** | The ID of the Zuora user who last updated the invoice split. **Character limit**: 32 **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the invoice split was last updated. **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


