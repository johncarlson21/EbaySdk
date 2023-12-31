<?php
/**
 * LinkedOrderLineItem
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
 * LinkedOrderLineItem Class Doc Comment
 *
 * @category Class
 * @description This type contains data on a line item that is related to, but not a part of the order.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkedOrderLineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinkedOrderLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lineItemAspects' => '\Johncarlson21\EbaySdk\Model\NameValuePair[]',
        'lineItemId' => 'string',
        'maxEstimatedDeliveryDate' => 'string',
        'minEstimatedDeliveryDate' => 'string',
        'orderId' => 'string',
        'sellerId' => 'string',
        'shipments' => '\Johncarlson21\EbaySdk\Model\TrackingInfo[]',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lineItemAspects' => null,
        'lineItemId' => null,
        'maxEstimatedDeliveryDate' => null,
        'minEstimatedDeliveryDate' => null,
        'orderId' => null,
        'sellerId' => null,
        'shipments' => null,
        'title' => null
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
        'lineItemAspects' => 'lineItemAspects',
        'lineItemId' => 'lineItemId',
        'maxEstimatedDeliveryDate' => 'maxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'minEstimatedDeliveryDate',
        'orderId' => 'orderId',
        'sellerId' => 'sellerId',
        'shipments' => 'shipments',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lineItemAspects' => 'setLineItemAspects',
        'lineItemId' => 'setLineItemId',
        'maxEstimatedDeliveryDate' => 'setMaxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'setMinEstimatedDeliveryDate',
        'orderId' => 'setOrderId',
        'sellerId' => 'setSellerId',
        'shipments' => 'setShipments',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lineItemAspects' => 'getLineItemAspects',
        'lineItemId' => 'getLineItemId',
        'maxEstimatedDeliveryDate' => 'getMaxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'getMinEstimatedDeliveryDate',
        'orderId' => 'getOrderId',
        'sellerId' => 'getSellerId',
        'shipments' => 'getShipments',
        'title' => 'getTitle'
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
        $this->container['lineItemAspects'] = isset($data['lineItemAspects']) ? $data['lineItemAspects'] : null;
        $this->container['lineItemId'] = isset($data['lineItemId']) ? $data['lineItemId'] : null;
        $this->container['maxEstimatedDeliveryDate'] = isset($data['maxEstimatedDeliveryDate']) ? $data['maxEstimatedDeliveryDate'] : null;
        $this->container['minEstimatedDeliveryDate'] = isset($data['minEstimatedDeliveryDate']) ? $data['minEstimatedDeliveryDate'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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
     * Gets lineItemAspects
     *
     * @return \Johncarlson21\EbaySdk\Model\NameValuePair[]
     */
    public function getLineItemAspects()
    {
        return $this->container['lineItemAspects'];
    }

    /**
     * Sets lineItemAspects
     *
     * @param \Johncarlson21\EbaySdk\Model\NameValuePair[] $lineItemAspects This array contains the complete set of items aspects for the linked line item. For example:<br><pre>\"lineItemAspects\": [<br>    {<br>        \"name\": \"Tire Type\",<br>        \"value\": \"All Season\"<br>    },<br><br>    ...<br> <br>    {<br>        \"name\": \"Car Type\",<br>        \"value\": \"Performance\"<br>    }<br>]</pre><span class=\"tablenote\"><strong>Note:</strong> All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.</span>
     *
     * @return $this
     */
    public function setLineItemAspects($lineItemAspects)
    {
        $this->container['lineItemAspects'] = $lineItemAspects;

        return $this;
    }

    /**
     * Gets lineItemId
     *
     * @return string
     */
    public function getLineItemId()
    {
        return $this->container['lineItemId'];
    }

    /**
     * Sets lineItemId
     *
     * @param string $lineItemId The unique identifier of the linked order line item.
     *
     * @return $this
     */
    public function setLineItemId($lineItemId)
    {
        $this->container['lineItemId'] = $lineItemId;

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
     * @param string $maxEstimatedDeliveryDate The end of the date range in which the linked line item is expected to be delivered to the shipping address.
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
     * @param string $minEstimatedDeliveryDate The beginning of the date range in which the linked line item is expected to be delivered to the shipping address.
     *
     * @return $this
     */
    public function setMinEstimatedDeliveryDate($minEstimatedDeliveryDate)
    {
        $this->container['minEstimatedDeliveryDate'] = $minEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId The unique identifier of the order to which the linked line item belongs.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string $sellerId The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \Johncarlson21\EbaySdk\Model\TrackingInfo[]
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \Johncarlson21\EbaySdk\Model\TrackingInfo[] $shipments An array containing any shipment tracking information available for the linked line item.
     *
     * @return $this
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The listing title of the linked line item.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
