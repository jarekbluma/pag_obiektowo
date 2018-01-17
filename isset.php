<?php

if(!isset($_GET['strona']) || isset($_GET['strona']) === 0 || isset($_GET['strona']) === 1)
	{
		$strona = 0;
		
		if(isset($_POST['form'])) 
			{
				$limit_two = $_POST['form'];
				$_SESSION['in_page'] = $_POST['form'];
			}
		else
			{
				isset($_SESSION['in_page']) ? $limit_two = $_SESSION['in_page'] : $limit_two = 4;
			}
	}
	else 
	{
		if(isset($_POST['form'])) 
			{
				$limit_two = $_POST['form'];
				$_SESSION['in_page'] = $_POST['form'];
			}
		else
			{
				isset($_SESSION['in_page']) ? $limit_two = $_SESSION['in_page'] : $limit_two = 4;
			}

		$strona = $_GET['strona'];
		$strona = intval($strona);
		$strona = ($strona * $limit_two) - $limit_two;
	}
		echo "Wybrano {$_SESSION['in_page']} wyników na stronie<br><br>";
?>	