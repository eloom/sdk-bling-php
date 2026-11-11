# NotasServicosTributacaoIbsCbsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**indicadorOperacao** | **string** | Código que indica onde a operação será realizada (6 dígitos). Valores comuns: &#39;100301&#39; &#x3D; Domicílio do adquirente, &#39;100302&#39; &#x3D; Local da prestação do serviço, &#39;100303&#39; &#x3D; Outro local no país. Consulte sua contabilidade ou a legislação vigente para determinar o código adequado. |
**tipoOperacao** | **string** | Tipo da operação tributável. Valores aceitos: &#39;1&#39; &#x3D; Fornecimento de serviço (operação padrão onde o emitente é o prestador), &#39;2&#39; &#x3D; Recebimento do pagamento (quando há intermediação ou pagamento diferido). |
**tipoEnteGovernamental** | **string** | Tipo de ente governamental tomador do serviço. Informe APENAS quando o cliente for órgão público. Valores aceitos: &#39;1&#39; &#x3D; União (órgão federal), &#39;2&#39; &#x3D; Estado (órgão estadual), &#39;3&#39; &#x3D; Distrito Federal, &#39;4&#39; &#x3D; Município (órgão municipal). Se informado, pode haver redução ou isenção da alíquota conforme legislação. | [optional]
**indicadorUsoConsumoPessoal** | **int** | Indicador de Uso e Consumo (art. 57 Reforma Tributária IBS/CBS). 0&#x3D;Não é consumidor final (B2B); 1&#x3D;É consumidor final (varejo); 2&#x3D;Não informar (omite o campo no XML). Padrão: 1. | [optional]
**tributacao** | [**\Eloom\BlingApi\Model\NotasServicosTributacaoIbsCbsValoresDTO**](NotasServicosTributacaoIbsCbsValoresDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
