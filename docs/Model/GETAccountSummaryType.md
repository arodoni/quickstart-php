# GETAccountSummaryType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**basic_info** | [**\Swagger\Client\Model\GETAccountSummaryTypeBasicInfo**](GETAccountSummaryTypeBasicInfo.md) |  | [optional] 
**bill_to_contact** | [**\Swagger\Client\Model\GETAccountSummaryTypeBillToContact**](GETAccountSummaryTypeBillToContact.md) |  | [optional] 
**invoices** | [**\Swagger\Client\Model\GETAccountSummaryInvoiceType[]**](GETAccountSummaryInvoiceType.md) | Container for invoices. Only returns the last 6 invoices. | [optional] 
**payments** | [**\Swagger\Client\Model\GETAccountSummaryPaymentType[]**](GETAccountSummaryPaymentType.md) | Container for payments. Only returns the last 6 payments. | [optional] 
**sold_to_contact** | [**\Swagger\Client\Model\GETAccountSummaryTypeSoldToContact**](GETAccountSummaryTypeSoldToContact.md) |  | [optional] 
**subscriptions** | [**\Swagger\Client\Model\GETAccountSummarySubscriptionType[]**](GETAccountSummarySubscriptionType.md) | Container for subscriptions. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 
**tax_info** | [**\Swagger\Client\Model\GETAccountSummaryTypeTaxInfo**](GETAccountSummaryTypeTaxInfo.md) |  | [optional] 
**usage** | [**\Swagger\Client\Model\GETAccountSummaryUsageType[]**](GETAccountSummaryUsageType.md) | Container for usage data. Only returns the last 6 months of usage. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


