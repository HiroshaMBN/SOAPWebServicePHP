<?php
class Calculator {
    public function Add($request) {
        return ['result' => $request->num1 + $request->num2];
    }

    public function multiple($request){
        return ['result' => $request->num1* $request->num2];
        
    }
}

$server = new SoapServer("calculator.wsdl");
$server->setClass("Calculator");
$server->handle();
