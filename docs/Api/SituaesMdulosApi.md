# Eloom\BlingApi\SituaesMdulosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**situacoesModulosGet()**](SituaesMdulosApi.md#situacoesModulosGet) | **GET** /situacoes/modulos | Obtém módulos |
| [**situacoesModulosIdModuloSistemaAcoesGet()**](SituaesMdulosApi.md#situacoesModulosIdModuloSistemaAcoesGet) | **GET** /situacoes/modulos/{idModuloSistema}/acoes | Obtém as ações de um módulo |
| [**situacoesModulosIdModuloSistemaGet()**](SituaesMdulosApi.md#situacoesModulosIdModuloSistemaGet) | **GET** /situacoes/modulos/{idModuloSistema} | Obtém situações de um módulo |
| [**situacoesModulosIdModuloSistemaTransicoesGet()**](SituaesMdulosApi.md#situacoesModulosIdModuloSistemaTransicoesGet) | **GET** /situacoes/modulos/{idModuloSistema}/transicoes | Obtém as transições de um módulo |


## `situacoesModulosGet()`

```php
situacoesModulosGet(): \Eloom\BlingApi\Model\SituacoesModulosGet200Response
```

Obtém módulos

Obtém módulos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesMdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->situacoesModulosGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesMdulosApi->situacoesModulosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\SituacoesModulosGet200Response**](../Model/SituacoesModulosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesModulosIdModuloSistemaAcoesGet()`

```php
situacoesModulosIdModuloSistemaAcoesGet($idModuloSistema): \Eloom\BlingApi\Model\SituacoesModulosIdModuloSistemaAcoesGet200Response
```

Obtém as ações de um módulo

Obtém as ações de um módulo pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesMdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idModuloSistema = 12345678; // int | ID do módulo do sistema

try {
    $result = $apiInstance->situacoesModulosIdModuloSistemaAcoesGet($idModuloSistema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesMdulosApi->situacoesModulosIdModuloSistemaAcoesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idModuloSistema** | **int**| ID do módulo do sistema | |

### Return type

[**\Eloom\BlingApi\Model\SituacoesModulosIdModuloSistemaAcoesGet200Response**](../Model/SituacoesModulosIdModuloSistemaAcoesGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesModulosIdModuloSistemaGet()`

```php
situacoesModulosIdModuloSistemaGet($idModuloSistema): \Eloom\BlingApi\Model\SituacoesModulosIdModuloSistemaGet200Response
```

Obtém situações de um módulo

Obtém situações de um módulo pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesMdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idModuloSistema = 12345678; // int | ID do módulo do sistema

try {
    $result = $apiInstance->situacoesModulosIdModuloSistemaGet($idModuloSistema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesMdulosApi->situacoesModulosIdModuloSistemaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idModuloSistema** | **int**| ID do módulo do sistema | |

### Return type

[**\Eloom\BlingApi\Model\SituacoesModulosIdModuloSistemaGet200Response**](../Model/SituacoesModulosIdModuloSistemaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `situacoesModulosIdModuloSistemaTransicoesGet()`

```php
situacoesModulosIdModuloSistemaTransicoesGet($idModuloSistema): \Eloom\BlingApi\Model\SituacoesModulosIdModuloSistemaTransicoesGet200Response
```

Obtém as transições de um módulo

Obtém as transições de um módulo pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\SituaesMdulosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idModuloSistema = 12345678; // int | ID do módulo do sistema

try {
    $result = $apiInstance->situacoesModulosIdModuloSistemaTransicoesGet($idModuloSistema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SituaesMdulosApi->situacoesModulosIdModuloSistemaTransicoesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idModuloSistema** | **int**| ID do módulo do sistema | |

### Return type

[**\Eloom\BlingApi\Model\SituacoesModulosIdModuloSistemaTransicoesGet200Response**](../Model/SituacoesModulosIdModuloSistemaTransicoesGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
