# NotasFiscaisDadosPostDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operacaoComExterior** | **bool** | Define se a nota é uma operação com o exterior. Para notas de saída (tipo&#x3D;1) será tratada como exportação. | [optional]
**exportacao** | [**\Eloom\BlingApi\Model\NotasFiscaisExportacaoDTO**](NotasFiscaisExportacaoDTO.md) |  | [optional]
**finalidade** | **int** | &#x60;1&#x60; Normal &lt;br&gt;&#x60;2&#x60; Complementar &lt;br&gt;&#x60;3&#x60; Ajuste &lt;br&gt;&#x60;4&#x60; Devolução &lt;br&gt;&#x60;5&#x60; Crédito &lt;br&gt;&#x60;6&#x60; Débito | [optional]
**tipoNota** | **string** | Obrigatório quando finalidade for 5 (Crédito) ou 6 (Débito). &lt;br&gt;&lt;br&gt;**Crédito (finalidade 5):** &lt;br&gt;&#x60;01&#x60; Multa e juros &lt;br&gt;&#x60;02&#x60; Apropriação de crédito presumido de IBS sobre o saldo devedor na ZFM &lt;br&gt;&#x60;03&#x60; Retorno &lt;br&gt;&#x60;04&#x60; Redução de valores &lt;br&gt;&#x60;05&#x60; Transferência de crédito na sucessão &lt;br&gt;&#x60;06&#x60; Retorno por recusa parcial na entrega &lt;br&gt;&lt;br&gt;**Débito (finalidade 6):** &lt;br&gt;&#x60;01&#x60; Transferência de créditos para Cooperativas &lt;br&gt;&#x60;02&#x60; Anulação de Crédito por Saídas Imunes/Isentas &lt;br&gt;&#x60;03&#x60; Débitos de notas fiscais não processadas na apuração &lt;br&gt;&#x60;04&#x60; Multa e juros &lt;br&gt;&#x60;05&#x60; Transferência de crédito de sucessão &lt;br&gt;&#x60;06&#x60; Pagamento antecipado &lt;br&gt;&#x60;07&#x60; Perda em estoque &lt;br&gt;&#x60;08&#x60; Desenquadramento do Simples Nacional | [optional]
**seguro** | **float** |  | [optional]
**despesas** | **float** |  | [optional]
**desconto** | **float** |  | [optional]
**observacoes** | **string** |  | [optional]
**xml** | **string** |  | [optional] [readonly]
**linkDanfe** | **string** |  | [optional] [readonly]
**linkPDF** | **string** |  | [optional] [readonly]
**documentoReferenciado** | [**\Eloom\BlingApi\Model\NotasFiscaisDocumentoReferenciadoDTO**](NotasFiscaisDocumentoReferenciadoDTO.md) |  | [optional]
**documentosReferenciados** | [**\Eloom\BlingApi\Model\NotasFiscaisDocumentoReferenciadoDTO[]**](NotasFiscaisDocumentoReferenciadoDTO.md) |  | [optional]
**itens** | [**\Eloom\BlingApi\Model\NotasFiscaisItemDTO[]**](NotasFiscaisItemDTO.md) |  | [optional]
**parcelas** | [**\Eloom\BlingApi\Model\NotasFiscaisParcelaDTO[]**](NotasFiscaisParcelaDTO.md) |  | [optional]
**transporte** | [**\Eloom\BlingApi\Model\NotasFiscaisTransportePostDTO**](NotasFiscaisTransportePostDTO.md) |  | [optional]
**notaFiscalProdutorRuralReferenciada** | [**\Eloom\BlingApi\Model\NotasFiscaisNotaFiscalProdutorRuralReferenciadaDTO**](NotasFiscaisNotaFiscalProdutorRuralReferenciadaDTO.md) |  | [optional]
**intermediador** | [**\Eloom\BlingApi\Model\NotasFiscaisIntermediadorDTO**](NotasFiscaisIntermediadorDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
