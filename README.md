# OpenAPIClient-php

A sessão abaixo contém a documentação das API's que o Bling disponibiliza.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2-Docs
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Eloom\BlingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Eloom\BlingApi\Api\AnnciosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipoIntegracao = MercadoLivre; // string | Tipo de integração
$idLoja = 1; // int | ID da loja
$pagina = 1; // int | N° da página da listagem
$limite = 100; // int | Quantidade de registros que devem ser exibidos por página
$situacao = 1; // int | Situação do anúncio <br> `1` Publicado <br> `2` Rascunho <br> `3` Com problema <br> `4` Pausado
$idProduto = 12345; // int | ID do produto

try {
    $result = $apiInstance->anunciosGet($tipoIntegracao, $idLoja, $pagina, $limite, $situacao, $idProduto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnciosApi->anunciosGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.bling.com.br/Api/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnciosApi* | [**anunciosGet**](docs/Api/AnnciosApi.md#anunciosget) | **GET** /anuncios | Obtém anúncios
*AnnciosApi* | [**anunciosIdAnuncioDelete**](docs/Api/AnnciosApi.md#anunciosidanunciodelete) | **DELETE** /anuncios/{idAnuncio} | Remove um anúncio
*AnnciosApi* | [**anunciosIdAnuncioGet**](docs/Api/AnnciosApi.md#anunciosidanuncioget) | **GET** /anuncios/{idAnuncio} | Obtém um anúncio
*AnnciosApi* | [**anunciosIdAnuncioPausarPost**](docs/Api/AnnciosApi.md#anunciosidanunciopausarpost) | **POST** /anuncios/{idAnuncio}/pausar | Pausa um anúncio
*AnnciosApi* | [**anunciosIdAnuncioPublicarPost**](docs/Api/AnnciosApi.md#anunciosidanunciopublicarpost) | **POST** /anuncios/{idAnuncio}/publicar | Publica um anúncio
*AnnciosApi* | [**anunciosIdAnuncioPut**](docs/Api/AnnciosApi.md#anunciosidanuncioput) | **PUT** /anuncios/{idAnuncio} | Altera um anúncio
*AnnciosApi* | [**anunciosPost**](docs/Api/AnnciosApi.md#anunciospost) | **POST** /anuncios | Cria um anúncio
*AnnciosCategoriasApi* | [**anunciosCategoriasGet**](docs/Api/AnnciosCategoriasApi.md#anuncioscategoriasget) | **GET** /anuncios/categorias | Obtém categorias de anúncios
*AnnciosCategoriasApi* | [**anunciosCategoriasIdCategoriaGet**](docs/Api/AnnciosCategoriasApi.md#anuncioscategoriasidcategoriaget) | **GET** /anuncios/categorias/{idCategoria} | Obtém uma categoria de anúncio
*BordersApi* | [**borderosIdBorderoDelete**](docs/Api/BordersApi.md#borderosidborderodelete) | **DELETE** /borderos/{idBordero} | Remove um borderô
*BordersApi* | [**borderosIdBorderoGet**](docs/Api/BordersApi.md#borderosidborderoget) | **GET** /borderos/{idBordero} | Obtém um borderô
*CaixasEBancosApi* | [**caixasGet**](docs/Api/CaixasEBancosApi.md#caixasget) | **GET** /caixas | Obtém lista de lançamentos de caixas e bancos.
*CaixasEBancosApi* | [**caixasIdCaixaDelete**](docs/Api/CaixasEBancosApi.md#caixasidcaixadelete) | **DELETE** /caixas/{idCaixa} | Remove um lançamento de caixa e banco
*CaixasEBancosApi* | [**caixasIdCaixaGet**](docs/Api/CaixasEBancosApi.md#caixasidcaixaget) | **GET** /caixas/{idCaixa} | Obtém um lançamento de caixa e banco.
*CaixasEBancosApi* | [**caixasIdCaixaPut**](docs/Api/CaixasEBancosApi.md#caixasidcaixaput) | **PUT** /caixas/{idCaixa} | Atualiza um lançamento de caixa e banco.
*CaixasEBancosApi* | [**caixasPost**](docs/Api/CaixasEBancosApi.md#caixaspost) | **POST** /caixas | Cria um novo lançamento de caixa e banco.
*CamposCustomizadosApi* | [**camposCustomizadosIdCampoCustomizadoDelete**](docs/Api/CamposCustomizadosApi.md#camposcustomizadosidcampocustomizadodelete) | **DELETE** /campos-customizados/{idCampoCustomizado} | Remove um campo customizado
*CamposCustomizadosApi* | [**camposCustomizadosIdCampoCustomizadoGet**](docs/Api/CamposCustomizadosApi.md#camposcustomizadosidcampocustomizadoget) | **GET** /campos-customizados/{idCampoCustomizado} | Obtém um campo customizado
*CamposCustomizadosApi* | [**camposCustomizadosIdCampoCustomizadoPut**](docs/Api/CamposCustomizadosApi.md#camposcustomizadosidcampocustomizadoput) | **PUT** /campos-customizados/{idCampoCustomizado} | Altera um campo customizado
*CamposCustomizadosApi* | [**camposCustomizadosIdCampoCustomizadoSituacoesPatch**](docs/Api/CamposCustomizadosApi.md#camposcustomizadosidcampocustomizadosituacoespatch) | **PATCH** /campos-customizados/{idCampoCustomizado}/situacoes | Altera a situação de um campo customizado
*CamposCustomizadosApi* | [**camposCustomizadosModulosGet**](docs/Api/CamposCustomizadosApi.md#camposcustomizadosmodulosget) | **GET** /campos-customizados/modulos | Obtém módulos que possuem campos customizados
*CamposCustomizadosApi* | [**camposCustomizadosModulosIdModuloGet**](docs/Api/CamposCustomizadosApi.md#camposcustomizadosmodulosidmoduloget) | **GET** /campos-customizados/modulos/{idModulo} | Obtém campos customizados por módulo
*CamposCustomizadosApi* | [**camposCustomizadosPost**](docs/Api/CamposCustomizadosApi.md#camposcustomizadospost) | **POST** /campos-customizados | Cria um campo customizado
*CamposCustomizadosApi* | [**camposCustomizadosTiposGet**](docs/Api/CamposCustomizadosApi.md#camposcustomizadostiposget) | **GET** /campos-customizados/tipos | Obtém tipos de campos customizados
*CanaisDeVendaApi* | [**canaisVendaGet**](docs/Api/CanaisDeVendaApi.md#canaisvendaget) | **GET** /canais-venda | Obtém canais de venda
*CanaisDeVendaApi* | [**canaisVendaIdCanalVendaGet**](docs/Api/CanaisDeVendaApi.md#canaisvendaidcanalvendaget) | **GET** /canais-venda/{idCanalVenda} | Obtém um canal de venda
*CanaisDeVendaApi* | [**canaisVendaTiposGet**](docs/Api/CanaisDeVendaApi.md#canaisvendatiposget) | **GET** /canais-venda/tipos | Obtém os tipos de canais de venda
*CategoriasLojasApi* | [**categoriasLojasGet**](docs/Api/CategoriasLojasApi.md#categoriaslojasget) | **GET** /categorias/lojas | Obtém categorias de lojas virtuais vinculadas a de produtos
*CategoriasLojasApi* | [**categoriasLojasIdCategoriaLojaDelete**](docs/Api/CategoriasLojasApi.md#categoriaslojasidcategorialojadelete) | **DELETE** /categorias/lojas/{idCategoriaLoja} | Remove o vínculo de uma categoria da loja com a de produto
*CategoriasLojasApi* | [**categoriasLojasIdCategoriaLojaGet**](docs/Api/CategoriasLojasApi.md#categoriaslojasidcategorialojaget) | **GET** /categorias/lojas/{idCategoriaLoja} | Obtém uma categoria da loja vinculada a de produto
*CategoriasLojasApi* | [**categoriasLojasIdCategoriaLojaPut**](docs/Api/CategoriasLojasApi.md#categoriaslojasidcategorialojaput) | **PUT** /categorias/lojas/{idCategoriaLoja} | Altera o vínculo de uma categoria da loja com a de produto
*CategoriasLojasApi* | [**categoriasLojasPost**](docs/Api/CategoriasLojasApi.md#categoriaslojaspost) | **POST** /categorias/lojas | Cria o vínculo de uma categoria da loja com a de produto
*CategoriasProdutosApi* | [**categoriasProdutosGet**](docs/Api/CategoriasProdutosApi.md#categoriasprodutosget) | **GET** /categorias/produtos | Obtém categorias de produtos
*CategoriasProdutosApi* | [**categoriasProdutosIdCategoriaProdutoDelete**](docs/Api/CategoriasProdutosApi.md#categoriasprodutosidcategoriaprodutodelete) | **DELETE** /categorias/produtos/{idCategoriaProduto} | Remove uma categoria de produto
*CategoriasProdutosApi* | [**categoriasProdutosIdCategoriaProdutoGet**](docs/Api/CategoriasProdutosApi.md#categoriasprodutosidcategoriaprodutoget) | **GET** /categorias/produtos/{idCategoriaProduto} | Obtém uma categoria de produto
*CategoriasProdutosApi* | [**categoriasProdutosIdCategoriaProdutoPut**](docs/Api/CategoriasProdutosApi.md#categoriasprodutosidcategoriaprodutoput) | **PUT** /categorias/produtos/{idCategoriaProduto} | Altera uma categoria de produto
*CategoriasProdutosApi* | [**categoriasProdutosPost**](docs/Api/CategoriasProdutosApi.md#categoriasprodutospost) | **POST** /categorias/produtos | Cria uma categoria de produto
*CategoriasReceitasEDespesasApi* | [**categoriasReceitasDespesasDelete**](docs/Api/CategoriasReceitasEDespesasApi.md#categoriasreceitasdespesasdelete) | **DELETE** /categorias/receitas-despesas | Remove múltiplas categorias de receita e despesa
*CategoriasReceitasEDespesasApi* | [**categoriasReceitasDespesasGet**](docs/Api/CategoriasReceitasEDespesasApi.md#categoriasreceitasdespesasget) | **GET** /categorias/receitas-despesas | Obtém categorias de receitas e despesas
*CategoriasReceitasEDespesasApi* | [**categoriasReceitasDespesasIdCategoriaDelete**](docs/Api/CategoriasReceitasEDespesasApi.md#categoriasreceitasdespesasidcategoriadelete) | **DELETE** /categorias/receitas-despesas/{idCategoria} | Remove uma categoria de receita e despesa
*CategoriasReceitasEDespesasApi* | [**categoriasReceitasDespesasIdCategoriaGet**](docs/Api/CategoriasReceitasEDespesasApi.md#categoriasreceitasdespesasidcategoriaget) | **GET** /categorias/receitas-despesas/{idCategoria} | Obtém uma categoria de receita e despesa
*CategoriasReceitasEDespesasApi* | [**categoriasReceitasDespesasIdCategoriaPut**](docs/Api/CategoriasReceitasEDespesasApi.md#categoriasreceitasdespesasidcategoriaput) | **PUT** /categorias/receitas-despesas/{idCategoria} | Atualiza uma categoria de receita e despesa
*CategoriasReceitasEDespesasApi* | [**categoriasReceitasDespesasPost**](docs/Api/CategoriasReceitasEDespesasApi.md#categoriasreceitasdespesaspost) | **POST** /categorias/receitas-despesas | Cria uma categoria de receita e despesa
*ContasAPagarApi* | [**contasPagarGet**](docs/Api/ContasAPagarApi.md#contaspagarget) | **GET** /contas/pagar | Obtém contas a pagar
*ContasAPagarApi* | [**contasPagarIdContaPagarBaixarPost**](docs/Api/ContasAPagarApi.md#contaspagaridcontapagarbaixarpost) | **POST** /contas/pagar/{idContaPagar}/baixar | Cria o recebimento de uma conta a pagar
*ContasAPagarApi* | [**contasPagarIdContaPagarDelete**](docs/Api/ContasAPagarApi.md#contaspagaridcontapagardelete) | **DELETE** /contas/pagar/{idContaPagar} | Remove uma conta a pagar
*ContasAPagarApi* | [**contasPagarIdContaPagarGet**](docs/Api/ContasAPagarApi.md#contaspagaridcontapagarget) | **GET** /contas/pagar/{idContaPagar} | Obtém uma conta a pagar
*ContasAPagarApi* | [**contasPagarIdContaPagarPut**](docs/Api/ContasAPagarApi.md#contaspagaridcontapagarput) | **PUT** /contas/pagar/{idContaPagar} | Atualiza uma conta a pagar
*ContasAPagarApi* | [**contasPagarPost**](docs/Api/ContasAPagarApi.md#contaspagarpost) | **POST** /contas/pagar | Cria uma conta a pagar
*ContasAReceberApi* | [**contasReceberBoletosCancelarPost**](docs/Api/ContasAReceberApi.md#contasreceberboletoscancelarpost) | **POST** /contas/receber/boletos/cancelar | Cancela boletos de contas a receber
*ContasAReceberApi* | [**contasReceberBoletosGet**](docs/Api/ContasAReceberApi.md#contasreceberboletosget) | **GET** /contas/receber/boletos | Obtém boletos de contas a receber
*ContasAReceberApi* | [**contasReceberGet**](docs/Api/ContasAReceberApi.md#contasreceberget) | **GET** /contas/receber | Obtém contas a receber
*ContasAReceberApi* | [**contasReceberIdContaReceberBaixarPost**](docs/Api/ContasAReceberApi.md#contasreceberidcontareceberbaixarpost) | **POST** /contas/receber/{idContaReceber}/baixar | Cria o recebimento de uma conta a receber
*ContasAReceberApi* | [**contasReceberIdContaReceberDelete**](docs/Api/ContasAReceberApi.md#contasreceberidcontareceberdelete) | **DELETE** /contas/receber/{idContaReceber} | Remove uma conta a receber
*ContasAReceberApi* | [**contasReceberIdContaReceberGet**](docs/Api/ContasAReceberApi.md#contasreceberidcontareceberget) | **GET** /contas/receber/{idContaReceber} | Obtém uma conta a receber
*ContasAReceberApi* | [**contasReceberIdContaReceberPut**](docs/Api/ContasAReceberApi.md#contasreceberidcontareceberput) | **PUT** /contas/receber/{idContaReceber} | Altera uma conta a receber
*ContasAReceberApi* | [**contasReceberPost**](docs/Api/ContasAReceberApi.md#contasreceberpost) | **POST** /contas/receber | Cria uma conta a receber
*ContasFinanceirasApi* | [**contasContabeisGet**](docs/Api/ContasFinanceirasApi.md#contascontabeisget) | **GET** /contas-contabeis | Obtém contas financeiras
*ContasFinanceirasApi* | [**contasContabeisIdContaContabilGet**](docs/Api/ContasFinanceirasApi.md#contascontabeisidcontacontabilget) | **GET** /contas-contabeis/{idContaContabil} | Obtém uma conta financeira
*ContatosApi* | [**contatosConsumidorFinalGet**](docs/Api/ContatosApi.md#contatosconsumidorfinalget) | **GET** /contatos/consumidor-final | Obtém os dados do contato Consumidor Final
*ContatosApi* | [**contatosDelete**](docs/Api/ContatosApi.md#contatosdelete) | **DELETE** /contatos | Remove múltiplos contatos
*ContatosApi* | [**contatosGet**](docs/Api/ContatosApi.md#contatosget) | **GET** /contatos | Obtém contatos
*ContatosApi* | [**contatosIdContatoDelete**](docs/Api/ContatosApi.md#contatosidcontatodelete) | **DELETE** /contatos/{idContato} | Remove um contato
*ContatosApi* | [**contatosIdContatoGet**](docs/Api/ContatosApi.md#contatosidcontatoget) | **GET** /contatos/{idContato} | Obtém um contato
*ContatosApi* | [**contatosIdContatoPut**](docs/Api/ContatosApi.md#contatosidcontatoput) | **PUT** /contatos/{idContato} | Altera um contato
*ContatosApi* | [**contatosIdContatoSituacoesPatch**](docs/Api/ContatosApi.md#contatosidcontatosituacoespatch) | **PATCH** /contatos/{idContato}/situacoes | Altera a situação de um contato
*ContatosApi* | [**contatosIdContatoTiposGet**](docs/Api/ContatosApi.md#contatosidcontatotiposget) | **GET** /contatos/{idContato}/tipos | Obtém os tipos de contato de um contato
*ContatosApi* | [**contatosPost**](docs/Api/ContatosApi.md#contatospost) | **POST** /contatos | Cria um contato
*ContatosApi* | [**contatosSituacoesPost**](docs/Api/ContatosApi.md#contatossituacoespost) | **POST** /contatos/situacoes | Altera a situação de múltiplos contatos
*ContatosTiposApi* | [**contatosTiposGet**](docs/Api/ContatosTiposApi.md#contatostiposget) | **GET** /contatos/tipos | Obtém tipos de contato
*ContratosApi* | [**contratosGet**](docs/Api/ContratosApi.md#contratosget) | **GET** /contratos | Obtém contratos
*ContratosApi* | [**contratosIdContratoDelete**](docs/Api/ContratosApi.md#contratosidcontratodelete) | **DELETE** /contratos/{idContrato} | Remove um contrato
*ContratosApi* | [**contratosIdContratoGet**](docs/Api/ContratosApi.md#contratosidcontratoget) | **GET** /contratos/{idContrato} | Obtém um contrato
*ContratosApi* | [**contratosIdContratoPut**](docs/Api/ContratosApi.md#contratosidcontratoput) | **PUT** /contratos/{idContrato} | Altera um contrato
*ContratosApi* | [**contratosPost**](docs/Api/ContratosApi.md#contratospost) | **POST** /contratos | Cria um contrato
*DepsitosApi* | [**depositosGet**](docs/Api/DepsitosApi.md#depositosget) | **GET** /depositos | Obtém depósitos
*DepsitosApi* | [**depositosIdDepositoGet**](docs/Api/DepsitosApi.md#depositosiddepositoget) | **GET** /depositos/{idDeposito} | Obtém um depósito
*DepsitosApi* | [**depositosIdDepositoPut**](docs/Api/DepsitosApi.md#depositosiddepositoput) | **PUT** /depositos/{idDeposito} | Altera um depósito
*DepsitosApi* | [**depositosPost**](docs/Api/DepsitosApi.md#depositospost) | **POST** /depositos | Cria um depósito
*DocumentosCompartilhadosApi* | [**call2f50b253b22d2d84e39cad9beb844da1**](docs/Api/DocumentosCompartilhadosApi.md#call2f50b253b22d2d84e39cad9beb844da1) | **GET** /documentos-compartilhados/{token} | Obtém um documento compartilhado.
*EmpresasApi* | [**empresasMeDadosBasicosGet**](docs/Api/EmpresasApi.md#empresasmedadosbasicosget) | **GET** /empresas/me/dados-basicos | Obtém dados básicos da empresa
*EstoquesApi* | [**estoquesIdEstoquePut**](docs/Api/EstoquesApi.md#estoquesidestoqueput) | **PUT** /estoques/{idEstoque} | Altera um registro de estoque
*EstoquesApi* | [**estoquesPost**](docs/Api/EstoquesApi.md#estoquespost) | **POST** /estoques | Cria um registro de estoque
*EstoquesApi* | [**estoquesSaldosGet**](docs/Api/EstoquesApi.md#estoquessaldosget) | **GET** /estoques/saldos | Obtém o saldo em estoque de produtos
*EstoquesApi* | [**estoquesSaldosIdDepositoGet**](docs/Api/EstoquesApi.md#estoquessaldosiddepositoget) | **GET** /estoques/saldos/{idDeposito} | Obtém o saldo em estoque de produtos por depósito
*FormasDePagamentosApi* | [**formasPagamentosGet**](docs/Api/FormasDePagamentosApi.md#formaspagamentosget) | **GET** /formas-pagamentos | Obtém formas de pagamentos
*FormasDePagamentosApi* | [**formasPagamentosIdFormaPagamentoDelete**](docs/Api/FormasDePagamentosApi.md#formaspagamentosidformapagamentodelete) | **DELETE** /formas-pagamentos/{idFormaPagamento} | Remove uma forma de pagamento
*FormasDePagamentosApi* | [**formasPagamentosIdFormaPagamentoGet**](docs/Api/FormasDePagamentosApi.md#formaspagamentosidformapagamentoget) | **GET** /formas-pagamentos/{idFormaPagamento} | Obtém uma forma de pagamento
*FormasDePagamentosApi* | [**formasPagamentosIdFormaPagamentoPadraoPatch**](docs/Api/FormasDePagamentosApi.md#formaspagamentosidformapagamentopadraopatch) | **PATCH** /formas-pagamentos/{idFormaPagamento}/padrao | Altera o padrão de uma forma de pagamento
*FormasDePagamentosApi* | [**formasPagamentosIdFormaPagamentoPut**](docs/Api/FormasDePagamentosApi.md#formaspagamentosidformapagamentoput) | **PUT** /formas-pagamentos/{idFormaPagamento} | Altera uma forma de pagamento
*FormasDePagamentosApi* | [**formasPagamentosIdFormaPagamentoSituacaoPatch**](docs/Api/FormasDePagamentosApi.md#formaspagamentosidformapagamentosituacaopatch) | **PATCH** /formas-pagamentos/{idFormaPagamento}/situacao | Altera a situação de uma forma de pagamento
*FormasDePagamentosApi* | [**formasPagamentosPost**](docs/Api/FormasDePagamentosApi.md#formaspagamentospost) | **POST** /formas-pagamentos | Cria uma forma de pagamento
*GruposDeProdutosApi* | [**gruposProdutosDelete**](docs/Api/GruposDeProdutosApi.md#gruposprodutosdelete) | **DELETE** /grupos-produtos | Remove múltiplos grupos de produtos
*GruposDeProdutosApi* | [**gruposProdutosGet**](docs/Api/GruposDeProdutosApi.md#gruposprodutosget) | **GET** /grupos-produtos | Obtém grupos de produtos
*GruposDeProdutosApi* | [**gruposProdutosIdGrupoProdutoDelete**](docs/Api/GruposDeProdutosApi.md#gruposprodutosidgrupoprodutodelete) | **DELETE** /grupos-produtos/{idGrupoProduto} | Remove um grupo de produtos
*GruposDeProdutosApi* | [**gruposProdutosIdGrupoProdutoGet**](docs/Api/GruposDeProdutosApi.md#gruposprodutosidgrupoprodutoget) | **GET** /grupos-produtos/{idGrupoProduto} | Obtém um grupo de produtos
*GruposDeProdutosApi* | [**gruposProdutosIdGrupoProdutoPut**](docs/Api/GruposDeProdutosApi.md#gruposprodutosidgrupoprodutoput) | **PUT** /grupos-produtos/{idGrupoProduto} | Altera um grupo de produtos
*GruposDeProdutosApi* | [**gruposProdutosPost**](docs/Api/GruposDeProdutosApi.md#gruposprodutospost) | **POST** /grupos-produtos | Cria um grupo de produtos
*HomologaoApi* | [**homologacaoProdutosGet**](docs/Api/HomologaoApi.md#homologacaoprodutosget) | **GET** /homologacao/produtos | Obtém o produto da homologação
*HomologaoApi* | [**homologacaoProdutosIdProdutoHomologacaoDelete**](docs/Api/HomologaoApi.md#homologacaoprodutosidprodutohomologacaodelete) | **DELETE** /homologacao/produtos/{idProdutoHomologacao} | Remove o produto da homologação
*HomologaoApi* | [**homologacaoProdutosIdProdutoHomologacaoPut**](docs/Api/HomologaoApi.md#homologacaoprodutosidprodutohomologacaoput) | **PUT** /homologacao/produtos/{idProdutoHomologacao} | Altera o produto da homologação
*HomologaoApi* | [**homologacaoProdutosIdProdutoHomologacaoSituacoesPatch**](docs/Api/HomologaoApi.md#homologacaoprodutosidprodutohomologacaosituacoespatch) | **PATCH** /homologacao/produtos/{idProdutoHomologacao}/situacoes | Altera a situação do produto da homologação
*HomologaoApi* | [**homologacaoProdutosPost**](docs/Api/HomologaoApi.md#homologacaoprodutospost) | **POST** /homologacao/produtos | Cria o produto da homologação
*LogsticasApi* | [**logisticasGet**](docs/Api/LogsticasApi.md#logisticasget) | **GET** /logisticas | Obtém logísticas
*LogsticasApi* | [**logisticasIdLogisticaDelete**](docs/Api/LogsticasApi.md#logisticasidlogisticadelete) | **DELETE** /logisticas/{idLogistica} | Remove uma logística
*LogsticasApi* | [**logisticasIdLogisticaGet**](docs/Api/LogsticasApi.md#logisticasidlogisticaget) | **GET** /logisticas/{idLogistica} | Obtém uma logística
*LogsticasApi* | [**logisticasIdLogisticaPut**](docs/Api/LogsticasApi.md#logisticasidlogisticaput) | **PUT** /logisticas/{idLogistica} | Altera uma logística
*LogsticasApi* | [**logisticasPost**](docs/Api/LogsticasApi.md#logisticaspost) | **POST** /logisticas | Cria logística
*LogsticasEtiquetasApi* | [**logisticasEtiquetasGet**](docs/Api/LogsticasEtiquetasApi.md#logisticasetiquetasget) | **GET** /logisticas/etiquetas | Obtém etiquetas das vendas
*LogsticasObjetosApi* | [**logisticasObjetosIdObjetoDelete**](docs/Api/LogsticasObjetosApi.md#logisticasobjetosidobjetodelete) | **DELETE** /logisticas/objetos/{idObjeto} | Remove um objeto de logística personalizada
*LogsticasObjetosApi* | [**logisticasObjetosIdObjetoGet**](docs/Api/LogsticasObjetosApi.md#logisticasobjetosidobjetoget) | **GET** /logisticas/objetos/{idObjeto} | Obtém um objeto de logística
*LogsticasObjetosApi* | [**logisticasObjetosIdObjetoPut**](docs/Api/LogsticasObjetosApi.md#logisticasobjetosidobjetoput) | **PUT** /logisticas/objetos/{idObjeto} | Altera um objeto de logística pelo ID
*LogsticasObjetosApi* | [**logisticasObjetosPost**](docs/Api/LogsticasObjetosApi.md#logisticasobjetospost) | **POST** /logisticas/objetos | Cria um objeto de logística
*LogsticasRemessasApi* | [**logisticasIdLogisticaRemessasGet**](docs/Api/LogsticasRemessasApi.md#logisticasidlogisticaremessasget) | **GET** /logisticas/{idLogistica}/remessas | Obtém as remessas de postagem de uma logística
*LogsticasRemessasApi* | [**logisticasRemessasIdRemessaDelete**](docs/Api/LogsticasRemessasApi.md#logisticasremessasidremessadelete) | **DELETE** /logisticas/remessas/{idRemessa} | Remove uma remessa de postagem
*LogsticasRemessasApi* | [**logisticasRemessasIdRemessaGet**](docs/Api/LogsticasRemessasApi.md#logisticasremessasidremessaget) | **GET** /logisticas/remessas/{idRemessa} | Obtém uma remessa de postagem
*LogsticasRemessasApi* | [**logisticasRemessasIdRemessaPut**](docs/Api/LogsticasRemessasApi.md#logisticasremessasidremessaput) | **PUT** /logisticas/remessas/{idRemessa} | Altera uma remessa de postagem
*LogsticasRemessasApi* | [**logisticasRemessasPost**](docs/Api/LogsticasRemessasApi.md#logisticasremessaspost) | **POST** /logisticas/remessas | Cria uma remessa de postagem de uma logística
*LogsticasServiosApi* | [**logisticasIdLogisticaServicoSituacoesPatch**](docs/Api/LogsticasServiosApi.md#logisticasidlogisticaservicosituacoespatch) | **PATCH** /logisticas/{idLogisticaServico}/situacoes | Desativa ou ativa um serviço de uma logística
*LogsticasServiosApi* | [**logisticasServicosGet**](docs/Api/LogsticasServiosApi.md#logisticasservicosget) | **GET** /logisticas/servicos | Obtém serviços de logísticas
*LogsticasServiosApi* | [**logisticasServicosIdLogisticaServicoGet**](docs/Api/LogsticasServiosApi.md#logisticasservicosidlogisticaservicoget) | **GET** /logisticas/servicos/{idLogisticaServico} | Obtém um servico de logística
*LogsticasServiosApi* | [**logisticasServicosIdLogisticaServicoPut**](docs/Api/LogsticasServiosApi.md#logisticasservicosidlogisticaservicoput) | **PUT** /logisticas/servicos/{idLogisticaServico} | Altera um serviço de logística pelo ID
*LogsticasServiosApi* | [**logisticasServicosPost**](docs/Api/LogsticasServiosApi.md#logisticasservicospost) | **POST** /logisticas/servicos | Cria um serviço de logística
*NaturezasDeOperaesApi* | [**naturezasOperacoesGet**](docs/Api/NaturezasDeOperaesApi.md#naturezasoperacoesget) | **GET** /naturezas-operacoes | Obtém naturezas de operações
*NaturezasDeOperaesApi* | [**naturezasOperacoesIdNaturezaOperacaoObterTributacaoPost**](docs/Api/NaturezasDeOperaesApi.md#naturezasoperacoesidnaturezaoperacaoobtertributacaopost) | **POST** /naturezas-operacoes/{idNaturezaOperacao}/obter-tributacao | Obtém regras de tributação da natureza de operação
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceGet**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceget) | **GET** /nfce | Obtém notas fiscais de consumidor
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorEnviarPost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorenviarpost) | **POST** /nfce/{idNotaFiscalConsumidor}/enviar | Envia uma nota de consumidor
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorEstornarContasPost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorestornarcontaspost) | **POST** /nfce/{idNotaFiscalConsumidor}/estornar-contas | Estorna as contas de uma nota fiscal
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorEstornarEstoquePost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorestornarestoquepost) | **POST** /nfce/{idNotaFiscalConsumidor}/estornar-estoque | Estorna o estoque de uma nota fiscal
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorGet**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorget) | **GET** /nfce/{idNotaFiscalConsumidor} | Obtém uma nota fiscal de consumidor
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorLancarContasPost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorlancarcontaspost) | **POST** /nfce/{idNotaFiscalConsumidor}/lancar-contas | Lança as contas de uma nota fiscal
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorLancarEstoqueIdDepositoPost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorlancarestoqueiddepositopost) | **POST** /nfce/{idNotaFiscalConsumidor}/lancar-estoque/{idDeposito} | Lança o estoque de uma nota fiscal especificando o depósito
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorLancarEstoquePost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorlancarestoquepost) | **POST** /nfce/{idNotaFiscalConsumidor}/lancar-estoque | Lança o estoque de uma nota fiscal no depósito padrão
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfceIdNotaFiscalConsumidorPut**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfceidnotafiscalconsumidorput) | **PUT** /nfce/{idNotaFiscalConsumidor} | Altera uma nota fiscal de consumidor
*NotasFiscaisDeConsumidorEletrnicasApi* | [**nfcePost**](docs/Api/NotasFiscaisDeConsumidorEletrnicasApi.md#nfcepost) | **POST** /nfce | Cria uma nota fiscal de consumidor
*NotasFiscaisDeServioEletrnicasApi* | [**nfseConfiguracoesGet**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseconfiguracoesget) | **GET** /nfse/configuracoes | Configurações de nota de serviço
*NotasFiscaisDeServioEletrnicasApi* | [**nfseConfiguracoesPut**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseconfiguracoesput) | **PUT** /nfse/configuracoes | Configurações de nota de serviço
*NotasFiscaisDeServioEletrnicasApi* | [**nfseGet**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseget) | **GET** /nfse | Obtém notas de serviços
*NotasFiscaisDeServioEletrnicasApi* | [**nfseIdNotaServicoCancelarPost**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseidnotaservicocancelarpost) | **POST** /nfse/{idNotaServico}/cancelar | Cancela uma nota de serviço
*NotasFiscaisDeServioEletrnicasApi* | [**nfseIdNotaServicoDelete**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseidnotaservicodelete) | **DELETE** /nfse/{idNotaServico} | Exclui uma nota de serviço
*NotasFiscaisDeServioEletrnicasApi* | [**nfseIdNotaServicoEnviarPost**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseidnotaservicoenviarpost) | **POST** /nfse/{idNotaServico}/enviar | Envia uma nota de serviço
*NotasFiscaisDeServioEletrnicasApi* | [**nfseIdNotaServicoGet**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfseidnotaservicoget) | **GET** /nfse/{idNotaServico} | Obtém uma nota de serviço
*NotasFiscaisDeServioEletrnicasApi* | [**nfsePost**](docs/Api/NotasFiscaisDeServioEletrnicasApi.md#nfsepost) | **POST** /nfse | Cria uma nota de serviço
*NotasFiscaisEletrnicasApi* | [**nfeDelete**](docs/Api/NotasFiscaisEletrnicasApi.md#nfedelete) | **DELETE** /nfe | Remove múltiplas notas fiscais
*NotasFiscaisEletrnicasApi* | [**nfeDocumentoChaveAcessoGet**](docs/Api/NotasFiscaisEletrnicasApi.md#nfedocumentochaveacessoget) | **GET** /nfe/documento/{chaveAcesso} | Obtém o documento de uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfeGet**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeget) | **GET** /nfe | Obtém notas fiscais
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalEnviarPost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscalenviarpost) | **POST** /nfe/{idNotaFiscal}/enviar | Envia uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalEstornarContasPost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscalestornarcontaspost) | **POST** /nfe/{idNotaFiscal}/estornar-contas | Estorna as contas de uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalEstornarEstoquePost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscalestornarestoquepost) | **POST** /nfe/{idNotaFiscal}/estornar-estoque | Estorna o estoque de uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalGet**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscalget) | **GET** /nfe/{idNotaFiscal} | Obtém uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalLancarContasPost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscallancarcontaspost) | **POST** /nfe/{idNotaFiscal}/lancar-contas | Lança as contas de uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalLancarEstoqueIdDepositoPost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscallancarestoqueiddepositopost) | **POST** /nfe/{idNotaFiscal}/lancar-estoque/{idDeposito} | Lança o estoque de uma nota fiscal especificando o depósito
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalLancarEstoquePost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscallancarestoquepost) | **POST** /nfe/{idNotaFiscal}/lancar-estoque | Lança o estoque de uma nota fiscal no depósito padrão
*NotasFiscaisEletrnicasApi* | [**nfeIdNotaFiscalPut**](docs/Api/NotasFiscaisEletrnicasApi.md#nfeidnotafiscalput) | **PUT** /nfe/{idNotaFiscal} | Altera uma nota fiscal
*NotasFiscaisEletrnicasApi* | [**nfePost**](docs/Api/NotasFiscaisEletrnicasApi.md#nfepost) | **POST** /nfe | Cria uma nota fiscal
*NotificaesApi* | [**notificacoesGet**](docs/Api/NotificaesApi.md#notificacoesget) | **GET** /notificacoes | Obtém todas as notificações de uma empresa em um período
*NotificaesApi* | [**notificacoesIdNotificacaoConfirmarLeituraPost**](docs/Api/NotificaesApi.md#notificacoesidnotificacaoconfirmarleiturapost) | **POST** /notificacoes/{idNotificacao}/confirmar-leitura | Marca notificação como lida
*NotificaesApi* | [**notificacoesQuantidadeGet**](docs/Api/NotificaesApi.md#notificacoesquantidadeget) | **GET** /notificacoes/quantidade | Obtém a quantidade de notificações de uma empresa em um período
*OrdensDeProduoApi* | [**ordensProducaoGerarSobDemandaPost**](docs/Api/OrdensDeProduoApi.md#ordensproducaogerarsobdemandapost) | **POST** /ordens-producao/gerar-sob-demanda | Gera ordens de produção sob demanda
*OrdensDeProduoApi* | [**ordensProducaoGet**](docs/Api/OrdensDeProduoApi.md#ordensproducaoget) | **GET** /ordens-producao | Obtém ordens de produção
*OrdensDeProduoApi* | [**ordensProducaoIdOrdemProducaoDelete**](docs/Api/OrdensDeProduoApi.md#ordensproducaoidordemproducaodelete) | **DELETE** /ordens-producao/{idOrdemProducao} | Remove uma ordem de produção
*OrdensDeProduoApi* | [**ordensProducaoIdOrdemProducaoGet**](docs/Api/OrdensDeProduoApi.md#ordensproducaoidordemproducaoget) | **GET** /ordens-producao/{idOrdemProducao} | Obtém uma ordem de produção
*OrdensDeProduoApi* | [**ordensProducaoIdOrdemProducaoPut**](docs/Api/OrdensDeProduoApi.md#ordensproducaoidordemproducaoput) | **PUT** /ordens-producao/{idOrdemProducao} | Altera uma ordem de produção
*OrdensDeProduoApi* | [**ordensProducaoIdOrdemProducaoSituacoesPut**](docs/Api/OrdensDeProduoApi.md#ordensproducaoidordemproducaosituacoesput) | **PUT** /ordens-producao/{idOrdemProducao}/situacoes | Altera a situação de uma ordem de produção
*OrdensDeProduoApi* | [**ordensProducaoPost**](docs/Api/OrdensDeProduoApi.md#ordensproducaopost) | **POST** /ordens-producao | Cria uma ordem de produção
*OrdensDeServioApi* | [**ordensServicoGet**](docs/Api/OrdensDeServioApi.md#ordensservicoget) | **GET** /ordens/servico | Obtém ordens de serviço
*OrdensDeServioApi* | [**ordensServicoIdOrdemServicoDelete**](docs/Api/OrdensDeServioApi.md#ordensservicoidordemservicodelete) | **DELETE** /ordens/servico/{idOrdemServico} | Remove uma ordem de serviço
*OrdensDeServioApi* | [**ordensServicoIdOrdemServicoGet**](docs/Api/OrdensDeServioApi.md#ordensservicoidordemservicoget) | **GET** /ordens/servico/{idOrdemServico} | Obtém uma ordem de serviço
*OrdensDeServioApi* | [**ordensServicoIdOrdemServicoPut**](docs/Api/OrdensDeServioApi.md#ordensservicoidordemservicoput) | **PUT** /ordens/servico/{idOrdemServico} | Altera uma ordem de serviço
*OrdensDeServioApi* | [**ordensServicoIdOrdemServicoSituacoesIdSituacaoPatch**](docs/Api/OrdensDeServioApi.md#ordensservicoidordemservicosituacoesidsituacaopatch) | **PATCH** /ordens/servico/{idOrdemServico}/situacoes/{idSituacao} | Altera a situação de uma ordem de serviço
*OrdensDeServioApi* | [**ordensServicoPost**](docs/Api/OrdensDeServioApi.md#ordensservicopost) | **POST** /ordens/servico | Cria uma ordem de serviço
*PedidosComprasApi* | [**pedidosComprasGet**](docs/Api/PedidosComprasApi.md#pedidoscomprasget) | **GET** /pedidos/compras | Obtém pedidos de compras
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraDelete**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompradelete) | **DELETE** /pedidos/compras/{idPedidoCompra} | Remove um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraEstornarContasPost**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompraestornarcontaspost) | **POST** /pedidos/compras/{idPedidoCompra}/estornar-contas | Estorna as contas de um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraEstornarEstoquePost**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompraestornarestoquepost) | **POST** /pedidos/compras/{idPedidoCompra}/estornar-estoque | Estorna o estoque de um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraGet**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompraget) | **GET** /pedidos/compras/{idPedidoCompra} | Obtém um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraLancarContasPost**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompralancarcontaspost) | **POST** /pedidos/compras/{idPedidoCompra}/lancar-contas | Lança as contas de um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraLancarEstoquePost**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompralancarestoquepost) | **POST** /pedidos/compras/{idPedidoCompra}/lancar-estoque | Lança o estoque de um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraPut**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocompraput) | **PUT** /pedidos/compras/{idPedidoCompra} | Altera um pedido de compra
*PedidosComprasApi* | [**pedidosComprasIdPedidoCompraSituacoesIdSituacaoPatch**](docs/Api/PedidosComprasApi.md#pedidoscomprasidpedidocomprasituacoesidsituacaopatch) | **PATCH** /pedidos/compras/{idPedidoCompra}/situacoes/{idSituacao} | Altera a situação de um pedido de compra
*PedidosComprasApi* | [**pedidosComprasPost**](docs/Api/PedidosComprasApi.md#pedidoscompraspost) | **POST** /pedidos/compras | Cria um pedido de compra
*PedidosVendasApi* | [**pedidosVendasDelete**](docs/Api/PedidosVendasApi.md#pedidosvendasdelete) | **DELETE** /pedidos/vendas | Remove pedidos de vendas
*PedidosVendasApi* | [**pedidosVendasGet**](docs/Api/PedidosVendasApi.md#pedidosvendasget) | **GET** /pedidos/vendas | Obtém pedidos de vendas
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaDelete**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendadelete) | **DELETE** /pedidos/vendas/{idPedidoVenda} | Remove um pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaEstornarContasPost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendaestornarcontaspost) | **POST** /pedidos/vendas/{idPedidoVenda}/estornar-contas | Estorna as contas de um pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaEstornarEstoquePost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendaestornarestoquepost) | **POST** /pedidos/vendas/{idPedidoVenda}/estornar-estoque | Estorna o estoque de um pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaGerarNfcePost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendagerarnfcepost) | **POST** /pedidos/vendas/{idPedidoVenda}/gerar-nfce | Gera nota fiscal de consumidor eletrônica a partir do pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaGerarNfePost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendagerarnfepost) | **POST** /pedidos/vendas/{idPedidoVenda}/gerar-nfe | Gera nota fiscal eletrônica a partir do pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaGet**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendaget) | **GET** /pedidos/vendas/{idPedidoVenda} | Obtém um pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaLancarContasPost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendalancarcontaspost) | **POST** /pedidos/vendas/{idPedidoVenda}/lancar-contas | Lança as contas de um pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaLancarEstoqueIdDepositoPost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendalancarestoqueiddepositopost) | **POST** /pedidos/vendas/{idPedidoVenda}/lancar-estoque/{idDeposito} | Lança o estoque de um pedido de venda especificando o depósito
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaLancarEstoquePost**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendalancarestoquepost) | **POST** /pedidos/vendas/{idPedidoVenda}/lancar-estoque | Lança o estoque de um pedido de venda no depósito padrão
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaPut**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendaput) | **PUT** /pedidos/vendas/{idPedidoVenda} | Altera um pedido de venda
*PedidosVendasApi* | [**pedidosVendasIdPedidoVendaSituacoesIdSituacaoPatch**](docs/Api/PedidosVendasApi.md#pedidosvendasidpedidovendasituacoesidsituacaopatch) | **PATCH** /pedidos/vendas/{idPedidoVenda}/situacoes/{idSituacao} | Altera a situação de um pedido de venda
*PedidosVendasApi* | [**pedidosVendasPost**](docs/Api/PedidosVendasApi.md#pedidosvendaspost) | **POST** /pedidos/vendas | Cria um pedido de venda
*ProdutosApi* | [**produtosDelete**](docs/Api/ProdutosApi.md#produtosdelete) | **DELETE** /produtos | Remove múltiplos produtos
*ProdutosApi* | [**produtosGet**](docs/Api/ProdutosApi.md#produtosget) | **GET** /produtos | Obtém produtos
*ProdutosApi* | [**produtosIdProdutoDelete**](docs/Api/ProdutosApi.md#produtosidprodutodelete) | **DELETE** /produtos/{idProduto} | Remove um produto
*ProdutosApi* | [**produtosIdProdutoGet**](docs/Api/ProdutosApi.md#produtosidprodutoget) | **GET** /produtos/{idProduto} | Obtém um produto
*ProdutosApi* | [**produtosIdProdutoPatch**](docs/Api/ProdutosApi.md#produtosidprodutopatch) | **PATCH** /produtos/{idProduto} | Altera parcialmente um produto
*ProdutosApi* | [**produtosIdProdutoPut**](docs/Api/ProdutosApi.md#produtosidprodutoput) | **PUT** /produtos/{idProduto} | Altera um produto
*ProdutosApi* | [**produtosIdProdutoSituacoesPatch**](docs/Api/ProdutosApi.md#produtosidprodutosituacoespatch) | **PATCH** /produtos/{idProduto}/situacoes | Altera a situação de um produto
*ProdutosApi* | [**produtosPost**](docs/Api/ProdutosApi.md#produtospost) | **POST** /produtos | Cria um produto
*ProdutosApi* | [**produtosSituacoesPost**](docs/Api/ProdutosApi.md#produtossituacoespost) | **POST** /produtos/situacoes | Altera a situação de múltiplos produtos
*ProdutosEstruturasApi* | [**produtosEstruturasDelete**](docs/Api/ProdutosEstruturasApi.md#produtosestruturasdelete) | **DELETE** /produtos/estruturas | Remove a estrutura de múltiplos produtos
*ProdutosEstruturasApi* | [**produtosEstruturasIdProdutoEstruturaComponentesDelete**](docs/Api/ProdutosEstruturasApi.md#produtosestruturasidprodutoestruturacomponentesdelete) | **DELETE** /produtos/estruturas/{idProdutoEstrutura}/componentes | Remove componentes específicos de um produto com composição
*ProdutosEstruturasApi* | [**produtosEstruturasIdProdutoEstruturaComponentesIdComponentePatch**](docs/Api/ProdutosEstruturasApi.md#produtosestruturasidprodutoestruturacomponentesidcomponentepatch) | **PATCH** /produtos/estruturas/{idProdutoEstrutura}/componentes/{idComponente} | Altera um componente de uma estrutura
*ProdutosEstruturasApi* | [**produtosEstruturasIdProdutoEstruturaComponentesPost**](docs/Api/ProdutosEstruturasApi.md#produtosestruturasidprodutoestruturacomponentespost) | **POST** /produtos/estruturas/{idProdutoEstrutura}/componentes | Adiciona componente(s) a uma estrutura
*ProdutosEstruturasApi* | [**produtosEstruturasIdProdutoEstruturaGet**](docs/Api/ProdutosEstruturasApi.md#produtosestruturasidprodutoestruturaget) | **GET** /produtos/estruturas/{idProdutoEstrutura} | Obtém a estrutura de um produto com composição
*ProdutosEstruturasApi* | [**produtosEstruturasIdProdutoEstruturaPut**](docs/Api/ProdutosEstruturasApi.md#produtosestruturasidprodutoestruturaput) | **PUT** /produtos/estruturas/{idProdutoEstrutura} | Altera a estrutura de um produto com composição
*ProdutosFornecedoresApi* | [**produtosFornecedoresGet**](docs/Api/ProdutosFornecedoresApi.md#produtosfornecedoresget) | **GET** /produtos/fornecedores | Obtém produtos fornecedores
*ProdutosFornecedoresApi* | [**produtosFornecedoresIdProdutoFornecedorDelete**](docs/Api/ProdutosFornecedoresApi.md#produtosfornecedoresidprodutofornecedordelete) | **DELETE** /produtos/fornecedores/{idProdutoFornecedor} | Remove um produto fornecedor
*ProdutosFornecedoresApi* | [**produtosFornecedoresIdProdutoFornecedorGet**](docs/Api/ProdutosFornecedoresApi.md#produtosfornecedoresidprodutofornecedorget) | **GET** /produtos/fornecedores/{idProdutoFornecedor} | Obtém um produto fornecedor
*ProdutosFornecedoresApi* | [**produtosFornecedoresIdProdutoFornecedorPut**](docs/Api/ProdutosFornecedoresApi.md#produtosfornecedoresidprodutofornecedorput) | **PUT** /produtos/fornecedores/{idProdutoFornecedor} | Altera um produto fornecedor
*ProdutosFornecedoresApi* | [**produtosFornecedoresPost**](docs/Api/ProdutosFornecedoresApi.md#produtosfornecedorespost) | **POST** /produtos/fornecedores | Cria um produto fornecedor
*ProdutosLojasApi* | [**produtosLojasGet**](docs/Api/ProdutosLojasApi.md#produtoslojasget) | **GET** /produtos/lojas | Obtém vínculos de produtos com lojas
*ProdutosLojasApi* | [**produtosLojasIdProdutoLojaDelete**](docs/Api/ProdutosLojasApi.md#produtoslojasidprodutolojadelete) | **DELETE** /produtos/lojas/{idProdutoLoja} | Remove o vínculo de um produto com uma loja
*ProdutosLojasApi* | [**produtosLojasIdProdutoLojaGet**](docs/Api/ProdutosLojasApi.md#produtoslojasidprodutolojaget) | **GET** /produtos/lojas/{idProdutoLoja} | Obtém um vínculo de produto com loja
*ProdutosLojasApi* | [**produtosLojasIdProdutoLojaPut**](docs/Api/ProdutosLojasApi.md#produtoslojasidprodutolojaput) | **PUT** /produtos/lojas/{idProdutoLoja} | Altera o vínculo de um produto com uma loja
*ProdutosLojasApi* | [**produtosLojasPost**](docs/Api/ProdutosLojasApi.md#produtoslojaspost) | **POST** /produtos/lojas | Cria o vínculo de um produto com uma loja
*ProdutosLotesApi* | [**produtosIdProdutoLotesControlaLoteDesativarPost**](docs/Api/ProdutosLotesApi.md#produtosidprodutolotescontrolalotedesativarpost) | **POST** /produtos/{idProduto}/lotes/controla-lote/desativar | Desativa controle de lotes para o produto
*ProdutosLotesApi* | [**produtosLotesControlaLoteGet**](docs/Api/ProdutosLotesApi.md#produtoslotescontrolaloteget) | **GET** /produtos/lotes/controla-lote | Obtém a informação se determinados produtos possuem controle de lote
*ProdutosLotesApi* | [**produtosLotesDelete**](docs/Api/ProdutosLotesApi.md#produtoslotesdelete) | **DELETE** /produtos/lotes | Remove lotes de produtos
*ProdutosLotesApi* | [**produtosLotesGet**](docs/Api/ProdutosLotesApi.md#produtoslotesget) | **GET** /produtos/lotes | Obtém lotes de produtos
*ProdutosLotesApi* | [**produtosLotesIdLoteGet**](docs/Api/ProdutosLotesApi.md#produtoslotesidloteget) | **GET** /produtos/lotes/{idLote} | Obtém um lote de um produto
*ProdutosLotesApi* | [**produtosLotesIdLotePut**](docs/Api/ProdutosLotesApi.md#produtoslotesidloteput) | **PUT** /produtos/lotes/{idLote} | Altera um lote de um produto
*ProdutosLotesApi* | [**produtosLotesIdLoteStatusPatch**](docs/Api/ProdutosLotesApi.md#produtoslotesidlotestatuspatch) | **PATCH** /produtos/lotes/{idLote}/status | Altera o status de um lote do produto
*ProdutosLotesApi* | [**produtosLotesPut**](docs/Api/ProdutosLotesApi.md#produtoslotesput) | **PUT** /produtos/lotes | Salva lotes de produtos
*ProdutosLotesLanamentosApi* | [**produtosIdProdutoLotesDepositosIdDepositoSaldoGet**](docs/Api/ProdutosLotesLanamentosApi.md#produtosidprodutolotesdepositosiddepositosaldoget) | **GET** /produtos/{idProduto}/lotes/depositos/{idDeposito}/saldo | Obtém os saldos dos lotes de um produto por depósito
*ProdutosLotesLanamentosApi* | [**produtosIdProdutoLotesDepositosIdDepositoSaldoSomaGet**](docs/Api/ProdutosLotesLanamentosApi.md#produtosidprodutolotesdepositosiddepositosaldosomaget) | **GET** /produtos/{idProduto}/lotes/depositos/{idDeposito}/saldo/soma | Obtém a soma dos saldos dos lotes de um produto em um depósito
*ProdutosLotesLanamentosApi* | [**produtosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet**](docs/Api/ProdutosLotesLanamentosApi.md#produtosidprodutolotesidlotedepositosiddepositosaldoget) | **GET** /produtos/{idProduto}/lotes/{idLote}/depositos/{idDeposito}/saldo | Obtém o saldo de um lote de produto
*ProdutosLotesLanamentosApi* | [**produtosIdProdutoLotesSaldoSomaGet**](docs/Api/ProdutosLotesLanamentosApi.md#produtosidprodutolotessaldosomaget) | **GET** /produtos/{idProduto}/lotes/saldo/soma | Obtém o saldo total dos lotes de um produto
*ProdutosLotesLanamentosApi* | [**produtosLotesIdLoteLancamentosGet**](docs/Api/ProdutosLotesLanamentosApi.md#produtoslotesidlotelancamentosget) | **GET** /produtos/lotes/{idLote}/lancamentos | Obtém os lançamentos de um lote de produto
*ProdutosLotesLanamentosApi* | [**produtosLotesIdLoteLancamentosPost**](docs/Api/ProdutosLotesLanamentosApi.md#produtoslotesidlotelancamentospost) | **POST** /produtos/lotes/{idLote}/lancamentos | Cria um lançamento de um lote
*ProdutosLotesLanamentosApi* | [**produtosLotesLancamentosIdLancamentoGet**](docs/Api/ProdutosLotesLanamentosApi.md#produtosloteslancamentosidlancamentoget) | **GET** /produtos/lotes/lancamentos/{idLancamento} | Obtém um lançamento de um lote de produto
*ProdutosLotesLanamentosApi* | [**produtosLotesLancamentosIdLancamentoPatch**](docs/Api/ProdutosLotesLanamentosApi.md#produtosloteslancamentosidlancamentopatch) | **PATCH** /produtos/lotes/lancamentos/{idLancamento} | Altera a observação de um lançamento de um lote de um produto
*ProdutosVariaesApi* | [**produtosVariacoesAtributosGerarCombinacoesPost**](docs/Api/ProdutosVariaesApi.md#produtosvariacoesatributosgerarcombinacoespost) | **POST** /produtos/variacoes/atributos/gerar-combinacoes | Retorna o produto pai com combinações de novas variações
*ProdutosVariaesApi* | [**produtosVariacoesIdProdutoPaiAtributosPatch**](docs/Api/ProdutosVariaesApi.md#produtosvariacoesidprodutopaiatributospatch) | **PATCH** /produtos/variacoes/{idProdutoPai}/atributos | Altera o nome do atributo nas variações
*ProdutosVariaesApi* | [**produtosVariacoesIdProdutoPaiGet**](docs/Api/ProdutosVariaesApi.md#produtosvariacoesidprodutopaiget) | **GET** /produtos/variacoes/{idProdutoPai} | Obtém o produto e variações
*PropostasComerciaisApi* | [**propostasComerciaisDelete**](docs/Api/PropostasComerciaisApi.md#propostascomerciaisdelete) | **DELETE** /propostas-comerciais | Remove múltiplas propostas comerciais
*PropostasComerciaisApi* | [**propostasComerciaisGet**](docs/Api/PropostasComerciaisApi.md#propostascomerciaisget) | **GET** /propostas-comerciais | Obtém propostas comerciais
*PropostasComerciaisApi* | [**propostasComerciaisIdPropostaComercialDelete**](docs/Api/PropostasComerciaisApi.md#propostascomerciaisidpropostacomercialdelete) | **DELETE** /propostas-comerciais/{idPropostaComercial} | Remove uma proposta comercial
*PropostasComerciaisApi* | [**propostasComerciaisIdPropostaComercialGet**](docs/Api/PropostasComerciaisApi.md#propostascomerciaisidpropostacomercialget) | **GET** /propostas-comerciais/{idPropostaComercial} | Obtém uma proposta comercial
*PropostasComerciaisApi* | [**propostasComerciaisIdPropostaComercialPut**](docs/Api/PropostasComerciaisApi.md#propostascomerciaisidpropostacomercialput) | **PUT** /propostas-comerciais/{idPropostaComercial} | Altera uma proposta comercial
*PropostasComerciaisApi* | [**propostasComerciaisIdPropostaComercialSituacoesPatch**](docs/Api/PropostasComerciaisApi.md#propostascomerciaisidpropostacomercialsituacoespatch) | **PATCH** /propostas-comerciais/{idPropostaComercial}/situacoes | Altera a situação de uma proposta comercial
*PropostasComerciaisApi* | [**propostasComerciaisPost**](docs/Api/PropostasComerciaisApi.md#propostascomerciaispost) | **POST** /propostas-comerciais | Cria uma proposta comercial
*SituaesApi* | [**situacoesIdSituacaoDelete**](docs/Api/SituaesApi.md#situacoesidsituacaodelete) | **DELETE** /situacoes/{idSituacao} | Remove uma situação
*SituaesApi* | [**situacoesIdSituacaoGet**](docs/Api/SituaesApi.md#situacoesidsituacaoget) | **GET** /situacoes/{idSituacao} | Obtém uma situação
*SituaesApi* | [**situacoesIdSituacaoPut**](docs/Api/SituaesApi.md#situacoesidsituacaoput) | **PUT** /situacoes/{idSituacao} | Altera uma situação
*SituaesApi* | [**situacoesPost**](docs/Api/SituaesApi.md#situacoespost) | **POST** /situacoes | Cria uma situação
*SituaesMdulosApi* | [**situacoesModulosGet**](docs/Api/SituaesMdulosApi.md#situacoesmodulosget) | **GET** /situacoes/modulos | Obtém módulos
*SituaesMdulosApi* | [**situacoesModulosIdModuloSistemaAcoesGet**](docs/Api/SituaesMdulosApi.md#situacoesmodulosidmodulosistemaacoesget) | **GET** /situacoes/modulos/{idModuloSistema}/acoes | Obtém as ações de um módulo
*SituaesMdulosApi* | [**situacoesModulosIdModuloSistemaGet**](docs/Api/SituaesMdulosApi.md#situacoesmodulosidmodulosistemaget) | **GET** /situacoes/modulos/{idModuloSistema} | Obtém situações de um módulo
*SituaesMdulosApi* | [**situacoesModulosIdModuloSistemaTransicoesGet**](docs/Api/SituaesMdulosApi.md#situacoesmodulosidmodulosistematransicoesget) | **GET** /situacoes/modulos/{idModuloSistema}/transicoes | Obtém as transições de um módulo
*SituaesTransiesApi* | [**situacoesTransicoesIdTransicaoDelete**](docs/Api/SituaesTransiesApi.md#situacoestransicoesidtransicaodelete) | **DELETE** /situacoes/transicoes/{idTransicao} | Remove uma transição
*SituaesTransiesApi* | [**situacoesTransicoesIdTransicaoGet**](docs/Api/SituaesTransiesApi.md#situacoestransicoesidtransicaoget) | **GET** /situacoes/transicoes/{idTransicao} | Obtém uma transição
*SituaesTransiesApi* | [**situacoesTransicoesIdTransicaoPut**](docs/Api/SituaesTransiesApi.md#situacoestransicoesidtransicaoput) | **PUT** /situacoes/transicoes/{idTransicao} | Altera uma transição
*SituaesTransiesApi* | [**situacoesTransicoesPost**](docs/Api/SituaesTransiesApi.md#situacoestransicoespost) | **POST** /situacoes/transicoes | Cria uma transição
*UsuriosApi* | [**usuariosRecuperarSenhaPost**](docs/Api/UsuriosApi.md#usuariosrecuperarsenhapost) | **POST** /usuarios/recuperar-senha | Envia solicitação de recuperação de senha
*UsuriosApi* | [**usuariosRedefinirSenhaPatch**](docs/Api/UsuriosApi.md#usuariosredefinirsenhapatch) | **PATCH** /usuarios/redefinir-senha | Redefine senha do usuário
*UsuriosApi* | [**usuariosVerificarHashGet**](docs/Api/UsuriosApi.md#usuariosverificarhashget) | **GET** /usuarios/verificar-hash | Valida o hash recebido
*VendedoresApi* | [**vendedoresGet**](docs/Api/VendedoresApi.md#vendedoresget) | **GET** /vendedores | Obtém vendedores
*VendedoresApi* | [**vendedoresIdVendedorGet**](docs/Api/VendedoresApi.md#vendedoresidvendedorget) | **GET** /vendedores/{idVendedor} | Obtém um vendedor

## Models

- [AnunciosAtributoDTO](docs/Model/AnunciosAtributoDTO.md)
- [AnunciosCategoriaDTO](docs/Model/AnunciosCategoriaDTO.md)
- [AnunciosCategoriasGet200Response](docs/Model/AnunciosCategoriasGet200Response.md)
- [AnunciosCategoriasIdCategoriaGet200Response](docs/Model/AnunciosCategoriasIdCategoriaGet200Response.md)
- [AnunciosGet200Response](docs/Model/AnunciosGet200Response.md)
- [AnunciosGetAllResponseDTO](docs/Model/AnunciosGetAllResponseDTO.md)
- [AnunciosGetAllResponseDTOAnuncioLoja](docs/Model/AnunciosGetAllResponseDTOAnuncioLoja.md)
- [AnunciosGetAttributesFromCategoryResponseDTO](docs/Model/AnunciosGetAttributesFromCategoryResponseDTO.md)
- [AnunciosGetByIdResponseDTO](docs/Model/AnunciosGetByIdResponseDTO.md)
- [AnunciosGetByIdResponseDTOPreco](docs/Model/AnunciosGetByIdResponseDTOPreco.md)
- [AnunciosIdAnuncioGet200Response](docs/Model/AnunciosIdAnuncioGet200Response.md)
- [AnunciosImagemDTO](docs/Model/AnunciosImagemDTO.md)
- [AnunciosPost201Response](docs/Model/AnunciosPost201Response.md)
- [AnunciosSaveRequest](docs/Model/AnunciosSaveRequest.md)
- [AnunciosSaveRequestBase](docs/Model/AnunciosSaveRequestBase.md)
- [AnunciosSaveRequestBaseAtributosInner](docs/Model/AnunciosSaveRequestBaseAtributosInner.md)
- [AnunciosSaveRequestBaseEstoques](docs/Model/AnunciosSaveRequestBaseEstoques.md)
- [AnunciosSaveRequestBaseImagensInner](docs/Model/AnunciosSaveRequestBaseImagensInner.md)
- [AnunciosSaveRequestBaseIntegracao](docs/Model/AnunciosSaveRequestBaseIntegracao.md)
- [AnunciosSaveRequestBaseMercadoLivre](docs/Model/AnunciosSaveRequestBaseMercadoLivre.md)
- [AnunciosSaveRequestBaseMercadoLivreFrete](docs/Model/AnunciosSaveRequestBaseMercadoLivreFrete.md)
- [AnunciosSaveRequestBaseMercadoLivreProdutoUsuario](docs/Model/AnunciosSaveRequestBaseMercadoLivreProdutoUsuario.md)
- [AnunciosSaveRequestBaseProduto](docs/Model/AnunciosSaveRequestBaseProduto.md)
- [AnunciosSaveResponseDTO](docs/Model/AnunciosSaveResponseDTO.md)
- [AnunciosVariacaoDTO](docs/Model/AnunciosVariacaoDTO.md)
- [BasePostResponse](docs/Model/BasePostResponse.md)
- [BorderosCategoriaDTO](docs/Model/BorderosCategoriaDTO.md)
- [BorderosContatoDTO](docs/Model/BorderosContatoDTO.md)
- [BorderosDadosDTO](docs/Model/BorderosDadosDTO.md)
- [BorderosIdBorderoGet200Response](docs/Model/BorderosIdBorderoGet200Response.md)
- [BorderosPagamentoDTO](docs/Model/BorderosPagamentoDTO.md)
- [BorderosPortadorDTO](docs/Model/BorderosPortadorDTO.md)
- [CaixasBancosDadosBasicoContatoDTO](docs/Model/CaixasBancosDadosBasicoContatoDTO.md)
- [CaixasBancosDadosBasicosCategoriaDTO](docs/Model/CaixasBancosDadosBasicosCategoriaDTO.md)
- [CaixasBancosDadosBasicosOrigemDTO](docs/Model/CaixasBancosDadosBasicosOrigemDTO.md)
- [CaixasBancosItemLancamentoDTO](docs/Model/CaixasBancosItemLancamentoDTO.md)
- [CaixasBancosLancamentoConciliacaoMovimentacaoDTO](docs/Model/CaixasBancosLancamentoConciliacaoMovimentacaoDTO.md)
- [CaixasBancosLancamentoDTO](docs/Model/CaixasBancosLancamentoDTO.md)
- [CaixasBancosLancamentoParcelaDTO](docs/Model/CaixasBancosLancamentoParcelaDTO.md)
- [CaixasBancosSalvarLancamentoDTO](docs/Model/CaixasBancosSalvarLancamentoDTO.md)
- [CaixasBancosSalvarLancamentoResponseDTO](docs/Model/CaixasBancosSalvarLancamentoResponseDTO.md)
- [CaixasGet200Response](docs/Model/CaixasGet200Response.md)
- [CalculosImpostosCalculoDTO](docs/Model/CalculosImpostosCalculoDTO.md)
- [CalculosImpostosCbsDTO](docs/Model/CalculosImpostosCbsDTO.md)
- [CalculosImpostosCofinsDTO](docs/Model/CalculosImpostosCofinsDTO.md)
- [CalculosImpostosDadosBaseDTO](docs/Model/CalculosImpostosDadosBaseDTO.md)
- [CalculosImpostosDadosDTO](docs/Model/CalculosImpostosDadosDTO.md)
- [CalculosImpostosIbsCbsDTO](docs/Model/CalculosImpostosIbsCbsDTO.md)
- [CalculosImpostosIbsCbsRegDTO](docs/Model/CalculosImpostosIbsCbsRegDTO.md)
- [CalculosImpostosIbsDTO](docs/Model/CalculosImpostosIbsDTO.md)
- [CalculosImpostosIcmsDTO](docs/Model/CalculosImpostosIcmsDTO.md)
- [CalculosImpostosIcmsStDTO](docs/Model/CalculosImpostosIcmsStDTO.md)
- [CalculosImpostosIpiDTO](docs/Model/CalculosImpostosIpiDTO.md)
- [CalculosImpostosIssqnDTO](docs/Model/CalculosImpostosIssqnDTO.md)
- [CalculosImpostosLojaDTO](docs/Model/CalculosImpostosLojaDTO.md)
- [CalculosImpostosMunicipioDTO](docs/Model/CalculosImpostosMunicipioDTO.md)
- [CalculosImpostosPisDTO](docs/Model/CalculosImpostosPisDTO.md)
- [CalculosImpostosProdutoDTO](docs/Model/CalculosImpostosProdutoDTO.md)
- [CalculosImpostosRegraOperacaoDTO](docs/Model/CalculosImpostosRegraOperacaoDTO.md)
- [CalculosImpostosSimplesDTO](docs/Model/CalculosImpostosSimplesDTO.md)
- [CalculosImpostosUnidadeNegocioDTO](docs/Model/CalculosImpostosUnidadeNegocioDTO.md)
- [CamposCustomizadosAgrupadorDTO](docs/Model/CamposCustomizadosAgrupadorDTO.md)
- [CamposCustomizadosDadosBaseDTO](docs/Model/CamposCustomizadosDadosBaseDTO.md)
- [CamposCustomizadosDadosDTO](docs/Model/CamposCustomizadosDadosDTO.md)
- [CamposCustomizadosDadosEdicaoDTO](docs/Model/CamposCustomizadosDadosEdicaoDTO.md)
- [CamposCustomizadosIdCampoCustomizadoGet200Response](docs/Model/CamposCustomizadosIdCampoCustomizadoGet200Response.md)
- [CamposCustomizadosIdCampoCustomizadoGet200ResponseData](docs/Model/CamposCustomizadosIdCampoCustomizadoGet200ResponseData.md)
- [CamposCustomizadosIdCampoCustomizadoPut200Response](docs/Model/CamposCustomizadosIdCampoCustomizadoPut200Response.md)
- [CamposCustomizadosIdCampoCustomizadoPut200ResponseData](docs/Model/CamposCustomizadosIdCampoCustomizadoPut200ResponseData.md)
- [CamposCustomizadosIdCampoCustomizadoPutRequest](docs/Model/CamposCustomizadosIdCampoCustomizadoPutRequest.md)
- [CamposCustomizadosIdCampoCustomizadoSituacoesPatchRequest](docs/Model/CamposCustomizadosIdCampoCustomizadoSituacoesPatchRequest.md)
- [CamposCustomizadosModuloBaseDTO](docs/Model/CamposCustomizadosModuloBaseDTO.md)
- [CamposCustomizadosModuloDTO](docs/Model/CamposCustomizadosModuloDTO.md)
- [CamposCustomizadosModulosGet200Response](docs/Model/CamposCustomizadosModulosGet200Response.md)
- [CamposCustomizadosModulosGet200ResponseDataInner](docs/Model/CamposCustomizadosModulosGet200ResponseDataInner.md)
- [CamposCustomizadosModulosIdModuloGet200Response](docs/Model/CamposCustomizadosModulosIdModuloGet200Response.md)
- [CamposCustomizadosOpcaoDTO](docs/Model/CamposCustomizadosOpcaoDTO.md)
- [CamposCustomizadosPermissaoDTO](docs/Model/CamposCustomizadosPermissaoDTO.md)
- [CamposCustomizadosResponsePOSTPUT](docs/Model/CamposCustomizadosResponsePOSTPUT.md)
- [CamposCustomizadosTamanhoDTO](docs/Model/CamposCustomizadosTamanhoDTO.md)
- [CamposCustomizadosTipoBaseDTO](docs/Model/CamposCustomizadosTipoBaseDTO.md)
- [CamposCustomizadosTipoDTO](docs/Model/CamposCustomizadosTipoDTO.md)
- [CamposCustomizadosTiposGet200Response](docs/Model/CamposCustomizadosTiposGet200Response.md)
- [CamposCustomizadosTiposGet200ResponseDataInner](docs/Model/CamposCustomizadosTiposGet200ResponseDataInner.md)
- [CanaisVendaGet200Response](docs/Model/CanaisVendaGet200Response.md)
- [CanaisVendaIdCanalVendaGet200Response](docs/Model/CanaisVendaIdCanalVendaGet200Response.md)
- [CanaisVendaTiposGet200Response](docs/Model/CanaisVendaTiposGet200Response.md)
- [CanalVendaCanalVendaDTO](docs/Model/CanalVendaCanalVendaDTO.md)
- [CanalVendaDadosBaseDTO](docs/Model/CanalVendaDadosBaseDTO.md)
- [CanalVendaDepositoDTO](docs/Model/CanalVendaDepositoDTO.md)
- [CanalVendaFilialDTO](docs/Model/CanalVendaFilialDTO.md)
- [CanalVendaTipoIntegracaoDTO](docs/Model/CanalVendaTipoIntegracaoDTO.md)
- [CategoriasLojasCategoriaProdutoDTO](docs/Model/CategoriasLojasCategoriaProdutoDTO.md)
- [CategoriasLojasDadosDTO](docs/Model/CategoriasLojasDadosDTO.md)
- [CategoriasLojasGet200Response](docs/Model/CategoriasLojasGet200Response.md)
- [CategoriasLojasIdCategoriaLojaGet200Response](docs/Model/CategoriasLojasIdCategoriaLojaGet200Response.md)
- [CategoriasLojasLojaDTO](docs/Model/CategoriasLojasLojaDTO.md)
- [CategoriasLojasPost201Response](docs/Model/CategoriasLojasPost201Response.md)
- [CategoriasProdutosCategoriPaiDTO](docs/Model/CategoriasProdutosCategoriPaiDTO.md)
- [CategoriasProdutosDadosDTO](docs/Model/CategoriasProdutosDadosDTO.md)
- [CategoriasProdutosGet200Response](docs/Model/CategoriasProdutosGet200Response.md)
- [CategoriasProdutosGet200ResponseDataInner](docs/Model/CategoriasProdutosGet200ResponseDataInner.md)
- [CategoriasProdutosIdCategoriaProdutoGet200Response](docs/Model/CategoriasProdutosIdCategoriaProdutoGet200Response.md)
- [CategoriasReceitasDespesasDadosBaseDTO](docs/Model/CategoriasReceitasDespesasDadosBaseDTO.md)
- [CategoriasReceitasDespesasDadosDTO](docs/Model/CategoriasReceitasDespesasDadosDTO.md)
- [CategoriasReceitasDespesasDadosPostDTO](docs/Model/CategoriasReceitasDespesasDadosPostDTO.md)
- [CategoriasReceitasDespesasDelete200Response](docs/Model/CategoriasReceitasDespesasDelete200Response.md)
- [CategoriasReceitasDespesasDelete200ResponseData](docs/Model/CategoriasReceitasDespesasDelete200ResponseData.md)
- [CategoriasReceitasDespesasGet200Response](docs/Model/CategoriasReceitasDespesasGet200Response.md)
- [CategoriasReceitasDespesasIdCategoriaGet200Response](docs/Model/CategoriasReceitasDespesasIdCategoriaGet200Response.md)
- [CategoriasReceitasDespesasIdCategoriaGet200ResponseData](docs/Model/CategoriasReceitasDespesasIdCategoriaGet200ResponseData.md)
- [CategoriasReceitasDespesasPost201Response](docs/Model/CategoriasReceitasDespesasPost201Response.md)
- [CategoriasReceitasDespesasPostRequest](docs/Model/CategoriasReceitasDespesasPostRequest.md)
- [ConfiguracaoAdicionalNotaServicoDTO](docs/Model/ConfiguracaoAdicionalNotaServicoDTO.md)
- [ConfiguracaoAproximadoNotaServicoDTO](docs/Model/ConfiguracaoAproximadoNotaServicoDTO.md)
- [ConfiguracaoBasicaNotaServicoDTO](docs/Model/ConfiguracaoBasicaNotaServicoDTO.md)
- [ConfiguracaoCSLLPISCOFINSNotaServicoDTO](docs/Model/ConfiguracaoCSLLPISCOFINSNotaServicoDTO.md)
- [ConfiguracaoCadastroPrefeituraNotaServicoDTO](docs/Model/ConfiguracaoCadastroPrefeituraNotaServicoDTO.md)
- [ConfiguracaoCodigoTributoNotaServicoDTO](docs/Model/ConfiguracaoCodigoTributoNotaServicoDTO.md)
- [ConfiguracaoControleNotaServicoDTO](docs/Model/ConfiguracaoControleNotaServicoDTO.md)
- [ConfiguracaoEmailPadraoNotaFiscalServicoDTO](docs/Model/ConfiguracaoEmailPadraoNotaFiscalServicoDTO.md)
- [ConfiguracaoEnvioEmailNotaServicoDTO](docs/Model/ConfiguracaoEnvioEmailNotaServicoDTO.md)
- [ConfiguracaoINSSNotaServicoDTO](docs/Model/ConfiguracaoINSSNotaServicoDTO.md)
- [ConfiguracaoIRNotaServicoDTO](docs/Model/ConfiguracaoIRNotaServicoDTO.md)
- [ConfiguracaoISSNotaServicoDTO](docs/Model/ConfiguracaoISSNotaServicoDTO.md)
- [ConfiguracaoImpostoNotaServicoDTO](docs/Model/ConfiguracaoImpostoNotaServicoDTO.md)
- [ConfiguracaoNotaServicoDadosBaseDTO](docs/Model/ConfiguracaoNotaServicoDadosBaseDTO.md)
- [ConfiguracaoNumeracaoRPSNotaServicoDTO](docs/Model/ConfiguracaoNumeracaoRPSNotaServicoDTO.md)
- [ConfiguracaoOutrosNotaServicoDTO](docs/Model/ConfiguracaoOutrosNotaServicoDTO.md)
- [ConfiguracaoTextoIRNotaServicoDTO](docs/Model/ConfiguracaoTextoIRNotaServicoDTO.md)
- [ConfiguracaoTributoNotaServicoDTO](docs/Model/ConfiguracaoTributoNotaServicoDTO.md)
- [ContasBaixarContaDTO](docs/Model/ContasBaixarContaDTO.md)
- [ContasCategoriaDTO](docs/Model/ContasCategoriaDTO.md)
- [ContasContabeisDadosDTO](docs/Model/ContasContabeisDadosDTO.md)
- [ContasContabeisGet200Response](docs/Model/ContasContabeisGet200Response.md)
- [ContasContabeisIdContaContabilGet200Response](docs/Model/ContasContabeisIdContaContabilGet200Response.md)
- [ContasContatoDTO](docs/Model/ContasContatoDTO.md)
- [ContasDadosBaseDTO](docs/Model/ContasDadosBaseDTO.md)
- [ContasFinanceirasDadosBasicosDTO](docs/Model/ContasFinanceirasDadosBasicosDTO.md)
- [ContasFormaPagamentoDTO](docs/Model/ContasFormaPagamentoDTO.md)
- [ContasPagarDadosDTO](docs/Model/ContasPagarDadosDTO.md)
- [ContasPagarDadosDTOOcorrencia](docs/Model/ContasPagarDadosDTOOcorrencia.md)
- [ContasPagarDadosPostDTO](docs/Model/ContasPagarDadosPostDTO.md)
- [ContasPagarGet200Response](docs/Model/ContasPagarGet200Response.md)
- [ContasPagarIdContaPagarGet200Response](docs/Model/ContasPagarIdContaPagarGet200Response.md)
- [ContasPagarIdContaPagarGet200ResponseData](docs/Model/ContasPagarIdContaPagarGet200ResponseData.md)
- [ContasPagarPostRequest](docs/Model/ContasPagarPostRequest.md)
- [ContasPortadorDTO](docs/Model/ContasPortadorDTO.md)
- [ContasReceberAutenticacaoDTO](docs/Model/ContasReceberAutenticacaoDTO.md)
- [ContasReceberBoletosCancelarDTO](docs/Model/ContasReceberBoletosCancelarDTO.md)
- [ContasReceberBoletosCancelarPost400Response](docs/Model/ContasReceberBoletosCancelarPost400Response.md)
- [ContasReceberBoletosCancelarPost400ResponseFieldsInner](docs/Model/ContasReceberBoletosCancelarPost400ResponseFieldsInner.md)
- [ContasReceberBoletosDadosBaseDTO](docs/Model/ContasReceberBoletosDadosBaseDTO.md)
- [ContasReceberBoletosDadosDTO](docs/Model/ContasReceberBoletosDadosDTO.md)
- [ContasReceberBoletosGet404Response](docs/Model/ContasReceberBoletosGet404Response.md)
- [ContasReceberBoletosGet404ResponseError](docs/Model/ContasReceberBoletosGet404ResponseError.md)
- [ContasReceberContaContabilDTO](docs/Model/ContasReceberContaContabilDTO.md)
- [ContasReceberContaDTO](docs/Model/ContasReceberContaDTO.md)
- [ContasReceberContatoDTO](docs/Model/ContasReceberContatoDTO.md)
- [ContasReceberDadosBaseDTO](docs/Model/ContasReceberDadosBaseDTO.md)
- [ContasReceberDadosDTO](docs/Model/ContasReceberDadosDTO.md)
- [ContasReceberDadosListDTO](docs/Model/ContasReceberDadosListDTO.md)
- [ContasReceberDadosOrigemDTO](docs/Model/ContasReceberDadosOrigemDTO.md)
- [ContasReceberFormaPagamentoDTO](docs/Model/ContasReceberFormaPagamentoDTO.md)
- [ContasReceberGet200Response](docs/Model/ContasReceberGet200Response.md)
- [ContasReceberIdContaReceberBaixarPost200Response](docs/Model/ContasReceberIdContaReceberBaixarPost200Response.md)
- [ContasReceberIdContaReceberBaixarPost200ResponseBordero](docs/Model/ContasReceberIdContaReceberBaixarPost200ResponseBordero.md)
- [ContasReceberIdContaReceberGet200Response](docs/Model/ContasReceberIdContaReceberGet200Response.md)
- [ContasReceberIdContaReceberGet200ResponseData](docs/Model/ContasReceberIdContaReceberGet200ResponseData.md)
- [ContasReceberIdContaReceberPutRequest](docs/Model/ContasReceberIdContaReceberPutRequest.md)
- [ContasReceberNotaFiscalDTO](docs/Model/ContasReceberNotaFiscalDTO.md)
- [ContasReceberOcorrenciaDTO](docs/Model/ContasReceberOcorrenciaDTO.md)
- [ContasReceberOcorrenciaParceladaDTO](docs/Model/ContasReceberOcorrenciaParceladaDTO.md)
- [ContasReceberOcorrenciaSemanalDTO](docs/Model/ContasReceberOcorrenciaSemanalDTO.md)
- [ContasReceberOcorrenciaUnicaDTO](docs/Model/ContasReceberOcorrenciaUnicaDTO.md)
- [ContasReceberOrigemDTO](docs/Model/ContasReceberOrigemDTO.md)
- [ContasReceberPostRequest](docs/Model/ContasReceberPostRequest.md)
- [ContasReceberVendaDTO](docs/Model/ContasReceberVendaDTO.md)
- [ContasReceberVendedorDTO](docs/Model/ContasReceberVendedorDTO.md)
- [ContatosAlertasResponse](docs/Model/ContatosAlertasResponse.md)
- [ContatosDadoAdicionalDTO](docs/Model/ContatosDadoAdicionalDTO.md)
- [ContatosDadosBaseDTO](docs/Model/ContatosDadosBaseDTO.md)
- [ContatosDadosDTO](docs/Model/ContatosDadosDTO.md)
- [ContatosDelete200Response](docs/Model/ContatosDelete200Response.md)
- [ContatosEnderecoDTO](docs/Model/ContatosEnderecoDTO.md)
- [ContatosEnderecoDadosDTO](docs/Model/ContatosEnderecoDadosDTO.md)
- [ContatosFinanceiroCategoriaDTO](docs/Model/ContatosFinanceiroCategoriaDTO.md)
- [ContatosFinanceiroDTO](docs/Model/ContatosFinanceiroDTO.md)
- [ContatosGet200Response](docs/Model/ContatosGet200Response.md)
- [ContatosIdContatoGet200Response](docs/Model/ContatosIdContatoGet200Response.md)
- [ContatosIdContatoSituacoesPatchRequest](docs/Model/ContatosIdContatoSituacoesPatchRequest.md)
- [ContatosIdContatoTiposGet200Response](docs/Model/ContatosIdContatoTiposGet200Response.md)
- [ContatosPaisDTO](docs/Model/ContatosPaisDTO.md)
- [ContatosPessoaContatoDTO](docs/Model/ContatosPessoaContatoDTO.md)
- [ContatosPostRequest](docs/Model/ContatosPostRequest.md)
- [ContatosSituacoesPostRequest](docs/Model/ContatosSituacoesPostRequest.md)
- [ContatosTipoContatoDTO](docs/Model/ContatosTipoContatoDTO.md)
- [ContatosVendedorDTO](docs/Model/ContatosVendedorDTO.md)
- [ContratosCategoriaDTO](docs/Model/ContratosCategoriaDTO.md)
- [ContratosCobrancaContatoDTO](docs/Model/ContratosCobrancaContatoDTO.md)
- [ContratosCobrancaDTO](docs/Model/ContratosCobrancaDTO.md)
- [ContratosCobrancaVencimentoDTO](docs/Model/ContratosCobrancaVencimentoDTO.md)
- [ContratosContaContabilDTO](docs/Model/ContratosContaContabilDTO.md)
- [ContratosContatoDTO](docs/Model/ContratosContatoDTO.md)
- [ContratosDadosBaseDTO](docs/Model/ContratosDadosBaseDTO.md)
- [ContratosDadosDTO](docs/Model/ContratosDadosDTO.md)
- [ContratosDescontoDTO](docs/Model/ContratosDescontoDTO.md)
- [ContratosFormaPagamentoDTO](docs/Model/ContratosFormaPagamentoDTO.md)
- [ContratosGet200Response](docs/Model/ContratosGet200Response.md)
- [ContratosIdContratoGet200Response](docs/Model/ContratosIdContratoGet200Response.md)
- [ContratosNotaFiscalDTO](docs/Model/ContratosNotaFiscalDTO.md)
- [ContratosNotaFiscalISSDTO](docs/Model/ContratosNotaFiscalISSDTO.md)
- [ContratosNotaFiscalItemDTO](docs/Model/ContratosNotaFiscalItemDTO.md)
- [ContratosNotaFiscalItemProdutoDTO](docs/Model/ContratosNotaFiscalItemProdutoDTO.md)
- [ContratosPostRequest](docs/Model/ContratosPostRequest.md)
- [ContratosVendedorComissaoDTO](docs/Model/ContratosVendedorComissaoDTO.md)
- [ContratosVendedorDTO](docs/Model/ContratosVendedorDTO.md)
- [DepositosDadosDTO](docs/Model/DepositosDadosDTO.md)
- [DepositosGet200Response](docs/Model/DepositosGet200Response.md)
- [DepositosIdDepositoGet200Response](docs/Model/DepositosIdDepositoGet200Response.md)
- [DepositosIdDepositoPut200Response](docs/Model/DepositosIdDepositoPut200Response.md)
- [EmpresasDadosBasicosDTO](docs/Model/EmpresasDadosBasicosDTO.md)
- [EmpresasMeDadosBasicosGet200Response](docs/Model/EmpresasMeDadosBasicosGet200Response.md)
- [Error](docs/Model/Error.md)
- [ErrorField](docs/Model/ErrorField.md)
- [ErrorFieldCollection](docs/Model/ErrorFieldCollection.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [EstoqueGetAllResponseDTO](docs/Model/EstoqueGetAllResponseDTO.md)
- [EstoquesDadosBaseDTO](docs/Model/EstoquesDadosBaseDTO.md)
- [EstoquesDadosDTO](docs/Model/EstoquesDadosDTO.md)
- [EstoquesDadosEdicaoDTO](docs/Model/EstoquesDadosEdicaoDTO.md)
- [EstoquesDepositoBaseDTO](docs/Model/EstoquesDepositoBaseDTO.md)
- [EstoquesDepositoDTO](docs/Model/EstoquesDepositoDTO.md)
- [EstoquesPostRequest](docs/Model/EstoquesPostRequest.md)
- [EstoquesProdutoDTO](docs/Model/EstoquesProdutoDTO.md)
- [EstoquesSaldosBaseDTO](docs/Model/EstoquesSaldosBaseDTO.md)
- [EstoquesSaldosDTO](docs/Model/EstoquesSaldosDTO.md)
- [EstoquesSaldosDTODepositosInner](docs/Model/EstoquesSaldosDTODepositosInner.md)
- [EstoquesSaldosGet200Response](docs/Model/EstoquesSaldosGet200Response.md)
- [EstoquesSaldosGet200ResponseDataInner](docs/Model/EstoquesSaldosGet200ResponseDataInner.md)
- [EstoquesSaldosIdDepositoGet200Response](docs/Model/EstoquesSaldosIdDepositoGet200Response.md)
- [FormasPagamentosAlterarSituacaoDTO](docs/Model/FormasPagamentosAlterarSituacaoDTO.md)
- [FormasPagamentosDadosBaseDTO](docs/Model/FormasPagamentosDadosBaseDTO.md)
- [FormasPagamentosDadosCartaoDTO](docs/Model/FormasPagamentosDadosCartaoDTO.md)
- [FormasPagamentosDadosDTO](docs/Model/FormasPagamentosDadosDTO.md)
- [FormasPagamentosDefinirPadraoDTO](docs/Model/FormasPagamentosDefinirPadraoDTO.md)
- [FormasPagamentosGet200Response](docs/Model/FormasPagamentosGet200Response.md)
- [FormasPagamentosIdFormaPagamentoGet200Response](docs/Model/FormasPagamentosIdFormaPagamentoGet200Response.md)
- [FormasPagamentosPost201Response](docs/Model/FormasPagamentosPost201Response.md)
- [FormasPagamentosPostRequest](docs/Model/FormasPagamentosPostRequest.md)
- [FormasPagamentosTaxaDTO](docs/Model/FormasPagamentosTaxaDTO.md)
- [FornecedorContatoDTO](docs/Model/FornecedorContatoDTO.md)
- [GruposProdutosDadosDTO](docs/Model/GruposProdutosDadosDTO.md)
- [GruposProdutosGet200Response](docs/Model/GruposProdutosGet200Response.md)
- [GruposProdutosGrupoProdutoPaiDTO](docs/Model/GruposProdutosGrupoProdutoPaiDTO.md)
- [GruposProdutosIdGrupoProdutoGet200Response](docs/Model/GruposProdutosIdGrupoProdutoGet200Response.md)
- [GruposProdutosPostRequest](docs/Model/GruposProdutosPostRequest.md)
- [HomologacaoDadosBaseDTO](docs/Model/HomologacaoDadosBaseDTO.md)
- [HomologacaoDadosDTO](docs/Model/HomologacaoDadosDTO.md)
- [HomologacaoProdutosGet200Response](docs/Model/HomologacaoProdutosGet200Response.md)
- [HomologacaoProdutosPost201Response](docs/Model/HomologacaoProdutosPost201Response.md)
- [HomologacaoProdutosPost201ResponseData](docs/Model/HomologacaoProdutosPost201ResponseData.md)
- [HomologacaoSituacaoDTO](docs/Model/HomologacaoSituacaoDTO.md)
- [LogisticaServicoPostDTO](docs/Model/LogisticaServicoPostDTO.md)
- [LogisticasDadosBaseDTO](docs/Model/LogisticasDadosBaseDTO.md)
- [LogisticasDadosDTO](docs/Model/LogisticasDadosDTO.md)
- [LogisticasDadosPostDTO](docs/Model/LogisticasDadosPostDTO.md)
- [LogisticasDadosPutDTO](docs/Model/LogisticasDadosPutDTO.md)
- [LogisticasEtiquetasDadosResponseDTO](docs/Model/LogisticasEtiquetasDadosResponseDTO.md)
- [LogisticasEtiquetasGet200Response](docs/Model/LogisticasEtiquetasGet200Response.md)
- [LogisticasGet200Response](docs/Model/LogisticasGet200Response.md)
- [LogisticasIdLogisticaGet200Response](docs/Model/LogisticasIdLogisticaGet200Response.md)
- [LogisticasIdLogisticaRemessasGet200Response](docs/Model/LogisticasIdLogisticaRemessasGet200Response.md)
- [LogisticasIntegracaoDTO](docs/Model/LogisticasIntegracaoDTO.md)
- [LogisticasLogisticaDTO](docs/Model/LogisticasLogisticaDTO.md)
- [LogisticasLogisticaRemessaDTO](docs/Model/LogisticasLogisticaRemessaDTO.md)
- [LogisticasObjetosDadosCreateRequestDTO](docs/Model/LogisticasObjetosDadosCreateRequestDTO.md)
- [LogisticasObjetosDadosDTO](docs/Model/LogisticasObjetosDadosDTO.md)
- [LogisticasObjetosDimensaoDTO](docs/Model/LogisticasObjetosDimensaoDTO.md)
- [LogisticasObjetosEmbalagemDTO](docs/Model/LogisticasObjetosEmbalagemDTO.md)
- [LogisticasObjetosIdObjetoGet200Response](docs/Model/LogisticasObjetosIdObjetoGet200Response.md)
- [LogisticasObjetosIdObjetoPut200Response](docs/Model/LogisticasObjetosIdObjetoPut200Response.md)
- [LogisticasObjetosNotaFiscalDTO](docs/Model/LogisticasObjetosNotaFiscalDTO.md)
- [LogisticasObjetosObjetoDTO](docs/Model/LogisticasObjetosObjetoDTO.md)
- [LogisticasObjetosPedidoVendaDTO](docs/Model/LogisticasObjetosPedidoVendaDTO.md)
- [LogisticasObjetosRastreamentoDTO](docs/Model/LogisticasObjetosRastreamentoDTO.md)
- [LogisticasObjetosServicoDTO](docs/Model/LogisticasObjetosServicoDTO.md)
- [LogisticasObjetosUpdateRequestDTO](docs/Model/LogisticasObjetosUpdateRequestDTO.md)
- [LogisticasPost201Response](docs/Model/LogisticasPost201Response.md)
- [LogisticasRemessaRemessaDTO](docs/Model/LogisticasRemessaRemessaDTO.md)
- [LogisticasRemessasDadosBaseDTO](docs/Model/LogisticasRemessasDadosBaseDTO.md)
- [LogisticasRemessasDadosBaseDTOCommon](docs/Model/LogisticasRemessasDadosBaseDTOCommon.md)
- [LogisticasRemessasDadosDTO](docs/Model/LogisticasRemessasDadosDTO.md)
- [LogisticasRemessasDadosPostDTO](docs/Model/LogisticasRemessasDadosPostDTO.md)
- [LogisticasRemessasDimensaoDTO](docs/Model/LogisticasRemessasDimensaoDTO.md)
- [LogisticasRemessasEmbalagemDTO](docs/Model/LogisticasRemessasEmbalagemDTO.md)
- [LogisticasRemessasIdRemessaGet200Response](docs/Model/LogisticasRemessasIdRemessaGet200Response.md)
- [LogisticasRemessasIdRemessaPut200Response](docs/Model/LogisticasRemessasIdRemessaPut200Response.md)
- [LogisticasRemessasNotaFiscalDTO](docs/Model/LogisticasRemessasNotaFiscalDTO.md)
- [LogisticasRemessasObjetosDTO](docs/Model/LogisticasRemessasObjetosDTO.md)
- [LogisticasRemessasPedidoVendaDTO](docs/Model/LogisticasRemessasPedidoVendaDTO.md)
- [LogisticasRemessasRastreamentoDTO](docs/Model/LogisticasRemessasRastreamentoDTO.md)
- [LogisticasRemessasServicoDTO](docs/Model/LogisticasRemessasServicoDTO.md)
- [LogisticasServicoBaseDTO](docs/Model/LogisticasServicoBaseDTO.md)
- [LogisticasServicoDTO](docs/Model/LogisticasServicoDTO.md)
- [LogisticasServicosDadosCreateRequestDTO](docs/Model/LogisticasServicosDadosCreateRequestDTO.md)
- [LogisticasServicosDadosDTO](docs/Model/LogisticasServicosDadosDTO.md)
- [LogisticasServicosDadosSaveDTO](docs/Model/LogisticasServicosDadosSaveDTO.md)
- [LogisticasServicosDadosSaveRequestDTO](docs/Model/LogisticasServicosDadosSaveRequestDTO.md)
- [LogisticasServicosDadosSituationDTO](docs/Model/LogisticasServicosDadosSituationDTO.md)
- [LogisticasServicosGet200Response](docs/Model/LogisticasServicosGet200Response.md)
- [LogisticasServicosIdLogisticaServicoGet200Response](docs/Model/LogisticasServicosIdLogisticaServicoGet200Response.md)
- [LogisticasServicosIdLogisticaServicoPut200Response](docs/Model/LogisticasServicosIdLogisticaServicoPut200Response.md)
- [LogisticasServicosLogisticaDTO](docs/Model/LogisticasServicosLogisticaDTO.md)
- [LogisticasServicosPost201Response](docs/Model/LogisticasServicosPost201Response.md)
- [LogisticasServicosTransportadorDTO](docs/Model/LogisticasServicosTransportadorDTO.md)
- [LogisticasTransportadorDTO](docs/Model/LogisticasTransportadorDTO.md)
- [LojaUnidadeNegocioDTO](docs/Model/LojaUnidadeNegocioDTO.md)
- [LotResponseDTO](docs/Model/LotResponseDTO.md)
- [LoteLancamentoDTO](docs/Model/LoteLancamentoDTO.md)
- [LoteLancamentoObservacaoDTO](docs/Model/LoteLancamentoObservacaoDTO.md)
- [LotePutRequestDTO](docs/Model/LotePutRequestDTO.md)
- [LoteStatusDTO](docs/Model/LoteStatusDTO.md)
- [LotesDTO](docs/Model/LotesDTO.md)
- [LotesDepositoDTO](docs/Model/LotesDepositoDTO.md)
- [LotesProdutoDTO](docs/Model/LotesProdutoDTO.md)
- [NaturezasOperacoesDadosDTO](docs/Model/NaturezasOperacoesDadosDTO.md)
- [NaturezasOperacoesGet200Response](docs/Model/NaturezasOperacoesGet200Response.md)
- [NaturezasOperacoesIdNaturezaOperacaoObterTributacaoPost200Response](docs/Model/NaturezasOperacoesIdNaturezaOperacaoObterTributacaoPost200Response.md)
- [NfceGet200Response](docs/Model/NfceGet200Response.md)
- [NfceIdNotaFiscalConsumidorEnviarPost200Response](docs/Model/NfceIdNotaFiscalConsumidorEnviarPost200Response.md)
- [NfceIdNotaFiscalConsumidorEnviarPost200ResponseData](docs/Model/NfceIdNotaFiscalConsumidorEnviarPost200ResponseData.md)
- [NfceIdNotaFiscalConsumidorGet200Response](docs/Model/NfceIdNotaFiscalConsumidorGet200Response.md)
- [NfceIdNotaFiscalConsumidorGet200ResponseData](docs/Model/NfceIdNotaFiscalConsumidorGet200ResponseData.md)
- [NfcePost201Response](docs/Model/NfcePost201Response.md)
- [NfcePost201ResponseData](docs/Model/NfcePost201ResponseData.md)
- [NfcePostRequest](docs/Model/NfcePostRequest.md)
- [NfeDelete200Response](docs/Model/NfeDelete200Response.md)
- [NfeDocumentoChaveAcessoGet200Response](docs/Model/NfeDocumentoChaveAcessoGet200Response.md)
- [NfeIdNotaFiscalPut200Response](docs/Model/NfeIdNotaFiscalPut200Response.md)
- [NfeIdNotaFiscalPut200ResponseData](docs/Model/NfeIdNotaFiscalPut200ResponseData.md)
- [NfseGet200Response](docs/Model/NfseGet200Response.md)
- [NfseIdNotaServicoGet200Response](docs/Model/NfseIdNotaServicoGet200Response.md)
- [NfseIdNotaServicoGet200ResponseData](docs/Model/NfseIdNotaServicoGet200ResponseData.md)
- [NfsePost201Response](docs/Model/NfsePost201Response.md)
- [NfsePost201ResponseData](docs/Model/NfsePost201ResponseData.md)
- [NfsePostRequest](docs/Model/NfsePostRequest.md)
- [NotaFiscalResponsePOST](docs/Model/NotaFiscalResponsePOST.md)
- [NotaFiscalResponsePOSTContato](docs/Model/NotaFiscalResponsePOSTContato.md)
- [NotasFiscaisContatoDTO](docs/Model/NotasFiscaisContatoDTO.md)
- [NotasFiscaisContatoEnderecoDTO](docs/Model/NotasFiscaisContatoEnderecoDTO.md)
- [NotasFiscaisDadosBaseDTO](docs/Model/NotasFiscaisDadosBaseDTO.md)
- [NotasFiscaisDadosGetDTO](docs/Model/NotasFiscaisDadosGetDTO.md)
- [NotasFiscaisDadosPostDTO](docs/Model/NotasFiscaisDadosPostDTO.md)
- [NotasFiscaisDocumentoDTO](docs/Model/NotasFiscaisDocumentoDTO.md)
- [NotasFiscaisDocumentoReferenciadoDTO](docs/Model/NotasFiscaisDocumentoReferenciadoDTO.md)
- [NotasFiscaisDocumentoReferenciadoItemDTO](docs/Model/NotasFiscaisDocumentoReferenciadoItemDTO.md)
- [NotasFiscaisExclusaoDTO](docs/Model/NotasFiscaisExclusaoDTO.md)
- [NotasFiscaisExportacaoDTO](docs/Model/NotasFiscaisExportacaoDTO.md)
- [NotasFiscaisIcmsDTO](docs/Model/NotasFiscaisIcmsDTO.md)
- [NotasFiscaisImpostoDTO](docs/Model/NotasFiscaisImpostoDTO.md)
- [NotasFiscaisIntermediadorDTO](docs/Model/NotasFiscaisIntermediadorDTO.md)
- [NotasFiscaisItemDTO](docs/Model/NotasFiscaisItemDTO.md)
- [NotasFiscaisItemExportacaoDTO](docs/Model/NotasFiscaisItemExportacaoDTO.md)
- [NotasFiscaisLojaDTO](docs/Model/NotasFiscaisLojaDTO.md)
- [NotasFiscaisNaturezaOperacaoDTO](docs/Model/NotasFiscaisNaturezaOperacaoDTO.md)
- [NotasFiscaisNotaFiscalProdutorRuralReferenciadaDTO](docs/Model/NotasFiscaisNotaFiscalProdutorRuralReferenciadaDTO.md)
- [NotasFiscaisParcelaDTO](docs/Model/NotasFiscaisParcelaDTO.md)
- [NotasFiscaisParcelaFormaPagamentoDTO](docs/Model/NotasFiscaisParcelaFormaPagamentoDTO.md)
- [NotasFiscaisTransporteDadosVolumeDTO](docs/Model/NotasFiscaisTransporteDadosVolumeDTO.md)
- [NotasFiscaisTransporteEtiquetaDTO](docs/Model/NotasFiscaisTransporteEtiquetaDTO.md)
- [NotasFiscaisTransporteGetDTO](docs/Model/NotasFiscaisTransporteGetDTO.md)
- [NotasFiscaisTransportePostDTO](docs/Model/NotasFiscaisTransportePostDTO.md)
- [NotasFiscaisTransporteTransportadorEnderecoDTO](docs/Model/NotasFiscaisTransporteTransportadorEnderecoDTO.md)
- [NotasFiscaisTransporteTransportadorGetDTO](docs/Model/NotasFiscaisTransporteTransportadorGetDTO.md)
- [NotasFiscaisTransporteTransportadorPostDTO](docs/Model/NotasFiscaisTransporteTransportadorPostDTO.md)
- [NotasFiscaisTransporteVeiculoDTO](docs/Model/NotasFiscaisTransporteVeiculoDTO.md)
- [NotasFiscaisTransporteVolumeGetDTO](docs/Model/NotasFiscaisTransporteVolumeGetDTO.md)
- [NotasFiscaisTransporteVolumePostDTO](docs/Model/NotasFiscaisTransporteVolumePostDTO.md)
- [NotasFiscaisUnidadeTributavelDTO](docs/Model/NotasFiscaisUnidadeTributavelDTO.md)
- [NotasFiscaisVendedorDTO](docs/Model/NotasFiscaisVendedorDTO.md)
- [NotasServicosCancelamentoDTO](docs/Model/NotasServicosCancelamentoDTO.md)
- [NotasServicosContatoBaseDTO](docs/Model/NotasServicosContatoBaseDTO.md)
- [NotasServicosContatoDTO](docs/Model/NotasServicosContatoDTO.md)
- [NotasServicosContatoEnderecoDTO](docs/Model/NotasServicosContatoEnderecoDTO.md)
- [NotasServicosDados](docs/Model/NotasServicosDados.md)
- [NotasServicosDadosBase](docs/Model/NotasServicosDadosBase.md)
- [NotasServicosDadosBaseDTO](docs/Model/NotasServicosDadosBaseDTO.md)
- [NotasServicosDadosBaseDTOPOST](docs/Model/NotasServicosDadosBaseDTOPOST.md)
- [NotasServicosDadosDTO](docs/Model/NotasServicosDadosDTO.md)
- [NotasServicosDadosDTOPOST](docs/Model/NotasServicosDadosDTOPOST.md)
- [NotasServicosParcelaDTO](docs/Model/NotasServicosParcelaDTO.md)
- [NotasServicosParcelaFormaPagamentoDTO](docs/Model/NotasServicosParcelaFormaPagamentoDTO.md)
- [NotasServicosResponsePOSTPUT](docs/Model/NotasServicosResponsePOSTPUT.md)
- [NotasServicosServicoDTO](docs/Model/NotasServicosServicoDTO.md)
- [NotasServicosTributacaoIbsCbsDTO](docs/Model/NotasServicosTributacaoIbsCbsDTO.md)
- [NotasServicosTributacaoIbsCbsValoresDTO](docs/Model/NotasServicosTributacaoIbsCbsValoresDTO.md)
- [NotasServicosVendedorDTO](docs/Model/NotasServicosVendedorDTO.md)
- [NotificacoesDadosBaseDTO](docs/Model/NotificacoesDadosBaseDTO.md)
- [NotificacoesEnquadramentosFiscaisDTO](docs/Model/NotificacoesEnquadramentosFiscaisDTO.md)
- [NotificacoesGet200Response](docs/Model/NotificacoesGet200Response.md)
- [NotificacoesGet200ResponseDataInner](docs/Model/NotificacoesGet200ResponseDataInner.md)
- [NotificacoesQuantidadeDTO](docs/Model/NotificacoesQuantidadeDTO.md)
- [NotificacoesQuantidadeGet200Response](docs/Model/NotificacoesQuantidadeGet200Response.md)
- [NotificacoesUlidsDTO](docs/Model/NotificacoesUlidsDTO.md)
- [OrcamentosContatoDTO](docs/Model/OrcamentosContatoDTO.md)
- [OrcamentosDadosBaseDTO](docs/Model/OrcamentosDadosBaseDTO.md)
- [OrcamentosDadosDTO](docs/Model/OrcamentosDadosDTO.md)
- [OrcamentosFormaPagamentoDTO](docs/Model/OrcamentosFormaPagamentoDTO.md)
- [OrcamentosItemDTO](docs/Model/OrcamentosItemDTO.md)
- [OrcamentosLojaDTO](docs/Model/OrcamentosLojaDTO.md)
- [OrcamentosParcelaDTO](docs/Model/OrcamentosParcelaDTO.md)
- [OrcamentosProdutoDTO](docs/Model/OrcamentosProdutoDTO.md)
- [OrcamentosSituacaoDTO](docs/Model/OrcamentosSituacaoDTO.md)
- [OrcamentosTransporteContatoDTO](docs/Model/OrcamentosTransporteContatoDTO.md)
- [OrcamentosTransporteDTO](docs/Model/OrcamentosTransporteDTO.md)
- [OrcamentosTransporteVolumeDTO](docs/Model/OrcamentosTransporteVolumeDTO.md)
- [OrcamentosVendedorDTO](docs/Model/OrcamentosVendedorDTO.md)
- [OrdensProducaoContatoDTO](docs/Model/OrdensProducaoContatoDTO.md)
- [OrdensProducaoDadosBaseDTO](docs/Model/OrdensProducaoDadosBaseDTO.md)
- [OrdensProducaoDadosDTO](docs/Model/OrdensProducaoDadosDTO.md)
- [OrdensProducaoDadosGeradosPorDemandaDTO](docs/Model/OrdensProducaoDadosGeradosPorDemandaDTO.md)
- [OrdensProducaoDadosPostDTO](docs/Model/OrdensProducaoDadosPostDTO.md)
- [OrdensProducaoDepositoDTO](docs/Model/OrdensProducaoDepositoDTO.md)
- [OrdensProducaoGerarSobDemandaPost201Response](docs/Model/OrdensProducaoGerarSobDemandaPost201Response.md)
- [OrdensProducaoGet200Response](docs/Model/OrdensProducaoGet200Response.md)
- [OrdensProducaoIdOrdemProducaoGet200Response](docs/Model/OrdensProducaoIdOrdemProducaoGet200Response.md)
- [OrdensProducaoItemDTO](docs/Model/OrdensProducaoItemDTO.md)
- [OrdensProducaoPostRequest](docs/Model/OrdensProducaoPostRequest.md)
- [OrdensProducaoProdutoDTO](docs/Model/OrdensProducaoProdutoDTO.md)
- [OrdensProducaoSituacaoDTO](docs/Model/OrdensProducaoSituacaoDTO.md)
- [OrdensProducaoSituacaoDadosDTO](docs/Model/OrdensProducaoSituacaoDadosDTO.md)
- [OrdensProducaoVendaDTO](docs/Model/OrdensProducaoVendaDTO.md)
- [OrdensServicoCategoriaDTO](docs/Model/OrdensServicoCategoriaDTO.md)
- [OrdensServicoContatoDTO](docs/Model/OrdensServicoContatoDTO.md)
- [OrdensServicoDadosBaseDTO](docs/Model/OrdensServicoDadosBaseDTO.md)
- [OrdensServicoDadosDTO](docs/Model/OrdensServicoDadosDTO.md)
- [OrdensServicoDadosListagemDTO](docs/Model/OrdensServicoDadosListagemDTO.md)
- [OrdensServicoDescontoDTO](docs/Model/OrdensServicoDescontoDTO.md)
- [OrdensServicoFormaPagamentoDTO](docs/Model/OrdensServicoFormaPagamentoDTO.md)
- [OrdensServicoGet200Response](docs/Model/OrdensServicoGet200Response.md)
- [OrdensServicoIdOrdemServicoGet200Response](docs/Model/OrdensServicoIdOrdemServicoGet200Response.md)
- [OrdensServicoIdOrdemServicoGet200ResponseData](docs/Model/OrdensServicoIdOrdemServicoGet200ResponseData.md)
- [OrdensServicoItemPecaDTO](docs/Model/OrdensServicoItemPecaDTO.md)
- [OrdensServicoItemServicoDTO](docs/Model/OrdensServicoItemServicoDTO.md)
- [OrdensServicoLojaDTO](docs/Model/OrdensServicoLojaDTO.md)
- [OrdensServicoLojaUnidadeNegocioDTO](docs/Model/OrdensServicoLojaUnidadeNegocioDTO.md)
- [OrdensServicoParcelaDTO](docs/Model/OrdensServicoParcelaDTO.md)
- [OrdensServicoProdutoDTO](docs/Model/OrdensServicoProdutoDTO.md)
- [OrdensServicoSituacaoDTO](docs/Model/OrdensServicoSituacaoDTO.md)
- [OrdensServicoVendedorDTO](docs/Model/OrdensServicoVendedorDTO.md)
- [PedidosCompraResponsePOSTPUT](docs/Model/PedidosCompraResponsePOSTPUT.md)
- [PedidosComprasCategoriaDTO](docs/Model/PedidosComprasCategoriaDTO.md)
- [PedidosComprasDadosBaseDTO](docs/Model/PedidosComprasDadosBaseDTO.md)
- [PedidosComprasDadosDTO](docs/Model/PedidosComprasDadosDTO.md)
- [PedidosComprasDescontoDTO](docs/Model/PedidosComprasDescontoDTO.md)
- [PedidosComprasFormaPagamentoDTO](docs/Model/PedidosComprasFormaPagamentoDTO.md)
- [PedidosComprasFornecedorDTO](docs/Model/PedidosComprasFornecedorDTO.md)
- [PedidosComprasGet200Response](docs/Model/PedidosComprasGet200Response.md)
- [PedidosComprasIdPedidoCompraGet200Response](docs/Model/PedidosComprasIdPedidoCompraGet200Response.md)
- [PedidosComprasItemDTO](docs/Model/PedidosComprasItemDTO.md)
- [PedidosComprasItemNotaFiscalDTO](docs/Model/PedidosComprasItemNotaFiscalDTO.md)
- [PedidosComprasParcelaDTO](docs/Model/PedidosComprasParcelaDTO.md)
- [PedidosComprasPost201Response](docs/Model/PedidosComprasPost201Response.md)
- [PedidosComprasPost201ResponseData](docs/Model/PedidosComprasPost201ResponseData.md)
- [PedidosComprasPostRequest](docs/Model/PedidosComprasPostRequest.md)
- [PedidosComprasProdutoDTO](docs/Model/PedidosComprasProdutoDTO.md)
- [PedidosComprasSituacaoDTO](docs/Model/PedidosComprasSituacaoDTO.md)
- [PedidosComprasTransporteDTO](docs/Model/PedidosComprasTransporteDTO.md)
- [PedidosComprasTributacaoDTO](docs/Model/PedidosComprasTributacaoDTO.md)
- [PedidosVendasDelete200Response](docs/Model/PedidosVendasDelete200Response.md)
- [PedidosVendasDelete200ResponseData](docs/Model/PedidosVendasDelete200ResponseData.md)
- [PedidosVendasGet200Response](docs/Model/PedidosVendasGet200Response.md)
- [PedidosVendasIdPedidoVendaGet200Response](docs/Model/PedidosVendasIdPedidoVendaGet200Response.md)
- [PedidosVendasIdPedidoVendaPutRequest](docs/Model/PedidosVendasIdPedidoVendaPutRequest.md)
- [PedidosVendasPost201Response](docs/Model/PedidosVendasPost201Response.md)
- [PedidosVendasPost201ResponseData](docs/Model/PedidosVendasPost201ResponseData.md)
- [PedidosVendasPostRequest](docs/Model/PedidosVendasPostRequest.md)
- [ProdutoControlaLotesDTO](docs/Model/ProdutoControlaLotesDTO.md)
- [ProdutoFornecedorDTO](docs/Model/ProdutoFornecedorDTO.md)
- [ProdutosAlertasResponse](docs/Model/ProdutosAlertasResponse.md)
- [ProdutosAlertasResponseAlertasInner](docs/Model/ProdutosAlertasResponseAlertasInner.md)
- [ProdutosAnexoDTO](docs/Model/ProdutosAnexoDTO.md)
- [ProdutosAnexoVinculoDTO](docs/Model/ProdutosAnexoVinculoDTO.md)
- [ProdutosCampoCustomizadoDTO](docs/Model/ProdutosCampoCustomizadoDTO.md)
- [ProdutosCategoriaDTO](docs/Model/ProdutosCategoriaDTO.md)
- [ProdutosComponenteDTO](docs/Model/ProdutosComponenteDTO.md)
- [ProdutosComponenteProdutoDTO](docs/Model/ProdutosComponenteProdutoDTO.md)
- [ProdutosDados](docs/Model/ProdutosDados.md)
- [ProdutosDadosBaseDTO](docs/Model/ProdutosDadosBaseDTO.md)
- [ProdutosDadosBaseDTOGetByID](docs/Model/ProdutosDadosBaseDTOGetByID.md)
- [ProdutosDadosBaseDTOPatch](docs/Model/ProdutosDadosBaseDTOPatch.md)
- [ProdutosDadosDTO](docs/Model/ProdutosDadosDTO.md)
- [ProdutosDadosDTOAllOfVariacoes](docs/Model/ProdutosDadosDTOAllOfVariacoes.md)
- [ProdutosDadosDunsInner](docs/Model/ProdutosDadosDunsInner.md)
- [ProdutosDadosPatch](docs/Model/ProdutosDadosPatch.md)
- [ProdutosDadosPatchDTO](docs/Model/ProdutosDadosPatchDTO.md)
- [ProdutosDadosPatchDTOAllOfVariacoes](docs/Model/ProdutosDadosPatchDTOAllOfVariacoes.md)
- [ProdutosDadosVariacaoDTO](docs/Model/ProdutosDadosVariacaoDTO.md)
- [ProdutosDadosVariacaoDTOPatch](docs/Model/ProdutosDadosVariacaoDTOPatch.md)
- [ProdutosDelete200Response](docs/Model/ProdutosDelete200Response.md)
- [ProdutosDimensoesDTO](docs/Model/ProdutosDimensoesDTO.md)
- [ProdutosEstoqueDTO](docs/Model/ProdutosEstoqueDTO.md)
- [ProdutosEstruturaDTO](docs/Model/ProdutosEstruturaDTO.md)
- [ProdutosEstruturasDelete200Response](docs/Model/ProdutosEstruturasDelete200Response.md)
- [ProdutosEstruturasDelete200ResponseData](docs/Model/ProdutosEstruturasDelete200ResponseData.md)
- [ProdutosEstruturasIdProdutoEstruturaGet200Response](docs/Model/ProdutosEstruturasIdProdutoEstruturaGet200Response.md)
- [ProdutosFornecedoresDadosBaseDTO](docs/Model/ProdutosFornecedoresDadosBaseDTO.md)
- [ProdutosFornecedoresDadosBaseUpdateDTO](docs/Model/ProdutosFornecedoresDadosBaseUpdateDTO.md)
- [ProdutosFornecedoresDadosDTO](docs/Model/ProdutosFornecedoresDadosDTO.md)
- [ProdutosFornecedoresDadosUpdateDTO](docs/Model/ProdutosFornecedoresDadosUpdateDTO.md)
- [ProdutosFornecedoresFornecedorDTO](docs/Model/ProdutosFornecedoresFornecedorDTO.md)
- [ProdutosFornecedoresFornecedorUpdateDTO](docs/Model/ProdutosFornecedoresFornecedorUpdateDTO.md)
- [ProdutosFornecedoresGet200Response](docs/Model/ProdutosFornecedoresGet200Response.md)
- [ProdutosFornecedoresIdProdutoFornecedorGet200Response](docs/Model/ProdutosFornecedoresIdProdutoFornecedorGet200Response.md)
- [ProdutosFornecedoresIdProdutoFornecedorPutRequest](docs/Model/ProdutosFornecedoresIdProdutoFornecedorPutRequest.md)
- [ProdutosFornecedoresPostRequest](docs/Model/ProdutosFornecedoresPostRequest.md)
- [ProdutosFornecedoresProdutoDTO](docs/Model/ProdutosFornecedoresProdutoDTO.md)
- [ProdutosGet200Response](docs/Model/ProdutosGet200Response.md)
- [ProdutosGrupoProdutoDTO](docs/Model/ProdutosGrupoProdutoDTO.md)
- [ProdutosIdProdutoGet200Response](docs/Model/ProdutosIdProdutoGet200Response.md)
- [ProdutosIdProdutoLotesDepositosIdDepositoSaldoGet200Response](docs/Model/ProdutosIdProdutoLotesDepositosIdDepositoSaldoGet200Response.md)
- [ProdutosIdProdutoLotesDepositosIdDepositoSaldoSomaGet200Response](docs/Model/ProdutosIdProdutoLotesDepositosIdDepositoSaldoSomaGet200Response.md)
- [ProdutosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet200Response](docs/Model/ProdutosIdProdutoLotesIdLoteDepositosIdDepositoSaldoGet200Response.md)
- [ProdutosIdProdutoLotesSaldoSomaGet200Response](docs/Model/ProdutosIdProdutoLotesSaldoSomaGet200Response.md)
- [ProdutosIdProdutoSituacoesPatchRequest](docs/Model/ProdutosIdProdutoSituacoesPatchRequest.md)
- [ProdutosImagemDTO](docs/Model/ProdutosImagemDTO.md)
- [ProdutosImagemInternaDTO](docs/Model/ProdutosImagemInternaDTO.md)
- [ProdutosImagensDTO](docs/Model/ProdutosImagensDTO.md)
- [ProdutosLinhaProdutoDTO](docs/Model/ProdutosLinhaProdutoDTO.md)
- [ProdutosLojasCategoriaDTO](docs/Model/ProdutosLojasCategoriaDTO.md)
- [ProdutosLojasDadosBaseDTO](docs/Model/ProdutosLojasDadosBaseDTO.md)
- [ProdutosLojasDadosDTO](docs/Model/ProdutosLojasDadosDTO.md)
- [ProdutosLojasFornecedorLojaDTO](docs/Model/ProdutosLojasFornecedorLojaDTO.md)
- [ProdutosLojasGet200Response](docs/Model/ProdutosLojasGet200Response.md)
- [ProdutosLojasIdProdutoLojaGet200Response](docs/Model/ProdutosLojasIdProdutoLojaGet200Response.md)
- [ProdutosLojasLojaDTO](docs/Model/ProdutosLojasLojaDTO.md)
- [ProdutosLojasMarcaLojaDTO](docs/Model/ProdutosLojasMarcaLojaDTO.md)
- [ProdutosLojasPost201Response](docs/Model/ProdutosLojasPost201Response.md)
- [ProdutosLojasPost201ResponseData](docs/Model/ProdutosLojasPost201ResponseData.md)
- [ProdutosLojasPostRequest](docs/Model/ProdutosLojasPostRequest.md)
- [ProdutosLojasProdutoDTO](docs/Model/ProdutosLojasProdutoDTO.md)
- [ProdutosLojasResponsePOSTPUT](docs/Model/ProdutosLojasResponsePOSTPUT.md)
- [ProdutosLotesControlaLoteGet200Response](docs/Model/ProdutosLotesControlaLoteGet200Response.md)
- [ProdutosLotesGet200Response](docs/Model/ProdutosLotesGet200Response.md)
- [ProdutosLotesIdLoteGet200Response](docs/Model/ProdutosLotesIdLoteGet200Response.md)
- [ProdutosLotesIdLoteLancamentosGet200Response](docs/Model/ProdutosLotesIdLoteLancamentosGet200Response.md)
- [ProdutosLotesIdLoteLancamentosPost200Response](docs/Model/ProdutosLotesIdLoteLancamentosPost200Response.md)
- [ProdutosLotesPut200Response](docs/Model/ProdutosLotesPut200Response.md)
- [ProdutosMidiaDTO](docs/Model/ProdutosMidiaDTO.md)
- [ProdutosProdutoPaiDTO](docs/Model/ProdutosProdutoPaiDTO.md)
- [ProdutosResponsePOSTPUT](docs/Model/ProdutosResponsePOSTPUT.md)
- [ProdutosResponsePOSTPUTData](docs/Model/ProdutosResponsePOSTPUTData.md)
- [ProdutosResponsePOSTPUTDataVariations](docs/Model/ProdutosResponsePOSTPUTDataVariations.md)
- [ProdutosResponsePOSTPUTDataVariationsAllOfDeletedInner](docs/Model/ProdutosResponsePOSTPUTDataVariationsAllOfDeletedInner.md)
- [ProdutosSituacoesPostRequest](docs/Model/ProdutosSituacoesPostRequest.md)
- [ProdutosTributacaoDTO](docs/Model/ProdutosTributacaoDTO.md)
- [ProdutosVariacaoDTO](docs/Model/ProdutosVariacaoDTO.md)
- [ProdutosVariacoesAtributoDTO](docs/Model/ProdutosVariacoesAtributoDTO.md)
- [ProdutosVariacoesCombinacaoDadosDTO](docs/Model/ProdutosVariacoesCombinacaoDadosDTO.md)
- [ProdutosVariacoesDadosAtributoDTO](docs/Model/ProdutosVariacoesDadosAtributoDTO.md)
- [ProdutosVariacoesIdProdutoPaiAtributosPatch200Response](docs/Model/ProdutosVariacoesIdProdutoPaiAtributosPatch200Response.md)
- [ProdutosVariacoesProdutoPaiDTO](docs/Model/ProdutosVariacoesProdutoPaiDTO.md)
- [ProdutosVideoDTO](docs/Model/ProdutosVideoDTO.md)
- [PropostasComerciaisGet200Response](docs/Model/PropostasComerciaisGet200Response.md)
- [PropostasComerciaisPostRequest](docs/Model/PropostasComerciaisPostRequest.md)
- [SaldoLoteDTO](docs/Model/SaldoLoteDTO.md)
- [SaldoSomaLotesDTO](docs/Model/SaldoSomaLotesDTO.md)
- [SaldoSomaLotesTodosDepositosDTO](docs/Model/SaldoSomaLotesTodosDepositosDTO.md)
- [SaveResponseLotsDTO](docs/Model/SaveResponseLotsDTO.md)
- [SituacoesAcaoDTO](docs/Model/SituacoesAcaoDTO.md)
- [SituacoesDTO](docs/Model/SituacoesDTO.md)
- [SituacoesDadosDTO](docs/Model/SituacoesDadosDTO.md)
- [SituacoesIdSituacaoGet200Response](docs/Model/SituacoesIdSituacaoGet200Response.md)
- [SituacoesIdSituacaoPutRequest](docs/Model/SituacoesIdSituacaoPutRequest.md)
- [SituacoesModuloBaseDTO](docs/Model/SituacoesModuloBaseDTO.md)
- [SituacoesModuloDTO](docs/Model/SituacoesModuloDTO.md)
- [SituacoesModulosGet200Response](docs/Model/SituacoesModulosGet200Response.md)
- [SituacoesModulosGet200ResponseDataInner](docs/Model/SituacoesModulosGet200ResponseDataInner.md)
- [SituacoesModulosIdModuloSistemaAcoesGet200Response](docs/Model/SituacoesModulosIdModuloSistemaAcoesGet200Response.md)
- [SituacoesModulosIdModuloSistemaGet200Response](docs/Model/SituacoesModulosIdModuloSistemaGet200Response.md)
- [SituacoesModulosIdModuloSistemaGet200ResponseDataInner](docs/Model/SituacoesModulosIdModuloSistemaGet200ResponseDataInner.md)
- [SituacoesModulosIdModuloSistemaTransicoesGet200Response](docs/Model/SituacoesModulosIdModuloSistemaTransicoesGet200Response.md)
- [SituacoesTransicaoDTO](docs/Model/SituacoesTransicaoDTO.md)
- [SituacoesTransicoesIdTransicaoGet200Response](docs/Model/SituacoesTransicoesIdTransicaoGet200Response.md)
- [UsuariosRecuperarSenhaPost200Response](docs/Model/UsuariosRecuperarSenhaPost200Response.md)
- [UsuariosRecuperarSenhaPost200ResponseDataInner](docs/Model/UsuariosRecuperarSenhaPost200ResponseDataInner.md)
- [UsuariosVerificarHashGet200Response](docs/Model/UsuariosVerificarHashGet200Response.md)
- [UsuariosVerificarHashGet200ResponseDataInner](docs/Model/UsuariosVerificarHashGet200ResponseDataInner.md)
- [VendasCategoriaDTO](docs/Model/VendasCategoriaDTO.md)
- [VendasContatoDTO](docs/Model/VendasContatoDTO.md)
- [VendasCreateInvoiceResponseDTO](docs/Model/VendasCreateInvoiceResponseDTO.md)
- [VendasDadosBaseDTO](docs/Model/VendasDadosBaseDTO.md)
- [VendasDadosBaseDTOPUT](docs/Model/VendasDadosBaseDTOPUT.md)
- [VendasDadosDTO](docs/Model/VendasDadosDTO.md)
- [VendasDescontoDTO](docs/Model/VendasDescontoDTO.md)
- [VendasIntermediadorDTO](docs/Model/VendasIntermediadorDTO.md)
- [VendasItemComissaoDTO](docs/Model/VendasItemComissaoDTO.md)
- [VendasItemDTO](docs/Model/VendasItemDTO.md)
- [VendasItemNaturezaOperacaoDTO](docs/Model/VendasItemNaturezaOperacaoDTO.md)
- [VendasItemProdutoDTO](docs/Model/VendasItemProdutoDTO.md)
- [VendasLojaDTO](docs/Model/VendasLojaDTO.md)
- [VendasNotaFiscalDTO](docs/Model/VendasNotaFiscalDTO.md)
- [VendasParcelaDTO](docs/Model/VendasParcelaDTO.md)
- [VendasParcelaFormaPagamentoDTO](docs/Model/VendasParcelaFormaPagamentoDTO.md)
- [VendasResponsePOSTPUT](docs/Model/VendasResponsePOSTPUT.md)
- [VendasSituacaoDTO](docs/Model/VendasSituacaoDTO.md)
- [VendasSituacaoDTOPUT](docs/Model/VendasSituacaoDTOPUT.md)
- [VendasTaxaDTO](docs/Model/VendasTaxaDTO.md)
- [VendasTransporteContatoDTO](docs/Model/VendasTransporteContatoDTO.md)
- [VendasTransporteDTO](docs/Model/VendasTransporteDTO.md)
- [VendasTransporteEtiquetaDTO](docs/Model/VendasTransporteEtiquetaDTO.md)
- [VendasTransporteVolumeDTO](docs/Model/VendasTransporteVolumeDTO.md)
- [VendasTributacaoDTO](docs/Model/VendasTributacaoDTO.md)
- [VendasVendedorDTO](docs/Model/VendasVendedorDTO.md)
- [VendedoresComissaoDTO](docs/Model/VendedoresComissaoDTO.md)
- [VendedoresContatoDTO](docs/Model/VendedoresContatoDTO.md)
- [VendedoresDadosBaseDTO](docs/Model/VendedoresDadosBaseDTO.md)
- [VendedoresDadosDTO](docs/Model/VendedoresDadosDTO.md)
- [VendedoresGet200Response](docs/Model/VendedoresGet200Response.md)
- [VendedoresIdVendedorGet200Response](docs/Model/VendedoresIdVendedorGet200Response.md)
- [VendedoresIdVendedorGet200ResponseData](docs/Model/VendedoresIdVendedorGet200ResponseData.md)
- [VendedoresLojaDTO](docs/Model/VendedoresLojaDTO.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://bling.com.br/Api/v3/oauth/authorize`
- **Scopes**: N/A

### OAuth2-Docs

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://bling.com.br/Api/v3/oauth/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0`
    - Generator version: `7.23.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
