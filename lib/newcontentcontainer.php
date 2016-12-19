<?php

namespace OCA\NJSXC;

use OCA\NJSXC\Db\Stanza;

/**
 * Class NewContentContainer
 * Helper class to store new stanzas which will be returned in the current request.
 * This way a random class can generate stanza's which are send to the same user
 * without adding extra features/code to the `HTTPBindController` class.
 * @package OCA\NJSXC
 */
class NewContentContainer {

	/**
	 * @var Stanza[]
	 */
	private static $stanzas;

	public function addStanza(Stanza $stanza) {
		self::$stanzas[] = $stanza;
	}

	public function getStanzas() {
		$tmp = self::$stanzas;
		self::$stanzas = [];
		return $tmp;
	}

	public function getCount() {
		return count(self::$stanzas);
	}
	
}