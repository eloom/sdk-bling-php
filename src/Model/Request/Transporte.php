<?php

namespace Eloom\SdkBling\Model\Request;

class Transporte implements \JsonSerializable {

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
	 * @var array
	 */
	private $volumes = [];
	
	/**
	 * @var Etiqueta
	 */
	private $etiqueta;
	
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
		return $this->veiculo;
	}
	
	public function setVeiculo(Veiculo $veiculo): void {
		$this->veiculo = $veiculo;
	}
	
	public function getTransportador(): Transportador {
		return $this->transportador;
	}
	
	public function setTransportador(Transportador $transportador): void {
		$this->transportador = $transportador;
	}
	
	public function getVolume(): Volume {
		return $this->volume;
	}
	
	public function setVolume(Volume $volume): void {
		$this->volume = $volume;
	}
	
	public function getVolumes(): array {
		return $this->volumes;
	}
	
	public function setVolumes(array $volumes): void {
		$this->volumes = $volumes;
	}
	
	public function getEtiqueta(): Etiqueta {
		return $this->etiqueta;
	}
	
	public function setEtiqueta(Etiqueta $etiqueta): void {
		$this->etiqueta = $etiqueta;
	}
	
	public function jsonSerialize() {
		$vars = [];
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
		
		return $vars;
	}
}