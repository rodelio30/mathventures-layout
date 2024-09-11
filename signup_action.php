<?php 
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name == ""){
    echo "Name is required";
} else if($email == "") {
    echo "Email is required";
} else if($password == "") {
    echo "Password is required";
} else {
    $rdb = new firebaseRDB($databaseURL);
    // $retrieve = $rdb->retrieve("/user", "email", "EQUAL", $email);
    $retrieve = $rdb->retrieve("/user-admin", "email", "EQUAL", $email);
    $data = json_decode($retrieve, 1);

    if(isset($data['email'])){
        echo "Email already used";
    } else {
        $insert = $rdb->insert("/user-admin",[
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);
        $result = json_decode($insert, 1);

        if(isset($result['name'])){
            echo "Signup Success, pleaselLogin";
            header('location: login.php');
        } else {
            echo "Signup Failed";
        }
        echo $insert;
    }
}