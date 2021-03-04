<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if(empty ($_POST['fname']) || empty($_POST['lname'])||empty($_POST['gender'])||empty($_POST['email'])||empty($_POST['uname'])||empty($_POST['password'])||empty($_POST['recemail'])){
         	echo "<h2>Fill up the from properly</h2>";
         }
         else{
         	
	        $arr1 = array('firstname' =>$_POST['fname'], 'lastname' =>$_POST['lname'], 'gender' =>$_POST['gender'],          'email'=>$_POST['email'],'user'=>$_POST['uname'],'password'=>$_POST['password'],'Remail'=>$_POST['recemail']);
            $json_encoded_1 = json_encode($arr1);
            $f1 = fopen("Information.txt", "a");
            fwrite($f1, $json_encoded_1 . "\n");
            fclose($f1);

         }
		
	}
	
?>
<?php
header('Location: UserLogIn.php');
?>


</body>
</html>