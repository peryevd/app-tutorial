<?php

namespace OCA\test\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'test';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
