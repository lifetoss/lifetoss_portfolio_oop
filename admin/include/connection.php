<?php
	//$mysqli=mysqli_connect('localhost','root','','life_protfolio') or die('error occur while connecting server');
	function db_connect() {
    $connection=mysqli_connect('localhost','root','','life_protfolio') or die('error occur while connecting server');
    confirm_db_connect();
    return $connection;
  }

  // to close database
  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }


?>