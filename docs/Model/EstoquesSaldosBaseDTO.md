# EstoquesSaldosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**produto** | [**\Eloom\BlingApi\Model\EstoquesProdutoDTO**](EstoquesProdutoDTO.md) |  | [optional]
**saldoFisicoTotal** | **float** | Saldo físico total do produto | [optional]
**saldoVirtualTotal** | **float** | Saldo total do produto desconsiderando produtos reservados | [optional]
**saldoMultiempresa** | **float** | Saldo consolidado multiempresa do depósito virtual. Presente apenas no depósito virtual quando o módulo multiempresa está ativo; 0 para produto que não pertence ao grupo. Limitado a 100 produtos por requisição. Sempre considera as reservas de estoque, descontando os produtos reservados. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
