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
		$message = $message . $this->getFieldsErrorsMessage();

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
				$this->fields[] = [
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
		$message = '';

		if(count($this->fields) > 0) {
			$message = ' [';
			foreach ($this->fields as $key => $data) {
				$message .= $data['message'] . ';' . PHP_EOL;
			}
			$message .= ']';
		}

		return $message;
	}
}
