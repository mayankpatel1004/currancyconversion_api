<?php
$currancycode = $_REQUEST['currancy'];
$from_currency = "USD";
$amount = "1";
$from_Currency = urlencode($from_currency);
$to_Currency = urlencode($currancycode);
$encode_amount = 1;
$get = file_get_contents("http://free.currencyconverterapi.com/api/v5/convert?q=USD_".$to_Currency."&compact=n");
$results = json_decode($get);
if(isset($results) && $results != "" && $to_Currency == 'EUR'){
    $response = $results->results->USD_EUR->val;
}
if(isset($results) && $results != "" && $to_Currency == 'GBP'){
    $response = $results->results->USD_GBP->val;
}
if(isset($results) && $results != "" && $to_Currency == 'CAD'){
    $response = $results->results->USD_CAD->val;
}
echo $response;exit;
?>