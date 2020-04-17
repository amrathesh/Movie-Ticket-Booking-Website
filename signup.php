<html>
<head>
<link rel="stylesheet" href="format.css">
</head>

<?php

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];


$a = strval($username); 
$b = '.txt'; 
$filename = $a.$b; 



$flag = file_exists("$filename");



if(!$flag)
{
//save a txt file in phone.txt name
$myfile = fopen("$filename", "w") ;
fwrite($myfile,"$password");
fclose($myfile);


echo '<body>';
echo '<div class="block">';
echo "<h3>"."Account Created Successfully "."<br>";
echo "Please sign in to enjoy our services"."<br>";
echo '<a href="sign_in.php"><button type="submit" value="submit">Sign in Now</button></a>'."</h3>";
echo '</div>';
echo '</body>';
}
else
{
  //error message
echo '<body>';
echo '<div class="block">';
echo "<h3>"."Phone or Email already linked with other account"."<br>";
echo "Try Again with other or Sign in"."<br>";
echo '<a href="register.html"><button type="submit" value="submit">Try Again</button></a>';
echo '<a href="sign_in.php"><button type="submit" value="submit">Sign in</button></a>'."</h3>";
echo '</div>';
echo '</body>';
}
?>
</html>