<?php
    // This is the tag for soap:address in the file
    $serviceEndPoint = "http://www.dneonline.com/calculator.asmx";
    //This should be wsdl file in xml format
    $wsdl = $serviceEndPoint . "?WSDL";
    // Create a new SOAP client
    $client = new SoapClient($wsdl);

    //Define which operation to do
    //This should be defined the in the portType and should be a child node of operation name
    $soapOperation = 'Subtract';

    // Define the parameters for the SOAP method
    //With that soap operation (function) the should be  an input and output message. This is the parameter in and the returntyp
    //For parameter find the type in the XML file. Follow the ele
    $params = [
        'intA' => 100,
        'intB' => 11
    ];
    
    // Call the SOAP method, the response is always of an array which is wrapped into a stdClass Object 
    $response = $client->__soapCall($soapOperation, [$params]);

    // Print the response
    print_r($response);