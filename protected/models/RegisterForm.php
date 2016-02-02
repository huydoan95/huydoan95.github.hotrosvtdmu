<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user registration form data. It is used by the 'register' action of 'SiteController'.
 */
class RegisterForm extends CFormModel {

	public $username;
	public $password;
	public $email;
	public $retypepassword;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username, password & email are required,
	 * and username & email needs to be unique.
	 */
	public function rules() {
		return array(
			// username and password are required
			array('username, password, email, retypepassword', 'required'),
			// make sure username and email are unique
			array('username, email', 'unique', 'className'=>'User'),
			// password compare with retypepassword
			array('password', 'compare', 'compareAttribute' => 'retypepassword', 'on' => 'register'),
			// retypepassword is required
			array('retypepassword', 'required', 'on' => 'register'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels() {
		return array(
			'username' => 'Tài khoản',
			'password' => 'Mật khẩu',
			'retypepassword' => 'Nhập lại mật khẩu',
			'email' => 'Email',
		);
	}

	public function register()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			
			Yii::app()->user->login($this->_identity,0);
			return true;
		}
		else
			return false;
	}
}