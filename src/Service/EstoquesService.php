<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class EstoquesService extends RootService {
	use Service;
	
	protected $uri = 'estoques';
	
	protected $queryParam = 'idsProdutos';
	
	public function saldos(array $produtos): array {
		$response = $this->request('GET', rtrim($this->uri, '/') . '/saldos', [
			'query' => [
				'idsProdutos' => $produtos
			]
		])->getResponse();
		
		return $response->estoques ?? [];
	}
	
}
