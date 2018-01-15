<ul class="list-group">
	<?php
		$this->widget('zii.widgets.CListView', array(
	    'dataProvider'=>$dataProvider,
	    'itemView'=>'_selectPoll',
	));
?>
</ul>
