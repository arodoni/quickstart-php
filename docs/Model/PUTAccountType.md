# PUTAccountType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_pay** | **bool** | Specifies whether future payments are to be automatically billed when they are due. Possible values are: &#x60;true&#x60;, &#x60;false&#x60;. | [optional] 
**batch** | **string** | The alias name given to a batch. A string of 50 characters or less. | [optional] 
**bill_to_contact** | [**\Swagger\Client\Model\PUTAccountTypeBillToContact**](PUTAccountTypeBillToContact.md) |  | [optional] 
**communication_profile_id** | **string** | The ID of a [communication profile](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Communication_Profile). | [optional] 
**crm_id** | **string** | CRM account ID for the account, up to 100 characters. | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**invoice_template_id** | **string** | Invoice template ID, configured in [Billing Settings in the Zuora UI](https://knowledgecenter.zuora.com/CB_Billing/IA_Invoices/Creating_a_Custom_Invoice_Template). | [optional] 
**name** | **string** | Account name, up to 255 characters. | [optional] 
**notes** | **string** | A string of up to 65,535 characters. | [optional] 
**payment_gateway** | **string** | The name of the payment gateway instance. If null or left unassigned, the Account will use the Default Gateway. | [optional] 
**sold_to_contact** | [**\Swagger\Client\Model\PUTAccountTypeSoldToContact**](PUTAccountTypeSoldToContact.md) |  | [optional] 
**tagging** | **string** | dummy | [optional] 
**tax_info** | [**\Swagger\Client\Model\POSTAccountTypeTaxInfo**](POSTAccountTypeTaxInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


