# ContasReceberDadosOrigemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**tipoOrigem** | **string** |  | [optional]
**numero** | **string** |  | [optional]
**dataEmissao** | **string** |  | [optional]
**valor** | **float** |  | [optional]
**situacao** | **int** | Situações da nota fiscal: &lt;br&gt; &#x60;1&#x60; Pendente: Situação inicial. &lt;br&gt; &#x60;3&#x60; Cancelada: Nota foi emitida e posteriormente cancelada. &lt;br&gt; &#x60;4&#x60; Aguardando recibo: Quando há uma tentativa de envio de uma nota pendente ou rejeitada. &lt;br&gt; &#x60;5&#x60; Rejeitada: Rejeição no envio. &lt;br&gt; &#x60;6&#x60; Autorizada: Sucesso no envio. &lt;br&gt; &#x60;7&#x60; Emitida DANFE: Após emitir a DANFE de uma nota autorizada. &lt;br&gt; &#x60;8&#x60; Registrada: Notas importadas no sistema. &lt;br&gt; &#x60;9&#x60; Aguardando protocolo: Durante uma tentativa de envio sem sucesso. &lt;br&gt; &#x60;10&#x60; Denegada: Devido a pendências do remetente ou destinatário junto à SEFAZ. &lt;br&gt; &#x60;11&#x60; Consulta situação: Quando a nota é rejeitada por duplicidade sem diferença na chave de acesso. &lt;br&gt; &#x60;12&#x60; Bloqueada: Quando ocorrem várias tentativas de envio que resultam na mesma rejeição. &lt;br&gt; &#x60;13&#x60; Contingência: Quando gerado xml e danfe em modo de contingência, aguardando envio da transmissão. Exclusiva da NFC-e. &lt;br&gt;&lt;br&gt; Situações da venda: &lt;br&gt; &#x60;0&#x60; Em aberto &lt;br&gt; &#x60;1&#x60; Atendido &lt;br&gt; &#x60;2&#x60; Cancelado &lt;br&gt; &#x60;3&#x60; Em andamento &lt;br&gt; &#x60;5&#x60; Faturado parcialmente &lt;br&gt; &#x60;6&#x60; Atendido parcialmente &lt;br&gt; &#x60;7&#x60; Aguardando pagamento &lt;br&gt; &#x60;8&#x60; Pagamento confirmado &lt;br&gt; &#x60;10&#x60; Em digitação &lt;br&gt; &#x60;11&#x60; Verificado &lt;br&gt; &#x60;12&#x60; Checkout parcial | [optional]
**url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
