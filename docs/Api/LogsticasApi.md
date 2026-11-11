# Eloom\BlingApi\LogsticasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logisticasGet()**](LogsticasApi.md#logisticasGet) | **GET** /logisticas | Obtém logísticas |
| [**logisticasIdLogisticaDelete()**](LogsticasApi.md#logisticasIdLogisticaDelete) | **DELETE** /logisticas/{idLogistica} | Remove uma logística |
| [**logisticasIdLogisticaGet()**](LogsticasApi.md#logisticasIdLogisticaGet) | **GET** /logisticas/{idLogistica} | Obtém uma logística |
| [**logisticasIdLogisticaPut()**](LogsticasApi.md#logisticasIdLogisticaPut) | **PUT** /logisticas/{idLogistica} | Altera uma logística |
| [**logisticasPost()**](LogsticasApi.md#logisticasPost) | **POST** /logisticas | Cria logística |


## `logisticasGet()`

```php
logisticasGet($pagina, $limite, $tipoIntegracao, $tiposIntegracoes, $situacao, $logisticasReversas): \Eloom\BlingApi\Model\LogisticasGet200Response
```

Obtém logísticas

Obtém logísticas paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$tipoIntegracao = ''; // string | Parâmetro para filtrar os registros através do tipo da logística.
$tiposIntegracoes = ["MelhorEnvio","Correios"]; // string[] | Parâmetro para filtrar os registros através de uma lista de tipos de logística.
$situacao = 'situacao_example'; // string | Parâmetro para filtrar os registros através da situação<br> `H` Habilitado<br> `D` Desabilitado
$logisticasReversas = false; // bool | Parâmetro para filtrar apenas as logísticas que possuem serviço de reversão. É sobrescrito pelo parâmetro tipoIntegracao, caso enviado junto.

try {
    $result = $apiInstance->logisticasGet($pagina, $limite, $tipoIntegracao, $tiposIntegracoes, $situacao, $logisticasReversas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasApi->logisticasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **tipoIntegracao** | **string**| Parâmetro para filtrar os registros através do tipo da logística. | [optional] [default to &#39;&#39;] |
| **tiposIntegracoes** | [**string[]**](../Model/string.md)| Parâmetro para filtrar os registros através de uma lista de tipos de logística. | [optional] |
| **situacao** | **string**| Parâmetro para filtrar os registros através da situação&lt;br&gt; &#x60;H&#x60; Habilitado&lt;br&gt; &#x60;D&#x60; Desabilitado | [optional] |
| **logisticasReversas** | **bool**| Parâmetro para filtrar apenas as logísticas que possuem serviço de reversão. É sobrescrito pelo parâmetro tipoIntegracao, caso enviado junto. | [optional] [default to false] |

### Return type

[**\Eloom\BlingApi\Model\LogisticasGet200Response**](../Model/LogisticasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasIdLogisticaDelete()`

```php
logisticasIdLogisticaDelete($idLogistica)
```

Remove uma logística

Remove uma logística pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogistica = 12345678; // int | ID da logística

try {
    $apiInstance->logisticasIdLogisticaDelete($idLogistica);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasApi->logisticasIdLogisticaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogistica** | **int**| ID da logística | |

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

## `logisticasIdLogisticaGet()`

```php
logisticasIdLogisticaGet($idLogistica, $listarServicosInativos): \Eloom\BlingApi\Model\LogisticasIdLogisticaGet200Response
```

Obtém uma logística

Obtém uma logística pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogistica = 12345678; // int | ID da logística
$listarServicosInativos = false; // bool | Parâmetro para incluir serviços inativos na resposta.<br> `true` Inclui serviços ativos e inativos<br> `false` Inclui apenas serviços ativos (padrão)

try {
    $result = $apiInstance->logisticasIdLogisticaGet($idLogistica, $listarServicosInativos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasApi->logisticasIdLogisticaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogistica** | **int**| ID da logística | |
| **listarServicosInativos** | **bool**| Parâmetro para incluir serviços inativos na resposta.&lt;br&gt; &#x60;true&#x60; Inclui serviços ativos e inativos&lt;br&gt; &#x60;false&#x60; Inclui apenas serviços ativos (padrão) | [optional] [default to false] |

### Return type

[**\Eloom\BlingApi\Model\LogisticasIdLogisticaGet200Response**](../Model/LogisticasIdLogisticaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasIdLogisticaPut()`

```php
logisticasIdLogisticaPut($idLogistica, $logisticasDadosPutDTO)
```

Altera uma logística

Altera uma logística pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogistica = 12345678; // int | ID da logística
$logisticasDadosPutDTO = new \Eloom\BlingApi\Model\LogisticasDadosPutDTO(); // \Eloom\BlingApi\Model\LogisticasDadosPutDTO

try {
    $apiInstance->logisticasIdLogisticaPut($idLogistica, $logisticasDadosPutDTO);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasApi->logisticasIdLogisticaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogistica** | **int**| ID da logística | |
| **logisticasDadosPutDTO** | [**\Eloom\BlingApi\Model\LogisticasDadosPutDTO**](../Model/LogisticasDadosPutDTO.md)|  | |

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

## `logisticasPost()`

```php
logisticasPost($logisticasDadosPostDTO): \Eloom\BlingApi\Model\LogisticasPost201Response
```

Cria logística

Cria uma logística.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logisticasDadosPostDTO = new \Eloom\BlingApi\Model\LogisticasDadosPostDTO(); // \Eloom\BlingApi\Model\LogisticasDadosPostDTO

try {
    $result = $apiInstance->logisticasPost($logisticasDadosPostDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasApi->logisticasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **logisticasDadosPostDTO** | [**\Eloom\BlingApi\Model\LogisticasDadosPostDTO**](../Model/LogisticasDadosPostDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasPost201Response**](../Model/LogisticasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
