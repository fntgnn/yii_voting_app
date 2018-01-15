Thanks for voting!

<ul class="list-group">
  <?php foreach($poll->options as $opt): ?>
    <li class="list-group-item"> <?php echo $opt->text . ' ---- ' . $opt->votes; ?> </li>
  <?php endforeach; ?>
</ul>

<?php
  echo CHtml::link('Back home',array('vote/index'), array('class', 'btn btn-primary')); ?>

<h2>Risultati:</h2>
<?php
      $this->widget(
                'chartjs.widgets.ChPie',
                array(
                    'width' => 600,
                    'height' => 300,
                    'htmlOptions' => array(),
                    'drawLabels' => true,
                    'datasets' => $poll->getData(),
                    'options' => array(),
                )
            );
    ?>
