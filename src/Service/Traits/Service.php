<?php

namespace Eloom\SdkBling\Service\Traits;

use Eloom\SdkBling\Util\Collection;

trait Service {
	public function findAll(int $start = 0, int $limit = 100, array $filters = []): Collection {
		$response = $this->request(
			'GET',
			$this->uri,
			[
				'query' => [
						'pagina' => $start,
						'limite' => $limit,
					] + $filters
			]
		)->getResponse();

		return new Collection($response->data ?? []);
	}
	
	public function find(int $id): ?\stdClass {
		$response = $this->request('GET', rtrim($this->uri, '/') . '/' . $id)->getResponse();
		
		return $response->data ?? null;
	}
	
	public function create(array $data) {
		$response = $this->request('POST', $this->uri, [
			'json' => $data
		])->getResponse();
		
		return $response->data ?? null;
	}
	
	public function update(int $id, array $data) {
		$response = $this->request('PUT', rtrim($this->uri, '/') . '/' . $id, [
			'json' => $data
		])->getResponse();
		
		return $response->data ?? null;
	}
	
	public function delete(int $id): void {
		$this->request('DELETE', rtrim($this->uri, '/') . '/' . $id);
	}
	
	public function deleteAll(array $ids): void {
		$this->request('DELETE', $this->uri, [
			'query' => [
				$this->queryParam => $ids
			]
		]);
	}
}
