# ContratosPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**descricao** | **string** |  |
**data** | **\DateTime** | Data de criação do contrato. |
**numero** | **string** |  |
**valor** | **float** |  |
**situacao** | **int** | &#x60;0&#x60; Inativo&lt;br&gt;&#x60;1&#x60; Ativo&lt;br&gt;&#x60;2&#x60; Baixado&lt;br&gt;&#x60;3&#x60; Isento&lt;br&gt;&#x60;4&#x60; Em avaliação |
**contato** | [**\Eloom\BlingApi\Model\ContratosContatoDTO**](ContratosContatoDTO.md) |  |
**dataFim** | **string** | Formato: YYYY-MM |
**tipoManutencao** | **int** | &#x60;1&#x60; Valor &lt;br&gt; &#x60;2&#x60; Indexação |
**emitirOrdemServico** | **bool** |  |
**observacoes** | **string** |  |
**vendedor** | [**\Eloom\BlingApi\Model\ContratosVendedorDTO**](ContratosVendedorDTO.md) |  |
**categoria** | [**\Eloom\BlingApi\Model\ContratosCategoriaDTO**](ContratosCategoriaDTO.md) |  |
**desconto** | [**\Eloom\BlingApi\Model\ContratosDescontoDTO**](ContratosDescontoDTO.md) |  |
**contaContabil** | [**\Eloom\BlingApi\Model\ContratosContaContabilDTO**](ContratosContaContabilDTO.md) |  |
**formaPagamento** | [**\Eloom\BlingApi\Model\ContratosFormaPagamentoDTO**](ContratosFormaPagamentoDTO.md) |  |
**notaFiscal** | [**\Eloom\BlingApi\Model\ContratosNotaFiscalDTO**](ContratosNotaFiscalDTO.md) |  | [optional]
**cobranca** | [**\Eloom\BlingApi\Model\ContratosCobrancaDTO**](ContratosCobrancaDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
