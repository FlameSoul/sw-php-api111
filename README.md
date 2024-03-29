# SwaggerClient-php
<center>                         <img src=\"https://img.cdn.level.travel/assets/logo/vector-58a947fae5d47fa53329be95ff9cff853e8889f70ac61fc2d2b6572a5998330e.svg\">                         <br><br>                         <h1>Партнёрская документация Open API</h1>                       </center>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.level.travel*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PackagesApi* | [**packagesPackageDetailsGet**](docs/Api/PackagesApi.md#packagespackagedetailsget) | **GET** /packages/package_details | Создание пакета
*PackagesApi* | [**packagesShowGet**](docs/Api/PackagesApi.md#packagesshowget) | **GET** /packages/show | Предложения отеля
*PackagesApi* | [**packagesUpsaleOptionsGet**](docs/Api/PackagesApi.md#packagesupsaleoptionsget) | **GET** /packages/upsale_options | Метод который отдает массив доп услуг для пакета
*ReferencesApi* | [**referencesAirlinesGet**](docs/Api/ReferencesApi.md#referencesairlinesget) | **GET** /references/airlines | Справочник авиакомпаний
*ReferencesApi* | [**referencesAirportsGet**](docs/Api/ReferencesApi.md#referencesairportsget) | **GET** /references/airports | Справочник аэропортов
*ReferencesApi* | [**referencesAutocompleteDeparturesGet**](docs/Api/ReferencesApi.md#referencesautocompletedeparturesget) | **GET** /references/autocomplete_departures | Автокомплит городов вылета
*ReferencesApi* | [**referencesAutocompleteV2Get**](docs/Api/ReferencesApi.md#referencesautocompletev2get) | **GET** /references/autocomplete_v2 | Новый автокомплит для выбора направлений
*ReferencesApi* | [**referencesCatalogsGet**](docs/Api/ReferencesApi.md#referencescatalogsget) | **GET** /references/catalogs | получение справочников в формате CSV
*ReferencesApi* | [**referencesCitizenshipsGet**](docs/Api/ReferencesApi.md#referencescitizenshipsget) | **GET** /references/citizenships | Метод получения списка всех возможных гражданств
*ReferencesApi* | [**referencesClientDeparturesGet**](docs/Api/ReferencesApi.md#referencesclientdeparturesget) | **GET** /references/client_departures | Доступные города вылета
*ReferencesApi* | [**referencesDepartureCitiesGet**](docs/Api/ReferencesApi.md#referencesdeparturecitiesget) | **GET** /references/departure_cities | Доступные города вылета для страны
*ReferencesApi* | [**referencesDeparturesGet**](docs/Api/ReferencesApi.md#referencesdeparturesget) | **GET** /references/departures | Справочник мест отправления
*ReferencesApi* | [**referencesDestinationsGet**](docs/Api/ReferencesApi.md#referencesdestinationsget) | **GET** /references/destinations | Справочник мест отправления
*ReferencesApi* | [**referencesHotelReviewsGet**](docs/Api/ReferencesApi.md#referenceshotelreviewsget) | **GET** /references/hotel_reviews | Получение отызвов об отеле
*ReferencesApi* | [**referencesHotelsGet**](docs/Api/ReferencesApi.md#referenceshotelsget) | **GET** /references/hotels | Справочник отелей
*ReferencesApi* | [**referencesHotelsImagesPost**](docs/Api/ReferencesApi.md#referenceshotelsimagespost) | **POST** /references/hotels_images | Получение только изображений отелей
*ReferencesApi* | [**referencesLiveInfoPromoGet**](docs/Api/ReferencesApi.md#referencesliveinfopromoget) | **GET** /references/live_info_promo | Метод который возвращает динамические тексты под сигаретой
*ReferencesApi* | [**referencesOperatorsGet**](docs/Api/ReferencesApi.md#referencesoperatorsget) | **GET** /references/operators | Справочник операторов
*ReferencesApi* | [**referencesPlacesGet**](docs/Api/ReferencesApi.md#referencesplacesget) | **GET** /references/places | Метод который возвращает все страны и отдых по впечатлениям по приоритету
*ReferencesApi* | [**referencesSearchCalendarDurationGet**](docs/Api/ReferencesApi.md#referencessearchcalendardurationget) | **GET** /references/search_calendar_duration | Минимальные цены на дату с разной длительностью тура
*ReferencesApi* | [**referencesSearchCalendarMonthsGet**](docs/Api/ReferencesApi.md#referencessearchcalendarmonthsget) | **GET** /references/search_calendar_months | Минимальные цены за месяц на год
*ReferencesApi* | [**referencesSearchCalendarStartDateGet**](docs/Api/ReferencesApi.md#referencessearchcalendarstartdateget) | **GET** /references/search_calendar_start_date | Минимальные цены на тур 7 ночей 2 взрослых
*ReferencesApi* | [**referencesUnavailableDatesGet**](docs/Api/ReferencesApi.md#referencesunavailabledatesget) | **GET** /references/unavailable_dates | Метод который возвращает недоступные для поиска даты
*RoomRatesApi* | [**roomRatesShowGet**](docs/Api/RoomRatesApi.md#roomratesshowget) | **GET** /room_rates/show | Список тарифов для отеля
*SearchApi* | [**searchEnqueueGet**](docs/Api/SearchApi.md#searchenqueueget) | **GET** /search/enqueue | Добавление поискового запроса в очередь
*SearchApi* | [**searchGetGroupedHotelsGet**](docs/Api/SearchApi.md#searchgetgroupedhotelsget) | **GET** /search/get_grouped_hotels | Метод получения списка отелей
*SearchApi* | [**searchHotelRoomsGet**](docs/Api/SearchApi.md#searchhotelroomsget) | **GET** /search/hotel_rooms | Метод получения комнат в отеле
*SearchApi* | [**searchLandGet**](docs/Api/SearchApi.md#searchlandget) | **GET** /search/land | Получить поисковые параметры и ссылку на поиск
*SearchApi* | [**searchStatusGet**](docs/Api/SearchApi.md#searchstatusget) | **GET** /search/status | Статус поискового запроса
*SearchBlocksApi* | [**searchBlocksSearchPriceChartGet**](docs/Api/SearchBlocksApi.md#searchblockssearchpricechartget) | **GET** /search_blocks/search_price_chart | Получение цен для гребенки поиска

## Documentation For Models

 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20010Citizenships](docs/Model/InlineResponse20010Citizenships.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011City](docs/Model/InlineResponse20011City.md)
 - [InlineResponse20011Country](docs/Model/InlineResponse20011Country.md)
 - [InlineResponse20011Facts](docs/Model/InlineResponse20011Facts.md)
 - [InlineResponse20011Features](docs/Model/InlineResponse20011Features.md)
 - [InlineResponse20011Hotels](docs/Model/InlineResponse20011Hotels.md)
 - [InlineResponse20011Images](docs/Model/InlineResponse20011Images.md)
 - [InlineResponse20011RestTypes](docs/Model/InlineResponse20011RestTypes.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20012Hotels](docs/Model/InlineResponse20012Hotels.md)
 - [InlineResponse20012Images](docs/Model/InlineResponse20012Images.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Hotel](docs/Model/InlineResponse20013Hotel.md)
 - [InlineResponse20013Reviews](docs/Model/InlineResponse20013Reviews.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20015Attractions](docs/Model/InlineResponse20015Attractions.md)
 - [InlineResponse20015Countries](docs/Model/InlineResponse20015Countries.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Departures](docs/Model/InlineResponse20016Departures.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20017Departures](docs/Model/InlineResponse20017Departures.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20018HotPricesByCountry](docs/Model/InlineResponse20018HotPricesByCountry.md)
 - [InlineResponse20018HotTours](docs/Model/InlineResponse20018HotTours.md)
 - [InlineResponse20018LatestOrders](docs/Model/InlineResponse20018LatestOrders.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse20019ArrivalDates](docs/Model/InlineResponse20019ArrivalDates.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20020Departures](docs/Model/InlineResponse20020Departures.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20021Result](docs/Model/InlineResponse20021Result.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20022Result](docs/Model/InlineResponse20022Result.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20023Result](docs/Model/InlineResponse20023Result.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20024Availability](docs/Model/InlineResponse20024Availability.md)
 - [InlineResponse20024CancellationPolicy](docs/Model/InlineResponse20024CancellationPolicy.md)
 - [InlineResponse20024CancellationPolicyStages](docs/Model/InlineResponse20024CancellationPolicyStages.md)
 - [InlineResponse20024Context](docs/Model/InlineResponse20024Context.md)
 - [InlineResponse20024DatesInfo](docs/Model/InlineResponse20024DatesInfo.md)
 - [InlineResponse20024Departure](docs/Model/InlineResponse20024Departure.md)
 - [InlineResponse20024Extras](docs/Model/InlineResponse20024Extras.md)
 - [InlineResponse20024Hotel](docs/Model/InlineResponse20024Hotel.md)
 - [InlineResponse20024HotelFacts](docs/Model/InlineResponse20024HotelFacts.md)
 - [InlineResponse20024HotelImages](docs/Model/InlineResponse20024HotelImages.md)
 - [InlineResponse20024HotelInfo](docs/Model/InlineResponse20024HotelInfo.md)
 - [InlineResponse20024HotelLocation](docs/Model/InlineResponse20024HotelLocation.md)
 - [InlineResponse20024HotelLocationCountry](docs/Model/InlineResponse20024HotelLocationCountry.md)
 - [InlineResponse20024HotelLocationRegion](docs/Model/InlineResponse20024HotelLocationRegion.md)
 - [InlineResponse20024HotelVisa](docs/Model/InlineResponse20024HotelVisa.md)
 - [InlineResponse20024Labels](docs/Model/InlineResponse20024Labels.md)
 - [InlineResponse20024MiscData](docs/Model/InlineResponse20024MiscData.md)
 - [InlineResponse20024Operator](docs/Model/InlineResponse20024Operator.md)
 - [InlineResponse20024RoomInfo](docs/Model/InlineResponse20024RoomInfo.md)
 - [InlineResponse20024RoomInfoFacilities](docs/Model/InlineResponse20024RoomInfoFacilities.md)
 - [InlineResponse20024RoomInfoImages](docs/Model/InlineResponse20024RoomInfoImages.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20025Schema](docs/Model/InlineResponse20025Schema.md)
 - [InlineResponse20025SchemaExtras](docs/Model/InlineResponse20025SchemaExtras.md)
 - [InlineResponse20025SchemaOptions](docs/Model/InlineResponse20025SchemaOptions.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20026Package](docs/Model/InlineResponse20026Package.md)
 - [InlineResponse20026PackageCancellationPolicy](docs/Model/InlineResponse20026PackageCancellationPolicy.md)
 - [InlineResponse20026PackageExtras](docs/Model/InlineResponse20026PackageExtras.md)
 - [InlineResponse20026PackageHotel](docs/Model/InlineResponse20026PackageHotel.md)
 - [InlineResponse20026PackageMiscData](docs/Model/InlineResponse20026PackageMiscData.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20027Result](docs/Model/InlineResponse20027Result.md)
 - [InlineResponse2002Availability](docs/Model/InlineResponse2002Availability.md)
 - [InlineResponse2002Availability1](docs/Model/InlineResponse2002Availability1.md)
 - [InlineResponse2002Context](docs/Model/InlineResponse2002Context.md)
 - [InlineResponse2002Context1](docs/Model/InlineResponse2002Context1.md)
 - [InlineResponse2002Dates](docs/Model/InlineResponse2002Dates.md)
 - [InlineResponse2002Dates1](docs/Model/InlineResponse2002Dates1.md)
 - [InlineResponse2002Extras](docs/Model/InlineResponse2002Extras.md)
 - [InlineResponse2002FilteredResults](docs/Model/InlineResponse2002FilteredResults.md)
 - [InlineResponse2002Filters](docs/Model/InlineResponse2002Filters.md)
 - [InlineResponse2002FiltersAircon](docs/Model/InlineResponse2002FiltersAircon.md)
 - [InlineResponse2002FiltersAquapark](docs/Model/InlineResponse2002FiltersAquapark.md)
 - [InlineResponse2002FiltersBar](docs/Model/InlineResponse2002FiltersBar.md)
 - [InlineResponse2002FiltersBeachSurface](docs/Model/InlineResponse2002FiltersBeachSurface.md)
 - [InlineResponse2002FiltersBeachType](docs/Model/InlineResponse2002FiltersBeachType.md)
 - [InlineResponse2002FiltersInstantConfirm](docs/Model/InlineResponse2002FiltersInstantConfirm.md)
 - [InlineResponse2002FiltersKidsClub](docs/Model/InlineResponse2002FiltersKidsClub.md)
 - [InlineResponse2002FiltersKidsMenu](docs/Model/InlineResponse2002FiltersKidsMenu.md)
 - [InlineResponse2002FiltersKidsPool](docs/Model/InlineResponse2002FiltersKidsPool.md)
 - [InlineResponse2002FiltersLine](docs/Model/InlineResponse2002FiltersLine.md)
 - [InlineResponse2002FiltersMassage](docs/Model/InlineResponse2002FiltersMassage.md)
 - [InlineResponse2002FiltersMeals](docs/Model/InlineResponse2002FiltersMeals.md)
 - [InlineResponse2002FiltersNanny](docs/Model/InlineResponse2002FiltersNanny.md)
 - [InlineResponse2002FiltersOperators](docs/Model/InlineResponse2002FiltersOperators.md)
 - [InlineResponse2002FiltersParking](docs/Model/InlineResponse2002FiltersParking.md)
 - [InlineResponse2002FiltersPaymentBenefits](docs/Model/InlineResponse2002FiltersPaymentBenefits.md)
 - [InlineResponse2002FiltersPrices](docs/Model/InlineResponse2002FiltersPrices.md)
 - [InlineResponse2002FiltersPricesSegments](docs/Model/InlineResponse2002FiltersPricesSegments.md)
 - [InlineResponse2002FiltersRating](docs/Model/InlineResponse2002FiltersRating.md)
 - [InlineResponse2002FiltersRegions](docs/Model/InlineResponse2002FiltersRegions.md)
 - [InlineResponse2002FiltersSkiDistance](docs/Model/InlineResponse2002FiltersSkiDistance.md)
 - [InlineResponse2002FiltersSkiIn](docs/Model/InlineResponse2002FiltersSkiIn.md)
 - [InlineResponse2002FiltersStars](docs/Model/InlineResponse2002FiltersStars.md)
 - [InlineResponse2002FiltersThermalFun](docs/Model/InlineResponse2002FiltersThermalFun.md)
 - [InlineResponse2002FiltersTravelBenefits](docs/Model/InlineResponse2002FiltersTravelBenefits.md)
 - [InlineResponse2002FiltersWifi](docs/Model/InlineResponse2002FiltersWifi.md)
 - [InlineResponse2002Hotel](docs/Model/InlineResponse2002Hotel.md)
 - [InlineResponse2002Hotel1](docs/Model/InlineResponse2002Hotel1.md)
 - [InlineResponse2002Hotel1AdditionalImages](docs/Model/InlineResponse2002Hotel1AdditionalImages.md)
 - [InlineResponse2002Hotel1Features](docs/Model/InlineResponse2002Hotel1Features.md)
 - [InlineResponse2002Hotel1Image](docs/Model/InlineResponse2002Hotel1Image.md)
 - [InlineResponse2002Hotel1Images](docs/Model/InlineResponse2002Hotel1Images.md)
 - [InlineResponse2002Hotel1RestTypes](docs/Model/InlineResponse2002Hotel1RestTypes.md)
 - [InlineResponse2002HotelAdditionalImages](docs/Model/InlineResponse2002HotelAdditionalImages.md)
 - [InlineResponse2002HotelFeatures](docs/Model/InlineResponse2002HotelFeatures.md)
 - [InlineResponse2002HotelImage](docs/Model/InlineResponse2002HotelImage.md)
 - [InlineResponse2002HotelImages](docs/Model/InlineResponse2002HotelImages.md)
 - [InlineResponse2002HotelRestTypes](docs/Model/InlineResponse2002HotelRestTypes.md)
 - [InlineResponse2002Hotels](docs/Model/InlineResponse2002Hotels.md)
 - [InlineResponse2002Labels](docs/Model/InlineResponse2002Labels.md)
 - [InlineResponse2002Labels1](docs/Model/InlineResponse2002Labels1.md)
 - [InlineResponse2002OpPansionPrices](docs/Model/InlineResponse2002OpPansionPrices.md)
 - [InlineResponse2002OpPansionPrices1](docs/Model/InlineResponse2002OpPansionPrices1.md)
 - [InlineResponse2002PansionPrices](docs/Model/InlineResponse2002PansionPrices.md)
 - [InlineResponse2002PansionPrices1](docs/Model/InlineResponse2002PansionPrices1.md)
 - [InlineResponse2002Statistics](docs/Model/InlineResponse2002Statistics.md)
 - [InlineResponse2002Status](docs/Model/InlineResponse2002Status.md)
 - [InlineResponse2002SurchargesByLevel](docs/Model/InlineResponse2002SurchargesByLevel.md)
 - [InlineResponse2002SurchargesByLevel1](docs/Model/InlineResponse2002SurchargesByLevel1.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2003SearchParams](docs/Model/InlineResponse2003SearchParams.md)
 - [InlineResponse2003SearchParamsFrom](docs/Model/InlineResponse2003SearchParamsFrom.md)
 - [InlineResponse2003SearchParamsFromCity](docs/Model/InlineResponse2003SearchParamsFromCity.md)
 - [InlineResponse2003SearchParamsFromCountry](docs/Model/InlineResponse2003SearchParamsFromCountry.md)
 - [InlineResponse2003SearchParamsKids](docs/Model/InlineResponse2003SearchParamsKids.md)
 - [InlineResponse2003SearchParamsNights](docs/Model/InlineResponse2003SearchParamsNights.md)
 - [InlineResponse2003SearchParamsOptions](docs/Model/InlineResponse2003SearchParamsOptions.md)
 - [InlineResponse2003SearchParamsStars](docs/Model/InlineResponse2003SearchParamsStars.md)
 - [InlineResponse2003SearchParamsTo](docs/Model/InlineResponse2003SearchParamsTo.md)
 - [InlineResponse2003SearchParamsToCity](docs/Model/InlineResponse2003SearchParamsToCity.md)
 - [InlineResponse2003SearchParamsToCountry](docs/Model/InlineResponse2003SearchParamsToCountry.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Context](docs/Model/InlineResponse2004Context.md)
 - [InlineResponse2004Labels](docs/Model/InlineResponse2004Labels.md)
 - [InlineResponse2004LtExtras](docs/Model/InlineResponse2004LtExtras.md)
 - [InlineResponse2004MealTypes](docs/Model/InlineResponse2004MealTypes.md)
 - [InlineResponse2004Offers](docs/Model/InlineResponse2004Offers.md)
 - [InlineResponse2004OffersExtras](docs/Model/InlineResponse2004OffersExtras.md)
 - [InlineResponse2004OffersLtExtras](docs/Model/InlineResponse2004OffersLtExtras.md)
 - [InlineResponse2004OffersRO](docs/Model/InlineResponse2004OffersRO.md)
 - [InlineResponse2004Result](docs/Model/InlineResponse2004Result.md)
 - [InlineResponse2004Room](docs/Model/InlineResponse2004Room.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Cities](docs/Model/InlineResponse2005Cities.md)
 - [InlineResponse2005Countries](docs/Model/InlineResponse2005Countries.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2006Airlines](docs/Model/InlineResponse2006Airlines.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Airports](docs/Model/InlineResponse2007Airports.md)
 - [InlineResponse2007City](docs/Model/InlineResponse2007City.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Logo](docs/Model/InlineResponse2008Logo.md)
 - [InlineResponse2008LogoX1](docs/Model/InlineResponse2008LogoX1.md)
 - [InlineResponse2008LogoX130x50](docs/Model/InlineResponse2008LogoX130x50.md)
 - [InlineResponse2008LogoX2](docs/Model/InlineResponse2008LogoX2.md)
 - [InlineResponse2008LogoX260x100](docs/Model/InlineResponse2008LogoX260x100.md)
 - [InlineResponse2008LogoX3](docs/Model/InlineResponse2008LogoX3.md)
 - [InlineResponse2008Operators](docs/Model/InlineResponse2008Operators.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Airports](docs/Model/InlineResponse2009Airports.md)
 - [InlineResponse2009Departures](docs/Model/InlineResponse2009Departures.md)
 - [InlineResponse200SearchParams](docs/Model/InlineResponse200SearchParams.md)
 - [InlineResponse200SearchParamsFrom](docs/Model/InlineResponse200SearchParamsFrom.md)
 - [InlineResponse200SearchParamsFromCity](docs/Model/InlineResponse200SearchParamsFromCity.md)
 - [InlineResponse200SearchParamsFromCountry](docs/Model/InlineResponse200SearchParamsFromCountry.md)
 - [InlineResponse200SearchParamsTo](docs/Model/InlineResponse200SearchParamsTo.md)
 - [InlineResponse200SearchParamsToCity](docs/Model/InlineResponse200SearchParamsToCity.md)
 - [InlineResponse200SearchParamsToCountry](docs/Model/InlineResponse200SearchParamsToCountry.md)
 - [InlineResponse200SearchParamsToKids](docs/Model/InlineResponse200SearchParamsToKids.md)
 - [InlineResponse200SearchParamsToNights](docs/Model/InlineResponse200SearchParamsToNights.md)
 - [InlineResponse200SearchParamsToOptions](docs/Model/InlineResponse200SearchParamsToOptions.md)
 - [InlineResponse200SearchParamsToStars](docs/Model/InlineResponse200SearchParamsToStars.md)
 - [InlineResponse200Status](docs/Model/InlineResponse200Status.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [PackagesPackageDetailsBody](docs/Model/PackagesPackageDetailsBody.md)
 - [ReferencesautocompleteV2Results](docs/Model/ReferencesautocompleteV2Results.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



