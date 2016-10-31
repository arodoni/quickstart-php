<?php

spl_autoload_register(function ($class) {
    error_log('Calling autoloader on class '.$class); 

    // project-specific namespace prefix
    $prefix = 'Swagger\\Client\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/lib/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

$testLogin = false; 
$testGetProdCat = false; 
$testGetSpecProd = false; 
$testPostAcc = false; 
$testUpdateSub = false; 
$testCancelSub = false; 
$testProdId; 
$testPlanId; 
$testSubIdUpdate; 
$testPlanIdUpdate; 
$testSubIdCancel; 

$testLogin = isset($_GET['zLogin']) ? $_GET['zLogin'] : false; 
$testGetProdCat = isset($_GET['zGetProdCat']) ? $_GET['zGetProdCat'] : false; 
$testGetSpecProd = isset($_GET['zGetSpecProd']) ? $_GET['zGetSpecProd'] : false; 
$testPostAcc = isset($_GET['zPostAcc']) ? $_GET['zPostAcc'] : false; 
$testUpdateSub = isset($_GET['zUpSub']) ? $_GET['zUpSub'] : false; 
$testCancelSub = isset($_GET['zCanSub']) ? $_GET['zCanSub'] : false; 

if ($testPostAcc) {
  $testPlanId = $_GET['zPlanId']; 
}
if ($testGetSpecProd) {
  $testProdId = $_GET['zProdId']; 
}
if ($testUpdateSub) {
  $testSubIdUpdate = $_GET['zSubIdUp']; 
  $testPlanIdUpdate = $_GET['zPlanIdUp']; 
}
if ($testCancelSub) {
  $testSubIdCancel = $_GET['zSubIdCan']; 
}


$testNum = 1; 
$startTime; 

function printResultStart($func){
  global $testNum, $startTime; 

  echo "<font color='blue'>=============<br>";
  echo "<b>TEST " . $testNum . "</b><br>";
  echo $func . "<br>";
  echo "-------------<br></font>";
  $testNum++;
  $startTime = microtime(true); 
} 

function printResultEnd($messages){
  global $startTime;

  $elapsedTime = microtime(true) - $startTime;

  if(count($messages)>0){
    echo "Messages: <br><font color='red'>";
    foreach($messages as $message) {
      if (is_array($message)) {
        echo $message . "<br>"; 
        foreach ($message as $mes) {
          echo "--".$mes."<br>";
        }
      } else {
        echo $message . "<br>"; 
      }
    }
    
    echo "</font>-------------<br>";
  } else {
    echo "<font color='green'>No Errors</font><br>";
  }

  echo "<font color='blue'>Elapsed Time: ".($elapsedTime)."<br>";
  echo "=============<br>";
  echo "<br></font>";
}

function test_zApi_Login(){
  printResultStart(__FUNCTION__);
  $messages = array(); 
  $config = new Swagger\Client\Configuration(); 
  $config->setSSLVerification(false); 
  $newApiClient = new Swagger\Client\ApiClient($config); 
  $conApi = new Swagger\Client\Api\ConnectionsApi($newApiClient); 
  try {
    $response = $conApi->pOSTConnections($config->getUserName(), 
      $config->getPassword(), 'application/json'); 
    echo 'Response: <br>'; 
    echo $response; 
    echo '<br>'; 
  } catch (Exception $e) {
    array_push($messages, $e->getMessage()); 
  }
  printResultEnd($messages);
}

function test_zApi_GetProductCatalog() {
  printResultStart(__FUNCTION__);
  $messages = array(); 
  $config = new Swagger\Client\Configuration(); 
  $config->setSSLVerification(false); 
  $newApiClient = new Swagger\Client\ApiClient($config); 
  $catApi = new Swagger\Client\Api\CatalogApi($newApiClient); 
  try {
    $response = $catApi->getCatalog(); 
    echo 'Response: <br>'; 
    echo $response; 
    echo '<br>'; 
  } catch (Exception $e) {
    array_push($messages, $e->getMessage()); 
  }
  printResultEnd($messages);
}

function test_zApi_GetSpecificProduct() {
  global $testProdId; 

  printResultStart(__FUNCTION__);
  $messages = array(); 
  // Test Prod Id 40800d07e61e952d015233f75888119e 
  $prodId = $testProdId; 
  if (empty($prodId)) {
    echo 'Please enter a valid product id before making the call.'; 
    printResultEnd($messages); 
    return; 
  }
  $config = new Swagger\Client\Configuration(); 
  $config->setSSLVerification(false); 
  $newApiClient = new Swagger\Client\ApiClient($config); 
  $prodApi = new Swagger\Client\Api\ProductsApi($newApiClient); 
  try {
    $response = $prodApi->proxyGETProduct($prodId); 
    echo 'Response: <br>'; 
    echo $response; 
    echo '<br>'; 
  } catch (Exception $e) {
    array_push($messages, $e->getMessage()); 
  }
  printResultEnd($messages); 
}

function test_zApi_PostAccount() {
  global $testPlanId; 

  printResultStart(__FUNCTION__);
  $messages = array(); 
  // Test Plan Id 408032f4a5aa164d0152390587a61497 
  $planId = $testPlanId; 
  if (empty($planId)) {
    echo 'Please enter a valid product rate plan id before making the call.'; 
    printResultEnd($messages); 
    return; 
  }
  $jsonRequest = '{
    "name": "Test Account WKN REST SWAGGER",
    "currency": "USD",
    "notes": "This account is for demo purposes.",
    "billCycleDay": 0,
    "autoPay": true,
    "paymentTerm": "Due Upon Receipt", 
    "billToContact": {
      "address1": "1051 E Hillsdale Blvd",
      "city": "Foster City",
      "country": "United States",
      "firstName": "John",
      "lastName": "Smith",
      "zipCode": "94404",
      "state": "CA",
      "workEmail": "john.smith@test.com"
    },
    "creditCard": {
      "cardType": "Visa",
      "cardNumber": "4111111111111111",
      "expirationMonth": 12,
      "expirationYear": 2020,
      "securityCode": null,
      "cardHolderInfo": {
        "cardHolderName": "Leo",
        "addressLine1": "3400 Bridge Pkwy",
        "addressLine2": "#000",
        "city": null,
        "state": null,
        "zipCode": "94000",
        "country": "United States",
        "phone": "+1(123)4567890",
        "email": "w.l@test.com"
      }
    },  
    "subscription": {
      "termType": "TERMED",
      "initialTerm": 12,
      "renewalTerm": 12,
      "autoRenew": true,
      "notes": "This is a trial subscription for POST account demo.",
      "subscribeToRatePlans": [
        {
          "productRatePlanId": "'.$planId.'"
        }
      ],
      "contractEffectiveDate": "2016-01-01"
    },
    "invoice": "true",
    "collect": "true"
   }'; 

  $zuora_version = '196.0'; 
  $config = new Swagger\Client\Configuration(); 
  $config->setSSLVerification(false); 
  $newApiClient = new Swagger\Client\ApiClient($config); 
  $jsonRequestDecode = json_decode($jsonRequest); 
  $request = $newApiClient->getSerializer()->deserialize($jsonRequestDecode, '\Swagger\Client\Model\POSTAccountType'); 
  error_log('request: '.$request); 
  $accApi = new Swagger\Client\Api\AccountsApi($newApiClient); 
  try {
    $response = $accApi->pOSTAccount($request, $zuora_version); 
    echo 'Response: <br>'; 
    echo $response; 
    echo '<br>'; 
  } catch (Exception $e) {
    array_push($messages, $e->getMessage()); 
  }
  printResultEnd($messages); 
}

function test_zApi_UpdateSub() {
  global $testSubIdUpdate, $testPlanIdUpdate; 

  printResultStart(__FUNCTION__);
  $messages = array(); 
  // Test Subscription Id 2c92c0fb57ffb454015813ca95e916a5
  $subscription_key = $testSubIdUpdate; 
  // Test Plan Id 408080ea355a5972015238b65fbf6b1f 
  $planId = $testPlanIdUpdate; 
  if (empty($subscription_key) || empty($planId)) {
    echo 'Please enter valid susbcription id and product rate plan id before making the call.'; 
    printResultEnd($messages); 
    return; 
  }
  // Retrieved these values from product catalog 
  $jsonRequest = '{
    "termType": "TERMED", 
    "currentTerm": 12, 
    "renewalTerm": 12,
    "renewalSetting": "RENEW_WITH_SPECIFIC_TERM",
    "add": [{
      "productRatePlanId": "'.$planId.'",
      "contractEffectiveDate": "2016-05-01"
    }],
    "notes": "Test UPDATE SUBSCRIPTION WKN REST SWAGGER",
    "invoice": "true",
    "collect": "false"
  }'; 
  $zuora_version = '196.0'; 
  $config = new Swagger\Client\Configuration(); 
  $config->setSSLVerification(false); 
  $newApiClient = new Swagger\Client\ApiClient($config); 
  $jsonRequestDecode = json_decode($jsonRequest); 
  $request = $newApiClient->getSerializer()->deserialize($jsonRequestDecode, '\Swagger\Client\Model\PUTSubscriptionType'); 
  error_log('request: '.$request); 
  $subApi = new Swagger\Client\Api\SubscriptionsApi($newApiClient); 
  try {
    $response = $subApi->pUTSubscription($subscription_key, $request, $zuora_version); 
    echo 'Response: <br>'; 
    echo $response; 
    echo '<br>'; 
  } catch (Exception $e) {
    array_push($messages, $e->getMessage()); 
  }
  printResultEnd($messages); 
}

