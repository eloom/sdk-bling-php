# Eloom\BlingApi\SituaesTransiesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**situacoesTransicoesIdTransicaoDelete()**](SituaesTransiesApi.md#situacoesTransicoesIdTransicaoDelete) | **DELETE** /situacoes/transicoes/{idTransicao} | Remove uma transição |
| [**situacoesTransicoesIdTransicaoGet()**](SituaesTransiesApi.md#situacoesTransicoesIdTransicaoGet) | **GET** /situacoes/transicoes/{idTransicao} | Obtém uma transição |
| [**situacoesTransicoesIdTransicaoPut()**](SituaesTransiesApi.md#situacoesTransicoesIdTransicaoPut) | **PUT** /situacoes/transicoes/{idTransicao} | Altera uma transição |
| [**situacoesTransicoesPost()**](SituaesTransiesApi.md#situacoesTransicoesPost) | **POST** /situacoes/transicoes | Cria uma transição |


## `situacoesTransicoesIdTransicaoDelete()`

```php
situacoesTransicoesIdTransicaoDelete($idTransicao)
```

Remove uma transição

Remove uma transição pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesTransiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idTransicao = 12345678; // int | ID da transição

try {
    $apiInstance->situacoesTransicoesIdTransicaoDelete($idTransicao);
} catch (Exception $e) {
    echo 'Exception when calling SituaesTransiesApi->situacoesTransicoesIdTransicaoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idTransicao** | **int**| ID da transição | |

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

## `situacoesTransicoesIdTransicaoGet()`

```php
situacoesTransicoesIdTransicaoGet($idTransicao): \Eloom\BlingApi\Model\SituacoesTransicoesIdTransicaoGet200Response
```

Obtém uma transição

Obtém uma transição pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesTransiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idTransicao = 12345678; // int | ID da transição

try {
    $result = $apiInstance->situacoesTransicoesIdTransicaoGet($idTransicao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesTransiesApi->situacoesTransicoesIdTransicaoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idTransicao** | **int**| ID da transição | |

### Return type

[**\Eloom\BlingApi\Model\SituacoesTransicoesIdTransicaoGet200Response**](../Model/SituacoesTransicoesIdTransicaoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesTransicoesIdTransicaoPut()`

```php
situacoesTransicoesIdTransicaoPut($idTransicao, $situacoesTransicaoDTO): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Altera uma transição

Altera uma transição pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesTransiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idTransicao = 12345678; // int | ID da transição
$situacoesTransicaoDTO = new \Eloom\BlingApi\Model\SituacoesTransicaoDTO(); // \Eloom\BlingApi\Model\SituacoesTransicaoDTO

try {
    $result = $apiInstance->situacoesTransicoesIdTransicaoPut($idTransicao, $situacoesTransicaoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesTransiesApi->situacoesTransicoesIdTransicaoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idTransicao** | **int**| ID da transição | |
| **situacoesTransicaoDTO** | [**\Eloom\BlingApi\Model\SituacoesTransicaoDTO**](../Model/SituacoesTransicaoDTO.md)|  | |

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

## `situacoesTransicoesPost()`

```php
situacoesTransicoesPost($situacoesTransicaoDTO): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Cria uma transição

Cria uma transição.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesTransiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$situacoesTransicaoDTO = new \Eloom\BlingApi\Model\SituacoesTransicaoDTO(); // \Eloom\BlingApi\Model\SituacoesTransicaoDTO

try {
    $result = $apiInstance->situacoesTransicoesPost($situacoesTransicaoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesTransiesApi->situacoesTransicoesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **situacoesTransicaoDTO** | [**\Eloom\BlingApi\Model\SituacoesTransicaoDTO**](../Model/SituacoesTransicaoDTO.md)|  | |

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
