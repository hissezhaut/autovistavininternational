<?php

namespace Autovista\VinInternational\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Vin ServiceType
 * @subpackage Services
 */
class Vin extends AbstractSoapClientBase
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
     * Method to call the operation originally named VinDecode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://vinsearch.eurotaxglass.com/vin-intl
     * - SOAPHeaderTypes : \Autovista\VinInternational\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Main function to map VIN code to ETG dat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinInternational\StructType\VinDecodeInputType $vinRequest
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType|bool
     */
    public function VinDecode(\Autovista\VinInternational\StructType\VinDecodeInputType $vinRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->VinDecode($vinRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
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
