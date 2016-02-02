<?php

/**
 * This is the model class for table "{{hosotimviec}}".
 *
 * The followings are the available columns in table '{{hosotimviec}}':
 * @property integer $id
 * @property integer $capbac_id
 * @property integer $nganhnghe_id
 * @property integer $diadiem_id
 * @property integer $mucluong_id
 * @property integer $hinhthuc_id
 * @property string $vtmongmuon
 * @property integer $hosocanhan_id
 * @property string $tg_tao_hs
 * @property string $tg_capnhat_hs
 *
 * The followings are the available model relations:
 * @property Capbac $capbac
 * @property Diadiem $diadiem
 * @property Hinhthuc $hinhthuc
 * @property Mucluong $mucluong
 * @property Nganhnghe $nganhnghe
 * @property User $hosocanhan
 */
class Hosotimviec extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hosotimviec the static model class
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
		return '{{hosotimviec}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('capbac_id, nganhnghe_id, diadiem_id, mucluong_id, hinhthuc_id, vtmongmuon', 'required'),
			array('capbac_id, nganhnghe_id, diadiem_id, mucluong_id, hinhthuc_id, hosocanhan_id', 'numerical', 'integerOnly'=>true),
			array('vtmongmuon', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, capbac_id, nganhnghe_id, diadiem_id, mucluong_id, hinhthuc_id, vtmongmuon, hosocanhan_id, tg_tao_hs, tg_capnhat_hs', 'safe', 'on'=>'search'),
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
			'capbac' => array(self::BELONGS_TO, 'Capbac', 'capbac_id'),
			'diadiem' => array(self::BELONGS_TO, 'Diadiem', 'diadiem_id'),
			'hinhthuc' => array(self::BELONGS_TO, 'Hinhthuc', 'hinhthuc_id'),
			'mucluong' => array(self::BELONGS_TO, 'Mucluong', 'mucluong_id'),
			'nganhnghe' => array(self::BELONGS_TO, 'Nganhnghe', 'nganhnghe_id'),
			'hosocanhan' => array(self::BELONGS_TO, 'User', 'hosocanhan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'id' => 'ID',
			'capbac_id' => 'Cấp bậc',
			'nganhnghe_id' => 'Ngành nghề',
			'diadiem_id' => 'Địa điểm',
			'mucluong_id' => 'Mức lương',
			'hinhthuc_id' => 'Hình thức',
			'vtmongmuon' => 'Vị trí mong muốn',
			/*'hosocanhan_id' => 'Hosocanhan',
			'tg_tao_hs' => 'Tg Tao Hs',
			'tg_capnhat_hs' => 'Tg Capnhat Hs',*/
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
		$criteria->compare('capbac_id',$this->capbac_id);
		$criteria->compare('nganhnghe_id',$this->nganhnghe_id);
		$criteria->compare('diadiem_id',$this->diadiem_id);
		$criteria->compare('mucluong_id',$this->mucluong_id);
		$criteria->compare('hinhthuc_id',$this->hinhthuc_id);
		$criteria->compare('vtmongmuon',$this->vtmongmuon,true);
		$criteria->compare('hosocanhan_id',$this->hosocanhan_id);
		$criteria->compare('tg_tao_hs',$this->tg_tao_hs,true);
		$criteria->compare('tg_capnhat_hs',$this->tg_capnhat_hs,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function beforeSave() {	
		
		if(parent::beforeSave()&&$this->isNewRecord){
			$this->hosocanhan_id= Yii::app()->user->getId();
			$this->tg_tao_hs=  $this->tg_capnhat_hs=new CDbExpression('NOW()');
		}
		
		return true;
	}
	
}