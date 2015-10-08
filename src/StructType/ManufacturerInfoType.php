<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManufacturerInfoType StructType
 * @subpackage Structs
 */
class ManufacturerInfoType extends AbstractStructBase
{
    /**
     * The OrderCode
     * Meta informations extracted from the WSDL
     * - documentation: Original order code of equipment of manufacturer
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OrderCode;
    /**
     * The EquipmentDesc
     * Meta informations extracted from the WSDL
     * - documentation: Original equipment description of manufacturer
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EquipmentDesc;
    /**
     * Constructor method for ManufacturerInfoType
     * @uses ManufacturerInfoType::setOrderCode()
     * @uses ManufacturerInfoType::setEquipmentDesc()
     * @param string $orderCode
     * @param string $equipmentDesc
     */
    public function __construct($orderCode = null, $equipmentDesc = null)
    {
        $this
            ->setOrderCode($orderCode)
            ->setEquipmentDesc($equipmentDesc);
    }
    /**
     * Get OrderCode value
     * @return string
     */
    public function getOrderCode()
    {
        return $this->OrderCode;
    }
    /**
     * Set OrderCode value
     * @param string $orderCode
     * @return \Autovista\VinInternational\StructType\ManufacturerInfoType
     */
    public function setOrderCode($orderCode = null)
    {
        $this->OrderCode = $orderCode;
        return $this;
    }
    /**
     * Get EquipmentDesc value
     * @return string
     */
    public function getEquipmentDesc()
    {
        return $this->EquipmentDesc;
    }
    /**
     * Set EquipmentDesc value
     * @param string $equipmentDesc
     * @return \Autovista\VinInternational\StructType\ManufacturerInfoType
     */
    public function setEquipmentDesc($equipmentDesc = null)
    {
        $this->EquipmentDesc = $equipmentDesc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ManufacturerInfoType
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
