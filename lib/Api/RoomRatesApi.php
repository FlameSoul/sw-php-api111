<?php
/**
 * RoomRatesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAPI
 *
 * <center>                         <img src=\"https://img.cdn.level.travel/assets/logo/vector-58a947fae5d47fa53329be95ff9cff853e8889f70ac61fc2d2b6572a5998330e.svg\">                         <br><br>                         <h1>Партнёрская документация Open API</h1>                       </center>
 *
 * OpenAPI spec version: 3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * RoomRatesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomRatesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation roomRatesShowGet
     *
     * Список тарифов для отеля
     *
     * @param  string $request_id ID запроса (required)
     * @param  float $hotel_id ID отеля (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  bool $filter_free_cancel Фильтр предложений по признаку Бесплатная отмена (optional)
     * @param  string $filter_meals Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function roomRatesShowGet($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel = null, $filter_meals = null)
    {
        $this->roomRatesShowGetWithHttpInfo($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel, $filter_meals);
    }

    /**
     * Operation roomRatesShowGetWithHttpInfo
     *
     * Список тарифов для отеля
     *
     * @param  string $request_id ID запроса (required)
     * @param  float $hotel_id ID отеля (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  bool $filter_free_cancel Фильтр предложений по признаку Бесплатная отмена (optional)
     * @param  string $filter_meals Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function roomRatesShowGetWithHttpInfo($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel = null, $filter_meals = null)
    {
        $returnType = '';
        $request = $this->roomRatesShowGetRequest($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel, $filter_meals);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation roomRatesShowGetAsync
     *
     * Список тарифов для отеля
     *
     * @param  string $request_id ID запроса (required)
     * @param  float $hotel_id ID отеля (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  bool $filter_free_cancel Фильтр предложений по признаку Бесплатная отмена (optional)
     * @param  string $filter_meals Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomRatesShowGetAsync($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel = null, $filter_meals = null)
    {
        return $this->roomRatesShowGetAsyncWithHttpInfo($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel, $filter_meals)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation roomRatesShowGetAsyncWithHttpInfo
     *
     * Список тарифов для отеля
     *
     * @param  string $request_id ID запроса (required)
     * @param  float $hotel_id ID отеля (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  bool $filter_free_cancel Фильтр предложений по признаку Бесплатная отмена (optional)
     * @param  string $filter_meals Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function roomRatesShowGetAsyncWithHttpInfo($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel = null, $filter_meals = null)
    {
        $returnType = '';
        $request = $this->roomRatesShowGetRequest($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel, $filter_meals);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'roomRatesShowGet'
     *
     * @param  string $request_id ID запроса (required)
     * @param  float $hotel_id ID отеля (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  bool $filter_free_cancel Фильтр предложений по признаку Бесплатная отмена (optional)
     * @param  string $filter_meals Фильтр предложений по типу питания, возможна передача нескольких значений разделенных запятой (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function roomRatesShowGetRequest($request_id, $hotel_id, $content_type, $authorization, $accept, $filter_free_cancel = null, $filter_meals = null)
    {
        // verify the required parameter 'request_id' is set
        if ($request_id === null || (is_array($request_id) && count($request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_id when calling roomRatesShowGet'
            );
        }
        // verify the required parameter 'hotel_id' is set
        if ($hotel_id === null || (is_array($hotel_id) && count($hotel_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hotel_id when calling roomRatesShowGet'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling roomRatesShowGet'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling roomRatesShowGet'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling roomRatesShowGet'
            );
        }

        $resourcePath = '/room_rates/show';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($request_id !== null) {
            $queryParams['request_id'] = ObjectSerializer::toQueryValue($request_id, null);
        }
        // query params
        if ($hotel_id !== null) {
            $queryParams['hotel_id'] = ObjectSerializer::toQueryValue($hotel_id, null);
        }
        // query params
        if ($filter_free_cancel !== null) {
            $queryParams['filter_free_cancel'] = ObjectSerializer::toQueryValue($filter_free_cancel, null);
        }
        // query params
        if ($filter_meals !== null) {
            $queryParams['filter_meals'] = ObjectSerializer::toQueryValue($filter_meals, null);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
