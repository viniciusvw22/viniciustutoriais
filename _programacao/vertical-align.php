<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <!--<link rel="stylesheet" type="text/css" href="/viniciustutoriais/_css/main.css"/>-->
  <link rel="stylesheet" type="text/css" href="/viniciustutoriais/_css/vertical-align.css"/>
  <title>Treinando <code>vertical-align</code></title>
</head>
<body>
  <div id="interface">
    <!-- importando header -->
    <?php require '../_templates/menu-nav.php';?>
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