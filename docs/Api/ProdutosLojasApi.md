# Eloom\BlingApi\ProdutosLojasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosLojasGet()**](ProdutosLojasApi.md#produtosLojasGet) | **GET** /produtos/lojas | Obtém vínculos de produtos com lojas |
| [**produtosLojasIdProdutoLojaDelete()**](ProdutosLojasApi.md#produtosLojasIdProdutoLojaDelete) | **DELETE** /produtos/lojas/{idProdutoLoja} | Remove o vínculo de um produto com uma loja |
| [**produtosLojasIdProdutoLojaGet()**](ProdutosLojasApi.md#produtosLojasIdProdutoLojaGet) | **GET** /produtos/lojas/{idProdutoLoja} | Obtém um vínculo de produto com loja |
| [**produtosLojasIdProdutoLojaPut()**](ProdutosLojasApi.md#produtosLojasIdProdutoLojaPut) | **PUT** /produtos/lojas/{idProdutoLoja} | Altera o vínculo de um produto com uma loja |
| [**produtosLojasPost()**](ProdutosLojasApi.md#produtosLojasPost) | **POST** /produtos/lojas | Cria o vínculo de um produto com uma loja |


## `produtosLojasGet()`

```php
produtosLojasGet($pagina, $limite, $idProduto, $idLoja, $idCategoriaProduto, $dataAlteracaoInicial, $dataAlteracaoFinal): \Eloom\BlingApi\Model\ProdutosLojasGet200Response
```

Obtém vínculos de produtos com lojas

Obtém vínculos de produtos com lojas paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idProduto = 12345678; // int | ID do produto
$idLoja = 12345678; // int | ID da loja
$idCategoriaProduto = 12345678; // int | ID da categoria do produto vinculada à loja
$dataAlteracaoInicial = 2020-01-01 10:00:00; // string | Data de alteração inicial
$dataAlteracaoFinal = 2020-01-01 11:00:00; // string | Data de alteração final

try {
    $result = $apiInstance->produtosLojasGet($pagina, $limite, $idProduto, $idLoja, $idCategoriaProduto, $dataAlteracaoInicial, $dataAlteracaoFinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLojasApi->produtosLojasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idProduto** | **int**| ID do produto | [optional] |
| **idLoja** | **int**| ID da loja | [optional] |
| **idCategoriaProduto** | **int**| ID da categoria do produto vinculada à loja | [optional] |
| **dataAlteracaoInicial** | **string**| Data de alteração inicial | [optional] |
| **dataAlteracaoFinal** | **string**| Data de alteração final | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLojasGet200Response**](../Model/ProdutosLojasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLojasIdProdutoLojaDelete()`

```php
produtosLojasIdProdutoLojaDelete($idProdutoLoja)
```

Remove o vínculo de um produto com uma loja

Remove o vínculo de um produto com uma loja pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoLoja = 12345678; // int | ID do vínculo do produto com a loja

try {
    $apiInstance->produtosLojasIdProdutoLojaDelete($idProdutoLoja);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLojasApi->produtosLojasIdProdutoLojaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoLoja** | **int**| ID do vínculo do produto com a loja | |

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

## `produtosLojasIdProdutoLojaGet()`

```php
produtosLojasIdProdutoLojaGet($idProdutoLoja): \Eloom\BlingApi\Model\ProdutosLojasIdProdutoLojaGet200Response
```

Obtém um vínculo de produto com loja

Obtém um vínculo de produto com loja pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoLoja = 12345678; // int | ID do vínculo do produto com a loja

try {
    $result = $apiInstance->produtosLojasIdProdutoLojaGet($idProdutoLoja);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLojasApi->produtosLojasIdProdutoLojaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoLoja** | **int**| ID do vínculo do produto com a loja | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLojasIdProdutoLojaGet200Response**](../Model/ProdutosLojasIdProdutoLojaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLojasIdProdutoLojaPut()`

```php
produtosLojasIdProdutoLojaPut($idProdutoLoja, $produtosLojasPostRequest): \Eloom\BlingApi\Model\ProdutosLojasPost201Response
```

Altera o vínculo de um produto com uma loja

Altera o vínculo de um produto com uma loja pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoLoja = 12345678; // int | ID do vínculo do produto com a loja
$produtosLojasPostRequest = new \Eloom\BlingApi\Model\ProdutosLojasPostRequest(); // \Eloom\BlingApi\Model\ProdutosLojasPostRequest

try {
    $result = $apiInstance->produtosLojasIdProdutoLojaPut($idProdutoLoja, $produtosLojasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLojasApi->produtosLojasIdProdutoLojaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoLoja** | **int**| ID do vínculo do produto com a loja | |
| **produtosLojasPostRequest** | [**\Eloom\BlingApi\Model\ProdutosLojasPostRequest**](../Model/ProdutosLojasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLojasPost201Response**](../Model/ProdutosLojasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLojasPost()`

```php
produtosLojasPost($produtosLojasPostRequest): \Eloom\BlingApi\Model\ProdutosLojasPost201Response
```

Cria o vínculo de um produto com uma loja

Cria o vínculo de um produto com uma loja.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$produtosLojasPostRequest = new \Eloom\BlingApi\Model\ProdutosLojasPostRequest(); // \Eloom\BlingApi\Model\ProdutosLojasPostRequest

try {
    $result = $apiInstance->produtosLojasPost($produtosLojasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLojasApi->produtosLojasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **produtosLojasPostRequest** | [**\Eloom\BlingApi\Model\ProdutosLojasPostRequest**](../Model/ProdutosLojasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLojasPost201Response**](../Model/ProdutosLojasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
