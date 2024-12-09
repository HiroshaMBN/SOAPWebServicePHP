<?php
$client = new SoapClient("calculator.wsdl");

 

try {
    $response = $client->Add(['num1' => $num1, 'num2' => $num2]);
    $response = $client->Add(['num1' => $num1, 'num2' => $num2]);
    echo "The sum of $num1 and $num2 is: " . $response->result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
