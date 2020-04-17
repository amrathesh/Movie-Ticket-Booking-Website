<html>
<head>
<link rel="stylesheet" href="format.css">
</head>


<?php
$ticketid = rand(456789,985666);
$movie = $_POST['movie'];
$Time = $_POST['time'];
$noticket = $_POST['ticket'];
$theatre =$_POST['theatre'];

echo '<div class="blockticket">';
echo "<hr />";
echo "<hr />";
echo "<hr />";
echo "<pre>"."                  **TICKET**"."<br>"."</pre>";
echo "<pre>"." Ticket ID    :#"."$ticketid"."</pre>";
echo "<pre>"." Movie Name   :"."$movie"."</pre>";
echo "<pre>"." Show Time    :"."$Time"."</pre>";
echo "<pre>"." Theatre Name :"."$theatre"."</pre>";
echo "<pre>"." No of Tickets:"."$noticket"."</pre>";
echo "<hr />";
echo "<hr />";
echo '</div>';

?>
<body style="background-image: url('ticketback.jpg');">

</body>
