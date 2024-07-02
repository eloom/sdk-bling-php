<?php

namespace Eloom\Bling;

use Eloom\SdkBling\Client\Response;
use Eloom\SdkBling\Client\RestClientApi;
use Eloom\SdkBling\Endpoints\Endpoint;

class Bling {
	
	/**
	 * @var RestClientApi
	 */
	protected $apiClient;
	
	protected $clientId;
	
	protected $secretKey;
	
	protected $accessToken;
	
	protected $urlCallback;
	
	protected $state;
	
	protected $urlApi = 'https://www.bling.com.br/Api/v3';
	
	public function __construct(string $clientId, string $secretKey) {
		$this->clientId = $clientId;
		$this->secretKey = $secretKey;
	}
	
	public function requestAuthorization($state = null, $permission = null, $redirect = true) {
		$this->state = $state ?: md5(time());
		
		$query = "&state=" . $this->state;
		
		if ($this->urlCallback) {
			$query .= "&redirect_uri=" . $this->urlCallback;
		}
		
		$urlRedirect = $this->getBaseUri("oauth/authorize?client_id={$this->clientId}&response_type=code{$query}&scope={$permission}");
		
		if ($redirect == true) {
			header("Location: " . $urlRedirect);
		} else {
			return $urlRedirect;
		}
	}
	
	/**
	 * Método responsável por solicitar um token de acesso na plataforma do bling.
	 * Esse método é utilizado quando nunca foi solicitado um token antes.
	 *
	 * @param $code // Codigo retornado pela plaforma quando solicita a permissão
	 * @return \stdClass
	 */
	public function requestToken(string $code): \stdClass {
		return $this->requestoOrRefreshToken($code);
	}
	
	/**
	 * Método responsável por solicitar a renovação de um token de acesso já existente
	 * na plataforma do Bling.
	 *
	 * @param $refreshToken // Token de atualização do token de solicitação
	 * @return array
	 */
	public function refreshToken($refreshToken) {
		return $this->requestoOrRefreshToken(null, $refreshToken);
	}
	
	/**
	 * Método interno responsável por realizar a configuração e a requisição
	 * tanto para gerar um token novo como para renovar um token já existente.
	 *
	 * @param null $code
	 * @param null $refreshToken
	 * @return \stdClass
	 */
	protected function requestoOrRefreshToken($code = null, $refreshToken = null): \stdClass {
		$payload = [];
		
		if ($refreshToken) {
			$payload["grant_type"] = "refresh_token";
			$payload["refresh_token"] = $refreshToken;
		} else {
			$payload["grant_type"] = "authorization_code";
			$payload["code"] = $code;
		}
		
		$response = $this->getApiClient()->request("POST", "oauth/token", ['json' => $payload])->getResponse();
		
		return $response;
	}
	
	public function products(): Service\ProdutosService {
		return new Service\ProdutosService($this->getApiClient());
	}
	
	public function categories(): Service\CategoriasProdutosService {
		return new Service\CategoriasProdutosService($this->getApiClient());
	}
	
	public function orders(): Service\PedidosVendasService {
		return new Service\PedidosVendasService($this->getApiClient());
	}
	
	public function nfce(): Service\NfceService {
		return new Service\NfceService($this->getApiClient());
	}
	
	public function stock(): Service\EstoquesService {
		return new Service\EstoquesService($this->getApiClient());
	}
	
	public function contacts(): Service\ContatosService {
		return new Service\ContatosService($this->getApiClient());
	}
	
	public function contactTypes(): Service\ContatosTiposService {
		return new Service\ContatosTiposService($this->getApiClient());
	}
	
	public function deposits(): Service\DepositosService {
		return new Service\DepositosService($this->getApiClient());
	}
	
	public function situations(): Service\SituacoesService {
		return new Service\SituacoesService($this->getApiClient());
	}
	
	public function accountsReceive(): Service\ContasReceberService {
		return new Service\ContasReceberService($this->getApiClient());
	}
	
	public function modulesSituations(): Service\SituacoesModulos {
		return new Service\SituacoesModulos($this->getApiClient());
	}
	
	public function paymentMethods(): Service\FormasPagamentosService {
		return new Service\FormasPagamentosService($this->getApiClient());
	}
	
	protected function getApiClient() {
		$this->apiClient = new RestClientApi([
			'client_id' => $this->clientId,
			'secret_key' => $this->secretKey,
			'access_token' => $this->accessToken,
			'base_uri' => $this->getBaseUri(),
		]);
		
		return $this->apiClient;
	}
	
	public function getBaseUri($path = null) {
		if ($path === null) {
			return rtrim($this->urlApi, '/') . '/';
		}
		
		return rtrim($this->urlApi, '/') . '/' . ltrim($path, '/') . '/';
	}
	
	/**
	 * @param RestClientApi $apiClient
	 */
	public function setApiClient(RestClientApi $apiClient): void {
		$this->apiClient = $apiClient;
	}
	
	public function request(string $method, string $uri, array $options = []): Response {
		return $this->getApiClient()->request($method, $uri, $options);
	}
	
	public function setClientId($clientId) {
		$this->clientId = $clientId;
		return $this;
	}
	
	public function setSecretKey($secretKey) {
		$this->secretKey = $secretKey;
		return $this;
	}
	
	public function setCallbackURL($url) {
		$this->urlCallback = $url;
		return $this;
	}
	
	public function setAccessToken($token) {
		$this->accessToken = $token;
		return $this;
	}
}