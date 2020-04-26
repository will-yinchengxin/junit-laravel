<?php
/**
 * Create By: Will Yin
 * Date: 2020/4/26
 * Time: 16:56
 **/
namespace  Willyin\JunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class  TestController extends Controller{
    public function index()
    {
        echo "this  is test controller";
  }
}