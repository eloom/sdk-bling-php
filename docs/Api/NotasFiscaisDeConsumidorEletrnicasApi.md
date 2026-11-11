# Eloom\BlingApi\NotasFiscaisDeConsumidorEletrnicasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**nfceGet()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceGet) | **GET** /nfce | Obtém notas fiscais de consumidor |
| [**nfceIdNotaFiscalConsumidorEnviarPost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorEnviarPost) | **POST** /nfce/{idNotaFiscalConsumidor}/enviar | Envia uma nota de consumidor |
| [**nfceIdNotaFiscalConsumidorEstornarContasPost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorEstornarContasPost) | **POST** /nfce/{idNotaFiscalConsumidor}/estornar-contas | Estorna as contas de uma nota fiscal |
| [**nfceIdNotaFiscalConsumidorEstornarEstoquePost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorEstornarEstoquePost) | **POST** /nfce/{idNotaFiscalConsumidor}/estornar-estoque | Estorna o estoque de uma nota fiscal |
| [**nfceIdNotaFiscalConsumidorGet()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorGet) | **GET** /nfce/{idNotaFiscalConsumidor} | Obtém uma nota fiscal de consumidor |
| [**nfceIdNotaFiscalConsumidorLancarContasPost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorLancarContasPost) | **POST** /nfce/{idNotaFiscalConsumidor}/lancar-contas | Lança as contas de uma nota fiscal |
| [**nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost) | **POST** /nfce/{idNotaFiscalConsumidor}/lancar-estoque/{idDeposito} | Lança o estoque de uma nota fiscal especificando o depósito |
| [**nfceIdNotaFiscalConsumidorLancarEstoquePost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorLancarEstoquePost) | **POST** /nfce/{idNotaFiscalConsumidor}/lancar-estoque | Lança o estoque de uma nota fiscal no depósito padrão |
| [**nfceIdNotaFiscalConsumidorPut()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfceIdNotaFiscalConsumidorPut) | **PUT** /nfce/{idNotaFiscalConsumidor} | Altera uma nota fiscal de consumidor |
| [**nfcePost()**](NotasFiscaisDeConsumidorEletrnicasApi.md#nfcePost) | **POST** /nfce | Cria uma nota fiscal de consumidor |


## `nfceGet()`

```php
nfceGet($pagina, $limite, $idTransportador, $chaveAcesso, $numero, $serie, $situacao, $dataEmissaoInicial, $dataEmissaoFinal): \Eloom\BlingApi\Model\NfceGet200Response
```

Obtém notas fiscais de consumidor

Obtém notas fiscais de consumidor paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idTransportador = 12345678; // int | ID do contato do transportador
$chaveAcesso = 56; // int | Chave de acesso
$numero = 1258; // int | Número da nota fiscal de consumidor
$serie = 1; // int | Série
$situacao = 1; // int | `1` Pendente<br>`2` Cancelada<br>`3` Aguardando recibo<br>`4` Rejeitada<br>`5` Autorizada<br>`6` Emitida DANFE<br>`7` Registrada<br>`8` Aguardando protocolo<br>`9` Denegada<br>`10` Consulta situação<br>`11` Bloqueada
$dataEmissaoInicial = 2021-12-01 00:00:00; // string | Data e hora inicial de emissão
$dataEmissaoFinal = 2021-12-31 23:59:59; // string | Data e hora final de emissão

try {
    $result = $apiInstance->nfceGet($pagina, $limite, $idTransportador, $chaveAcesso, $numero, $serie, $situacao, $dataEmissaoInicial, $dataEmissaoFinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idTransportador** | **int**| ID do contato do transportador | [optional] |
| **chaveAcesso** | **int**| Chave de acesso | [optional] |
| **numero** | **int**| Número da nota fiscal de consumidor | [optional] |
| **serie** | **int**| Série | [optional] |
| **situacao** | **int**| &#x60;1&#x60; Pendente&lt;br&gt;&#x60;2&#x60; Cancelada&lt;br&gt;&#x60;3&#x60; Aguardando recibo&lt;br&gt;&#x60;4&#x60; Rejeitada&lt;br&gt;&#x60;5&#x60; Autorizada&lt;br&gt;&#x60;6&#x60; Emitida DANFE&lt;br&gt;&#x60;7&#x60; Registrada&lt;br&gt;&#x60;8&#x60; Aguardando protocolo&lt;br&gt;&#x60;9&#x60; Denegada&lt;br&gt;&#x60;10&#x60; Consulta situação&lt;br&gt;&#x60;11&#x60; Bloqueada | [optional] |
| **dataEmissaoInicial** | **string**| Data e hora inicial de emissão | [optional] |
| **dataEmissaoFinal** | **string**| Data e hora final de emissão | [optional] |

### Return type

[**\Eloom\BlingApi\Model\NfceGet200Response**](../Model/NfceGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfceIdNotaFiscalConsumidorEnviarPost()`

```php
nfceIdNotaFiscalConsumidorEnviarPost($idNotaFiscalConsumidor): \Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorEnviarPost200Response
```

Envia uma nota de consumidor

Envia uma nota de consumidor pelo ID para emissão na Sefaz.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor

try {
    $result = $apiInstance->nfceIdNotaFiscalConsumidorEnviarPost($idNotaFiscalConsumidor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorEnviarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |

### Return type

[**\Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorEnviarPost200Response**](../Model/NfceIdNotaFiscalConsumidorEnviarPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfceIdNotaFiscalConsumidorEstornarContasPost()`

```php
nfceIdNotaFiscalConsumidorEstornarContasPost($idNotaFiscalConsumidor)
```

Estorna as contas de uma nota fiscal

Estorna as contas de uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor

try {
    $apiInstance->nfceIdNotaFiscalConsumidorEstornarContasPost($idNotaFiscalConsumidor);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorEstornarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |

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

## `nfceIdNotaFiscalConsumidorEstornarEstoquePost()`

```php
nfceIdNotaFiscalConsumidorEstornarEstoquePost($idNotaFiscalConsumidor)
```

Estorna o estoque de uma nota fiscal

Estorna o estoque de uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor

try {
    $apiInstance->nfceIdNotaFiscalConsumidorEstornarEstoquePost($idNotaFiscalConsumidor);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorEstornarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |

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

## `nfceIdNotaFiscalConsumidorGet()`

```php
nfceIdNotaFiscalConsumidorGet($idNotaFiscalConsumidor): \Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorGet200Response
```

Obtém uma nota fiscal de consumidor

Obtém uma nota fiscal de consumidor pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor

try {
    $result = $apiInstance->nfceIdNotaFiscalConsumidorGet($idNotaFiscalConsumidor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |

### Return type

[**\Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorGet200Response**](../Model/NfceIdNotaFiscalConsumidorGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfceIdNotaFiscalConsumidorLancarContasPost()`

```php
nfceIdNotaFiscalConsumidorLancarContasPost($idNotaFiscalConsumidor)
```

Lança as contas de uma nota fiscal

Lança as contas de uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor

try {
    $apiInstance->nfceIdNotaFiscalConsumidorLancarContasPost($idNotaFiscalConsumidor);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorLancarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |

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

## `nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost()`

```php
nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost($idNotaFiscalConsumidor, $idDeposito)
```

Lança o estoque de uma nota fiscal especificando o depósito

Lança o estoque de uma nota fiscal pelo ID, especificando o ID do depósito.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor
$idDeposito = 12345678; // int | ID do depósito

try {
    $apiInstance->nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost($idNotaFiscalConsumidor, $idDeposito);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |
| **idDeposito** | **int**| ID do depósito | |

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

## `nfceIdNotaFiscalConsumidorLancarEstoquePost()`

```php
nfceIdNotaFiscalConsumidorLancarEstoquePost($idNotaFiscalConsumidor)
```

Lança o estoque de uma nota fiscal no depósito padrão

Lança o estoque de uma nota fiscal pelo ID, no depósito padrão.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor

try {
    $apiInstance->nfceIdNotaFiscalConsumidorLancarEstoquePost($idNotaFiscalConsumidor);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorLancarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |

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

## `nfceIdNotaFiscalConsumidorPut()`

```php
nfceIdNotaFiscalConsumidorPut($idNotaFiscalConsumidor, $nfcePostRequest): \Eloom\BlingApi\Model\NfcePost201Response
```

Altera uma nota fiscal de consumidor

Altera uma nota fiscal de consumidor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscalConsumidor = 12345678; // int | ID da nota fiscal de consumidor
$nfcePostRequest = new \Eloom\BlingApi\Model\NfcePostRequest(); // \Eloom\BlingApi\Model\NfcePostRequest

try {
    $result = $apiInstance->nfceIdNotaFiscalConsumidorPut($idNotaFiscalConsumidor, $nfcePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfceIdNotaFiscalConsumidorPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscalConsumidor** | **int**| ID da nota fiscal de consumidor | |
| **nfcePostRequest** | [**\Eloom\BlingApi\Model\NfcePostRequest**](../Model/NfcePostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\NfcePost201Response**](../Model/NfcePost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfcePost()`

```php
nfcePost($nfcePostRequest): \Eloom\BlingApi\Model\NfcePost201Response
```

Cria uma nota fiscal de consumidor

Cria uma nota fiscal de consumidor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeConsumidorEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nfcePostRequest = new \Eloom\BlingApi\Model\NfcePostRequest(); // \Eloom\BlingApi\Model\NfcePostRequest

try {
    $result = $apiInstance->nfcePost($nfcePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeConsumidorEletrnicasApi->nfcePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nfcePostRequest** | [**\Eloom\BlingApi\Model\NfcePostRequest**](../Model/NfcePostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\NfcePost201Response**](../Model/NfcePost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
