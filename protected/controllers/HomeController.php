<?php

class HomeController extends Controller
{
 
    public $layout='/layouts/home';
    public $cities = "";

    public function actionIndex()
    {
    	$this->pageTitle = 'Welcome to Handyman.com';
    	$this->cities = Cities::model()->findAll(array('order' => 'RAND()','limit'=>10));
    	$param['projects'] = Projecttypes::model()->findAll(array('order' => 'Name ASC'));
        $this->render('index', $param);
    }
}
