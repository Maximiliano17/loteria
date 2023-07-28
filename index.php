<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login/Loteria</title>
</head>
<body> 
    <div id="container">  
        <form action="" id="form">
            <div class="logo">
              <img  id="logo" src="./assets/img/logo.png" alt="Logo" />
            </div>   
          
            <input type="text" name="username" id="username" placeholder="Usuario ou E-mail">
            <input type="password" name="password" id="password" placeholder="Senha">
          
            <input type="submit" value="Acessar o Sistema">
            <div class="info">
                <a href="./pages/home.php">Esqueceu sua senha?</a>
                <label for="">
                    <input type="checkbox" name="" id="">
                    Lembrar-me
                </label>
            </div>
        </form>
    </div>
</body>
</html>