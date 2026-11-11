# Eloom\BlingApi\ContratosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contratosGet()**](ContratosApi.md#contratosGet) | **GET** /contratos | Obtém contratos |
| [**contratosIdContratoDelete()**](ContratosApi.md#contratosIdContratoDelete) | **DELETE** /contratos/{idContrato} | Remove um contrato |
| [**contratosIdContratoGet()**](ContratosApi.md#contratosIdContratoGet) | **GET** /contratos/{idContrato} | Obtém um contrato |
| [**contratosIdContratoPut()**](ContratosApi.md#contratosIdContratoPut) | **PUT** /contratos/{idContrato} | Altera um contrato |
| [**contratosPost()**](ContratosApi.md#contratosPost) | **POST** /contratos | Cria um contrato |


## `contratosGet()`

```php
contratosGet($pagina, $limite, $dataCriacaoInicio, $dataCriacaoFinal, $dataBaseInicio, $dataBaseFinal, $situacao, $idContato, $idContatoCobranca): \Eloom\BlingApi\Model\ContratosGet200Response
```

Obtém contratos

Obtém contratos paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContratosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$dataCriacaoInicio = Sat Dec 31 21:00:00 BRT 2022; // \DateTime | Data inicial de criação
$dataCriacaoFinal = Sat Jan 14 21:00:00 BRT 2023; // \DateTime | Data final de criação
$dataBaseInicio = Sat Dec 31 21:00:00 BRT 2022; // \DateTime | Data base inicial para geração de cobranças
$dataBaseFinal = Sat Jan 14 21:00:00 BRT 2023; // \DateTime | Data base final para geração de cobranças
$situacao = '1'; // string | `0` Inativo<br>`1` Ativo<br>`2` Baixado<br>`3` Isento
$idContato = 1245678; // int | ID do contato
$idContatoCobranca = 1245678; // int | ID do contato de cobrança

try {
    $result = $apiInstance->contratosGet($pagina, $limite, $dataCriacaoInicio, $dataCriacaoFinal, $dataBaseInicio, $dataBaseFinal, $situacao, $idContato, $idContatoCobranca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratosApi->contratosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **dataCriacaoInicio** | **\DateTime**| Data inicial de criação | [optional] |
| **dataCriacaoFinal** | **\DateTime**| Data final de criação | [optional] |
| **dataBaseInicio** | **\DateTime**| Data base inicial para geração de cobranças | [optional] |
| **dataBaseFinal** | **\DateTime**| Data base final para geração de cobranças | [optional] |
| **situacao** | **string**| &#x60;0&#x60; Inativo&lt;br&gt;&#x60;1&#x60; Ativo&lt;br&gt;&#x60;2&#x60; Baixado&lt;br&gt;&#x60;3&#x60; Isento | [optional] [default to &#39;1&#39;] |
| **idContato** | **int**| ID do contato | [optional] |
| **idContatoCobranca** | **int**| ID do contato de cobrança | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ContratosGet200Response**](../Model/ContratosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contratosIdContratoDelete()`

```php
contratosIdContratoDelete($idContrato)
```

Remove um contrato

Remove um contrato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContratosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContrato = 12345678; // int | ID do contrato

try {
    $apiInstance->contratosIdContratoDelete($idContrato);
} catch (Exception $e) {
    echo 'Exception when calling ContratosApi->contratosIdContratoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContrato** | **int**| ID do contrato | |

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

## `contratosIdContratoGet()`

```php
contratosIdContratoGet($idContrato): \Eloom\BlingApi\Model\ContratosIdContratoGet200Response
```

Obtém um contrato

Obtém um contrato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContratosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContrato = 12345678; // int | ID do contrato

try {
    $result = $apiInstance->contratosIdContratoGet($idContrato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratosApi->contratosIdContratoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContrato** | **int**| ID do contrato | |

### Return type

[**\Eloom\BlingApi\Model\ContratosIdContratoGet200Response**](../Model/ContratosIdContratoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contratosIdContratoPut()`

```php
contratosIdContratoPut($idContrato, $contratosPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Altera um contrato

Altera um contrato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContratosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContrato = 12345678; // int | ID do contrato
$contratosPostRequest = new \Eloom\BlingApi\Model\ContratosPostRequest(); // \Eloom\BlingApi\Model\ContratosPostRequest

try {
    $result = $apiInstance->contratosIdContratoPut($idContrato, $contratosPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratosApi->contratosIdContratoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContrato** | **int**| ID do contrato | |
| **contratosPostRequest** | [**\Eloom\BlingApi\Model\ContratosPostRequest**](../Model/ContratosPostRequest.md)|  | |

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

## `contratosPost()`

```php
contratosPost($contratosPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria um contrato

Cria um contrato.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContratosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contratosPostRequest = new \Eloom\BlingApi\Model\ContratosPostRequest(); // \Eloom\BlingApi\Model\ContratosPostRequest

try {
    $result = $apiInstance->contratosPost($contratosPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratosApi->contratosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contratosPostRequest** | [**\Eloom\BlingApi\Model\ContratosPostRequest**](../Model/ContratosPostRequest.md)|  | |

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
