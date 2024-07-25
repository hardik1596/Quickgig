<?php
include 'include/conn.php';
session_start();
  if (isset($_POST['signup'])) {

     
     $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $dob=$_POST['dob'];
     $phone=$_POST['phone'];
	 $code=$_POST['code'];
	 $city=$_POST['city'];
	 $gender=$_POST['gender'];
	 $i=$_FILES['profilepic']['name'];
	 $ii='upload/'.$i;
	 $tmp=$_FILES['profilepic']['tmp_name'];
	 $state = 855;
	 $country=$_POST['country'];
	 move_uploaded_file($tmp, $ii);
	  
 	$sql="INSERT INTO `user`(`fname`, `lname`,`phnumber`, `email`,`dob`, `password`, `country`, `city`, `pincode`, `gen`,`profile`) VALUES ('$fname','$lname','$phone','$email','$dob','$password','$country','$city',' $code','$gender','$i')";
	echo $sql; 
}

 
	if (isset($_POST['login'])) {

		$uemail=$_POST['user'];
		$pass=$_POST['password'];
		$sql="SELECT * FROM `user` WHERE email='$uemail'AND password='$pass'";
		$res=$con->query($sql);
	    $re= mysqli_fetch_assoc($res);
	    

		 if($res>0){
		 	$_SESSION['uid']=$re['user_id'];
			header("location:index.php");
	     }

		 else{
			echo "Someting want wrong";
		
		
		 }
		}


	

	if (isset($_POST['update'])) {

     $id=$_SESSION['uid'];
     $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $email=$_POST['email'];
	 $dob=$_POST['dob'];
     $phone=$_POST['phone'];
	 $code=$_POST['code'];
	 $city=$_POST['city'];
	 $gender=$_POST['gender'];
	 $i=$_FILES['profilepic']['name'];
	
	
	 $state = 'gujarat';
	
	 if($i=='')
	 {
		$sql ="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`phnumber`='$phone',`email`='$email',`dob`='$dob',`state`='$state',`city`='$city',`pincode`='$code',`gen`='$gender' WHERE `user_id`='$id'";
		$result = $con->query($sql);
	 }
	 else
	 {

	$ii='upload/'.$i;
	 $tmp=$_FILES['profilepic']['tmp_name'];
	 move_uploaded_file($tmp, $ii);
	 	$sql ="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`phnumber`='$phone',`email`='$email',`dob`='$dob',`state`='$state',`city`='$city',`pincode`='$code',`gen`='$gender',`profile`='$i' WHERE `user_id`='$id'";
		$result = $con->query($sql);
	 }
	  
 	

	if($result>0)
	{
		header("Location:dashboard-settings.php");
	}
	else
	{
		echo "Someting want wrong";
	}
}
	if (isset($_POST['job'])) {

     $id=$_SESSION['uid'];
     $title=$_POST['title'];
     $email=$_POST['email'];
	 $description=$_POST['description'];
	 $sal=$_POST['sal'];
	 $type=$_POST['type'];
     $cate=$_POST['cate'];
	 $address=$_POST['address'];
	 $search=$_POST['search'];
	 $i=$_FILES['pic']['name'];
	 $ii='upload/'.$i;
	 $tmp=$_FILES['pic']['tmp_name'];
	 /*move_uploaded_file($tmp, $ii);*/
	  
 	$sql="INSERT INTO `employee`( `user_id`, `email`, `address`, `gig_title`, `cat_id`, `description`, `type`, `search`, `price_hour`) VALUES('$id','$email','$address','$title','$cate','$description','$type','$search','$sal')"; 

	 $result = $con->query($sql);
	if($result>0)
	{
		header("Location:dashboard.php");
	}
	else
	{
		echo "Someting want wrong";
	}

}

if (isset($_POST['changed'])) {
		$id=$_SESSION['uid'];
		 $pass=$_POST['old'];
		$new=$_POST['new'];
		$news=$_POST['news'];
		 $sql="SELECT * FROM `user` WHERE user_id='$id'";
		$res=$con->query($sql);
	    $re= mysqli_fetch_assoc($res);
	    $read= $re['password'];
		 if($pass==$read){
		 	if ($new===$news) {
		 		$sqls="UPDATE `user` SET `password` = '$new' WHERE `user`.`user_id` = '$id'; ";
		 		$res=$con->query($sqls);
		 		/*echo $ress=mysqli_fetch_assoc($res);*/
		 		header("location: dashboard-settings.php");
		 	} else {
		 		echo "not match the new and repeat new password";
		 	}
			
	     }

		 else
		 {
			echo "current password is wrong";
		 }


	}
	

	
  if (isset($_POST['search'])) {

     
     $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $dob=$_POST['dob'];
     $phone=$_POST['phone'];
	 $code=$_POST['code'];
	 $city=$_POST['city'];
	 $gender=$_POST['gender'];
	 $i=$_FILES['profilepic']['name'];
	 $ii='upload/'.$i;
	 $tmp=$_FILES['profilepic']['tmp_name'];
	 $state = 855;
	 $country=$_POST['country'];
	 move_uploaded_file($tmp, $ii);
	  
 	$sql="INSERT INTO `user`(`fname`, `lname`,`phnumber`, `email`,`dob`, `password`, `country`, `city`, `pincode`, `gen`,`profile`) VALUES ('$fname','$lname','$phone','$email','$dob','$password','$country','$city',' $code','$gender','$i')";
	 $result = $con->query($sql);
	if($result>0)
	{
		header("Location:pages-register.php");
	}
	else
	{
		echo "Someting want wrong";
	}
}

