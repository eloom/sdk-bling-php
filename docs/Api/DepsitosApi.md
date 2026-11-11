# Eloom\BlingApi\DepsitosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**depositosGet()**](DepsitosApi.md#depositosGet) | **GET** /depositos | Obtém depósitos |
| [**depositosIdDepositoGet()**](DepsitosApi.md#depositosIdDepositoGet) | **GET** /depositos/{idDeposito} | Obtém um depósito |
| [**depositosIdDepositoPut()**](DepsitosApi.md#depositosIdDepositoPut) | **PUT** /depositos/{idDeposito} | Altera um depósito |
| [**depositosPost()**](DepsitosApi.md#depositosPost) | **POST** /depositos | Cria um depósito |


## `depositosGet()`

```php
depositosGet($pagina, $limite, $descricao, $situacao): \Eloom\BlingApi\Model\DepositosGet200Response
```

Obtém depósitos

Obtém depósitos paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\DepsitosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$descricao = Geral; // string | Descrição do depósito
$situacao = 1; // int | `0` Inativo <br> `1` Ativo

try {
    $result = $apiInstance->depositosGet($pagina, $limite, $descricao, $situacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepsitosApi->depositosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **descricao** | **string**| Descrição do depósito | [optional] |
| **situacao** | **int**| &#x60;0&#x60; Inativo &lt;br&gt; &#x60;1&#x60; Ativo | [optional] [default to 1] |

### Return type

[**\Eloom\BlingApi\Model\DepositosGet200Response**](../Model/DepositosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositosIdDepositoGet()`

```php
depositosIdDepositoGet($idDeposito): \Eloom\BlingApi\Model\DepositosIdDepositoGet200Response
```

Obtém um depósito

Obtém um depósito pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\DepsitosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idDeposito = 12345678; // int | ID do depósito

try {
    $result = $apiInstance->depositosIdDepositoGet($idDeposito);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepsitosApi->depositosIdDepositoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idDeposito** | **int**| ID do depósito | |

### Return type

[**\Eloom\BlingApi\Model\DepositosIdDepositoGet200Response**](../Model/DepositosIdDepositoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositosIdDepositoPut()`

```php
depositosIdDepositoPut($idDeposito, $depositosDadosDTO): \Eloom\BlingApi\Model\DepositosIdDepositoPut200Response
```

Altera um depósito

Altera um depósito pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\DepsitosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idDeposito = 12345678; // int | ID do depósito
$depositosDadosDTO = new \Eloom\BlingApi\Model\DepositosDadosDTO(); // \Eloom\BlingApi\Model\DepositosDadosDTO

try {
    $result = $apiInstance->depositosIdDepositoPut($idDeposito, $depositosDadosDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepsitosApi->depositosIdDepositoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idDeposito** | **int**| ID do depósito | |
| **depositosDadosDTO** | [**\Eloom\BlingApi\Model\DepositosDadosDTO**](../Model/DepositosDadosDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\DepositosIdDepositoPut200Response**](../Model/DepositosIdDepositoPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositosPost()`

```php
depositosPost($depositosDadosDTO): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria um depósito

Cria um depósito. Até 100 depósitos podem ser criados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\DepsitosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$depositosDadosDTO = new \Eloom\BlingApi\Model\DepositosDadosDTO(); // \Eloom\BlingApi\Model\DepositosDadosDTO

try {
    $result = $apiInstance->depositosPost($depositosDadosDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepsitosApi->depositosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **depositosDadosDTO** | [**\Eloom\BlingApi\Model\DepositosDadosDTO**](../Model/DepositosDadosDTO.md)|  | |

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
