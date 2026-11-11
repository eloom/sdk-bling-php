# Eloom\BlingApi\ContasAReceberApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contasReceberBoletosCancelarPost()**](ContasAReceberApi.md#contasReceberBoletosCancelarPost) | **POST** /contas/receber/boletos/cancelar | Cancela boletos de contas a receber |
| [**contasReceberBoletosGet()**](ContasAReceberApi.md#contasReceberBoletosGet) | **GET** /contas/receber/boletos | Obtém boletos de contas a receber |
| [**contasReceberGet()**](ContasAReceberApi.md#contasReceberGet) | **GET** /contas/receber | Obtém contas a receber |
| [**contasReceberIdContaReceberBaixarPost()**](ContasAReceberApi.md#contasReceberIdContaReceberBaixarPost) | **POST** /contas/receber/{idContaReceber}/baixar | Cria o recebimento de uma conta a receber |
| [**contasReceberIdContaReceberDelete()**](ContasAReceberApi.md#contasReceberIdContaReceberDelete) | **DELETE** /contas/receber/{idContaReceber} | Remove uma conta a receber |
| [**contasReceberIdContaReceberGet()**](ContasAReceberApi.md#contasReceberIdContaReceberGet) | **GET** /contas/receber/{idContaReceber} | Obtém uma conta a receber |
| [**contasReceberIdContaReceberPut()**](ContasAReceberApi.md#contasReceberIdContaReceberPut) | **PUT** /contas/receber/{idContaReceber} | Altera uma conta a receber |
| [**contasReceberPost()**](ContasAReceberApi.md#contasReceberPost) | **POST** /contas/receber | Cria uma conta a receber |


## `contasReceberBoletosCancelarPost()`

```php
contasReceberBoletosCancelarPost($contasReceberBoletosCancelarDTO)
```

Cancela boletos de contas a receber

Cancela um ou todos os boletos em aberto vinculados a uma venda ou nota fiscal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contasReceberBoletosCancelarDTO = new \Eloom\BlingApi\Model\ContasReceberBoletosCancelarDTO(); // \Eloom\BlingApi\Model\ContasReceberBoletosCancelarDTO

try {
    $apiInstance->contasReceberBoletosCancelarPost($contasReceberBoletosCancelarDTO);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberBoletosCancelarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contasReceberBoletosCancelarDTO** | [**\Eloom\BlingApi\Model\ContasReceberBoletosCancelarDTO**](../Model/ContasReceberBoletosCancelarDTO.md)|  | |

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

## `contasReceberBoletosGet()`

```php
contasReceberBoletosGet($idOrigem, $situacoes): \Eloom\BlingApi\Model\ContasReceberBoletosDadosBaseDTO
```

Obtém boletos de contas a receber

Obtém os boletos vinculados a um idOrigem, o qual corresponde ao ID de uma venda ou nota fiscal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrigem = 12345678; // int | ID da venda ou nota fiscal
$situacoes = [1,3]; // int[] | `1` Em aberto <br>`2` Recebido <br>`3` Parcialmente recebido <br>`4` Devolvido <br>`5` Parcialmente devolvido <br>`6` Cancelado

try {
    $result = $apiInstance->contasReceberBoletosGet($idOrigem, $situacoes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberBoletosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrigem** | **int**| ID da venda ou nota fiscal | |
| **situacoes** | [**int[]**](../Model/int.md)| &#x60;1&#x60; Em aberto &lt;br&gt;&#x60;2&#x60; Recebido &lt;br&gt;&#x60;3&#x60; Parcialmente recebido &lt;br&gt;&#x60;4&#x60; Devolvido &lt;br&gt;&#x60;5&#x60; Parcialmente devolvido &lt;br&gt;&#x60;6&#x60; Cancelado | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ContasReceberBoletosDadosBaseDTO**](../Model/ContasReceberBoletosDadosBaseDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasReceberGet()`

```php
contasReceberGet($pagina, $limite, $situacoes, $tipoFiltroData, $dataInicial, $dataFinal, $idsCategorias, $idPortador, $idContato, $idVendedor, $idFormaPagamento, $boletoGerado): \Eloom\BlingApi\Model\ContasReceberGet200Response
```

Obtém contas a receber

Obtém contas a receber paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$situacoes = [1,3]; // int[] | `1` Em aberto <br>`2` Recebido <br>`3` Parcialmente recebido <br>`4` Devolvido <br>`5` Cancelado
$tipoFiltroData = 'E'; // string | Referente ao campo que será considerado ao filtrar por data inicial e final<br>`E` Data de emissão <br> `V` Data de vencimento <br> `R` Data de recebimento
$dataInicial = Fri Dec 31 21:00:00 BRT 2021; // \DateTime | Data inicial. Por padrão, um ano antes da data atual.
$dataFinal = Sat Dec 31 21:00:00 BRT 2022; // \DateTime | Data final. Por padrão, a data atual.
$idsCategorias = [12345678,87654321]; // int[] | IDs das categorias de receitas e despesas
$idPortador = 12345678; // int | ID da conta financeira
$idContato = 12345678; // int | ID do contato
$idVendedor = 12345678; // int | ID do vendedor
$idFormaPagamento = 12345678; // int | ID da forma de pagamento
$boletoGerado = 1; // int | Obtém contas com ou sem boletos emitidos via integração, `0` para boletos não emitidos e `1` para boletos emitidos

try {
    $result = $apiInstance->contasReceberGet($pagina, $limite, $situacoes, $tipoFiltroData, $dataInicial, $dataFinal, $idsCategorias, $idPortador, $idContato, $idVendedor, $idFormaPagamento, $boletoGerado);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **situacoes** | [**int[]**](../Model/int.md)| &#x60;1&#x60; Em aberto &lt;br&gt;&#x60;2&#x60; Recebido &lt;br&gt;&#x60;3&#x60; Parcialmente recebido &lt;br&gt;&#x60;4&#x60; Devolvido &lt;br&gt;&#x60;5&#x60; Cancelado | [optional] |
| **tipoFiltroData** | **string**| Referente ao campo que será considerado ao filtrar por data inicial e final&lt;br&gt;&#x60;E&#x60; Data de emissão &lt;br&gt; &#x60;V&#x60; Data de vencimento &lt;br&gt; &#x60;R&#x60; Data de recebimento | [optional] [default to &#39;E&#39;] |
| **dataInicial** | **\DateTime**| Data inicial. Por padrão, um ano antes da data atual. | [optional] |
| **dataFinal** | **\DateTime**| Data final. Por padrão, a data atual. | [optional] |
| **idsCategorias** | [**int[]**](../Model/int.md)| IDs das categorias de receitas e despesas | [optional] |
| **idPortador** | **int**| ID da conta financeira | [optional] |
| **idContato** | **int**| ID do contato | [optional] |
| **idVendedor** | **int**| ID do vendedor | [optional] |
| **idFormaPagamento** | **int**| ID da forma de pagamento | [optional] |
| **boletoGerado** | **int**| Obtém contas com ou sem boletos emitidos via integração, &#x60;0&#x60; para boletos não emitidos e &#x60;1&#x60; para boletos emitidos | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ContasReceberGet200Response**](../Model/ContasReceberGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasReceberIdContaReceberBaixarPost()`

```php
contasReceberIdContaReceberBaixarPost($idContaReceber, $contasBaixarContaDTO): \Eloom\BlingApi\Model\ContasReceberIdContaReceberBaixarPost200Response
```

Cria o recebimento de uma conta a receber

Cria o recebimento de uma conta a receber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaReceber = 12345678; // int | ID da conta a receber
$contasBaixarContaDTO = new \Eloom\BlingApi\Model\ContasBaixarContaDTO(); // \Eloom\BlingApi\Model\ContasBaixarContaDTO

try {
    $result = $apiInstance->contasReceberIdContaReceberBaixarPost($idContaReceber, $contasBaixarContaDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberIdContaReceberBaixarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaReceber** | **int**| ID da conta a receber | |
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

## `contasReceberIdContaReceberDelete()`

```php
contasReceberIdContaReceberDelete($idContaReceber)
```

Remove uma conta a receber

Remove uma conta a receber pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaReceber = 12345678; // int | ID da conta a receber

try {
    $apiInstance->contasReceberIdContaReceberDelete($idContaReceber);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberIdContaReceberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaReceber** | **int**| ID da conta a receber | |

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

## `contasReceberIdContaReceberGet()`

```php
contasReceberIdContaReceberGet($idContaReceber): \Eloom\BlingApi\Model\ContasReceberIdContaReceberGet200Response
```

Obtém uma conta a receber

Obtém uma conta a receber pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaReceber = 12345678; // int | ID da conta a receber

try {
    $result = $apiInstance->contasReceberIdContaReceberGet($idContaReceber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberIdContaReceberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaReceber** | **int**| ID da conta a receber | |

### Return type

[**\Eloom\BlingApi\Model\ContasReceberIdContaReceberGet200Response**](../Model/ContasReceberIdContaReceberGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contasReceberIdContaReceberPut()`

```php
contasReceberIdContaReceberPut($idContaReceber, $contasReceberIdContaReceberPutRequest)
```

Altera uma conta a receber

Altera uma conta a receber pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContaReceber = 12345678; // int | ID da conta a receber
$contasReceberIdContaReceberPutRequest = new \Eloom\BlingApi\Model\ContasReceberIdContaReceberPutRequest(); // \Eloom\BlingApi\Model\ContasReceberIdContaReceberPutRequest

try {
    $apiInstance->contasReceberIdContaReceberPut($idContaReceber, $contasReceberIdContaReceberPutRequest);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberIdContaReceberPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContaReceber** | **int**| ID da conta a receber | |
| **contasReceberIdContaReceberPutRequest** | [**\Eloom\BlingApi\Model\ContasReceberIdContaReceberPutRequest**](../Model/ContasReceberIdContaReceberPutRequest.md)|  | |

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

## `contasReceberPost()`

```php
contasReceberPost($contasReceberPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria uma conta a receber

Cria uma conta a receber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContasAReceberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contasReceberPostRequest = new \Eloom\BlingApi\Model\ContasReceberPostRequest(); // \Eloom\BlingApi\Model\ContasReceberPostRequest

try {
    $result = $apiInstance->contasReceberPost($contasReceberPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContasAReceberApi->contasReceberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contasReceberPostRequest** | [**\Eloom\BlingApi\Model\ContasReceberPostRequest**](../Model/ContasReceberPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasLojasPost201Response**](../Model/CategoriasLojasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
