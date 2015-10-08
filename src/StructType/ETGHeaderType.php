<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGHeaderType StructType
 * @subpackage Structs
 */
class ETGHeaderType extends AbstractStructBase
{
    /**
     * The VersionRequest
     * @var string
     */
    public $VersionRequest;
    /**
     * The Originator
     * @var \Autovista\VinInternational\StructType\OriginatorType
     */
    public $Originator;
    /**
     * The Response
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\VinInternational\StructType\ResponseType
     */
    public $Response;
    /**
     * Constructor method for ETGHeaderType
     * @uses ETGHeaderType::setVersionRequest()
     * @uses ETGHeaderType::setOriginator()
     * @uses ETGHeaderType::setResponse()
     * @param string $versionRequest
     * @param \Autovista\VinInternational\StructType\OriginatorType $originator
     * @param \Autovista\VinInternational\StructType\ResponseType $response
     */
    public function __construct($versionRequest = null, \Autovista\VinInternational\StructType\OriginatorType $originator = null, \Autovista\VinInternational\StructType\ResponseType $response = null)
    {
        $this
            ->setVersionRequest($versionRequest)
            ->setOriginator($originator)
            ->setResponse($response);
    }
    /**
     * Get VersionRequest value
     * @return string|null
     */
    public function getVersionRequest()
    {
        return $this->VersionRequest;
    }
    /**
     * Set VersionRequest value
     * @uses \Autovista\VinInternational\EnumType\VersionType::valueIsValid()
     * @uses \Autovista\VinInternational\EnumType\VersionType::getValidValues()
     * @param string $versionRequest
     * @return \Autovista\VinInternational\StructType\ETGHeaderType
     */
    public function setVersionRequest($versionRequest = null)
    {
        if (!\Autovista\VinInternational\EnumType\VersionType::valueIsValid($versionRequest)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $versionRequest, implode(', ', \Autovista\VinInternational\EnumType\VersionType::getValidValues())), __LINE__);
        }
        $this->VersionRequest = $versionRequest;
        return $this;
    }
    /**
     * Get Originator value
     * @return \Autovista\VinInternational\StructType\OriginatorType|null
     */
    public function getOriginator()
    {
        return $this->Originator;
    }
    /**
     * Set Originator value
     * @param \Autovista\VinInternational\StructType\OriginatorType $originator
     * @return \Autovista\VinInternational\StructType\ETGHeaderType
     */
    public function setOriginator(\Autovista\VinInternational\StructType\OriginatorType $originator = null)
    {
        $this->Originator = $originator;
        return $this;
    }
    /**
     * Get Response value
     * @return \Autovista\VinInternational\StructType\ResponseType|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Autovista\VinInternational\StructType\ResponseType $response
     * @return \Autovista\VinInternational\StructType\ETGHeaderType
     */
    public function setResponse(\Autovista\VinInternational\StructType\ResponseType $response = null)
    {
        $this->Response = $response;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ETGHeaderType
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
