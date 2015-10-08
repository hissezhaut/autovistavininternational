<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Manufacturer data decoded from the VIN code
 * @subpackage Structs
 */
class VehicleType extends AbstractStructBase
{
    /**
     * The TypeETGCode
     * Meta informations extracted from the WSDL
     * - documentation: ETG Code (SchwackeCode, NatCode) of found vehicle
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeETGCode;
    /**
     * The VehType
     * Meta informations extracted from the WSDL
     * - documentation: ETG Vehicle Type Code of found vehicle
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VehType;
    /**
     * The MakeDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of manufacturer
     * - minOccurs: 0
     * @var string
     */
    public $MakeDescription;
    /**
     * The ModelDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of model
     * - minOccurs: 0
     * @var string
     */
    public $ModelDescription;
    /**
     * The TypeDescription
     * Meta informations extracted from the WSDL
     * - documentation: description of type of model
     * - minOccurs: 0
     * @var string
     */
    public $TypeDescription;
    /**
     * The EngineSize
     * Meta informations extracted from the WSDL
     * - documentation: engine size in ccm
     * - minOccurs: 0
     * @var short
     */
    public $EngineSize;
    /**
     * The EnginePS
     * Meta informations extracted from the WSDL
     * - documentation: engine power in PS
     * - minOccurs: 0
     * @var short
     */
    public $EnginePS;
    /**
     * The EngineKW
     * Meta informations extracted from the WSDL
     * - documentation: engine power in KW
     * - minOccurs: 0
     * @var short
     */
    public $EngineKW;
    /**
     * The PeriodOfBuild
     * Meta informations extracted from the WSDL
     * - documentation: when this model were produced
     * - minOccurs: 0
     * @var string
     */
    public $PeriodOfBuild;
    /**
     * The FuelType
     * Meta informations extracted from the WSDL
     * - documentation: Fuel type
     * - minOccurs: 0
     * @var string
     */
    public $FuelType;
    /**
     * The BodyType
     * Meta informations extracted from the WSDL
     * - documentation: body type (limousine, cabrio, etc..)
     * - minOccurs: 0
     * @var string
     */
    public $BodyType;
    /**
     * The NumberDoors
     * Meta informations extracted from the WSDL
     * - documentation: number of doors
     * - minOccurs: 0
     * @var short
     */
    public $NumberDoors;
    /**
     * The NumberGears
     * Meta informations extracted from the WSDL
     * - documentation: number of gears
     * - minOccurs: 0
     * @var short
     */
    public $NumberGears;
    /**
     * The GearType
     * Meta informations extracted from the WSDL
     * - documentation: Gearbox type (automatic, manual)
     * - minOccurs: 0
     * @var string
     */
    public $GearType;
    /**
     * The PeriodOfBuildDetails
     * Meta informations extracted from the WSDL
     * - documentation: The Period of build using dedicated fields for month and year instead of string (see also "PeriodOfBuild"). If PoBUntilMonth and -Year is missing, the vehicle is still build without a actual limitation from manufacturer.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     */
    public $PeriodOfBuildDetails;
    /**
     * The PriceNetto
     * Meta informations extracted from the WSDL
     * - documentation: Price of new vehicle in the production time
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $PriceNetto;
    /**
     * The PriceBrutto
     * Meta informations extracted from the WSDL
     * - documentation: Price of new vehicle in the production time
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $PriceBrutto;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setTypeETGCode()
     * @uses VehicleType::setVehType()
     * @uses VehicleType::setMakeDescription()
     * @uses VehicleType::setModelDescription()
     * @uses VehicleType::setTypeDescription()
     * @uses VehicleType::setEngineSize()
     * @uses VehicleType::setEnginePS()
     * @uses VehicleType::setEngineKW()
     * @uses VehicleType::setPeriodOfBuild()
     * @uses VehicleType::setFuelType()
     * @uses VehicleType::setBodyType()
     * @uses VehicleType::setNumberDoors()
     * @uses VehicleType::setNumberGears()
     * @uses VehicleType::setGearType()
     * @uses VehicleType::setPeriodOfBuildDetails()
     * @uses VehicleType::setPriceNetto()
     * @uses VehicleType::setPriceBrutto()
     * @param string $typeETGCode
     * @param string $vehType
     * @param string $makeDescription
     * @param string $modelDescription
     * @param string $typeDescription
     * @param short $engineSize
     * @param short $enginePS
     * @param short $engineKW
     * @param string $periodOfBuild
     * @param string $fuelType
     * @param string $bodyType
     * @param short $numberDoors
     * @param short $numberGears
     * @param string $gearType
     * @param \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     * $periodOfBuildDetails
     * @param decimal $priceNetto
     * @param decimal $priceBrutto
     */
    public function __construct($typeETGCode = null, $vehType = null, $makeDescription = null, $modelDescription = null, $typeDescription = null, $engineSize = null, $enginePS = null, $engineKW = null, $periodOfBuild = null, $fuelType = null, $bodyType = null, $numberDoors = null, $numberGears = null, $gearType = null, \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType $periodOfBuildDetails = null, $priceNetto = null, $priceBrutto = null)
    {
        $this
            ->setTypeETGCode($typeETGCode)
            ->setVehType($vehType)
            ->setMakeDescription($makeDescription)
            ->setModelDescription($modelDescription)
            ->setTypeDescription($typeDescription)
            ->setEngineSize($engineSize)
            ->setEnginePS($enginePS)
            ->setEngineKW($engineKW)
            ->setPeriodOfBuild($periodOfBuild)
            ->setFuelType($fuelType)
            ->setBodyType($bodyType)
            ->setNumberDoors($numberDoors)
            ->setNumberGears($numberGears)
            ->setGearType($gearType)
            ->setPeriodOfBuildDetails($periodOfBuildDetails)
            ->setPriceNetto($priceNetto)
            ->setPriceBrutto($priceBrutto);
    }
    /**
     * Get TypeETGCode value
     * @return string
     */
    public function getTypeETGCode()
    {
        return $this->TypeETGCode;
    }
    /**
     * Set TypeETGCode value
     * @param string $typeETGCode
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setTypeETGCode($typeETGCode = null)
    {
        $this->TypeETGCode = $typeETGCode;
        return $this;
    }
    /**
     * Get VehType value
     * @return string|null
     */
    public function getVehType()
    {
        return $this->VehType;
    }
    /**
     * Set VehType value
     * @param string $vehType
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setVehType($vehType = null)
    {
        $this->VehType = $vehType;
        return $this;
    }
    /**
     * Get MakeDescription value
     * @return string|null
     */
    public function getMakeDescription()
    {
        return $this->MakeDescription;
    }
    /**
     * Set MakeDescription value
     * @param string $makeDescription
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setMakeDescription($makeDescription = null)
    {
        $this->MakeDescription = $makeDescription;
        return $this;
    }
    /**
     * Get ModelDescription value
     * @return string|null
     */
    public function getModelDescription()
    {
        return $this->ModelDescription;
    }
    /**
     * Set ModelDescription value
     * @param string $modelDescription
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setModelDescription($modelDescription = null)
    {
        $this->ModelDescription = $modelDescription;
        return $this;
    }
    /**
     * Get TypeDescription value
     * @return string|null
     */
    public function getTypeDescription()
    {
        return $this->TypeDescription;
    }
    /**
     * Set TypeDescription value
     * @param string $typeDescription
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setTypeDescription($typeDescription = null)
    {
        $this->TypeDescription = $typeDescription;
        return $this;
    }
    /**
     * Get EngineSize value
     * @return short|null
     */
    public function getEngineSize()
    {
        return $this->EngineSize;
    }
    /**
     * Set EngineSize value
     * @param short $engineSize
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setEngineSize($engineSize = null)
    {
        $this->EngineSize = $engineSize;
        return $this;
    }
    /**
     * Get EnginePS value
     * @return short|null
     */
    public function getEnginePS()
    {
        return $this->EnginePS;
    }
    /**
     * Set EnginePS value
     * @param short $enginePS
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setEnginePS($enginePS = null)
    {
        $this->EnginePS = $enginePS;
        return $this;
    }
    /**
     * Get EngineKW value
     * @return short|null
     */
    public function getEngineKW()
    {
        return $this->EngineKW;
    }
    /**
     * Set EngineKW value
     * @param short $engineKW
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setEngineKW($engineKW = null)
    {
        $this->EngineKW = $engineKW;
        return $this;
    }
    /**
     * Get PeriodOfBuild value
     * @return string|null
     */
    public function getPeriodOfBuild()
    {
        return $this->PeriodOfBuild;
    }
    /**
     * Set PeriodOfBuild value
     * @param string $periodOfBuild
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setPeriodOfBuild($periodOfBuild = null)
    {
        $this->PeriodOfBuild = $periodOfBuild;
        return $this;
    }
    /**
     * Get FuelType value
     * @return string|null
     */
    public function getFuelType()
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @param string $fuelType
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setFuelType($fuelType = null)
    {
        $this->FuelType = $fuelType;
        return $this;
    }
    /**
     * Get BodyType value
     * @return string|null
     */
    public function getBodyType()
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @param string $bodyType
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setBodyType($bodyType = null)
    {
        $this->BodyType = $bodyType;
        return $this;
    }
    /**
     * Get NumberDoors value
     * @return short|null
     */
    public function getNumberDoors()
    {
        return $this->NumberDoors;
    }
    /**
     * Set NumberDoors value
     * @param short $numberDoors
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setNumberDoors($numberDoors = null)
    {
        $this->NumberDoors = $numberDoors;
        return $this;
    }
    /**
     * Get NumberGears value
     * @return short|null
     */
    public function getNumberGears()
    {
        return $this->NumberGears;
    }
    /**
     * Set NumberGears value
     * @param short $numberGears
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setNumberGears($numberGears = null)
    {
        $this->NumberGears = $numberGears;
        return $this;
    }
    /**
     * Get GearType value
     * @return string|null
     */
    public function getGearType()
    {
        return $this->GearType;
    }
    /**
     * Set GearType value
     * @param string $gearType
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setGearType($gearType = null)
    {
        $this->GearType = $gearType;
        return $this;
    }
    /**
     * Get PeriodOfBuildDetails value
     * @return \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType|null
     */
    public function getPeriodOfBuildDetails()
    {
        return $this->PeriodOfBuildDetails;
    }
    /**
     * Set PeriodOfBuildDetails value
     * @param \Autovista\VinInternational\StructType\PeriodOfBuildDetailsType
     * $periodOfBuildDetails
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setPeriodOfBuildDetails(\Autovista\VinInternational\StructType\PeriodOfBuildDetailsType $periodOfBuildDetails = null)
    {
        $this->PeriodOfBuildDetails = $periodOfBuildDetails;
        return $this;
    }
    /**
     * Get PriceNetto value
     * @return decimal|null
     */
    public function getPriceNetto()
    {
        return $this->PriceNetto;
    }
    /**
     * Set PriceNetto value
     * @param decimal $priceNetto
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setPriceNetto($priceNetto = null)
    {
        $this->PriceNetto = $priceNetto;
        return $this;
    }
    /**
     * Get PriceBrutto value
     * @return decimal|null
     */
    public function getPriceBrutto()
    {
        return $this->PriceBrutto;
    }
    /**
     * Set PriceBrutto value
     * @param decimal $priceBrutto
     * @return \Autovista\VinInternational\StructType\VehicleType
     */
    public function setPriceBrutto($priceBrutto = null)
    {
        $this->PriceBrutto = $priceBrutto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\VehicleType
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
