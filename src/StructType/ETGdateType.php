<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGdateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common data type for date representation
 * @subpackage Structs
 */
class ETGdateType extends AbstractStructBase
{
    /**
     * The Day
     * Meta informations extracted from the WSDL
     * - documentation: day of the month
     * - minOccurs: 0
     * @var gDay
     */
    public $Day;
    /**
     * The Month
     * Meta informations extracted from the WSDL
     * - documentation: month
     * @var gMonth
     */
    public $Month;
    /**
     * The Year
     * Meta informations extracted from the WSDL
     * - documentation: year
     * @var gYear
     */
    public $Year;
    /**
     * Constructor method for ETGdateType
     * @uses ETGdateType::setDay()
     * @uses ETGdateType::setMonth()
     * @uses ETGdateType::setYear()
     * @param gDay $day
     * @param gMonth $month
     * @param gYear $year
     */
    public function __construct(gDay $day = null, $month = null, $year = null)
    {
        $this
            ->setDay($day)
            ->setMonth($month)
            ->setYear($year);
    }
    /**
     * Get Day value
     * @return gDay|null
     */
    public function getDay()
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param gDay $day
     * @return \Autovista\VinInternational\StructType\ETGdateType
     */
    public function setDay(gDay $day = null)
    {
        $this->Day = $day;
        return $this;
    }
    /**
     * Get Month value
     * @return gMonth|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param gMonth $month
     * @return \Autovista\VinInternational\StructType\ETGdateType
     */
    public function setMonth($month = null)
    {
        $this->Month = $month;
        return $this;
    }
    /**
     * Get Year value
     * @return gYear|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param gYear $year
     * @return \Autovista\VinInternational\StructType\ETGdateType
     */
    public function setYear($year = null)
    {
        $this->Year = $year;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ETGdateType
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
