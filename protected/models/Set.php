<?php

/**
 * This is the model class for table "set".
 *
 * The followings are the available columns in table 'set':
 * @property integer $id
 * @property integer $workout_id
 * @property integer $weight
 * @property integer $repetitions
 * @property string $created_on
 *
 * The followings are the available model relations:
 * @property Workout $workout
 */
class Set extends DActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Set the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'set';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('workout_id, weight, repetitions', 'required'),
			array('workout_id, weight, repetitions', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, workout_id, weight, repetitions, created_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'workout' => array(self::BELONGS_TO, 'Workout', 'workout_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'workout_id' => 'Workout',
			'weight' => 'Weight',
			'repetitions' => 'Repetitions',
			'created_on' => 'Created On',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('workout_id',$this->workout_id);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('repetitions',$this->repetitions);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}