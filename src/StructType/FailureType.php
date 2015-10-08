<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FailureType StructType
 * @subpackage Structs
 */
class FailureType extends AbstractStructBase
{
    /**
     * The ETGError
     * Meta informations extracted from the WSDL
     * - documentation: Placeholder for general status report. To be filled out before sending a response back to the originator.
     * @var \Autovista\VinInternational\StructType\ETGStatus
     */
    public $ETGError;
    /**
     * The ETGWarning
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Placeholder for general status report. To be filled out before sending a response back to the originator.
     * @var \Autovista\VinInternational\StructType\ETGStatus
     */
    public $ETGWarning;
    /**
     * Constructor method for FailureType
     * @uses FailureType::setETGError()
     * @uses FailureType::setETGWarning()
     * @param \Autovista\VinInternational\StructType\ETGStatus $eTGError
     * @param \Autovista\VinInternational\StructType\ETGStatus $eTGWarning
     */
    public function __construct(\Autovista\VinInternational\StructType\ETGStatus $eTGError = null, \Autovista\VinInternational\StructType\ETGStatus $eTGWarning = null)
    {
        $this
            ->setETGError($eTGError)
            ->setETGWarning($eTGWarning);
    }
    /**
     * Get ETGError value
     * @return \Autovista\VinInternational\StructType\ETGStatus|null
     */
    public function getETGError()
    {
        return $this->ETGError;
    }
    /**
     * Set ETGError value
     * @param \Autovista\VinInternational\StructType\ETGStatus $eTGError
     * @return \Autovista\VinInternational\StructType\FailureType
     */
    public function setETGError(\Autovista\VinInternational\StructType\ETGStatus $eTGError = null)
    {
        $this->ETGError = $eTGError;
        return $this;
    }
    /**
     * Get ETGWarning value
     * @return \Autovista\VinInternational\StructType\ETGStatus|null
     */
    public function getETGWarning()
    {
        return $this->ETGWarning;
    }
    /**
     * Set ETGWarning value
     * @param \Autovista\VinInternational\StructType\ETGStatus $eTGWarning
     * @return \Autovista\VinInternational\StructType\FailureType
     */
    public function setETGWarning(\Autovista\VinInternational\StructType\ETGStatus $eTGWarning = null)
    {
        $this->ETGWarning = $eTGWarning;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\FailureType
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
