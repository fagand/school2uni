<?php 

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "search");

$servername = "localhost";
$username = "root";
$password="root";
$dbname="db_search";

try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER,DB_PASS); 
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      echo "Connected successfully <br/>"; 
      }
      catch(PDOException $e)
      {
            echo "Connection failed: " . $e->getMessage(); 
      } 
$query=$conn->prepare("CREATE DATABASE db_search"); 
      $query->execute();

$conn = null; 
?>
