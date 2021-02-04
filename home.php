<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/main.css" type="text/css"/>
  <link rel="stylesheet" href="_css/home.css" type="text/css"/>
	<!-- rel: relação do documento linkado. 
	   href: url do estilo
	   type: tipo do conteúdo linkado.-->
	<title>Vinícius Tutoriais  sasdas</title>
  
</head>

<body>
  <div id="interface">
    <!-- Importando header#cabecalho-pagina -->
    <?php require '_templates/menu-nav.php';?>
    <script>
      var sobre_mim = document.createElement("p");
      sobre_mim.innerText = "Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciências da Computação. Fiz este site para mostrar meus conhecimentos em programação.";
      document.getElementById("cabecalho-pagina").appendChild(sobre_mim);
    </script>
    <div id="conteudos">
      <main id="artigos-programacao">
        <header>
          <h2 class="aprenda-programar">Programação</h2>
        </header>
        
        <section id="html">
          <h3>HTML</h3>
          <article>
            <h4><a href="_programacao/explicando-section-nav-footer.php">Tags <code>section</code>, <code>aside</code> e <code>footer</code></a></h4>
            <footer>
              <p>No ar em 26/12/2020</p>
            </footer>
          </article>

        </section>

        <section id="css">
          <h3>CSS</h3>
          <article>
            <h4><a href="_programacao/box-sizing.php">Propriedade <code>box-sizing</code></a></h4>
            <footer>
              <p>No ar em 16/01/2021</p>
            </footer>
          </article>
          <article>
            <h4 class="caixa-maior"><a href="_programacao/declaracao-important.html">O valor <code>!important</code> CSS e porque evi&shy;tá&shy;-lo</a></h4>
            <footer>
              <p>No ar em 9/01/2021</p>
            </footer>
          </article>
          <article>
            <h4><a href="_programacao/explicando-transition.html">Propriedade <code>transition</code></a></h4>
            <footer>
              <p>No ar em 2/01/2021</p>
            </footer>
          </article>
          <article>
            <h4><a href="_programacao/vertical-align.php">Propriedade <code>vertical-align</code></a></h4>
            <footer>
              <p>No ar em 19/12/2020</p>
            </footer>
          </article>  
        </section>

        <section id="javascript">
          <h3>Javascript</h3>
          <article>
            <h4><a href="_programacao/_javascript/acenda-lampada.html">Acenda a lâmpada</a></h4>    
          
          </article>
        </section>

        
        
      </main>
      <aside id="adquira-cursos">
        <h3>Cursos completos gratuitos de programação</h3>
        <p>Adquira já o curso básico de HTML5/CSS</p>
      </aside>
      <div id="conteudo-secund">
        <section id="artigos-diversos">
          <header id="artigos-diversos-cabecalho">
            <h1>Artigos diversos</h1>
            <h2 class="referencia-pesquisa">Fontes de pesquisa: várias fontes</h2>
          </header>
          <section id="artigos-avioes">
            <header>
              <h2>Aviões</h2>
            </header>
            <article>
              <h3><a href="_avioes/aviao-ac-130.php">Conheça o Lockheed AC-130</a></h3>
            </article>
          </section>
        </section>
        <section id="noticias">
          <header id="noticias-cabecalho">
            <h1>Notícias do Brasil e do Mundo</h1>
            <p class="referencia-pesquisa">Fontes de pesquisa: várias fontes</p>
          </header>
          <section id="noticias-brasil">
            <h2>Brasil</h2>
            <article>
              <h3><a href="https://tvbrasil.ebc.com.br/brasil-em-dia/2020/10/ferrovia-norte-sul-deve-ser-entregue-em-julho-de-2021">Ferrovia Norte-Sul deve ser entregue em julho de 2021.</a></h3>
              <p>Vai ser mais uma opção para levar o que o Brasil produz, contribuindo para reduzir o custo do transporte de cargas.</p>
              <footer>
                <p>No ar em 14/10/2020 - 09:45 |</p>
                <p><a href="https://tvbrasil.ebc.com.br/brasil-em-dia/2020/10/ferrovia-norte-sul-deve-ser-entregue-em-julho-de-2021">Fonte:  TVBrasil - Brasil em Dia</a></p>
              </footer>
            </article>
            <article>
              <h3><a href="https://www.gov.br/pt-br/noticias/transito-e-transportes/2020/10/representantes-do-governo-vistoriam-obras-da-ferrovia-norte-sul-que-sera-entregue-em-2021">Representantes do Governo vistoriam obras da Ferrovia Norte-Sul que será entregue em 2021</a></h3>
              <p>Ferrovia vai baratear custos do transporte de carga beneficiando produtores e consumidores</p>
              <footer>
                <p>No ar em 13/10/2020 - 17:26 | Atualizado em 13/10/2020 17:27</p>
                <p><a href="https://www.gov.br/pt-br/noticias/transito-e-transportes/2020/10/representantes-do-governo-vistoriam-obras-da-ferrovia-norte-sul-que-sera-entregue-em-2021">Fonte: Gov.Br</a></p>
              </footer>
            </article>
          </section>
          <section id="noticias-mundo">
            <h2>Mundo</h2>
            <article>
              <h3><a href="https://www.google.com.br">Trump Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos iste quis necessitatibus laudantium recusandae delectus vero iure.</p>
              <footer>
                <p>No ar em 6/10/2020 - 17:43</p>
                <p><a href="https://www.google.com.br">Fonte: Lorem Ipsum</a></p>
              </footer>
            </article>
          </section>
        </section>
      </div>
    </div>
    <footer id="rodape">
      <p><a href="">Alguma informação errada? Sugira uma alteração aqui pelo GitHub!</a></p>
    </footer>
  </div>  

  <script>
    // Fazendo cada link ser aberto em uma nova aba.
    var links = document.getElementsByTagName("a");
    for (link of links) {
      link.target = "_blank";
    }

  </script>
</body>

</html>
