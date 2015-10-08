<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://vinsearch.eurotaxglass.com/vin-intl/?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://vinsearch.eurotaxglass.com/vin-intl/?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Autovista\VinInternational\ClassMap::get(),
);
/**
 * Samples for Vin ServiceType
 */
$vin = new \Autovista\VinInternational\ServiceType\Vin($options);
$vin->setSoapHeaderETGHeader($ETGHeader);
/**
 * Sample call for VinDecode operation/method
 */
if ($vin->VinDecode(new \Autovista\VinInternational\StructType\VinDecodeInputType()) !== false) {
    print_r($vin->getResult());
} else {
    print_r($vin->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Autovista\VinInternational\ServiceType\Get($options);
$get->setSoapHeaderETGHeader($ETGHeader);
/**
 * Sample call for GetVersion operation/method
 */
if ($get->GetVersion(new \Autovista\VinInternational\StructType\VersionRequestInputType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCache operation/method
 */
if ($get->GetCache(new \Autovista\VinInternational\StructType\GetCache()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMarkets operation/method
 */
if ($get->GetMarkets(new \Autovista\VinInternational\StructType\GetMarkets()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
