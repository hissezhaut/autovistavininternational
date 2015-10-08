<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValuationBasicType StructType
 * @subpackage Structs
 */
class ValuationBasicType extends AbstractStructBase
{
    /**
     * The FirstRegYear
     * Meta informations extracted from the WSDL
     * - documentation: Registration year of vehicle. required only if valuation should be done
     * @var short
     */
    public $FirstRegYear;
    /**
     * The FirstRegMonth
     * Meta informations extracted from the WSDL
     * - documentation: Registration month of vehicle. required only if valuation should be done
     * @var short
     */
    public $FirstRegMonth;
    /**
     * The KilometersDriven
     * Meta informations extracted from the WSDL
     * - documentation: KM. required only if valuation should be done
     * @var int
     */
    public $KilometersDriven;
    /**
     * Constructor method for ValuationBasicType
     * @uses ValuationBasicType::setFirstRegYear()
     * @uses ValuationBasicType::setFirstRegMonth()
     * @uses ValuationBasicType::setKilometersDriven()
     * @param short $firstRegYear
     * @param short $firstRegMonth
     * @param int $kilometersDriven
     */
    public function __construct($firstRegYear = null, $firstRegMonth = null, $kilometersDriven = null)
    {
        $this
            ->setFirstRegYear($firstRegYear)
            ->setFirstRegMonth($firstRegMonth)
            ->setKilometersDriven($kilometersDriven);
    }
    /**
     * Get FirstRegYear value
     * @return short|null
     */
    public function getFirstRegYear()
    {
        return $this->FirstRegYear;
    }
    /**
     * Set FirstRegYear value
     * @param short $firstRegYear
     * @return \Autovista\VinInternational\StructType\ValuationBasicType
     */
    public function setFirstRegYear($firstRegYear = null)
    {
        $this->FirstRegYear = $firstRegYear;
        return $this;
    }
    /**
     * Get FirstRegMonth value
     * @return short|null
     */
    public function getFirstRegMonth()
    {
        return $this->FirstRegMonth;
    }
    /**
     * Set FirstRegMonth value
     * @param short $firstRegMonth
     * @return \Autovista\VinInternational\StructType\ValuationBasicType
     */
    public function setFirstRegMonth($firstRegMonth = null)
    {
        $this->FirstRegMonth = $firstRegMonth;
        return $this;
    }
    /**
     * Get KilometersDriven value
     * @return int|null
     */
    public function getKilometersDriven()
    {
        return $this->KilometersDriven;
    }
    /**
     * Set KilometersDriven value
     * @param int $kilometersDriven
     * @return \Autovista\VinInternational\StructType\ValuationBasicType
     */
    public function setKilometersDriven($kilometersDriven = null)
    {
        $this->KilometersDriven = $kilometersDriven;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ValuationBasicType
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
