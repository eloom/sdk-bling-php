<?php

namespace Eloom\SdkBling\Model\Request;

use DateTime;

class DocumentoReferenciado implements \JsonSerializable
{

	/**
	 * @var
	 */
	private $modelo;

	/**
	 * @var DateTime
	 */
	private $data;

	/**
	 * @var string
	 */
	private $numero;

	/**
	 * @var string
	 */
	private $serie;

	/**
	 * @var string
	 */
	private $contadorOrdemOperacao;

	/**
	 * @var string
	 */
	private $chaveAcesso;

	public static function of(): DocumentoReferenciado {
		return new DocumentoReferenciado();
	}

	/**
	 * @return mixed
	 */
	public function getModelo() {
		return $this->modelo;
	}

	/**
	 * @param mixed $modelo
	 */
	public function setModelo($modelo): void {
		$this->modelo = $modelo;
	}

	public function getData(): DateTime {
		return $this->data;
	}

	public function setData(DateTime $data): void {
		$this->data = $data;
	}

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

	public function getContadorOrdemOperacao(): string {
		return $this->contadorOrdemOperacao;
	}

	public function setContadorOrdemOperacao(string $contadorOrdemOperacao): void {
		$this->contadorOrdemOperacao = $contadorOrdemOperacao;
	}

	public function getChaveAcesso(): string {
		return $this->chaveAcesso;
	}

	public function setChaveAcesso(string $chaveAcesso): void {
		$this->chaveAcesso = $chaveAcesso;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->modelo) {
			$vars['modelo'] = $this->modelo;
		}
		if (null != $this->data) {
			$vars['data'] = $this->data->format('Y-m-d');
		}
		if (null != $this->numero) {
			$vars['numero'] = $this->numero;
		}
		if (null != $this->serie) {
			$vars['serie'] = $this->serie;
		}
		if (null != $this->contadorOrdemOperacao) {
			$vars['contadorOrdemOperacao'] = $this->contadorOrdemOperacao;
		}
		if (null != $this->chaveAcesso) {
			$vars['chaveAcesso'] = $this->chaveAcesso;
		}

		return $vars;
	}
}