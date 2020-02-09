<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-09 21:50:39
  from 'C:\xampp\htdocs\bootstrap\smarty\templates\smarty-subscribe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e40709f96eba5_97461534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aed37b9f4c3192232b8bdf8dc70fa6af251e044' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bootstrap\\smarty\\templates\\smarty-subscribe.tpl',
      1 => 1581281433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e40709f96eba5_97461534 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['SESSION']->value['statut']) == 0) {?>
    <br>
    <form method="post" action="subscribe.php">
        <div class="col-lg-12 text-center">
            <br>
            Nom : <input type="text" name ="nom" >
            <br>
            <br>
            Prenom : <input type="text" name="prenom">
            <br>
            <br>
            Username : <input type="username" name ="user">
            <br>
            <br>
            Mail : <input type="email" name="mail">
            <br>
            <br>
            Password : <input type="password" name="mdp">
            <br>
            <br>
            <button type="submit" text="ok" name="subscribe" value="1">S'enregistrer</button>
        </div>
    </form>
<?php } elseif (isset($_smarty_tpl->tpl_vars['inscription_reussie']->value) && $_smarty_tpl->tpl_vars['inscription_reussie']->value == 1) {?>

    Vous etes inscrit 

<?php } else { ?>
    Vous etes déja connecté

<?php }
}
}
