<?php

require_once("index.php");



if(!empty($_POST['disconnect'])) //Si $_POST['disconnect'] existe
{
    setcookie('sid','',-1); //On supprime le cookie
    session_destroy(); //On détruit les variables sessions
}

if(isset($_POST['id_article_modifier'])){ // Si $_POST['id_article_modifier'] existe
    modifier_article($bdd,$_POST['id_article_modifier'],$_POST['texte_article'],$_POST['titre_article']); //On execute la fonction modifier_article()
}






?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

