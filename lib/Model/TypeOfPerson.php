<?php
/**
 * TypeOfPerson
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  EC\EUAccess\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EU Access Users API
 *
 * EU Access Users API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: DIGIT-EU-ACCESS@ec.europa.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EC\EUAccess\Client\Model;
use \EC\EUAccess\Client\ObjectSerializer;

/**
 * TypeOfPerson Class Doc Comment
 *
 * @category Class
 * @description The user&#39;s type of person:   * &#x60;NP&#x60; - natural person   * &#x60;LP&#x60; - legal person   * &#x60;AOP&#x60; - association of persons
 * @package  EC\EUAccess\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TypeOfPerson
{
    /**
     * Possible values of this enum
     */
    public const NP = 'NP';

    public const LP = 'LP';

    public const AOP = 'AOP';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NP,
            self::LP,
            self::AOP
        ];
    }
}


