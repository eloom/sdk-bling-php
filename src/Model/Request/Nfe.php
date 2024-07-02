<?php

namespace Eloom\SdkBling\Model\Request;

use Eloom\SdkBling\Enum\FinalidadeEnum;

class Nfe implements \JsonSerializable {
	
	/**
	 * @var integer
	 */
	private $id;
	
	/**
	 * @var int
	 */
	private $tipo;
	
	private $situacao;
	
	/**
	 * @var string
	 */
	private $numero;
	
	/**
	 * @var \DateTime
	 */
	private $dataEmissao;
	
	/**
	 * @var \DateTime
	 */
	private $dataOperacao;
	
	/**
	 * @var NaturezaOperacao
	 */
	private $naturezaOperacao;
	
	/**
	 * @var Loja
	 */
	private $loja;
	
	/**
	 * @var FinalidadeEnum
	 */
	private $finalidade;
	
	/**
	 * @var float
	 */
	private $seguro;
	
	/**
	 * @var float
	 */
	private $despesas;
	
	/**
	 * @var float
	 */
	private $desconto;
	
	/**
	 * @var string
	 */
	private $observacoes;
	
	/**
	 * @var string
	 */
	private $chaveAcesso;
	
	/**
	 * @var string
	 */
	private $xml;
	
	/**
	 * @var string
	 */
	private $linkDanfe;
	
	/**
	 * @var string
	 */
	private $linkPDF;
	
	/**
	 * @var DocumentoReferenciado
	 */
	private $documentoReferenciado;
	
	private $itens = [];
	
	private $parcelas = [];
	
	/**
	 * @var Transport
	 */
	private $transporte;
	
	/**
	 * @var NotaFiscalProdutorRuralReferenciada
	 */
	private $notaFiscalProdutorRuralReferenciada;
	
	/**
	 * @var Intermediador
	 */
	private $intermediador;
	
	public function getId(): int {
		return $this->id;
	}
	
	public function setId(int $id): void {
		$this->id = $id;
	}
	
	public function getTipo(): int {
		return $this->tipo;
	}
	
	public function setTipo(int $tipo): void {
		$this->tipo = $tipo;
	}
	
	/**
	 * @return mixed
	 */
	public function getSituacao() {
		return $this->situacao;
	}
	
	/**
	 * @param mixed $situacao
	 */
	public function setSituacao($situacao): void {
		$this->situacao = $situacao;
	}
	
	public function getNumero(): string {
		return $this->numero;
	}
	
	public function setNumero(string $numero): void {
		$this->numero = $numero;
	}
	
	public function getDataEmissao(): \DateTime {
		return $this->dataEmissao;
	}
	
	public function setDataEmissao(\DateTime $dataEmissao): void {
		$this->dataEmissao = $dataEmissao;
	}
	
	public function getDataOperacao(): \DateTime {
		return $this->dataOperacao;
	}
	
	public function setDataOperacao(\DateTime $dataOperacao): void {
		$this->dataOperacao = $dataOperacao;
	}
	
	public function getNaturezaOperacao(): NaturezaOperacao {
		return $this->naturezaOperacao;
	}
	
	public function setNaturezaOperacao(NaturezaOperacao $naturezaOperacao): void {
		$this->naturezaOperacao = $naturezaOperacao;
	}
	
	public function getLoja(): Loja {
		return $this->loja;
	}
	
	public function setLoja(Loja $loja): void {
		$this->loja = $loja;
	}
	
	public function getFinalidade(): FinalidadeEnum {
		return $this->finalidade;
	}
	
	public function setFinalidade(FinalidadeEnum $finalidade): void {
		$this->finalidade = $finalidade;
	}
	
	public function getSeguro(): float {
		return $this->seguro;
	}
	
	public function setSeguro(float $seguro): void {
		$this->seguro = $seguro;
	}
	
	public function getDespesas(): float {
		return $this->despesas;
	}
	
	public function setDespesas(float $despesas): void {
		$this->despesas = $despesas;
	}
	
	public function getDesconto(): float {
		return $this->desconto;
	}
	
	public function setDesconto(float $desconto): void {
		$this->desconto = $desconto;
	}
	
	public function getObservacoes(): string {
		return $this->observacoes;
	}
	
	public function setObservacoes(string $observacoes): void {
		$this->observacoes = $observacoes;
	}
	
	public function getChaveAcesso(): string {
		return $this->chaveAcesso;
	}
	
	public function setChaveAcesso(string $chaveAcesso): void {
		$this->chaveAcesso = $chaveAcesso;
	}
	
