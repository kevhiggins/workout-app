<?php
/* @var $this WorkoutController */
/* @var $model Workout */

$this->breadcrumbs=array(
	'Workouts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Workout', 'url'=>array('index')),
	array('label'=>'Create Workout', 'url'=>array('create')),
	array('label'=>'Update Workout', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Workout', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Workout', 'url'=>array('admin')),
);
?>

<h1>View Workout #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'exercise.name:text:Exercise',
		'created_on',
	),
)); ?>

<div id="workout-timer" class="section">0</div>

<div class="section">
	<h2 class="section">Sets</h2>
	<?php echo CHtml::link('Create', array('set/create', 'workout_id'=>$model->id)); ?>
	<div style="clear:both;"></div>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$setDataProvider,
	'itemView'=>'/set/_view',
)); ?>


<script type="text/javascript">
$(function() {
	$('#workout-timer').countdown({since: 0,
	    format: 'S'});
});
</script>