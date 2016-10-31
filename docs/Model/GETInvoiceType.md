# GETInvoiceType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Customer account ID. | [optional] 
**account_name** | **string** | Customer account name. | [optional] 
**account_number** | **string** | Customer account number. | [optional] 
**amount** | **string** | Amount of the invoice before adjustments, discounts, and similar items. | [optional] 
**balance** | **string** | Balance remaining due on the invoice (after adjustments, discounts, etc.) | [optional] 
**body** | **string** | The REST URL of the invoice PDF file. | [optional] 
**created_by** | **string** | User ID of the person who created the invoice. If a bill run generated the invoice, then this is the user ID of person who created the bill run. | [optional] 
**credit_balance_adjustment_amount** | **string** | dummy | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**due_date** | [**\DateTime**](Date.md) | Payment due date as _yyyy-mm-dd_. | [optional] 
**id** | **string** | Invoice ID. | [optional] 
**invoice_date** | [**\DateTime**](Date.md) | Invoice date as _yyyy-mm-dd_ | [optional] 
**invoice_files** | [**\Swagger\Client\Model\GETInvoiceFileType[]**](GETInvoiceFileType.md) | Information about the invoice PDF file: | [optional] 
**invoice_items** | [**\Swagger\Client\Model\GETInvoicesInvoiceItemType[]**](GETInvoicesInvoiceItemType.md) | Information on one or more items on this invoice: | [optional] 
**invoice_number** | **string** | Unique invoice ID, returned as a string. | [optional] 
**invoice_target_date** | [**\DateTime**](Date.md) | Date through which charges on this invoice are calculated, as _yyyy-mm-dd_. | [optional] 
**status** | **string** | Status of the invoice in the system - not the payment status, but the status of the invoice itself. Possible values are: &#x60;Posted&#x60;, &#x60;Draft&#x60;, &#x60;Canceled&#x60;, &#x60;Error&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


