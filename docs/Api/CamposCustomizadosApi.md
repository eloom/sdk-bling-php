# Eloom\BlingApi\CamposCustomizadosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**camposCustomizadosIdCampoCustomizadoDelete()**](CamposCustomizadosApi.md#camposCustomizadosIdCampoCustomizadoDelete) | **DELETE** /campos-customizados/{idCampoCustomizado} | Remove um campo customizado |
| [**camposCustomizadosIdCampoCustomizadoGet()**](CamposCustomizadosApi.md#camposCustomizadosIdCampoCustomizadoGet) | **GET** /campos-customizados/{idCampoCustomizado} | Obtém um campo customizado |
| [**camposCustomizadosIdCampoCustomizadoPut()**](CamposCustomizadosApi.md#camposCustomizadosIdCampoCustomizadoPut) | **PUT** /campos-customizados/{idCampoCustomizado} | Altera um campo customizado |
| [**camposCustomizadosIdCampoCustomizadoSituacoesPatch()**](CamposCustomizadosApi.md#camposCustomizadosIdCampoCustomizadoSituacoesPatch) | **PATCH** /campos-customizados/{idCampoCustomizado}/situacoes | Altera a situação de um campo customizado |
| [**camposCustomizadosModulosGet()**](CamposCustomizadosApi.md#camposCustomizadosModulosGet) | **GET** /campos-customizados/modulos | Obtém módulos que possuem campos customizados |
| [**camposCustomizadosModulosIdModuloGet()**](CamposCustomizadosApi.md#camposCustomizadosModulosIdModuloGet) | **GET** /campos-customizados/modulos/{idModulo} | Obtém campos customizados por módulo |
| [**camposCustomizadosPost()**](CamposCustomizadosApi.md#camposCustomizadosPost) | **POST** /campos-customizados | Cria um campo customizado |
| [**camposCustomizadosTiposGet()**](CamposCustomizadosApi.md#camposCustomizadosTiposGet) | **GET** /campos-customizados/tipos | Obtém tipos de campos customizados |


## `camposCustomizadosIdCampoCustomizadoDelete()`

```php
camposCustomizadosIdCampoCustomizadoDelete($idCampoCustomizado)
```

Remove um campo customizado

Remove um campo customizado pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCampoCustomizado = 12345678; // int | ID do campo customizado

try {
    $apiInstance->camposCustomizadosIdCampoCustomizadoDelete($idCampoCustomizado);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosIdCampoCustomizadoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCampoCustomizado** | **int**| ID do campo customizado | |

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

## `camposCustomizadosIdCampoCustomizadoGet()`

```php
camposCustomizadosIdCampoCustomizadoGet($idCampoCustomizado): \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoGet200Response
```

Obtém um campo customizado

Obtém um campo customizado pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCampoCustomizado = 12345678; // int | ID do campo customizado

try {
    $result = $apiInstance->camposCustomizadosIdCampoCustomizadoGet($idCampoCustomizado);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosIdCampoCustomizadoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCampoCustomizado** | **int**| ID do campo customizado | |

### Return type

[**\Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoGet200Response**](../Model/CamposCustomizadosIdCampoCustomizadoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `camposCustomizadosIdCampoCustomizadoPut()`

```php
camposCustomizadosIdCampoCustomizadoPut($idCampoCustomizado, $camposCustomizadosIdCampoCustomizadoPutRequest): \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPut200Response
```

Altera um campo customizado

Altera um campo customizado pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCampoCustomizado = 12345678; // int | ID do campo customizado
$camposCustomizadosIdCampoCustomizadoPutRequest = new \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPutRequest(); // \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPutRequest

try {
    $result = $apiInstance->camposCustomizadosIdCampoCustomizadoPut($idCampoCustomizado, $camposCustomizadosIdCampoCustomizadoPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosIdCampoCustomizadoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCampoCustomizado** | **int**| ID do campo customizado | |
| **camposCustomizadosIdCampoCustomizadoPutRequest** | [**\Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPutRequest**](../Model/CamposCustomizadosIdCampoCustomizadoPutRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPut200Response**](../Model/CamposCustomizadosIdCampoCustomizadoPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `camposCustomizadosIdCampoCustomizadoSituacoesPatch()`

```php
camposCustomizadosIdCampoCustomizadoSituacoesPatch($idCampoCustomizado, $camposCustomizadosIdCampoCustomizadoSituacoesPatchRequest)
```

Altera a situação de um campo customizado

Altera a situação de um campo customizado pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCampoCustomizado = 12345678; // int | ID do campo customizado
$camposCustomizadosIdCampoCustomizadoSituacoesPatchRequest = new \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoSituacoesPatchRequest(); // \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoSituacoesPatchRequest

try {
    $apiInstance->camposCustomizadosIdCampoCustomizadoSituacoesPatch($idCampoCustomizado, $camposCustomizadosIdCampoCustomizadoSituacoesPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosIdCampoCustomizadoSituacoesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCampoCustomizado** | **int**| ID do campo customizado | |
| **camposCustomizadosIdCampoCustomizadoSituacoesPatchRequest** | [**\Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoSituacoesPatchRequest**](../Model/CamposCustomizadosIdCampoCustomizadoSituacoesPatchRequest.md)|  | |

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

## `camposCustomizadosModulosGet()`

```php
camposCustomizadosModulosGet(): \Eloom\BlingApi\Model\CamposCustomizadosModulosGet200Response
```

Obtém módulos que possuem campos customizados

Obtém módulos que possuem campos customizados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->camposCustomizadosModulosGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosModulosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\CamposCustomizadosModulosGet200Response**](../Model/CamposCustomizadosModulosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `camposCustomizadosModulosIdModuloGet()`

```php
camposCustomizadosModulosIdModuloGet($idModulo, $pagina, $limite): \Eloom\BlingApi\Model\CamposCustomizadosModulosIdModuloGet200Response
```

Obtém campos customizados por módulo

Obtém campos customizados por módulo paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idModulo = 12345678; // int | 
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página

try {
    $result = $apiInstance->camposCustomizadosModulosIdModuloGet($idModulo, $pagina, $limite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosModulosIdModuloGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idModulo** | **int**|  | |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |

### Return type

[**\Eloom\BlingApi\Model\CamposCustomizadosModulosIdModuloGet200Response**](../Model/CamposCustomizadosModulosIdModuloGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `camposCustomizadosPost()`

```php
camposCustomizadosPost($camposCustomizadosIdCampoCustomizadoGet200ResponseData): \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPut200Response
```

Cria um campo customizado

Cria um campo customizado.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$camposCustomizadosIdCampoCustomizadoGet200ResponseData = new \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoGet200ResponseData(); // \Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoGet200ResponseData

try {
    $result = $apiInstance->camposCustomizadosPost($camposCustomizadosIdCampoCustomizadoGet200ResponseData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **camposCustomizadosIdCampoCustomizadoGet200ResponseData** | [**\Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoGet200ResponseData**](../Model/CamposCustomizadosIdCampoCustomizadoGet200ResponseData.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CamposCustomizadosIdCampoCustomizadoPut200Response**](../Model/CamposCustomizadosIdCampoCustomizadoPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `camposCustomizadosTiposGet()`

```php
camposCustomizadosTiposGet(): \Eloom\BlingApi\Model\CamposCustomizadosTiposGet200Response
```

Obtém tipos de campos customizados

Obtém tipos de campos customizados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CamposCustomizadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->camposCustomizadosTiposGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CamposCustomizadosApi->camposCustomizadosTiposGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\CamposCustomizadosTiposGet200Response**](../Model/CamposCustomizadosTiposGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
