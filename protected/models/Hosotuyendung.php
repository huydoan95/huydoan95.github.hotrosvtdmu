<?php

/**
 * This is the model class for table "{{hosotuyendung}}".
 *
 * The followings are the available columns in table '{{hosotuyendung}}':
 * @property integer $id
 * @property integer $user_id
 * @property string $tencty
 * @property string $dtcodinh
 * @property string $diachicty
 * @property integer $tinhthanh_id
 *
 * The followings are the available model relations:
 * @property Diadiem $tinhthanh
 * @property User $user
 */
class Hosotuyendung extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hosotuyendung the static model class
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
		return '{{hosotuyendung}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, tencty, dtcodinh, diachicty, tinhthanh_id', 'required'),
			array('user_id, tinhthanh_id', 'numerical', 'integerOnly'=>true),
			array('tencty', 'length', 'max'=>100),
			array('dtcodinh', 'length', 'max'=>11),
			array('diachicty', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, tencty, dtcodinh, diachicty, tinhthanh_id', 'safe', 'on'=>'search'),
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
			'tinhthanh' => array(self::BELONGS_TO, 'Diadiem', 'tinhthanh_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'tencty' => 'Tencty',
			'dtcodinh' => 'Dtcodinh',
			'diachicty' => 'Diachicty',
			'tinhthanh_id' => 'Tinhthanh',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('tencty',$this->tencty,true);
		$criteria->compare('dtcodinh',$this->dtcodinh,true);
		$criteria->compare('diachicty',$this->diachicty,true);
		$criteria->compare('tinhthanh_id',$this->tinhthanh_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}