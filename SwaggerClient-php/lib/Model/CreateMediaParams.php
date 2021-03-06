<?php
/**
 * CreateMediaParams
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
 * CreateMediaParams Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateMediaParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateMediaParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'origin' => 'string',
        'type' => 'string',
        'tts_voice' => 'string',
        'tts_text' => 'string',
        'is_temparary' => 'string',
        'expiration_date' => 'int',
        'duration' => 'int',
        'notes' => 'string',
        'randomized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'origin' => null,
        'type' => null,
        'tts_voice' => null,
        'tts_text' => null,
        'is_temparary' => null,
        'expiration_date' => null,
        'duration' => null,
        'notes' => null,
        'randomized' => null
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
        'name' => 'name',
        'origin' => 'origin',
        'type' => 'type',
        'tts_voice' => 'tts_voice',
        'tts_text' => 'tts_text',
        'is_temparary' => 'is_temparary',
        'expiration_date' => 'expiration_date',
        'duration' => 'duration',
        'notes' => 'notes',
        'randomized' => 'randomized'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'origin' => 'setOrigin',
        'type' => 'setType',
        'tts_voice' => 'setTtsVoice',
        'tts_text' => 'setTtsText',
        'is_temparary' => 'setIsTemparary',
        'expiration_date' => 'setExpirationDate',
        'duration' => 'setDuration',
        'notes' => 'setNotes',
        'randomized' => 'setRandomized'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'origin' => 'getOrigin',
        'type' => 'getType',
        'tts_voice' => 'getTtsVoice',
        'tts_text' => 'getTtsText',
        'is_temparary' => 'getIsTemparary',
        'expiration_date' => 'getExpirationDate',
        'duration' => 'getDuration',
        'notes' => 'getNotes',
        'randomized' => 'getRandomized'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tts_voice'] = isset($data['tts_voice']) ? $data['tts_voice'] : null;
        $this->container['tts_text'] = isset($data['tts_text']) ? $data['tts_text'] : null;
        $this->container['is_temparary'] = isset($data['is_temparary']) ? $data['is_temparary'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['randomized'] = isset($data['randomized']) ? $data['randomized'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of media
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets origin
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     * @param string $origin 'tts', 'file'
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

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
     * @param string $type 'hold_music', 'greeting'
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tts_voice
     * @return string
     */
    public function getTtsVoice()
    {
        return $this->container['tts_voice'];
    }

    /**
     * Sets tts_voice
     * @param string $tts_voice 'allison', 'amy', 'belle', 'callie', 'callieq', 'dallas', 'damien', 'david', 'designerdave', 'diane', 'diesel', 'dog', 'duchess', 'duncan', 'emily', 'evilgenius', 'frank', 'french-fry', 'gregory', 'isabelle', 'jean-pierre', 'jerkface', 'katrin', 'kayla', 'kidaroo', 'lawrence', 'layo', 'linda', 'marta', 'matthias', 'miguel', 'millie', 'princess', 'ransomnote', 'robin', 'shouty', 'shygirl', 'tamika', 'tophat', 'vittoria', 'vixen', 'vlad', 'walter', 'whispery', 'william', 'wiseguy', 'zach'
     * @return $this
     */
    public function setTtsVoice($tts_voice)
    {
        $this->container['tts_voice'] = $tts_voice;

        return $this;
    }

    /**
     * Gets tts_text
     * @return string
     */
    public function getTtsText()
    {
        return $this->container['tts_text'];
    }

    /**
     * Sets tts_text
     * @param string $tts_text Text used for text-to-speech conversion, maximum 800 characters
     * @return $this
     */
    public function setTtsText($tts_text)
    {
        $this->container['tts_text'] = $tts_text;

        return $this;
    }

    /**
     * Gets is_temparary
     * @return string
     */
    public function getIsTemparary()
    {
        return $this->container['is_temparary'];
    }

    /**
     * Sets is_temparary
     * @param string $is_temparary 'Y', 'N'. Media file is temporary, will be deleted after a specified period.
     * @return $this
     */
    public function setIsTemparary($is_temparary)
    {
        $this->container['is_temparary'] = $is_temparary;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return int
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     * @param int $expiration_date If is_temporary is 'Y', media will be deleted after the specified time in seconds
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Length of media in seconds
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Notes about the media object
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets randomized
     * @return string
     */
    public function getRandomized()
    {
        return $this->container['randomized'];
    }

    /**
     * Sets randomized
     * @param string $randomized 'Y', 'N'. Start playing the media file in random location, instead of from the beginning
     * @return $this
     */
    public function setRandomized($randomized)
    {
        $this->container['randomized'] = $randomized;

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


