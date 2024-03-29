<?php
/**
 * InlineResponse2002Extras
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAPI
 *
 * <center>                         <img src=\"https://img.cdn.level.travel/assets/logo/vector-58a947fae5d47fa53329be95ff9cff853e8889f70ac61fc2d2b6572a5998330e.svg\">                         <br><br>                         <h1>Партнёрская документация Open API</h1>                       </center>
 *
 * OpenAPI spec version: 3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse2002Extras Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002Extras implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_extras';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'suggested' => 'bool',
        'instant_confirm' => 'bool',
        'early_booking' => 'bool',
        'high_priority' => 'bool',
        'cheap' => 'bool',
        'cheap_type' => 'string',
        'previous_price' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'suggested' => null,
        'instant_confirm' => null,
        'early_booking' => null,
        'high_priority' => null,
        'cheap' => null,
        'cheap_type' => 'nullable',
        'previous_price' => 'nullable'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'suggested' => 'suggested',
        'instant_confirm' => 'instant_confirm',
        'early_booking' => 'early_booking',
        'high_priority' => 'high_priority',
        'cheap' => 'cheap',
        'cheap_type' => 'cheap_type',
        'previous_price' => 'previous_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'suggested' => 'setSuggested',
        'instant_confirm' => 'setInstantConfirm',
        'early_booking' => 'setEarlyBooking',
        'high_priority' => 'setHighPriority',
        'cheap' => 'setCheap',
        'cheap_type' => 'setCheapType',
        'previous_price' => 'setPreviousPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'suggested' => 'getSuggested',
        'instant_confirm' => 'getInstantConfirm',
        'early_booking' => 'getEarlyBooking',
        'high_priority' => 'getHighPriority',
        'cheap' => 'getCheap',
        'cheap_type' => 'getCheapType',
        'previous_price' => 'getPreviousPrice'
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
        return self::$swaggerModelName;
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
        $this->container['suggested'] = isset($data['suggested']) ? $data['suggested'] : null;
        $this->container['instant_confirm'] = isset($data['instant_confirm']) ? $data['instant_confirm'] : null;
        $this->container['early_booking'] = isset($data['early_booking']) ? $data['early_booking'] : null;
        $this->container['high_priority'] = isset($data['high_priority']) ? $data['high_priority'] : null;
        $this->container['cheap'] = isset($data['cheap']) ? $data['cheap'] : null;
        $this->container['cheap_type'] = isset($data['cheap_type']) ? $data['cheap_type'] : null;
        $this->container['previous_price'] = isset($data['previous_price']) ? $data['previous_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets suggested
     *
     * @return bool
     */
    public function getSuggested()
    {
        return $this->container['suggested'];
    }

    /**
     * Sets suggested
     *
     * @param bool $suggested suggested
     *
     * @return $this
     */
    public function setSuggested($suggested)
    {
        $this->container['suggested'] = $suggested;

        return $this;
    }

    /**
     * Gets instant_confirm
     *
     * @return bool
     */
    public function getInstantConfirm()
    {
        return $this->container['instant_confirm'];
    }

    /**
     * Sets instant_confirm
     *
     * @param bool $instant_confirm instant_confirm
     *
     * @return $this
     */
    public function setInstantConfirm($instant_confirm)
    {
        $this->container['instant_confirm'] = $instant_confirm;

        return $this;
    }

    /**
     * Gets early_booking
     *
     * @return bool
     */
    public function getEarlyBooking()
    {
        return $this->container['early_booking'];
    }

    /**
     * Sets early_booking
     *
     * @param bool $early_booking early_booking
     *
     * @return $this
     */
    public function setEarlyBooking($early_booking)
    {
        $this->container['early_booking'] = $early_booking;

        return $this;
    }

    /**
     * Gets high_priority
     *
     * @return bool
     */
    public function getHighPriority()
    {
        return $this->container['high_priority'];
    }

    /**
     * Sets high_priority
     *
     * @param bool $high_priority high_priority
     *
     * @return $this
     */
    public function setHighPriority($high_priority)
    {
        $this->container['high_priority'] = $high_priority;

        return $this;
    }

    /**
     * Gets cheap
     *
     * @return bool
     */
    public function getCheap()
    {
        return $this->container['cheap'];
    }

    /**
     * Sets cheap
     *
     * @param bool $cheap cheap
     *
     * @return $this
     */
    public function setCheap($cheap)
    {
        $this->container['cheap'] = $cheap;

        return $this;
    }

    /**
     * Gets cheap_type
     *
     * @return string
     */
    public function getCheapType()
    {
        return $this->container['cheap_type'];
    }

    /**
     * Sets cheap_type
     *
     * @param string $cheap_type cheap_type
     *
     * @return $this
     */
    public function setCheapType($cheap_type)
    {
        $this->container['cheap_type'] = $cheap_type;

        return $this;
    }

    /**
     * Gets previous_price
     *
     * @return string
     */
    public function getPreviousPrice()
    {
        return $this->container['previous_price'];
    }

    /**
     * Sets previous_price
     *
     * @param string $previous_price previous_price
     *
     * @return $this
     */
    public function setPreviousPrice($previous_price)
    {
        $this->container['previous_price'] = $previous_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
