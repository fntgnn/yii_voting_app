<?php
/* @var $this PollController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Polls',
);

$this->menu=array(
	array('label'=>'Create Poll', 'url'=>array('create')),
	array('label'=>'Manage Poll', 'url'=>array('admin')),
);
?>

<div class="jumbotron text-center">
<h2>My Polls</h2>

<?php echo CHtml::button('New Poll', array('class' => 'btn btn-success')); ?>
&nbsp;
<?php
	echo CHtml::ajaxLink(
		'Show Polls',
		Yii::app()->createUrl('profile/getPollsByUser'),
		array(
			'success' => "getData"
		),
		array('class' => 'btn btn-primary')
		);
 ?>

</div>

<div id="myPolls">
	<ul class="list-group" id="myPollsList"></ul>
</div>



 <script>
function getData(data) {
		data = JSON.parse(data);
		data.forEach((poll)=>{
			$('#myPollsList').append(`
				<li class="list-group-item">
					${poll.name}
					<span class="badge"><?php echo 'XX'; ?></span>
				</li>
			`);
		})
		// d
}
 </script>
