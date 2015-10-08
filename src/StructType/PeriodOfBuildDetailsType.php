<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodOfBuildDetailsType StructType
 * @subpackage Structs
 */
class PeriodOfBuildDetailsType extends AbstractStructBase
{
    /**
     * The PoBFromMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var short
     */
    public $PoBFromMonth;
    /**
     * The PoBFromYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var short
     */
    public $PoBFromYear;
    /**
     * The PoBUntilMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $PoBUntilMonth;
    /**
     * The PoBUntilYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $PoBUntilYear;
    /**
     * Constructor method for PeriodOfBuildDetailsType
     * @uses PeriodOfBuildDetailsType::setPoBFromMonth()
     * @uses PeriodOfBuildDetailsType::setPoBFromYear()
     * @uses PeriodOfBuildDetailsType::setPoBUntilMonth()
     * @uses PeriodOfBuildDetailsType::setPoBUntilYear()
     * @param short $poBFromMonth
     * @param short $poBFromYear
     * @param short $poBUntilMonth
     * @param short $poBUntilYear
     */
    public function __construct($poBFromMonth = null, $poBFromYear = null, $poBUntilMonth = null, $poBUntilYear = null)
    {
        $this
            ->setPoBFromMonth($poBFromMonth)
            ->setPoBFromYear($poBFromYear)
            ->setPoBUntilMonth($poBUntilMonth)
            ->setPoBUntilYear($poBUntilYear);
    }
    /**
     * Get PoBFromMonth value
     * @return short
     */
    public function getPoBFromMonth()
    {
        return $this->PoBFromMonth;
    }
    /**
     * Set PoBFromMonth value
     * @param short $poBFromMonth
     * @return \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     */
    public function setPoBFromMonth($poBFromMonth = null)
    {
        $this->PoBFromMonth = $poBFromMonth;
        return $this;
    }
    /**
     * Get PoBFromYear value
     * @return short
     */
    public function getPoBFromYear()
    {
        return $this->PoBFromYear;
    }
    /**
     * Set PoBFromYear value
     * @param short $poBFromYear
     * @return \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     */
    public function setPoBFromYear($poBFromYear = null)
    {
        $this->PoBFromYear = $poBFromYear;
        return $this;
    }
    /**
     * Get PoBUntilMonth value
     * @return short|null
     */
    public function getPoBUntilMonth()
    {
        return $this->PoBUntilMonth;
    }
    /**
     * Set PoBUntilMonth value
     * @param short $poBUntilMonth
     * @return \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     */
    public function setPoBUntilMonth($poBUntilMonth = null)
    {
        $this->PoBUntilMonth = $poBUntilMonth;
        return $this;
    }
    /**
     * Get PoBUntilYear value
     * @return short|null
     */
    public function getPoBUntilYear()
    {
        return $this->PoBUntilYear;
    }
    /**
     * Set PoBUntilYear value
     * @param short $poBUntilYear
     * @return \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     */
    public function setPoBUntilYear($poBUntilYear = null)
    {
        $this->PoBUntilYear = $poBUntilYear;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
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
