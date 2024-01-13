<?php
/**
 * InlineResponse2002SurchargesByLevel
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
 * InlineResponse2002SurchargesByLevel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002SurchargesByLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_surcharges_by_level';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'l1' => 'float',
        'l2' => 'float',
        'l3' => 'float',
        'l4' => 'float',
        'l5' => 'float',
        'l6' => 'float',
        'l7' => 'float',
        'd1' => 'float',
        'strategy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'l4' => null,
        'l5' => null,
        'l6' => null,
        'l7' => null,
        'd1' => null,
        'strategy' => null
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
        'l1' => 'L1',
        'l2' => 'L2',
        'l3' => 'L3',
        'l4' => 'L4',
        'l5' => 'L5',
        'l6' => 'L6',
        'l7' => 'L7',
        'd1' => 'D1',
        'strategy' => 'Strategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'l1' => 'setL1',
        'l2' => 'setL2',
        'l3' => 'setL3',
        'l4' => 'setL4',
        'l5' => 'setL5',
        'l6' => 'setL6',
        'l7' => 'setL7',
        'd1' => 'setD1',
        'strategy' => 'setStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'l1' => 'getL1',
        'l2' => 'getL2',
        'l3' => 'getL3',
        'l4' => 'getL4',
        'l5' => 'getL5',
        'l6' => 'getL6',
        'l7' => 'getL7',
        'd1' => 'getD1',
        'strategy' => 'getStrategy'
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
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['l4'] = isset($data['l4']) ? $data['l4'] : null;
        $this->container['l5'] = isset($data['l5']) ? $data['l5'] : null;
        $this->container['l6'] = isset($data['l6']) ? $data['l6'] : null;
        $this->container['l7'] = isset($data['l7']) ? $data['l7'] : null;
        $this->container['d1'] = isset($data['d1']) ? $data['d1'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
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
     * Gets l1
     *
     * @return float
     */
    public function getL1()
    {
        return $this->container['l1'];
    }

    /**
     * Sets l1
     *
     * @param float $l1 l1
     *
     * @return $this
     */
    public function setL1($l1)
    {
        $this->container['l1'] = $l1;

        return $this;
    }

    /**
     * Gets l2
     *
     * @return float
     */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
     * Sets l2
     *
     * @param float $l2 l2
     *
     * @return $this
     */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;

        return $this;
    }

    /**
     * Gets l3
     *
     * @return float
     */
    public function getL3()
    {
        return $this->container['l3'];
    }

    /**
     * Sets l3
     *
     * @param float $l3 l3
     *
     * @return $this
     */
    public function setL3($l3)
    {
        $this->container['l3'] = $l3;

        return $this;
    }

    /**
     * Gets l4
     *
     * @return float
     */
    public function getL4()
    {
        return $this->container['l4'];
    }

    /**
     * Sets l4
     *
     * @param float $l4 l4
     *
     * @return $this
     */
    public function setL4($l4)
    {
        $this->container['l4'] = $l4;

        return $this;
    }

    /**
     * Gets l5
     *
     * @return float
     */
    public function getL5()
    {
        return $this->container['l5'];
    }

    /**
     * Sets l5
     *
     * @param float $l5 l5
     *
     * @return $this
     */
    public function setL5($l5)
    {
        $this->container['l5'] = $l5;

        return $this;
    }

    /**
     * Gets l6
     *
     * @return float
     */
    public function getL6()
    {
        return $this->container['l6'];
    }

    /**
     * Sets l6
     *
     * @param float $l6 l6
     *
     * @return $this
     */
    public function setL6($l6)
    {
        $this->container['l6'] = $l6;

        return $this;
    }

    /**
     * Gets l7
     *
     * @return float
     */
    public function getL7()
    {
        return $this->container['l7'];
    }

    /**
     * Sets l7
     *
     * @param float $l7 l7
     *
     * @return $this
     */
    public function setL7($l7)
    {
        $this->container['l7'] = $l7;

        return $this;
    }

    /**
     * Gets d1
     *
     * @return float
     */
    public function getD1()
    {
        return $this->container['d1'];
    }

    /**
     * Sets d1
     *
     * @param float $d1 d1
     *
     * @return $this
     */
    public function setD1($d1)
    {
        $this->container['d1'] = $d1;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return string
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param string $strategy Название стратегии где самая вероятная доплата
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

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
