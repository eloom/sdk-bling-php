# CaixasBancosSalvarLancamentoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID do lançamento (deve corresponder ao ID da URL) | [optional]
**data** | **\DateTime** | Data do lançamento |
**valor** | **float** | Valor do lançamento |
**debCred** | **string** | Tipo de lançamento: &lt;br&gt; &#x60;C&#x60; - Crédito &lt;br&gt; &#x60;D&#x60; - Débito |
**competencia** | **\DateTime** | Data de competência |
**observacoes** | **string** | Observações do lançamento |
**contaFinanceira** | [**\Eloom\BlingApi\Model\ContasFinanceirasDadosBasicosDTO**](ContasFinanceirasDadosBasicosDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\CaixasBancosDadosBasicosCategoriaDTO**](CaixasBancosDadosBasicosCategoriaDTO.md) |  | [optional]
**origem** | [**\Eloom\BlingApi\Model\CaixasBancosDadosBasicosOrigemDTO**](CaixasBancosDadosBasicosOrigemDTO.md) |  | [optional]
**contato** | [**\Eloom\BlingApi\Model\CaixasBancosDadosBasicoContatoDTO**](CaixasBancosDadosBasicoContatoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
