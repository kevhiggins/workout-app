<?php
class DActiveRecord extends CActiveRecord
{
	public function behaviors()
	{
		return array(
			'CTimestampBehavior'=>array(
				'class'=>'zii.behaviors.CTimestampBehavior',
				'createAttribute'=>'created_on',
			),
		);
	}
}