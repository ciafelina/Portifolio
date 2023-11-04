<?php 
    session_start();
    $NameEmail = $_POST["Email"];
    $senha = $_POST['password'];
    
    if (empty($NameEmail) || empty($senha)){
        header("location:login.php?error=User or Passoword is requised");
        exit;
    }else{
        include_once('conexao.php');

        $sql = "select Email,Senha from Login where Email = '$NameEmail' and Senha = '$senha' ";
        
        $result = $Conect->query($sql);

        if (mysqli_num_rows($result) < 1 ){
            //unset($_SESSION['Email']);
            //unset($_SESSION['password']);
            header("location:login.php?Invalid=password or email is wrong");
            exit;
        }else{

            header("location:Index.html");
            exit;   
        }
        
    }
?>