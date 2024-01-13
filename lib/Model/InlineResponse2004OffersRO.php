<?php
/**
 * InlineResponse2004OffersRO
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
 * InlineResponse2004OffersRO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2004OffersRO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_4_offers_RO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'nights_count' => 'float',
        'price' => 'float',
        'operator_id' => 'float',
        'operator_name' => 'string',
        'start_date' => '\DateTime',
        'link' => 'string',
        'lt_extras' => '\Swagger\Client\Model\InlineResponse2004OffersLtExtras[]',
        'price_per_night' => 'float',
        'extras' => '\Swagger\Client\Model\InlineResponse2004OffersExtras',
        'misc_data' => 'string',
        'labels' => '\Swagger\Client\Model\InlineResponse2002Labels[]',
        'availability' => '\Swagger\Client\Model\InlineResponse2002Availability',
        'confirmability_index' => 'float',
        'search_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'nights_count' => null,
        'price' => null,
        'operator_id' => null,
        'operator_name' => null,
        'start_date' => 'date',
        'link' => null,
        'lt_extras' => null,
        'price_per_night' => null,
        'extras' => null,
        'misc_data' => 'nullable',
        'labels' => null,
        'availability' => null,
        'confirmability_index' => null,
        'search_type' => null
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
        'nights_count' => 'nights_count',
        'price' => 'price',
        'operator_id' => 'operator_id',
        'operator_name' => 'operator_name',
        'start_date' => 'start_date',
        'link' => 'link',
        'lt_extras' => 'lt_extras',
        'price_per_night' => 'price_per_night',
        'extras' => 'extras',
        'misc_data' => 'misc_data',
        'labels' => 'labels',
        'availability' => 'availability',
        'confirmability_index' => 'confirmability_index',
        'search_type' => 'search_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nights_count' => 'setNightsCount',
        'price' => 'setPrice',
        'operator_id' => 'setOperatorId',
        'operator_name' => 'setOperatorName',
        'start_date' => 'setStartDate',
        'link' => 'setLink',
        'lt_extras' => 'setLtExtras',
        'price_per_night' => 'setPricePerNight',
        'extras' => 'setExtras',
        'misc_data' => 'setMiscData',
        'labels' => 'setLabels',
        'availability' => 'setAvailability',
        'confirmability_index' => 'setConfirmabilityIndex',
        'search_type' => 'setSearchType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nights_count' => 'getNightsCount',
        'price' => 'getPrice',
        'operator_id' => 'getOperatorId',
        'operator_name' => 'getOperatorName',
        'start_date' => 'getStartDate',
        'link' => 'getLink',
        'lt_extras' => 'getLtExtras',
        'price_per_night' => 'getPricePerNight',
        'extras' => 'getExtras',
        'misc_data' => 'getMiscData',
        'labels' => 'getLabels',
        'availability' => 'getAvailability',
        'confirmability_index' => 'getConfirmabilityIndex',
        'search_type' => 'getSearchType'
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

    const SEARCH_TYPE_PACKAGE_HOTEL = 'package hotel';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSearchTypeAllowableValues()
    {
        return [
            self::SEARCH_TYPE_PACKAGE_HOTEL
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
        $this->container['nights_count'] = isset($data['nights_count']) ? $data['nights_count'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['operator_id'] = isset($data['operator_id']) ? $data['operator_id'] : null;
        $this->container['operator_name'] = isset($data['operator_name']) ? $data['operator_name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['lt_extras'] = isset($data['lt_extras']) ? $data['lt_extras'] : null;
        $this->container['price_per_night'] = isset($data['price_per_night']) ? $data['price_per_night'] : null;
        $this->container['extras'] = isset($data['extras']) ? $data['extras'] : null;
        $this->container['misc_data'] = isset($data['misc_data']) ? $data['misc_data'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['confirmability_index'] = isset($data['confirmability_index']) ? $data['confirmability_index'] : null;
        $this->container['search_type'] = isset($data['search_type']) ? $data['search_type'] : null;
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
     * Gets nights_count
     *
     * @return float
     */
    public function getNightsCount()
    {
        return $this->container['nights_count'];
    }

    /**
     * Sets nights_count
     *
     * @param float $nights_count nights_count
     *
     * @return $this
     */
    public function setNightsCount($nights_count)
    {
        $this->container['nights_count'] = $nights_count;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets operator_id
     *
     * @return float
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param float $operator_id operator_id
     *
     * @return $this
     */
    public function setOperatorId($operator_id)
    {
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets operator_name
     *
     * @return string
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     *
     * @param string $operator_name operator_name
     *
     * @return $this
     */
    public function setOperatorName($operator_name)
    {
        $this->container['operator_name'] = $operator_name;

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
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets lt_extras
     *
     * @return \Swagger\Client\Model\InlineResponse2004OffersLtExtras[]
     */
    public function getLtExtras()
    {
        return $this->container['lt_extras'];
    }

    /**
     * Sets lt_extras
     *
     * @param \Swagger\Client\Model\InlineResponse2004OffersLtExtras[] $lt_extras lt_extras
     *
     * @return $this
     */
    public function setLtExtras($lt_extras)
    {
        $this->container['lt_extras'] = $lt_extras;

        return $this;
    }

    /**
     * Gets price_per_night
     *
     * @return float
     */
    public function getPricePerNight()
    {
        return $this->container['price_per_night'];
    }

    /**
     * Sets price_per_night
     *
     * @param float $price_per_night price_per_night
     *
     * @return $this
     */
    public function setPricePerNight($price_per_night)
    {
        $this->container['price_per_night'] = $price_per_night;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return \Swagger\Client\Model\InlineResponse2004OffersExtras
     */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param \Swagger\Client\Model\InlineResponse2004OffersExtras $extras extras
     *
     * @return $this
     */
    public function setExtras($extras)
    {
        $this->container['extras'] = $extras;

        return $this;
    }

    /**
     * Gets misc_data
     *
     * @return string
     */
    public function getMiscData()
    {
        return $this->container['misc_data'];
    }

    /**
     * Sets misc_data
     *
     * @param string $misc_data misc_data
     *
     * @return $this
     */
    public function setMiscData($misc_data)
    {
        $this->container['misc_data'] = $misc_data;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Swagger\Client\Model\InlineResponse2002Labels[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Swagger\Client\Model\InlineResponse2002Labels[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return \Swagger\Client\Model\InlineResponse2002Availability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \Swagger\Client\Model\InlineResponse2002Availability $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets confirmability_index
     *
     * @return float
     */
    public function getConfirmabilityIndex()
    {
        return $this->container['confirmability_index'];
    }

    /**
     * Sets confirmability_index
     *
     * @param float $confirmability_index confirmability_index
     *
     * @return $this
     */
    public function setConfirmabilityIndex($confirmability_index)
    {
        $this->container['confirmability_index'] = $confirmability_index;

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
     * @param string $search_type search_type
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
