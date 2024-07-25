<?php

namespace Eloom\SdkBling\Model\Request;

use DateTime;
use Eloom\SdkBling\Enum\Finalidade;
use Eloom\SdkBling\Util\Collection;

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
	 * @var DateTime
	 */
	private $dataEmissao;

	/**
	 * @var DateTime
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
	 * @var Finalidade
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

	/**
	 * @var Collection
	 */
	private $itens;

	/**
	 * @var Collection
	 */
	private $parcelas;

	/**
	 * @var Transporte
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

	/**
	 * @var Contato
	 */
	private $contato;

	public static function of(): Nfe {
		return new Nfe();
	}

	public static function build(): Nfe {
		$instance = Nfe::of();
		$instance->setItens(new Collection());
		$instance->setParcelas(new Collection());

		return $instance;
	}

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

	public function getDataEmissao(): DateTime {
		return $this->dataEmissao;
	}

	public function setDataEmissao(DateTime $dataEmissao): void {
		$this->dataEmissao = $dataEmissao;
	}

	public function getDataOperacao(): DateTime {
		return $this->dataOperacao;
	}

	public function setDataOperacao(DateTime $dataOperacao): void {
		$this->dataOperacao = $dataOperacao;
	}

	public function getNaturezaOperacao(): NaturezaOperacao {
		if (null == $this->naturezaOperacao) {
			$this->naturezaOperacao = NaturezaOperacao::of();
		}

		return $this->naturezaOperacao;
	}

	public function setNaturezaOperacao(NaturezaOperacao $naturezaOperacao): void {
		$this->naturezaOperacao = $naturezaOperacao;
	}

	public function getLoja(): Loja {
		if (null == $this->loja) {
			$this->loja = Loja::of();
		}

		return $this->loja;
	}

	public function setLoja(Loja $loja): void {
		$this->loja = $loja;
	}

	public function getFinalidade(): Finalidade {
		if (null == $this->finalidade) {
			$this->finalidade = Finalidade::of();
		}

		return $this->finalidade;
	}

	public function setFinalidade(Finalidade $finalidade): void {
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
		if (null == $this->documentoReferenciado) {
			$this->documentoReferenciado = DocumentoReferenciado::of();
		}

		return $this->documentoReferenciado;
	}

	public function setDocumentoReferenciado(DocumentoReferenciado $documentoReferenciado): void {
		$this->documentoReferenciado = $documentoReferenciado;
	}

	public function getItens(): Collection {
		if (null == $this->itens) {
			$this->itens = new Collection([]);
		}

		return $this->itens;
	}

	public function setItens(Collection $itens): void {
		$this->itens = $itens;
	}

	public function getParcelas(): Collection {
		if (null == $this->parcelas) {
			$this->parcelas = new Collection([]);
		}

		return $this->parcelas;
	}

	public function setParcelas(Collection $parcelas): void {
		$this->parcelas = $parcelas;
	}

	public function getTransporte(): Transporte {
		if (null == $this->transporte) {
			$this->transporte = Transporte::of();
		}

		return $this->transporte;
	}

	public function setTransporte(Transporte $transporte): void {
		$this->transporte = $transporte;
	}

	public function getNotaFiscalProdutorRuralReferenciada(): NotaFiscalProdutorRuralReferenciada {
		if (null == $this->notaFiscalProdutorRuralReferenciada) {
			$this->intermediador = NotaFiscalProdutorRuralReferenciada::of();
		}

		return $this->notaFiscalProdutorRuralReferenciada;
	}

	public function setNotaFiscalProdutorRuralReferenciada(NotaFiscalProdutorRuralReferenciada $notaFiscalProdutorRuralReferenciada): void {
		$this->notaFiscalProdutorRuralReferenciada = $notaFiscalProdutorRuralReferenciada;
	}

	public function getIntermediador(): Intermediador {
		if (null == $this->intermediador) {
			$this->intermediador = Intermediador::of();
		}

		return $this->intermediador;
	}

	public function setIntermediador(Intermediador $intermediador): void {
		$this->intermediador = $intermediador;
	}

	public function getContato(): Contato {
		if (null == $this->contato) {
			$this->contato = Contato::of();
		}

		return $this->contato;
	}

	public function setContato(Contato $contato): void {
		$this->contato = $contato;
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
			$vars['dataEmissao'] = $this->dataEmissao->format('Y-m-d H:i:s');
		}
		if (null != $this->dataOperacao) {
			$vars['dataOperacao'] = $this->dataOperacao->format('Y-m-d H:i:s');
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
		if (null != $this->itens && $this->itens.count() > 0) {
			$vars['itens'] = $this->itens->toArray();
		}
		if (null != $this->parcelas && $this->parcelas.count() > 0) {
			$vars['parcelas'] = $this->parcelas->toArray();
		}
		if (null != $this->transporte) {
			$vars['transporte'] = $this->transporte->jsonSerialize();
		}
		if (null != $this->notaFiscalProdutorRuralReferenciada) {
			$vars['notaFiscalProdutorRuralReferenciada'] = $this->notaFiscalProdutorRuralReferenciada->jsonSerialize();
		}
		if (null != $this->contato) {
			$vars['contato'] = $this->contato->jsonSerialize();
		}

		return $vars;
	}
}