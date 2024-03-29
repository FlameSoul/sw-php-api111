<?php
/**
 * InlineResponse20017Departures
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
 * InlineResponse20017Departures Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20017Departures implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_17_departures';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'iso2' => 'string',
        'name' => 'string',
        'name_en' => 'string',
        'name_form1' => 'string',
        'name_form2' => 'string',
        'description' => 'string',
        'distance' => 'int',
        'is_automatically_detected' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'iso2' => null,
        'name' => null,
        'name_en' => null,
        'name_form1' => null,
        'name_form2' => null,
        'description' => null,
        'distance' => null,
        'is_automatically_detected' => null
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
        'iso2' => 'iso2',
        'name' => 'name',
        'name_en' => 'name_en',
        'name_form1' => 'name_form1',
        'name_form2' => 'name_form2',
        'description' => 'description',
        'distance' => 'distance',
        'is_automatically_detected' => 'is_automatically_detected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'iso2' => 'setIso2',
        'name' => 'setName',
        'name_en' => 'setNameEn',
        'name_form1' => 'setNameForm1',
        'name_form2' => 'setNameForm2',
        'description' => 'setDescription',
        'distance' => 'setDistance',
        'is_automatically_detected' => 'setIsAutomaticallyDetected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'iso2' => 'getIso2',
        'name' => 'getName',
        'name_en' => 'getNameEn',
        'name_form1' => 'getNameForm1',
        'name_form2' => 'getNameForm2',
        'description' => 'getDescription',
        'distance' => 'getDistance',
        'is_automatically_detected' => 'getIsAutomaticallyDetected'
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
        $this->container['iso2'] = isset($data['iso2']) ? $data['iso2'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['name_form1'] = isset($data['name_form1']) ? $data['name_form1'] : null;
        $this->container['name_form2'] = isset($data['name_form2']) ? $data['name_form2'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['is_automatically_detected'] = isset($data['is_automatically_detected']) ? $data['is_automatically_detected'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID Плейса в системе
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $iso2 ISO2 страны, в которой находится город
     *
     * @return $this
     */
    public function setIso2($iso2)
    {
        $this->container['iso2'] = $iso2;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Название города на русском
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $name_en Название города на английском
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {
        $this->container['name_en'] = $name_en;

        return $this;
    }

    /**
     * Gets name_form1
     *
     * @return string
     */
    public function getNameForm1()
    {
        return $this->container['name_form1'];
    }

    /**
     * Sets name_form1
     *
     * @param string $name_form1 Название города на русском (1я форма)
     *
     * @return $this
     */
    public function setNameForm1($name_form1)
    {
        $this->container['name_form1'] = $name_form1;

        return $this;
    }

    /**
     * Gets name_form2
     *
     * @return string
     */
    public function getNameForm2()
    {
        return $this->container['name_form2'];
    }

    /**
     * Sets name_form2
     *
     * @param string $name_form2 Название города на русском (2я форма)
     *
     * @return $this
     */
    public function setNameForm2($name_form2)
    {
        $this->container['name_form2'] = $name_form2;

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
     * @param string $description Описание связи с автоматически определившемся городом (только для городов имеющих данную связь)
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param int $distance Расстояние в км до автоматически определившемся городом (только для городов имеющих данную связь)
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets is_automatically_detected
     *
     * @return bool
     */
    public function getIsAutomaticallyDetected()
    {
        return $this->container['is_automatically_detected'];
    }

    /**
     * Sets is_automatically_detected
     *
     * @param bool $is_automatically_detected Флаг если город определен автоматически
     *
     * @return $this
     */
    public function setIsAutomaticallyDetected($is_automatically_detected)
    {
        $this->container['is_automatically_detected'] = $is_automatically_detected;

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
