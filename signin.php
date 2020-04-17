<html>
<head>
<link rel="stylesheet" href="format.css">
</head>

<?php

$username=$_POST['username'];
$password=$_POST['password'];

$a = strval($username); 
$b = '.txt'; 
$filename = $a.$b; 

//validate

$flag = file_exists("$filename");

if($flag)
{
    //user present check for password
    $myfile = fopen("$filename", "r") ;
    $userpwd = fscanf($myfile,"%s");
    fclose($myfile);

    $pwd = implode($userpwd);  //bcoz fscan return array
    $isequal = strcmp($pwd,$password);

    if($isequal == 0)
    {
        sleep(2);
        header("Location: index.php?message=1");
    }
    else
    {
    sleep(2);
    header("Location: sign_in.php?message=2");
    }
    
}
else
{
    //User not found redirect to sign in
    sleep(2);
    header("Location: sign_in.php?message=1");
}


?>
</html>