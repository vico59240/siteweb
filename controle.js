
function controle(document) {

    if (document.forms["form_commentaire"].commentaire.value == "" || document.forms["form_commentaire"].adresse_mail.value == "" || document.forms["form_commentaire"].username.value == "") {
        alert('Tous les champs doivent être remplis');
    } 
    else {

        document.forms["form_commentaire"].method = "post";
        document.forms["form_commentaire"].action = "consulter_articles.php";
        document.forms["form_commentaire"].submit();
    }
}



