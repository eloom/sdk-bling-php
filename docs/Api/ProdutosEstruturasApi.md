# Eloom\BlingApi\ProdutosEstruturasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosEstruturasDelete()**](ProdutosEstruturasApi.md#produtosEstruturasDelete) | **DELETE** /produtos/estruturas | Remove a estrutura de múltiplos produtos |
| [**produtosEstruturasIdProdutoEstruturaComponentesDelete()**](ProdutosEstruturasApi.md#produtosEstruturasIdProdutoEstruturaComponentesDelete) | **DELETE** /produtos/estruturas/{idProdutoEstrutura}/componentes | Remove componentes específicos de um produto com composição |
| [**produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch()**](ProdutosEstruturasApi.md#produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch) | **PATCH** /produtos/estruturas/{idProdutoEstrutura}/componentes/{idComponente} | Altera um componente de uma estrutura |
| [**produtosEstruturasIdProdutoEstruturaComponentesPost()**](ProdutosEstruturasApi.md#produtosEstruturasIdProdutoEstruturaComponentesPost) | **POST** /produtos/estruturas/{idProdutoEstrutura}/componentes | Adiciona componente(s) a uma estrutura |
| [**produtosEstruturasIdProdutoEstruturaGet()**](ProdutosEstruturasApi.md#produtosEstruturasIdProdutoEstruturaGet) | **GET** /produtos/estruturas/{idProdutoEstrutura} | Obtém a estrutura de um produto com composição |
| [**produtosEstruturasIdProdutoEstruturaPut()**](ProdutosEstruturasApi.md#produtosEstruturasIdProdutoEstruturaPut) | **PUT** /produtos/estruturas/{idProdutoEstrutura} | Altera a estrutura de um produto com composição |


## `produtosEstruturasDelete()`

```php
produtosEstruturasDelete($idsProdutos): \Eloom\BlingApi\Model\ProdutosEstruturasDelete200Response
```

Remove a estrutura de múltiplos produtos

Remove a estrutura de múltiplos produtos com composição pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosEstruturasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos

try {
    $result = $apiInstance->produtosEstruturasDelete($idsProdutos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosEstruturasApi->produtosEstruturasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosEstruturasDelete200Response**](../Model/ProdutosEstruturasDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosEstruturasIdProdutoEstruturaComponentesDelete()`

```php
produtosEstruturasIdProdutoEstruturaComponentesDelete($idProdutoEstrutura, $idsComponentes)
```

Remove componentes específicos de um produto com composição

Remove os componentes de um produto com composição pelos IDs dos componentes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosEstruturasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoEstrutura = 12345678; // int | ID do produto com composição
$idsComponentes = [12345678,87654321]; // int[] | IDs dos produtos

try {
    $apiInstance->produtosEstruturasIdProdutoEstruturaComponentesDelete($idProdutoEstrutura, $idsComponentes);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosEstruturasApi->produtosEstruturasIdProdutoEstruturaComponentesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoEstrutura** | **int**| ID do produto com composição | |
| **idsComponentes** | [**int[]**](../Model/int.md)| IDs dos produtos | |

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

## `produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch()`

```php
produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch($idProdutoEstrutura, $idComponente, $produtosComponenteDTO)
```

Altera um componente de uma estrutura

Altera um componente de uma estrutura pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosEstruturasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoEstrutura = 12345678; // int | ID do produto com composição
$idComponente = 12345678; // int | ID do componente
$produtosComponenteDTO = new \Eloom\BlingApi\Model\ProdutosComponenteDTO(); // \Eloom\BlingApi\Model\ProdutosComponenteDTO

try {
    $apiInstance->produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch($idProdutoEstrutura, $idComponente, $produtosComponenteDTO);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosEstruturasApi->produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoEstrutura** | **int**| ID do produto com composição | |
| **idComponente** | **int**| ID do componente | |
| **produtosComponenteDTO** | [**\Eloom\BlingApi\Model\ProdutosComponenteDTO**](../Model/ProdutosComponenteDTO.md)|  | |

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

## `produtosEstruturasIdProdutoEstruturaComponentesPost()`

```php
produtosEstruturasIdProdutoEstruturaComponentesPost($idProdutoEstrutura, $produtosComponenteDTO)
```

Adiciona componente(s) a uma estrutura

Adiciona múltiplos componentes a uma estrutura pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosEstruturasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoEstrutura = 12345678; // int | ID do produto com composição
$produtosComponenteDTO = array(new \Eloom\BlingApi\Model\ProdutosComponenteDTO()); // \Eloom\BlingApi\Model\ProdutosComponenteDTO[]

try {
    $apiInstance->produtosEstruturasIdProdutoEstruturaComponentesPost($idProdutoEstrutura, $produtosComponenteDTO);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosEstruturasApi->produtosEstruturasIdProdutoEstruturaComponentesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoEstrutura** | **int**| ID do produto com composição | |
| **produtosComponenteDTO** | [**\Eloom\BlingApi\Model\ProdutosComponenteDTO[]**](../Model/ProdutosComponenteDTO.md)|  | |

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

## `produtosEstruturasIdProdutoEstruturaGet()`

```php
produtosEstruturasIdProdutoEstruturaGet($idProdutoEstrutura): \Eloom\BlingApi\Model\ProdutosEstruturasIdProdutoEstruturaGet200Response
```

Obtém a estrutura de um produto com composição

Obtém a estrutura de um produto com composição pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosEstruturasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoEstrutura = 12345678; // int | ID do produto com composição

try {
    $result = $apiInstance->produtosEstruturasIdProdutoEstruturaGet($idProdutoEstrutura);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosEstruturasApi->produtosEstruturasIdProdutoEstruturaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoEstrutura** | **int**| ID do produto com composição | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosEstruturasIdProdutoEstruturaGet200Response**](../Model/ProdutosEstruturasIdProdutoEstruturaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosEstruturasIdProdutoEstruturaPut()`

```php
produtosEstruturasIdProdutoEstruturaPut($idProdutoEstrutura, $produtosEstruturaDTO)
```

Altera a estrutura de um produto com composição

Altera a estrutura de um produto com composição pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosEstruturasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProdutoEstrutura = 12345678; // int | ID do produto com composição
$produtosEstruturaDTO = new \Eloom\BlingApi\Model\ProdutosEstruturaDTO(); // \Eloom\BlingApi\Model\ProdutosEstruturaDTO

try {
    $apiInstance->produtosEstruturasIdProdutoEstruturaPut($idProdutoEstrutura, $produtosEstruturaDTO);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosEstruturasApi->produtosEstruturasIdProdutoEstruturaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProdutoEstrutura** | **int**| ID do produto com composição | |
| **produtosEstruturaDTO** | [**\Eloom\BlingApi\Model\ProdutosEstruturaDTO**](../Model/ProdutosEstruturaDTO.md)|  | |

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
