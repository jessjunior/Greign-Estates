<?php    
Include('connect.php');
if(isset($_POST['submit'])){
	
	if($_POST['firstname']=='' || $_POST['lastname']=='' || $_POST['email']=='' || $_POST['password']==''){
		echo "please fill the empty field.";

}else
	{
	$sql="INSERT into users(first_name,last_name,email,password) values('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."')";
	}
	
$res=mysqli_query($con,$sql);
if($res){
	//echo "Record successfully inserted";
	header("location: login.php");
	}else{
	echo "There is some problem in inserting record";
	}

}

?>
