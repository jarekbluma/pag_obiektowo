<?php


class Pagination
{
	private $pdo;

	public function __construct($config)
	{
		try
		{
			$this -> pdo = new PDO("mysql:host={$config['location']};dbname={$config['name']};charset=utf8",$config['login'],$config['password'], 
				              [PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		}

		catch (PDOException $error)
		{
			exit('Błąd łączenia do bazy!');
		}
	}

	public function RowCount()
	{
		$row = $this -> pdo -> query("SELECT * FROM users");
		$count = $row -> rowCount();
		$div = ($count/3) + 1;
        $div = ceil($div);

		return $div;
	}

	public function Pag($strona)
	{
		$limit_one = intval($strona);
		$usersQuery = $this -> pdo -> query("SELECT * FROM users LIMIT $limit_one,3");
        $users = $usersQuery -> fetchAll();

        return $users;
	}
}