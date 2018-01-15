<?php

class OptionController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionView($id)
	{

		$this->render('view');
	}


	public function actionVote(){
		// $this->render('vote', array('id'=>$id));
		if(isset($_POST['id'])){
			$id = $_POST['id'];
			$poll = Poll::model()->findByPk($_POST['poll']);
			$opt = Option::model()->findByPk($id);
			$opt->saveCounters(array('votes'=>1));
			$this->render('vote', array(
				'poll'=>$poll
			));
		}
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
