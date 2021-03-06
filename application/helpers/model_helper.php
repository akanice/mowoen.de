<?php

if (!function_exists('modelCheckAdd')){
	/**
	 * Check data for table
	 *
	 * Check data for table before insert to database
	 * 
	 * @param array $tableDef Definition of table
	 * @param array $data Data to insert
	 */
	function modelCheckAdd($tableDef,$data){
		if (!isset($tableDef) || ! isset($data) || !is_array($tableDef) || !is_array($data)){
			return false;
		}
		
		$newdata = array();
		
		foreach ($tableDef as $name => $val){
			if ($val){
				if (!isset($data[$name]) || (strlen($data[$name])<1)){
					return false;
				}

				if ($val == 'number'){
					if (!is_numeric($data[$name])){
						return false;
					}
				}else{

				}
			}else{
				if (!isset($data[$name])){
					continue;
				}
			}
			
			$newdata[$name] = $data[$name];
		}
		
		if (!count($newdata)){
			return false;
		}
		
		return $newdata;
	}
}

if (!function_exists('modelCheckEdit')){
	/**
	 * Check data for edit
	 *
	 * Check data for table before edit to database
	 * 
	 * @param array $tableDef Definition of table
	 * @param array $data Data to edit
	 * @param array $origindata Origin data
	 */
	function modelCheckEdit($tableDef,$data,$origindata){
		if (!isset($tableDef) || ! isset($data) || !is_array($tableDef) || !is_array($data)){
			return false;
		}
		
		$newdata = array();
		foreach ($tableDef as $name => $val){
			if (!isset($data[$name]) || ($origindata->$name == $data[$name]) || 
					($data[$name]=='')){
				continue;
			}

			if ($val == 'number'){
				if (!is_numeric($data[$name])){
					continue;
				}
			}else{

			}
			
			$newdata[$name] = $data[$name];
		}
		
		if (!count($newdata)){
			return false;
		}
		
		return $newdata;
	}
}

if (!function_exists('generateSalt')){
	function generateSalt($length=8){
		$salt = random_string('alnum',$length);
		
		return $salt;
	}
}


if (!function_exists('encryptPassword')){
	function encryptPassword($password,$salt){
		if (strlen($password) < 8){
			return 'Error: Password must longer than 8 character';
		}
		
		$newpassword = $password;
		$num = 0;
		for($i=0;$i<strlen($salt);$i++){
			$num+= ord($salt[$i]);
		}
		
		$num = round($num/8.8,0);
		
		for($i=0;$i<$num;$i++){
			if ($i%2>0){
				$newpassword = md5($newpassword.$salt);
			}else{
				$newpassword = substr(sha1($newpassword.$salt),0,32);
			}
		}
		
		return $newpassword;
	}
}

if (!function_exists('make_alias')){
	function make_alias($str){
		$cleaner = array(
			'??'		=> 'a', '??'		=> 'A',
			'??'		=> 'a', '??'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'??'		=> 'a', '??'		=> 'A',
			'??'		=> 'a', '??'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'??'		=> 'a',	'??'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a',	'???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a', '???'		=> 'A',
			'???'		=> 'a',	'???'		=> 'A',
			
			'??'		=> 'd', '??'		=> 'D',
			
			'??'		=> 'e',	'??'		=> 'E',
			'??'		=> 'e',	'??'		=> 'E',
			'??'		=> 'e',	'??'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			'???'		=> 'e',	'???'		=> 'E',
			
			'??'		=> 'i', '??'		=> 'I',
			'??'		=> 'i', '??'		=> 'I',
			'???'		=> 'i', '???'		=> 'I',
			'???'		=> 'i', '???'		=> 'I',
			'??'		=> 'i', '??'		=> 'I',
			
			'??'		=> 'o',	'??'		=> 'O',
			'??'		=> 'o',	'??'		=> 'O',
			'??'		=> 'o',	'??'		=> 'O',
			'??'		=> 'o',	'??'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'??'		=> 'o',	'??'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			'???'		=> 'o',	'???'		=> 'O',
			
			'??'		=> 'u',	'??'		=> 'U',
			'??'		=> 'u',	'??'		=> 'U',
			'??'		=> 'u',	'??'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			'??'		=> 'u',	'??'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			'???'		=> 'u',	'???'		=> 'U',
			
			'??'		=> 'y',	'??'		=> 'Y',
			'???'		=> 'y',	'???'		=> 'Y',
			'???'		=> 'y',	'???'		=> 'Y',
			'???'		=> 'y',	'???'		=> 'Y',
			'???'		=> 'y',	'???'		=> 'Y'
		);
		
		$result = $str;
		
		foreach ($cleaner as $a => $v){
			$result = str_replace($a, $v, $result);
		}
		
		$result = iconv('UTF-8','ASCII//TRANSLIT',$result);
		
		$result = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $result);
		$result = strtolower(trim($result, '-'));
		$result = preg_replace("/[\/_| -]+/", '-', $result);
		while (strstr($result,'--')){
			$result = str_replace('--','-',$result);
		}
		$result = trim($result,'-');
		
		return $result;
	}
}

if (!function_exists('array_swap_index')){
	function array_swap_index($array,$key='id',$objectIsArray=false){
		$result = array();
		foreach ($array as $item){
			if ($objectIsArray){
				$result[$item[$key]] = $item;
			}else{
				$result[$item->$key] = $item;
			}
		}
		return $result;
	}
}

if (!function_exists('getLocationFromIP')){
	function getLocationFromIP(){
		$location = array('country'=>'VN','city'=>'Hanoi');

		$ip = $_SERVER['REMOTE_ADDR'];
		if ($ip!='127.0.0.1'){
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
			if (isset($details->city)) $location = array('country'=>$details->country,'city'=>$details->city);
		}

		return $location;
	}
}

if (!function_exists('generateUserCode')){
	function generateUserCode($length = 8) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}
}

if (!function_exists('getFileName')){
	function getFileName($url) {
		$tokens = explode('/', $url);
		$str = $tokens[sizeof($tokens)-1];
		return $str;
	}
}