# Eloom\BlingApi\LogsticasServiosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logisticasIdLogisticaServicoSituacoesPatch()**](LogsticasServiosApi.md#logisticasIdLogisticaServicoSituacoesPatch) | **PATCH** /logisticas/{idLogisticaServico}/situacoes | Desativa ou ativa um serviço de uma logística |
| [**logisticasServicosGet()**](LogsticasServiosApi.md#logisticasServicosGet) | **GET** /logisticas/servicos | Obtém serviços de logísticas |
| [**logisticasServicosIdLogisticaServicoGet()**](LogsticasServiosApi.md#logisticasServicosIdLogisticaServicoGet) | **GET** /logisticas/servicos/{idLogisticaServico} | Obtém um servico de logística |
| [**logisticasServicosIdLogisticaServicoPut()**](LogsticasServiosApi.md#logisticasServicosIdLogisticaServicoPut) | **PUT** /logisticas/servicos/{idLogisticaServico} | Altera um serviço de logística pelo ID |
| [**logisticasServicosPost()**](LogsticasServiosApi.md#logisticasServicosPost) | **POST** /logisticas/servicos | Cria um serviço de logística |


## `logisticasIdLogisticaServicoSituacoesPatch()`

```php
logisticasIdLogisticaServicoSituacoesPatch($idLogisticaServico, $logisticasServicosDadosSituationDTO)
```

Desativa ou ativa um serviço de uma logística

Desativa ou ativa um serviço de uma logística personalizada pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasServiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogisticaServico = 12345678; // int | ID do serviço
$logisticasServicosDadosSituationDTO = new \Eloom\BlingApi\Model\LogisticasServicosDadosSituationDTO(); // \Eloom\BlingApi\Model\LogisticasServicosDadosSituationDTO

try {
    $apiInstance->logisticasIdLogisticaServicoSituacoesPatch($idLogisticaServico, $logisticasServicosDadosSituationDTO);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasServiosApi->logisticasIdLogisticaServicoSituacoesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogisticaServico** | **int**| ID do serviço | |
| **logisticasServicosDadosSituationDTO** | [**\Eloom\BlingApi\Model\LogisticasServicosDadosSituationDTO**](../Model/LogisticasServicosDadosSituationDTO.md)|  | |

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

## `logisticasServicosGet()`

```php
logisticasServicosGet($pagina, $limite, $tipoIntegracao): \Eloom\BlingApi\Model\LogisticasServicosGet200Response
```

Obtém serviços de logísticas

Obtém serviços de logísticas paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasServiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$tipoIntegracao = ''; // string | Parâmetro para filtrar os registros através do tipo da logística.

try {
    $result = $apiInstance->logisticasServicosGet($pagina, $limite, $tipoIntegracao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasServiosApi->logisticasServicosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **tipoIntegracao** | **string**| Parâmetro para filtrar os registros através do tipo da logística. | [optional] [default to &#39;&#39;] |

### Return type

[**\Eloom\BlingApi\Model\LogisticasServicosGet200Response**](../Model/LogisticasServicosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasServicosIdLogisticaServicoGet()`

```php
logisticasServicosIdLogisticaServicoGet($idLogisticaServico): \Eloom\BlingApi\Model\LogisticasServicosIdLogisticaServicoGet200Response
```

Obtém um servico de logística

Obtém um servico de logística pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasServiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogisticaServico = 12345678; // int | ID do serviço

try {
    $result = $apiInstance->logisticasServicosIdLogisticaServicoGet($idLogisticaServico);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasServiosApi->logisticasServicosIdLogisticaServicoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogisticaServico** | **int**| ID do serviço | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasServicosIdLogisticaServicoGet200Response**](../Model/LogisticasServicosIdLogisticaServicoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasServicosIdLogisticaServicoPut()`

```php
logisticasServicosIdLogisticaServicoPut($idLogisticaServico, $logisticasServicosDadosSaveRequestDTO): \Eloom\BlingApi\Model\LogisticasServicosIdLogisticaServicoPut200Response
```

Altera um serviço de logística pelo ID

Altera dados de um serviço de logística personalizada pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasServiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idLogisticaServico = 12345678; // int | ID do serviço
$logisticasServicosDadosSaveRequestDTO = new \Eloom\BlingApi\Model\LogisticasServicosDadosSaveRequestDTO(); // \Eloom\BlingApi\Model\LogisticasServicosDadosSaveRequestDTO

try {
    $result = $apiInstance->logisticasServicosIdLogisticaServicoPut($idLogisticaServico, $logisticasServicosDadosSaveRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasServiosApi->logisticasServicosIdLogisticaServicoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idLogisticaServico** | **int**| ID do serviço | |
| **logisticasServicosDadosSaveRequestDTO** | [**\Eloom\BlingApi\Model\LogisticasServicosDadosSaveRequestDTO**](../Model/LogisticasServicosDadosSaveRequestDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasServicosIdLogisticaServicoPut200Response**](../Model/LogisticasServicosIdLogisticaServicoPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logisticasServicosPost()`

```php
logisticasServicosPost($logisticasServicosDadosCreateRequestDTO): \Eloom\BlingApi\Model\LogisticasServicosPost201Response
```

Cria um serviço de logística

Cria um serviço de logística personalizada.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\LogsticasServiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logisticasServicosDadosCreateRequestDTO = new \Eloom\BlingApi\Model\LogisticasServicosDadosCreateRequestDTO(); // \Eloom\BlingApi\Model\LogisticasServicosDadosCreateRequestDTO

try {
    $result = $apiInstance->logisticasServicosPost($logisticasServicosDadosCreateRequestDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsticasServiosApi->logisticasServicosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **logisticasServicosDadosCreateRequestDTO** | [**\Eloom\BlingApi\Model\LogisticasServicosDadosCreateRequestDTO**](../Model/LogisticasServicosDadosCreateRequestDTO.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\LogisticasServicosPost201Response**](../Model/LogisticasServicosPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
