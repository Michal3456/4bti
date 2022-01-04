<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabelka</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>ID</th><th>Question</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $polaczenie = new Mysqli('localhost', 'root', '', 'projektpp');
        $sql = "SELECT * FROM question";
        $wynik=$polaczenie->query($sql);
        while ($w = $wynik->fetch_row()) {
            echo "<tr><td>$w[0]</td><td>$w[1]</td></tr>";
        }
       $polaczenie->close();
    
    ?> 
    </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $polaczenie = new Mysqli('localhost', 'root', '', 'projektpp');
            $sql = "SELECT * FROM answer";
            $wynik=$polaczenie->query($sql);
            while ($w = $wynik->fetch_row()) {
                echo "<tr><td class='klasa'>$w[0]</td><td>$w[1]</td></tr>";
            }
           $polaczenie->close();
            ?>
        </tbody>
    </table>
<button onclick="funkcja()">Zobacz ile rekordów</button>
            <script>
                function funkcja(){
                let u=document.getElementsByClassName("klasa").length;
                alert(u);
                }
            </script>
</body>
</html>