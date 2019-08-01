<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login area administrativa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="imagem/png" href="..\img\icon.png"/>  
  <link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
  <link rel="stylesheet" type="text/css" href="..\css\estilos.css" />

</head>
<body>
<?php
include_once "../cabecalho.php";
?>
  <div class="container pglogin" >

    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Usuário</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. nome"/>
          </p>
           
          <p> 
            <label for="email_login">Senha</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
                                
          <p> 
            <input type="submit" value="Logar" /> 
          </p>

        </form>
      </div>
	</div>  
	</div>  
	 	 
	<?php
	include_once "../footer.php";
	?>
</body>
</html>