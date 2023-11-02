<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="Form-box-Register">
            <h2>Registration</h2>
            <form action="InserirCadastro.php" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="UserNameRegister" id="UserNameRegister">
                <label>User Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="EmailRegister" id="EmailRegister">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="passwordRegister" id="passwordRegister">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" id="CheckBox">I green to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="Login-Register">
                    <p>Already have an account?   <a href="login.php" class="Login-Link">  Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>