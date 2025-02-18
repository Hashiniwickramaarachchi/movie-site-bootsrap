<?php
    require_once 'db_config.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pw = $_POST['password'];
        $confirm_pw = $_POST['confirm_pw'];

        if($pw !== $confirm_pw){
            echo "Password do not match.";
        }

        $query = "INSERT INTO admins (name, email, password) VALUES (?, ?, ?)";

        if($stmt = $conn_cine->prepare($query)){
            $stmt->bind_param('sss', $name, $email, $pw);

            if($stmt->execute()){
                header("Location: index.php?register=success");
                exit();
            }else{
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }else{
            echo "Error preparing the statement";
        }

        $conn_cine->close();
    }
?>