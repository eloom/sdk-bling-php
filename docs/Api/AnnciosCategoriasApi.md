# Eloom\BlingApi\AnnciosCategoriasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**anunciosCategoriasGet()**](AnnciosCategoriasApi.md#anunciosCategoriasGet) | **GET** /anuncios/categorias | Obtém categorias de anúncios |
| [**anunciosCategoriasIdCategoriaGet()**](AnnciosCategoriasApi.md#anunciosCategoriasIdCategoriaGet) | **GET** /anuncios/categorias/{idCategoria} | Obtém uma categoria de anúncio |


## `anunciosCategoriasGet()`

```php
anunciosCategoriasGet($tipoIntegracao, $idLoja, $idCategoria, $tipoProduto): \Eloom\BlingApi\Model\AnunciosCategoriasGet200Response
```

Obtém categorias de anúncios

Obtém categorias de anúncios.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosCategoriasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja
$idCategoria = 10; // int | ID da categoria
$tipoProduto = eletronico; // string | Tipo do produto

try {
    $result = $apiInstance->anunciosCategoriasGet($tipoIntegracao, $idLoja, $idCategoria, $tipoProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosCategoriasApi->anunciosCategoriasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |
| **idCategoria** | **int**| ID da categoria | [optional] |
| **tipoProduto** | **string**| Tipo do produto | [optional] |

### Return type

[**\Eloom\BlingApi\Model\AnunciosCategoriasGet200Response**](../Model/AnunciosCategoriasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `anunciosCategoriasIdCategoriaGet()`

```php
anunciosCategoriasIdCategoriaGet($idCategoria, $tipoIntegracao, $idLoja): \Eloom\BlingApi\Model\AnunciosCategoriasIdCategoriaGet200Response
```

Obtém uma categoria de anúncio

Obtém uma categoria de anúncio pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosCategoriasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoria = MLB1430; // string | ID da categoria no marketplace (ex.: Mercado Livre)
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja

try {
    $result = $apiInstance->anunciosCategoriasIdCategoriaGet($idCategoria, $tipoIntegracao, $idLoja);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosCategoriasApi->anunciosCategoriasIdCategoriaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoria** | **string**| ID da categoria no marketplace (ex.: Mercado Livre) | |
| **tipoIntegracao** | **string**| Tipo de integração | |
| **idLoja** | **int**| ID da loja | |

### Return type

[**\Eloom\BlingApi\Model\AnunciosCategoriasIdCategoriaGet200Response**](../Model/AnunciosCategoriasIdCategoriaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
