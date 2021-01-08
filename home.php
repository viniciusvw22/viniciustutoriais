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
    <?php require '_templates/menu-nav.php';?>

    <main id="meus-artigos">
      <p id="sobre-mim">Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciências da Computação. Fiz este site para mostrar meus conhecimentos em programação.</p>
      <section id="aprenda-programar">
        <h2>Aprenda a programar!</h2>
        <article>
          <p><a href="_programacao/box-sizing.php">Aprenda a propridade CSS: box-sizing hoje! </a></p>
        </article>
        <article>
          <p><a href="_programacao/declaracao-important.html">Aprenda a usar o valor CSS !important e porque devemos evitá-lo!</a></p>
        </article>
        <article>
          <p><a href="_programacao/explicando-transition.html">Aprenda a usar a propriedade transition!</a></p>
        </article>
        <article>
          <p><a href="_programacao/explicando-section-nav-footer.php">Aprenda a usar section, aside e footer!</a></p>
        </article>
      </section>
      <section id="avioes">
        <h2>Aviões!</h2>
        <p><a href="/viniciustutoriais/_avioes/aviao-ac-130.php">Conheça o Lockheed AC-130</a></p>
      </section>
    </main>
    <aside id="adquira-cursos">
      <h3>Cursos completos</h3>
      <p>Adquira já o curso básico de HTML5/CSS</p>
    </aside>
    
    <footer id="rodape">
      <p><a href="">Alguma informação errada? Sugira uma alteração aqui pelo GitHub!</a></p>
    </footer>
  </div>  
  <script>
    var pasta_imagens = '_imagens';
    
    //Inserindo o bloco de código para os elementos HTML.
    //document.getElementsByTag("img").href="/";
  </script>
</body>

</html>
