# Eloom\BlingApi\ProdutosLotesLanamentosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosIdProdutoLotesDepositosIdDepositoSaldoGet()**](ProdutosLotesLanamentosApi.md#produtosIdProdutoLotesDepositosIdDepositoSaldoGet) | **GET** /produtos/{idProduto}/lotes/depositos/{idDeposito}/saldo | Obtém os saldos dos lotes de um produto por depósito |
| [**produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet()**](ProdutosLotesLanamentosApi.md#produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet) | **GET** /produtos/{idProduto}/lotes/depositos/{idDeposito}/saldo/soma | Obtém a soma dos saldos dos lotes de um produto em um depósito |
| [**produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet()**](ProdutosLotesLanamentosApi.md#produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet) | **GET** /produtos/{idProduto}/lotes/{idLote}/depositos/{idDeposito}/saldo | Obtém o saldo de um lote de produto |
| [**produtosIdProdutoLotesSaldoSomaGet()**](ProdutosLotesLanamentosApi.md#produtosIdProdutoLotesSaldoSomaGet) | **GET** /produtos/{idProduto}/lotes/saldo/soma | Obtém o saldo total dos lotes de um produto |
| [**produtosLotesIdLoteLancamentosGet()**](ProdutosLotesLanamentosApi.md#produtosLotesIdLoteLancamentosGet) | **GET** /produtos/lotes/{idLote}/lancamentos | Obtém os lançamentos de um lote de produto |
| [**produtosLotesIdLoteLancamentosPost()**](ProdutosLotesLanamentosApi.md#produtosLotesIdLoteLancamentosPost) | **POST** /produtos/lotes/{idLote}/lancamentos | Cria um lançamento de um lote |
| [**produtosLotesLancamentosIdLancamentoGet()**](ProdutosLotesLanamentosApi.md#produtosLotesLancamentosIdLancamentoGet) | **GET** /produtos/lotes/lancamentos/{idLancamento} | Obtém um lançamento de um lote de produto |
| [**produtosLotesLancamentosIdLancamentoPatch()**](ProdutosLotesLanamentosApi.md#produtosLotesLancamentosIdLancamentoPatch) | **PATCH** /produtos/lotes/lancamentos/{idLancamento} | Altera a observação de um lançamento de um lote de um produto |


## `produtosIdProdutoLotesDepositosIdDepositoSaldoGet()`

```php
produtosIdProdutoLotesDepositosIdDepositoSaldoGet($idsLotes, $idProduto, $idDeposito): \Eloom\BlingApi\Model\ProdutosIdProdutoLotesDepositosIdDepositoSaldoGet200Response
```

Obtém os saldos dos lotes de um produto por depósito

Obtém os saldos dos lotes de um produto por depósito.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsLotes = [12345678,87654321]; // int[] | IDs dos lotes
$idProduto = 12345678; // int | ID do produto
$idDeposito = 12345678; // int | ID do depósito

try {
    $result = $apiInstance->produtosIdProdutoLotesDepositosIdDepositoSaldoGet($idsLotes, $idProduto, $idDeposito);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosIdProdutoLotesDepositosIdDepositoSaldoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsLotes** | [**int[]**](../Model/int.md)| IDs dos lotes | |
| **idProduto** | **int**| ID do produto | |
| **idDeposito** | **int**| ID do depósito | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosIdProdutoLotesDepositosIdDepositoSaldoGet200Response**](../Model/ProdutosIdProdutoLotesDepositosIdDepositoSaldoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet()`

```php
produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet($idProduto, $idDeposito): \Eloom\BlingApi\Model\ProdutosIdProdutoLotesDepositosIdDepositoSaldoSomaGet200Response
```

Obtém a soma dos saldos dos lotes de um produto em um depósito

Obtém a soma dos saldos dos lotes de um produto em um depósito.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto
$idDeposito = 12345678; // int | ID do depósito

try {
    $result = $apiInstance->produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet($idProduto, $idDeposito);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |
| **idDeposito** | **int**| ID do depósito | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosIdProdutoLotesDepositosIdDepositoSaldoSomaGet200Response**](../Model/ProdutosIdProdutoLotesDepositosIdDepositoSaldoSomaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet()`

```php
produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet($idLote, $idProduto, $idDeposito): \Eloom\BlingApi\Model\ProdutosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet200Response
```

Obtém o saldo de um lote de produto

Obtém o saldo de um lote de produto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLote = 12345678; // int | ID do lote
$idProduto = 12345678; // int | ID do produto
$idDeposito = 12345678; // int | ID do depósito

try {
    $result = $apiInstance->produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet($idLote, $idProduto, $idDeposito);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLote** | **int**| ID do lote | |
| **idProduto** | **int**| ID do produto | |
| **idDeposito** | **int**| ID do depósito | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet200Response**](../Model/ProdutosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosIdProdutoLotesSaldoSomaGet()`

```php
produtosIdProdutoLotesSaldoSomaGet($idProduto): \Eloom\BlingApi\Model\ProdutosIdProdutoLotesSaldoSomaGet200Response
```

Obtém o saldo total dos lotes de um produto

Obtém o saldo total dos lotes de um produto pelo ID do produto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto

try {
    $result = $apiInstance->produtosIdProdutoLotesSaldoSomaGet($idProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosIdProdutoLotesSaldoSomaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosIdProdutoLotesSaldoSomaGet200Response**](../Model/ProdutosIdProdutoLotesSaldoSomaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesIdLoteLancamentosGet()`

```php
produtosLotesIdLoteLancamentosGet($idLote): \Eloom\BlingApi\Model\ProdutosLotesIdLoteLancamentosGet200Response
```

Obtém os lançamentos de um lote de produto

Obtém os lançamentos de um lote de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLote = 12345678; // int | ID do lote

try {
    $result = $apiInstance->produtosLotesIdLoteLancamentosGet($idLote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosLotesIdLoteLancamentosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLote** | **int**| ID do lote | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesIdLoteLancamentosGet200Response**](../Model/ProdutosLotesIdLoteLancamentosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesIdLoteLancamentosPost()`

```php
produtosLotesIdLoteLancamentosPost($idLote, $loteLancamentoDTO): \Eloom\BlingApi\Model\ProdutosLotesIdLoteLancamentosPost200Response
```

Cria um lançamento de um lote

Inclui lançamento de um lote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLote = 12345678; // int | ID do lote
$loteLancamentoDTO = new \Eloom\BlingApi\Model\LoteLancamentoDTO(); // \Eloom\BlingApi\Model\LoteLancamentoDTO

try {
    $result = $apiInstance->produtosLotesIdLoteLancamentosPost($idLote, $loteLancamentoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosLotesIdLoteLancamentosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLote** | **int**| ID do lote | |
| **loteLancamentoDTO** | [**\Eloom\BlingApi\Model\LoteLancamentoDTO**](../Model/LoteLancamentoDTO.md)|  | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesIdLoteLancamentosPost200Response**](../Model/ProdutosLotesIdLoteLancamentosPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesLancamentosIdLancamentoGet()`

```php
produtosLotesLancamentosIdLancamentoGet($idLancamento): \Eloom\BlingApi\Model\ProdutosLotesIdLoteLancamentosPost200Response
```

Obtém um lançamento de um lote de produto

Obtém um lançamento de um lote de produto pelo ID do lançamento.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLancamento = 12345678; // int | ID do lançamento

try {
    $result = $apiInstance->produtosLotesLancamentosIdLancamentoGet($idLancamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosLotesLancamentosIdLancamentoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLancamento** | **int**| ID do lançamento | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesIdLoteLancamentosPost200Response**](../Model/ProdutosLotesIdLoteLancamentosPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesLancamentosIdLancamentoPatch()`

```php
produtosLotesLancamentosIdLancamentoPatch($idLancamento, $loteLancamentoObservacaoDTO)
```

Altera a observação de um lançamento de um lote de um produto

Altera a observação de um lançamento de um lote de um produto pelo ID do lançamento.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesLanamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLancamento = 12345678; // int | ID do lançamento
$loteLancamentoObservacaoDTO = new \Eloom\BlingApi\Model\LoteLancamentoObservacaoDTO(); // \Eloom\BlingApi\Model\LoteLancamentoObservacaoDTO

try {
    $apiInstance->produtosLotesLancamentosIdLancamentoPatch($idLancamento, $loteLancamentoObservacaoDTO);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesLanamentosApi->produtosLotesLancamentosIdLancamentoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLancamento** | **int**| ID do lançamento | |
| **loteLancamentoObservacaoDTO** | [**\Eloom\BlingApi\Model\LoteLancamentoObservacaoDTO**](../Model/LoteLancamentoObservacaoDTO.md)|  | [optional] |

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
