<?php
Route::get(Config::get('captcha.route_name'), [
	'middleware' => Config::get('captcha.middleware'),
	'uses' => 'Jodan\Captcha\CaptchaController@getIndex'
]);
