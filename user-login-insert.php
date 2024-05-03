<?php 

    include_once 'dib_config.php';
    $email = $_POST ['email'];
    $password = $_POST ['password']; 

    $sql = "SELECT id, username, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if(mysqli_num_rows ($result) > 0){
        if(password_verify($password, $data['password'])){
            header("Location: index.php");
        }else{
            echo "Wrong password provided";
        }
    }else{
        echo 'Wrong email provided';
    }


    $conn->close();

?>