# ContratosCobrancaVencimentoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tipo** | **int** | &#x60;1&#x60; No mês corrente&lt;br&gt;&#x60;2&#x60; No mês seguinte&lt;br&gt;&#x60;3&#x60; Em dois meses | [optional]
**dia** | **int** | Caso o dia informado não exista em um determinado mês(29, 30, 31), o vencimento da cobrança utilizará o ultimo dia válido do mês. | [optional]
**periodicidade** | **int** | &#x60;1&#x60; Mensal&lt;br&gt;&#x60;2&#x60; Bimestral&lt;br&gt;&#x60;3&#x60; Trimestral&lt;br&gt;&#x60;4&#x60; Semestral&lt;br&gt;&#x60;5&#x60; Anual&lt;br&gt;&#x60;6&#x60; Bianual&lt;br&gt;&#x60;7&#x60; Trianual | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
