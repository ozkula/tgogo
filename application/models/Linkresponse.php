<?php 
class Linkresponse extends CI_Model
{
	
	function getContentJson($link){
			$ch = curl_init();
			curl_setopt ($ch, CURLOPT_URL, $link);
			curl_setopt ($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 15);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
			$result = curl_exec ($ch);
			curl_close ($ch);
			$html = json_decode($result);
			return $html;
	}
}
?>