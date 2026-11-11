# Eloom\BlingApi\ProdutosLotesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**produtosIdProdutoLotesControlaLoteDesativarPost()**](ProdutosLotesApi.md#produtosIdProdutoLotesControlaLoteDesativarPost) | **POST** /produtos/{idProduto}/lotes/controla-lote/desativar | Desativa controle de lotes para o produto |
| [**produtosLotesControlaLoteGet()**](ProdutosLotesApi.md#produtosLotesControlaLoteGet) | **GET** /produtos/lotes/controla-lote | Obtém a informação se determinados produtos possuem controle de lote |
| [**produtosLotesDelete()**](ProdutosLotesApi.md#produtosLotesDelete) | **DELETE** /produtos/lotes | Remove lotes de produtos |
| [**produtosLotesGet()**](ProdutosLotesApi.md#produtosLotesGet) | **GET** /produtos/lotes | Obtém lotes de produtos |
| [**produtosLotesIdLoteGet()**](ProdutosLotesApi.md#produtosLotesIdLoteGet) | **GET** /produtos/lotes/{idLote} | Obtém um lote de um produto |
| [**produtosLotesIdLotePut()**](ProdutosLotesApi.md#produtosLotesIdLotePut) | **PUT** /produtos/lotes/{idLote} | Altera um lote de um produto |
| [**produtosLotesIdLoteStatusPatch()**](ProdutosLotesApi.md#produtosLotesIdLoteStatusPatch) | **PATCH** /produtos/lotes/{idLote}/status | Altera o status de um lote do produto |
| [**produtosLotesPut()**](ProdutosLotesApi.md#produtosLotesPut) | **PUT** /produtos/lotes | Salva lotes de produtos |


## `produtosIdProdutoLotesControlaLoteDesativarPost()`

```php
produtosIdProdutoLotesControlaLoteDesativarPost($idProduto)
```

Desativa controle de lotes para o produto

Desativa controle de lotes para o produto pelo ID do produto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idProduto = 12345678; // int | ID do produto

try {
    $apiInstance->produtosIdProdutoLotesControlaLoteDesativarPost($idProduto);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosIdProdutoLotesControlaLoteDesativarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idProduto** | **int**| ID do produto | |

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

## `produtosLotesControlaLoteGet()`

```php
produtosLotesControlaLoteGet($idsProdutos): \Eloom\BlingApi\Model\ProdutosLotesControlaLoteGet200Response
```

Obtém a informação se determinados produtos possuem controle de lote

Obtém a informação se determinados produtos possuem controle de lote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos

try {
    $result = $apiInstance->produtosLotesControlaLoteGet($idsProdutos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesControlaLoteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesControlaLoteGet200Response**](../Model/ProdutosLotesControlaLoteGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesDelete()`

```php
produtosLotesDelete($idsLotes)
```

Remove lotes de produtos

Remove lotes de produtos pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsLotes = [12345678,87654321]; // int[] | IDs dos lotes

try {
    $apiInstance->produtosLotesDelete($idsLotes);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsLotes** | [**int[]**](../Model/int.md)| IDs dos lotes | |

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

## `produtosLotesGet()`

```php
produtosLotesGet($idsProdutos, $pagina, $limite, $idsLotes, $idsDepositos, $codigosLotes, $status, $dataValidadeInicial, $dataValidadeFinal, $dataFabricacaoInicial, $dataFabricacaoFinal, $dataCriacaoInicial, $dataCriacaoFinal): \Eloom\BlingApi\Model\ProdutosLotesGet200Response
```

Obtém lotes de produtos

Obtém lotes de produtos paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idsLotes = [12345678,87654321]; // string[] | IDs dos lotes
$idsDepositos = [12345678,87654321]; // int[] | IDs dos depósitos
$codigosLotes = ["Lote A","Lote B"]; // string[] | Códigos dos lotes
$status = A; // string | Status do lote
$dataValidadeInicial = Tue Dec 31 21:00:00 BRT 2019; // \DateTime | Data de validade inicial
$dataValidadeFinal = Tue Dec 31 21:00:00 BRT 2019; // \DateTime | Data de validade final
$dataFabricacaoInicial = Tue Dec 31 21:00:00 BRT 2019; // \DateTime | Data de fabricação inicial
$dataFabricacaoFinal = Tue Dec 31 21:00:00 BRT 2019; // \DateTime | Data de fabricação final
$dataCriacaoInicial = 2020-01-01 12:00:00; // string | Data de inclusão inicial
$dataCriacaoFinal = 2020-01-01 13:00:00; // string | Data de inclusão final

try {
    $result = $apiInstance->produtosLotesGet($idsProdutos, $pagina, $limite, $idsLotes, $idsDepositos, $codigosLotes, $status, $dataValidadeInicial, $dataValidadeFinal, $dataFabricacaoInicial, $dataFabricacaoFinal, $dataCriacaoInicial, $dataCriacaoFinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos | |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idsLotes** | [**string[]**](../Model/string.md)| IDs dos lotes | [optional] |
| **idsDepositos** | [**int[]**](../Model/int.md)| IDs dos depósitos | [optional] |
| **codigosLotes** | [**string[]**](../Model/string.md)| Códigos dos lotes | [optional] |
| **status** | **string**| Status do lote | [optional] |
| **dataValidadeInicial** | **\DateTime**| Data de validade inicial | [optional] |
| **dataValidadeFinal** | **\DateTime**| Data de validade final | [optional] |
| **dataFabricacaoInicial** | **\DateTime**| Data de fabricação inicial | [optional] |
| **dataFabricacaoFinal** | **\DateTime**| Data de fabricação final | [optional] |
| **dataCriacaoInicial** | **string**| Data de inclusão inicial | [optional] |
| **dataCriacaoFinal** | **string**| Data de inclusão final | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesGet200Response**](../Model/ProdutosLotesGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesIdLoteGet()`

```php
produtosLotesIdLoteGet($idLote): \Eloom\BlingApi\Model\ProdutosLotesIdLoteGet200Response
```

Obtém um lote de um produto

Obtém um lote de um produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLote = 12345678; // int | ID do lote

try {
    $result = $apiInstance->produtosLotesIdLoteGet($idLote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesIdLoteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLote** | **int**| ID do lote | |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesIdLoteGet200Response**](../Model/ProdutosLotesIdLoteGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `produtosLotesIdLotePut()`

```php
produtosLotesIdLotePut($idLote, $lotePutRequestDTO)
```

Altera um lote de um produto

Altera um lote de um produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLote = 12345678; // int | ID do lote
$lotePutRequestDTO = new \Eloom\BlingApi\Model\LotePutRequestDTO(); // \Eloom\BlingApi\Model\LotePutRequestDTO

try {
    $apiInstance->produtosLotesIdLotePut($idLote, $lotePutRequestDTO);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesIdLotePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLote** | **int**| ID do lote | |
| **lotePutRequestDTO** | [**\Eloom\BlingApi\Model\LotePutRequestDTO**](../Model/LotePutRequestDTO.md)|  | |

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

## `produtosLotesIdLoteStatusPatch()`

```php
produtosLotesIdLoteStatusPatch($idLote, $loteStatusDTO)
```

Altera o status de um lote do produto

Altera o status de um lote do produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLote = 12345678; // int | ID do lote
$loteStatusDTO = new \Eloom\BlingApi\Model\LoteStatusDTO(); // \Eloom\BlingApi\Model\LoteStatusDTO

try {
    $apiInstance->produtosLotesIdLoteStatusPatch($idLote, $loteStatusDTO);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesIdLoteStatusPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLote** | **int**| ID do lote | |
| **loteStatusDTO** | [**\Eloom\BlingApi\Model\LoteStatusDTO**](../Model/LoteStatusDTO.md)|  | [optional] |

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

## `produtosLotesPut()`

```php
produtosLotesPut($lotesDTO): \Eloom\BlingApi\Model\ProdutosLotesPut200Response
```

Salva lotes de produtos

Cria/altera lotes de produtos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ProdutosLotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lotesDTO = array(new \Eloom\BlingApi\Model\LotesDTO()); // \Eloom\BlingApi\Model\LotesDTO[]

try {
    $result = $apiInstance->produtosLotesPut($lotesDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdutosLotesApi->produtosLotesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lotesDTO** | [**\Eloom\BlingApi\Model\LotesDTO[]**](../Model/LotesDTO.md)|  | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ProdutosLotesPut200Response**](../Model/ProdutosLotesPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
