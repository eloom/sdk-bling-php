# Eloom\BlingApi\AnnciosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**anunciosGet()**](AnnciosApi.md#anunciosGet) | **GET** /anuncios | Obtém anúncios |
| [**anunciosIdAnuncioDelete()**](AnnciosApi.md#anunciosIdAnuncioDelete) | **DELETE** /anuncios/{idAnuncio} | Remove um anúncio |
| [**anunciosIdAnuncioGet()**](AnnciosApi.md#anunciosIdAnuncioGet) | **GET** /anuncios/{idAnuncio} | Obtém um anúncio |
| [**anunciosIdAnuncioPausarPost()**](AnnciosApi.md#anunciosIdAnuncioPausarPost) | **POST** /anuncios/{idAnuncio}/pausar | Pausa um anúncio |
| [**anunciosIdAnuncioPublicarPost()**](AnnciosApi.md#anunciosIdAnuncioPublicarPost) | **POST** /anuncios/{idAnuncio}/publicar | Publica um anúncio |
| [**anunciosIdAnuncioPut()**](AnnciosApi.md#anunciosIdAnuncioPut) | **PUT** /anuncios/{idAnuncio} | Altera um anúncio |
| [**anunciosPost()**](AnnciosApi.md#anunciosPost) | **POST** /anuncios | Cria um anúncio |


## `anunciosGet()`

```php
anunciosGet($tipoIntegracao, $idLoja, $pagina, $limite, $situacao, $idProduto): \Eloom\BlingApi\Model\AnunciosGet200Response
```

Obtém anúncios

Obtém anúncios paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$situacao = 1; // int | Situação do anúncio <br> `1` Publicado <br> `2` Rascunho <br> `3` Com problema <br> `4` Pausado
$idProduto = 12345; // int | ID do produto

try {
    $result = $apiInstance->anunciosGet($tipoIntegracao, $idLoja, $pagina, $limite, $situacao, $idProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **situacao** | **int**| Situação do anúncio &lt;br&gt; &#x60;1&#x60; Publicado &lt;br&gt; &#x60;2&#x60; Rascunho &lt;br&gt; &#x60;3&#x60; Com problema &lt;br&gt; &#x60;4&#x60; Pausado | [optional] [default to 1] |
| **idProduto** | **int**| ID do produto | [optional] |

### Return type

[**\Eloom\BlingApi\Model\AnunciosGet200Response**](../Model/AnunciosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `anunciosIdAnuncioDelete()`

```php
anunciosIdAnuncioDelete($idAnuncio, $tipoIntegracao, $idLoja)
```

Remove um anúncio

Remove um anúncio pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idAnuncio = 12345678; // int | ID do anúncio
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja

try {
    $apiInstance->anunciosIdAnuncioDelete($idAnuncio, $tipoIntegracao, $idLoja);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosIdAnuncioDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAnuncio** | **int**| ID do anúncio | |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |

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

## `anunciosIdAnuncioGet()`

```php
anunciosIdAnuncioGet($idAnuncio, $tipoIntegracao, $idLoja): \Eloom\BlingApi\Model\AnunciosIdAnuncioGet200Response
```

Obtém um anúncio

Obtém os detalhes de um anúncio específico pelo seu ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idAnuncio = 12345678; // int | ID do anúncio
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja

try {
    $result = $apiInstance->anunciosIdAnuncioGet($idAnuncio, $tipoIntegracao, $idLoja);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosIdAnuncioGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAnuncio** | **int**| ID do anúncio | |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |

### Return type

[**\Eloom\BlingApi\Model\AnunciosIdAnuncioGet200Response**](../Model/AnunciosIdAnuncioGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `anunciosIdAnuncioPausarPost()`

```php
anunciosIdAnuncioPausarPost($idAnuncio, $tipoIntegracao, $idLoja)
```

Pausa um anúncio

Altera o status do anúncio para pausado.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idAnuncio = 12345678; // int | ID do anúncio
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja

try {
    $apiInstance->anunciosIdAnuncioPausarPost($idAnuncio, $tipoIntegracao, $idLoja);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosIdAnuncioPausarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAnuncio** | **int**| ID do anúncio | |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |

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

## `anunciosIdAnuncioPublicarPost()`

```php
anunciosIdAnuncioPublicarPost($idAnuncio, $tipoIntegracao, $idLoja)
```

Publica um anúncio

Altera o status do anúncio para publicado.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idAnuncio = 12345678; // int | ID do anúncio
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja

try {
    $apiInstance->anunciosIdAnuncioPublicarPost($idAnuncio, $tipoIntegracao, $idLoja);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosIdAnuncioPublicarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAnuncio** | **int**| ID do anúncio | |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |

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

## `anunciosIdAnuncioPut()`

```php
anunciosIdAnuncioPut($idAnuncio, $anunciosSaveRequest)
```

Altera um anúncio

Altera um anúncio pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idAnuncio = 12345678; // int | ID do anúncio
$anunciosSaveRequest = new \Eloom\BlingApi\Model\AnunciosSaveRequest(); // \Eloom\BlingApi\Model\AnunciosSaveRequest

try {
    $apiInstance->anunciosIdAnuncioPut($idAnuncio, $anunciosSaveRequest);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosIdAnuncioPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idAnuncio** | **int**| ID do anúncio | |
| **anunciosSaveRequest** | [**\Eloom\BlingApi\Model\AnunciosSaveRequest**](../Model/AnunciosSaveRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `anunciosPost()`

```php
anunciosPost($anunciosSaveRequest): \Eloom\BlingApi\Model\AnunciosPost201Response
```

Cria um anúncio

Cria um anúncio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anunciosSaveRequest = new \Eloom\BlingApi\Model\AnunciosSaveRequest(); // \Eloom\BlingApi\Model\AnunciosSaveRequest

try {
    $result = $apiInstance->anunciosPost($anunciosSaveRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anunciosSaveRequest** | [**\Eloom\BlingApi\Model\AnunciosSaveRequest**](../Model/AnunciosSaveRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\AnunciosPost201Response**](../Model/AnunciosPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
