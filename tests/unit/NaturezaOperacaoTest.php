<?php

namespace Tests\unit;

use Codeception\Test\Unit;
use Eloom\SdkBling\Bling;

class NaturezaOperacaoTest extends Unit {

	/**
	 * @var Bling
	 */
	protected $client;

	public function __construct(?string $name = null, array $data = [], $dataName = '') {
		$token = '8e0b76134c9e7703dd28de1c450d4a96a8aa19f0';
		$this->client = Bling::of('174e50bafe53d6f1e9ae237b34f05bb75eb116f1', '407f3cf62137fd800f66c8f1b5ba3e9928f49fc34213013bca2847549816', null);
		$this->client->requestAuthorization();

		parent::__construct($name, $data, $dataName);
	}

	public function testAllNaturezaOperacao() {
		/*
		$nt = $this->client->naturezaOperacoes();
		$filtros = [
			'situacao' => 1,
			'descricao' => 'Venda de mercadorias'
		];

		$data = $nt->findAll(0, 100, $filtros);
		$this->assertTrue($data->count() == 1);
		*/
	}
}