<?php
$server= "localhost";
$username="root";
$password="";
$db="school";

try{
    $conn = new PDO(
        "mysql:host=$server;dbname=$db",
        $username,
        $password
    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "connected successfuly";
}catch(PDOException $e){
    echo "connection error" . $e->getMessage();
}

$name="yasmina";
$info= 6759375;
$email='yasmina@test.com';
$pw="first";

$query ="INSERT INTO students (student_name, contact_info, Email, password)
VALUES ('$name', '$info', '$email', '$pw')";

$conn->exec($query);

echo "<br> Data inserted successfully";
?>