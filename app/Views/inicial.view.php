<?php componente('topo')?>
  <body>
    <header>
      <div class="content">
        <nav>
          <p class="brand">77 Transportes</p>
          <ul>
            <li><a href="catalogo.html">Catálogo</a></li>
            <li><a href="index.html">Nossa Empresa</a></li>
            <li><a href="duvidas.html">Dúvidas</a></li>
			<li><a href="reserva.html">Reservas</a></li>
          <a href=<?=linkrota('login')?>>  <button>Login</button> </a>
          </ul>
        </nav>
        <div class="header-bloco">
          <div class="texto">
            <h2>77 vezes mais você</h2>
            <p>
              Empresa especializada em aluguel de transportes
            </p>
          </div>
          <img src=<?=imgs('carro.webp')?> alt="Car" />
        </div>
      </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <section class="sobre" id="sobre">
      <div class="content">
        <div class="title-wrapper-about">
          <p>Conheça a nossa</p>
          <h3>Empresa</h3>
        </div>
        <div class="sobre-content">
          <div class="esquerda">
            <img src=<?=imgs('about.png')?> alt="About" />
          </div>
          <div class="direita">
            <h3>Sobre Nós</h3>
            <p>
             A 77transporte é uma empresa de
            aluguel de transporte que foi fundada na Bahia, no ano de 2023, com o objetivo de oferecer um serviço 
            de qualidade, segurança e conforto para os seus clientes. A empresa tem como principal área de atuação o 
            DDD 77, que abrange cidades como: Brumado, Livramento de Nossa Senhora, Malhada de Pedra, Barreiras,  Guajerú, Guanambi, Caitité, entre outras. 
            A 77transporte valoriza a relação com os seus clientes e busca sempre superar as suas satisfações. 
            Por isso, a empresa prefere você como nosso cliente 77 vezes mais do que qualquer outra empresa.
            </p>
          </div>
        </div>
      </div>
    </section>

  
  
    <?php componente('rodape')?>