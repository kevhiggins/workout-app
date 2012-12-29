<?php
class DHtml extends CHtml
{
	public static function activeButton($label, $model, $attribute, $htmlOptions=array())
	{
		self::resolveNameID($model,$attribute,$htmlOptions);
		$htmlOptions['value'] = $model->$attribute;
		$htmlOptions['type'] = 'submit';
		return self::htmlButton($label, $htmlOptions);
	}
}