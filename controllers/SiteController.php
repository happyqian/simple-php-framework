<?php
namespace app\controllers;
class SiteController {
	public function actionTest()
    {
        echo 'success!';
    }

    public function actionIndex(){
    	echo "action index";
    }

    public function actionView()
    {
        $body = 'Test body information   ';
        require '../views/site/view.php';
    }
}