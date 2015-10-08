<?php

namespace Autovista\VinInternational\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the ETGHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Autovista\VinInternational\StructType\ETGHeaderType $eTGHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderETGHeader(\Autovista\VinInternational\StructType\ETGHeaderType $eTGHeader, $nameSpace = 'http://vinsearch.eurotaxglass.com/vin-intl', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ETGHeader', $eTGHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetVersion
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://vinsearch.eurotaxglass.com/vin-intl
     * - SOAPHeaderTypes : \Autovista\VinInternational\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Get version of Program, interne logic, IDD Dat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinInternational\StructType\VersionRequestInputType
     * $versionRequest
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType|bool
     */
    public function GetVersion(\Autovista\VinInternational\StructType\VersionRequestInputType $versionRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVersion($versionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCache
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://vinsearch.eurotaxglass.com/vin-intl
     * - SOAPHeaderTypes : \Autovista\VinInternational\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Internal function to fetch cached VINs. ServiceCode field dependend.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinInternational\StructType\GetCache $getCache
     * @return \Autovista\VinInternational\StructType\GetCacheResponse|bool
     */
    public function GetCache(\Autovista\VinInternational\StructType\GetCache $getCache)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCache($getCache));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMarkets
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://vinsearch.eurotaxglass.com/vin-intl
     * - SOAPHeaderTypes : \Autovista\VinInternational\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Get markets, available in VinSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinInternational\StructType\GetMarkets $parameters
     * @return \Autovista\VinInternational\StructType\GetMarketsResponse|bool
     */
    public function GetMarkets(\Autovista\VinInternational\StructType\GetMarkets $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMarkets($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType|\Autovista\VinInternational\StructType\GetCacheResponse|\Autovista\VinInternational\StructType\GetMarketsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
