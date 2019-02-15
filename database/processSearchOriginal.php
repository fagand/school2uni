<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "search";

try { 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully <br />";
}
catch (PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

try {
$query=$conn->prepare("INSERT INTO searches (search) VALUE (?)");

$query->bindParam(1, $searchInput);

$searchInput=$_POST['searchInput'];

$query->execute();
}
catch (PDOException $e)
{
    echo "Error in binding" . $e->getMessage();
}

$conn = null;

echo 'Hi '.$_POST['searchInput'].' ';
?>
