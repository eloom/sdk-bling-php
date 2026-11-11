# LogisticasRemessasDadosPostDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**numeroPlp** | **string** |  |
**situacao** | **int** | &#x60;-3&#x60; A ser corrigida &lt;br&gt; &#x60;-2&#x60; Em processamento &lt;br&gt; &#x60;-1&#x60; Cancelado &lt;br&gt; &#x60;0&#x60; Em aberto &lt;br&gt; &#x60;1&#x60; Emitido &lt;br&gt; &#x60;2&#x60; Pronto para envio &lt;br&gt; &#x60;3&#x60; Despachado &lt;br&gt; &#x60;4&#x60; Pronto para envio &lt;br&gt; &#x60;5&#x60; Etiqueta comprada &lt;br&gt; &#x60;6&#x60; Etiqueta parcialmente comprada |
**descricao** | **string** |  |
**dataCriacao** | **string** |  | [readonly]
**logistica** | [**\Eloom\BlingApi\Model\LogisticasLogisticaRemessaDTO**](LogisticasLogisticaRemessaDTO.md) |  | [optional]
**objetos** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
