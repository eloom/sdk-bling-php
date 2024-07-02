<?php

namespace Eloom\SdkBling\Model\Request;

class NotaFiscalProdutorRuralReferenciada implements \JsonSerializable {
	
	/**
	 * @var string
	 */
	private $numero;
	
	/**
	 * @var string
	 */
	private $serie;
	
	/**
	 * @var date
	 */
	private $data;
	
	public function getNumero(): string {
		return $this->numero;
	}
	
	public function setNumero(string $numero): void {
		$this->numero = $numero;
	}
	
	public function getSerie(): string {
		return $this->serie;
	}
	
	public function setSerie(string $serie): void {
		$this->serie = $serie;
	}
	
	public function getData(): date {
		return $this->data;
	}
	
	public function setData(date $data): void {
		$this->data = $data;
	}
	
	public function jsonSerialize() {
		$vars = [];
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}
		if (null != $this->serie) {
			$vars['serie'] = $this->serie;
		}
		if (null != $this->data) {
			$vars['data'] = $this->data->format('Y-m-d');
		}
		
		return $vars;
	}
}