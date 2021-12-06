<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurier</title>
    <style>
        body{
    background-color: rgb(165, 139, 139);
    }
    #container{
        width: 1200px;
        height: 650px;
        background-color: rgb(255, 68, 0);
        margin: auto;
        border-radius: 5%;
    }
    header
    {
        float: left;
        width: 100%;
        height: 200px;
    }
    #zd{
        float: left;
        width: 300px;
        background-color: gray;
        height: 200px;
    }
    #logo{
        float: left;
        color: white;
        text-align: center;
        line-height: 200px;
        width: 900px;
        font-size: 250%;
    }
    nav{
        width: 300px;
        font-size: 150%;
        float: left;
        background-color: gray;
        height: 450px;
        border-bottom-left-radius:5% ;
    }
    main{
        float: left;
        text-align: center;
        width: 900px;
    }
    footer{
        text-align: center;
        color: white;
        font-size: 250%;
    }
    #sm{
        width: 500px;
        height: 200px;
    }
    a{
        text-decoration: none;
        color: white;
        padding: 30px;
    }
a:hover{
    cursor: pointer;
}
    </style>
</head>
<body>
    <section id="container">
        <header>
            <section id="zd"><img src="kurier.jfif" alt="kurier"></section>
            <section id="logo">Przesyłki kurierskie na terenie całego kraju!</section>
        </header>
        <nav>
            <a href="index2.php">sledź swoją paczkę</a><br><br>
            <a href="index3.php">nadaj paczkę</a><br><br>
            <a href="index4.php">przekieruj paczkę</a><br><br>
            <a href="index5.php">anuluj zamówienie</a><br><br>
        </nav>
        <main>
            <img src="samochod.jfif" id="sm">
        </main>
        <footer>
            <a>Nadawaj przesyłki już od 4,90zł</a><br>
            <input type="submit" name="klikk" value="Sprawdz">
        </footer>
    </section>
    
</body>
</html>