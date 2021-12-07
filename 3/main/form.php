<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Drukarki 3D</title>
    <style>
        #body{
            background-image: url("tlo.jpg");
        }
        #gora{
            text-align: center;
            font-family: Calibri;
            height: 80px;
            font-size: 25px;
        }
        #lewa{
            text-align: center;
            font-family: Calibri;
            height: 600px;
            width: 33%;
            font-size: 25px;
            float: left;
        }
        #srodek{
            text-align: center;
            font-family: Calibri;
            height: 600px;
            width: 33%;
            font-size: 25px;
            float: left;
        }
        #prawa{
            text-align: center;
            font-family: Calibri;
            height: 600px;
            width: 33%;
            font-size: 25px;
            float: left;
        }
        #wybor{
            width: 150px;
            height: 100px;
            text-align: center;
            font-size: 25px;
            border: solid;
        }
        #kolory{
            width: 250px;
            height: 100px;
            text-align: center;
            font-size: 25px;
            border: solid;
        }
        #przycisk{
            border: solid;
            width: 250px;
            height: 80px;
            font-size: 20px;
        }
        #stopka{
            height: 30px;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body id="body">
    <header id="gora">
        <h1>Drukarki 3D</h1>
    </header>
    <main>
        <form method="POST"></form>
        <section id="lewa">
            <h2>Wybierz rozmiar</h2><br><br>
            <input type="radio" id="male" name="wybor">Mały<br>
            <input type="radio" id="srednie" name="wybor">Średni<br>
            <input type="radio" id="duze" name="wybor">Duży<br><br><br><br><br><br>
            <input type="submit" value="Wyświetl rezultat" id="przycisk"><br><br>
        </section>
        <section id="srodek">
            <h2>Wybierz żądany produkt</h2><br><br>
            <select id="wybor">
                <option value="pies">PIES</option>
                <option value="kot">KOT</option>
                <option value="sowa">SOWA</option>
                <option value="mysz">MYSZ</option>
                <option value="zaba">ŻABA</option>
            </select>
        </section>
        <section id="prawa">
            <h2>Wybierz kolor</h2><br><br>
            <select id="kolory">
                <option value="kolorowe">KOLOROWE</option>
                <option value="niekolorowe">CZARNO-BIAŁE</option>
            </select>
        </section>
        </form>
    </main>
    <footer id="stopka">Strona stworzona przez: Macieja Grzywna</footer>
</body>
</html>
