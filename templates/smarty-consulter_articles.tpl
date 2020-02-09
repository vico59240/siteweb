
<script type="text/javascript" src="controle.js"></script>

<tableau>
<div class="row">
    <div class="col-12">
        <nav>
            <ul class="pagination pagination-lg">

                
                {for $index=1 to $nombre_page}
                <li class="page-item"><a class="page-link" href="?page={$index}&nombre_article_page={$nombre_article_page}">{$index}</a></li>
                {/for}
            </ul>
       </nav>
    </div>
</div>
</tableau>
<form method="post" action="consulter_articles.php">
    Nombre d'article par page : <select name="nombre_article_page" value="1000"><option>{$nombre_article_page}</option> {for $x=1 to $nombre_article} {if $x!=$nombre_article_page}<option>{$x}</option>{/if} {/for}</select>
    <input type="hidden" name="consulter" value="1"></input>
    <button type="submit" name="bouton" >OK</button>
</form>
    
{if isset($donnees)}
 {for $i=0;isset($donnees[$i]);$i++}
    <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <form method="post" action="consulter_articles.php">
            <h1 class="mt-5">Titre :<input type="text" name="titre_article" value={$donnees[$i]['titre']}></input></h1>
            <br>
            Texte :<textarea type="text" name="texte_article" rows="4" cols="40">{$donnees[$i]['texte']}</textarea>
            <br>
            <br>
            Publié ? :<input type="checkbox" name="publie" value="1">Oui
            <input type="checkbox" name=""publie" value="0">Non
            <br>
            {if isset($donnees[$i]['commentaire'])}
            <br>
            Commentaire:<textarea disabled ="disabled" type="text" name="com" rows="4" cols="40">{$donnees[$i]['commentaire']}</textarea>
            <br>
            {/if}
            <input type="hidden" name="consulter" value="1">
            <input type="hidden" name="id_article_modifier" value={$donnees[$i]['id']}>
            </input>
            <button type="submit" name="bouton">Modifier l'article</button>
        </form>
            <form method="post" action="consulter_articles.php">
            <input type="hidden" name="id_article_supprimer" value={$donnees[$i]['id']}>
            <button type="submit" name="bouton">Supprimer l'article</button>
            </form>
            
       <form method="post" action="consulter_articles.php" name="form_commentaire">
            {if isset($post['commenter']) and $donnees[$i]['id'] == $post['id_article']}
                <br>
                Adresse mail :<input type="email" name="adresse_mail" cols="35" value={if isset($SESSION['mail'])} {$SESSION['mail']} {/if}></input>
                <br>
                <br>
                Username :<input type="username" name="username" cols="35" value={if isset($SESSION['user'])} {$SESSION['user']} {/if}></input>
                <br>
                <br>
                Commentaire :<textarea type="text" name="commentaire" rows="4" cols="40"></textarea>
                <br>
                
            {/if}
            <input type="hidden" name="id_article" value={$donnees[$i]['id']}>
            <input type="hidden" name="nombre_article_page" value={$nombre_article_page}>
            <input type="hidden" name="commenter" value="1">
            {if !isset($post['commenter'])}
                <button type="submit" name="bouton">Commenter l'article</button>
            {else}
            <button type="button" name="bouton" onclick="controle(document)">Commenter l'article</button>
            {/if}
       </form>
      </div>
    </div>
  </div>
    {/for}
 {/if}