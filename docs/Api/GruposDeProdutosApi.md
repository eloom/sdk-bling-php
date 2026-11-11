# Eloom\BlingApi\GruposDeProdutosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gruposProdutosDelete()**](GruposDeProdutosApi.md#gruposProdutosDelete) | **DELETE** /grupos-produtos | Remove múltiplos grupos de produtos |
| [**gruposProdutosGet()**](GruposDeProdutosApi.md#gruposProdutosGet) | **GET** /grupos-produtos | Obtém grupos de produtos |
| [**gruposProdutosIdGrupoProdutoDelete()**](GruposDeProdutosApi.md#gruposProdutosIdGrupoProdutoDelete) | **DELETE** /grupos-produtos/{idGrupoProduto} | Remove um grupo de produtos |
| [**gruposProdutosIdGrupoProdutoGet()**](GruposDeProdutosApi.md#gruposProdutosIdGrupoProdutoGet) | **GET** /grupos-produtos/{idGrupoProduto} | Obtém um grupo de produtos |
| [**gruposProdutosIdGrupoProdutoPut()**](GruposDeProdutosApi.md#gruposProdutosIdGrupoProdutoPut) | **PUT** /grupos-produtos/{idGrupoProduto} | Altera um grupo de produtos |
| [**gruposProdutosPost()**](GruposDeProdutosApi.md#gruposProdutosPost) | **POST** /grupos-produtos | Cria um grupo de produtos |


## `gruposProdutosDelete()`

```php
gruposProdutosDelete($idsGruposProdutos): \Eloom\BlingApi\Model\CategoriasReceitasDespesasDelete200Response
```

Remove múltiplos grupos de produtos

Remove múltiplos grupos de produtos pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\GruposDeProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsGruposProdutos = [12345678,87654321]; // int[] | IDs dos grupos de produtos

try {
    $result = $apiInstance->gruposProdutosDelete($idsGruposProdutos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GruposDeProdutosApi->gruposProdutosDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsGruposProdutos** | [**int[]**](../Model/int.md)| IDs dos grupos de produtos | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasReceitasDespesasDelete200Response**](../Model/CategoriasReceitasDespesasDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gruposProdutosGet()`

```php
gruposProdutosGet($nome, $nomePai, $pagina, $limite): \Eloom\BlingApi\Model\GruposProdutosGet200Response
```

Obtém grupos de produtos

Obtém grupos de produtos paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\GruposDeProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nome = 'nome_example'; // string | O nome do grupo
$nomePai = 'nomePai_example'; // string | O nome do grupo pai
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página

try {
    $result = $apiInstance->gruposProdutosGet($nome, $nomePai, $pagina, $limite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GruposDeProdutosApi->gruposProdutosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nome** | **string**| O nome do grupo | [optional] |
| **nomePai** | **string**| O nome do grupo pai | [optional] |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |

### Return type

[**\Eloom\BlingApi\Model\GruposProdutosGet200Response**](../Model/GruposProdutosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gruposProdutosIdGrupoProdutoDelete()`

```php
gruposProdutosIdGrupoProdutoDelete($idGrupoProduto)
```

Remove um grupo de produtos

Remove um grupo de produtos pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\GruposDeProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idGrupoProduto = 12345678; // int | ID do grupo de produto

try {
    $apiInstance->gruposProdutosIdGrupoProdutoDelete($idGrupoProduto);
} catch (Exception $e) {
    echo 'Exception when calling GruposDeProdutosApi->gruposProdutosIdGrupoProdutoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idGrupoProduto** | **int**| ID do grupo de produto | |

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

## `gruposProdutosIdGrupoProdutoGet()`

```php
gruposProdutosIdGrupoProdutoGet($idGrupoProduto): \Eloom\BlingApi\Model\GruposProdutosIdGrupoProdutoGet200Response
```

Obtém um grupo de produtos

Obtém um grupo de produtos pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\GruposDeProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idGrupoProduto = 12345678; // int | ID do grupo de produto

try {
    $result = $apiInstance->gruposProdutosIdGrupoProdutoGet($idGrupoProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GruposDeProdutosApi->gruposProdutosIdGrupoProdutoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idGrupoProduto** | **int**| ID do grupo de produto | |

### Return type

[**\Eloom\BlingApi\Model\GruposProdutosIdGrupoProdutoGet200Response**](../Model/GruposProdutosIdGrupoProdutoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gruposProdutosIdGrupoProdutoPut()`

```php
gruposProdutosIdGrupoProdutoPut($idGrupoProduto, $gruposProdutosPostRequest)
```

Altera um grupo de produtos

Altera um grupo de produtos pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\GruposDeProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idGrupoProduto = 12345678; // int | ID do grupo de produto
$gruposProdutosPostRequest = new \Eloom\BlingApi\Model\GruposProdutosPostRequest(); // \Eloom\BlingApi\Model\GruposProdutosPostRequest

try {
    $apiInstance->gruposProdutosIdGrupoProdutoPut($idGrupoProduto, $gruposProdutosPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling GruposDeProdutosApi->gruposProdutosIdGrupoProdutoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idGrupoProduto** | **int**| ID do grupo de produto | |
| **gruposProdutosPostRequest** | [**\Eloom\BlingApi\Model\GruposProdutosPostRequest**](../Model/GruposProdutosPostRequest.md)|  | |

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

## `gruposProdutosPost()`

```php
gruposProdutosPost($gruposProdutosPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria um grupo de produtos

Cria um grupo de produtos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\GruposDeProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gruposProdutosPostRequest = new \Eloom\BlingApi\Model\GruposProdutosPostRequest(); // \Eloom\BlingApi\Model\GruposProdutosPostRequest

try {
    $result = $apiInstance->gruposProdutosPost($gruposProdutosPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GruposDeProdutosApi->gruposProdutosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gruposProdutosPostRequest** | [**\Eloom\BlingApi\Model\GruposProdutosPostRequest**](../Model/GruposProdutosPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasLojasPost201Response**](../Model/CategoriasLojasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
