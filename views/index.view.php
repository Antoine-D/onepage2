

<div class="row">
    <div class="side">
        <h1>Hairapp</h1>
    </div>
    <div class="main">
      <h1 class="text-image-h1">Votre Salon</h1>

      <div class="center form_register">
          <div class="row">
              <?php if( $formUsed == "login"): ?>
                <h1 id="title-rdv" class="title col-l-12">Se Connecter</h1>
              <?php else: ?>
                <h1 id="title-rdv" class="title col-l-12">S'inscrire</h1>
              <?php endif; ?>
          </div>
          <div class="row">

              <?php $this->addModal( $formUsed, $config ); ?>


                  <?php if( isset( $errors ) ): ?>
                    <ul class="errors col-l-12">
                      <?php foreach ( $errors as $error ): ?>
                          <li>
                              <div class="div-errors danger col-l-12">
                                  <p><strong> Warning ! </strong><?php echo $error;?></p>
                              </div>

                          </li>
                      <?php endforeach; ?>
                      </ul>
                  <?php endif; ?>



                  <?php if( isset( $success ) ): ?>
                    <ul class="errors col-l-12">
                          <li>
                              <div class="div-errors success col-l-12">
                                  <p><strong> Success ! </strong><?php echo $success;?></p>
                              </div>

                          </li>
                    </ul>
                  <?php endif; ?>


          </div>
          <a class="mdp" href="#">Mot de passe oublié?</a>
          <hr>

         <div class="row">

             <div class="col-l-12"><p class="center">
                     <span class="span"> Vous n'avez pas de compte ? </span>
                     <a  class="mdp" href="<?php echo DIRNAME;?>home/getHome?form=signin">Inscription</a>
                 </p>
             </div>

         </div>



      </div>
    </div>
</div>
</body>

<script src="../public/js/home.js"></script>
