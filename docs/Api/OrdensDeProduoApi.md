# Eloom\BlingApi\OrdensDeProduoApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordensProducaoGerarSobDemandaPost()**](OrdensDeProduoApi.md#ordensProducaoGerarSobDemandaPost) | **POST** /ordens-producao/gerar-sob-demanda | Gera ordens de produção sob demanda |
| [**ordensProducaoGet()**](OrdensDeProduoApi.md#ordensProducaoGet) | **GET** /ordens-producao | Obtém ordens de produção |
| [**ordensProducaoIdOrdemProducaoDelete()**](OrdensDeProduoApi.md#ordensProducaoIdOrdemProducaoDelete) | **DELETE** /ordens-producao/{idOrdemProducao} | Remove uma ordem de produção |
| [**ordensProducaoIdOrdemProducaoGet()**](OrdensDeProduoApi.md#ordensProducaoIdOrdemProducaoGet) | **GET** /ordens-producao/{idOrdemProducao} | Obtém uma ordem de produção |
| [**ordensProducaoIdOrdemProducaoPut()**](OrdensDeProduoApi.md#ordensProducaoIdOrdemProducaoPut) | **PUT** /ordens-producao/{idOrdemProducao} | Altera uma ordem de produção |
| [**ordensProducaoIdOrdemProducaoSituacoesPut()**](OrdensDeProduoApi.md#ordensProducaoIdOrdemProducaoSituacoesPut) | **PUT** /ordens-producao/{idOrdemProducao}/situacoes | Altera a situação de uma ordem de produção |
| [**ordensProducaoPost()**](OrdensDeProduoApi.md#ordensProducaoPost) | **POST** /ordens-producao | Cria uma ordem de produção |


## `ordensProducaoGerarSobDemandaPost()`

```php
ordensProducaoGerarSobDemandaPost(): \Eloom\BlingApi\Model\OrdensProducaoGerarSobDemandaPost201Response
```

Gera ordens de produção sob demanda

Gera ordens de produção sob demanda (abaixo do estoque mínimo).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ordensProducaoGerarSobDemandaPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoGerarSobDemandaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\OrdensProducaoGerarSobDemandaPost201Response**](../Model/OrdensProducaoGerarSobDemandaPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordensProducaoGet()`

```php
ordensProducaoGet($pagina, $limite, $idsSituacoes): \Eloom\BlingApi\Model\OrdensProducaoGet200Response
```

Obtém ordens de produção

Obtém ordens de produção paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idsSituacoes = [12345678,87654321]; // int[] | IDs das situações

try {
    $result = $apiInstance->ordensProducaoGet($pagina, $limite, $idsSituacoes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idsSituacoes** | [**int[]**](../Model/int.md)| IDs das situações | [optional] |

### Return type

[**\Eloom\BlingApi\Model\OrdensProducaoGet200Response**](../Model/OrdensProducaoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordensProducaoIdOrdemProducaoDelete()`

```php
ordensProducaoIdOrdemProducaoDelete($idOrdemProducao)
```

Remove uma ordem de produção

Remove uma ordem de produção pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemProducao = 12345678; // int | ID da ordem de produção

try {
    $apiInstance->ordensProducaoIdOrdemProducaoDelete($idOrdemProducao);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoIdOrdemProducaoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemProducao** | **int**| ID da ordem de produção | |

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

## `ordensProducaoIdOrdemProducaoGet()`

```php
ordensProducaoIdOrdemProducaoGet($idOrdemProducao): \Eloom\BlingApi\Model\OrdensProducaoIdOrdemProducaoGet200Response
```

Obtém uma ordem de produção

Obtém uma ordem de produção pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemProducao = 12345678; // int | ID da ordem de produção

try {
    $result = $apiInstance->ordensProducaoIdOrdemProducaoGet($idOrdemProducao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoIdOrdemProducaoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemProducao** | **int**| ID da ordem de produção | |

### Return type

[**\Eloom\BlingApi\Model\OrdensProducaoIdOrdemProducaoGet200Response**](../Model/OrdensProducaoIdOrdemProducaoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordensProducaoIdOrdemProducaoPut()`

```php
ordensProducaoIdOrdemProducaoPut($idOrdemProducao, $ordensProducaoPostRequest)
```

Altera uma ordem de produção

Altera uma ordem de produção pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemProducao = 12345678; // int | ID da ordem de produção
$ordensProducaoPostRequest = new \Eloom\BlingApi\Model\OrdensProducaoPostRequest(); // \Eloom\BlingApi\Model\OrdensProducaoPostRequest

try {
    $apiInstance->ordensProducaoIdOrdemProducaoPut($idOrdemProducao, $ordensProducaoPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoIdOrdemProducaoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemProducao** | **int**| ID da ordem de produção | |
| **ordensProducaoPostRequest** | [**\Eloom\BlingApi\Model\OrdensProducaoPostRequest**](../Model/OrdensProducaoPostRequest.md)|  | |

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

## `ordensProducaoIdOrdemProducaoSituacoesPut()`

```php
ordensProducaoIdOrdemProducaoSituacoesPut($idOrdemProducao, $ordensProducaoSituacaoDadosDTO)
```

Altera a situação de uma ordem de produção

Altera a situação de uma ordem de produção pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idOrdemProducao = 12345678; // int | ID da ordem de produção
$ordensProducaoSituacaoDadosDTO = new \Eloom\BlingApi\Model\OrdensProducaoSituacaoDadosDTO(); // \Eloom\BlingApi\Model\OrdensProducaoSituacaoDadosDTO

try {
    $apiInstance->ordensProducaoIdOrdemProducaoSituacoesPut($idOrdemProducao, $ordensProducaoSituacaoDadosDTO);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoIdOrdemProducaoSituacoesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrdemProducao** | **int**| ID da ordem de produção | |
| **ordensProducaoSituacaoDadosDTO** | [**\Eloom\BlingApi\Model\OrdensProducaoSituacaoDadosDTO**](../Model/OrdensProducaoSituacaoDadosDTO.md)|  | |

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

## `ordensProducaoPost()`

```php
ordensProducaoPost($ordensProducaoPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria uma ordem de produção

Cria uma ordem de produção.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\OrdensDeProduoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordensProducaoPostRequest = new \Eloom\BlingApi\Model\OrdensProducaoPostRequest(); // \Eloom\BlingApi\Model\OrdensProducaoPostRequest

try {
    $result = $apiInstance->ordensProducaoPost($ordensProducaoPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdensDeProduoApi->ordensProducaoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ordensProducaoPostRequest** | [**\Eloom\BlingApi\Model\OrdensProducaoPostRequest**](../Model/OrdensProducaoPostRequest.md)|  | |

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
