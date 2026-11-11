# Eloom\BlingApi\ContasAPagarApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contasPagarGet()**](ContasAPagarApi.md#contasPagarGet) | **GET** /contas/pagar | Obtém contas a pagar |
| [**contasPagarIdContaPagarBaixarPost()**](ContasAPagarApi.md#contasPagarIdContaPagarBaixarPost) | **POST** /contas/pagar/{idContaPagar}/baixar | Cria o recebimento de uma conta a pagar |
| [**contasPagarIdContaPagarDelete()**](ContasAPagarApi.md#contasPagarIdContaPagarDelete) | **DELETE** /contas/pagar/{idContaPagar} | Remove uma conta a pagar |
| [**contasPagarIdContaPagarGet()**](ContasAPagarApi.md#contasPagarIdContaPagarGet) | **GET** /contas/pagar/{idContaPagar} | Obtém uma conta a pagar |
| [**contasPagarIdContaPagarPut()**](ContasAPagarApi.md#contasPagarIdContaPagarPut) | **PUT** /contas/pagar/{idContaPagar} | Atualiza uma conta a pagar |
| [**contasPagarPost()**](ContasAPagarApi.md#contasPagarPost) | **POST** /contas/pagar | Cria uma conta a pagar |


## `contasPagarGet()`

```php
contasPagarGet($pagina, $limite, $dataEmissaoInicial, $dataEmissaoFinal, $dataVencimentoInicial, $dataVencimentoFinal, $dataPagamentoInicial, $dataPagamentoFinal, $situacao, $idContato): \Eloom\BlingApi\Model\ContasPagarGet200Response
```

Obtém contas a pagar

Obtém contas a pagar paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAPagarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$dataEmissaoInicial = Wed Jan 11 21:00:00 BRT 2023; // \DateTime | Data de emissão inicial da conta a pagar
$dataEmissaoFinal = Wed Jan 11 21:00:00 BRT 2023; // \DateTime | Data de emissão final da conta a pagar
$dataVencimentoInicial = Wed Jan 11 21:00:00 BRT 2023; // \DateTime | Data de vencimento inicial da conta a pagar
$dataVencimentoFinal = Wed Jan 11 21:00:00 BRT 2023; // \DateTime | Data de vencimento final da conta a pagar
$dataPagamentoInicial = Wed Jan 11 21:00:00 BRT 2023; // \DateTime | Data de pagamento inicial da conta
$dataPagamentoFinal = Wed Jan 11 21:00:00 BRT 2023; // \DateTime | Data de pagamento final da conta
$situacao = 1; // int | `1` Em aberto <br>`2` Pago <br>`3` Parcialmente pago <br>`4` Devolvido <br>`5` Cancelado
$idContato = 12345678; // int | ID do contato

try {
    $result = $apiInstance->contasPagarGet($pagina, $limite, $dataEmissaoInicial, $dataEmissaoFinal, $dataVencimentoInicial, $dataVencimentoFinal, $dataPagamentoInicial, $dataPagamentoFinal, $situacao, $idContato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAPagarApi->contasPagarGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **dataEmissaoInicial** | **\DateTime**| Data de emissão inicial da conta a pagar | [optional] |
| **dataEmissaoFinal** | **\DateTime**| Data de emissão final da conta a pagar | [optional] |
| **dataVencimentoInicial** | **\DateTime**| Data de vencimento inicial da conta a pagar | [optional] |
| **dataVencimentoFinal** | **\DateTime**| Data de vencimento final da conta a pagar | [optional] |
| **dataPagamentoInicial** | **\DateTime**| Data de pagamento inicial da conta | [optional] |
| **dataPagamentoFinal** | **\DateTime**| Data de pagamento final da conta | [optional] |
| **situacao** | **int**| &#x60;1&#x60; Em aberto &lt;br&gt;&#x60;2&#x60; Pago &lt;br&gt;&#x60;3&#x60; Parcialmente pago &lt;br&gt;&#x60;4&#x60; Devolvido &lt;br&gt;&#x60;5&#x60; Cancelado | [optional] |
| **idContato** | **int**| ID do contato | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ContasPagarGet200Response**](../Model/ContasPagarGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasPagarIdContaPagarBaixarPost()`

```php
contasPagarIdContaPagarBaixarPost($idContaPagar, $contasBaixarContaDTO): \Eloom\BlingApi\Model\ContasReceberIdContaReceberBaixarPost200Response
```

Cria o recebimento de uma conta a pagar

Cria o recebimento de uma conta a pagar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAPagarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaPagar = 12345678; // int | ID da conta a pagar
$contasBaixarContaDTO = new \Eloom\BlingApi\Model\ContasBaixarContaDTO(); // \Eloom\BlingApi\Model\ContasBaixarContaDTO

try {
    $result = $apiInstance->contasPagarIdContaPagarBaixarPost($idContaPagar, $contasBaixarContaDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAPagarApi->contasPagarIdContaPagarBaixarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaPagar** | **int**| ID da conta a pagar | |
| **contasBaixarContaDTO** | [**\Eloom\BlingApi\Model\ContasBaixarContaDTO**](../Model/ContasBaixarContaDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ContasReceberIdContaReceberBaixarPost200Response**](../Model/ContasReceberIdContaReceberBaixarPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasPagarIdContaPagarDelete()`

```php
contasPagarIdContaPagarDelete($idContaPagar)
```

Remove uma conta a pagar

Remove uma conta a pagar pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAPagarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaPagar = 12345678; // int | ID da conta a pagar

try {
    $apiInstance->contasPagarIdContaPagarDelete($idContaPagar);
} catch (Exception $e) {
    echo 'Exception when calling ContasAPagarApi->contasPagarIdContaPagarDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaPagar** | **int**| ID da conta a pagar | |

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

## `contasPagarIdContaPagarGet()`

```php
contasPagarIdContaPagarGet($idContaPagar): \Eloom\BlingApi\Model\ContasPagarIdContaPagarGet200Response
```

Obtém uma conta a pagar

Obtém uma conta a pagar pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAPagarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaPagar = 12345678; // int | ID da conta a pagar

try {
    $result = $apiInstance->contasPagarIdContaPagarGet($idContaPagar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAPagarApi->contasPagarIdContaPagarGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaPagar** | **int**| ID da conta a pagar | |

### Return type

[**\Eloom\BlingApi\Model\ContasPagarIdContaPagarGet200Response**](../Model/ContasPagarIdContaPagarGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasPagarIdContaPagarPut()`

```php
contasPagarIdContaPagarPut($idContaPagar, $contasPagarIdContaPagarGet200ResponseData): \Eloom\BlingApi\Model\BasePostResponse
```

Atualiza uma conta a pagar

Atualiza uma conta a pagar pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAPagarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaPagar = 12345678; // int | ID da conta a pagar
$contasPagarIdContaPagarGet200ResponseData = new \Eloom\BlingApi\Model\ContasPagarIdContaPagarGet200ResponseData(); // \Eloom\BlingApi\Model\ContasPagarIdContaPagarGet200ResponseData

try {
    $result = $apiInstance->contasPagarIdContaPagarPut($idContaPagar, $contasPagarIdContaPagarGet200ResponseData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAPagarApi->contasPagarIdContaPagarPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaPagar** | **int**| ID da conta a pagar | |
| **contasPagarIdContaPagarGet200ResponseData** | [**\Eloom\BlingApi\Model\ContasPagarIdContaPagarGet200ResponseData**](../Model/ContasPagarIdContaPagarGet200ResponseData.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\BasePostResponse**](../Model/BasePostResponse.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasPagarPost()`

```php
contasPagarPost($contasPagarPostRequest): \Eloom\BlingApi\Model\BasePostResponse
```

Cria uma conta a pagar

Cria uma conta a pagar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAPagarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contasPagarPostRequest = new \Eloom\BlingApi\Model\ContasPagarPostRequest(); // \Eloom\BlingApi\Model\ContasPagarPostRequest

try {
    $result = $apiInstance->contasPagarPost($contasPagarPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAPagarApi->contasPagarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contasPagarPostRequest** | [**\Eloom\BlingApi\Model\ContasPagarPostRequest**](../Model/ContasPagarPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\BasePostResponse**](../Model/BasePostResponse.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
