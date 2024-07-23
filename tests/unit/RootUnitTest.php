<?php

namespace Tests\unit;

use Codeception\Test\Unit;
use Eloom\SdkBling\Bling;

class RootUnitTest extends Unit {

	/**
	 * @var Bling
	 */
	protected $client;

	public function __construct(?string $name = null, array $data = [], $dataName = '') {
		$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
		$dotenv->load();

		$this->client = Bling::of($_ENV['CLIENT_ID'], $_ENV['SECRET_KEY'], null);

		parent::__construct($name, $data, $dataName);
	}
}