<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
		<link href=<?=css('cadastro')?> rel="stylesheet">
		<link rel="shortcut icon" href=<?=imgs('2.png')?>>
	</head>
	<body>
    <header>	
      <div class="content">
        <nav>
          <p class="brand"><strong>77 Transportes</strong></p>
          <ul> <li><a href="index.html">Nossa Empresa</a></li>
            <li><a href="reserva.html">Reservas</a></li>
			<li><a href="duvidas.html">Dúvidas</a></li>
			<a href=<?=linkrota('login')?>><button>Login</button> </a>
          </ul>
        </nav>
         </div>
    </header>
	<div>
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>


  <?=flash();?>

    <div class="container">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="<?=linkrota('cadastrarconta')?>"> 
          <h1>Login</h1> 
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="77transportes@gmail.com"/>
          </p>
          
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
          </p>
          
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
          
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action=""> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="77 transportes" />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="77transportes@gmail.com"/> 
          </p>
          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
          </p>
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div> 
  
  <footer>
    <div class="main">
      <div class="content footer-links">
        <div class="footer-empresa">
          <h4>Empresa</h4>
          <h6>Sobre</h6>
          <h6>Contato</h6>
        </div>
  
        <div class="footer-aluguel">
          <h4>Aluguel</h4>
          <h6>Dirigir sozinho</h6>
          <h6>Com motorista</h6>
          <h6>Ajuda</h6>
        </div>
  
        <div class="footer-conectado">
          <h4>Permaneça conectado</h4>
          <div class="social-icons">
            <img src="imagens/instagram.png" alt="Instagram" />
            <img src="imagens/facebook.png" alt="Facebook" />
          </div>
        </div>
  
        <div class="footer-contato">
          <h4>Contato BR</h4>
          <h6>+55 31 988776655</h6>
          <h6>77transportes@gmail.com</h6>            
        </div>
  
      </div>
    </div>

    <div class="parte-baixo">77 transportes 2023 - 77 vezes mais você!</div>
  </footer>
    
	</body>
</html>
