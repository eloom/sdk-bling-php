# Eloom\BlingApi\OrdensDeServioApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordensServicoGet()**](OrdensDeServioApi.md#ordensServicoGet) | **GET** /ordens/servico | Obtém ordens de serviço |
| [**ordensServicoIdOrdemServicoDelete()**](OrdensDeServioApi.md#ordensServicoIdOrdemServicoDelete) | **DELETE** /ordens/servico/{idOrdemServico} | Remove uma ordem de serviço |
| [**ordensServicoIdOrdemServicoGet()**](OrdensDeServioApi.md#ordensServicoIdOrdemServicoGet) | **GET** /ordens/servico/{idOrdemServico} | Obtém uma ordem de serviço |
| [**ordensServicoIdOrdemServicoPut()**](OrdensDeServioApi.md#ordensServicoIdOrdemServicoPut) | **PUT** /ordens/servico/{idOrdemServico} | Altera uma ordem de serviço |
| [**ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch()**](OrdensDeServioApi.md#ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch) | **PATCH** /ordens/servico/{idOrdemServico}/situacoes/{idSituacao} | Altera a situação de uma ordem de serviço |
| [**ordensServicoPost()**](OrdensDeServioApi.md#ordensServicoPost) | **POST** /ordens/servico | Cria uma ordem de serviço |


## `ordensServicoGet()`

```php
ordensServicoGet($pagina, $limite, $idsSituacoes, $dataInicial, $dataFinal, $dataPrevistaInicial, $dataPrevistaFinal, $dataConclusaoInicial, $dataConclusaoFinal, $dataSaidaInicial, $dataSaidaFinal, $dataGarantiaInicial, $dataGarantiaFinal, $idContato, $idVendedor, $numero, $numeroSerie): \Eloom\BlingApi\Model\OrdensServicoGet200Response
```

Obtém ordens de serviço

Obtém ordens de serviço paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeServioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idsSituacoes = [12345678,87654321]; // int[] | Conjunto de IDs de situações da ordem de serviço
$dataInicial = Wed Dec 31 21:00:00 BRT 2025; // \DateTime | Data inicial de entrada
$dataFinal = Fri Jan 30 21:00:00 BRT 2026; // \DateTime | Data final de entrada
$dataPrevistaInicial = Wed Dec 31 21:00:00 BRT 2025; // \DateTime | Data inicial prevista
$dataPrevistaFinal = Fri Jan 30 21:00:00 BRT 2026; // \DateTime | Data final prevista
$dataConclusaoInicial = Wed Dec 31 21:00:00 BRT 2025; // \DateTime | Data inicial de conclusão
$dataConclusaoFinal = Fri Jan 30 21:00:00 BRT 2026; // \DateTime | Data final de conclusão
$dataSaidaInicial = Wed Dec 31 21:00:00 BRT 2025; // \DateTime | Data inicial de saída
$dataSaidaFinal = Fri Jan 30 21:00:00 BRT 2026; // \DateTime | Data final de saída
$dataGarantiaInicial = Wed Dec 31 21:00:00 BRT 2025; // \DateTime | Data inicial de vencimento da garantia
$dataGarantiaFinal = Fri Jan 30 21:00:00 BRT 2026; // \DateTime | Data final de vencimento da garantia
$idContato = 12345678; // int | ID do contato
$idVendedor = 12345678; // int
$numero = 1024; // string | Número da ordem de serviço
$numeroSerie = SN-99887766; // string | Número de série do equipamento

try {
    $result = $apiInstance->ordensServicoGet($pagina, $limite, $idsSituacoes, $dataInicial, $dataFinal, $dataPrevistaInicial, $dataPrevistaFinal, $dataConclusaoInicial, $dataConclusaoFinal, $dataSaidaInicial, $dataSaidaFinal, $dataGarantiaInicial, $dataGarantiaFinal, $idContato, $idVendedor, $numero, $numeroSerie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeServioApi->ordensServicoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idsSituacoes** | [**int[]**](../Model/int.md)| Conjunto de IDs de situações da ordem de serviço | [optional] |
| **dataInicial** | **\DateTime**| Data inicial de entrada | [optional] |
| **dataFinal** | **\DateTime**| Data final de entrada | [optional] |
| **dataPrevistaInicial** | **\DateTime**| Data inicial prevista | [optional] |
| **dataPrevistaFinal** | **\DateTime**| Data final prevista | [optional] |
| **dataConclusaoInicial** | **\DateTime**| Data inicial de conclusão | [optional] |
| **dataConclusaoFinal** | **\DateTime**| Data final de conclusão | [optional] |
| **dataSaidaInicial** | **\DateTime**| Data inicial de saída | [optional] |
| **dataSaidaFinal** | **\DateTime**| Data final de saída | [optional] |
| **dataGarantiaInicial** | **\DateTime**| Data inicial de vencimento da garantia | [optional] |
| **dataGarantiaFinal** | **\DateTime**| Data final de vencimento da garantia | [optional] |
| **idContato** | **int**| ID do contato | [optional] |
| **idVendedor** | **int**|  | [optional] |
| **numero** | **string**| Número da ordem de serviço | [optional] |
| **numeroSerie** | **string**| Número de série do equipamento | [optional] |

### Return type

[**\Eloom\BlingApi\Model\OrdensServicoGet200Response**](../Model/OrdensServicoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordensServicoIdOrdemServicoDelete()`

```php
ordensServicoIdOrdemServicoDelete($idOrdemServico)
```

Remove uma ordem de serviço

Remove uma ordem de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeServioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemServico = 12345678; // int | ID da ordem de serviço

try {
    $apiInstance->ordensServicoIdOrdemServicoDelete($idOrdemServico);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeServioApi->ordensServicoIdOrdemServicoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemServico** | **int**| ID da ordem de serviço | |

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

## `ordensServicoIdOrdemServicoGet()`

```php
ordensServicoIdOrdemServicoGet($idOrdemServico): \Eloom\BlingApi\Model\OrdensServicoIdOrdemServicoGet200Response
```

Obtém uma ordem de serviço

Obtém uma ordem de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeServioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemServico = 12345678; // int | ID da ordem de serviço

try {
    $result = $apiInstance->ordensServicoIdOrdemServicoGet($idOrdemServico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeServioApi->ordensServicoIdOrdemServicoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemServico** | **int**| ID da ordem de serviço | |

### Return type

[**\Eloom\BlingApi\Model\OrdensServicoIdOrdemServicoGet200Response**](../Model/OrdensServicoIdOrdemServicoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordensServicoIdOrdemServicoPut()`

```php
ordensServicoIdOrdemServicoPut($idOrdemServico, $ordensServicoDadosBaseDTO)
```

Altera uma ordem de serviço

Altera uma ordem de serviço pelo ID. Os campos não informados são gravados com o valor padrão, portanto envie o recurso completo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeServioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemServico = 12345678; // int | ID da ordem de serviço
$ordensServicoDadosBaseDTO = new \Eloom\BlingApi\Model\OrdensServicoDadosBaseDTO(); // \Eloom\BlingApi\Model\OrdensServicoDadosBaseDTO

try {
    $apiInstance->ordensServicoIdOrdemServicoPut($idOrdemServico, $ordensServicoDadosBaseDTO);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeServioApi->ordensServicoIdOrdemServicoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemServico** | **int**| ID da ordem de serviço | |
| **ordensServicoDadosBaseDTO** | [**\Eloom\BlingApi\Model\OrdensServicoDadosBaseDTO**](../Model/OrdensServicoDadosBaseDTO.md)|  | |

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

## `ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch()`

```php
ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch($idOrdemServico, $idSituacao)
```

Altera a situação de uma ordem de serviço

Altera a situação de uma ordem de serviço pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeServioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemServico = 12345678; // int | ID da ordem de serviço
$idSituacao = 12345678; // int | ID da situação da ordem de serviço

try {
    $apiInstance->ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch($idOrdemServico, $idSituacao);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeServioApi->ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemServico** | **int**| ID da ordem de serviço | |
| **idSituacao** | **int**| ID da situação da ordem de serviço | |

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

## `ordensServicoPost()`

```php
ordensServicoPost($ordensServicoDadosBaseDTO): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria uma ordem de serviço

Cria uma ordem de serviço.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeServioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordensServicoDadosBaseDTO = new \Eloom\BlingApi\Model\OrdensServicoDadosBaseDTO(); // \Eloom\BlingApi\Model\OrdensServicoDadosBaseDTO

try {
    $result = $apiInstance->ordensServicoPost($ordensServicoDadosBaseDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeServioApi->ordensServicoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ordensServicoDadosBaseDTO** | [**\Eloom\BlingApi\Model\OrdensServicoDadosBaseDTO**](../Model/OrdensServicoDadosBaseDTO.md)|  | |

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
