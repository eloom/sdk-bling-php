# Eloom\BlingApi\CategoriasLojasApi



All URIs are relative to https://api.bling.com.br/Api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoriasLojasGet()**](CategoriasLojasApi.md#categoriasLojasGet) | **GET** /categorias/lojas | Obtém categorias de lojas virtuais vinculadas a de produtos |
| [**categoriasLojasIdCategoriaLojaDelete()**](CategoriasLojasApi.md#categoriasLojasIdCategoriaLojaDelete) | **DELETE** /categorias/lojas/{idCategoriaLoja} | Remove o vínculo de uma categoria da loja com a de produto |
| [**categoriasLojasIdCategoriaLojaGet()**](CategoriasLojasApi.md#categoriasLojasIdCategoriaLojaGet) | **GET** /categorias/lojas/{idCategoriaLoja} | Obtém uma categoria da loja vinculada a de produto |
| [**categoriasLojasIdCategoriaLojaPut()**](CategoriasLojasApi.md#categoriasLojasIdCategoriaLojaPut) | **PUT** /categorias/lojas/{idCategoriaLoja} | Altera o vínculo de uma categoria da loja com a de produto |
| [**categoriasLojasPost()**](CategoriasLojasApi.md#categoriasLojasPost) | **POST** /categorias/lojas | Cria o vínculo de uma categoria da loja com a de produto |


## `categoriasLojasGet()`

```php
categoriasLojasGet($pagina, $limite, $idLoja, $idCategoriaProduto, $idCategoriaProdutoPai): \Eloom\BlingApi\Model\CategoriasLojasGet200Response
```

Obtém categorias de lojas virtuais vinculadas a de produtos

Obtém categorias de lojas virtuais vinculadas a de produtos paginadas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$idLoja = 12345678; // int | ID da loja
$idCategoriaProduto = 12345678; // int | ID da categoria do produto
$idCategoriaProdutoPai = 12345678; // int | ID da categoria do produto pai

try {
    $result = $apiInstance->categoriasLojasGet($pagina, $limite, $idLoja, $idCategoriaProduto, $idCategoriaProdutoPai);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasLojasApi->categoriasLojasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagina** | **int**| N° da página da listagem | [optional] [default to 1] |
| **limite** | **int**| Quantidade de registros que devem ser exibidos por página | [optional] [default to 100] |
| **idLoja** | **int**| ID da loja | [optional] |
| **idCategoriaProduto** | **int**| ID da categoria do produto | [optional] |
| **idCategoriaProdutoPai** | **int**| ID da categoria do produto pai | [optional] |

### Return type

[**\Eloom\BlingApi\Model\CategoriasLojasGet200Response**](../Model/CategoriasLojasGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasLojasIdCategoriaLojaDelete()`

```php
categoriasLojasIdCategoriaLojaDelete($idCategoriaLoja)
```

Remove o vínculo de uma categoria da loja com a de produto

Remove o vínculo de uma categoria da loja com a de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoriaLoja = 12345678; // int | ID do vínculo da categoria de produto com a da loja

try {
    $apiInstance->categoriasLojasIdCategoriaLojaDelete($idCategoriaLoja);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasLojasApi->categoriasLojasIdCategoriaLojaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoriaLoja** | **int**| ID do vínculo da categoria de produto com a da loja | |

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

## `categoriasLojasIdCategoriaLojaGet()`

```php
categoriasLojasIdCategoriaLojaGet($idCategoriaLoja): \Eloom\BlingApi\Model\CategoriasLojasIdCategoriaLojaGet200Response
```

Obtém uma categoria da loja vinculada a de produto

Obtém uma categoria da loja vinculada a de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoriaLoja = 12345678; // int | ID do vínculo da categoria de produto com a da loja

try {
    $result = $apiInstance->categoriasLojasIdCategoriaLojaGet($idCategoriaLoja);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasLojasApi->categoriasLojasIdCategoriaLojaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoriaLoja** | **int**| ID do vínculo da categoria de produto com a da loja | |

### Return type

[**\Eloom\BlingApi\Model\CategoriasLojasIdCategoriaLojaGet200Response**](../Model/CategoriasLojasIdCategoriaLojaGet200Response.md)

### Authorization

[OAuth2-Docs](../../README.md#OAuth2-Docs), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriasLojasIdCategoriaLojaPut()`

```php
categoriasLojasIdCategoriaLojaPut($idCategoriaLoja, $categoriasLojasDadosDTO)
```

Altera o vínculo de uma categoria da loja com a de produto

Altera o vínculo de uma categoria da loja com a de produto pelo ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idCategoriaLoja = 12345678; // int | ID do vínculo da categoria de produto com a da loja
$categoriasLojasDadosDTO = new \Eloom\BlingApi\Model\CategoriasLojasDadosDTO(); // \Eloom\BlingApi\Model\CategoriasLojasDadosDTO

try {
    $apiInstance->categoriasLojasIdCategoriaLojaPut($idCategoriaLoja, $categoriasLojasDadosDTO);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasLojasApi->categoriasLojasIdCategoriaLojaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idCategoriaLoja** | **int**| ID do vínculo da categoria de produto com a da loja | |
| **categoriasLojasDadosDTO** | [**\Eloom\BlingApi\Model\CategoriasLojasDadosDTO**](../Model/CategoriasLojasDadosDTO.md)|  | |

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

## `categoriasLojasPost()`

```php
categoriasLojasPost($categoriasLojasDadosDTO): \Eloom\BlingApi\Model\CategoriasLojasPost201Response
```

Cria o vínculo de uma categoria da loja com a de produto

Cria o vínculo de uma categoria da loja com a de produto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\CategoriasLojasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoriasLojasDadosDTO = new \Eloom\BlingApi\Model\CategoriasLojasDadosDTO(); // \Eloom\BlingApi\Model\CategoriasLojasDadosDTO

try {
    $result = $apiInstance->categoriasLojasPost($categoriasLojasDadosDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriasLojasApi->categoriasLojasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoriasLojasDadosDTO** | [**\Eloom\BlingApi\Model\CategoriasLojasDadosDTO**](../Model/CategoriasLojasDadosDTO.md)|  | |

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
