<?php
namespace Home\Controller;
use Think\Controller;
class ResourceController extends Controller {
    public function index(){
      	$this->display('index');
    }

    public function details(){
    	$this->display('job');
    }
}