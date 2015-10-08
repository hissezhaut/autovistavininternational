<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VinDecodeOutputType StructType
 * @subpackage Structs
 */
class VinDecodeOutputType extends AbstractStructBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: 0 - No error; 1 - Fatal/configuration error. Admin help required; 2 - Temporary failure like failed DB/third party WS connection. Please retry later or call Admin; 3 - Input data error. Invalid VIN or nothing returned from DB/third
     * party WS for this VIN. Please try other input data or call Admin; 999 - Unknown failure. Please call Richter und Poweleit GmbH;
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var short
     */
    public $StatusCode;
    /**
     * The StatusMsg
     * Meta informations extracted from the WSDL
     * - documentation: description of error
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StatusMsg;
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Settings, which VinSearch used to process this VIN
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\VinInternational\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The VinCode
     * Meta informations extracted from the WSDL
     * - documentation: VIN Code
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: VIN Code
     * - maxLength: 17
     * @var string
     */
    public $VinCode;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Array with vehicles, which are found
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Manufacturer data decoded from the VIN code
     * @var \Autovista\VinInternational\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - documentation: Equipment, found via direct in-country mapping
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\EquipmentType
     */
    public $Equipment;
    /**
     * The Esaco
     * Meta informations extracted from the WSDL
     * - documentation: Esacos, extracted from field "Equipment"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\EsacoType
     */
    public $Esaco;
    /**
     * The DebugOutput
     * Meta informations extracted from the WSDL
     * - documentation: Error tag for later investigtion of problems
     * - minOccurs: 0
     * @var string
     */
    public $DebugOutput;
    /**
     * The extEquipment
     * Meta informations extracted from the WSDL
     * - documentation: Equipment, found via cross-country mapping (reference market). Not always perfect
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\EquipmentType
     */
    public $extEquipment;
    /**
     * The extEsaco
     * Meta informations extracted from the WSDL
     * - documentation: Esacos, extracted from extEquipment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\EsacoType
     */
    public $extEsaco;
    /**
     * The ValuationResponse
     * Meta informations extracted from the WSDL
     * - documentation: Valuation values
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\ValuationResponseType
     */
    public $ValuationResponse;
    /**
     * The DetectedMakeId
     * Meta informations extracted from the WSDL
     * - documentation: EurotaxGlass's MakeId which is DETECTED after decoding the VIN. This is useful for the client to compare a pre-selected Make (ETG data based) with the decoded Make based on the VIN without the need to implement the VIN decode logic
     * by itself.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $DetectedMakeId;
    /**
     * The ManufOriginData
     * Meta informations extracted from the WSDL
     * - documentation: Structure of original Manufacturer Equipment Answer
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\ManufacturerInfoType
     */
    public $ManufOriginData;
    /**
     * The ManufUnknownEquipment
     * Meta informations extracted from the WSDL
     * - documentation: Equipment, which cannot be detected or parsed by VinSearch engine
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\ManufacturerInfoType
     */
    public $ManufUnknownEquipment;
    /**
     * The ProductionDate
     * Meta informations extracted from the WSDL
     * - documentation: Production date of vehicle, if available
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var date
     */
    public $ProductionDate;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: Delivery date, if available If not available, RegistrationDate, SellDate or similar date will be used, if available
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var date
     */
    public $DeliveryDate;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - documentation: Registration Date of Vehicle, used in internal mapping (e.g. VehicleType, EquipmentOptions). If not delivered by Manufacturer, one of DeliveryDate or ProductionDate will be used. It can be changed by the system to the nearest border
     * of Vehicle->PeriodOfBuild Dates if original RegistrationDate was out of the borders.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var date
     */
    public $RegistrationDate;
    /**
     * The ColourDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of colour, returned by Manufacturer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ColourDescription;
    /**
     * The ColourCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ColourCode;
    /**
     * The UpholsteryDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of colour, returned by Manufacturer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UpholsteryDescription;
    /**
     * The UpholsteryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UpholsteryCode;
    /**
     * The TopDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of Top Colour, returned by Manufacturer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TopDescription;
    /**
     * The TopCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TopCode;
    /**
     * The DeliveryCountry
     * Meta informations extracted from the WSDL
     * - documentation: ISO country code of delivery market
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryCountry;
    /**
     * The VOC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VOC;
    /**
     * Constructor method for VinDecodeOutputType
     * @uses VinDecodeOutputType::setStatusCode()
     * @uses VinDecodeOutputType::setStatusMsg()
     * @uses VinDecodeOutputType::setSettings()
     * @uses VinDecodeOutputType::setVinCode()
     * @uses VinDecodeOutputType::setVehicle()
     * @uses VinDecodeOutputType::setEquipment()
     * @uses VinDecodeOutputType::setEsaco()
     * @uses VinDecodeOutputType::setDebugOutput()
     * @uses VinDecodeOutputType::setExtEquipment()
     * @uses VinDecodeOutputType::setExtEsaco()
     * @uses VinDecodeOutputType::setValuationResponse()
     * @uses VinDecodeOutputType::setDetectedMakeId()
     * @uses VinDecodeOutputType::setManufOriginData()
     * @uses VinDecodeOutputType::setManufUnknownEquipment()
     * @uses VinDecodeOutputType::setProductionDate()
     * @uses VinDecodeOutputType::setDeliveryDate()
     * @uses VinDecodeOutputType::setRegistrationDate()
     * @uses VinDecodeOutputType::setColourDescription()
     * @uses VinDecodeOutputType::setColourCode()
     * @uses VinDecodeOutputType::setUpholsteryDescription()
     * @uses VinDecodeOutputType::setUpholsteryCode()
     * @uses VinDecodeOutputType::setTopDescription()
     * @uses VinDecodeOutputType::setTopCode()
     * @uses VinDecodeOutputType::setDeliveryCountry()
     * @uses VinDecodeOutputType::setVOC()
     * @param short $statusCode
     * @param string $statusMsg
     * @param \Autovista\VinInternational\StructType\ETGsettingType $settings
     * @param string $vinCode
     * @param \Autovista\VinInternational\StructType\VehicleType $vehicle
     * @param \Autovista\VinInternational\StructType\EquipmentType $equipment
     * @param \Autovista\VinInternational\StructType\EsacoType $esaco
     * @param string $debugOutput
     * @param \Autovista\VinInternational\StructType\EquipmentType $extEquipment
     * @param \Autovista\VinInternational\StructType\EsacoType $extEsaco
     * @param \Autovista\VinInternational\StructType\ValuationResponseType
     * $valuationResponse
     * @param short $detectedMakeId
     * @param \Autovista\VinInternational\StructType\ManufacturerInfoType
     * $manufOriginData
     * @param \Autovista\VinInternational\StructType\ManufacturerInfoType
     * $manufUnknownEquipment
     * @param date $productionDate
     * @param date $deliveryDate
     * @param date $registrationDate
     * @param string $colourDescription
     * @param string $colourCode
     * @param string $upholsteryDescription
     * @param string $upholsteryCode
     * @param string $topDescription
     * @param string $topCode
     * @param string $deliveryCountry
     * @param string $vOC
     */
    public function __construct($statusCode = null, $statusMsg = null, \Autovista\VinInternational\StructType\ETGsettingType $settings = null, $vinCode = null, \Autovista\VinInternational\StructType\VehicleType $vehicle = null, \Autovista\VinInternational\StructType\EquipmentType $equipment = null, \Autovista\VinInternational\StructType\EsacoType $esaco = null, $debugOutput = null, \Autovista\VinInternational\StructType\EquipmentType $extEquipment = null, \Autovista\VinInternational\StructType\EsacoType $extEsaco = null, \Autovista\VinInternational\StructType\ValuationResponseType $valuationResponse = null, $detectedMakeId = null, \Autovista\VinInternational\StructType\ManufacturerInfoType $manufOriginData = null, \Autovista\VinInternational\StructType\ManufacturerInfoType $manufUnknownEquipment = null, $productionDate = null, $deliveryDate = null, $registrationDate = null, $colourDescription = null, $colourCode = null, $upholsteryDescription = null, $upholsteryCode = null, $topDescription = null, $topCode = null, $deliveryCountry = null, $vOC = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setStatusMsg($statusMsg)
            ->setSettings($settings)
            ->setVinCode($vinCode)
            ->setVehicle($vehicle)
            ->setEquipment($equipment)
            ->setEsaco($esaco)
            ->setDebugOutput($debugOutput)
            ->setExtEquipment($extEquipment)
            ->setExtEsaco($extEsaco)
            ->setValuationResponse($valuationResponse)
            ->setDetectedMakeId($detectedMakeId)
            ->setManufOriginData($manufOriginData)
            ->setManufUnknownEquipment($manufUnknownEquipment)
            ->setProductionDate($productionDate)
            ->setDeliveryDate($deliveryDate)
            ->setRegistrationDate($registrationDate)
            ->setColourDescription($colourDescription)
            ->setColourCode($colourCode)
            ->setUpholsteryDescription($upholsteryDescription)
            ->setUpholsteryCode($upholsteryCode)
            ->setTopDescription($topDescription)
            ->setTopCode($topCode)
            ->setDeliveryCountry($deliveryCountry)
            ->setVOC($vOC);
    }
    /**
     * Get StatusCode value
     * @return short
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param short $statusCode
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setStatusCode($statusCode = null)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusMsg value
     * @return string
     */
    public function getStatusMsg()
    {
        return $this->StatusMsg;
    }
    /**
     * Set StatusMsg value
     * @param string $statusMsg
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setStatusMsg($statusMsg = null)
    {
        $this->StatusMsg = $statusMsg;
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
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setSettings(\Autovista\VinInternational\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VinCode value
     * @return string|null
     */
    public function getVinCode()
    {
        return $this->VinCode;
    }
    /**
     * Set VinCode value
     * @param string $vinCode
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setVinCode($vinCode = null)
    {
        $this->VinCode = $vinCode;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Autovista\VinInternational\StructType\VehicleType|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Autovista\VinInternational\StructType\VehicleType $vehicle
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setVehicle(\Autovista\VinInternational\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get Equipment value
     * @return \Autovista\VinInternational\StructType\EquipmentType|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param \Autovista\VinInternational\StructType\EquipmentType $equipment
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setEquipment(\Autovista\VinInternational\StructType\EquipmentType $equipment = null)
    {
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Get Esaco value
     * @return \Autovista\VinInternational\StructType\EsacoType|null
     */
    public function getEsaco()
    {
        return $this->Esaco;
    }
    /**
     * Set Esaco value
     * @param \Autovista\VinInternational\StructType\EsacoType $esaco
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setEsaco(\Autovista\VinInternational\StructType\EsacoType $esaco = null)
    {
        $this->Esaco = $esaco;
        return $this;
    }
    /**
     * Get DebugOutput value
     * @return string|null
     */
    public function getDebugOutput()
    {
        return $this->DebugOutput;
    }
    /**
     * Set DebugOutput value
     * @param string $debugOutput
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setDebugOutput($debugOutput = null)
    {
        $this->DebugOutput = $debugOutput;
        return $this;
    }
    /**
     * Get extEquipment value
     * @return \Autovista\VinInternational\StructType\EquipmentType|null
     */
    public function getExtEquipment()
    {
        return $this->extEquipment;
    }
    /**
     * Set extEquipment value
     * @param \Autovista\VinInternational\StructType\EquipmentType $extEquipment
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setExtEquipment(\Autovista\VinInternational\StructType\EquipmentType $extEquipment = null)
    {
        $this->extEquipment = $extEquipment;
        return $this;
    }
    /**
     * Get extEsaco value
     * @return \Autovista\VinInternational\StructType\EsacoType|null
     */
    public function getExtEsaco()
    {
        return $this->extEsaco;
    }
    /**
     * Set extEsaco value
     * @param \Autovista\VinInternational\StructType\EsacoType $extEsaco
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setExtEsaco(\Autovista\VinInternational\StructType\EsacoType $extEsaco = null)
    {
        $this->extEsaco = $extEsaco;
        return $this;
    }
    /**
     * Get ValuationResponse value
     * @return \Autovista\VinInternational\StructType\ValuationResponseType|null
     */
    public function getValuationResponse()
    {
        return $this->ValuationResponse;
    }
    /**
     * Set ValuationResponse value
     * @param \Autovista\VinInternational\StructType\ValuationResponseType
     * $valuationResponse
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setValuationResponse(\Autovista\VinInternational\StructType\ValuationResponseType $valuationResponse = null)
    {
        $this->ValuationResponse = $valuationResponse;
        return $this;
    }
    /**
     * Get DetectedMakeId value
     * @return short|null
     */
    public function getDetectedMakeId()
    {
        return $this->DetectedMakeId;
    }
    /**
     * Set DetectedMakeId value
     * @param short $detectedMakeId
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setDetectedMakeId($detectedMakeId = null)
    {
        $this->DetectedMakeId = $detectedMakeId;
        return $this;
    }
    /**
     * Get ManufOriginData value
     * @return \Autovista\VinInternational\StructType\ManufacturerInfoType|null
     */
    public function getManufOriginData()
    {
        return $this->ManufOriginData;
    }
    /**
     * Set ManufOriginData value
     * @param \Autovista\VinInternational\StructType\ManufacturerInfoType
     * $manufOriginData
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setManufOriginData(\Autovista\VinInternational\StructType\ManufacturerInfoType $manufOriginData = null)
    {
        $this->ManufOriginData = $manufOriginData;
        return $this;
    }
    /**
     * Get ManufUnknownEquipment value
     * @return \Autovista\VinInternational\StructType\ManufacturerInfoType|null
     */
    public function getManufUnknownEquipment()
    {
        return $this->ManufUnknownEquipment;
    }
    /**
     * Set ManufUnknownEquipment value
     * @param \Autovista\VinInternational\StructType\ManufacturerInfoType
     * $manufUnknownEquipment
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setManufUnknownEquipment(\Autovista\VinInternational\StructType\ManufacturerInfoType $manufUnknownEquipment = null)
    {
        $this->ManufUnknownEquipment = $manufUnknownEquipment;
        return $this;
    }
    /**
     * Get ProductionDate value
     * @return date|null
     */
    public function getProductionDate()
    {
        return $this->ProductionDate;
    }
    /**
     * Set ProductionDate value
     * @param date $productionDate
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setProductionDate($productionDate = null)
    {
        $this->ProductionDate = $productionDate;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return date|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param date $deliveryDate
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return date|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param date $registrationDate
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setRegistrationDate($registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get ColourDescription value
     * @return string|null
     */
    public function getColourDescription()
    {
        return $this->ColourDescription;
    }
    /**
     * Set ColourDescription value
     * @param string $colourDescription
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setColourDescription($colourDescription = null)
    {
        $this->ColourDescription = $colourDescription;
        return $this;
    }
    /**
     * Get ColourCode value
     * @return string|null
     */
    public function getColourCode()
    {
        return $this->ColourCode;
    }
    /**
     * Set ColourCode value
     * @param string $colourCode
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setColourCode($colourCode = null)
    {
        $this->ColourCode = $colourCode;
        return $this;
    }
    /**
     * Get UpholsteryDescription value
     * @return string|null
     */
    public function getUpholsteryDescription()
    {
        return $this->UpholsteryDescription;
    }
    /**
     * Set UpholsteryDescription value
     * @param string $upholsteryDescription
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setUpholsteryDescription($upholsteryDescription = null)
    {
        $this->UpholsteryDescription = $upholsteryDescription;
        return $this;
    }
    /**
     * Get UpholsteryCode value
     * @return string|null
     */
    public function getUpholsteryCode()
    {
        return $this->UpholsteryCode;
    }
    /**
     * Set UpholsteryCode value
     * @param string $upholsteryCode
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setUpholsteryCode($upholsteryCode = null)
    {
        $this->UpholsteryCode = $upholsteryCode;
        return $this;
    }
    /**
     * Get TopDescription value
     * @return string|null
     */
    public function getTopDescription()
    {
        return $this->TopDescription;
    }
    /**
     * Set TopDescription value
     * @param string $topDescription
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setTopDescription($topDescription = null)
    {
        $this->TopDescription = $topDescription;
        return $this;
    }
    /**
     * Get TopCode value
     * @return string|null
     */
    public function getTopCode()
    {
        return $this->TopCode;
    }
    /**
     * Set TopCode value
     * @param string $topCode
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setTopCode($topCode = null)
    {
        $this->TopCode = $topCode;
        return $this;
    }
    /**
     * Get DeliveryCountry value
     * @return string|null
     */
    public function getDeliveryCountry()
    {
        return $this->DeliveryCountry;
    }
    /**
     * Set DeliveryCountry value
     * @uses \Autovista\VinInternational\EnumType\ISOcountryType::valueIsValid()
     * @uses \Autovista\VinInternational\EnumType\ISOcountryType::getValidValues()
     * @param string $deliveryCountry
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setDeliveryCountry($deliveryCountry = null)
    {
        if (!\Autovista\VinInternational\EnumType\ISOcountryType::valueIsValid($deliveryCountry)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryCountry, implode(', ', \Autovista\VinInternational\EnumType\ISOcountryType::getValidValues())), __LINE__);
        }
        $this->DeliveryCountry = $deliveryCountry;
        return $this;
    }
    /**
     * Get VOC value
     * @return string|null
     */
    public function getVOC()
    {
        return $this->VOC;
    }
    /**
     * Set VOC value
     * @param string $vOC
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
     */
    public function setVOC($vOC = null)
    {
        $this->VOC = $vOC;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\VinDecodeOutputType
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
