# ProxyGetInvoiceItemAdjustment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the account that owns the invoice. **Values**: inherited from &#x60;Account.ID&#x60; for the invoice owner | [optional] 
**accounting_code** | **string** | The accounting code for the invoice item. Accounting codes group transactions that contain similar accounting attributes. **Character limit**: 100 **Values**: inherited from &#x60;InvoiceItem.AccountingCode&#x60; | [optional] 
**adjustment_date** | [**\DateTime**](Date.md) | The date when the invoice item adjustment is applied. This date must be the same as the invoice&#39;s date or later. **Character limit**: 29 **Values**: a valid date and time value | [optional] 
**adjustment_number** | **string** | A unique string to identify an individual invoice item adjustment. **Character limit**: 255 **Values**: automatically generated | [optional] 
**amount** | **double** | The amount of the invoice item adjustment. The value of Amount must be positive. Use the required parameter Type to either credit or charge (debit) this amount on the invoice. **Character limit**: 16 **Values**: a valid currency amount | [optional] 
**cancelled_by_id** | **string** | The ID of the Zuora user who canceled the invoice item adjustment. Zuora generates this read-only field only if the adjustment is canceled. **Character limit**: 32 **Values**: automatically generated | [optional] 
**cancelled_date** | [**\DateTime**](\DateTime.md) | The date when the invoice item adjustment is canceled. Zuora generates this read-only field if this adjustment is canceled. **Character limit**: 29 **Values**: automatically generated | [optional] 
**comment** | **string** | Use this field to record comments about the invoice item adjustment. **Character limit**: 255 **Values**: a string of 255 characters or fewer | [optional] 
**created_by_id** | **string** | The user ID of the person who created the invoice item. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date the invoice item was created. **Character limit**: 29 **Values**: automatically generated | [optional] 
**id** | **string** | Object identifier. | [optional] 
**invoice_id** | **string** | The ID of the invoice associated with the adjustment. The adjustment invoice item is in this invoice. This field is optional if you specify a value for the &#x60;InvoiceNumber&#x60; field. **Character limit**: 3 **Values**: a valid invoice ID | [optional] 
**invoice_item_name** | **string** | The name of the invoice item&#39;s charge. This field is required in &#x60;query()&#x60; calls, but is inherited in other calls. **Character limit**: 255 **Values**: inherited from &#x60;InvoiceItem.ChargeName&#x60; | [optional] 
**invoice_number** | **string** | The unique identification number for the invoice that contains the invoice item. This field is optional if you specify a value for the &#x60;InvoiceId&#x60; field. **Character limit**: 32 **Values**: a valid invoice number | [optional] 
**reason_code** | **string** | A code identifying the reason for the transaction. Must be an existing reason code or empty. If you do not specify a value, Zuora uses the default reason code. **Character limit**: 32 **V****alues**: a valid reason code | [optional] 
**reference_id** | **string** | A code to reference an object external to Zuora. For example, you can use this field to reference a case number in an external system. **Character limit**: 60 **Values**: a string of 60 characters or fewer | [optional] 
**service_end_date** | [**\DateTime**](Date.md) | The end date of the service period associated with the invoice item. Service ends one second before the date in this value. This field is required in query() calls, but is inherited in other calls. **Character limit**: 29 **Values**: inherited from &#x60;InvoiceItem.ServiceEndDate&#x60; | [optional] 
**service_start_date** | [**\DateTime**](Date.md) | The start date of the service period associated with the invoice item. Service ends one second before the date in this value. This field is required in &#x60;query()&#x60; calls, but is inherited in other calls. **Character limit**: 29 **Values**: inherited from &#x60;InvoiceItem.ServiceStartDate&#x60; | [optional] 
**source_id** | **string** | The ID of the item specified in the SourceType field. **Character limit**: 32 **Values**: a valid invoice item ID or taxation item ID | [optional] 
**source_type** | **string** | The type of adjustment. **Character limit**: 13 **Values**: InvoiceDetail, Tax | [optional] 
**status** | **string** | The status of the invoice item adjustment. This field is required in &#x60;query()&#x60; calls, but is automatically generated in other calls. **Character limit**: 9 **Values**: Canceled, Processed | [optional] 
**transferred_to_accounting** | **string** | Indicates the status of the adjustment&#39;s transfer to an external accounting system, such as NetSuite. **Character limit**: 10 **Values**: Processing, Yes, Error, Ignore | [optional] 
**type** | **string** | Query Filter | [optional] 
**updated_by_id** | **string** | The ID of the user who last updated the invoice item. **Character limit**: 32 **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the invoice item was last updated. **Character limit**: 29 **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


