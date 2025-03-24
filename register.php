<?php 

include 'db_connection.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $passwordlength = strlen($password);
    $password=md5($password);


     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        
        header("Location: bejelentkez.php?signup=failed");
        exit();
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password,password_length)
                       VALUES ('$firstName','$lastName','$email','$password','$passwordlength')";
            if($conn->query($insertQuery)==TRUE){
                header("Location: bejelentkez.php?signup=success");
                exit();
                
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: profil.php");
        exit();
    } else {
        
        header("Location: bejelentkez.php?login=failed");
        exit();

    }
}



?>