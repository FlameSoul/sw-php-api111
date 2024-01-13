# Swagger\Client\ReferencesApi

All URIs are relative to *https://api.level.travel*

Method | HTTP request | Description
------------- | ------------- | -------------
[**referencesAirlinesGet**](ReferencesApi.md#referencesairlinesget) | **GET** /references/airlines | Справочник авиакомпаний
[**referencesAirportsGet**](ReferencesApi.md#referencesairportsget) | **GET** /references/airports | Справочник аэропортов
[**referencesAutocompleteDeparturesGet**](ReferencesApi.md#referencesautocompletedeparturesget) | **GET** /references/autocomplete_departures | Автокомплит городов вылета
[**referencesAutocompleteV2Get**](ReferencesApi.md#referencesautocompletev2get) | **GET** /references/autocomplete_v2 | Новый автокомплит для выбора направлений
[**referencesCatalogsGet**](ReferencesApi.md#referencescatalogsget) | **GET** /references/catalogs | получение справочников в формате CSV
[**referencesCitizenshipsGet**](ReferencesApi.md#referencescitizenshipsget) | **GET** /references/citizenships | Метод получения списка всех возможных гражданств
[**referencesClientDeparturesGet**](ReferencesApi.md#referencesclientdeparturesget) | **GET** /references/client_departures | Доступные города вылета
[**referencesDepartureCitiesGet**](ReferencesApi.md#referencesdeparturecitiesget) | **GET** /references/departure_cities | Доступные города вылета для страны
[**referencesDeparturesGet**](ReferencesApi.md#referencesdeparturesget) | **GET** /references/departures | Справочник мест отправления
[**referencesDestinationsGet**](ReferencesApi.md#referencesdestinationsget) | **GET** /references/destinations | Справочник мест отправления
[**referencesHotelReviewsGet**](ReferencesApi.md#referenceshotelreviewsget) | **GET** /references/hotel_reviews | Получение отызвов об отеле
[**referencesHotelsGet**](ReferencesApi.md#referenceshotelsget) | **GET** /references/hotels | Справочник отелей
[**referencesHotelsImagesPost**](ReferencesApi.md#referenceshotelsimagespost) | **POST** /references/hotels_images | Получение только изображений отелей
[**referencesLiveInfoPromoGet**](ReferencesApi.md#referencesliveinfopromoget) | **GET** /references/live_info_promo | Метод который возвращает динамические тексты под сигаретой
[**referencesOperatorsGet**](ReferencesApi.md#referencesoperatorsget) | **GET** /references/operators | Справочник операторов
[**referencesPlacesGet**](ReferencesApi.md#referencesplacesget) | **GET** /references/places | Метод который возвращает все страны и отдых по впечатлениям по приоритету
[**referencesSearchCalendarDurationGet**](ReferencesApi.md#referencessearchcalendardurationget) | **GET** /references/search_calendar_duration | Минимальные цены на дату с разной длительностью тура
[**referencesSearchCalendarMonthsGet**](ReferencesApi.md#referencessearchcalendarmonthsget) | **GET** /references/search_calendar_months | Минимальные цены за месяц на год
[**referencesSearchCalendarStartDateGet**](ReferencesApi.md#referencessearchcalendarstartdateget) | **GET** /references/search_calendar_start_date | Минимальные цены на тур 7 ночей 2 взрослых
[**referencesUnavailableDatesGet**](ReferencesApi.md#referencesunavailabledatesget) | **GET** /references/unavailable_dates | Метод который возвращает недоступные для поиска даты

# **referencesAirlinesGet**
> \Swagger\Client\Model\InlineResponse2006 referencesAirlinesGet($content_type, $authorization, $accept)

Справочник авиакомпаний

Возврашает список авиакомпаний

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesAirlinesGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesAirlinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesAirportsGet**
> \Swagger\Client\Model\InlineResponse2007 referencesAirportsGet($content_type, $authorization, $accept)

Справочник аэропортов

Возврашает список аэропортов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesAirportsGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesAirportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesAutocompleteDeparturesGet**
> \Swagger\Client\Model\InlineResponse20016 referencesAutocompleteDeparturesGet($query, $content_type, $authorization, $accept)

Автокомплит городов вылета

автокомплит городов вылета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = "query_example"; // string | Поисковая строка
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesAutocompleteDeparturesGet($query, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesAutocompleteDeparturesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Поисковая строка |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesAutocompleteV2Get**
> \Swagger\Client\Model\InlineResponse20014[] referencesAutocompleteV2Get($query, $content_type, $authorization, $accept, $from_city, $search_type)

Новый автокомплит для выбора направлений

автокомплит fuzzy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = "query_example"; // string | Текст для поиска
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$from_city = "from_city_example"; // string | Название города вылета на английском
$search_type = "search_type_example"; // string | Тип поиска

try {
    $result = $apiInstance->referencesAutocompleteV2Get($query, $content_type, $authorization, $accept, $from_city, $search_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesAutocompleteV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Текст для поиска |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **from_city** | **string**| Название города вылета на английском | [optional]
 **search_type** | **string**| Тип поиска | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesCatalogsGet**
> string referencesCatalogsGet($name, $content_type, $authorization, $accept)

получение справочников в формате CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Название каталога
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesCatalogsGet($name, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesCatalogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Название каталога |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesCitizenshipsGet**
> \Swagger\Client\Model\InlineResponse20010 referencesCitizenshipsGet($content_type, $authorization, $accept)

Метод получения списка всех возможных гражданств

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesCitizenshipsGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesCitizenshipsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesClientDeparturesGet**
> \Swagger\Client\Model\InlineResponse20017 referencesClientDeparturesGet($automatically_detect_city, $content_type, $authorization, $accept, $lat, $long, $city)

Доступные города вылета

Определение города вылета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$automatically_detect_city = true; // bool | Флаг автоматического определения города нахождения
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$lat = 3.4; // float | Координата широты
$long = 3.4; // float | Координата долготы
$city = "city_example"; // string | Последний выбранный город

try {
    $result = $apiInstance->referencesClientDeparturesGet($automatically_detect_city, $content_type, $authorization, $accept, $lat, $long, $city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesClientDeparturesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **automatically_detect_city** | **bool**| Флаг автоматического определения города нахождения |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **lat** | **float**| Координата широты | [optional]
 **long** | **float**| Координата долготы | [optional]
 **city** | **string**| Последний выбранный город | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesDepartureCitiesGet**
> \Swagger\Client\Model\InlineResponse20020 referencesDepartureCitiesGet($to_country, $content_type, $authorization, $accept)

Доступные города вылета для страны

Доступные города вылета по странам

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$to_country = "to_country_example"; // string | Страна в которую планируется полететь
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesDepartureCitiesGet($to_country, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesDepartureCitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_country** | **string**| Страна в которую планируется полететь |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesDeparturesGet**
> \Swagger\Client\Model\InlineResponse2009 referencesDeparturesGet($content_type, $authorization, $accept)

Справочник мест отправления

Возврашает список место отправления.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesDeparturesGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesDeparturesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesDestinationsGet**
> \Swagger\Client\Model\InlineResponse2005 referencesDestinationsGet($content_type, $authorization, $accept)

Справочник мест отправления

Возврашает список место отправления.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesDestinationsGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesDestinationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: applications/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesHotelReviewsGet**
> \Swagger\Client\Model\InlineResponse20013 referencesHotelReviewsGet($hotel_id, $content_type, $authorization, $accept)

Получение отызвов об отеле

Метод получения отзывов об отеле по его id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hotel_id = 56; // int | Идентификатор отеля
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesHotelReviewsGet($hotel_id, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesHotelReviewsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hotel_id** | **int**| Идентификатор отеля |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesHotelsGet**
> \Swagger\Client\Model\InlineResponse20011 referencesHotelsGet($hotel_ids, $region_ids, $content_type, $authorization, $accept)

Справочник отелей

Возврашает информацию об отелях

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hotel_ids = "hotel_ids_example"; // string | Массив ID отелей через запятую
$region_ids = "region_ids_example"; // string | Массив Id стран или городов через запятую
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesHotelsGet($hotel_ids, $region_ids, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesHotelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hotel_ids** | **string**| Массив ID отелей через запятую |
 **region_ids** | **string**| Массив Id стран или городов через запятую |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesHotelsImagesPost**
> \Swagger\Client\Model\InlineResponse20012 referencesHotelsImagesPost($hotel_ids, $content_type, $authorization, $accept)

Получение только изображений отелей

Получение только изображений отелей(урезанный метод hotels)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hotel_ids = "hotel_ids_example"; // string | список id отелей через запятую, максимальное количество отелей - 100
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesHotelsImagesPost($hotel_ids, $content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesHotelsImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hotel_ids** | **string**| список id отелей через запятую, максимальное количество отелей - 100 |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesLiveInfoPromoGet**
> \Swagger\Client\Model\InlineResponse20018 referencesLiveInfoPromoGet($content_type, $authorization, $accept)

Метод который возвращает динамические тексты под сигаретой

Метод который возвращает динамические тексты под сигаретой

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesLiveInfoPromoGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesLiveInfoPromoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesOperatorsGet**
> \Swagger\Client\Model\InlineResponse2008 referencesOperatorsGet($content_type, $authorization, $accept)

Справочник операторов

Возврашает список возможных операторов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия

try {
    $result = $apiInstance->referencesOperatorsGet($content_type, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesOperatorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesPlacesGet**
> \Swagger\Client\Model\InlineResponse20015 referencesPlacesGet($from_city, $content_type, $authorization, $accept, $search_type)

Метод который возвращает все страны и отдых по впечатлениям по приоритету

Метод который возвращает данные о доступности стран

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_city = "from_city_example"; // string | Город откуда планируется вылетать
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$search_type = "search_type_example"; // string | Тип поиска

try {
    $result = $apiInstance->referencesPlacesGet($from_city, $content_type, $authorization, $accept, $search_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesPlacesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_city** | **string**| Город откуда планируется вылетать |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **search_type** | **string**| Тип поиска | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesSearchCalendarDurationGet**
> \Swagger\Client\Model\InlineResponse20022 referencesSearchCalendarDurationGet($start_date, $place_id, $departure_id, $adults, $search_type, $content_type, $authorization, $accept, $kids)

Минимальные цены на дату с разной длительностью тура

Цены для календаря по длительности тура 2-20

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата вылета
$place_id = 1.2; // float | ID места прилета
$departure_id = 1.2; // float | ID города вылета
$adults = 1.2; // float | Количество взрослых
$search_type = "search_type_example"; // string | Тип поискового запроса - по турам или по отелям без перелета
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$kids = array(3.4); // float[] | Возраста детей

try {
    $result = $apiInstance->referencesSearchCalendarDurationGet($start_date, $place_id, $departure_id, $adults, $search_type, $content_type, $authorization, $accept, $kids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesSearchCalendarDurationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | [**\DateTime**](../Model/.md)| Дата вылета |
 **place_id** | **float**| ID места прилета |
 **departure_id** | **float**| ID города вылета |
 **adults** | **float**| Количество взрослых |
 **search_type** | **string**| Тип поискового запроса - по турам или по отелям без перелета |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **kids** | [**float[]**](../Model/float.md)| Возраста детей | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesSearchCalendarMonthsGet**
> \Swagger\Client\Model\InlineResponse20021 referencesSearchCalendarMonthsGet($place_id, $departure_id, $adults, $search_type, $content_type, $authorization, $accept, $kids)

Минимальные цены за месяц на год

Данные о ценах для календаря на год

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$place_id = 1.2; // float | ID места прилета
$departure_id = 1.2; // float | ID города вылета
$adults = 1.2; // float | Количество взрослых
$search_type = "search_type_example"; // string | Тип поискового запроса - по турам или по отелям без перелета
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$kids = array(3.4); // float[] | Возраста детей

try {
    $result = $apiInstance->referencesSearchCalendarMonthsGet($place_id, $departure_id, $adults, $search_type, $content_type, $authorization, $accept, $kids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesSearchCalendarMonthsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place_id** | **float**| ID места прилета |
 **departure_id** | **float**| ID города вылета |
 **adults** | **float**| Количество взрослых |
 **search_type** | **string**| Тип поискового запроса - по турам или по отелям без перелета |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **kids** | [**float[]**](../Model/float.md)| Возраста детей | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesSearchCalendarStartDateGet**
> \Swagger\Client\Model\InlineResponse20023 referencesSearchCalendarStartDateGet($place_id, $departure_id, $search_type, $start_date, $content_type, $authorization, $accept, $range)

Минимальные цены на тур 7 ночей 2 взрослых

Ручка получения цен для календаря

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$place_id = 1.2; // float | ID места прилета
$departure_id = 1.2; // float | ID города вылета
$search_type = "search_type_example"; // string | Тип поискового запроса - по турам или по отелям без перелета
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Минимальная дата
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$range = 0; // float | Количество месяцев

try {
    $result = $apiInstance->referencesSearchCalendarStartDateGet($place_id, $departure_id, $search_type, $start_date, $content_type, $authorization, $accept, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesSearchCalendarStartDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place_id** | **float**| ID места прилета |
 **departure_id** | **float**| ID города вылета |
 **search_type** | **string**| Тип поискового запроса - по турам или по отелям без перелета |
 **start_date** | [**\DateTime**](../Model/.md)| Минимальная дата |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **range** | **float**| Количество месяцев | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referencesUnavailableDatesGet**
> \Swagger\Client\Model\InlineResponse20019 referencesUnavailableDatesGet($city_from, $country_to, $content_type, $authorization, $accept, $search_type)

Метод который возвращает недоступные для поиска даты

Метод который возвращает недоступные для поиска даты

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$city_from = "city_from_example"; // string | Город откуда планируется вылетать
$country_to = "country_to_example"; // string | Страна куда планируется лететь
$content_type = "content_type_example"; // string | Тип возвращаемых данных
$authorization = "authorization_example"; // string | Токен авторизации партнера
$accept = "accept_example"; // string | API версия
$search_type = "search_type_example"; // string | Тип поиска

try {
    $result = $apiInstance->referencesUnavailableDatesGet($city_from, $country_to, $content_type, $authorization, $accept, $search_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->referencesUnavailableDatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city_from** | **string**| Город откуда планируется вылетать |
 **country_to** | **string**| Страна куда планируется лететь |
 **content_type** | **string**| Тип возвращаемых данных |
 **authorization** | **string**| Токен авторизации партнера |
 **accept** | **string**| API версия |
 **search_type** | **string**| Тип поиска | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

