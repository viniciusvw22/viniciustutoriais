<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/main.css" type="text/css"/>
  <link rel="stylesheet" href="_css/home.css" type="text/css"/>
  <script type="text/javascript" src="_javascript/funcoes.js"></script>

  <!-- TODO: consertar links (line breaks são considerados como 1 espaço) 
       Colar o menu em outras páginas.
    -->

	<title>Vinícius Tutoriais</title>
  
</head>

<body>
  <div id="interface"> 
    <header id="cabecalho-pagina">
      <nav id="menu">
        <ul onmouseout="mudaFoto('_imagens/home.png')">
          <li onmouseover="mudaFoto('_imagens/home.png')">
            <a href="index.php">Home</a>
          </li>
          <li onmouseover="mudaFoto('_imagens/github.png')">
            <a href="https://github.com/viniciusvw22/viniciustutoriais/blob/main/index.php">
              Código no GitHub
            </a>
          </li>
          <li onmouseover="mudaFoto('_imagens/newspaper.png')">
            <a href="https://www.google.com.br">Notícias</a>
          </li>
          <li onmouseover="mudaFoto('_imagens/contato.png')"><a href="contato.html">Contato</a></li>
        </ul>
        <img id="icone" width="100" height="100" src="_imagens/home.png" 
             alt="Ícone Home"/>
      </nav>
      <h1 id="pagina-titulo">Vinícius Tutoriais</h1>
      <p>Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciência da    
        Computação. Fiz este site para mostrar meus conhecimentos em programação.
      </p>      
    </header>


    <div id="conteudos">
      <main id="artigos-programacao">
        <header id="cab-pri">
          <h4>Home (Você está aqui)</h4>
          <h2 class="aprenda-programar">Programação</h2>
          <h3>por Vinícius Viana</h3>
          <h4 id="data-publ">site criado em 01/01/2021</h4>
        </header>
        
        <section id="html">
          <h3>HTML</h3>
          <article>
            <h4>
              <a href="_programacao/html-section-nav-footer.php"> Tags
                <code>section</code>, <code>aside</code> e <code>footer</code>
              </a>
            </h4>
            <footer>
              <p>No ar em 26/12/2020</p>
            </footer>
          </article>

        </section>

        <section id="css">
          <h3>CSS</h3>
          <article>
            <h4><a href="_programacao/css-box-sizing.php">Propriedade 
            <code>box-sizing</code></a></h4>
            <footer>
              <p>No ar em 16/01/2021</p>
            </footer>
          </article>
          <article>
            <h4 class="caixa-maior">
              <a href="_programacao/css-important.html">O valor 
              <code>!important</code> CSS e porque evi&shy;tá&shy;-lo</a></h4>
            <footer>
              <p>No ar em 9/01/2021</p>
            </footer>
          </article>
          <article>
            <h4><a href="_programacao/css-transition.html">Propriedade 
            <code>transition</code></a></h4>
            <footer>
              <p>No ar em 2/01/2021</p>
            </footer>
          </article>
          <article>
            <h4><a href="_programacao/css-vertical-align.php">Propriedade 
            <code>vertical-align</code></a></h4>
            <footer>
              <p>No ar em 19/12/2020</p>
            </footer>
          </article>  
        </section>

        <section id="javascript">
          <h3>Javascript</h3>
          <article>
            <h4><a href="_programacao/js-acenda-lampada.html">Acenda a 
            lâmpada</a></h4>    
          
          </article>
        </section>

      </main>
      <aside id="anuncios">
          <h3>Vote a favor da bomba</h3>
          <a target="_blank" href="https://www12.senado.leg.br/ecidadania/visualizacaomateria?id=145430">
          <strong>Vote aqui</strong> a favor da bomba atômica brasileira</a>
          </iframe>

        <h3>Cursos completos gratuitos de programação</h3>
        <p>Adquira já o curso básico de HTML5/CSS</p>
      </aside>

      <div id="conteudo-secund">
        <section id="portfolio">
          <header>
            <h1>Meu Portfólio</h1>
          </header>

          <section id="vbnet">
            <h2>VB.Net</h2>
            <article>
              <h3>Separador de planilhas</h3>
              <iframe src="https://www.youtube.com/embed/EJNvkrzziwQ"
                      width="560" height="315" allowfullscreen
                      title="Separador de planilhas em Visual Basic.Net"
                      name="sepvb">
              </iframe>
            </article>
          </section>

        </section>
  
        <section id="artigos-diversos">
          <header id="artigos-diversos-cabecalho">
            <h1>Artigos diversos</h1>
            <p class="referencia-pesquisa">
              Fontes de pesquisa: várias fontes</p>
          </header>
          <section id="artigos-avioes">
            <header>
              <h2>Aviões</h2>
            </header>
            <article>
              <h3><a href="_artigos/aviao-ac-130.php">Conheça o Lockheed AC-130
              </a></h3>
            </article>
          </section>
          <section id="eletronicos">
            <header>
              <h2>Eletrônicos</h2>
            </header>
            <article>
              <h3>
                <a href="_artigos/note-g50-80.php">Lenovo G50-80</code></a>
              </h3>
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
              <h3>
                <a href="https://tvbrasil.ebc.com.br/brasil-em-dia/2020/10/ferrovia-norte-sul-deve-ser-entregue-em-julho-de-2021">
                Ferrovia Norte-Sul deve ser entregue em julho de 2021.</a>
              </h3>
              <p>Vai ser mais uma opção para levar o que o Brasil produz, 
                contribuindo para reduzir o custo do transporte de cargas.
              </p>
              <footer>
                <p>No ar em 14/10/2020 - 09:45 |</p>
                <p><a href="https://tvbrasil.ebc.com.br/brasil-em-dia/2020/10/ferrovia-norte-sul-deve-ser-entregue-em-julho-de-2021">
                Fonte: TVBrasil - Brasil em Dia</a>
                </p>
              </footer>
            </article>
            <article>
              <h3><a target="_blank" href="https://www.gov.br/pt-br/noticias/transito-e-transportes/2020/10/representantes-do-governo-vistoriam-obras-da-ferrovia-norte-sul-que-sera-entregue-em-2021">
              Representantes do Governo vistoriam obras da Ferrovia Norte-Sul 
              que será entregue em 2021</a></h3>
              <p>Ferrovia vai baratear custos do transporte de carga 
              beneficiando produtores e consumidores</p>
              <footer>
                <p>No ar em 13/10/2020 - 17:26 | Atualizado em 13/10/2020
                 17:27</p>
                <p><a target="_blank" href="https://www.gov.br/pt-br/noticias/transito-e-transportes/2020/10/representantes-do-governo-vistoriam-obras-da-ferrovia-norte-sul-que-sera-entregue-em-2021">
                Fonte: Gov.Br</a></p>
              </footer>
            </article>
          </section>
          <section id="noticias-mundo">
            <h2>Mundo</h2>
            <article>
              <h3><a href="https://www.google.com.br">Trump Lorem ipsum, dolor 
              sit amet consectetur adipisicing elit.</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos 
              iste quis necessitatibus laudantium recusandae delectus vero iure.
              </p>
              <footer>
                <p>No ar em 6/10/2020 - 17:43</p>
                <p><a href="https://www.google.com.br">Fonte: Lorem Ipsum</a>
                </p>
              </footer>
            </article>
          </section>
        </section>
      </div>
    </div>
    <footer id="rodape">
      <p>Copyright &copy; <?php echo date("Y")?> by Vinícius Viana</p>
      <p>Alguma informação errada? Sugira uma alteração <a href="">aqui pelo
      GitHub!</a></p>
      <address>
        <p>
          <a href="https://www.linkedin.com/in/viniciusvianawerneck" 
            target="_blank">Linkedin</a> |
          <a href="https://wa.me/5521972221307" target="_blank"/>Whatsapp</a>
        </p>
      </address>
    </footer>
  </div>  

</body>

</html>
