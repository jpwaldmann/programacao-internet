<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/main.css">
  <meta charset="utf-8">  
    
    <link href="../styles/blog.css" rel="stylesheet" type="text/css">
    <title>Conteúdo Links </title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Averia+Sans+Libre');

    body{
        font-family: 'Averia Sans Libre';
    }
        #interface {
          
          background-color:#212121;
          color: white;
          padding: 30px;  
        }
    h2{
        color: white;
    }
      a:link {
          color: green; 
          background-color: transparent; 
          text-decoration: none;
      }

      a:visited {
          color: green;
          background-color: transparent;
          text-decoration: none;
      }

      a:hover {
          color: red;
          background-color: transparent;
          text-decoration: underline;
      }

      a:active {
          color: blue;
          background-color: transparent;
          text-decoration: underline;
      }
      #interface{
      display: flex;
      flex-flow: row wrap;
    }

    #interface > *{
      flex: 1 100%;
    }
    *{
      max-width: 100%;
    }
    @media all and (min-width: 100px){
      #interface > *{
        flex: 100%;
      }
    }

    @media all and (min-width: 800px) {
      #side-menu{
        flex: 1;
        padding-right: 3%;
      }
      #interface > section{
        flex: 4;
      }
    }
    </style>
</head>
<body>
  <div id="interface">
    <header id="page-header">
      <?php include '../page-header.html'; ?>
    </header>
    
    <nav id="side-menu">
      <?php include '../side-menu.html'; ?>
    </nav>
    <section>
      <div id="artigo">
      <h1>Vamos aprender sobre links?</h1> 
        <a id="home" href="../index.php">Voltar ao Início</a>
        <h2>Links</h2>
        <p>Os links são encontrados em quase todas as páginas da web. Quando um usuário clica em um link ele é redirecionado a uma nova página. Curiosidade: porque a tag <code>&lt;a&gt;</code> se chama 'a' e nao <code>&lt;link&gt;</code>? Resposta no fim da página.</p>  

        <p>Este é um exemplo de link: <a href="http://aminoapps.com/page/memes-hu3-br/1109290/meu-cachorro-pediu-o-link">Link</a></p>

        <p>Os links são definidos pela tag  <code>&lt;a href=""&gt; &lt;/a&gt;</code>.</p>
        <p>O texto que fica dentro da tag <code>
          &lt;a href=""&gt;Este texto aqui &lt;/a&gt;</code> será o texto exibido no link:</p>
        <p><a href="">Este texto aqui</a></p>

        <h2>Links locais</h2>
        <p>Um link local (link para o mesmo site) é especificado com um URL relativo (sem http: // www ....).</p>
        <p><a href="save.png">Imagem</a></p>

        <h2>Abrir link em uma nova guia</h2>
        <p>Um link pode ser aberto em uma nova guia do navegador, para isto basta apenas adicionar o atributo target e seta-lo como "_blank" <code>target="_blank"</code></p>
        <p><a href="https://www.google.com" target="_blank">Google</a></p>
        
        <h2>Utilizar uma imagem como link</h2>
        <p>Podemos utilizar imagens para representar links adicionando a tag <code>&lt;img /&gt;</code></p>
        <a href="https://www.google.com">
          <img src="../images/save.png" alt="Google" style="border:0"/>
        </a>

        <h2>Saltar para um lugar na página</h2>
        <p>Podemos utilizar um link também para redirecionar em um ponto específico na página colocando no href o id da tag que você deseja <code>href="#id"</code></p>
        <p><a href="#interface">Ir para o topo</a></p>

        <h3>Resposta:</h3>
        <p>Porque o 'a' representa 'action' quando clicado desencadeia uma ação.</p>
      </div>
    </section> 
    <footer id="page-footer">
      <?php include '../page-footer.html'; ?>
    </footer>
  </div>
</body>
</html>