	public function getXml(): string {
		return $this->xml;
	}
	
	public function setXml(string $xml): void {
		$this->xml = $xml;
	}
	
	public function getLinkDanfe(): string {
		return $this->linkDanfe;
	}
	
	public function setLinkDanfe(string $linkDanfe): void {
		$this->linkDanfe = $linkDanfe;
	}
	
	public function getLinkPDF(): string {
		return $this->linkPDF;
	}
	
	public function setLinkPDF(string $linkPDF): void {
		$this->linkPDF = $linkPDF;
	}
	
	public function getDocumentoReferenciado(): DocumentoReferenciado {
		return $this->documentoReferenciado;
	}
	
	public function setDocumentoReferenciado(DocumentoReferenciado $documentoReferenciado): void {
		$this->documentoReferenciado = $documentoReferenciado;
	}
	
	public function getItens(): array {
		return $this->itens;
	}
	
	public function setItens(array $itens): void {
		$this->itens = $itens;
	}
	
	public function getParcelas(): array {
		return $this->parcelas;
	}
	
	public function setParcelas(array $parcelas): void {
		$this->parcelas = $parcelas;
	}
	
	public function getTransporte(): Transport {
		return $this->transporte;
	}
	
	public function setTransporte(Transport $transporte): void {
		$this->transporte = $transporte;
	}
	
	public function getNotaFiscalProdutorRuralReferenciada(): NotaFiscalProdutorRuralReferenciada {
		return $this->notaFiscalProdutorRuralReferenciada;
	}
	
	public function setNotaFiscalProdutorRuralReferenciada(NotaFiscalProdutorRuralReferenciada $notaFiscalProdutorRuralReferenciada): void {
		$this->notaFiscalProdutorRuralReferenciada = $notaFiscalProdutorRuralReferenciada;
	}
	
	public function getIntermediador(): Intermediador {
		return $this->intermediador;
	}
	
	public function setIntermediador(Intermediador $intermediador): void {
		$this->intermediador = $intermediador;
	}
	
	public function jsonSerialize() {
		$vars = [];
		if (null != $this->id) {
			$vars['id'] = intval($this->id);
		}
		if (null != $this->tipo) {
			$vars['tipo'] = intval($this->tipo);
		}
		if (null != $this->situacao) {
			$vars['situacao'] = intval($this->situacao);
		}
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}
		if (null != $this->dataEmissao) {
			$vars['dataEmissao'] = $this->dataEmissao->format('Y-m-d');
		}
		if (null != $this->dataOperacao) {
			$vars['dataOperacao'] = $this->dataOperacao->format('Y-m-d');
		}
		if (null != $this->finalidade) {
			$vars['finalidade'] = $this->finalidade;
		}
		if (null != $this->seguro) {
			$vars['seguro'] = round($this->seguro, 2);
		}
		if (null != $this->despesas) {
			$vars['despesas'] = round($this->despesas, 2);
		}
		if (null != $this->desconto) {
			$vars['desconto'] = round($this->desconto, 2);
		}
		if (null != $this->observacoes) {
			$vars['observacoes'] = $this->observacoes;
		}
		if (null != $this->chaveAcesso) {
			$vars['chaveAcesso'] = $this->chaveAcesso;
		}
		if (null != $this->xml) {
			$vars['xml'] = $this->xml;
		}
		if (null != $this->linkPDF) {
			$vars['linkPDF'] = $this->linkPDF;
		}
		if (null != $this->linkDanfe) {
			$vars['linkDanfe'] = $this->linkDanfe;
		}
		if (null != $this->naturezaOperacao) {
			$vars['naturezaOperacao'] = $this->naturezaOperacao->jsonSerialize();
		}
		if (null != $this->loja) {
			$vars['loja'] = $this->loja->jsonSerialize();
		}
		if (null != $this->documentoReferenciado) {
			$vars['documentoReferenciado'] = $this->documentoReferenciado->jsonSerialize();
		}
		if (null != $this->itens && sizeof($this->itens) > 0) {
			$vars['itens'] = $this->itens->jsonSerialize();
		}
		if (null != $this->parcelas && sizeof($this->parcelas) > 0) {
			$vars['parcelas'] = $this->parcelas->jsonSerialize();
		}
		if (null != $this->transporte) {
			$vars['transporte'] = $this->transporte->jsonSerialize();
		}
		if (null != $this->notaFiscalProdutorRuralReferenciada) {
			$vars['notaFiscalProdutorRuralReferenciada'] = $this->notaFiscalProdutorRuralReferenciada->jsonSerialize();
		}
		
		return $vars;
	}
}