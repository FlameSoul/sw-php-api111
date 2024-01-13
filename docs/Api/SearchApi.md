# Swagger\Client\SearchApi

All URIs are relative to *https://api.level.travel*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchEnqueueGet**](SearchApi.md#searchenqueueget) | **GET** /search/enqueue | Добавление поискового запроса в очередь
[**searchGetGroupedHotelsGet**](SearchApi.md#searchgetgroupedhotelsget) | **GET** /search/get_grouped_hotels | Метод получения списка отелей
[**searchHotelRoomsGet**](SearchApi.md#searchhotelroomsget) | **GET** /search/hotel_rooms | Метод получения комнат в отеле
[**searchLandGet**](SearchApi.md#searchlandget) | **GET** /search/land | Получить поисковые параметры и ссылку на поиск
[**searchStatusGet**](SearchApi.md#searchstatusget) | **GET** /search/status | Статус поискового запроса

# **searchEnqueueGet**
> \Swagger\Client\Model\InlineResponse200 searchEnqueueGet($from_city, $to_country, $adults, $content_type, $authorization, $accept, $start_date, $nights, $flex_dates, $start_date_from, $start_date_till, $end_date_from, $end_date_till, $from_country, $to_city, $hotel_ids, $kids, $kids_ages, $search_type)

Добавление поискового запроса в очередь

Запуск поисковой задачи

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_city = "from_city_example"; // string | Город вылета (name_en)
$to_country = "to_country_example"; // string | Страна назначения (ISO2)
$adults = 56; // int | Количество взрослых туристов
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$start_date = new \DateTime("2013-10-20"); // \DateTime | Дата вылета (обязателен в сочентании с nights)
$nights = "nights_example"; // string | Интервал ночей (обязателен в сочентании с start_date)
$flex_dates = 56; // int | Интервал +/- даты вылеты (дополнительный параметр к сочетанию start_date + nights)
$start_date_from = new \DateTime("2013-10-20"); // \DateTime | Начало интервала даты вылета (обязателен в сочентании с start_date_till, end_date_from, end_date_till)
$start_date_till = new \DateTime("2013-10-20"); // \DateTime | Окончание интервала даты вылета (обязателен в сочентании с start_date_from, end_date_from, end_date_till)
$end_date_from = new \DateTime("2013-10-20"); // \DateTime | Начало интервала даты возвращения (обязателен в сочентании с start_date_from, start_date_till, end_date_till)
$end_date_till = new \DateTime("2013-10-20"); // \DateTime | Окончание интервала даты возвращения (обязателен в сочентании с start_date_from, start_date_till, end_date_from)
$from_country = "from_country_example"; // string | Страна вылета (ISO2)
$to_city = "to_city_example"; // string | Город назначения (name_en)
$hotel_ids = array(56); // int[] | ID Отелей в системе
$kids = 56; // int | Количество детей
$kids_ages = array(56); // int[] | Возраста всех детей
$search_type = "package"; // string | Тип поискового запроса - по турам или по отелям без перелета

try {
    $result = $apiInstance->searchEnqueueGet($from_city, $to_country, $adults, $content_type, $authorization, $accept, $start_date, $nights, $flex_dates, $start_date_from, $start_date_till, $end_date_from, $end_date_till, $from_country, $to_city, $hotel_ids, $kids, $kids_ages, $search_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchEnqueueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_city** | **string**| Город вылета (name_en) |
 **to_country** | **string**| Страна назначения (ISO2) |
 **adults** | **int**| Количество взрослых туристов |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **start_date** | **\DateTime**| Дата вылета (обязателен в сочентании с nights) | [optional]
 **nights** | **string**| Интервал ночей (обязателен в сочентании с start_date) | [optional]
 **flex_dates** | **int**| Интервал +/- даты вылеты (дополнительный параметр к сочетанию start_date + nights) | [optional]
 **start_date_from** | **\DateTime**| Начало интервала даты вылета (обязателен в сочентании с start_date_till, end_date_from, end_date_till) | [optional]
 **start_date_till** | **\DateTime**| Окончание интервала даты вылета (обязателен в сочентании с start_date_from, end_date_from, end_date_till) | [optional]
 **end_date_from** | **\DateTime**| Начало интервала даты возвращения (обязателен в сочентании с start_date_from, start_date_till, end_date_till) | [optional]
 **end_date_till** | **\DateTime**| Окончание интервала даты возвращения (обязателен в сочентании с start_date_from, start_date_till, end_date_from) | [optional]
 **from_country** | **string**| Страна вылета (ISO2) | [optional]
 **to_city** | **string**| Город назначения (name_en) | [optional]
 **hotel_ids** | [**int[]**](../Model/int.md)| ID Отелей в системе | [optional]
 **kids** | **int**| Количество детей | [optional]
 **kids_ages** | [**int[]**](../Model/int.md)| Возраста всех детей | [optional]
 **search_type** | **string**| Тип поискового запроса - по турам или по отелям без перелета | [optional] [default to package]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGetGroupedHotelsGet**
> \Swagger\Client\Model\InlineResponse2002 searchGetGroupedHotelsGet($request_id, $content_type, $authorization, $accept, $filter_price_min, $filter_price_max, $filter_operators, $filter_stars, $filter_instant_confirm, $filter_hotel_name, $filter_rating, $filter_line, $filter_beach_type, $filter_beach_surface, $filter_regions, $filter_category, $filter_wifi, $filter_pool, $filter_heated_pool, $filter_aquapark, $filter_thermal_fun, $filter_aircon, $filter_parking, $filter_bar, $filter_massage, $filter_nanny, $filter_kids_menu, $filter_kids_club, $filter_kids_pool, $sort_by, $page_number, $page_limit)

Метод получения списка отелей

Получения результата поиска сгруппированного по отелю. Возврашаеться предложения с самой дешевой ценой

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = "request_id_example"; // string | ID запроса полученного при поиске
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$filter_price_min = 1.2; // float | Фильтр по минимальной цене
$filter_price_max = 1.2; // float | Фильтр по максимальной цене
$filter_operators = "filter_operators_example"; // string | Массив ID операторов которых мы хотим видеть
$filter_stars = "filter_stars_example"; // string | Фильтр по количеству звезд которые хотим видеть у отебя
$filter_instant_confirm = true; // bool | Наличие моментального подтверждения
$filter_hotel_name = "filter_hotel_name_example"; // string | Фильтр по названию отеля
$filter_rating = 1.2; // float | Фильтр по рейтингу отеля
$filter_line = 1.2; // float | Фильтр по расстоянию до моря
$filter_beach_type = "filter_beach_type_example"; // string | Фильтр по расположению пляжа
$filter_beach_surface = "filter_beach_surface_example"; // string | Фильтр по типа пляжа, принимает массив строк
$filter_regions = "filter_regions_example"; // string | Фильтр по региону, принимает массив ID регионов
$filter_category = "filter_category_example"; // string | Фильтр по типу отеля, принимает массив строк
$filter_wifi = "filter_wifi_example"; // string | Фильтр по типу вайфая который хотим видеть в отеле, принимает массив строк
$filter_pool = true; // bool | Наличие бассейна
$filter_heated_pool = true; // bool | Наличие бассейна с подогревом
$filter_aquapark = true; // bool | Наличие аквапарка
$filter_thermal_fun = true; // bool | Наличие сауны
$filter_aircon = true; // bool | Наличие кондиционера
$filter_parking = true; // bool | Наличие парковки
$filter_bar = true; // bool | Наличие бара
$filter_massage = true; // bool | Наличие массажа
$filter_nanny = true; // bool | Наличие няни
$filter_kids_menu = true; // bool | Наличие детского меню
$filter_kids_club = true; // bool | Наличие детского клуба
$filter_kids_pool = true; // bool | Наличие детского бассейна
$sort_by = "sort_by_example"; // string | Отсортировать выборку по выбраному параметру
$page_number = 56; // int | Пагинация
$page_limit = 56; // int | Пагинация

try {
    $result = $apiInstance->searchGetGroupedHotelsGet($request_id, $content_type, $authorization, $accept, $filter_price_min, $filter_price_max, $filter_operators, $filter_stars, $filter_instant_confirm, $filter_hotel_name, $filter_rating, $filter_line, $filter_beach_type, $filter_beach_surface, $filter_regions, $filter_category, $filter_wifi, $filter_pool, $filter_heated_pool, $filter_aquapark, $filter_thermal_fun, $filter_aircon, $filter_parking, $filter_bar, $filter_massage, $filter_nanny, $filter_kids_menu, $filter_kids_club, $filter_kids_pool, $sort_by, $page_number, $page_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchGetGroupedHotelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| ID запроса полученного при поиске |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **filter_price_min** | **float**| Фильтр по минимальной цене | [optional]
 **filter_price_max** | **float**| Фильтр по максимальной цене | [optional]
 **filter_operators** | **string**| Массив ID операторов которых мы хотим видеть | [optional]
 **filter_stars** | **string**| Фильтр по количеству звезд которые хотим видеть у отебя | [optional]
 **filter_instant_confirm** | **bool**| Наличие моментального подтверждения | [optional]
 **filter_hotel_name** | **string**| Фильтр по названию отеля | [optional]
 **filter_rating** | **float**| Фильтр по рейтингу отеля | [optional]
 **filter_line** | **float**| Фильтр по расстоянию до моря | [optional]
 **filter_beach_type** | **string**| Фильтр по расположению пляжа | [optional]
 **filter_beach_surface** | **string**| Фильтр по типа пляжа, принимает массив строк | [optional]
 **filter_regions** | **string**| Фильтр по региону, принимает массив ID регионов | [optional]
 **filter_category** | **string**| Фильтр по типу отеля, принимает массив строк | [optional]
 **filter_wifi** | **string**| Фильтр по типу вайфая который хотим видеть в отеле, принимает массив строк | [optional]
 **filter_pool** | **bool**| Наличие бассейна | [optional]
 **filter_heated_pool** | **bool**| Наличие бассейна с подогревом | [optional]
 **filter_aquapark** | **bool**| Наличие аквапарка | [optional]
 **filter_thermal_fun** | **bool**| Наличие сауны | [optional]
 **filter_aircon** | **bool**| Наличие кондиционера | [optional]
 **filter_parking** | **bool**| Наличие парковки | [optional]
 **filter_bar** | **bool**| Наличие бара | [optional]
 **filter_massage** | **bool**| Наличие массажа | [optional]
 **filter_nanny** | **bool**| Наличие няни | [optional]
 **filter_kids_menu** | **bool**| Наличие детского меню | [optional]
 **filter_kids_club** | **bool**| Наличие детского клуба | [optional]
 **filter_kids_pool** | **bool**| Наличие детского бассейна | [optional]
 **sort_by** | **string**| Отсортировать выборку по выбраному параметру | [optional]
 **page_number** | **int**| Пагинация | [optional]
 **page_limit** | **int**| Пагинация | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchHotelRoomsGet**
> \Swagger\Client\Model\InlineResponse2004 searchHotelRoomsGet($request_id, $hotel_id, $content_type, $authorization, $accept)

Метод получения комнат в отеле

Получение результат поиска отелей

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = "request_id_example"; // string | ID запроса полученного при поиске
$hotel_id = "hotel_id_example"; // string | ID отеля в системе который мы выбрали
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->searchHotelRoomsGet($request_id, $hotel_id, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchHotelRoomsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| ID запроса полученного при поиске |
 **hotel_id** | **string**| ID отеля в системе который мы выбрали |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLandGet**
> \Swagger\Client\Model\InlineResponse2003 searchLandGet($from_city, $to_country, $adults, $content_type, $authorization, $accept, $nights, $start_date, $flex_dates, $flex_nights, $start_date_from, $start_date_till, $end_date_from, $end_date_till, $kids, $kids_ages, $from_country, $to_city, $hotel_ids, $stars_from, $stars_to, $search_type, $host, $redirect, $api_version, $key, $sign, $js)

Получить поисковые параметры и ссылку на поиск

Редирект/json по параметрам поиска

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_city = "from_city_example"; // string | Название города вылета на английском
$to_country = "to_country_example"; // string | Страна прибытия (iso2)
$adults = 56; // int | Количество взрослых туристов
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$nights = 56; // int | Количество ночей тура (обязательно в сочетании с датой начала тура)
$start_date = new \DateTime("2013-10-20"); // \DateTime | Дата начала тура (обязательно в сочетании с количеством ночей тура)
$flex_dates = true; // bool | Флаг для создания +/-2 диапазона дат вылета (может указываться в сочетании с заданной датой начала тура)
$flex_nights = true; // bool | Флаг для создания +/-2 диапазона количества ночей тура (может указываться в сочетании с заданным количеством ночей тура)
$start_date_from = new \DateTime("2013-10-20"); // \DateTime | Дата начата тура ОТ (обязателен в сочетании с start_date_till + end_date_from + end_date_till)
$start_date_till = new \DateTime("2013-10-20"); // \DateTime | Дата начата тура ДО (обязателен в сочетании с start_date_from + end_date_from + end_date_till)
$end_date_from = new \DateTime("2013-10-20"); // \DateTime | Дата окончания тура ОТ (обязателен в сочетании с start_date_from + start_date_till + end_date_till)
$end_date_till = new \DateTime("2013-10-20"); // \DateTime | Дата окончания тура ДО (обязателен в сочетании с start_date_from + start_date_till + end_date_from)
$kids = 56; // int | Количество детей туристов
$kids_ages = "kids_ages_example"; // string | Возраста всех детей туристов, разделенные запятой
$from_country = "from_country_example"; // string | Страна вылета (iso2)
$to_city = "to_city_example"; // string | Название города прибытия на английском
$hotel_ids = "hotel_ids_example"; // string | ID отелей в системе (разделенные заяптой)
$stars_from = 56; // int | Звездность отелей ОТ
$stars_to = 56; // int | Звездность отлелей ДО
$search_type = "package"; // string | Тип поискового запроса - по турам или по отелям без перелета
$host = "host_example"; // string | Хост
$redirect = true; // bool | Редирект на поиск
$api_version = 56; // int | Версия API
$key = "key_example"; // string | API ключ партнера
$sign = "sign_example"; // string | Signature key партнера
$js = true; // bool | Флаг что метод был вызван с помощью js

try {
    $result = $apiInstance->searchLandGet($from_city, $to_country, $adults, $content_type, $authorization, $accept, $nights, $start_date, $flex_dates, $flex_nights, $start_date_from, $start_date_till, $end_date_from, $end_date_till, $kids, $kids_ages, $from_country, $to_city, $hotel_ids, $stars_from, $stars_to, $search_type, $host, $redirect, $api_version, $key, $sign, $js);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchLandGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_city** | **string**| Название города вылета на английском |
 **to_country** | **string**| Страна прибытия (iso2) |
 **adults** | **int**| Количество взрослых туристов |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **nights** | **int**| Количество ночей тура (обязательно в сочетании с датой начала тура) | [optional]
 **start_date** | **\DateTime**| Дата начала тура (обязательно в сочетании с количеством ночей тура) | [optional]
 **flex_dates** | **bool**| Флаг для создания +/-2 диапазона дат вылета (может указываться в сочетании с заданной датой начала тура) | [optional]
 **flex_nights** | **bool**| Флаг для создания +/-2 диапазона количества ночей тура (может указываться в сочетании с заданным количеством ночей тура) | [optional]
 **start_date_from** | **\DateTime**| Дата начата тура ОТ (обязателен в сочетании с start_date_till + end_date_from + end_date_till) | [optional]
 **start_date_till** | **\DateTime**| Дата начата тура ДО (обязателен в сочетании с start_date_from + end_date_from + end_date_till) | [optional]
 **end_date_from** | **\DateTime**| Дата окончания тура ОТ (обязателен в сочетании с start_date_from + start_date_till + end_date_till) | [optional]
 **end_date_till** | **\DateTime**| Дата окончания тура ДО (обязателен в сочетании с start_date_from + start_date_till + end_date_from) | [optional]
 **kids** | **int**| Количество детей туристов | [optional]
 **kids_ages** | **string**| Возраста всех детей туристов, разделенные запятой | [optional]
 **from_country** | **string**| Страна вылета (iso2) | [optional]
 **to_city** | **string**| Название города прибытия на английском | [optional]
 **hotel_ids** | **string**| ID отелей в системе (разделенные заяптой) | [optional]
 **stars_from** | **int**| Звездность отелей ОТ | [optional]
 **stars_to** | **int**| Звездность отлелей ДО | [optional]
 **search_type** | **string**| Тип поискового запроса - по турам или по отелям без перелета | [optional] [default to package]
 **host** | **string**| Хост | [optional]
 **redirect** | **bool**| Редирект на поиск | [optional]
 **api_version** | **int**| Версия API | [optional]
 **key** | **string**| API ключ партнера | [optional]
 **sign** | **string**| Signature key партнера | [optional]
 **js** | **bool**| Флаг что метод был вызван с помощью js | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchStatusGet**
> \Swagger\Client\Model\InlineResponse2001 searchStatusGet($request_id, $content_type, $authorization, $accept, $show_size)

Статус поискового запроса

Получение статуса поисковой задачи

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = "request_id_example"; // string | ID поискового запроса
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$show_size = true; // bool | Размер запроса

try {
    $result = $apiInstance->searchStatusGet($request_id, $content_type, $authorization, $accept, $show_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| ID поискового запроса |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **show_size** | **bool**| Размер запроса | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

