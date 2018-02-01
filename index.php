<?php

?>

<!doctype html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Manual do Estudante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="Manual Acadêmico - Login" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    
<!-- DISPOSITIVOS GRANDES -->
<!-- DISPOSITIVOS GRANDES -->
    <div class="principal">
        <div class="barra nav-fixed-top">
            <div class="conteudo col-md-6 col-lg-6">
            
            </div><!-- / .conteudo -->
            <form method="post" action="bd/login.php" class="form-inline">
                <div class="login form-group col-md-6 col-lg-6" >
                    <input type="email" class="form-control" placeholder="Apelido ou e-mail" name="user" required>
                    <input type="password" class="form-control" placeholder="Senha" name="pass" required>
                    <input type="submit" class="form-control entrar" value="Entrar">
                    <a target="_blank" href="recuperaSenha.php">Esqueceu sua senha?</a>    
                </div><!-- / .login -->
            </form><!-- / form -->
        </div><!-- / .barra -->
        <div class="cadastro form-group col-md-3 col-lg-3">
            <p>
                <center>
                    <h3>Cadastre-se agora para acessar a melhor solução de gestão acadêmica, criada     por nós, universitários.</h3>
                </center>
            </p>
            <form method="post" action="bd/cadastrarUser.php">
                <input class="form-control" type="text" name="nome" placeholder="Nome" required>
                <input class="form-control" type="text" name="sobrenome" placeholder="Sobrenome" required>
                <input class="form-control" type="date" name="nascimento" placeholder="Data de nascimento" required>
                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                    <strong>Você possui interesses como </strong>
                    <input type="radio" name="perfil" value="1" required>Estudante
                    <input type="radio" name="perfil" value="2" required>Docente
                <input class="form-control" type="text" name="usuario" placeholder="Usuário" required>
                <input class="form-control" type="password" name="senha" placeholder="Senha" required> 
                <input class="form-control cadastrar" type="submit" value="Cadastrar agora"> 
            </form><!-- / form -->
        </div><!-- / .cadastro -->
    </div><!-- / .principal -->
</body>  
</html>