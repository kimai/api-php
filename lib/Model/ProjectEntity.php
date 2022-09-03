<?php
/**
 * ProjectEntity
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
 * ProjectEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent_title' => 'string',
        'customer' => 'int',
        'id' => 'int',
        'name' => 'string',
        'order_number' => 'string',
        'order_date' => '\DateTime',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'comment' => 'string',
        'visible' => 'bool',
        'billable' => 'bool',
        'meta_fields' => '\Swagger\Client\Model\ProjectMeta[]',
        'teams' => '\Swagger\Client\Model\Team[]',
        'budget' => 'float',
        'time_budget' => 'int',
        'budget_type' => 'string',
        'color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent_title' => null,
        'customer' => null,
        'id' => null,
        'name' => null,
        'order_number' => null,
        'order_date' => 'date-time',
        'start' => 'date-time',
        'end' => 'date-time',
        'comment' => null,
        'visible' => null,
        'billable' => null,
        'meta_fields' => null,
        'teams' => null,
        'budget' => 'float',
        'time_budget' => null,
        'budget_type' => null,
        'color' => null
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
        'parent_title' => 'parentTitle',
        'customer' => 'customer',
        'id' => 'id',
        'name' => 'name',
        'order_number' => 'orderNumber',
        'order_date' => 'orderDate',
        'start' => 'start',
        'end' => 'end',
        'comment' => 'comment',
        'visible' => 'visible',
        'billable' => 'billable',
        'meta_fields' => 'metaFields',
        'teams' => 'teams',
        'budget' => 'budget',
        'time_budget' => 'timeBudget',
        'budget_type' => 'budgetType',
        'color' => 'color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent_title' => 'setParentTitle',
        'customer' => 'setCustomer',
        'id' => 'setId',
        'name' => 'setName',
        'order_number' => 'setOrderNumber',
        'order_date' => 'setOrderDate',
        'start' => 'setStart',
        'end' => 'setEnd',
        'comment' => 'setComment',
        'visible' => 'setVisible',
        'billable' => 'setBillable',
        'meta_fields' => 'setMetaFields',
        'teams' => 'setTeams',
        'budget' => 'setBudget',
        'time_budget' => 'setTimeBudget',
        'budget_type' => 'setBudgetType',
        'color' => 'setColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent_title' => 'getParentTitle',
        'customer' => 'getCustomer',
        'id' => 'getId',
        'name' => 'getName',
        'order_number' => 'getOrderNumber',
        'order_date' => 'getOrderDate',
        'start' => 'getStart',
        'end' => 'getEnd',
        'comment' => 'getComment',
        'visible' => 'getVisible',
        'billable' => 'getBillable',
        'meta_fields' => 'getMetaFields',
        'teams' => 'getTeams',
        'budget' => 'getBudget',
        'time_budget' => 'getTimeBudget',
        'budget_type' => 'getBudgetType',
        'color' => 'getColor'
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
        $this->container['parent_title'] = isset($data['parent_title']) ? $data['parent_title'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['meta_fields'] = isset($data['meta_fields']) ? $data['meta_fields'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['time_budget'] = isset($data['time_budget']) ? $data['time_budget'] : null;
        $this->container['budget_type'] = isset($data['budget_type']) ? $data['budget_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['name']) < 2)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['order_number']) && (mb_strlen($this->container['order_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'order_number', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['billable'] === null) {
            $invalidProperties[] = "'billable' can't be null";
        }
        if ($this->container['budget'] === null) {
            $invalidProperties[] = "'budget' can't be null";
        }
        if (($this->container['budget'] > 900000000000)) {
            $invalidProperties[] = "invalid value for 'budget', must be smaller than or equal to 900000000000.";
        }

        if (($this->container['budget'] < 0)) {
            $invalidProperties[] = "invalid value for 'budget', must be bigger than or equal to 0.";
        }

        if ($this->container['time_budget'] === null) {
            $invalidProperties[] = "'time_budget' can't be null";
        }
        if (($this->container['time_budget'] > 2145600000)) {
            $invalidProperties[] = "invalid value for 'time_budget', must be smaller than or equal to 2145600000.";
        }

        if (($this->container['time_budget'] < 0)) {
            $invalidProperties[] = "invalid value for 'time_budget', must be bigger than or equal to 0.";
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
     * Gets parent_title
     *
     * @return string
     */
    public function getParentTitle()
    {
        return $this->container['parent_title'];
    }

    /**
     * Sets parent_title
     *
     * @param string $parent_title parent_title
     *
     * @return $this
     */
    public function setParentTitle($parent_title)
    {
        $this->container['parent_title'] = $parent_title;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return int
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param int $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProjectEntity., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 2)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProjectEntity., must be bigger than or equal to 2.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        if (!is_null($order_number) && (mb_strlen($order_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $order_number when calling ProjectEntity., must be smaller than or equal to 50.');
        }

        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

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
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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
     * @return \Swagger\Client\Model\ProjectMeta[]
     */
    public function getMetaFields()
    {
        return $this->container['meta_fields'];
    }

    /**
     * Sets meta_fields
     *
     * @param \Swagger\Client\Model\ProjectMeta[] $meta_fields All visible meta (custom) fields registered with this project
     *
     * @return $this
     */
    public function setMetaFields($meta_fields)
    {
        $this->container['meta_fields'] = $meta_fields;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return \Swagger\Client\Model\Team[]
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param \Swagger\Client\Model\Team[] $teams If no team is assigned, everyone can access the project (also depends on the teams of the customer)
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {

        if (($budget > 900000000000)) {
            throw new \InvalidArgumentException('invalid value for $budget when calling ProjectEntity., must be smaller than or equal to 900000000000.');
        }
        if (($budget < 0)) {
            throw new \InvalidArgumentException('invalid value for $budget when calling ProjectEntity., must be bigger than or equal to 0.');
        }

        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets time_budget
     *
     * @return int
     */
    public function getTimeBudget()
    {
        return $this->container['time_budget'];
    }

    /**
     * Sets time_budget
     *
     * @param int $time_budget time_budget
     *
     * @return $this
     */
    public function setTimeBudget($time_budget)
    {

        if (($time_budget > 2145600000)) {
            throw new \InvalidArgumentException('invalid value for $time_budget when calling ProjectEntity., must be smaller than or equal to 2145600000.');
        }
        if (($time_budget < 0)) {
            throw new \InvalidArgumentException('invalid value for $time_budget when calling ProjectEntity., must be bigger than or equal to 0.');
        }

        $this->container['time_budget'] = $time_budget;

        return $this;
    }

    /**
     * Gets budget_type
     *
     * @return string
     */
    public function getBudgetType()
    {
        return $this->container['budget_type'];
    }

    /**
     * Sets budget_type
     *
     * @param string $budget_type budget_type
     *
     * @return $this
     */
    public function setBudgetType($budget_type)
    {
        $this->container['budget_type'] = $budget_type;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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


