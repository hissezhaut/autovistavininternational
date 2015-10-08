<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGversionInformationType StructType
 * @subpackage Structs
 */
class ETGversionInformationType extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\VinInternational\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The ServiceVersion
     * Meta informations extracted from the WSDL
     * - documentation: Version of program
     * @var string
     */
    public $ServiceVersion;
    /**
     * The IntelligenceVersion
     * Meta informations extracted from the WSDL
     * - documentation: Version of mapping logic
     * @var string
     */
    public $IntelligenceVersion;
    /**
     * The DataReleaseDate
     * Meta informations extracted from the WSDL
     * - documentation: Version of IDD data
     * - documentation: Common data type for date representation
     * @var \Autovista\VinInternational\StructType\ETGdateType
     */
    public $DataReleaseDate;
    /**
     * Constructor method for ETGversionInformationType
     * @uses ETGversionInformationType::setSettings()
     * @uses ETGversionInformationType::setServiceVersion()
     * @uses ETGversionInformationType::setIntelligenceVersion()
     * @uses ETGversionInformationType::setDataReleaseDate()
     * @param \Autovista\VinInternational\StructType\ETGsettingType $settings
     * @param string $serviceVersion
     * @param string $intelligenceVersion
     * @param \Autovista\VinInternational\StructType\ETGdateType $dataReleaseDate
     */
    public function __construct(\Autovista\VinInternational\StructType\ETGsettingType $settings = null, $serviceVersion = null, $intelligenceVersion = null, \Autovista\VinInternational\StructType\ETGdateType $dataReleaseDate = null)
    {
        $this
            ->setSettings($settings)
            ->setServiceVersion($serviceVersion)
            ->setIntelligenceVersion($intelligenceVersion)
            ->setDataReleaseDate($dataReleaseDate);
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
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType
     */
    public function setSettings(\Autovista\VinInternational\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get ServiceVersion value
     * @return string|null
     */
    public function getServiceVersion()
    {
        return $this->ServiceVersion;
    }
    /**
     * Set ServiceVersion value
     * @param string $serviceVersion
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType
     */
    public function setServiceVersion($serviceVersion = null)
    {
        $this->ServiceVersion = $serviceVersion;
        return $this;
    }
    /**
     * Get IntelligenceVersion value
     * @return string|null
     */
    public function getIntelligenceVersion()
    {
        return $this->IntelligenceVersion;
    }
    /**
     * Set IntelligenceVersion value
     * @param string $intelligenceVersion
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType
     */
    public function setIntelligenceVersion($intelligenceVersion = null)
    {
        $this->IntelligenceVersion = $intelligenceVersion;
        return $this;
    }
    /**
     * Get DataReleaseDate value
     * @return \Autovista\VinInternational\StructType\ETGdateType|null
     */
    public function getDataReleaseDate()
    {
        return $this->DataReleaseDate;
    }
    /**
     * Set DataReleaseDate value
     * @param \Autovista\VinInternational\StructType\ETGdateType $dataReleaseDate
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType
     */
    public function setDataReleaseDate(\Autovista\VinInternational\StructType\ETGdateType $dataReleaseDate = null)
    {
        $this->DataReleaseDate = $dataReleaseDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ETGversionInformationType
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
