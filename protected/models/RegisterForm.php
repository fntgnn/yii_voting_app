<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
	public $name;
	public $email;
	public $password;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('name, email, password', 'required'),
			array('email','unique'),
			// rememberMe needs to be a boolean
			// password needs to be authenticated
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'name'=>'Your name',
			'email'=>'Your email',
			'password'=>'Your password',
		);
	}
  //
	// /**
	//  * Authenticates the password.
	//  * This is the 'authenticate' validator as declared in rules().
	//  * @param string $attribute the name of the attribute to be validated.
	//  * @param array $params additional parameters passed with rule when being executed.
	//  */
	// public function authenticate($attribute,$params)
	// {
	// 	if(!$this->hasErrors())
	// 	{
	// 		$this->_identity=new UserIdentity($this->email,$this->password);
	// 		if(!$this->_identity->authenticate())
	// 			$this->addError('password','Incorrect email or password.');
	// 	}
	// }

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether register is successful
	 */
	public function register()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->email,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
