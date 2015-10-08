<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VinDecodeInputType StructType
 * @subpackage Structs
 */
class VinDecodeInputType extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Required field with request settings
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\VinInternational\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The VinCode
     * Meta informations extracted from the WSDL
     * - documentation: VIN to process
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: VIN Code
     * - maxLength: 17
     * @var string
     */
    public $VinCode;
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
     * The TypeETGCode
     * Meta informations extracted from the WSDL
     * - documentation: This field has to be used in a second request using the same VIN to specify one vehicle out of a former resulting list of vehicles (SchwackeCode, NatCode, ETG Code)
     * - minOccurs: 0
     * @var string
     */
    public $TypeETGCode;
    /**
     * The ExtendedOutput
     * Meta informations extracted from the WSDL
     * - documentation: true = output of webservice will include all defined technical fields of vehicle and option descriptions; false = output contains only the minimum of defined fields
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ExtendedOutput;
    /**
     * The InputStream1
     * Meta informations extracted from the WSDL
     * - documentation: Optional input stream which will be used instead of calling the official manufacturer VIN webservice. Format must be identical to output of manufacturer VIN webservice. Empty in normal case
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InputStream1;
    /**
     * The InputStream2
     * Meta informations extracted from the WSDL
     * - documentation: the same as InputStream1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InputStream2;
    /**
     * The ServiceCode
     * Meta informations extracted from the WSDL
     * - documentation: change behavoiur of weservice itself or only logging part. Request's variable "ServiceId" should allow setting ServiceCode SERVICECODE_ERROR = 1; // bad failures, exceptions and so on SERVICECODE_WARNING = 2; // not very bad
     * failures, that can change result SERVICECODE_NOCACHE = 32; // do not use local cache SERVICECODE_NOREQUEST = 64; // do not request remote servers SERVICECODE_DEBUG_INOUT = 128; // show incoming request / outgoing result SERVICECODE_DEBUG_FUNC1 = 256;
     * // show only main functions call/return SERVICECODE_DEBUG_FUNC2 = 512; // show only middle functions call/return SERVICECODE_DEBUG_FUNC3 = 1024; // show only small functions call/return SERVICECODE_DEBUG_NET = 2048; // network/disk/cache IO
     * SERVICECODE_DEBUG_SQL = 4096; // SQL queries SERVICECODE_INFO1 = 8192; // Program workflow (less debug) SERVICECODE_INFO2 = 16384; // Program workflow (more debug) SERVICECODE_INFO3 = 32768; // Program workflow (more debug)
     * - minOccurs: 0
     * @var int
     */
    public $ServiceCode;
    /**
     * The ValuationData
     * Meta informations extracted from the WSDL
     * - documentation: Valuation of vehicle can be done by filling this structure. If it's empty - no valuation will be proceed
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\ValuationBasicType
     */
    public $ValuationData;
    /**
     * The ExpectedMakeId
     * Meta informations extracted from the WSDL
     * - documentation: EurotaxGlass's MakeId which is the EXPECTED value of the caller after decoding the VIN. The webservice will only continue if the ExpectedMakeId is equal to the decoded MakeId based on the VIN decoder phase 1, otherwise it returns
     * failure. This is important if you want to ensure that no call to the manufacturer is made until the VIN is part of the EXPECTED Manufacturer/MakeId. This feature is also useful for the client to compare a pre-selected Make (ETG based) with the
     * decoded Make based on the VIN without the need to implement the VIN decode logic (step 1) by itself.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $ExpectedMakeId;
    /**
     * The EQBehavior
     * Meta informations extracted from the WSDL
     * - documentation: Change the internal equipment behavior, if there is more then one clearly result this flag decides which result to use. 0 = Behavior as today, no change in equipment logic. 1 = Return the cheapest equipment. 2 = Return the expensive
     * equipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $EQBehavior;
    /**
     * Constructor method for VinDecodeInputType
     * @uses VinDecodeInputType::setSettings()
     * @uses VinDecodeInputType::setVinCode()
     * @uses VinDecodeInputType::setServiceId()
     * @uses VinDecodeInputType::setTypeETGCode()
     * @uses VinDecodeInputType::setExtendedOutput()
     * @uses VinDecodeInputType::setInputStream1()
     * @uses VinDecodeInputType::setInputStream2()
     * @uses VinDecodeInputType::setServiceCode()
     * @uses VinDecodeInputType::setValuationData()
     * @uses VinDecodeInputType::setExpectedMakeId()
     * @uses VinDecodeInputType::setEQBehavior()
     * @param \Autovista\VinInternational\StructType\ETGsettingType $settings
     * @param string $vinCode
     * @param string $serviceId
     * @param string $typeETGCode
     * @param boolean $extendedOutput
     * @param string $inputStream1
     * @param string $inputStream2
     * @param int $serviceCode
     * @param \Autovista\VinInternational\StructType\ValuationBasicType $valuationData
     * @param short $expectedMakeId
     * @param short $eQBehavior
     */
    public function __construct(\Autovista\VinInternational\StructType\ETGsettingType $settings = null, $vinCode = null, $serviceId = null, $typeETGCode = null, $extendedOutput = null, $inputStream1 = null, $inputStream2 = null, $serviceCode = null, \Autovista\VinInternational\StructType\ValuationBasicType $valuationData = null, $expectedMakeId = null, $eQBehavior = null)
    {
        $this
            ->setSettings($settings)
            ->setVinCode($vinCode)
            ->setServiceId($serviceId)
            ->setTypeETGCode($typeETGCode)
            ->setExtendedOutput($extendedOutput)
            ->setInputStream1($inputStream1)
            ->setInputStream2($inputStream2)
            ->setServiceCode($serviceCode)
            ->setValuationData($valuationData)
            ->setExpectedMakeId($expectedMakeId)
            ->setEQBehavior($eQBehavior);
    }
    /**
     * Get Settings value
     * @return \Autovista\VinInternational\StructType\ETGsettingType
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\VinInternational\StructType\ETGsettingType $settings
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setSettings(\Autovista\VinInternational\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VinCode value
     * @return string
     */
    public function getVinCode()
    {
        return $this->VinCode;
    }
    /**
     * Set VinCode value
     * @param string $vinCode
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setVinCode($vinCode = null)
    {
        $this->VinCode = $vinCode;
        return $this;
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
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setServiceId($serviceId = null)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get TypeETGCode value
     * @return string|null
     */
    public function getTypeETGCode()
    {
        return $this->TypeETGCode;
    }
    /**
     * Set TypeETGCode value
     * @param string $typeETGCode
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setTypeETGCode($typeETGCode = null)
    {
        $this->TypeETGCode = $typeETGCode;
        return $this;
    }
    /**
     * Get ExtendedOutput value
     * @return boolean|null
     */
    public function getExtendedOutput()
    {
        return $this->ExtendedOutput;
    }
    /**
     * Set ExtendedOutput value
     * @param boolean $extendedOutput
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setExtendedOutput($extendedOutput = null)
    {
        $this->ExtendedOutput = $extendedOutput;
        return $this;
    }
    /**
     * Get InputStream1 value
     * @return string|null
     */
    public function getInputStream1()
    {
        return $this->InputStream1;
    }
    /**
     * Set InputStream1 value
     * @param string $inputStream1
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setInputStream1($inputStream1 = null)
    {
        $this->InputStream1 = $inputStream1;
        return $this;
    }
    /**
     * Get InputStream2 value
     * @return string|null
     */
    public function getInputStream2()
    {
        return $this->InputStream2;
    }
    /**
     * Set InputStream2 value
     * @param string $inputStream2
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setInputStream2($inputStream2 = null)
    {
        $this->InputStream2 = $inputStream2;
        return $this;
    }
    /**
     * Get ServiceCode value
     * @return int|null
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }
    /**
     * Set ServiceCode value
     * @param int $serviceCode
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setServiceCode($serviceCode = null)
    {
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    /**
     * Get ValuationData value
     * @return \Autovista\VinInternational\StructType\ValuationBasicType|null
     */
    public function getValuationData()
    {
        return $this->ValuationData;
    }
    /**
     * Set ValuationData value
     * @param \Autovista\VinInternational\StructType\ValuationBasicType $valuationData
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setValuationData(\Autovista\VinInternational\StructType\ValuationBasicType $valuationData = null)
    {
        $this->ValuationData = $valuationData;
        return $this;
    }
    /**
     * Get ExpectedMakeId value
     * @return short|null
     */
    public function getExpectedMakeId()
    {
        return $this->ExpectedMakeId;
    }
    /**
     * Set ExpectedMakeId value
     * @param short $expectedMakeId
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setExpectedMakeId($expectedMakeId = null)
    {
        $this->ExpectedMakeId = $expectedMakeId;
        return $this;
    }
    /**
     * Get EQBehavior value
     * @return short|null
     */
    public function getEQBehavior()
    {
        return $this->EQBehavior;
    }
    /**
     * Set EQBehavior value
     * @param short $eQBehavior
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
     */
    public function setEQBehavior($eQBehavior = null)
    {
        $this->EQBehavior = $eQBehavior;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\VinDecodeInputType
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
