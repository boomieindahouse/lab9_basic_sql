<?php
require("conDB_64172310345-0.php");

$errors = array();

$pet_id = $_POST['pet_id'];
$pet_name = $_POST['pet_name'];
$pet_weight = $_POST['pet_weight'];
$pet_age = $_POST['pet_age'];
$pet_type = $_POST['pet_type'];
$own_id = $_POST['own_id'];

$chack_sql = "SELECT * FROM mypet WHERE pet_id = '$pet_id' ";
$query = mysqli_query($conn, $chack_sql);
$result = mysqli_fetch_assoc($query);

if ($result) {
    if ($result['pet_id'] === $pet_id) {
        array_push($errors, "*รหัสซ้ำ*");
    }
}

if (count($errors) == 0) {
    $sql = "INSERT INTO mypet(pet_id,pet_name,pet_weight,pet_age,pet_type,own_id) 
        VALUES ('$pet_id','$pet_name','$pet_weight','$pet_age','$pet_type','$own_id')";
    $query = mysqli_query($conn, $sql);

    echo "<script> alert('เพิ่มข้อูลเเล้วจ้าา'); </script>";
    echo "<script> window.location='showinsert.php'; </script>";
} else {
    array_push($errors, "*รหัสซ้ำ*");
    $_SESSION['error_petid'] = "*รหัสซ้ำ*";
    echo "<script> alert('เพิ่มบ่ด้ายยเด้อ'); </script>";
    header('location:shownotinsert.php');
}

mysqli_close($conn);
