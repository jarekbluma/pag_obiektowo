<?php
	

	$config = require_once "config.php";
			  require_once "class.php";


	if(!isset($_GET['strona']) || isset($_GET['strona']) === 0 || isset($_GET['strona']) === 1)
	{
		$strona = 0;
		if(isset($_POST['form'])) 
		{
			$limit_two = $_POST['form'];
		}
		else
		{
			$limit_two = 4;
		}
	}
	else 
	{
		if(isset($_POST['form'])) 
		{
			$limit_two = $_POST['form'];
		}
		else
		{
			$limit_two = 4;
		}

		$strona = $_GET['strona'];

		$strona = intval($strona);
		$strona = ($strona * $limit_two) - $limit_two;
	}

	$obj = new Pagination($config); 
	
		
		foreach ($obj -> Pag($strona,$limit_two) as $user) 
		    {
		       echo "{$user['id']}" . " " . "{$user['email']}<br>";                 
		    }  

		echo "<br>";
		    
		for ($i = 1; $i < $obj -> RowCount($limit_two); $i++)
            {
               ?><a href="index.php?strona=<?php echo $i ?>"><?php echo $i ?></a><?php
            } ?> 


			<form action="" method="post">
				
					<select name="form">
						<option value="4">4</option>
						<option value="8">8</option>
					</select>
					    <input type="submit" value="Na stronie"/><br><br><br>	
			</form>



