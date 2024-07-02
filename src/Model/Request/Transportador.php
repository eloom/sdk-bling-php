<?php

namespace Eloom\SdkBling\Model\Request;

class Transportador implements \JsonSerializable {
	
	/**
	 * @var string
	 */
	private $nome;
	
	/**
	 * @var string
	 */
	private $numeroDocumento;
	
	/**
	 * @var string
	 */
	private $ie;
	
	/**
	 * @var Endereco
	 */
	private $endereco;
	
	public function getNome(): string {
		return $this->nome;
	}
	
	public function setNome(string $nome): void {
		$this->nome = $nome;
	}
	
	public function getNumeroDocumento(): string {
		return $this->numeroDocumento;
	}
	
	public function setNumeroDocumento(string $numeroDocumento): void {
		$this->numeroDocumento = $numeroDocumento;
	}
	
	public function getIe(): string {
		return $this->ie;
	}
	
	public function setIe(string $ie): void {
		$this->ie = $ie;
	}
	
	public function getEndereco(): Endereco {
		return $this->endereco;
	}
	
	public function setEndereco(Endereco $endereco): void {
		$this->endereco = $endereco;
	}
	
	public function jsonSerialize() {
		$vars = [];
		if (null != $this->nome) {
			$vars['nome'] = $this->nome;
		}
		if (null != $this->numeroDocumento) {
			$vars['numeroDocumento'] = $this->numeroDocumento;
		}
		if (null != $this->ie) {
			$vars['ie'] = $this->ie;
		}
		if (null != $this->endereco) {
			$vars['endereco'] = $this->endereco->jsonSerialize();
		}
		
		return $vars;
	}
}