<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <title>Explicando Section, Aside e Footer!</title>
    <link type="text/css" rel="stylesheet" href="/viniciustutoriais/_css/main.css"/>

    <style>
      
    </style>

  </head>
  <body>
    <!-- Importando o menu de navegação -->
    <?php require '../_templates/menu-nav.php'?>

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
  
  </body>
</html>