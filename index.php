
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Paginacja</title>
    <meta name="description" content="Paginacja + PHPMailer">
    <meta name="keywords" content="Paginacja + PHPMailer">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    
</head>

<body>
    	<?php
	
			$config = require_once "config.php";
					  require_once "class.php";
					  require_once "isset.php";
					  require_once "phpmailer.php";
					  
		    
			$obj = new Pagination($config); 
					
				foreach ($obj -> Pag($strona,$limit_two) as $user) 
				    {
				       echo "{$user['id']}" . " " . "{$user['login']} " . " " . "<br>{$user['email']}<br><br>";                 
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
				
				<h2>Wyślij email</h2>
				<form action="" method="POST">
					  <textarea name="message" rows="5" cols="50"></textarea>
					  <br>
					  <input type="submit" value="Wyślij">
				</form>

		<?php
		
				if(isset($_POST['message']))
				{
					$message = $_POST['message'];
					$email = new Mailer($message);
					unset($_POST['message']);
				}

		?>		
</body>
</html>







