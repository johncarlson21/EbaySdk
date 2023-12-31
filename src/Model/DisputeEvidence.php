<?php
/**
 * DisputeEvidence
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
 * DisputeEvidence Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;evidence&lt;/strong&gt; array that is returned in the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; response if one or more evidential documents are associated with the payment dispute.
 * @package  Johncarlson21\EbaySdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisputeEvidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DisputeEvidence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'evidenceId' => 'string',
        'evidenceType' => 'string',
        'files' => '\Johncarlson21\EbaySdk\Model\FileInfo[]',
        'lineItems' => '\Johncarlson21\EbaySdk\Model\OrderLineItems[]',
        'providedDate' => 'string',
        'requestDate' => 'string',
        'respondByDate' => 'string',
        'shipmentTracking' => '\Johncarlson21\EbaySdk\Model\TrackingInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'evidenceId' => null,
        'evidenceType' => null,
        'files' => null,
        'lineItems' => null,
        'providedDate' => null,
        'requestDate' => null,
        'respondByDate' => null,
        'shipmentTracking' => null
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
        'evidenceId' => 'evidenceId',
        'evidenceType' => 'evidenceType',
        'files' => 'files',
        'lineItems' => 'lineItems',
        'providedDate' => 'providedDate',
        'requestDate' => 'requestDate',
        'respondByDate' => 'respondByDate',
        'shipmentTracking' => 'shipmentTracking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evidenceId' => 'setEvidenceId',
        'evidenceType' => 'setEvidenceType',
        'files' => 'setFiles',
        'lineItems' => 'setLineItems',
        'providedDate' => 'setProvidedDate',
        'requestDate' => 'setRequestDate',
        'respondByDate' => 'setRespondByDate',
        'shipmentTracking' => 'setShipmentTracking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evidenceId' => 'getEvidenceId',
        'evidenceType' => 'getEvidenceType',
        'files' => 'getFiles',
        'lineItems' => 'getLineItems',
        'providedDate' => 'getProvidedDate',
        'requestDate' => 'getRequestDate',
        'respondByDate' => 'getRespondByDate',
        'shipmentTracking' => 'getShipmentTracking'
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
        $this->container['evidenceId'] = isset($data['evidenceId']) ? $data['evidenceId'] : null;
        $this->container['evidenceType'] = isset($data['evidenceType']) ? $data['evidenceType'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['providedDate'] = isset($data['providedDate']) ? $data['providedDate'] : null;
        $this->container['requestDate'] = isset($data['requestDate']) ? $data['requestDate'] : null;
        $this->container['respondByDate'] = isset($data['respondByDate']) ? $data['respondByDate'] : null;
        $this->container['shipmentTracking'] = isset($data['shipmentTracking']) ? $data['shipmentTracking'] : null;
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
     * Gets evidenceId
     *
     * @return string
     */
    public function getEvidenceId()
    {
        return $this->container['evidenceId'];
    }

    /**
     * Sets evidenceId
     *
     * @param string $evidenceId Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     *
     * @return $this
     */
    public function setEvidenceId($evidenceId)
    {
        $this->container['evidenceId'] = $evidenceId;

        return $this;
    }

    /**
     * Gets evidenceType
     *
     * @return string
     */
    public function getEvidenceType()
    {
        return $this->container['evidenceType'];
    }

    /**
     * Sets evidenceType
     *
     * @param string $evidenceType This enumeration value shows the type of evidential file provided. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setEvidenceType($evidenceType)
    {
        $this->container['evidenceType'] = $evidenceType;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Johncarlson21\EbaySdk\Model\FileInfo[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Johncarlson21\EbaySdk\Model\FileInfo[] $files This array shows the name, ID, file type, and upload date for each provided file.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \Johncarlson21\EbaySdk\Model\OrderLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \Johncarlson21\EbaySdk\Model\OrderLineItems[] $lineItems This array shows one or more order line items associated with the evidential document that has been provided.
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets providedDate
     *
     * @return string
     */
    public function getProvidedDate()
    {
        return $this->container['providedDate'];
    }

    /**
     * Sets providedDate
     *
     * @param string $providedDate The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setProvidedDate($providedDate)
    {
        $this->container['providedDate'] = $providedDate;

        return $this;
    }

    /**
     * Gets requestDate
     *
     * @return string
     */
    public function getRequestDate()
    {
        return $this->container['requestDate'];
    }

    /**
     * Sets requestDate
     *
     * @param string $requestDate The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRequestDate($requestDate)
    {
        $this->container['requestDate'] = $requestDate;

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
     * @param string $respondByDate The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay.  <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRespondByDate($respondByDate)
    {
        $this->container['respondByDate'] = $respondByDate;

        return $this;
    }

    /**
     * Gets shipmentTracking
     *
     * @return \Johncarlson21\EbaySdk\Model\TrackingInfo[]
     */
    public function getShipmentTracking()
    {
        return $this->container['shipmentTracking'];
    }

    /**
     * Sets shipmentTracking
     *
     * @param \Johncarlson21\EbaySdk\Model\TrackingInfo[] $shipmentTracking This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned under the <strong>evidence</strong> container if the seller has provided shipment tracking information as evidence to support <code>PROOF_OF_DELIVERY</code> for an INR-related payment dispute.
     *
     * @return $this
     */
    public function setShipmentTracking($shipmentTracking)
    {
        $this->container['shipmentTracking'] = $shipmentTracking;

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
