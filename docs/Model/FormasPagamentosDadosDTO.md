# FormasPagamentosDadosDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condicao** | **string** | Condição de pagamento padrão. | [optional]
**destino** | **int** | &#x60;1&#x60; Conta a receber/pagar&lt;br&gt;&#x60;2&#x60; Ficha financeira&lt;br&gt;&#x60;3&#x60; Caixa e bancos |
**utilizaDiasUteis** | **bool** | Indica se a forma de pagamento utiliza lançamentos em dias úteis. | [optional]
**taxas** | [**\Eloom\BlingApi\Model\FormasPagamentosTaxaDTO**](FormasPagamentosTaxaDTO.md) |  | [optional]
**dadosCartao** | [**\Eloom\BlingApi\Model\FormasPagamentosDadosCartaoDTO**](FormasPagamentosDadosCartaoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
