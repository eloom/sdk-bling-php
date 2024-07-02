<?php

namespace Eloom\SdkBling\Model\Request;

class NaturezaOperacao implements \JsonSerializable {
	
	/**
	 * @var integer
	 */
	private $id;
	
	public function getId(): int {
		return $this->id;
	}
	
	public function setId(int $id): void {
		$this->id = $id;
	}
	
	public function jsonSerialize() {
		$vars = [];
		if (null != $this->id) {
			$vars['id'] = intval($this->id);
		}
		
		return $vars;
	}
}