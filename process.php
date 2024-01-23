<?php

$servername = "localhost";
$username = "";
$password= "";
$dbname = "trainee01";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $contact_no = $_POST["contact_no"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $sql = "insert into register(name, email, contact_no, dob, gender, address) values ('$fname','$email','$contact_no','$dob','$gender','$address')";

    if($conn -> query($sql) === TRUE){
        echo "Registration successful!";
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}

$conn -> close();

?>