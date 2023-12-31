<?php
/**
 * ExtendedContact
 *
 * PHP version 5
 *
 * @category Class
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: v1.20.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.47-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Johncarlson21\EbaySdk\Model;

use \ArrayAccess;
use \Johncarlson21\EbaySdk\ObjectSerializer;

/**
 * ExtendedContact Class Doc Comment
 *
 * @category Class
 * @description This type contains shipping and contact information for a buyer or an eBay shipping partner.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtendedContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtendedContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyName' => 'string',
        'contactAddress' => '\Johncarlson21\EbaySdk\Model\Address',
        'email' => 'string',
        'fullName' => 'string',
        'primaryPhone' => '\Johncarlson21\EbaySdk\Model\PhoneNumber'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyName' => null,
        'contactAddress' => null,
        'email' => null,
        'fullName' => null,
        'primaryPhone' => null
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
        'companyName' => 'companyName',
        'contactAddress' => 'contactAddress',
        'email' => 'email',
        'fullName' => 'fullName',
        'primaryPhone' => 'primaryPhone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyName' => 'setCompanyName',
        'contactAddress' => 'setContactAddress',
        'email' => 'setEmail',
        'fullName' => 'setFullName',
        'primaryPhone' => 'setPrimaryPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyName' => 'getCompanyName',
        'contactAddress' => 'getContactAddress',
        'email' => 'getEmail',
        'fullName' => 'getFullName',
        'primaryPhone' => 'getPrimaryPhone'
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
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['contactAddress'] = isset($data['contactAddress']) ? $data['contactAddress'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['primaryPhone'] = isset($data['primaryPhone']) ? $data['primaryPhone'] : null;
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
     * Gets companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string $companyName The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner.
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets contactAddress
     *
     * @return \Johncarlson21\EbaySdk\Model\Address
     */
    public function getContactAddress()
    {
        return $this->container['contactAddress'];
    }

    /**
     * Sets contactAddress
     *
     * @param \Johncarlson21\EbaySdk\Model\Address $contactAddress contactAddress
     *
     * @return $this
     */
    public function setContactAddress($contactAddress)
    {
        $this->container['contactAddress'] = $contactAddress;

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
     * @param string $email This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned.<br><br><span class=\"tablenote\"> <strong>Note:</strong> If returned, this field contains the email address of the buyer, even for Global Shipping Program shipments.<br><br>The <b>email</b> will not be returned for any order that is more than 90 days old.</span>
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string $fullName The full name of the buyer or eBay shipping partner.<br><br><span class=\"tablenote\"><strong>Note:</strong> The <b>fullName</b> will not be returned for any order that is more than 90 days old.</span>
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets primaryPhone
     *
     * @return \Johncarlson21\EbaySdk\Model\PhoneNumber
     */
    public function getPrimaryPhone()
    {
        return $this->container['primaryPhone'];
    }

    /**
     * Sets primaryPhone
     *
     * @param \Johncarlson21\EbaySdk\Model\PhoneNumber $primaryPhone primaryPhone
     *
     * @return $this
     */
    public function setPrimaryPhone($primaryPhone)
    {
        $this->container['primaryPhone'] = $primaryPhone;

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
