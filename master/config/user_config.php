<?php
session_start();

class Koneksi 
{
	var $host     ="localhost";
	var $username ="root";
	var $password ="password";
	var $db       ="db_lapas_wanita";

	public function  database()
	{
		$mysql=new mysqli($this->host,$this->username,$this->password,$this->db);
		return $mysql;
	}
}