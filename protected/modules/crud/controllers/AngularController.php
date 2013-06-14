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
	
	public function actionGetlist() {
		$this->layout = false;
		$model = new Pages();
		$res = $model->findAll();
		echo CJSON::encode($res);
	}
	
	public function actionGetone($id) {
		$this->layout = false;
		$model = new Pages();
		$res = $model->findByPk($id);
		echo CJSON::encode($res);
	}
	
	public function actionUpdate() {
		$this->layout = false;
		$this->render('update');
	}
	
}