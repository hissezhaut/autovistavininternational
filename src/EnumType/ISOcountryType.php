<?php

namespace Autovista\VinInternational\EnumType;

/**
 * This class stands for ISOcountryType EnumType
 * @subpackage Enumerations
 */
class ISOcountryType
{
    /**
     * Constant for value 'AT'
     * @return string 'AT'
     */
    const VALUE_AT = 'AT';
    /**
     * Constant for value 'BE'
     * @return string 'BE'
     */
    const VALUE_BE = 'BE';
    /**
     * Constant for value 'CZ'
     * @return string 'CZ'
     */
    const VALUE_CZ = 'CZ';
    /**
     * Constant for value 'CH'
     * @return string 'CH'
     */
    const VALUE_CH = 'CH';
    /**
     * Constant for value 'DE'
     * @return string 'DE'
     */
    const VALUE_DE = 'DE';
    /**
     * Constant for value 'ES'
     * @return string 'ES'
     */
    const VALUE_ES = 'ES';
    /**
     * Constant for value 'FR'
     * @return string 'FR'
     */
    const VALUE_FR = 'FR';
    /**
     * Constant for value 'GR'
     * @return string 'GR'
     */
    const VALUE_GR = 'GR';
    /**
     * Constant for value 'HR'
     * @return string 'HR'
     */
    const VALUE_HR = 'HR';
    /**
     * Constant for value 'HU'
     * @return string 'HU'
     */
    const VALUE_HU = 'HU';
    /**
     * Constant for value 'IT'
     * @return string 'IT'
     */
    const VALUE_IT = 'IT';
    /**
     * Constant for value 'LU'
     * @return string 'LU'
     */
    const VALUE_LU = 'LU';
    /**
     * Constant for value 'NL'
     * @return string 'NL'
     */
    const VALUE_NL = 'NL';
    /**
     * Constant for value 'PL'
     * @return string 'PL'
     */
    const VALUE_PL = 'PL';
    /**
     * Constant for value 'PT'
     * @return string 'PT'
     */
    const VALUE_PT = 'PT';
    /**
     * Constant for value 'RU'
     * @return string 'RU'
     */
    const VALUE_RU = 'RU';
    /**
     * Constant for value 'SK'
     * @return string 'SK'
     */
    const VALUE_SK = 'SK';
    /**
     * Constant for value 'SI'
     * @return string 'SI'
     */
    const VALUE_SI = 'SI';
    /**
     * Constant for value 'UK'
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_AT
     * @uses self::VALUE_BE
     * @uses self::VALUE_CZ
     * @uses self::VALUE_CH
     * @uses self::VALUE_DE
     * @uses self::VALUE_ES
     * @uses self::VALUE_FR
     * @uses self::VALUE_GR
     * @uses self::VALUE_HR
     * @uses self::VALUE_HU
     * @uses self::VALUE_IT
     * @uses self::VALUE_LU
     * @uses self::VALUE_NL
     * @uses self::VALUE_PL
     * @uses self::VALUE_PT
     * @uses self::VALUE_RU
     * @uses self::VALUE_SK
     * @uses self::VALUE_SI
     * @uses self::VALUE_UK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AT,
            self::VALUE_BE,
            self::VALUE_CZ,
            self::VALUE_CH,
            self::VALUE_DE,
            self::VALUE_ES,
            self::VALUE_FR,
            self::VALUE_GR,
            self::VALUE_HR,
            self::VALUE_HU,
            self::VALUE_IT,
            self::VALUE_LU,
            self::VALUE_NL,
            self::VALUE_PL,
            self::VALUE_PT,
            self::VALUE_RU,
            self::VALUE_SK,
            self::VALUE_SI,
            self::VALUE_UK,
        );
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
