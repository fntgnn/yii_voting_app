<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<!-- <h2><?php echo $data->name ?></h2> -->
<ul class="list-group">
<?php foreach($data->options as $option): ?>
  <li class="list-group-item" id="vote"><?php echo $option->text; ?>
  <?php
  // in POST...
    $url = array('option/vote');
    echo CHtml::link(
      'Vota',
      $url,
      array(
        'submit' => $url,
        'params' => array(
          'id'=>$option->id,
          'poll'=>$data->id,
        ),
      )
    ); ?></li>

<?php endforeach; ?>
</ul>
<button type="button" class="btn btn-primary" name="button" id="try">Clicca</button>
<?php Yii::app()->clientScript->registerScript('try', "
$('#vote').click(function(){
    $.ajax({
      type: 'POST',
      url: ''
    })
});");

?>
