<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Formulário</title>

  <script type="text/javascript" src="../_javascript/funcoes.js"></script>
  <script type="text/javascript" src="../_javascript/form.js"></script>

  <link rel="stylesheet" type="text/css" href="../_css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../_css/form-contato.css"/>  

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
          <a href="https://github.com/viniciusvw22/viniciustutoriais/blob/main/_programacao/html-form-exemplo.php">
            Código no GitHub!
          </a>
        </li>
        <li onmouseover="mudaFoto('../_imagens/newspaper.png')">
          <a href="https://www.google.com.br">Notícias</a>
        </li>
        <li onmouseover="mudaFoto('../_imagens/contato.png')"><a href="contato.html">Contato</a></li>
      </ul>
      <img id="icone" width="100" height="100" src="../_imagens/css-logo.png"
      alt="Logo oficial da linguagem de estilo CSS"/>
    </nav>
    <h1 id="pagina-titulo">Vinícius Tutoriais</h1>
    <p>Meu nome é Vinícius Viana, tenho 24 anos e estudo Ciência da    
      Computação. Fiz este site para mostrar meus conhecimentos em programação.
    </p>      
  </header>

  <main id="artigo-principal">
    <h1>Exemplo de formulário de pedido de um Google
        Glass:</h1>
    
    <form method="post" id="contato" action="mailto:viniciusvw18@hotmail.com">
      <fieldset id="usuario"><legend>Identificação do Usuário</legend>
        <p>
          <label for="cNome">Nome:</label>
          <input type="text" name="tNome" id="cNome"
          maxlength="100" size="30"/>
        </p>
        <p>
          <label for="cSenha">Senha:</label>
          <input type="password" name="tSenha" id="cSenha"
          maxlength="8" size="8"/>
        </p>
        <p>
          <label for="cMail">E-mail:</label>
          <input type="text" name="tMail" id="cMail"
          maxlength="100" size="30"/>
        </p>
        <fieldset id="fSexo"><legend>Sexo</legend> 
          <input type="radio" name="tSexo" id="cMas" checked/>
          <label for="cMas" id="LMas">Masculino</label> 
          <br/>
          <input type="radio" name="tSexo" id="cFem"/>
          <label for="cFem" id="LFem">Feminino</label>
        </fieldset>
        <p>
          <label for="cNasc">Data de Nascimento:</label>
          <input type="date" name="tNasc" id="cNasc" 
          value="2021-02-19"/>
        </p>
      </fieldset>

      <fieldset id="endereco"><legend>Endereço de Usuário</legend>
        <p>
          <label for="cRua">Logradouro:</label>
          <input type="text" name="tRua" id="cRua" 
          placeholder="Rua, Avenida, Travessa, ..." 
          size="30" maxlength="50"/>
        </p>
        <p>
          <label for="cNum">Número:</label>
          <input type="number" name="tNum" id="cNum"
          min="0" max="99999"/>
        </p>
        <p>
          <label for="cEst">Estado:</label>
          <select name="tEst" id="cEst">
            <optgroup label="Região Sudeste">
              <option value="RJ">Rio de Janeiro</option>
              <option value="SP">São Paulo</option>
              <option value="MG" selected>Minas Gerais</option>
              <option value="ES">Espírito Santo</option>
            </optgroup>
            <optgroup label="Região Norte">
              <option value="AM">Amazonas</option>
              <option value="AC">Acre</option>
            </optgroup>
            <optgroup label="Região Sul">
              <option value="RS">Rio Grande do Sul</option>
              <option value="PR">Paraná</option>
            </optgroup>
            <optgroup label="Região Nordeste">
              <option value="AL">Alagoas</option>
              <option value="SE">Sergipe</option>
            </optgroup>
            <optgroup label="Região Centro-Oeste">
              <option value="MT">Mato-Grosso</option>
            </optgroup>
          </select>
        </p>
        <p>
          <label for="cCid">Cidade:</label>
          <input type="text" name="tCid" id="cCid"
          size="20" maxlength="30" placeholder="Digite Aqui"
          list="cidades"/>
          <datalist id="cidades">
            <option value="São Gonçalo"></option>
            <option value="Niterói"></option>
            <option value="Maricá"></option>
            <option value="Magé"></option>
            <option value="Itaboraí"></option>
          </datalist>
        </p>
      </fieldset>

      <fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
        <p>
          <label for="cUrg">Grau de Urgência:</label>
          Mín <input type="range" min="0" max="3" step="1" 
          name="tUrg" id="cUrg" value="0"/> Máx
        </p>
        <p>
          <label for="cMsg">Mensagem:</label>
          <textarea name="tMsg" id="cMsg" cols="40" rows="4"
          placeholder="Deixe sua mensagem aqui"></textarea>
        </p>
      </fieldset>

      <fieldset id="pedido"><legend>Quero um Google Glass</legend>
        <p>
          <input type="checkbox" name="tPed" id="cPed" checked/>
          <label for="cPed">Gostaria de adquirir um Google Glass quando 
          disponível</label>
        </p>
        <p>
          <label for="cCor">Cor:</label>
          <input type="color" name="tCor" id="cCor" value="#0000f0"/>
        </p>
        <p>
          <label for="cQtd">Quantidade:</label>
          <input type="number" name="tQtd" id="cQtd"
          min="1" max="5" value="0" onclick="calculePreco()"/>
        </p>
        <p>
          <label for="cTot">Preço Total: R$</label>
          <input type="text" name="tTot" id="cTot"
          size="8" maxlength="10" readonly/>
        </p>
      </fieldset>
      <input type="submit" name="tEnviar" id="cEnviar" value="Enviar Pedido"/>
    </form>

    <footer>
      <p>Ícones do formulário por:  
        <a href="https://www.cursoemvideo.com" target="_blank">
          Professor Gustavo Guanabara, do Site/Canal do Youtube 
          Curso em Vídeo.com
        </a>
        
      </p>
      <p>Formulário criado acompanhando o Curso de HTML5, do site 
        <a href="https://www.cursoemvideo.com">Curso em Vídeo.com</a></p>
    </footer>
  </main>

  <aside id="anuncios">
    <h3>Vote a favor da bomba</h3>
    <a target="_blank" href="https://www12.senado.leg.br/ecidadania/visualizacaomateria?id=145430">
    <strong>Vote aqui</strong> a favor da bomba atômica brasileira</a>
    </iframe>

    <h3>Cursos completos gratuitos de programação</h3>
    <p>Adquira já o curso básico de HTML5/CSS</p>
  </aside>

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