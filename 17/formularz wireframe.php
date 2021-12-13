<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylef.css">
    <title>Document</title>
</head>
<style>
    *{
    background-color: greenyellow;
    width: auto;
    height: auto;
}
    header {
    width: 100%;
    height: 200px;
    text-align: center;
    font-size: larger;
}
    .glowna{
    margin:0 0 auto; 
    text-align: center;
} 
    #przycisk{
    height: 50px;
    width: 150px;
    margin-top: 1%;
    background-color:orange;
    font-size: larger;
}
    #data{
    margin-right: 50px;
    font-size: larger;
}
    #godzina{
    margin-right: 50px;
    font-size: larger;
}
    h1{
    background-color: orange;
    height: auto;
}
    #stoliki{
    font-size: larger;
}
</style>
<body>
    <header>
        <h1>Reservation of tables in the cafe</h1>
    </header>
    <section class="glowna">
    <form method="POST">
        Data<input name="data"  type="text" id="data">
        Godzina<input name="godzina"  type="text" id="godzina">
        <select name="stolik">
                <option value="stolik1">stolik 1 osonbowy</option>
                <option value="stolik2">stolik 2 osonbowy</option>
                <option value="stolik3">stolik 3 osonbowy</option>
                <option value="stolik4">stolik 4 osonbowy</option>
                <option value="stolik5">stolik 5 osonbowy</option>
        </select><br>
        <input type="submit" value="zarezerwuj" id="przycisk"><br>
    </form>
    </section>
</body>
</html>