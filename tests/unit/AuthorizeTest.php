<?php

namespace Tests\Unit;

use Codeception\Test\Unit;
use Eloom\SdkBling\Bling;

class AuthorizeTest extends Unit {
	
	public function testValidation() {
		$bling = new Bling('df54c4429b4bc485cb4b3911191c8833b8ccd171', '9f307b59a90efef14b63c1e3cc618337e5146e6b7c72c006e4dd7581a1f0');
		$url = $bling->requestAuthorization();
		
		echo $url;
	}
}