if (isset($_POST['changed'])) {
		$id=$_SESSION['uid'];
		 $pass=$_POST['old'];
		$new=$_POST['new'];
		$news=$_POST['news'];
		 $sql="SELECT * FROM `user` WHERE user_id='$id'";
		$res=$con->query($sql);
	    $re= mysqli_fetch_assoc($res);
	    $read= $re['password'];
		 if($pass==$read){
		 	if ($new===$news) {
		 		$sqls="UPDATE `user` SET `password` = '$new' WHERE `user`.`user_id` = '$id'; ";
		 		$res=$con->query($sqls);
		 		/*echo $ress=mysqli_fetch_assoc($res);*/
		 		header("location: dashboard-settings.php");
		 	} else {
		 		echo "not match the new and repeat new password";
		 	}
			
	     }

		 else
		 {
			echo "current password is wrong";
		 }


	}
		if (isset($_GET['did'])) {
         $id=$_GET['did'];
         $sql="DELETE FROM `employee` WHERE `e_id`=$id";
       $res=$con->query($sql);
       header("location: listgig.php");
}

 if (isset($_GET['id'])) {
  
     $title=$_POST['title'];
     $email=$_POST['email'];
	 $description=$_POST['description'];
	 $sal=$_POST['sal'];
	 $type=$_POST['type'];
     $cate=$_POST['cate'];
	 $address=$_POST['address'];
	 $search=$_POST['search'];
	 $i=$_FILES['pic']['name'];
	 $ii='upload/'.$i;
	 $tmp=$_FILES['pic']['tmp_name'];
	  
 	$sql="UPDATE `employee` SET `email`='$email',`address`='$address',`gig_title`='$title',`cat_id`=' $cate',`description`='$description',`type`=' $typ',`search`='$search',`price_hour`='$sal' WHERE `e_id`=''"; 
      echo $sql;
	 $result = $con->query($sql);
	if($result>0)
	{
		header("Location:listgig.php");
	}
	else
	{
		echo "Someting want wrong";
	}

}
if (isset($_POST['editgig'])) {
     
     $gid=$_POST['id'];
     $title=$_POST['title'];
     $email=$_POST['email'];
	 $description=$_POST['description'];
	 $sal=$_POST['sal'];
	 $type=$_POST['type'];
     $cate=$_POST['cate'];
	 $address=$_POST['address'];
	 $search=$_POST['sear'];
	  
 	 $sql="UPDATE `employee` SET `email`='$email',`address`='$address',`gig_title`='$title',`cat_id`=' $cate',`description`='$description',`type`=' $type',`search`='$search',`price_hour`='$sal' WHERE `e_id`='$gid'"; 
     $result = $con->query($sql);
	if($result>0)
	{
		header("Location:listgig.php");
	}
	else
	{
		echo "Someting want wrong";
	}

}
if (isset($_POST['admin'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	if ($user==='admin'&& $pass==='admin') {
		$_SESSION['admin']=true;
		header("location:admin.php");
	}

	 else {
		header("location:loginadmin.php");
	} 


	if ($user==='rushi'&& $pass==='admin') 
	{
		$_SESSION['admin']=true;
		header("location:admin.php");
	}
	 else {
	
}
if ($user==='hardik'&& $pass==='admin') {
		$_SESSION['admin']=true;
		header("location:admin.php");
	} 

	else {
}
if ($user==='tejas'&& $pass==='admin') {
		$_SESSION['admin']=true;
		header("location:admin.php");
	} else {
}
}

if (isset($_POST['contact'])) {
     
     $name=$_POST['yname'];
    
     $email=$_POST['yemail'];

     $subject=$_POST['ysubject'];

     $msj=$_POST['comments'];

      $sql="INSERT INTO `contact`(`nae`, `email`, `subject`, `msj`) VALUES ('$name','$email',' $subject','$msj');"; 
     $result = $con->query($sql);
	if($result>0)
	{
		header("Location:pages-contact.php");
	}
	else
	{
		echo "Someting want wrong";
	}
}
?>