<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Client\RestClientApi;

abstract class BaseService {
	/**
	 * @var RestClientApi
	 */
	protected $apiClient;
	
	protected $uri;
	
	public function __construct(RestClientApi $client) {
		$this->apiClient = $client;
	}
	
	protected function request(string $method, string $uri, array $options = []) {
		return $this->apiClient->request($method, $uri, $options);
	}
}
