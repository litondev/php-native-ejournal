<?php
	function valid_number($value){		
		$value = strval($value);

		if(!preg_match("/^[0-9]{0,}([0-9]{0,}){0,}[0-9]$/", $value)){
			return false;
		}

		return true;
	};

	function valid_alfa($value){
		$value = strval($value);
		
		if(!preg_match("/^[a-zA-Z\s]{0,}([a-zA-Z\s]{0,}){0,}[a-zA-Z\s]$/",$value)){
			return false;
		}

		return true;
	};

	function valid_email($value){
		$value = strval($value);

		if(!preg_match("/^[a-zA-Z0-9]{0,}@[a-zA-Z0-9]{0,}\.[a-zA-Z0-9]{2,3}$/",$value)){
			return false;
		}

		return true;
	};
?>