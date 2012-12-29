<?php
/* @var $this WorkoutController */
/* @var $model Workout */

$this->breadcrumbs=array(
	'Workouts'=>array('index'),
	'Create',
);
?>

<h1>Press Start to begin <?php echo $exerciseList[$model->exercise_id]; ?></h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workout-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php echo DHtml::submitButton('Start'); ?>
<?php $this->endWidget(); ?>