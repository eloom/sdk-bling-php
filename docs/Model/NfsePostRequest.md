# NfsePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**numero** | **string** |  | [optional]
**numeroRPS** | **string** |  |
**serie** | **string** |  |
**situacao** | **int** | &#x60;0&#x60; Pendente &lt;br&gt; &#x60;1&#x60; Emitida &lt;br&gt; &#x60;2&#x60; Disponível para consulta &lt;br&gt; &#x60;3&#x60; Cancelada | [optional] [readonly]
**dataEmissao** | **\DateTime** |  | [optional]
**valor** | **float** |  | [optional] [readonly]
**contato** | **object** |  |
**link** | **string** | Link para acesso e impressão da NFS-e. | [optional] [readonly]
**codigoVerificacao** | **string** |  | [optional] [readonly]
**data** | **\DateTime** | Utilizado no POST. | [optional]
**baseCalculo** | **float** |  | [optional]
**reterISS** | **bool** | Utilizado no POST. Caso não seja informado, será levado em consideração o valor do parâmetro no sistema. | [optional]
**desconto** | **float** |  | [optional]
**vendedor** | [**\Eloom\BlingApi\Model\NotasServicosVendedorDTO**](NotasServicosVendedorDTO.md) |  | [optional]
**servicos** | [**\Eloom\BlingApi\Model\NotasServicosServicoDTO[]**](NotasServicosServicoDTO.md) |  |
**parcelas** | [**\Eloom\BlingApi\Model\NotasServicosParcelaDTO[]**](NotasServicosParcelaDTO.md) |  | [optional]
**tributacaoIbsCbs** | [**\Eloom\BlingApi\Model\NotasServicosTributacaoIbsCbsDTO**](NotasServicosTributacaoIbsCbsDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
