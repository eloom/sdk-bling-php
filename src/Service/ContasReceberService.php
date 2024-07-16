<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class ContasReceberService extends RootService {
	use Service;
	
	protected $uri = 'contas/receber';
	
	protected $queryParam = 'idContaReceber';
	
}
