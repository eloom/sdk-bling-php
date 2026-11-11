# Eloom\BlingApi\CaixasEBancosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**caixasGet()**](CaixasEBancosApi.md#caixasGet) | **GET** /caixas | Obtém lista de lançamentos de caixas e bancos. |
| [**caixasIdCaixaDelete()**](CaixasEBancosApi.md#caixasIdCaixaDelete) | **DELETE** /caixas/{idCaixa} | Remove um lançamento de caixa e banco |
| [**caixasIdCaixaGet()**](CaixasEBancosApi.md#caixasIdCaixaGet) | **GET** /caixas/{idCaixa} | Obtém um lançamento de caixa e banco. |
| [**caixasIdCaixaPut()**](CaixasEBancosApi.md#caixasIdCaixaPut) | **PUT** /caixas/{idCaixa} | Atualiza um lançamento de caixa e banco. |
| [**caixasPost()**](CaixasEBancosApi.md#caixasPost) | **POST** /caixas | Cria um novo lançamento de caixa e banco. |


## `caixasGet()`

```php
caixasGet($pagina, $dataInicial, $dataFinal, $idsCategorias, $idContaFinanceira, $pesquisa, $valor, $situacaoConciliacao, $situacao): \Eloom\BlingApi\Model\CaixasGet200Response
```

Obtém lista de lançamentos de caixas e bancos.

Obtém lista de lançamentos de caixas e bancos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CaixasEBancosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$dataInicial = Sat Nov 30 21:00:00 BRT 2024; // \DateTime | Data inicial de consulta de movimentações, só serão retornados os lançamentos a partir dessa data. Deve ser informada no formato AAAA-MM-DD. Caso não informado, o padrão será o primeiro dia do mês atual.
$dataFinal = Mon Dec 30 21:00:00 BRT 2024; // \DateTime | Data final de consulta de movimentações, só serão retornados os lançamentos até essa data. Deve ser informada no formato AAAA-MM-DD. Caso não informado, o padrão será o último dia do mês atual.
$idsCategorias = [1,2,3]; // int[] | IDs das categorias de movimentações.
$idContaFinanceira = 1; // int | ID da conta financeira.
$pesquisa = Compra de mercadorias; // string | Pesquisa por descrição do lançamento.
$valor = 100; // float | Valor do lançamento.
$situacaoConciliacao = 3; // int | Situação da conciliação do lançamento <br> `1` Registros conciliados <br> `2` Registros não conciliados <br> `3` Todos os registros
$situacao = R; // string | Situação do lançamento.<br>'R' para registros<br>'E' para excluídos

try {
    $result = $apiInstance->caixasGet($pagina, $dataInicial, $dataFinal, $idsCategorias, $idContaFinanceira, $pesquisa, $valor, $situacaoConciliacao, $situacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaixasEBancosApi->caixasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **dataInicial** | **\DateTime**| Data inicial de consulta de movimentações, só serão retornados os lançamentos a partir dessa data. Deve ser informada no formato AAAA-MM-DD. Caso não informado, o padrão será o primeiro dia do mês atual. | [optional] |
| **dataFinal** | **\DateTime**| Data final de consulta de movimentações, só serão retornados os lançamentos até essa data. Deve ser informada no formato AAAA-MM-DD. Caso não informado, o padrão será o último dia do mês atual. | [optional] |
| **idsCategorias** | [**int[]**](../Model/int.md)| IDs das categorias de movimentações. | [optional] |
| **idContaFinanceira** | **int**| ID da conta financeira. | [optional] |
| **pesquisa** | **string**| Pesquisa por descrição do lançamento. | [optional] |
| **valor** | **float**| Valor do lançamento. | [optional] |
| **situacaoConciliacao** | **int**| Situação da conciliação do lançamento &lt;br&gt; &#x60;1&#x60; Registros conciliados &lt;br&gt; &#x60;2&#x60; Registros não conciliados &lt;br&gt; &#x60;3&#x60; Todos os registros | [optional] [default to 3] |
| **situacao** | **string**| Situação do lançamento.&lt;br&gt;&#39;R&#39; para registros&lt;br&gt;&#39;E&#39; para excluídos | [optional] [default to &#39;R&#39;] |

### Return type

[**\Eloom\BlingApi\Model\CaixasGet200Response**](../Model/CaixasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `caixasIdCaixaDelete()`

```php
caixasIdCaixaDelete($idCaixa)
```

Remove um lançamento de caixa e banco

Remove um lançamento de caixa e banco pelo ID. O registro não é excluído permanentemente, apenas marcado como excluído (exclusão lógica).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CaixasEBancosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCaixa = 123; // int | ID do lançamento de caixa e banco a ser excluído.

try {
    $apiInstance->caixasIdCaixaDelete($idCaixa);
} catch (Exception $e) {
    echo 'Exception when calling CaixasEBancosApi->caixasIdCaixaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCaixa** | **int**| ID do lançamento de caixa e banco a ser excluído. | |

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

## `caixasIdCaixaGet()`

```php
caixasIdCaixaGet($idCaixa): \Eloom\BlingApi\Model\CaixasBancosLancamentoDTO
```

Obtém um lançamento de caixa e banco.

Obtém um lançamento de caixa e banco.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CaixasEBancosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCaixa = 12345678; // int | ID do lançamento de caixas e bancos

try {
    $result = $apiInstance->caixasIdCaixaGet($idCaixa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaixasEBancosApi->caixasIdCaixaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCaixa** | **int**| ID do lançamento de caixas e bancos | |

### Return type

[**\Eloom\BlingApi\Model\CaixasBancosLancamentoDTO**](../Model/CaixasBancosLancamentoDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `caixasIdCaixaPut()`

```php
caixasIdCaixaPut($idCaixa, $caixasBancosSalvarLancamentoDTO): \Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoResponseDTO
```

Atualiza um lançamento de caixa e banco.

Atualiza um lançamento de caixa e banco existente com os dados fornecidos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CaixasEBancosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCaixa = 12345678; // int | ID do lançamento de caixas e bancos
$caixasBancosSalvarLancamentoDTO = new \Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoDTO(); // \Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoDTO | Dados do lançamento a ser atualizado

try {
    $result = $apiInstance->caixasIdCaixaPut($idCaixa, $caixasBancosSalvarLancamentoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaixasEBancosApi->caixasIdCaixaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCaixa** | **int**| ID do lançamento de caixas e bancos | |
| **caixasBancosSalvarLancamentoDTO** | [**\Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoDTO**](../Model/CaixasBancosSalvarLancamentoDTO.md)| Dados do lançamento a ser atualizado | |

### Return type

[**\Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoResponseDTO**](../Model/CaixasBancosSalvarLancamentoResponseDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `caixasPost()`

```php
caixasPost($caixasBancosSalvarLancamentoDTO): \Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoResponseDTO
```

Cria um novo lançamento de caixa e banco.

Cria um novo lançamento de caixa e banco com os dados fornecidos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CaixasEBancosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$caixasBancosSalvarLancamentoDTO = new \Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoDTO(); // \Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoDTO | Dados do lançamento a ser criado

try {
    $result = $apiInstance->caixasPost($caixasBancosSalvarLancamentoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaixasEBancosApi->caixasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **caixasBancosSalvarLancamentoDTO** | [**\Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoDTO**](../Model/CaixasBancosSalvarLancamentoDTO.md)| Dados do lançamento a ser criado | |

### Return type

[**\Eloom\BlingApi\Model\CaixasBancosSalvarLancamentoResponseDTO**](../Model/CaixasBancosSalvarLancamentoResponseDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
