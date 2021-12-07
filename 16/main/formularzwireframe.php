<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
    <style>
        #container{
    width: 1200px;
    height: 500px;
    background-color: blueviolet;
    }
    #lewy{
        float: left;
    }
    #kupowanie{
        position: absolute;
        margin-left: 400px;
        margin-top: 100px;
        color: white;

    }
    footer{
        position: absolute;
        margin-left: 400px;
        margin-top: 390px;
        color: white;
        font-size: 200%;
    }
    </style>
</head>
<body>
    <section id="container">
        <section id="lewy">
            <select>
                <option>rocket:10000$</option>
                <option>astronaut suit:5000$</option>
                <option>satelite:1000$</option>
                <option>space food:50$</option>
            </select>
        </section>
        <section id="kupowanie">
            <form method="POST">
                select item:<input type="text" name="item"><br>
                <input type="submit" value="purchase">
            </form>
        </section>  
    </section>
</body>
</html>