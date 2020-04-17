<!DOCTYPE html>
<html>
<head>
    <title>main content</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="format.css">

    
    
    <style>
              
        h1 {
          color: rgb(228, 17, 17);
          text-align: center;
        }
        h3{color: rgb(228, 17, 17);
          text-align: center;}
        p {
          font-family: verdana;
          font-size: 20px;
        }
        .header {
      background-color:rgb(164, 243, 239);
      padding: 20px;
      text-align: center;
      
    }
    </style>

<script type="text/javascript">
  function check_for_blank()
  {
  var flag=0;
  element=document.getElementsByClassName("mnd");
  for(var i=0;i<element.length;i++)
  {
      if(element[i].value=="")
      {
          flag=1;
          break;
      }
  }
 
  if(flag==1)
  {
      alert("Please Enter Username and password");
      return false;
  }
  else
  return true;
  }
 </script>
    
</head>

<?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    $whichmessage =intval($message);
    if($whichmessage == 1)
    {
    echo '<div class = error >';
    echo "<h3>"."<font color ='white'>"."No user found ! Please try with valid username and password."."</font"."<br>";
    echo "</h3>";
    echo '</div>';
    }

    if($whichmessage == 2)
    {
    echo '<div class = error >';
    echo "<h3>"."<font color ='white'>"."Password Entered is Invalid ! Try Again"."</font"."<br>";
    echo "</h3>";
    echo '</div>';
    }

    }
?>

<body>
  <div class="header">
   <h1>Welcome to BuyNow </h1>
   <h3>Please login or signUp to access further</h3>
   <img title ="BuyNow Logo" STYLE=" position:absolute; TOP:20px; LEFT:45px; WIDTH:5cm; HEIGHT:5cm ;" src="logo.png" >  
  </div> 


   <div class="w3-container w3-blue">
    <h2>Sign in </h2>
  </div>
  
  <form  action="signin.php" method="POST" class="w3-container" onsubmit="return check_for_blank()">
    <p>
    <label>Username :</label>
    <input class="mnd" type="text" name= "username" placeholder="Enter Username"></p>
<p>
    <label>Password :</label>
    <input class="mnd" type="password" id="password " name="password" placeholder="Password"></p>
    
    <p>
      <button class="button2 amr-input-1" type="submit" value="Submit">Login</button>
      <button class="button2 amr-input-1" type="reset" value="reset">Clear</button>
    </p>

  </form>

</body>
</html>