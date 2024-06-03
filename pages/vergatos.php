<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/vergatos/vergatos.css">
  <link rel="stylesheet" href="../styles/index/header.css">
  <link rel="stylesheet" href="../styles/index/footer.css">
  <link rel="stylesheet" href="../styles/global.css">
  <script src="../scripts/modal.js" defer></script>
  <title>UNICAT - Gatos</title>
</head>
<body>
  <?php 
  include("config.php");
  $sql = "SELECT * FROM gatos";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;
  ?>
  <header class="header-index">
    <img src="../images/UNICAT.svg" alt="">
    <nav class="nav-index">
      <a href="../index.html" class="text-nav">Sobre a UNICAT </a>
      <a href="../index.html" class="text-nav">Quero ajudar</a>
      <a href="../index.html" class="text-nav">Duvidas?</a>
      <a href="../index.html" class="text-nav">FeedBack</a>
      <a href="../index.html" class="text-nav">Contato</a>
    </nav>
    <a href="" class="button-nav">Quero adotar</a>
  </header>
  <main>
    <section class="section-cats">
      <div class="wrapper-cats">
        <?php
        if($qtd > 0) {
          while($row = $res->fetch_object()) {
            print "
            <div class='card-cat'>
              <img src='{$row->imagem}' class='img-card-cat' alt=''>
              <div class='container-infos-cat'>
                <div class='infos-cat-1'>
                  <span class='name-cat'>{$row->nome}</span>
                  <div class='actions-card'>
                    <img src='../images/favorite_24dp_FILL0_wght400_GRAD0_opsz24.svg'>
                  </div>
                </div>
                <div class='infos-cat-2'>
                  <span class='location-cat'>Unipê - centro universitário de joão pessoa</span>
                  <button class='button-card-cat' id='{$row->id}'>Ver mais</button>
                  <dialog class='modal' id='{$row->id}'>
                    <div class='container-dialog'>
                    <button class='close-dialog' id='closeDialog'>X</button>
                      <img class='image-cat-dialog' src='{$row->imagem}'>
                      <div class='infos-dialog'>
                        <div class='dialog-name'>
                          <div class='name-and-sex-dialog'>
                            <span class='name-dialog'>{$row->nome}</span>
                            <span class='sex-name'>{$row->sexo}</span>
                          </div>
                          <img class='emoji-dialog' src='../images/favorite_24dp_FILL0_wght400_GRAD0_opsz24.svg'>
                        </div>
                        <div class='dialog-infos-1'>
                          <div class='name-and-value'>
                            <span class='propriedade'>Peso</span>
                            <span class='value-propriedade'>{$row->peso}</span>
                          </div>
                          <div class='name-and-value'>
                            <span class='propriedade'>Idade</span>
                            <span class='value-propriedade'>{$row->idade}</span>
                          </div>
                          <div class='name-and-value'>
                            <span class='propriedade'>Sexo</span>
                            <span class='value-propriedade'>{$row->sexo}</span>
                          </div>
                          <div class='name-and-value'>
                            <span class='propriedade'>Porte</span>
                            <span class='value-propriedade'>{$row->porte}</span>
                          </div>
                          <div class='name-and-value'>
                            <span class='propriedade'>Personalidade</span>
                            <span class='value-propriedade'>{$row->personalidade}</span>
                          </div>
                        </div>
                      <div>
                    </div>
                  </dialog>
                </div>
              </div>
            </div>
            ";
          };
        } else {
          print '<p class="alert alert-danger">Não encontrou resultados</p>';
        }
        ?>
      </div>
    </section>
  </main>
  <footer class="footer-index">
    <section class="container-footer">
      <div class="links-footer">
        <div class="links-footer-1">
          <h4>Informações</h4>
          <ul>
            <li><a href="">Sobre nós</a></li>
            <li><a href="">Como Ajudar</a></li>
            <li><a href="">Doar</a></li>
            <li><a href="">Voluntariado</a></li>
            <li><a href="">Eventos</a></li>
            <li><a href="">Notícias</a></li>
            <li><a href="">Contato</a></li>
          </ul>
        </div>
        <div class="links-footer-2">
          <h4>Políticas</h4>
          <ul>
            <li><a href="">Política de Privacidade</a></li>
            <li><a href="">Termos de Uso</a></li>
            <li><a href="">Perguntas Frequentes</a></li>
            <li><a href="">Depoimentos</a></li>
            <li><a href="">Parceiros </a></li>
          </ul>
        </div>
        <div class="links-footer-3">
          <h4>Redes Sociais</h4>
          <ul>
            <li><a href="">Facebook</a></li>
            <li><a href="">Instagram</a></li>
            <li><a href="">Twitter</a></li>
          </ul>
        </div>
        <div class="links-foooter-4">
          <h4>Localização</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15834.840503741078!2d-34.856092!3d-7.159473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acc28746445197%3A0x3890b322e82f6426!2sCT%20-%20Complexo%20de%20Tecnologia%20-%20UNIP%C3%8A!5e0!3m2!1spt-BR!2sbr!4v1717108684171!5m2!1spt-BR!2sbr" width="270" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border-radius: 8px;"></iframe>
        </div>
      </div>
    </section>
    <div class="container-copyright">
      <span class="text-copyright"><img src="CAT.SVG" alt="">© 2024 UNICAT - Fundação de Adoção e Tratamento para Gatos Abandonados | Todos os Direitos Reservados.</span>
    </div>
  </footer>
</body>
</html>