<?php
/**
 * CallDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Phone.com API
 *
 * This is a Phone.com api Swagger definition
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apisupport@phone.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CallDetails Class Doc Comment
 *
 * @category    Class
 * @description Each item in the &#39;details&#39; record may contain the following properties:
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CallDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_time' => 'int',
        'type' => 'string',
        'id_value' => 'int',
        'voip_id' => 'int',
        'voip_phone_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_time' => null,
        'type' => null,
        'id_value' => null,
        'voip_id' => null,
        'voip_phone_id' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'start_time' => 'start_time',
        'type' => 'type',
        'id_value' => 'id_value',
        'voip_id' => 'voip_id',
        'voip_phone_id' => 'voip_phone_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'start_time' => 'setStartTime',
        'type' => 'setType',
        'id_value' => 'setIdValue',
        'voip_id' => 'setVoipId',
        'voip_phone_id' => 'setVoipPhoneId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'start_time' => 'getStartTime',
        'type' => 'getType',
        'id_value' => 'getIdValue',
        'voip_id' => 'getVoipId',
        'voip_phone_id' => 'getVoipPhoneId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id_value'] = isset($data['id_value']) ? $data['id_value'] : null;
        $this->container['voip_id'] = isset($data['voip_id']) ? $data['voip_id'] : null;
        $this->container['voip_phone_id'] = isset($data['voip_phone_id']) ? $data['voip_phone_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets start_time
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param int $start_time UNIX time stamp representing the UTC time that this call item starts
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Endpoint for this call item, such as call, voicemail, fax, menu, menu item, queue ...
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id_value
     * @return int
     */
    public function getIdValue()
    {
        return $this->container['id_value'];
    }

    /**
     * Sets id_value
     * @param int $id_value ID associated with this call item endpoint (type)
     * @return $this
     */
    public function setIdValue($id_value)
    {
        $this->container['id_value'] = $id_value;

        return $this;
    }

    /**
     * Gets voip_id
     * @return int
     */
    public function getVoipId()
    {
        return $this->container['voip_id'];
    }

    /**
     * Sets voip_id
     * @param int $voip_id Same as account id
     * @return $this
     */
    public function setVoipId($voip_id)
    {
        $this->container['voip_id'] = $voip_id;

        return $this;
    }

    /**
     * Gets voip_phone_id
     * @return int
     */
    public function getVoipPhoneId()
    {
        return $this->container['voip_phone_id'];
    }

    /**
     * Sets voip_phone_id
     * @param int $voip_phone_id Same as account extension id
     * @return $this
     */
    public function setVoipPhoneId($voip_phone_id)
    {
        $this->container['voip_phone_id'] = $voip_phone_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


