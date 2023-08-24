# RefundItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refundAmount** | [**\Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\SimpleAmount**](SimpleAmount.md) |  | [optional] 
**lineItemId** | **string** | The unique identifier of an order line item. This identifier is created once a buyer purchases a &#x27;Buy It Now&#x27; item or if an auction listing ends with a winning bidder. Either this field or the &lt;b&gt;legacyReference&lt;/b&gt; container is needed to identify an individual order line item that will receive a refund.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The &lt;b&gt;lineItemId&lt;/b&gt; field is used to identify an order line item in REST API format, and the  &lt;b&gt;legacyReference&lt;/b&gt; container is used to identify an order line item in Trading/legacy API format. Both legacy and REST API identifiers are returned in &lt;b&gt;getOrder&lt;/b&gt; (Fulfillment API) and &lt;b&gt;GetOrders&lt;/b&gt; (Trading API).&lt;/span&gt; | [optional] 
**legacyReference** | [**\Johncarlson21\EbaySdk\Johncarlson21\EbaySdk\Model\LegacyReference**](LegacyReference.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

