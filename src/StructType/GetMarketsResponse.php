<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarketsResponse StructType
 * @subpackage Structs
 */
class GetMarketsResponse extends AbstractStructBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var short
     */
    public $StatusCode;
    /**
     * The StatusMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StatusMsg;
    /**
     * The Market
     * Meta informations extracted from the WSDL
     * - documentation: market description
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\VinInternational\StructType\ETGsettingType
     */
    public $Market;
    /**
     * Constructor method for GetMarketsResponse
     * @uses GetMarketsResponse::setStatusCode()
     * @uses GetMarketsResponse::setStatusMsg()
     * @uses GetMarketsResponse::setMarket()
     * @param short $statusCode
     * @param string $statusMsg
     * @param \Autovista\VinInternational\StructType\ETGsettingType $market
     */
    public function __construct($statusCode = null, $statusMsg = null, \Autovista\VinInternational\StructType\ETGsettingType $market = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setStatusMsg($statusMsg)
            ->setMarket($market);
    }
    /**
     * Get StatusCode value
     * @return short
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param short $statusCode
     * @return \Autovista\VinInternational\StructType\GetMarketsResponse
     */
    public function setStatusCode($statusCode = null)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusMsg value
     * @return string
     */
    public function getStatusMsg()
    {
        return $this->StatusMsg;
    }
    /**
     * Set StatusMsg value
     * @param string $statusMsg
     * @return \Autovista\VinInternational\StructType\GetMarketsResponse
     */
    public function setStatusMsg($statusMsg = null)
    {
        $this->StatusMsg = $statusMsg;
        return $this;
    }
    /**
     * Get Market value
     * @return \Autovista\VinInternational\StructType\ETGsettingType|null
     */
    public function getMarket()
    {
        return $this->Market;
    }
    /**
     * Set Market value
     * @param \Autovista\VinInternational\StructType\ETGsettingType $market
     * @return \Autovista\VinInternational\StructType\GetMarketsResponse
     */
    public function setMarket(\Autovista\VinInternational\StructType\ETGsettingType $market = null)
    {
        $this->Market = $market;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\GetMarketsResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
