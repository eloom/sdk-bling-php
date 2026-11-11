# NotasFiscaisDadosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**tipo** | **int** | &#x60;0&#x60; Entrada &lt;br&gt; &#x60;1&#x60; Saída |
**situacao** | **int** | &#x60;1&#x60; Pendente&lt;br&gt;&#x60;2&#x60; Cancelada&lt;br&gt;&#x60;3&#x60; Aguardando recibo&lt;br&gt;&#x60;4&#x60; Rejeitada&lt;br&gt;&#x60;5&#x60; Autorizada&lt;br&gt;&#x60;6&#x60; Emitida DANFE&lt;br&gt;&#x60;7&#x60; Registrada&lt;br&gt;&#x60;8&#x60; Aguardando protocolo&lt;br&gt;&#x60;9&#x60; Denegada&lt;br&gt;&#x60;10&#x60; Consulta situação&lt;br&gt;&#x60;11&#x60; Bloqueada | [optional] [readonly]
**numero** | **string** |  |
**dataEmissao** | **string** | Data e hora da emissão. | [optional] [readonly]
**dataOperacao** | **string** | Data de saída/entrada de acordo com o tipo da nota. |
**chaveAcesso** | **string** |  | [optional] [readonly]
**contato** | [**\Eloom\BlingApi\Model\NotasFiscaisContatoDTO**](NotasFiscaisContatoDTO.md) |  |
**naturezaOperacao** | [**\Eloom\BlingApi\Model\NotasFiscaisNaturezaOperacaoDTO**](NotasFiscaisNaturezaOperacaoDTO.md) |  |
**loja** | [**\Eloom\BlingApi\Model\NotasFiscaisLojaDTO**](NotasFiscaisLojaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
