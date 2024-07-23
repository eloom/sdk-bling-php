<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Util\Collection;
use Eloom\SdkBling\Service\Traits\Service;

class SituacoesModulos extends RootService {
	use Service;
	
	protected $uri = 'situacoes/modulos';
	
	public function findByIdFromAction(int $id): Collection {
		$uri = rtrim($this->uri, '/') . '/' . $id . '/acoes';
		$response = $this->request('GET', $uri)->getResponse();
		
		return new Collection($response->data ?? []);
	}
	
}
