<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="logount.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="Form-box-login">
            <h2>Login</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="erro">User or Passoword is requised</p>
            <?php }?>
            <?php if(isset($_GET['Invalid'])) { ?>
                <p class="erro">password or email is wrong</p>
            <?php }?>
            <form action="FazendoLogin.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="Email" id="Email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" id="CheckBox">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="Login-Register">
                    <p>Don't have a account?   <a href="cadastro.php" class="Register-Link">  Register</a></p>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>