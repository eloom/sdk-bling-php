# Eloom\BlingApi\ProdutosFornecedoresApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosFornecedoresGet()**](ProdutosFornecedoresApi.md#produtosFornecedoresGet) | **GET** /produtos/fornecedores | Obtém produtos fornecedores |
| [**produtosFornecedoresIdProdutoFornecedorDelete()**](ProdutosFornecedoresApi.md#produtosFornecedoresIdProdutoFornecedorDelete) | **DELETE** /produtos/fornecedores/{idProdutoFornecedor} | Remove um produto fornecedor |
| [**produtosFornecedoresIdProdutoFornecedorGet()**](ProdutosFornecedoresApi.md#produtosFornecedoresIdProdutoFornecedorGet) | **GET** /produtos/fornecedores/{idProdutoFornecedor} | Obtém um produto fornecedor |
| [**produtosFornecedoresIdProdutoFornecedorPut()**](ProdutosFornecedoresApi.md#produtosFornecedoresIdProdutoFornecedorPut) | **PUT** /produtos/fornecedores/{idProdutoFornecedor} | Altera um produto fornecedor |
| [**produtosFornecedoresPost()**](ProdutosFornecedoresApi.md#produtosFornecedoresPost) | **POST** /produtos/fornecedores | Cria um produto fornecedor |


## `produtosFornecedoresGet()`

```php
produtosFornecedoresGet($pagina, $limite, $idProduto, $idFornecedor): \Eloom\BlingApi\Model\ProdutosFornecedoresGet200Response
```

Obtém produtos fornecedores

Obtém produtos fornecedores paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosFornecedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idProduto = 12345678; // int | ID do produto
$idFornecedor = 12345678; // int | ID do contato do tipo fornecedor

try {
    $result = $apiInstance->produtosFornecedoresGet($pagina, $limite, $idProduto, $idFornecedor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosFornecedoresApi->produtosFornecedoresGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idProduto** | **int**| ID do produto | [optional] |
| **idFornecedor** | **int**| ID do contato do tipo fornecedor | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ProdutosFornecedoresGet200Response**](../Model/ProdutosFornecedoresGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosFornecedoresIdProdutoFornecedorDelete()`

```php
produtosFornecedoresIdProdutoFornecedorDelete($idProdutoFornecedor)
```

Remove um produto fornecedor

Remove um produto fornecedor pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosFornecedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoFornecedor = 12345678; // int | ID do produto fornecedor

try {
    $apiInstance->produtosFornecedoresIdProdutoFornecedorDelete($idProdutoFornecedor);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosFornecedoresApi->produtosFornecedoresIdProdutoFornecedorDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoFornecedor** | **int**| ID do produto fornecedor | |

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

## `produtosFornecedoresIdProdutoFornecedorGet()`

```php
produtosFornecedoresIdProdutoFornecedorGet($idProdutoFornecedor): \Eloom\BlingApi\Model\ProdutosFornecedoresIdProdutoFornecedorGet200Response
```

Obtém um produto fornecedor

Obtém um produto fornecedor pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosFornecedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoFornecedor = 12345678; // int | ID do produto fornecedor

try {
    $result = $apiInstance->produtosFornecedoresIdProdutoFornecedorGet($idProdutoFornecedor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosFornecedoresApi->produtosFornecedoresIdProdutoFornecedorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoFornecedor** | **int**| ID do produto fornecedor | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosFornecedoresIdProdutoFornecedorGet200Response**](../Model/ProdutosFornecedoresIdProdutoFornecedorGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosFornecedoresIdProdutoFornecedorPut()`

```php
produtosFornecedoresIdProdutoFornecedorPut($idProdutoFornecedor, $produtosFornecedoresIdProdutoFornecedorPutRequest): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Altera um produto fornecedor

Altera um produto fornecedor pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosFornecedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoFornecedor = 12345678; // int | ID do produto fornecedor
$produtosFornecedoresIdProdutoFornecedorPutRequest = new \Eloom\BlingApi\Model\ProdutosFornecedoresIdProdutoFornecedorPutRequest(); // \Eloom\BlingApi\Model\ProdutosFornecedoresIdProdutoFornecedorPutRequest

try {
    $result = $apiInstance->produtosFornecedoresIdProdutoFornecedorPut($idProdutoFornecedor, $produtosFornecedoresIdProdutoFornecedorPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosFornecedoresApi->produtosFornecedoresIdProdutoFornecedorPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoFornecedor** | **int**| ID do produto fornecedor | |
| **produtosFornecedoresIdProdutoFornecedorPutRequest** | [**\Eloom\BlingApi\Model\ProdutosFornecedoresIdProdutoFornecedorPutRequest**](../Model/ProdutosFornecedoresIdProdutoFornecedorPutRequest.md)|  | |

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

## `produtosFornecedoresPost()`

```php
produtosFornecedoresPost($produtosFornecedoresPostRequest): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Cria um produto fornecedor

Cria um produto fornecedor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosFornecedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$produtosFornecedoresPostRequest = new \Eloom\BlingApi\Model\ProdutosFornecedoresPostRequest(); // \Eloom\BlingApi\Model\ProdutosFornecedoresPostRequest

try {
    $result = $apiInstance->produtosFornecedoresPost($produtosFornecedoresPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosFornecedoresApi->produtosFornecedoresPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **produtosFornecedoresPostRequest** | [**\Eloom\BlingApi\Model\ProdutosFornecedoresPostRequest**](../Model/ProdutosFornecedoresPostRequest.md)|  | |

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
