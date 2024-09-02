<?php 
function koneksi_database() {
    // Replace with your database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test"; 


    // Create connection
    $konek = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($konek->connect_error) {
        die("Connection failed: " . $konek->connect_error); 

    }
    else {
        echo "Database connection successful!";
    }
    return $konek;
}
?>
