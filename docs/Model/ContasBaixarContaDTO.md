# ContasBaixarContaDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **\DateTime** |  |
**usarDataVencimento** | **bool** |  |
**portador** | [**\Eloom\BlingApi\Model\ContasPortadorDTO**](ContasPortadorDTO.md) |  |
**categoria** | [**\Eloom\BlingApi\Model\ContasCategoriaDTO**](ContasCategoriaDTO.md) |  |
**historico** | **string** | Descriçao da conta para controle interno da empresa |
**juros** | **float** | Valor em reais dos juros. | [optional] [default to 0]
**desconto** | **float** | Valor em reais do desconto. | [optional] [default to 0]
**acrescimo** | **float** | Valor em reais do acréscimo. | [optional] [default to 0]
**valorRecebido** | **float** | Valor bruto da conta, incluindo a taxa do marketplace se aplicável. Se não for especificado, o valor total da conta será usado | [optional]
**tarifa** | **float** | O valor da tarifa deve ser preenchido caso a forma de pagamento possua taxas de alíquota ou de valor fixo. | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
