# Eloom\BlingApi\BordersApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**borderosIdBorderoDelete()**](BordersApi.md#borderosIdBorderoDelete) | **DELETE** /borderos/{idBordero} | Remove um borderô |
| [**borderosIdBorderoGet()**](BordersApi.md#borderosIdBorderoGet) | **GET** /borderos/{idBordero} | Obtém um borderô |


## `borderosIdBorderoDelete()`

```php
borderosIdBorderoDelete($idBordero)
```

Remove um borderô

Remove um borderô pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\BordersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idBordero = 56; // int | ID do bordero

try {
    $apiInstance->borderosIdBorderoDelete($idBordero);
} catch (Exception $e) {
    echo 'Exception when calling BordersApi->borderosIdBorderoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idBordero** | **int**| ID do bordero | |

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

## `borderosIdBorderoGet()`

```php
borderosIdBorderoGet($idBordero): \Eloom\BlingApi\Model\BorderosIdBorderoGet200Response
```

Obtém um borderô

Obtém um borderô pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\BordersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idBordero = 56; // int | ID do bordero

try {
    $result = $apiInstance->borderosIdBorderoGet($idBordero);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BordersApi->borderosIdBorderoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idBordero** | **int**| ID do bordero | |

### Return type

[**\Eloom\BlingApi\Model\BorderosIdBorderoGet200Response**](../Model/BorderosIdBorderoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
