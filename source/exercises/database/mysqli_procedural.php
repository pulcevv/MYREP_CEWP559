<?php

$conn = mysqli_connect('mysql', 'root', 'root', 'CCE_PHPMySQL2');

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$result = mysqli_query($conn, 'SELECT ID, Name, Price FROM items');

if ($result) {
<<<<<<< HEAD
	while($row = mysqli_fetch_assoc($result)){
		echo $row['ID']. ' - ' . $row['Name'] . ' - ' . $row['Price'] . "<br>";
}
=======
    while($row = mysqli_fetch_assoc($result)) {
    	echo $row['ID']. ' - ' . $row['Name'] . '<br/>';	
    }
>>>>>>> 7e8e8dd50ef01e60c1233a41877a7bc29c2d4b01
}
mysqli_close($conn);