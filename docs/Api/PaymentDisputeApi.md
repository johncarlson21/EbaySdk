# Johncarlson21\EbaySdk\PaymentDisputeApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptPaymentDispute**](PaymentDisputeApi.md#acceptpaymentdispute) | **POST** /payment_dispute/{payment_dispute_id}/accept | Accept Payment Dispute
[**addEvidence**](PaymentDisputeApi.md#addevidence) | **POST** /payment_dispute/{payment_dispute_id}/add_evidence | Add an Evidence File
[**contestPaymentDispute**](PaymentDisputeApi.md#contestpaymentdispute) | **POST** /payment_dispute/{payment_dispute_id}/contest | Contest Payment Dispute
[**fetchEvidenceContent**](PaymentDisputeApi.md#fetchevidencecontent) | **GET** /payment_dispute/{payment_dispute_id}/fetch_evidence_content | Get Payment Dispute Evidence File
[**getActivities**](PaymentDisputeApi.md#getactivities) | **GET** /payment_dispute/{payment_dispute_id}/activity | Get Payment Dispute Activity
[**getPaymentDispute**](PaymentDisputeApi.md#getpaymentdispute) | **GET** /payment_dispute/{payment_dispute_id} | Get Payment Dispute Details
[**getPaymentDisputeSummaries**](PaymentDisputeApi.md#getpaymentdisputesummaries) | **GET** /payment_dispute_summary | Search Payment Dispute by Filters
[**updateEvidence**](PaymentDisputeApi.md#updateevidence) | **POST** /payment_dispute/{payment_dispute_id}/update_evidence | Update evidence
[**uploadEvidenceFile**](PaymentDisputeApi.md#uploadevidencefile) | **POST** /payment_dispute/{payment_dispute_id}/upload_evidence_file | Upload an Evidence File

# **acceptPaymentDispute**
> acceptPaymentDispute($contentType, $paymentDisputeId, $body)

Accept Payment Dispute

This method is used if the seller wishes to accept a payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br>The <strong>revision</strong> field in the request payload is required, and the <strong>returnAddress</strong> field should be supplied if the seller is expecting the buyer to return the item. See the Request Payload section for more information on theste fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = "contentType_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to accept. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.<br><br>This path parameter is required, and the actual identifier value is passed in right after the <strong>payment_dispute</strong> resource. See the Resource URI above.
$body = new \Johncarlson21\EbaySdk\Model\AcceptPaymentDisputeRequest(); // \Johncarlson21\EbaySdk\Model\AcceptPaymentDisputeRequest | 

try {
    $apiInstance->acceptPaymentDispute($contentType, $paymentDisputeId, $body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->acceptPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to accept. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;This path parameter is required, and the actual identifier value is passed in right after the &lt;strong&gt;payment_dispute&lt;/strong&gt; resource. See the Resource URI above. |
 **body** | [**\Johncarlson21\EbaySdk\Model\AcceptPaymentDisputeRequest**](../Model/AcceptPaymentDisputeRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEvidence**
> \Johncarlson21\EbaySdk\Model\AddEvidencePaymentDisputeResponse addEvidence($contentType, $paymentDisputeId, $body)

Add an Evidence File

This method is used by the seller to add one or more evidence files to address a payment dispute initiated by the buyer. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> All evidence files should be uploaded using <strong>addEvidence</strong> and <strong>updateEvidence</strong>  before the seller decides to contest the payment dispute. Once the seller has officially contested the dispute (using <strong>contestPaymentDispute</strong> or through My eBay), the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods can no longer be used. In the <strong>evidenceRequests</strong> array of the <strong>getPaymentDispute</strong> response, eBay prompts the seller with the type of evidence file(s) that will be needed to contest the payment dispute.</span><br><br>The file(s) to add are identified through the <strong>files</strong> array in the request payload.  Adding one or more new evidence files for a payment dispute triggers the creation of an evidence file, and the unique identifier for the new evidence file is automatically generated and returned in the <strong>evidenceId</strong> field of the <strong>addEvidence</strong> response payload upon a successful call.<br><br>The type of evidence being added should be specified in the <strong>evidenceType</strong> field. All files being added (if more than one) should correspond to this evidence type.<br><br>Upon a successful call, an <strong>evidenceId</strong> value is returned in the response. This indicates that a new evidence set has been created for the payment dispute, and this evidence set includes the evidence file(s) that were passed in to the <strong>fileId</strong> array. The <strong>evidenceId</strong> value will be needed if the seller wishes to add to the evidence set by using the <strong>updateEvidence</strong> method, or if they want to retrieve a specific evidence file within the evidence set by using the <strong>fetchEvidenceContent</strong> method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = "contentType_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to add evidence for a contested payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.<br><br>This path parameter is required, and the actual identifier value is passed in right after the <strong>payment_dispute</strong> resource. See the Resource URI above.
$body = new \Johncarlson21\EbaySdk\Model\AddEvidencePaymentDisputeRequest(); // \Johncarlson21\EbaySdk\Model\AddEvidencePaymentDisputeRequest | 

try {
    $result = $apiInstance->addEvidence($contentType, $paymentDisputeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->addEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to add evidence for a contested payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;This path parameter is required, and the actual identifier value is passed in right after the &lt;strong&gt;payment_dispute&lt;/strong&gt; resource. See the Resource URI above. |
 **body** | [**\Johncarlson21\EbaySdk\Model\AddEvidencePaymentDisputeRequest**](../Model/AddEvidencePaymentDisputeRequest.md)|  | [optional]

### Return type

[**\Johncarlson21\EbaySdk\Model\AddEvidencePaymentDisputeResponse**](../Model/AddEvidencePaymentDisputeResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contestPaymentDispute**
> contestPaymentDispute($contentType, $paymentDisputeId, $body)

Contest Payment Dispute

This method is used if the seller wishes to contest a payment dispute initiated by the buyer. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> Before contesting a payment dispute, the seller must upload all supporting files using the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods. Once the seller has officially contested the dispute (using <strong>contestPaymentDispute</strong>), the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods can no longer be used. In the <strong>evidenceRequests</strong> array of the <strong>getPaymentDispute</strong> response, eBay prompts the seller with the type of supporting file(s) that will be needed to contest the payment dispute.</span><br><br>If a seller decides to contest a payment dispute, that seller should be prepared to provide supporting documents such as proof of delivery, proof of authentication, or other documents. The type of supporting documents that the seller will provide will depend on why the buyer filed the payment dispute.<br><br>The <strong>revision</strong> field in the request payload is required, and the <strong>returnAddress</strong> field should be supplied if the seller is expecting the buyer to return the item. See the Request Payload section for more information on these fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = "contentType_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to contest. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.<br><br>This path parameter is required, and the actual identifier value is passed in right after the <strong>payment_dispute</strong> resource. See the Resource URI above.
$body = new \Johncarlson21\EbaySdk\Model\ContestPaymentDisputeRequest(); // \Johncarlson21\EbaySdk\Model\ContestPaymentDisputeRequest | 

try {
    $apiInstance->contestPaymentDispute($contentType, $paymentDisputeId, $body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->contestPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to contest. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;This path parameter is required, and the actual identifier value is passed in right after the &lt;strong&gt;payment_dispute&lt;/strong&gt; resource. See the Resource URI above. |
 **body** | [**\Johncarlson21\EbaySdk\Model\ContestPaymentDisputeRequest**](../Model/ContestPaymentDisputeRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEvidenceContent**
> string[] fetchEvidenceContent($paymentDisputeId, $evidenceId, $fileId)

Get Payment Dispute Evidence File

This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI:<ul><li><strong>payment_dispute_id</strong>: the identifier of the payment dispute. The identifier of each payment dispute is returned in the <strong>getPaymentDisputeSummaries</strong> response.</li><li><strong>evidence_id</strong>: the identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <strong>getPaymentDispute</strong> response.</li><li><strong>file_id</strong>: the identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter. The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <strong>getPaymentDispute</strong> response.</li></ul><p>An actual binary file is returned if the call is successful. An error will occur if any of three identifiers are invalid.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = "paymentDisputeId_example"; // string | The identifier of the payment dispute. The identifier of each payment dispute is returned in the <strong>getPaymentDisputeSummaries</strong> response. This identifier is passed in as a path parameter at the end of the call URI.
$evidenceId = "evidenceId_example"; // string | The identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <strong>getPaymentDispute</strong> response.<br><br>Below is an example of the syntax to use for this query parameter:<br><br><code>evidence_id=12345678</code>
$fileId = "fileId_example"; // string | The identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter. The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <strong>getPaymentDispute</strong> response. <br><br>Below is an example of the syntax to use for this query parameter:<br><br><code>file_id=12345678</code>

try {
    $result = $apiInstance->fetchEvidenceContent($paymentDisputeId, $evidenceId, $fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->fetchEvidenceContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| The identifier of the payment dispute. The identifier of each payment dispute is returned in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response. This identifier is passed in as a path parameter at the end of the call URI. |
 **evidenceId** | **string**| The identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the &lt;strong&gt;evidence&lt;/strong&gt; array in the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;Below is an example of the syntax to use for this query parameter:&lt;br&gt;&lt;br&gt;&lt;code&gt;evidence_id&#x3D;12345678&lt;/code&gt; |
 **fileId** | **string**| The identifier of an evidential file. This file must belong to the evidential file set identified through the &lt;strong&gt;evidence_id&lt;/strong&gt; query parameter. The identifier of each evidential file is returned under the &lt;strong&gt;evidence.files&lt;/strong&gt; array in the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; response. &lt;br&gt;&lt;br&gt;Below is an example of the syntax to use for this query parameter:&lt;br&gt;&lt;br&gt;&lt;code&gt;file_id&#x3D;12345678&lt;/code&gt; |

### Return type

**string[]**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivities**
> \Johncarlson21\EbaySdk\Model\PaymentDisputeActivityHistory getActivities($paymentDisputeId)

Get Payment Dispute Activity

This method retrieve a log of activity for a payment dispute. The identifier of the payment dispute is passed in as a path parameter. The output includes a timestamp for each action of the payment dispute, from creation to resolution, and all steps in between.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute for which the user wishes to see all activity. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.<br><br>This path parameter is required, and the actual identifier value is passed in right after the <strong>payment_dispute</strong> resource. See the Resource URI above.

try {
    $result = $apiInstance->getActivities($paymentDisputeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute for which the user wishes to see all activity. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;This path parameter is required, and the actual identifier value is passed in right after the &lt;strong&gt;payment_dispute&lt;/strong&gt; resource. See the Resource URI above. |

### Return type

[**\Johncarlson21\EbaySdk\Model\PaymentDisputeActivityHistory**](../Model/PaymentDisputeActivityHistory.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentDispute**
> \Johncarlson21\EbaySdk\Model\PaymentDispute getPaymentDispute($paymentDisputeId)

Get Payment Dispute Details

This method retrieves detailed information on a specific payment dispute. The payment dispute identifier is passed in as path parameter at the end of the call URI.<br><br>Below is a summary of the information that is retrieved:<ul><li>Current status of payment dispute</li><li>Amount of the payment dispute</li><li>Reason the payment dispute was opened</li><li>Order and line items associated with the payment dispute</li><li>Seller response options if an action is currently required on the payment dispute</li><li>Details on the results of the payment dispute if it has been closed</li><li>Details on any evidence that was provided by the seller to fight the payment dispute</li></ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute to retrieve. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.

try {
    $result = $apiInstance->getPaymentDispute($paymentDisputeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed in at the end of the call URI to identify the payment dispute to retrieve. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response. |

### Return type

[**\Johncarlson21\EbaySdk\Model\PaymentDispute**](../Model/PaymentDispute.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentDisputeSummaries**
> \Johncarlson21\EbaySdk\Model\DisputeSummaryResponse getPaymentDisputeSummaries($orderId, $buyerUsername, $openDateFrom, $openDateTo, $paymentDisputeStatus, $limit, $offset)

Search Payment Dispute by Filters

This method is used retrieve one or more payment disputes filed against the seller. These payment disputes can be open or recently closed. The following filter types are available in the request payload to control the payment disputes that are returned:<ul><li>Dispute filed against a specific order (<b>order_id</b> parameter is used)</li><li>Dispute(s) filed by a specific buyer (<b>buyer_username</b> parameter is used)</li><li>Dispute(s) filed within a specific date range (<b>open_date_from</b> and/or <b>open_date_to</b> parameters are used)</li><li>Disputes in a specific state (<b>payment_dispute_status</b> parameter is used)</li></ul>More than one of these filter types can be used together. See the request payload request fields for more information about how each filter is used.<br><br>If none of the filters are used, all open and recently closed payment disputes are returned.<br><br>Pagination is also available. See the <b>limit</b> and <b>offset</b> fields for more information on how pagination is used for this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = "orderId_example"; // string | This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored.
$buyerUsername = "buyerUsername_example"; // string | This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific seller. The string that is passed in to this query parameter is the eBay user ID of the buyer.
$openDateFrom = "openDateFrom_example"; // string | The <b>open_date_from</b> and/or <b>open_date_to</b> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <b>open_date_from</b> and/or <b>open_date_to</b> filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <b>open_date_from</b> field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a <b>open_date_from</b> field is used, but a <b>open_date_to</b> field is not used, the <b>open_date_to</b> value will default to 90 days after the date specified in the <b>open_date_from</b> field, or to the present time if less than 90 days in the past.<br><br>The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
$openDateTo = "openDateTo_example"; // string | The <b>open_date_from</b> and/or <b>open_date_to</b> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <b>open_date_from</b> and/or <b>open_date_to</b> filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <b>open_date_to</b> field sets the ending date of the date range, and can be set up to 90 days from the date set in the <b>open_date_from</b> field. <br><br>The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
$paymentDisputeStatus = "paymentDisputeStatus_example"; // string | This filter is used if the seller wishes to only retrieve payment disputes in a specific state. More than one value can be specified. If no <b>payment_dispute_status</b> filter is used, payment disputes in all states are returned in the response. See <strong>DisputeStateEnum</strong> type for supported values.
$limit = "limit_example"; // string | The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results.<br><br><b>Min</b>: 1; <b>Max</b>: 200; <b>Default</b>: 200
$offset = "offset_example"; // string | This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the <b>offset</b> value to <code>0</code> (default value), the first payment dispute in the result set appears at the top of the response. <br><br>Combine <b>offset</b> with the <b>limit</b> parameter to control the payment disputes returned in the response. For example, if you supply an <b>offset</b> value of <code>0</code> and a <b>limit</b> value of <code>10</code>, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an <b>offset</b> value of <code>10</code> and a <b>limit</b> value of <code>20</code>, the response will contain payment disputes 11-30 from the result set that matches the input criteria.<br><br><b>Min</b>: 0; <b>Max</b>: total number of payment disputes - 1; <b>Default</b>: 0

try {
    $result = $apiInstance->getPaymentDisputeSummaries($orderId, $buyerUsername, $openDateFrom, $openDateTo, $paymentDisputeStatus, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getPaymentDisputeSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored. | [optional]
 **buyerUsername** | **string**| This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific seller. The string that is passed in to this query parameter is the eBay user ID of the buyer. | [optional]
 **openDateFrom** | **string**| The &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.&lt;br&gt;&lt;br&gt;The &lt;b&gt;open_date_from&lt;/b&gt; field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a &lt;b&gt;open_date_from&lt;/b&gt; field is used, but a &lt;b&gt;open_date_to&lt;/b&gt; field is not used, the &lt;b&gt;open_date_to&lt;/b&gt; value will default to 90 days after the date specified in the &lt;b&gt;open_date_from&lt;/b&gt; field, or to the present time if less than 90 days in the past.&lt;br&gt;&lt;br&gt;The ISO-8601 format looks like this: &lt;em&gt;yyyy-MM-ddThh:mm.ss.sssZ&lt;/em&gt;. An example would be &lt;code&gt;2019-08-04T19:09:02.768Z&lt;/code&gt;. | [optional]
 **openDateTo** | **string**| The &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.&lt;br&gt;&lt;br&gt;The &lt;b&gt;open_date_to&lt;/b&gt; field sets the ending date of the date range, and can be set up to 90 days from the date set in the &lt;b&gt;open_date_from&lt;/b&gt; field. &lt;br&gt;&lt;br&gt;The ISO-8601 format looks like this: &lt;em&gt;yyyy-MM-ddThh:mm.ss.sssZ&lt;/em&gt;. An example would be &lt;code&gt;2019-08-04T19:09:02.768Z&lt;/code&gt;. | [optional]
 **paymentDisputeStatus** | **string**| This filter is used if the seller wishes to only retrieve payment disputes in a specific state. More than one value can be specified. If no &lt;b&gt;payment_dispute_status&lt;/b&gt; filter is used, payment disputes in all states are returned in the response. See &lt;strong&gt;DisputeStateEnum&lt;/strong&gt; type for supported values. | [optional]
 **limit** | **string**| The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min&lt;/b&gt;: 1; &lt;b&gt;Max&lt;/b&gt;: 200; &lt;b&gt;Default&lt;/b&gt;: 200 | [optional]
 **offset** | **string**| This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the &lt;b&gt;offset&lt;/b&gt; value to &lt;code&gt;0&lt;/code&gt; (default value), the first payment dispute in the result set appears at the top of the response. &lt;br&gt;&lt;br&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; parameter to control the payment disputes returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; value of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; value of &lt;code&gt;10&lt;/code&gt;, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an &lt;b&gt;offset&lt;/b&gt; value of &lt;code&gt;10&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; value of &lt;code&gt;20&lt;/code&gt;, the response will contain payment disputes 11-30 from the result set that matches the input criteria.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min&lt;/b&gt;: 0; &lt;b&gt;Max&lt;/b&gt;: total number of payment disputes - 1; &lt;b&gt;Default&lt;/b&gt;: 0 | [optional]

### Return type

[**\Johncarlson21\EbaySdk\Model\DisputeSummaryResponse**](../Model/DisputeSummaryResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEvidence**
> updateEvidence($contentType, $paymentDisputeId, $body)

Update evidence

This method is used by the seller to update an existing evidence set for a payment dispute with one or more evidence files. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> All evidence files should be uploaded using <strong>addEvidence</strong> and <strong>updateEvidence</strong>  before the seller decides to contest the payment dispute. Once the seller has officially contested the dispute (using <strong>contestPaymentDispute</strong> or through My eBay), the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods can no longer be used. In the <strong>evidenceRequests</strong> array of the <strong>getPaymentDispute</strong> response, eBay prompts the seller with the type of evidence file(s) that will be needed to contest the payment dispute.</span><br><br>The unique identifier of the evidence set to update is specified through the <strong>evidenceId</strong> field, and the file(s) to add are identified through the <strong>files</strong> array in the request payload. The unique identifier for an evidence file is automatically generated and returned in the <strong>fileId</strong> field of the <strong>uploadEvidence</strong> response payload upon a successful call. Sellers must make sure to capture the <strong>fileId</strong> value for each evidence file that is uploaded with the <strong>uploadEvidence</strong> method.<br><br>The type of evidence being added should be specified in the <strong>evidenceType</strong> field.  All files being added (if more than one) should correspond to this evidence type.<br><br>Upon a successful call, an http status code of <code>204 Success</code> is returned. There is no response payload unless an error occurs. To verify that a new file is a part of the evidence set, the seller can use the <strong>fetchEvidenceContent</strong> method, passing in the proper <strong>evidenceId</strong> and <strong>fileId</strong> values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = "contentType_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to update the evidence set for a contested payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.<br><br>This path parameter is required, and the actual identifier value is passed in right after the <strong>payment_dispute</strong> resource. See the Resource URI above.
$body = new \Johncarlson21\EbaySdk\Model\UpdateEvidencePaymentDisputeRequest(); // \Johncarlson21\EbaySdk\Model\UpdateEvidencePaymentDisputeRequest | 

try {
    $apiInstance->updateEvidence($contentType, $paymentDisputeId, $body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->updateEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to update the evidence set for a contested payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;This path parameter is required, and the actual identifier value is passed in right after the &lt;strong&gt;payment_dispute&lt;/strong&gt; resource. See the Resource URI above. |
 **body** | [**\Johncarlson21\EbaySdk\Model\UpdateEvidencePaymentDisputeRequest**](../Model/UpdateEvidencePaymentDisputeRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadEvidenceFile**
> \Johncarlson21\EbaySdk\Model\FileEvidence uploadEvidenceFile($paymentDisputeId, $contentType)

Upload an Evidence File

This method is used to upload an evidence file for a contested payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> The <strong>uploadEvidenceFile</strong> only uploads an encrypted, binary image file (using <strong>multipart/form-data</strong> HTTP request header), and does not have a JSON-based request payload.<br><br>Use 'file' as the name of the key that you use to upload the image file. The upload will not be successful if a different key name is used.<br><br>The three image formats supported at this time are <strong>.JPEG</strong>, <strong>.JPG</strong>, and <strong>.PNG</strong>.</span><br><br>After the file is successfully uploaded, the seller will need to grab the <strong>fileId</strong> value in the response payload to add this file to a new evidence set using the <strong>addEvidence</strong> method, or to add this file to an existing evidence set using the <strong>updateEvidence</strong> method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Johncarlson21\EbaySdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Johncarlson21\EbaySdk\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentDisputeId = "paymentDisputeId_example"; // string | This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to upload an evidence file. This identifier is automatically created by eBay after the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the <strong>paymentDisputeId</strong> field in the <strong>getPaymentDisputeSummaries</strong> response.<br><br>This path parameter is required, and the actual identifier value is passed in right after the <strong>payment_dispute</strong> resource. See the Resource URI above.
$contentType = "contentType_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>multipart/form-data</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->uploadEvidenceFile($paymentDisputeId, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->uploadEvidenceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentDisputeId** | **string**| This is the unique identifier of the payment dispute. This path parameter must be passed into the call URI to identify the payment dispute for which the user plans to upload an evidence file. This identifier is automatically created by eBay after the payment dispute comes into the eBay system. The unique identifier for payment disputes is returned in the &lt;strong&gt;paymentDisputeId&lt;/strong&gt; field in the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; response.&lt;br&gt;&lt;br&gt;This path parameter is required, and the actual identifier value is passed in right after the &lt;strong&gt;payment_dispute&lt;/strong&gt; resource. See the Resource URI above. |
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;multipart/form-data&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Johncarlson21\EbaySdk\Model\FileEvidence**](../Model/FileEvidence.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

