<?php

/**
 * This is the model class for table "{{sonamkn}}".
 *
 * The followings are the available columns in table '{{sonamkn}}':
 * @property integer $id
 * @property string $sonamkn
 *
 * The followings are the available model relations:
 * @property Hosocanhan[] $hosocanhans
 */
class Sonamkn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sonamkn the static model class
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
		return '{{sonamkn}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sonamkn', 'required'),
			array('sonamkn', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sonamkn', 'safe', 'on'=>'search'),
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
			'hosocanhans' => array(self::HAS_MANY, 'Hosocanhan', 'sonamkn_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sonamkn' => 'Sonamkn',
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
		$criteria->compare('sonamkn',$this->sonamkn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}