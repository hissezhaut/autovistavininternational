<?php

namespace Autovista\VinInternational\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseType StructType
 * @subpackage Structs
 */
class ResponseType extends AbstractStructBase
{
    /**
     * The VersionResponse
     * Meta informations extracted from the WSDL
     * - documentation: Version of global ETG services specification used to construct the response
     * - minOccurs: 0
     * @var string
     */
    public $VersionResponse;
    /**
     * The Statistics
     * @var \Autovista\VinInternational\StructType\StatisticsType
     */
    public $Statistics;
    /**
     * The Failure
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the processing of this request has failed, and provides error and optional warning messages that arose during the processing.
     * @var \Autovista\VinInternational\StructType\FailureType
     */
    public $Failure;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the processing of this request has succeeded; may provide non-fatal warning messages that arose during the processing.
     * @var \Autovista\VinInternational\StructType\SuccessType
     */
    public $Success;
    /**
     * Constructor method for ResponseType
     * @uses ResponseType::setVersionResponse()
     * @uses ResponseType::setStatistics()
     * @uses ResponseType::setFailure()
     * @uses ResponseType::setSuccess()
     * @param string $versionResponse
     * @param \Autovista\VinInternational\StructType\StatisticsType $statistics
     * @param \Autovista\VinInternational\StructType\FailureType $failure
     * @param \Autovista\VinInternational\StructType\SuccessType $success
     */
    public function __construct($versionResponse = null, \Autovista\VinInternational\StructType\StatisticsType $statistics = null, \Autovista\VinInternational\StructType\FailureType $failure = null, \Autovista\VinInternational\StructType\SuccessType $success = null)
    {
        $this
            ->setVersionResponse($versionResponse)
            ->setStatistics($statistics)
            ->setFailure($failure)
            ->setSuccess($success);
    }
    /**
     * Get VersionResponse value
     * @return string|null
     */
    public function getVersionResponse()
    {
        return $this->VersionResponse;
    }
    /**
     * Set VersionResponse value
     * @param string $versionResponse
     * @return \Autovista\VinInternational\StructType\ResponseType
     */
    public function setVersionResponse($versionResponse = null)
    {
        $this->VersionResponse = $versionResponse;
        return $this;
    }
    /**
     * Get Statistics value
     * @return \Autovista\VinInternational\StructType\StatisticsType|null
     */
    public function getStatistics()
    {
        return $this->Statistics;
    }
    /**
     * Set Statistics value
     * @param \Autovista\VinInternational\StructType\StatisticsType $statistics
     * @return \Autovista\VinInternational\StructType\ResponseType
     */
    public function setStatistics(\Autovista\VinInternational\StructType\StatisticsType $statistics = null)
    {
        $this->Statistics = $statistics;
        return $this;
    }
    /**
     * Get Failure value
     * @return \Autovista\VinInternational\StructType\FailureType|null
     */
    public function getFailure()
    {
        return $this->Failure;
    }
    /**
     * Set Failure value
     * @param \Autovista\VinInternational\StructType\FailureType $failure
     * @return \Autovista\VinInternational\StructType\ResponseType
     */
    public function setFailure(\Autovista\VinInternational\StructType\FailureType $failure = null)
    {
        $this->Failure = $failure;
        return $this;
    }
    /**
     * Get Success value
     * @return \Autovista\VinInternational\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Autovista\VinInternational\StructType\SuccessType $success
     * @return \Autovista\VinInternational\StructType\ResponseType
     */
    public function setSuccess(\Autovista\VinInternational\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinInternational\StructType\ResponseType
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
