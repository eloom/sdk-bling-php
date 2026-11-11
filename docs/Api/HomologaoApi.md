# Eloom\BlingApi\HomologaoApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**homologacaoProdutosGet()**](HomologaoApi.md#homologacaoProdutosGet) | **GET** /homologacao/produtos | Obtém o produto da homologação |
| [**homologacaoProdutosIdProdutoHomologacaoDelete()**](HomologaoApi.md#homologacaoProdutosIdProdutoHomologacaoDelete) | **DELETE** /homologacao/produtos/{idProdutoHomologacao} | Remove o produto da homologação |
| [**homologacaoProdutosIdProdutoHomologacaoPut()**](HomologaoApi.md#homologacaoProdutosIdProdutoHomologacaoPut) | **PUT** /homologacao/produtos/{idProdutoHomologacao} | Altera o produto da homologação |
| [**homologacaoProdutosIdProdutoHomologacaoSituacoesPatch()**](HomologaoApi.md#homologacaoProdutosIdProdutoHomologacaoSituacoesPatch) | **PATCH** /homologacao/produtos/{idProdutoHomologacao}/situacoes | Altera a situação do produto da homologação |
| [**homologacaoProdutosPost()**](HomologaoApi.md#homologacaoProdutosPost) | **POST** /homologacao/produtos | Cria o produto da homologação |


## `homologacaoProdutosGet()`

```php
homologacaoProdutosGet(): \Eloom\BlingApi\Model\HomologacaoProdutosGet200Response
```

Obtém o produto da homologação

Obtém o produto que será utilizado durante os demais passos da homologação, e, inicia o processo de validação, o qual deve ser acompanhando via interface do cadastro de aplicativos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\HomologaoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->homologacaoProdutosGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomologaoApi->homologacaoProdutosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\HomologacaoProdutosGet200Response**](../Model/HomologacaoProdutosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `homologacaoProdutosIdProdutoHomologacaoDelete()`

```php
homologacaoProdutosIdProdutoHomologacaoDelete($idProdutoHomologacao)
```

Remove o produto da homologação

Remove o produto da homologação pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\HomologaoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoHomologacao = 12345678; // int | ID do produto da homologação.

try {
    $apiInstance->homologacaoProdutosIdProdutoHomologacaoDelete($idProdutoHomologacao);
} catch (Exception $e) {
    echo 'Exception when calling HomologaoApi->homologacaoProdutosIdProdutoHomologacaoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoHomologacao** | **int**| ID do produto da homologação. | |

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

## `homologacaoProdutosIdProdutoHomologacaoPut()`

```php
homologacaoProdutosIdProdutoHomologacaoPut($idProdutoHomologacao, $homologacaoDadosBaseDTO)
```

Altera o produto da homologação

Altera o produto da homologação pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\HomologaoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoHomologacao = 12345678; // int | ID do produto da homologação.
$homologacaoDadosBaseDTO = new \Eloom\BlingApi\Model\HomologacaoDadosBaseDTO(); // \Eloom\BlingApi\Model\HomologacaoDadosBaseDTO

try {
    $apiInstance->homologacaoProdutosIdProdutoHomologacaoPut($idProdutoHomologacao, $homologacaoDadosBaseDTO);
} catch (Exception $e) {
    echo 'Exception when calling HomologaoApi->homologacaoProdutosIdProdutoHomologacaoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoHomologacao** | **int**| ID do produto da homologação. | |
| **homologacaoDadosBaseDTO** | [**\Eloom\BlingApi\Model\HomologacaoDadosBaseDTO**](../Model/HomologacaoDadosBaseDTO.md)|  | |

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

## `homologacaoProdutosIdProdutoHomologacaoSituacoesPatch()`

```php
homologacaoProdutosIdProdutoHomologacaoSituacoesPatch($idProdutoHomologacao, $homologacaoSituacaoDTO)
```

Altera a situação do produto da homologação

Altera a situação do produto da homologação pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\HomologaoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoHomologacao = 12345678; // int | ID do produto da homologação.
$homologacaoSituacaoDTO = new \Eloom\BlingApi\Model\HomologacaoSituacaoDTO(); // \Eloom\BlingApi\Model\HomologacaoSituacaoDTO

try {
    $apiInstance->homologacaoProdutosIdProdutoHomologacaoSituacoesPatch($idProdutoHomologacao, $homologacaoSituacaoDTO);
} catch (Exception $e) {
    echo 'Exception when calling HomologaoApi->homologacaoProdutosIdProdutoHomologacaoSituacoesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoHomologacao** | **int**| ID do produto da homologação. | |
| **homologacaoSituacaoDTO** | [**\Eloom\BlingApi\Model\HomologacaoSituacaoDTO**](../Model/HomologacaoSituacaoDTO.md)|  | |

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

## `homologacaoProdutosPost()`

```php
homologacaoProdutosPost($homologacaoDadosBaseDTO): \Eloom\BlingApi\Model\HomologacaoProdutosPost201Response
```

Cria o produto da homologação

Cria o produto da homologação.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\HomologaoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$homologacaoDadosBaseDTO = new \Eloom\BlingApi\Model\HomologacaoDadosBaseDTO(); // \Eloom\BlingApi\Model\HomologacaoDadosBaseDTO

try {
    $result = $apiInstance->homologacaoProdutosPost($homologacaoDadosBaseDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomologaoApi->homologacaoProdutosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **homologacaoDadosBaseDTO** | [**\Eloom\BlingApi\Model\HomologacaoDadosBaseDTO**](../Model/HomologacaoDadosBaseDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\HomologacaoProdutosPost201Response**](../Model/HomologacaoProdutosPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
