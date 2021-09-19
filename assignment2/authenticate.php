<?php

// error_reporting(E_ALL); 
// ini_set("display_errors", 1);

include "db_conn.php";

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

            $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if($row['username'] === $username && $row['password'] = $password){
                        header("Location: index.php");
                        exit();
                    }else{
                        header("Location: login.php?error=Incorrect Username or Password ");          
                        exit();
    
                            } 

                } else{
                    header("Location: login.php?error=Incorrect Username or Password");   
                    printf($username);     
                    debug_to_console($password);       
                    exit();

                        }

            }
        
        }else {
   header("Location: index.php");
    exit();

    }





