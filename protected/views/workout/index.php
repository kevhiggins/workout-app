<?php
/* @var $this WorkoutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workouts',
);
?>

<h1>Workouts</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workout-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php foreach($exerciseList as $id=>$exercise): ?>
<?php $workout->exercise_id = $id; ?>
<?php echo DHtml::activeButton($exercise, $workout, 'exercise_id'); ?>
<?php endforeach;?>

<?php $this->endWidget(); ?>