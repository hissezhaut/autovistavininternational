<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EsacoType StructType
 * @subpackage Structs
 */
class EsacoType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Esaco code
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string
     */
    public $Code;
    /**
     * The Desc
     * Meta informations extracted from the WSDL
     * - documentation: Esaco Description
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Desc;
    /**
     * Constructor method for EsacoType
     * @uses EsacoType::setCode()
     * @uses EsacoType::setDesc()
     * @param string $code
     * @param string $desc
     */
    public function __construct($code = null, $desc = null)
    {
        $this
            ->setCode($code)
            ->setDesc($desc);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Autovista\VinInternational\StructType\EsacoType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Desc value
     * @return string|null
     */
    public function getDesc()
    {
        return $this->Desc;
    }
    /**
     * Set Desc value
     * @param string $desc
     * @return \Autovista\VinInternational\StructType\EsacoType
     */
    public function setDesc($desc = null)
    {
        $this->Desc = $desc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\EsacoType
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
