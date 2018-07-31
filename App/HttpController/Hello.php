<?php

namespace App\HttpController;

//use EasySwoole\Core\Http\AbstractInterface\Controller;
//use App\HttpController\ApiController; 

class Hello extends ApiController
{
        function index()
        {
                $this->response()->write('This is my easyswoole hello world text.');
        }

        function hello()
        {
                $this->response()->write('Hello World!');
        }
}

