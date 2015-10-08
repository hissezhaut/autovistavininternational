<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCacheResponse StructType
 * @subpackage Structs
 */
class GetCacheResponse extends AbstractStructBase
{
    /**
     * The vins
     * Meta informations extracted from the WSDL
     * - documentation: Vins in cache
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: VIN Code
     * - maxLength: 17
     * @var string
     */
    public $vins;
    /**
     * The StatusMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusMsg;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StatusCode;
    /**
     * Constructor method for GetCacheResponse
     * @uses GetCacheResponse::setVins()
     * @uses GetCacheResponse::setStatusMsg()
     * @uses GetCacheResponse::setStatusCode()
     * @param string $vins
     * @param string $statusMsg
     * @param int $statusCode
     */
    public function __construct($vins = null, $statusMsg = null, $statusCode = null)
    {
        $this
            ->setVins($vins)
            ->setStatusMsg($statusMsg)
            ->setStatusCode($statusCode);
    }
    /**
     * Get vins value
     * @return string|null
     */
    public function getVins()
    {
        return $this->vins;
    }
    /**
     * Set vins value
     * @param string $vins
     * @return \Autovista\VinInternational\StructType\GetCacheResponse
     */
    public function setVins($vins = null)
    {
        $this->vins = $vins;
        return $this;
    }
    /**
     * Get StatusMsg value
     * @return string|null
     */
    public function getStatusMsg()
    {
        return $this->StatusMsg;
    }
    /**
     * Set StatusMsg value
     * @param string $statusMsg
     * @return \Autovista\VinInternational\StructType\GetCacheResponse
     */
    public function setStatusMsg($statusMsg = null)
    {
        $this->StatusMsg = $statusMsg;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param int $statusCode
     * @return \Autovista\VinInternational\StructType\GetCacheResponse
     */
    public function setStatusCode($statusCode = null)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\GetCacheResponse
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
