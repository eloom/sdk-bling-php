<?php

namespace Eloom\SdkBling\Model\Request;

class Item implements \JsonSerializable
{

	/**
	 * @var string
	 */
	private $codigo;

	/**
	 * @var string
	 */
	private $descricao;

	/**
	 * @var string
	 */
	private $unidade;

	/**
	 * @var int
	 */
	private $quantidade;

	/**
	 * @var float
	 */
	private $valor;

	/**
	 * @var string
	 */
	private $tipo;

	/**
	 * @var float
	 */
	private $pesoBruto;

	/**
	 * @var float
	 */
	private $pesoLiquido;

	/**
	 * @var string
	 */
	private $numeroPedidoCompra;

	/**
	 * @var string
	 */
	private $classificacaoFiscal;

	/**
	 * @var string
	 */
	private $cest;

	/**
	 * @var string
	 */
	private $codigoServico;

	/**
	 * @var int
	 */
	private $origem;

	/**
	 * @var string
	 */
	private $informacoesAdicionais;

	public static function of(): Item {
		return new Item();
	}

	public function getCodigo(): string {
		return $this->codigo;
	}

	public function setCodigo(string $codigo): void {
		$this->codigo = $codigo;
	}

	public function getDescricao(): string {
		return $this->descricao;
	}

	public function setDescricao(string $descricao): void {
		$this->descricao = $descricao;
	}

	public function getUnidade(): string {
		return $this->unidade;
	}

	public function setUnidade(string $unidade): void {
		$this->unidade = $unidade;
	}

	public function getQuantidade(): int {
		return $this->quantidade;
	}

	public function setQuantidade(int $quantidade): void {
		$this->quantidade = $quantidade;
	}

	public function getValor(): float {
		return $this->valor;
	}

	public function setValor(float $valor): void {
		$this->valor = $valor;
	}

	public function getTipo(): string {
		return $this->tipo;
	}

	public function setTipo(string $tipo): void {
		$this->tipo = $tipo;
	}

	public function getPesoBruto(): float {
		return $this->pesoBruto;
	}

	public function setPesoBruto(float $pesoBruto): void {
		$this->pesoBruto = $pesoBruto;
	}

	public function getPesoLiquido(): float {
		return $this->pesoLiquido;
	}

	public function setPesoLiquido(float $pesoLiquido): void {
		$this->pesoLiquido = $pesoLiquido;
	}

	public function getNumeroPedidoCompra(): string {
		return $this->numeroPedidoCompra;
	}

	public function setNumeroPedidoCompra(string $numeroPedidoCompra): void {
		$this->numeroPedidoCompra = $numeroPedidoCompra;
	}

	public function getClassificacaoFiscal(): string {
		return $this->classificacaoFiscal;
	}

	public function setClassificacaoFiscal(string $classificacaoFiscal): void {
		$this->classificacaoFiscal = $classificacaoFiscal;
	}

	public function getCest(): string {
		return $this->cest;
	}

	public function setCest(string $cest): void {
		$this->cest = $cest;
	}

	public function getCodigoServico(): string {
		return $this->codigoServico;
	}

	public function setCodigoServico(string $codigoServico): void {
		$this->codigoServico = $codigoServico;
	}

	public function getOrigem(): int {
		return $this->origem;
	}

	public function setOrigem(int $origem): void {
		$this->origem = $origem;
	}

	public function getInformacoesAdicionais(): string {
		return $this->informacoesAdicionais;
	}

	public function setInformacoesAdicionais(string $informacoesAdicionais): void {
		$this->informacoesAdicionais = $informacoesAdicionais;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->codigo) {
			$vars['codigo'] = $this->codigo;
		}
		if (null != $this->descricao) {
			$vars['descricao'] = $this->descricao;
		}
		if (null != $this->unidade) {
			$vars['unidade'] = $this->unidade;
		}
		if (null != $this->quantidade) {
			$vars['quantidade'] = intval($this->quantidade);
		}
		if (null != $this->valor) {
			$vars['valor'] = round($this->valor, 2);
		}
		if (null != $this->tipo) {
			$vars['tipo'] = $this->tipo;
		}
		if (null != $this->pesoBruto) {
			$vars['pesoBruto'] = round($this->pesoBruto, 2);
		}
		if (null != $this->pesoLiquido) {
			$vars['pesoLiquido'] = round($this->pesoLiquido, 2);
		}
		if (null != $this->numeroPedidoCompra) {
			$vars['numeroPedidoCompra'] = $this->numeroPedidoCompra;
		}
		if (null != $this->classificacaoFiscal) {
			$vars['classificacaoFiscal'] = $this->classificacaoFiscal;
		}
		if (null != $this->cest) {
			$vars['cest'] = $this->cest;
		}
		if (null != $this->codigoServico) {
			$vars['codigoServico'] = $this->codigoServico;
		}
		if (null != $this->origem) {
			$vars['origem'] = $this->origem;
		}
		if (null != $this->informacoesAdicionais) {
			$vars['informacoesAdicionais'] = $this->informacoesAdicionais;
		}

		return $vars;
	}
}