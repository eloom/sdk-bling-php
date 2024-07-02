<?php

namespace Eloom\SdkBling\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Eloom\SdkBling\Exceptions\RestApiException;
use Psr\Http\Message\ResponseInterface;

class RestClientApi extends Client {
	protected $clientId;
	
	protected $secretKey;
	
	protected $accessToken;
	
	public function __construct(array $config = []) {
		$stack = HandlerStack::create();
		
		$stack->push(Middleware::mapResponse(function (ResponseInterface $response) {
			return new Response(
				$response->getStatusCode(),
				$response->getHeaders(),
				$response->getBody(),
				$response->getProtocolVersion(),
				$response->getReasonPhrase());
		}));
		
		$this->clientId = $config['client_id'] ?? '';
		$this->secretKey = $config['secret_key'] ?? '';
		$this->accessToken = $config['access_token'] ?? '';
		
		$config['handler'] = $stack;
		
		$config['headers'] = [
			'Accept' => 'application/json',
			'Content-Type' => 'application/json',
		];
		
		if ($this->accessToken) {
			$config['headers']['Authorization'] = 'Bearer ' . $this->accessToken;
		} else {
			$config['headers']['Authorization'] = 'Basic ' . base64_encode($this->clientId . ':' . $this->secretKey);
		}
		
		parent::__construct($config);
	}
	
	public function request(string $method, $uri = '', array $options = []): ResponseInterface {
		try {
			return parent::request($method, $uri, $options);
			
		} catch (ClientException $e) {
			throw new RestApiException(
				$e->getMessage(),
				$e->getResponse(),
				$e->getCode()
			);
		}
	}
}
