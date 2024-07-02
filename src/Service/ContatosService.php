<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class ContatosService extends BaseService {
	use Service;
	
	protected $uri = 'contatos';
	
	protected $queryParam = 'idsContatos';
	
}
