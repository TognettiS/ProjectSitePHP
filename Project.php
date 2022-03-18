<?php
  $guias= ['Início', 'HTML/CSS', 'SQL (Oracle Live Server)', 'PHP', 'C', 'Python'];
  $imagens= ['Sobre.jpg', 'HTML1.png', 'SQL1.png', 'PHP1.png', 'C1.png', 'Python1.png'];
  $imagens2=['Contato.png', 'HTML2.png', 'SQL2.png', 'PHP2.png', 'C2.png', 'Python2.png'];
  $textos =['Pretendo ser um programador e por meio deste arquivo irei demonstrar alguns trabalhos meus com breves explicações.', 'Eu fiz um site simples do início utilizando HTML/CSS, no site contém 2 vídeos de jogos que eu criei e programei.', 'Criei 2 tabelas no Oracle Live Server e inseri alguns valores relacionados a jogos.', 'Basicamente todo o conteúdo desse site eu fiz em PHP e completamente do início.', 'Fiz o usuário digitar 2 números dividindo o 2º pelo 1º e printando as casas decimais da divisão.', 'Aqui fiz um sorteador de números no qual 1 número é gerado aleatoriamente e o usuário deve ir tentando acertar o número.'];
  $textos2 =['Informações para entrar em contato: Email: 2503.gui@gmail.com Tel: (11) 995215-9778.', 'Caso tenha interesse em ver mais trabalhos o link do meu github e portfólio estão logo abaixo:', 'Depois de inserir os valores eu apresentei os dados dentro das tabelas.', 'Caso queira baixar alguns trabalhos para melhor visualização o link para meu portfólio e github estão logo abaixo:', 'Nesta programação o usuário digita 1 número inteiro e eu represento ele em valores binários.', 'Neste código o usuário digita 3 números e a média deles é calculada.'];
  $indice =0;
 ?>

<!DOCTYPE html>
<html>

  <head>

  <title>Projeto</title>

  <style type="text/css">*{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body{
      background-color: black;
    }
    header{
      background-color: #933;
      padding: 8px 10px;
      text-align: center;
      font-family: cursive;

    }
    a{
      display: inline-block;
      margin: 0px 10px;
      color: white;
      font-size: 20px;
    }
    section{
      font-family: monospace;
      margin: 20px auto;
      padding: 0 2%;
    }
    h2{
      background-color: #246;
      color: white;
      padding: 8px 10px;
      text-align: center;
    }

    .img1{
      border: 3px solid blue;
      width: 30%;
      margin-left: 200px;
      margin-bottom: 10px;
      border-radius: 10px;


    }
    .img2{
      border: 3px solid green;
      width: 30%;
      margin-left: 300px;
      margin-bottom: 10px;
      border-radius: 10px;

    }
    .Div1{
      background-color: blue;
      max-width: 950px;
      text-align: center;
      font-size: 18px;
      color: white;

    }
    .Div2{
      background-color: green;
      max-width: 1000px;
      margin-left: 950px;
      margin-top: -20px;
      text-align: center;
      font-size: 18px;
      color: white;
    }
    .Div3{
      background-color: purple;
      font-size: 18px;
      color: white;

    }

  </style>

</head>

<body>
  <header>
    <?php
      foreach ($guias as $key) {
        echo '<a href="?page='.$key.'">  '.$key.'</a>';

      }
    ?>
  </header>

  <section>
    <h2>
      <?php


        $pagina = (isset($_GET['page']) ? $_GET['page'] : 'Início');

        switch ($pagina) {
    case 'Início':
        $indice=0;
        break;
    case 'HTML/CSS':
        $indice=1;
        break;
    case 'SQL (Oracle Live Server)':
        $indice=2;
        break;
    case 'PHP':
        $indice=3;
        break;
    case 'C':
        $indice=4;
        break;
    case 'Python':
        $indice=5;
        break;
}

        echo $pagina;

      ?>

    </h2>

  </section>

  <img src="<?php echo $imagens[$indice] ?>" class ="img1">
  <img src="<?php echo $imagens2[$indice]?>" class ="img2">

<div class="Div1">

    <?php echo $textos[$indice] ?>

</div>

<div class="Div2">

    <?php echo $textos2[$indice] ?>


</div>
<br>
<div class="Div3">


</div>

</body>

</html>
