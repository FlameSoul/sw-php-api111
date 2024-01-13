# Swagger\Client\PackagesApi

All URIs are relative to *https://api.level.travel*

Method | HTTP request | Description
------------- | ------------- | -------------
[**packagesPackageDetailsGet**](PackagesApi.md#packagespackagedetailsget) | **GET** /packages/package_details | Создание пакета
[**packagesShowGet**](PackagesApi.md#packagesshowget) | **GET** /packages/show | Предложения отеля
[**packagesUpsaleOptionsGet**](PackagesApi.md#packagesupsaleoptionsget) | **GET** /packages/upsale_options | Метод который отдает массив доп услуг для пакета

# **packagesPackageDetailsGet**
> \Swagger\Client\Model\InlineResponse20026 packagesPackageDetailsGet($content_type, $authorization, $accept, $body)

Создание пакета

Создание пакета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$body = new \Swagger\Client\Model\PackagesPackageDetailsBody(); // \Swagger\Client\Model\PackagesPackageDetailsBody | 

try {
    $result = $apiInstance->packagesPackageDetailsGet($content_type, $authorization, $accept, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesPackageDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **body** | [**\Swagger\Client\Model\PackagesPackageDetailsBody**](../Model/PackagesPackageDetailsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesShowGet**
> \Swagger\Client\Model\InlineResponse20024 packagesShowGet($package_id, $content_type, $authorization, $accept, $locale, $currency)

Предложения отеля

основная информация о пакете

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = 56; // int | ID пакета
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$locale = "locale_example"; // string | Язык локали
$currency = "currency_example"; // string | Валюта

try {
    $result = $apiInstance->packagesShowGet($package_id, $content_type, $authorization, $accept, $locale, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **int**| ID пакета |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **locale** | **string**| Язык локали | [optional]
 **currency** | **string**| Валюта | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesUpsaleOptionsGet**
> \Swagger\Client\Model\InlineResponse20025 packagesUpsaleOptionsGet($package_id, $flight_pair_id, $content_type, $authorization, $accept)

Метод который отдает массив доп услуг для пакета

Метод отдает все возможные дополнительные опции для пакета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_id = "package_id_example"; // string | Идентификатор пакета
$flight_pair_id = "flight_pair_id_example"; // string | Идентификатор перелета
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->packagesUpsaleOptionsGet($package_id, $flight_pair_id, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesUpsaleOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Идентификатор пакета |
 **flight_pair_id** | **string**| Идентификатор перелета |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

