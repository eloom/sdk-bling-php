# NotasFiscaisContatoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**nome** | **string** |  |
**tipoPessoa** | **string** | &#x60;F&#x60; Física &lt;br&gt; &#x60;J&#x60; Jurídica &lt;br&gt; &#x60;E&#x60; Estrangeira. |
**numeroDocumento** | **string** | CNPJ ou CPF. |
**ie** | **string** |  | [optional]
**rg** | **string** |  | [optional]
**contribuinte** | **int** | &#x60;1&#x60; Contribuinte do ICMS &lt;br&gt; &#x60;2&#x60; Contribuinte isento de ICMS &lt;br&gt; &#x60;9&#x60; Não contribuinte. |
**telefone** | **string** |  | [optional]
**email** | **string** |  | [optional]
**endereco** | [**\Eloom\BlingApi\Model\NotasFiscaisContatoEnderecoDTO**](NotasFiscaisContatoEnderecoDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
