<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="Validate.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row"><br>
            <label for="name">Nombre:</label>
            <input type="text" name="name">
        </div>
        <div class="row"><br>
            <label for="email">Email:</label>
            <input type="email"name="email">
        </div>

        <div class="row"><br>
            <label for="dninie">DNI/NIE:</label>
            <input type="dninie" placeholder="X12345678X-12345678X" name="dninie">
        </div>

        <div class="row"><br>
            <label>Género</label>
            <div>
                <label><input type="radio" name="gender" value="male"> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
                <label><input type="radio" name="gender" value="other"> Other</label>
            </div>
        </div>

        <div class="row"><br>
            <label>GRPD</label>
            <div>
                <label><input type="checkbox" name="grpd" value="grpd">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt incidunt nulla neque voluptate cupiditate totam?</label>
            </div>
        </div><hr>


        <input type="submit" value="Enviar">
    </form>
</body>

</html>