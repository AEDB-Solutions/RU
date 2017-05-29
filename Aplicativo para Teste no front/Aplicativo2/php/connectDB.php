<?php
class Connect {
    private $servername = "localhost";
    private $username = "root";
    private $passcode = "root";
    public $dbname = "my_first_db";
    public $conn;
    // Create connection
    public function Connect(){
    	$conn = mysqli_connect($servername, $username, $passcode, $dbname);
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
        session_start();
	}
}