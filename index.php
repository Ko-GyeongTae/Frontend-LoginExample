<?php
  
  if(isset($_POST['uid'])&&isset($_POST['pwd'])){
    $username=$_POST['uid'];
    $userpw=$_POST['pwd'];
    $conn= mysqli_connect('localhost', 'root', '1234', 'dsm');

    $sql="SELECT * FROM blogin where login_id='$username'&&login_pw='$userpw'";
    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
      echo "username = $username";
      echo "</br>".$result['created'];
      echo "</br>success to login!";
    }
    else{
      echo "login fail";
    }
  }
?>
<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="utf-8">
    <title>PHP | LOGIN</title>
  </head>
  <body>
    <form  method="post">
      Login</br>
      id : <input type="text" name="uid" /></br>
      Password : <input type="password" name="pwd" /></br>
      <input type="submit" value="Send with POST Method" />
    </form>
  </body>
</html>