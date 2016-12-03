<?php

namespace Addons\Weiba\Controller;

use Home\Controller\AddonsController;

class BaseController extends AddonsController {
	var $config;
	function _initialize() {
		parent::_initialize ();
		
	}
	public function index(){
	    $this->display();
	}
	/*  
	 * 马晓成
	 * cateid:分类id
	 * 提取幻灯片分类的id
	 * */
	public function getSlideshowCategory($marking){
	    $map ['marking'] = $marking;
	    $slideshowCategory = M ('WeisiteSlideshowCategory')->where($map)->find();
	    return $slideshowCategory['id'];
	}
}
