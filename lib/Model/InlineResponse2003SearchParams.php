<?php
/**
 * InlineResponse2003SearchParams
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
 * InlineResponse2003SearchParams Class Doc Comment
 *
 * @category Class
 * @description Поисковые параметры
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2003SearchParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_3_search_params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'query' => 'string',
        'from' => '\Swagger\Client\Model\InlineResponse2003SearchParamsFrom',
        'to' => '\Swagger\Client\Model\InlineResponse2003SearchParamsTo',
        'start_date' => '\DateTime',
        'start_date_flex' => 'int',
        'end_date' => '\DateTime',
        'end_date_flex' => 'int',
        'nights' => '\Swagger\Client\Model\InlineResponse2003SearchParamsNights',
        'adults' => 'int',
        'kids' => '\Swagger\Client\Model\InlineResponse2003SearchParamsKids',
        'stars' => '\Swagger\Client\Model\InlineResponse2003SearchParamsStars',
        'search_type' => 'string',
        'options' => '\Swagger\Client\Model\InlineResponse2003SearchParamsOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'query' => null,
        'from' => null,
        'to' => null,
        'start_date' => 'date',
        'start_date_flex' => null,
        'end_date' => 'date',
        'end_date_flex' => null,
        'nights' => null,
        'adults' => null,
        'kids' => null,
        'stars' => null,
        'search_type' => null,
        'options' => null
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
        'query' => 'query',
        'from' => 'from',
        'to' => 'to',
        'start_date' => 'start_date',
        'start_date_flex' => 'start_date_flex',
        'end_date' => 'end_date',
        'end_date_flex' => 'end_date_flex',
        'nights' => 'nights',
        'adults' => 'adults',
        'kids' => 'kids',
        'stars' => 'stars',
        'search_type' => 'search_type',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'from' => 'setFrom',
        'to' => 'setTo',
        'start_date' => 'setStartDate',
        'start_date_flex' => 'setStartDateFlex',
        'end_date' => 'setEndDate',
        'end_date_flex' => 'setEndDateFlex',
        'nights' => 'setNights',
        'adults' => 'setAdults',
        'kids' => 'setKids',
        'stars' => 'setStars',
        'search_type' => 'setSearchType',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'from' => 'getFrom',
        'to' => 'getTo',
        'start_date' => 'getStartDate',
        'start_date_flex' => 'getStartDateFlex',
        'end_date' => 'getEndDate',
        'end_date_flex' => 'getEndDateFlex',
        'nights' => 'getNights',
        'adults' => 'getAdults',
        'kids' => 'getKids',
        'stars' => 'getStars',
        'search_type' => 'getSearchType',
        'options' => 'getOptions'
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

    const SEARCH_TYPE_PACKAGE = 'package';
    const SEARCH_TYPE_HOTEL = 'hotel';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSearchTypeAllowableValues()
    {
        return [
            self::SEARCH_TYPE_PACKAGE,
            self::SEARCH_TYPE_HOTEL,
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['start_date_flex'] = isset($data['start_date_flex']) ? $data['start_date_flex'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['end_date_flex'] = isset($data['end_date_flex']) ? $data['end_date_flex'] : null;
        $this->container['nights'] = isset($data['nights']) ? $data['nights'] : null;
        $this->container['adults'] = isset($data['adults']) ? $data['adults'] : null;
        $this->container['kids'] = isset($data['kids']) ? $data['kids'] : null;
        $this->container['stars'] = isset($data['stars']) ? $data['stars'] : null;
        $this->container['search_type'] = isset($data['search_type']) ? $data['search_type'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSearchTypeAllowableValues();
        if (!is_null($this->container['search_type']) && !in_array($this->container['search_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'search_type', must be one of '%s'",
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
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query Поисковый запрос
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Swagger\Client\Model\InlineResponse2003SearchParamsFrom
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Swagger\Client\Model\InlineResponse2003SearchParamsFrom $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Swagger\Client\Model\InlineResponse2003SearchParamsTo
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Swagger\Client\Model\InlineResponse2003SearchParamsTo $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Дата начала тура
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets start_date_flex
     *
     * @return int
     */
    public function getStartDateFlex()
    {
        return $this->container['start_date_flex'];
    }

    /**
     * Sets start_date_flex
     *
     * @param int $start_date_flex Диапазон дат начала тура
     *
     * @return $this
     */
    public function setStartDateFlex($start_date_flex)
    {
        $this->container['start_date_flex'] = $start_date_flex;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Дата окончания тура
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets end_date_flex
     *
     * @return int
     */
    public function getEndDateFlex()
    {
        return $this->container['end_date_flex'];
    }

    /**
     * Sets end_date_flex
     *
     * @param int $end_date_flex Диапазон дат окончания тура
     *
     * @return $this
     */
    public function setEndDateFlex($end_date_flex)
    {
        $this->container['end_date_flex'] = $end_date_flex;

        return $this;
    }

    /**
     * Gets nights
     *
     * @return \Swagger\Client\Model\InlineResponse2003SearchParamsNights
     */
    public function getNights()
    {
        return $this->container['nights'];
    }

    /**
     * Sets nights
     *
     * @param \Swagger\Client\Model\InlineResponse2003SearchParamsNights $nights nights
     *
     * @return $this
     */
    public function setNights($nights)
    {
        $this->container['nights'] = $nights;

        return $this;
    }

    /**
     * Gets adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param int $adults Количество взрослых туристов
     *
     * @return $this
     */
    public function setAdults($adults)
    {
        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets kids
     *
     * @return \Swagger\Client\Model\InlineResponse2003SearchParamsKids
     */
    public function getKids()
    {
        return $this->container['kids'];
    }

    /**
     * Sets kids
     *
     * @param \Swagger\Client\Model\InlineResponse2003SearchParamsKids $kids kids
     *
     * @return $this
     */
    public function setKids($kids)
    {
        $this->container['kids'] = $kids;

        return $this;
    }

    /**
     * Gets stars
     *
     * @return \Swagger\Client\Model\InlineResponse2003SearchParamsStars
     */
    public function getStars()
    {
        return $this->container['stars'];
    }

    /**
     * Sets stars
     *
     * @param \Swagger\Client\Model\InlineResponse2003SearchParamsStars $stars stars
     *
     * @return $this
     */
    public function setStars($stars)
    {
        $this->container['stars'] = $stars;

        return $this;
    }

    /**
     * Gets search_type
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->container['search_type'];
    }

    /**
     * Sets search_type
     *
     * @param string $search_type Тип поиска
     *
     * @return $this
     */
    public function setSearchType($search_type)
    {
        $allowedValues = $this->getSearchTypeAllowableValues();
        if (!is_null($search_type) && !in_array($search_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'search_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['search_type'] = $search_type;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\InlineResponse2003SearchParamsOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\InlineResponse2003SearchParamsOptions $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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