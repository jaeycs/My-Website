<?php

    $con = mysqli_connect('localhost', 'root', '', 'mydb');

    if (mysqli_connect_errno()) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    if (!mysqli_select_db($con, 'mydb')) {
        die('Database not selected');
    }

    $sql = "INSERT INTO reservation (reservationDate, reservationTime, firstName, lastName, phoneNumber, customerEmail, numPeople) VALUES ('" 
    . $_POST["date"] . "', '" 
    . $_POST["time"] . "', '"
    . $_POST["first_name"] . "', '"
    . $_POST["last_name"] . "', '"
    . $_POST["phone_number"] . "', '"
    . $_POST["email_address"] . "', '"
    . $_POST["number_of_people"] 
    . "')";

    if (mysqli_query($con, $sql)) {
        echo "Data inserted";
    } else {
        echo "Data not inserted. Error: " . $sql . "" . mysqli_error($con);
    }

    echo "Reservation made successfully!";
?>