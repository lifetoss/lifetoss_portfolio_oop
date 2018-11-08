<?php
	class General_Class{

		public function test()
		{
			return "This is just test!!!";
		}

		//$result1 = $mysqli->query("SELECT * FROM tbl_about ORDER BY SN DESC LIMIT 1");
		//$row1 = $result1->fetch_assoc();
		
		public function select_about()
		{
			// global $db is necessary to access database connection, 
			// It get access frm initialize.php   $db= db_connect(); 
			//$sql="SELECT * FROM tbl_about";
			global $db;
			$sql ="SELECT * FROM tbl_about ";
			$sql .="LIMIT 1";
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			$result = mysqli_fetch_assoc($res);
			return $result;		
		}

		public function select_service()
		{
			global $db;
			$sql ="SELECT * FROM tbl_service ";
			$sql .="LIMIT 1";
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			$result = mysqli_fetch_assoc($res);
			return $result;		
		}

		public function select_skill()
		{
			global $db;
			$sql ="SELECT * FROM tbl_skill ";
			$sql .="LIMIT 1";
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			$result = mysqli_fetch_assoc($res);
			return $result;		
		}

		public function select_edu()
		{
			global $db;
			$sql ="SELECT * FROM tbl_education ";
			$sql .="LIMIT 1";
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			$result = mysqli_fetch_assoc($res);
			return $result;		
		}

	}
?>
