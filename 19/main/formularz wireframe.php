<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <title>Dokument</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a:link{
    text-decoration: none;
    color: black;
}
a{
    color: black;
}
a:hover{
   
    padding: 2px;
    text-decoration: underline;
    text-decoration-color: lightcyan;
}
footer p{
    font-size: 110%;
    font-family:'Times New Roman', Times, serif;
    text-align: center;
}
.pracownik{
    height: 300px;
    width: 700px;
    background:lightcoral;
    border-radius: 50%;
    
}
.container{
    display: grid;
    height: 100vh;
    grid-template-columns: 0.5fr 1fr 1fr 1fr 2fr;
    grid-template-rows: 5% 30% auto 5%;
    grid-template-areas:
    "nav nav nav nav nav"
    "header header header header header"
    "main main main main main"
    " footer footer footer footer footer"; 
}
nav{
    background-color: #45d7ff;
    grid-area: nav;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas: 
    "strgl . navbar";
    font-family: 'PT Serif', serif;
    font-size: 22px;
    font-weight: 700;
}
.sekcja1{
    grid-area: sekcja1;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5vw;
    font-family: 'Lato', sans-serif;
}
header img{
    width: 100%;
    opacity: 0.89;
}
#strgl{
    grid-area: strgl;
    text-align: left;
    padding-left: 5px;
    padding-top: 5px;
}
#navbar{
    grid-area: navbar;
    padding-top: 5px;
}
#ee{
    text-align: center;
}
main{
    background-color: #45d7ff;;
    grid-area: main; 
    display: flex;
    justify-content: center;
    align-items:center;
}
.logowanie{
    margin-top: 20px;
    display: flex;
    color: white;
}
#przycisk{
    border: none;
    background-color: lightgreen;
    font-size: 120%;
    font-weight: 700;
}
input{
    height: 40px;
    width: 40vw;
    background-color: rgb(214, 245, 255);
    text-align: center;
    margin-bottom: 20px;
    color: black;
    border: 5px solid white;
    border-radius: 7px;
}

figure {
    border: thin #c0c0c0 solid;
    display: flex;
    flex-flow: column;
    margin: auto;
}
figcaption {
    background-color: #222;
    color: #fff;
    font: italic smaller sans-serif;
    text-align: center;
}

header{
    grid-area: header;
    background-image: url(./panorama3.jpg);
    background-size: cover;
    opacity: 0.95;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 3.5vw;
}
header h1{
    color: white;
}
footer{
    background-color: #98AFC7;
    grid-area: footer;
    display: flex;
    height: fit-content;
    padding: 20px;
    justify-content: center;
    align-items: center;
    padding-top:30px;
}
ul li{
    float: right;
    padding-right:1rem;
    list-style-type:none;
}
nav h1{
   text-align: center;
}
@media only screen and (max-width: 800px){
    
    header{
        grid-area: header;
        background-image: url(./panorama3.jpg);
        background-size: cover;
        opacity: 0.95;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 4vw;
    }
    nav{
        background-color: #45d7ff;
        grid-area: nav;
        display: grid;
        grid-template-columns: 1fr 0.3fr 1fr;
        grid-template-areas: 
        "strgl . navbar";
        font-family: 'PT Serif', serif;
        font-size: 18px;
        font-weight: 700;
    }
    input{
        height: 40px;
        width: 60vw;
        background-color: rgb(214, 245, 255);
        text-align: center; 
    }

}
@media only screen and (min-width: 1000px){
    input{
        height: 40px;
        width: 30vw;
        background-color: rgb(214, 245, 255);
        text-align: center;
    }
}
    main {
        padding-top: 30px;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }
    
    footer{
        background-color: #98AFC7;
    }
</style>
<body>
    <div class="container">
        <nav>
            <p id="strgl"><a href="index.html">Strona g????wna</a></p>
            <ul id="navbar">
                <li><a href="koniec.php">Ko??czenie czasu pracy</a></li>
            </ul>
        </nav>
        <header>
            <h1>Rozpocznij prac??</h1>
        </header>
        <main>
            <div class="logowanie">
                <form method="POST" action="logowanie2.php">
                    <input name="login" placeholder="Numer pracownika" id="idd1"><br>
                    <input name="haslo" placeholder="Has??o pracownika" type="password"><br>
                    <input type="submit" value="Zacznij prac??" id="przycisk"><br><br>
            </div>
        </main>
        <footer>
            <p>Strona stworzona przez Mateusz ??bikowski</p>
        </footer>
    </div>
</body>
</html>