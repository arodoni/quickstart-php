# POSTUsageResponseType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**check_import_status** | **string** | URL for checking the status of the import operation.  Possible status values at this URL are:&#x60;Pending&#x60;, &#x60;Processing&#x60;, &#x60;Completed&#x60;, &#x60;Canceled&#x60;, &#x60;Failed&#x60;.  Only a status of Completed indicates that the file contents were imported successfully. | [optional] 
**size** | **int** | The size of the uploaded file in bytes. | [optional] 
**success** | **bool** | Returns &#x60;true&#x60; if the request was processed successfully. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


