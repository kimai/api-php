<?php
/**
 * TimesheetCollectionExpanded
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kimai - API Docs
 *
 * JSON API for the Kimai time-tracking software: [API documentation](https://www.kimai.org/documentation/rest-api.html), [Swagger definition file](doc.json)
 *
 * OpenAPI spec version: 0.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
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
 * TimesheetCollectionExpanded Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimesheetCollectionExpanded implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimesheetCollectionExpanded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user' => 'int',
        'tags' => 'string[]',
        'id' => 'int',
        'begin' => '\DateTime',
        'end' => '\DateTime',
        'duration' => 'int',
        'activity' => '\Swagger\Client\Model\ActivityExpanded',
        'project' => '\Swagger\Client\Model\ProjectExpanded',
        'description' => 'string',
        'rate' => 'float',
        'internal_rate' => 'float',
        'exported' => 'bool',
        'billable' => 'bool',
        'meta_fields' => '\Swagger\Client\Model\TimesheetMeta[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user' => null,
        'tags' => null,
        'id' => null,
        'begin' => 'date-time',
        'end' => 'date-time',
        'duration' => null,
        'activity' => null,
        'project' => null,
        'description' => null,
        'rate' => 'float',
        'internal_rate' => 'float',
        'exported' => null,
        'billable' => null,
        'meta_fields' => null
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
        'user' => 'user',
        'tags' => 'tags',
        'id' => 'id',
        'begin' => 'begin',
        'end' => 'end',
        'duration' => 'duration',
        'activity' => 'activity',
        'project' => 'project',
        'description' => 'description',
        'rate' => 'rate',
        'internal_rate' => 'internalRate',
        'exported' => 'exported',
        'billable' => 'billable',
        'meta_fields' => 'metaFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'tags' => 'setTags',
        'id' => 'setId',
        'begin' => 'setBegin',
        'end' => 'setEnd',
        'duration' => 'setDuration',
        'activity' => 'setActivity',
        'project' => 'setProject',
        'description' => 'setDescription',
        'rate' => 'setRate',
        'internal_rate' => 'setInternalRate',
        'exported' => 'setExported',
        'billable' => 'setBillable',
        'meta_fields' => 'setMetaFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'tags' => 'getTags',
        'id' => 'getId',
        'begin' => 'getBegin',
        'end' => 'getEnd',
        'duration' => 'getDuration',
        'activity' => 'getActivity',
        'project' => 'getProject',
        'description' => 'getDescription',
        'rate' => 'getRate',
        'internal_rate' => 'getInternalRate',
        'exported' => 'getExported',
        'billable' => 'getBillable',
        'meta_fields' => 'getMetaFields'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['begin'] = isset($data['begin']) ? $data['begin'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['internal_rate'] = isset($data['internal_rate']) ? $data['internal_rate'] : null;
        $this->container['exported'] = isset($data['exported']) ? $data['exported'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['meta_fields'] = isset($data['meta_fields']) ? $data['meta_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['begin'] === null) {
            $invalidProperties[] = "'begin' can't be null";
        }
        if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
            $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
        }

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['project'] === null) {
            $invalidProperties[] = "'project' can't be null";
        }
        if (!is_null($this->container['rate']) && ($this->container['rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'rate', must be bigger than or equal to 0.";
        }

        if ($this->container['exported'] === null) {
            $invalidProperties[] = "'exported' can't be null";
        }
        if ($this->container['billable'] === null) {
            $invalidProperties[] = "'billable' can't be null";
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
     * Gets user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
     * Sets begin
     *
     * @param \DateTime $begin begin
     *
     * @return $this
     */
    public function setBegin($begin)
    {
        $this->container['begin'] = $begin;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {

        if (!is_null($duration) && ($duration < 0)) {
            throw new \InvalidArgumentException('invalid value for $duration when calling TimesheetCollectionExpanded., must be bigger than or equal to 0.');
        }

        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \Swagger\Client\Model\ActivityExpanded
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \Swagger\Client\Model\ActivityExpanded $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\ProjectExpanded
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\ProjectExpanded $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * Gets rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {

        if (!is_null($rate) && ($rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $rate when calling TimesheetCollectionExpanded., must be bigger than or equal to 0.');
        }

        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets internal_rate
     *
     * @return float
     */
    public function getInternalRate()
    {
        return $this->container['internal_rate'];
    }

    /**
     * Sets internal_rate
     *
     * @param float $internal_rate internal_rate
     *
     * @return $this
     */
    public function setInternalRate($internal_rate)
    {
        $this->container['internal_rate'] = $internal_rate;

        return $this;
    }

    /**
     * Gets exported
     *
     * @return bool
     */
    public function getExported()
    {
        return $this->container['exported'];
    }

    /**
     * Sets exported
     *
     * @param bool $exported exported
     *
     * @return $this
     */
    public function setExported($exported)
    {
        $this->container['exported'] = $exported;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable billable
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets meta_fields
     *
     * @return \Swagger\Client\Model\TimesheetMeta[]
     */
    public function getMetaFields()
    {
        return $this->container['meta_fields'];
    }

    /**
     * Sets meta_fields
     *
     * @param \Swagger\Client\Model\TimesheetMeta[] $meta_fields All visible meta (custom) fields registered with this timesheet
     *
     * @return $this
     */
    public function setMetaFields($meta_fields)
    {
        $this->container['meta_fields'] = $meta_fields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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

