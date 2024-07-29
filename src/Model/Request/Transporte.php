<?php

namespace Eloom\SdkBling\Model\Request;

use Eloom\SdkBling\Util\Collection;

class Transporte implements \JsonSerializable {

	private $tipoFrete;

	private $fretePorConta;

	private $frete;

	/**
	 * @var Veiculo
	 */
	private $veiculo;

	/**
	 * @var Transportador
	 */
	private $transportador;

	/**
	 * @var Volume
	 */
	private $volume;

	/**
	 * @var Collection
	 */
	private $volumes;

	/**
	 * @var Etiqueta
	 */
	private $etiqueta;

	public static function of(): Transporte {
		return new Transporte();
	}

	public static function build(): Transporte {
		$instance = Transporte::of();
		$instance->setVolumes(new Collection([]));

		return $instance;
	}

	/**
	 * @return mixed
	 */
	public function getFretePorConta() {
		return $this->fretePorConta;
	}

	/**
	 * @param mixed $fretePorConta
	 */
	public function setFretePorConta($fretePorConta): void {
		$this->fretePorConta = $fretePorConta;
	}

	/**
	 * @return mixed
	 */
	public function getFrete() {
		return $this->frete;
	}

	/**
	 * @param mixed $frete
	 */
	public function setFrete($frete): void {
		$this->frete = $frete;
	}

	public function getVeiculo(): Veiculo {
		if(null == $this->veiculo) {
			$this->veiculo = Veiculo::of();
		}

		return $this->veiculo;
	}

	public function setVeiculo(Veiculo $veiculo): void {
		$this->veiculo = $veiculo;
	}

	public function getTransportador(): Transportador {
		if(null == $this->transportador) {
			$this->transportador = Transportador::of();
		}

		return $this->transportador;
	}

	public function setTransportador(Transportador $transportador): void {
		$this->transportador = $transportador;
	}

	public function getVolume(): Volume {
		if(null == $this->volume) {
			$this->volume = Volume::build();
		}

		return $this->volume;
	}

	public function setVolume(Volume $volume): void {
		$this->volume = $volume;
	}

	public function getVolumes(): Collection {
		if (null == $this->volumes) {
			$this->volumes = new Collection([]);
		}

		return $this->volumes;
	}

	public function setVolumes(Collection $volumes): void {
		$this->volumes = $volumes;
	}

	public function getEtiqueta(): Etiqueta {
		if(null == $this->etiqueta) {
			$this->etiqueta = Etiqueta::of();
		}

		return $this->etiqueta;
	}

	public function setEtiqueta(Etiqueta $etiqueta): void {
		$this->etiqueta = $etiqueta;
	}

	/**
	 * @return mixed
	 */
	public function getTipoFrete() {
		return $this->tipoFrete;
	}

	/**
	 * @param mixed $tipoFrete
	 */
	public function setTipoFrete($tipoFrete): void {
		$this->tipoFrete = $tipoFrete;
	}

	public function jsonSerialize() {
		$vars = [];
		if (null != $this->tipoFrete) {
			$vars['tipoFrete'] = $this->tipoFrete;
		}
		if (null != $this->fretePorConta) {
			$vars['fretePorConta'] = $this->fretePorConta;
		}
		if (null != $this->frete) {
			$vars['frete'] = $this->frete;
		}
		if (null != $this->veiculo) {
			$vars['veiculo'] = $this->veiculo->jsonSerialize();
		}
		if (null != $this->transportador) {
			$vars['transportador'] = $this->transportador->jsonSerialize();
		}
		if (null != $this->etiqueta) {
			$vars['etiqueta'] = $this->etiqueta->jsonSerialize();
		}

		return $vars;
	}
}