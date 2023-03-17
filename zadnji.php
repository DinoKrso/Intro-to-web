<html>
<body>


<form method="post">
 Name: <input type="text" name="fname">
 Age : <input type="
 <input type="submit">
</form>

<form method="post">
 Age: <input type="text" name="fname">
 <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_REQUEST['fname'];
 if (empty($name)) {
   echo "Name is empty";
 } else {
   echo $name;
 }
}
?>


</body>
</html>