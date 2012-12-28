<?php
/* @var $this WorkoutController */
/* @var $model Workout */

$this->breadcrumbs=array(
	'Workouts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Workout', 'url'=>array('index')),
	array('label'=>'Create Workout', 'url'=>array('create')),
	array('label'=>'View Workout', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Workout', 'url'=>array('admin')),
);
?>

<h1>Update Workout <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'exerciseList'=>$exerciseList)); ?>