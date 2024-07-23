<?php

namespace Eloom\SdkBling;

use Eloom\SdkBling\Client\Response;
use Eloom\SdkBling\Client\RestClientApi;

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

	protected $urlApi = 'https://www.bling.com.br';

	public function __construct() {

	}

	public static function of(string $clientId = null, string $secretKey = null): Bling {
		$instance = new Bling();
		if (null != $clientId && null != $secretKey) {
			$instance->setClientId($clientId);
			$instance->setSecretKey($secretKey);

			$config = ['base_uri' => $instance->getUrlApi(),
				'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/json']
			];

			$config['headers']['Authorization'] = 'Basic ' . base64_encode($instance->getClientId() . ':' . $instance->getSecretKey());

			$apiClient = new RestClientApi($config);
			$instance->setApiClient($apiClient);
		}

		return $instance;
	}

	public function requestAuthorization($state = null, $permission = null, $redirect = false) {
		$this->state = $state ?: md5(time());
		$query = "&state=" . $this->state;
		$urlRedirect = $this->getBaseUri("Api/v3/oauth/authorize?client_id={$this->clientId}&response_type=code{$query}&scope={$permission}");

		if ($redirect == true) {
			header("Location: " . $urlRedirect);
		} else {
			return $urlRedirect;
		}
	}

	public function requestToken(string $code): \stdClass {
		$config = ['base_uri' => $this->getUrlApi(),
			'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/json']
		];

		$apiClient = new RestClientApi($config);

		return $apiClient->request("POST", "oauth/token", ['json' => [
			'grant_type' => 'authorization_code',
			'code' => $code]])->getResponse();
	}

	public function refreshToken($refreshToken): \stdClass {
		$config = ['base_uri' => $this->getUrlApi(),
			'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/json']
		];

		$apiClient = new RestClientApi($config);

		return $apiClient->request("POST", "oauth/token", ['json' => [
			'grant_type' => 'refresh_token',
			'refresh_token' => $refreshToken
		]])->getResponse();
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

	public function nfe(): Service\NfeService {
		return new Service\NfeService($this->getApiClient());
	}

	public function naturezaOperacoes(): Service\NaturezaOperacaoService {
		return new Service\NaturezaOperacaoService($this->getApiClient());
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

	public function setClientId($clientId): Bling {
		$this->clientId = $clientId;

		return $this;
	}

	public function setSecretKey($secretKey): Bling {
		$this->secretKey = $secretKey;

		return $this;
	}

	public function setCallbackURL($url): Bling {
		$this->urlCallback = $url;

		return $this;
	}

	public function setAccessToken($token): Bling {
		$this->accessToken = $token;

		return $this;
	}

	/**
	 * @param mixed $urlCallback
	 */
	public function setUrlCallback($urlCallback): Bling {
		$this->urlCallback = $urlCallback;

		return $this;
	}

	/**
	 * @param mixed $state
	 */
	public function setState($state): Bling {
		$this->state = $state;

		return $this;
	}

	public function setUrlApi(string $urlApi): Bling {
		$this->urlApi = $urlApi;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getClientId(): string {
		return $this->clientId;
	}

	/**
	 * @return string
	 */
	public function getSecretKey(): string {
		return $this->secretKey;
	}

	/**
	 * @return string
	 */
	public function getAccessToken(): ?string {
		return $this->accessToken;
	}

	/**
	 * @return string
	 */
	public function getUrlCallback(): string {
		return $this->urlCallback;
	}

	/**
	 * @return string
	 */
	public function getState(): string {
		return $this->state;
	}

	public function getUrlApi(): string {
		return $this->urlApi;
	}
}