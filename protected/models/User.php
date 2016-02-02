<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $loainguoidung
 *
 * The followings are the available model relations:
 * @property Hosocanhan[] $hosocanhans
 * @property Hosotimviec[] $hosotimviecs
 * @property Hosotuyendung[] $hosotuyendungs
 * @property Loainguoidung $loainguoidung0
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, loainguoidung', 'required'),
			array('loainguoidung', 'numerical', 'integerOnly'=>true),
			array('username, password, email', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, loainguoidung', 'safe', 'on'=>'search'),
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
			'hosocanhans' => array(self::HAS_ONE, 'Hosocanhan', 'user_id'),
			'hosotimviecs' => array(self::HAS_MANY, 'Hosotimviec', 'hosocanhan_id'),
			'hosotuyendungs' => array(self::HAS_ONE, 'Hosotuyendung', 'user_id'),
			'loainguoidung' => array(self::BELONGS_TO, 'Loainguoidung', 'loainguoidung'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'loainguoidung' => 'Loainguoidung',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('loainguoidung',$this->loainguoidung);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function validatePassword($password) {

		return crypt($password, $this->password) === $this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password) {
		return crypt($password, $this->generateSalt());
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 *
	 * The {@link http://php.net/manual/en/function.crypt.php PHP `crypt()` built-in function}
	 * requires, for the Blowfish hash algorithm, a salt string in a specific format:
	 *  - "$2a$"
	 *  - a two digit cost parameter
	 *  - "$"
	 *  - 22 characters from the alphabet "./0-9A-Za-z".
	 *
	 * @param int cost parameter for Blowfish hash algorithm
	 * @return string the salt
	 */
	protected function generateSalt($cost = 10) {
		if (!is_numeric($cost) || $cost < 4 || $cost > 31) {
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
// Get some pseudo-random data from mt_rand().
		$rand = '';
		for ($i = 0; $i < 8; ++$i)
			$rand.=pack('S', mt_rand(0, 0xffff));
// Add the microtime for a little more entropy.
		$rand.=microtime();
// Mix the bits cryptographically.
		$rand = sha1($rand, true);
// Form the prefix that specifies hash algorithm type and cost parameter.
		$salt = '$2a$' . str_pad((int) $cost, 2, '0', STR_PAD_RIGHT) . '$';
// Append the random salt string in the required base64 format.
		$salt.=strtr(substr(base64_encode($rand), 0, 22), array('+' => '.'));
		return $salt;
	}
	
}