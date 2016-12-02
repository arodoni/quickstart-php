# Zuora REST API Quick Start for PHP
## Overview

This sample code is to help you quickly integrate with Zuora REST APIs using PHP. For additional information on the Zuora REST API, visit [Zuora Developer Center](https://www.zuora.com/developer/)

The sample code is provided “AS IS”, for demonstration purposes only. Zuora does not guarantee or make any representations regarding the use, results of use, accuracy, security, timeliness, or completeness of any data or information relating to the sample code. You, the customer, are responsible for making sure that your implementation is functional and secure.
Go to [Zuora Community](https://community.zuora.com/) to report issues or discuss these samples with your peers.

The sample code demonstrates how to invoke the REST resources to implement the following use cases in PHP:

1. Retrieve the Zuora product catalog
2. Create an account and subscription
3. Upgrade a subscription
4. Cancel a subscription

The API calls used in this example are shown in cURL in [Zuora Developer Quick Start](https://www.zuora.com/developer/quick-start/).

## Requirements

To build and execute the sample code, you need the following:

- Zuora Test Drive Tenant
  
  The Test Drive tenant comes with seed data, such as a sample product catalog, which will be used in the sample code. Go to [Zuora Test Drive](https://www.zuora.com/resource/zuora-test-drive/) and sign up for a tenant.

- PHP 5.4.0 and later

## Installation & Execution

The QuickStart project contains the following major components:

- io.swagger.codegen.languages.PhpClientCodegen

  This file contains the the Zuora REST client libraries in PHP.

- test.php

  This is the class with the QuickStart sample code that uses the Zuora REST API.

- index.html

  Follow these steps to generate the QuickStart project and run thru the use cases:

1. Download or clone this project.
2. Deploy the files to your favorite PHP-enabled web server.
3. Update the credentials in [Configuration.php](/lib/Configuration.php).
4. In a browser, navigate to index.html page. 
5. Choose a scenario and click Submit.

## Author

docs@zuora.com
