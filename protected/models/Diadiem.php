<?php

/**
 * This is the model class for table "{{diadiem}}".
 *
 * The followings are the available columns in table '{{diadiem}}':
 * @property integer $id
 * @property string $diadiem
 *
 * The followings are the available model relations:
 * @property Hosotimviec[] $hosotimviecs
 * @property Hosotuyendung[] $hosotuyendungs
 */
class Diadiem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Diadiem the static model class
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
		return '{{diadiem}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diadiem', 'required'),
			array('diadiem', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, diadiem', 'safe', 'on'=>'search'),
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
			'hosotimviecs' => array(self::HAS_MANY, 'Hosotimviec', 'diadiem_id'),
			'hosotuyendungs' => array(self::HAS_MANY, 'Hosotuyendung', 'tinhthanh_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'diadiem' => 'Diadiem',
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
		$criteria->compare('diadiem',$this->diadiem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}