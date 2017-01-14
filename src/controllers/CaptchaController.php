<?php
namespace Jodan\Captcha;

use Illuminate\Routing\Controller;

class CaptchaController extends Controller
{

	public function getIndex()
	{
		return app('captcha')->create();
	}
}
