# Eloom\BlingApi\NotasFiscaisEletrnicasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**nfeDelete()**](NotasFiscaisEletrnicasApi.md#nfeDelete) | **DELETE** /nfe | Remove múltiplas notas fiscais |
| [**nfeDocumentoChaveAcessoGet()**](NotasFiscaisEletrnicasApi.md#nfeDocumentoChaveAcessoGet) | **GET** /nfe/documento/{chaveAcesso} | Obtém o documento de uma nota fiscal |
| [**nfeGet()**](NotasFiscaisEletrnicasApi.md#nfeGet) | **GET** /nfe | Obtém notas fiscais |
| [**nfeIdNotaFiscalEnviarPost()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalEnviarPost) | **POST** /nfe/{idNotaFiscal}/enviar | Envia uma nota fiscal |
| [**nfeIdNotaFiscalEstornarContasPost()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalEstornarContasPost) | **POST** /nfe/{idNotaFiscal}/estornar-contas | Estorna as contas de uma nota fiscal |
| [**nfeIdNotaFiscalEstornarEstoquePost()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalEstornarEstoquePost) | **POST** /nfe/{idNotaFiscal}/estornar-estoque | Estorna o estoque de uma nota fiscal |
| [**nfeIdNotaFiscalGet()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalGet) | **GET** /nfe/{idNotaFiscal} | Obtém uma nota fiscal |
| [**nfeIdNotaFiscalLancarContasPost()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalLancarContasPost) | **POST** /nfe/{idNotaFiscal}/lancar-contas | Lança as contas de uma nota fiscal |
| [**nfeIdNotaFiscalLancarEstoqueIdDepositoPost()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalLancarEstoqueIdDepositoPost) | **POST** /nfe/{idNotaFiscal}/lancar-estoque/{idDeposito} | Lança o estoque de uma nota fiscal especificando o depósito |
| [**nfeIdNotaFiscalLancarEstoquePost()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalLancarEstoquePost) | **POST** /nfe/{idNotaFiscal}/lancar-estoque | Lança o estoque de uma nota fiscal no depósito padrão |
| [**nfeIdNotaFiscalPut()**](NotasFiscaisEletrnicasApi.md#nfeIdNotaFiscalPut) | **PUT** /nfe/{idNotaFiscal} | Altera uma nota fiscal |
| [**nfePost()**](NotasFiscaisEletrnicasApi.md#nfePost) | **POST** /nfe | Cria uma nota fiscal |


## `nfeDelete()`

```php
nfeDelete($idsNotas): \Eloom\BlingApi\Model\NfeDelete200Response
```

Remove múltiplas notas fiscais

Remove múltiplas notas fiscais por IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsNotas = [12345678,87654321]; // int[] | IDs das notas fiscais

try {
    $result = $apiInstance->nfeDelete($idsNotas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsNotas** | [**int[]**](../Model/int.md)| IDs das notas fiscais | |

### Return type

[**\Eloom\BlingApi\Model\NfeDelete200Response**](../Model/NfeDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfeDocumentoChaveAcessoGet()`

```php
nfeDocumentoChaveAcessoGet($chaveAcesso, $formato): \Eloom\BlingApi\Model\NfeDocumentoChaveAcessoGet200Response
```

Obtém o documento de uma nota fiscal

Obtém o PDF ou XML de uma nota fiscal pela chave de acesso. O formato desejado deve ser informado via query param.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chaveAcesso = 42260290209032000194550010012900751642381235; // string | Chave de acesso da nota fiscal (44 dígitos)
$formato = 'formato_example'; // string | Formato do documento. `pdf` para o DANFE em PDF, `xml` para o XML da NF-e.

try {
    $result = $apiInstance->nfeDocumentoChaveAcessoGet($chaveAcesso, $formato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeDocumentoChaveAcessoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chaveAcesso** | **string**| Chave de acesso da nota fiscal (44 dígitos) | |
| **formato** | **string**| Formato do documento. &#x60;pdf&#x60; para o DANFE em PDF, &#x60;xml&#x60; para o XML da NF-e. | |

### Return type

[**\Eloom\BlingApi\Model\NfeDocumentoChaveAcessoGet200Response**](../Model/NfeDocumentoChaveAcessoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfeGet()`

```php
nfeGet($pagina, $limite, $numeroLoja, $idTransportador, $chaveAcesso, $numero, $serie, $situacao, $tipo, $dataEmissaoInicial, $dataEmissaoFinal): \Eloom\BlingApi\Model\NfceGet200Response
```

Obtém notas fiscais

Obtém notas fiscais paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$numeroLoja = 123455678; // string | Número do pedido na loja
$idTransportador = 12345678; // int | ID do contato do transportador
$chaveAcesso = 56; // int | Chave de acesso
$numero = 158; // int | Número da nota fiscal
$serie = 1; // int | Série
$situacao = 1; // int | `1` Pendente<br>`2` Cancelada<br>`3` Aguardando recibo<br>`4` Rejeitada<br>`5` Autorizada<br>`6` Emitida DANFE<br>`7` Registrada<br>`8` Aguardando protocolo<br>`9` Denegada<br>`10` Consulta situação<br>`11` Bloqueada<br><br>**Observação:** Caso este parâmetro não seja informado, as notas canceladas não serão incluídas na consulta.<br><br>
$tipo = '1'; // string | `0` Entrada <br> `1` Saída
$dataEmissaoInicial = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Data e hora incial de emissão
$dataEmissaoFinal = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Data e hora final de emissão

try {
    $result = $apiInstance->nfeGet($pagina, $limite, $numeroLoja, $idTransportador, $chaveAcesso, $numero, $serie, $situacao, $tipo, $dataEmissaoInicial, $dataEmissaoFinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **numeroLoja** | **string**| Número do pedido na loja | [optional] |
| **idTransportador** | **int**| ID do contato do transportador | [optional] |
| **chaveAcesso** | **int**| Chave de acesso | [optional] |
| **numero** | **int**| Número da nota fiscal | [optional] |
| **serie** | **int**| Série | [optional] |
| **situacao** | **int**| &#x60;1&#x60; Pendente&lt;br&gt;&#x60;2&#x60; Cancelada&lt;br&gt;&#x60;3&#x60; Aguardando recibo&lt;br&gt;&#x60;4&#x60; Rejeitada&lt;br&gt;&#x60;5&#x60; Autorizada&lt;br&gt;&#x60;6&#x60; Emitida DANFE&lt;br&gt;&#x60;7&#x60; Registrada&lt;br&gt;&#x60;8&#x60; Aguardando protocolo&lt;br&gt;&#x60;9&#x60; Denegada&lt;br&gt;&#x60;10&#x60; Consulta situação&lt;br&gt;&#x60;11&#x60; Bloqueada&lt;br&gt;&lt;br&gt;**Observação:** Caso este parâmetro não seja informado, as notas canceladas não serão incluídas na consulta.&lt;br&gt;&lt;br&gt; | [optional] |
| **tipo** | **string**| &#x60;0&#x60; Entrada &lt;br&gt; &#x60;1&#x60; Saída | [optional] [default to &#39;1&#39;] |
| **dataEmissaoInicial** | **\DateTime**| Data e hora incial de emissão | [optional] |
| **dataEmissaoFinal** | **\DateTime**| Data e hora final de emissão | [optional] |

### Return type

[**\Eloom\BlingApi\Model\NfceGet200Response**](../Model/NfceGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfeIdNotaFiscalEnviarPost()`

```php
nfeIdNotaFiscalEnviarPost($idNotaFiscal, $enviarEmail): \Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorEnviarPost200Response
```

Envia uma nota fiscal

Envia uma nota fiscal pelo ID para emissão na Sefaz.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal
$enviarEmail = false; // bool | Define se deve enviar email após a emissão da nota fiscal

try {
    $result = $apiInstance->nfeIdNotaFiscalEnviarPost($idNotaFiscal, $enviarEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalEnviarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |
| **enviarEmail** | **bool**| Define se deve enviar email após a emissão da nota fiscal | [optional] [default to false] |

### Return type

[**\Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorEnviarPost200Response**](../Model/NfceIdNotaFiscalConsumidorEnviarPost200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfeIdNotaFiscalEstornarContasPost()`

```php
nfeIdNotaFiscalEstornarContasPost($idNotaFiscal)
```

Estorna as contas de uma nota fiscal

Estorna as contas de uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal

try {
    $apiInstance->nfeIdNotaFiscalEstornarContasPost($idNotaFiscal);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalEstornarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |

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

## `nfeIdNotaFiscalEstornarEstoquePost()`

```php
nfeIdNotaFiscalEstornarEstoquePost($idNotaFiscal)
```

Estorna o estoque de uma nota fiscal

Estorna o estoque de uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal

try {
    $apiInstance->nfeIdNotaFiscalEstornarEstoquePost($idNotaFiscal);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalEstornarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |

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

## `nfeIdNotaFiscalGet()`

```php
nfeIdNotaFiscalGet($idNotaFiscal): \Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorGet200Response
```

Obtém uma nota fiscal

Obtém uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal

try {
    $result = $apiInstance->nfeIdNotaFiscalGet($idNotaFiscal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |

### Return type

[**\Eloom\BlingApi\Model\NfceIdNotaFiscalConsumidorGet200Response**](../Model/NfceIdNotaFiscalConsumidorGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfeIdNotaFiscalLancarContasPost()`

```php
nfeIdNotaFiscalLancarContasPost($idNotaFiscal)
```

Lança as contas de uma nota fiscal

Lança as contas de uma nota fiscal pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal

try {
    $apiInstance->nfeIdNotaFiscalLancarContasPost($idNotaFiscal);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalLancarContasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |

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

## `nfeIdNotaFiscalLancarEstoqueIdDepositoPost()`

```php
nfeIdNotaFiscalLancarEstoqueIdDepositoPost($idNotaFiscal, $idDeposito)
```

Lança o estoque de uma nota fiscal especificando o depósito

Lança o estoque de uma nota fiscal pelo ID, especificando o ID do depósito.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal
$idDeposito = 12345678; // int | ID do depósito

try {
    $apiInstance->nfeIdNotaFiscalLancarEstoqueIdDepositoPost($idNotaFiscal, $idDeposito);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalLancarEstoqueIdDepositoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |
| **idDeposito** | **int**| ID do depósito | |

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

## `nfeIdNotaFiscalLancarEstoquePost()`

```php
nfeIdNotaFiscalLancarEstoquePost($idNotaFiscal)
```

Lança o estoque de uma nota fiscal no depósito padrão

Lança o estoque de uma nota fiscal pelo ID, no depósito padrão.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal

try {
    $apiInstance->nfeIdNotaFiscalLancarEstoquePost($idNotaFiscal);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalLancarEstoquePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |

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

## `nfeIdNotaFiscalPut()`

```php
nfeIdNotaFiscalPut($idNotaFiscal, $nfcePostRequest): \Eloom\BlingApi\Model\NfeIdNotaFiscalPut200Response
```

Altera uma nota fiscal

Altera uma nota fiscal pelo ID. Notas com vínculos possuem restrições de atualização. Notas autorizadas não podem ter dados fiscais alterados: valores, impostos, informações do destinatário e qualquer outro dado transmitido no XML da nota.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idNotaFiscal = 12345678; // int | ID da nota fiscal
$nfcePostRequest = new \Eloom\BlingApi\Model\NfcePostRequest(); // \Eloom\BlingApi\Model\NfcePostRequest

try {
    $result = $apiInstance->nfeIdNotaFiscalPut($idNotaFiscal, $nfcePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfeIdNotaFiscalPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idNotaFiscal** | **int**| ID da nota fiscal | |
| **nfcePostRequest** | [**\Eloom\BlingApi\Model\NfcePostRequest**](../Model/NfcePostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\NfeIdNotaFiscalPut200Response**](../Model/NfeIdNotaFiscalPut200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nfePost()`

```php
nfePost($nfcePostRequest): \Eloom\BlingApi\Model\NfcePost201Response
```

Cria uma nota fiscal

Cria uma nota fiscal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\NotasFiscaisEletrnicasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nfcePostRequest = new \Eloom\BlingApi\Model\NfcePostRequest(); // \Eloom\BlingApi\Model\NfcePostRequest

try {
    $result = $apiInstance->nfePost($nfcePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotasFiscaisEletrnicasApi->nfePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nfcePostRequest** | [**\Eloom\BlingApi\Model\NfcePostRequest**](../Model/NfcePostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\NfcePost201Response**](../Model/NfcePost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
