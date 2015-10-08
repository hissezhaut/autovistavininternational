<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLog StructType
 * @subpackage Structs
 */
class GetLog extends AbstractStructBase
{
    /**
     * The in
     * @var string
     */
    public $in;
    /**
     * Constructor method for GetLog
     * @uses GetLog::setIn()
     * @param string $in
     */
    public function __construct($in = null)
    {
        $this
            ->setIn($in);
    }
    /**
     * Get in value
     * @return string|null
     */
    public function getIn()
    {
        return $this->in;
    }
    /**
     * Set in value
     * @param string $in
     * @return \Autovista\VinInternational\StructType\GetLog
     */
    public function setIn($in = null)
    {
        $this->in = $in;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\GetLog
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
