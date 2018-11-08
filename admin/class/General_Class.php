<?php
	class General_Class{

		public function test()
		{
			return "This is just test!!!";
		}
		
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

		public function update_about($title, $details, $text_one, $text_two, $text_three, $text_four, $id)
		{
			global $db;
			//$sql ="UPDATE `tbl_about` SET `name`='$name',`address`='$address',`number`='$number' where sn = '$id'";
			$sql  ="UPDATE `tbl_about` SET ";
			$sql .="title='".$title."', ";
			$sql .="detail='".$details."', ";
			$sql .="text_one='".$text_one."', ";
			$sql .="text_two='".$text_two."', ";
			$sql .="text_three='".$text_three."', ";
			$sql .="text_four='".$text_four."' ";
			$sql .="WHERE sn='".$id."'";
			$res = mysqli_query($db, $sql);
			if($res) {
		      return true;
		    } else {
		      // UPDATE failed
		      echo mysqli_error($db);
		      db_disconnect($db);
		      exit;
		    }
		}


		public function update_edu($title_edu, $text_one_edu, $edu_one_details, $text_two_edu, $edu_two_details, $text_three_edu, $edu_three_details, $text_four_edu, $edu_four_details, $text_five_edu, $edu_five_details, $id)
		{
			global $db;
			if (isset($id)) {
				# update code goes here
				//$sql ="UPDATE `tbl_about` SET `name`='$name',`address`='$address',`number`='$number' where sn = '$id'";
				$sql  ="UPDATE `tbl_education` SET ";
				$sql .="title='".$title_edu."', ";
				$sql .="title_one='".$text_one_edu."', ";
				$sql .="title_one_details='".$edu_one_details."', ";
				$sql .="title_two='".$text_two_edu."', ";
				$sql .="title_two_details='".$edu_two_details."', ";
				$sql .="title_three='".$text_three_edu."', ";
				$sql .="title_three_details='".$edu_three_details."', ";
				$sql .="title_four='".$text_four_edu."', ";
				$sql .="title_four_details='".$edu_four_details."', ";
				$sql .="title_five='".$text_five_edu."', ";
				$sql .="title_five_details='".$edu_five_details."' ";
				$sql .="WHERE sn='".$id."'";
				$res = mysqli_query($db, $sql);

			}
			else{
				# insert code goes here
				//$sql ="INSERT INTO `record` (`name`,`address`,`number`) VALUES ('$name','$address','$number')";
				$sql = "INSERT INTO `tbl_education` ";
			    $sql .= "(title, title_one, title_one_details, title_two, title_two_details, title_three, title_three_details, title_four, title_four_details, title_five, title_five_details) ";
			    $sql .= "VALUES (";
			    $sql .= "'" . $title_edu . "',";
			    $sql .= "'" . $text_one_edu . "',";
			    $sql .= "'" . $edu_one_details . "',";
			    $sql .= "'" . $text_two_edu . "',";
			    $sql .= "'" . $edu_two_details . "',";
			    $sql .= "'" . $text_three_edu . "',";
			    $sql .= "'" . $edu_three_details . "',";
			    $sql .= "'" . $text_four_edu . "',";
			    $sql .= "'" . $edu_four_details . "',";
			    $sql .= "'" . $text_five_edu . "',";
			    $sql .= "'" . $edu_five_details . "'";
			    $sql .= ")";
				$res = mysqli_query($db, $sql);				
			}
			
			if($res) {
		      return true;
		    } else {
		      // UPDATE failed
		      echo mysqli_error($db);
		      db_disconnect($db);
		      exit;
		    }
		}



		public function update_service($service)
		{
			global $db;
			$sql = "UPDATE tbl_service SET ";
		    $sql .= "title='" . $service['title_service'] . "', ";
		    $sql .= "text_one='" . $service['text_one_service'] . "', ";
		    $sql .= "text_one_details='" . $service['text_one_details'] . "', ";
		    $sql .= "text_two='" . $service['text_two_service'] . "', ";
		    $sql .= "text_two_details='" . $service['text_two_details'] . "', ";
		    $sql .= "text_three='" . $service['text_three_service'] . "', ";
		    $sql .= "text_three_details='" . $service['text_three_details'] . "' ";
		    $sql .= "WHERE sn='" . $service['id_service'] . "' ";
		    $sql .= "LIMIT 1";
			$res = mysqli_query($db, $sql);
			if($res) {
		      return true;
		    } else {
		      // UPDATE failed
		      echo mysqli_error($db);
		      db_disconnect($db);
		      exit;
		    }
		}

		public function update_skill($skill)
		{
			global $db;
			$sql = "UPDATE tbl_skill SET ";
		    $sql .= "title='" . $skill['title_skill'] . "', ";
		    $sql .= "details='" . $skill['text_details_skill'] . "' ";
		    $sql .= "WHERE sn='" . $skill['skill_sn'] . "' ";
		    $sql .= "LIMIT 1";
			$res = mysqli_query($db, $sql);
			if($res) {
		      return true;
		    } else {
		      // UPDATE failed
		      echo mysqli_error($db);
		      db_disconnect($db);
		      exit;
		    }
		}


	}
?>
