<?php
$conn = mysqli_connect("localhost","root","","guestbook");
$query = mysqli_query($conn, "SELECT * FROM user");

?>