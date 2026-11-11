# Eloom\BlingApi\PropostasComerciaisApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**propostasComerciaisDelete()**](PropostasComerciaisApi.md#propostasComerciaisDelete) | **DELETE** /propostas-comerciais | Remove múltiplas propostas comerciais |
| [**propostasComerciaisGet()**](PropostasComerciaisApi.md#propostasComerciaisGet) | **GET** /propostas-comerciais | Obtém propostas comerciais |
| [**propostasComerciaisIdPropostaComercialDelete()**](PropostasComerciaisApi.md#propostasComerciaisIdPropostaComercialDelete) | **DELETE** /propostas-comerciais/{idPropostaComercial} | Remove uma proposta comercial |
| [**propostasComerciaisIdPropostaComercialGet()**](PropostasComerciaisApi.md#propostasComerciaisIdPropostaComercialGet) | **GET** /propostas-comerciais/{idPropostaComercial} | Obtém uma proposta comercial |
| [**propostasComerciaisIdPropostaComercialPut()**](PropostasComerciaisApi.md#propostasComerciaisIdPropostaComercialPut) | **PUT** /propostas-comerciais/{idPropostaComercial} | Altera uma proposta comercial |
| [**propostasComerciaisIdPropostaComercialSituacoesPatch()**](PropostasComerciaisApi.md#propostasComerciaisIdPropostaComercialSituacoesPatch) | **PATCH** /propostas-comerciais/{idPropostaComercial}/situacoes | Altera a situação de uma proposta comercial |
| [**propostasComerciaisPost()**](PropostasComerciaisApi.md#propostasComerciaisPost) | **POST** /propostas-comerciais | Cria uma proposta comercial |


## `propostasComerciaisDelete()`

```php
propostasComerciaisDelete($idsPropostasComerciais): \Eloom\BlingApi\Model\CategoriasReceitasDespesasDelete200Response
```

Remove múltiplas propostas comerciais

Remove múltiplas propostas comerciais pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsPropostasComerciais = [12345678,87654321]; // int[] | IDs das propostas comerciais

try {
    $result = $apiInstance->propostasComerciaisDelete($idsPropostasComerciais);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsPropostasComerciais** | [**int[]**](../Model/int.md)| IDs das propostas comerciais | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasReceitasDespesasDelete200Response**](../Model/CategoriasReceitasDespesasDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propostasComerciaisGet()`

```php
propostasComerciaisGet($situacao, $idContato, $dataInicial, $dataFinal, $pagina, $limite): \Eloom\BlingApi\Model\PropostasComerciaisGet200Response
```

Obtém propostas comerciais

Obtém propostas comerciais paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$situacao = 'situacao_example'; // string | O valor referente a situação da proposta: Pendente, Aguardando, Não aprovado, Aprovado, Concluido, Rascunho. Para mais situações, pesquisar pelo número separado por vírgula.
$idContato = 56; // int | ID do contato
$dataInicial = Sun Aug 23 21:00:00 BRT 2020; // \DateTime | Data inicial
$dataFinal = Sun Aug 23 21:00:00 BRT 2020; // \DateTime | Data final
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página

try {
    $result = $apiInstance->propostasComerciaisGet($situacao, $idContato, $dataInicial, $dataFinal, $pagina, $limite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **situacao** | **string**| O valor referente a situação da proposta: Pendente, Aguardando, Não aprovado, Aprovado, Concluido, Rascunho. Para mais situações, pesquisar pelo número separado por vírgula. | [optional] |
| **idContato** | **int**| ID do contato | [optional] |
| **dataInicial** | **\DateTime**| Data inicial | [optional] |
| **dataFinal** | **\DateTime**| Data final | [optional] |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |

### Return type

[**\Eloom\BlingApi\Model\PropostasComerciaisGet200Response**](../Model/PropostasComerciaisGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propostasComerciaisIdPropostaComercialDelete()`

```php
propostasComerciaisIdPropostaComercialDelete($idPropostaComercial)
```

Remove uma proposta comercial

Remove uma proposta comercial pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPropostaComercial = 56; // int | ID da proposta comercial

try {
    $apiInstance->propostasComerciaisIdPropostaComercialDelete($idPropostaComercial);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisIdPropostaComercialDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPropostaComercial** | **int**| ID da proposta comercial | |

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

## `propostasComerciaisIdPropostaComercialGet()`

```php
propostasComerciaisIdPropostaComercialGet($idPropostaComercial): \Eloom\BlingApi\Model\PropostasComerciaisPostRequest
```

Obtém uma proposta comercial

Obtém uma proposta comercial pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPropostaComercial = 56; // int | ID da proposta comercial

try {
    $result = $apiInstance->propostasComerciaisIdPropostaComercialGet($idPropostaComercial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisIdPropostaComercialGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPropostaComercial** | **int**| ID da proposta comercial | |

### Return type

[**\Eloom\BlingApi\Model\PropostasComerciaisPostRequest**](../Model/PropostasComerciaisPostRequest.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propostasComerciaisIdPropostaComercialPut()`

```php
propostasComerciaisIdPropostaComercialPut($idPropostaComercial, $propostasComerciaisPostRequest)
```

Altera uma proposta comercial

Altera uma proposta comercial pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPropostaComercial = 56; // int | ID da proposta comercial
$propostasComerciaisPostRequest = new \Eloom\BlingApi\Model\PropostasComerciaisPostRequest(); // \Eloom\BlingApi\Model\PropostasComerciaisPostRequest

try {
    $apiInstance->propostasComerciaisIdPropostaComercialPut($idPropostaComercial, $propostasComerciaisPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisIdPropostaComercialPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPropostaComercial** | **int**| ID da proposta comercial | |
| **propostasComerciaisPostRequest** | [**\Eloom\BlingApi\Model\PropostasComerciaisPostRequest**](../Model/PropostasComerciaisPostRequest.md)|  | |

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

## `propostasComerciaisIdPropostaComercialSituacoesPatch()`

```php
propostasComerciaisIdPropostaComercialSituacoesPatch($idPropostaComercial, $orcamentosSituacaoDTO)
```

Altera a situação de uma proposta comercial

Altera a situação de uma proposta comercial pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idPropostaComercial = 56; // int | ID da proposta comercial
$orcamentosSituacaoDTO = new \Eloom\BlingApi\Model\OrcamentosSituacaoDTO(); // \Eloom\BlingApi\Model\OrcamentosSituacaoDTO

try {
    $apiInstance->propostasComerciaisIdPropostaComercialSituacoesPatch($idPropostaComercial, $orcamentosSituacaoDTO);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisIdPropostaComercialSituacoesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idPropostaComercial** | **int**| ID da proposta comercial | |
| **orcamentosSituacaoDTO** | [**\Eloom\BlingApi\Model\OrcamentosSituacaoDTO**](../Model/OrcamentosSituacaoDTO.md)|  | |

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

## `propostasComerciaisPost()`

```php
propostasComerciaisPost($propostasComerciaisPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria uma proposta comercial

Cria uma proposta comercial.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\PropostasComerciaisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$propostasComerciaisPostRequest = new \Eloom\BlingApi\Model\PropostasComerciaisPostRequest(); // \Eloom\BlingApi\Model\PropostasComerciaisPostRequest

try {
    $result = $apiInstance->propostasComerciaisPost($propostasComerciaisPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropostasComerciaisApi->propostasComerciaisPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **propostasComerciaisPostRequest** | [**\Eloom\BlingApi\Model\PropostasComerciaisPostRequest**](../Model/PropostasComerciaisPostRequest.md)|  | |

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
