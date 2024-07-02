<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class ProdutosService extends BaseService {
	use Service;
	
	protected $uri = 'produtos';
	
	protected $queryParam = 'idsProdutos';
	
	public function updateSituation(int $id, string $situacao): void {
		$this->request('PATCH', $this->uri . '/' . $id . '/situacoes', [
			'json' => [
				'situacao' => $situacao
			]
		]);
	}
}
