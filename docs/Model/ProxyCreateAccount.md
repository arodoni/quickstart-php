# ProxyCreateAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | Unique account number assigned to the account. **Character limit**: 50 **Values**: one of the following:  - null to auto-generate - a string of 50 characters or fewer that doesn&#39;t begin with the default account number prefix | [optional] 
**additional_email_addresses** | **string** | List of additional email addresses to receive emailed invoices. **Character limit**: 120 **Values**: comma-separated list of email addresses | [optional] 
**allow_invoice_edit** | **bool** | Indicates if associated invoices can be edited. **Character limit**: 5 **Values**: &#x60;true&#x60;, &#x60;false&#x60; (default if left null) | [optional] 
**auto_pay** | **bool** | Indicates if future payments are automatically collected when they&#39;re due during a Payment Run. **Character limit**: 5 **Values**: &#x60;true&#x60;, &#x60;false&#x60; (default) | [optional] 
**balance** | **double** | Current outstanding balance for the account. **Character limit**: 16 **Values**: automatically generated | 
**batch** | **string** | Organizes your customer accounts into groups to optimize your billing and payment operations. Required if use the [subscribe()](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E_SOAP_API_Calls/subscribe_call) call, optional for other supported calls. **Character limit**: 20 **Values**:any system-defined batch (&#x60;Batch1&#x60; - &#x60;Batch50 &#x60;or by name). | [optional] 
**bcd_setting_option** | **string** | Billing cycle day setting option. **Character limit**: 9 **Values**: &#x60;AutoSet&#x60;, &#x60;ManualSet&#x60; | 
**bill_cycle_day** | **int** | Billing cycle day (BCD) on which bill runs generate invoices for the account. **Character limit**: 2 **Values**: any activated system-defined bill cycle day (&#x60;1&#x60; - &#x60;31&#x60;) | 
**bill_to_id** | **string** | ID of the person to bill for the account. **Character limit**: 32 **Values**: a valid contact ID for the account | [optional] 
**communication_profile_id** | **string** | Associates the account with a specified communication profile. **Character limit**: 32 **Values**: a valid communication profile ID | [optional] 
**credit_balance** | **double** | Total credit balance for the account. **Character limit**: 16 **Values**: automatically generated | 
**crm_id** | **string** | CRM account ID for the account. A CRM is a customer relationship management system, such as Salesforce.com. **Character limit**: 100 **Values**: a string of 100 characters or fewer | [optional] 
**currency** | **string** | Currency that the customer is billed in. See [a currency value defined in the Zuora Ui admin settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Customize_Currencies) | 
**customer_service_rep_name** | **string** | Name of the account&#39;s customer service representative, if applicable. **Character limit**: 50 **Values**: a string of 50 characters or fewer | [optional] 
**default_payment_method_id** | **string** | ID of the default payment method for the account. This field is required if the AutoPay field is set to &#x60;true&#x60;. **Character limit**: 32 **Values**: [a valid ID for an existing payment method](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/PaymentMethod) | [optional] 
**invoice_delivery_prefs_email** | **bool** | Indicates if the customer wants to receive invoices through email.  **Character limit**: 5 **Values**: &#x60;true&#x60;, &#x60;false&#x60; (default if left null) | [optional] 
**invoice_delivery_prefs_print** | **bool** | Indicates if the customer wants to receive printed invoices, such as through postal mail. **Character limit**: 5 **Values**: &#x60;true&#x60;, &#x60;false&#x60; (default if left null) | [optional] 
**invoice_template_id** | **string** | The ID of the invoice template. Each customer account can use a specific invoice template for invoice generation. **Character limit**: 32 **Values**: a[ valid template ID configured in Z-Billing Settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Manage_Invoice_Rules_and_Templates) To find the ID of your current invoice template: In Zuora, navigate to **Settings &gt; Z-Billing &gt; Manage Invoice Rules and Templates** and click **Show Id **next to the template you want to use. | [optional] 
**name** | **string** | Name of the account as displayed in the Zuora UI. **Character limit**: 255 **Values**: a string of 255 characters or fewer | 
**notes** | **string** | Comments about the account. **Character limit**: 65,535 **Values**: a string of 65,535 characters | [optional] 
**parent_id** | **string** | Identifier of the parent customer account for this Account object. Use this field if you have customer hierarchy enabled. **Character limit**: 32 **Values**: [a valid account ID](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Account#Id) | [optional] 
**payment_gateway** | **string** | Gateway used for processing electronic payments and refunds. **Character limit**: 40 **Values**: one of the following:  - a valid configured gateway name - Null to inherit the default value set in Z-Payment Settings | [optional] 
**payment_term** | **string** | Indicates when the customer pays for subscriptions. **Character limit**: 100 **Values**: [a valid, active payment term defined in the web-based UI administrative settings](https://knowledgecenter.zuora.com/CB_Billing/Billing_Settings/Define_Payment_Terms) | [optional] 
**purchase_order_number** | **string** | The number of the purchase order associated with this account. Purchase order information generally comes from customers. **Character limit**: 100 **Values**: a string of 100 characters or fewer | [optional] 
**sales_rep_name** | **string** | The name of the sales representative associated with this account, if applicable. **Character limit**: 50 **Values**: a string of 50 characters or fewer | [optional] 
**sold_to_id** | **string** | ID of the person who bought the subscription associated with the account. **Character limit**: 32 **Values**: [a valid contact ID for the account](https://knowledgecenter.zuora.com/DC_Developers/SOAP_API/E1_SOAP_API_Object_Reference/Contact) | [optional] 
**status** | **string** | Status of the account in the system. **Character limit**: 8 **Values**: one of the following:  - leave null if you&#39;re using &#x60;subscribe()&#x60; - if you&#39;re using &#x60;create()&#x60;: - &#x60;Draft&#x60; - &#x60;Active&#x60; - &#x60;Canceled&#x60; | 
**tax_company_code** | **string** | Unique code that identifies a company account in Avalara. Use this field to calculate taxes based on origin and sold-to addresses in Avalara. This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).  **Character limit**: 50 **Values**: a valid company code | [optional] 
**tax_exempt_certificate_id** | **string** | ID of your customer&#39;s tax exemption certificate. **Character limit**: 32 **Values**: a string of 32 characters or fewer | [optional] 
**tax_exempt_certificate_type** | **string** | Type of the tax exemption certificate that your customer holds.  **Character limit**: 32 **Values**: a string of 32 characters or fewer | [optional] 
**tax_exempt_description** | **string** | Description of the tax exemption certificate that your customer holds. **Character limit**: 500 **Values**: a string of 500 characters or fewer | [optional] 
**tax_exempt_effective_date** | [**\DateTime**](Date.md) | Date when the the customer&#39;s tax exemption starts. **Character limit**: 29 **Version notes**: requires Z-Tax | [optional] 
**tax_exempt_expiration_date** | [**\DateTime**](Date.md) | Date when the customer&#39;s tax exemption certificate expires  **Character limit**: 29 **Version notes**: requires Z-Tax | [optional] 
**tax_exempt_issuing_jurisdiction** | **string** | Indicates the jurisdiction in which the customer&#39;s tax exemption certificate was issued. **Character limit**: 32 **Values**: a string of 32 characters or fewer | [optional] 
**tax_exempt_status** | **string** | Status of the account&#39;s tax exemption. Required if you use Z-Tax. This field is unavailable if you don&#39;t use Z-Tax. **Character limit**: 19 **Values**: one of the following:  - &#x60;Yes&#x60; - &#x60;No&#x60; - &#x60;PendingVerification&#x60; | [optional] 
**total_invoice_balance** | **double** | Total balance of the account&#39;s invoices. **Character limit**: 16 **Values**: a valid currency value | 
**vat_id** | **string** | EU Value Added Tax ID. This feature is in **Limited Availability**. If you wish to have access to the feature, submit a request at [Zuora Global Support](http://support.zuora.com/).  **Character limit**: 25 **Values**: a valid Value Added Tax ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


