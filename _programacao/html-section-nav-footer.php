<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <title>Explicando Section, Aside e Footer!</title>
    <link type="text/css" rel="stylesheet" href="/viniciustutoriais/_css/main.css"/>

    <!-- TODO: retirar 'style:clear' do rodapé 
               terminar de estruturar o HTML. -->

    <script type="text/javascript" src="../_javascript/funcoes.js"></script>

  </head>
  <body>
    <header id="cabecalho-pagina">
      <nav id="menu">
        <ul onmouseout="mudaFoto('../_imagens/html-logo.png')">
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
        <img src="../_imagens/html-logo.png" id="icone" width="100"
             height="100" alt="Logo HTML"/>
      </nav>
      <h1 id="pagina-titulo">Vinícius Tutoriais</h1>
      <p>Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciência da    
        Computação. Fiz este site para mostrar meus conhecimentos em programação.
      </p>      
    </header>

    <main>
      <h1>Explicando section, aside e footer.</h1>
      <section id="explicando-section">
        <h2>section</h2>
        <p>A tag <code>&lt;section&gt;</code> serve para agrupar assuntos relacionados. Por exemplo:</p>
        <pre>
          <code style="width: 300px;">
            &lt;section id="aviao"&gt;

              &lt;article id="aviao-ac130"&gt;

                &lt;h2&gt;Lockheed AC-130&lt;&#47;h2&gt;
                &lt;p&gt;O Lockheed AC-130 é uma aeronave de combate fortemente armada, cuja principal função é dar apoio a tropas terrestres.
                fonte: wikipedia
                &lt;&#47;p&gt;
              
              &lt;&#47;article&gt;

            &lt;&#47;section&gt;

            &lt;section id="navio"&gt;
              
              &lt;article id="navio-enterprise"&gt;
                
                &lt;h2&gt; USS Enterprise &lt;&#47;h2&gt; 
                &lt;p&gt;A USS Enterprise foi o primeiro porta-aviões de propulsão nuclear a fazer parte da frota da Marinha dos Estados Unidos. [wikipedia]&lt;&#47;p&gt;

              &lt;&#47;article&gt;

            &lt;&#47;section&gt;
          </code>
        </pre>
        <p>A tag article serve para você falar de um assunto específico. Por exemplo, dentro da seção avião, você terá um artigo falando sobre o AC-130. Você pode adicionar outro artigo falando sobre o avião Thunderbolt. E assim, sucessivamente.</p>
      </section>
    </main>
  
    <footer style="clear:left;">
      <h2>Créditos de imagens:</h2>
      <img alt="Logo HTML" src="../_imagens/html-logo.png" 
           width="50" height="50"/>
      <a href="https://www.freepnglogos.com/images/html5-logo-31813.html">
           html5 logo, html logo from freepnglogos.com</a>
    </footer>
  </body>
</html>