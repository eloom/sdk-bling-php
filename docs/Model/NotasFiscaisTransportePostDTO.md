# NotasFiscaisTransportePostDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fretePorConta** | **int** | &#x60;0&#x60; Contratação do Frete por conta do Remetente (CIF) &lt;br&gt; &#x60;1&#x60; Contratação do Frete por conta do Destinatário (FOB) &lt;br&gt; &#x60;2&#x60; Contratação do Frete por conta de Terceiros &lt;br&gt; &#x60;3&#x60; Transporte Próprio por conta do Remetente &lt;br&gt; &#x60;4&#x60; Transporte Próprio por conta do Destinatário &lt;br&gt; &#x60;9&#x60; Sem Ocorrência de Transporte | [optional]
**frete** | **float** | Utilizado no método POST. | [optional]
**veiculo** | [**\Eloom\BlingApi\Model\NotasFiscaisTransporteVeiculoDTO**](NotasFiscaisTransporteVeiculoDTO.md) |  | [optional]
**transportador** | [**\Eloom\BlingApi\Model\NotasFiscaisTransporteTransportadorPostDTO**](NotasFiscaisTransporteTransportadorPostDTO.md) |  | [optional]
**volume** | [**\Eloom\BlingApi\Model\NotasFiscaisTransporteDadosVolumeDTO**](NotasFiscaisTransporteDadosVolumeDTO.md) |  | [optional]
**volumes** | [**\Eloom\BlingApi\Model\NotasFiscaisTransporteVolumePostDTO[]**](NotasFiscaisTransporteVolumePostDTO.md) |  | [optional]
**etiqueta** | [**\Eloom\BlingApi\Model\NotasFiscaisTransporteEtiquetaDTO**](NotasFiscaisTransporteEtiquetaDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
