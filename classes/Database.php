<?php 

class Database
{
	private $db = null;

	public function connect()
	{
		// connect to the database
		$this->db = new mysqli('127.0.0.1', 'root', '', 'blogposts');

		// check if no errors
		if($this->db->connect_errno > 0) {
			die("Connection failed with error {$this->db->connect_errno}");
		}

		// return myself
		return $this;
	}

	public function query($sql)
	{
		// call the query
		$res = $this->db->query($sql);
		if(is_bool($res)) return [];

		// pull the data from the query
		$results = [];
		while($row = $res->fetch_object()) {
			$results[] = $row;
		}

		return $results;
	}

	public function disconnect()
	{
		// close the connection to the database
		$this->db->close();
	}
}