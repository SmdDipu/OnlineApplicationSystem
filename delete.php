<?php
include 'lib/Database.php';
$db = new Database();
$table = 'education';
$id = $_GET['del'];
if(!empty($id)){

	$conditon = array('id'=>$id);
	$deleteStudent = $db->deleteData($table,$conditon );

	if($deleteStudent){
		//echo "Data Deleted Successfully";
        header('Location: education.php');
	}
	else{
		echo "Data Not Deleted";
	}

	// Session::set('msg_key',$msg);
	// $home_url = '../index.php';
	// header('Location:'.$home_url);
}

?>
