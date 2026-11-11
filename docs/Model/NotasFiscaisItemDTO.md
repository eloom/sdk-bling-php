# NotasFiscaisItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**codigo** | **string** |  |
**descricao** | **string** |  | [optional]
**unidade** | **string** |  | [optional]
**quantidade** | **float** |  | [optional]
**valor** | **float** | Valor unitário do item. | [optional]
**valorTotal** | **float** |  | [optional] [readonly]
**tipo** | **string** | &#x60;P&#x60; Produto &lt;br&gt; &#x60;S&#x60; Serviço | [optional]
**pesoBruto** | **float** |  | [optional]
**pesoLiquido** | **float** |  | [optional]
**numeroPedidoCompra** | **string** |  | [optional]
**classificacaoFiscal** | **string** | NCM do item. | [optional]
**cest** | **string** |  | [optional]
**codigoServico** | **string** |  | [optional]
**origem** | **int** | &#x60;0&#x60; Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8 &lt;br&gt; &#x60;1&#x60; Estrangeira - Importação direta, exceto a indicada no código 6; 2: Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7 &lt;br&gt; &#x60;3&#x60; Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70% &lt;br&gt; &#x60;4&#x60; Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes &lt;br&gt; &#x60;5&#x60; Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40% &lt;br&gt;&#x60;6&#x60; Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX &lt;br&gt; &#x60;7&#x60; Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX &lt;br&gt; &#x60;8&#x60;: Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70% | [optional]
**informacoesAdicionais** | **string** |  | [optional]
**gtin** | **string** |  | [optional] [readonly]
**cfop** | **string** |  | [optional] [readonly]
**impostos** | [**\Eloom\BlingApi\Model\NotasFiscaisImpostoDTO**](NotasFiscaisImpostoDTO.md) |  | [optional]
**documentoReferenciado** | [**\Eloom\BlingApi\Model\NotasFiscaisDocumentoReferenciadoItemDTO**](NotasFiscaisDocumentoReferenciadoItemDTO.md) | Documento fiscal referenciado pelo item. | [optional]
**unidadeTributavel** | [**\Eloom\BlingApi\Model\NotasFiscaisUnidadeTributavelDTO**](NotasFiscaisUnidadeTributavelDTO.md) |  | [optional]
**exportacao** | [**\Eloom\BlingApi\Model\NotasFiscaisItemExportacaoDTO**](NotasFiscaisItemExportacaoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
