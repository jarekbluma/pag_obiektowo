<?php
	session_start();

	$config = require_once "config.php";
			  require_once "class.php";
			  require_once "isset.php";
    
	$obj = new Pagination($config); 
			
		foreach ($obj -> Pag($strona,$limit_two) as $user) 
		    {
		       echo "{$user['id']}" . " " . "{$user['login']}<br>";                 
		    }  

		echo "<br>";
		    
		for ($i = 1; $i < $obj -> RowCount($limit_two); $i++)
            {
               ?><a href="index.php?strona=<?php echo $i ?>"><?php echo $i . " " ?></a><?php
            } 
?> 

		<br><br>
		<form action="" method="POST">
	  		    <select name="form">
	  		    	<option value="1">1</option>
					<option value="4">4</option>
					<option value="6">6</option>
					<option value="8">8</option>
				</select>
				    <input type="submit" value="Wyników na stronie"/>	
		</form>



