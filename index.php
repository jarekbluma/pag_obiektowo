<?php
	

	if(!isset($_GET['strona']) || isset($_GET['strona']) === 0 || isset($_GET['strona']) === 1)
	{
		$strona = 0;
	}
	else 
	{
		$strona = $_GET['strona'];
		$strona = intval($strona);
		$strona = ($strona * 3) - 3;
	}

		$config = require_once "config.php";
			  	  require_once "class.php";

		$obj = new Pagination($config); 
		

		foreach ($obj -> Pag($strona) as $user) 
		    {
		       echo "{$user['id']}" . " " . "{$user['email']}<br>";                 
		    }  

		echo "<br>";
		    
		for ($i = 1; $i < $obj -> RowCount(); $i++)
            {
               ?><a href="index.php?strona=<?php echo $i ?>"><?php echo $i ?></a> <?php
            }         
?>
