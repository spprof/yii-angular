<?php

class AngularController extends Controller
{
	public function actionIndex()
	{
		Yii::app()->clientScript->registerScriptFile( '/web/vendor/angular/angular.js');
		Yii::app()->clientScript->registerScriptFile( '/web/modules/crud/script.js');
		$this->render('index');
	}
	
	public function actionList() {
		$this->layout = false;
		$this->render('list');
	}
	
	public function actionOne() {
		$this->layout = false;
		$this->render('one');
	}
}