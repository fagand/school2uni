<?php
define("DB_USER", "root");
define("DB_PASS", "root");
$servername = "localhost";
$dbname     = "db_search";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully <br />";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$query = $conn->prepare("SELECT * FROM searches");
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

//foreach ($results as $row) {
//         echo $row['search'] . "<br />";
//    echo "<hr />";
//}

$dataJSON = json_encode($results);
//echo $dataJSON;

//Close database connection
$conn = null;
// End of PHP
?>