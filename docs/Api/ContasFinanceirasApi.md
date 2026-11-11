# Eloom\BlingApi\ContasFinanceirasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contasContabeisGet()**](ContasFinanceirasApi.md#contasContabeisGet) | **GET** /contas-contabeis | Obtém contas financeiras |
| [**contasContabeisIdContaContabilGet()**](ContasFinanceirasApi.md#contasContabeisIdContaContabilGet) | **GET** /contas-contabeis/{idContaContabil} | Obtém uma conta financeira |


## `contasContabeisGet()`

```php
contasContabeisGet($pagina, $limite, $ocultarInvisiveis, $ocultarTipoContaBancaria, $situacoes, $aliasIntegracao, $aliasIntegracao2, $ordenacao): \Eloom\BlingApi\Model\ContasContabeisGet200Response
```

Obtém contas financeiras

Obtém contas financeiras paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasFinanceirasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$ocultarInvisiveis = true; // bool | Oculta contas financeiras invisíveis
$ocultarTipoContaBancaria = true; // bool | Oculta contas financeiras do tipo conta bancária
$situacoes = array(56); // int[] | Situação da conta financeira<br> `1` Ativo<br> `2` Inativo<br> `3` Pendente<br> `4` Cancelada
$aliasIntegracao = BlingPagamentos; // string | Alias da integração
$aliasIntegracao2 = BlingPagamentos; // string | Alias da integração
$ordenacao = descricao; // string | Ordenação da obtenção pelos campos: <br> `descricao`

try {
    $result = $apiInstance->contasContabeisGet($pagina, $limite, $ocultarInvisiveis, $ocultarTipoContaBancaria, $situacoes, $aliasIntegracao, $aliasIntegracao2, $ordenacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasFinanceirasApi->contasContabeisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **ocultarInvisiveis** | **bool**| Oculta contas financeiras invisíveis | [optional] |
| **ocultarTipoContaBancaria** | **bool**| Oculta contas financeiras do tipo conta bancária | [optional] |
| **situacoes** | [**int[]**](../Model/int.md)| Situação da conta financeira&lt;br&gt; &#x60;1&#x60; Ativo&lt;br&gt; &#x60;2&#x60; Inativo&lt;br&gt; &#x60;3&#x60; Pendente&lt;br&gt; &#x60;4&#x60; Cancelada | [optional] |
| **aliasIntegracao** | **string**| Alias da integração | [optional] |
| **aliasIntegracao2** | **string**| Alias da integração | [optional] |
| **ordenacao** | **string**| Ordenação da obtenção pelos campos: &lt;br&gt; &#x60;descricao&#x60; | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ContasContabeisGet200Response**](../Model/ContasContabeisGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasContabeisIdContaContabilGet()`

```php
contasContabeisIdContaContabilGet($idContaContabil): \Eloom\BlingApi\Model\ContasContabeisIdContaContabilGet200Response
```

Obtém uma conta financeira

Obtém uma conta financeira pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasFinanceirasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaContabil = 12345678; // int | ID da conta financeira

try {
    $result = $apiInstance->contasContabeisIdContaContabilGet($idContaContabil);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasFinanceirasApi->contasContabeisIdContaContabilGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaContabil** | **int**| ID da conta financeira | |

### Return type

[**\Eloom\BlingApi\Model\ContasContabeisIdContaContabilGet200Response**](../Model/ContasContabeisIdContaContabilGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
