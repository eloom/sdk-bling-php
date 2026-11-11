# Eloom\BlingApi\NaturezasDeOperaesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**naturezasOperacoesGet()**](NaturezasDeOperaesApi.md#naturezasOperacoesGet) | **GET** /naturezas-operacoes | Obtém naturezas de operações |
| [**naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost()**](NaturezasDeOperaesApi.md#naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost) | **POST** /naturezas-operacoes/{idNaturezaOperacao}/obter-tributacao | Obtém regras de tributação da natureza de operação |


## `naturezasOperacoesGet()`

```php
naturezasOperacoesGet($pagina, $limite, $situacao, $descricao): \Eloom\BlingApi\Model\NaturezasOperacoesGet200Response
```

Obtém naturezas de operações

Obtém naturezas de operação paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NaturezasDeOperaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$situacao = 1; // int | `0` Inativo <br> `1` Ativo
$descricao = Compra de mercadoria; // string | Descrição da natureza de operação

try {
    $result = $apiInstance->naturezasOperacoesGet($pagina, $limite, $situacao, $descricao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NaturezasDeOperaesApi->naturezasOperacoesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **situacao** | **int**| &#x60;0&#x60; Inativo &lt;br&gt; &#x60;1&#x60; Ativo | [optional] |
| **descricao** | **string**| Descrição da natureza de operação | [optional] |

### Return type

[**\Eloom\BlingApi\Model\NaturezasOperacoesGet200Response**](../Model/NaturezasOperacoesGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost()`

```php
naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost($idNaturezaOperacao, $calculosImpostosCalculoDTO): \Eloom\BlingApi\Model\NaturezasOperacoesIdNaturezaOperacaoObterTributacaoPost200Response
```

Obtém regras de tributação da natureza de operação

Obtém regras de tributação que incidem sobre o item, dada uma natureza de operação.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NaturezasDeOperaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNaturezaOperacao = 12345678; // int | ID da natureza de operação
$calculosImpostosCalculoDTO = new \Eloom\BlingApi\Model\CalculosImpostosCalculoDTO(); // \Eloom\BlingApi\Model\CalculosImpostosCalculoDTO

try {
    $result = $apiInstance->naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost($idNaturezaOperacao, $calculosImpostosCalculoDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NaturezasDeOperaesApi->naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNaturezaOperacao** | **int**| ID da natureza de operação | |
| **calculosImpostosCalculoDTO** | [**\Eloom\BlingApi\Model\CalculosImpostosCalculoDTO**](../Model/CalculosImpostosCalculoDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\NaturezasOperacoesIdNaturezaOperacaoObterTributacaoPost200Response**](../Model/NaturezasOperacoesIdNaturezaOperacaoObterTributacaoPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
