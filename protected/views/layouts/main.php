<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css">


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<nav class="navbar navbar-light">
			<a href="#" class="navbar-brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
			<ul class="nav navbar-nav pull-right">
				<?php if(Yii::app()->user->isGuest): ?>
					<li class="navbar-item"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/register');?>" class="nav-link">Sign up</a></li>
					<li class="navbar-item"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/login');?>" class="nav-link">Sign in</a></li> 
				<?php else: ?>
					<li class="navbar-item"><a href="<?php echo Yii::app()->createAbsoluteUrl('site/logout');?>" class="nav-link">Logout</a></li>
				<?php endif; ?>
			</ul>
		</nav>

	</div><!-- header -->

	<?php echo $content; ?>

</div><!-- page -->

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-3.2.1.min.js">
</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/js/bootstrap.min.js">
</script>
</body>
</html>
