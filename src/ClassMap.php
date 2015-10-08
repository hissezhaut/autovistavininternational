<?php

namespace Autovista\VinInternational;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'VersionRequestInputType' => 'Autovista\VinInternational\StructType\VersionRequestInputType',
            'VinDecodeInputType' => 'Autovista\VinInternational\StructType\VinDecodeInputType',
            'VinDecodeOutputType' => 'Autovista\VinInternational\StructType\VinDecodeOutputType',
            'VehicleType' => 'Autovista\VinInternational\StructType\VehicleType',
            'ETGsettingType' => 'Autovista\VinInternational\StructType\ETGsettingType',
            'ETGversionInformationType' => 'Autovista\VinInternational\StructType\ETGversionInformationType',
            'ETGdateType' => 'Autovista\VinInternational\StructType\ETGdateType',
            'LoginDataType' => 'Autovista\VinInternational\StructType\LoginDataType',
            'OriginatorType' => 'Autovista\VinInternational\StructType\OriginatorType',
            'FailureType' => 'Autovista\VinInternational\StructType\FailureType',
            'SuccessType' => 'Autovista\VinInternational\StructType\SuccessType',
            'ResponseType' => 'Autovista\VinInternational\StructType\ResponseType',
            'StatisticsType' => 'Autovista\VinInternational\StructType\StatisticsType',
            'ETGStatus' => 'Autovista\VinInternational\StructType\ETGStatus',
            'ETGHeaderType' => 'Autovista\VinInternational\StructType\ETGHeaderType',
            'EquipmentType' => 'Autovista\VinInternational\StructType\EquipmentType',
            'EsacoType' => 'Autovista\VinInternational\StructType\EsacoType',
            'ValuationBasicType' => 'Autovista\VinInternational\StructType\ValuationBasicType',
            'ValuationResponseType' => 'Autovista\VinInternational\StructType\ValuationResponseType',
            'PeriodOfBuildDetailsType' => 'Autovista\VinInternational\StructType\PeriodOfBuildDetailsType',
            'ManufacturerInfoType' => 'Autovista\VinInternational\StructType\ManufacturerInfoType',
            'GetCache' => 'Autovista\VinInternational\StructType\GetCache',
            'GetCacheResponse' => 'Autovista\VinInternational\StructType\GetCacheResponse',
            'GetLog' => 'Autovista\VinInternational\StructType\GetLog',
            'GetLogResponse' => 'Autovista\VinInternational\StructType\GetLogResponse',
            'GetMarkets' => 'Autovista\VinInternational\StructType\GetMarkets',
            'GetMarketsResponse' => 'Autovista\VinInternational\StructType\GetMarketsResponse',
        );
    }
}
