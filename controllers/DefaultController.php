<?php

class DefaultController extends Controller
{
	public static function display()
	{
		$tpl = Template::create('pages/cookie-jar.tpl');
		$tpl->assign('cookie_jar_ver', COOKIE_JAR_VERSION);
		$tpl->display();
	}

	public static function hello($name = null, $say = null)
	{
		if (is_null($name))
		{
			$name = 'World';
		}
		if (is_null($say))
		{
			$say = 'Hello';
		}
		$tpl = Template::create('pages/hello.tpl');

		$hello_element = HelloElement::get();
		$hello_element->setName($name);
		$hello_element->setSaying($say);
		$tpl->addElement('hello_element', $hello_element);
		
		$tpl->display();
	}
}