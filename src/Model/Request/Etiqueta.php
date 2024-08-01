<?php

namespace Eloom\SdkBling\Model\Request;

class Etiqueta implements \JsonSerializable {

	/**
	 * @var string
	 */
	private $nome;

	/**
	 * @var string
	 */
	private $endereco;

	/**
	 * @var string
	 */
	private $numero;

	/**
	 * @var string
	 */
	private $complemento;

	/**
	 * @var string
	 */
	private $municipio;

	/**
	 * @var string
	 */
	private $uf;

	/**
	 * @var string
	 */
	private $cep;

	/**
	 * @var string
	 */
	private $bairro;

	public static function of(): Etiqueta {
		return new Etiqueta();
	}

	public function getNome(): string {
		return $this->nome;
	}

	public function setNome(string $nome): void {
		$this->nome = trim($nome);
	}

	public function getEndereco(): string {
		return $this->endereco;
	}

	public function setEndereco(string $endereco): void {
		$this->endereco = trim($endereco);
	}

	public function getNumero(): string {
		return $this->numero;
	}

	public function setNumero(string $numero): void {
		$this->numero = trim($numero);
	}

	public function getComplemento(): string {
		return $this->complemento;
	}

	public function setComplemento(string $complemento): void {
		$this->complemento = trim($complemento);
	}

	public function getMunicipio(): string {
		return $this->municipio;
	}

	public function setMunicipio(string $municipio): void {
		$this->municipio = trim($municipio);
	}

	public function getUf(): string {
		return $this->uf;
	}

	public function setUf(string $uf): void {
		$this->uf = trim($uf);
	}

	public function getCep(): string {
		return $this->cep;
	}

	public function setCep(string $cep): void {
		$this->cep = trim($cep);
	}

	public function getBairro(): string {
		return $this->bairro;
	}

	public function setBairro(string $bairro): void {
		$this->bairro = trim($bairro);
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->nome) {
			$vars['nome'] = $this->nome;
		}
		if (null != $this->endereco) {
			$vars['endereco'] = $this->endereco;
		}
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}
		if (null != $this->complemento) {
			$vars['complemento'] = $this->complemento;
		}
		if (null != $this->municipio) {
			$vars['municipio'] = $this->municipio;
		}
		if (null != $this->uf) {
			$vars['uf'] = $this->uf;
		}
		if (null != $this->cep) {
			$vars['cep'] = $this->cep;
		}
		if (null != $this->bairro) {
			$vars['bairro'] = $this->bairro;
		}

		return $vars;
	}
}