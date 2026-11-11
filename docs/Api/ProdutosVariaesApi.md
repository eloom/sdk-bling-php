# Eloom\BlingApi\ProdutosVariaesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosVariacoesAtributosGerarCombinacoesPost()**](ProdutosVariaesApi.md#produtosVariacoesAtributosGerarCombinacoesPost) | **POST** /produtos/variacoes/atributos/gerar-combinacoes | Retorna o produto pai com combinações de novas variações |
| [**produtosVariacoesIdProdutoPaiAtributosPatch()**](ProdutosVariaesApi.md#produtosVariacoesIdProdutoPaiAtributosPatch) | **PATCH** /produtos/variacoes/{idProdutoPai}/atributos | Altera o nome do atributo nas variações |
| [**produtosVariacoesIdProdutoPaiGet()**](ProdutosVariaesApi.md#produtosVariacoesIdProdutoPaiGet) | **GET** /produtos/variacoes/{idProdutoPai} | Obtém o produto e variações |


## `produtosVariacoesAtributosGerarCombinacoesPost()`

```php
produtosVariacoesAtributosGerarCombinacoesPost($produtosVariacoesCombinacaoDadosDTO): \Eloom\BlingApi\Model\ProdutosIdProdutoGet200Response
```

Retorna o produto pai com combinações de novas variações

Ação responsável por retornar o produto pai com combinação de novas variações a partir dos atributos. Esta ação não persistirá os dados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosVariaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$produtosVariacoesCombinacaoDadosDTO = new \Eloom\BlingApi\Model\ProdutosVariacoesCombinacaoDadosDTO(); // \Eloom\BlingApi\Model\ProdutosVariacoesCombinacaoDadosDTO

try {
    $result = $apiInstance->produtosVariacoesAtributosGerarCombinacoesPost($produtosVariacoesCombinacaoDadosDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosVariaesApi->produtosVariacoesAtributosGerarCombinacoesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **produtosVariacoesCombinacaoDadosDTO** | [**\Eloom\BlingApi\Model\ProdutosVariacoesCombinacaoDadosDTO**](../Model/ProdutosVariacoesCombinacaoDadosDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosIdProdutoGet200Response**](../Model/ProdutosIdProdutoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosVariacoesIdProdutoPaiAtributosPatch()`

```php
produtosVariacoesIdProdutoPaiAtributosPatch($idProdutoPai, $produtosVariacoesDadosAtributoDTO): \Eloom\BlingApi\Model\ProdutosVariacoesIdProdutoPaiAtributosPatch200Response
```

Altera o nome do atributo nas variações

Altera o nome do atributo nas variações de um produto pai.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosVariaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoPai = 12345678; // int | ID do produto pai
$produtosVariacoesDadosAtributoDTO = new \Eloom\BlingApi\Model\ProdutosVariacoesDadosAtributoDTO(); // \Eloom\BlingApi\Model\ProdutosVariacoesDadosAtributoDTO

try {
    $result = $apiInstance->produtosVariacoesIdProdutoPaiAtributosPatch($idProdutoPai, $produtosVariacoesDadosAtributoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosVariaesApi->produtosVariacoesIdProdutoPaiAtributosPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoPai** | **int**| ID do produto pai | |
| **produtosVariacoesDadosAtributoDTO** | [**\Eloom\BlingApi\Model\ProdutosVariacoesDadosAtributoDTO**](../Model/ProdutosVariacoesDadosAtributoDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosVariacoesIdProdutoPaiAtributosPatch200Response**](../Model/ProdutosVariacoesIdProdutoPaiAtributosPatch200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosVariacoesIdProdutoPaiGet()`

```php
produtosVariacoesIdProdutoPaiGet($idProdutoPai): \Eloom\BlingApi\Model\ProdutosIdProdutoGet200Response
```

Obtém o produto e variações

Obtém o produto e variações pelo ID do produto pai.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosVariaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoPai = 12345678; // int | ID do produto pai

try {
    $result = $apiInstance->produtosVariacoesIdProdutoPaiGet($idProdutoPai);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosVariaesApi->produtosVariacoesIdProdutoPaiGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoPai** | **int**| ID do produto pai | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosIdProdutoGet200Response**](../Model/ProdutosIdProdutoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
