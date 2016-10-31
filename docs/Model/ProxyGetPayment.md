# ProxyGetPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The unique account ID for the customer that the payment is for. **Character limit**: 32 **Values**: a valid [account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account) | [optional] 
**accounting_code** | **string** | The [Chart of Accounts](/CB_Billing/W_Billing_and_Payments_Settings/V_Configure_Accounting_Codes/D_Set_Up_Chart_of_Accounts) | [optional] 
**amount** | **double** | The amount of the payment. **Character limit**: 16 **Values**: a valid currency value | [optional] 
**applied_credit_balance_amount** | **double** | The amount of the payment to apply to a credit balance. This field is required in a create() call when the &#x60;AppliedInvoiceAmount&#x60; field value is null. **Character limit**: 16 **Values**: a valid currency value | [optional] 
**auth_transaction_id** | **string** | The authorization transaction ID from the payment gateway. Use this field for electronic payments, such as credit cards. **Character limit**: 50 **Values**: a string of 50 characters or fewer | [optional] 
**bank_identification_number** | **string** | The first six digits of the credit card or debit card used for the payment, when applicable. Use this field to [reconcile payments between the gateway and merchant banks](https://knowledgecenter.zuora.com/CB_Billing/K_Payment_Operations/d_Reconciling_Payments_with_Merchant_Accounts). **Character limit**: 6 **Values**: automatically generated | [optional] 
**cancelled_on** | [**\DateTime**](\DateTime.md) | The date when the payment was canceled. **Character limit**: 29 **Values**: automatically generated | [optional] 
**comment** | **string** | Additional information related to the payment. **Character limit**: 255 **Values**: a string of 255 characters or fewer | [optional] 
**created_by_id** | **string** | The user ID of the person who created the &#x60;Payment&#x60; object. **Character limit**: 32 **Values**: automatically generated | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when the Payment object was created in the Zuora system. **Character limit**: 29 **Values** automatically generated | [optional] 
**effective_date** | [**\DateTime**](Date.md) | The date when the payment takes effect. **Character limit**: 29 **Values**: [a valid date and time value](/CB_Billing/WA_Dates_in_Zuora/A_Date_Format_and_Datetimes_in_Zuora) | [optional] 
**gateway** | **string** | Name of the [gateway](/C_Zuora_User_Guides/A_Billing_and_Payments/M_Payment_Gateways) instance that processes the payment. When creating a Payment, this must be a valid gateway instance name and this gateway must support the specific payment method. If not specified, the default gateway on the Account will be used. | [optional] 
**gateway_order_id** | **string** | A merchant-specified natural key value that can be passed to the electronic payment gateway when a payment is created. If not specified, the PaymentNumber will be passed in instead. **Character limit**: 70 **Values**: a string of 70 characters or fewer | [optional] 
**gateway_response** | **string** | The message returned from the payment gateway for the payment. This message is gateway-dependent. **Character limit**: 500 **Values**: automatically generated | [optional] 
**gateway_response_code** | **string** | The code returned from the payment gateway for the payment. This code is gateway-dependent. **Character limit**: 20 **Values**: automatically generated | [optional] 
**gateway_state** | **string** | The status of the payment in the gateway; use for reconciliation. **Character limit**: 19 **Values**: automatically generated | [optional] 
**id** | **string** | Object identifier. | [optional] 
**marked_for_submission_on** | [**\DateTime**](\DateTime.md) | The date when a payment was marked and waiting for batch submission to the payment process. **Character limit**: 29 **Values**: automatically generated | [optional] 
**payment_method_id** | **string** | The ID of the payment method used for the payment. Required for Create. **Character limit**: 32 **Values**: automatically generated | [optional] 
**payment_method_snapshot_id** | **string** | The unique ID of the payment method snapshot which is a copy of the particular Payment Method used in a transaction. **Character limit**: 32 **V****alues**: a valid [payment method snapshot ID](http://knowledgecenter.zuora.com/D_SOAP_API/E_SOAP_API_Objects/PaymentMethod_Snapshot) | [optional] 
**payment_number** | **string** | The unique identification number of a payment. For example: P-00000028. **Character limit**: 32 **Values**: automatically generated | [optional] 
**reference_id** | **string** | The transaction ID returned by the payment gateway. Use this field to reconcile payments between your gateway and Z-Payments. **Character limit**: 60 **Values**: a string of 60 characters or fewer | [optional] 
**refund_amount** | **double** | The amount of the payment that is refunded. This field is null if no refund is made against the payment. **Character limit**: 16 **Values**: automatically generated | [optional] 
**second_payment_reference_id** | **string** | The transaction ID returned by the payment gateway if there is an additional transaction for the payment. Use this field to reconcile payments between your gateway and Z-Payments. **Character limit**: 60 **Values**: a string of 60 characters or fewer | [optional] 
**settled_on** | [**\DateTime**](\DateTime.md) | The date when the payment was settled in the payment processor. This field is used by the Spectrum gateway only and not applicable to other gateways. **Character limit**: 29 **Values**: automatically generated | [optional] 
**soft_descriptor** | **string** | [A payment gateway-specific field that maps to Zuora for the gateways, Orbital, Vantiv and Verifi](https://knowledgecenter.zuora.com/CB_Billing/M_Payment_Gateways/Supported_Payment_Gateways/Verifi_Global_Payment_Gateway#Soft_Descriptors_(Optional)). **Character limit**: 35 **Values**: &#x60;[SDMerchantName]*[SDProductionInfo]&#x60; | [optional] 
**soft_descriptor_phone** | **string** | [A payment gateway-specific field that maps to Zuora for the gateways, Orbital, Vantiv and Verifi](https://knowledgecenter.zuora.com/CB_Billing/M_Payment_Gateways/Supported_Payment_Gateways/Verifi_Global_Payment_Gateway#Soft_Descriptors_(Optional)). **Character limit**: 20 **Values**: &#x60;[SDPhone]&#x60; | [optional] 
**source** | **string** | Indicates how the payment was created, whether through API, manually, import, or payment run. **Character limit**: **Values**: Payment Run, Import, Manually, and API | [optional] 
**source_name** | **string** | Name of the source. **Character limit**: **Values**: Payment Run number or a file name. | [optional] 
**status** | **string** | The status of the payment in Zuora. The value depends on the type of payment. **Character limit**: 11 **Values**: one of the following:  -  Electronic payments: &#x60;Processed&#x60;, &#x60;Error&#x60;, &#x60;Voided&#x60;  -  External payments: &#x60;Processed&#x60;, &#x60;Canceled&#x60;  See [Troubleshooting Payment Runs](https://knowledgecenter.zuora.com/CB_Billing/K_Payment_Operations/CA_Payment_Runs/Troubleshooting_Payment_Runs) for more information. * Update of status can change value from &#x60;Processed&#x60; to &#x60;Canceled&#x60; when the payment type is external. | [optional] 
**submitted_on** | [**\DateTime**](\DateTime.md) | The date when the payment was submitted. **Character limit****:** 29 **Values**: automatically generated | [optional] 
**transferred_to_accounting** | **string** | Indicates if the payment was transferred to an external accounting system. Use this field for integration with accounting systems, such as NetSuite. **Character limit**: 11 **Values**: &#x60;Processing&#x60;, &#x60;Yes&#x60;, &#x60;Error&#x60;, &#x60;Ignore&#x60; | [optional] 
**type** | **string** | Indicates if the payment is external or electronic. **Character limit**: 10 **Values**: &#x60;External&#x60;, &#x60;Electronic&#x60; | [optional] 
**updated_by_id** | **string** | The ID of the user who last updated the payment. **Character limit**: **Values**: automatically generated | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The date when the payment was last updated. **Character limit**: **Values** **Values**: automatically generated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


