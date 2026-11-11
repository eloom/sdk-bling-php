# ProdutosDadosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**idProdutoPai** | **int** | ID do produto pai, caso seja uma variação. | [optional] [readonly]
**nome** | **string** |  |
**codigo** | **string** |  | [optional]
**preco** | **float** |  | [optional]
**precoCusto** | **float** | Preço de custo do fornecedor padrão do produto. | [optional] [readonly]
**estoque** | [**\Eloom\BlingApi\Model\EstoqueGetAllResponseDTO**](EstoqueGetAllResponseDTO.md) |  | [optional]
**tipo** | **string** | Tipo do produto &lt;br&gt; &#x60;S&#x60; Serviço &lt;br&gt; &#x60;P&#x60; Produto &lt;br&gt; &#x60;N&#x60; Serviço 06 21 22 |
**situacao** | **string** | Situação do produto &lt;br&gt; &#x60;A&#x60; Ativo &lt;br&gt; &#x60;I&#x60; Inativo | [default to 'A']
**formato** | **string** | Formato do produto &lt;br&gt; &#x60;S&#x60; Simples &lt;br&gt; &#x60;V&#x60; Com variações &lt;br&gt; &#x60;E&#x60; Com composição &lt;br&gt; |
**descricaoCurta** | **string** |  | [optional]
**imagemURL** | **string** | Link da primeira imagem de acordo com tipo de armazenamento definido. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
