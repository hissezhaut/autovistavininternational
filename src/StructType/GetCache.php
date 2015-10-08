<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCache StructType
 * @subpackage Structs
 */
class GetCache extends AbstractStructBase
{
    /**
     * The ServiceId
     * Meta informations extracted from the WSDL
     * - documentation: Please check field ServiceId in method 'Decode'
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ServiceId;
    /**
     * The ServiceCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ServiceCode;
    /**
     * Constructor method for GetCache
     * @uses GetCache::setServiceId()
     * @uses GetCache::setServiceCode()
     * @param string $serviceId
     * @param int $serviceCode
     */
    public function __construct($serviceId = null, $serviceCode = null)
    {
        $this
            ->setServiceId($serviceId)
            ->setServiceCode($serviceCode);
    }
    /**
     * Get ServiceId value
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param string $serviceId
     * @return \Autovista\VinInternational\StructType\GetCache
     */
    public function setServiceId($serviceId = null)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get ServiceCode value
     * @return int|null
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }
    /**
     * Set ServiceCode value
     * @param int $serviceCode
     * @return \Autovista\VinInternational\StructType\GetCache
     */
    public function setServiceCode($serviceCode = null)
    {
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\GetCache
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
