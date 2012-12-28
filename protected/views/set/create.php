<?php
/* @var $this SetController */
/* @var $model Set */

$this->breadcrumbs=array(
	'Sets'=>array('index'),
	'Create',
);

?>

<h1>Create Set</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>