<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-09 21:50:37
  from 'C:\xampp\htdocs\bootstrap\smarty\templates\smarty-consulter_articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e40709dd7d321_79579369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24a2cc70ea8957bd2af35aeb36551548ba2e83c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bootstrap\\smarty\\templates\\smarty-consulter_articles.tpl',
      1 => 1581281433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e40709dd7d321_79579369 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="controle.js"><?php echo '</script'; ?>
>

<tableau>
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
&nombre_article_page=<?php echo $_smarty_tpl->tpl_vars['nombre_article_page']->value;?>
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
<form method="post" action="consulter_articles.php">
    Nombre d'article par page : <select name="nombre_article_page" value="1000"><option><?php echo $_smarty_tpl->tpl_vars['nombre_article_page']->value;?>
</option> <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['nombre_article']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nombre_article']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?> <?php if ($_smarty_tpl->tpl_vars['x']->value != $_smarty_tpl->tpl_vars['nombre_article_page']->value) {?><option><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</option><?php }?> <?php }
}
?></select>
    <input type="hidden" name="consulter" value="1"></input>
    <button type="submit" name="bouton" >OK</button>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['donnees']->value)) {?>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if (isset($_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value])) {
for ($_foo=true;isset($_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]); $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <form method="post" action="consulter_articles.php">
                        <h1 class="mt-5">Titre :<input type="text" name="titre_article" value=<?php echo $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['titre'];?>
></input></h1>
                        <br>
                        Texte :<textarea type="text" name="texte_article" rows="4" cols="40"><?php echo $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['texte'];?>
</textarea>
                        <br>
                        <br>
                        Publié ? :<input type="checkbox" name="publie" value="1">Oui
                        <input type="checkbox" name=""publie" value="0">Non
                        <br>
                        <?php if (isset($_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['commentaire'])) {?>
                            <br>
                            Commentaire:<textarea disabled ="disabled" type="text" name="com" rows="4" cols="40"><?php echo $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['commentaire'];?>
</textarea>
                            <br>
                        <?php }?>
                        <input type="hidden" name="consulter" value="1">
                        <input type="hidden" name="id_article_modifier" value=<?php echo $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
>
                        </input>
                        <button type="submit" name="bouton">Modifier l'article</button>
                    </form>
                    <form method="post" action="consulter_articles.php">
                        <input type="hidden" name="id_article_supprimer" value=<?php echo $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
>
                        <button type="submit" name="bouton">Supprimer l'article</button>
                    </form>

                    <form method="post" action="consulter_articles.php" name="form_commentaire">
                        <?php if (isset($_smarty_tpl->tpl_vars['post']->value['commenter']) && $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['id'] == $_smarty_tpl->tpl_vars['post']->value['id_article']) {?>
                            <br>
                            Adresse mail :<input type="email" name="adresse_mail" cols="35" value=<?php if (isset($_smarty_tpl->tpl_vars['SESSION']->value['mail'])) {?> <?php echo $_smarty_tpl->tpl_vars['SESSION']->value['mail'];?>
 <?php }?>></input>
                            <br>
                            <br>
                            Username :<input type="username" name="username" cols="35" value=<?php if (isset($_smarty_tpl->tpl_vars['SESSION']->value['user'])) {?> <?php echo $_smarty_tpl->tpl_vars['SESSION']->value['user'];?>
 <?php }?>></input>
                            <br>
                            <br>
                            Commentaire :<textarea type="text" name="commentaire" rows="4" cols="40"></textarea>
                            <br>

                        <?php }?>
                        <input type="hidden" name="id_article" value=<?php echo $_smarty_tpl->tpl_vars['donnees']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
>
                        <input type="hidden" name="nombre_article_page" value=<?php echo $_smarty_tpl->tpl_vars['nombre_article_page']->value;?>
>
                        <input type="hidden" name="commenter" value="1">
                        <?php if (!isset($_smarty_tpl->tpl_vars['post']->value['commenter'])) {?>
                            <button type="submit" name="bouton">Commenter l'article</button>
                        <?php } else { ?>
                            <button type="button" name="bouton" onclick="controle(document)">Commenter l'article</button>
                        <?php }?>
                    </form>
                </div>
            </div>
        </div>
    <?php }
}
}
}
}
