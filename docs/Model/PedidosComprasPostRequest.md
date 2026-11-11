# PedidosComprasPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**numero** | **int** |  | [optional]
**data** | **\DateTime** |  | [optional]
**dataPrevista** | **\DateTime** |  | [optional]
**totalProdutos** | **float** |  | [optional] [readonly]
**total** | **float** |  | [optional] [readonly]
**fornecedor** | [**\Eloom\BlingApi\Model\PedidosComprasFornecedorDTO**](PedidosComprasFornecedorDTO.md) |  |
**situacao** | [**\Eloom\BlingApi\Model\PedidosComprasSituacaoDTO**](PedidosComprasSituacaoDTO.md) |  | [optional]
**ordemCompra** | **string** |  | [optional]
**observacoes** | **string** |  | [optional]
**observacoesInternas** | **string** |  | [optional]
**desconto** | [**\Eloom\BlingApi\Model\PedidosComprasDescontoDTO**](PedidosComprasDescontoDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\PedidosComprasCategoriaDTO**](PedidosComprasCategoriaDTO.md) |  | [optional]
**tributacao** | [**\Eloom\BlingApi\Model\PedidosComprasTributacaoDTO**](PedidosComprasTributacaoDTO.md) |  | [optional]
**transporte** | [**\Eloom\BlingApi\Model\PedidosComprasTransporteDTO**](PedidosComprasTransporteDTO.md) |  | [optional]
**itens** | [**\Eloom\BlingApi\Model\PedidosComprasItemDTO[]**](PedidosComprasItemDTO.md) |  |
**parcelas** | [**\Eloom\BlingApi\Model\PedidosComprasParcelaDTO[]**](PedidosComprasParcelaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
