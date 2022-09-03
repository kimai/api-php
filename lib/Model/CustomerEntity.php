<?php
/**
 * CustomerEntity
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
 * CustomerEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'number' => 'string',
        'comment' => 'string',
        'visible' => 'bool',
        'billable' => 'bool',
        'company' => 'string',
        'vat_id' => 'string',
        'contact' => 'string',
        'address' => 'string',
        'country' => 'string',
        'currency' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'homepage' => 'string',
        'timezone' => 'string',
        'meta_fields' => '\Swagger\Client\Model\CustomerMeta[]',
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
        'id' => null,
        'name' => null,
        'number' => null,
        'comment' => null,
        'visible' => null,
        'billable' => null,
        'company' => null,
        'vat_id' => null,
        'contact' => null,
        'address' => null,
        'country' => null,
        'currency' => null,
        'phone' => null,
        'fax' => null,
        'mobile' => null,
        'email' => null,
        'homepage' => null,
        'timezone' => null,
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
        'id' => 'id',
        'name' => 'name',
        'number' => 'number',
        'comment' => 'comment',
        'visible' => 'visible',
        'billable' => 'billable',
        'company' => 'company',
        'vat_id' => 'vatId',
        'contact' => 'contact',
        'address' => 'address',
        'country' => 'country',
        'currency' => 'currency',
        'phone' => 'phone',
        'fax' => 'fax',
        'mobile' => 'mobile',
        'email' => 'email',
        'homepage' => 'homepage',
        'timezone' => 'timezone',
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
        'id' => 'setId',
        'name' => 'setName',
        'number' => 'setNumber',
        'comment' => 'setComment',
        'visible' => 'setVisible',
        'billable' => 'setBillable',
        'company' => 'setCompany',
        'vat_id' => 'setVatId',
        'contact' => 'setContact',
        'address' => 'setAddress',
        'country' => 'setCountry',
        'currency' => 'setCurrency',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'mobile' => 'setMobile',
        'email' => 'setEmail',
        'homepage' => 'setHomepage',
        'timezone' => 'setTimezone',
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
        'id' => 'getId',
        'name' => 'getName',
        'number' => 'getNumber',
        'comment' => 'getComment',
        'visible' => 'getVisible',
        'billable' => 'getBillable',
        'company' => 'getCompany',
        'vat_id' => 'getVatId',
        'contact' => 'getContact',
        'address' => 'getAddress',
        'country' => 'getCountry',
        'currency' => 'getCurrency',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'mobile' => 'getMobile',
        'email' => 'getEmail',
        'homepage' => 'getHomepage',
        'timezone' => 'getTimezone',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['homepage'] = isset($data['homepage']) ? $data['homepage'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
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

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 50)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['billable'] === null) {
            $invalidProperties[] = "'billable' can't be null";
        }
        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 255)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['vat_id']) && (mb_strlen($this->container['vat_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'vat_id', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 255)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) > 255)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['mobile']) && (mb_strlen($this->container['mobile']) > 255)) {
            $invalidProperties[] = "invalid value for 'mobile', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['homepage']) && (mb_strlen($this->container['homepage']) > 255)) {
            $invalidProperties[] = "invalid value for 'homepage', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ((mb_strlen($this->container['timezone']) > 64)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 64.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerEntity., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 2)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerEntity., must be bigger than or equal to 2.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $number when calling CustomerEntity., must be smaller than or equal to 50.');
        }

        $this->container['number'] = $number;

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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (mb_strlen($company) > 255)) {
            throw new \InvalidArgumentException('invalid length for $company when calling CustomerEntity., must be smaller than or equal to 255.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string $vat_id vat_id
     *
     * @return $this
     */
    public function setVatId($vat_id)
    {
        if (!is_null($vat_id) && (mb_strlen($vat_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $vat_id when calling CustomerEntity., must be smaller than or equal to 50.');
        }

        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        if (!is_null($contact) && (mb_strlen($contact) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact when calling CustomerEntity., must be smaller than or equal to 255.');
        }

        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling CustomerEntity., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CustomerEntity., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 255)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CustomerEntity., must be smaller than or equal to 255.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        if (!is_null($fax) && (mb_strlen($fax) > 255)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling CustomerEntity., must be smaller than or equal to 255.');
        }

        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        if (!is_null($mobile) && (mb_strlen($mobile) > 255)) {
            throw new \InvalidArgumentException('invalid length for $mobile when calling CustomerEntity., must be smaller than or equal to 255.');
        }

        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Limited via RFC to 254 chars
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerEntity., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets homepage
     *
     * @return string
     */
    public function getHomepage()
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage
     *
     * @param string $homepage homepage
     *
     * @return $this
     */
    public function setHomepage($homepage)
    {
        if (!is_null($homepage) && (mb_strlen($homepage) > 255)) {
            throw new \InvalidArgumentException('invalid length for $homepage when calling CustomerEntity., must be smaller than or equal to 255.');
        }

        $this->container['homepage'] = $homepage;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Length was determined by a MySQL column via \"use mysql;describe time_zone_name;\"
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        if ((mb_strlen($timezone) > 64)) {
            throw new \InvalidArgumentException('invalid length for $timezone when calling CustomerEntity., must be smaller than or equal to 64.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets meta_fields
     *
     * @return \Swagger\Client\Model\CustomerMeta[]
     */
    public function getMetaFields()
    {
        return $this->container['meta_fields'];
    }

    /**
     * Sets meta_fields
     *
     * @param \Swagger\Client\Model\CustomerMeta[] $meta_fields All visible meta (custom) fields registered with this customer
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
     * @param \Swagger\Client\Model\Team[] $teams If no team is assigned, everyone can access the customer
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
            throw new \InvalidArgumentException('invalid value for $budget when calling CustomerEntity., must be smaller than or equal to 900000000000.');
        }
        if (($budget < 0)) {
            throw new \InvalidArgumentException('invalid value for $budget when calling CustomerEntity., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $time_budget when calling CustomerEntity., must be smaller than or equal to 2145600000.');
        }
        if (($time_budget < 0)) {
            throw new \InvalidArgumentException('invalid value for $time_budget when calling CustomerEntity., must be bigger than or equal to 0.');
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

