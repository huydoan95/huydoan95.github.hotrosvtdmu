<?php

/**
 * This is the model class for table "{{hosocanhan}}".
 *
 * The followings are the available columns in table '{{hosocanhan}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $trinhdohv_id
 * @property string $tenbc_cc
 * @property string $trg_dvdaotao
 * @property string $chuyennganh
 * @property integer $loaitn_id
 * @property string $tgbdhoc
 * @property string $tgkthoc
 * @property integer $ngoaingu_id
 * @property integer $tinhoc_id
 * @property integer $sonamkn_id
 * @property string $xeploai_nn
 * @property string $xeploai_th
 *
 * The followings are the available model relations:
 * @property Loaitn $loaitn
 * @property Ngoaingu $ngoaingu
 * @property Sonamkn $sonamkn
 * @property Tinhoc $tinhoc
 * @property Trinhdohv $trinhdohv
 * @property User $user
 */
class Hosocanhan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hosocanhan the static model class
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
		return '{{hosocanhan}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, trinhdohv_id, tenbc_cc, trg_dvdaotao, chuyennganh, loaitn_id, tgbdhoc, tgkthoc, sonamkn_id', 'required'),
			array('user_id, trinhdohv_id, loaitn_id, ngoaingu_id, tinhoc_id, sonamkn_id', 'numerical', 'integerOnly'=>true),
			array('tenbc_cc, trg_dvdaotao, chuyennganh, xeploai_nn, xeploai_th', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, trinhdohv_id, tenbc_cc, trg_dvdaotao, chuyennganh, loaitn_id, tgbdhoc, tgkthoc, ngoaingu_id, tinhoc_id, sonamkn_id, xeploai_nn, xeploai_th', 'safe', 'on'=>'search'),
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
			'loaitn' => array(self::BELONGS_TO, 'Loaitn', 'loaitn_id'),
			'ngoaingu' => array(self::BELONGS_TO, 'Ngoaingu', 'ngoaingu_id'),
			'sonamkn' => array(self::BELONGS_TO, 'Sonamkn', 'sonamkn_id'),
			'tinhoc' => array(self::BELONGS_TO, 'Tinhoc', 'tinhoc_id'),
			'trinhdohv' => array(self::BELONGS_TO, 'Trinhdohv', 'trinhdohv_id'),
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
			'trinhdohv_id' => 'Trinhdohv',
			'tenbc_cc' => 'Tenbc Cc',
			'trg_dvdaotao' => 'Trg Dvdaotao',
			'chuyennganh' => 'Chuyennganh',
			'loaitn_id' => 'Loaitn',
			'tgbdhoc' => 'Tgbdhoc',
			'tgkthoc' => 'Tgkthoc',
			'ngoaingu_id' => 'Ngoaingu',
			'tinhoc_id' => 'Tinhoc',
			'sonamkn_id' => 'Sonamkn',
			'xeploai_nn' => 'Xeploai Nn',
			'xeploai_th' => 'Xeploai Th',
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
		$criteria->compare('trinhdohv_id',$this->trinhdohv_id);
		$criteria->compare('tenbc_cc',$this->tenbc_cc,true);
		$criteria->compare('trg_dvdaotao',$this->trg_dvdaotao,true);
		$criteria->compare('chuyennganh',$this->chuyennganh,true);
		$criteria->compare('loaitn_id',$this->loaitn_id);
		$criteria->compare('tgbdhoc',$this->tgbdhoc,true);
		$criteria->compare('tgkthoc',$this->tgkthoc,true);
		$criteria->compare('ngoaingu_id',$this->ngoaingu_id);
		$criteria->compare('tinhoc_id',$this->tinhoc_id);
		$criteria->compare('sonamkn_id',$this->sonamkn_id);
		$criteria->compare('xeploai_nn',$this->xeploai_nn,true);
		$criteria->compare('xeploai_th',$this->xeploai_th,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}