# Eloom\BlingApi\UsuriosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usuariosRecuperarSenhaPost()**](UsuriosApi.md#usuariosRecuperarSenhaPost) | **POST** /usuarios/recuperar-senha | Envia solicitação de recuperação de senha |
| [**usuariosRedefinirSenhaPatch()**](UsuriosApi.md#usuariosRedefinirSenhaPatch) | **PATCH** /usuarios/redefinir-senha | Redefine senha do usuário |
| [**usuariosVerificarHashGet()**](UsuriosApi.md#usuariosVerificarHashGet) | **GET** /usuarios/verificar-hash | Valida o hash recebido |


## `usuariosRecuperarSenhaPost()`

```php
usuariosRecuperarSenhaPost($body): \Eloom\BlingApi\Model\UsuariosRecuperarSenhaPost200Response
```

Envia solicitação de recuperação de senha

Envia solicitação de recuperação de senha por e-mail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\UsuriosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = NULL; // mixed

try {
    $result = $apiInstance->usuariosRecuperarSenhaPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuriosApi->usuariosRecuperarSenhaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | |

### Return type

[**\Eloom\BlingApi\Model\UsuariosRecuperarSenhaPost200Response**](../Model/UsuariosRecuperarSenhaPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usuariosRedefinirSenhaPatch()`

```php
usuariosRedefinirSenhaPatch($body)
```

Redefine senha do usuário

Redefine senha do usuário utilizando token enviado por e-mail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\UsuriosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = NULL; // mixed

try {
    $apiInstance->usuariosRedefinirSenhaPatch($body);
} catch (Exception $e) {
    echo 'Exception when calling UsuriosApi->usuariosRedefinirSenhaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | |

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

## `usuariosVerificarHashGet()`

```php
usuariosVerificarHashGet($hash): \Eloom\BlingApi\Model\UsuariosVerificarHashGet200Response
```

Valida o hash recebido

Valida o hash recebido por e-mail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\UsuriosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = da24312119016fab3d3e8bf52409db4b; // string

try {
    $result = $apiInstance->usuariosVerificarHashGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsuriosApi->usuariosVerificarHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**|  | |

### Return type

[**\Eloom\BlingApi\Model\UsuariosVerificarHashGet200Response**](../Model/UsuariosVerificarHashGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
