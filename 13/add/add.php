<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Pytanie:
        <input type="text" name="pyt">
        Odpowiedz:
        <input type="text" name="odp">
        <input type="submit" name="sub"> 
    </form>

    <?php
        if(isset($_POST['sub'])){
            if(empty($_POST['pyt'])&&empty($_POST['odp'])) {
                echo"uzupelnij dane";
            }
            else{

                $pyt = $_POST['pyt'];
                $odp = $_POST['odp'];
                $pol = new mysqli('localhost','root','','projektpp');
                $sql = "INSERT INTO `answer`(`ID`, `Answer`) VALUES (NULL,'$odp')";
                $sql2 = "INSERT INTO `question`(`ID`, `Question`) VALUES (NULL,'$pyt')";
                $pol -> query($sql);
                $pol -> query($sql2);
                echo"dodano";
                $pol->close();
            }
        }
    ?>

</body>
</html>
