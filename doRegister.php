<html>
    <head>
        <meta charset="UTF-8">
        <title>Processing</title>
    </head>
    <body>
        <?php
        $name = $_POST["txtName"];
        $course = $_POST["cbCourse"];
        $birthday = $_POST["birthday"];
        if(isset($_POST["check_Male"])) { $gender = "Male"; } 
        if(isset($_POST["check_Female"])) { $gender = "Female"; } 
        $fav = $_POST["fav"];
        ?>
        <h2>
            Thank you <?php echo $name ?> for registering <?php echo $course ?> </br>
            Your birthday: <?php echo $birthday ?></br>
            Gender: <?php echo $gender ?></br>
            Favorite: <?php echo $fav ?>
        </h2>
        <a href="Register.php">BACK</a>
    </body>
</html>