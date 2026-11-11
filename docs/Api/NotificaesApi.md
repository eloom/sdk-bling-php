# Eloom\BlingApi\NotificaesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notificacoesGet()**](NotificaesApi.md#notificacoesGet) | **GET** /notificacoes | Obtém todas as notificações de uma empresa em um período |
| [**notificacoesIdNotificacaoConfirmarLeituraPost()**](NotificaesApi.md#notificacoesIdNotificacaoConfirmarLeituraPost) | **POST** /notificacoes/{idNotificacao}/confirmar-leitura | Marca notificação como lida |
| [**notificacoesQuantidadeGet()**](NotificaesApi.md#notificacoesQuantidadeGet) | **GET** /notificacoes/quantidade | Obtém a quantidade de notificações de uma empresa em um período |


## `notificacoesGet()`

```php
notificacoesGet($periodo): \Eloom\BlingApi\Model\NotificacoesGet200Response
```

Obtém todas as notificações de uma empresa em um período

Obtém todas as notificações de uma empresa no período informado. Caso período não seja informado, será considerado o ano atual.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotificaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$periodo = 2023-01; // string | Apenas ano ou ano e mês em que a empresa foi notificada. Caso não informado, será utilizado o ano atual.

try {
    $result = $apiInstance->notificacoesGet($periodo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificaesApi->notificacoesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **periodo** | **string**| Apenas ano ou ano e mês em que a empresa foi notificada. Caso não informado, será utilizado o ano atual. | [optional] |

### Return type

[**\Eloom\BlingApi\Model\NotificacoesGet200Response**](../Model/NotificacoesGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificacoesIdNotificacaoConfirmarLeituraPost()`

```php
notificacoesIdNotificacaoConfirmarLeituraPost($idNotificacao): \Eloom\BlingApi\Model\NotificacoesGet200Response
```

Marca notificação como lida

Marca a notificação relacionada à empresa como lida.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotificaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotificacao = 01ARZ3NDEKTSV4RRFFQ69G5FAV; // string | ULID da notificação.

try {
    $result = $apiInstance->notificacoesIdNotificacaoConfirmarLeituraPost($idNotificacao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificaesApi->notificacoesIdNotificacaoConfirmarLeituraPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotificacao** | **string**| ULID da notificação. | |

### Return type

[**\Eloom\BlingApi\Model\NotificacoesGet200Response**](../Model/NotificacoesGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notificacoesQuantidadeGet()`

```php
notificacoesQuantidadeGet($periodo): \Eloom\BlingApi\Model\NotificacoesQuantidadeGet200Response
```

Obtém a quantidade de notificações de uma empresa em um período

Obtém a quantidade de notificações de uma empresa no período informado. Caso período não seja informado, será considerado o ano atual.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotificaesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$periodo = 2023-01; // string | Apenas ano ou ano e mês em que a empresa foi notificada. Caso não informado, será utilizado o ano atual.

try {
    $result = $apiInstance->notificacoesQuantidadeGet($periodo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificaesApi->notificacoesQuantidadeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **periodo** | **string**| Apenas ano ou ano e mês em que a empresa foi notificada. Caso não informado, será utilizado o ano atual. | [optional] |

### Return type

[**\Eloom\BlingApi\Model\NotificacoesQuantidadeGet200Response**](../Model/NotificacoesQuantidadeGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
