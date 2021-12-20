<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view0</title>
    <style>
        table, tr, td, th
        {
            border: solid black 1px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th> id </th>
            <th> name </th>
            <th> link </th>
        </thead>
        <tbody>
            <?php
                $pol = new Mysqli('localhost', 'root', '', 'self_learning_system');
                $sql = "SELECT `id`, `name`, `link` FROM images";
                $wynik = $pol -> query($sql);
                while($w=$wynik->fetch_row())
                    echo "<tr> <td> $w[0] </td> <td> $w[1] </td> <td> $w[2] </td> </tr>";
                $pol->close();
            ?>
        </tbody>
    </table>
</body>
</html>