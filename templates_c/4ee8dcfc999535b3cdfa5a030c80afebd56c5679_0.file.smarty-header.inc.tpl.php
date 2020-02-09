<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-09 21:50:36
  from 'C:\xampp\htdocs\bootstrap\smarty\templates\smarty-header.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e40709c9934d7_57212262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee8dcfc999535b3cdfa5a030c80afebd56c5679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bootstrap\\smarty\\templates\\smarty-header.inc.tpl',
      1 => 1581281433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e40709c9934d7_57212262 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bare - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a></a>
                <a class="navbar-brand"></a>
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="ajouter_articles.php">Ajouter artciles
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form method="post" action="index.php">
                                <a class="nav-link" href="consulter_articles.php">Consulter les articles
                                    <span class="sr-only">(current)</span>
                                </a>
                            </form>
                        </li>
                        <?php if (!isset($_smarty_tpl->tpl_vars['SESSION']->value['statut'])) {?>
                            <li class="nav-item">
                                <form method="post" action="index.php">
                                    <a class="nav-link" href="connection.php">Connection
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </form>
                            </li>
                        <?php }?>
                        <li class="nav-item">
                            <form method="post" action="index.php">
                                <a class="nav-link" href="subscribe.php">S'inscrire
                                    <span class="sr-only">(current)</span>
                                </a>
                            </form>
                        </li>
                        <?php if (isset($_smarty_tpl->tpl_vars['SESSION']->value['statut'])) {?>
                            <form method="post" action="index.php">
                                <button type="submit" name="disconnect" value ="1">Se déconnecter</button>
                            </form>
                        <?php }?>
                    </ul>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['SESSION']->value['prenom']) && isset($_smarty_tpl->tpl_vars['SESSION']->value['nom'])) {?>
                    Bonjour <?php echo $_smarty_tpl->tpl_vars['SESSION']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['SESSION']->value['nom'];?>
 

                <?php }?>
            </div>
        </nav>

<?php }
}
