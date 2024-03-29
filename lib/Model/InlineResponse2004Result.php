<?php
/**
 * InlineResponse2004Result
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
 * InlineResponse2004Result Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2004Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_4_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'min_price' => 'float',
        'bonus_count' => 'float',
        'meal_types' => '\Swagger\Client\Model\InlineResponse2004MealTypes[]',
        'room' => '\Swagger\Client\Model\InlineResponse2004Room',
        'offers' => '\Swagger\Client\Model\InlineResponse2004Offers',
        'lt_extras' => '\Swagger\Client\Model\InlineResponse2004LtExtras[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'min_price' => null,
        'bonus_count' => null,
        'meal_types' => null,
        'room' => null,
        'offers' => null,
        'lt_extras' => null
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
        'id' => 'ID',
        'min_price' => 'min_price',
        'bonus_count' => 'bonus_count',
        'meal_types' => 'meal_types',
        'room' => 'room',
        'offers' => 'offers',
        'lt_extras' => 'lt_extras'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'min_price' => 'setMinPrice',
        'bonus_count' => 'setBonusCount',
        'meal_types' => 'setMealTypes',
        'room' => 'setRoom',
        'offers' => 'setOffers',
        'lt_extras' => 'setLtExtras'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'min_price' => 'getMinPrice',
        'bonus_count' => 'getBonusCount',
        'meal_types' => 'getMealTypes',
        'room' => 'getRoom',
        'offers' => 'getOffers',
        'lt_extras' => 'getLtExtras'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['min_price'] = isset($data['min_price']) ? $data['min_price'] : null;
        $this->container['bonus_count'] = isset($data['bonus_count']) ? $data['bonus_count'] : null;
        $this->container['meal_types'] = isset($data['meal_types']) ? $data['meal_types'] : null;
        $this->container['room'] = isset($data['room']) ? $data['room'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['lt_extras'] = isset($data['lt_extras']) ? $data['lt_extras'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets min_price
     *
     * @return float
     */
    public function getMinPrice()
    {
        return $this->container['min_price'];
    }

    /**
     * Sets min_price
     *
     * @param float $min_price min_price
     *
     * @return $this
     */
    public function setMinPrice($min_price)
    {
        $this->container['min_price'] = $min_price;

        return $this;
    }

    /**
     * Gets bonus_count
     *
     * @return float
     */
    public function getBonusCount()
    {
        return $this->container['bonus_count'];
    }

    /**
     * Sets bonus_count
     *
     * @param float $bonus_count bonus_count
     *
     * @return $this
     */
    public function setBonusCount($bonus_count)
    {
        $this->container['bonus_count'] = $bonus_count;

        return $this;
    }

    /**
     * Gets meal_types
     *
     * @return \Swagger\Client\Model\InlineResponse2004MealTypes[]
     */
    public function getMealTypes()
    {
        return $this->container['meal_types'];
    }

    /**
     * Sets meal_types
     *
     * @param \Swagger\Client\Model\InlineResponse2004MealTypes[] $meal_types meal_types
     *
     * @return $this
     */
    public function setMealTypes($meal_types)
    {
        $this->container['meal_types'] = $meal_types;

        return $this;
    }

    /**
     * Gets room
     *
     * @return \Swagger\Client\Model\InlineResponse2004Room
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param \Swagger\Client\Model\InlineResponse2004Room $room room
     *
     * @return $this
     */
    public function setRoom($room)
    {
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \Swagger\Client\Model\InlineResponse2004Offers
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \Swagger\Client\Model\InlineResponse2004Offers $offers offers
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets lt_extras
     *
     * @return \Swagger\Client\Model\InlineResponse2004LtExtras[]
     */
    public function getLtExtras()
    {
        return $this->container['lt_extras'];
    }

    /**
     * Sets lt_extras
     *
     * @param \Swagger\Client\Model\InlineResponse2004LtExtras[] $lt_extras lt_extras
     *
     * @return $this
     */
    public function setLtExtras($lt_extras)
    {
        $this->container['lt_extras'] = $lt_extras;

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
