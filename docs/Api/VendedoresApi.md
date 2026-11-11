# Eloom\BlingApi\VendedoresApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vendedoresGet()**](VendedoresApi.md#vendedoresGet) | **GET** /vendedores | Obtém vendedores |
| [**vendedoresIdVendedorGet()**](VendedoresApi.md#vendedoresIdVendedorGet) | **GET** /vendedores/{idVendedor} | Obtém um vendedor |


## `vendedoresGet()`

```php
vendedoresGet($pagina, $limite, $nomeContato, $situacaoContato, $idContato, $idLoja, $dataAlteracaoInicial, $dataAlteracaoFinal): \Eloom\BlingApi\Model\VendedoresGet200Response
```

Obtém vendedores

Obtém vendedores paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\VendedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$nomeContato =  ; // string | Nome do contato do vendedor
$situacaoContato = 'A'; // string | Situação do contato do vendedor<br>`A` Ativo<br>`I` Inativo<br>`S` Sem movimento<br>`E` Excluído<br>`T` Todos
$idContato = 12345678; // int | ID do contato do vendedor
$idLoja = 12345678; // int | ID da loja vinculada ao vendedor
$dataAlteracaoInicial = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Data de alteração inicial
$dataAlteracaoFinal = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Data de alteração final

try {
    $result = $apiInstance->vendedoresGet($pagina, $limite, $nomeContato, $situacaoContato, $idContato, $idLoja, $dataAlteracaoInicial, $dataAlteracaoFinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendedoresApi->vendedoresGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **nomeContato** | **string**| Nome do contato do vendedor | [optional] |
| **situacaoContato** | **string**| Situação do contato do vendedor&lt;br&gt;&#x60;A&#x60; Ativo&lt;br&gt;&#x60;I&#x60; Inativo&lt;br&gt;&#x60;S&#x60; Sem movimento&lt;br&gt;&#x60;E&#x60; Excluído&lt;br&gt;&#x60;T&#x60; Todos | [optional] [default to &#39;A&#39;] |
| **idContato** | **int**| ID do contato do vendedor | [optional] |
| **idLoja** | **int**| ID da loja vinculada ao vendedor | [optional] |
| **dataAlteracaoInicial** | **\DateTime**| Data de alteração inicial | [optional] |
| **dataAlteracaoFinal** | **\DateTime**| Data de alteração final | [optional] |

### Return type

[**\Eloom\BlingApi\Model\VendedoresGet200Response**](../Model/VendedoresGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendedoresIdVendedorGet()`

```php
vendedoresIdVendedorGet($idVendedor): \Eloom\BlingApi\Model\VendedoresIdVendedorGet200Response
```

Obtém um vendedor

Obtém um vendedor pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\VendedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idVendedor = 12345678; // int | ID do vendedor

try {
    $result = $apiInstance->vendedoresIdVendedorGet($idVendedor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendedoresApi->vendedoresIdVendedorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idVendedor** | **int**| ID do vendedor | |

### Return type

[**\Eloom\BlingApi\Model\VendedoresIdVendedorGet200Response**](../Model/VendedoresIdVendedorGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
