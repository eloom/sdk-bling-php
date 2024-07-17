<?php

namespace Eloom\SdkBling\Model\Request;

class FormaPagamento
{

	/**
	 * @var integer
	 */
	private $id;

	public static function of(): FormaPagamento {
		return new FormaPagamento();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): void {
		$this->id = $id;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->id) {
			$vars['id'] = $this->id;
		}

		return $vars;
	}
}