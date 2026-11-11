# ContasDadosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**situacao** | **int** | &#x60;1&#x60; Aberto &lt;br&gt;&#x60;2&#x60; Pago&lt;br&gt;&#x60;3&#x60; Parcial&lt;br&gt;&#x60;4&#x60; Devolvido&lt;br&gt;&#x60;5&#x60; Cancelado&lt;br&gt;&#x60;6&#x60; Devolvido parcial&lt;br&gt;&#x60;7&#x60; Confirmado | [readonly]
**vencimento** | **\DateTime** |  |
**valor** | **float** |  |
**contato** | [**\Eloom\BlingApi\Model\ContasContatoDTO**](ContasContatoDTO.md) |  |
**formaPagamento** | [**\Eloom\BlingApi\Model\ContasFormaPagamentoDTO**](ContasFormaPagamentoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
