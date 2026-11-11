# Eloom\BlingApi\PedidosComprasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pedidosComprasGet()**](PedidosComprasApi.md#pedidosComprasGet) | **GET** /pedidos/compras | Obtém pedidos de compras |
| [**pedidosComprasIdPedidoCompraDelete()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraDelete) | **DELETE** /pedidos/compras/{idPedidoCompra} | Remove um pedido de compra |
| [**pedidosComprasIdPedidoCompraEstornarContasPost()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraEstornarContasPost) | **POST** /pedidos/compras/{idPedidoCompra}/estornar-contas | Estorna as contas de um pedido de compra |
| [**pedidosComprasIdPedidoCompraEstornarEstoquePost()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraEstornarEstoquePost) | **POST** /pedidos/compras/{idPedidoCompra}/estornar-estoque | Estorna o estoque de um pedido de compra |
| [**pedidosComprasIdPedidoCompraGet()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraGet) | **GET** /pedidos/compras/{idPedidoCompra} | Obtém um pedido de compra |
| [**pedidosComprasIdPedidoCompraLancarContasPost()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraLancarContasPost) | **POST** /pedidos/compras/{idPedidoCompra}/lancar-contas | Lança as contas de um pedido de compra |
| [**pedidosComprasIdPedidoCompraLancarEstoquePost()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraLancarEstoquePost) | **POST** /pedidos/compras/{idPedidoCompra}/lancar-estoque | Lança o estoque de um pedido de compra |
| [**pedidosComprasIdPedidoCompraPut()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraPut) | **PUT** /pedidos/compras/{idPedidoCompra} | Altera um pedido de compra |
| [**pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch()**](PedidosComprasApi.md#pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch) | **PATCH** /pedidos/compras/{idPedidoCompra}/situacoes/{idSituacao} | Altera a situação de um pedido de compra |
| [**pedidosComprasPost()**](PedidosComprasApi.md#pedidosComprasPost) | **POST** /pedidos/compras | Cria um pedido de compra |


## `pedidosComprasGet()`

```php
pedidosComprasGet($pagina, $limite, $idFornecedor, $valorSituacao, $idSituacao, $dataInicial, $dataFinal, $idsNotasFiscais): \Eloom\BlingApi\Model\PedidosComprasGet200Response
```

Obtém pedidos de compras

Obtém pedidos de compras paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idFornecedor = 12345678; // int | ID do contato do tipo fornecedor
$valorSituacao = 1; // int | Valor da situação
$idSituacao = 12345678; // int | ID da situação
$dataInicial = Sat Dec 31 21:00:00 BRT 2022; // \DateTime | Data inicial do período da compra
$dataFinal = Sat Dec 31 21:00:00 BRT 2022; // \DateTime | Data final do período da compra
$idsNotasFiscais = [12345678,87654321]; // int[] | IDs das notas fiscais de entrada

try {
    $result = $apiInstance->pedidosComprasGet($pagina, $limite, $idFornecedor, $valorSituacao, $idSituacao, $dataInicial, $dataFinal, $idsNotasFiscais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idFornecedor** | **int**| ID do contato do tipo fornecedor | [optional] |
| **valorSituacao** | **int**| Valor da situação | [optional] |
| **idSituacao** | **int**| ID da situação | [optional] |
| **dataInicial** | **\DateTime**| Data inicial do período da compra | [optional] |
| **dataFinal** | **\DateTime**| Data final do período da compra | [optional] |
| **idsNotasFiscais** | [**int[]**](../Model/int.md)| IDs das notas fiscais de entrada | [optional] |

### Return type

[**\Eloom\BlingApi\Model\PedidosComprasGet200Response**](../Model/PedidosComprasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosComprasIdPedidoCompraDelete()`

```php
pedidosComprasIdPedidoCompraDelete($idPedidoCompra)
```

Remove um pedido de compra

Remove um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra

try {
    $apiInstance->pedidosComprasIdPedidoCompraDelete($idPedidoCompra);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |

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

## `pedidosComprasIdPedidoCompraEstornarContasPost()`

```php
pedidosComprasIdPedidoCompraEstornarContasPost($idPedidoCompra)
```

Estorna as contas de um pedido de compra

Estorna as contas de um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra

try {
    $apiInstance->pedidosComprasIdPedidoCompraEstornarContasPost($idPedidoCompra);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraEstornarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |

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

## `pedidosComprasIdPedidoCompraEstornarEstoquePost()`

```php
pedidosComprasIdPedidoCompraEstornarEstoquePost($idPedidoCompra)
```

Estorna o estoque de um pedido de compra

Estorna o estoque de um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra

try {
    $apiInstance->pedidosComprasIdPedidoCompraEstornarEstoquePost($idPedidoCompra);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraEstornarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |

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

## `pedidosComprasIdPedidoCompraGet()`

```php
pedidosComprasIdPedidoCompraGet($idPedidoCompra): \Eloom\BlingApi\Model\PedidosComprasIdPedidoCompraGet200Response
```

Obtém um pedido de compra

Obtém um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra

try {
    $result = $apiInstance->pedidosComprasIdPedidoCompraGet($idPedidoCompra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |

### Return type

[**\Eloom\BlingApi\Model\PedidosComprasIdPedidoCompraGet200Response**](../Model/PedidosComprasIdPedidoCompraGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosComprasIdPedidoCompraLancarContasPost()`

```php
pedidosComprasIdPedidoCompraLancarContasPost($idPedidoCompra)
```

Lança as contas de um pedido de compra

Lança as contas de um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra

try {
    $apiInstance->pedidosComprasIdPedidoCompraLancarContasPost($idPedidoCompra);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraLancarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |

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

## `pedidosComprasIdPedidoCompraLancarEstoquePost()`

```php
pedidosComprasIdPedidoCompraLancarEstoquePost($idPedidoCompra)
```

Lança o estoque de um pedido de compra

Lança o estoque de um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra

try {
    $apiInstance->pedidosComprasIdPedidoCompraLancarEstoquePost($idPedidoCompra);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraLancarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |

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

## `pedidosComprasIdPedidoCompraPut()`

```php
pedidosComprasIdPedidoCompraPut($idPedidoCompra, $pedidosComprasPostRequest): \Eloom\BlingApi\Model\PedidosComprasPost201Response
```

Altera um pedido de compra

Altera um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra
$pedidosComprasPostRequest = new \Eloom\BlingApi\Model\PedidosComprasPostRequest(); // \Eloom\BlingApi\Model\PedidosComprasPostRequest

try {
    $result = $apiInstance->pedidosComprasIdPedidoCompraPut($idPedidoCompra, $pedidosComprasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |
| **pedidosComprasPostRequest** | [**\Eloom\BlingApi\Model\PedidosComprasPostRequest**](../Model/PedidosComprasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\PedidosComprasPost201Response**](../Model/PedidosComprasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch()`

```php
pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch($idPedidoCompra, $idSituacao)
```

Altera a situação de um pedido de compra

Altera a situação de um pedido de compra pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPedidoCompra = 12345678; // int | ID do pedido de compra
$idSituacao = 12345678; // int | ID da situação do pedido de compra

try {
    $apiInstance->pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch($idPedidoCompra, $idSituacao);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPedidoCompra** | **int**| ID do pedido de compra | |
| **idSituacao** | **int**| ID da situação do pedido de compra | |

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

## `pedidosComprasPost()`

```php
pedidosComprasPost($pedidosComprasPostRequest): \Eloom\BlingApi\Model\PedidosComprasPost201Response
```

Cria um pedido de compra

Cria um pedido de compra.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PedidosComprasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pedidosComprasPostRequest = new \Eloom\BlingApi\Model\PedidosComprasPostRequest(); // \Eloom\BlingApi\Model\PedidosComprasPostRequest

try {
    $result = $apiInstance->pedidosComprasPost($pedidosComprasPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidosComprasApi->pedidosComprasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pedidosComprasPostRequest** | [**\Eloom\BlingApi\Model\PedidosComprasPostRequest**](../Model/PedidosComprasPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\PedidosComprasPost201Response**](../Model/PedidosComprasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
