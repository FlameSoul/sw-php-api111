<?php
/**
 * InlineResponse2003SearchParamsFromCountry
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
 * InlineResponse2003SearchParamsFromCountry Class Doc Comment
 *
 * @category Class
 * @description Страна вылета
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2003SearchParamsFromCountry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_3_search_params_from_country';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name_ru' => 'string',
        'name_en' => 'string',
        'name_ru_form1' => 'string',
        'name_ru_form2' => 'string',
        'name_ru_form3' => 'string',
        'iso2' => 'string',
        'rest_type' => 'string',
        'thumb' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name_ru' => null,
        'name_en' => null,
        'name_ru_form1' => null,
        'name_ru_form2' => null,
        'name_ru_form3' => null,
        'iso2' => null,
        'rest_type' => null,
        'thumb' => null
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
        'id' => 'id',
        'name_ru' => 'name_ru',
        'name_en' => 'name_en',
        'name_ru_form1' => 'name_ru_form1',
        'name_ru_form2' => 'name_ru_form2',
        'name_ru_form3' => 'name_ru_form3',
        'iso2' => 'iso2',
        'rest_type' => 'rest_type',
        'thumb' => 'thumb'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name_ru' => 'setNameRu',
        'name_en' => 'setNameEn',
        'name_ru_form1' => 'setNameRuForm1',
        'name_ru_form2' => 'setNameRuForm2',
        'name_ru_form3' => 'setNameRuForm3',
        'iso2' => 'setIso2',
        'rest_type' => 'setRestType',
        'thumb' => 'setThumb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name_ru' => 'getNameRu',
        'name_en' => 'getNameEn',
        'name_ru_form1' => 'getNameRuForm1',
        'name_ru_form2' => 'getNameRuForm2',
        'name_ru_form3' => 'getNameRuForm3',
        'iso2' => 'getIso2',
        'rest_type' => 'getRestType',
        'thumb' => 'getThumb'
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

    const REST_TYPE_BEACH = 'beach';
    const REST_TYPE_SIGHTSEEING = 'sightseeing';
    const REST_TYPE_SKI = 'ski';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRestTypeAllowableValues()
    {
        return [
            self::REST_TYPE_BEACH,
            self::REST_TYPE_SIGHTSEEING,
            self::REST_TYPE_SKI,
        ];
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
        $this->container['name_ru'] = isset($data['name_ru']) ? $data['name_ru'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['name_ru_form1'] = isset($data['name_ru_form1']) ? $data['name_ru_form1'] : null;
        $this->container['name_ru_form2'] = isset($data['name_ru_form2']) ? $data['name_ru_form2'] : null;
        $this->container['name_ru_form3'] = isset($data['name_ru_form3']) ? $data['name_ru_form3'] : null;
        $this->container['iso2'] = isset($data['iso2']) ? $data['iso2'] : null;
        $this->container['rest_type'] = isset($data['rest_type']) ? $data['rest_type'] : null;
        $this->container['thumb'] = isset($data['thumb']) ? $data['thumb'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRestTypeAllowableValues();
        if (!is_null($this->container['rest_type']) && !in_array($this->container['rest_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rest_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID Плейса страны вылета в системе
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name_ru Название страны на русском
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
     * @param string $name_en Название страны на английском
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {
        $this->container['name_en'] = $name_en;

        return $this;
    }

    /**
     * Gets name_ru_form1
     *
     * @return string
     */
    public function getNameRuForm1()
    {
        return $this->container['name_ru_form1'];
    }

    /**
     * Sets name_ru_form1
     *
     * @param string $name_ru_form1 Название страны на русском (1я форма)
     *
     * @return $this
     */
    public function setNameRuForm1($name_ru_form1)
    {
        $this->container['name_ru_form1'] = $name_ru_form1;

        return $this;
    }

    /**
     * Gets name_ru_form2
     *
     * @return string
     */
    public function getNameRuForm2()
    {
        return $this->container['name_ru_form2'];
    }

    /**
     * Sets name_ru_form2
     *
     * @param string $name_ru_form2 Название страны на русском (2я форма)
     *
     * @return $this
     */
    public function setNameRuForm2($name_ru_form2)
    {
        $this->container['name_ru_form2'] = $name_ru_form2;

        return $this;
    }

    /**
     * Gets name_ru_form3
     *
     * @return string
     */
    public function getNameRuForm3()
    {
        return $this->container['name_ru_form3'];
    }

    /**
     * Sets name_ru_form3
     *
     * @param string $name_ru_form3 Название страны на русском (3я форма)
     *
     * @return $this
     */
    public function setNameRuForm3($name_ru_form3)
    {
        $this->container['name_ru_form3'] = $name_ru_form3;

        return $this;
    }

    /**
     * Gets iso2
     *
     * @return string
     */
    public function getIso2()
    {
        return $this->container['iso2'];
    }

    /**
     * Sets iso2
     *
     * @param string $iso2 ISO2 страны
     *
     * @return $this
     */
    public function setIso2($iso2)
    {
        $this->container['iso2'] = $iso2;

        return $this;
    }

    /**
     * Gets rest_type
     *
     * @return string
     */
    public function getRestType()
    {
        return $this->container['rest_type'];
    }

    /**
     * Sets rest_type
     *
     * @param string $rest_type Тип отдыха
     *
     * @return $this
     */
    public function setRestType($rest_type)
    {
        $allowedValues = $this->getRestTypeAllowableValues();
        if (!is_null($rest_type) && !in_array($rest_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rest_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rest_type'] = $rest_type;

        return $this;
    }

    /**
     * Gets thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->container['thumb'];
    }

    /**
     * Sets thumb
     *
     * @param string $thumb Абсолютная ссылка на фото старны
     *
     * @return $this
     */
    public function setThumb($thumb)
    {
        $this->container['thumb'] = $thumb;

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
