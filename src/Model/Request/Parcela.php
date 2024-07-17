<?php

namespace Eloom\SdkBling\Model\Request;

use DateTime;

class Parcela implements \JsonSerializable {

	/**
	 * @var DateTime
	 */
	private $data;

	/**
	 * @var float
	 */
	private $valor;

	/**
	 * @var string
	 */
	private $observacoes;

	/**
	 * @var FormaPagamento;
	 */
	private $formaPagamento;

	public static function of(): Parcela {
		return new Parcela();
	}

	public function getData(): DateTime {
		return $this->data;
	}

	public function setData(DateTime $data): void {
		$this->data = $data;
	}

	public function getValor(): float {
		return $this->valor;
	}

	public function setValor(float $valor): void {
		$this->valor = $valor;
	}

	public function getObservacoes(): string {
		return $this->observacoes;
	}

	public function setObservacoes(string $observacoes): void {
		$this->observacoes = $observacoes;
	}

	public function getFormaPagamento(): FormaPagamento {
		return $this->formaPagamento;
	}

	public function setFormaPagamento(FormaPagamento $formaPagamento): void {
		$this->formaPagamento = $formaPagamento;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->data) {
			$vars['data'] = $this->data->format('Y-m-d');
		}
		if (null != $this->valor) {
			$vars['valor'] = round($this->valor, 2);
		}
		if (null != $this->observacoes) {
			$vars['observacoes'] = $this->observacoes;
		}
		if (null != $this->formaPagamento) {
			$vars['formaPagamento'] = $this->formaPagamento->jsonSerialize();
		}

		return $vars;
	}

}