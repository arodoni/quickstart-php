# GETAccountTypeBillingAndPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_cycle_day** | **string** | Billing cycle day (BCD), the day of the month when a bill run generates invoices for the account. | [optional] 
**currency** | **string** | A currency defined in the [administrative web-based UI](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Customize_Currencies). | [optional] 
**payment_gateway** | **string** | The name of the payment gateway instance. If null or left unassigned, the Account will use the Default Gateway. | [optional] 
**payment_term** | **string** | A payment-terms indicator defined in the [web-based UI administrative settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Payment_Terms), e.g., \&quot;Net 30\&quot;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


