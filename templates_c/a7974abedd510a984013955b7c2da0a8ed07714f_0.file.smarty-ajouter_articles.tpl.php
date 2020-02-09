<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-09 21:50:40
  from 'C:\xampp\htdocs\bootstrap\smarty\templates\smarty-ajouter_articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4070a0d93fb9_95568860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7974abedd510a984013955b7c2da0a8ed07714f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bootstrap\\smarty\\templates\\smarty-ajouter_articles.tpl',
      1 => 1581281433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4070a0d93fb9_95568860 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Ajouter un article</h1>
            <form method="post" action="ajouter_articles.php" enctype="multipart/form-data">
                Titre : <input type="text" name="titre">
                <br>
                <br>
                Texte :<input type="text" name="texte">
                <br>
                <br>
                Publié ? :<input type="checkbox" name="publie" value="1">Oui
                <input type="checkbox" name=""publie" value="0">Non
                <br>
                <br>
                <input type="file" name="image">
                <input type="submit" name="submit" value="valider">
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
