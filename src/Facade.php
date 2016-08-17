<?php
/**
 * Simple JSON settings for Laravel
 * 
 * @author   Kirill Calkin <hello@nonamez.name>
 * @license  Beerware
 */

namespace NoNameZ\Laravel\Settings;

class Facade extends \Illuminate\Support\Facades\Facade
{
	protected static function getFacadeAccessor()
	{
		return 'NoNameZ\Laravel\Settings\Settings';
	}
}
