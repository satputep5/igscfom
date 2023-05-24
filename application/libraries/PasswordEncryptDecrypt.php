<?php 
class PasswordEncryptDecrypt{

	private $Blowfish_Pre;
	private $Blowfish_End;
	var $salt;
	var $hash_password;
	var $pwd_salt;
	
	function __construct(){
		
	}
	function hash_equals($str1, $str2){
		
		if(strlen($str1) != strlen($str2))
		{
			return false;
		}
		else
		{
			$res = $str1 ^ $str2;
			$ret = 0;
			for($i = strlen($res) - 1; $i >= 0; $i--)
			{
				
				$ret |= ord($res[$i]);
			}
			return !$ret;
		}
	}
	function password_creation($pwd){
		if(isset($pwd))	{
			CRYPT_BLOWFISH or die ('No Blowfish found.');
			//This string tells crypt to use blowfish for 5 rounds.
			$Blowfish_Pre = '$2a$07$';
			$Blowfish_End = '$';
			// PHP code you need to register a user
			// Blowfish accepts these characters for salts.
			$Allowed_Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
			$Chars_Len = 63;
			// 18 would be secure as well.
			$Salt_Length = 21;			
			$salt = substr(str_shuffle($Allowed_Chars), 0, $Salt_Length);			
			$bcrypt_salt = $Blowfish_Pre.$salt.$Blowfish_End; 
			$hashed_password = crypt($pwd, $bcrypt_salt);
			//password_hash($pwd, PASSWORD_BCRYPT); //used above php version 5.4
			//$respwd = $hashed_password;		
			$this->salt = $salt;
			$this->hash_password = $hashed_password;
		}
	}
	
	function __getSalt() {
		return $this->salt;
    }
	
	function __getHashPassword(){
		return $this->hash_password;	
	}
	
	function verify_password($hash_pwd,$pwd,$pwdsalt){ 
		if(isset($hash_pwd) && isset($pwd) && isset($pwdsalt)){			
			CRYPT_BLOWFISH or die ('No Blowfish found.');
			$Blowfish_Pre = '$2a$07$';
			$Blowfish_End = '$';
			
			$hashed_pass = crypt($pwd, $Blowfish_Pre . $pwdsalt . $Blowfish_End);
			//password_verify($pwd,$hash_pwd//
			if($this->hash_equals($hash_pwd, $hashed_pass)){
				return true;		
			}else {
				return false;
			}
		}
	}
}
?>