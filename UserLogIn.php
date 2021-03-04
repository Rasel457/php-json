<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In Form</title>
</head>

<body>
   
  <?php
  $user=$password="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if(empty($_POST['uname'])||empty($_POST['password'])){
          echo "<h2>Fill up the from properly</h2>";
         }
         else{
          $user=trim($_POST['uname']);
          $password=trim($_POST['password']);
          $f2 = fopen("Information.txt", "r");
          $read = fread($f2, filesize("Information.txt"));
          $json_decoded = json_decode($read, true);
          //$json_decoded_by_newline_delimeter = explode("\n", $json_decoded);

          
      
          

        //for($i = 0; $i < count($json_decoded_by_newline_delimeter); $i++) {

          if($json_decoded['user']=$user && $json_decoded['password']==$password)
          {
            echo "You are login as :" .$_POST['uname']."<br>";
            $_SESSION['name']=$_POST['uname'];
            $_SESSION['pas']=$_POST['password'];
            $f=fopen("Information.txt", "r");
            $data=fread($f,filesize("Information.txt"));
            $data_filter=explode("\n",$data);


            $_SESSION['fname']=$json_decoded['firstname'];
            $_SESSION['lname']=$json_decoded['lastname'];
            $_SESSION['email']=$json_decoded['email'];
            echo "User Name: ". $_SESSION['name']."<br>";
            echo "Password: ". $_SESSION['pas']."<br>";
            echo "First Name: ". $_SESSION['fname']."<br>";
            echo "Last Name: ". $_SESSION['lname']."<br>";
            echo "Email: " .$_SESSION['email']."<br>";
            echo "<a href='UserLogout.php'>Logout</a>";

          }
          else
          {
            echo "provide correct user name and password";

          }
        }
           
        
     
       
  }?>
  
  
  


	<h2>Login Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	 <div>
    <label for="uname"><b>Username</b></label><br>	
    <input type="text" placeholder="Enter Username" name="uname" >
    <br><br>

    <label for="psw"><b>Password </b></label><br>	
    <input type="password" placeholder="Enter Password" name="password">
    <br><br>
        
    <button type="submit">Login</button>
    <br>
    
  </div>

</form>

</body>
</html>