<?php
    session_start();
     include("connection.php");
     include("functions.php");

     if($_SERVER['REQUEST_METHOD']=="POST")
    {
      //SOMETHING WAS POST
      $UserId=$_POST['UserId'];
      $First=$_POST['First'];
      $Second=$_POST['Second'];
      $Password=$_POST['Password'];
      $email1=$_POST['Email'];
      $email=strval($email1);

      if(!empty($UserId)&& !empty($First)&& !empty($Second) && !empty($Password)
      ){
        //$Id = random_num(20);
        $query = "insert into users(UserId,First,Second,Password,Email) values ('$UserId','$First','$Second','$Password','$email1')";

        mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
      }

  ?>




<!DOCTYPE html>
<html>
<head>

  
  <title>Registration Form</title>
</head>
  <body>
    <style>
*{
  box-sizing: border-box;
  font-family:sans-serif;
  background-color: rgb(14, 31, 38);
  /* border: solid 5px rgb(195, 52, 102); */
}

.boxes{
  width:80%;
  padding: 12px;
  border: solid 5px white;
}

input{
  width: 70%;
  margin:2px;
  margin-left:25px;
  color: beige;
  font-size:18px;
}



.container{
  margin: 0 50px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  align-items:center;


}

label{
  color: azure;
}

.formtit{
  padding: 5px 0;
  margin-left:auto;
  margin-right:auto;
  color:white;
}
  



  button{
  color: rgb(195, 52, 102);
  padding: 7px;
  border: solid 5px #bcd2ba;
}

.Terms{
color: whitesmoke;
}

.login{
  color: white;
  border: 5px solid white;
  padding: 5px;
  display: inline-block;
}

a:active{
  background-color:wheat;
  font-style: italic;
}

a:visited{
  color:#abc;
}

a:link{
  color:black;
  background-color: lightblue;
  border:3px solid red;
  margin-top: 20px;
  padding: 10px;
   display:inline-block; 
  text-decoration: wavy;
}

</style>
      

    
    <div class="container">
    <div>
      <h1 class="formtit">Registration Form</h1>
      </div>
      
    <div>
    <form method="POST" >
      <div class="boxes">
        <label for="name">
          User Name
        </label>
        <input type="text" name="UserId" placeholder="User name"  required>
      </div>
      <div class="boxes">
      <label for="name">
        First Name
      </label>
      <input type="text" placeholder="First name" name="First"  required >
      </div>
      <div class="boxes">
      <label for="name">
        Second Name
        </label>
      <input type="text" placeholder="Second name" name="Second" required>
      
      </div>
    
    <div class="boxes">
      <label>
        Password
      </label>
        <input type="password" name="Password" placeholder="Password" required>
    </div>
    <div class="boxes">
        <label>
        Email
      </label>
        <input type="email" name="Email" placeholder="Email" required>
     </div>
    <button type="reset">Reset</button>
    <button type="submit">Register</button>
    </form>
</div>
<div>
      <p class="Terms">
    <a  href="login.php">Login
     </a>
        Already Registered ??  Login 
      </p>
    <p class="Terms"> By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
</div>
     </div>
     </html>
