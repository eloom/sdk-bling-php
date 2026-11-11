# Eloom\BlingApi\CategoriasProdutosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoriasProdutosGet()**](CategoriasProdutosApi.md#categoriasProdutosGet) | **GET** /categorias/produtos | Obtém categorias de produtos |
| [**categoriasProdutosIdCategoriaProdutoDelete()**](CategoriasProdutosApi.md#categoriasProdutosIdCategoriaProdutoDelete) | **DELETE** /categorias/produtos/{idCategoriaProduto} | Remove uma categoria de produto |
| [**categoriasProdutosIdCategoriaProdutoGet()**](CategoriasProdutosApi.md#categoriasProdutosIdCategoriaProdutoGet) | **GET** /categorias/produtos/{idCategoriaProduto} | Obtém uma categoria de produto |
| [**categoriasProdutosIdCategoriaProdutoPut()**](CategoriasProdutosApi.md#categoriasProdutosIdCategoriaProdutoPut) | **PUT** /categorias/produtos/{idCategoriaProduto} | Altera uma categoria de produto |
| [**categoriasProdutosPost()**](CategoriasProdutosApi.md#categoriasProdutosPost) | **POST** /categorias/produtos | Cria uma categoria de produto |


## `categoriasProdutosGet()`

```php
categoriasProdutosGet($pagina, $limite): \Eloom\BlingApi\Model\CategoriasProdutosGet200Response
```

Obtém categorias de produtos

Obtém categorias de produtos paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página

try {
    $result = $apiInstance->categoriasProdutosGet($pagina, $limite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasProdutosApi->categoriasProdutosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |

### Return type

[**\Eloom\BlingApi\Model\CategoriasProdutosGet200Response**](../Model/CategoriasProdutosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasProdutosIdCategoriaProdutoDelete()`

```php
categoriasProdutosIdCategoriaProdutoDelete($idCategoriaProduto)
```

Remove uma categoria de produto

Remove uma categoria de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoriaProduto = 12345678; // int | ID da categoria de produto

try {
    $apiInstance->categoriasProdutosIdCategoriaProdutoDelete($idCategoriaProduto);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasProdutosApi->categoriasProdutosIdCategoriaProdutoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoriaProduto** | **int**| ID da categoria de produto | |

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

## `categoriasProdutosIdCategoriaProdutoGet()`

```php
categoriasProdutosIdCategoriaProdutoGet($idCategoriaProduto): \Eloom\BlingApi\Model\CategoriasProdutosIdCategoriaProdutoGet200Response
```

Obtém uma categoria de produto

Obtém uma categoria de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoriaProduto = 12345678; // int | ID da categoria de produto

try {
    $result = $apiInstance->categoriasProdutosIdCategoriaProdutoGet($idCategoriaProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasProdutosApi->categoriasProdutosIdCategoriaProdutoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoriaProduto** | **int**| ID da categoria de produto | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasProdutosIdCategoriaProdutoGet200Response**](../Model/CategoriasProdutosIdCategoriaProdutoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasProdutosIdCategoriaProdutoPut()`

```php
categoriasProdutosIdCategoriaProdutoPut($idCategoriaProduto, $categoriasProdutosDadosDTO)
```

Altera uma categoria de produto

Altera uma categoria de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoriaProduto = 12345678; // int | ID da categoria de produto
$categoriasProdutosDadosDTO = new \Eloom\BlingApi\Model\CategoriasProdutosDadosDTO(); // \Eloom\BlingApi\Model\CategoriasProdutosDadosDTO

try {
    $apiInstance->categoriasProdutosIdCategoriaProdutoPut($idCategoriaProduto, $categoriasProdutosDadosDTO);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasProdutosApi->categoriasProdutosIdCategoriaProdutoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoriaProduto** | **int**| ID da categoria de produto | |
| **categoriasProdutosDadosDTO** | [**\Eloom\BlingApi\Model\CategoriasProdutosDadosDTO**](../Model/CategoriasProdutosDadosDTO.md)|  | |

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

## `categoriasProdutosPost()`

```php
categoriasProdutosPost($categoriasProdutosGet200ResponseDataInner): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria uma categoria de produto

Cria uma categoria de produto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoriasProdutosGet200ResponseDataInner = new \Eloom\BlingApi\Model\CategoriasProdutosGet200ResponseDataInner(); // \Eloom\BlingApi\Model\CategoriasProdutosGet200ResponseDataInner

try {
    $result = $apiInstance->categoriasProdutosPost($categoriasProdutosGet200ResponseDataInner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasProdutosApi->categoriasProdutosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoriasProdutosGet200ResponseDataInner** | [**\Eloom\BlingApi\Model\CategoriasProdutosGet200ResponseDataInner**](../Model/CategoriasProdutosGet200ResponseDataInner.md)|  | |

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
