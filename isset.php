<?php

if(!isset($_GET['strona']) || isset($_GET['strona']) === 0 || isset($_GET['strona']) === 1)
		{
			$strona = 0;
			
			require "rowsOnPage.php";
		}
	else 
		{
			require "rowsOnPage.php";

			$strona = $_GET['strona'];
			$strona = intval($strona);
			$strona = ($strona * $limit_two) - $limit_two;
		}
		
		if(isset($_SESSION['in_page']))
			{
				echo "Wybrano {$_SESSION['in_page']} wyników na stronie<br><br>";
			}
		else
			{
				echo "Wyników na stronie: 4<br><br>";
			}	
?>	