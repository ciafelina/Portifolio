<?php
    $Servidor = "localhost";
    $UserName = "root";
    $Passoword = "";
    $NameBase = "Login";

    $Conect = new mysqli($Servidor,$UserName,$Passoword,$NameBase);

    $NameRegister = $_REQUEST['UserNameRegister'];
    $EmailRegister = $_REQUEST['EmailRegister']; 
    $PassowordRegister = $_REQUEST['passwordRegister'];

    $ConsCodUsuario = $Conect->query("select CodUsuario from Login order by CodUsuario desc limit 1");
    $CodUsarioCons = $ConsCodUsuario->fetch_assoc();
    $CodUsario = $CodUsarioCons['CodUsuario'];
    $CodUsario += 1;    

    $Query = "select NomeUsuario from Login where NomeUsuario = '$NameRegister' OR Email = '$EmailRegister' ";

    $result = $Conect->query($Query);

    if ($result->num_rows < 1) { 
        
        $sql = "INSERT INTO login (CodUsuario, NomeUsuario, Email) VALUES ('$CodUsario', '$NameRegister', '$EmailRegister')";
        $Conect->query($sql);
        header('Location: index.html');
        exit;
       }
     else {
        header('Location: cadastro.php');
        exit;
    }

    //header('Location: index.php');
    //exit;
  
?>

