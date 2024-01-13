# Swagger\Client\SearchBlocksApi

All URIs are relative to *https://api.level.travel*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchBlocksSearchPriceChartGet**](SearchBlocksApi.md#searchblockssearchpricechartget) | **GET** /search_blocks/search_price_chart | Получение цен для гребенки поиска

# **searchBlocksSearchPriceChartGet**
> \Swagger\Client\Model\InlineResponse20027 searchBlocksSearchPriceChartGet($request_id, $content_type, $authorization, $accept, $range, $search_type)

Получение цен для гребенки поиска

Гребенка \"price\":

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = "request_id_example"; // string | request_id поиска, base64 строка
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$range = 90; // float | Количество необходимых дат, от 1 до 100
$search_type = "package"; // string | Тип поискового запроса - по турам или по отелям без перелета

try {
    $result = $apiInstance->searchBlocksSearchPriceChartGet($request_id, $content_type, $authorization, $accept, $range, $search_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchBlocksApi->searchBlocksSearchPriceChartGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| request_id поиска, base64 строка |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **range** | **float**| Количество необходимых дат, от 1 до 100 | [optional] [default to 90]
 **search_type** | **string**| Тип поискового запроса - по турам или по отелям без перелета | [optional] [default to package]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

