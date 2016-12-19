<?php

namespace OCA\NJSXC;

/**
 * Interface ILock
 *
 * @package OCA\NJSXC
 */
interface ILock {

	/**
	 * @return void
	 */
	public function setLock();

	/**
	 * @return bool
	 */
	public function stillLocked();

}