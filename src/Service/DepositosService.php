<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class DepositosService extends RootService {
	use Service;
	
	protected $uri = 'depositos';
	
	protected $queryParam = 'idsDepositos';
	
}
