<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
            tabele tr,th,td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
</head>
<body>
            <table>
                <tr>
                    <th>Lp.</th>
                    <th>Question</th>
                </tr>
                <?php
                    $pol2 = new mysqli('localhost','root','','projektpp');
                    $sql2 ="SELECT ID,Question FROM Question";
                    $wynik2=$pol2->query($sql2);
                    while($w2=$wynik2->fetch_row()){
                        echo"<tr><td>$w2[0]</td><td>$w2[1]</td><tr>";
                    }
                    $pol2->close();
                ?>
            </table>

            <table>
                <tr>
                    <th>Lp.</th>
                    <th>Answer</th>
                </tr>
                <?php
                    $pol2 = new mysqli('localhost','root','','projektpp');
                    $sql2 ="SELECT ID,Answer FROM Answer";
                    $wynik2=$pol2->query($sql2);
                    while($w2=$wynik2->fetch_row()){
                        echo"<tr><td>$w2[0]</td><td>$w2[1]</td><tr>";
                    }
                    $pol2->close();
                ?>
            </table>
</body>
</html>
