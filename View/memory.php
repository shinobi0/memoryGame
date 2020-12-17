<?php
require_once('header.php');
?>

        <h1 class="page-title text-center">Jeu de mémoire</h1>
        <hr class="w-25">
        <div id="start" class="overlay-text visible">
          <a href="#">Cliquer pour jouer</a> 
        </div>
        <h2 class="text-center">Les 3 derniers scores au TOP</h2>

        <?php
          foreach ($donnees  as $score) :
        ?>
            <p class="text-center" id="resultat">-  <?= $score->resultat ?> secondes</p>
        <?php
          endforeach;
        ?>

        <div class="container mx-auto">
          <div id="compteur"></div>
            <section class="memory-game">
              <div class="memory-card" data-framework="ananas">
                <img class="front-face" src="View/img/ananas.png" alt="ananas" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="ananas">
                <img class="front-face" src="View/img/ananas.png" alt="ananas" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="banane">
                <img class="front-face" src="View/img/banane.png" alt="banane" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="banane">
                <img class="front-face" src="View/img/banane.png" alt="banane" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="cerise">
                <img class="front-face" src="View/img/cerise.png" alt="cerise" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="cerise">
                <img class="front-face" src="View/img/cerise.png" alt="cerise" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="fraise">
                <img class="front-face" src="View/img/fraise.png" alt="fraise" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="fraise">
                <img class="front-face" src="View/img/fraise.png" alt="fraise" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="pasteque">
                <img class="front-face" src="View/img/pasteque.png" alt="pasteque" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="pasteque">
                <img class="front-face" src="View/img/pasteque.png" alt="pasteque" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="peche">
                <img class="front-face" src="View/img/peche.png" alt="peche" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
              <div class="memory-card" data-framework="peche">
                <img class="front-face" src="View/img/peche.png" alt="peche" />
                <img class="back-face" src="View/img/colorful.png" alt="Badge" />
              </div>
          
            </section><!--.section-->
        </div><!--.container-->
  <?php
require_once('footer.php');


