<?php

namespace Eloom\SdkBling\Model\Request;

class Veiculo implements \JsonSerializable
{

	/**
	 * @var string
	 */
	private $placa;

	/**
	 * @var string
	 */
	private $uf;

	/**
	 * @var string
	 */
	private $marca;

	public static function of(): Veiculo {
		return new Veiculo();
	}

	public function getPlaca(): string {
		return $this->placa;
	}

	public function setPlaca(string $placa): void {
		$this->placa = $placa;
	}

	public function getUf(): string {
		return $this->uf;
	}

	public function setUf(string $uf): void {
		$this->uf = $uf;
	}

	public function getMarca(): string {
		return $this->marca;
	}

	public function setMarca(string $marca): void {
		$this->marca = $marca;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->placa) {
			$vars['placa'] = $this->placa;
		}
		if (null != $this->uf) {
			$vars['uf'] = $this->uf;
		}
		if (null != $this->marca) {
			$vars['marca'] = $this->marca;
		}

		return $vars;
	}
}