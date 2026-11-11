# ContasReceberDadosBaseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**saldo** | **float** | É calculado subtraindo os valores dos recebimentos do valor da conta | [readonly]
**dataEmissao** | **\DateTime** |  | [optional]
**vencimentoOriginal** | **\DateTime** |  | [readonly]
**numeroDocumento** | **string** | Número para controle interno da empresa | [optional]
**competencia** | **\DateTime** |  | [optional]
**historico** | **string** | Descriçao da conta para controle interno da empresa | [optional]
**numeroBanco** | **string** | Adicionado automaticamente com o número preenchido no cadastro do banco | [readonly]
**portador** | [**\Eloom\BlingApi\Model\ContasPortadorDTO**](ContasPortadorDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\ContasCategoriaDTO**](ContasCategoriaDTO.md) |  | [optional]
**vendedor** | [**\Eloom\BlingApi\Model\ContasReceberVendedorDTO**](ContasReceberVendedorDTO.md) |  | [optional]
**borderos** | **int[]** | IDs de borderos relacionados à conta caso ela possua pagamentos | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
