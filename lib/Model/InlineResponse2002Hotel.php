<?php
/**
 * InlineResponse2002Hotel
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
 * InlineResponse2002Hotel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002Hotel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_hotel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
        'name' => 'string',
        'desc' => 'string',
        'rating' => 'float',
        'stars' => 'float',
        'city' => 'string',
        'region_name' => 'string',
        'place_id' => 'float',
        'lat' => 'float',
        'long' => 'float',
        'link' => 'string',
        'image' => '\Swagger\Client\Model\InlineResponse2002HotelImage',
        'additional_images' => '\Swagger\Client\Model\InlineResponse2002HotelAdditionalImages[]',
        'images' => '\Swagger\Client\Model\InlineResponse2002HotelImages[]',
        'images_count' => 'float',
        'features' => '\Swagger\Client\Model\InlineResponse2002HotelFeatures',
        'rest_types' => '\Swagger\Client\Model\InlineResponse2002HotelRestTypes',
        'lt_extras' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'desc' => null,
        'rating' => null,
        'stars' => null,
        'city' => null,
        'region_name' => null,
        'place_id' => null,
        'lat' => null,
        'long' => null,
        'link' => null,
        'image' => null,
        'additional_images' => null,
        'images' => null,
        'images_count' => null,
        'features' => null,
        'rest_types' => null,
        'lt_extras' => 'nullable'
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
        'name' => 'name',
        'desc' => 'desc',
        'rating' => 'rating',
        'stars' => 'stars',
        'city' => 'city',
        'region_name' => 'region_name',
        'place_id' => 'place_id',
        'lat' => 'lat',
        'long' => 'long',
        'link' => 'link',
        'image' => 'image',
        'additional_images' => 'additional_images',
        'images' => 'images',
        'images_count' => 'images_count',
        'features' => 'features',
        'rest_types' => 'rest_types',
        'lt_extras' => 'lt_extras'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'desc' => 'setDesc',
        'rating' => 'setRating',
        'stars' => 'setStars',
        'city' => 'setCity',
        'region_name' => 'setRegionName',
        'place_id' => 'setPlaceId',
        'lat' => 'setLat',
        'long' => 'setLong',
        'link' => 'setLink',
        'image' => 'setImage',
        'additional_images' => 'setAdditionalImages',
        'images' => 'setImages',
        'images_count' => 'setImagesCount',
        'features' => 'setFeatures',
        'rest_types' => 'setRestTypes',
        'lt_extras' => 'setLtExtras'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'desc' => 'getDesc',
        'rating' => 'getRating',
        'stars' => 'getStars',
        'city' => 'getCity',
        'region_name' => 'getRegionName',
        'place_id' => 'getPlaceId',
        'lat' => 'getLat',
        'long' => 'getLong',
        'link' => 'getLink',
        'image' => 'getImage',
        'additional_images' => 'getAdditionalImages',
        'images' => 'getImages',
        'images_count' => 'getImagesCount',
        'features' => 'getFeatures',
        'rest_types' => 'getRestTypes',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['stars'] = isset($data['stars']) ? $data['stars'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region_name'] = isset($data['region_name']) ? $data['region_name'] : null;
        $this->container['place_id'] = isset($data['place_id']) ? $data['place_id'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['long'] = isset($data['long']) ? $data['long'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['additional_images'] = isset($data['additional_images']) ? $data['additional_images'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['images_count'] = isset($data['images_count']) ? $data['images_count'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['rest_types'] = isset($data['rest_types']) ? $data['rest_types'] : null;
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
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string $desc desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param float $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets stars
     *
     * @return float
     */
    public function getStars()
    {
        return $this->container['stars'];
    }

    /**
     * Sets stars
     *
     * @param float $stars stars
     *
     * @return $this
     */
    public function setStars($stars)
    {
        $this->container['stars'] = $stars;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region_name
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->container['region_name'];
    }

    /**
     * Sets region_name
     *
     * @param string $region_name region_name
     *
     * @return $this
     */
    public function setRegionName($region_name)
    {
        $this->container['region_name'] = $region_name;

        return $this;
    }

    /**
     * Gets place_id
     *
     * @return float
     */
    public function getPlaceId()
    {
        return $this->container['place_id'];
    }

    /**
     * Sets place_id
     *
     * @param float $place_id place_id
     *
     * @return $this
     */
    public function setPlaceId($place_id)
    {
        $this->container['place_id'] = $place_id;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param float $lat lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets long
     *
     * @return float
     */
    public function getLong()
    {
        return $this->container['long'];
    }

    /**
     * Sets long
     *
     * @param float $long long
     *
     * @return $this
     */
    public function setLong($long)
    {
        $this->container['long'] = $long;

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
     * Gets image
     *
     * @return \Swagger\Client\Model\InlineResponse2002HotelImage
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Swagger\Client\Model\InlineResponse2002HotelImage $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets additional_images
     *
     * @return \Swagger\Client\Model\InlineResponse2002HotelAdditionalImages[]
     */
    public function getAdditionalImages()
    {
        return $this->container['additional_images'];
    }

    /**
     * Sets additional_images
     *
     * @param \Swagger\Client\Model\InlineResponse2002HotelAdditionalImages[] $additional_images additional_images
     *
     * @return $this
     */
    public function setAdditionalImages($additional_images)
    {
        $this->container['additional_images'] = $additional_images;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Swagger\Client\Model\InlineResponse2002HotelImages[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\InlineResponse2002HotelImages[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets images_count
     *
     * @return float
     */
    public function getImagesCount()
    {
        return $this->container['images_count'];
    }

    /**
     * Sets images_count
     *
     * @param float $images_count images_count
     *
     * @return $this
     */
    public function setImagesCount($images_count)
    {
        $this->container['images_count'] = $images_count;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Swagger\Client\Model\InlineResponse2002HotelFeatures
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Swagger\Client\Model\InlineResponse2002HotelFeatures $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets rest_types
     *
     * @return \Swagger\Client\Model\InlineResponse2002HotelRestTypes
     */
    public function getRestTypes()
    {
        return $this->container['rest_types'];
    }

    /**
     * Sets rest_types
     *
     * @param \Swagger\Client\Model\InlineResponse2002HotelRestTypes $rest_types rest_types
     *
     * @return $this
     */
    public function setRestTypes($rest_types)
    {
        $this->container['rest_types'] = $rest_types;

        return $this;
    }

    /**
     * Gets lt_extras
     *
     * @return string
     */
    public function getLtExtras()
    {
        return $this->container['lt_extras'];
    }

    /**
     * Sets lt_extras
     *
     * @param string $lt_extras lt_extras
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