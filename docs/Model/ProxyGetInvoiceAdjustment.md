# ProxyGetInvoiceAdjustment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the account that owns the invoice. **Character limit**: 32 **Values**: inherited from &#x60;[Account](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account).ID&#x60; for the invoice owner | [optional] 
**accounting_code** | **string** | The [Chart of Accounts](/CA_Billing_and_Payments/C_Billing_and_Payments_Settings/U_Configure_Accounting_Codes/D_Set_Up_Chart_of_Accounts) and is active | [optional] 
**adjustment_date** | [**\DateTime**](Date.md) | The date when the invoice adjustment is applied. This date must be the same as the invoice&#39;s date or later. **Character limit**: 29 **Values**: Leave null to automatically generate the current date | [optional] 
**adjustment_number** | **string** | A unique string to identify an individual invoice adjustment. **Character limit**: 255 **Values**: automatically generated | [optional] 
**amount** | **double** | The amount of the invoice adjustment. **Character limit**: 16 **Values**: a valid currency amount | [optional] 
**cancelled_by_id** | **string** | The ID of the Zuora user who canceled the invoice adjustment. Zuora generates this read-only field only if the adjustment is canceled. **Character limit**: 32 **Values**: automatically generated | [optional] 
**cancelled_on** | [**\DateTime**](\DateTime.md) | The date when the invoice adjustment is canceled. Zuora generates this read-only field if this adjustment is canceled. **Character limit**: 29 **Values**: automatically generated | [optional] 
**comments** | **string** | Use this field to record comments about the invoice adjustment. **Character limit**: 255 **Values**: a string of 255 characters or fewer | [optional] 
**created_by_id** | **string** | The user ID of the person who created the invoice adjustment. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date the invoice adjustment was created. **Character limit**: 29 **Values**: automatically generated | [optional] 
**customer_name** | **string** | The name of the account that owns the associated invoice. **Character limit**: 50 **Values**: inherited from &#x60;[Account](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account).Name&#x60; | [optional] 
**customer_number** | **string** | The unique account number of the customer&#39;s account. **Character limit**: 70 **Values**: inherited from &#x60;[Account](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account).AccountNumber&#x60; | [optional] 
**id** | **string** | Object identifier. | [optional] 
**impact_amount** | **double** | The amount that changes the balance of the associated invoice. **Character limit**: 16 **Values**: automatically calculated | [optional] 
**invoice_id** | **string** | The ID of the invoice associated with the adjustment. This field is required if you don&#39;t specify a value for the &#x60;InvoiceNumber&#x60; field. **Character limit**: 32 **Values**: [a valid invoice ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Invoice) | [optional] 
**invoice_number** | **string** | The unique identification number for the associated invoice. This field is required if you don&#39;t specify a value for the &#x60;InvoiceId&#x60; field. **Character limit**: 32 **Values**: [a valid invoice number](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Invoice) | [optional] 
**reason_code** | **string** | A code identifying the reason for the transaction. Must be an existing reason code or empty. If you do not specify a value, Zuora uses the default reason code. **Character limit**: 32 **V****alues**: a valid [reason code](/C_Zuora_User_Guides/A_Billing_and_Payments/R_Reason_Codes_for_Payment_Operations) | [optional] 
**reference_id** | **string** | A code to reference an object external to Zuora. For example, you can use this field to reference a case number in an external system. **Character limit**: 60 **Values**: a string of 60 characters or fewer | [optional] 
**status** | **string** | The status of the invoice adjustment. This field is required in &#x60;query()&#x60; calls, but is automatically generated in other calls. **Character limit**: 9 **Values**: &#x60;Canceled&#x60;, &#x60;Processed&#x60; | [optional] 
**transferred_to_accounting** | **string** | Indicates the status of the adjustment&#39;s transfer to an external accounting system, such as NetSuite. **Character limit**: 10 **Values**: &#x60;Processing&#x60;, &#x60;Yes&#x60;, &#x60;Error&#x60;, &#x60;Ignore&#x60; | [optional] 
**type** | **string** | Indicates whether the adjustment credits or debits the invoice amount. **Character limit**: 6 **Values**: &#x60;Credit&#x60;, &#x60;Charge&#x60; | [optional] 
**updated_by_id** | **string** | The ID of the user who last updated the invoice. **Character limit**: 32 **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the invoice was last updated. **Character limit**: 29 **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


