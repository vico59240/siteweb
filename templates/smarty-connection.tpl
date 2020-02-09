{if !isset($SESSION['statut'])} 
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
    
{else}

    Vous etes deja connecter
  
{/if}

