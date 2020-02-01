<?php

$nameErr = $emailErr  = "";
$email  = $_POST["email"];
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
function test_input($data) {

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<html>
<body>

<form method="post" action="">
Name: <input type="text" value="<?=$_POST["name"]?>" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" value="<?=$_POST["email"]?>" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>