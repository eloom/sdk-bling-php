# NotificacoesGet200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ULID da notificação. | [optional]
**emitente** | **string** | Nome do usuário que criou a notificação. |
**modulo** | **string** |  |
**descricao** | **string** | Mensagem do corpo da notificação. |
**titulo** | **string** | Título no cabeçalho da notificação. |
**fonte** | **string** | Nome do orgão ou entidade em que se baseia a informação. | [optional]
**linkAjuda** | **string** | Link para direcionar o cliente à mais informações. | [optional]
**acao** | **string** | Ação executada na notificação. | [optional]
**dataCriacao** | **\DateTime** | Data de criação da notificação. | [optional]
**dataEnvio** | **string** | Data de publicação da notificação. |
**dataVigencia** | **\DateTime** | Data em que uma possível alteração informada entrará em vigor. | [optional]
**dataAcao** | **\DateTime** | Data em que a ação foi realizada pelo usuário. | [optional]
**dataLeitura** | **string** | Data em que o usuário leu a notificação. | [optional]
**dataAlerta** | **\DateTime** | Data em que a notificação ficará com a cor amarela para alertar usuário. | [optional]
**dataPerigo** | **\DateTime** | Data em que a notificação ficará com a cor vermelha para alertar usuário. | [optional]
**enquadramentos** | [**\EloomBlingApiModelNotificacoesEnquadramentosFiscaisDTO[]**](NotificacoesEnquadramentosFiscaisDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
