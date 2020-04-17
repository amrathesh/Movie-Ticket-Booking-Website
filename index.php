<!DOCTYPE html>
<html lang="en">
<head>
<title>BuyNow Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="format.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background:#f1f1f1;
}

/* Style the header */
.header {
  background-color: yellow;
  padding: 20px;
  text-align: center;
  
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
/* Add a card effect for articles */
.card {
  background-color: rgb(230, 129, 129);
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the footer */
.footer {
  padding: 20px;
  text-align: center;
  background:yellowgreen;
  margin-top: 20px;
}
.mySlides {display:none;}

table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
  
}
table#t01 {
  width: 100%;    
  background-color: #7baee7;
  
  
}


div.gallery {
  margin: 2px;
  border: 1px solid #ccc;
  float:left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 100%;
  height: auto;
}
div.desc {
  padding: 15px;
  text-align: center;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

</style>
</head>

<?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    $whichmessage =intval($message);
    if($whichmessage == 1)
    echo '<div class = success >';
    echo "<h3>"."<font color ='white'>"."Signed in Successfully!"."</font"."<br>";
    echo "</h3>";
    echo '</div>';
    }
?>

<body>

<div class="header">
  <h1>Welcome to BuyNow.com </h1>
  <h2>Its never too late to buy a ticket</h2>

<img title ="BuyNow Logo" STYLE="position:absolute; TOP:20px; LEFT:45px; WIDTH:4cm; HEIGHT:4cm" src="logo.png" >
</div>
<div class="topnav">
 <a href="https://www.imdb.com/">IMDB</a>
  <a href="#genre">Genres  </a>
  <a href="buyit.html">Buy a ticket</a>
  
  <a href="register.html"style="float:right" >Sign Up</a>
  <a href="sign_in.php" style="float:right" >Login</a>
  <a href="#help"style="float:right">Help</a>
</div>

<h2 class="w3-center">Top class Movie Suggestions</h2>

<div class="w3-content w3-section" style="max-width:300px">
  <a href="buyit.html"><img class="mySlides" title="movie name:83" src="mov83.jpg" style="width:100% "></a>
  <a href="buyit.html"><img class="mySlides" title="movie name:silence" src="movs.jpg" style="width:100%"></a>
  <a href="buyit.html"><img class="mySlides" title="movie name:Satyamev Jayate 2"src="movsmj2.jpg" style="width:100%"></a>
</div>



<script>
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
  }
</script>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Namaste!</h2>
      <div style="height:300px;">
        <img title="intro image"src="logo.png" style="widows: 100px;height: 200px;"></div>
      <h3>Thank You For Visiting Us</h3>
      <p>Note: This website was formed for selfstudy presentation purpose only and has not yet been available for the market usage. 

      </p>
    </div>
    <div class="card" id="genre">
      <h2>Genres Available </h2>
      <h5>Updated as on date 23-03-2020</h5>
      <div class="fakeimg" style="height:300px; " >
        <table id="t01" style="left:14cm;width:400px;position:absolute;color: rgb(221, 59, 37) ">
          <tr style="color: rgb(21, 4, 27)">
          <th><b><u>Genre</u></b></th>
          <th><b><u>Movie</u></b></th>
          
          </tr>
          <tr>
          <td>Biography</td>
          <td>83</td>
          
          </tr>
          <tr>
          <td>Thriller</td>
          <td>Silence</td>
         
          </tr>
          <tr>
          <td>Action Revenge</td>
          <td>Satya Meva Jayate 2 </td>
          
          </tr>
         
        </table>




      </div>
      <p></p>
    </div>
  </div>
  
    
    <div class="card" style="height:400px" >
      <h3>Founders</h3>
      <div class="gallery"><p>
       <img alt="Amrathesh"src= "amratesh.jpeg" style="width: 177px;height: 175px ;">
       <div class="desc">Amrathesh<br>
        Managing Director
       </div>
      </p></div>
      <div class="gallery"><p>
        <img alt="Deekshith"src= "Dikki.jpeg" style="width: 177px;height: 175px;">
        <div class="desc">Deekshith Naik<br>
          CEO
         </div>
      </p></div>
      <div class="gallery"><p>
        <img alt="Karthik"src= "karthik.jpeg" style="width: 177px;height: 175px;">
        <div class="desc">Karthik<br>
          COO
         </div>
      </p></div>
      <div class="gallery"><p>
        <img alt="Rahul"src= "rahul.jpeg" style="width: 177px;height: 175px; ">
        <div class="desc">Rahul C<br>
          CFO
         </div>
      </p></div>
    </div>

  <div class="rightcolumn">
    <div class="card" style="height: 450px;">
      <h2>About Us</h2>
      <div class="fakeimg" style="height:200px; " >
      <p>We are the students from <br>
         6<sup>th </sup> semester <br>
         Electronics and Communication Department<br>
         RV College of Engineering,Bengaluru</p></div>
         <br>
         
         <a href="https://www.rvce.edu.in"><img src="rvce.png"  style="widows: 150px;height: 130px;left:75px;position: relative; "></a>
    </div>

    <div class="card">
      <h3>Follow Us here:</h3>
      
      <hr>
      <p>
        <ul>
          <li><a href="htttp:/www.twitter.com">Twitter</a></li>
          <li><a href="htttp:/www.facebook.com">Facebook</a></li>
          <li><a href="htttp:/www.linkedin.com">LinkedIn</a></li>
          
        </ul>
      </p>
    </div>
  </div>
</div>




<div class="footer" id="help">
  <p>Connect with us through<br>
    
    Facebook:
    <a href="http://www.google.com">Facebook</a><br><hr>
    For Help and feedback<br>
     Mail us @: 
    <a href="mailto:someone@example.com?Subject=Hello%20again" >customercare@BuyNow.com</a>

    <hr style="color: red;">
    Privacy Note:
    By using www.BuyNow.com(our website), you are fully accepting the Privacy Policy available at
    https://BuyNow.com/privacy governing your access to BuyNow and provision of services by 
    BuyNow to you. If you do not accept terms mentioned in the Privacy Policy, 
    you must not share any of your personal information and immediately exit BuyNow.
  
  </p>
</div>
  






</body>
</html>

