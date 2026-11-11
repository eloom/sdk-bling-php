# CategoriasReceitasDespesasPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grupoDRE** | **int** | &#x60;1&#x60; Não exibir DRE&lt;br&gt;&#x60;2&#x60; Receita Operacional Bruta&lt;br&gt;&#x60;3&#x60; Deduções da Receita Bruta&lt;br&gt;&#x60;7&#x60; Despesas Operacionais&lt;br&gt;&#x60;8&#x60; Receita Financeira&lt;br&gt;&#x60;9&#x60; Despesa Financeira&lt;br&gt;&#x60;10&#x60; Outras Receitas&lt;br&gt;&#x60;11&#x60; Outras Despesas&lt;br&gt;&#x60;13&#x60; IR e CSLL | [optional] [default to GRUPO_DRE::NUMBER_1]
**id** | **int** |  | [optional] [readonly]
**idCategoriaPai** | **int** | Id da categoria pai. Se for a categoria raíz será 0. | [optional]
**descricao** | **string** |  |
**tipo** | **int** | &#x60;1&#x60; Despesa&lt;br&gt;&#x60;2&#x60; Receita&lt;br&gt;&#x60;3&#x60; Receita e despesa |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
