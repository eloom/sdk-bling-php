<?php

namespace Eloom\SdkBling\Model\Request;

class Loja implements \JsonSerializable
{

	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $numero;

	public static function of(): Loja {
		return new Loja();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): void {
		$this->id = $id;
	}

	public function getNumero(): string {
		return $this->numero;
	}

	public function setNumero(string $numero): void {
		$this->numero = $numero;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->id) {
			$vars['id'] = $this->id;
		}
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}

		return $vars;
	}
}