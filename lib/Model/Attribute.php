<?php
/**
 * Attribute
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

use \ArrayAccess;
use \EC\EUAccess\Client\ObjectSerializer;

/**
 * Attribute Class Doc Comment
 *
 * @category Class
 * @package  EC\EUAccess\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Attribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Attribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attribute_id' => 'int',
        'identity_id' => 'int',
        'attribute_key' => 'string',
        'attribute_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attribute_id' => 'int64',
        'identity_id' => 'int64',
        'attribute_key' => null,
        'attribute_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attribute_id' => false,
		'identity_id' => false,
		'attribute_key' => false,
		'attribute_value' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attribute_id' => 'attributeId',
        'identity_id' => 'identityId',
        'attribute_key' => 'attributeKey',
        'attribute_value' => 'attributeValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_id' => 'setAttributeId',
        'identity_id' => 'setIdentityId',
        'attribute_key' => 'setAttributeKey',
        'attribute_value' => 'setAttributeValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_id' => 'getAttributeId',
        'identity_id' => 'getIdentityId',
        'attribute_key' => 'getAttributeKey',
        'attribute_value' => 'getAttributeValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('attribute_id', $data ?? [], null);
        $this->setIfExists('identity_id', $data ?? [], null);
        $this->setIfExists('attribute_key', $data ?? [], null);
        $this->setIfExists('attribute_value', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['attribute_id'] === null) {
            $invalidProperties[] = "'attribute_id' can't be null";
        }
        if ($this->container['identity_id'] === null) {
            $invalidProperties[] = "'identity_id' can't be null";
        }
        if ($this->container['attribute_key'] === null) {
            $invalidProperties[] = "'attribute_key' can't be null";
        }
        if ($this->container['attribute_value'] === null) {
            $invalidProperties[] = "'attribute_value' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets attribute_id
     *
     * @return int
     */
    public function getAttributeId()
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     *
     * @param int $attribute_id The user's attribute id
     *
     * @return self
     */
    public function setAttributeId($attribute_id)
    {
        if (is_null($attribute_id)) {
            throw new \InvalidArgumentException('non-nullable attribute_id cannot be null');
        }
        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets identity_id
     *
     * @return int
     */
    public function getIdentityId()
    {
        return $this->container['identity_id'];
    }

    /**
     * Sets identity_id
     *
     * @param int $identity_id The user identity's id
     *
     * @return self
     */
    public function setIdentityId($identity_id)
    {
        if (is_null($identity_id)) {
            throw new \InvalidArgumentException('non-nullable identity_id cannot be null');
        }
        $this->container['identity_id'] = $identity_id;

        return $this;
    }

    /**
     * Gets attribute_key
     *
     * @return string
     */
    public function getAttributeKey()
    {
        return $this->container['attribute_key'];
    }

    /**
     * Sets attribute_key
     *
     * @param string $attribute_key The business code of the attribute
     *
     * @return self
     */
    public function setAttributeKey($attribute_key)
    {
        if (is_null($attribute_key)) {
            throw new \InvalidArgumentException('non-nullable attribute_key cannot be null');
        }
        $this->container['attribute_key'] = $attribute_key;

        return $this;
    }

    /**
     * Gets attribute_value
     *
     * @return string
     */
    public function getAttributeValue()
    {
        return $this->container['attribute_value'];
    }

    /**
     * Sets attribute_value
     *
     * @param string $attribute_value The value for the attribute
     *
     * @return self
     */
    public function setAttributeValue($attribute_value)
    {
        if (is_null($attribute_value)) {
            throw new \InvalidArgumentException('non-nullable attribute_value cannot be null');
        }
        $this->container['attribute_value'] = $attribute_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


