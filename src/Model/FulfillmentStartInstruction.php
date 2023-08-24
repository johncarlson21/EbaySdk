<?php
/**
 * FulfillmentStartInstruction
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
 * FulfillmentStartInstruction Class Doc Comment
 *
 * @category Class
 * @description This type contains a set of specifications for processing a fulfillment of an order, including the type of fulfillment, shipping carrier and service, addressing details, and estimated delivery window. These instructions are derived from the buyer&#x27;s and seller&#x27;s eBay account preferences, the listing parameters, and the buyer&#x27;s checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentStartInstruction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FulfillmentStartInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ebaySupportedFulfillment' => 'bool',
        'finalDestinationAddress' => '\Johncarlson21\EbaySdk\Model\Address',
        'fulfillmentInstructionsType' => 'string',
        'maxEstimatedDeliveryDate' => 'string',
        'minEstimatedDeliveryDate' => 'string',
        'pickupStep' => '\Johncarlson21\EbaySdk\Model\PickupStep',
        'shippingStep' => '\Johncarlson21\EbaySdk\Model\ShippingStep'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ebaySupportedFulfillment' => null,
        'finalDestinationAddress' => null,
        'fulfillmentInstructionsType' => null,
        'maxEstimatedDeliveryDate' => null,
        'minEstimatedDeliveryDate' => null,
        'pickupStep' => null,
        'shippingStep' => null
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
        'ebaySupportedFulfillment' => 'ebaySupportedFulfillment',
        'finalDestinationAddress' => 'finalDestinationAddress',
        'fulfillmentInstructionsType' => 'fulfillmentInstructionsType',
        'maxEstimatedDeliveryDate' => 'maxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'minEstimatedDeliveryDate',
        'pickupStep' => 'pickupStep',
        'shippingStep' => 'shippingStep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ebaySupportedFulfillment' => 'setEbaySupportedFulfillment',
        'finalDestinationAddress' => 'setFinalDestinationAddress',
        'fulfillmentInstructionsType' => 'setFulfillmentInstructionsType',
        'maxEstimatedDeliveryDate' => 'setMaxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'setMinEstimatedDeliveryDate',
        'pickupStep' => 'setPickupStep',
        'shippingStep' => 'setShippingStep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ebaySupportedFulfillment' => 'getEbaySupportedFulfillment',
        'finalDestinationAddress' => 'getFinalDestinationAddress',
        'fulfillmentInstructionsType' => 'getFulfillmentInstructionsType',
        'maxEstimatedDeliveryDate' => 'getMaxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'getMinEstimatedDeliveryDate',
        'pickupStep' => 'getPickupStep',
        'shippingStep' => 'getShippingStep'
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
        $this->container['ebaySupportedFulfillment'] = isset($data['ebaySupportedFulfillment']) ? $data['ebaySupportedFulfillment'] : null;
        $this->container['finalDestinationAddress'] = isset($data['finalDestinationAddress']) ? $data['finalDestinationAddress'] : null;
        $this->container['fulfillmentInstructionsType'] = isset($data['fulfillmentInstructionsType']) ? $data['fulfillmentInstructionsType'] : null;
        $this->container['maxEstimatedDeliveryDate'] = isset($data['maxEstimatedDeliveryDate']) ? $data['maxEstimatedDeliveryDate'] : null;
        $this->container['minEstimatedDeliveryDate'] = isset($data['minEstimatedDeliveryDate']) ? $data['minEstimatedDeliveryDate'] : null;
        $this->container['pickupStep'] = isset($data['pickupStep']) ? $data['pickupStep'] : null;
        $this->container['shippingStep'] = isset($data['shippingStep']) ? $data['shippingStep'] : null;
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
     * Gets ebaySupportedFulfillment
     *
     * @return bool
     */
    public function getEbaySupportedFulfillment()
    {
        return $this->container['ebaySupportedFulfillment'];
    }

    /**
     * Sets ebaySupportedFulfillment
     *
     * @param bool $ebaySupportedFulfillment This field is only returned if its value is <code>true</code> and indicates that the fulfillment will be shipped via eBay's Global Shipping Program, eBay International Shipping, or the Authenticity Guarantee service program. <br><br>For more information, see the <a href=\"https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/global-shipping-program?id=4646 \" target=\"_blank\">Global Shipping Program</a> help topic.
     *
     * @return $this
     */
    public function setEbaySupportedFulfillment($ebaySupportedFulfillment)
    {
        $this->container['ebaySupportedFulfillment'] = $ebaySupportedFulfillment;

        return $this;
    }

    /**
     * Gets finalDestinationAddress
     *
     * @return \Johncarlson21\EbaySdk\Model\Address
     */
    public function getFinalDestinationAddress()
    {
        return $this->container['finalDestinationAddress'];
    }

    /**
     * Sets finalDestinationAddress
     *
     * @param \Johncarlson21\EbaySdk\Model\Address $finalDestinationAddress finalDestinationAddress
     *
     * @return $this
     */
    public function setFinalDestinationAddress($finalDestinationAddress)
    {
        $this->container['finalDestinationAddress'] = $finalDestinationAddress;

        return $this;
    }

    /**
     * Gets fulfillmentInstructionsType
     *
     * @return string
     */
    public function getFulfillmentInstructionsType()
    {
        return $this->container['fulfillmentInstructionsType'];
    }

    /**
     * Sets fulfillmentInstructionsType
     *
     * @param string $fulfillmentInstructionsType The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of <code>SHIP_TO</code> if the <b>ebaySupportedFulfillment</b> field is returned with a value of <code>true</code>. See the <strong>FulfillmentInstructionsType</strong> definition for more information about different fulfillment types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:FulfillmentInstructionsType'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setFulfillmentInstructionsType($fulfillmentInstructionsType)
    {
        $this->container['fulfillmentInstructionsType'] = $fulfillmentInstructionsType;

        return $this;
    }

    /**
     * Gets maxEstimatedDeliveryDate
     *
     * @return string
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['maxEstimatedDeliveryDate'];
    }

    /**
     * Sets maxEstimatedDeliveryDate
     *
     * @param string $maxEstimatedDeliveryDate This is the estimated latest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the <b>fulfillmentInstructionsType</b> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return $this
     */
    public function setMaxEstimatedDeliveryDate($maxEstimatedDeliveryDate)
    {
        $this->container['maxEstimatedDeliveryDate'] = $maxEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets minEstimatedDeliveryDate
     *
     * @return string
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['minEstimatedDeliveryDate'];
    }

    /**
     * Sets minEstimatedDeliveryDate
     *
     * @param string $minEstimatedDeliveryDate This is the estimated earliest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if  the value of the <b>fulfillmentInstructionsType</b> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return $this
     */
    public function setMinEstimatedDeliveryDate($minEstimatedDeliveryDate)
    {
        $this->container['minEstimatedDeliveryDate'] = $minEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets pickupStep
     *
     * @return \Johncarlson21\EbaySdk\Model\PickupStep
     */
    public function getPickupStep()
    {
        return $this->container['pickupStep'];
    }

    /**
     * Sets pickupStep
     *
     * @param \Johncarlson21\EbaySdk\Model\PickupStep $pickupStep pickupStep
     *
     * @return $this
     */
    public function setPickupStep($pickupStep)
    {
        $this->container['pickupStep'] = $pickupStep;

        return $this;
    }

    /**
     * Gets shippingStep
     *
     * @return \Johncarlson21\EbaySdk\Model\ShippingStep
     */
    public function getShippingStep()
    {
        return $this->container['shippingStep'];
    }

    /**
     * Sets shippingStep
     *
     * @param \Johncarlson21\EbaySdk\Model\ShippingStep $shippingStep shippingStep
     *
     * @return $this
     */
    public function setShippingStep($shippingStep)
    {
        $this->container['shippingStep'] = $shippingStep;

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
