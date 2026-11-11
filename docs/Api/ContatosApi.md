# Eloom\BlingApi\ContatosApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contatosConsumidorFinalGet()**](ContatosApi.md#contatosConsumidorFinalGet) | **GET** /contatos/consumidor-final | Obtém os dados do contato Consumidor Final |
| [**contatosDelete()**](ContatosApi.md#contatosDelete) | **DELETE** /contatos | Remove múltiplos contatos |
| [**contatosGet()**](ContatosApi.md#contatosGet) | **GET** /contatos | Obtém contatos |
| [**contatosIdContatoDelete()**](ContatosApi.md#contatosIdContatoDelete) | **DELETE** /contatos/{idContato} | Remove um contato |
| [**contatosIdContatoGet()**](ContatosApi.md#contatosIdContatoGet) | **GET** /contatos/{idContato} | Obtém um contato |
| [**contatosIdContatoPut()**](ContatosApi.md#contatosIdContatoPut) | **PUT** /contatos/{idContato} | Altera um contato |
| [**contatosIdContatoSituacoesPatch()**](ContatosApi.md#contatosIdContatoSituacoesPatch) | **PATCH** /contatos/{idContato}/situacoes | Altera a situação de um contato |
| [**contatosIdContatoTiposGet()**](ContatosApi.md#contatosIdContatoTiposGet) | **GET** /contatos/{idContato}/tipos | Obtém os tipos de contato de um contato |
| [**contatosPost()**](ContatosApi.md#contatosPost) | **POST** /contatos | Cria um contato |
| [**contatosSituacoesPost()**](ContatosApi.md#contatosSituacoesPost) | **POST** /contatos/situacoes | Altera a situação de múltiplos contatos |


## `contatosConsumidorFinalGet()`

```php
contatosConsumidorFinalGet(): \Eloom\BlingApi\Model\ContatosIdContatoGet200Response
```

Obtém os dados do contato Consumidor Final

Obtém os dados do contato Consumidor Final. O consumidor final é um contato padrão do sistema que é criado automaticamente e não pode ser alterado.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contatosConsumidorFinalGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosConsumidorFinalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Eloom\BlingApi\Model\ContatosIdContatoGet200Response**](../Model/ContatosIdContatoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contatosDelete()`

```php
contatosDelete($idsContatos): \Eloom\BlingApi\Model\ContatosDelete200Response
```

Remove múltiplos contatos

Remove múltiplos contatos pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsContatos = [12345678,87654321]; // int[] | IDs dos contatos

try {
    $result = $apiInstance->contatosDelete($idsContatos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsContatos** | [**int[]**](../Model/int.md)| IDs dos contatos | |

### Return type

[**\Eloom\BlingApi\Model\ContatosDelete200Response**](../Model/ContatosDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contatosGet()`

```php
contatosGet($pagina, $limite, $pesquisa, $criterio, $dataInclusaoInicial, $dataInclusaoFinal, $dataAlteracaoInicial, $dataAlteracaoFinal, $idTipoContato, $idVendedor, $uf, $telefone, $idsContatos, $numeroDocumento, $tipoPessoa): \Eloom\BlingApi\Model\ContatosGet200Response
```

Obtém contatos

Obtém contatos paginados.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$pesquisa = 'pesquisa_example'; // string | Nome, CPF/CNPJ, fantasia, e-mail ou código do contato
$criterio = 3; // int | Criterio de listagem <br> `1` Todos <br> `2` Excluídos <br> `3` Últimos incluídos <br> `4` Sem movimento
$dataInclusaoInicial = 2022-01-01 10:00:00; // string | Data de inclusão inicial
$dataInclusaoFinal = 2022-01-01 15:00:00; // string | Data de inclusão final
$dataAlteracaoInicial = 2022-01-01 10:00:00; // string | Data de alteração inicial
$dataAlteracaoFinal = 2022-01-01 15:00:00; // string | Data de alteração final
$idTipoContato = 12345678; // int | ID do tipo do contato
$idVendedor = 12345678; // int | ID do vendedor relacionado ao contato
$uf = RS; // string | UF do contato
$telefone = (51) 99999-9999; // string | Telefone do contato
$idsContatos = [12345678,87654321]; // int[] | IDs dos contatos
$numeroDocumento = 12345678910; // string | CPF/CNPJ, desconsiderando a pontuação
$tipoPessoa = 1; // int | Tipo de pessoa <br> `1` Física <br> `2` Jurídica <br> `3` Estrangeiro

try {
    $result = $apiInstance->contatosGet($pagina, $limite, $pesquisa, $criterio, $dataInclusaoInicial, $dataInclusaoFinal, $dataAlteracaoInicial, $dataAlteracaoFinal, $idTipoContato, $idVendedor, $uf, $telefone, $idsContatos, $numeroDocumento, $tipoPessoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **pesquisa** | **string**| Nome, CPF/CNPJ, fantasia, e-mail ou código do contato | [optional] |
| **criterio** | **int**| Criterio de listagem &lt;br&gt; &#x60;1&#x60; Todos &lt;br&gt; &#x60;2&#x60; Excluídos &lt;br&gt; &#x60;3&#x60; Últimos incluídos &lt;br&gt; &#x60;4&#x60; Sem movimento | [optional] [default to 3] |
| **dataInclusaoInicial** | **string**| Data de inclusão inicial | [optional] |
| **dataInclusaoFinal** | **string**| Data de inclusão final | [optional] |
| **dataAlteracaoInicial** | **string**| Data de alteração inicial | [optional] |
| **dataAlteracaoFinal** | **string**| Data de alteração final | [optional] |
| **idTipoContato** | **int**| ID do tipo do contato | [optional] |
| **idVendedor** | **int**| ID do vendedor relacionado ao contato | [optional] |
| **uf** | **string**| UF do contato | [optional] |
| **telefone** | **string**| Telefone do contato | [optional] |
| **idsContatos** | [**int[]**](../Model/int.md)| IDs dos contatos | [optional] |
| **numeroDocumento** | **string**| CPF/CNPJ, desconsiderando a pontuação | [optional] |
| **tipoPessoa** | **int**| Tipo de pessoa &lt;br&gt; &#x60;1&#x60; Física &lt;br&gt; &#x60;2&#x60; Jurídica &lt;br&gt; &#x60;3&#x60; Estrangeiro | [optional] |

### Return type

[**\Eloom\BlingApi\Model\ContatosGet200Response**](../Model/ContatosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contatosIdContatoDelete()`

```php
contatosIdContatoDelete($idContato)
```

Remove um contato

Remove um contato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContato = 12345678; // int | ID do contato

try {
    $apiInstance->contatosIdContatoDelete($idContato);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosIdContatoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContato** | **int**| ID do contato | |

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

## `contatosIdContatoGet()`

```php
contatosIdContatoGet($idContato): \Eloom\BlingApi\Model\ContatosIdContatoGet200Response
```

Obtém um contato

Obtém um contato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContato = 12345678; // int | ID do contato

try {
    $result = $apiInstance->contatosIdContatoGet($idContato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosIdContatoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContato** | **int**| ID do contato | |

### Return type

[**\Eloom\BlingApi\Model\ContatosIdContatoGet200Response**](../Model/ContatosIdContatoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contatosIdContatoPut()`

```php
contatosIdContatoPut($idContato, $contatosPostRequest)
```

Altera um contato

Altera um contato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContato = 12345678; // int | ID do contato
$contatosPostRequest = new \Eloom\BlingApi\Model\ContatosPostRequest(); // \Eloom\BlingApi\Model\ContatosPostRequest

try {
    $apiInstance->contatosIdContatoPut($idContato, $contatosPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosIdContatoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContato** | **int**| ID do contato | |
| **contatosPostRequest** | [**\Eloom\BlingApi\Model\ContatosPostRequest**](../Model/ContatosPostRequest.md)|  | |

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

## `contatosIdContatoSituacoesPatch()`

```php
contatosIdContatoSituacoesPatch($idContato, $contatosIdContatoSituacoesPatchRequest)
```

Altera a situação de um contato

Altera a situação de um contato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContato = 12345678; // int | ID do contato
$contatosIdContatoSituacoesPatchRequest = new \Eloom\BlingApi\Model\ContatosIdContatoSituacoesPatchRequest(); // \Eloom\BlingApi\Model\ContatosIdContatoSituacoesPatchRequest

try {
    $apiInstance->contatosIdContatoSituacoesPatch($idContato, $contatosIdContatoSituacoesPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosIdContatoSituacoesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContato** | **int**| ID do contato | |
| **contatosIdContatoSituacoesPatchRequest** | [**\Eloom\BlingApi\Model\ContatosIdContatoSituacoesPatchRequest**](../Model/ContatosIdContatoSituacoesPatchRequest.md)|  | |

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

## `contatosIdContatoTiposGet()`

```php
contatosIdContatoTiposGet($idContato): \Eloom\BlingApi\Model\ContatosIdContatoTiposGet200Response
```

Obtém os tipos de contato de um contato

Obtém os tipos de contato de um contato pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idContato = 12345678; // int | ID do contato

try {
    $result = $apiInstance->contatosIdContatoTiposGet($idContato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosIdContatoTiposGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idContato** | **int**| ID do contato | |

### Return type

[**\Eloom\BlingApi\Model\ContatosIdContatoTiposGet200Response**](../Model/ContatosIdContatoTiposGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contatosPost()`

```php
contatosPost($contatosPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria um contato

Cria um contato.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contatosPostRequest = new \Eloom\BlingApi\Model\ContatosPostRequest(); // \Eloom\BlingApi\Model\ContatosPostRequest

try {
    $result = $apiInstance->contatosPost($contatosPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contatosPostRequest** | [**\Eloom\BlingApi\Model\ContatosPostRequest**](../Model/ContatosPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasLojasPost201Response**](../Model/CategoriasLojasPost201Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contatosSituacoesPost()`

```php
contatosSituacoesPost($contatosSituacoesPostRequest): \Eloom\BlingApi\Model\ContatosDelete200Response
```

Altera a situação de múltiplos contatos

Altera a situação de múltiplos contatos pelos IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\ContatosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contatosSituacoesPostRequest = new \Eloom\BlingApi\Model\ContatosSituacoesPostRequest(); // \Eloom\BlingApi\Model\ContatosSituacoesPostRequest

try {
    $result = $apiInstance->contatosSituacoesPost($contatosSituacoesPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContatosApi->contatosSituacoesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contatosSituacoesPostRequest** | [**\Eloom\BlingApi\Model\ContatosSituacoesPostRequest**](../Model/ContatosSituacoesPostRequest.md)|  | |

### Return type

[**\Eloom\BlingApi\Model\ContatosDelete200Response**](../Model/ContatosDelete200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
