# Eloom\BlingApi\DocumentosCompartilhadosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call2f50b253b22d2d84e39cad9beb844da1()**](DocumentosCompartilhadosApi.md#call2f50b253b22d2d84e39cad9beb844da1) | **GET** /documentos-compartilhados/{token} | Obtém um documento compartilhado. |


## `call2f50b253b22d2d84e39cad9beb844da1()`

```php
call2f50b253b22d2d84e39cad9beb844da1($token)
```

Obtém um documento compartilhado.

Obtém um documento compartilhado pelo token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\DocumentosCompartilhadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = eyJkaWQiOjEyMzQ1Nn0.abc123xyz; // string | Token HMAC assinado contendo os dados do documento e prazo de validade.

try {
    $apiInstance->call2f50b253b22d2d84e39cad9beb844da1($token);
} catch (Exception $e) {
    echo 'Exception when calling DocumentosCompartilhadosApi->call2f50b253b22d2d84e39cad9beb844da1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Token HMAC assinado contendo os dados do documento e prazo de validade. | |

### Return type

void (empty response body)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
