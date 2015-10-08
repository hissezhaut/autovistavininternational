<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticsType StructType
 * @subpackage Structs
 */
class StatisticsType extends AbstractStructBase
{
    /**
     * The StartDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Processing start timestamp
     * @var dateTime
     */
    public $StartDateTime;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Processing finish timestamp
     * @var dateTime
     */
    public $EndDateTime;
    /**
     * Constructor method for StatisticsType
     * @uses StatisticsType::setStartDateTime()
     * @uses StatisticsType::setEndDateTime()
     * @param dateTime $startDateTime
     * @param dateTime $endDateTime
     */
    public function __construct($startDateTime = null, $endDateTime = null)
    {
        $this
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime);
    }
    /**
     * Get StartDateTime value
     * @return dateTime|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param dateTime $startDateTime
     * @return \Autovista\VinInternational\StructType\StatisticsType
     */
    public function setStartDateTime($startDateTime = null)
    {
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return dateTime|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param dateTime $endDateTime
     * @return \Autovista\VinInternational\StructType\StatisticsType
     */
    public function setEndDateTime($endDateTime = null)
    {
        $this->EndDateTime = $endDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\StatisticsType
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
