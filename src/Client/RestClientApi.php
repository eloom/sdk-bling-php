<?php

namespace Eloom\SdkBling\Client;

use Eloom\SdkBling\Exceptions\RestApiException;
use GuzzleHttp\Client;

class RestClientApi extends Client {

	public function __construct(array $config) {
		parent::__construct($config);
	}

	public function request(string $method, $uri = '', array $options = []) {
		try {
			return parent::request($method, $uri, $options);

		} catch (\Exception $e) {
			throw new RestApiException(
				$e->getMessage(),
				$e->getResponse(),
				$e->getCode()
			);
		}
	}
}