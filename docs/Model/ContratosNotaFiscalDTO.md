# ContratosNotaFiscalDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mes** | **int** | &#x60;1&#x60; Não imprime&lt;br&gt;&#x60;2&#x60; Mês atual&lt;br&gt;&#x60;3&#x60; Mês anterior&lt;br&gt;Período de referência da cobrança que será incluído nas informações complementares das notas fiscais e observações da conta a receber. | [optional]
**gerar** | **int** | &#x60;1&#x60; Não&lt;br&gt;&#x60;2&#x60; Ao gerar cobrança | [optional]
**descontarImpostoRenda** | **int** | &#x60;1&#x60; Sim&lt;br&gt;&#x60;2&#x60; Não&lt;br&gt;&#x60;3&#x60; Utilizar padrão da configuração da NFS-e&lt;br&gt;Reter o IR e descontar do total da NFS-e caso ultrapasse R$ 10,00. | [optional]
**texto** | **string** | Texto a ser incluído nas informações complementares da NF-e ou como descrição do serviço na NFS-e. | [optional]
**cfop** | **string** | Código fiscal. | [optional]
**iss** | [**\Eloom\BlingApi\Model\ContratosNotaFiscalISSDTO**](ContratosNotaFiscalISSDTO.md) |  | [optional]
**item** | [**\Eloom\BlingApi\Model\ContratosNotaFiscalItemDTO**](ContratosNotaFiscalItemDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
