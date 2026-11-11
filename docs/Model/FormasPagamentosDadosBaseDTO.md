# FormasPagamentosDadosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**descricao** | **string** |  |
**tipoPagamento** | **int** | &#x60;1&#x60; Dinheiro&lt;br&gt;&#x60;2&#x60; Cheque&lt;br&gt;&#x60;3&#x60; Cartão de Crédito&lt;br&gt;&#x60;4&#x60; Cartão de Débito&lt;br&gt;&#x60;5&#x60; Cartão da Loja (Private Label)&lt;br&gt;&#x60;10&#x60; Vale Alimentação&lt;br&gt;&#x60;11&#x60; Vale Refeição&lt;br&gt;&#x60;12&#x60; Vale Presente&lt;br&gt;&#x60;13&#x60; Vale Combustível&lt;br&gt;&#x60;14&#x60; Duplicata Mercantil&lt;br&gt;&#x60;15&#x60; Boleto Bancário&lt;br&gt;&#x60;16&#x60; Depósito Bancário&lt;br&gt;&#x60;17&#x60; Pagamento Instantâneo (PIX) - Dinâmico&lt;br&gt;&#x60;18&#x60; Transferência Bancária, Carteira Digital&lt;br&gt;&#x60;19&#x60; Programa de Fidelidade, Cashback, Crédito Virtual&lt;br&gt;&#x60;20&#x60; Pagamento Instantâneo (PIX) – Estático&lt;br&gt;&#x60;21&#x60; Crédito em loja&lt;br&gt;&#x60;22&#x60; Pagamento Eletrônico não Informado - falha de hardware do sistema emissor&lt;br&gt;&#x60;90&#x60; Sem pagamento&lt;br&gt;&#x60;99&#x60; Outros&lt;br&gt; |
**situacao** | **int** | &#x60;0&#x60; Inativa&lt;br&gt;&#x60;1&#x60; Ativa&lt;br&gt; | [optional]
**fixa** | **bool** |  | [optional] [readonly]
**padrao** | **int** | &#x60;0&#x60; Não&lt;br&gt;&#x60;1&#x60; Padrão&lt;br&gt;&#x60;2&#x60; Padrão devolução | [optional]
**finalidade** | **int** | &#x60;1&#x60; Pagamentos&lt;br&gt;&#x60;2&#x60; Recebimentos&lt;br&gt;&#x60;3&#x60; Pagamentos e Recebimentos&lt;br&gt; |
**juros** | **float** | Valor em porcentagem, com até 2 casas decimais. | [optional]
**multa** | **float** | Valor em porcentagem, com até 2 casas decimais. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
