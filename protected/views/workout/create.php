<?php
/* @var $this WorkoutController */
/* @var $model Workout */

$this->breadcrumbs=array(
	'Workouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Workout', 'url'=>array('index')),
	array('label'=>'Manage Workout', 'url'=>array('admin')),
);
?>

<h1>Create Workout</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'exerciseList'=>$exerciseList)); ?>