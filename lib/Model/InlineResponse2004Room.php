<?php
/**
 * InlineResponse2004Room
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
 * InlineResponse2004Room Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2004Room implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_4_room';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name_ru' => 'string',
        'name_en' => 'string',
        'accommodation' => 'string',
        'area' => 'float',
        'description' => 'string',
        'view' => 'string',
        'facilities' => 'string',
        'images' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name_ru' => null,
        'name_en' => null,
        'accommodation' => null,
        'area' => null,
        'description' => null,
        'view' => null,
        'facilities' => 'nullable',
        'images' => 'nullable'
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
        'name_ru' => 'name_ru',
        'name_en' => 'name_en',
        'accommodation' => 'accommodation',
        'area' => 'area',
        'description' => 'description',
        'view' => 'view',
        'facilities' => 'facilities',
        'images' => 'images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name_ru' => 'setNameRu',
        'name_en' => 'setNameEn',
        'accommodation' => 'setAccommodation',
        'area' => 'setArea',
        'description' => 'setDescription',
        'view' => 'setView',
        'facilities' => 'setFacilities',
        'images' => 'setImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name_ru' => 'getNameRu',
        'name_en' => 'getNameEn',
        'accommodation' => 'getAccommodation',
        'area' => 'getArea',
        'description' => 'getDescription',
        'view' => 'getView',
        'facilities' => 'getFacilities',
        'images' => 'getImages'
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
        $this->container['name_ru'] = isset($data['name_ru']) ? $data['name_ru'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['accommodation'] = isset($data['accommodation']) ? $data['accommodation'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['facilities'] = isset($data['facilities']) ? $data['facilities'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
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
     * Gets name_ru
     *
     * @return string
     */
    public function getNameRu()
    {
        return $this->container['name_ru'];
    }

    /**
     * Sets name_ru
     *
     * @param string $name_ru name_ru
     *
     * @return $this
     */
    public function setNameRu($name_ru)
    {
        $this->container['name_ru'] = $name_ru;

        return $this;
    }

    /**
     * Gets name_en
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->container['name_en'];
    }

    /**
     * Sets name_en
     *
     * @param string $name_en name_en
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {
        $this->container['name_en'] = $name_en;

        return $this;
    }

    /**
     * Gets accommodation
     *
     * @return string
     */
    public function getAccommodation()
    {
        return $this->container['accommodation'];
    }

    /**
     * Sets accommodation
     *
     * @param string $accommodation accommodation
     *
     * @return $this
     */
    public function setAccommodation($accommodation)
    {
        $this->container['accommodation'] = $accommodation;

        return $this;
    }

    /**
     * Gets area
     *
     * @return float
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param float $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets view
     *
     * @return string
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param string $view view
     *
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets facilities
     *
     * @return string
     */
    public function getFacilities()
    {
        return $this->container['facilities'];
    }

    /**
     * Sets facilities
     *
     * @param string $facilities facilities
     *
     * @return $this
     */
    public function setFacilities($facilities)
    {
        $this->container['facilities'] = $facilities;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

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
