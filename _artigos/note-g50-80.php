<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Lenovo G50-80</title>
  <link rel="stylesheet" type="text/css" href="../_css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../_css/note.css"/>
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
    <p>Meu nome é Vinícius Viana, tenho <?php echo (date("Y") - 1995);?> anos e estudo 
      Ciência da Computação. Fiz este site para mostrar meus conhecimentos em 
      programação.
    </p>      
  </header>

  <section id="corpo-full">
    <article id="noticia-principal">
      <header id="cab-pri">
        <h4>Home > Lenovo G50-80 (Você está aqui)</h4>
        <h2 class="aprenda-programar">Programação</h2>
        <h3>por Vinícius Viana</h3>
        <h4 id="data-publ">página publicada em 09/02/2021</h4>
      </header>

      <p>Clique em qualquer área destacada da imagem para ter mais informações 
         sobre os recursos do Lenovo G50-80</p>

      <section id="conteudo">       
        <img src="../_imagens/note.png" width="480" height="412"
             alt="Notebook Lenovo G50-80 visto de frente" 
             usemap="#meumapa"/>
        <map name="meumapa">
          <area shape="circle" coords="237,19,8"
                href="note-g50-80-specs.html#camera" 
                target="janela" alt="Câmera do Lenovo G50-80"/>
          <area shape="poly" coords="51,28,423,28,396,207,77,208"
                href="note-g50-80-specs.html#tela" alt="Tela do Lenovo G50-80"
                target="janela"/>
          <area shape="poly" coords="336,254,401,254,423,321,349,321"
                href="note-g50-80-specs.html#teclado" 
                target="janela" alt="Teclado Accutype do Lenovo G50-80"/>
          <area shape="poly" coords="446,327,470,390,468,405,445,345"
                href="note-g50-80-specs.html#usb" alt="USB3.0 do Lenovo G50-80"
                target="janela"/>
          <area shape="poly" coords="26,332,27,349,4,403,3,387" 
                href="note-g50-80-specs.html#usb" 
                alt="USB3.0 do Lenovo G50-80"
                target="janela"/>
        </map>

        <iframe src="note-g50-80-specs.html" id="frame-spec" name="janela">
        </iframe>
      </section>
    </article>
  </section>


  <footer id="rodape">
    <p>Copyright &copy; <?php echo date("Y");?> by Vinícius Viana</p>
    <p>Alguma informação errada? Sugira uma alteração <a href="">aqui pelo
    GitHub!</a></p>
      <p>     
        <a href="https://www.linkedin.com/in/viniciusvianawerneck" 
           target="_blank">Linkedin</a> |
        <a href="https://wa.me/5521972221307" target="_blank"/>Whatsapp</a>
      </p>
  </footer>

</div>
</body>
</html>
