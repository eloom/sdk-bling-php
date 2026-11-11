# Eloom\BlingApi\EmpresasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**empresasMeDadosBasicosGet()**](EmpresasApi.md#empresasMeDadosBasicosGet) | **GET** /empresas/me/dados-basicos | Obtém dados básicos da empresa |


## `empresasMeDadosBasicosGet()`

```php
empresasMeDadosBasicosGet(): \Eloom\BlingApi\Model\EmpresasMeDadosBasicosGet200Response
```

Obtém dados básicos da empresa

Obtém CNPJ, razão social e e-mail da empresa.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->empresasMeDadosBasicosGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->empresasMeDadosBasicosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\EmpresasMeDadosBasicosGet200Response**](../Model/EmpresasMeDadosBasicosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
