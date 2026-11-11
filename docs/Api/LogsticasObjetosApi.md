# Eloom\BlingApi\LogsticasObjetosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logisticasObjetosIdObjetoDelete()**](LogsticasObjetosApi.md#logisticasObjetosIdObjetoDelete) | **DELETE** /logisticas/objetos/{idObjeto} | Remove um objeto de logística personalizada |
| [**logisticasObjetosIdObjetoGet()**](LogsticasObjetosApi.md#logisticasObjetosIdObjetoGet) | **GET** /logisticas/objetos/{idObjeto} | Obtém um objeto de logística |
| [**logisticasObjetosIdObjetoPut()**](LogsticasObjetosApi.md#logisticasObjetosIdObjetoPut) | **PUT** /logisticas/objetos/{idObjeto} | Altera um objeto de logística pelo ID |
| [**logisticasObjetosPost()**](LogsticasObjetosApi.md#logisticasObjetosPost) | **POST** /logisticas/objetos | Cria um objeto de logística |


## `logisticasObjetosIdObjetoDelete()`

```php
logisticasObjetosIdObjetoDelete($idObjeto)
```

Remove um objeto de logística personalizada

Remove um objeto de logística personalizada que não esteja em uma PLP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasObjetosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idObjeto = 12345678; // int | ID do objeto logístico

try {
    $apiInstance->logisticasObjetosIdObjetoDelete($idObjeto);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasObjetosApi->logisticasObjetosIdObjetoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idObjeto** | **int**| ID do objeto logístico | |

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

## `logisticasObjetosIdObjetoGet()`

```php
logisticasObjetosIdObjetoGet($idObjeto): \Eloom\BlingApi\Model\LogisticasObjetosIdObjetoGet200Response
```

Obtém um objeto de logística

Obtém um objeto de logística pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasObjetosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idObjeto = 12345678; // int | ID do objeto logístico

try {
    $result = $apiInstance->logisticasObjetosIdObjetoGet($idObjeto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasObjetosApi->logisticasObjetosIdObjetoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idObjeto** | **int**| ID do objeto logístico | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasObjetosIdObjetoGet200Response**](../Model/LogisticasObjetosIdObjetoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasObjetosIdObjetoPut()`

```php
logisticasObjetosIdObjetoPut($idObjeto, $logisticasObjetosUpdateRequestDTO): \Eloom\BlingApi\Model\LogisticasObjetosIdObjetoPut200Response
```

Altera um objeto de logística pelo ID

Altera dados de um objeto de logística personalizada pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasObjetosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idObjeto = 12345678; // int | ID do objeto logístico
$logisticasObjetosUpdateRequestDTO = new \Eloom\BlingApi\Model\LogisticasObjetosUpdateRequestDTO(); // \Eloom\BlingApi\Model\LogisticasObjetosUpdateRequestDTO

try {
    $result = $apiInstance->logisticasObjetosIdObjetoPut($idObjeto, $logisticasObjetosUpdateRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasObjetosApi->logisticasObjetosIdObjetoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idObjeto** | **int**| ID do objeto logístico | |
| **logisticasObjetosUpdateRequestDTO** | [**\Eloom\BlingApi\Model\LogisticasObjetosUpdateRequestDTO**](../Model/LogisticasObjetosUpdateRequestDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasObjetosIdObjetoPut200Response**](../Model/LogisticasObjetosIdObjetoPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasObjetosPost()`

```php
logisticasObjetosPost($logisticasObjetosDadosCreateRequestDTO): \Eloom\BlingApi\Model\LogisticasObjetosIdObjetoPut200Response
```

Cria um objeto de logística

Cria um objeto de logística personalizada.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasObjetosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logisticasObjetosDadosCreateRequestDTO = new \Eloom\BlingApi\Model\LogisticasObjetosDadosCreateRequestDTO(); // \Eloom\BlingApi\Model\LogisticasObjetosDadosCreateRequestDTO

try {
    $result = $apiInstance->logisticasObjetosPost($logisticasObjetosDadosCreateRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasObjetosApi->logisticasObjetosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **logisticasObjetosDadosCreateRequestDTO** | [**\Eloom\BlingApi\Model\LogisticasObjetosDadosCreateRequestDTO**](../Model/LogisticasObjetosDadosCreateRequestDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasObjetosIdObjetoPut200Response**](../Model/LogisticasObjetosIdObjetoPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
