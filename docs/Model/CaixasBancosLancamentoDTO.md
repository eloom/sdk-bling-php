# CaixasBancosLancamentoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id do lançamento | [optional]
**debCred** | **string** | Tipo de lançamento &lt;br&gt; &#x60;D&#x60; - Débito &lt;br&gt; &#x60;C&#x60; - Crédito | [optional]
**saldo** | **string** | É ajuste de saldo após o lançamento &lt;br&gt; &#x60;S&#x60; - Sim &lt;br&gt; &#x60;N&#x60; - Não | [optional]
**situacao** | **string** | Situação do lançamento &lt;br&gt; &#x60;R&#x60; - Registrado &lt;br&gt; &#x60;E&#x60; - Excluído &lt;br&gt; &#x60;H&#x60; - Escondido &lt;br&gt; &#x60;N&#x60; - Não registrado &lt;br&gt; &#x60;P&#x60; - Processando (externa) &lt;br&gt; &#x60;C&#x60; - Cancelado (externa) | [optional]
**tipoLancamento** | **string** | Tipo do lançamento &lt;br&gt; &#x60;1&#x60; - Débito &lt;br&gt; &#x60;2&#x60; - Crédito | [optional]
**data** | **\DateTime** | Data do lançamento | [optional]
**competencia** | **\DateTime** | Data de competência do lançamento | [optional]
**valor** | **float** | Valor do lançamento | [optional]
**observacoes** | **string** | Observações adicionais sobre o lançamento | [optional]
**parcela** | [**\Eloom\BlingApi\Model\CaixasBancosLancamentoParcelaDTO**](CaixasBancosLancamentoParcelaDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\CaixasBancosDadosBasicosCategoriaDTO**](CaixasBancosDadosBasicosCategoriaDTO.md) |  | [optional]
**conciliacaoMovimentacao** | [**\Eloom\BlingApi\Model\CaixasBancosLancamentoConciliacaoMovimentacaoDTO**](CaixasBancosLancamentoConciliacaoMovimentacaoDTO.md) |  | [optional]
**contato** | [**\Eloom\BlingApi\Model\CaixasBancosDadosBasicoContatoDTO**](CaixasBancosDadosBasicoContatoDTO.md) |  | [optional]
**origem** | [**\Eloom\BlingApi\Model\CaixasBancosDadosBasicosOrigemDTO**](CaixasBancosDadosBasicosOrigemDTO.md) |  | [optional]
**contaFinanceira** | [**\Eloom\BlingApi\Model\ContasFinanceirasDadosBasicosDTO**](ContasFinanceirasDadosBasicosDTO.md) |  | [optional]
**transferencia** | **string** | Indica se o lançamento é uma transferência: &#39;S&#39; para sim, vazio para não. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
