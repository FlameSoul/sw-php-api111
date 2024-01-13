# Swagger\Client\RoomRatesApi

All URIs are relative to *https://api.level.travel*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roomRatesShowGet**](RoomRatesApi.md#roomratesshowget) | **GET** /room_rates/show | Список тарифов для отеля

# **roomRatesShowGet**
> roomRatesShowGet($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel, $filter_meals)

Список тарифов для отеля

Метод возвращает список тарифов для отеля. \\  \\ Возможна фильтрация тарифов по признаку бесплатной отмены и/или типу питания.  \\ Основная логика копируется из ручки hotel_rooms за исключением дополнительных полей.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = "request_id_example"; // string | ID запроса
$hotel_id = 1.2; // float | ID отеля
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$filter_free_cancel = true; // bool | Фильтр предложений по признаку Бесплатная отмена
$filter_meals = "filter_meals_example"; // string | Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой

try {
    $apiInstance->roomRatesShowGet($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel, $filter_meals);
} catch (Exception $e) {
    echo 'Exception when calling RoomRatesApi->roomRatesShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| ID запроса |
 **hotel_id** | **float**| ID отеля |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **filter_free_cancel** | **bool**| Фильтр предложений по признаку Бесплатная отмена | [optional]
 **filter_meals** | **string**| Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

