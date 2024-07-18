<?php

namespace Eloom\SdkBling\Model\Request;

use Eloom\SdkBling\Enum\TipoPessoa;

class Contato implements \JsonSerializable {

	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $nome;

	/**
	 * @var TipoPessoa
	 */
	private $tipoPessoa;

	/**
	 * @var string
	 *
	 */
	private $numeroDocumento;

	/**
	 * @var string
	 *
	 */
	private $ie;

	/**
	 * @var string
	 *
	 */
	private $rg;

	/**
	 * @var int
	 */
	private $contribuinte;

	/**
	 * @var string
	 *
	 */
	private $telefone;

	/**
	 * @var string
	 *
	 */
	private $email;

	/**
	 * @var Endereco
	 */
	private $endereco;

	public static function of(): Contato {
		return new Contato();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): void {
		$this->id = $id;
	}

	public function getNome(): string {
		return $this->nome;
	}

	public function setNome(string $nome): void {
		$this->nome = $nome;
	}

	public function getTipoPessoa(): TipoPessoa {
		return $this->tipoPessoa;
	}

	public function setTipoPessoa(TipoPessoa $tipoPessoa): void {
		$this->tipoPessoa = $tipoPessoa;
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

	public function getRg(): string {
		return $this->rg;
	}

	public function setRg(string $rg): void {
		$this->rg = $rg;
	}

	public function getContribuinte(): int {
		return $this->contribuinte;
	}

	public function setContribuinte(int $contribuinte): void {
		$this->contribuinte = $contribuinte;
	}

	public function getTelefone(): string {
		return $this->telefone;
	}

	public function setTelefone(string $telefone): void {
		$this->telefone = $telefone;
	}

	public function getEmail(): string {
		return $this->email;
	}

	public function setEmail(string $email): void {
		$this->email = $email;
	}

	public function getEndereco(): Endereco {
		if (null == $this->endereco) {
			$this->endereco = Endereco::of();
		}

		return $this->endereco;
	}

	public function setEndereco(Endereco $endereco): void {
		$this->endereco = $endereco;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->id) {
			$vars['id'] = intval($this->id);
		}
		if (null != $this->nome) {
			$vars['nome'] = $this->nome;
		}
		if (null != $this->tipoPessoa) {
			$vars['tipoPessoa'] = $this->tipoPessoa;
		}
		if (null != $this->numeroDocumento) {
			$vars['numeroDocumento'] = $this->numeroDocumento;
		}
		if (null != $this->ie) {
			$vars['ie'] = $this->ie;
		}
		if (null != $this->rg) {
			$vars['rg'] = $this->rg;
		}
		if (null != $this->contribuinte) {
			$vars['contribuinte'] = intval($this->contribuinte);
		}
		if (null != $this->telefone) {
			$vars['telefone'] = $this->telefone;
		}
		if (null != $this->email) {
			$vars['email'] = $this->email;
		}
		if (null != $this->endereco) {
			$vars['endereco'] = $this->endereco->jsonSerialize();
		}

		return $vars;
	}
}