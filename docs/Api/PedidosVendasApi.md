# Eloom\BlingApi\PedidosVendasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pedidosVendasDelete()**](PedidosVendasApi.md#pedidosVendasDelete) | **DELETE** /pedidos/vendas | Remove pedidos de vendas |
| [**pedidosVendasGet()**](PedidosVendasApi.md#pedidosVendasGet) | **GET** /pedidos/vendas | Obtém pedidos de vendas |
| [**pedidosVendasIdPedidoVendaDelete()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaDelete) | **DELETE** /pedidos/vendas/{idPedidoVenda} | Remove um pedido de venda |
| [**pedidosVendasIdPedidoVendaEstornarContasPost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaEstornarContasPost) | **POST** /pedidos/vendas/{idPedidoVenda}/estornar-contas | Estorna as contas de um pedido de venda |
| [**pedidosVendasIdPedidoVendaEstornarEstoquePost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaEstornarEstoquePost) | **POST** /pedidos/vendas/{idPedidoVenda}/estornar-estoque | Estorna o estoque de um pedido de venda |
| [**pedidosVendasIdPedidoVendaGerarNfcePost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaGerarNfcePost) | **POST** /pedidos/vendas/{idPedidoVenda}/gerar-nfce | Gera nota fiscal de consumidor eletrônica a partir do pedido de venda |
| [**pedidosVendasIdPedidoVendaGerarNfePost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaGerarNfePost) | **POST** /pedidos/vendas/{idPedidoVenda}/gerar-nfe | Gera nota fiscal eletrônica a partir do pedido de venda |
| [**pedidosVendasIdPedidoVendaGet()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaGet) | **GET** /pedidos/vendas/{idPedidoVenda} | Obtém um pedido de venda |
| [**pedidosVendasIdPedidoVendaLancarContasPost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaLancarContasPost) | **POST** /pedidos/vendas/{idPedidoVenda}/lancar-contas | Lança as contas de um pedido de venda |
| [**pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost) | **POST** /pedidos/vendas/{idPedidoVenda}/lancar-estoque/{idDeposito} | Lança o estoque de um pedido de venda especificando o depósito |
| [**pedidosVendasIdPedidoVendaLancarEstoquePost()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaLancarEstoquePost) | **POST** /pedidos/vendas/{idPedidoVenda}/lancar-estoque | Lança o estoque de um pedido de venda no depósito padrão |
| [**pedidosVendasIdPedidoVendaPut()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaPut) | **PUT** /pedidos/vendas/{idPedidoVenda} | Altera um pedido de venda |
| [**pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch()**](PedidosVendasApi.md#pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch) | **PATCH** /pedidos/vendas/{idPedidoVenda}/situacoes/{idSituacao} | Altera a situação de um pedido de venda |
| [**pedidosVendasPost()**](PedidosVendasApi.md#pedidosVendasPost) | **POST** /pedidos/vendas | Cria um pedido de venda |


## `pedidosVendasDelete()`

```php
pedidosVendasDelete($idsPedidosVendas): \Eloom\BlingApi\Model\PedidosVendasDelete200Response
```

Remove pedidos de vendas

Remove pedidos de vendas pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsPedidosVendas = [12345678,87654321]; // int[] | IDs dos pedidos de vendas

try {
    $result = $apiInstance->pedidosVendasDelete($idsPedidosVendas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsPedidosVendas** | [**int[]**](../Model/int.md)| IDs dos pedidos de vendas | |

### Return type

[**\Eloom\BlingApi\Model\PedidosVendasDelete200Response**](../Model/PedidosVendasDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosVendasGet()`

```php
pedidosVendasGet($pagina, $limite, $idContato, $idsSituacoes, $dataInicial, $dataFinal, $dataAlteracaoInicial, $dataAlteracaoFinal, $dataPrevistaInicial, $dataPrevistaFinal, $numero, $idLoja, $idVendedor, $idControleCaixa, $numerosLojas, $idUnidadeNegocio): \Eloom\BlingApi\Model\PedidosVendasGet200Response
```

Obtém pedidos de vendas

Obtém pedidos de vendas paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idContato = 12345678; // int | ID do contato
$idsSituacoes = [12345678,87654321]; // int[] | Conjunto de situações
$dataInicial = Fri Dec 31 21:00:00 BRT 2021; // \DateTime | Data incial
$dataFinal = Fri Jan 14 21:00:00 BRT 2022; // \DateTime | Data final
$dataAlteracaoInicial = 2022-01-01 10:00:00; // string | Data inicial da alteração
$dataAlteracaoFinal = 2022-01-15 11:00:00; // string | Data final da alteração
$dataPrevistaInicial = Fri Dec 31 21:00:00 BRT 2021; // \DateTime | Data inicial prevista
$dataPrevistaFinal = Fri Jan 14 21:00:00 BRT 2022; // \DateTime | Data final prevista
$numero = 12345; // int | Número do pedido de venda
$idLoja = 12345678; // int | ID da loja
$idVendedor = 12345678; // int | ID do vendedor
$idControleCaixa = 12345678; // int | ID do controle de caixa
$numerosLojas = ["12345","54321"]; // string[] | Conjunto de números de pedidos nas lojas
$idUnidadeNegocio = 12345678; // int | ID da unidade de negócio (filial)

try {
    $result = $apiInstance->pedidosVendasGet($pagina, $limite, $idContato, $idsSituacoes, $dataInicial, $dataFinal, $dataAlteracaoInicial, $dataAlteracaoFinal, $dataPrevistaInicial, $dataPrevistaFinal, $numero, $idLoja, $idVendedor, $idControleCaixa, $numerosLojas, $idUnidadeNegocio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idContato** | **int**| ID do contato | [optional] |
| **idsSituacoes** | [**int[]**](../Model/int.md)| Conjunto de situações | [optional] |
| **dataInicial** | **\DateTime**| Data incial | [optional] |
| **dataFinal** | **\DateTime**| Data final | [optional] |
| **dataAlteracaoInicial** | **string**| Data inicial da alteração | [optional] |
| **dataAlteracaoFinal** | **string**| Data final da alteração | [optional] |
| **dataPrevistaInicial** | **\DateTime**| Data inicial prevista | [optional] |
| **dataPrevistaFinal** | **\DateTime**| Data final prevista | [optional] |
| **numero** | **int**| Número do pedido de venda | [optional] |
| **idLoja** | **int**| ID da loja | [optional] |
| **idVendedor** | **int**| ID do vendedor | [optional] |
| **idControleCaixa** | **int**| ID do controle de caixa | [optional] |
| **numerosLojas** | [**string[]**](../Model/string.md)| Conjunto de números de pedidos nas lojas | [optional] |
| **idUnidadeNegocio** | **int**| ID da unidade de negócio (filial) | [optional] |

### Return type

[**\Eloom\BlingApi\Model\PedidosVendasGet200Response**](../Model/PedidosVendasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosVendasIdPedidoVendaDelete()`

```php
pedidosVendasIdPedidoVendaDelete($idPedidoVenda)
```

Remove um pedido de venda

Remove um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $apiInstance->pedidosVendasIdPedidoVendaDelete($idPedidoVenda);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

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

## `pedidosVendasIdPedidoVendaEstornarContasPost()`

```php
pedidosVendasIdPedidoVendaEstornarContasPost($idPedidoVenda)
```

Estorna as contas de um pedido de venda

Estorna as contas de um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $apiInstance->pedidosVendasIdPedidoVendaEstornarContasPost($idPedidoVenda);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaEstornarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

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

## `pedidosVendasIdPedidoVendaEstornarEstoquePost()`

```php
pedidosVendasIdPedidoVendaEstornarEstoquePost($idPedidoVenda)
```

Estorna o estoque de um pedido de venda

Estorna o estoque de um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $apiInstance->pedidosVendasIdPedidoVendaEstornarEstoquePost($idPedidoVenda);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaEstornarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

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

## `pedidosVendasIdPedidoVendaGerarNfcePost()`

```php
pedidosVendasIdPedidoVendaGerarNfcePost($idPedidoVenda): \Eloom\BlingApi\Model\VendasCreateInvoiceResponseDTO
```

Gera nota fiscal de consumidor eletrônica a partir do pedido de venda

Gera nota fiscal de consumidor eletrônica a partir do pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $result = $apiInstance->pedidosVendasIdPedidoVendaGerarNfcePost($idPedidoVenda);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaGerarNfcePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

### Return type

[**\Eloom\BlingApi\Model\VendasCreateInvoiceResponseDTO**](../Model/VendasCreateInvoiceResponseDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosVendasIdPedidoVendaGerarNfePost()`

```php
pedidosVendasIdPedidoVendaGerarNfePost($idPedidoVenda): \Eloom\BlingApi\Model\VendasCreateInvoiceResponseDTO
```

Gera nota fiscal eletrônica a partir do pedido de venda

Gera nota fiscal eletrônica a partir do pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $result = $apiInstance->pedidosVendasIdPedidoVendaGerarNfePost($idPedidoVenda);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaGerarNfePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

### Return type

[**\Eloom\BlingApi\Model\VendasCreateInvoiceResponseDTO**](../Model/VendasCreateInvoiceResponseDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosVendasIdPedidoVendaGet()`

```php
pedidosVendasIdPedidoVendaGet($idPedidoVenda): \Eloom\BlingApi\Model\PedidosVendasIdPedidoVendaGet200Response
```

Obtém um pedido de venda

Obtém um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $result = $apiInstance->pedidosVendasIdPedidoVendaGet($idPedidoVenda);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

### Return type

[**\Eloom\BlingApi\Model\PedidosVendasIdPedidoVendaGet200Response**](../Model/PedidosVendasIdPedidoVendaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosVendasIdPedidoVendaLancarContasPost()`

```php
pedidosVendasIdPedidoVendaLancarContasPost($idPedidoVenda)
```

Lança as contas de um pedido de venda

Lança as contas de um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $apiInstance->pedidosVendasIdPedidoVendaLancarContasPost($idPedidoVenda);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaLancarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

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

## `pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost()`

```php
pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost($idPedidoVenda, $idDeposito)
```

Lança o estoque de um pedido de venda especificando o depósito

Lança o estoque de um pedido de venda pelo ID, especificando o ID do depósito.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda
$idDeposito = 12345678; // int | ID do depósito de estoque

try {
    $apiInstance->pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost($idPedidoVenda, $idDeposito);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |
| **idDeposito** | **int**| ID do depósito de estoque | |

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

## `pedidosVendasIdPedidoVendaLancarEstoquePost()`

```php
pedidosVendasIdPedidoVendaLancarEstoquePost($idPedidoVenda)
```

Lança o estoque de um pedido de venda no depósito padrão

Lança o estoque de um pedido de venda pelo ID, no depósito padrão.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda

try {
    $apiInstance->pedidosVendasIdPedidoVendaLancarEstoquePost($idPedidoVenda);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaLancarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |

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

## `pedidosVendasIdPedidoVendaPut()`

```php
pedidosVendasIdPedidoVendaPut($idPedidoVenda, $pedidosVendasIdPedidoVendaPutRequest): \Eloom\BlingApi\Model\PedidosVendasPost201Response
```

Altera um pedido de venda

Altera um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda
$pedidosVendasIdPedidoVendaPutRequest = new \Eloom\BlingApi\Model\PedidosVendasIdPedidoVendaPutRequest(); // \Eloom\BlingApi\Model\PedidosVendasIdPedidoVendaPutRequest

try {
    $result = $apiInstance->pedidosVendasIdPedidoVendaPut($idPedidoVenda, $pedidosVendasIdPedidoVendaPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |
| **pedidosVendasIdPedidoVendaPutRequest** | [**\Eloom\BlingApi\Model\PedidosVendasIdPedidoVendaPutRequest**](../Model/PedidosVendasIdPedidoVendaPutRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\PedidosVendasPost201Response**](../Model/PedidosVendasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch()`

```php
pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch($idPedidoVenda, $idSituacao)
```

Altera a situação de um pedido de venda

Altera a situação de um pedido de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoVenda = 12345678; // int | ID do pedido de venda
$idSituacao = 12345678; // int | ID da situação do pedido de venda

try {
    $apiInstance->pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch($idPedidoVenda, $idSituacao);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoVenda** | **int**| ID do pedido de venda | |
| **idSituacao** | **int**| ID da situação do pedido de venda | |

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

## `pedidosVendasPost()`

```php
pedidosVendasPost($pedidosVendasPostRequest): \Eloom\BlingApi\Model\PedidosVendasPost201Response
```

Cria um pedido de venda

Cria um pedido de venda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosVendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pedidosVendasPostRequest = new \Eloom\BlingApi\Model\PedidosVendasPostRequest(); // \Eloom\BlingApi\Model\PedidosVendasPostRequest

try {
    $result = $apiInstance->pedidosVendasPost($pedidosVendasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosVendasApi->pedidosVendasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pedidosVendasPostRequest** | [**\Eloom\BlingApi\Model\PedidosVendasPostRequest**](../Model/PedidosVendasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\PedidosVendasPost201Response**](../Model/PedidosVendasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
