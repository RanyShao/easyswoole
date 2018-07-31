<?php
namespace App\HttpController;

use EasySwoole\Core\Http\AbstractInterface\Controller;

class ApiController extends Controller
{
	public index()
	{
		$this->response()->write('This is the default controller method');
	}

	public actionNotFound($action)
	{
		$this->response()->write('No corresponding method exists in the controller');
	}

	public onRequest($action)
	{
		$this->response()->write('By default you are the status of a successful login</br>');
		return true;
	}

	public afterAction($actionName)
	{
		$this->response()->write('I have returned the result by default.');
		return true;
	}

	public onException(\Throwable $throwable,$actionName)
	{
		$this->response()->write("Oh, it's wrong.");
	}


}
