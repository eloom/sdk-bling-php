<?php

namespace Eloom\SdkBling\Model\Request;

class Volume implements \JsonSerializable {

	/**
	 * @var integer
	 */
	private $quantidade;

	/**
	 * @var string
	 */
	private $especie;

	/**
	 * @var string
	 */
	private $numero;

	/**
	 * @var float
	 */
	private $pesoBruto;

	/**
	 * @var float
	 */
	private $pesoLiquido;

	public static function of(): Volume {
		return new Volume();
	}

	public function getQuantidade(): int {
		return $this->quantidade;
	}

	public function setQuantidade(int $quantidade): void {
		$this->quantidade = $quantidade;
	}

	public function getEspecie(): string {
		return $this->especie;
	}

	public function setEspecie(string $especie): void {
		$this->especie = $especie;
	}

	public function getNumero(): string {
		return $this->numero;
	}

	public function setNumero(string $numero): void {
		$this->numero = $numero;
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

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->quantidade) {
			$vars['quantidade'] = intval($this->quantidade);
		}
		if (null != $this->especie) {
			$vars['especie'] = $this->especie;
		}
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}
		if (null != $this->pesoBruto) {
			$vars['pesoBruto'] = round($this->pesoBruto, 2);
		}
		if (null != $this->pesoLiquido) {
			$vars['pesoLiquido'] = round($this->pesoLiquido, 2);
		}

		return $vars;
	}
}