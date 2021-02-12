<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Lenovo G50-80</title>
  <link rel="stylesheet" type="text/css" href="../_css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../_css/album.css"/>
  <script type="text/javascript" src="../_javascript/funcoes.js"></script>
</head>

<body>
<div id="interface"> 
  <header id="cabecalho-pagina">
    <nav id="menu">
      <ul onmouseout="mudaFoto('../_imagens/home.png')">
        <li onmouseover="mudaFoto('../_imagens/home.png')">
          <a href="../index.php">Home</a>
        </li>
        <li onmouseover="mudaFoto('../_imagens/github.png')">
          <a href="https://github.com/viniciusvw22/viniciustutoriais/blob/main/home.php">
            Código no GitHub!
          </a>
        </li>
        <li onmouseover="mudaFoto('../_imagens/newspaper.png')">
          <a href="https://www.google.com.br">Notícias</a>
        </li>
        <li onmouseover="mudaFoto('../_imagens/contato.png')">
          <a href="../contato.html">Contato</a>
        </li>
      </ul>
      <img id="icone" width="100" height="100" src="../_imagens/home.png" 
            alt="Ícone Home"/>
    </nav>
    <h1 id="pagina-titulo">Vinícius Tutoriais</h1>
    <p>Meu nome é Vinícius Viana, tenho <?php echo (date("Y") - 1995);?> anos e 
    estudo Ciência da Computação. Fiz este site para mostrar meus conhecimentos 
    em programação.</p>      
  </header>

  <section id="corpo-full">
    <article id="meu-album">
      <header id="cab-pri">
        <h4>Home > Álbum de fotos (Você está aqui)</h4>
        <h2 class="aprenda-programar">Programação</h2>
        <h3>por Vinícius Viana</h3>
        <h4 id="data-publ">página publicada em 09/02/2021</h4>
      </header>

      <ul id="album-fotos">
        <li id="foto01"><span>Banco no Horto do Barreto, em Niterói</span></li>
        <li id="foto02"><span>
                Pôr do Sol visto do Shopping Bay Market, em Niterói </span></li>
        <li id="foto03"><span>
                Jardim Japonês no Horto do Barreto, em Niterói</span></li>
        <li id="foto04"><span>Serra de Petrópolis</span></li>
        <li id="foto05"><span>
            Museu da Força Expedicionária Brasileira, em Petrópolis</span></li>
        <li id="foto06"><span>Casa nos Estados Unidos</span></li>
      </ul>

    </article>
  </section>

  <footer id="rodape">
    <p>Copyright &copy; <?php echo date("Y");?> by Vinícius Viana</p>
    <p>Alguma informação errada? Sugira uma alteração 
      <a href="">aqui pelo GitHub!</a>
    </p>
    <p>     
      <a href="https://www.linkedin.com/in/viniciusvianawerneck" 
         target="_blank">Linkedin</a> |
      <a href="https://wa.me/5521972221307" target="_blank"/>Whatsapp</a>
    </p>
  </footer>

</div>
</body>
</html>