# Eloom\BlingApi\LogsticasRemessasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logisticasIdLogisticaRemessasGet()**](LogsticasRemessasApi.md#logisticasIdLogisticaRemessasGet) | **GET** /logisticas/{idLogistica}/remessas | Obtém as remessas de postagem de uma logística |
| [**logisticasRemessasIdRemessaDelete()**](LogsticasRemessasApi.md#logisticasRemessasIdRemessaDelete) | **DELETE** /logisticas/remessas/{idRemessa} | Remove uma remessa de postagem |
| [**logisticasRemessasIdRemessaGet()**](LogsticasRemessasApi.md#logisticasRemessasIdRemessaGet) | **GET** /logisticas/remessas/{idRemessa} | Obtém uma remessa de postagem |
| [**logisticasRemessasIdRemessaPut()**](LogsticasRemessasApi.md#logisticasRemessasIdRemessaPut) | **PUT** /logisticas/remessas/{idRemessa} | Altera uma remessa de postagem |
| [**logisticasRemessasPost()**](LogsticasRemessasApi.md#logisticasRemessasPost) | **POST** /logisticas/remessas | Cria uma remessa de postagem de uma logística |


## `logisticasIdLogisticaRemessasGet()`

```php
logisticasIdLogisticaRemessasGet($idLogistica, $situacao): \Eloom\BlingApi\Model\LogisticasIdLogisticaRemessasGet200Response
```

Obtém as remessas de postagem de uma logística

Obtém as remessas de postagem de uma logística pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasRemessasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogistica = 12345678; // int | ID da logística
$situacao = 0; // int | Filtro obrigatório de situação da remessa.

try {
    $result = $apiInstance->logisticasIdLogisticaRemessasGet($idLogistica, $situacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasRemessasApi->logisticasIdLogisticaRemessasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogistica** | **int**| ID da logística | |
| **situacao** | **int**| Filtro obrigatório de situação da remessa. | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasIdLogisticaRemessasGet200Response**](../Model/LogisticasIdLogisticaRemessasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasRemessasIdRemessaDelete()`

```php
logisticasRemessasIdRemessaDelete($idRemessa)
```

Remove uma remessa de postagem

Remove uma remessa de postagem pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasRemessasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idRemessa = 12345678; // int | ID da remessa de postagem

try {
    $apiInstance->logisticasRemessasIdRemessaDelete($idRemessa);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasRemessasApi->logisticasRemessasIdRemessaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idRemessa** | **int**| ID da remessa de postagem | |

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

## `logisticasRemessasIdRemessaGet()`

```php
logisticasRemessasIdRemessaGet($idRemessa): \Eloom\BlingApi\Model\LogisticasRemessasIdRemessaGet200Response
```

Obtém uma remessa de postagem

Obtém uma remessa de postagem pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasRemessasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idRemessa = 12345678; // int | ID da remessa de postagem

try {
    $result = $apiInstance->logisticasRemessasIdRemessaGet($idRemessa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasRemessasApi->logisticasRemessasIdRemessaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idRemessa** | **int**| ID da remessa de postagem | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasRemessasIdRemessaGet200Response**](../Model/LogisticasRemessasIdRemessaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasRemessasIdRemessaPut()`

```php
logisticasRemessasIdRemessaPut($idRemessa, $logisticasRemessasDadosBaseDTOCommon): \Eloom\BlingApi\Model\LogisticasRemessasIdRemessaPut200Response
```

Altera uma remessa de postagem

Altera uma remessa de postagem pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasRemessasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idRemessa = 12345678; // int | ID da remessa de postagem
$logisticasRemessasDadosBaseDTOCommon = new \Eloom\BlingApi\Model\LogisticasRemessasDadosBaseDTOCommon(); // \Eloom\BlingApi\Model\LogisticasRemessasDadosBaseDTOCommon

try {
    $result = $apiInstance->logisticasRemessasIdRemessaPut($idRemessa, $logisticasRemessasDadosBaseDTOCommon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasRemessasApi->logisticasRemessasIdRemessaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idRemessa** | **int**| ID da remessa de postagem | |
| **logisticasRemessasDadosBaseDTOCommon** | [**\Eloom\BlingApi\Model\LogisticasRemessasDadosBaseDTOCommon**](../Model/LogisticasRemessasDadosBaseDTOCommon.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasRemessasIdRemessaPut200Response**](../Model/LogisticasRemessasIdRemessaPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasRemessasPost()`

```php
logisticasRemessasPost($logisticasRemessasDadosPostDTO): \Eloom\BlingApi\Model\LogisticasRemessasIdRemessaPut200Response
```

Cria uma remessa de postagem de uma logística

Cria uma remessa de postagem de uma logística.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasRemessasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logisticasRemessasDadosPostDTO = new \Eloom\BlingApi\Model\LogisticasRemessasDadosPostDTO(); // \Eloom\BlingApi\Model\LogisticasRemessasDadosPostDTO

try {
    $result = $apiInstance->logisticasRemessasPost($logisticasRemessasDadosPostDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasRemessasApi->logisticasRemessasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **logisticasRemessasDadosPostDTO** | [**\Eloom\BlingApi\Model\LogisticasRemessasDadosPostDTO**](../Model/LogisticasRemessasDadosPostDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasRemessasIdRemessaPut200Response**](../Model/LogisticasRemessasIdRemessaPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
