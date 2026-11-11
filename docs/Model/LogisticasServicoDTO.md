# LogisticasServicoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID do serviço da logística |
**descricao** | **string** | Descrição do serviço da logística |
**freteItem** | **float** | Valor do frete que será calculado para cada item do pedido |
**estimativaEntrega** | **int** | Será o prazo, em dias úteis, de entrega da mercadoria para esse serviço. |
**codigo** | **string** | Código do serviço |
**logistica** | [**\Eloom\BlingApi\Model\LogisticasLogisticaDTO**](LogisticasLogisticaDTO.md) |  |
**transportador** | [**\Eloom\BlingApi\Model\LogisticasTransportadorDTO**](LogisticasTransportadorDTO.md) |  |
**aliases** | **string[]** | Aliases do serviço |
**ativo** | **bool** | Indica se o serviço está ativo |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
