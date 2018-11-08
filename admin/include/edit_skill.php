<?php
// in this condition we need standar path variables
	include("connection.php");
	include("function.php");
	include('../class/General_Class.php');
	include('../object/General_Obj.php');
	$db= db_connect();
	$result_skill = $objAdmin->select_skill();
if(isset($_POST['subbtn_skill'])) {

  // Handle form values sent by body.php (skill)

  $skill = [];
  $skill['title_skill'] = $_POST['title_skill'] ?? '';		// php 7 ??
  $skill['text_details_skill'] = $_POST['text_details_skill'] ?? '';
  $skill['skill_sn'] = $result_skill['sn'] ?? '';

  $result_skill = $objAdmin->update_skill($skill); 
 // $result = insert_subject($subject);
  //$new_id = mysqli_insert_id($db);
  //header('location:')
  //redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));
  //echo "skaflajdalf aldjal yes";
  header("Location: ../index.php?msg=yes");
} else {
  //redirect_to(url_for('/staff/subjects/new.php'));
	//echo "skaflajdalf aldjal no";
	header("Location: index.php?msg=no");
}

?>
