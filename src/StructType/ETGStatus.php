<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGStatus StructType
 * Meta informations extracted from the WSDL
 * - documentation: Placeholder for general status report. To be filled out before sending a response back to the originator.
 * @subpackage Structs
 */
class ETGStatus extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Top level error or warning code
     * @var int
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Top level error or warning description
     * @var string
     */
    public $Description;
    /**
     * The ExtCode
     * Meta informations extracted from the WSDL
     * - documentation: Extended error or warning code. Can be service specific
     * - minOccurs: 0
     * @var int
     */
    public $ExtCode;
    /**
     * The ExtDescription
     * Meta informations extracted from the WSDL
     * - documentation: Extended error or warning description.
     * - minOccurs: 0
     * @var string
     */
    public $ExtDescription;
    /**
     * Constructor method for ETGStatus
     * @uses ETGStatus::setCode()
     * @uses ETGStatus::setDescription()
     * @uses ETGStatus::setExtCode()
     * @uses ETGStatus::setExtDescription()
     * @param int $code
     * @param string $description
     * @param int $extCode
     * @param string $extDescription
     */
    public function __construct($code = null, $description = null, $extCode = null, $extDescription = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setExtCode($extCode)
            ->setExtDescription($extDescription);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Autovista\VinInternational\StructType\ETGStatus
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Autovista\VinInternational\StructType\ETGStatus
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ExtCode value
     * @return int|null
     */
    public function getExtCode()
    {
        return $this->ExtCode;
    }
    /**
     * Set ExtCode value
     * @param int $extCode
     * @return \Autovista\VinInternational\StructType\ETGStatus
     */
    public function setExtCode($extCode = null)
    {
        $this->ExtCode = $extCode;
        return $this;
    }
    /**
     * Get ExtDescription value
     * @return string|null
     */
    public function getExtDescription()
    {
        return $this->ExtDescription;
    }
    /**
     * Set ExtDescription value
     * @param string $extDescription
     * @return \Autovista\VinInternational\StructType\ETGStatus
     */
    public function setExtDescription($extDescription = null)
    {
        $this->ExtDescription = $extDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ETGStatus
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
