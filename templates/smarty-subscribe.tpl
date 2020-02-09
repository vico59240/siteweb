{if isset($SESSION['statut'])==0}
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
{elseif isset($inscription_reussie) and $inscription_reussie == 1}

    Vous etes inscrit 

{else}
    Vous etes déja connecté

{/if}