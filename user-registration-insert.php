<?php 

    include_once 'dib_config.php';

    $username = $_POST ['username'];
    $email = $_POST ['email'];
    $password = password_hash($_POST ['password'], PASSWORD_BCRYPT); 



    $sql ="INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$username','$email',' $password')";
    $result = mysqli_query($conn, $sql);


    if($result){
        header("Location: index.php");
    }else{
        echo 'Something is rong';
    }
    
    $conn->close();
?>