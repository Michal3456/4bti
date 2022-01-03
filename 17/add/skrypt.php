<?php		
        if(isset($_POST['bookit']))
        {
        	$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
            $typ_stolika = $_POST['typ_stolika'];
            $wielkosc = $_POST['wielkosc'];
			$pol = new Mysqli('localhost','root','','reservation');
            $sql = "INSERT INTO rezerwujacy (imie, nazwisko) values('$imie', '$nazwisko')"; 
            $sql = "INSERT INTO stoliki (typ_stolika, wielkosc) values('$typ_stolika', '$wielkosc')"; 
           	$pol -> query($sql);
            $pol -> close();
?>