<?php
session_start();
?>
<html>
<body>

Welcome <?php echo $_SESSION["name"] = $_POST["name"]; ?><br>
Your email address is: <?php echo $_SESSION["email"] = $_POST["email"]; ?><br>
Your gender is: <?php echo $_SESSION["gender"] = $_POST["gender"]; ?><br>
Your Dni/Nie is: <?php echo $_SESSION["dninie"] = $_POST["dninie"]; ?>
</body>
</html>