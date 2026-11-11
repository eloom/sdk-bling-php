# Eloom\BlingApi\FormasDePagamentosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**formasPagamentosGet()**](FormasDePagamentosApi.md#formasPagamentosGet) | **GET** /formas-pagamentos | Obtém formas de pagamentos |
| [**formasPagamentosIdFormaPagamentoDelete()**](FormasDePagamentosApi.md#formasPagamentosIdFormaPagamentoDelete) | **DELETE** /formas-pagamentos/{idFormaPagamento} | Remove uma forma de pagamento |
| [**formasPagamentosIdFormaPagamentoGet()**](FormasDePagamentosApi.md#formasPagamentosIdFormaPagamentoGet) | **GET** /formas-pagamentos/{idFormaPagamento} | Obtém uma forma de pagamento |
| [**formasPagamentosIdFormaPagamentoPadraoPatch()**](FormasDePagamentosApi.md#formasPagamentosIdFormaPagamentoPadraoPatch) | **PATCH** /formas-pagamentos/{idFormaPagamento}/padrao | Altera o padrão de uma forma de pagamento |
| [**formasPagamentosIdFormaPagamentoPut()**](FormasDePagamentosApi.md#formasPagamentosIdFormaPagamentoPut) | **PUT** /formas-pagamentos/{idFormaPagamento} | Altera uma forma de pagamento |
| [**formasPagamentosIdFormaPagamentoSituacaoPatch()**](FormasDePagamentosApi.md#formasPagamentosIdFormaPagamentoSituacaoPatch) | **PATCH** /formas-pagamentos/{idFormaPagamento}/situacao | Altera a situação de uma forma de pagamento |
| [**formasPagamentosPost()**](FormasDePagamentosApi.md#formasPagamentosPost) | **POST** /formas-pagamentos | Cria uma forma de pagamento |


## `formasPagamentosGet()`

```php
formasPagamentosGet($pagina, $limite, $descricao, $tiposPagamentos, $situacao): \Eloom\BlingApi\Model\FormasPagamentosGet200Response
```

Obtém formas de pagamentos

Obtém formas de pagamentos paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$descricao = Dinheiro; // string | Descrição da forma de pagamento
$tiposPagamentos = [12345678,87654321]; // int[] | `1` Dinheiro<br>`2` Cheque<br>`3` Cartão de Crédito<br>`4` Cartão de Débito<br>`5` Cartão da Loja (Private Label)<br>`10` Vale Alimentação<br>`11` Vale Refeição<br>`12` Vale Presente<br>`13` Vale Combustível<br>`14` Duplicata Mercantil<br>`15` Boleto Bancário<br>`16` Depósito Bancário<br>`17` Pagamento Instantâneo (PIX) - Dinâmico<br>`18` Transferência Bancária, Carteira Digital<br>`19` Programa de Fidelidade, Cashback, Crédito Virtual<br>`20` Pagamento Instantâneo (PIX) – Estático<br>`21` Crédito em loja<br>`22` Pagamento Eletrônico não Informado - falha de hardware do sistema emissor<br>`90` Sem pagamento<br>`99` Outros
$situacao = 56; // int | `0` Inativa<br>`1` Ativa

try {
    $result = $apiInstance->formasPagamentosGet($pagina, $limite, $descricao, $tiposPagamentos, $situacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **descricao** | **string**| Descrição da forma de pagamento | [optional] |
| **tiposPagamentos** | [**int[]**](../Model/int.md)| &#x60;1&#x60; Dinheiro&lt;br&gt;&#x60;2&#x60; Cheque&lt;br&gt;&#x60;3&#x60; Cartão de Crédito&lt;br&gt;&#x60;4&#x60; Cartão de Débito&lt;br&gt;&#x60;5&#x60; Cartão da Loja (Private Label)&lt;br&gt;&#x60;10&#x60; Vale Alimentação&lt;br&gt;&#x60;11&#x60; Vale Refeição&lt;br&gt;&#x60;12&#x60; Vale Presente&lt;br&gt;&#x60;13&#x60; Vale Combustível&lt;br&gt;&#x60;14&#x60; Duplicata Mercantil&lt;br&gt;&#x60;15&#x60; Boleto Bancário&lt;br&gt;&#x60;16&#x60; Depósito Bancário&lt;br&gt;&#x60;17&#x60; Pagamento Instantâneo (PIX) - Dinâmico&lt;br&gt;&#x60;18&#x60; Transferência Bancária, Carteira Digital&lt;br&gt;&#x60;19&#x60; Programa de Fidelidade, Cashback, Crédito Virtual&lt;br&gt;&#x60;20&#x60; Pagamento Instantâneo (PIX) – Estático&lt;br&gt;&#x60;21&#x60; Crédito em loja&lt;br&gt;&#x60;22&#x60; Pagamento Eletrônico não Informado - falha de hardware do sistema emissor&lt;br&gt;&#x60;90&#x60; Sem pagamento&lt;br&gt;&#x60;99&#x60; Outros | [optional] |
| **situacao** | **int**| &#x60;0&#x60; Inativa&lt;br&gt;&#x60;1&#x60; Ativa | [optional] |

### Return type

[**\Eloom\BlingApi\Model\FormasPagamentosGet200Response**](../Model/FormasPagamentosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formasPagamentosIdFormaPagamentoDelete()`

```php
formasPagamentosIdFormaPagamentoDelete($idFormaPagamento)
```

Remove uma forma de pagamento

Remove uma forma de pagamento pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idFormaPagamento = 12345678; // int | ID da forma de pagamento

try {
    $apiInstance->formasPagamentosIdFormaPagamentoDelete($idFormaPagamento);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosIdFormaPagamentoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idFormaPagamento** | **int**| ID da forma de pagamento | |

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

## `formasPagamentosIdFormaPagamentoGet()`

```php
formasPagamentosIdFormaPagamentoGet($idFormaPagamento): \Eloom\BlingApi\Model\FormasPagamentosIdFormaPagamentoGet200Response
```

Obtém uma forma de pagamento

Obtém uma forma de pagamento pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idFormaPagamento = 12345678; // int | ID da forma de pagamento

try {
    $result = $apiInstance->formasPagamentosIdFormaPagamentoGet($idFormaPagamento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosIdFormaPagamentoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idFormaPagamento** | **int**| ID da forma de pagamento | |

### Return type

[**\Eloom\BlingApi\Model\FormasPagamentosIdFormaPagamentoGet200Response**](../Model/FormasPagamentosIdFormaPagamentoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formasPagamentosIdFormaPagamentoPadraoPatch()`

```php
formasPagamentosIdFormaPagamentoPadraoPatch($idFormaPagamento, $formasPagamentosDefinirPadraoDTO)
```

Altera o padrão de uma forma de pagamento

Altera o padrão de uma forma de pagamento pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idFormaPagamento = 12345678; // int | ID da forma de pagamento
$formasPagamentosDefinirPadraoDTO = new \Eloom\BlingApi\Model\FormasPagamentosDefinirPadraoDTO(); // \Eloom\BlingApi\Model\FormasPagamentosDefinirPadraoDTO

try {
    $apiInstance->formasPagamentosIdFormaPagamentoPadraoPatch($idFormaPagamento, $formasPagamentosDefinirPadraoDTO);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosIdFormaPagamentoPadraoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idFormaPagamento** | **int**| ID da forma de pagamento | |
| **formasPagamentosDefinirPadraoDTO** | [**\Eloom\BlingApi\Model\FormasPagamentosDefinirPadraoDTO**](../Model/FormasPagamentosDefinirPadraoDTO.md)|  | |

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

## `formasPagamentosIdFormaPagamentoPut()`

```php
formasPagamentosIdFormaPagamentoPut($idFormaPagamento, $formasPagamentosPostRequest): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Altera uma forma de pagamento

Altera uma forma de pagamento pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idFormaPagamento = 12345678; // int | ID da forma de pagamento
$formasPagamentosPostRequest = new \Eloom\BlingApi\Model\FormasPagamentosPostRequest(); // \Eloom\BlingApi\Model\FormasPagamentosPostRequest

try {
    $result = $apiInstance->formasPagamentosIdFormaPagamentoPut($idFormaPagamento, $formasPagamentosPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosIdFormaPagamentoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idFormaPagamento** | **int**| ID da forma de pagamento | |
| **formasPagamentosPostRequest** | [**\Eloom\BlingApi\Model\FormasPagamentosPostRequest**](../Model/FormasPagamentosPostRequest.md)|  | |

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

## `formasPagamentosIdFormaPagamentoSituacaoPatch()`

```php
formasPagamentosIdFormaPagamentoSituacaoPatch($idFormaPagamento, $formasPagamentosAlterarSituacaoDTO)
```

Altera a situação de uma forma de pagamento

Altera a situação de uma forma de pagamento pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idFormaPagamento = 12345678; // int | ID da forma de pagamento
$formasPagamentosAlterarSituacaoDTO = new \Eloom\BlingApi\Model\FormasPagamentosAlterarSituacaoDTO(); // \Eloom\BlingApi\Model\FormasPagamentosAlterarSituacaoDTO

try {
    $apiInstance->formasPagamentosIdFormaPagamentoSituacaoPatch($idFormaPagamento, $formasPagamentosAlterarSituacaoDTO);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosIdFormaPagamentoSituacaoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idFormaPagamento** | **int**| ID da forma de pagamento | |
| **formasPagamentosAlterarSituacaoDTO** | [**\Eloom\BlingApi\Model\FormasPagamentosAlterarSituacaoDTO**](../Model/FormasPagamentosAlterarSituacaoDTO.md)|  | |

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

## `formasPagamentosPost()`

```php
formasPagamentosPost($formasPagamentosPostRequest): \Eloom\BlingApi\Model\FormasPagamentosPost201Response
```

Cria uma forma de pagamento

Cria uma forma de pagamento.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\FormasDePagamentosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formasPagamentosPostRequest = new \Eloom\BlingApi\Model\FormasPagamentosPostRequest(); // \Eloom\BlingApi\Model\FormasPagamentosPostRequest

try {
    $result = $apiInstance->formasPagamentosPost($formasPagamentosPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormasDePagamentosApi->formasPagamentosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **formasPagamentosPostRequest** | [**\Eloom\BlingApi\Model\FormasPagamentosPostRequest**](../Model/FormasPagamentosPostRequest.md)|  | |

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
