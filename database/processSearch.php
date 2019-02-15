<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_search";

try { 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

try {
$query=$conn->prepare("INSERT INTO searches (search) VALUE (?)");

$query->bindParam(1, $searchInput);

$searchInput=$_POST['search'];

$query->execute();
    echo "DATA Update";
}
catch (PDOException $e)
{
    echo "Error in binding" . $e->getMessage();
}

$conn = null;

?>
