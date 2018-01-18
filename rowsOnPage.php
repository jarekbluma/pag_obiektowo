<?php

		if(isset($_POST['form'])) 
			{
				$limit_two = $_POST['form'];
				$_SESSION['in_page'] = $_POST['form'];
				header("location: index.php");
			}
		else
			{
				isset($_SESSION['in_page']) ? $limit_two = $_SESSION['in_page'] : $limit_two = 4;
			}
?>