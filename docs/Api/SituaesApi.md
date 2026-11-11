# Eloom\BlingApi\SituaesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**situacoesIdSituacaoDelete()**](SituaesApi.md#situacoesIdSituacaoDelete) | **DELETE** /situacoes/{idSituacao} | Remove uma situação |
| [**situacoesIdSituacaoGet()**](SituaesApi.md#situacoesIdSituacaoGet) | **GET** /situacoes/{idSituacao} | Obtém uma situação |
| [**situacoesIdSituacaoPut()**](SituaesApi.md#situacoesIdSituacaoPut) | **PUT** /situacoes/{idSituacao} | Altera uma situação |
| [**situacoesPost()**](SituaesApi.md#situacoesPost) | **POST** /situacoes | Cria uma situação |


## `situacoesIdSituacaoDelete()`

```php
situacoesIdSituacaoDelete($idSituacao)
```

Remove uma situação

Remove uma situação pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idSituacao = 12345678; // int | ID da situação

try {
    $apiInstance->situacoesIdSituacaoDelete($idSituacao);
} catch (Exception $e) {
    echo 'Exception when calling SituaesApi->situacoesIdSituacaoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idSituacao** | **int**| ID da situação | |

### Return type

void (empty response body)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesIdSituacaoGet()`

```php
situacoesIdSituacaoGet($idSituacao): \Eloom\BlingApi\Model\SituacoesIdSituacaoGet200Response
```

Obtém uma situação

Obtém uma situação pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idSituacao = 12345678; // int | ID da situação

try {
    $result = $apiInstance->situacoesIdSituacaoGet($idSituacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesApi->situacoesIdSituacaoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idSituacao** | **int**| ID da situação | |

### Return type

[**\Eloom\BlingApi\Model\SituacoesIdSituacaoGet200Response**](../Model/SituacoesIdSituacaoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesIdSituacaoPut()`

```php
situacoesIdSituacaoPut($idSituacao, $situacoesIdSituacaoPutRequest): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Altera uma situação

Altera uma situação pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idSituacao = 12345678; // int | ID da situação
$situacoesIdSituacaoPutRequest = new \Eloom\BlingApi\Model\SituacoesIdSituacaoPutRequest(); // \Eloom\BlingApi\Model\SituacoesIdSituacaoPutRequest

try {
    $result = $apiInstance->situacoesIdSituacaoPut($idSituacao, $situacoesIdSituacaoPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesApi->situacoesIdSituacaoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idSituacao** | **int**| ID da situação | |
| **situacoesIdSituacaoPutRequest** | [**\Eloom\BlingApi\Model\SituacoesIdSituacaoPutRequest**](../Model/SituacoesIdSituacaoPutRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\FormasPagamentosPost201Response**](../Model/FormasPagamentosPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesPost()`

```php
situacoesPost($situacoesIdSituacaoPutRequest): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Cria uma situação

Cria uma situação.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$situacoesIdSituacaoPutRequest = new \Eloom\BlingApi\Model\SituacoesIdSituacaoPutRequest(); // \Eloom\BlingApi\Model\SituacoesIdSituacaoPutRequest

try {
    $result = $apiInstance->situacoesPost($situacoesIdSituacaoPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesApi->situacoesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **situacoesIdSituacaoPutRequest** | [**\Eloom\BlingApi\Model\SituacoesIdSituacaoPutRequest**](../Model/SituacoesIdSituacaoPutRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\FormasPagamentosPost201Response**](../Model/FormasPagamentosPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
