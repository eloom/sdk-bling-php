# CalculosImpostosCalculoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tipoNota** | **int** | &#x60;0&#x60; Entrada &lt;br&gt; &#x60;1&#x60; Saída |
**uf** | **string** | UF do destinatário |
**municipio** | [**\Eloom\BlingApi\Model\CalculosImpostosMunicipioDTO**](CalculosImpostosMunicipioDTO.md) |  |
**obterRegras** | **bool** | Se false, os valores das regras de tributação de cada imposto serão zerados (cst, alíquota, base, etc.) | [optional] [default to true]
**crt** | **int** | CRT da empresa &lt;br&gt; &#x60;1&#x60; Simples Nacional &lt;br&gt; &#x60;2&#x60; Simples Nacional - excesso de sublimite de receita bruta &lt;br&gt; &#x60;3&#x60; Regime Normal &lt;br&gt; &#x60;4&#x60; MEI | [optional]
**loja** | [**\Eloom\BlingApi\Model\CalculosImpostosLojaDTO**](CalculosImpostosLojaDTO.md) |  |
**produto** | [**\Eloom\BlingApi\Model\CalculosImpostosProdutoDTO**](CalculosImpostosProdutoDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
