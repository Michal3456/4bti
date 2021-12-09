<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotobudka</title>
    <link rel="stylesheet" href="styl23.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="container">
<header>
      <a href="index.php"> <section class="logo"><h1 id="napis">Foto<span id="budka">Budka</span></h1></section></a>
       <nav>
           <a class="link" href="galeria.php">Galeria</a>
           <a class="link" href="kontakt.php">Kontakt</a>
       </nav>
   </header>
   <main class="glowny">
        <h2 class="metoda">Podaj swoje imię i nazwisko:</h2>
        <form action="" method="post">
            <div class="wbr">
            Imie<br><input type="text" name="imie"><br>
            Nazwisko<br><input  type="text" name="nazwisko"><br>

            </div>
            <input class="sub" name="przycisk" type="submit" value="Zatwierdź">
        </form>
    <?php
        
        if(isset($_POST["imie"] )&& isset($_POST["nazwisko"])){
            if(!empty($_POST["imie"])&&!empty($_POST["nazwisko"])){
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];

                $con = new mysqli('localhost','root','','fotobudka');
                $sql = "SELECT data, link FROM photos WHERE imie LIKE '$imie' AND nazwisko LIKE '$nazwisko'";
                $wynik = $con -> query($sql);
                echo "<h1>Dla imienia <span id='im'>$imie</span> i nazwiska <span id='im'>$nazwisko</span> są dostępne następujące linki do galerii twoich zdjęć:</h1>";
                while($w = $wynik->fetch_row()){
                    
                    echo "<h2>$w[0] <a href=\"{$w[1]}\">Kliknij</a></h2>";
                    
                }
            
                $con->close();
    }
    }
    
    ?>

   </main>
   <footer class="stopka">
       <h3>Kontakt</h3>
       <h2>Numer Telefonu: 333 333 333</h2>
       <h2>Adres: HHGGFF 22</h2>
       <h1>Autor Strony: Jakub Szarafiński</h1>
   </footer>
</div>
</body>
</html>
