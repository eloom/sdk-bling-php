# Eloom\BlingApi\ProdutosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosDelete()**](ProdutosApi.md#produtosDelete) | **DELETE** /produtos | Remove múltiplos produtos |
| [**produtosGet()**](ProdutosApi.md#produtosGet) | **GET** /produtos | Obtém produtos |
| [**produtosIdProdutoDelete()**](ProdutosApi.md#produtosIdProdutoDelete) | **DELETE** /produtos/{idProduto} | Remove um produto |
| [**produtosIdProdutoGet()**](ProdutosApi.md#produtosIdProdutoGet) | **GET** /produtos/{idProduto} | Obtém um produto |
| [**produtosIdProdutoPatch()**](ProdutosApi.md#produtosIdProdutoPatch) | **PATCH** /produtos/{idProduto} | Altera parcialmente um produto |
| [**produtosIdProdutoPut()**](ProdutosApi.md#produtosIdProdutoPut) | **PUT** /produtos/{idProduto} | Altera um produto |
| [**produtosIdProdutoSituacoesPatch()**](ProdutosApi.md#produtosIdProdutoSituacoesPatch) | **PATCH** /produtos/{idProduto}/situacoes | Altera a situação de um produto |
| [**produtosPost()**](ProdutosApi.md#produtosPost) | **POST** /produtos | Cria um produto |
| [**produtosSituacoesPost()**](ProdutosApi.md#produtosSituacoesPost) | **POST** /produtos/situacoes | Altera a situação de múltiplos produtos |


## `produtosDelete()`

```php
produtosDelete($idsProdutos): \Eloom\BlingApi\Model\ProdutosDelete200Response
```

Remove múltiplos produtos

Remove múltiplos produtos pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos

try {
    $result = $apiInstance->produtosDelete($idsProdutos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosDelete200Response**](../Model/ProdutosDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosGet()`

```php
produtosGet($pagina, $limite, $criterio, $tipo, $idComponente, $dataInclusaoInicial, $dataInclusaoFinal, $dataAlteracaoInicial, $dataAlteracaoFinal, $idCategoria, $idLoja, $nome, $idsProdutos, $codigos, $gtins, $filtroSaldoEstoque, $filtroSaldoEstoqueDeposito): \Eloom\BlingApi\Model\ProdutosGet200Response
```

Obtém produtos

Obtém produtos paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$criterio = 1; // int | Critério de listagem <br> `1` Últimos incluídos <br> `2` Ativos <br> `3` Inativos <br> `4` Excluídos <br> `5` Todos
$tipo = 'T'; // string | `T` Todos <br> `P` Produtos <br> `S` Serviços <br> `E` Composições <br> `PS` Produtos simples <br> `C` Com variações <br> `V` Variações
$idComponente = 12345678; // int | ID do componente. Utilizado quando o filtro **tipo** for `E`.
$dataInclusaoInicial = 2020-01-01 12:00:00; // string | Data de inclusão inicial
$dataInclusaoFinal = 2020-01-01 13:00:00; // string | Data de inclusão final
$dataAlteracaoInicial = 2020-01-01 10:00:00; // string | Data de alteração inicial
$dataAlteracaoFinal = 2020-01-01 11:00:00; // string | Data de alteração final
$idCategoria = 12345678; // int | ID da categoria do produto
$idLoja = 12345678; // int | ID da loja
$nome =  ; // string | Nome do produto
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos
$codigos = ["SKU1","SKU2"]; // string[] | Códigos (SKU) dos produtos
$gtins = ["7891234567890","7891234567891"]; // string[] | GTINs/EANs dos produtos
$filtroSaldoEstoque = 1; // int | Filtra o saldo em estoque <br> `0` zerado <br> `1` positivo <br> `2` negativo <br><br> Com o módulo multiempresa ativo, ao consultar todos os depósitos ou o depósito virtual, o saldo filtrado é o `saldoMultiempresa` do depósito virtual (consolidado do grupo, descontando as reservas de estoque) somado ao saldo físico dos depósitos locais não vinculados ao multiempresa.
$filtroSaldoEstoqueDeposito = 12345678; // int | ID do depósito para considerar no filtro de saldo em estoque. Se omitido, considera todos os depósitos.

try {
    $result = $apiInstance->produtosGet($pagina, $limite, $criterio, $tipo, $idComponente, $dataInclusaoInicial, $dataInclusaoFinal, $dataAlteracaoInicial, $dataAlteracaoFinal, $idCategoria, $idLoja, $nome, $idsProdutos, $codigos, $gtins, $filtroSaldoEstoque, $filtroSaldoEstoqueDeposito);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **criterio** | **int**| Critério de listagem &lt;br&gt; &#x60;1&#x60; Últimos incluídos &lt;br&gt; &#x60;2&#x60; Ativos &lt;br&gt; &#x60;3&#x60; Inativos &lt;br&gt; &#x60;4&#x60; Excluídos &lt;br&gt; &#x60;5&#x60; Todos | [optional] [default to 1] |
| **tipo** | **string**| &#x60;T&#x60; Todos &lt;br&gt; &#x60;P&#x60; Produtos &lt;br&gt; &#x60;S&#x60; Serviços &lt;br&gt; &#x60;E&#x60; Composições &lt;br&gt; &#x60;PS&#x60; Produtos simples &lt;br&gt; &#x60;C&#x60; Com variações &lt;br&gt; &#x60;V&#x60; Variações | [optional] [default to &#39;T&#39;] |
| **idComponente** | **int**| ID do componente. Utilizado quando o filtro **tipo** for &#x60;E&#x60;. | [optional] |
| **dataInclusaoInicial** | **string**| Data de inclusão inicial | [optional] |
| **dataInclusaoFinal** | **string**| Data de inclusão final | [optional] |
| **dataAlteracaoInicial** | **string**| Data de alteração inicial | [optional] |
| **dataAlteracaoFinal** | **string**| Data de alteração final | [optional] |
| **idCategoria** | **int**| ID da categoria do produto | [optional] |
| **idLoja** | **int**| ID da loja | [optional] |
| **nome** | **string**| Nome do produto | [optional] |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos | [optional] |
| **codigos** | [**string[]**](../Model/string.md)| Códigos (SKU) dos produtos | [optional] |
| **gtins** | [**string[]**](../Model/string.md)| GTINs/EANs dos produtos | [optional] |
| **filtroSaldoEstoque** | **int**| Filtra o saldo em estoque &lt;br&gt; &#x60;0&#x60; zerado &lt;br&gt; &#x60;1&#x60; positivo &lt;br&gt; &#x60;2&#x60; negativo &lt;br&gt;&lt;br&gt; Com o módulo multiempresa ativo, ao consultar todos os depósitos ou o depósito virtual, o saldo filtrado é o &#x60;saldoMultiempresa&#x60; do depósito virtual (consolidado do grupo, descontando as reservas de estoque) somado ao saldo físico dos depósitos locais não vinculados ao multiempresa. | [optional] [default to 1] |
| **filtroSaldoEstoqueDeposito** | **int**| ID do depósito para considerar no filtro de saldo em estoque. Se omitido, considera todos os depósitos. | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ProdutosGet200Response**](../Model/ProdutosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosIdProdutoDelete()`

```php
produtosIdProdutoDelete($idProduto)
```

Remove um produto

Remove um produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto

try {
    $apiInstance->produtosIdProdutoDelete($idProduto);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosIdProdutoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |

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

## `produtosIdProdutoGet()`

```php
produtosIdProdutoGet($idProduto): \Eloom\BlingApi\Model\ProdutosIdProdutoGet200Response
```

Obtém um produto

Obtém um produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto

try {
    $result = $apiInstance->produtosIdProdutoGet($idProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosIdProdutoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |

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

## `produtosIdProdutoPatch()`

```php
produtosIdProdutoPatch($idProduto, $produtosDadosPatchDTO): \Eloom\BlingApi\Model\ProdutosResponsePOSTPUT
```

Altera parcialmente um produto

Altera parcialmente um produto pelo ID. Somente os campos informados terão o valor alterado.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto
$produtosDadosPatchDTO = new \Eloom\BlingApi\Model\ProdutosDadosPatchDTO(); // \Eloom\BlingApi\Model\ProdutosDadosPatchDTO

try {
    $result = $apiInstance->produtosIdProdutoPatch($idProduto, $produtosDadosPatchDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosIdProdutoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |
| **produtosDadosPatchDTO** | [**\Eloom\BlingApi\Model\ProdutosDadosPatchDTO**](../Model/ProdutosDadosPatchDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosResponsePOSTPUT**](../Model/ProdutosResponsePOSTPUT.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosIdProdutoPut()`

```php
produtosIdProdutoPut($idProduto, $produtosDadosDTO): \Eloom\BlingApi\Model\ProdutosResponsePOSTPUT
```

Altera um produto

Altera um produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto
$produtosDadosDTO = new \Eloom\BlingApi\Model\ProdutosDadosDTO(); // \Eloom\BlingApi\Model\ProdutosDadosDTO

try {
    $result = $apiInstance->produtosIdProdutoPut($idProduto, $produtosDadosDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosIdProdutoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |
| **produtosDadosDTO** | [**\Eloom\BlingApi\Model\ProdutosDadosDTO**](../Model/ProdutosDadosDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosResponsePOSTPUT**](../Model/ProdutosResponsePOSTPUT.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosIdProdutoSituacoesPatch()`

```php
produtosIdProdutoSituacoesPatch($idProduto, $produtosIdProdutoSituacoesPatchRequest)
```

Altera a situação de um produto

Altera a situação de um produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto
$produtosIdProdutoSituacoesPatchRequest = new \Eloom\BlingApi\Model\ProdutosIdProdutoSituacoesPatchRequest(); // \Eloom\BlingApi\Model\ProdutosIdProdutoSituacoesPatchRequest

try {
    $apiInstance->produtosIdProdutoSituacoesPatch($idProduto, $produtosIdProdutoSituacoesPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosIdProdutoSituacoesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |
| **produtosIdProdutoSituacoesPatchRequest** | [**\Eloom\BlingApi\Model\ProdutosIdProdutoSituacoesPatchRequest**](../Model/ProdutosIdProdutoSituacoesPatchRequest.md)|  | |

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

## `produtosPost()`

```php
produtosPost($produtosDadosDTO): \Eloom\BlingApi\Model\ProdutosResponsePOSTPUT
```

Cria um produto

Cria um produto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$produtosDadosDTO = new \Eloom\BlingApi\Model\ProdutosDadosDTO(); // \Eloom\BlingApi\Model\ProdutosDadosDTO

try {
    $result = $apiInstance->produtosPost($produtosDadosDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **produtosDadosDTO** | [**\Eloom\BlingApi\Model\ProdutosDadosDTO**](../Model/ProdutosDadosDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosResponsePOSTPUT**](../Model/ProdutosResponsePOSTPUT.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosSituacoesPost()`

```php
produtosSituacoesPost($produtosSituacoesPostRequest): \Eloom\BlingApi\Model\ProdutosDelete200Response
```

Altera a situação de múltiplos produtos

Altera a situação de múltiplos produtos pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$produtosSituacoesPostRequest = new \Eloom\BlingApi\Model\ProdutosSituacoesPostRequest(); // \Eloom\BlingApi\Model\ProdutosSituacoesPostRequest

try {
    $result = $apiInstance->produtosSituacoesPost($produtosSituacoesPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosApi->produtosSituacoesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **produtosSituacoesPostRequest** | [**\Eloom\BlingApi\Model\ProdutosSituacoesPostRequest**](../Model/ProdutosSituacoesPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosDelete200Response**](../Model/ProdutosDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
