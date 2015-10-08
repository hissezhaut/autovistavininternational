<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValuationResponseType StructType
 * @subpackage Structs
 */
class ValuationResponseType extends AbstractStructBase
{
    /**
     * The TradeAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $TradeAmount;
    /**
     * The RetailAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $RetailAmount;
    /**
     * The AverageMileage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $AverageMileage;
    /**
     * Constructor method for ValuationResponseType
     * @uses ValuationResponseType::setTradeAmount()
     * @uses ValuationResponseType::setRetailAmount()
     * @uses ValuationResponseType::setAverageMileage()
     * @param double $tradeAmount
     * @param double $retailAmount
     * @param int $averageMileage
     */
    public function __construct($tradeAmount = null, $retailAmount = null, $averageMileage = null)
    {
        $this
            ->setTradeAmount($tradeAmount)
            ->setRetailAmount($retailAmount)
            ->setAverageMileage($averageMileage);
    }
    /**
     * Get TradeAmount value
     * @return double|null
     */
    public function getTradeAmount()
    {
        return $this->TradeAmount;
    }
    /**
     * Set TradeAmount value
     * @param double $tradeAmount
     * @return \Autovista\VinInternational\StructType\ValuationResponseType
     */
    public function setTradeAmount($tradeAmount = null)
    {
        $this->TradeAmount = $tradeAmount;
        return $this;
    }
    /**
     * Get RetailAmount value
     * @return double|null
     */
    public function getRetailAmount()
    {
        return $this->RetailAmount;
    }
    /**
     * Set RetailAmount value
     * @param double $retailAmount
     * @return \Autovista\VinInternational\StructType\ValuationResponseType
     */
    public function setRetailAmount($retailAmount = null)
    {
        $this->RetailAmount = $retailAmount;
        return $this;
    }
    /**
     * Get AverageMileage value
     * @return int|null
     */
    public function getAverageMileage()
    {
        return $this->AverageMileage;
    }
    /**
     * Set AverageMileage value
     * @param int $averageMileage
     * @return \Autovista\VinInternational\StructType\ValuationResponseType
     */
    public function setAverageMileage($averageMileage = null)
    {
        $this->AverageMileage = $averageMileage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ValuationResponseType
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
