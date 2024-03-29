<?php
/**
 * SearchBlocksApi
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
 * SearchBlocksApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchBlocksApi
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
     * Operation searchBlocksSearchPriceChartGet
     *
     * Получение цен для гребенки поиска
     *
     * @param  string $request_id request_id поиска, base64 строка (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  float $range Количество необходимых дат, от 1 до 100 (optional, default to 90)
     * @param  string $search_type Тип поискового запроса - по турам или по отелям без перелета (optional, default to package)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20027
     */
    public function searchBlocksSearchPriceChartGet($request_id, $content_type, $authorization, $accept, $range = '90', $search_type = 'package')
    {
        list($response) = $this->searchBlocksSearchPriceChartGetWithHttpInfo($request_id, $content_type, $authorization, $accept, $range, $search_type);
        return $response;
    }

    /**
     * Operation searchBlocksSearchPriceChartGetWithHttpInfo
     *
     * Получение цен для гребенки поиска
     *
     * @param  string $request_id request_id поиска, base64 строка (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  float $range Количество необходимых дат, от 1 до 100 (optional, default to 90)
     * @param  string $search_type Тип поискового запроса - по турам или по отелям без перелета (optional, default to package)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20027, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchBlocksSearchPriceChartGetWithHttpInfo($request_id, $content_type, $authorization, $accept, $range = '90', $search_type = 'package')
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20027';
        $request = $this->searchBlocksSearchPriceChartGetRequest($request_id, $content_type, $authorization, $accept, $range, $search_type);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20027',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchBlocksSearchPriceChartGetAsync
     *
     * Получение цен для гребенки поиска
     *
     * @param  string $request_id request_id поиска, base64 строка (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  float $range Количество необходимых дат, от 1 до 100 (optional, default to 90)
     * @param  string $search_type Тип поискового запроса - по турам или по отелям без перелета (optional, default to package)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchBlocksSearchPriceChartGetAsync($request_id, $content_type, $authorization, $accept, $range = '90', $search_type = 'package')
    {
        return $this->searchBlocksSearchPriceChartGetAsyncWithHttpInfo($request_id, $content_type, $authorization, $accept, $range, $search_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchBlocksSearchPriceChartGetAsyncWithHttpInfo
     *
     * Получение цен для гребенки поиска
     *
     * @param  string $request_id request_id поиска, base64 строка (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  float $range Количество необходимых дат, от 1 до 100 (optional, default to 90)
     * @param  string $search_type Тип поискового запроса - по турам или по отелям без перелета (optional, default to package)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchBlocksSearchPriceChartGetAsyncWithHttpInfo($request_id, $content_type, $authorization, $accept, $range = '90', $search_type = 'package')
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20027';
        $request = $this->searchBlocksSearchPriceChartGetRequest($request_id, $content_type, $authorization, $accept, $range, $search_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'searchBlocksSearchPriceChartGet'
     *
     * @param  string $request_id request_id поиска, base64 строка (required)
     * @param  string $content_type Тип возвращаемых данных (required)
     * @param  string $authorization Токен авторизации партнера (required)
     * @param  string $accept API версия (required)
     * @param  float $range Количество необходимых дат, от 1 до 100 (optional, default to 90)
     * @param  string $search_type Тип поискового запроса - по турам или по отелям без перелета (optional, default to package)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchBlocksSearchPriceChartGetRequest($request_id, $content_type, $authorization, $accept, $range = '90', $search_type = 'package')
    {
        // verify the required parameter 'request_id' is set
        if ($request_id === null || (is_array($request_id) && count($request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_id when calling searchBlocksSearchPriceChartGet'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling searchBlocksSearchPriceChartGet'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling searchBlocksSearchPriceChartGet'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling searchBlocksSearchPriceChartGet'
            );
        }

        $resourcePath = '/search_blocks/search_price_chart';
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
        if ($range !== null) {
            $queryParams['range'] = ObjectSerializer::toQueryValue($range, null);
        }
        // query params
        if ($search_type !== null) {
            $queryParams['search_type'] = ObjectSerializer::toQueryValue($search_type, null);
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
