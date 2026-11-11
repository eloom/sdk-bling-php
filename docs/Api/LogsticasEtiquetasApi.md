# Eloom\BlingApi\LogsticasEtiquetasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logisticasEtiquetasGet()**](LogsticasEtiquetasApi.md#logisticasEtiquetasGet) | **GET** /logisticas/etiquetas | Obtém etiquetas das vendas |


## `logisticasEtiquetasGet()`

```php
logisticasEtiquetasGet($formato, $idsVendas): \Eloom\BlingApi\Model\LogisticasEtiquetasGet200Response
```

Obtém etiquetas das vendas

Obtém as etiquetas dos pedidos de venda a partir dos ID's dos pedidos. No momento, o filtro está limitado para apenas um ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasEtiquetasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formato = 'formato_example'; // string | Parâmetro para definir o formato do arquivo de impressão.<br> `PDF` - Formato PDF<br> `ZPL` - Formato ZPL
$idsVendas = [6423806085,6423806084]; // int[] | IDs dos pedidos de venda para impressão

try {
    $result = $apiInstance->logisticasEtiquetasGet($formato, $idsVendas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasEtiquetasApi->logisticasEtiquetasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **formato** | **string**| Parâmetro para definir o formato do arquivo de impressão.&lt;br&gt; &#x60;PDF&#x60; - Formato PDF&lt;br&gt; &#x60;ZPL&#x60; - Formato ZPL | |
| **idsVendas** | [**int[]**](../Model/int.md)| IDs dos pedidos de venda para impressão | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasEtiquetasGet200Response**](../Model/LogisticasEtiquetasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
