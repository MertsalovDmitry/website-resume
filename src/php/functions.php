<?php
	//clean variables 
	function clean_variable($var)
	{
		$var = trim($var);
		$var = stripslashes($var);
		$var = strip_tags($var);
		$var = htmlspecialchars($var);
		//$var = mysqli::real_escape_string($var);
	
		return $var;
	}

	//return my age
	function getAge() {
		$year = 1988;
		$month = 5;
		$day = 29;

    	if($month > date('m') || $month == date('m') && $day > date('d'))
      		return (date('Y') - $year - 1);
    	else
      		return (date('Y') - $year);
  	}

?>