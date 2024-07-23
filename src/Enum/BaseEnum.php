<?php

namespace Eloom\SdkBling\Enum;

abstract class BaseEnum {
	
	/**
	 * @var null
	 */
	private static $constCacheArray = null;
	
	/**
	 * @return array
	 */
	protected static function getConstants() {
		if (self::$constCacheArray == null) {
			self::$constCacheArray = [];
		}
		$calledClass = get_called_class();
		if (!array_key_exists($calledClass, self::$constCacheArray)) {
			$reflect = new \ReflectionClass($calledClass);
			self::$constCacheArray[$calledClass] = $reflect->getConstants();
		}
		return self::$constCacheArray[$calledClass];
	}
	
	/**
	 * @param $name
	 * @param bool $strict
	 * @return bool
	 */
	public static function isValidName($name, $strict = false) {
		$constants = self::getConstants();
		
		if ($strict) {
			return array_key_exists($name, $constants);
		}
		
		$keys = array_map('strtolower', array_keys($constants));
		return in_array(strtolower($name), $keys);
	}
	
	/**
	 * @param $value
	 * @param bool $strict
	 * @return bool
	 */
	public static function isValidValue($value, $strict = true) {
		$values = array_values(self::getConstants());
		return in_array($value, $values, $strict);
	}
	
	/**
	 * @return array
	 */
	public static function getList() {
		$reflection = new \ReflectionClass(get_called_class());
		return $reflection->getConstants();
	}
	
	/**
	 * @param $key
	 * @return string
	 */
	public static function getType($key) {
		$declared = self::getList();
		if (array_search($key, $declared)) {
			return array_search($key, $declared);
		} else {
			return false;
		}
	}
	
	/**
	 * @param $value
	 * @return bool
	 */
	public static function getValue($value) {
		$values = array_values(parent::getConstants());
		return in_array($value, $values, true);
	}
}
