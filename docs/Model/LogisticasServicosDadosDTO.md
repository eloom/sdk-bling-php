# LogisticasServicosDadosDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id do serviço | [optional]
**descricao** | **string** | Descrição do serviço da logística |
**codigo** | **string** | Código do serviço |
**aliases** | **string[]** | Aliases do serviço |
**ativo** | **bool** | Define se está ativo ou não | [optional]
**freteItem** | **float** | Valor do frete que será calculado para cada item do pedido |
**estimativaEntrega** | **int** | Será o prazo, em dias úteis, de entrega da mercadoria para esse serviço. |
**idCodigoServico** | **string** | Id do código do servico | [optional]
**nomeTransportador** | **string** | Nome da transportadora associada ao serviço | [optional]
**logistica** | [**\Eloom\BlingApi\Model\LogisticasServicosLogisticaDTO**](LogisticasServicosLogisticaDTO.md) |  |
**transportador** | [**\Eloom\BlingApi\Model\LogisticasServicosTransportadorDTO**](LogisticasServicosTransportadorDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
