<!DOCTYPE html>

<html>
  <head>  
    <meta charset="UTF-8"/>
    
    <script type="text/javascript" src="../../_javascript/funcoes.js"></script>
    <link rel="stylesheet" type="text/css" href="../../_css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../_css/javaconv.css"/>

    <title>Técnicas de nomeação de identificadores no Java</title>
    
  </head>

<body>
<div id="interface">
  <header id="cabecalho-pagina">
  <nav id="menu">
    <ul onmouseout="mudaFoto('../../_imagens/css-logo.png')">
      <li onmouseover="mudaFoto('../../_imagens/home.png')">
        <a href="../../index.php">Home</a>
      </li>
      <li onmouseover="mudaFoto('../../_imagens/github.png')">
        <a href="https://github.com/viniciusvw22/viniciustutoriais/blob/main/_programacao/_java/convencao-nomes.php">
          Código no GitHub!
        </a>
      </li>
      <li onmouseover="mudaFoto('../../_imagens/newspaper.png')">
        <a href="https://www.google.com.br">Notícias</a>
      </li>
      <li onmouseover="mudaFoto('../../_imagens/contato.png')">
        <a href="../../contato.html">Contato</a>
      </li>
    </ul>
    <img id="icone" width="100" height="100" 
          src="../../_imagens/css-logo.png"
    alt="Logo oficial da linguagem de estilo CSS"/>
  </nav>
  <h1 id="pagina-titulo">Vinícius Tutoriais</h1>
  <p>Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciência da    
    Computação. Fiz este site para mostrar meus conhecimentos em programação.
  </p>      
  </header>

  <main id="artigo-principal">
    <h1>Técnicas de nomeação de identificadores no Java</h1>
    
    <ul id="convencoes">
      <li>
        <header>
          <h2>Pacotes: </h2>
          <p>todas as letras minúsculas</p>
        </header>
        <section class="exemplo">
          <h3>Exemplo:</h3>
          <pre>
          <code>
            package meuprimeiropacote;
          </code>
          </pre>
        </section>
      </li>

      <li>
        <header>
          <h2>Classes e Interfaces: </h2>
          <p>UpperCamelCase, isto é, cada palavra fica com apenas a primeira   
             letra em maiúscula.</p>
        </header>
        <section class="exemplo"> 
          <h3>Exemplo:</h3>
          <pre>
          <code>
            public class MinhaClasse {
              (...)  
            }
            public class EstudantesFaculdade {
              (...)
            }
          </code>
          </pre>
        </section>
      </li>
      
      <li>
        <header>
          <h2>Métodos, Variáveis, Atributos e Parâmetros: </h2> 
          <p>lowerCamalCase, isto é, a primeira palavra em minúscula, e as
            palavras seguintes com apenas a primeira letra em maiúscula. </p>
        </header>

        <section class="exemplo">
          <h3>Exemplo:</h3>
          
          <pre>
          <code>
            public int calcularMediaAluno() {
              (...)
            }
            public str getTresPrimeirasLetras() {
              (...)
            }
          </code>
          </pre>
        </section>
      </li>
      
      <li>
        <header>
          <h2>Constantes:</h2>
          <p>todas as letras em maiúsculas:</p>
        </header>
        <section class="exemplo">
          <h3>Exemplo</h3>
          <pre>
          <code>
            public int VALOR_DE_PHI = 1.618;  
          </code>
          </pre>
        </section>
      </li>

    </ul>

  </main>

  <aside id="anuncios">
    <h3>Cursos completos gratuitos de programação</h3>
    <p>Adquira já o curso básico de HTML5/CSS</p>
  </aside>

  <footer id="rodape">
    <p>Copyright&copy; 2021 by Vinícius Viana</p>
    <address>
      <p>
        <a href="https://www.linkedin.com/in/viniciusvianawerneck">Linkedin</a> 
        |<a href="https://wa.me/5521972221307">Whatsapp</a>
      </p>
    </address>
  </footer>
</div>
</body>
</html>

