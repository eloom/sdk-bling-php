# ContasPagarDadosDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**saldo** | **float** | Valor total subtraído dos valores dos recebimentos | [optional]
**dataEmissao** | **\DateTime** |  | [optional]
**vencimentoOriginal** | **\DateTime** |  | [readonly]
**numeroDocumento** | **string** | Número para controle interno da empresa | [optional]
**competencia** | **\DateTime** |  | [optional]
**historico** | **string** | Descriçao da conta para controle interno da empresa | [optional]
**numeroBanco** | **string** | Adicionado automaticamente com o número preenchido no cadastro do banco | [readonly]
**portador** | [**\Eloom\BlingApi\Model\ContasPortadorDTO**](ContasPortadorDTO.md) |  | [optional]
**categoria** | [**\Eloom\BlingApi\Model\ContasCategoriaDTO**](ContasCategoriaDTO.md) |  | [optional]
**borderos** | **int[]** |  | [readonly]
**ocorrencia** | [**\Eloom\BlingApi\Model\ContasPagarDadosDTOOcorrencia**](ContasPagarDadosDTOOcorrencia.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
