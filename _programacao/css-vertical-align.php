<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <!--<link rel="stylesheet" type="text/css" href="/viniciustutoriais/_css/main.css"/>-->
  <link rel="stylesheet" type="text/css" href="../_css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../_css/vertical-align.css"/>
  <script type="text/javascript" src="../_javascript/funcoes.js"></script>
  <title>Treinando <code>vertical-align</code></title>
</head>
<body>
  <div id="interface">
    <header id="cabecalho-pagina">
      <nav id="menu">
        <ul onmouseout="mudaFoto('../_imagens/css-logo.png')">
          <li onmouseover="mudaFoto('../_imagens/home.png')">
            <a href="../index.php">Home</a>
          </li>
          <li onmouseover="mudaFoto('../_imagens/github.png')">
            <a href="https://github.com/viniciusvw22/viniciustutoriais/blob/main/index.php">
              Código no GitHub!
            </a>
          </li>
          <li onmouseover="mudaFoto('../_imagens/newspaper.png')">
            <a href="https://www.google.com.br">Notícias</a>
          </li>
          <li onmouseover="mudaFoto('../_imagens/contato.png')"><a href="contato.html">Contato</a></li>
        </ul>
        <img src="../_imagens/css-logo.png" id="icone" width="100"
            height="100"/>
      </nav>
      <h1 id="pagina-titulo">Vinícius Tutoriais</h1>
      <p>Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciência da    
        Computação. Fiz este site para mostrar meus conhecimentos em programação.
      </p>      
    </header>
    
    
    <main id="explicando-vertical-align">
      <h1>Explicando <code>vertical-align</code></h1>
      <section id="definicao">
        <p>A propriedade CSS <code>vertical-align</code> define, na maioria das vezes, o alinhamento do texto em relação ao seu elemento pai.</p>
      </section>
      <section id="exemplo">
        <h2>Exemplos</h2>
        <article id="exemplo-middle">
          <h3>Alinhando imagem com <code>vertical-align: middle</code></h3>
          <div class="middle">
            <p>Parágrafo de exemplo..</p>
            <img src="../_imagens/gata-mae-no-muro.jpg" width="200px" height="200px;"/>
          </div>
          <h3>Alinhando texto com <code>vertical-align: middle</code></h3>
          <div class="middle">
            <p>Parágrafo pai contendo <span>span filho</span></p>
          </div>
        </article>
        <article id="exemplo-top">
          <h3>Alinhando imagem ao topo com <code>vertical-align: top</code></h3>
          <div class="top">
            <p>Parágrafo de exemplo</p>
            <img src="../_imagens/gata-mae-no-muro.jpg" width="200px;" height="200px;"/>
          </div>
        </article>
        <article id="exemplo-bottom">
          <h3>Alinhando imagem na parte de baixo com <code>vertical-align: bottom</code></h3>
          <div class="bottom">
            <p>Parágrafo de exemplo</p>
            <img src="../_imagens/gata-mae-no-muro.jpg" width="200px;" height="200px;"/>  
          </div>
        </article>
        <article id="exemplo-baseline">
          <h3>Alinhando imagem na parte de baixo com <code>vertical-align: baseline</code></h3>
          <div class="baseline">
            <p>Parágrafo de exemplo</p>
            <img src="../_imagens/gata-mae-no-muro.jpg" width="200px;" height="200px;"/>
            <p>Neste caso, alinha a imagem com a linha base do bloco-pai.</p>  
          </div>
        </article>
      </section> 
      <footer id="pesquisa-fonte">
        <p>Fonte da pesquisa: <a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS/vertical-align">MDN Web Docs</a></p>
      </footer>
    </main><aside>
      <h4 style="margin:0px;">Curso de HTML5</h4>
      <p>Adquira já o seu!</p>
    </aside>
    <footer id="rodape">
      <p>Copyright&copy; 2020 - Gnu GPLv3.0</p>
      <p>by Vinícius Viana</p>
    </footer>
  </div>
</body>  
</html>