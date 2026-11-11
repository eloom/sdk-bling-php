# ProdutosDadosDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**nome** | **string** |  |
**codigo** | **string** |  | [optional]
**preco** | **float** |  | [optional]
**tipo** | **string** | Tipo do produto &lt;br&gt; &#x60;S&#x60; Serviço &lt;br&gt; &#x60;P&#x60; Produto &lt;br&gt; &#x60;N&#x60; Serviço 06 21 22 |
**situacao** | **string** | Situação do produto &lt;br&gt; &#x60;A&#x60; Ativo &lt;br&gt; &#x60;I&#x60; Inativo | [default to 'A']
**formato** | **string** | Formato do produto &lt;br&gt; &#x60;S&#x60; Simples &lt;br&gt; &#x60;V&#x60; Com variações &lt;br&gt; &#x60;E&#x60; Com composição &lt;br&gt; |
**descricaoCurta** | **string** |  | [optional]
**imagemURL** | **string** | Link da primeira imagem de acordo com tipo de armazenamento definido. | [optional] [readonly]
**dataValidade** | **\DateTime** |  | [optional]
**unidade** | **string** |  | [optional]
**pesoLiquido** | **float** | Peso líquido em KG | [optional]
**pesoBruto** | **float** | Peso bruto em KG | [optional]
**volumes** | **int** |  | [optional]
**itensPorCaixa** | **float** |  | [optional]
**gtin** | **string** | Código GTIN (GTIN-8, GTIN-12, GTIN-13 ou GTIN-14) do produto que está sendo comercializado | [optional] [default to '']
**gtinEmbalagem** | **string** | Código GTIN (GTIN-8, GTIN-12 ou GTIN-13) da menor unidade comercializada no varejo | [optional] [default to '']
**tipoProducao** | **string** | Tipo da produção &lt;br&gt; &#x60;P&#x60; Própria &lt;br&gt; &#x60;T&#x60; Terceiros | [optional] [default to 'P']
**condicao** | **int** | Condição do produto &lt;br&gt; &#x60;0&#x60; Não especificado &lt;br&gt; &#x60;1&#x60; Novo &lt;br&gt; &#x60;2&#x60;Usado | [optional] [default to CONDICAO::NUMBER_0]
**freteGratis** | **bool** | Frete grátis &lt;br&gt; Valor default: &#x60;false&#x60; | [optional]
**marca** | **string** |  | [optional]
**descricaoComplementar** | **string** |  | [optional]
**linkExterno** | **string** |  | [optional]
**observacoes** | **string** |  | [optional]
**descricaoEmbalagemDiscreta** | **string** | Descrição discreta do produto para utilizar na declaração de conteúdo. | [optional]
**categoria** | [**\Eloom\BlingApi\Model\ProdutosCategoriaDTO**](ProdutosCategoriaDTO.md) |  | [optional]
**estoque** | [**\Eloom\BlingApi\Model\ProdutosEstoqueDTO**](ProdutosEstoqueDTO.md) |  | [optional]
**fornecedor** | [**\Eloom\BlingApi\Model\ProdutoFornecedorDTO**](ProdutoFornecedorDTO.md) |  | [optional]
**actionEstoque** | **string** | Ação de estoque ao transformar produto Simples em Variação &lt;br&gt; &#x60;Z&#x60; Irá zerar os saldos de estoque &lt;br&gt; &#x60;T&#x60; Transfere o estoque do produto pai para a primeira variação informada | [optional]
**dimensoes** | [**\Eloom\BlingApi\Model\ProdutosDimensoesDTO**](ProdutosDimensoesDTO.md) |  | [optional]
**tributacao** | [**\Eloom\BlingApi\Model\ProdutosTributacaoDTO**](ProdutosTributacaoDTO.md) |  | [optional]
**midia** | [**\Eloom\BlingApi\Model\ProdutosMidiaDTO**](ProdutosMidiaDTO.md) |  | [optional]
**linhaProduto** | [**\Eloom\BlingApi\Model\ProdutosLinhaProdutoDTO**](ProdutosLinhaProdutoDTO.md) |  | [optional]
**estrutura** | [**\Eloom\BlingApi\Model\ProdutosEstruturaDTO**](ProdutosEstruturaDTO.md) |  | [optional]
**camposCustomizados** | [**\Eloom\BlingApi\Model\ProdutosCampoCustomizadoDTO[]**](ProdutosCampoCustomizadoDTO.md) |  | [optional]
**artigoPerigoso** | **bool** | Indica se o produto é um artigo perigoso conforme regulamentação ANAC. Quando habilitado, adiciona automaticamente o código de serviço 095 nas etiquetas de envio. | [optional] [default to false]
**duns** | [**\Eloom\BlingApi\Model\ProdutosDadosDunsInner[]**](ProdutosDadosDunsInner.md) | Códigos DUN (embalagem de distribuição, padrão DUN-14) do produto. Disponível apenas para empresas com o módulo Checkin de Recebimentos habilitado. | [optional]
**variacoes** | [**\Eloom\BlingApi\Model\ProdutosDadosDTOAllOfVariacoes[]**](ProdutosDadosDTOAllOfVariacoes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
