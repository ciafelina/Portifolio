<?php 
    $NomeCadastro = $_POST["UserNameRegister"];
    $NameEmail = $_POST["EmailRegister"];
    $senha = $_POST['passwordRegister'];
    $TipoCadastro = "S";

    if (empty($NomeCadastro) || empty($NameEmail) || empty($senha)){
        header("location:cadastro.php?error=Any fields not filled in");
        exit;
    }else{
        include_once('conexao.php');
        
        $sql = "select Email from Login where Email = '$NameEmail'";

        $result = $Conect->query($sql);

        if (mysqli_num_rows($result) >= 1 ){
            header("location:cadastro.php?Invalid=Email already registered");
        exit;
        }else{

            $ConsCod = "select CodUsuario from Login order by CodUsuario desc limit 1";
            $ResultCod = $Conect->query($ConsCod);
            if ($result){
                $Valor = $ResultCod->fetch_assoc();
                $Usuario = $Valor['CodUsuario'];
                $Usuario += 1;
            }

            $InserirDados = "insert into login (CodUsuario,Email,NameUsuario,Senha,TpoLOgin) values ('$Usuario','$NameEmail','$NomeCadastro','$senha','S')"; 
            $ResultInserir = $Conect->prepare($InserirDados); 
            $ResultInserir->execute();

            header("location:index.html");
            exit;
        }


    }
    

    

?>