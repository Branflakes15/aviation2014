<?php
  //*** Start a session
  session_start();
  //*** Start the buffer
ob_start();
?>

<h2>Users</h2>

<?php
 //Flush buffer
 ob_flush();
?>