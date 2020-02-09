<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-07 16:59:28
  from 'C:\xampp\htdocs\bootstrap\smarty\templates\smarty-connection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3d89607c03a0_51736944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8771768ac9f55ac9fbe3e0ad17cb3b4ddc5d6f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bootstrap\\smarty\\templates\\smarty-connection.tpl',
      1 => 1581091059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d89607c03a0_51736944 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['SESSION']->value['statut'])) {?>
<form method='post' action='connection.php'>
    <div class='col-lg-12 text-center'>
        <br><br>
    Username : <input type='username' name ='user'>
    <br><br>
    Password : <input type='password' name='mdp'>
    <br><br>
    <input type='checkbox' name='stay_connected' value='1'>Rester connecter</input>
    <br><br>
    <button type='submit' text='ok' name='submit'>Se connecter</button>
    <br><br>
    </div>
</form>
    
<?php } else { ?>

    Vous etes deja connecter
  
<?php }?>

<?php }
}
