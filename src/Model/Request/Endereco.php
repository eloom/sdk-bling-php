<?php

namespace Eloom\SdkBling\Model\Request;

class Endereco implements \JsonSerializable {

	/**
	 * @var string
	 */
	private $endereco;

	/**
	 * @var string
	 */
	private $bairro;

	/**
	 * @var string
	 */
	private $municipio;

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
	private $cep;

	/**
	 * @var string
	 */
	private $uf;

	/**
	 * @var string
	 */
	private $pais;

	public static function of(): Endereco {
		return new Endereco();
	}

	public function getEndereco(): string {
		return $this->endereco;
	}

	public function setEndereco(string $endereco): void {
		$this->endereco = trim($endereco);
	}

	public function getBairro(): string {
		return $this->bairro;
	}

	public function setBairro(string $bairro): void {
		$this->bairro = trim($bairro);
	}

	public function getMunicipio(): string {
		return $this->municipio;
	}

	public function setMunicipio(string $municipio): void {
		$this->municipio = trim($municipio);
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

	public function getCep(): string {
		return $this->cep;
	}

	public function setCep(string $cep): void {
		$this->cep = trim($cep);
	}

	public function getUf(): string {
		return $this->uf;
	}

	public function setUf(string $uf): void {
		$this->uf = trim($uf);
	}

	public function getPais(): string {
		return $this->pais;
	}

	public function setPais(string $pais): void {
		$this->pais = trim($pais);
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->endereco) {
			$vars['endereco'] = $this->endereco;
		}
		if (null != $this->bairro) {
			$vars['bairro'] = $this->bairro;
		}
		if (null != $this->municipio) {
			$vars['municipio'] = $this->municipio;
		}
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}
		if (null != $this->complemento) {
			$vars['complemento'] = $this->complemento;
		}
		if (null != $this->cep) {
			$vars['cep'] = $this->cep;
		}
		if (null != $this->uf) {
			$vars['uf'] = $this->uf;
		}
		if (null != $this->pais) {
			$vars['pais'] = $this->pais;
		}

		return $vars;
	}
}