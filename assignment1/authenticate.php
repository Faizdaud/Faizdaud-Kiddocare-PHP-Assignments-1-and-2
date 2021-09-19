<?php

error_reporting(E_ALL); 
ini_set("display_errors", 1);


if (isset($_POST['username']) && isset($_POST['password'])){

    function validateData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validateData($_POST['username']);
    $password = validateData($_POST['password']);

    if (empty($username)) {
        header("Location: login.php?error=Username is required");
        exit();

    }else if(empty($password)) {
        header("Location: login.php?error=Password is required");
        exit();

    } else{
  
        $myFile = "users.txt";
        $contents = file_get_contents('./users.txt');
        $contents =  explode("\r\n",  $contents);
        
        foreach($contents as $values){
         $loginInfo = explode("|", $values);
            $usernameText = $loginInfo[0];
            $passwordText = $loginInfo[1];

        
            if($username === $usernameText && $password === $passwordText){
                session_start(); 
                $_SESSION["username"] = $username;
                header('Location: logout.php');
                exit();
            }
            else{
                header("Location: login.php?error=Incorrect Username or Password '$usernameText' and '$passwordText'");
                exit();
                }
        }

    } 

}else {
   header("Location: index.php");
    exit();

    }






