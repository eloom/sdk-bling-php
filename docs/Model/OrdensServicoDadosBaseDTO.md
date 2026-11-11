# OrdensServicoDadosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**numero** | **string** |  | [optional]
**data** | **\DateTime** | Data de entrada | [optional]
**dataPrevista** | **\DateTime** |  | [optional]
**dataConclusao** | **\DateTime** |  | [optional]
**dataSaida** | **\DateTime** |  | [optional]
**horaInicio** | **string** |  | [optional]
**horaFim** | **string** |  | [optional]
**equipamento** | **string** |  | [optional]
**numeroSerieEquipamento** | **string** |  | [optional]
**descricaoProblema** | **string** |  | [optional]
**observacoes** | **string** |  | [optional]
**observacoesServico** | **string** |  | [optional]
**observacoesInternas** | **string** |  | [optional]
**garantia** | **string** |  | [optional]
**diasGarantia** | **int** |  | [optional]
**desconto** | [**\Eloom\BlingApi\Model\OrdensServicoDescontoDTO**](OrdensServicoDescontoDTO.md) |  | [optional]
**valorFrete** | **float** |  | [optional]
**totalPecas** | **float** |  | [optional]
**totalServicos** | **float** |  | [optional]
**total** | **float** |  | [optional]
**orcar** | **bool** | Indica que a ordem de serviço deve ser orçada | [optional]
**orcado** | **bool** | Indica que a ordem de serviço já foi orçada | [optional]
**tecnico** | **string** | Nome do técnico informado manualmente | [optional]
**tecnicos** | **int[]** | IDs dos contatos técnicos vinculados | [optional]
**loja** | [**\Eloom\BlingApi\Model\OrdensServicoLojaDTO**](OrdensServicoLojaDTO.md) |  | [optional]
**contato** | [**\Eloom\BlingApi\Model\OrdensServicoContatoDTO**](OrdensServicoContatoDTO.md) |  |
**vendedor** | [**\Eloom\BlingApi\Model\OrdensServicoVendedorDTO**](OrdensServicoVendedorDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\OrdensServicoCategoriaDTO**](OrdensServicoCategoriaDTO.md) |  | [optional]
**servicos** | [**\Eloom\BlingApi\Model\OrdensServicoItemServicoDTO[]**](OrdensServicoItemServicoDTO.md) |  | [optional]
**pecas** | [**\Eloom\BlingApi\Model\OrdensServicoItemPecaDTO[]**](OrdensServicoItemPecaDTO.md) |  | [optional]
**parcelas** | [**\Eloom\BlingApi\Model\OrdensServicoParcelaDTO[]**](OrdensServicoParcelaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
