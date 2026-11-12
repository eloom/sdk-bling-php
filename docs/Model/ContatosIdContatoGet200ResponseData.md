# ContatosIdContatoGet200ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**nome** | **string** |  |
**codigo** | **string** |  | [optional]
**situacao** | **string** | Situação do contato &lt;br&gt; &#x60;A&#x60; Ativo &lt;br&gt; &#x60;E&#x60; Excluído &lt;br&gt; &#x60;I&#x60; Inativo &lt;br&gt; &#x60;S&#x60; Sem movimentação |
**numeroDocumento** | **string** | CPF ou CNPJ do contato | [optional]
**telefone** | **string** |  | [optional]
**celular** | **string** |  | [optional]
**fantasia** | **string** |  | [optional]
**tipo** | **string** | Tipo da pessoa &lt;br&gt; &#x60;J&#x60; Jurídica &lt;br&gt; &#x60;F&#x60; Física &lt;br&gt; &#x60;E&#x60; Estrangeira |
**indicadorIe** | **int** | Indicador de inscrição estadual &lt;br&gt; &#x60;1&#x60; Contribuinte ICMS &lt;br&gt; &#x60;2&#x60; Contribuinte isento de Inscrição no cadastro de Contribuintes &lt;br&gt; &#x60;9&#x60; Não Contribuinte | [optional]
**ie** | **string** | Inscrição estadual | [optional]
**rg** | **string** | RG do contato caso for pessoa física | [optional]
**inscricaoMunicipal** | **string** | Inscrição Municipal da empresa. Apenas para pessoa jurídica | [optional]
**orgaoEmissor** | **string** | Órgão emissor caso for pessoa física | [optional]
**email** | **string** |  | [optional]
**emailNotaFiscal** | **string** | E-mail para envio da NF-e | [optional]
**informacoesContato** | **string** | Informações de contato (campo livre) | [optional]
**orgaoPublico** | **string** | Órgão público? &lt;br&gt; &#x60;N&#x60; Não &lt;br&gt; &#x60;M&#x60; Municipal &lt;br&gt; &#x60;E&#x60; Estadual &lt;br&gt; &#x60;F&#x60; Federal | [optional]
**endereco** | [**\Eloom\BlingApi\Model\ContatosEnderecoDTO**](ContatosEnderecoDTO.md) |  | [optional]
**vendedor** | [**\Eloom\BlingApi\Model\ContatosVendedorDTO**](ContatosVendedorDTO.md) |  | [optional]
**dadosAdicionais** | [**\Eloom\BlingApi\Model\ContatosDadoAdicionalDTO**](ContatosDadoAdicionalDTO.md) |  | [optional]
**financeiro** | [**\Eloom\BlingApi\Model\ContatosFinanceiroDTO**](ContatosFinanceiroDTO.md) |  | [optional]
**pais** | [**\Eloom\BlingApi\Model\ContatosPaisDTO**](ContatosPaisDTO.md) |  | [optional]
**tiposContato** | [**\Eloom\BlingApi\Model\ContatosTipoContatoDTO[]**](ContatosTipoContatoDTO.md) |  | [optional]
**pessoasContato** | [**\Eloom\BlingApi\Model\ContatosPessoaContatoDTO[]**](ContatosPessoaContatoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
