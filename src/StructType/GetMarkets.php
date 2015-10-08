<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarkets StructType
 * @subpackage Structs
 */
class GetMarkets extends AbstractStructBase
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
     * Constructor method for GetMarkets
     * @uses GetMarkets::setServiceId()
     * @param string $serviceId
     */
    public function __construct($serviceId = null)
    {
        $this
            ->setServiceId($serviceId);
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
     * @return \Autovista\VinInternational\StructType\GetMarkets
     */
    public function setServiceId($serviceId = null)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\GetMarkets
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
