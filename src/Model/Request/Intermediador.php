<?php

namespace Eloom\SdkBling\Model\Request;

class Intermediador implements \JsonSerializable {
	
	/**
	 * @var string
	 */
	private $cnpj;
	
	/**
	 * @var string
	 */
	private $nomeUsuario;
	
	public function getCnpj(): string {
		return $this->cnpj;
	}
	
	public function setCnpj(string $cnpj): void {
		$this->cnpj = $cnpj;
	}
	
	public function getNomeUsuario(): string {
		return $this->nomeUsuario;
	}
	
	public function setNomeUsuario(string $nomeUsuario): void {
		$this->nomeUsuario = $nomeUsuario;
	}
	
	public function jsonSerialize() {
		$vars = [];
		if (null != $this->cnpj) {
			$vars['cnpj'] = $this->cnpj;
		}
		if (null != $this->nomeUsuario) {
			$vars['nomeUsuario'] = $this->nomeUsuario;
		}
		
		return $vars;
	}
}