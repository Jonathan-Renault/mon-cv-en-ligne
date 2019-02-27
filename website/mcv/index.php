<?php
  include('inc/pdo.php');
  include('inc/fonctions.php');
  include('inc/connexion.php');
  include('inc/inscription.php');
  $title = 'ACCUEIL';

  include('inc/header.php');


 ?>

    <form>
        <input type="button" value="Pour vous connecter en tant que admin" onClick="Message()">
    </form>
    <script type="text/javascript">
        function Message() {
            var msg="Mail : admin@admin.com Mot de passe : admin";
            console.log(msg)
            alert(msg);
        }
    </script>
 <div class="contenu">

   <div class="flexslider">
     <ul class="slides">
       <li>
         <img src="assets/image/image1.jpg" alt="Image1 slider" />
       </li>
       <li>
         <img src="assets/image/image2.jpg" alt="Image2 slider">
       </li>
       <li>
         <img src="assets/image/photo3.jpg" alt="Image3 Slider">
       </li>
     </ul>
   </div>


   <div class="inscription">
     <div class="login-page">
       <div class="form">

         <form class="register-form" action="" method="post">
           <input type="text" name="nom" placeholder="Nom" value="<?php value('nom') ?>" />
           <span><?php spanError($error_reg,'nom') ?></span>

           <input type="text" name="prenom" placeholder="Prénom" value="<?php value('prenom') ?>" />
           <span><?php spanError($error_reg,'prenom') ?></span>

           <input type="text" name="mail" placeholder="Mail" value="<?php value('mail') ?>">
           <span><?php spanError($error_reg,'mail') ?></span>

           <input type="password" name="pwd1" placeholder="Mot de passe">
           <span><?php spanError($error_reg,'pwd1') ?></span>

           <input type="password" name="pwd2" placeholder="Confirmation du mot de passe">
           <span><?php spanError($error_reg,'pwd1') ?></span>

           <input class="button" type="submit" name="submit_register" value="Créer">


           <p class="message">Déjà inscrit ? <a href="#">Connectez-vous</a></p>

         </form>


         <form class="login-form" action="" method="post">
           <input type="text" name="mail"  placeholder="Mail"/>
           <span><?php spanError($error_log,'mail') ?></span>
           <input type="password" name="pwd" placeholder="Mot de passe"/>
           <span><?php spanError($error_log,'pwd') ?></span>
           <input class="button" type="submit" name="submit_login" value="Connexion">
           <p class="message">Pas de compte ? <a href="#">Créer un compte</a></p>
           <p class="pwdoublie"> <a href="mdpoublie.php">Mot de passe oublié</a></p>
         </form>
       </div>
     </div>
   </div>

 </div>
<div class="clear"></div>






<div class="comment-users">
    <h2 id="fittext3">Commentaires de nos utilisateurs satisfaits.</h2>
        <div class="commentaires">

          <div class="commentaire">
            <p>Michel</p>
            <p>Je trouve ce service utile et d'utilité publique.</p>
            <p>Inscrit depuis le 10/05/2017</p>
          </div>

          <div class="commentaire">
            <p>Berénice</p>
            <p>Je l'utilise pour mes enfants, plus de risque d'oublier.</p>
            <p>Inscrite depuis le 21/09/2017</p>
          </div>

          <div class="commentaire">
            <p>Rashid</p>
            <p>Simple et utile, je le recommande à tous mes amis.</p>
            <p>Inscrit depuis le 01/02/2018</p>
          </div>

          <div class="commentaire">
            <p>Joseph</p>
            <p>Super Cool, l'equipe du site à l'air genial.</p>
            <p>Inscrit depuis le 30/10/2017</p>
          </div>


        </div>
    <div class="clear"></div>
</div>



<?php include('inc/footer.php');
