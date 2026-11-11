# Eloom\BlingApi\NotasFiscaisDeServioEletrnicasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**nfseConfiguracoesGet()**](NotasFiscaisDeServioEletrnicasApi.md#nfseConfiguracoesGet) | **GET** /nfse/configuracoes | Configurações de nota de serviço |
| [**nfseConfiguracoesPut()**](NotasFiscaisDeServioEletrnicasApi.md#nfseConfiguracoesPut) | **PUT** /nfse/configuracoes | Configurações de nota de serviço |
| [**nfseGet()**](NotasFiscaisDeServioEletrnicasApi.md#nfseGet) | **GET** /nfse | Obtém notas de serviços |
| [**nfseIdNotaServicoCancelarPost()**](NotasFiscaisDeServioEletrnicasApi.md#nfseIdNotaServicoCancelarPost) | **POST** /nfse/{idNotaServico}/cancelar | Cancela uma nota de serviço |
| [**nfseIdNotaServicoDelete()**](NotasFiscaisDeServioEletrnicasApi.md#nfseIdNotaServicoDelete) | **DELETE** /nfse/{idNotaServico} | Exclui uma nota de serviço |
| [**nfseIdNotaServicoEnviarPost()**](NotasFiscaisDeServioEletrnicasApi.md#nfseIdNotaServicoEnviarPost) | **POST** /nfse/{idNotaServico}/enviar | Envia uma nota de serviço |
| [**nfseIdNotaServicoGet()**](NotasFiscaisDeServioEletrnicasApi.md#nfseIdNotaServicoGet) | **GET** /nfse/{idNotaServico} | Obtém uma nota de serviço |
| [**nfsePost()**](NotasFiscaisDeServioEletrnicasApi.md#nfsePost) | **POST** /nfse | Cria uma nota de serviço |


## `nfseConfiguracoesGet()`

```php
nfseConfiguracoesGet(): \Eloom\BlingApi\Model\ConfiguracaoNotaServicoDadosBaseDTO
```

Configurações de nota de serviço

Obtém todas as configurações de nota de serviço.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->nfseConfiguracoesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseConfiguracoesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\ConfiguracaoNotaServicoDadosBaseDTO**](../Model/ConfiguracaoNotaServicoDadosBaseDTO.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfseConfiguracoesPut()`

```php
nfseConfiguracoesPut($configuracaoNotaServicoDadosBaseDTO)
```

Configurações de nota de serviço

Cria e altera configurações para emissão de notas de serviço.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configuracaoNotaServicoDadosBaseDTO = new \Eloom\BlingApi\Model\ConfiguracaoNotaServicoDadosBaseDTO(); // \Eloom\BlingApi\Model\ConfiguracaoNotaServicoDadosBaseDTO

try {
    $apiInstance->nfseConfiguracoesPut($configuracaoNotaServicoDadosBaseDTO);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseConfiguracoesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configuracaoNotaServicoDadosBaseDTO** | [**\Eloom\BlingApi\Model\ConfiguracaoNotaServicoDadosBaseDTO**](../Model/ConfiguracaoNotaServicoDadosBaseDTO.md)|  | |

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

## `nfseGet()`

```php
nfseGet($pagina, $limite, $situacao, $dataEmissaoInicial, $dataEmissaoFinal): \Eloom\BlingApi\Model\NfseGet200Response
```

Obtém notas de serviços

Obtém notas de serviços paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$situacao = 56; // int | `0` Pendente <br> `1` Emitida <br> `2` Disponível para consulta <br> `3` Cancelada
$dataEmissaoInicial = Wed Nov 30 21:00:00 BRT 2022; // \DateTime | Data incial do período de emissão
$dataEmissaoFinal = Sat Dec 31 21:00:00 BRT 2022; // \DateTime | Data final do período de emissão

try {
    $result = $apiInstance->nfseGet($pagina, $limite, $situacao, $dataEmissaoInicial, $dataEmissaoFinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **situacao** | **int**| &#x60;0&#x60; Pendente &lt;br&gt; &#x60;1&#x60; Emitida &lt;br&gt; &#x60;2&#x60; Disponível para consulta &lt;br&gt; &#x60;3&#x60; Cancelada | [optional] |
| **dataEmissaoInicial** | **\DateTime**| Data incial do período de emissão | [optional] |
| **dataEmissaoFinal** | **\DateTime**| Data final do período de emissão | [optional] |

### Return type

[**\Eloom\BlingApi\Model\NfseGet200Response**](../Model/NfseGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfseIdNotaServicoCancelarPost()`

```php
nfseIdNotaServicoCancelarPost($idNotaServico, $notasServicosCancelamentoDTO)
```

Cancela uma nota de serviço

Cancela uma nota de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaServico = 12345678; // int | ID da nota de serviço
$notasServicosCancelamentoDTO = new \Eloom\BlingApi\Model\NotasServicosCancelamentoDTO(); // \Eloom\BlingApi\Model\NotasServicosCancelamentoDTO

try {
    $apiInstance->nfseIdNotaServicoCancelarPost($idNotaServico, $notasServicosCancelamentoDTO);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseIdNotaServicoCancelarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaServico** | **int**| ID da nota de serviço | |
| **notasServicosCancelamentoDTO** | [**\Eloom\BlingApi\Model\NotasServicosCancelamentoDTO**](../Model/NotasServicosCancelamentoDTO.md)|  | [optional] |

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

## `nfseIdNotaServicoDelete()`

```php
nfseIdNotaServicoDelete($idNotaServico)
```

Exclui uma nota de serviço

Exclui uma nota de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaServico = 12345678; // int | ID da nota de serviço

try {
    $apiInstance->nfseIdNotaServicoDelete($idNotaServico);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseIdNotaServicoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaServico** | **int**| ID da nota de serviço | |

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

## `nfseIdNotaServicoEnviarPost()`

```php
nfseIdNotaServicoEnviarPost($idNotaServico): \Eloom\BlingApi\Model\NfseIdNotaServicoGet200Response
```

Envia uma nota de serviço

Envia uma nota de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaServico = 12345678; // int | ID da nota de serviço

try {
    $result = $apiInstance->nfseIdNotaServicoEnviarPost($idNotaServico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseIdNotaServicoEnviarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaServico** | **int**| ID da nota de serviço | |

### Return type

[**\Eloom\BlingApi\Model\NfseIdNotaServicoGet200Response**](../Model/NfseIdNotaServicoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfseIdNotaServicoGet()`

```php
nfseIdNotaServicoGet($idNotaServico): \Eloom\BlingApi\Model\NfseIdNotaServicoGet200Response
```

Obtém uma nota de serviço

Obtém uma nota de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaServico = 12345678; // int | ID da nota de serviço

try {
    $result = $apiInstance->nfseIdNotaServicoGet($idNotaServico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfseIdNotaServicoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaServico** | **int**| ID da nota de serviço | |

### Return type

[**\Eloom\BlingApi\Model\NfseIdNotaServicoGet200Response**](../Model/NfseIdNotaServicoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfsePost()`

```php
nfsePost($nfsePostRequest): \Eloom\BlingApi\Model\NfsePost201Response
```

Cria uma nota de serviço

Cria uma nota de serviço.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisDeServioEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nfsePostRequest = new \Eloom\BlingApi\Model\NfsePostRequest(); // \Eloom\BlingApi\Model\NfsePostRequest

try {
    $result = $apiInstance->nfsePost($nfsePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisDeServioEletrnicasApi->nfsePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nfsePostRequest** | [**\Eloom\BlingApi\Model\NfsePostRequest**](../Model/NfsePostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\NfsePost201Response**](../Model/NfsePost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
