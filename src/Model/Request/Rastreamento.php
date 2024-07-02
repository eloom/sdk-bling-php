<?php

namespace Eloom\SdkBling\Model\Request;

class Rastreamento implements \JsonSerializable {
	
	/**
	 * @var integer
	 */
	private $id;
	
	/**
	 * @var string
	 */
	private $servico;
	
	/**
	 * @var string
	 */
	private $codigoRastreamento;
	
	public function getId(): int {
		return $this->id;
	}
	
	public function setId(int $id): void {
		$this->id = $id;
	}
	
	public function getServico(): string {
		return $this->servico;
	}
	
	public function setServico(string $servico): void {
		$this->servico = $servico;
	}
	
	public function getCodigoRastreamento(): string {
		return $this->codigoRastreamento;
	}
	
	public function setCodigoRastreamento(string $codigoRastreamento): void {
		$this->codigoRastreamento = $codigoRastreamento;
	}
	
	public function jsonSerialize() {
		$vars = [];
		if (null != $this->id) {
			$vars['id'] = intval($this->id);
		}
		if (null != $this->servico) {
			$vars['servico'] = $this->servico;
		}
		if (null != $this->codigoRastreamento) {
			$vars['codigoRastreamento'] = $this->codigoRastreamento;
		}
		
		return $vars;
	}
}