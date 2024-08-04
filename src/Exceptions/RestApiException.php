<?php

namespace Eloom\SdkBling\Exceptions;

use Eloom\SdkBling\Client\Response;
use Exception;

class RestApiException extends Exception {

	/**
	 * The server response.
	 *
	 * @var Response
	 */
	protected $response;

	protected $fields = [];

	public function __construct($message = "", Response $response = null, int $code = 0) {
		$this->response = $response;
		$message = $this->prepareMessage($message);
		$this->prepareFields();
		$message = $message . (count($this->fields) > 1 ? implode(' | ', $this->fields) : '');

		parent::__construct($message, $response ? $response->getStatusCode() : $code);
	}

	protected function prepareMessage($message): string {
		$content = $this->response ? $this->response->getResponse() : null;
		if ($content && property_exists($content, 'error') && $content->error) {
			return $content->error->description ?? $content->error->message ?? $message;
		}

		return $message;
	}

	protected function prepareFields() {
		$content = $this->response ? $this->response->getResponse() : null;
		if ($content && property_exists($content, 'error') && $content->error) {
			$fields = $content->error->fields ?? [];
			foreach ($fields as $field) {
				if (is_array($field)) {
					$field = current($field);
				}
				$this->fields[$field->element] = [
					'message' => $field->msg,
					'collection' => $field->collection ?? null,
				];
			}
		}
	}

	/**
	 * Get the HTTP response header
	 *
	 */
	public function getResponse(): Response {
		return $this->response;
	}

	public function getFields(): array {
		return $this->fields;
	}

	public function getFieldsErrorsMessage(): ?string {
		$fieldsResult = ' ';

		foreach ($this->fields as $field => $data) {
			$fieldsResult .= $field . ': ' . $data['message'] . ';' . PHP_EOL;
		}

		return $fieldsResult;
	}

	public function getErrorMessageCode(): string {
		return $this->getErrorMessageByCode($this->getCode());
	}

	/**
	 * Retorna o response ja tratado
	 *
	 * @param $code
	 * @return string
	 */
	public function getErrorMessageByCode($code): string {
		switch ($code) {
			case 400:
			{
				return 'Requisição Mal Formada';
			}
			case 401:
			{
				return 'Usuário não autorizado';
			}
			case 403:
			{
				return 'Acesso não autorizado';
			}
			case 404:
			{
				return 'Recurso não Encontrado';
			}
			case 405:
			{
				return 'Operação não suportada';
			}
			case 408:
			{
				return 'Tempo esgotado para a requisição';
			}
			case 409:
			{
				return 'Recurso em conflito';
			}
			case 413:
			{
				return 'Requisição excede o tamanho máximo permitido';
			}
			case 415:
			{
				return 'Content-type inválido';
			}
			case 422:
			{
				return 'Não foi possível processar as instruções contidas na requisição';
			}
			case 429:
			{
				return 'Requisição excede a quantidade máxima de chamadas permitidas à API.';
			}
			case 500:
			{
				return 'Erro na API';
			}
		}
	}
}
