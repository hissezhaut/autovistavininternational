<?php

namespace Autovista\VinInternational\EnumType;

/**
 * This class stands for VersionType EnumType
 * @subpackage Enumerations
 */
class VersionType
{
    /**
     * Constant for value '1.1.0'
     * @return string '1.1.0'
     */
    const VALUE_1_1_0 = '1.1.0';
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
     * @uses self::VALUE_1_1_0
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1_1_0,
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
