<?php
/* @var $this SetController */
/* @var $model Set */

$this->breadcrumbs=array(
	'Sets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Set', 'url'=>array('index')),
	array('label'=>'Create Set', 'url'=>array('create')),
	array('label'=>'Update Set', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Set', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Set', 'url'=>array('admin')),
);
?>

<h1>View Set #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'workout_id',
		'weight',
		'repetitions',
		'created_on',
	),
)); ?>
