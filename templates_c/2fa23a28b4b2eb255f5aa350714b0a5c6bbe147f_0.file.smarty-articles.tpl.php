<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-10 13:32:42
  from 'C:\xampp\htdocs\bootstrap\smarty\templates\smarty-articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e186eea69ffa2_47570707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fa23a28b4b2eb255f5aa350714b0a5c6bbe147f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bootstrap\\smarty\\templates\\smarty-articles.tpl',
      1 => 1576855798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e186eea69ffa2_47570707 (Smarty_Internal_Template $_smarty_tpl) {
?><tableau>
<div class="row">
    <div class="col-12">
        <nav>
            <ul class="pagination pagination-lg">

                
                <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? $_smarty_tpl->tpl_vars['nombre_page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nombre_page']->value)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a></li>
                <?php }
}
?>
            </ul>
       </nav>
    </div>
</div>
</tableau>
<form method="post" action="index.php">
    Nombre d'article par page : <select name="nombre_article_page" value="<?php echo '<?=';?>
nombre_article_page<?php echo '?>';?>
"> <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['nombre_article']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nombre_article']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?><option><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</option><?php }
}
?></select>
    <input type="hidden" name="consulter" value="1"></input>
    <button type="submit" name="bouton" >OK</button>
</form><?php }
}
