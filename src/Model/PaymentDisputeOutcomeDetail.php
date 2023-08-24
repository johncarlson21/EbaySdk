<?php
/**
 * PaymentDisputeOutcomeDetail
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

namespace Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model;

use \ArrayAccess;
use \Johncarlson21\EbaySdk\ObjectSerializer;

/**
 * PaymentDisputeOutcomeDetail Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;resolution&lt;/strong&gt; container that is returned for payment disputes that have been resolved.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentDisputeOutcomeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentDisputeOutcomeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fees' => '\Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount',
        'protectedAmount' => '\Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount',
        'protectionStatus' => 'string',
        'reasonForClosure' => 'string',
        'recoupAmount' => '\Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount',
        'totalFeeCredit' => '\Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fees' => null,
        'protectedAmount' => null,
        'protectionStatus' => null,
        'reasonForClosure' => null,
        'recoupAmount' => null,
        'totalFeeCredit' => null
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
        'fees' => 'fees',
        'protectedAmount' => 'protectedAmount',
        'protectionStatus' => 'protectionStatus',
        'reasonForClosure' => 'reasonForClosure',
        'recoupAmount' => 'recoupAmount',
        'totalFeeCredit' => 'totalFeeCredit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fees' => 'setFees',
        'protectedAmount' => 'setProtectedAmount',
        'protectionStatus' => 'setProtectionStatus',
        'reasonForClosure' => 'setReasonForClosure',
        'recoupAmount' => 'setRecoupAmount',
        'totalFeeCredit' => 'setTotalFeeCredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fees' => 'getFees',
        'protectedAmount' => 'getProtectedAmount',
        'protectionStatus' => 'getProtectionStatus',
        'reasonForClosure' => 'getReasonForClosure',
        'recoupAmount' => 'getRecoupAmount',
        'totalFeeCredit' => 'getTotalFeeCredit'
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
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['protectedAmount'] = isset($data['protectedAmount']) ? $data['protectedAmount'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['reasonForClosure'] = isset($data['reasonForClosure']) ? $data['reasonForClosure'] : null;
        $this->container['recoupAmount'] = isset($data['recoupAmount']) ? $data['recoupAmount'] : null;
        $this->container['totalFeeCredit'] = isset($data['totalFeeCredit']) ? $data['totalFeeCredit'] : null;
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
     * Gets fees
     *
     * @return \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount $fees fees
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets protectedAmount
     *
     * @return \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount
     */
    public function getProtectedAmount()
    {
        return $this->container['protectedAmount'];
    }

    /**
     * Sets protectedAmount
     *
     * @param \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount $protectedAmount protectedAmount
     *
     * @return $this
     */
    public function setProtectedAmount($protectedAmount)
    {
        $this->container['protectedAmount'] = $protectedAmount;

        return $this;
    }

    /**
     * Gets protectionStatus
     *
     * @return string
     */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
     * Sets protectionStatus
     *
     * @param string $protectionStatus This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ProtectionStatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;

        return $this;
    }

    /**
     * Gets reasonForClosure
     *
     * @return string
     */
    public function getReasonForClosure()
    {
        return $this->container['reasonForClosure'];
    }

    /**
     * Sets reasonForClosure
     *
     * @param string $reasonForClosure The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:OutcomeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReasonForClosure($reasonForClosure)
    {
        $this->container['reasonForClosure'] = $reasonForClosure;

        return $this;
    }

    /**
     * Gets recoupAmount
     *
     * @return \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount
     */
    public function getRecoupAmount()
    {
        return $this->container['recoupAmount'];
    }

    /**
     * Sets recoupAmount
     *
     * @param \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount $recoupAmount recoupAmount
     *
     * @return $this
     */
    public function setRecoupAmount($recoupAmount)
    {
        $this->container['recoupAmount'] = $recoupAmount;

        return $this;
    }

    /**
     * Gets totalFeeCredit
     *
     * @return \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount
     */
    public function getTotalFeeCredit()
    {
        return $this->container['totalFeeCredit'];
    }

    /**
     * Sets totalFeeCredit
     *
     * @param \Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount $totalFeeCredit totalFeeCredit
     *
     * @return $this
     */
    public function setTotalFeeCredit($totalFeeCredit)
    {
        $this->container['totalFeeCredit'] = $totalFeeCredit;

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
