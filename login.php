<?php


session_start();

     include("connection.php");
	   include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$UserId = $_POST['UserId'];
		$Password = $_POST['Password'];
    

		if(!empty($UserId) && !empty($Password))
		{

			//read from database
			$query = "select * from users where UserId='$UserId' limit 1";
			$result = mysqli_query($con, $query);

				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $Password)
					

						$_SESSION['UserId']= $user_data['UserId'];
						header("Location:ToDo.php");
						die;
					}
				}
			}
    	echo "wrong username or password!";

   

  

   
	    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    <h1 class="formtit">Login Form</h1>
</div>
      <div>
    <form  method="post">
      <div class="boxes">
        <label for="UserId">
          User Name
        </label> 
        <input type="text" name="UserId" placeholder="user name" required>
      </div>
      
    <div class="boxes">
      <label>
        Password
      </label>
        <input type="password" name="Password" placeholder="Password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      
    </div>
    <button type="reset">Reset</button>
    <button type="submit">Login</button>
</div>
    <p class="Terms">Haven"t Created an Account Yet Register First
    <a href="Registration.php">
    Register
     </a>
</p>
      </form>
     </div>
</body>
</html>
