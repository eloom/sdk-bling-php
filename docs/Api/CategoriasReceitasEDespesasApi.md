# Eloom\BlingApi\CategoriasReceitasEDespesasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoriasReceitasDespesasDelete()**](CategoriasReceitasEDespesasApi.md#categoriasReceitasDespesasDelete) | **DELETE** /categorias/receitas-despesas | Remove múltiplas categorias de receita e despesa |
| [**categoriasReceitasDespesasGet()**](CategoriasReceitasEDespesasApi.md#categoriasReceitasDespesasGet) | **GET** /categorias/receitas-despesas | Obtém categorias de receitas e despesas |
| [**categoriasReceitasDespesasIdCategoriaDelete()**](CategoriasReceitasEDespesasApi.md#categoriasReceitasDespesasIdCategoriaDelete) | **DELETE** /categorias/receitas-despesas/{idCategoria} | Remove uma categoria de receita e despesa |
| [**categoriasReceitasDespesasIdCategoriaGet()**](CategoriasReceitasEDespesasApi.md#categoriasReceitasDespesasIdCategoriaGet) | **GET** /categorias/receitas-despesas/{idCategoria} | Obtém uma categoria de receita e despesa |
| [**categoriasReceitasDespesasIdCategoriaPut()**](CategoriasReceitasEDespesasApi.md#categoriasReceitasDespesasIdCategoriaPut) | **PUT** /categorias/receitas-despesas/{idCategoria} | Atualiza uma categoria de receita e despesa |
| [**categoriasReceitasDespesasPost()**](CategoriasReceitasEDespesasApi.md#categoriasReceitasDespesasPost) | **POST** /categorias/receitas-despesas | Cria uma categoria de receita e despesa |


## `categoriasReceitasDespesasDelete()`

```php
categoriasReceitasDespesasDelete($idsCategorias): \Eloom\BlingApi\Model\CategoriasReceitasDespesasDelete200Response
```

Remove múltiplas categorias de receita e despesa

Remove múltiplas categorias de receita e despesa a partir de uma lista de IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasReceitasEDespesasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsCategorias = [12345678,87654321]; // int[] | IDs das categorias a serem removidas

try {
    $result = $apiInstance->categoriasReceitasDespesasDelete($idsCategorias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasReceitasEDespesasApi->categoriasReceitasDespesasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsCategorias** | [**int[]**](../Model/int.md)| IDs das categorias a serem removidas | |

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

## `categoriasReceitasDespesasGet()`

```php
categoriasReceitasDespesasGet($pagina, $limite, $tipo, $situacao): \Eloom\BlingApi\Model\CategoriasReceitasDespesasGet200Response
```

Obtém categorias de receitas e despesas

Obtém categorias de receitas e despesas paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasReceitasEDespesasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$tipo = 0; // int | `0` Todas<br>`1` Despesa<br>`2` Receita<br>`3` Receita e despesa
$situacao = 0; // int | `0` Ativas e Inativas<br>`1` Ativas<br>`2` Inativas

try {
    $result = $apiInstance->categoriasReceitasDespesasGet($pagina, $limite, $tipo, $situacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasReceitasEDespesasApi->categoriasReceitasDespesasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **tipo** | **int**| &#x60;0&#x60; Todas&lt;br&gt;&#x60;1&#x60; Despesa&lt;br&gt;&#x60;2&#x60; Receita&lt;br&gt;&#x60;3&#x60; Receita e despesa | [optional] [default to 0] |
| **situacao** | **int**| &#x60;0&#x60; Ativas e Inativas&lt;br&gt;&#x60;1&#x60; Ativas&lt;br&gt;&#x60;2&#x60; Inativas | [optional] [default to 0] |

### Return type

[**\Eloom\BlingApi\Model\CategoriasReceitasDespesasGet200Response**](../Model/CategoriasReceitasDespesasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasReceitasDespesasIdCategoriaDelete()`

```php
categoriasReceitasDespesasIdCategoriaDelete($idCategoria)
```

Remove uma categoria de receita e despesa

Remove uma categoria de receita e despesa pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasReceitasEDespesasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoria = 12345678; // int | ID da categoria de receita e despesa

try {
    $apiInstance->categoriasReceitasDespesasIdCategoriaDelete($idCategoria);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasReceitasEDespesasApi->categoriasReceitasDespesasIdCategoriaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoria** | **int**| ID da categoria de receita e despesa | |

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

## `categoriasReceitasDespesasIdCategoriaGet()`

```php
categoriasReceitasDespesasIdCategoriaGet($idCategoria): \Eloom\BlingApi\Model\CategoriasReceitasDespesasIdCategoriaGet200Response
```

Obtém uma categoria de receita e despesa

Obtém uma categoria de receita e despesa pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasReceitasEDespesasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoria = 12345678; // int | ID da categoria de receita e despesa

try {
    $result = $apiInstance->categoriasReceitasDespesasIdCategoriaGet($idCategoria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasReceitasEDespesasApi->categoriasReceitasDespesasIdCategoriaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoria** | **int**| ID da categoria de receita e despesa | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasReceitasDespesasIdCategoriaGet200Response**](../Model/CategoriasReceitasDespesasIdCategoriaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasReceitasDespesasIdCategoriaPut()`

```php
categoriasReceitasDespesasIdCategoriaPut($idCategoria, $categoriasReceitasDespesasPostRequest): \Eloom\BlingApi\Model\CategoriasReceitasDespesasPost201Response
```

Atualiza uma categoria de receita e despesa

Atualiza uma categoria de receita e despesa a partir do ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasReceitasEDespesasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoria = 12345678; // int | ID da categoria de receita e despesa
$categoriasReceitasDespesasPostRequest = new \Eloom\BlingApi\Model\CategoriasReceitasDespesasPostRequest(); // \Eloom\BlingApi\Model\CategoriasReceitasDespesasPostRequest

try {
    $result = $apiInstance->categoriasReceitasDespesasIdCategoriaPut($idCategoria, $categoriasReceitasDespesasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasReceitasEDespesasApi->categoriasReceitasDespesasIdCategoriaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoria** | **int**| ID da categoria de receita e despesa | |
| **categoriasReceitasDespesasPostRequest** | [**\Eloom\BlingApi\Model\CategoriasReceitasDespesasPostRequest**](../Model/CategoriasReceitasDespesasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasReceitasDespesasPost201Response**](../Model/CategoriasReceitasDespesasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasReceitasDespesasPost()`

```php
categoriasReceitasDespesasPost($categoriasReceitasDespesasPostRequest): \Eloom\BlingApi\Model\CategoriasReceitasDespesasPost201Response
```

Cria uma categoria de receita e despesa

Cria uma categoria de receita e despesa.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasReceitasEDespesasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoriasReceitasDespesasPostRequest = new \Eloom\BlingApi\Model\CategoriasReceitasDespesasPostRequest(); // \Eloom\BlingApi\Model\CategoriasReceitasDespesasPostRequest

try {
    $result = $apiInstance->categoriasReceitasDespesasPost($categoriasReceitasDespesasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasReceitasEDespesasApi->categoriasReceitasDespesasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoriasReceitasDespesasPostRequest** | [**\Eloom\BlingApi\Model\CategoriasReceitasDespesasPostRequest**](../Model/CategoriasReceitasDespesasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasReceitasDespesasPost201Response**](../Model/CategoriasReceitasDespesasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
