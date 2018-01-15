<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
?>

<h2>Welcome <?php if(!Yii::app()->user->isGuest) echo Yii::app()->user->name; ?></h2>
