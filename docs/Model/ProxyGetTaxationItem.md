# ProxyGetTaxationItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_code** | **string** | The [Chart of Accounts](/CB_Billing/W_Billing_and_Payments_Settings/V_Configure_Accounting_Codes/D_Set_Up_Chart_of_Accounts) | [optional] 
**created_by_id** | **string** | The ID of the user who created the taxation item. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when the payment was created in the Zuora system. **Character limit**: 29 **Values**: automatically generated | [optional] 
**exempt_amount** | **double** | The amount of taxes or VAT for which the customer has an exemption. **Character limit**: 16 **Values**: a decimal value | [optional] 
**id** | **string** | Object identifier. | [optional] 
**invoice_item_id** | **string** | The ID of the specific invoice item that the taxation information applies to. **Character limit**: 32 **Values**: a valid [invoice item ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/InvoiceItem) | [optional] 
**jurisdiction** | **string** | The jurisdiction that applies the tax or VAT. This value is typically a state, province, county, or city. **Character limit**: 32 **Values**: a string of 32 characterrs or fewer | [optional] 
**location_code** | **string** | The identifier for the location based on the value of the &#x60;TaxCode&#x60; field. **Character limit**: 32 **Values**: automatically generated | [optional] 
**name** | **string** | The name of the tax rate, such as sales tax or GST. This name is displayed on invoices. **Character limit**: 128 **Values**: a string of 128 characters or fewer | [optional] 
**tax_amount** | **double** | The amount of the tax applied to the charge. **Character limit**: 16 **Values**: a decimal value | [optional] 
**tax_code** | **string** | The tax code identifies which tax rules and tax rates to apply to a specific charge. **Character limit**: 32 **Values**: a string of 32 characters or fewer | [optional] 
**tax_code_description** | **string** | The description for the tax code. **Character limit**: 255 **Values**: a string of 255 characters or fewer | [optional] 
**tax_date** | [**\DateTime**](Date.md) | The date that the tax is applied to the charge. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_and_dateTime_Format) | [optional] 
**tax_rate** | **double** | The tax rate applied to the charge. **Character limit**: 16 **Values**: a valid decimal value | [optional] 
**tax_rate_description** | **string** | The description of the tax rate. **Character limit**: 255 **Values**: a string of 255 characters or fewer | [optional] 
**tax_rate_type** | **string** | The type of the tax rate applied to the charge. **Character limit**: 10 **Values**: &#x60;Percentage&#x60;, &#x60;FlatFee&#x60; | [optional] 
**updated_by_id** | **string** | The ID of the user who last updated the taxation item. **Character limit**: **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the taxation item was last updated. **Character limit**: **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


