<?php

namespace Eloom\SdkBling\Model\Request;

class NotasFiscaisTransporteVolume implements \JsonSerializable {

	/**
	 * @var string
	 */
	private $servico;

	/**
	 * @var string
	 */
	private $codigoRastreamento;

	public static function of(): NotasFiscaisTransporteVolume {
		return new NotasFiscaisTransporteVolume();
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
		if (null != $this->servico) {
			$vars['servico'] = $this->servico;
		}
		if (null != $this->codigoRastreamento) {
			$vars['codigoRastreamento'] = $this->codigoRastreamento;
		}

		return $vars;
	}
}