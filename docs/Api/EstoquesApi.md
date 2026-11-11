# Eloom\BlingApi\EstoquesApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estoquesIdEstoquePut()**](EstoquesApi.md#estoquesIdEstoquePut) | **PUT** /estoques/{idEstoque} | Altera um registro de estoque |
| [**estoquesPost()**](EstoquesApi.md#estoquesPost) | **POST** /estoques | Cria um registro de estoque |
| [**estoquesSaldosGet()**](EstoquesApi.md#estoquesSaldosGet) | **GET** /estoques/saldos | Obtém o saldo em estoque de produtos |
| [**estoquesSaldosIdDepositoGet()**](EstoquesApi.md#estoquesSaldosIdDepositoGet) | **GET** /estoques/saldos/{idDeposito} | Obtém o saldo em estoque de produtos por depósito |


## `estoquesIdEstoquePut()`

```php
estoquesIdEstoquePut($idEstoque, $estoquesDadosEdicaoDTO)
```

Altera um registro de estoque

Altera um registro de estoque pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\EstoquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idEstoque = 12345678; // int | ID do estoque
$estoquesDadosEdicaoDTO = new \Eloom\BlingApi\Model\EstoquesDadosEdicaoDTO(); // \Eloom\BlingApi\Model\EstoquesDadosEdicaoDTO

try {
    $apiInstance->estoquesIdEstoquePut($idEstoque, $estoquesDadosEdicaoDTO);
} catch (Exception $e) {
    echo 'Exception when calling EstoquesApi->estoquesIdEstoquePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idEstoque** | **int**| ID do estoque | |
| **estoquesDadosEdicaoDTO** | [**\Eloom\BlingApi\Model\EstoquesDadosEdicaoDTO**](../Model/EstoquesDadosEdicaoDTO.md)|  | |

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

## `estoquesPost()`

```php
estoquesPost($estoquesPostRequest): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria um registro de estoque

Cria um registro de estoque.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\EstoquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$estoquesPostRequest = new \Eloom\BlingApi\Model\EstoquesPostRequest(); // \Eloom\BlingApi\Model\EstoquesPostRequest

try {
    $result = $apiInstance->estoquesPost($estoquesPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstoquesApi->estoquesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **estoquesPostRequest** | [**\Eloom\BlingApi\Model\EstoquesPostRequest**](../Model/EstoquesPostRequest.md)|  | |

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

## `estoquesSaldosGet()`

```php
estoquesSaldosGet($idsProdutos, $codigos, $filtroSaldoEstoque): \Eloom\BlingApi\Model\EstoquesSaldosGet200Response
```

Obtém o saldo em estoque de produtos

Obtém o saldo em estoque de produtos, em todos os depósitos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\EstoquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos. Com saldo multiempresa ativo, máximo de 100 por requisição.
$codigos = ["SKU1","SKU2"]; // string[] | Códigos dos produtos
$filtroSaldoEstoque = 1; // int | Filtra o saldo em estoque <br> `0` zerado <br> `1` positivo <br> `2` negativo <br><br> Com o módulo multiempresa ativo, ao consultar todos os depósitos ou o depósito virtual, o saldo filtrado é o `saldoMultiempresa` do depósito virtual (consolidado do grupo, descontando as reservas de estoque) somado ao saldo físico dos depósitos locais não vinculados ao multiempresa.

try {
    $result = $apiInstance->estoquesSaldosGet($idsProdutos, $codigos, $filtroSaldoEstoque);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstoquesApi->estoquesSaldosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos. Com saldo multiempresa ativo, máximo de 100 por requisição. | |
| **codigos** | [**string[]**](../Model/string.md)| Códigos dos produtos | [optional] |
| **filtroSaldoEstoque** | **int**| Filtra o saldo em estoque &lt;br&gt; &#x60;0&#x60; zerado &lt;br&gt; &#x60;1&#x60; positivo &lt;br&gt; &#x60;2&#x60; negativo &lt;br&gt;&lt;br&gt; Com o módulo multiempresa ativo, ao consultar todos os depósitos ou o depósito virtual, o saldo filtrado é o &#x60;saldoMultiempresa&#x60; do depósito virtual (consolidado do grupo, descontando as reservas de estoque) somado ao saldo físico dos depósitos locais não vinculados ao multiempresa. | [optional] [default to 1] |

### Return type

[**\Eloom\BlingApi\Model\EstoquesSaldosGet200Response**](../Model/EstoquesSaldosGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estoquesSaldosIdDepositoGet()`

```php
estoquesSaldosIdDepositoGet($idDeposito, $idsProdutos, $codigos, $filtroSaldoEstoque): \Eloom\BlingApi\Model\EstoquesSaldosIdDepositoGet200Response
```

Obtém o saldo em estoque de produtos por depósito

Obtém o saldo em estoque de produtos pelo ID do depósito.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\EstoquesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idDeposito = 12345678; // int | ID do depósito
$idsProdutos = [12345678,87654321]; // int[] | IDs dos produtos. Com saldo multiempresa ativo, máximo de 100 por requisição.
$codigos = ["SKU1","SKU2"]; // string[] | Códigos dos produtos
$filtroSaldoEstoque = 1; // int | Filtra o saldo em estoque <br> `0` zerado <br> `1` positivo <br> `2` negativo <br><br> Com o módulo multiempresa ativo, ao consultar todos os depósitos ou o depósito virtual, o saldo filtrado é o `saldoMultiempresa` do depósito virtual (consolidado do grupo, descontando as reservas de estoque) somado ao saldo físico dos depósitos locais não vinculados ao multiempresa.

try {
    $result = $apiInstance->estoquesSaldosIdDepositoGet($idDeposito, $idsProdutos, $codigos, $filtroSaldoEstoque);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EstoquesApi->estoquesSaldosIdDepositoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idDeposito** | **int**| ID do depósito | |
| **idsProdutos** | [**int[]**](../Model/int.md)| IDs dos produtos. Com saldo multiempresa ativo, máximo de 100 por requisição. | |
| **codigos** | [**string[]**](../Model/string.md)| Códigos dos produtos | [optional] |
| **filtroSaldoEstoque** | **int**| Filtra o saldo em estoque &lt;br&gt; &#x60;0&#x60; zerado &lt;br&gt; &#x60;1&#x60; positivo &lt;br&gt; &#x60;2&#x60; negativo &lt;br&gt;&lt;br&gt; Com o módulo multiempresa ativo, ao consultar todos os depósitos ou o depósito virtual, o saldo filtrado é o &#x60;saldoMultiempresa&#x60; do depósito virtual (consolidado do grupo, descontando as reservas de estoque) somado ao saldo físico dos depósitos locais não vinculados ao multiempresa. | [optional] [default to 1] |

### Return type

[**\Eloom\BlingApi\Model\EstoquesSaldosIdDepositoGet200Response**](../Model/EstoquesSaldosIdDepositoGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
