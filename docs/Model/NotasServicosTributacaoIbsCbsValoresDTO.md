# NotasServicosTributacaoIbsCbsValoresDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**codigoSituacaoTributaria** | **string** | Código de Situação Tributária (CST) com 3 dígitos. Define o regime de tributação da operação. Exemplos: &#39;000&#39; &#x3D; Tributação integral, &#39;200&#39; &#x3D; Alíquota reduzida, &#39;410&#39; &#x3D; Imunidade, &#39;550&#39; &#x3D; Suspensão. Consulte sua contabilidade para determinar o CST correto conforme a natureza da operação. |
**classificacaoTributaria** | **string** | Código da Classificação Tributária com 6 dígitos. Define a situação específica dentro do CST informado. Cada CST possui suas próprias classificações tributárias válidas. Exemplos: &#39;000001&#39; &#x3D; Tributação integral, &#39;200028&#39; &#x3D; Serviços de educação com redução de alíquota, &#39;410004&#39; &#x3D; Exportação. Consulte sua contabilidade para o código correto conforme a natureza do serviço. |
**codigoCreditoPresumido** | **string** | Código do crédito presumido (2 dígitos). Informe APENAS quando a classificação tributária conceder direito a crédito presumido. Consulte sua contabilidade para verificar se sua operação tem direito a crédito presumido e qual código utilizar. | [optional]
**cstRegimeRegular** | **string** | CST aplicável ao regime regular de tributação (3 dígitos). Utilize quando a operação estiver em regime especial mas precisa informar a situação no regime regular. Consulte sua contabilidade para determinar se este campo é necessário. | [optional]
**classificacaoTributariaRegular** | **string** | Classificação tributária para o regime regular (6 dígitos). Deve ser compatível com o &#39;cstRegimeRegular&#39; informado. Consulte sua contabilidade para o código correto. | [optional]
**percentualDiferimentoEstadual** | **float** | Percentual de diferimento do IBS estadual (parcela UF), de 0.00 a 100.00. O diferimento posterga o pagamento do imposto para etapa posterior da cadeia. Consulte sua contabilidade para verificar se há diferimento aplicável e qual percentual utilizar. | [optional]
**percentualDiferimentoMunicipal** | **float** | Percentual de diferimento do IBS municipal, de 0.00 a 100.00. Aplica-se à parcela municipal do imposto sobre bens e serviços. Consulte sua contabilidade para verificar se há diferimento aplicável e qual percentual utilizar. | [optional]
**percentualDiferimentoCBS** | **float** | Percentual de diferimento da Contribuição sobre Bens e Serviços (CBS), de 0.00 a 100.00. A CBS é o tributo federal da Reforma Tributária. Consulte sua contabilidade para verificar se há diferimento aplicável e qual percentual utilizar. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
