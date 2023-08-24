<?php
/**
 * PaymentHold
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
 * PaymentHold Class Doc Comment
 *
 * @category Class
 * @description This type contains information about a hold placed on a payment to a seller for an order, including the reason why the buyer&#x27;s payment for the order is being held, the expected release date of the funds into the seller&#x27;s account, the current state of the hold, and the actual release date if the payment has been released, and possible actions the seller can take to expedite the payout of funds into their account.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentHold implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentHold';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expectedReleaseDate' => 'string',
        'holdAmount' => '\Johncarlson21\EbaySdk\Model\Amount',
        'holdReason' => 'string',
        'holdState' => 'string',
        'releaseDate' => 'string',
        'sellerActionsToRelease' => '\Johncarlson21\EbaySdk\Model\SellerActionsToRelease[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expectedReleaseDate' => null,
        'holdAmount' => null,
        'holdReason' => null,
        'holdState' => null,
        'releaseDate' => null,
        'sellerActionsToRelease' => null
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
        'expectedReleaseDate' => 'expectedReleaseDate',
        'holdAmount' => 'holdAmount',
        'holdReason' => 'holdReason',
        'holdState' => 'holdState',
        'releaseDate' => 'releaseDate',
        'sellerActionsToRelease' => 'sellerActionsToRelease'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expectedReleaseDate' => 'setExpectedReleaseDate',
        'holdAmount' => 'setHoldAmount',
        'holdReason' => 'setHoldReason',
        'holdState' => 'setHoldState',
        'releaseDate' => 'setReleaseDate',
        'sellerActionsToRelease' => 'setSellerActionsToRelease'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expectedReleaseDate' => 'getExpectedReleaseDate',
        'holdAmount' => 'getHoldAmount',
        'holdReason' => 'getHoldReason',
        'holdState' => 'getHoldState',
        'releaseDate' => 'getReleaseDate',
        'sellerActionsToRelease' => 'getSellerActionsToRelease'
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
        $this->container['expectedReleaseDate'] = isset($data['expectedReleaseDate']) ? $data['expectedReleaseDate'] : null;
        $this->container['holdAmount'] = isset($data['holdAmount']) ? $data['holdAmount'] : null;
        $this->container['holdReason'] = isset($data['holdReason']) ? $data['holdReason'] : null;
        $this->container['holdState'] = isset($data['holdState']) ? $data['holdState'] : null;
        $this->container['releaseDate'] = isset($data['releaseDate']) ? $data['releaseDate'] : null;
        $this->container['sellerActionsToRelease'] = isset($data['sellerActionsToRelease']) ? $data['sellerActionsToRelease'] : null;
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
     * Gets expectedReleaseDate
     *
     * @return string
     */
    public function getExpectedReleaseDate()
    {
        return $this->container['expectedReleaseDate'];
    }

    /**
     * Sets expectedReleaseDate
     *
     * @param string $expectedReleaseDate The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return $this
     */
    public function setExpectedReleaseDate($expectedReleaseDate)
    {
        $this->container['expectedReleaseDate'] = $expectedReleaseDate;

        return $this;
    }

    /**
     * Gets holdAmount
     *
     * @return \Johncarlson21\EbaySdk\Model\Amount
     */
    public function getHoldAmount()
    {
        return $this->container['holdAmount'];
    }

    /**
     * Sets holdAmount
     *
     * @param \Johncarlson21\EbaySdk\Model\Amount $holdAmount holdAmount
     *
     * @return $this
     */
    public function setHoldAmount($holdAmount)
    {
        $this->container['holdAmount'] = $holdAmount;

        return $this;
    }

    /**
     * Gets holdReason
     *
     * @return string
     */
    public function getHoldReason()
    {
        return $this->container['holdReason'];
    }

    /**
     * Sets holdReason
     *
     * @param string $holdReason The reason that the payment is being held. A seller's payment may be held for a number of reasons, including when the seller is new, the seller's level is below standard, or if a return case or 'Significantly not as described' case is pending against the seller. This field is always returned with the <strong>paymentHolds</strong> array.
     *
     * @return $this
     */
    public function setHoldReason($holdReason)
    {
        $this->container['holdReason'] = $holdReason;

        return $this;
    }

    /**
     * Gets holdState
     *
     * @return string
     */
    public function getHoldState()
    {
        return $this->container['holdState'];
    }

    /**
     * Sets holdState
     *
     * @param string $holdState The current stage or condition of the hold. This field is always returned with the <strong>paymentHolds</strong> array.<br><br><b>Applicable values:</b><ul><li><code>HELD</code></li><li><code>HELD_PENDING</code></li><li><code>NOT_HELD</code></li><li><code>RELEASE_CONFIRMED</code></li><li><code>RELEASE_FAILED</code></li><li><code>RELEASE_PENDING</code></li><li><code>RELEASED</code></li></ul>
     *
     * @return $this
     */
    public function setHoldState($holdState)
    {
        $this->container['holdState'] = $holdState;

        return $this;
    }

    /**
     * Gets releaseDate
     *
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
     * Sets releaseDate
     *
     * @param string $releaseDate The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller's payment is actually released into the seller's account.<br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return $this
     */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * Gets sellerActionsToRelease
     *
     * @return \Johncarlson21\EbaySdk\Model\SellerActionsToRelease[]
     */
    public function getSellerActionsToRelease()
    {
        return $this->container['sellerActionsToRelease'];
    }

    /**
     * Sets sellerActionsToRelease
     *
     * @param \Johncarlson21\EbaySdk\Model\SellerActionsToRelease[] $sellerActionsToRelease A list of one or more possible actions that the seller can take to expedite the release of the payment hold.
     *
     * @return $this
     */
    public function setSellerActionsToRelease($sellerActionsToRelease)
    {
        $this->container['sellerActionsToRelease'] = $sellerActionsToRelease;

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
