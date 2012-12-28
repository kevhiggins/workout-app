<?php
/* @var $this WorkoutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workouts',
);

$this->menu=array(
	array('label'=>'Create Workout', 'url'=>array('create')),
	array('label'=>'Manage Workout', 'url'=>array('admin')),
);
?>

<h1>Workouts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
