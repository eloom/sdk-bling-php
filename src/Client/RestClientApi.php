<?php

namespace Eloom\SdkBling\Client;

use Eloom\SdkBling\Exceptions\RestApiException;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\ResponseInterface;

class RestClientApi extends Client {

	public function __construct(array $config) {
		$stack = HandlerStack::create();

		$stack->push(Middleware::mapResponse(function (ResponseInterface $response) {
			return new Response(
				$response->getStatusCode(),
				$response->getHeaders(),
				$response->getBody(),
				$response->getProtocolVersion(),
				$response->getReasonPhrase());
		}));
		$config['handler'] = $stack;

		parent::__construct($config);
	}

	public function request($method, $uri = '', array $options = []) {
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