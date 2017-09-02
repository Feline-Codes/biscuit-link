<?php

use Cajogos\Biscuit\Template as Template;
use Cajogos\Biscuit\Controller as Controller;

class FelineController extends Controller
{
	public static function display()
	{
		$tpl = Template::create('pages/Pickle-Rick.tpl');
		$tpl->display();

	}
}