<?php
class  EnCryptDeCrypt {

	function __construct(){
		$CI =& get_instance();
		$CI->load->library('encrypt');
	}

	function enCrypt($encodeUrlId){
		$CI =& get_instance();
		$id = strtr(
				$CI->encrypt->encode($encodeUrlId, $CI->config->item('secureKey')),
				array(
						'+' => '.',
						'=' => '-',
						'/' => '~'
				));
		return $id;
	}

	function deCrypt($decodeUrlId){
		$CI =& get_instance();
		$id = strtr(
				$decodeUrlId,
				array(
						'.' => '+',
						'-' => '=',
						'~' => '/'
				));
		$id =$CI->encrypt->decode($id, $CI->config->item('secureKey'));
		return $id;
	}
}