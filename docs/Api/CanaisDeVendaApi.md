# Eloom\BlingApi\CanaisDeVendaApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canaisVendaGet()**](CanaisDeVendaApi.md#canaisVendaGet) | **GET** /canais-venda | Obtém canais de venda |
| [**canaisVendaIdCanalVendaGet()**](CanaisDeVendaApi.md#canaisVendaIdCanalVendaGet) | **GET** /canais-venda/{idCanalVenda} | Obtém um canal de venda |
| [**canaisVendaTiposGet()**](CanaisDeVendaApi.md#canaisVendaTiposGet) | **GET** /canais-venda/tipos | Obtém os tipos de canais de venda |


## `canaisVendaGet()`

```php
canaisVendaGet($pagina, $limite, $tipos, $situacao, $agrupador): \Eloom\BlingApi\Model\CanaisVendaGet200Response
```

Obtém canais de venda

Obtém canais de venda paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CanaisDeVendaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$tipos = ["LojaIntegrada","Shopee"]; // string[] | Parâmetro para filtrar os registros através de uma lista de tipos de canal de venda.
$situacao = 56; // int | Parâmetro para filtrar os registros através da situação<br> `1` Habilitado<br> `2` Desabilitado
$agrupador = 1; // int | Agrupador do canal de venda<br> `1` Loja virtual<br> `2` Hub<br> `3` Marketplace<br> `4` API

try {
    $result = $apiInstance->canaisVendaGet($pagina, $limite, $tipos, $situacao, $agrupador);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanaisDeVendaApi->canaisVendaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **tipos** | [**string[]**](../Model/string.md)| Parâmetro para filtrar os registros através de uma lista de tipos de canal de venda. | [optional] |
| **situacao** | **int**| Parâmetro para filtrar os registros através da situação&lt;br&gt; &#x60;1&#x60; Habilitado&lt;br&gt; &#x60;2&#x60; Desabilitado | [optional] |
| **agrupador** | **int**| Agrupador do canal de venda&lt;br&gt; &#x60;1&#x60; Loja virtual&lt;br&gt; &#x60;2&#x60; Hub&lt;br&gt; &#x60;3&#x60; Marketplace&lt;br&gt; &#x60;4&#x60; API | [optional] |

### Return type

[**\Eloom\BlingApi\Model\CanaisVendaGet200Response**](../Model/CanaisVendaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canaisVendaIdCanalVendaGet()`

```php
canaisVendaIdCanalVendaGet($idCanalVenda): \Eloom\BlingApi\Model\CanaisVendaIdCanalVendaGet200Response
```

Obtém um canal de venda

Obtém uma canal de venda pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CanaisDeVendaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCanalVenda = 12345678; // int | ID do canal de venda

try {
    $result = $apiInstance->canaisVendaIdCanalVendaGet($idCanalVenda);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanaisDeVendaApi->canaisVendaIdCanalVendaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCanalVenda** | **int**| ID do canal de venda | |

### Return type

[**\Eloom\BlingApi\Model\CanaisVendaIdCanalVendaGet200Response**](../Model/CanaisVendaIdCanalVendaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canaisVendaTiposGet()`

```php
canaisVendaTiposGet($agrupador): \Eloom\BlingApi\Model\CanaisVendaTiposGet200Response
```

Obtém os tipos de canais de venda

Obtém os tipos de canais de venda paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CanaisDeVendaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agrupador = 1; // int | Agrupador do canal de venda<br> `1` Loja virtual<br> `2` Hub<br> `3` Marketplace<br> `4` API

try {
    $result = $apiInstance->canaisVendaTiposGet($agrupador);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CanaisDeVendaApi->canaisVendaTiposGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agrupador** | **int**| Agrupador do canal de venda&lt;br&gt; &#x60;1&#x60; Loja virtual&lt;br&gt; &#x60;2&#x60; Hub&lt;br&gt; &#x60;3&#x60; Marketplace&lt;br&gt; &#x60;4&#x60; API | [optional] |

### Return type

[**\Eloom\BlingApi\Model\CanaisVendaTiposGet200Response**](../Model/CanaisVendaTiposGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
