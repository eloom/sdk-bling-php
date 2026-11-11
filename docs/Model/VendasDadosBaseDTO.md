# VendasDadosBaseDTO

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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
