# EstoquesSaldosDTODepositosInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**saldoFisico** | **float** | Saldo físico do produto | [optional]
**saldoVirtual** | **float** | Saldo do produto desconsiderando produtos reservados | [optional]
**saldoMultiempresa** | **float** | Saldo consolidado multiempresa. Presente apenas no depósito virtual quando o módulo multiempresa está ativo; 0 para produto que não pertence ao grupo. Sempre considera as reservas de estoque, descontando os produtos reservados. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
