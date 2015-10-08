<?php

namespace Autovista\VinInternational\EnumType;

/**
 * This class stands for ISOlanguageType EnumType
 * @subpackage Enumerations
 */
class ISOlanguageType
{
    /**
     * Constant for value 'BG'
     * @return string 'BG'
     */
    const VALUE_BG = 'BG';
    /**
     * Constant for value 'BR'
     * @return string 'BR'
     */
    const VALUE_BR = 'BR';
    /**
     * Constant for value 'CS'
     * @return string 'CS'
     */
    const VALUE_CS = 'CS';
    /**
     * Constant for value 'CZ'
     * @return string 'CZ'
     */
    const VALUE_CZ = 'CZ';
    /**
     * Constant for value 'DA'
     * @return string 'DA'
     */
    const VALUE_DA = 'DA';
    /**
     * Constant for value 'DE'
     * @return string 'DE'
     */
    const VALUE_DE = 'DE';
    /**
     * Constant for value 'EL'
     * @return string 'EL'
     */
    const VALUE_EL = 'EL';
    /**
     * Constant for value 'EN'
     * @return string 'EN'
     */
    const VALUE_EN = 'EN';
    /**
     * Constant for value 'ES'
     * @return string 'ES'
     */
    const VALUE_ES = 'ES';
    /**
     * Constant for value 'ET'
     * @return string 'ET'
     */
    const VALUE_ET = 'ET';
    /**
     * Constant for value 'FI'
     * @return string 'FI'
     */
    const VALUE_FI = 'FI';
    /**
     * Constant for value 'FR'
     * @return string 'FR'
     */
    const VALUE_FR = 'FR';
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
     * Constant for value 'LT'
     * @return string 'LT'
     */
    const VALUE_LT = 'LT';
    /**
     * Constant for value 'LV'
     * @return string 'LV'
     */
    const VALUE_LV = 'LV';
    /**
     * Constant for value 'NL'
     * @return string 'NL'
     */
    const VALUE_NL = 'NL';
    /**
     * Constant for value 'NO'
     * @return string 'NO'
     */
    const VALUE_NO = 'NO';
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
     * Constant for value 'RO'
     * @return string 'RO'
     */
    const VALUE_RO = 'RO';
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
     * Constant for value 'SL'
     * @return string 'SL'
     */
    const VALUE_SL = 'SL';
    /**
     * Constant for value 'SR'
     * @return string 'SR'
     */
    const VALUE_SR = 'SR';
    /**
     * Constant for value 'SV'
     * @return string 'SV'
     */
    const VALUE_SV = 'SV';
    /**
     * Constant for value 'TR'
     * @return string 'TR'
     */
    const VALUE_TR = 'TR';
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
     * @uses self::VALUE_BG
     * @uses self::VALUE_BR
     * @uses self::VALUE_CS
     * @uses self::VALUE_CZ
     * @uses self::VALUE_DA
     * @uses self::VALUE_DE
     * @uses self::VALUE_EL
     * @uses self::VALUE_EN
     * @uses self::VALUE_ES
     * @uses self::VALUE_ET
     * @uses self::VALUE_FI
     * @uses self::VALUE_FR
     * @uses self::VALUE_HR
     * @uses self::VALUE_HU
     * @uses self::VALUE_IT
     * @uses self::VALUE_LT
     * @uses self::VALUE_LV
     * @uses self::VALUE_NL
     * @uses self::VALUE_NO
     * @uses self::VALUE_PL
     * @uses self::VALUE_PT
     * @uses self::VALUE_RO
     * @uses self::VALUE_RU
     * @uses self::VALUE_SK
     * @uses self::VALUE_SL
     * @uses self::VALUE_SR
     * @uses self::VALUE_SV
     * @uses self::VALUE_TR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BG,
            self::VALUE_BR,
            self::VALUE_CS,
            self::VALUE_CZ,
            self::VALUE_DA,
            self::VALUE_DE,
            self::VALUE_EL,
            self::VALUE_EN,
            self::VALUE_ES,
            self::VALUE_ET,
            self::VALUE_FI,
            self::VALUE_FR,
            self::VALUE_HR,
            self::VALUE_HU,
            self::VALUE_IT,
            self::VALUE_LT,
            self::VALUE_LV,
            self::VALUE_NL,
            self::VALUE_NO,
            self::VALUE_PL,
            self::VALUE_PT,
            self::VALUE_RO,
            self::VALUE_RU,
            self::VALUE_SK,
            self::VALUE_SL,
            self::VALUE_SR,
            self::VALUE_SV,
            self::VALUE_TR,
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
