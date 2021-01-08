<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../_css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../_css/blocos.css"/>
	
	<title>Título Aba</title>
</head>

<body>
	<div id="interface">

    <?php require '../_templates/menu-nav.php';?>
    
    <main id="explica-box-sizing"> 
      <h1>Explicando box-sizing</h1>  

      <section id="exemplo-content-box" class="bloco azul espesso">
        <h2>Propriedades CSS deste bloco: </h1> 
        <p>Aqui, width = largura do conteúdo (content).</p> 
        <img class="linha-de-cota"/>
        <img class="imagem gata-mae-foto"/>
        <p>Foto da minha gata com a propriedade CSS de width: 100%;</p>  
      </section>

      <section id="exemplo-border-box" class="bloco vermelho espesso">
        <h2>Propriedades CSS deste bloco: </h1>
        <p>Aqui, width = largura do conteúdo do bloco (block content width) + padding + border.</p>
        <img class="imagem gata-mae-foto"/>
        <p>Foto da minha gata com Propriedade CSS width: 100%;</p>
        <p>box-sizing: border-box. Neste bloco vermelho, width de 300px in<wbr/>clui tanto bor<wbr/>der, quanto padding e content, pois box-sizing = border-box. O mesmo se aplica para height.</p>
        <img class="linha-de-cota vermelho"/>
      </section>  

      <section id="explica-content-box" class="bloco azul fino">
        <p>No bloco azul, temos que sua propriedade width = 300px e box-sizing = content-box. Com box-sizing = content-box, width se referirá apenas à área de conteúdo do bloco (block content area). Portanto, a largura da foto da gata-mãe e o texto de dentro do bloco azul serão de 300px cada um.<br/></p> 
      </section>
      <section id="explica-border-box" class="bloco vermelho fino">
        <p>Já no bloco vermelho ao lado, temos que width também é = 300px, mas agora, box-sizing = border-box. Isso significa que width se referirá à soma de largura de conteúdo (content width) + padding (isto é, o espacinho em branco entre a borda vermelha e a foto da gata-mãe) + borda vermelha (border).<br/> Portando, o que irá acontecer é que a foto e o texto irão encolher para satisfazerem a condição que pedimos (width = 300px;) <br/> Observe! A imagem da gata só encolhe porque ela tem a propriedade width: 100%. Isso significa que ela terá 100% de width do conteúdo - content - do bloco pai, ou seja, div de borda vermelha de traço grosso. Caso contrário, a imagem poderia extravazar sem problemas do box.</p>
      </section>
    </main><aside>
      <h2>Adquira seu curso</h2>
      <p>O novo curso de HTML5 já está disponível!</p>
    </aside>
    <footer id="rodape">
      <p><a href="">Contato: viniciusvw18@hotmail.com</a></p>
    </footer> 
  </div>
  <script>
    var gata_mae_fotos = document.getElementsByClassName("gata-mae-foto");
    var i;
    for (i = 0; i < gata_mae_fotos.length; i++) {
        foto_gata_mae = gata_mae_fotos[i]
        foto_gata_mae.src = "../_imagens/gata-mae-no-muro.jpg";
        foto_gata_mae.alt = "Foto da sulhueta preta da minha gatinha gata-mãe, que está em cima do muro e contemplando o céu!";
        foto_gata_mae.width = "300";
    }
    
    var j;      
	  var img_linha_de_cota = document.getElementsByClassName("linha-de-cota");    
	  for (j = 0; j < img_linha_de_cota.length; j++) {
	      img_linha_de_cota[j].src = "../_imagens/linha-de-cota.jpg";
	      
	  }  
	  
  </script>
	
</body>

</html>
