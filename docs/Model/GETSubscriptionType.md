# GETSubscriptionType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpq_bundle_json_id__qt** | **string** |  | [optional] 
**opportunity_close_date__qt** | **string** | The closing date of the Opportunity. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information. | [optional] 
**opportunity_name__qt** | **string** | The unique identifier of the Opportunity. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information. | [optional] 
**quote_business_type__qt** | **string** | The specific identifier for the type of business transaction the Quote represents such as New, Upsell, Downsell, Renewal, or Churn. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information. | [optional] 
**quote_number__qt** | **string** | The unique identifier of the Quote. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.  See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information. | [optional] 
**quote_type__qt** | **string** | The Quote type that represents the subscription lifecycle stage such as New, Amendment, Renew or Cancel. This field is populated when the subscription originates from Zuora Quotes.  This field is used only for reporting subscription metrics.   See [Subscription Data Source](https://knowledgecenter.zuora.com/CD_Reporting/Data_Exports/Z_Data_Source_Reference/Subscription_Data_Source) for more information. | [optional] 
**account_id** | **string** |  | [optional] 
**account_name** | **string** |  | [optional] 
**account_number** | **string** |  | [optional] 
**auto_renew** | **bool** | If &#x60;true&#x60;, the subscription automatically renews at the end of the term. Default is &#x60;false&#x60;. | [optional] 
**contract_effective_date** | [**\DateTime**](Date.md) | Effective contract date for this subscription, as yyyy-mm-dd. | [optional] 
**contracted_mrr** | **string** | Monthly recurring revenue of the subscription. | [optional] 
**current_term** | **int** | The length of the period for the current subscription term. | [optional] 
**current_term_period_type** | **string** | The period type for the current subscription term.  Values are:  * &#x60;Month&#x60; (default) * &#x60;Year&#x60; * &#x60;Day&#x60; * &#x60;Week&#x60; | [optional] 
**custom_field__c** | **string** | Any custom fields defined for this object. | [optional] 
**customer_acceptance_date** | [**\DateTime**](Date.md) | The date on which the services or products within a subscription have been accepted by the customer, as yyyy-mm-dd. | [optional] 
**id** | **string** | Subscription ID. | [optional] 
**initial_term** | **int** | The length of the period for the first subscription term. | [optional] 
**initial_term_period_type** | **string** | The period type for the first subscription term.  Values are:  * &#x60;Month&#x60; (default) * &#x60;Year&#x60; * &#x60;Day&#x60; * &#x60;Week&#x60; | [optional] 
**invoice_owner_account_id** | **string** |  | [optional] 
**invoice_owner_account_name** | **string** |  | [optional] 
**invoice_owner_account_number** | **string** |  | [optional] 
**invoice_separately** | **string** | Separates a single subscription from other subscriptions and creates an invoice for the subscription.   If the value is &#x60;true&#x60;, the subscription is billed separately from other subscriptions. If the value is &#x60;false&#x60;, the subscription is included with other subscriptions in the account invoice. | [optional] 
**notes** | **string** | A string of up to 65,535 characters. | [optional] 
**rate_plans** | [**\Swagger\Client\Model\GETSubscriptionRatePlanType[]**](GETSubscriptionRatePlanType.md) | Container for rate plans. | [optional] 
**renewal_setting** | **string** | Specifies whether a termed subscription will remain &#x60;TERMED&#x60; or change to &#x60;EVERGREEN&#x60; when it is renewed.   Values are:  * &#x60;RENEW_WITH_SPECIFIC_TERM&#x60; (default) * &#x60;RENEW_TO_EVERGREEN&#x60; | [optional] 
**renewal_term** | **int** | The length of the period for the subscription renewal term. | [optional] 
**renewal_term_period_type** | **string** | The period type for the subscription renewal term.  Values are:  * &#x60;Month&#x60; (default) * &#x60;Year&#x60; * &#x60;Day&#x60; * &#x60;Week&#x60; | [optional] 
**service_activation_date** | [**\DateTime**](Date.md) | The date on which the services or products within a subscription have been activated and access has been provided to the customer, as yyyy-mm-dd | [optional] 
**status** | **string** | Subscription status; possible values are:  * &#x60;Draft&#x60; * &#x60;PendingActivation&#x60; * &#x60;PendingAcceptance&#x60; * &#x60;Active&#x60; * &#x60;Cancelled&#x60; * &#x60;Suspended&#x60; (This value is in Limited Availability.) | [optional] 
**subscription_number** | **string** |  | [optional] 
**subscription_start_date** | [**\DateTime**](Date.md) | Date the subscription becomes effective. | [optional] 
**term_end_date** | [**\DateTime**](Date.md) | Date the subscription term ends. If the subscription is evergreen, this is null or is the cancellation date (if one has been set). | [optional] 
**term_start_date** | [**\DateTime**](Date.md) | Date the subscription term begins. If this is a renewal subscription, this date is different from the subscription start date. | [optional] 
**term_type** | **string** | Possible values are: &#x60;TERMED&#x60;, &#x60;EVERGREEN&#x60;. | [optional] 
**total_contracted_value** | **string** | Total contracted value of the subscription. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


