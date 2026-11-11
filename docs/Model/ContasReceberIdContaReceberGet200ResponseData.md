# ContasReceberIdContaReceberGet200ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**situacao** | **int** | &#x60;1&#x60; Aberto &lt;br&gt;&#x60;2&#x60; Pago&lt;br&gt;&#x60;3&#x60; Parcial&lt;br&gt;&#x60;4&#x60; Devolvido&lt;br&gt;&#x60;5&#x60; Cancelado&lt;br&gt;&#x60;6&#x60; Devolvido parcial&lt;br&gt;&#x60;7&#x60; Confirmado | [readonly]
**vencimento** | **\DateTime** |  |
**valor** | **float** |  |
**idTransacao** | **string** |  | [optional]
**linkQRCodePix** | **string** |  | [optional]
**linkBoleto** | **string** |  | [optional]
**dataEmissao** | **\DateTime** |  | [optional]
**contato** | [**\Eloom\BlingApi\Model\ContasReceberContatoDTO**](ContasReceberContatoDTO.md) |  |
**formaPagamento** | [**\Eloom\BlingApi\Model\ContasReceberFormaPagamentoDTO**](ContasReceberFormaPagamentoDTO.md) |  | [optional]
**contaContabil** | [**\Eloom\BlingApi\Model\ContasReceberContaContabilDTO**](ContasReceberContaContabilDTO.md) |  | [optional]
**origem** | [**\Eloom\BlingApi\Model\ContasReceberDadosOrigemDTO**](ContasReceberDadosOrigemDTO.md) |  | [optional]
**saldo** | **float** | É calculado subtraindo os valores dos recebimentos do valor da conta | [readonly]
**vencimentoOriginal** | **\DateTime** |  | [readonly]
**numeroDocumento** | **string** | Número para controle interno da empresa | [optional]
**competencia** | **\DateTime** |  | [optional]
**historico** | **string** | Descriçao da conta para controle interno da empresa | [optional]
**numeroBanco** | **string** | Adicionado automaticamente com o número preenchido no cadastro do banco | [readonly]
**portador** | [**\Eloom\BlingApi\Model\ContasPortadorDTO**](ContasPortadorDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\ContasCategoriaDTO**](ContasCategoriaDTO.md) |  | [optional]
**vendedor** | [**\Eloom\BlingApi\Model\ContasReceberVendedorDTO**](ContasReceberVendedorDTO.md) |  | [optional]
**borderos** | **int[]** | IDs de borderos relacionados à conta caso ela possua pagamentos | [readonly]
**ocorrencia** | [**\Eloom\BlingApi\Model\ContasPagarDadosDTOOcorrencia**](ContasPagarDadosDTOOcorrencia.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
