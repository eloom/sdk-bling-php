# VendasItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ignorado no método POST. | [readonly]
**codigo** | **string** |  | [optional]
**unidade** | **string** |  | [optional]
**quantidade** | **float** |  |
**desconto** | **float** | Valor percentual. | [optional]
**valor** | **float** | Valor unitário do item. Preço de lista &#x3D; 4.9 (valor) + 2% (desconto) |
**aliquotaIPI** | **float** |  | [optional]
**descricao** | **string** |  |
**descricaoDetalhada** | **string** |  | [optional]
**produto** | [**\Eloom\BlingApi\Model\VendasItemProdutoDTO**](VendasItemProdutoDTO.md) |  | [optional]
**comissao** | [**\Eloom\BlingApi\Model\VendasItemComissaoDTO**](VendasItemComissaoDTO.md) |  | [optional]
**naturezaOperacao** | [**\Eloom\BlingApi\Model\VendasItemNaturezaOperacaoDTO**](VendasItemNaturezaOperacaoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
