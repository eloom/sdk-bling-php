# ConfiguracaoAdicionalNotaServicoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cFPS** | **string** | Código Fiscal de Prestação de Serviço | [optional]
**cFOP** | **string** | Código Fiscal de Operações e Prestações | [optional]
**aEDF** | **string** | Autorização de Emissão de Documento Fiscal Eletrônico | [optional]
**proximoNumeroLote** | **int** |  | [optional]
**observacaoImpressaNota** | **string** | Observação utilizada apenas para impressão | [optional]
**descricaoComplementar** | **string** | Será adicionada abaixa da descrição do serviço em todas as notas | [optional]
**tipoEmissao** | **string** | &#x60;T&#x60; Todos &lt;br&gt;&#x60;R&#x60; RPS e NFS-e &lt;br&gt;&#x60;N&#x60; Apenas NFS-e | [optional]
**campoNumeroDocContas** | **bool** | Escolha qual informação será utilizada como nº do documento ao lançar contas. Utilize o campo RPS caso o lançamento de contas ocorra antes do envio da nota | [optional]
**incentivadorFiscal** | **bool** |  | [optional]
**alterarSituacao** | **bool** | Permitir alteração de situação por usuários | [optional]
**incluirParcelas** | **bool** | Incluir informação das parcelas na descrição dos serviços na emissão da NFS-e | [optional]
**considerarDataParcela** | **bool** | Permite utilizar a data de vencimento da parcela da venda na geração automática de parcelas da nota de serviço | [optional]
**considerarDataOrdemServico** | **bool** | Permite utilizar a data de vencimento da parcela da ordem de serviço na geração automática de parcelas da nota de serviço | [optional]
**cadastroPrefeitura** | [**\Eloom\BlingApi\Model\ConfiguracaoCadastroPrefeituraNotaServicoDTO**](ConfiguracaoCadastroPrefeituraNotaServicoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
