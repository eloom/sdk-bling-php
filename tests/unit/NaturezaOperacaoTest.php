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
		$token = '6b1237405d28a082c544c8e5f99b6344481a62dc';
		$this->client = Bling::of(null, null, $token);

		parent::__construct($name, $data, $dataName);
	}

	public function testAllNaturezaOperacao() {
		$nt = $this->client->naturezaOperacoes();
		$filtros = [
			'situacao' => 1,
			'descricao' => 'Venda de mercadorias'
		];

		$data = $nt->findAll(0, 100, $filtros);
		$this->assertTrue($data->count() == 1);
	}
}