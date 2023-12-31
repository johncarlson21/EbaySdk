<?php
/**
 * PaymentDisputeSummary
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
 * PaymentDisputeSummary Class Doc Comment
 *
 * @category Class
 * @description This type is used by each payment dispute that is returned with the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; method.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentDisputeSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentDisputeSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => '\Johncarlson21\EbaySdk\Model\SimpleAmount',
        'buyerUsername' => 'string',
        'closedDate' => 'string',
        'openDate' => 'string',
        'orderId' => 'string',
        'paymentDisputeId' => 'string',
        'paymentDisputeStatus' => 'string',
        'reason' => 'string',
        'respondByDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'buyerUsername' => null,
        'closedDate' => null,
        'openDate' => null,
        'orderId' => null,
        'paymentDisputeId' => null,
        'paymentDisputeStatus' => null,
        'reason' => null,
        'respondByDate' => null
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
        'amount' => 'amount',
        'buyerUsername' => 'buyerUsername',
        'closedDate' => 'closedDate',
        'openDate' => 'openDate',
        'orderId' => 'orderId',
        'paymentDisputeId' => 'paymentDisputeId',
        'paymentDisputeStatus' => 'paymentDisputeStatus',
        'reason' => 'reason',
        'respondByDate' => 'respondByDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'buyerUsername' => 'setBuyerUsername',
        'closedDate' => 'setClosedDate',
        'openDate' => 'setOpenDate',
        'orderId' => 'setOrderId',
        'paymentDisputeId' => 'setPaymentDisputeId',
        'paymentDisputeStatus' => 'setPaymentDisputeStatus',
        'reason' => 'setReason',
        'respondByDate' => 'setRespondByDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'buyerUsername' => 'getBuyerUsername',
        'closedDate' => 'getClosedDate',
        'openDate' => 'getOpenDate',
        'orderId' => 'getOrderId',
        'paymentDisputeId' => 'getPaymentDisputeId',
        'paymentDisputeStatus' => 'getPaymentDisputeStatus',
        'reason' => 'getReason',
        'respondByDate' => 'getRespondByDate'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['buyerUsername'] = isset($data['buyerUsername']) ? $data['buyerUsername'] : null;
        $this->container['closedDate'] = isset($data['closedDate']) ? $data['closedDate'] : null;
        $this->container['openDate'] = isset($data['openDate']) ? $data['openDate'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['paymentDisputeId'] = isset($data['paymentDisputeId']) ? $data['paymentDisputeId'] : null;
        $this->container['paymentDisputeStatus'] = isset($data['paymentDisputeStatus']) ? $data['paymentDisputeStatus'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['respondByDate'] = isset($data['respondByDate']) ? $data['respondByDate'] : null;
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
     * Gets amount
     *
     * @return \Johncarlson21\EbaySdk\Model\SimpleAmount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Johncarlson21\EbaySdk\Model\SimpleAmount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets buyerUsername
     *
     * @return string
     */
    public function getBuyerUsername()
    {
        return $this->container['buyerUsername'];
    }

    /**
     * Sets buyerUsername
     *
     * @param string $buyerUsername This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.
     *
     * @return $this
     */
    public function setBuyerUsername($buyerUsername)
    {
        $this->container['buyerUsername'] = $buyerUsername;

        return $this;
    }

    /**
     * Gets closedDate
     *
     * @return string
     */
    public function getClosedDate()
    {
        return $this->container['closedDate'];
    }

    /**
     * Sets closedDate
     *
     * @param string $closedDate The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the <code>CLOSED</code> state.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setClosedDate($closedDate)
    {
        $this->container['closedDate'] = $closedDate;

        return $this;
    }

    /**
     * Gets openDate
     *
     * @return string
     */
    public function getOpenDate()
    {
        return $this->container['openDate'];
    }

    /**
     * Sets openDate
     *
     * @param string $openDate The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setOpenDate($openDate)
    {
        $this->container['openDate'] = $openDate;

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
     * @param string $orderId This is the unique identifier of the order involved in the payment dispute.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets paymentDisputeId
     *
     * @return string
     */
    public function getPaymentDisputeId()
    {
        return $this->container['paymentDisputeId'];
    }

    /**
     * Sets paymentDisputeId
     *
     * @param string $paymentDisputeId This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. This identifier is passed in at the end of the <strong>getPaymentDispute</strong> call URI to retrieve a specific payment dispute. The <strong>getPaymentDispute</strong> method returns more details about a payment dispute than the <strong>getPaymentDisputeSummaries</strong> method.
     *
     * @return $this
     */
    public function setPaymentDisputeId($paymentDisputeId)
    {
        $this->container['paymentDisputeId'] = $paymentDisputeId;

        return $this;
    }

    /**
     * Gets paymentDisputeStatus
     *
     * @return string
     */
    public function getPaymentDisputeStatus()
    {
        return $this->container['paymentDisputeStatus'];
    }

    /**
     * Sets paymentDisputeStatus
     *
     * @param string $paymentDisputeStatus The enumeration value in this field gives the current status of the payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeStateEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPaymentDisputeStatus($paymentDisputeStatus)
    {
        $this->container['paymentDisputeStatus'] = $paymentDisputeStatus;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See <strong>DisputeReasonEnum</strong> type for a description of the supported reasons that buyers can give for initiating a payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeReasonEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets respondByDate
     *
     * @return string
     */
    public function getRespondByDate()
    {
        return $this->container['respondByDate'];
    }

    /**
     * Sets respondByDate
     *
     * @param string $respondByDate The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that require action by the seller, that same seller must call <strong>getPaymentDispute</strong> to see the next action(s) that they can take against the payment dispute.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRespondByDate($respondByDate)
    {
        $this->container['respondByDate'] = $respondByDate;

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
