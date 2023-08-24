# LinkedOrderLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineItemAspects** | [**\Johncarlson21\EbaySdk\Model\NameValuePair[]**](NameValuePair.md) | This array contains the complete set of items aspects for the linked line item. For example:&lt;br&gt;&lt;pre&gt;\&quot;lineItemAspects\&quot;: [&lt;br&gt;    {&lt;br&gt;        \&quot;name\&quot;: \&quot;Tire Type\&quot;,&lt;br&gt;        \&quot;value\&quot;: \&quot;All Season\&quot;&lt;br&gt;    },&lt;br&gt;&lt;br&gt;    ...&lt;br&gt; &lt;br&gt;    {&lt;br&gt;        \&quot;name\&quot;: \&quot;Car Type\&quot;,&lt;br&gt;        \&quot;value\&quot;: \&quot;Performance\&quot;&lt;br&gt;    }&lt;br&gt;]&lt;/pre&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item&#x27;s listing site, which may vary from the seller&#x27;s language.&lt;/span&gt; | [optional] 
**lineItemId** | **string** | The unique identifier of the linked order line item. | [optional] 
**maxEstimatedDeliveryDate** | **string** | The end of the date range in which the linked line item is expected to be delivered to the shipping address. | [optional] 
**minEstimatedDeliveryDate** | **string** | The beginning of the date range in which the linked line item is expected to be delivered to the shipping address. | [optional] 
**orderId** | **string** | The unique identifier of the order to which the linked line item belongs. | [optional] 
**sellerId** | **string** | The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller. | [optional] 
**shipments** | [**\Johncarlson21\EbaySdk\Model\TrackingInfo[]**](TrackingInfo.md) | An array containing any shipment tracking information available for the linked line item. | [optional] 
**title** | **string** | The listing title of the linked line item. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

