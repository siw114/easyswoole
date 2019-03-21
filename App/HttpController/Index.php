<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/21
 * Time: 17:03
 */
namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{

    function index(){
        // TODO: Implement index() method.
        $this->response()->write('hello wrold22');
    }
    function temp(){
        $this->response()->write('hello222222');
    }
}