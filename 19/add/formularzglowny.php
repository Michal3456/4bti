<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument</title>
</head>
<body>
    <div class="container">

        <header>
            <h1>Rozpocznij pracę</h1>
        </header>
        <main>
            <div class="logowanie">
                <form method="POST">
                    <input name="login" placeholder="Numer pracownika" id="idd1"><br>
                    <input name="haslo" placeholder="Hasło pracownika" type="password"><br>
                    <input type="submit" value="Zacznij pracę" id="przycisk"><br><br>
            </div>
<?php
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $dzien = date("d/m/Y");
            $polaczenie = new Mysqli('localhost', 'root', '', 'praca2');
            $sql = "SELECT * FROM users WHERE nazwa LIKE '$login' AND haslo LIKE '$haslo'";
            $sql2 = "SELECT user_id FROM users WHERE nazwa LIKE '$login'";
            $sql3="SELECT * FROM czas WHERE dzien LIKE '$dzien' AND user_id LIKE '$login'";
           $wynik3=$polaczenie->query($sql3);
          $ile=$wynik3->num_rows;
          $sqlsprawdzanie= "SELECT user_id FROM users WHERE user_id LIKE '$login'";
          $wynik5=$polaczenie->query($sqlsprawdzanie);
          $w5=$wynik5->fetch_row();
          if(is_null($w5))
          $hm='tak';
          else$hm='nie';
          $sqlhaslo="SELECT haslo FROM users WHERE user_id LIKE '$login'";
          $wynikhaslo=$polaczenie->query($sqlhaslo);
          $whaslo=$wynikhaslo->fetch_row();
          $wh=$whaslo[0];
            if($ile==0 && $hm!='tak' && $haslo==$wh){
            $wynik = $polaczenie->query($sql);
            $wynik2 = $polaczenie->query($sql2);
            while ($w = $wynik2->fetch_row())
                $datastart = date("H:i:s");
               $sql3="INSERT INTO `czas` (`ID`, `user_id`, `dzien`, `start`, `stop`, `razem`) VALUES (NULL, '$login', '$dzien', '$datastart', '', '')";
             $polaczenie->query($sql3);
             echo"<h2> Pomyślnie dodano rozpoczęcie czasu pracy!</h2><br>";
           }
           else{
             $czas=2;
           echo"<h2>Już dziś się logowałeś lub pracownik nie istnieje!</h2><br>";
           }
            $polaczenie->close();
            ?>
        </main>
        <footer>
        <p>System rejestracji czasu pracy stworzony przez Mateusza Żbikowskiego</p>
        </footer>
    </div>
</body>

</html>