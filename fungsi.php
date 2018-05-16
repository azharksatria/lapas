<?php
	function user_login()
	{
		if(isset($_POST['login']))
		{
			$a=$_POST['username'];
			$b=md5($_POST['password']);
			
			$mysqli =$this->config->database();
			$data   =$mysqli->query("SELECT * FROM user WHERE username='$a' AND password='$b' ");
			$get    =$data->fetch_array();
			$now 	=$data->num_rows;

			if($now == 1){

				$_SESSION['id_user']=$get['id'];
				echo "horeeee";
			}else{
				echo "string";
			}
			//var_dump($b);
		}
	}