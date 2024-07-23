<?php

namespace Eloom\SdkBling\Service;

use Eloom\SdkBling\Service\Traits\Service;

class NaturezaOperacaoService extends RootService {

	use Service;

	protected $uri = 'Api/v3/naturezas-operacoes';
}
