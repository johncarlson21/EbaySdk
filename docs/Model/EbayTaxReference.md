# EbayTaxReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | This field value is returned to indicate the VAT tax type, which will vary by country/region. This string value will be one of the following:&lt;ul&gt;&lt;li&gt;&lt;code&gt;ABN&lt;/code&gt;: if this string is returned, the ID in the &lt;strong&gt;value&lt;/strong&gt; field is an Australia tax ID&lt;/li&gt;&lt;li&gt;&lt;code&gt;DDG&lt;/code&gt;: if this string is returned, it indicates that tax has been collected and remitted for Digitally Delivered Goods (DDG)&lt;/li&gt;&lt;li&gt;&lt;code&gt;IOSS&lt;/code&gt;: if this string is returned, the ID in the &lt;strong&gt;value&lt;/strong&gt; field is an eBay EU or UK IOSS number&lt;/li&gt;&lt;li&gt;&lt;code&gt;IRD&lt;/code&gt;: if this string is returned, the ID in the &lt;strong&gt;value&lt;/strong&gt; field is an eBay New Zealand tax ID&lt;/li&gt;&lt;li&gt;&lt;code&gt;SST&lt;/code&gt;: if this string is returned, the ID in the &lt;b&gt;value&lt;/b&gt; field is an eBay Malaysia taxNumber&lt;/li&gt;&lt;li&gt;&lt;code&gt;OSS&lt;/code&gt;: if this string is returned, the ID in the &lt;strong&gt;value&lt;/strong&gt; field is an  eBay Germany VAT ID&lt;/li&gt;&lt;li&gt;&lt;code&gt;VOEC&lt;/code&gt;: if this string is returned, the ID in the &lt;strong&gt;value&lt;/strong&gt; field is an eBay Norway tax ID&lt;/li&gt;&lt;/ul&gt; | [optional] 
**value** | **string** | The value returned in this field is the VAT identifier number (VATIN), which will vary by country/region. This field will be returned if VAT tax is applicable for the order. The &lt;strong&gt;name&lt;/strong&gt; field indicates the VAT tax type, which will vary by country/region: &lt;ul&gt;&lt;li&gt;&lt;strong&gt;ABN&lt;/strong&gt;: &lt;em&gt;eBay AU tax ID&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;IOSS&lt;/strong&gt;: &lt;em&gt;eBay EU IOSS number&lt;/em&gt; / &lt;em&gt;eBay UK IOSS number&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;IRD&lt;/strong&gt;: &lt;em&gt;eBay NZ tax ID&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;OSS&lt;/strong&gt;: &lt;em&gt;eBay DE VAT ID&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;SST&lt;/b&gt;: &lt;i&gt;eBay MY taxNumber&lt;/i&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;VOEC&lt;/strong&gt;: &lt;em&gt;eBay NO number&lt;/em&gt;&lt;/li&gt;&lt;/ul&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
