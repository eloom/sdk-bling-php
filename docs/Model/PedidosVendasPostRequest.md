# PedidosVendasPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**numero** | **int** |  | [optional]
**numeroLoja** | **string** |  | [optional]
**data** | **\DateTime** | Valor obrigatório caso parâmetro de geração de parcelas seja este |
**dataSaida** | **\DateTime** | Valor obrigatório caso parâmetro de geração de parcelas seja este |
**dataPrevista** | **\DateTime** | Valor obrigatório caso parâmetro de geração de parcelas seja este |
**totalProdutos** | **float** |  | [optional] [readonly]
**total** | **float** |  | [optional] [readonly]
**contato** | [**\Eloom\BlingApi\Model\VendasContatoDTO**](VendasContatoDTO.md) |  |
**situacao** | [**\Eloom\BlingApi\Model\VendasSituacaoDTO**](VendasSituacaoDTO.md) |  | [optional]
**loja** | [**\Eloom\BlingApi\Model\VendasLojaDTO**](VendasLojaDTO.md) |  | [optional]
**numeroPedidoCompra** | **string** | Número da ordem de compra do pedido. | [optional]
**outrasDespesas** | **float** |  | [optional]
**observacoes** | **string** |  | [optional]
**observacoesInternas** | **string** |  | [optional]
**desconto** | [**\Eloom\BlingApi\Model\VendasDescontoDTO**](VendasDescontoDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\VendasCategoriaDTO**](VendasCategoriaDTO.md) |  | [optional]
**notaFiscal** | [**\Eloom\BlingApi\Model\VendasNotaFiscalDTO**](VendasNotaFiscalDTO.md) |  | [optional]
**tributacao** | [**\Eloom\BlingApi\Model\VendasTributacaoDTO**](VendasTributacaoDTO.md) |  | [optional]
**itens** | [**\Eloom\BlingApi\Model\VendasItemDTO[]**](VendasItemDTO.md) |  |
**parcelas** | [**\Eloom\BlingApi\Model\VendasParcelaDTO[]**](VendasParcelaDTO.md) |  |
**transporte** | [**\Eloom\BlingApi\Model\VendasTransporteDTO**](VendasTransporteDTO.md) |  | [optional]
**vendedor** | [**\Eloom\BlingApi\Model\VendasVendedorDTO**](VendasVendedorDTO.md) |  | [optional]
**intermediador** | [**\Eloom\BlingApi\Model\VendasIntermediadorDTO**](VendasIntermediadorDTO.md) |  | [optional]
**taxas** | [**\Eloom\BlingApi\Model\VendasTaxaDTO**](VendasTaxaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