function test_zApi_CancelSub() {
  global $testSubIdCancel; 

  printResultStart(__FUNCTION__);
  $messages = array(); 
  // Test Subscription Id 2c92c0fb57ffb4540158142408ac1adb
  $subscription_key = $testSubIdCancel; 
  if (empty($subscription_key)) {
    echo 'Please enter a valid susbcription id before making the call.'; 
    printResultEnd($messages); 
    return; 
  }
  $jsonRequest = '{
    "cancellationPolicy": "SpecificDate",
    "cancellationEffectiveDate": "2016-09-01",
    "invoice": "true",
    "collect": "false"
  }'; 
  $zuora_version = '196.0'; 
  $config = new Swagger\Client\Configuration(); 
  $config->setSSLVerification(false); 
  $newApiClient = new Swagger\Client\ApiClient($config); 
  $jsonRequestDecode = json_decode($jsonRequest); 
  $request = $newApiClient->getSerializer()->deserialize($jsonRequestDecode, '\Swagger\Client\Model\POSTSubscriptionCancellationType'); 
  error_log('request: '.$request); 
  $canApi = new Swagger\Client\Api\SubscriptionsApi($newApiClient); 
  try {
    $response = $canApi->pOSTSubscriptionCancellation($subscription_key, $request, $zuora_version); 
    echo 'Response: <br>'; 
    echo $response; 
    echo '<br>'; 
  } catch (Exception $e) {
    array_push($messages, $e->getMessage()); 
  }
  printResultEnd($messages); 
}

if ($testLogin){
  try {
  	// Login to Zuora
  	test_zApi_Login(); 
  } catch (Exception $e) {
  	echo 'There was an exception'; 
  }
}

if ($testGetProdCat){
  try {
    // Retrieve product catalog 
    test_zApi_GetProductCatalog(); 
  } catch (Exception $e) {
    echo 'There was an exception'; 
  }
}

if ($testGetSpecProd){
  try {
    // Retrieve specific product  
    test_zApi_GetSpecificProduct(); 
  } catch (Exception $e) {
    echo 'There was an exception'; 
  }
}

if ($testPostAcc){
  try {
    // Create account and subscription 
    test_zApi_PostAccount(); 
  } catch (Exception $e) {
    echo 'There was an exception'; 
  }
}

if ($testUpdateSub){
  try {
    // Update existing subscription 
    test_zApi_UpdateSub(); 
  } catch (Exception $e) {
    echo 'There was an exception'; 
  }
}

if ($testCancelSub) {
  try {
    // Cancel existing subscription 
    test_zApi_CancelSub(); 
  } catch (Exception $e) {
    echo 'There was an exception'; 
  }
}




?>