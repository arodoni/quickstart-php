# POSTQuoteDocType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiuser** | **string** | If not using Salesforce locale, this API Zuora user will be used to retrieve the locale from Zuora. | [optional] 
**document_type** | **string** | Type of the document to generate: &#x60;PDF&#x60; or &#x60;DOC&#x60;. | 
**locale** | **string** | Salesforce locale value to use. | [optional] 
**password** | **string** | dummy | [optional] 
**quote_id** | **string** | ｜ Id of the quote。 | 
**sandbox** | **string** | dummy | [optional] 
**server_url** | **string** | SOAP URL used to login to Salesforce to get data. You can get the value with the following code in a Visualforce page: &#x60;{!$Api.Partner_Server_URL_100}&#x60; | 
**session_id** | **string** | Salesforce session id used to log in to Salesforce to get data. You can get the value with the following code in a Visualforce page: *{!$Api.Session_ID}* | 
**template_id** | **string** | Id of the quote template in Zuora. | 
**token** | **string** | dummy | [optional] 
**use_sfdc_locale** | **string** | If using Salesforce org locale, set this to a value that is not null. | [optional] 
**username** | **string** | dummy | [optional] 
**zquotes_major_version** | **string** | The major version number of Zuora Quotes you are generating the quote document in. You can use a quote template with hierarchy sizes bigger than 3 if this is set to 7 or higher. | [optional] 
**zquotes_minor_version** | **string** | The minor version number of Zuora Quotes you are generating the quote document in. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


