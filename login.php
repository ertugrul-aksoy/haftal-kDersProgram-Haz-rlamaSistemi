<?php
/**
 * Created by PhpStorm.
 * User: Ertugrul
 * Date: 13.11.2018
 * Time: 17:52
 */

error_reporting(0);
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db3";


$conn = new mysqli($servername,$username,$password,$dbname);
$new = mysqli_set_charset($conn,"utf-8");
if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);

}

if($_POST){
    $ad = $_POST["kullanici_adi"];
    $pass = $_POST["sifre"];

    $giris = "select * from users where user_name = '$ad' and user_pass = '$pass'";
    $getir = $conn -> query($giris);
    if($getir->num_rows>0){
        while ($row = $getir->fetch_assoc()){
            $_SESSION ["ID"] = $row["user_id"];
            header("location:sayfa1.php");
        }
    }

}


?>