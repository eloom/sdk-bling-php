# VendasTransporteDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fretePorConta** | **int** | &#x60;0&#x60; Contratação do Frete por conta do Remetente (CIF)&lt;br&gt; &#x60;1&#x60; Contratação do Frete por conta do Destinatário (FOB)&lt;br&gt; &#x60;2&#x60; Contratação do Frete por conta de Terceiros&lt;br&gt; &#x60;3&#x60; Transporte Próprio por conta do Remetente&lt;br&gt; &#x60;4&#x60; Transporte Próprio por conta do Destinatário&lt;br&gt; &#x60;9&#x60; Sem Ocorrência de Transporte. | [optional]
**frete** | **float** |  | [optional]
**quantidadeVolumes** | **int** |  | [optional]
**pesoBruto** | **float** |  | [optional]
**prazoEntrega** | **int** |  | [optional]
**contato** | [**\Eloom\BlingApi\Model\VendasTransporteContatoDTO**](VendasTransporteContatoDTO.md) |  | [optional]
**etiqueta** | [**\Eloom\BlingApi\Model\VendasTransporteEtiquetaDTO**](VendasTransporteEtiquetaDTO.md) |  | [optional]
**volumes** | [**\Eloom\BlingApi\Model\VendasTransporteVolumeDTO[]**](VendasTransporteVolumeDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
