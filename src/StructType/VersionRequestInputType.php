<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersionRequestInputType StructType
 * @subpackage Structs
 */
class VersionRequestInputType extends AbstractStructBase
{
    /**
     * The ServiceId
     * Meta informations extracted from the WSDL
     * - documentation: User- or Servicekey to identify caller. Used for billing and ACL restrictions. Format: COMPANY-APPLICATION-ENVIRONMENT-SECRET:SUFFIX Where COMPANY,APPLICATION,SECRET delivered by ETG, ENVIRONMENT - one of: proto,dev,test,preprod,live
     * SUFFIX - Optional any string, consists of letter,numbers or following chars: ".", "-", " ", ","
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ServiceId;
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\VinInternational\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * Constructor method for VersionRequestInputType
     * @uses VersionRequestInputType::setServiceId()
     * @uses VersionRequestInputType::setSettings()
     * @param string $serviceId
     * @param \Autovista\VinInternational\StructType\ETGsettingType $settings
     */
    public function __construct($serviceId = null, \Autovista\VinInternational\StructType\ETGsettingType $settings = null)
    {
        $this
            ->setServiceId($serviceId)
            ->setSettings($settings);
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
     * @return \Autovista\VinInternational\StructType\VersionRequestInputType
     */
    public function setServiceId($serviceId = null)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get Settings value
     * @return \Autovista\VinInternational\StructType\ETGsettingType|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\VinInternational\StructType\ETGsettingType $settings
     * @return \Autovista\VinInternational\StructType\VersionRequestInputType
     */
    public function setSettings(\Autovista\VinInternational\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\VersionRequestInputType
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
