<?php
		if(isset($_POST['wyślij']))
        {
        	$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
            $room = $_POST['room'];
            $date_book = $_POST['date_booking'];

			$pol = new Mysqli('localhost','root','','reservation');
            
            $sql = "INSERT INTO reservation1 (first_name, last_name, room, date_booking) values('$first_name', '$last_name', '$room', '$date_book')";
            
           	$pol -> query($sql);
            
            $pol -> close();

?>
